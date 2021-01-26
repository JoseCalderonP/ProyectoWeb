<!DOCTYPE html>

<html lang="es-MX">
<head>

	<title>Talabarteria Toño</title>

	<meta charset="utf-8">
	<meta keywords="">
	<meta description="">
	<meta name="viewport" content="width=device-width", user-scalable="no">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="estilos/bootstrapNaranja.min.css">

	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilosslide.css">
	<!--link rel="stylesheet" type="text/css" href="estilos/estilosfooter.css"-->
	<!--link rel="stylesheet" type="text/css" href="estilos/bootstrapNaranja.min"-->

</head>

<body>

    <!-- Header, nav y breadcrumbs -->
    <?php
      include("header.php");
    ?>
        <!-- LOGIN -->
      <div class="modal" id="loginModal" data-backdrop="false">
        <div id="formContent" style="width:30%; margin: auto;" class="modal-content animate">
          <img src="img/account_black.png" style="width: 20%; margin: auto; margin-bottom:40px;">
          <form method="" name="loginForm" id="loginForm">
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Escribe tu correo electronico">
            </div>
            <div class="form-group">
              <input type="password" id="password" name="pss" class="form-control" placeholder="Escribe tu contraseña">
            </div>
            <div class="form-footer">
              <button type="button" data-dismiss="modal" class="btn btn-primary" id="loginBto">Entrar</button>
              <button type="button" data-dismiss="modal" class="btn btn-secondary" >Cancelar</button>
            </div>
          </form>
          <!-- Remind Password -->
          <div id="formFooter">
            <br>
            <a class="underlineHover" href="#">Forgot Password?</a>
          </div>
        </div>
      </div>
    <!-- FIN LOGIN -->
    <!-- Fin header, nav y breadcrumbs -->

    
		<div class="row no-gutters">
		<div aling="rigth"class="mx-auto" style="width: 370px;">
		<div class="container-fluid">
		<div class="card " style="background-color: orange" >
		<div class="embed-responsive embed-responsive-21by9">
		<div  class="card-body">

			<ul class="slider">
				<li id="slide1">
					<img src="img/Catalogo/Chanclas1.jpg"/>
				</li>
    			<li id="slide2">
      				<img src="img/Catalogo/Chanclas2.jpg"/>
    			</li>
    			<li id="slide3">
      				<img src="img/Catalogo/Montura1.jpg"/>
    			</li>
    			<li id="slide4">
      				<img src="img/Catalogo/Montura2.jpg"/>
    			</li>
    			<li id="slide5">
      				<img src="img/Catalogo/Montura4.jpg"/>
    			</li>
    		</ul>
    		<ul class="menu">
    			<li>
    				<a href="#slide1">1</a>
    			</li>
    			<li>
      				<a href="#slide2">2</a>
    			</li>
     			<li>
      				<a href="#slide3">3</a>
    			</li>
    			<li>
      				<a href="#slide4">4</a>
    			</li>
    			<li>
      				<a href="#slide5">5</a>
    			</li>
    		</ul>
    		</div>
    		</div>
    		</div>
    		</div>
    		</div>
    		</div>
        <!-- Slideshow container -->
  <!-- Footer -->
  <?php
      include("footer.php");
    ?>
  <!-- Fin Footer -->
  <div class="container-footer">
    <iframe class=" embed-responsive-item" id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d766.0958092544233!2d-104.66728457595575!3d24.024492975773946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc822785ad2b9%3A0x3f9f9688bd14a9c5!2sMercado%20Gomez%20Palacio!5e0!3m2!1ses!2smx!4v1603566267730!5m2!1ses!2smx" width="1730" height="500" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0" ></iframe>
  </div>
  <script type="text/javascript" src="js/ScriptSession.js"></script>
</body>
</html>
