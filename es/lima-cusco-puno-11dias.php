<?php
$nombre_paquete = 'Lima Cusco Puno';
$numero_dias='11 días y 10 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Paquetes Peru: Lima, Cusco y Puno 11 Días / 10 Noches, con este paquete e itinerario completo visitará los principales sitios turísticos del país, empezando por la capital, Lima, con numerosos lugares para visitar: Lima - City tour colonial y moderna y el impresionante complejo arqueológico de Pachacámac.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Tours Peru";
$url_category="tours-peru";

$url_foto_seo="https://www.antisuyotrekperu.com/es/img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/9-dias/cusco-lima-y-puno-islas-flotantes-uros.jpg";
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

                <?php   $url_s = "paquetes peru/lima-cusco-y-puno-11-dias-10-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>1045</span>Por persona
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
					 <p>Paquetes Peru: Li<strong></strong>ma, <strong>Cusco</strong> y Pu<strong></strong>no 11 Días / 10 Noches, con este paquete e itinerario completo visitará los principales <strong>sitios turísticos</strong> del país, empezando por <strong>la capital, Lima</strong>, con numerosos lugares para visitar: Lima -<strong> City tour colonial y moderna</strong> y el impresionante complejo arqueológico de <strong>Pachacámac</strong>.</p>					 
					 <p>Seguiremos por la ciudad de Cusco - "el <strong>ombligo del mundo</strong> y cuna del imperio de los Incas" visitaremos sus sitios arqueológicos, el <strong>Valle Sagrado de los Incas</strong> - que alberga los sitios arqueológicos más interesantes, nos alojaremos en la Ciudadela de <strong>Aguas Calientes</strong> un pequeño pueblo ubicado cerca a una de <strong>los maravillas del mundo</strong>: <strong>Machu Picchu</strong>.</p>              		
              		<p>Siguiendo la ruta entraremos en la ruta <strong>Cusco</strong> a <strong>Puno</strong>, denominada la "<strong>Ruta del Sol</strong>", con una gran cantidad de sitios arqueológicos importantes para luego llegar al <strong>Lago Titicaca</strong> - <strong>Puno, el lago navegable</strong> más alto del mundo en el que pasaremos un día entero para conocer sus islas principales.</p>               		
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
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/1-dia/lima-cusco-y-puno-traslado.jpg" title="Traslado del Aeropuerto"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/1-dia/lima-cusco-y-puno-traslado.jpg" title="Traslado del Aeropuerto" alt="Traslado del Aeropuerto" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/1-dia/lima-cusco-y-puno-tarde-libre.jpg" title="Día libre para Conocer la Ciudad."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/1-dia/lima-cusco-y-puno-tarde-libre.jpg" alt="Día libre para Conocer la Ciudad." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/1-dia/lima-cusco-y-puno-hotel.jpg" title="Pernocte en Lima."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/1-dia/lima-cusco-y-puno-hotel.jpg" alt="Pernocte en Lima." class="img-responsive">
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
                    <li><i class="icon-ok-squared"></i>Mañana libre para conocer algunos museos que no están incluidos en nuestra programa.</li>
                    <li><i class="icon-ok-squared"></i>Por la tarde City tour comienza a las 14:00 hasta las 18:00.</li>
                    <li><i class="icon-ok-squared"></i>Visita:Las plazas principales, ruinas de Huaca Pucllana, Lima Colonial y Moderna.</li>
                    <li><i class="icon-ok-squared"></i>Después del City tour pueden visitar el Circuito Mágico de aguas de las 18h15 hasta las 20h00 ( opcional).</li>                    
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/2-dias/lima-cusco-y-puno-lima-colonial.jpg" title="City Tour Ciudad Colonial Y Moderna."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/2-dias/lima-cusco-y-puno-lima-colonial.jpg" alt="City Tour Ciudad Colonial Y Moderna." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/2-dias/lima-cusco-y-puno-huaca-pucllana.jpg" title="Ruinas de la Huaca Pucllana."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/2-dias/lima-cusco-y-puno-huaca-pucllana.jpg" alt="Ruinas de la Huaca Pucllana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/2-dias/lima-cusco-y-puno-circuito-magico-aguas.jpg" title="Sircuito Magico de Aguas."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/2-dias/lima-cusco-y-puno-circuito-magico-aguas.jpg" title="Sircuito Magico de Aguas." alt="Sircuito Magico de Aguas" class="img-responsive">
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
					<p>LIMA – PACHACAMAC.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 09:00 am.</li>
                        <li><i class="icon-ok-squared"></i>El tour a Pachacamac comienza a las 09:20 a.m. hasta 13:00.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Los Oráculos, Aclla wasi, templo de Dios Sol y los palacios de los gobernantes.</li>
                        <li><i class="icon-ok-squared"></i>Tarde libre para poder probar la gastronomía Peruana.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Lima.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/3-dias/lima-cusco-y-puno-tour-a-Pachacamac.jpg" title="Tour a pachacamac."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/3-dias/lima-cusco-y-puno-tour-a-Pachacamac.jpg" alt="Tour a pachacamac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/3-dias/lima-cusco-y-puno-tarde-para-poder-disfrutar-la-gastronomia.jpg" title="Tarde para Disfrutar de la Gastronomia."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/3-dias/lima-cusco-y-puno-tarde-para-poder-disfrutar-la-gastronomia.jpg" title="Tarde para Disfrutar de la Gastronomia." alt="Tarde para Disfrutar de la Gastronomia." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/3-dias/lima-cusco-y-puno-visita-los-oraculos-aclla-wasi-templo-del-sol.jpg" title="templo de Dios Sol."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/3-dias/lima-cusco-y-puno-visita-los-oraculos-aclla-wasi-templo-del-sol.jpg" title="templo de Dios Sol." title="templo de Dios Sol" alt="templo de Dios Sol." class="img-responsive">
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
					<p>LIMA - CUSCO/ VUELO LOCAL/ RECEPCIÓN EN CUSCO.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Traslado Hotel - Aeropuerto en Lima.</li>
                    <li><i class="icon-ok-squared"></i>Recepción en el aeropuerto de Cusco y traslado a su respectivo hotel.</li>
                    <li><i class="icon-ok-squared"></i>Aclimatación a la altura.</li>
                    <li><i class="icon-ok-squared"></i>Por la tarde podrán conocer el centro histórico de la ciudad.</li>
                    <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/4-dias/cusco-lima-y-puno-traslado.jpg" title="Traslado al Cusco."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/4-dias/cusco-lima-y-puno-traslado.jpg" alt="Traslado al Cusco." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/4-dias/cusco-lima-y-puno-dia-libre-aclimatacion.jpg"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/4-dias/cusco-lima-y-puno-dia-libre-aclimatacion.jpg" alt="Centro Historico de la Ciudad" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/4-dias/cusco-lima-y-puno-hotel.jpg" title="Pernocte en Cusco."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/4-dias/cusco-lima-y-puno-hotel.jpg" title="Pernocte en Cusco." alt="Image" class="img-responsive">
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
					<p>CUSCO - CITY TOUR ARQUEOLÓGICO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su hotel.</li>
                        <li><i class="icon-ok-squared"></i>Mañana libre, que podrá aprovechar visitando los museos principales.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde: City Tour Arqueológico, salida a las 13:30-18:30.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Templo del Sol Koricancha, y los sitios arqueológicos.</li><li><i class="icon-ok-squared"></i>Sacsayhuaman, Kenko, Puca Pucara y Tambomachay.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/5-dias/cusco-lima-y-puno-koricancha.jpg" title="Templo del Sol Coricancha."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/5-dias/cusco-lima-y-puno-koricancha.jpg" title="Templo del Sol Coricancha" alt="Templo del Sol Coricancha" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/5-dias/cusco-lima-y-puno-sacsayhuaman.jpg" title="Complejo arqueologico de sacsayhuaman."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/5-dias/cusco-lima-y-puno-sacsayhuaman.jpg" alt="Complejo arqueologico de sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/5-dias/cusco-lima-y-puno-qenqo.jpg" title="Complejo arqueologico de qenqo."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/5-dias/cusco-lima-y-puno-qenqo.jpg" alt="Complejo arqueologico de qenqo." class="img-responsive">
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
					<p>CUSCO - VALLE SAGRADO DE LOS INCAS.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las  08:00 a 08:20.</li>
                        <li><i class="icon-ok-squared"></i>Salida al Valle Sagrado de los Incas 08:45.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Mercados de Corao y Pisac, los restos arqueológicos de Pisaq y Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde tomaremos el tren de Ollantaytambo - Aguas calientes a las 19:00 ó 21:00.</li>
                        <li><i class="icon-ok-squared"></i>Recepción en la estación de Aguas Calientes a las 20h45.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en el poblado de Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/6-dias/cusco-lima-y-puno-pisac.jpg" title="complejo arqueologico de  Pisac."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/6-dias/cusco-lima-y-puno-pisac.jpg" alt="complejo arqueologico de  Pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/6-dias/cusco-lima-y-puno-ollantaytambo.jpg" title="complejo arqueologico de Ollantaytambo."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/6-dias/cusco-lima-y-puno-ollantaytambo.jpg" alt="complejo arqueologico de Ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/6-dias/cusco-lima-y-puno-chinchero.jpg" title="complejo arqueologico de chincheros."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/6-dias/cusco-lima-y-puno-chinchero.jpg" alt="complejo arqueologico de chincheros." class="img-responsive">
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
					<p>MACHU PICCHU DIA COMPLETO - CUSCO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Ascenso a Machu Picchu para contemplar el amanecer.</li>
                        <li><i class="icon-ok-squared"></i>Visita guiada a Machu Picchu durante 2 horas por los sitios más importantes del complejo.</li>
                        <li><i class="icon-ok-squared"></i>Tiempo libre para tomar fotografías y recorrer todo Machupicchu.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde retorno hacia Aguas Calientes.</li>
                        <li><i class="icon-ok-squared"></i>Seguidamente tomaremos el tren de Aguas Calientes - Ollantaytambo a las 18h20</li>
                        <li><i class="icon-ok-squared"></i>Traslado en nuestro transporte de  Ollantaytambo - Cusco.</li>
                        <li><i class="icon-ok-squared"></i>La llegada a Cusco, será aproximadamente de 22:15 a 22:30.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/7-dias/lima-cusco-y-puno-parque-arqueologico-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/7-dias/lima-cusco-y-puno-parque-arqueologico-de-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/7-dias/lima-cusco-y puno-el-intihuatana.jpg" title="El Intihuatana"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/7-dias/lima-cusco-y puno-el-intihuatana.jpg" title="El Intihuatana" alt="El Intihuatana" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/7-dias/lima-cusco-y puno-templo-del-sol.jpg" title="Templo del Sol"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/7-dias/lima-cusco-y puno-templo-del-sol.jpg" alt="Templo del Sol" class="img-responsive">
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
					<p>CUSCO - PUNO / RUTA DEL SOL.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 06:30 am.</li>
                        <li><i class="icon-ok-squared"></i>La salida en nuestro Bus Ejecutivo será a las 07:00.</li>
                        <li><i class="icon-ok-squared"></i>Visitas: Capilla sixtina de Andahuaylillas, Raqchi, Sicuani (almuerzo) La Raya y Pucará.</li>
                        <li><i class="icon-ok-squared"></i>Recepción en Puno y traslado al hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/8-dias/cusco-lima-y-puno-capilla-sixtina-andahuaylillas.jpg" title="Capilla sixtina de Andahuaylillas"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/8-dias/cusco-lima-y-puno-capilla-sixtina-andahuaylillas.jpg" title="Capilla sixtina de Andahuaylillas" alt="Image" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/8-dias/cusco-lima-y-puno-sitio-arqueologico-de-raqchi.jpg" title="Complejo Arqueologico de Raqchi"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/8-dias/cusco-lima-y-puno-sitio-arqueologico-de-raqchi.jpg" alt="complejo arqueologico de raqchi" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/8-dias/cusco-lima-y-puno-recepcion-puno.jpg" title="Pernocte en Puno."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/8-dias/cusco-lima-y-puno-recepcion-puno.jpg" alt="Pernocte en Puno." class="img-responsive">
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
					<p>PUNO - LAGO TITICACA.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Por la mañana lo buscaremos en su hotel de 07:00 a 07:30 a.m</li>
                        <li><i class="icon-ok-squared"></i>Nuestro barco saldrá a las 07:45 am.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Islas Flotantes de Uros y la isla Taquile.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde retornaremos a Puno a las 17:00.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/9-dias/cusco-lima-y-puno-desayuno-en-el-hotel.jpg" title="Desayuno en su Hotel"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/9-dias/cusco-lima-y-puno-desayuno-en-el-hotel.jpg" alt="Desayuno en su Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/9-dias/cusco-lima-y-puno-islas-flotantes-uros.jpg" title="Pernocte en Puno"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/9-dias/cusco-lima-y-puno-islas-flotantes-uros.jpg" title="Pernocte en Puno" alt="Pernocte en Puno" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/9-dias/cusco-lima-y-puno-islas-flotantes-de-taquile.jpg" title="Isla Flotante de Taquile"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/9-dias/cusco-lima-y-puno-islas-flotantes-de-taquile.jpg" title="Isla Flotante de Taquile" alt="Isla Flotante de los Uros" class="img-responsive">
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
					<p>PUNO - CUSCO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
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
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/10-dias/lima-cusco-y-puno-traslado-hotel-a-cusco.jpg" title="Recepción en el terminal terrestre."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/10-dias/lima-cusco-y-puno-traslado-hotel-a-cusco.jpg" alt="Recepción en el terminal terrestre." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/10-dias/lima-cusco-y-puno-llegada-a-cusco.jpg" title="Llegada a cusco"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/10-dias/lima-cusco-y-puno-llegada-a-cusco.jpg" alt="Llegada a cusco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/10-dias/lima-cusco-y-puno-traslado-pernocte-en-cusco.jpg" title="Pernocte en Cusco."><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/10-dias/lima-cusco-y-puno-traslado-pernocte-en-cusco.jpg" alt="Pernocte en Cusco." class="img-responsive">
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
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/11-dias/lima-cusco-y-puno-desayuno.jpg" title="Desayuno en el Hotel"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/11-dias/lima-cusco-y-puno-desayuno.jpg" alt="Desayuno en el Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/11-dias/lima-cusco-y-puno-hotel.jpg" title="Salida del Hotel"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/11-dias/lima-cusco-y-puno-hotel.jpg" alt="Salida del Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/11-dias/lima-cusco-y-puno-traslado.jpg" title="Traslado al Aeropuerto"><img src="img/paquetes peru/lima-cusco-y-puno-11-dias-10-noches/11-dias/lima-cusco-y-puno-traslado.jpg" alt="Traslado al Aeropuerto" class="img-responsive">
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1f52W5156FHtErA2C2fmxzHyK7ug" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<th colspan="7">
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
				<td><strong>HOTELES<br> EN AGUAS CALIENTES</strong></td> 
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE&#160</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONÓMICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Monte Real<br><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Helena</td>
				<td><i class="icon-play-5"></i>Hotel Prisma</td>
				<td><i class="icon-play-5"></i>Hotel Continental</td>
				<td>$ 1115</td>
				<td>$ 1065</td>  
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍSTICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Carmel<br> <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>H.<br>Sol Plaza Inn</td>
				<td><i class="icon-play-5"></i>H. S.A Internacional</td>
				<td><i class="icon-play-5"></i>Hotel Inka Town</td>
				<td>$ 1260</td>
				<td>$ 1150</td> 
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPERIOR</h5></td>
				<td><i class="icon-play-5"></i>San Agustin Exclusive<br><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Royal INN</td>
				<td><i class="icon-play-5"></i>San Agusntin Dorado</td>
				<td><i class="icon-play-5"></i>Hotel Intitpunku Mapi</td>
				<td>$ 1435</td>
				<td>$ 1305</td> 
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