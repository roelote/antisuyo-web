<?php
$nombre_paquete = 'Camino Salkantay Machu Picchu';
$numero_dias='5 días y 4 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Camino Salkantay es una de las montañas más altas está localizado en la región de Cusco, pertenece a la cadena de montañas de los andes, cubierto de nevado de aproximadamente 6271 metros sobre el nivel del mar, lo que a su vez está rodeado por el nevado de Umantay y otros. El camino Salkantay - Salcantay tiene una duración de 5 días y 4 noches, donde podrán disfrutar de paisajes espectaculares y muchas experiencias emocionantes.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Salkantay Machu Picchu";
$url_category="salkantay-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-soraypampa.jpg";
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

                <?php   $url_s = "camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches.jpg";

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
					<p>Camino <strong>Salkantay</strong>  es una de las <strong>montañas</strong> más altas está localizado en la región de Cusco, pertenece  a la cadena de montañas de los andes, cubierto de <strong>nevado</strong> de aproximadamente 6271 metros sobre el nivel del mar, lo que a su vez está rodeado por el <strong>nevado de Umantay</strong> y otros.<strong> El camino Salkantay</strong> - <strong>Salcantay</strong> tiene una duración de 5 días y 4 noches, donde podrán disfrutar de paisajes espectaculares y muchas experiencias emocionantes.</p>					 
					<p>Por varios caminos podemos llegar a <strong>Machu Picchu</strong>, pero al <strong>Camino Salkantay</strong> es una ruta fascinante y hermosa, con diferentes climas variadas que nos harán sentir la <strong>naturaleza en extremo</strong>.</p>
					<p>La temperatura en el <strong>Camino Salkantay</strong>, oscila entre  26 °C hasta  -5 ° C; altitudes soportables de 4.650m.s.n.m hasta  1800 m.s.n.m, donde encontraremos, <strong>Colinas</strong>, <strong>nevados</strong> y <strong>bosques</strong> <strong>densos</strong>, áridos, fértiles, valles rocosos, ríos y cascadas.</p>
					<p>El Camino <strong>Salkantay</strong> 5 días tiene en total 64 kilómetros, conformado de caminos, planos, cuesta arriba y abajo, solo el segundo día, es el día más cansado pero nada imposible, nos hará sentir la imponente cordillera y una riqueza lleno de ecosistema que se encuentra en nuestro País.</p>
					<p>La mejor época para realizar el <strong>Camino Salkantay</strong> - <strong>Salcantay</strong> es desde el Mes de abril a noviembre, cuando no hay lluvia, es una época seca.</p>
					<p>El camino <strong>Salkantay</strong> - Salcantay es una gran alternativa para aquellos que buscan escapar de las reservas del <strong>Camino Inca</strong> clásico y que tienen una experiencia hermosa, donde tenemos salidas diarias.</p>
					<p>Para el camino <strong>Salkantay</strong>- <strong>Salcantay</strong> incluye una noche de pernocte en un hotel, en el <strong>pueblo de aguas calientes</strong> <strong>Machu Picchu</strong> para la cuarta noche y ya está incluido en el precio.
					</p>                                  		
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>CUSCO - MOLLEPATA - SORAYPAMPA</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Pasaremos por su hotel a las 05:00 con nuestro autobús privado, para dirigirnos hacia  el poblado de Mollepata donde tendremos una parada para el desayuno.</p>
						<p>Iniciaremos el viaje hacia el punto de inicio de la caminata Challa cancha,caminaremos hasta llegar  primer campamento soraypampa (3835 m.s.n.m).</p>
						<p>A la llegada al campamento tendremos el almuerzo y subiremos hacia la laguna de Humantay ( 3965 m.s.n.m) donde realizaremos una ceremonia de agradecimiento a la pachamama.</li>
					</ul> 
					<div class="table-responsive">
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
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/mollepata.jpg" title="Mollepata."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/mollepata.jpg" alt="Mollepata." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-soraypampa.jpg" title="Campamento de soraypampa."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-soraypampa.jpg" alt="Campamento de soraypampa" class="img-responsive">
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
					<p>SORAYPAMPA - CHAULLAY - COLPAPAMPA</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Después del desayuno en el campamento, iniciaremos nuestra caminata (considerada la más fuerte del viaje) a las 07:00 am, salimos con destino a Salkantay - Pampa.
						Descenderemos después por 1 hora y media hacia Huayracmachay, en este punto almorzaremos, 
						Continuaremos nuestra caminata hasta llegar a nuestro segundo campamento en Chaullay.</li>
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
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/salkantay.jpg" title="Nevado de Salkantay."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/salkantay.jpg" alt="Nevado de Salkantay." class="img-responsive">
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
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-en-chaullay.jpg" title="Campamento en Chaullay."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-en-chaullay.jpg" alt="Campamento en Chaullay." class="img-responsive">
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
					<p>COLPAPAMPA – PLAYA – SANTA TERESA.</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Después de tomar el desayuno, continuaremos el viaje apreciando la diversidad de flora y fauna, atravesando el valle de Santa Teresa.</p><p>
						Llegaremos hasta el sector denominado La Playa donde almorzaremos.
						Tomaremos un transporte que nos llevará de Playa - Santa Teresa, recorrido que dura 1 hora aproximadamente.</p><p>
						Llegaremos a nuestro campamento en Santa Teresa, para dejar las mochilas dentro de las carpas.
						Tomaremos el transporte de Santa teresa a los baños termo medicinales de Cocalmayo, actividad que nos ayudar a relajar nuestros cuerpos. 
						Después de tomar el baño retornaremos al campamento para pasar la noche.</p>
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
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/santa-teresa.jpg" title="el valle de Santa Teresa."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/santa-teresa.jpg" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/banos-termo-medicinales-de-cocalmayo.jpg" title="Baños termo medicinales de Cocalmayo."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/banos-termo-medicinales-de-cocalmayo.jpg" alt="Baños termo medicinales de Cocalmayo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-para-pasar-la-noche.jpg" title="Campamento para pasar la noche."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/campamento-para-pasar-la-noche.jpg" alt="Campamento para pasar la noche." class="img-responsive">
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
					<p>SANTA TERESA - HIDROELÉCTRICA - AGUAS CALIENTES.</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Luego de tomar el desayuno, continuaremos nuestra caminata desde Santa Teresa hasta el pueblo de Hidroeléctrica.</p><p>
					    Después tendremos una caminata de 2 a 3 horas más hacia el pueblo de Aguas Calientes. ruta que es fascinante por la diversidad de flora y fauna que se encuentra en ella.</p><p>
						Al llegar al pueblo de Aguas Calientes iremos directo al hotel localizado cerca al santuario de Machu Picchu para pasar la noche.</p>
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
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/tren-a-la-hidroelectrica.jpg" title="Tren a la Hidroeléctrica."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/tren-a-la-hidroelectrica.jpg" alt="Tren a la Hidroelectrica." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/pueblo-de-aguas-calientes.jpg" title="pueblo de Aguas Calientes"><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/pueblo-de-aguas-calientes.jpg" alt="pueblo de Aguas Calientes" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/complejo-arqueologico-de-machu-picchu.jpg" title="Complejo Arqueologico de Machu Picchu."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/complejo-arqueologico-de-machu-picchu.jpg" alt="Complejo Arqueologico de Machu Picchu." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 5</span></h3> 
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Luego del desayuno, a las 04h30 iniciaremos el ascenso hacia Machu Picchu. 
						Tendremos una visita guiada con un profesional, por todo el complejo arqueológico de Machu Picchu.
						Una vez culminada nuestra visita a la maravilla del mundo, retornaremos hacia el pueblo Aguas Calientes, para almorzar y esperar el tren retorno hacia Ollantaytambo.
						El recorrido del tren tiene una duración de 1 hora 45 minutos hasta el pueblo de ollantaytambo.
						Al llegar a Ollantaytambo nos estará esperando nuestro bus privado que nos llevará hasta la ciudad de Cusco. El viaje tendrá una duración de 1 hora y media aproximadamente.</li>
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
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/complejo-arqueologico-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/complejo-arqueologico-de-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/desayuno.jpg" title="Desayuno en aguas calientes."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/desayuno.jpg" alt="Desayuno en aguas calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/bus-de-regreso-a-cusco.jpg" title="Retorno al cusco en bus."><img src="img/camino-salkantay/camino-salkantay-a-machu-picchu-5-dias-4-noches/bus-de-regreso-a-cusco.jpg" alt="Retorno al cusco en bus." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Transporte privado desde su hotel hasta el pueblo de Mollepata.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrada a Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Guía profesional en español.</li>
                        <li><i class="icon-ok-circle-1"></i>Cocinero: Especializado en comida tradicional y vegetariano.</li>
                        <li><i class="icon-ok-circle-1"></i>Asimilas: para equipos de camping y alimentación.</li>
                        <li><i class="icon-ok-circle-1"></i>Carpas para el guía, cocinero y porteadores.</li>
                        <li><i class="icon-ok-circle-1"></i>Carpas de paxs,matras, mesas, sillas, comedor, tienda cocina.</li>
                        <li><i class="icon-ok-circle-1"></i>Alimentación 4 desayunos / 4 almuerzos / 4 cenas.</li>
                        <li><i class="icon-ok-circle-1"></i>Traslado de Playa – Santa teresa.</li>
                        <li><i class="icon-ok-circle-1"></i>Hotel  1 noche en Aguas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>Boleto de tren de retorno de Aguas Calientes - Ollantaytambo.</li>
                        <li><i class="icon-ok-circle-1"></i>transporte de Ollantaytambo - Cusco.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Desayuno del primer día.</li>
                        <li><i class="icon-cancel-circle-2"></i>El almuerzo y la cena del último día.</li>
                        <li><i class="icon-cancel-circle-2"></i>Bus de subida y bajada Aguas Calientes - Machu Picchu.</li>
                        <li><i class="icon-cancel-circle-2"></i>Bolsa de dormir.</li>
                        <li><i class="icon-cancel-circle-2"></i>Entrada a Montaña Huayna Picchu.</li>
                        <li><i class="icon-cancel-circle-2"></i>Servicio de Tren de Hidroeléctrica – Aguas calientes.</li>
                        <li><i class="icon-cancel-circle-2"></i>Visita a los baños termales de Aguas Calientes. Donde puede relajarse mientras  espera el tren a Ollantaytambo.</li>
                        <li><i class="icon-cancel-circle-2"></i>Se encuentra a 10 minutos a pie desde el pueblo. La entrada cuesta  S / .10.00. Las toallas se pueden alquilar en Aguas Calientes.</li>
                        <li><i class="icon-cancel-circle-2"></i>Seguro de viaje.</li>
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
						<li><i class="icon-lock"></i> Servicio Privado</li>
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
         include("includes/costados/mejores-caminatas.php"); 
		 include("includes/costados/paquete-plus.php");
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