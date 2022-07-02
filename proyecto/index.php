<?php
include 'controlsecion.php';
include 'head.php';
include 'menu.php'
?>

<!-- End Sidebar -->

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="mt-2 mb-4">
				<h2 class="text-white pb-2">Hola Yexson</h2>
				<h5 class="text-white op-7 mb-4">El agradecimiento es la memoria del corazon</h5>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card card-dark bg-primary-gradient">
						<div class="card-body pb-0">
							<div class="h1 fw-bold float-right">+5%</div>
							<h2 class="mb-2">17</h2>
							<p>Usuarios en linea</p>
							<div class="pull-in sparkline-fix chart-as-background">
								<div id="lineChart"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-dark bg-secondary-gradient">
						<div class="card-body pb-0">
							<div class="h1 fw-bold float-right">-3%</div>
							<h2 class="mb-2">27</h2>
							<p>Usuarios nuevos</p>
							<div class="pull-in sparkline-fix chart-as-background">
								<div id="lineChart2"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-dark bg-success2">
						<div class="card-body pb-0">
							<div class="h1 fw-bold float-right">+7%</div>
							<h2 class="mb-2">213</h2>
							<p>Transaciones</p>
							<div class="pull-in sparkline-fix chart-as-background">
								<div id="lineChart3"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
							</div>
						</div>
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