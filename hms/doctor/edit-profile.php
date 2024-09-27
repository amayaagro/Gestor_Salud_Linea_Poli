<!-- Editar Perdil Médico -->
<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
if(isset($_POST['submit']))
{
	$docspecialization=$_POST['Doctorspecialization'];
$docname=$_POST['docname'];
$docaddress=$_POST['clinicaddress'];
$docfees=$_POST['docfees'];
$doccontactno=$_POST['doccontact'];
$docemail=$_POST['docemail'];
$sql=mysqli_query($con,"Update doctors set specilization='$docspecialization',doctorName='$docname',address='$docaddress',docFees='$docfees',contactno='$doccontactno' where id='".$_SESSION['id']."'");
if($sql)
{
echo "<script>alert('Datos del Médico Actualizados Satisfactoriamente');</script>";

}
}
?>
<!-- Inicio de la Barra Superior de Navegación -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Médico | Editar Datos del Médico</title>

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
                                <h1 class="mainTitle">Médico | Editar Datos del Médico</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Médico</span>
                                </li>
                                <li class="active">
                                    <span>Editar Datos del Médico</span>
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
                                                <h5 class="panel-title">Editar Datos del Médico</h5>
                                            </div>
                                            <div class="panel-body">
                                                <?php $sql=mysqli_query($con,"select * from doctors where docEmail='".$_SESSION['dlogin']."'");
while($data=mysqli_fetch_array($sql))
{
?>
                                                <h4><?php echo htmlentities($data['doctorName']);?>'s Profile</h4>
                                                <p><b>Fecha del Perfil:
                                                    </b><?php echo htmlentities($data['creationDate']);?></p>
                                                <?php if($data['updationDate']){?>
                                                <p><b>Fecha de la Ultima Actualizacíón:
                                                    </b><?php echo htmlentities($data['updationDate']);?></p>
                                                <?php } ?>
                                                <hr />
                                                <form role="form" name="adddoc" method="post"
                                                    onSubmit="return valid();">
                                                    <div class="form-group">
                                                        <label for="DoctorSpecialization">
                                                            Especialidad
                                                        </label>
                                                        <select name="Doctorspecialization" class="form-control"
                                                            required="required">
                                                            <option
                                                                value="<?php echo htmlentities($data['specilization']);?>">
                                                                <?php echo htmlentities($data['specilization']);?>
                                                            </option>
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
                                                        <label for="doctorname">
                                                            Nombre
                                                        </label>
                                                        <input type="text" name="docname" class="form-control"
                                                            value="<?php echo htmlentities($data['doctorName']);?>">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="address">
                                                            Dirección
                                                        </label>
                                                        <textarea name="clinicaddress"
                                                            class="form-control"><?php echo htmlentities($data['address']);?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Valor de la Consulta
                                                        </label>
                                                        <input type="text" name="docfees" class="form-control"
                                                            required="required"
                                                            value="<?php echo htmlentities($data['docFees']);?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Número
                                                        </label>
                                                        <input type="text" name="doccontact" class="form-control"
                                                            required="required"
                                                            value="<?php echo htmlentities($data['contactno']);?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Correol
                                                        </label>
                                                        <input type="email" name="docemail" class="form-control"
                                                            readonly="readonly"
                                                            value="<?php echo htmlentities($data['docEmail']);?>">
                                                    </div>




                                                    <?php } ?>


                                                    <button type="submit" name="submit" class="btn btn-o btn-primary">
                                                        Actualizar
                                                    </button>
                                                </form>
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
            <!-- Inicio de la Configuración -->

            <!-- Fin de la Configuración -->
            <?php include('include/setting.php');?>
            <!-- end: SETTINGS -->
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