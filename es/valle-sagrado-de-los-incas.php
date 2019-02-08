<?php
$nombre_paquete = 'Valle Sagrado de los Incas';
$numero_dias='1 día';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour=" El Valle Sagrado de los Incas está compuesto por numerosos ríos que descienden por quebradas y pequeños valles que posee numerosos monumentos arqueológicos y pueblos indígenas. Este valle fue muy apreciado por los incas debido a sus especiales cualidades geográficas y climáticas. Fue uno de los principales puntos de producción por la riqueza de sus tierras y lugar en donde se produce el mejor grano de maíz en el Perú.
";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Caminatas Alternativas";
$url_category="caminatas-alternativas";

$url_foto_seo="https://www.antisuyotrekperu.com/es/img/caminatas-alternativas/valle-sagrado-de-los-incas-1-dia/complejo-arqueologico-de-pisac.jpg";
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

                <?php   $url_s = "caminatas-alternativas/valle-sagrado-de-los-incas-1-dia.jpg";

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
						Precio por<a href="#formulario"><span>inbox</span></a> 
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
                <div class="col-md-10"> 
					 <p>               
                <strong>El Valle Sagrado de los Incas</strong> está compuesto por numerosos<strong> ríos</strong> que descienden por quebradas y pequeños valles que posee numerosos <strong>monumentos arqueológicos</strong> y <strong>pueblos indígenas</strong>.</p>
                 <p> Este <strong>valle</strong> fue muy apreciado por los <strong>incas</strong> debido a sus especiales cualidades <strong>geográficas y climáticas</strong>. Fue uno de los principales puntos de producción por la riqueza de sus tierras y lugar en donde se produce el mejor <strong>grano de maíz</strong> en el <strong>Perú</strong>.</p>
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>CUSCO VALLE SAGRADO DE LOS INCAS</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las: 08:30 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Salida al Valle Sagrado de los Incas 09:00 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Visitaremos: Mercado de Corao, Mercado de Pisaq.</li>
                        <li><i class="icon-ok-squared"></i>Támbien visitaremos las ruinas de Pisaq y ruinas de Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>Por la tarde vamos a tomar el tren Ollanta - Aguas Calientes 19:00.</li>
                        <li><i class="icon-ok-squared"></i>Recepción en la estación de tren en Aguas Calientes a 20:40.</li>
                        <li><i class="icon-ok-squared"></i>Alojamiento en el hotel elegido.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/valle-sagrado-de-los-incas-1-dia/Mercado-de-pisac.jpg" title="Mercado de pisac."><img src="img/caminatas-alternativas/valle-sagrado-de-los-incas-1-dia/Mercado-de-pisac.jpg" title="Mercado de pisac." title="Mercado de pisac." alt="Mercado de pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/valle-sagrado-de-los-incas-1-dia/complejo-arqueologico-de-pisac.jpg" title="complejo arqueologico de pisac."><img src="img/caminatas-alternativas/valle-sagrado-de-los-incas-1-dia/complejo-arqueologico-de-pisac.jpg" alt="complejo arqueologico de pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/valle-sagrado-de-los-incas-1-dia/recepcion-en-aguas-calientes.jpg" title="Recepcion en aguas calientes."><img src="img/caminatas-alternativas/valle-sagrado-de-los-incas-1-dia/recepcion-en-aguas-calientes.jpg" alt="Recepcion en aguas calientes." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Transporte para cada paseo.</li>
                        <li><i class="icon-ok-circle-1"></i>Guía Profesional para Valle Sagrado de los Incas y Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrada a Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>1 Noche de hotel en Aguas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>Servicio de Tren Ida y Vuelta (EXPEDITION).</li>
                        <li><i class="icon-ok-circle-1"></i>Bus subida y bajada Aguas Calientes - Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Traslado en bus Ollantaytambo - Cusco.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Alimentación.</li>
                        <li><i class="icon-cancel-circle-2"></i>boleto turístico.</li>
                        <li><i class="icon-cancel-circle-2"></i>Servicios extras.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1eTDNo7xXGoMv8u7ExdcJN_WinFs" target="_blank"><img src="img/ver mapa.png"></a>  
                </div>    
            </div>
            <hr>
            <form id="formulario" method="post" action="reserva.php">
            <div class="row">
				<div class="col-md-2">
					<h3><span>PRECIO</span></h3>
				</div>
			<div class="col-md-10"> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input name="envioreserva" type="submit" value="ENVIAR RESERVA / INBOX" class="btn_1" id="submit-contact">            
          	 <?php include("includes/forma-de-pago.php"); ?> 
			</div>
			</div>
            </form>
        </div>
        <br> 
        <aside class="col-md-3">   
        <?php include("includes/costados/mejores-caminatas.php"); ?>    
        <?php include("includes/costados/paquetes-machu-picchu.php"); ?>
        <?php include("includes/atencion-cliente.php"); ?>        
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