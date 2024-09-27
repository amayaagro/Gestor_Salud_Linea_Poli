<!-- Editar Perfil Paciente -->
<?php
session_start();

include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];

$sql=mysqli_query($con,"Update users set fullName='$fname',address='$address',city='$city',gender='$gender' where id='".$_SESSION['id']."'");
if($sql)
{
$msg="Su Perfil fue Actualizado Satisfactoriamente";


}

}
?>
<!-- Inicio de la Barra Superior de Navegación -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Paciente | Editar Perfil</title>

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
                                <h1 class="mainTitle">Paciente | Editar Perfil</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Paciente </span>
                                </li>
                                <li class="active">
                                    <span>Editar Perfil</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <!-- Fin del Titulo de la Página -->
                    <!-- Inicio Ejemplo Básico -->
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 style="color: green; font-size:18px; ">
                                    <?php if($msg) { echo htmlentities($msg);}?> </h5>
                                <div class="row margin-top-30">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Editar Perfil</h5>
                                            </div>
                                            <div class="panel-body">
                                                <?php 
$sql=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
while($data=mysqli_fetch_array($sql))
{
?>
                                                <h4><?php echo htmlentities($data['fullName']);?>Perfil</h4>
                                                <p><b>Fecha de Registro:
                                                    </b><?php echo htmlentities($data['regDate']);?></p>
                                                <?php if($data['updationDate']){?>
                                                <p><b>Fecha de Actualización:
                                                    </b><?php echo htmlentities($data['updationDate']);?></p>
                                                <?php } ?>
                                                <hr />
                                                <form role="form" name="edit" method="post">


                                                    <div class="form-group">
                                                        <label for="fname">
                                                            Nombre del Paciente
                                                        </label>
                                                        <input type="text" name="fname" class="form-control"
                                                            value="<?php echo htmlentities($data['fullName']);?>">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="address">
                                                            Dirección
                                                        </label>
                                                        <textarea name="address"
                                                            class="form-control"><?php echo htmlentities($data['address']);?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="city">
                                                            Ciudad
                                                        </label>
                                                        <input type="text" name="city" class="form-control"
                                                            required="required"
                                                            value="<?php echo htmlentities($data['city']);?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="gender">
                                                            Genero
                                                        </label>

                                                        <select name="gender" class="form-control" required="required">
                                                            <option value="<?php echo htmlentities($data['gender']);?>">
                                                                <?php echo htmlentities($data['gender']);?></option>
                                                            <option value="Hombre">Hombre</option>
                                                            <option value="Mujer">Mujer</option>
                                                            <option value="Otro">Otro</option>
                                                        </select>

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Correo
                                                        </label>
                                                        <input type="email" name="uemail" class="form-control"
                                                            readonly="readonly"
                                                            value="<?php echo htmlentities($data['email']);?>">
                                                        <a href="change-emaild.php">Actualizar su Correo</a>
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-o btn-primary">
                                                        Actualizar
                                                    </button>
                                                </form>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="panel panel-white">


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