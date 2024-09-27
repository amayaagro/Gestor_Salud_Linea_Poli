<!-- busqueda Paciente -->
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
    <title>Medico | Administrar Pacientes</title>

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
                                <h1 class="mainTitle">Medico | Administrar Pacientes</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Medico</span>
                                </li>
                                <li class="active">
                                    <span>Administrar Pacientes</span>
                                </li>
                            </ol>
                        </div>
                    </section>
					<!-- Fin del Titulo de la Página -->
                    <!-- Inicio Ejemplo Básico -->
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" method="post" name="search">

                                    <div class="form-group">
                                        <label for="doctorname">
                                            Buscar por Nombre/Teléfono.
                                        </label>
                                        <input type="text" name="searchdata" id="searchdata" class="form-control"
                                            value="" required='true'>
                                    </div>

                                    <button type="submit" name="search" id="submit" class="btn btn-o btn-primary">
                                        Buscar
                                    </button>
                                </form>
                                <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
                                <h4 align="center">Resultado "<?php echo $sdata;?>" Palabra Clave </h4>

                                <table class="table table-hover" id="sample-table-1">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th>Nombre</th>
                                            <th>Número</th>
                                            <th>Género </th>
                                            <th>Fecha de Creación </th>
                                            <th>Fecha de Actualización </th>
                                            <th>Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$sql=mysqli_query($con,"select * from tblpatient where PatientName like '%$sdata%'|| PatientContno like '%$sdata%'");
$num=mysqli_num_rows($sql);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
                                        <tr>
                                            <td class="center"><?php echo $cnt;?>.</td>
                                            <td class="hidden-xs"><?php echo $row['PatientName'];?></td>
                                            <td><?php echo $row['PatientContno'];?></td>
                                            <td><?php echo $row['PatientGender'];?></td>
                                            <td><?php echo $row['CreationDate'];?></td>
                                            <td><?php echo $row['UpdationDate'];?>
                                            </td>
                                            <td>

                                                <a href="edit-patient.php?editid=<?php echo $row['ID'];?>"><i
                                                        class="fa fa-edit"></i></a> || <a
                                                    href="view-patient.php?viewid=<?php echo $row['ID'];?>"><i
                                                        class="fa fa-eye"></i></a>

                                            </td>
                                        </tr>
                                        <?php 
$cnt=$cnt+1;
} } else { ?>
                                        <tr>
                                            <td colspan="8"> Ningun registro encontrado en esta busqueda</td>

                                        </tr>

                                        <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Fin Ejemplo Básico -->
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
    !-- Final Principal JavaScript -->
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