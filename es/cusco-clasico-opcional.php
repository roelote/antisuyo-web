<?php
$nombre_paquete = 'Cusco Clásico Opcional';
$numero_dias='3 días y 2 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="El paquete Cusco Clásico opcional Machu Picchu 3 días y 2 noches, es una opción para aquellas persona que están de paso por la ciudad de Cusco y desean conocer el santuario histórico de Machu Picchu. Machu Picchu está en la Lista del Patrimonio de la Humanidad de la Unesco desde 1983, como parte de todo un conjunto cultural y ecológico, conocido bajo la denominación de Santuario Histórico de Machu Picchu";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Tours Machu Picchu";
$url_category="tours-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/tours-machu-picchu/cusco-clásico-opcional-3-dias-2-noches/el-intiwatana.jpg";
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

                <?php   $url_s = "tours-machu-picchu/cusco-clásico-opcional-3-dias-2-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>360</span>Por persona
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
					 <p>El paquete Cusco Clásico opcional <strong>Machu Picchu</strong> 3 días y 2 noches, es una opción para aquellas persona que están de paso por la <strong>ciudad de Cusco</strong> y desean conocer el <strong>santuario histórico</strong> de <strong>Machu Picchu</strong>. </p>					 
					 <p><strong>Machu Picchu</strong> está en la Lista del <strong>Patrimonio de la Humanidad</strong> de la Unesco desde 1983, como parte de todo un conjunto cultural y ecológico, conocido bajo la denominación de <strong>Santuario Histórico</strong> de <strong>Machu Picchu</strong>. El 7 de julio de 2007 <strong>Machu Picchu</strong> fue declarada como una de las siete <strong>maravillas del Mundo</strong> Moderno, en una ceremonia realizada en Lisboa, Portugal, que contó con la participación de cien millones de votantes en el mundo entero, eligiendo a <strong>Machu Picchu</strong> como uno de ellos.</p>               
               		<p><strong>Machu Picchu</strong> es considerada una obra maestra de la arquitectura y la ingeniería. Sus peculiares características arquitectónicas y paisajísticas, lo han convertido en uno de los <strong>destinos turísticos</strong> más populares del planeta.</p> 
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
						<li><i class="icon-ok-squared"></i>Traslado Aeropuerto - Hotel.</li>
						<li><i class="icon-ok-squared"></i>Día libre para la aclimatación.</li>
						<li><i class="icon-ok-squared"></i>Pernocte en Cusco.</li>						
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/Traslado-aeropuerto-hotel.jpg" title="Traslado Aeropuerto - Hotel."><img src="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/Traslado-aeropuerto-hotel.jpg" alt="Traslado Aeropuerto - Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/dia-libre-aclimatacion.jpg" title="Día libre para la Aclimatación"><img src="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/dia-libre-aclimatacion.jpg" alt="Día libre para la Aclimatación" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/pernocte-en-cusco.jpg" title="Pernocte en Cusco"><img src="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/pernocte-en-cusco.jpg" title="Pernocte en Cusco" alt="Pernocte en Cusco" class="img-responsive">
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
					<p>MACHU PICCHU FULL DAY.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Pasaremos por su hotel a las 04:00 a.m.</li>
						<li><i class="icon-ok-squared"></i>Tomaremos nuestro bus que nos llevará de Cusco a Ollantaytambo.</li>
						<li><i class="icon-ok-squared"></i>Donde tomaremos el tren de Ollantaytambo - Aguas Calientes a las 06:10 a.m.</li>
						<li><i class="icon-ok-squared"></i>A la llegada recepción en Aguas Calientes a la 07:50 a.m.</li>
						<li><i class="icon-ok-squared"></i>Recorrido guiado en Machu Picchu durante 2 horas.</li>
						<li><i class="icon-ok-squared"></i>Tiempo libre para tomar fotos y descansar dentro del parque de Machu Picchu.</li>
						<li><i class="icon-ok-squared"></i>Por la tarde retornaremos de Machu Picchu - Aguas Calientes.</li>
						<li><i class="icon-ok-squared"></i>Para esperar el tren de retorno de  Aguas Calientes - Ollantaytambo: 18:20 o 19:00.</li>
						<li><i class="icon-ok-squared"></i>Traslado en autobús Ollantaytambo - Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/sitio-arqueologica-de-machu picchu.jpg" title="Sitio Arqueologica de Machu Picchu"><img src="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/sitio-arqueologica-de-machu picchu.jpg" alt="Sitio Arqueologica de Machu Picchu" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/el-intiwatana.jpg" title="El Intihuatana."><img src="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/el-intiwatana.jpg" alt="El Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/templo-del-sol.jpg" title="Templo del Sol."><img src="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/templo-del-sol.jpg" alt="Templo del Sol." class="img-responsive">
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
					<p>CUSCO - TRASLADO</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Desayuno en su hotel.</li>
						<li><i class="icon-ok-squared"></i>Traslado de hotel al aeropuerto, 2 horas antes de su vuelo.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/desayuno-en-el-hotel.jpg" title="Desayuno en el Hotel."><img src="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/desayuno-en-el-hotel.jpg" alt="Desayuno en el Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/salida-de-el-hotel.jpg" title="Salida del Hotel."><img src="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/salida-de-el-hotel.jpg" alt="Salida del Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/traslado-aeropueto.jpg" title="Traslado de hotel al aeropuerto."><img src="img/tours-machu-picchu/cusco-clasico-opcional-3-dias-2-noches/traslado-aeropueto.jpg" title="Traslado de hotel al aeropuerto." alt="Traslado de hotel al aeropuerto" class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Traslados Aeropuerto - Hotel - Aeropuerto.</li>
						<li><i class="icon-ok-circle-1"></i>Guía Profesional en Machu Picchu en idioma español.</li>
						<li><i class="icon-ok-circle-1"></i>Entrada a  Machupicchu por 1 día.</li>
						<li><i class="icon-ok-circle-1"></i>2 Noches de hotel en Cusco.</li>
						<li><i class="icon-ok-circle-1"></i>Servicio de tren Ida y Vuelta en servicio (EXPEDITION).</li>
						<li><i class="icon-ok-circle-1"></i>Bus subida y bajada de Aguas Calientes - Machu Picchu.</li>
						<li><i class="icon-ok-circle-1"></i>Traslado en nuestro tr Ollantaytambo - Cusco.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Otros.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1vk7zDoMBAYBjGBQzZLBCEGZL9Uk" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<td><strong>HOTÉIS EM CUSCO</strong></td>
				<td><strong>INDIVIDUAL</strong></td>
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONOMICO</h5></td>
					<td><i class="icon-play-5"></i>Hotel Prisma<br> <i class="icon-play-5"></i>Hotel Aranjuez<br><i class="icon-play-5"></i>Hotel Hatun Wasi</td>
				<td>$ 430</td>
				<td>$ 390</td>
				<td>$ 380</td>
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍSTICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Samay <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>Hotel S.A Internacional<br><i class="icon-play-5"></i>Hotel Midori</td>
				<td>$ 480</td>
				<td>$ 420</td>
				<td>$ 410</td>
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPERIOR</h5></td>
					<td><i class="icon-play-5"></i>Hotel Siete Ventanas Sup:<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>Hotel S.A Dorado<br><i class="icon-play-5"></i>Hotel Jose Antonio</td>
				<td>$ 530</td>
				<td>$ 450</td>
				<td>$ 440</td>
				</tr> 
				<tr> 
				<td rowspan="2"><h5>CLASE<br>LUJO</h5></td>  
				<td><i class="icon-play-5"></i>Hotel Costa del Sol <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 670</td>
				<td>$ 510</td>
				<td><span class="label label-danger">cerrado</span></td>
				</tr>
				<tr>  
				<td><i class="icon-play-5"></i>Hotel Aranwa<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 890</td>
				<td>$ 670</td>
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