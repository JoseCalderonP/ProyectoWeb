<?php
 $nombre = $_POST['nombre'];
 $Categoria = $_POST['Categoria'];
 $Imagen = $_POST['Imagen'];

 require '../php/Conexion_DB.php';

 $query = mysqli_query($enlace,"INSERT INTO `catalogo` (`Id`, `Nom_Producto`, `Categoria`, `Imagen`) VALUES (NULL, '$nombre', '$Categoria', '$Imagen')");

 if($query == TRUE){
		echo "Categoria agregada correctamente";
	}
	mysqli_close($enlace);

?>