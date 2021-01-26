<?php
	require '../conector/conexion.php';
	$Id = $_POST['Id'];

	$query = mysqli_query($enlace, "DELETE FROM `catalogo` WHERE `Id`=".$Id);

	mysqli_close($enlace);
?>