<?php
$nombre_paquete = 'Lima Cusco y Puno';
$numero_dias='9 días y 8 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Paquetes Peru: Lima, Cusco y Puno 9 días / 8 noches. Con este paquete e itinerario visitará los puntos principales del país, empezando por la capital, Lima, donde haremos City tours por la ciudad colonial y moderna, el complejo arqueológico de Huaca Pucllana, entre otros.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Tours Peru";
$url_category="tours-peru";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/1-dia/lima-cusco-y-puno-tarde-libre-para-conocer-la-ciudad.jpg";
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

                <?php   $url_s = "paquetes peru/lima-cusco-y-puno-9-dias-8-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>950</span>Por persona
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
					 <p>Paquetes Peru: <strong>Lima</strong>, <strong>Cusco</strong> y <strong>Puno</strong> 9 días / 8 noches. Con este paquete e itinerario  visitará los puntos principales del país, empezando por la capital, <strong>Lima</strong>, donde haremos <strong>City tours</strong> por la ciudad colonial y moderna, el complejo arqueológico de <strong>Huaca Pucllana</strong>, entre otros.</p>					 
					 <p>Seguiremos con la ciudad de <strong>Cusco</strong> - "el ombligo del mundo y capital del <strong>imperio Inca</strong>" y sus sitios arqueológicos, <strong>Valle Sagrado de los Incas</strong> - que alberga los centros arqueológicos muy interesantes, siguiendo el recorrido nos alojaremos en la Ciudadela de <strong>Aguas Calientes</strong> un pequeño pueblo ubicado cerca de una de los <strong>maravillas del mundo</strong>: <strong>Machu Picchu</strong></p>              		
              		<p>Siguiendo la ruta entraremos en la ruta de <strong>Cusco</strong> - <strong>Puno</strong>, denominada la "<strong>Ruta del Sol</strong>", con una gran cantidad de sus puntos importantes y por último llegaremos al <strong>Lago Titicaca</strong> - Puno, el lago navegable más alto del mundo en el que podremos estar un día entero y conocer las islas principales.</p> 
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>RECEPCIÓN EN LIMA.</p>
				</div>
					<ul class="list_icons">
						 <li><i class="icon-ok-squared"></i>Recepción en el aeropuerto y traslado a su respectivo hotel.</li>
						 <li><i class="icon-ok-squared"></i>Tarde libre para descansar o aprovechar conociendo la ciudad de Lima.</li>
						 <li><i class="icon-ok-squared"></i>Pernocte en Lima.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/1-dia/lima-cusco-y-puno-resepcion-en-el-aeropueto.jpg" title="Traslado del Aeropuerto"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/1-dia/lima-cusco-y-puno-resepcion-en-el-aeropueto.jpg" alt="Traslado del Aeropuerto" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/1-dia/lima-cusco-y-puno-tarde-libre-para-conocer-la-ciudad.jpg" title="Día libre para Conocer la Ciudad."><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/1-dia/lima-cusco-y-puno-tarde-libre-para-conocer-la-ciudad.jpg" alt="Día libre para Conocer la Ciudad." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/1-dia/lima-cusco-y-puno-traslado-al-Hotel.jpg" title="Pernocte en Lima"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/1-dia/lima-cusco-y-puno-traslado-al-Hotel.jpg" alt="Pernocte en Lima" class="img-responsive">
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
					<p>LIMA CITY TOUR CIUDAD COLONIAL Y MODERNA.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Desayuno en su hotel.</li>
                    <li><i class="icon-ok-squared"></i>Mañana libre para conocer algunos museos cuyas visitas no están incluídos en nuestro programa.</li>
                    <li><i class="icon-ok-squared"></i>En la tarde City tour comienza a las 14:00 hasta las 18:00.</li>
                    <li><i class="icon-ok-squared"></i>Visita: Plazas principales, ruinas de Huaca Pucllana, Lima Colonial y Moderna.</li>
                    <li><i class="icon-ok-squared"></i>Después visitáremos el Circuito Mágico de aguas de las 18h15 hasta las 20h00.</li>
                    <li><i class="icon-ok-squared"></i>Pernocte en Lima.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/2-dias/lima-cusco-y-puno-lima-colonial.jpg" title="City Tour Ciudad Colonial Y Moderna"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/2-dias/lima-cusco-y-puno-lima-colonial.jpg" title="City Tour Ciudad Colonial Y Moderna" alt="City Tour Ciudad Colonial Y Moderna" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/2-dias/lima-cusco-y-puno-huaca-pucllana.jpg" title="Ruinas de la Huaca Pucllana"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/2-dias/lima-cusco-y-puno-huaca-pucllana.jpg" alt="Ruinas de la Huaca Pucllana" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/2-dias/lima-cusco-y-puno-circuito-magico-aguas.jpg" title="Sircuito Magico de Aguas"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/2-dias/lima-cusco-y-puno-circuito-magico-aguas.jpg" title="Templo del Sol" alt="Sircuito Magico de Aguas" class="img-responsive">
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
					<p>LIMA - CUSCO - CITY TOUR ARQUEOLÓGICO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Traslado Hotel - Aeropuerto en Lima.</li>
                      <li><i class="icon-ok-squared"></i>Recepción en el aeropuerto de Cusco y traslado a su respectivo hotel.</li>
                      <li><i class="icon-ok-squared"></i>En la mañana libre para aclimatación a la altura.</li>
                      <li><i class="icon-ok-squared"></i>Por la tarde City Tour Arqueológico 14:00 hasta las 18:30.</li>
                      <li><i class="icon-ok-squared"></i>Visita: Templo del Sol Koricancha y los sitios arqueológicos.</li>
                      <li><i class="icon-ok-squared"></i>Sacsayhuaman, Qenqo, Pucapucara y Tambomachay.</li>
                      <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/3-dias/lima-cusco-y-puno-koricancha.jpg" title="templo del sol coricancha."><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/3-dias/lima-cusco-y-puno-koricancha.jpg" alt="templo del sol coricancha" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/3-dias/lima-cusco-y-puno-sacsayhuaman.jpg" title="Complejo Arqueologico de sacsayhuaman."><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/3-dias/lima-cusco-y-puno-sacsayhuaman.jpg" alt="Complejo Arqueologico de sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/3-dias/lima-cusco-y-puno-qenqo.jpg" title="Complejo Arqueologico de qenqo"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/3-dias/lima-cusco-y-puno-qenqo.jpg" alt="Complejo Arqueologico de qenqo" class="img-responsive">
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
					<p> CUSCO - VALLE SAGRADO DE LOS INCAS.</p>
				</div>
					<ul class="list_icons">
						 <li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
						 <li><i class="icon-ok-squared"></i>Pasaremos por su hotel de 08:00 a 08:20.</li>
						 <li><i class="icon-ok-squared"></i>Salida al Valle Sagrado de los incas 8:45 a.m.</li>
						 <li><i class="icon-ok-squared"></i>Visita: Pasaremos por el mercado de Corao, mercado de Pisaq.</li>
						 <li><i class="icon-ok-squared"></i>Visitaremos los sitios arqueológicos de Pisaq, Ollantaytambo y Chinchero.</li>
						  <li><i class="icon-ok-squared"></i>Retorno a Cusco 19:00.</li>
						  <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/4-dias/cusco-lima-y-puno-pisac.jpg" title="Complejo Arqueologico de Pisac"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/4-dias/cusco-lima-y-puno-pisac.jpg" alt="Complejo Arqueologico de Pisac" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/4-dias/cusco-clasico-convencional-ollantaytambo.jpg" title="Complejo arqueologico de ollantaytambo."><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/4-dias/cusco-clasico-convencional-ollantaytambo.jpg" alt="Complejo arqueologico de ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/4-dias/cusco-lima-y-puno-chinchero.jpg" title="Complejo Arqueologico de chincheros."><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/4-dias/cusco-lima-y-puno-chinchero.jpg" title="Complejo Arqueologico de chincheros." alt="Complejo Arqueologico de chincheros." class="img-responsive">
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
					<p>CUSCO - MACHU PICCHU FULL DAY.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 04:00 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Tomaremos nuestro bus que nos llevará de Cusco a Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>Donde tomaremos el tren de Ollantaytambo - Aguas Calientes a las 06:10 a.m.</li>
                        <li><i class="icon-ok-squared"></i>A la llegada recepción en Aguas Calientes a la 07:50 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Recorrido guiado en Machu Picchu durante 2 horas.</li>
                        <li><i class="icon-ok-squared"></i>Tiempo libre para tomar fotos y descansar dentro del parque de Machu Picchu.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde retornaremos de Machu Picchu - Aguas Calientes.</li>
                        <li><i class="icon-ok-squared"></i>Para esperar el tren de retorno de  Aguas Calientes - Ollantaytambo: 18:20 o 19:00.</li>
                        <li><i class="icon-ok-squared"></i>Traslado de Ollantaytambo - Cusco.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/5-dias/cusco lima y puno machu picchu.jpg" title="Sitio Arqueologica de Machu Picchu"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/5-dias/cusco lima y puno machu picchu.jpg" title="Sitio Arqueologica de Machu Picchu" alt="Sitio Arqueologica de Machu Picchu" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/5-dias/cusco-lima-y-puno-intihuatana.jpg" title="El Intihuatana"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/5-dias/cusco-lima-y-puno-intihuatana.jpg" alt="El Intihuatana" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/5-dias/cusco-lima-y-puno-templo-del-sol.jpg" title="Templo del Sol"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/5-dias/cusco-lima-y-puno-templo-del-sol.jpg" alt="Templo del Sol" class="img-responsive">
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
					<p>CUSCO - PUNO / RUTA DEL SOL.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 06:30 am.</li>
                        <li><i class="icon-ok-squared"></i>La salida de Bus Ejecutivo será a las 07:00.</li>
                        <li><i class="icon-ok-squared"></i>Visitas: A la capilla sixtina de Andahuaylillas, Raqchi, Sicuani( almuerzo).</li>
                        <li><i class="icon-ok-squared"></i> Visitas: A la Raya y Pucará.</li>
                        <li><i class="icon-ok-squared"></i>Recepción en Puno y traslado al hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Puno.</li>						
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/6-dias/cusco-lima-y-puno-capilla-sixtina-andahuaylillas.jpg" title="Capilla Sixtina de Andahuaylillas"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/6-dias/cusco-lima-y-puno-capilla-sixtina-andahuaylillas.jpg" alt="Capilla Sixtina de Andahuaylillas" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/6-dias/cusco-lima-y-puno-raqchi.jpg" title="Complejo Arqueologico de Raqchi"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/6-dias/cusco-lima-y-puno-raqchi.jpg" alt="Complejo Arqueologico de Raqchi" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/6-dias/cusco-lima-y-puno-recepcion-puno.jpg" title="Pernocte en Puno."><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/6-dias/cusco-lima-y-puno-recepcion-puno.jpg" title="Pernocte en Puno" alt="Pernocte en Puno." class="img-responsive">
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
					<p>PUNO - LAGO TITICACA.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</i>
                        <li><i class="icon-ok-squared"></i>Por la mañana buscaremos en su hotel de 07:00 a 07:30 a.m.</i>
                        <li><i class="icon-ok-squared"></i>Nuestro barco saldrá a las 07:45 am.</i>
                        <li><i class="icon-ok-squared"></i>Visita: A las Islas Flotantes de Uros y la isla Taquile.</i>
                        <li><i class="icon-ok-squared"></i>Por la tarde retornaremos a  Puno  a las 17:00.</i>
                        <li><i class="icon-ok-squared"></i>Pernocte en Puno.</i>
					</ul>
					<div class="row magnific-gallery">
					<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/7-dias/lima-cusco-y-puno-desayuno en-el-hotel.jpg" title="Desayuno en el Hotel"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/6-dias/cusco-lima-y-puno-recepcion-puno.jpg" alt="Desayuno en el Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/7-dias/lima-cusco-y puno-islas flotantes-uros.jpg" title="Islas Flotantes de los Uros"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/7-dias/lima-cusco-y puno-islas flotantes-uros.jpg" alt="Islas Flotantes de los Uros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/7-dias/lima-cusco-y-puno-islas-flotantes-de-taquile.jpg" title="Islas Flotantes de los Taquile"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/7-dias/lima-cusco-y-puno-islas-flotantes-de-taquile.jpg" alt="Islas Flotantes de los Taquile" class="img-responsive">
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
					<p>PUNO - CUSCO</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 7:30 am.</li>
                        <li><i class="icon-ok-squared"></i>Traslado del hotel al terminal terrestre a las  07:40.</li>
                        <li><i class="icon-ok-squared"></i>Nuestro bus turístico saldrá de Puno - Cusco a las 08:30.</li>
                        <li><i class="icon-ok-squared"></i>La llegada a la ciudad Cusco será a las 15:00.</li>
                        <li><i class="icon-ok-squared"></i>Recepción en el terminal terrestre de Cusco y traslado al hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>

					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/8-dias/lima-cusco-y-puno-traslado-hotel-a-cusco.jpg" title="Traslado de Puno a Cusco"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/8-dias/lima-cusco-y-puno-traslado-hotel-a-cusco.jpg" title="Traslado de Puno a Cusco" alt="Traslado de Puno a Cusco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/8-dias/lima-cusco-y-puno-llegada-a-cusco.jpg" title="Recepción en el termina"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/8-dias/lima-cusco-y-puno-llegada-a-cusco.jpg" alt="Recepción en el termina" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/8-dias/lima-cusco-y-puno-traslado-pernocte-en-cusco.jpg" title="Pernocte en Cusco."><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/8-dias/lima-cusco-y-puno-traslado-pernocte-en-cusco.jpg" alt="Pernocte en Cusco." class="img-responsive">
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
					<p>CUSCO – TRASLADO</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
						<li><i class="icon-ok-squared"></i>Traslado de hotel - Aeropuerto 2 horas antes de salida de su vuelo.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/9-dias/lima-cusco-y-puno-desayuno.jpg" title="Desayuno en el Hotel"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/9-dias/lima-cusco-y-puno-desayuno.jpg" alt="Desayuno en el Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/9-dias/lima-cusco-y-puno-hotel.jpg" title="salida del Hotel"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/9-dias/lima-cusco-y-puno-hotel.jpg" alt="salida del Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/9-dias/lima-cusco-y-puno-traslado.jpg" title="Traslado Al Aeropuerto"><img src="img/paquetes peru/lima-cusco-y-puno-9-dias-8-noches/9-dias/lima-cusco-y-puno-traslado.jpg" title="Traslado Al Aeropuerto" alt="Traslado del Hotel" class="img-responsive">
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1paYjcdWe-TJ9uvqEvpcN--Ng47w" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<h4><span>Paquete + Hotel+Bus+Tren(Clase turístico)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATEGORÍA</strong></td>
				<td><strong>HOTELES<br> EN LIMA</strong></td>
				<td><strong>HOTELES<br> EN PUNO</strong></td>
				<td><strong>HOTELES<br> EN CUSCO</strong></td> 
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE&#160</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONÓMICO</h5></td>
				<td><i class="icon-play-5"></i>H. The Place <i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>H. Helena</td>
				<td><i class="icon-play-5"></i>H. Prisma</td>
				<td>$ 1005</td>
				<td>$ 970</td>  
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍSTICO</h5></td>
				<td><i class="icon-play-5"></i>H. Carmel<br> <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>H.<br>Sol Plaza Inn</td>
				<td><i class="icon-play-5"></i>H. S.A Internacional</td>
				<td>$ 1125</td>
				<td>$ 1045</td> 
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPERIOR</h5></td>
				<td><i class="icon-play-5"></i>San Agustin Exclusive <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Royal INN</td>
				<td><i class="icon-play-5"></i>San Agustin Dorado</td>
				<td>$ 1245</td>
				<td>$ 1165</td> 
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