
<table class="table table-bordered">
	<tr>
		<th> ID Producto </th>
		<th> Nombre Producto </th>
		<th> Categoria </th>
		<th> Imagen </th>
		<th> </th>
	</tr>
<?php

require '../conector/conexion.php';
$query = mysqli_query($enlace,"SELECT * FROM `catalogo`");
while ($row = mysqli_fetch_array($query)) {
	$Id = $row['Id'];
	$nombreProducto = $row['Nom_Producto'];
	$Categoria = $row['Categoria'];
	$Imagen = $row['Imagen'];
	?>
     <tr>
     	<td> <?php echo $Id; ?></td>
     	<td> <?php echo $nombreProducto; ?></td>
     	<td> <?php echo $Categoria; ?></td>
     	<td> <?php echo '<a href="../../'.$row['Imagen'].'" target="_blank"><img style="width:auto; height:50px;" src="../../'.$row['Imagen'].'"></a>' ?>
      </td>
     	<td class="col-lg-1"> 
     		 
     		 <button class="btn btn-primary btn-xs" style="width: 100%;" data-toggle="modal" data-target="#myModal_editar" onclick="btn_editar('<?php echo $Id; ?>');"> Editar </button>
     		 
     		 <button class="btn btn-danger btn-xs" style="width: 100%; margin-top: 1%;" data-toggle="modal" data-target="#myModal_eliminar" onclick="btn_eliminar('<?php echo $Id; ?>');"> Eliminar </button>
     	</td>
     </tr>
	<?php
}

?>
</table>

<!-- Modal -->
<div id="myModal_editar" class="modal" role="dialog" data-backdrop="false">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #084B8A; color: white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Modal Editar </h4>
      </div>
      <div class="modal-body">
        <p> Edicion .</p>
        <div id="panel_editar"></div>
        <div id="panel_respuesta_edicion"></div>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-info" data-backdrop="false" dismiss="modal" onclick="btn_guardar_edicion();" > Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Cerrar </button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="myModal_eliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: red; color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Producto Eliminado</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="Id" id="Id">
        <div id="panel_eliminar"></div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal"> Cerrar </button>
       
      </div>
    </div>

  </div>
</div>