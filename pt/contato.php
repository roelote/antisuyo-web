<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="pt-br" ng-app>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Contato | Antisuyo Trek Perú | Agência de viagens e turismo no Peru">
    <meta name="author" content="Antisuyo Trek Perú">
    <title>Contato | Antisyo trek Perú | Agência de viagens e turismo no Peru</title>
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
           <h1>Contato com Antisuyo Trek perú</h1>
            <div class="bs-wizard">                    
		</div>
    </div>
</section>
<div id="position">
	<div class="container">
		<ul>
			<li><a>Contato com Antisuyo Trek perú</a></li>
		</ul>
	</div>
</div>
<div class="container margin_60">
	<div class="row">
	<form method="post" action="confirmacion-contato.php">
		<div class="col-md-9 add_bottom_15"> 
			<div class="form_title">
				<h3><strong><i class="icon_set_1_icon-70"></i></strong>Dados pessoais</h3>
				<p>Dados pessoais da pessoa responsável.</p>
			</div>
			<div class="step"> 
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Nome completo</label>
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
							<label>Cidade</label>
							<input type="text" class="form-control" required name="ciudad" ng-model="ciudad">
						</div>
					</div>
				</div> 
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Data de chegada</label> 
							<input ng-model="fechallegada" class="form-control" required name="fechadellegada" id="datepicker">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Data de início da caminhada</label>
							<input ng-model="fechainicio" required id="datepicker2" class="form-control" name="fechadeiniciodecaminata">
						</div>
					</div>
				</div>  
				<div class="row"> 
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Telefone</label>
							<input type="text" required class="form-control" name="telefono" ng-model="telefono">
						</div>
					</div>
					<div class="col-md-6">
					<label>Número de pessoas</label> 
						<input type="number" required min="1" max="100" class="form-control" name="numerodepasajeros" ng-model="numeropersonas">  
					</div>
				</div>
				<div class="row">      
					<div class="col-md-6"><label>Comentário / Mensagem</label>  
							<textarea name="comentario" id="review_text" class="form-control" style="height:100px" placeholder="{{ nombrecompleto }}¡ Escreva uma mensagem..." ng-model="comentario"></textarea>
					</div>   
					<div class="col-md-6 col-md-6"> 
						<label>{{ nombrecompleto }}¡ ¿Como nós contato?</label>
						<select class="form-control" name="aqui" id="kindness_review" ng-model="aqui">
							<option value="No selecciono Nada">Por favor, reveja</option>
							<option value="Mochileros.com">Mochileros.com</option>
							<option value="Facebook">Facebook</option>
							<option value="Orkut">Orkut</option>
							<option value="Google">Google</option>
							<option value="Yahoo">Yahoo</option>
							<option value="Otros">Outro</option>
						</select>  
					</div>
				</div>
				<div class="row">    
					<div class="col-md-6 col-md-6"> 
					<br>
						<label>Selecione um pacote</label>
						<select class="form-control" name="nombrepaquete" id="kindness_review" ng-model="paquete">
							<option value="Cusco Machu Picchu 1D" >Cusco Machu Picchu 1D</option>
							<option value="Cusco clássico cultural 2D 1N" ><strong>Cusco clássico cultural 2D 1N</strong></option>
							<option value="Cusco clássico opcional 3D 2N" >Cusco clássico opcional 3D 2N</option>
							<option value="Cusco clássico moderno 3D 1N">Cusco clássico moderno 3D 1N</option>
							<option value="Cusco clássico tradicional 4D 3N">Cusco clássico tradicional 4D 3N</option>
							<option value="Cusco clássico con pernoite 4D 3N">Cusco clássico con pernoite 4D 3N</option>
							<option value="Cusco clássico convencional 5D 4N">Cusco clássico convencional 5D 4N</option>
							<option value="Cusco clássico arqueológico 5D 4N" >Cusco clássico arqueológico 5D 4N</option>
							<option value="Cusco clássico imperial 6D 5N">Cusco clássico imperial 6D 5N</option>
							<option value="Trilha Inca Classico 4D 3N" >Trilha Inca Classico 4D 3N</option>
							<option value="Trilha Inca curta 2D 1N" >Trilha Inca curta 2D 1N</option>
							<option value="Trilha Salkantay a Machu Picchu 4D 3N" >Trilha Salkantay a Machu Picchu 4D 3N</option>
							<option value="Trilha Salkantay a Machu Picchu 5D 4N" >Trilha Salkantay a Machu Picchu 5D 4N</option>
							<option value="Trilha Inca Jungle Machu Picchu 4D 3N" >Trilha Inca Jungle Machu Picchu 4D 3N</option>
							<option value="Trilha Choquequirao 4D 3N">Trilha Choquequirao 4D 3N</option>
							<option value="Cusco e Puno alternativo 7D 6N" >Cusco e Puno alternativo 7D 6N</option>
							<option value="Lima - Cusco e Puno 9D 8N">Lima - Cusco e Puno 9D 8N</option>
							<option value="Lima, Cusco e Puno 11D 10N" >Lima, Cusco e Puno 11D 10N</option>
							<option value="Cusco - Puno - Arequipa e Lima 12D 11N" >Cusco - Puno - Arequipa e Lima 12D 11N</option>
							<option value="Lima - Paracas - Nazca - Arequipa - Puno - Cusco y Machu Picchu 14D 13N" >Lima - Paracas - Nazca - Arequipa - Puno - Cusco e Machu Picchu 14D 13N</option>
							<option value="Vale Sagrado dos Incas 1D" >Vale Sagrado dos Incas 1D</option>
							<option value="Maras - Moray - Salineras 1D" >Maras - Moray - Salineras 1D</option>
							<option value="Trilha Antisuyo a Machu Picchu 2D 3N" >Trilha Antisuyo a Machu Picchu 2D 3N</option>
							<option value="Thilha Antisuyo Machu Picchu 3D 2N" >Thilha Antisuyo a Machu Picchu 3D 2N</option>
							<option value="Trilha Antisuyo 1D">Trilha Antisuyo 1D</option>
						</select>  
					</div>
				</div>
			</div>
		<div class="form_title">
				<h3><strong><i class="icon_set_1_icon-92"></i></strong>Resumo</h3>
				<p>Resumo do Contato</p>
			</div>
			<div class="step">
				<table class="table table-striped"> 
						<tbody>  
						<tr>
							<td>Pacote</td>
							<td><strong> {{ paquete }}</strong>
							</td>
						</tr>  
						<tr>
							<td>Nome completo</td>
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
							<td>Telefone</td>
							<td><strong> {{ telefono }}</strong></td>
						</tr>  
						<tr>
							<td>Número de personas</td>
							<td><strong> {{ numeropersonas }}</strong></td>
						</tr>
						<tr>
							<td>Como Nós Contato</td>
							<td><strong> {{ aqui }}</strong></td>
						</tr> 
						</tbody>
					</table>  
					<input class="btn_1 medium" name="envioreserva" type="submit" value="ENVIAR RESERVA">
			  </div> 
            </form>
		</div> 
		<aside class="col-md-3">
         <?php
			include("includes/costados/melhores-pacotes.php");
			include("includes/atencion-cliente.php");
			?>
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
<script src="../js/fecha_portugues.js"></script>
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