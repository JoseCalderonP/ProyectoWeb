<?php 
    include("../Seguridad.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title> Proyecto </title>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/bootstrapNaranja.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">

	<script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../controlador/control_usuario.js"></script>

</head>
<body>
	<header>
        <!-- Navegacion Principal-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <img src="../img/logo.png" id="logo">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../index.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="catalogo.php">Catalago <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Buscar...">
                  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                  <img src="../img/search.png" class="btos">
                  <img src="../img/perfil.png" class="btos">
                  <div id="loginSession"></div>
                    <?php
                        echo "<font color ='white'> Hola ".$_SESSION['Nombre']."(<a href='../Salir.php'>Salir</a>)</font>";
                    ?>
                  </div>
                </form>
            </div>
        </nav>
        <!--Fin navegacion Principal-->
    </header>

	<div class="row" style="margin: 0px; padding: 0px;" modal-backdrop="false" > 

    <div class="col-lg-6 col-md-8 xs-12">
    	<h3 align="center"> Registro de Productos </h3>
    	<div id="panel_registro" style="padding: 5%; box-shadow: 1px 2px 2px #A4A4A4; border:1px solid #A4A4A4;" align="center" >
    		<!-- Panel de datos -->
    		<table class="table table-condensed"  style="width: 70%;"  >
    			<tr>
    				<td> <label> Nombre Producto</label></td>
    				<td> <input type="text" id="nombre" class="form-control" placeholder="* Nombre Producto"></td></tr>
    			<tr> <td> <label> Categoria </label></td>
    				<td> <input type="text" id="Categoria" class="form-control" placeholder="* Categoria"></td></tr>
    			<tr> <td> 
                    
                        <label for="imgCat">Imagen</label>
                        <input type="file" class="form-control-file" id="imgCat" name="imgCat">
                    </td>
    			</tr>
    			<tr>
    				<td colspan="2">
    					<hr>
    					<div id="panel_respuesta"></div>
    				</td>
    			</tr>
    			<tr>
    				<td colspan="2" align="center">
    					<button class="btn btn-success btn-md" onclick="btn_guardar_dato();"> Registrar </button>
    				</td>
    			</tr>
    			
    		</table>

    	</div>
    	
    </div>

    <div class="col-lg-6 col-md-8 xs-12">
    	<h3 align="center"> Listado de Datos </h3>
    	<button class="btn btn-info btn-md" onclick="btn_listar_datos();"> Listar </button>

    	<div id="panel_listado">
    		<!-- Panel de datos -->

    	</div>
    </div>
	</div>

</body>
</html>

