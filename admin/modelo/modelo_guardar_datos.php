<?php
 $Id = $_POST['Id'];
 $nombre = $_POST['nombre'];
 $Categoria = $_POST['Categoria'];
 $Imagen = $_POST['Imagen'];

 require '../conector/conexion.php';

 $query = mysqli_query($enlace,"UPDATE `catalogo` SET `Nom_Producto` = '$nombre', `Categoria` = '$Categoria', `Imagen` = '$Imagen' WHERE `catalogo`.`Id` = $Id");
 
 if($query == TRUE){
 	echo "Edicion Correcta";
 }
?>