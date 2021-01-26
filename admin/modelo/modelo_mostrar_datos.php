<?php

 $Id = $_POST['Id'];

require '../conector/conexion.php';

$sql_u = mysqli_query("SELECT * FROM catalogo WHERE Id ='$Id'");

$row_u = mysqli_fetch_array($sql_u);


$nombreProducto = $row['Nom_Producto'];
$Categoria = $row['Categoria'];
$Imagen = $row['Imagen'];
?>
<h4> Datos del usuario para examinar </h4>
<table class="table table-condensed">
	<tr>
		<td> nombre Producto : </td>
		<td> <?php echo $nombreProducto; ?></td>
	</tr>

	<tr>
		<td> Categoria : </td>
		<td> <?php echo $Categoria; ?></td>
	</tr>

	<tr>
		<td> Imagen : </td>
		<td> <?php echo $Imagen; ?></td>
	</tr>
</table>
<?php

?>