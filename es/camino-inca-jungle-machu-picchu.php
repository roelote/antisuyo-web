<?php
$nombre_paquete = 'Camino Inca Jungle Machu Picchu';
$numero_dias='4 días y 3 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="El camino Inca Jungle Machu Picchu es una selección de aventuras entre el ciclismo y la caminata hacia la ciudad inca de Machu Picchu en 4 días y 3 Noches; este recorrido es hecho en bicicleta el primer día y el segundo será por un camino inca por el valle de La Convención, es un viaje extraordinario y maravilloso, donde conoceremos las actividades a las que la gente de la zona se dedica, tales como el secado de café, las plantaciones de plátano, paltos, naranjas y de la sagrada hoja de coca.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Caminatas Alternativas";
$url_category="caminatas-alternativas";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/bicicleteada.jpg";
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

                <?php   $url_s = "caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>300</span>Por persona
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
					 <p>El <strong>camino Inca Jungle Machu Picchu</strong> es una selección de <strong>aventuras entre  el ciclismo</strong> y la caminata hacia la ciudad inca de  <strong>Machu Picchu</strong> en 4 días y 3 Noches; este recorrido es hecho en <strong>bicicleta</strong> el primer día y el segundo será  por un <strong>camino inca</strong> por el valle de La Convención, es un <strong>viaje extraordinario y maravilloso</strong>, donde conoceremos las actividades a las que la gente de la zona se dedica, tales como el secado de café, las plantaciones de plátano, paltos, naranjas y de la <strong>sagrada hoja de coca</strong>.</p>					 
					 <p>El Camino <strong>Inca jungle</strong> es una gran alternativa para las personas que quieren disfrutar de un lugar tranquilo y agradable, también para evitar problemas de altitud, además permite tener más contacto con la gente local que vive en el otro lado de la <strong>ciudad del Cusco</strong>. Esta opción está llena de adrenalina, las vistas y el paisajes son inolvidables.</p>
              		<p>El <strong>camino inca jungle Machu picchu</strong> tiene un recorrido de 36 kilómetros, incluyendo el camino hecha con <strong>bicicleta</strong> y la <strong>caminata</strong>.</p>
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>CUSCO - SANTA MARIA (BICICLETA).</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Pasaremos por su hotel alrededor de las 07:00 am, para dirigirnos en carro hasta el abra Málaga, punto místico para agradecimiento a la Pachamama, ceremonia que haremos antes de iniciar la bicicleteada.
						Desde este punto ya podremos observar todo el Valle de La Convención, nos dirigiremos hasta San Luis lugar en el que nuestro guía nos dará las bicicletas, allí iniciaremos una de las más bellas excursiones del mundo comparados sólo con el de Coroico en Bolivia. 
						Haremos Down Hill, aprovechando los paisajes del valle de la Convención, apreciamos las diferentes especies de flora y fauna, y visitaremos complejos arqueológicos aledaños a la zona.
						Por la tarde llegaremos al pueblo de Santa María, que está localizado a 1430 msnm, allí disfrutaremos de una cena y pasaremos nuestra primera noche.
						Alimentación: Almuerzo y Cena.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/el-abra-malaga.jpg" title="El abra de malaga."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/el-abra-malaga.jpg" alt="El abra de malaga." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/bicicleteada.jpg" title="bicicleteada."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/bicicleteada.jpg" alt="bicicleteada" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/Valle-de-la-convencion.jpg" title="Valle de La Convención."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/Valle-de-la-convencion.jpg" alt=" Valle de La Convención." class="img-responsive">
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
					<p>SANTA MARIA - SANTA TERESA (CAMINATA).</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Desayuno contundente a base de papaya, plátano, naranja y entre otras frutas naturales de la zona.
						Empezaremos nuestra excursión, atravesando lugares de densa vegetación, podremos observar el proceso de cultivo y secado  del café, de la hoja de coca; encontraremos también el famoso Kapac Ñan, que es una red de caminos incas preservados hasta el día de hoy de forma intacta
						Por la tarde llegaremos al famoso y maravilloso baños termo medicinales de Cocalmayo, considerado uno de los mejores baños termales de todo el Perú
						Aquí nos quedaremos en el hospedaje y luego tendremos la cena; durante la cena nuestro guía coordinará y nos informará sobre el recorrido del día siguiente. 
						Alimentación: Desayuno, Almuerzo y Cena.</i>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/valle-de-los-sagrado.jpg" title="valle de los sagrado."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/valle-de-los-sagrado.jpg" alt="valle de los sagrado." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/banos-termo-medicinales-de-cocalmayo.jpg" title="Baños termo medicinales de Cocalmayo."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/banos-termo-medicinales-de-cocalmayo.jpg" alt="Baños termo medicinales de Cocalmayo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/pueblo-de-aguas-calientes.jpg" title="Pueblo de Aguas Calientes."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/pueblo-de-aguas-calientes.jpg" alt="Pueblo de Aguas Calientes." class="img-responsive">
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
					<p>SANTA TERESA - AGUAS CALIENTES (CAMINATA).</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Después de tomar el desayuno, continuaremos nuestra caminata hacia el pueblo de Hidroeléctrica, que debe su nombre a la planta de producción de electricidad localizada ahí.
						Tendremos una caminata de 2 a 3 horas más hacia el pueblo de Aguas Calientes, ruta fascinante por la diversidad de flora y fauna.</p>
						<p>A la llegada al pueblo de Aguas Calientes iremos directo al hotel localizado cerca al santuario de Machu Picchu. 
						Alimentación: Desayuno, Almuerzo y Cena.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/tren-a-la-hidroelectrica.jpg" title="Tren a la Hidroeléctrica."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/tren-a-la-hidroelectrica.jpg" alt="Tren a la Hidroeléctrica." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/pueblo-de-aguas-calientes.jpg" title="Pueblo de Aguas Calientes."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/pueblo-de-aguas-calientes.jpg" alt="Pueblo de Aguas Calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/sitio-arqueologico-de-machu-picchu.jpg" title="Sitio arqueologico de machu picchu."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/sitio-arqueologico-de-machu-picchu.jpg" alt="Sitio arqueologico de machu picchu." class="img-responsive">
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
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO.</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Después del desayuno, a las 04h30 iniciaremos el ascenso hacia Machu Picchu
						Tendremos una visita guiada con nuestro un profesional por todo el complejo arqueológico de Machu Picchu.</p>
						<p>Una vez culminada nuestra visita a la maravilla del mundo, retornaremos hacia el pueblo de Aguas Calientes, para almorzar y esperar el tren de retorno.
						A la llegada a Ollantaytambo nos estará esperando nuestro bus privado que nos llevará hasta la ciudad de Cusco. </p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/sitio-arqueologico-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/sitio-arqueologico-de-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/pueblo-de-aguas-calientes.jpg" title="salida de Aguas Calientes."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/pueblo-de-aguas-calientes.jpg" alt="salida de Aguas Calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/bus-de-regreso-a-cusco.jpg" title="bus de regreso a cusco."><img src="img/caminatas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noches/bus-de-regreso-a-cusco.jpg" alt="bus de regreso a cusco." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Transporte turístico Cusco - Puerto de Málaga.</li>
                        <li><i class="icon-ok-circle-1"></i>Bicicletas con suspensión delantera para cada pasajero.</li>
                        <li><i class="icon-ok-circle-1"></i>Alimentación 3 almuerzos, 3 desayunos y 3 cenas</li>
                        <li><i class="icon-ok-circle-1"></i>3 noches de hospedaje.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrada a Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Guía profesional en Idioma  español.</li>
                        <li><i class="icon-ok-circle-1"></i>Boleto de tren Aguas Calientes - Ollantaytambo.</li>
                        <li><i class="icon-ok-circle-1"></i>Traslado Ollantaytambo - Cusco.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Desayuno el primer día, almuerzo y cena ultimo día.</li>
                        <li><i class="icon-cancel-circle-2"></i>Ticket de bus de Aguas Calientes - Machu Picchu (opcional).</li>
                        <li><i class="icon-cancel-circle-2"></i>Entrada a  los baños termales de Aguas Calientes (10 soles).</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1lwks4RmJZ4M0-E8nBd_GjA-gg4o" target="_blank"><img src="img/ver mapa.png"></a>  
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
							<h4><span><strong>Clase Económica</strong> </span></h4>
						</th>
						</tr> 
					</thead>
					<tbody>
					<tr> 
						  <td><strong>PERSONA</strong></td>
						  <td><strong>ADULTO</strong></td>
						  <td><strong>ESTUDIANTE</strong></td>
						</tr>  
						<tr> 
						  <td><strong>PRECIO</strong></td>
						  <td>$ 320</td>
						  <td>$ 300</td>
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