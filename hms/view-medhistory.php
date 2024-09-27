<!-- Historial Medico -->
<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
  {
    
    $vid=$_GET['viewid'];
    $bp=$_POST['bp'];
    $bs=$_POST['bs'];
    $weight=$_POST['weight'];
    $temp=$_POST['temp'];
   $pres=$_POST['pres'];
   
 
      $query.=mysqli_query($con, "insert   tblmedicalhistory(PatientID,BloodPressure,BloodSugar,Weight,Temperature,MedicalPres)value('$vid','$bp','$bs','$weight','$temp','$pres')");
    if ($query) {
    echo '<script>alert("Medicle history has been added.")</script>';
    echo "<script>window.location.href ='manage-patient.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}

?>
<!-- Inicio de la Barra Superior de Navegación -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Paciente | Historial Medico</title>

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
		<!-- Fin de la Barra Superior de Navegación -->
        <div class="app-content">
            <?php include('include/header.php');?>
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- Inicio del Titulo de la Página -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Paciente | Historia Clínica </h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Paciente</span>
                                </li>
                                <li class="active">
                                    <span>Historia Clínica</span>
                                </li>
                            </ol>
                        </div>
                    </section>
					<!-- Fin del Titulo de la Página -->
                    <!-- Inicio Ejemplo Básico -->
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="over-title margin-bottom-15">Paciente <span class="text-bold">Historia
                                        Clínica </span></h5>
                                <?php
                               $vid=$_GET['viewid'];
                               $ret=mysqli_query($con,"select * from tblpatient where ID='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
                                <table border="1" class="table table-bordered">
                                    <tr align="center">
                                        <td colspan="4" style="font-size:20px;color:blue">
                                            Datos del Paciente</td>
                                    </tr>

                                    <tr>
                                        <th scope>Nombre del Paciente</th>
                                        <td><?php  echo $row['PatientName'];?></td>
                                        <th scope>Correo</th>
                                        <td><?php  echo $row['PatientEmail'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope>Teléfono</th>
                                        <td><?php  echo $row['PatientContno'];?></td>
                                        <th>Dirección</th>
                                        <td><?php  echo $row['PatientAdd'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Género</th>
                                        <td><?php  echo $row['PatientGender'];?></td>
                                        <th>Edad</th>
                                        <td><?php  echo $row['PatientAge'];?></td>
                                    </tr>
                                    <tr>

                                        <th>Historia Clínica</th>
                                        <td><?php  echo $row['PatientMedhis'];?></td>
                                        <th>Fecha de Registro</th>
                                        <td><?php  echo $row['CreationDate'];?></td>
                                    </tr>

                                    <?php }?>
                                </table>
                                <?php  

$ret=mysqli_query($con,"select * from tblmedicalhistory  where PatientID='$vid'");



 ?>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <tr align="center">
                                        <th colspan="8">Historia Clínica</th>
                                    </tr>
                                    <tr>
                                        <th>#</th>
                                        <th>Presion Sanguinea</th>
                                        <th>Peso</th>
                                        <th>Glucosa</th>
                                        <th>Temperatura</th>
                                        <th>Diagnóstico Médico</th>
                                        <th>Fecha de la Cita</th>
                                    </tr>
                                    <?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
                                    <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><?php  echo $row['BloodPressure'];?></td>
                                        <td><?php  echo $row['Weight'];?></td>
                                        <td><?php  echo $row['BloodSugar'];?></td>
                                        <td><?php  echo $row['Temperature'];?></td>
                                        <td><?php  echo $row['MedicalPres'];?></td>
                                        <td><?php  echo $row['CreationDate'];?></td>
                                    </tr>
                                    <?php $cnt=$cnt+1;} ?>
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