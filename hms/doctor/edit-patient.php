<!-- Editar Datos Paciente -->
<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	
	$eid=$_GET['editid'];
	$patname=$_POST['patname'];
$patcontact=$_POST['patcontact'];
$patemail=$_POST['patemail'];
$gender=$_POST['gender'];
$pataddress=$_POST['pataddress'];
$patage=$_POST['patage'];
$medhis=$_POST['medhis'];
$sql=mysqli_query($con,"update tblpatient set PatientName='$patname',PatientContno='$patcontact',PatientEmail='$patemail',PatientGender='$gender',PatientAdd='$pataddress',PatientAge='$patage',PatientMedhis='$medhis' where ID='$eid'");
if($sql)
{
echo "<script>alert('Datos del Paciente Actualizados Satisfactoriamente');</script>";
header('location:manage-patient.php');

}
}
?>
<!-- Inicio de la Barra Superior de Navegación -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Médico | Agregar Paciente</title>

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
                                <h1 class="mainTitle">Paciente | agregar Paciente</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Paciente</span>
                                </li>
                                <li class="active">
                                    <span>Agregar Paciente</span>
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
                                                <h5 class="panel-title">Agregar Paciente</h5>
                                            </div>
                                            <div class="panel-body">
                                                <form role="form" name="" method="post">
                                                    <?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblpatient where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                                    <div class="form-group">
                                                        <label for="doctorname">
                                                            Patient Name
                                                        </label>
                                                        <input type="text" name="patname" class="form-control"
                                                            value="<?php  echo $row['PatientName'];?>" required="true">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Patient Contact no
                                                        </label>
                                                        <input type="text" name="patcontact" class="form-control"
                                                            value="<?php  echo $row['PatientContno'];?>" required="true"
                                                            maxlength="10" pattern="[0-9]+">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Patient Email
                                                        </label>
                                                        <input type="email" id="patemail" name="patemail"
                                                            class="form-control"
                                                            value="<?php  echo $row['PatientEmail'];?>" readonly='true'>
                                                        <span id="email-availability-status"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Genero: </label>
                                                        <?php  if($row['Gender']=="Female"){ ?>
                                                        <input type="radio" name="gender" id="gender" value="Mujer"
                                                            checked="true">Mujer
                                                        <input type="radio" name="gender" id="gender"
                                                            value="Hombre">Hombre
                                                        <?php } else { ?>
                                                        <label>
                                                            <input type="radio" name="gender" id="gender" value="Hombre"
                                                                checked="true">Hombre
                                                            <input type="radio" name="gender" id="gender"
                                                                value="Mujer">Mujer
                                                        </label>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">
                                                            Dirección
                                                        </label>
                                                        <textarea name="pataddress" class="form-control"
                                                            required="true"><?php  echo $row['PatientAdd'];?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Edad
                                                        </label>
                                                        <input type="text" name="patage" class="form-control"
                                                            value="<?php  echo $row['PatientAge'];?>" required="true">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Historia Clínica
                                                        </label>
                                                        <textarea type="text" name="medhis" class="form-control"
                                                            placeholder="Entre la Historia Clinica del Paciente"
                                                            required="true"><?php  echo $row['PatientMedhis'];?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Fecha de Creación
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php  echo $row['CreationDate'];?>" readonly='true'>
                                                    </div>
                                                    <?php } ?>
                                                    <button type="submit" name="submit" id="submit"
                                                        class="btn btn-o btn-primary">
                                                        Actualizar
                                                    </button>
                                                </form>
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
                </div>
            </div>
			<!-- Fin Ejemplo Básico -->
        </div>
    </div>
    </div>
    <!-- Inicio Footer -->
    <?php include('include/footer.php');?>
    <!-- Inicio Footer -->

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
    <!-- Final de controladora de Eventos para Esta Página -->>
</body>

</html>