<?php
$nombre_paquete = 'Cusco Puno Arequipa Lima';
$numero_dias='12 días y 11 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Paquetes Peru: Cusco - Puno - Arequipa - Lima 12 Días 11 Noches, este paquete e itinerario completo, está diseñado para conocer las principales atracciones turísticas del Perú, comenzando por la ciudad de Cusco 'el ombligo del mundo y capital del imperio de los Incas' y recorriendo sus sitios arqueológicos, Valle Sagrado de los Incas que alberga los centros arqueológicos más interesantes, para luego pasar la noche en el pueblo de Aguas Calientes, ubicado cerca de uno de las maravillas del mundo: Machu Picchu.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Tours Peru";
$url_category="tours-peru";

$url_foto_seo="https://www.antisuyotrekperu.com/es/img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/7-dias/cusco-puno-arequipa-y-lima-explorar-la-ciudad-de-puno.jpg";
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

                <?php   $url_s = "paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>1175</span>Por persona
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
					 <p>Paquetes Peru: <strong>Cusco</strong> - <strong>Puno</strong> - <strong>Arequipa</strong> - Lima 12 Días 11 Noches, este paquete e itinerario completo, está diseñado para conocer las principales atracciones turísticas del <strong>Perú</strong>, comenzando por la <strong>ciudad de Cusco</strong> "el ombligo del mundo y capital del <strong>imperio de los Incas</strong>" y recorriendo sus sitios arqueológicos, <strong>Valle Sagrado de los Incas</strong> que alberga los centros arqueológicos más interesantes, para luego pasar la noche en el pueblo de <strong>Aguas Calientes</strong>, ubicado cerca de uno de las <strong>maravillas del mundo</strong>: <strong>Machu Picchu</strong>.</p>					 
					 <p>Siguiendo la ruta nos adentraremos a la ruta <strong>Cusco</strong> - <strong>Puno</strong>, denominada la "Ruta del Sol", con una gran cantidad de sus sitios arqueológicos importantes para llegar al <strong>Lago Titicaca</strong> - <strong>Puno</strong>, el <strong>lago navegable</strong> más alto del mundo en el que estaremos un día entero para poder conocer las islas principales.</p>              		
              		<p>Siguiendo con el paquete, vamos a conocer la famosa <strong>Ciudad Blanca de Arequipa</strong>, con su hermosa <strong>Plaza de Armas</strong> y grandes Museos, luego conoceremos el <strong>Cañón del Colca </strong>uno de los cañones más profundos del mundo.</p>              		
              		<p>En el último día, conoceremos la capital <strong>peruana</strong>, <strong>Lima</strong>, donde visitaremos: Lima colonial y moderna, con sus muchos puntos históricos y modernos, aprovecharemos la visita para disfrutar además de la <strong>gastronomía</strong>, que es considerada una de los mejores del mundo.</p>               		
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>RECEPCIÓN EN CUSCO.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Recepción en el aeropuerto de Cusco y traslado a su respectivo hotel.</li>
                     <li><i class="icon-ok-squared"></i>Aclimatación a la altura.</li>
                     <li><i class="icon-ok-squared"></i>Tarde libre para descansar o explorar la ciudad.</li>
                     <li><i class="icon-ok-squared"></i>Pernocte en CUSCO.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/1-dia/cusco-puno-arequipa-y-lima-traslado.jpg" title="Traslado del Aeropuerto."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/1-dia/cusco-puno-arequipa-y-lima-traslado.jpg" alt="Traslado del Aeropuerto." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/1-dia/cusco-puno-arequipa-y-lima-dia-libre-aclimatacion.jpg" title="Día libre para la aclimatación."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/1-dia/cusco-puno-arequipa-y-lima-dia-libre-aclimatacion.jpg" alt="Día libre para la aclimatación." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/1-dia/cusco-puno-arequipa-y-lima-hotel.jpg" title="Pernocte en Cusco."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/1-dia/cusco-puno-arequipa-y-lima-hotel.jpg" alt="Pernocte en Cusco." class="img-responsive">
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
					<p>CUSCO - CITY TOUR ARQUEOLÓGICO.</p>
				</div>
					<ul class="list_icons">
                     <li><i class="icon-ok-squared"></i>Desayuno en el hotel.</li>
                     <li><i class="icon-ok-squared"></i>Por la mañana podrán aprovechar para visitar los museos principales.</li>
                     <li><i class="icon-ok-squared"></i>Por la tarde: City Tour Arqueológico, salida a las 13:30-18:30.</li>
                     <li><i class="icon-ok-squared"></i>Visita: el Templo del Sol Koricancha, y los sitios arqueológicos.</li>
                     <li><i class="icon-ok-squared"></i>Sacsayhuaman, Kenko, Puca Pucara y Tambomachay.</li>
                     <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>                    
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/2-dias/cusco-puno-arequipa-y-lima-koricancha.jpg" title="templo delsol coricancha."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/2-dias/cusco-puno-arequipa-y-lima-koricancha.jpg" alt="templo delsol coricancha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/2-dias/cusco-puno-arequipa-y-lima-sacsayhuaman.jpg" title="Complejo arquelogico de sacsayhuaman."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/2-dias/cusco-puno-arequipa-y-lima-sacsayhuaman.jpg" alt="Complejo arquelogico de sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/2-dias/cusco-puno-arequipa-y-lima-qenqo.jpg" title="complejo arqueologico de qenqo."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/2-dias/cusco-puno-arequipa-y-lima-qenqo.jpg" title="Templo del Sol." alt="complejo arqueologico de qenqo." class="img-responsive">
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
					<p>CUSCO - VALLE SAGRADO DE LOS INCAS.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pasaremos por su hotel de 08:00 a 08:20.</li>
                        <li><i class="icon-ok-squared"></i>Salida al Valle Sagrado de los Incas 08:45.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Los Mercados de Corao y Pisac, restos arqueológicos de Pisac  Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde tomaremos el tren de Ollantaytambo - Aguas Calientes 19:00 o 21:00.</li>
                        <li><i class="icon-ok-squared"></i>Recepción en la estación de Aguas Calientes y traslado a su respectivo hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en el poblado de Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/3-dias/cusco-puno-arequipa-y-lima-pisac.jpg" title="Complejo arqueologico de pisac."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/3-dias/cusco-puno-arequipa-y-lima-pisac.jpg" alt="Complejo arqueologico de pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/3-dias/cusco-puno-arequipa-y-lima-ollantaytambo.jpg" title="complejo arqueologico de ollantaytambo."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/3-dias/cusco-puno-arequipa-y-lima-ollantaytambo.jpg" alt="complejo arqueologico de ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/3-dias/cusco-puno-arequipa-y-lima-valle-de-los-sagrado.jpg" title="Valle sagrado de los incas."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/3-dias/cusco-puno-arequipa-y-lima-valle-de-los-sagrado.jpg" alt="Valle sagrado de los incas." class="img-responsive">
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
					<p>MACHU PICCHU DIA COMPLETO -  CUSCO.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Ascenso a Machu Picchu para contemplar el amanecer.</li>
                    <li><i class="icon-ok-squared"></i>Visita guiada a Machu Picchu durante 2 horas por los sitios más importantes del complejo.</li>
                    <li><i class="icon-ok-squared"></i>Tiempo libre para tomar fotografías y recorrer todo Machupicchu.</li>
                    <li><i class="icon-ok-squared"></i>Por la tarde retorno hacia Aguas Calientes.</li>
                    <li><i class="icon-ok-squared"></i>Seguidamente tomaremos el tren de Aguas Calientes - Ollantaytambo a las 18h20.</li>
                    <li><i class="icon-ok-squared"></i>Traslado en nuestro transporte de  Ollantaytambo - Cusco.</li>
                    <li><i class="icon-ok-squared"></i>La llegada a Cusco, será aproximadamente de 22:15 a 22:30.</li>
                    <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/4-dias/cusco-puno-arequipa-y-lima-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/4-dias/cusco-puno-arequipa-y-lima-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/4-dias/cusco-puno-arequipa-y-lima-intiwatana.jpg" title="El Intihuatana."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/4-dias/cusco-puno-arequipa-y-lima-intiwatana.jpg" alt="El Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/4-dias/cusco-puno-arequipa-y-lima-templo-del-sol.jpg" title="Templo del Sol."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/4-dias/cusco-puno-arequipa-y-lima-templo-del-sol.jpg" alt="Templo del Sol." class="img-responsive">
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
					<p>CUSCO - PUNO / RUTA DEL SOL.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 06:30 am.</li>
                        <li><i class="icon-ok-squared"></i>La salida de Bus Ejecutivo será a las 07:00.</li>
                        <li><i class="icon-ok-squared"></i>Visitas: Capilla sixtina de Andahuaylillas, Raqchi, Sicuani( almuerzo) La Raya y Pucará.</li>
                        <li><i class="icon-ok-squared"></i>Recepción en Puno y traslado al hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/5-dias/cusco-puno-arequipa-y-lima-capilla-sixtina-andahuaylillas.jpg" title="Capilla sixtina andahuaylillas."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/5-dias/cusco-puno-arequipa-y-lima-capilla-sixtina-andahuaylillas.jpg" alt="Capilla sixtina andahuaylillas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/5-dias/cusco-puno-arequipa-y-lima-raqchi.jpg" title="Complejo arqueoogico de raqchi."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/5-dias/cusco-puno-arequipa-y-lima-raqchi.jpg" alt="Complejo arqueoogico de raqchi." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/5-dias/cusco-puno-arequipa-y-lima-recepcion-puno.jpg" title="recepción en puno"><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/5-dias/cusco-puno-arequipa-y-lima-recepcion-puno.jpg" alt="recepción en puno" class="img-responsive">
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
					<p>PUNO - LAGO TITICACA.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Por la mañana lo buscaremos en su hotel  07:00 a 07:30 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Nuestro barco saldrá a las 07:45 am.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Islas Flotantes de Uros y Taquile.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde retornaremos a  Puno  a las 17:00.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/6-dias/cusco-puno-arequipa-y-lima-desayuno-en-el-hotel.jpg" title="Desayuno en su Hotel."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/6-dias/cusco-puno-arequipa-y-lima-desayuno-en-el-hotel.jpg" alt="Desayuno en su Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/6-dias/cusco-puno-arequipa-y-lima-islas-flotantes-uros.jpg" title="Islas Flotantes de Uros."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/6-dias/cusco-puno-arequipa-y-lima-islas-flotantes-uros.jpg" alt="Islas Flotantes de Uros." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/6-dias/cusco-puno-arequipa-y-lima-islas-flotantes de taquile.jpg" title="Islas Flotantes de taquile."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/6-dias/cusco-puno-arequipa-y-lima-islas-flotantes de taquile.jpg" alt="Islas Flotantes detaquile." class="img-responsive">
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
					<p>PUNO - AREQUIPA</p>
				</div>
					<ul class="list_icons">
                   <li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
                   <li><i class="icon-ok-squared"></i>Mañana libre para explorar la ciudad de Puno.</li>
                   <li><i class="icon-ok-squared"></i>Por la tarde nuestro transfer pasar por su hotel a las 14:00.</li>
                   <li><i class="icon-ok-squared"></i>La salida de Bus ejecutivo está programado a las 15:00 y la llegada a Arequipa será a las 21:00.</li>
                   <li><i class="icon-ok-squared"></i>Recepción en terminal terrestre y traslado a su respectivo hotel.</li>
                   <li><i class="icon-ok-squared"></i>Pernocte en Arequipa.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/7-dias/cusco-puno-arequipa-y-lima-desayuno-en-el-hotel.jpg" title="Desayuno en su Hotel"><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/7-dias/cusco-puno-arequipa-y-lima-desayuno-en-el-hotel.jpg" alt="Desayuno en su Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/7-dias/cusco-puno-arequipa-y-lima-explorar-la-ciudad-de-puno.jpg" title="Mañana libre para explorar la ciudad de Puno."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/7-dias/cusco-puno-arequipa-y-lima-explorar-la-ciudad-de-puno.jpg" alt="Mañana libre para explorar la ciudad de Puno." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/7-dias/cusco-puno-arequipa-y-lima-resepcion-en-el-aeropueto-de-arequipa.jpg" title="traslado a su respectivo hotel."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/7-dias/cusco-puno-arequipa-y-lima-resepcion-en-el-aeropueto-de-arequipa.jpg" alt="traslado a su respectivo hotel." class="img-responsive">
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
					<p>AREQUIPA - CITY TOUR.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Desayuno en su hotel.</i>
                    <li><i class="icon-ok-squared"></i>Mañana libre para recorrer la ciudad.</i>
                    <li><i class="icon-ok-squared"></i>Por la tarde el City tour, comienza a las 14h00 hasta las.</i>
                    <li><i class="icon-ok-squared"></i>Visita: Monasterio de Santa Catalina, Catedral de Arequipa, claustros.</i> 
                    <li><i class="icon-ok-squared"></i>la Iglesia de compañía de Jesús, San Francisco, El Mirador de Carmen Alto y Yanahuara.</i>
                    <li><i class="icon-ok-squared"></i>Pernocte en Arequipa.</i>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/8-dias/cusco-puno-arequipa-y-lima-desayuno-en-el-hotel.jpg" title="Desayuno en su hotel."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/8-dias/cusco-puno-arequipa-y-lima-desayuno-en-el-hotel.jpg" alt="Desayuno en su hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/8-dias/cusco-puno-arequipa-y-lima-Catedral-de-Arequipa.jpg" title="Catedral de Arequipa."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/8-dias/cusco-puno-arequipa-y-lima-Catedral-de-Arequipa.jpg" alt="Catedral de Arequipa." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/8-dias/cusco-puno-arequipa-y-lima-El-Mirador-de-carmen-alto.jpg" title="El Mirador de Carmen Alto."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/8-dias/cusco-puno-arequipa-y-lima-El-Mirador-de-carmen-alto.jpg" alt="El Mirador de Carmen Alto." class="img-responsive">
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
					<p>AREQUIPA - CHIVAY</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</i>
                        <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 8:15 am.</i>
                        <li><i class="icon-ok-squared"></i>Salida de Arequipa - Chivay - Cañón del Colca a las 08h30.</i>
                        <li><i class="icon-ok-squared"></i>En el transcurso del viaje a Chivay podrán apreciar los diferentes paisajes de pueblos alto andinos.</i>
                        <li><i class="icon-ok-squared"></i>A la llegada a Chivay nuestro transporte los dejara en sus respectivos hoteles.</i>
                        <li><i class="icon-ok-squared"></i>En la tarde pueden aprovechar e ir a los baños termales de La Calera.</i>
                        <li><i class="icon-ok-squared"></i>Pernocte en Chivay.</i>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/9-dias/cusco-puno-arequipa-y-lima-chivay.jpg" title="Viaje a Chivay."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/9-dias/cusco-puno-arequipa-y-lima-chivay.jpg" alt="viaje a Chivay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/9-dias/cusco-puno-arequipa-y-lima-canon-del-colca.jpg" title="Cañón del Colca."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/9-dias/cusco-puno-arequipa-y-lima-canon-del-colca.jpg" alt="Cañón del Colca." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/9-dias/cusco-puno-arequipa-y-lima-banos-termales-de-La-calera.jpg" title="baños termales de La Calera."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/9-dias/cusco-puno-arequipa-y-lima-banos-termales-de-La-calera.jpg" alt="baños termales de La Calera." class="img-responsive">
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
					<p>CAÑON DEL COLCA - AREQUIPA.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>							
                        <li><i class="icon-ok-squared"></i>Salida al Cañón del Colca a las 06:30.</li>                        
                        <li><i class="icon-ok-squared"></i>Visita: Pueblos que conforman la ruta del viaje.</li>
                        <li><i class="icon-ok-squared"></i>el cañón más profundo de América y donde se observan el vuelo de los cóndores.</li>
                        <li><i class="icon-ok-squared"></i>Retorno a Chivay a las 12:00 luego retornarán rumbo a la ciudad de Arequipa.</li>
                        <li><i class="icon-ok-squared"></i>Llegamos a Arequipa aproximadamente a las 17:00.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Arequipa.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/10-dias/lima-cusco-y-puno-desayuno.jpg"><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/10-dias/lima-cusco-y-puno-desayuno.jpg" title="Sitio Arqueologica de Machu Picchu." alt="Desayuno en el Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/10-dias/lima-cusco-y-puno-vuelo-de-condores.jpg" title="observan el vuelo de los cóndores."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/10-dias/lima-cusco-y-puno-vuelo-de-condores.jpg" alt="observan el vuelo de los cóndores.." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/10-dias/lima-cusco-y-puno-retorno-a-arequipa.jpg" title="Pernocte en Arequipa."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/10-dias/lima-cusco-y-puno-retorno-a-arequipa.jpg" alt="Pernocte en Arequipa." class="img-responsive">
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
					<p>AREQUIPA - LIMA - CITY TOUR.</p>
				</div>
					<ul class="list_icons">
					<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Traslado hotel- Aeropuerto en Arequipa.</li>
                    <li><i class="icon-ok-squared"></i>Recepción en el aeropuerto de Lima y traslado al hotel.</li>
                    <li><i class="icon-ok-squared"></i>Por la tarde City Tour de las 14h00 hasta las 18h00.</li>
                    <li><i class="icon-ok-squared"></i>Visita: Plazas principales, ruinas de Huaca Pucllana, Lima Colonial y Moderna.</li>
                    <li><i class="icon-ok-squared"></i>Por la tarde visitáremos el Circuito Mágico de  aguas desde las 18h15 hasta las 20h00(opcional).</li>
                    <li><i class="icon-ok-squared"></i>Pernocte en Lima.</li>

					</ul>
					<div class="row magnific-gallery">
                        <div class="col-md-4 col-sm-4">
                        <div class="img_wrapper_gallery">
                            <div class="img_container_gallery">
                                <a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/11-dias/cusco-puno-arequipa-y-lima-cusco-y-puno-lima-colonial.jpg"><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/11-dias/cusco-puno-arequipa-y-lima-cusco-y-puno-lima-colonial.jpg" title="Sitio Arqueologica de Machu Picchu." alt="Desayuno en el Hotel." class="img-responsive">
                                    <i class="icon-resize-full-2"></i>
                                </a>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                        <div class="img_wrapper_gallery">
                            <div class="img_container_gallery">
                                <a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/11-dias/cusco-puno-arequipa-y-lima-cusco-y-puno-huaca-pucllana.jpg" title="observan el vuelo de los cóndores."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/11-dias/cusco-puno-arequipa-y-lima-cusco-y-puno-huaca-pucllana.jpg" alt="observan el vuelo de los cóndores.." class="img-responsive">
                                    <i class="icon-resize-full-2"></i>
                                </a>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                        <div class="img_wrapper_gallery">
                            <div class="img_container_gallery">
                                <a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/11-dias/cusco-puno-arequipa-y-lima-cusco-y-punocircuito-magico-aguas.jpg" title="Pernocte en Arequipa."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/11-dias/cusco-puno-arequipa-y-lima-cusco-y-punocircuito-magico-aguas.jpg" alt="Pernocte en Arequipa." class="img-responsive">
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
					<p>TRASLADO AL AEROPUERTO.</p>
				</div>
					<ul class="list_icons">
					<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Traslado hotel - Aeropuerto en Lima con 3 horas de anticipación.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/12-dias/cusco-puno-arequipa-y-lima-cusco-y-puno-desayuno.jpg" title="Desayuno en su Hotel"><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/12-dias/cusco-puno-arequipa-y-lima-cusco-y-puno-desayuno.jpg" alt="Desayuno en su Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/12-dias/cusco-puno-arequipa-y-lima-cusco-y-puno-hotel.jpg" title="salida del hotel."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/12-dias/cusco-puno-arequipa-y-lima-cusco-y-puno-hotel.jpg" alt="salida del hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/12-dias/cusco-puno-arequipa-y-lima-cusco-y-puno-traslado.jpg" title="Traslado al aeropuerto."><img src="img/paquetes peru/cusco-puno-arequipa-y-lima-12-dias-11-noches/12-dias/cusco-puno-arequipa-y-lima-cusco-y-puno-traslado.jpg" alt="Traslado al aeropuerto." class="img-responsive">
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1CZCzgcy_8Gpod10HTy42Y878hYY" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<th colspan="8">
				<h4><span>Paquete + Hotel+Bus+Tren(Clase turístico)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATEGO-<br>RÍA</strong></td>
				<td><strong>HOTELES<br> EN LIMA</strong></td>
				<td><strong>HOTELES<br> EN ARE-<br>QUIPA</strong></td>
				<td><strong>HOTELES<br> EN PUNO</strong></td>
				<td><strong>HOTELES<br> EN CUSCO</strong></td>
				<td><strong>HOTELES<br> EN AGUAS CALIEN-<br>TES</strong></td> 
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE&#160</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONÓ-<br>MICO</h5></td>
				<td><i class="icon-play-5"></i>The Place Hotel<br><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Ensueño</td>
				<td><i class="icon-play-5"></i>Hotel Helena</td>
				<td><i class="icon-play-5"></i>Hotel Prisma</td>
				<td><i class="icon-play-5"></i>Hotel Continental</td>
				<td>$ 1260</td>
				<td>$ 1195</td>  
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍS-<br>TICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Carmel<br> <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>H. Posada Monasterio</td>
				<td><i class="icon-play-5"></i>H.<br>Sol Plaza Inn</td>
				<td><i class="icon-play-5"></i>H. S.A Internacional</td>
				<td><i class="icon-play-5"></i>Hotel Inka Town</td>
				<td>$ 1425</td>
				<td>$ 1305</td> 
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPE-<br>RIOR</h5></td>
				<td><i class="icon-play-5"></i>San Agustin Exclusive<br><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Terra Viva</td>
				<td><i class="icon-play-5"></i>Hotel Royal INN</td>
				<td><i class="icon-play-5"></i>San Agusntin Dorado</td>
				<td><i class="icon-play-5"></i>Hotel Intitpunku Mapi</td>
				<td>$ 1590</td>
				<td>$ 1410</td> 
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