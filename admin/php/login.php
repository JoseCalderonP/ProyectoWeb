<?php
	include("../conector/conexion.php");

	$email = $_POST['email'];
	$pss = $_POST['pss'];
	
	$query = mysqli_query($enlace,"SELECT * FROM `usuarios` WHERE `Email` = '".$email."' AND `Contrasena` = '".$pss."'");

	if($query){
		while($row = mysqli_fetch_array($query)){
			session_start();
			$_SESSION['autentificado'] = "SI";
			$_SESSION['Nombre'] = $row['Nombre'];
			echo "<font color ='white'> Hola ".$_SESSION['Nombre']."(<a href='admin/Salir.php'>Salir</a>)</font>";
			exit();
		}
	}
	else{
		echo "Datos erróneos";
	}
	mysqli_close($enlace);
?>