<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="es" ng-app>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Contacto | Antisuyo Trek Perú | Agencia de viajes y turismo en Perú">
    <meta name="author" content="Antisuyo Trek Perú">
    <title>Contacto | Antisuyo Trek Perú | Agencias de viajes en Perú</title>     
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png"> 
    <link href="../css/base.css" rel="stylesheet"> 
    <link href="../css/skins/square/grey.css" rel="stylesheet">
   <script src="../js/angular.min.js"></script> 
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]--> 
</head>
<body> 
<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->  
    <div class="layer"></div> 
    <?php include("includes/menu.php"); ?>
   <section id="hero_2">
	<div class="intro_title animated fadeInDown">
           <h1>Contacto con Antisuyotrek perú</h1>
            <div class="bs-wizard">  
		</div>   
    </div>   
</section>
<div id="position">
	<div class="container">
		<ul>
			<li><a>Contacto con Antisuyotrek Perú</a></li>
		</ul>
	</div>
</div> 
<div class="container margin_60">
	<div class="row">
	<form method="post" action="confirmacion-contacto.php">
		<div class="col-md-9 add_bottom_15"> 
			<div class="form_title">
				<h3><strong><i class="icon_set_1_icon-70"></i></strong>Datos personales</h3>
				<p>Datos personales de la persona responsable.</p>
			</div>
			<div class="step"> 
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Nombre completo</label>
							<input autofocus required type="text" class="form-control" name="nombrecompleto" ng-model="nombrecompleto">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>E-mail</label>
							<input type="email" class="form-control" name="email" required ng-model="email">
						</div>
					</div>
				</div> 
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>País</label>
							<input type="text" class="form-control" required name="pais" ng-model="pais">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Ciudad</label>
							<input type="text" class="form-control" required name="ciudad" ng-model="ciudad">
						</div>
					</div>
				</div> 
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Fecha de llegada</label> 
							<input ng-model="fechallegada" class="form-control" required name="fechadellegada" id="datepicker">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Fecha de inicio de caminata</label>
							<input ng-model="fechainicio" id="datepicker2" class="form-control" name="fechadeiniciodecaminata">
						</div>
					</div>
				</div>  
				<div class="row"> 
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Teléfono</label>
							<input type="text" class="form-control" name="telefono" ng-model="telefono">
						</div>
					</div>
					<div class="col-md-6">
					<label>Número de personas</label> 
						<input type="number" min="1" max="100" class="form-control" name="numerodepasajeros" ng-model="numeropersonas">  
					</div>
				</div>
				<div class="row">      
					<div class="col-md-6"><label>Comentario / Mensaje</label>  
							<textarea name="comentario" id="review_text" class="form-control" style="height:100px" placeholder="{{ nombrecompleto }}¡ Escribenos un Mensaje..." ng-model="comentario"></textarea>
					</div>   
					<div class="col-md-6 col-md-6"> 
						<label>{{ nombrecompleto }}¡ ¿Cómo nos encontro?</label>
						<select class="form-control" name="aqui" id="kindness_review" ng-model="aqui">
							<option value="No selecciono Nada">Por favor revise</option>
							<option value="Mochileros.com">Mochileros.com</option>
							<option value="Facebook">Facebook</option>
							<option value="Orkut">Orkut</option>
							<option value="Google">Google</option>
							<option value="Yahoo">Yahoo</option>
							<option value="Otros">Otros</option>
						</select>  
					</div>
				</div> 
				<div class="row">    
					<div class="col-md-6 col-md-6"> 
					<br>
						<label>Seleccione un paquete</label>
						<select class="form-control" name="nombrepaquete" id="kindness_review" ng-model="paquete">
							<option value="Cusco Machu Picchu 1D" >Cusco Machu Picchu 1D</option>
							<option value="Cusco clásico cultural 2D 1N" >Cusco clásico cultural 2D 1N</option>
							<option value="Cusco clásico opcional 3D 2N" >Cusco clásico opcional 3D 2N</option>
							<option value="Cusco clásico moderno 3D 2N">Cusco clásico moderno 3D 2N</option>
							<option value="Cusco clásico tradicional 4D 3N">Cusco clásico tradicional 4D 3N</option>
							<option value="Cusco clásico com pernoite 4D 3N">Cusco clásico com pernoite 4D 3N</option>
							<option value="Cusco clásico convencional 5D 4N">Cusco clásico convencional 5D 4N</option>
							<option value="Cusco clásico arqueológico 5D 4N" >Cusco clásico arqueológico 5D 4N</option>
							<option value="Cusco clásico imperial 6D 5N">Cusco clásico imperial 6D 5N</option>
							<option value="Camino Salkantay Machu Picchu 4D 3N" >Camino Salkantay Machu Picchu 4D 3N</option>
							<option value="Camino Salkantay Machu Picchu 5D 4N" >Camino Salkantay Machu Picchu 5D 4N</option>
							<option value="Camino inca clásico 4D 3N" >Camino inca clásico 4D 3N</option>
							<option value="Camino inca corta 2D 1N" >Camino inca corta 2D 1N</option>
							<option value="Camino Choquequirao 5D 4N">Camino Choquequirao 5D 4N</option>
							<option value="Valle sagrado de los incas 1D" >Valle sagrado de los incas 1D</option>
							<option value="Maras - Moray - salineras 1D" >Maras - Moray - salineras 1D</option>
							<option value="Cusco y Puno alternativo 7D 6N" >Cusco y Puno alternativo 7D 6N</option>
							<option value="Lima - Cusco y Puno 9D 8N">Lima - Cusco y Puno 9D 8N</option>
							<option value="Lima, Cusco y Puno 11D 10N" >Lima, Cusco y Puno 11D 10N</option>
							<option value="Cusco - Puno - Arequipa y Lima 12D 11N" >Cusco - Puno - Arequipa y Lima 12D 11N</option>
							<option value="Lima - Paracas - Nazca - Arequipa - Puno - Cusco y Machu Picchu 14D 13N" >Lima - Paracas - Nazca - Arequipa - Puno - Cusco y Machu Picchu 14D 13N</option>
							<option value="Camino inca jungle Machu Picchu 4D 3N" >Camino inca jungle Machu Picchu 4D 3N</option>
							<option value="Camino antisuyo a Machu Picchu 2D 1N" >Camino antisuyo a Machu Picchu 2D 1N</option>
							<option value="Camino antisuyo Machu Picchu 3D 2N" >Camino antisuyo Machu Picchu 3D 2N</option>
							<option value="Camino antisuyo 1D">Camino antisuyo 1D</option>
						</select>  
					</div>
				</div> 
			</div>
		<div class="form_title">
				<h3><strong><i class="icon_set_1_icon-92"></i></strong>Resumen</h3>
				<p> Resumen de contacto</p>
			</div>
			<div class="step">
				<table class="table table-striped"> 
						<tbody>  
						<tr>
							<td>Paquete</td>
							<td><strong> {{ paquete }}</strong>
							</td>
						</tr>  
						<tr>
							<td>Nombre Completo</td>
							<td><strong> {{ nombrecompleto }}</strong></td>
						</tr>  
						<tr>
							<td>E-mail</td>
							<td><strong> {{ email }}</strong></td>
						</tr>  
						<tr>
							<td>País</td>
							<td><strong> {{ pais }}</strong></td>
						</tr>  
						<tr>
							<td>Ciudad</td>
							<td><strong> {{ ciudad }}</strong></td>
						</tr>   
						<tr>
							<td>Teléfono</td>
							<td><strong> {{ telefono }}</strong></td>
						</tr>  
						<tr>
							<td>Número de personas</td>
							<td><strong> {{ numeropersonas }}</strong></td>
						</tr>
						<tr>
							<td>Por donde nos encontró</td>
							<td><strong> {{ aqui }}</strong></td>
						</tr> 
						</tbody>
					</table>  
					<input class="btn_1 medium" name="envioreserva" type="submit" value="ENVIAR RESERVA">
			  </div> 
            </form>
		</div> 
		<aside class="col-md-3"> 
         <?php include("includes/costados/mejores-caminatas.php"); ?> 
		</aside>        
	</div>
</div>
<?php include("includes/pie.php"); ?>
<div id="toTop"></div> 
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/common_scripts_min.js"></script>
<script src="../js/functions.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
  <script src="../js/jquery-1.12.4.js"></script>
  <script src="../js/jquery-ui.js"></script> 
<script src="../js/fecha_espanol.js"></script>
<script type="text/javascript"> 
$(function() {
$("#datepicker").datepicker({ minDate: 1 });
});
	$(function() {
$("#datepicker2").datepicker({ minDate: 1 });
});
 </script>
  </body>
</html> 