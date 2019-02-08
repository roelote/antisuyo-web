<?php
$nombre_paquete = 'Maras Moray y Salineras';
$numero_dias='1 día';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour=" Visitar bellos pueblos incas y casas coloniales, disfrutar de los tesoros que esta tierra sagrada esconde, una agradable visita. Maras - Moray - Salineras. Uno de los paseos más clásicos y uno de los más fantástico de Cusco donde se puede disfrutar de una de las partes más bellas del Valle Sagrado de los Incas con sus terrazas agrícolas en forma de círculos y extracción de sal en las montañas.";

$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Caminatas Alternativas";
$url_category="caminatas-alternativas";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/caminatas-alternativas/maras-moray-y-salineras-1-dia/la-mina-de-sal-de-maras.jpg";
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
	<meta name="description" content="<?=$descripcion_tour?>">
    <meta name="author" content="Antisuyo Trek Perú">
    <title><?php echo $nombre_completo_paquete ?> | <?=$category_tour ?> | Antisuyo Trek </title>    
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">    
    <link href="../css/base.css" rel="stylesheet">
 
    <link href="../css/date_time_picker.css" rel="stylesheet">
     
	 
    <script src="../js/angular.min.js"></script>
   
      <meta property="fb:app_id" content="" />
     <meta property="og:type" content="web" />
     <meta property="og:title" content="<?=$nombre_completo_paquete?> | Antisuyo Trek Peru" />
     <meta property="og:description" content="<?=$descripcion_tour ?>" />
     <meta property="og:url" content="<?=$url_completo ?>" />
     <meta property="og:image" content="<?=$url_foto_seo ?>" />
     <meta property="og:site_name" content="Antisuyo Trek Peru" />

     <meta name="twitter:card" content="summary_large_image" />
     <meta name="twitter:site" content="@antisuyo_trek">
     <meta name="twitter:creator" content="@antisuyo_trek" />
     <meta name="twitter:title" content="<?=$nombre_completo_paquete?> | Antisuyo Trek Peru" />
     <meta name="twitter:description" content="<?=$descripcion_tour ?>" />
     <meta name="twitter:image" content="<?=$url_foto_seo ?>" />
     
</head>
<body>
<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->
    <div class="layer"></div>
    <?php include("includes/menu.php"); ?>
      <section class="slider-tours">

                <?php   $url_s = "caminatas-alternativas/maras-moray-y-salineras-1-dia.jpg";

        		 ?>
        <div class="fill-tour" style="background-image:url('img/<?=$url_s?>');"></div>		 
<div class="parallax-content-2">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <span class="rating">
						<i class="icon-star voted"></i>
						<i class="icon-star voted"></i>
						<i class="icon-star voted"></i>
						<i class="icon-star voted"></i>
						<i class="icon-star voted"></i>
                    </span>
                    <h1><?php echo $nombre_completo_paquete ?></h1>                    
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main" class="hotel">
                        Precio por<a href="#formulario"><span>inbox</span></a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>  
     <div id="position">
    <div class="container">
        <ol class="breadcrumb">
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" ><a href="/es/" itemprop="url"> <span itemprop="title"><i class="icon-home-1"></i></span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?=$url_category?>" itemprop="url"><span itemprop="title"><?=$category_tour?></span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title"><?=$nombre_completo_paquete ?></span></li>
        </ol>

    </div>
   </div>
    <div class="container margin_60">
    <div class="row ">
        <div class="col-md-9" id="single_tour_desc">
            <div id="single_tour_feat">
                <ul>
                    <li><i class="icon_set_1_icon-6"></i>Hotel</li>
                    <li><i class="icon_set_1_icon-21"></i>Coche</li>
                    <li><i class="icon_set_1_icon-25"></i>Tren</li>
                    <li><i class="icon_set_1_icon-24"></i>Paisajes</li>
                    <li><i class="icon_set_1_icon-26"></i>Bus</li>
                    <li><i class="icon_set_1_icon-4"></i>Maravilla</li>
                    <li><i class=" icon_set_1_icon-57"></i>Guiado</li>
                </ul>
            </div> 
            <div class="row">
                <div class="col-md-2">
                    <h3><span>DESCRIPCIÓN</span></h3>
                </div>
                <div class="col-md-10 descripcion"> 
				<p>Visitar bellos pueblos <strong>incas</strong> y <strong>casas coloniales</strong>, disfrutar de los tesoros que esta t<strong>ierra sagrada</strong> esconde, una agradable visita. <strong>Maras</strong> -<strong> Moray</strong> - <strong>Salineras</strong>.  </p><p> Uno de los paseos más clásicos y uno de los más fantástico de <strong>Cusco</strong> donde se puede disfrutar de una de las partes más bellas del <strong>Valle Sagrado de los Incas</strong> con sus terrazas agrícolas en forma de círculos y extracción de sal en <strong>las montañas</strong>.</p>
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>CUSCO - MARAS - MORAY - SALINERAS</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Pasaremos por su hotel 30 minutos antes de iniciar nuestro recorrido, el primer punto de visita será Maras (3300 msnm). El siguiente punto a visitar será al centro arqueológico de Moray, que es un centro arqueológico único con terrazas circulares convexos en la superficie del suelo Se utilizaron para aclimatación de los diferentes productos agrícolas, las terrazas tienen sus canales de irrigación y  por lo tanto es un prototipo de invernadero o estación biológica experimental muy avanzado para la época,  
						En la actualidad en el Perú se conoce un millar y medio de variedades de papas, ciento cincuenta de maíz, y muchos otros productos.   
						La siguiente parada es en Salineras La "Mina de Sal", que se encuentra al noroeste del pueblo de Maras.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/maras-moray-y-salineras-1-dia/la-mina-de-sal-de-maras.jpg" title="La Mina de Sal de maras."><img src="img/caminatas-alternativas/maras-moray-y-salineras-1-dia/la-mina-de-sal-de-maras.jpg" alt="La Mina de Sal de maras." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/maras-moray-y-salineras-1-dia/visita-a-las-salineras.jpg" title="Visita a las salineras"><img src="img/caminatas-alternativas/maras-moray-y-salineras-1-dia/visita-a-las-salineras.jpg" alt="Visita a las salineras." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/maras-moray-y-salineras-1-dia/complejo-arqueologico-de-moray.jpg" title="Centro arqueológico de Moray."><img src="img/caminatas-alternativas/maras-moray-y-salineras-1-dia/complejo-arqueologico-de-moray.jpg" alt="Centro arqueológico de Moray." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                </div>                
            </div> 
          	<hr>
            <div class="row">
                <div class="col-md-2">
                    <h3><span>INCLUIDO</span></h3>
                </div>
                <div class="col-md-10">
					 <ul class="list_icons"> 
						<li><i class="icon-ok-circle-1"></i>Recojo desde su hotel y traslado con bus hasta Cachora (Inicio del paseo).</li>
                        <li><i class="icon-ok-circle-1"></i>Alimentación 3 almuerzos, 3 desayunos y 3 cenas.</li>
                        <li><i class="icon-ok-circle-1"></i>Guía profesional en idioma español.</li>
                        <li><i class="icon-ok-circle-1"></i>El equipo de cocina y el equipo de camping.</li>
                        <li><i class="icon-ok-circle-1"></i>Arriero y Caballo (para el equipo Camping y alimentación).</li>
                        <li><i class="icon-ok-circle-1"></i>Transporte de retorno de Cachora - Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>Balón de oxígeno.</li>
                        <li><i class="icon-ok-circle-1"></i>Botiquín de primeros auxilios.</li>

					</ul>
                </div>
            </div> 
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>NO INCLUIDO</span></h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-cancel-circle-2"></i>Primer día desayuno y ultimo día almuerzo.</li>
                        <li><i class="icon-cancel-circle-2"></i>Entrada al parque arqueológico de choquequirao $20.</li>
                        <li><i class="icon-cancel-circle-2"></i>Servicios adicionales.</li>
                       <li><i class="icon-cancel-circle-2"></i>Propinas.</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Sugerencia</h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-vcard-1"></i> Llevar sus documentos (pasaporte o cédula de identidad).</li>
						<li><i class="icon-vcard-1"></i> Los estudiantes deben llevar carné de identificación de estudiante internacional (ISIC CARD).</li>
						<li><i class="icon-sun-filled"></i> Protector solar.</li>
						<li><i class="icon-bug"></i> Repelente para insectos.</li>
						<li><i class="icon-suitcase"></i> La mochila tiene que ser máximo 40 litros.</li>
						<li><i class="icon-drizzle"></i> Poncho de lluvia.</li>
						<li><i class=" icon-cloud-wind"></i> Ropa adecuada para la temporada de frío.</li>
						<li><i class="icon-battery"></i> Una batería adicional para su cámara.</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Opcional</h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-aboveground-rail"></i> Tren Vistadome Primera Clase agregar $ 69.</li>
						<li><i class="icon-ticket"></i> Entrada a Huayna Picchu $ 20. (solicitar con anticipación).</li>
						<li><i class="icon-lock"></i> Servicio Privado.</li>
						<li><i class=" icon-plus-circled-2"></i> Otros.</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Mapa</h3>
                </div>  
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1YbHEQLzF3rAsdUTAaq6CehY3JRY" target="_blank"><img src="img/ver mapa.png"></a>  
                </div>    
            </div>
            <hr>
            <form id="formulario" method="post" action="reserva.php">
            <div class="row">
				<div class="col-md-2">
					<h3><span>Precio</span></h3>
				</div>
			<div class="col-md-10"> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input name="envioreserva" type="submit" value="ENVIAR RESERVA / INBOX" class="btn_1" id="submit-contact">            
          	 <?php include("includes/forma-de-pago.php"); ?> 
			</div>
			</div>
            </form>
        </div>
        <br> 
        <aside class="col-md-3">   
        <?php
			include("includes/costados/mejores-caminatas.php");
			include("includes/costados/paquetes-machu-picchu.php");
			include("includes/atencion-cliente.php");
		?>        
        </aside>
    </div>
    </div>    
    <?php
		include("includes/pie.php");
		include("includes/bcp.php");
		include("includes/paypal.php");
		include("includes/wester-union.php");
		include("includes/otros.php");
		include("includes/terminos.php");
	?> 
<div id="toTop"></div> 
<div id="overlay"></div>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/common_scripts_min.js"></script>
<script src="../js/functions.js"></script> 

<script src="../js/bootstrap-datepicker.js"></script> 


<script src="../assets/validate.js"></script> 
  </body>
</html>