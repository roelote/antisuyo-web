<?php
$nombre_paquete = 'Cusco Puno Alternativo';
$numero_dias='7 días y 6 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Cusco y Puno Alternativa 7 Días y 6 Noches: Este paquete turístico y el Itinerario tiene como objetivo visitar los principales puntos de la Región Andina. En la ciudad del Cusco 'el ombligo del mundo e imperio de los Incas' visitaremos los principales sitios arqueológicos, visitaremos el Valle Sagrado de los Incas que alberga los sitios arqueológicos más interesantes y luego pasaremos la noche en el pueblo de Aguas Calientes ubicado cerca una de las maravillas del mundo moderno: Machu Picchur";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Tours Peru";
$url_category="tours-peru";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/4-dias/cusco-puno-alternativor-sitio-arqueologico-de-raqchi.jpg";
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
    <meta name="author" content="Ansonika">
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

                <?php   $url_s = "paquetes peru/cusco-puno-alternativo-7-dias-6-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>735</span>Por persona
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
					 <p><strong>Cusco</strong> y Puno<strong></strong> Alternativa 7 Días y 6 Noches: Este <strong>paquete turístico</strong> y el Itinerario tiene como objetivo visitar los principales puntos de la <strong>Región Andina</strong>. En la <strong>ciudad del Cusco</strong> "el <strong>ombligo del mundo</strong> e <strong>imperio de los Incas</strong>" visitaremos los principales sitios arqueológicos, visitaremos el Valle <strong>Sagrado de los Incas</strong> que alberga los sitios arqueológicos más interesantes  y luego pasaremos la noche en el pueblo de Aguas Calientes ubicado cerca una de las <strong>maravillas del mundo</strong> moderno: <strong>Machu Picchu</strong></p>					 
					 <p>Siguiendo la ruta entramos en la ruta <strong>Cusco</strong> - <strong>Puno</strong>, denominada la "Ruta del Sol", con una gran cantidad de puntos importantes, por último visitaremos <strong>el Lago Titicaca</strong> - <strong>Puno</strong> , el lago navegable más alto del mundo en el que estaremos un día entero para conocer sus islas principales</p>               		
                </div>
            </div>            
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>RECEPCIÓN EN CUSCO Y CITY TOUR ARQUEOLÓGICO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Recepción en el aeropuerto y traslado a su respectivo hotel.</li>
                    <li><i class="icon-ok-squared"></i>La mañana es libre para la aclimatación a la altura.</li>
                    <li><i class="icon-ok-squared"></i>En la tarde - City Tours Arqueológicos - 14h00 a 18h30.</li>
                    <li><i class="icon-ok-squared"></i>Visitas: El templo del sol Koricancha.</li>
                     <li><i class="icon-ok-squared"></i>Complejos Arqueológicos de Sacsayhuaman, Qenqo, Pucapucara y Tambomachay.</li>
                    <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>

					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/1-dias/cusco-puno-alternativo-sacsayhuaman.jpg" title="Complejo Arqueologico de sacsayhuaman."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/1-dias/cusco-puno-alternativo-sacsayhuaman.jpg" alt="Complejo Arqueologico de sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/1-dias/cusco-puno-alternativo-qenqo.jpg" title="Complejo Arqueologico de Qenqo"><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/1-dias/cusco-puno-alternativo-qenqo.jpg" alt="Complejo Arqueologico de Qenqo" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/1-dias/cusco-puno-alternativo-tambomachay.jpg" title="Complejo Arqueologico de Tambomachay"><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/1-dias/cusco-puno-alternativo-tambomachay.jpg" alt="Complejo Arqueologico de tambomachay" class="img-responsive">
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
					<p>CUSCO - VALLE SAGRADO DE LOS INCASCUSCO - CITY TOUR ARQUEOLÓGICO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su hotel.</i>
                   <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 08h15.</i>
                   <li><i class="icon-ok-squared"></i>Salida al Valle Sagrado de los Incas 08h40.</i>
                   <li><i class="icon-ok-squared"></i>Visitaremos: Mercados de Corao y Pisaq.</i>
                   <li><i class="icon-ok-squared"></i>Visitaremos los centros arqueológicos de Pisaq y Ollantaytambo.</i>
                   <li><i class="icon-ok-squared"></i>Por la tarde tomaremos el tren Ollantaytambo - Aguas Calientes a las 19h00.</i>
                   <li><i class="icon-ok-squared"></i>Recepción en la estación de tren en Aguas Calientes a las 20h45.</i>
                   <li><i class="icon-ok-squared"></i>Pernocte en Aguas calientes.</i>

					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/2-dias/cusco-puno-alternativo-pisac.jpg" title="Complejo arquelógico de pisac."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/2-dias/cusco-puno-alternativo-pisac.jpg" alt="Complejo arquelógico de Sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/2-dias/cusco-puno-alternativo-valle-sagrado-de-los-incas.jpg" title="Valle dagrado de los incas."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/2-dias/cusco-puno-alternativo-valle-sagrado-de-los-incas.jpg" alt="Valle dagrado de los incas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/2-dias/cusco-puno-alternativo-ollantaytambo.jpg" title="Complejo arqueológico de ollantaytambo."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/2-dias/cusco-puno-alternativo-ollantaytambo.jpg" alt="Complejo arqueológico de ollantaytambo." class="img-responsive">
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
					<p>CUSCO - MACHU PICCHU DIA COMPLETO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
						<li><i class="icon-ok-squared"></i>Ascenso a Machu Picchu para contemplar el amanecer.</li>
						<li><i class="icon-ok-squared"></i>Visita guiada a Machu Picchu por todos los sitios más importantes del complejo.</li>
						<li><i class="icon-ok-squared"></i>Tiempo libre para tomar fotografías y recorrer todo Machupicchu.</li>
						<li><i class="icon-ok-squared"></i>Por la tarde retorno hacia Aguas Calientes.</li>
						<li><i class="icon-ok-squared"></i>Seguidamente tomaremos el tren de retorno de Aguas Calientes </i>
						<li><i class="icon-ok-squared"></i>Ollantaytambo a las 18:20 o 19:00.</li>
						<li><i class="icon-ok-squared"></i>Traslado en nuestro transporte de Ollantaytambo - Cusco.</li>
						<li><i class="icon-ok-squared"></i>Llegada a la ciudad de Cusco será aproximadamente de 22:20 a 22:40.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/3-dias/cusco-puno-alternativo-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/3-dias/cusco-puno-alternativo-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/3-dias/cusco-puno-alternativo-intiwatana.jpg" title="El Intihuatana."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/3-dias/cusco-puno-alternativo-intiwatana.jpg" alt="El Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/3-dias/cusco-puno-alternativo-templo-del-sol.jpg" title="Templo del Sol."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/3-dias/cusco-puno-alternativo-templo-del-sol.jpg" alt="Templo del Sol." class="img-responsive">
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
					<p>CUSCO - PUNO / RUTA DEL SOL.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel</li>
                     <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 06:30 am</li>
                     <li><i class="icon-ok-squared"></i>La salida de Bus Ejecutivo será a las 07:00</li>
                     <li><i class="icon-ok-squared"></i>Visitas: Capilla sixtina de Andahuaylillas, Raqchi, Sicuani( almuerzo) La Raya y Pucará.</li>
                     <li><i class="icon-ok-squared"></i>Recepción en Puno y traslado al hotel.</li>
                     <li><i class="icon-ok-squared"></i>Pernocte en Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/4-dias/cusco-puno-alternativo-capilla-sixtina-andahuaylillas.jpg" title="Capilla sixtina andahuaylillas."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/4-dias/cusco-puno-alternativo-capilla-sixtina-andahuaylillas.jpg" alt="Capilla sixtina andahuaylillas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/4-dias/cusco-puno-alternativor-sitio-arqueologico-de-raqchi.jpg" title="Complejo arqueológico de raqchi."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/4-dias/cusco-puno-alternativor-sitio-arqueologico-de-raqchi.jpg" alt="Complejo arqueológico de raqchi." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/4-dias/cusco-puno-alternativo-recepcion-puno.jpg" title="Recepcion en puno."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/4-dias/cusco-puno-alternativo-recepcion-puno.jpg" alt="Recepcion en puno." class="img-responsive">
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
					<p>PUNO - LAGO TITICACA.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Por la mañana buscaremos en su hotel de 07:00 a 07:30 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Nuestro barco saldrá a las 07:45 am.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Islas Flotantes de Uros y Taquile.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde retornaremos a  Puno  a las 17:00.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/5-dias/cusco-puno-alternativo-desayuno-en-el-hotel.jpg" title="Desayuno en el hotel."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/5-dias/cusco-puno-alternativo-desayuno-en-el-hotel.jpg" alt="Desayuno en el hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/5-dias/cusco-puno-alternativo-islas-flotantes-uros.jpg" title="Islas flotantes uros."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/5-dias/cusco-puno-alternativo-islas-flotantes-uros.jpg" alt="Islas flotantes uros." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/5-dias/cusco-puno-alternativo-islas-flotantes-de-taquile.jpg" title="Islas flotantes de taquile."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/5-dias/cusco-puno-alternativo-islas-flotantes-de-taquile.jpg" alt="Islas flotantes de taquile." class="img-responsive">
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
					<p>PUNO - CUSCO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
                      <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 7:30 am.</li>
                      <li><i class="icon-ok-squared"></i>Traslado del hotel al terminal terrestre a las  07:40.</li>
                      <li><i class="icon-ok-squared"></i>Nuestro bus turístico saldrá de Puno - Cusco a las 08:30</li>
                      <li><i class="icon-ok-squared"></i>La llegada a la ciudad Cusco será a las 15:00.</li>
                      <li><i class="icon-ok-squared"></i>Recepción en el terminal terrestre de Cusco y traslado a su respectivo hotel.</li>
                      <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>						
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/6-dias/cusco-puno-alternativo-traslado-hotel-a-cusco.jpg" title="Traslado hotel a cusco."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/6-dias/cusco-puno-alternativo-traslado-hotel-a-cusco.jpg" alt="Traslado hotel a cusco." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/6-dias/cusco-puno-alternativo-llegada-a-cusco.jpg" title="Llegada a cusco."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/6-dias/cusco-puno-alternativo-llegada-a-cusco.jpg" alt="Llegada a cusco." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/6-dias/cusco-puno-alternativo-traslado-pernocte-en-cusco.jpg" title="Pernocte en cusco."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/6-dias/cusco-puno-alternativo-traslado-pernocte-en-cusco.jpg" alt="Pernocte en cusco." class="img-responsive">
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
					<p>CUSCO – TRASLADO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
						<li><i class="icon-ok-squared"></i>Traslado de hotel - Aeropuerto 2 horas antes de salida de su vuelo.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/7-dias/cusco-puno-alternativo-desayuno.jpg" title="Desayuno en el hotel"><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/7-dias/cusco-puno-alternativo-desayuno.jpg" alt="Desayuno en el hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/7-dias/cusco-puno-alternativo-hotel.jpg" title="Salida del Hotel."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/7-dias/cusco-puno-alternativo-hotel.jpg" title="Salida del Hotel." alt="Salida del Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/7-dias/cusco-puno-alternativo-traslado.jpg" title="Tralado al aeropuerto."><img src="img/paquetes peru/cusco-puno-alternativo-7-dias-6-noches/7-dias/cusco-puno-alternativo-traslado.jpg" alt="Tralado al aeropuerto." class="img-responsive">
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1dMUmhQ9S4GI-TFe3XpnUxBSRJv0" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<td><strong>HOTELES<br> EN CUSCO</strong></td>
				<td><strong>HOTELES<br> EN<br> AGUAS CALIENTES</strong></td>
				<td><strong>HOTELES<br> EN PUNO</strong></td>
				<td><strong>INDI-<br>VIDUAL</strong></td>
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONÓMICO</h5></td>
				<td><i class="icon-play-5"></i>H. Prisma<br> <i class="icon-play-5"></i>H. Aranjuez<br><i class="icon-play-5"></i>H. Hatun Wasi</td>
				<td><i class="icon-play-5"></i>H. Continental<br> <i class="icon-play-5"></i>H. Eco Machupicchu<br><i class="icon-play-5"></i>H. Machupicchu</td>
				<td><i class="icon-play-5"></i>H. Helena<br> <i class="icon-play-5"></i>H. Puno Terra<br><i class="icon-play-5"></i>H. Munaytambo</td>
				<td>$ 895</td>
				<td>$ 775</td>
				<td>$ 755</td>
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍSTICO</h5></td>
				<td><i class="icon-play-5"></i>H. Samay Sub<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. S.A Internacional<br><i class="icon-play-5"></i>H. Midori</td>
				<td><i class="icon-play-5"></i>H. Inti Punku INN<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. Inka Town <br><i class="icon-play-5"></i>H. Hatun Samay</td>
				<td><i class="icon-play-5"></i>H. Intiqa <br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H.Sol Plaza Inn<br><i class="icon-play-5"></i>H. Conde de Lemos</td>
				<td>$ 1045</td>
				<td>$ 865</td>
				<td>$ 845</td>
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPERIOR</h5></td>
				<td><i class="icon-play-5"></i>H. 7 Ventanas Sup:<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. S.A Dorado<br><i class="icon-play-5"></i>H. Jose Antonio</td>
				<td><i class="icon-play-5"></i>H. Terra Viva Sup:<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. Casa Andina<br><i class="icon-play-5"></i>H. Inti Punku MAPI</td>
				<td><i class="icon-play-5"></i>Hacienda Puno Sup:<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. Qelqatani<br><i class="icon-play-5"></i>Casona Plaza Hotel</td>
				<td>$ 1220</td>
				<td>$ 985</td>
				<td>$ 950</td>
				</tr> 
				<tr> 
				<td rowspan="2"><h5>CLASE<br>LUJO</h5></td>  
				<td><i class="icon-play-5"></i>H. Costa del Sol<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td><i class="icon-play-5"></i>H. Mapi<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td><i class="icon-play-5"></i>H. Royal INN<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td> 
				<td>$ 1650</td>
				<td>$ 1195</td>
				<td><span class="label label-danger">cerrado</span></td>
				</tr>
				<tr>  
				<td><i class="icon-play-5"></i>H. Aranwa<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td><i class="icon-play-5"></i>H. Sumaq<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td><i class="icon-play-5"></i>H. Libertador <br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 2385</td>
				<td>$ 1745</td>
				<td><span class="label label-danger">cerrado</span></td>
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