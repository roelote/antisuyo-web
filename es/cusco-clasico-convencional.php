<?php
$nombre_paquete = 'Cusco Clásico Convencional';
$numero_dias='5 días y 4 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="El paquete Cusco Clásico Convencional Machu Picchu 5 días y 4 noches, es una opción que nos permitirá ver hermosos paisajes así como poblados pintoresco, montañas, ríos y nevados de la cadena de montañas de los andes. Machu Picchu es considerada una obra maestra de la arquitectura y la ingeniería. Sus peculiares características arquitectónicas y paisajísticas, lo han convertido en uno de los destinos turísticos más populares del planeta.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Tours Machu Picchu";
$url_category="tours-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-ollantaytambo.jpg";
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

                <?php   $url_s = "tours-machu-picchu/cusco-clasico-convencional-5-dias-4-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>510</span>Por persona
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
					 <p>El paquete Cusco Clásico Convencional <strong>Machu Picchu</strong> 5 días y 4 noches, es una opción que nos permitirá ver hermosos paisajes así como poblados pintoresco, <strong>montañas</strong>, ríos y nevados de la cadena de <strong>montañas de los andes</strong>.</p>					 
					 <p><strong>Machu Picchu</strong> es considerada una obra maestra de la arquitectura y la ingeniería. Sus peculiares características arquitectónicas y paisajísticas, lo han convertido en uno de los<strong> destinos turísticos</strong> más populares del planeta.</p>
               		<p>Se cree que <strong>Machu Picchu</strong> tuvo una población móvil como la mayoría de las <strong>llactas</strong> incas, que oscilaba entre 300 y 1000 habitantes pertenecientes a una élite (posiblemente miembros de la Panaca de <strong>Pachacutec</strong>.</p> 
               		<p>Machu Picchu está en la Lista del <strong>Patrimonio de la Humanidad</strong> de la Unesco desde 1983, como parte de todo un conjunto cultural y ecológico, conocido bajo la denominación de <strong>Santuario Histórico</strong> de <strong>Machu Picchu.</strong></p>
               		<p>El 7 de julio de 2007 <strong></strong>Machu Picchu fue declarada como una de <strong>las siete <strong>maravillas del Mundo</strong> Moderno</strong>, en una ceremonia realizada en Lisboa, Portugal, que contó con la participación de cien millones de votantes en el mundo entero, eligiendo a <strong>Machu Picchu</strong> como uno de ellas.</p>  
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
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/recepcion-aeropuerto.jpg" title="Traslado del aeropuerto."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/recepcion-aeropuerto.jpg" alt="Traslado del aeropuerto." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/hotel.jpg" title="Descanso en el hotel."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/hotel.jpg" alt="Descanso en el hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/dia-libre-aclimatacion.jpg" title="Día libre para la aclimatación."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/dia-libre-aclimatacion.jpg" alt="Día libre para la aclimatación." class="img-responsive">
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
						<li><i class="icon-ok-squared"></i>Por la tarde pasaremos por su hotel a las 13:30.</li>
						<li><i class="icon-ok-squared"></i>Salida a City Tour Arqueológico de 14:00 hasta las 18h30.</li>
						<li><i class="icon-ok-squared"></i>Visitas: Templo del Sol de Koricancha, Sacsayhuaman, Kenko, Puca Pucara y Tambomachay.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>	
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/templo-del-sol-de-koricancha.jpg" title="Templo del Sol de Koricancha."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/templo-del-sol-de-koricancha.jpg" alt="Templo del Sol de Koricancha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-sacsayhuaman.jpg" title="Complejo Arqueológico de Sacsayhuaman."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-sacsayhuaman.jpg" alt="Complejo arqueológico de Sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-qenqo.jpg" title="Complejo Arqueológico de Qenqo."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-qenqo.jpg" alt="Complejo arqueológico de Qenqo." class="img-responsive">
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
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
						<li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 08:15 a.m.</li>
						<li><i class="icon-ok-squared"></i>Salida al Valle Sagrado de los Incas a las 08:45 a.m.</li>
						<li><i class="icon-ok-squared"></i>Visita: Mercados de Corao y Pisac, los restos arqueológicos de Pisac, Ollantaytambo y Chinchero.</li>
						<li><i class="icon-ok-squared"></i>El Retorno a Cusco será aproximadamente a las 19:00</li>
						<li><i class="icon-ok-squared"></i>Tiempo libre para tomar fotografías y recorrer todo Machupicchu.Pernocte en Cusco.Pernocte en Cusco.</li>						
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-pisac.jpg" title="Complejo Arqueológico de Pisac."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-pisac.jpg" alt="Complejo Arqueológico de Pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-ollantaytambo.jpg" title="Complejo Arqueológico de Ollantaytambo."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-ollantaytambo.jpg" alt="Complejo Arqueológico de Ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-chinchero.jpg" title="Complejo Arqueologico de Chinchero."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/complejo-arqueologico-de-chinchero.jpg" alt="Complejo Arqueologico de Chinchero." class="img-responsive">
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
					<p>MACHU PICCHU DÍA COMPLETO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 04:00 a.m.</li>
						<li><i class="icon-ok-squared"></i>Traslado de Cusco - Ollantaytambo tiempo de viaje 1:30 min aprox.</li>
						<li><i class="icon-ok-squared"></i>Tomaremos el tren Ollanta - Aguas Calientes a las 6:10 a.m.</li>
						<li><i class="icon-ok-squared"></i>Recepción en Aguas Calientes a las 7:50 a.m.</li>
						<li><i class="icon-ok-squared"></i>Visita a Machu Picchu durante 2 horas con nuestro guía.</li>
						<li><i class="icon-ok-squared"></i>Tiempo libre para tomar fotografías y recorrer todo Machupicchu.</li>
						<li><i class="icon-ok-squared"></i>Por la tarde retorno a Aguas calientes.</li>
						<li><i class="icon-ok-squared"></i>Tomaremos el tren de retorno de Aguas Calientes - Ollantaytambo a las 18:20 o 19:00.</li>
						<li><i class="icon-ok-squared"></i>Traslado en nuestro transporte Ollantaytambo - Cusco.</li>
						<li><i class="icon-ok-squared"></i>La llegada a Cusco será aproximadamente entre 22:15 a 22:30.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/sitio-arqueologica-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/sitio-arqueologica-de-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/el-intihuatana.jpg" title="El Intihuatana."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/el-intihuatana.jpg" alt="El Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/templo-del-sol.jpg" title="Templo del Sol"><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/templo-del-sol.jpg" alt="Templo del Sol" class="img-responsive">
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
					<p>CUSCO - TRASLADO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en el Hotel.</li>
						<li><i class="icon-ok-squared"></i>Traslado del hotel al aeropuerto 2 horas antes de su vuelo.</li>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/desayuno.jpg" title="Desayuno en el Hotel."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/desayuno.jpg" alt="Desayuno en el Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/hotel.jpg" title="Salida del Hotel."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/hotel.jpg" alt="Salida del Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/traslado-aeropuerto.jpg" title="Traslado al aerouerto."><img src="img/tours-machu-picchu/cusco-clasico-con-pernocte 4-dias-3-noches/traslado-aeropuerto.jpg" alt="Traslado al aerouerto." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Entrada a  Machupicchu por 1 día</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1IRy2jqSVdpjLT7Xk7t-IBh7dUBE" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<td><h5>CATEGORÍA</h5></td>
				<td><strong>HOTELES EN CUSCO</strong></td>
				<td><strong>INDIVIDUAL</strong></td>
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONOMICO</h5></td>
					<td><i class="icon-play-5"></i>Hotel Prisma<br> <i class="icon-play-5"></i>Hotel Aranjuez<br><i class="icon-play-5"></i>Hotel Hatun Wasi</td>
				<td>$ 620</td>
				<td>$ 540</td>
				<td>$ 530</td>
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍSTICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Samay <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>Hotel S.A Internacional<br><i class="icon-play-5"></i>Hotel Midori</td>
				<td>$ 720</td>
				<td>$ 580</td>
				<td>$ 570</td>
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPERIOR</h5></td>
					<td><i class="icon-play-5"></i>Hotel Siete Ventanas Sup:<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>Hotel S.A Dorado<br><i class="icon-play-5"></i>Hotel Jose Antonio</td>
				<td>$ 800</td>
				<td>$ 660</td>
				<td>$ 650</td>
				</tr> 
				<tr> 
				<td rowspan="2"><h5>CLASE<br>LUJO</h5></td>  
				<td><i class="icon-play-5"></i>Hotel Costa del Sol <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 1100</td>
				<td>$ 790</td>
				<td><span class="label label-danger">cerrado</span></td>
				</tr>
				<tr>  
				<td><i class="icon-play-5"></i>Hotel Aranwa<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 1540</td>
				<td>$ 1100</td>
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