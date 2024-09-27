<!-- Header -->
<?php error_reporting(0);?>
<header class="navbar navbar-default navbar-static-top">
					<!-- Inicio de la Barra de Navegación -->
					<div class="navbar-header">
						<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="ti-align-justify"></i>
						</a>
						<a class="navbar-brand" href="#">
							<h2 style="padding-top:20% ">GSL</h2>
						</a>
						<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
							<i class="ti-align-justify"></i>
						</a>
						<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<span class="sr-only">Menú de Navegación</span>
							<i class="ti-view-grid"></i>
						</a>
					</div>
					<!-- Fin de la Barra de Navegación -->
					<!-- Inicio Colapso Menú de Navegación -->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-right">
							<!-- Inicio Titulo Menú Desplegable -->
								<li  style="padding-top:2% ">
								<h2>Gestor de Salud en Línea</h2>
							</li>
						
						
							<li class="dropdown current-user">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets/images/images.jpg"> <span class="username">



									<?php $query=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['fullName'];
}
									?> <i class="ti-angle-down"></i></i></span>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="edit-profile.php">
											Mi Perfil
										</a>
									</li>
								
									<li>
										<a href="change-password.php">
											Cambiar la Clave
										</a>
									</li>
									<li>
										<a href="logout.php">
											Cerrar Sesión
										</a>
									</li>
								</ul>
							</li>
							<!-- Fin Inicio Titulo Menú Desplegable -->
						</ul>
						<!-- Inicio del Alternador para Dispositivos Moviles -->
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						<!-- Fin del Alternador para Dispositivos Moviles -->
					</div>
				
					
					<!-- Fin Titulo Menú Desplegable -->
				</header>
