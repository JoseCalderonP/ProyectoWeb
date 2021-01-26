<?php
	$dir = "../../img/Catalogo/";
	$archivo = $_FILES['Imagen']['name'];
	if(isset($archivo) && $archivo != ""){
		$tipo = $_FILES['Imagen']['type'];
		$tamano = $_FILES['Imagen']['size'];
		$temp = $_FILES['Imagen']['tmp_name'];

		//Si no existe el Directorio
		if ( !is_dir( $dir . $nombreArchivo ) ){
  			mkdir($dir . $nombreArchivo);
		}
		
		if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 5000000))){
			echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
			-Se permiente archivos .gif, .jpg, .png y de 500 kb como máximo.</b></div>';
		}
		else{
			if(move_uploaded_file($temp, $dir.$archivo)){
				chmod($dir.$archivo, 0777);
				echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
				echo '<p><img src="images/'.$archivo.'"></p>';
			}
			else{
				echo '<div><b>Ocurrio algun error al subir el fichero. No pudo guardarse.</b></div>';
			}
		}
	}
?>