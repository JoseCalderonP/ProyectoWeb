<?php
$Id = $_POST['Id'];

 require '../php/Conexion_DB.php';

 $query = mysqli_query($enlace, "DELETE FROM `catalogo` WHERE `Id`=".$Id);
 
 if($query == TRUE){
 	echo "Eliminacion Correcta";
 }
?>