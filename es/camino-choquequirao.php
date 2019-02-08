<?php
$nombre_paquete = 'Camino a Choquequirao';
$numero_dias='4 días y 3 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Choquequirao es un centro arqueológico cuyo nombre significa: 'cuna de oro' situada entre la cadena de montañas de los andes, como: el nevado Salkantay y nevado de Pumasillo, y bajo la jurisdicción del distrito de Santa Teresa, Provincia de La Convención, Departamento del Cuzco, al sur del Perú.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Caminatas Alternativas";
$url_category="caminatas-alternativas";

$url_foto_seo="https://www.antisuyotrekperu.com/es/img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/coca-masana.jpg";
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

                <?php   $url_s = "caminatas-alternativas/camino-choquequirao-4-dias-3-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>430</span>Por persona
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
					 <p><strong>Choquequirao</strong> es un centro arqueológico cuyo nombre significa: "cuna de oro" situada entre la cadena de montañas de los andes, como: el nevado Salkantay y nevado de Pumasillo, y bajo la jurisdicción del distrito de <strong>Santa Teresa</strong>, Provincia de La Convención, Departamento del <strong>Cuzco</strong>, al <strong>sur del Perú</strong>.</p>
					 <p>El <strong>complejo arqueológico de Choquequirao</strong> está conformado por edificios y terrazas distribuidas en diferentes niveles, desde el nivel más bajo Sunch'u Pata hasta la cima truncada más alta, la cual fue nivelada y cercada con piedras para formar una plataforma con una área aproximada de 150 metros cuadrados.Según las crónicas <strong>Choquequirao</strong> fue el último refugio <strong>inca</strong> a partir de 1536.</p>
              		<p><strong>Choquequirao</strong> (a veces también como <strong>Choquequirao</strong> o <strong>Choquekiraw</strong>) es conocida como <strong>la "hermana sagrada" de Machu Picchu</strong> por la semejanza estructural y arquitectónica con esta. Recientemente, estando parcialmente excavada, ha despertado el interés del gobierno peruano por recuperar aún más el complejo y convertirlo en una alternativa más accesible para los turistas interesados en conocer más acerca de la cultura inca. </p>
              		<p><strong>Choquequirao</strong> está localizado a 24 kilómetros del poblado de Cachora, con un camino cuesta abajo y arriba zigzagueante, con <strong>paisajes maravillosos</strong>, donde podrán aprovechar ver el vuelo de los cóndores en el <strong>cañón de Apurímac</strong>. </p>
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>CUSCO - CACHORA - COCA MASANA - PLAYA ROSALINA.</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Partiremos a las 04:00 am de la ciudad del Cusco, para dirigirnos a localidad de Cachora, allí tendremos nuestro desayuno.</p>
						<p>Al cabo de dos horas de caminata llegaremos a Capuliyoc (2915 msnm) desde donde descenderemos hacia Coca Masana (2330 msnm), las vistas de la flora y fauna empezarán a cambiar.
						Finalmente llegaremos a Playa Rosalina (1550 msnm) donde nos instalaremos y acamparemos para pasar la noche.
						Alimentación: Almuerzo y Cena.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/cachora.jpg" title="Localidad de cachora."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/cachora.jpg" title="Localidad de cachora." alt="Localidad de cachora." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/coca-masana.jpg" title="Coca Masana."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/coca-masana.jpg" alt="Coca Masana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/playa-rosalina.jpg" title="Playa rosalina."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/playa-rosalina.jpg" alt="Playa rosalina." class="img-responsive">
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
					<p>PLAYA ROSALINA - CHOQUEQUIRAO.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Después de un desayuno contundente iniciaremos nuestra caminata(considerada la más impresionante del viaje)
						Recorreremos un camino zigzagueante cuesta arriba que durará aproximadamente 5 horas, hasta llegar a Marampata donde almorzaremos, apreciaremos variedades de orquídeas y aves.
						Continuaremos nuestra caminata por dos horas hasta llegar al sitio arqueológico de Choquequirao.  
						Alimentación: Desayuno, Almuerzo y Cena.</i>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/marampata.jpg" title="Marampata."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/marampata.jpg" alt="Marampata." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/variedad-de-plantas.jpg" title="Apreciaremos variedades de orquídeas."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/variedad-de-plantas.jpg" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/complejo-arqueologico-de-choquequirao.jpg" title="complejo arqueologico de choquequirao."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/complejo-arqueologico-de-choquequirao.jpg" alt="complejo arqueologico de choquequirao." class="img-responsive">
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
					<p>COMPLEJO ARQUEOLÓGICO DE CHOQUEQUIRAO - RAYAMPATA</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Este día nos dedicaremos a explorar todo el complejo arqueológico de Choquequirao, recorriendo los lugares más importantes.
						El guía nos explicará la historia e importancia del sitio arqueológico de Choquequirao.
						Por la tarde comienza nuestra caminata de retorno hacia la playa Rosalina donde pasaremos la noche.
						Alimentación: Desayuno, Almuerzo y Cena.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/bajada-a-choquequirao.jpg" title="Llegada a choquequirao."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/bajada-a-choquequirao.jpg" title="Llegada a choquequirao." alt="Llegada a choquequirao." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/sitio-arqueologico-de-choquequirao.jpg" title="complejo arqueologico de choquequirao."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/sitio-arqueologico-de-choquequirao.jpg" alt="complejo arqueologico de choquequirao." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/explorar-el-sitio-arqueologico-de-choquequirao.jpg" title="Exploracion en choquequirao."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/explorar-el-sitio-arqueologico-de-choquequirao.jpg" alt="Exploracion en choquequirao." class="img-responsive">
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
					<p>PLAYA ROSALINA - CACHORA - CUSCO.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Luego de nuestro desayuno, iniciaremos nuestra caminata cuesta arriba por un tiempo de 5 horas, hasta llegar a la zona de Capuliyoc, lugar ideal para observar el vuelo de los cóndores de diferentes tamaños.
						Tendremos dos horas más de caminata hasta llegar a pueblo de  Cachora, donde nos esperará el bus de retorno a la ciudad de Cusco.
						Alimentación: Desayuno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/zona-de-capuliyoc.jpg" title="zona de Capuliyoc."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/zona-de-capuliyoc.jpg" alt="zona de Capuliyoc." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/retorno-a-cachora.jpg" title="Retorno a cachora."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/retorno-a-cachora.jpg" title="Retorno a cachora." alt="Retorno a cachora." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/bus-de-regreso-a-cusco.jpg" title="Bus de regreso a cusco."><img src="img/caminatas-alternativas/camino-choquequirao-4-dias 3-noches/bus-de-regreso-a-cusco.jpg" title="Bus de regreso a cusco." alt="Bus de regreso a cusco." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Recojo desde su hotel y traslado con bus hasta Cachora (Inicio del paseo).</li>
                        <li><i class="icon-ok-circle-1"></i>Alimentación 3 almuerzos, 3 desayunos y 3 cenas.</li>
                        <li><i class="icon-ok-circle-1"></i>Guía profesional en idioma español.</li>
                        <li><i class="icon-ok-circle-1"></i>El equipo de cocina y el equipo de camping.</li>
                        <li><i class="icon-ok-circle-1"></i>Arriero y Caballo (para el equipo Camping y alimentación).</li>
                        <li><i class="icon-ok-circle-1"></i>Transporte de retorno de Cachora - Cusco.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Primer día desayuno y ultimo día almuerzo.</li>
                        <li><i class="icon-cancel-circle-2"></i>Entrada al parque arqueológico de choquequirao $ 20.</li>
                        <li><i class="icon-cancel-circle-2"></i>Servicios adicionales.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1MQYd7gkhwjPSJIYNyc06YqcGZ4o" target="_blank"><img src="img/ver mapa.png"></a>  
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
							<h4><span>Clase Económica</span></h4>
						</th>
						</tr> 
					</thead>
					<tbody>
					<tr> 
						  <td><strong> PERSONA</strong></td>
						  <td><strong>ADULTO</strong></td>
						  <td><strong>ESTUDENTE</strong></td> 
						</tr>  
						<tr> 
						  <td><strong> PRECIO</strong></td>
						  <td>$ 450</td>
						  <td>$ 430</td> 
						</tr>    
					  </tbody> 
					</table> 
				</div> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input name="envioreserva" type="submit" value="ENVIAR RESERVA" class="btn_1" id="submit-contact">
            
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