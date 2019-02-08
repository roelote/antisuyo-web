<?php
$nombre_paquete = 'Camino Inca Clásico';
$numero_dias='4 días 3 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Machu Picchu en idioma español significa «Montaña Vieja» es nombre contemporáneo que se da a un antiguo poblado andino construida a mediados del siglo XV en el promontorio rocoso que une las montañas Machu Picchu y Huayna Picchu en la vertiente oriental de la cordillera central sur del Perú";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Camino Inca Machu Picchu";
$url_category="camino-inca-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/Piscakucho.jpg";
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

                <?php   $url_s = "camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>480</span>Por persona
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
					 <p>El Camino Inca es una red de un antiguo camino inca pavimentado con piedras que cruzan las montañas sobre el río Urubamba y llega a la ciudad de Machu Picchu en Perú.</p>

<p>Sin embargo, los caminos inca no se limitaron a este camino. Estes Caminos se vinculan de Cusco a todas las direcciones de América del Sur, que forman una red de comunicación de más de 30.000 km de Camino Inca.</p>

<p>Esta red de caminos del Camino Inca que se extiende desde el centro de Ecuador hasta el centro de Chile, el sur y la costa del Océano Pacífico hasta la vertiente oriental de los Andes.</p>

<p>El Camino Inca es la más famosa de caminata en Sudamérica y está calificado por muchos como uno de los 5 mejores caminos del mundo. Una experiencia única y todos los esfuerzo que se hace vale la pena!</p>

<p>El Camino Inca tiene en total 45 kilometros, logra combinar la belleza del paisaje de montañas, frondosos bosques y la selva subtropical. Por supuesto, una impresionante mezcla de construcciones en piedra, centros arqueológicos, ruinas y túneles incas.
El destino final del Camino Inca es Machu Picchu, la misteriosa "Ciudad Perdida de los Incas".</p>
                </div>
            </div> 
          	<hr> 
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
					<div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>CUSCO - KM 82 - HUAYLLABAMBA.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Pasaremos por su hotel a las 05:30 a 06:00 am para dirigirnos en nuestro bus, hacia el km 82 o Piscakucho(2700 msnm).
						Iniciaremos nuestra caminata desde el puesto de control hasta Miskay (2,800 msnm) llegaremos finalmente a la ciudad Inca de Patallacta(2750 msnm).
						Continuaremos hasta llegar a nuestro primer campamento Wayllabamba (3,000 msnm); desde aquí podremos apreciar el impresionante nevado Veronica (5832 msnm).</li> 
					</ul>
					<div class="row magnific-gallery">
					<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/Piscakucho.jpg" title="Piscakucho."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/Piscakucho.jpg" alt="Piscakucho." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div> 
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/campamento-wayllabamba.jpg" title="Wayllabamba."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/campamento-wayllabamba.jpg" alt="Wayllabamba." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/nevado-veronica.jpg" title="nevado Veronica."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/nevado-veronica.jpg" title="nevado Veronica." title="nevado Veronica." title="Nevado veronica.jpg." alt="Nevado veronica." class="img-responsive">
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
					<p>WAYLLABAMBA - WARMIWAÑUSCA - PACAYMAYO.</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Después de un buen desayuno, estaremos listos para continuar nuestra caminata de 9km (considerada la más fuerte del viaje).
						En este recorrido el paisaje cambiará al de la Puna Sierra, llegaremos al primer Abra: Warmiwañusca donde podremos ver llamas y alpacas pastando Ichu.
				        un bosque habitado por diversas clases de aves y osos andinos.
					    Para esta ruta recomendamos llevar caramelos de limón, chocolates y hojas de coca, mantener controlar su nivel de glicerina en la altura.Inmediatamente después del paso descenderemos al valle de Pacaymayo (3600 msnm) donde acamparemos después de 6 horas de caminata.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/desayuno-en-el-hotel.jpg" title="Desayuno en el hotel."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/desayuno-en-el-hotel.jpg" title="Desayuno en el hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/warmiwanusca.jpg" title="Warmiwañusca."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/warmiwanusca.jpg" title="Warmiwañusca." title="Warmiwañusca." alt="Warmiwañusca." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/valle-de-pacaymayo.jpg" title="Pacaymayo."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/valle-de-pacaymayo.jpg" alt="Pacaymayo." class="img-responsive">
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
					<p>PACAYMAYO - CHAQUICOCHA - WIÑAYHUAYNA.</p>
				</div>
					<ul class="list_icons descripcion">
						<P>Este día será memorable por los sitios arqueológicos que visitaremos; llegaremos al abra de Runkurakay (3970 msnm).A media mañana visitaremos el complejo arqueológico del mismo nombre, se encuentra a 3800 msnm, consiste en una pequeña estructura ovalada que se incorpora como una Torre de Vigilancia.</P>
						<P>Descenderemos hasta Yanacocha (Laguna Negra) para finalmente llegar a Sayacmarca (3624 msnm), hermoso complejo compuesto de un edificio semicircular con diferentes niveles, calles angostas, fuentes litúrgicas, patios y canales de riego.Seguiremos el camino por un acceso fácil, para llegar a la tercera etapa, el abra de Phuyupatamarca (3700 msnm).</P>
						<P>En el recorrido podremos apreciar la magnitud del arte antiguo de los incas y las rocas que fueron colocados en perfecto orden. Continuaremos nuestra caminata a través de un túnel Inca, el punto más alto de la montaña. Phuyupatamarca significa "La nube sobre la ciudad", aquí podremos observar un sofisticado complejo compuesto de fuentes de agua con una base sólida vistas impresionantes del río Urubamba.</P>
						<P>Luego de esta caminata llegaremos a nuestro campamento en Wiñayhuayna (2700 msnm). A cinco minutos del campamento se ubica el complejo arqueológico del mismo nombre, que consta de un centro agrícola con numerosas terrazas.</P>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/abra-de-runkuraka.jpg" title="abra de Runkuraka"><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/abra-de-runkuraka.jpg" alt="abra de Runkuraka." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/laguna-negra-de-yanacocha.jpg" title="Laguna Negra de Yanacocha."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/laguna-negra-de-yanacocha.jpg" alt="Laguna Negra de Yanacocha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/descanso.jpg" title="descanso en Wiñayhuayna."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/descanso.jpg" title="Descanso en Wiñayhuayna." alt="Descanso en Wiñayhuayna." class="img-responsive">
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
					<p>WIÑAYHUAYNA - MACHU PICCHU - CUSCO.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Este día nos levantaremos a las 4:00 am para dejar Wiñayhuayna y dirigirnos hasta Inti Punku (Puerta del Sol ó la salida del Sol).</P>
						<P>El recorrido nos llevará aprox. una hora, recorreremos un sendero al borde de la montaña, donde podemos ver la salida del sol sobre la ciudad de Machu Picchu.</P>
						<P>De Intipunku descenderemos a Machupicchu en un promedio de 40 minutos. Al llegar a Machu Picchu Visita guiada a Machu Picchu durante 2 horas de recorrido por todo los sitios más importantes.
						Luego tendrá tiempo libre para caminar por las afueras de la Ciudadela o subir a la montaña Huayna Picchu, donde podrá apreciar el y montañas que rodean la ciudadela de Machu Picchu 
						Podría también visitar el Templo de la Luna y el famoso Puente de Inca. En la tarde bajaran al pueblo de Aguas Calientes, donde podrá visitar los baños termales para relajarse después de 4 días de caminata.</P>
						<P>Aquí le entregaremos los boletos de tren de retorno a la ciudad de Ollantaytambo, que dura un promedio de 1hora 45 minutos, a la llegada estará esperando nuestro bus para trasladarlo a la ciudad de Cusco, arribando alrededor de las 19:30 ó  22:00.</li> 
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/sitio-arqueologica-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/sitio-arqueologica-de-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/el-intiwatana.jpg" title="El Intihuatana."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/el-intiwatana.jpg" title="El Intihuatana." alt="El Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/templo-del-sol.jpg" title="Templo del Sol."><img src="img/camino-inca-machu-picchu/camino-inca-clasico-4-dias-3-noches/templo-del-sol.jpg" alt="Templo del Sol." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Traslado desde su hotel hasta el Km 82.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrada al Camino Inca y Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Guía profesional en Idioma Inglés, español o portugués.</li>
                        <li><i class="icon-ok-circle-1"></i>Cocinero: Especializado en comidas típicas.</li>
                        <li><i class="icon-ok-circle-1"></i>Porteadores: para llevar equipos de camping y alimentación.</li>
                        <li><i class="icon-ok-circle-1"></i>Carpas confortables para los clientes, guía, cocinero y porteadores.</li>
                        <li><i class="icon-ok-circle-1"></i>Alimentación 3 desayunos / 3 almuerzos / 3 cenas.</li>
                        <li><i class="icon-ok-circle-1"></i>Boleto de tren retorno de Aguas Calientes - Ollantaytambo.</li>
                        <li><i class="icon-ok-circle-1"></i>Carpas, mesas, sillas, comedor para el grupo, tienda cocina.</li>
                        <li><i class="icon-ok-circle-1"></i>Matras térmicas para cada cliente.</li>
                        <li><i class="icon-ok-circle-1"></i>Bus Ollantaytambo - Cusco.</li>
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
                     <li><i class="icon-cancel-circle-2"></i>Desayuno del primer día y el almuerzo y la cena del último día.</li>
                     <li><i class="icon-cancel-circle-2"></i>Entradas a  los baños termales de Aguas Calientes.</li>
                     <li><i class="icon-cancel-circle-2"></i>Bus de bajada de Machupicchu – Aguas Calientes.</li>
                     <li><i class="icon-cancel-circle-2"></i>Bolsa de dormir.</li>
                     <li><i class="icon-cancel-circle-2"></i>Entrada a Huayna Picchu y Montaña Machupicchu.</li>
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
                <div class="col-md-10"> <a target="_blank" href="https://www.google.com/maps/d/embed?mid=1vVhu7t8aR2xkHqEYXHVSPRnKDHc"><img src="img/ver mapa.png"></a>  
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
						  <td rowspan="3"><label class="centrar">$ <strong>500</strong></label></td>
						  <td rowspan="3"><label class="centrar">$ <strong>480</strong></label></td> 
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