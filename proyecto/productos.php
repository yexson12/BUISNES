<?php
include 'controlsecion.php';
include 'head.php';
include 'menu.php'
?>
<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    window.location =  "../index.php";
    </script';
    session_destroy();
    exit();
}?>

<!-- End Sidebar -->

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h2 class="text-white pb-2">Hola Yexson</h2>
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
                        <div class="row">
                            <table class="table table-hover table-bordered text-center">
                                <thead class="cabeceratabla">
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
                                        <td class="menutablayexson"><?php echo $empleado['Nombre']; ?>
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
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Estadísticas de usuario</div>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                        <span class="btn-label">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        Exportar
                                    </a>
                                    <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fa fa-print"></i>
                                        </span>
                                        Imprimir
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="min-height: 375px">
                                <canvas id="statisticsChart"></canvas>
                            </div>
                            <div id="myChartLegend"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <div class="card-title">Ventas diarias</div>
                            <div class="card-category">junio 23 de abril</div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="mb-4 mt-2">
                                <h1>$434.58</h1>
                            </div>
                            <div class="pull-in">
                                <canvas id="dailySalesChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary bg-primary-gradient">
                        <div class="card-body">
                            <h4 class="mb-1 fw-bold">progreso</h4>
                            <div id="task-complete" class="chart-circle mt-4 mb-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <h4 class="card-title">Usuarios y localizacion</h4>
                                <div class="card-tools">
                                    <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
                                    <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
                                    <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
                                </div>
                            </div>
                            <p class="card-category">
                                Mapa de la distribución de usuarios en todo el mundo</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="table-responsive table-hover table-sales">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/pe.png" alt="Peru">
                                                        </div>
                                                    </td>
                                                    <td>Peru</td>
                                                    <td class="text-right">
                                                        2.320
                                                    </td>
                                                    <td class="text-right">
                                                        42.18%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/us.png" alt="united states">
                                                        </div>
                                                    </td>
                                                    <td>USA</td>
                                                    <td class="text-right">
                                                        240
                                                    </td>
                                                    <td class="text-right">
                                                        4.36%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/au.png" alt="australia">
                                                        </div>
                                                    </td>
                                                    <td>Australia</td>
                                                    <td class="text-right">
                                                        119
                                                    </td>
                                                    <td class="text-right">
                                                        2.16%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/ru.png" alt="russia">
                                                        </div>
                                                    </td>
                                                    <td>Russia</td>
                                                    <td class="text-right">
                                                        1.081
                                                    </td>
                                                    <td class="text-right">
                                                        19.65%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/cn.png" alt="china">
                                                        </div>
                                                    </td>
                                                    <td>China</td>
                                                    <td class="text-right">
                                                        1.100
                                                    </td>
                                                    <td class="text-right">
                                                        20%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/br.png" alt="brazil">
                                                        </div>
                                                    </td>
                                                    <td>Brasil</td>
                                                    <td class="text-right">
                                                        640
                                                    </td>
                                                    <td class="text-right">
                                                        11.63%
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mapcontainer">
                                        <div id="map-example" class="vmap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

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



        <!-- End Custom template -->
        <?php
        include 'costado.php';
        include 'foot.php';
        ?>