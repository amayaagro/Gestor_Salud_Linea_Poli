<!-- Historial de Citas -->
<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
?>
<!-- Inicio de la Barra Superior de Navegación -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Historial de Citas | Pacientes</title>

    <link
        href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>

<body>
    <div id="app">
        <?php include('include/sidebar.php');?>
        <div class="app-content">


            <?php include('include/header.php');?>
            <!-- Fin de la Barra Superior de Navegación -->
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- Inicio del Titulo de la Página -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Historial de Citas | Pacientes</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Historial de Citas </span>
                                </li>
                                <li class="active">
                                    <span>Pacientes</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <!-- Fin del Titulo de la Página -->
                    <!-- Inicio Ejemplo Básico -->
                    <div class="container-fluid container-fullw bg-white">


                        <div class="row">
                            <div class="col-md-12">

                                <p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
                                    <?php echo htmlentities($_SESSION['msg']="");?></p>
                                <table class="table table-hover" id="sample-table-1">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th class="hidden-xs">Nombre Médico</th>
                                            <th>Nombre Paciente</th>
                                            <th>Especialidad</th>
                                            <th>Valor de la Consulta</th>
                                            <th>Fecha de la Cita / Hora </th>
                                            <th>Fecha de Creación </th>
                                            <th>Estado </th>
                                            <th>Ver</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$sql=mysqli_query($con,"select doctors.doctorName as docname,users.fullName as pname,appointment.*  from appointment join doctors on doctors.id=appointment.doctorId join users on users.id=appointment.userId ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

                                        <tr>
                                            <td class="center"><?php echo $cnt;?>.</td>
                                            <td class="hidden-xs"><?php echo $row['docname'];?></td>
                                            <td class="hidden-xs"><?php echo $row['pname'];?></td>
                                            <td><?php echo $row['doctorSpecialization'];?></td>
                                            <td><?php echo $row['consultancyFees'];?></td>
                                            <td><?php echo $row['appointmentDate'];?> / <?php echo
												 $row['appointmentTime'];?>
                                            </td>
                                            <td><?php echo $row['postingDate'];?></td>
                                            <td>
                                                <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
{
	echo "Activa";
}
if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
{
	echo "Cancelado por el Paciente";
}

if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
{
	echo "Cancelado por el Doctor";
}

												?></td>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                    <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
{ 

													
echo "Sin Ninguna Acción";
	 } else {

		echo "Cancelado";
		} ?>
                                                </div>
                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="btn-group" dropdown is-open="status.isopen">
                                                        <button type="button"
                                                            class="btn btn-primary btn-o btn-sm dropdown-toggle"
                                                            dropdown-toggle>
                                                            <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                                                            <li>
                                                                <a href="#">
                                                                    Editar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Aceptar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Eliminar
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php 
$cnt=$cnt+1;
											 }?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Fin Ejemplo Básico -->
                </div>
            </div>
        </div>
        <!-- Inicio Footer -->
        <?php include('include/footer.php');?>
        <!-- Fin Footer -->

        <!-- Inicio de la Configuración -->
        <?php include('include/setting.php');?>

        <!-- Fin de la Configuración -->
    </div>
    <!-- Inicio Principal JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <!-- Final Principal JavaScript -->
    <!-- Inicio Principal JavaScript para esta Página Solamente -->
    <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
    <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="vendor/autosize/autosize.min.js"></script>
    <script src="vendor/selectFx/classie.js"></script>
    <script src="vendor/selectFx/selectFx.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <!-- Final Principal JavaScript para esta Página Solamente -->
    <script src="assets/js/main.js"></script>
    <!-- Inicio de controladora de Eventos para Esta Página -->
    <script src="assets/js/form-elements.js"></script>
    <script>
    jQuery(document).ready(function() {
        Main.init();
        FormElements.init();
    });
    </script>
    <!-- Final de controladora de Eventos para Esta Página -->
</body>

</html>