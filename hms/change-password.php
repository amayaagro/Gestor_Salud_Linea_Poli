<!-- Cambiar Contraseña Paciente -->
<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
date_default_timezone_set('South America/Colombia');// Cambiar de acuerdo a zona horaria
$currentTime = date( 'd-m-Y h:i:s A', time () );
if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT password FROM  users where password='".md5($_POST['cpass'])."' && id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update users set password='".md5($_POST['npass'])."', updationDate='$currentTime' where id='".$_SESSION['id']."'");
$_SESSION['msg1']="¡La Contraseña ha sido Cambiada Satisfactoriamente!";
}
else
{
$_SESSION['msg1']="¡La Contraseña Anterior no Conincide!";
}
}
?>
<!-- Inicio de la Barra Superior de Navegación -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Usuario | Cambio de Clave</title>

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
    <script type="text/javascript">
    function valid() {
        if (document.chngpwd.cpass.value == "") {
            alert("¡La Clave Actual está Vacia!");
            document.chngpwd.cpass.focus();
            return false;
        } else if (document.chngpwd.npass.value == "") {
            alert("¡La Nueva Clave está Vacia!");
            document.chngpwd.npass.focus();
            return false;
        } else if (document.chngpwd.cfpass.value == "") {
            alert("¡La Confirmación de la Clave está Vacia!");
            document.chngpwd.cfpass.focus();
            return false;
        } else if (document.chngpwd.npass.value != document.chngpwd.cfpass.value) {
            alert("La Clave y la Confirmación de la Clave no Coindiden!");
            document.chngpwd.cfpass.focus();
            return false;
        }
        return true;
    }
    </script>

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
                                <h1 class="mainTitle">Usuario | Cambio de Clave</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Usuario</span>
                                </li>
                                <li class="active">
                                    <span>Cambio de Clave</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <!-- Fin del Titulo de la Página -->
                    <!-- Inicio Ejemplo Básico -->
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row margin-top-30">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Cambio de Clave</h5>
                                            </div>
                                            <div class="panel-body">
                                                <p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
                                                    <?php echo htmlentities($_SESSION['msg1']="");?></p>
                                                <form role="form" name="chngpwd" method="post"
                                                    onSubmit="return valid();">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">
                                                            Clave actual
                                                        </label>
                                                        <input type="password" name="cpass" class="form-control"
                                                            placeholder="Ingrese la Contraseña Actual">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">
                                                            Nueva Clave
                                                        </label>
                                                        <input type="password" name="npass" class="form-control"
                                                            placeholder="Nueva Contraseña">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">
                                                            Confirmar Clave
                                                        </label>
                                                        <input type="password" name="cfpass" class="form-control"
                                                            placeholder="Comfirmar Contraseña">
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-o btn-primary">
                                                        Aceptar
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
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