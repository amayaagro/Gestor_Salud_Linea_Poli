<!-- Mensajes no Leidos -->
<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from doctors where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrador | Gestion de Mensajes no Leidos</title>

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
                                <h1 class="mainTitle">Administrador | Gestion de Mensajes no Leidos</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Administrador</span>
                                </li>
                                <li class="active">
                                    <span>Mensajes no Leidos</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <!-- Fin del Titulo de la Página -->
                    <!-- Inicio Ejemplo Básico -->
                    <div class="container-fluid container-fullw bg-white">


                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="over-title margin-bottom-15">Gestión <span class="text-bold">Mensajes no
                                        Leidos</span></h5>
                                <table class="table table-hover" id="sample-table-1">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th>Nombre Contacto</th>
                                            <th class="hidden-xs">Correo</th>
                                            <th>Teléfono </th>
                                            <th>Mensaje </th>
                                            <th>Respuesta</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$sql=mysqli_query($con,"select * from tblcontactus where IsRead is null");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

                                        <tr>
                                            <td class="center"><?php echo $cnt;?>.</td>
                                            <td class="hidden-xs"><?php echo $row['fullname'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['contactno'];?></td>
                                            <td><?php echo $row['message'];?></td>

                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                    <a href="query-details.php?id=<?php echo $row['id'];?>"
                                                        class="btn btn-transparent btn-lg" title="View Details"><i
                                                            class="fa fa-file"></i></a>
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