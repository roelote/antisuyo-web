<?php
$nombre_paquete = 'Camino Antisuyo Machu picchu';
$numero_dias='2 días y 1 noche';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour=" El camino inca Antisuyo es una gran alternativa para aquellos que buscan escapar de las reservas del Camino Inca y tienen una hermosa experiencia visual del paisaje alto andino y tenemos salidas diarias. El Camino inca Antisuyo es el l único camino que comenzará desde la ciudad del Cusco, donde fue el camino inca utilizado por los Incas para trasladarse al Valle Sagrado de los Incas.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Caminatas Alternativas";
$url_category="caminatas-alternativas";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/regreso-de-aguas-calientes.jpg";
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

                <?php   $url_s = "caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias-1-noche.jpg";

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
                        Precio Desde<span><sup>$</sup>320</span>Por persona
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
					 <p>
					 	El <strong>camino inca Antisuyo</strong> es una gran alternativa para aquellos que buscan escapar de las reservas del <strong>Camino Inca</strong> y tienen una hermosa experiencia visual del paisaje alto andino y tenemos salidas diarias.<p/><p>El <strong>Camino inca Antisuyo</strong> es el l único camino que comenzará desde  la ciudad del <strong>Cusco</strong>, donde fue el camino inca utilizado por los <strong>Incas</strong> para trasladarse al <strong>Valle Sagrado</strong> de los <strong>Incas</strong> y también al palacio de <strong>Inca Túpac Yupanqui</strong> que está localizado en el <strong>pueblo de chinchero</strong>, que es un sitio pintoresco de la ciudad de <strong>Cusco</strong>. <p/><p>El <strong>camino inca Antisuyo</strong> es el único camino recomendable para hacer durante todo el año, sin restricciones de la lluvia y no hay peligro. <p/><p>En el <strong>Camino Antisuyo</strong> incluye  un pernocte en el  <strong>pueblo de Aguas Calientes</strong> que está localizado cerca de la ciudadela <strong>inca de Machu Picchu</strong> y los precios en el cuadro, está de acuerdo a la categoría de hoteles y tipo de acomodación.<p/>					 	
					 </p>
                </div>
            </div>
            
          	<hr>
            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>CUSCO - LAGUNA QORI COCHA - OLLANTAYTAMBO - AGUAS CALIENTES.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Pasaremos por su hotel a las 07:00 a.m, al cabo de 20 min llegaremos al Parque arqueológico de Sacsayhuaman,en este punto donde empezaremos nuestra caminata de 4 horas a ritmo moderado.
						Durante el recorrido podremos apreciar las montañas más altas de la región como: Apu Salkantay, Verónica, Chicon, Pitusiray, Huanacaure y el majestuoso Ausangate; llegaremos al lago Qori Cocha, almorzaremos a orilla del lago.
						Por la tarde descenderemos por un tiempo de dos horas, visitaremos el Templo Colonial en el pueblo de Umasbamba (3700 msnm) y su centro artesanal.
						Finalmente tomaremos el autobús que nos conducirá al poblado de Ollantaytambo, el viaje tomará un aproximado de 1 hora, donde tomaremos el tren de Ollantaytambo – Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/laguna-qori-cocha.jpg" title="Laguna qori cocha."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/laguna-qori-cocha.jpg" alt="Laguna qori cocha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/complejo-arqueologico-de-ollantaytambo.jpg" title="Complejo arqueologico de ollantaytambo."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/complejo-arqueologico-de-ollantaytambo.jpg" alt="Complejo arqueologico de ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/recepcion-en-aguas-calientes.jpg" title="Recepcion en aguas calientes."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/recepcion-en-aguas-calientes.jpg" alt="Recepcion en aguas calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                <hr>  
                </div>
               </div>             
            <div class="row">
                <div class="col-md-2"> 
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 2</span></h3> 
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Desayuno en el hotel, luego subiremos hacia Machu Picchu.
						Tendremos una visita guiada por los principales lugares del centro arqueológico.
						Por la tarde retornaremos hacia Aguas Calientes, para poder almorzar y tomar el tren de vuelta a Ollantaytambo.
						En Ollantaytambo tomaremos el bus que nos retornará de vuelta a la ciudad del Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/sitio-arqueologico-de-machu-picchu.jpg" title="Complejo Arqueologico de Machu Picchu."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/sitio-arqueologico-de-machu-picchu.jpg" alt="Complejo Arqueologico de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/regreso-de-aguas-calientes.jpg" title="Regreso a aguas calientes."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/regreso-de-aguas-calientes.jpg" alt="Regreso a aguas calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/bus-de-regreso-a-cusco.jpg" title="Bus de regreso a cusco."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-2-dias 1-noche/bus-de-regreso-a-cusco.jpg" alt="Bus de regreso a cusco." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Primer día desayuno y ultimo día almuerzo.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrada al parque arqueológico de choquequirao $ 20.</li>
                        <li><i class="icon-ok-circle-1"></i>Servicios adicionales.</li>
                        <li><i class="icon-ok-circle-1"></i>Propinas.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1Gz62Bx_w_M6GCXATbxI8_Z_T06w" target="_blank"><img src="img/ver mapa.png"></a>  
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
						  <td>$ 350</td>
						  <td>$ 320</td> 
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