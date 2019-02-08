<?php 
if(isset($_POST['envioreserva'])) {  
$nombre_completo_paquete = $_POST['nombrepaquete'];
$url_completo = $_POST['urlcompleto'];
?>
 <!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en" ng-app>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Reservation | Antisuyo Trek Perú | Travel and tourism agency in Peru">
    <meta name="author" content="Antisuyo Trek Perú">
    <title>Reservation | <?php  echo $nombre_completo_paquete  ?> | Antisuyo Trek Perú | Travel and tourism agency in Peru</title>     
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">     
    <link href="css/base.css" rel="stylesheet">     
    <link href="css/skins/square/grey.css" rel="stylesheet"> 
   <script src="js/angular.min.js"></script> 
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
           <h1>ORDER OF QUOTATION</h1>
            <div class="bs-wizard"> 
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Package</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="javascript:history.back()" class="bs-wizard-dot"></a>
                </div>                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">Personal information</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">¡Finished!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>                    
		</div>   
    </div>   
</section>
<div id="position">
	<div class="container">
		<ul>
			<li><a>Package <?php  echo $nombre_completo_paquete ?></a></li>
		</ul>
	</div>
</div>
<div class="container margin_60">
	<div class="row">
	<form method="post" action="confirmation.php">
		<div class="col-md-9 add_bottom_15"> 
			<div class="form_title">
				<h3><strong><i class="icon_set_1_icon-70"></i></strong>Personal information</h3>
				<p>Personal data of the responsible person.</p>
			</div>
			<div class="step"> 
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Full name</label>
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
							<label>Country</label>
							<input type="text" class="form-control" required name="pais" ng-model="pais">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>City</label>
							<input type="text" class="form-control" required name="ciudad" ng-model="ciudad">
						</div>
					</div>
				</div> 
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Arrival date</label> 
							<input ng-model="fechallegada" class="form-control" required name="fechadellegada" id="datepicker">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Start date of hike</label>
							<input required ng-model="fechainicio" id="datepicker2" class="form-control" name="fechadeiniciodecaminata">
						</div>
					</div>
				</div>  
				<div class="row"> 
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Phone</label>
							<input required type="text" class="form-control" name="telefono" ng-model="telefono">
						</div>
					</div>
					<div class="col-md-6">
					<label>Number of people</label> 
						<input required type="number" min="1" max="100" class="form-control" name="numerodepasajeros" ng-model="numeropersonas">  
					</div>
				</div>
				<div class="row">      
					<div class="col-md-6"><label>Comment / Message</label>  
							<textarea name="comentario" id="review_text" class="form-control" style="height:100px" placeholder="{{ nombrecompleto }}¡ Write a Message..." ng-model="comentario"></textarea>
					</div>   
					<div class="col-md-6 col-md-6"> 
						<label>{{ nombrecompleto }}¡ How do we meet?</label>
						<select class="form-control" name="aqui" id="kindness_review" ng-model="aqui" > 
							<option value="Mochileros.com">Mochileros.com</option>
							<option value="Facebook">Facebook</option>
							<option value="Orkut">Orkut</option>
							<option value="Google">Google</option>
							<option value="Yahoo">Yahoo</option>
							<option value="Otros">Others</option>
						</select>  
					</div>
				</div> 
			</div>
		<div class="form_title">
				<h3><strong><i class="icon_set_1_icon-92"></i></strong>Summary</h3>
				<p>Contact Summary</p>
			</div>
			<div class="step">
				<table class="table table-striped"> 
						<tbody>  
						<tr>
							<td>Package</td>
							<td><strong>: <?php  echo $nombre_completo_paquete ?></strong>
							</td>
						</tr>  
						<tr>
							<td>Full name</td>
							<td><strong>: {{ nombrecompleto }}</strong></td>
						</tr>  
						<tr>
							<td>E-mail</td>
							<td><strong>: {{ email }}</strong></td>
						</tr>  
						<tr>
							<td>Country</td>
							<td><strong>: {{ pais }}</strong></td>
						</tr>  
						<tr>
							<td>City</td>
							<td><strong>: {{ ciudad }}</strong></td>
						</tr>   
						<tr>
							<td>Phone</td>
							<td><strong>: {{ telefono }}</strong></td>
						</tr>  
						<tr>
							<td>Number of people</td>
							<td><strong>: {{ numeropersonas }}</strong></td>
						</tr>
						<tr>
							<td>Where did you find us?</td>
							<td><strong>: {{ aqui }}</strong></td>
						</tr> 
						</tbody>
					</table>
					<input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">
					<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>">
					<input class="btn_1 medium" name="envioreserva" type="submit" value="SEND RESERVATION">
			  </div> 
            </form>
		</div> 
		<aside class="col-md-3"> 
         <?php include("includes/costados/best-walks.php"); ?> 
		</aside>        
	</div>
</div>
<?php include("includes/pie.php"); ?> 
<div id="toTop"></div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>  
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
echo '<meta http-equiv="Refresh" content="0.2;url=https://www.antisuyotrekperu.com//">';	
}
?>