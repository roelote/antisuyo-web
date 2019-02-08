<?php
$nombre_paquete = 'Lima Paracas Nazca Arequipa Puno Cusco y Machu Picchu';
$numero_dias='14 días y 13 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Paquete: Lima, Paracas, Nazca, Arequipa, Puno y Cusco - 14 Días 13 Noches. ! Este paquete Está diseñado para conocer las principales atracciones turísticas de todo Perú. Comenzando por la ciudad de Lima, con sus muchos puntos históricos y modernos, aprovecharemos las visitas para disfrutar de la gastronomía, que es considerada uno de los mejores del mundo.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Tours Peru";
$url_category="tours-peru";

$url_foto_seo="https://www.antisuyotrekperu.com/es/img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/canon-del-colca.jpg";
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
   <div class="layer"></div>|
    <?php include("includes/menu.php"); ?>
      <section class="slider-tours">

                <?php   $url_s = "paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>1540</span>Por persona
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
					 <p>Paquete: <strong>Lima</strong>, <strong>Paracas</strong>, <strong>Nazca</strong>,  <strong>Arequipa</strong>, <strong>Puno</strong> y <strong>Cusco</strong> - 14 Días 13 Noches. ! Este paquete Está diseñado para conocer las principales <strong>atracciones turísticas</strong> de todo <strong>Perú</strong>. Comenzando por la ciudad de Lima, con sus muchos puntos históricos y modernos, aprovecharemos las visitas para disfrutar de <strong>la gastronomía</strong>, que es considerada uno de los mejores del mundo.</p>
					 <p>Enseguida continuaremos a otro punto turístico que forma parte del circuito de <strong>la costa peruana</strong>, <strong>las Islas Ballestas</strong>, conocido como: la pequeña <strong>isla galápagos</strong> en el <strong>Perú</strong>, donde se encuentran diversas especies de flora y fauna. También llegaremos "al ombligo del mundo y capital del imperio de los <strong>Incas</strong>"  recorriendo sus sitios arqueológicos, <strong>Valle Sagrado de los Incas</strong> que alberga los centros arqueológicos más interesantes para luego pasar la noche en la ciudadela de <strong>Aguas Calientes</strong> un pequeño pueblo cerca de uno de los <strong>maravillas del mundo</strong>: <strong>Machu Picchu</strong>.</p>              		
              		<p>Siguiendo la ruta entramos a la ruta <strong>Cusco</strong> - <strong>Puno</strong>, denominada la "Ruta del Sol", con una gran cantidad de sus sitios arqueológicos importantes llegando así al <strong>Lago Titicaca</strong> - Puno, el lago navegable más alto del mundo en el que navegaremos un día entero en sus aguas y conoceremos las islas principales.</p>              		
              		<p>Siguiendo la ruta entramos a la ruta <strong>Cusco</strong> - Puno, denominada la "<strong>Ruta del Sol</strong>", con una gran cantidad de sus sitios arqueológicos importantes llegando así al Lago Titicaca - Puno, el lago navegable más alto del mundo en el que navegaremos un día entero en sus aguas y conoceremos las islas principales.</p>
              		<p>En el último día, conoceremos <strong>la capital peruana</strong> Lima, donde visitaremos: <strong>Lima colonial</strong> y moderna, con sus muchos puntos históricos y modernos aprovecharemos las visitas para disfrutar de la <strong>gastronomía</strong>, que es considerada uno de los mejores del <strong>mundo</strong>.</p>               		
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>RECEPCIÓN EN LIMA</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Recepción en el aeropuerto de Lima y traslado al hotel.</li>
                    <li><i class="icon-ok-squared"></i>Tarde libre para descansar o conocer a la ciudad.</li>
                    <li><i class="icon-ok-squared"></i>Pernocte en Lima.</li>                    
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/traslado.jpg" title="Traslado del Aeropuerto"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/traslado.jpg" alt="Image" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/dia-libre-lima.jpg" title="Día libre para la aclimatación"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/dia-libre-lima.jpg" alt="Image" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/pernocte-en-lima.jpg" title="Pernocte en Cusco"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/pernocte-en-lima.jpg" alt="Image" class="img-responsive">
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
					<p>LIMA CITY TOUR CIUDAD COLONIAL Y MODERNA</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Desayuno en el hotel.</li>
                    <li><i class="icon-ok-squared"></i>Mañana libre para conocer algunos museos que no está en nuestra programa.</li>
                    <li><i class="icon-ok-squared"></i>En la tarde City tour comienza a las 14:00 hasta las 18:00.</li>
                    <li><i class="icon-ok-squared"></i>Visita:Las plazas principales, ruinas de Huaca Pucllana, Lima Colonial y Moderna.</li>
                    <li><i class="icon-ok-squared"></i>Después de City tour visitáremos el Circuito Mágico de  aguas de las 18h15 hasta las 20h00.</li>
                    <li><i class="icon-ok-squared"></i>Pernocte en Lima.</li>

					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/lima-colonial.jpg" title="Lima Colonial."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/lima-colonial.jpg" alt="Lima Colonial." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/ruinas-huaca-pucllana.jpg" title="ruinas de Huaca Pucllana."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/ruinas-huaca-pucllana.jpg" alt="ruinas de Huaca Pucllana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/circuito-magico-aguas.jpg" title=" Circuito Mágico de aguas"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/circuito-magico-aguas.jpg" alt=" Circuito Mágico de aguas" class="img-responsive">
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
					<p>LIMA - PARACAS</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 03:30 am y nos trasladamos al terminal terrestre.</li>
                        <li><i class="icon-ok-squared"></i>Tomaremos el Bus de Lima - Paracas a las 4:30 am.</li>
                        <li><i class="icon-ok-squared"></i>Recepción en Paracas y traslado al hotel a las 7:30 am</li>
                        <li><i class="icon-ok-squared"></i>Enseguida continuamos al tours a las Islas Ballestas desde las 08:00 hasta 10:30 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde saldremos al paseo a la reserva de Paracas desde las 12h00 hasta las 16h00.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Paracas.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/Islas-ballestas.jpg" title=" Islas Ballestas."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/Islas-ballestas.jpg" alt=" Islas Ballestas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/reserva-de-paracas.jpg" title="reserva de Paracas."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/reserva-de-paracas.jpg" alt="reserva de Paracas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/pernocte-en-paracas.jpg" title="Pernocte en Paracas."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/pernocte-en-paracas.jpg" alt="Pernocte en Paracas." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 4</span></h3> 
					<p>PARACAS - NAZCA - AREQUIPA.</p>
				</div>
					<ul class="list_icons">
                   <li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                   <li><i class="icon-ok-squared"></i>Pasaremos a recoger por su hotel a las 07:00 a.m.</li>
                   <li><i class="icon-ok-squared"></i>Nuestro bus saldrá de Paracas - Nazca a las 07:30 a.m.</li>
                   <li><i class="icon-ok-squared"></i>Luego tendremos un viaje de 3 horas hasta la ciudad de Nazca.</li>
                   <li><i class="icon-ok-squared"></i>Recepción en Nazca a las 10:30 y traslado al aeródromo.</li>
                   <li><i class="icon-ok-squared"></i>El sobre vuelo en la líneas de Nazca comenzará a las 11.00 hasta las 11.35.</li>
                   <li><i class="icon-ok-squared"></i>Tarde libre para aprovechar visitar la ciudad de Nazca.</li>
                   <li><i class="icon-ok-squared"></i>Por la noche nos embarcamos en nuestro bus cama de Nazca - Arequipa a las 22:00.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" title="Desayuno en el Hotel."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" alt="Desayuno en el Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/lineas-de-nazca.jpg" title="Lineas de nazca."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/lineas-de-nazca.jpg" alt="Lineas de nazca." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/ciudad-de-nazca.jpg" title="Ciudad de Nazca."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/ciudad-de-nazca.jpg" alt="Ciudad de Nazca." class="img-responsive">
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
					<p>AREQUIPA - CITY TOURS PANORAMICO</p>
				</div>
					<ul class="list_icons">
					   <li><i class="icon-ok-squared"></i>Llegada a Arequipa aproximadamente a las 06:00a.m.</i>
					   <li><i class="icon-ok-squared"></i>Recepción en terminal terrestre y traslado al hotel.</i>
					   <li><i class="icon-ok-squared"></i>Por la mañana libre para descansar en el hotel.</i>
					   <li><i class="icon-ok-squared"></i>En la tarde el paseo a City Tours Panoramico comenzará desde las 14h00 hasta las 18h00.</i>
					   <li><i class="icon-ok-squared"></i>Visita: Plaza de Armas, Mirador de Carmen alto, Mirador de Yanahuara, Incalpaca</i> <li><i class="icon-ok-squared"></i>También visitáremos Mansión del Fundador, Balneario el Tingo, Distrito sachaca, Terrazas de Paucarpata.</i>
					   <li><i class="icon-ok-squared"></i>Pernocte en Arequipa.</i>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" title="Desayuno en el hotel"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" alt="Desayuno en el hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/el-mirador-de-carmen Alto.jpg" title=" Mirador de Yanahuara."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/el-mirador-de-carmen Alto.jpg" alt=" Mirador de Yanahuara." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/terrazas-de-paucarpata.jpg" title="Terrazas de Paucarpata."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/terrazas-de-paucarpata.jpg" alt="Terrazas de Paucarpata." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 6</span></h3> 
					<p>AREQUIPA - CHIVAY</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 08:15.</li>
                        <li><i class="icon-ok-squared"></i>Salida a Cañón del Colca a las 08h30.</li>
                        <li><i class="icon-ok-squared"></i>En el transcurso del viaje a Chivay apreciaremos los diferentes pueblos alto andino y maravillosos paisajes.</li>
                        <li><i class="icon-ok-squared"></i>Después de la llegada a Chivay nuestro transporte los dejará en sus respectivos hoteles.</li>
                        <li><i class="icon-ok-squared"></i>En la tarde podrán aprovechar ir a los baños termales de La Calera.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Chivay.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/ciudad-de-chivay.jpg" title="viaje a Chivay."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/ciudad-de-chivay.jpg" alt="viaje a Chivay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/canon-del-colca.jpg" title="Cañón del Colca."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/canon-del-colca.jpg" alt="Cañón del Colca." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/banos-termales-de-la-calera.jpg" title="baños termales de La Calera."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/banos-termales-de-la-calera.jpg" alt="baños termales de La Calera." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 7</span></h3> 
					<p>CAÑÓN DEL COLCA - AREQUIPA</p>
				</div>
					<ul class="list_icons">
					  <li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</i>
					  <li><i class="icon-ok-squared"></i>Salida al Cañón del Colca 06:30.</i>
					  <li><i class="icon-ok-squared"></i>Visita: A todo los Pueblos que ubicado en el transcurso del viaje.</i>
					  <li><i class="icon-ok-squared"></i>el cañón más profundo de América, donde podrán observar el vuelo de los cóndores.</i>
					  <li><i class="icon-ok-squared"></i>Después retornan a Chivay a las 12:00 por la tarde tomarán el bus de Chivay - Puno a las 13:00.</i>
					  <li><i class="icon-ok-squared"></i>La llegada a  Puno estará programada a las 19:00.</i>
					  <li><i class="icon-ok-squared"></i>Recepción en Puno y traslado al hotel.</i>
					  <li><i class="icon-ok-squared"></i>Pernocte en Puno.</i>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" title="Desayuno en el Hotel."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" alt="Desayuno en el Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/vuelo de condores.jpg" title="vuelo de los cóndores."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/vuelo de condores.jpg" alt="vuelo de los cóndores." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/retorno-a-arequipa.jpg" title="Retorno-a-Arequipa."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/retorno-a-arequipa.jpg" alt="Retorno-a-Arequipa." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 8</span></h3> 
					<p>PUNO - LAGO TITICACA.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Por la mañana buscaremos en su hotel de 07:00 a 07:30 a.m.</li>
                    <li><i class="icon-ok-squared"></i>Nuestro barco saldrá a las 07:45 am.</li>
                    <li><i class="icon-ok-squared"></i>Visita: A las Islas Flotantes de Uros y la isla Taquile.</li>
                    <li><i class="icon-ok-squared"></i>Por la tarde retornaremos a  Puno  a las 17:00.</li>
                    <li><i class="icon-ok-squared"></i>Pernocte en Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" title="Desayuno en el Hotel."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" alt="Desayuno en el Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/islas-flotantes-uros.jpg" title="Islas Flotantes de Uros"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/islas-flotantes-uros.jpg" alt="isla flotantes de Taquile." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/islas-flotantes-de-taquile.jpg" title="Islas Flotantes de Taquile."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/islas-flotantes-de-taquile.jpg" alt="Islas Flotantes de Taquile." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 9</span></h3> 
					<p>PUNO – CUSCO/RUTA DEL SOL.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos en hotel a las 06:30.</li>
                        <li><i class="icon-ok-squared"></i>Nuestro Bus saldrá de Puno - Cusco  a las 07:00 am.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Al museo de Pukara, La Raya, Sicuani (almuerzo) Raqchi (Templo de Wiracocha).</li>
                        <li><i class="icon-ok-squared"></i>Visitáremos la Capilla sixtina de Andahuaylillas.</li> 
                        <li><i class="icon-ok-squared"></i>Llegada a la ciudad de Cusco será a las 17:00.</li>
                        <li><i class="icon-ok-squared"></i>Recepción en Cusco y traslado al hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/capilla-sixtina-andahuaylillas.jpg" title="la Capilla sixtina deAndahuaylillas."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/capilla-sixtina-andahuaylillas.jpg" alt="la Capilla sixtina de Andahuaylillas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/sitio-arqueologico-de-raqchi.jpg" title="Complejo arqueologica de raychi."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/sitio-arqueologico-de-raqchi.jpg" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/pernocte-en-cusco.jpg" title="Pernocte en Cusco."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/pernocte-en-cusco.jpg" alt="Pernocte en Cusco." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 10</span></h3> 
					<p>CUSCO - CITY TOUR ARQUEOLÓGICO</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Mañana libre para conocer la ciudad.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde salida: a City Tour Arqueológico  13:30 hasta 18:30.</li>
                        <li><i class="icon-ok-squared"></i>Visita: el Templo del Sol Koricancha, los sitios arqueológicos.</li> 
                         <li><i class="icon-ok-squared"></i>También visitáremos Sacsayhuaman, Kenko, Puca Pucara y Tambomachay.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>

					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/templo-del-sol-koricancha.jpg" title="templo del sol coricancha"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/templo-del-sol-koricancha.jpg" alt="templo del sol coricancha" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/complejo-arqueologico-de-sacsayhuaman.jpg" title="Complejo arqueologico de sacsayhuaman"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/complejo-arqueologico-de-sacsayhuaman.jpg" alt="Complejo arqueologico de sacsayhuaman" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/complejo-arqueologico-de-qenqo.jpg" title="Complejo arqueologico de qenqo"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/complejo-arqueologico-de-qenqo.jpg" alt="Complejo arqueologico de qenqo" class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 11</span></h3> 
					<p>CUSCO - VALLES SAGRADO DE LOS INCAS</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el hotel.</li>
						<li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 08h15.</li>
						<li><i class="icon-ok-squared"></i>Salida al Valle Sagrado de los Incas 08h40.</li>
						<li><i class="icon-ok-squared"></i>Visitaremos: Mercado de Corao, Mercado de Pisaq, al centro arqueológico de Pisaq.</li>
						<li><i class="icon-ok-squared"></i>También visitáremos el parque arqueológico de Ollantaytambo.</li>
						<li><i class="icon-ok-squared"></i>Por la tarde tomaremos el tren Ollantaytambo - Aguas Calientes a las 19h04.</li>
						<li><i class="icon-ok-squared"></i>Recepción en la estación de tren en Aguas Calientes a las 20h45.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Aguas calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/complejo-arqueologico-de-pisac.jpg" title="Complejo arqueologico de pisac."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/complejo-arqueologico-de-pisac.jpg" alt="Complejo arqueologico de pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/complejo-arqueologico-de-ollantaytambo.jpg" title="Complejo arqueologico de ollantaytambo."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/complejo-arqueologico-de-ollantaytambo.jpg" alt="Complejo arqueologico de ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/complejo-arqueologico-de-chincheros.jpg" title="complejo arqueologico de chincheros."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/complejo-arqueologico-de-chincheros.jpg" alt="complejo arqueologico de chincheros." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 12</span></h3> 
					<p>CUSCO - MACHU PICCHU DIA COMPLETO</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
						<li><i class="icon-ok-squared"></i>Salimos muy temprano a Machu Picchu para ver la salida del sol.</li>
						<li><i class="icon-ok-squared"></i>Visita a Machu Picchu durante 2 horas con nuestro guía.</li>
						<li><i class="icon-ok-squared"></i>Después tendrán tiempo libre para tomar fotos y aprovechar más tiempo en Machupicchu.</li>
						<li><i class="icon-ok-squared"></i>Por la tarde retorno hacia Aguas Calientes.</li>
						<li><i class="icon-ok-squared"></i>Luego tomaremos el tren de retorno de Aguas Calientes - Ollantaytambo a las 18:20 o 19:00.</li>
						<li><i class="icon-ok-squared"></i>Traslado en nuestro transporte de Ollantaytambo - Cusco.</li>
						<li><i class="icon-ok-squared"></i>Llegada a la ciudad de Cusco será aproximadamente de 22:20 a 22:40.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/sitio-arqueologica-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/sitio-arqueologica-de-machu-picchu.jpg" alt="Image" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/intiwatana.jpg" title="El Intihuatana"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/intiwatana.jpg" alt="Image" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/el-templo-del-sol.jpg" title="Templo del Sol"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/el-templo-del-sol.jpg" alt="Image" class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 13</span></h3> 
					<p> CUSCO - DÍA LIBRE</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
						<li><i class="icon-ok-squared"></i>Día libre para hacer compras, degustar de la comida típica.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>                   
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" title="Desayuno en el Hotel."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" alt="Desayuno en el Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/dia-libre-aclimatacion.jpg" title="Día libre para hacer compras"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/dia-libre-aclimatacion.jpg" alt="Día libre para hacer compras" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/pernocte-en-cusco.jpg" title="Pernocte en Cusco."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/pernocte-en-cusco.jpg" alt="Pernocte en Cusco." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 14</span></h3> 
					<p>CUSCO - TRASLADO</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Traslado de hotel - Aeropuerto 2 horas antes de salida de su vuelo.</li>

					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" title="Desayuno en el Hotel"><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/desayuno-en-el-hotel.jpg" alt="Desayuno en el Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/salida-del-hotel.jpg" title="Salida del hotel."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/salida-del-hotel.jpg" alt="alida del hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/traslado-al-aeropuerto.jpg" title="Traslado al aeropuerto."><img src="img/paquetes peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noches/traslado-al-aeropuerto.jpg" alt="Traslado al aeropuerto." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Traslado Aeropuerto - Hotel - Aeropuerto (Lima).</li>
                        <li><i class="icon-ok-circle-1"></i>Traslado Aeropuerto-Hotel-Aeropuerto (Cusco).</li>
                        <li><i class="icon-ok-circle-1"></i>Transporte turistico para cada paseo.</li>
                        <li><i class="icon-ok-circle-1"></i>Guia profesional en cada ciudad en idioma español.</li>
                        <li><i class="icon-ok-circle-1"></i>Bus cama de Lima - Paracas.</li>
                        <li><i class="icon-ok-circle-1"></i>Paseos a las islas ballestas y la reserva de Paracas.</li>
                        <li><i class="icon-ok-circle-1"></i>Bus cama de Paracas - Nazca.</li>
                        <li><i class="icon-ok-circle-1"></i>Sobre vuelo en las líneas de Nazca.</li>
                        <li><i class="icon-ok-circle-1"></i>Bus cama de Nazca - Arequipa.</li>
                        <li><i class="icon-ok-circle-1"></i>City tours panoramico en la ciudad de  Arequipa.</li>
                        <li><i class="icon-ok-circle-1"></i>Paseo al Cañon Colca en Arequipa 2 días.</li>
                        <li><i class="icon-ok-circle-1"></i>Bus Turístico de  Chivay - Puno.</li>
                        <li><i class="icon-ok-circle-1"></i>Tours en Cusco: City Tour Arqueológico, Valle Sagrado de los incas y Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Tours en Lima: City tour de la ciudad moderna y colonial.</li>
                        <li><i class="icon-ok-circle-1"></i>Paseo en Puno. Lago Titicaca full day.</li>
                        <li><i class="icon-ok-circle-1"></i>Ruta de Sol Cusco, visitando varios sitios turísticos.</li>
                        <li><i class="icon-ok-circle-1"></i>2 Noches de Hotel en Lima.</li>
                        <li><i class="icon-ok-circle-1"></i>1 Noche de hotel en Paracas.</li>
                        <li><i class="icon-ok-circle-1"></i>1 Noche de hotel en Arequipa.</li>
                        <li><i class="icon-ok-circle-1"></i>1 Noche de hotel en Chivay.</li>
                        <li><i class="icon-ok-circle-1"></i>4 Noches de hotel en Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>2 Noches de Hotel en Puno.</li>
                        <li><i class="icon-ok-circle-1"></i>1 Noche de hotel en Aguas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrada a  Machupicchu por 1 día.</li>
                        <li><i class="icon-ok-circle-1"></i>Servicio de tren Ida y Vuelta en servicio (EXPEDITION).</li>
                        <li><i class="icon-ok-circle-1"></i>Bus subida y bajada de Aguas Calientes - Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Traslado Ollantaytambo - Cusco.</li>

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
						<li><i class="icon-cancel-circle-2"></i>Almuerzo y Cena.</li>
                        <li><i class="icon-cancel-circle-2"></i>Boleto Turístico Cusco USD 45.</li>
                        <li><i class="icon-cancel-circle-2"></i>Boleto Turístico Arequipa 27 Dólares.</li>
                        <li><i class="icon-cancel-circle-2"></i>Tasa de Aeródromo de Nazca 8 Dólares.</li>
                        <li><i class="icon-cancel-circle-2"></i>Ruta del sol Boleto Turístico 15 US.</li>
                        <li><i class="icon-cancel-circle-2"></i>Vuelos Nacionales y internacionales.</li>
                        <li><i class="icon-cancel-circle-2"></i>Seguro de viaje.</li>
                        <li><i class="icon-cancel-circle-2"></i>Otros.</li>
						
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
						<li><i class=" icon-plus-circled-2"></i> Otros..</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Mapa</h3>
                </div>  
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1na-zAHT6A9nhHSkIZf4-VDsu724" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<th colspan="9">
				<h4><span>Paquete + Hotel+Bus+Tren(Clase turístico)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATEGO-<br>RÍA</strong></td>
				<td><strong>HOTELES<br> EN LIMA</strong></td>
				<td><strong>HOTELES<br> EN PARACAS</strong></td>
				<td><strong>HOTELES<br> EN ARE-<br>QUIPA</strong></td>
				<td><strong>HOTELES<br> EN PUNO</strong></td>
				<td><strong>HOTELES<br> EN CUSCO</strong></td>
				<td><strong>HOTELES<br> EN AGUAS CALIEN-<br>TES</strong></td> 
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE&#160</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONÓ-<br>MICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Monte Real<br><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Santa Maria</td>
				<td><i class="icon-play-5"></i>Hotel Ensueño</td>
				<td><i class="icon-play-5"></i>Hotel Helena</td>
				<td><i class="icon-play-5"></i>Hotel Prisma</td>
				<td><i class="icon-play-5"></i>Hotel Continental</td>
				<td>$ 1590</td>
				<td>$ 1560</td>  
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍS-<br>TICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Carmel<br> <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>El Mirador Hotel</td>
				<td><i class="icon-play-5"></i>H. Posada Monasterio</td>
				<td><i class="icon-play-5"></i>H.<br>Sol Plaza Inn</td>
				<td><i class="icon-play-5"></i>H. S.A Internacional</td>
				<td><i class="icon-play-5"></i>Hotel Hatun Samay</td>
				<td>$ 1770</td>
				<td>$ 1730</td> 
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPE-<br>RIOR</h5></td>
				<td><i class="icon-play-5"></i>San Agustin Exclusive<br><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>San Agustin Paracas</td>
				<td><i class="icon-play-5"></i>Hotel Terra Viva</td>
				<td><i class="icon-play-5"></i>Hotel Royal INN</td>
				<td><i class="icon-play-5"></i>San Agusntin Dorado</td>
				<td><i class="icon-play-5"></i>Hotel Intitpunku Mapi</td>
				<td>$ 1980</td>
				<td>$ 1930</td> 
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
        include("includes/costados/paquetes-machu-picchu.php"); 
        include("includes/costados/mejores-caminatas.php"); 
        include("includes/costados/paquetes-peru.php"); 
        include("includes/costados/paquete-plus.php");
        include("includes/costados/paquetes-machu-picchu.php"); 
        include("includes/costados/mejores-caminatas.php"); 
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