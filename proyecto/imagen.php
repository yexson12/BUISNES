<?php
require 'productos/empleados.php';
?>

<?php
include 'head.php';
include 'menu.php'
?>
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
                                                    <input type="text" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['Nombre'])) ? "is-invalid" : ""; ?>" required name="Nombre" placeholder="" id="Nombre" require="" value="<?php echo $Nombre; ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo (isset($error['Nombre'])) ? $error['Nombre'] : ""; ?>"
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="descripcion">Descripcion:</label>
                                                    <input type="text" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['descripcion'])) ? "is-invalid" : ""; ?>" required name="descripcion" placeholder="" id="descripcion" require="" value="<?php echo $descripcion; ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo (isset($error['descripcion'])) ? $error['descripcion'] : ""; ?>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="precio">Precio:</label>
                                                    <input type="number" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['precio'])) ? "is-invalid" : ""; ?>" required name="precio" placeholder="" id="precio" require="" value="<?php echo $precio; ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo (isset($error['precio'])) ? $error['precio'] : ""; ?>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="stock">stock:</label>
                                                    <input type="number" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['stock'])) ? "is-invalid" : ""; ?>" required name="stock" placeholder="stock" id="stock" require="" value="<?php echo $stock; ?>">
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal">
                                Agregar Registro +
                            </button>
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
                                        <th>stock</th>
                                        <th>stock</th>
                                    </tr>
                                </thead>
                                <!-- <tbody> -->

                                <?php foreach ($listaEmpleados as $empleado) { ?>

                                    <tr>
                                        <td><img class="img-thumbnail" width="100px" src="productos/Imagenes/<?php echo $empleado['Foto']; ?>" alt="<?php echo $empleado['Foto']; ?>"></td>
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


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="productoindex.php">
                                    PRODUCTOS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2022, MADE IN PERU <i class="fa fa-heart heart text-danger"></i> by <a href="index.php">PRODUCTOS</a>
                    </div>
                </div>
            </footer>
        </div>


        <?php
        include 'costado.php';
        include 'foot.php';
        ?>