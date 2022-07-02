<?php
require 'proyecto/productos/empleados.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD con PHP, MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        .row_cabecera {

            background-color: orange;
        }
    </style>
    <div class="main-panel PANEL_HOLA">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h2 class="text-white pb-2">ADMINISTRADOR DE PRODUCTOS</h2>
                    <h5 class="text-white op-7 mb-4">El agradecimiento es la memoria del corazon</h5>
                </div>
                <div class="row">
                    <div class="container ">
                        <div class="contenedor_productos">
                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- Modal -->
                                <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalLabel">Productos</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-row">
                                                    <input type="hidden" required name="txtId" placeholder="" id="txtId" require="" value="<?php echo $txtId; ?>">

                                                    <div class="form-group  col-md-4">
                                                        <label for="Nombre">Nombre:</label>
                                                        <input type="text" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['Nombre'])) ? "is-invalid" : ""; ?>" required name="Nombre" placeholder="NOMBRE DEL PRODUCTO" id="Nombre" require="" value="<?php echo $Nombre; ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo (isset($error['Nombre'])) ? $error['Nombre'] : ""; ?>"
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="descripcion">Descripcion:</label>
                                                        <input type="text" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['descripcion'])) ? "is-invalid" : ""; ?>" required name="descripcion" placeholder="DESCRIPCION DEL PRODUCTO" id="descripcion" require="" value="<?php echo $descripcion; ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo (isset($error['descripcion'])) ? $error['descripcion'] : ""; ?>
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="precio">Precio:</label>
                                                        <input type="number" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['precio'])) ? "is-invalid" : ""; ?>" required name="precio" placeholder="PRECIO SIN DESCUENTO" id="precio" require="" value="<?php echo $precio; ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo (isset($error['precio'])) ? $error['precio'] : ""; ?>
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="stock">stock:</label>
                                                        <input type="number" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['stock'])) ? "is-invalid" : ""; ?>" required name="stock" placeholder="PRECIO CON DESCUENTO" id="stock" require="" value="<?php echo $stock; ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo (isset($error['stock'])) ? $error['stock'] : ""; ?>
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="txtFoto">Foto:</label>
                                                        <?php if ($txtFoto != "") {  ?>
                                                            <br>
                                                            <img class="img-thumbnail rounded mx-auto d-block" width="100px" src="productos/Imagenes/<?php echo $txtFoto; ?>" alt="">
                                                        <?php } ?>
                                                        <input type="file" style="background-color:#dee2e4;color:black;" class="form-control" accept="image/*" name="txtFoto" placeholder="" id="txtFoto" require="" value="<?php echo $txtFoto; ?>">
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button value="btnAgregar" <?php echo $accionAgregar; ?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                                                <button value="btnModificar" <?php echo $accionModificar; ?> class="btn btn-warning" type="submit" name="accion">Modificar</button>
                                                <button value="btnEliminar" onClick="return Confirmar('Desea eliminar el empleado?');" <?php echo $accionEliminar; ?> class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                                                <button value="btnCancelar" <?php echo $accionCancelar; ?> class="btn btn-primary" type="submit" name="accion">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br /><br />
                                <!-- Button trigger modal -->
                                <h1>CARRITO DE COMPRAS</h1>
                            </form>
                            <br /><br />
                            <div class="row row_cabecera">
                                <table class="table table-hover table-bordered text-center">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="tr_cabecera">Foto</th>
                                            <th>Nombre Producto</th>
                                            <th>decripcion</th>
                                            <th>precio</th>
                                            <th>Precio_Descuento</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody> -->

                                    <?php foreach ($listaEmpleados as $empleado) { ?>

                                        <tr>
                                            <td><img class="img-thumbnail" width="100px" src="PROYECTO/productos/Imagenes/<?php echo $empleado['Foto']; ?>" alt="<?php echo $empleado['Foto']; ?>"></td>
                                            <td><?php echo $empleado['Nombre']; ?></td>
                                            <td><?php echo $empleado['descripcion']; ?></td>
                                            <td><?php echo $empleado['precio']; ?></td>
                                            <td><?php echo $empleado['stock']; ?></td>

                                            <td>
                                                <form action="" method="post">
                                                    <input type="hidden" name="txtId" value="<?php echo $empleado['Id']; ?>">
                                                    <input type="submit" class="btn btn-info" value="Seleccionar" name="accion">
                                                    <button value="btnEliminar" onClick="return Confirmar('Desea eliminar el empleado?');" class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>

                                    <?php } ?>

                                    <!-- </tbody> -->
                                </table>
                            </div>
                            <?php if ($mostrarModal) {  ?>
                                <script>
                                    $('#miModal').modal('show');
                                </script>
                            <?php } ?>
                            <script>
                                function Confirmar(Mensaje) {
                                    return (confirm(Mensaje)) ? true : false;
                                }
                            </script>
                        </div>
                    </div>
                </div>


                
</body>

</html>