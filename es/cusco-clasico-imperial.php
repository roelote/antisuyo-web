<?php
$nombre_paquete = 'Cusco Clásico Imperial';
$numero_dias='6 días y 5 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="El paquete Cusco Clásico Imperial Machu Picchu 6 días y 5 noches, es una alternativa completa para conocer varios puntos turísticos en la ciudad de Cusco y al mismo tiempo el santuario histórico de Machu Picchu, debemos resaltar, además, el paseo a Maras Moray y las canteras de Sal el que nos muestra un atractivo natural que apenas es comparado con los Salares de Uyuni en el país vecino de Bolivia.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Tours Machu Picchu";
$url_category="tours-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/dia-libre-aclimatacion.jpg";
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
    <meta name="author" content="Antisuyo trek Perú">
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

                <?php   $url_s = "tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>565</span>Por persona
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
					 <p>El paquete <strong>Cusco</strong> Clásico Imperial <strong>Machu Picchu</strong> 6 días y 5 noches, es una alternativa completa para conocer varios puntos turísticos en la ciudad de<strong> Cusco</strong> y al mismo tiempo el santuario histórico de <strong>Machu Picchu</strong>, debemos resaltar, además, el paseo a <strong>Maras Moray</strong> y las canteras de Sal el que nos muestra un atractivo natural que apenas es comparado con los <strong>Salares de Uyuni</strong> en el país vecino de Bolivia.</p>
					 
					 <p><strong>Machu Picchu</strong> es considerada, una obra maestra de la arquitectura y la ingeniería. Sus peculiares características arquitectónicas y paisajísticas, la han convertido en uno de los destinos turísticos más populares del planeta</p>
             		
              		<p>Se cree que <strong>Machu Picchu</strong> tuvo una población móvil como la mayoría de las llactas <strong>incas</strong>, que oscilaba entre 300 y 1000 habitantes pertenecientes a una élite (posiblemente miembros de la <strong>Panaca</strong> de <strong>Pachacutec</strong>).</p>
              		
              		<p><strong>Machu Picchu</strong> está en la Lista del <strong>Patrimonio de la Humanidad</strong> de la <strong>Unesco</strong> desde 1983, como parte de todo un conjunto cultural y ecológico, conocido bajo la denominación de <strong>Santuario Histórico</strong> de <strong>Machu Picchu</strong>. El 7 de julio de 2007 <strong>Machu Picchu</strong> fue declarada como una de las siete <strong>maravillas del Mundo Moderno</strong>, en una ceremonia realizada en Lisboa, Portugal, que contó con la participación de cien millones de votantes en el mundo entero, eligiendo a <strong>Machu Picchu</strong> como uno de ellas.</p>   
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
						<li><i class="icon-ok-squared"></i>Recepción en el aeropuerto y traslado a su respectivo hotel.</li>
						<li><i class="icon-ok-squared"></i>Tiempo libre para la aclimatación a la altura.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/traslado-hotel.jpg" title="Traslado del aeropuerto."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/traslado-hotel.jpg" alt="Traslado del aeropuerto." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/hotel.jpg" title="Descanso en el Hotel."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/hotel.jpg" alt="Descanso en el hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/dia-libre-aclimatacion.jpg" title="Día libre para aclimatarse."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/dia-libre-aclimatacion.jpg" alt="Día libre para aclimatarse." class="img-responsive">
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
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
						<li><i class="icon-ok-squared"></i>Mañana libre: visitar museos, hacer compras, descansar.</li>
						<li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 13:30.</li>
						<li><i class="icon-ok-squared"></i>Salida a City Tour Arqueológico desde las 14:00 hasta 18h30.</li>
						<li><i class="icon-ok-squared"></i>Visitas: Templo del Sol de Koricancha, Sacsayhuaman, Kenko, Puca Pucara y Tambomachay.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/templo-del-sol-de-koricancha.jpg" title="Templo del Sol de Koricancha."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/templo-del-sol-de-koricancha.jpg" alt="Templo del Sol de Koricancha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/sacsayhuaman.jpg" title="Complejo arqueológico de Sacsayhuaman."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/sacsayhuaman.jpg" alt="Complejo arqueológico de Sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/complejo-arqueologico-de-qenqo.jpg" title="Complejo arqueológico de Qenqo."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/complejo-arqueologico-de-qenqo.jpg" alt="Complejo arqueológico de Qenqo." class="img-responsive">
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
					<p>MARAS MORAY Y SALINERAS.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 08:30 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Salida a Maras Moray, Salineras 09h00 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Visitas: Mercado de Chinchero, complejo arqueológico de Moray y Machu qolqa; canteras de sal en Maras.</li>
                        <li><i class="icon-ok-squared"></i>Retorno a Cusco 15h00.</li>
                        <li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/salineras-de-maras.jpg" title="Las salineras de Maras."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/salineras-de-maras.jpg" alt="Las salineras de Maras." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/complejo-arqueologico-de-moray.jpg" title="Complejo arqueológico de Moray."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/complejo-arqueologico-de-moray.jpg" alt="Complejo arqueológico de Moray" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/mercado-de-chinchero.jpg" title="Mercado de Chinchero."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/mercado-de-chinchero.jpg" alt="Mercado de Chinchero." class="img-responsive">
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
					<p>CUSCO - VALLE SAGRADO DE LOS INCAS.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su hotel.</li>
						<li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 08:15 a.m.</li>
						<li><i class="icon-ok-squared"></i>Salida hacia el Valle Sagrado de los Incas a las 08:45 a.m.</li>
						<li><i class="icon-ok-squared"></i>Visita: Mercado de Corao, Mercado de Pisac, los restos arqueológicos de Pisac y el complejo arqueológico de Ollantaytambo.</li>
						<li><i class="icon-ok-squared"></i>Por la tarde tomaremos el tren Ollantaytambo - Aguas Calientes a las 19:00.</li>
						<li><i class="icon-ok-squared"></i>Recepción en la estación Aguas Calientes 20h45.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Aguas calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/valle-de-los-sagrado.jpg" title="Valle Sagrado de los Incas."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/valle-de-los-sagrado.jpg" alt="Valle Sagrado de los Incas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div> 
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/complejo-arqueologico-de-pisac.jpg" title="Complejo arqueológico de Pisac."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/complejo-arqueologico-de-pisac.jpg" alt="Complejo arqueológico de Pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/complejo-arqueologico-de-ollantaytambo.jpg" title="Complejo arqueológico de Ollantaytambo"><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/complejo-arqueologico-de-ollantaytambo.jpg" alt="Complejo Arqueológico de Ollantaytambo" class="img-responsive">
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
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
						<li><i class="icon-ok-squared"></i>Ascenso a Machu Picchu para contemplar el amanecer.</li>
						<li><i class="icon-ok-squared"></i>Recorrido guiado en Machu Picchu durante 2 horas.</li>
						<li><i class="icon-ok-squared"></i>Tiempo libre para tomar fotografías y recorrer todo Machupicchu.</li>
						<li><i class="icon-ok-squared"></i>Por la tarde retorno a Aguas Calientes.</li>
						<li><i class="icon-ok-squared"></i>Tomaremos el tren de Aguas Calientes - Ollantaytambo a las 18h20</li>
						<li><i class="icon-ok-squared"></i>Traslado en nuestro transporte de  Ollantaytambo - Cusco.</li>
						<li><i class="icon-ok-squared"></i>La llegada a Cusco, será aproximadamente de 22:15 a 22:30.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/sitio-arqueologica-de-machu-picchu.jpg" title="Sitio arqueologica de machu picchu."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/sitio-arqueologica-de-machu-picchu.jpg" alt="Sitio arqueologica de machu picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/el-intihuatana.jpg" title="El intihuatana."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/el-intihuatana.jpg" alt="El intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/templo-del-sol.jpg" title="Templo del sol."><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/templo-del-sol.jpg" alt="Templo del sol." class="img-responsive">
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
					<p>CUSCO - TRASLADO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su Hotel.</li>
						<li><i class="icon-ok-squared"></i>Traslado del hotel al aeropuerto 2 horas antes de su vuelo.</li>
						
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/desayuno.jpg" title="Desayuno en el hotel"><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/desayuno.jpg" alt="Desayuno en el Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4"> 
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/hotel.jpg" title="Salida del Hotel"><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/hotel.jpg" title="Salida del hotel" alt="Salida del Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/hotel-aeropuerto.jpg" title="Traslado al aeropuerto"><img src="img/tours-machu-picchu/cusco-clasico-imperial-6-dias-5-noches/hotel-aeropuerto.jpg" alt="Traslado al Aeropuerto" class="img-responsive">
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embedmid=1IawH51o2O9Lh2Mxoco3BFAW901E" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<h4><span><i class="icon_set_1_icon-30"></i>Paquete + <i class="icon_set_1_icon-6"></i>Hotel + <i class=" icon_set_1_icon-5"></i>Tren (Clase turístico)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATEGORÍA</strong></td>
				<td><strong>HOTELES EN<br>CUSCO</strong></td>
				<td><strong>HOTELES EN<br> AGUAS CALIENTES</strong></td>
				<td><strong>INDIVIDUAL</strong></td>
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONOMICO</h5></td>
				<td><i class="icon-play-5"></i>H. Prisma<br> <i class="icon-play-5"></i>H. Aranjuez<br><i class="icon-play-5"></i>H. Hatun Wasi</td>
				<td><i class="icon-play-5"></i>H. Continental<br> <i class="icon-play-5"></i>H. Eco Machupicchu<br><i class="icon-play-5"></i>H. 7 Machupicchu</td>
				<td>$ 695</td>
				<td>$ 600</td>
				<td>$ 585</td>
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍSTICO</h5></td>
				<td><i class="icon-play-5"></i>H. Samay Sub<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. S.A Internacional<br><i class="icon-play-5"></i>H. Midori</td>
				<td><i class="icon-play-5"></i>H. Inti Punku INN<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. Inka Town <br><i class="icon-play-5"></i>H. Hatun Samay</td>
				<td>$ 825</td>
				<td>$ 675</td>
				<td>$ 650</td>
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPERIOR</h5></td>
				<td><i class="icon-play-5"></i>H. 7 Ventanas Sup:<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. S.A Dorado<br><i class="icon-play-5"></i>H. Jose Antonio</td>
				<td><i class="icon-play-5"></i>H. Terra Viva Sup:<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. Casa Andina<br><i class="icon-play-5"></i>H. Inti Punku MAPI</td>
				<td>$ 995</td>
				<td>$ 780</td>
				<td>$ 760</td>
				</tr> 
				<tr> 
				<td rowspan="2"><h5>CLASE<br>LUJO</h5></td>  
				<td><i class="icon-play-5"></i>H. Costa del Sol<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td><i class="icon-play-5"></i>H. Mapi<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 1335</td>
				<td>$ 970</td>
				<td><span class="label label-danger">cerrado</span></td>
				</tr>
				<tr>  
				<td><i class="icon-play-5"></i>H. Aranwa<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td><i class="icon-play-5"></i>H. Sumaq<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 1960</td>
				<td>$ 1390</td>
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


<script src="../assets/validate.js"></script> 
  </body>
</html>