<?php
$nombre_paquete = 'Camino Salkantay Machu Picchu';
$numero_dias='4 días y 3 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Camino Salkantay o Salcantay, es la segunda montaña más alta en la región de Cusco, pertenece a la cadena de montañas de los andes, ubicado aproximadamente a 6271 msnm, está rodeado por el nevado de Humantay y otros. El camino Salkantay - Salcantay tiene una duración de 4 días y 3 noches, en los que podrán disfrutar de paisajes espectaculares y de muchas experiencias emocionantes.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Salkantay Machu Picchu";
$url_category="salkantay-machu-picchu";

$url_foto_seo="https://www.antisuyotrekperu.com/es/img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/laguna-de-humantay.jpg";
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
     
	 
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
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

                <?php   $url_s = "camino-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>330</span>Por persona
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
					<p>Camino <strong>Salkantay</strong> o <strong>Salcantay</strong>, es la segunda montaña más alta en la región de <strong>Cusco</strong>,  pertenece a la cadena de montañas de los andes, ubicado aproximadamente a 6271 msnm, está rodeado por el nevado de Humantay y otros. <strong>El camino Salkantay</strong> - <strong>Salcantay</strong> tiene una duración de 4 días y 3 noches, en los que podrán disfrutar de paisajes espectaculares y de muchas experiencias emocionantes.</p>					 
					<p>Por varios caminos podemos llegar a <strong>Machu Picchu</strong>, pero al camino <strong>salkantay</strong> es una ruta fascinante y hermosa, con climas variados que nos harán sentir la <strong>naturaleza en extremo</strong>.</p>             		
					<p>La temperatura en el camino salkantay, oscila entre  26 °C hasta  -5 ° C; altitudes soportables, por un promedio de 4.650 msnm hasta  1800 msnm,en el que encontraremos montañas, <strong>Colinas</strong>, <strong>nevados</strong> y <strong>bosques</strong> densos, áridos, fértiles, valles rocosos, ríos y cascadas.</p>              		
					<p>El <strong>camino Salkantay</strong>  5 días, tiene en total 74 kilómetros, nosotros en 4 días haremos un total de 50 kilómetros de caminata, el restante lo completaremos en transporte terrestre, la caminata está conformada por senderos planos, cuesta arriba y abajo, a excepción del segundo día que es el día más cansado pero no por ello imposible, nos permitirá disfrutar de la imponente cordillera de los andes y de una riqueza natural llena de ecosistemas que se encuentra en nuestro País.</p>
					<p>La mejor época para realizar el <strong>Camino Salkantay</strong> - <strong>Salcantay</strong> es desde el Mes de abril al mes de setiembre, puesto que hay ausencia de lluvias en el camino <strong>salkantay</strong>, es una temporada seca.</p>
					<p>El camino Salkantay - <strong>Salcantay</strong> 4 días es una gran alternativa para aquellas personas que tienen poco tiempo ó también para aquellas personas que no consiguieron hacer la reservas al <strong>Camino Inca</strong> clásico, donde tenemos salidas diarias en los meses indicados.</p>
					<p>El camino <strong>Salkantay</strong>- <strong>Salcantay</strong> incluye una noche de pernocte en un hotel en el pueblo de <strong>Aguas Calientes</strong> para la tercera noche dicho hotel está incluido en el paquete.</p>               		
                </div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>CUSCO - MOLLEPATA - SORAYPAMPA.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Pasaremos por su hotel a las 05:00 con nuestro autobús privado, para dirigirnos hacia  el poblado de Mollepata, donde tendremos una parada para el desayuno. 
						Continuaremos con nuestro viaje hacia el punto de inicio Challa cancha, donde comenzará nuestra caminata hasta llegar al primer campamento Soraypampa (3835 m.s.n.m),donde almorzaremos.
						Por la tarde ascenderemos hasta llegar a la laguna de Humantay (3965 m.s.n.m) donde haremos una ceremonia de agradecimiento a la madre tierra.</li>
					</ul> 
					<div class=" table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td>Altitúd</td>
							<td>3.965 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.850 msnm.</td>
						</tr>
						<tr>
							<td>Tiempo de caminata</td>
							<td>3 a 4 horas.</td>
						</tr>
						<tr>
							<td>Distancia: Aproximadamente  </td>
							<td>11 km.</td>
						</tr>
						<tr>
							<td>Pernocte Campamento:</td>
							<td>Tiendas de campaña</td>
						</tr>
						<tr>
							<td>Alimentación</td>
							<td>Almuerzo y la Cena.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/mollepata.jpg" title="Mollepata"><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/mollepata.jpg" alt="Mollepata." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-soraypampa.jpg" title="Soraypampa."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-soraypampa.jpg" alt="Soraypampa." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/laguna-de-humantay.jpg" title="Laguna de Humantay."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/laguna-de-humantay.jpg" alt="Laguna de Humantay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                <hr>  
                </div>
                <div class="col-md-2"> 
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 2</span></h3> 
					<p>DÍA 02: SORAYPAMPA - CHAULLAY - COLPAPAMPA.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Después del desayuno en el campamento, iniciaremos nuestra caminata (considerada la más fuerte del viaje) a las 07:00 am, salimos con destino a Salkantay - Pampa.
						Descenderemos después por 1 hora y media hacia Huayracmachay, donde almorzaremos.
						Continuaremos nuestra caminata por 3 horas y media, en medio de un bosque nuboso, donde observaremos la diversidad de flora y fauna. 
						Llegaremos por la tarde a nuestro campamento en Chaullay. </li>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td>Altitúd</td>
							<td>4.600 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.850 msnm.</td>
						</tr>
						<tr>
							<td>Tiempo de caminata</td>
							<td>8 a 9 horas.</td>
						</tr>
						<tr>
							<td>Distancia: Aproximadamente  </td>
							<td>22 km.</td>
						</tr>
						<tr>
							<td>Pernocte Campamento:</td>
							<td>Tiendas de campaña</td>
						</tr>
						<tr>
							<td>Alimentación</td>
							<td>Almuerzo y la Cena.</td>
						</tr>
						</tbody>
						</table>
						</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/salkantay.jpg" title="Camino salkantay."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/salkantay.jpg" alt="Camino salkantay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/huayracmachay.jpg" title="Huayracmachay."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/huayracmachay.jpg" alt="Huayracmachay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-en-chaullay.jpg" title="campamento en Chaullay."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-en-chaullay.jpg" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                <hr>  
                </div>                
                 <div class="col-md-2"> 
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 3</span></h3> 
					<p>COLPAPAMPA – HIDROELÉCTRICA – AGUAS CALIENTES.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Después de tomar el desayuno, continuaremos el viaje apreciando la diversidad de flora y fauna, recorriendo el valle de Santa Teresa. 
						Llegaremos al pueblo de Playa donde tendremos el último almuerzo y nos despediremos del personal de apoyo.
						Tomaremos transporte que nos llevará de Playa - Hidroeléctrica, podremos visualizar la planta de producción de electricidad hasta llegar a Hidroeléctrica. Después tendremos una caminata de 2 a 3 horas más hacia el pueblo de Aguas Calientes.
						A la llegada al pueblo de Aguas Calientes iremos directo al hotel localizado cerca al santuario para pasar la noche.</li>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td>Altitúd</td>
							<td>2.850 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.040 msnm.</td>
						</tr>
						<tr>
							<td>Tiempo de caminata</td>
							<td>7 a 8 horas.</td>
						</tr>
						<tr>
							<td>Distancia: Aproximadamente.</td>
							<td>18 km.</td>
						</tr>
						<tr>
							<td>Pernocte Campamento:</td>
							<td>Tiendas de campaña</td>
						</tr>
						<tr>
							<td>Alimentación</td>
							<td>Almuerzo y la Cena.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/banos-termo-medicinales-de-cocalmayo.jpg" title="Baños Termo Medicinales de Cocalmayo."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/banos-termo-medicinales-de-cocalmayo.jpg" alt="Baños Termo Medicinales de Cocalmayo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/tren-a-la-hidroelectrica.jpg" title="Tren-a-la-hidroelectrica."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/tren-a-la-hidroelectrica.jpg" alt="Tren-a-la-hidroelectrica." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/pueblo-de-aguas-calientes.jpg" title="Pueblo de Aguas Calientes."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/pueblo-de-aguas-calientes.jpg" alt="Pueblo de Aguas Calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> <hr>                   
                </div>				
                <div class="col-md-2"> 
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 4</span></h3> 
					<p>CUSCO - VALLE SAGRADO DE LOS INCAS.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Después del desayuno, a las 04h30 iniciaremos el ascenso hacia Machu Picchu,
						Después tendremos visita guiada con nuestro un profesional, por todo el complejo arqueológico de Machu Picchu.
						Una vez culminada nuestra visita a la maravilla del mundo, retornaremos hacia el pueblo Aguas Calientes, para almorzar.
						Viajaremos en tren hasta el pueblo de ollantaytambo. 
						Al llegar a Ollantaytambo nos estará esperando nuestro bus privado que nos llevará hasta la ciudad de Cusco. El viaje tendrá una duración de 1 hora y media aproximadamente. 
						</li>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td>Altitúd</td>
							<td>2.450 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.040 msnm.</td>
						</tr>
						<tr>
							<td>Tiempo de caminata</td>
							<td>1horas y 30 minutos.</td>
						</tr>
						<tr>
							<td>Distancia: Aproximadamente.</td>
							<td>5 km.</td>
						</tr>
						<tr>
							<td>Pernocte Campamento:</td>
							<td>Tiendas de campaña</td>
						</tr>
						<tr>
							<td>Alimentación</td>
							<td>Almuerzo y la Cena.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/complejo-arqueologico-de-pisac.jpg" title="Complejo arqueologico de pisac."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/complejo-arqueologico-de-pisac.jpg" alt="Complejo arqueologico de pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/compeljo-arquelogico-de-ollantaytambo.jpg" title="Complejo arqueologico de ollantaytambo."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/compeljo-arquelogico-de-ollantaytambo.jpg" alt="Complejo arqueologico de ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/compeljo-arqueologico-de-chinchero.jpg" title="Complejo arqueologico de chincheros."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/compeljo-arqueologico-de-chinchero.jpg" alt="Complejo arqueologico de chincheros." class="img-responsive">
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
					 <ul class="list_icons descripcion"> 
						<li><i class="icon-ok-circle-1"></i>Traslado de aeropuerto-hotel-aeropuerto.</li>
						<li><i class="icon-ok-circle-1"></i>Transporte turistico para cada paseo.</li>
						<li><i class="icon-ok-circle-1"></i>Guías profesionales para cada tour en idioma español.</li>
						<li><i class="icon-ok-circle-1"></i>Tour en Cusco: City Tour Arqueológico y Machu Picchu.</li>
						<li><i class="icon-ok-circle-1"></i>Entrada a  Machupicchu por 1 día.</li>
						<li><i class="icon-ok-circle-1"></i>2 Noches de hotel en Cusco.</li>
						<li><i class="icon-ok-circle-1"></i>Servicio de tren Ida y Vuelta en servicio (EXPEDITION).</li>
						<li><i class="icon-ok-circle-1"></i>Bus de subida y bajada de Aguas Calientes - Machu Picchu.</li>
						<li><i class="icon-ok-circle-1"></i>Traslado en nuestro transporte de Ollantaytambo - Cusco.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Almuerzo y cena.</li>
						<li><i class="icon-cancel-circle-2"></i>Seguro de viaje.
						<li><i class="icon-cancel-circle-2"></i>Otros que no se mencionan anteriormente.</li> 
						
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Sugerencia</h3>
                </div>
                <div class="col-md-10 descripcion"> 
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
						<li><i class=" icon-plus-circled-2"></i> Otros..</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Mapa</h3>
                </div>  
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1aGMaZr7VeGQBlaYJkXs0dGPUnoI" target="_blank"><img src="img/ver mapa.png"></a>  
                </div>    
            </div>
            <hr>
            <form method="post" action="reserva.php">
            <div class="row">
				<div class="col-md-2">
					<h3><span>Precio</span></h3>
				</div>
			<div class="col-md-10">
				<div class=" table-responsive">
					<table class="table table-striped">
					<thead>
					<tr>
						<th colspan="4">
							<h4><span>Clase Económica </span></h4>
						</th>
					</tr> 
					</thead>
					<tbody>
					<tr> 
						  <td><strong>PERSONA</strong></td>
						  <td>Adulto</td>
						  <td>Estudiante</td> 
						</tr>  
						<tr> 
						  <td rowspan="3">Precio</td>
						  <td rowspan="3"><label class="centrar">$ <strong>350</strong></label></td>
						  <td rowspan="3"><label class="centrar">$ <strong>330</strong></label></td> 
						</tr>    
					  </tbody> 
					</table>
				</div> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input type="submit" name="envioreserva" value="ENVIAR RESERVA" class="btn_1" id="submit-contact">
            
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
         include("includes/costados/paquetes-peru.php");
         include("includes/costados/paquetes-alternativos.php"); 
         include("includes/costados/paquetes-mixto.php"); 
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
 <script>
  $('input.date-pick').datepicker('setDate', 'today');
   </script> 


<script src="../assets/validate.js"></script>
  </body>
</html>