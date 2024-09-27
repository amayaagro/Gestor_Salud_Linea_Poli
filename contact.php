<!-- Contacto -->
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Su mensaje e información de contacto ha sido enviada');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>GSL | Contacto</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Inicio Fondo -->
		
			<!--Inicio Header -->
			<div class="header">
				<div class="wrap">
				<!-- Inicio Logo -->
				<div class="logo">
		<a href="index.html" style="font-size: 30px;">Gestor de Salud en Linea</a> 
				</div>
				<!-- Fine Logo -->
				<!-- Inicio Barra de Navegación -->
				<div class="top-nav">
					<ul>
						<li><a href="index.html">Inicio</a></li>
					
						<li class="active"><a href="contact.php">contacto</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--Fin Barra de Navegación-->
			</div>
			<!--Fin Header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h2>Dirección :</h2>
						    	<p>5 Avenida Colón,</p>
						   		<p>Carrera 50 # 52-21</p>
						   		<p>Colombia</p>
				   		<p>Phone:(601) 222 666 444</p>
				   		<p>Fax: (601) 825 554 329</p>
				 	 	<p>Email: <span>info@clinica.com</span></p>
				   	
				   </div>
				</div>
				<!--Inicio Formulario Contacto -->				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contactenos</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>Nombre</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>Correo</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label>Teléfono</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>Mensaje</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Aceptar"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
			  </div>
			  <!-- Fin Formulario Contacto -->	
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		  <!--Inicio Footer -->	
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">Inicio</a></li>
						
						<li><a href="contact.php">Contacto</a></li>
					</ul>
		   	</div>
		  <!--Fin Footer -->	
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!-- Fin Fondo -->
	</body>
</html>

