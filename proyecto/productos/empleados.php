<?php
    $txtId = (isset($_POST['txtId'])) ? $_POST['txtId'] : "";
    $Nombre = (isset($_POST['Nombre'])) ? $_POST['Nombre'] : "";
    $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "";
    $precio = (isset($_POST['precio'])) ? $_POST['precio'] : "";
    $stock= (isset($_POST['stock'])) ? $_POST['stock'] : "";
    $txtFoto = (isset($_FILES["txtFoto"]["name"])) ? $_FILES["txtFoto"]["name"] : "";

    $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

    $error = array();

    $accionAgregar = "";
    $accionModificar = $accionEliminar = $accionCancelar = "disabled";
    $mostrarModal = false;

    include("Conexion/conexion.php");

    switch($accion){
        case "btnAgregar":

            if($Nombre==""){
                $error['Nombre']="Escribe el nombre";
            }
            if($descripcion==""){
                $error['descripcion'] = "Escribe tu apellido paterno";
            }
            if($precio==""){
                $error['precio'] = "Escribe tu apellido materno";
            }
            if($stock==""){
                $error['stock'] = "Escribe el stock";
            }

            if(count($error)>0){
                $mostrarModal = true;
                break;
            }

            $sentencia = $pdo->prepare("INSERT INTO productos(Nombre,descripcion,precio,stock,Foto) VALUES (:Nombre, :descripcion, :precio, :stock, :Foto)");
            $sentencia->bindParam(':Nombre', $Nombre);
            $sentencia->bindParam(':descripcion', $descripcion);
            $sentencia->bindParam(':precio', $precio);
            $sentencia->bindParam(':stock', $stock);
            $fecha = new DateTime();
            $nombreArchivo = ($txtFoto!="")?$fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"imagen.png";
            $tmpFoto = $_FILES["txtFoto"]["tmp_name"];
            if($tmpFoto!=""){
                move_uploaded_file($tmpFoto, "productos/Imagenes/" .$nombreArchivo);
            }
            $sentencia->bindParam(':Foto', $nombreArchivo);
            $sentencia->execute();
            header('Location: productoindex.php');
        break;

        case "btnModificar":
            $sentencia = $pdo->prepare("UPDATE productos SET Nombre=:Nombre, descripcion=:descripcion , precio=:precio ,stock=:stock  WHERE Id=:id");
            $sentencia->bindParam(':Nombre', $Nombre);
            $sentencia->bindParam(':descripcion', $descripcion);
            $sentencia->bindParam(':precio', $precio);
            $sentencia->bindParam(':stock', $stock);
            $sentencia->bindParam(':id', $txtId);
            $sentencia->execute();

            $fecha = new DateTime();
            $nombreArchivo = ($txtFoto!="")?$fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"imagen.png";
            $tmpFoto = $_FILES["txtFoto"]["tmp_name"];
            if($tmpFoto!=""){
                // subimos la foto al servidor
                move_uploaded_file($tmpFoto, "productos/Imagenes/" .$nombreArchivo);
                // eliminamos la fotografia actual
                $sentencia = $pdo->prepare("SELECT Foto FROM productos WHERE Id=:id");
                $sentencia->bindParam(':id', $txtId);
                $sentencia->execute();
                $productos = $sentencia->fetch(PDO::FETCH_LAZY);

                if(isset($productos["Foto"])){
                    if(file_exists("productos/Imagenes/".$productos["Foto"])){
                        if($productos['Foto'] != "imagen.png"){
                            unlink("productos/Imagenes/".$productos["Foto"]);
                        }
                    }
                }
                // actualizamos el link de la foto subida
                $sentencia = $pdo->prepare("UPDATE productos SET Foto=:Foto  WHERE Id=:id");
                $sentencia->bindParam(':Foto', $nombreArchivo);
                $sentencia->bindParam(':id', $txtId);
                $sentencia->execute();
                header('Location: productoindex.php');
            }

            
        break;

        case "btnEliminar":
            $sentencia = $pdo->prepare("SELECT Foto FROM productos WHERE Id=:id");
            $sentencia->bindParam(':id', $txtId);
            $sentencia->execute();
            $productos = $sentencia->fetch(PDO::FETCH_LAZY);

            if(isset($productos["Foto"])&&($productos["Foto"]!="imagen.png")){
                if(file_exists("productos/Imagenes/".$productos["Foto"])){
                    unlink("productos/Imagenes/".$productos["Foto"]);
                }
            }

            $sentencia = $pdo->prepare("DELETE FROM productos WHERE Id=:id");
            $sentencia->bindParam(':id', $txtId);
            $sentencia->execute();
            header('Location: productoindex.php');
        break;

        case "btnCancelar":
            header('Location: productoindex.php');
        break;
        case "Seleccionar":
            $accionAgregar = "disabled";
            $accionModificar = $accionEliminar = $accionCancelar = "";
            $mostrarModal = true;

            $sentencia = $pdo->prepare("SELECT * FROM productos WHERE Id=:id");
            $sentencia->bindParam(':id', $txtId);
            $sentencia->execute();
            $productos = $sentencia->fetch(PDO::FETCH_LAZY);

            $Nombre = $productos['Nombre'];
            $descripcion = $productos['descripcion'];
            $precio = $productos['precio'];
            $stock = $productos['stock'];
            $txtFoto = $productos['Foto'];

        break;
    }

    $sentencia = $pdo->prepare("SELECT * FROM productos");
    $sentencia->execute();
    $listaEmpleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>