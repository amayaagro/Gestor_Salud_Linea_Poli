<!-- Reservar Citas -->
<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
$specilization=$_POST['Doctorspecialization'];
$doctorid=$_POST['doctor'];
$userid=$_SESSION['id'];
$fees=$_POST['fees'];
$appdate=$_POST['appdate'];
$time=$_POST['apptime'];
$userstatus=1;
$docstatus=1;
$query=mysqli_query($con,"insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) values('$specilization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')");
	if($query)
	{
		echo "<script>alert('¡Su Cita ha sido Agendada!');</script>";
	}

}
?>
<!-- Inicio de la Barra Superior de Navegación -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Paciente | Reservar Cita</title>

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
    <script>
    function getdoctor(val) {
        $.ajax({
            type: "POST",
            url: "get_doctor.php",
            data: 'specilizationid=' + val,
            success: function(data) {
                $("#doctor").html(data);
            }
        });
    }
    </script>

    <script>
    function getfee(val) {
        $.ajax({
            type: "POST",
            url: "get_doctor.php",
            data: 'doctor=' + val,
            success: function(data) {
                $("#fees").html(data);
            }
        });
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
                                <h1 class="mainTitle">Paciente | Agendar Cita</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Paciente</span>
                                </li>
                                <li class="active">
                                    <span>Agendar Cita</span>
                                </li>
                            </ol>
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
                                                <h5 class="panel-title">Agendar Cita</h5>
                                            </div>
                                            <div class="panel-body">
                                                <p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
                                                    <?php echo htmlentities($_SESSION['msg1']="");?></p>
                                                <form role="form" name="book" method="post">

                                                    <div class="form-group">
                                                        <label for="DoctorSpecialization">
                                                            Médico Especialista
                                                        </label>
                                                        <select name="Doctorspecialization" class="form-control"
                                                            onChange="getdoctor(this.value);" required="required">
                                                            <option value="">Seleccione Especialidad</option>
                                                            <?php $ret=mysqli_query($con,"select * from doctorspecilization");
while($row=mysqli_fetch_array($ret))
{
?>
                                                            <option
                                                                value="<?php echo htmlentities($row['specilization']);?>">
                                                                <?php echo htmlentities($row['specilization']);?>
                                                            </option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="doctor">
                                                            Médicos
                                                        </label>
                                                        <select name="doctor" class="form-control" id="doctor"
                                                            onChange="getfee(this.value);" required="required">
                                                            <option value="">Selecione el Médico</option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="consultancyfees">
                                                            Valor de la Consulta
                                                        </label>
                                                        <select name="fees" class="form-control" id="fees" readonly>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="AppointmentDate">
                                                            Fecha
                                                        </label>
                                                        <input class="form-control datepicker" name="appdate"
                                                            required="required" data-date-format="yyyy-mm-dd">

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Appointmenttime">

                                                            Hora

                                                        </label>
                                                        <input class="form-control" name="apptime" id="timepicker1"
                                                            required="required">eg : 10:00 PM
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

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '-3d'
    });
    </script>
    <script type="text/javascript">
    $('#timepicker1').timepicker();
    </script>
    <!-- Final de controladora de Eventos para Esta Página -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</body>

</html>