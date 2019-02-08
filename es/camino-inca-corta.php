<?php
$nombre_paquete = 'Camino Inca Corto';
$numero_dias='2 días 1 noche';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Machu Picchu en idioma español significa «Montaña Vieja» es nombre contemporáneo que se da a un antiguo poblado andino construida a mediados del siglo XV en el promontorio rocoso que une las montañas Machu Picchu y Huayna Picchu en la vertiente oriental de la cordillera central sur del Perú";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Camino Inca Machu Picchu";
$url_category="camino-inca-machu-picchu";

$url_foto_seo="https://www.antisuyotrekperu.com//es/img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/sitio-arqueologico-de-Intipunku.jpg";
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

                <?php   $url_s = "camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche.jpg";

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
                        Precio Desde<span><sup>$</sup>380</span>Por persona
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
					 <p>El Camino Inca Corto 2 días es una versión corto del famoso Camino Inca Clasico 4 días, además de que es una gran opción para aquellas personas que no tienen mucho tiempo y también para aquellos cuya condición física y edad no ayudan en una caminta más larga y que no quieren perderse una experiencia única.</p>

<p>Para este viaje vamos a utilizar el tren como transporte es la única opción para el KM 104 y caminamos hacia el complejo arqueológico de Wiñayhuayna, y pronto iremos a Inti Punku (Puerta del Sol de llamada) a 2.650 msnm, donde podemos ver una puesta de sol impresionantes puestas de sol y luego continuar hasta el pueblo de Aguas Calientes, donde pasaremos la noche en un hotel.</p>

<p>Por la mañana saldremos hacia la ciudadela de Machu Picchu, donde disfrutaremos de la salida del sol en este fantástico lugar antes de la llegada de personas que vienen en tren.</p>

<p>Vamos a tomarnos nuestro tiempo para obtener toda la información sobre Machu Picchu, con nuestro guía (aprox. 2 ½ horas) por el Templo del Sol, el Templo de las 3 ventanas, reloj solar, el Templo del Cóndor y el jardín botánico y más, entonces tendrá un tiempo libre para caminar por las afueras de "Machu Picchu" o subir Wayna Picchu, donde se puede ver toda la ciudadela de Machu Picchu, con sus valles y montañas que rodean toda la ciudadela perdida.</p>
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
					<div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>WIÑAYWAYNA - AGUAS CALIENTES.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Lo buscaremos en su hotel a las 4:00 a.m  y nos dirigiremos hacia  la estación de Ollantaytambo, para tomar el tren de la 06:10 que nos llevará hacia  el Km. 104 donde empezará nuestra caminata. 
						Visitaremos el centro arqueológico de Chachabamba (2150 msnm) luego de 3 horas de caminata llegaremos al impresionante complejo arqueológico de Wiñaywayna oformado por un centro agrícola con numerosas terrazas, un sector religioso y un sector urban.
						Subiremos al famoso sitio arqueológico de  Intipunku, "Puerta del Sol" lo que nos tomará un aproximado de 2 horas por un camino de piedras planas y vista panorámica de las montañas, 
						Desde este punto podremos disfrutar de una primera vista del majestuoso "Machu Picchu", este dia no visitaremos la ciudadela, solo pasaremos por la puerta y continuaremos hacia el pueblo de Aguas Calientes para pasar la noche.
						El tiempo de caminata es un promedio de 6 o 7 horas, luego podemos disfrutar de los baños termales de Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/complejo-arqueologico-de-winaywayna.jpg" title="Complejo arqueológico de Wiñaywayna."><img src="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/complejo-arqueologico-de-winaywayna.jpg" alt="Complejo arqueológico de Wiñaywayna." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/sitio-arqueologico-de-Intipunku.jpg" title="Sitio arqueológico de Intipunku."><img src="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/sitio-arqueologico-de-Intipunku.jpg" alt="Sitio arqueológico de Intipunku." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/banos-termales-de-aguas-calientes.jpg" title="Baños termales de Aguas Calientes."><img src="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/banos-termales-de-aguas-calientes.jpg" alt="Baños termales de Aguas Calientes." class="img-responsive">
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
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Por la mañana a las 04h30 ascenderemos hacia la ciudadela inca de Machu Picchu con el fin de observar la salida de Sol 
						Llegar antes a Machu Picchu nos permitirá tomar las mejores fotos, meditar y entrar en contacto con la naturaleza.
						Después de haber aprovechado la tranquilidad de la ciudadela inca de Machu Picchu, comenzaremos con nuestro tour guiado (aprox. 2 ½ horas) por el Templo del Sol, el Templo de las tres ventanas, el reloj solar, el Templo del Cóndor y el jardín botánico, etc.
						Tendrán un tiempo libre para caminar por las afueras de "Machu Picchu" y las personas que reservaron con anticipación podrán subir a la montaña de Huaynapicchu 
						Podian visitar también el Templo de la Luna y el famoso Puente Inca.
						Por la tarde retornaremos al pueblo de Aguas Calientes donde tomaremos el tren de regreso a Ollantaytambo y desde allí tendremos un bus que nos trasladara a la ciudad de Cusco, llegando aproximadamente a las 21h00 a 22h15.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/sitio-arqueologica-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/sitio-arqueologica-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu." alt="Sitio Arqueologica de Machu Picchu" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/templo-de-la-luna.jpg" title="Templo de la Luna."><img src="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/templo-de-la-luna.jpg" title="Templo de la Luna." title="Templo de la Luna." alt="Templo de la Luna." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/templo-del-sol.jpg" title="Templo del Sol"><img src="img/camino-inca-machu-picchu/camino-inca-corto-2-dias-1-noche/templo-del-sol.jpg" title="Templo del Sol." alt="Templo del Sol" title="Templo del Sol." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Traslado a la estación de Ollantaytambo.</li>
                        <li><i class="icon-ok-circle-1"></i>Boleto Tren ida en clase Expedition Ollantaytambo a las 06:10 al km 104.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrada a Camino Inca y Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Guía profesional autorizado.</li>
                        <li><i class="icon-ok-circle-1"></i>1 noche de hotel en Aguas Calientes con desayuno.</li>
                        <li><i class="icon-ok-circle-1"></i>1 almuerzo (box lunch) 1 cena.</li>
                        <li><i class="icon-ok-circle-1"></i>Boleto de tren Expeditión de regreso a Ollantaytambo 18h20.</li>
                        <li><i class="icon-ok-circle-1"></i>Bus Ollantaytambo – Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>Balón de oxígeno.</li>
                        <li><i class="icon-ok-circle-1"></i>Medicamento de primeros auxilios.</li>
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
                    <li><i class="icon-cancel-circle-2"></i>Desayuno del primer día y el almuerzo del 2 día.</li>
                    <li><i class="icon-cancel-circle-2"></i>Visita a los baños termales de Aguas Calientes.</li>
                    <li><i class="icon-cancel-circle-2"></i>Bus de bajada y subida de Machu Picchu - Aguas Calientes.</li>
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
						<li><i class=" icon-plus-circled-2"></i> Otros..</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Mapa</h3>
                </div>  
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1EXCaFtgT9_B5TzCErgfOPtz7JZ4" target="_blank"><img src="img/ver mapa.png"></a>  
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
						  <td rowspan="3"><label class="centrar">$ <strong>400</strong></label></td>
						  <td rowspan="3"><label class="centrar">$ <strong>380</strong></label></td> 
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
			include("includes/costados/paquete-plus.php");
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