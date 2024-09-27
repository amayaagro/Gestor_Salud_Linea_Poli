<!-- Cierre de Sesión Paciente -->
<?php
session_start();
include('include/config.php');
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($con,"UPDATE userlog  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
session_unset();
//Cierre de Sesión();
$_SESSION['errmsg']="Ha cerrado correctamente su sesión";
?>
<script language="javascript">
document.location="../index.html";
</script>
