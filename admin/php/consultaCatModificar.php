<?php
	include("Conexion_DB.php");

	$query = mysqli_query($enlace,"SELECT * FROM `categorias` WHERE `ID` = ".$_POST['idCatMod']);

	while ($row = mysqli_fetch_array($query)) {
		echo '<div class="form-group">
							<label for="nombreCat">Nombre de categoría:</label>
						<input type="text" name="cat_name" id="nombreCat" class="form-control" value="'.$row['Nombre'].'">
					</div>
					<div class="form-group">
						<label for="descCat"></label>
				  		<textarea name="descripcion" placeholder="Escribe la descripción de la categoría..." id="descCat" class="form-control">"'.$row['Descripcion']'"
				  		</textarea>
				  	</div>

				  	<div class="form-group" id="opCats" name="Subcategoría">
				  		
				  	</div>

				  	<div class="form-group">
						<label for="catPadre">Subcategoría de:</label>
				  		<div id="opCats"></div>
				  	</div>

				  	<div class="form-group">
				  		<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
					    <img src="'.$row['Imagen'].'" style:"width=&quot;100px&quot;">
					    <input type="file" class="form-control-file" id="imgCat" name="imgCat" name="imgCatMod" value="'.$row['Imagen']'">
					</div>

				    <div class="container">
				      <button type="submit" id="altaCatBto">Guardar</button>
				      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
				    </div>
	</div>';
	}

	mysqli_close($enlace);

?>