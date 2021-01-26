<?php
 $nombre = $_POST['nombre'];
 $Categoria = $_POST['Categoria'];
 $Imagen = "img/Catalogo/".$_FILES['imgCat']['name'];

 require '../conector/conexion.php';

 $query = "INSERT INTO `catalogo` (`Id`, `Nom_Producto`, `Categoria`, `Imagen`) VALUES (NULL, '$nombre', '$Categoria', '$Imagen')";

 if(mysqli_query($enlace, $query)){
		echo "Categoria agregada correctamente";
		include("../php/uploadImg.php");
	}
	mysqli_close($enlace);

?>