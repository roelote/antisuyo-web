<?php 
if(isset($_POST['envioreserva'])) {  
$nombre_completo_paquete = $_POST['nombrepaquete'];
$url_completo = $_POST['urlcompleto'];
?>
 <!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="pt-br" ng-app>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Contacto | <?php  echo $nombre_completo_paquete  ?> | Antisuyo Trek Perú | Agência de viagens e turismo no Peru">
    <meta name="author" content="Antisuyo Trek Perú">
    <title>Contacto | <?php  echo $nombre_completo_paquete  ?> | Antisyo trek Perú | Agência de viagens e turismo no Peru</title>
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
           <h1>ORDEM DE COTAÇÃO</h1>
            <div class="bs-wizard">  			
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Pacote</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="javascript:history.back()" class="bs-wizard-dot"></a>
                </div>                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">Dados pessoais</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">¡Terminar!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>                   
		</div>   
    </div>   
</section>
<div id="position">
	<div class="container">
		<ul>
			<li><a>Pacote <?php  echo $nombre_completo_paquete  ?></a></li>
		</ul>
	</div>
</div>
<div class="container margin_60">
	<div class="row">
	<form method="post" action="confirmacion.php">
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
							<td><strong> <?php  echo $nombre_completo_paquete ?></strong>
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
							<td><strong>: {{ pais }}</strong></td>
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
					<input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">
					<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>">
					<input class="btn_1 medium" name="envioreserva" type="submit" value="ENVIAR RESERVA">
			  </div> 
            </form>
		</div> 
		<aside class="col-md-3"> 
         <?php include("includes/costados/melhores-pacotes.php"); ?> 
		</aside>        
	</div>
</div>
<?php include("includes/pie.php"); ?>
<?php include("includes/bcp.php"); ?>
<?php include("includes/paypal.php"); ?>
<?php include("includes/wester-union.php"); ?>
<?php include("includes/otros.php"); ?>
<?php include("includes/terminos.php"); ?>
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
 <?php 		
} 
else{ 
echo '<meta http-equiv="Refresh" content="0.2;url=www.antisuyotrekperu.com/portugues/">';	
} 
?>