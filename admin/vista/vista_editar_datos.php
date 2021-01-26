<?php

$Id = $_POST['Id'];

require '../conector/conexion.php';

$query = mysqli_query($enlace,"SELECT * FROM `catalogo` WHERE Id = '$Id'");
$row = mysqli_fetch_array($query);

$nombre = $row['Nom_Producto'];
$Categoria = $row['Categoria'];
$Imagen = $row['Imagen'];

?>
<input type="hidden" id="Id" value="<?php echo $Id; ?>">
<label for="nombre"> Nombre Producto</label>
<input type="text" class="form-control" id="New_nombre"  value="<?php echo $nombre; ?>">

<label for="Categoria"> Categoria </label>
<input type="text" class="form-control" id="New_Categoria"  value="<?php echo $Categoria; ?>">

<label for="Imagen"> Imagen </label>
<input type="text" class="form-control" id="New_Imagen"  value="<?php echo $Imagen; ?>">