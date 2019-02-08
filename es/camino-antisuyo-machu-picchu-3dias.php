<?php
$nombre_paquete = 'Camino Antisuyo Machu picchu';
$numero_dias='3 días y 2 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="El camino inca Antisuyo es una gran alternativa para aquellos que buscan escapar de las reservas del Camino Inca y tiene una hermosa experiencia visual del paisaje alto andino para la que tenemos salidas diarias. El Camino inca Antisuyo es el único camino que comenzará desde la ciudad del Cusco, donde fue el camino inca tradicional utilizado por los Incas para trasladarse al Valle Sagrado de los Incas";


$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Caminatas Alternativas";
$url_category="caminatas-alternativas";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/costumbes-en-umasbamba.jpg";


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

                <?php   $url_s = "caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches.jpg";

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
                        Precio Desde<span><sup>$</sup>370</span>Por persona
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
					 <p>El camino <strong>inca</strong> Antisuyo es una gran alternativa para aquellos que buscan escapar de las reservas del <strong>Camino Inca</strong> y tiene una hermosa experiencia visual del paisaje alto <strong>andino</strong> para la que tenemos salidas diarias.</p>
					 <p>El <strong>Camino inca Antisuyo</strong> es el único camino que comenzará desde  la ciudad del Cusco, donde fue el <strong>camino inca</strong> tradicional utilizado por los Incas para trasladarse al <strong>Valle Sagrado</strong> de <strong>los Incas</strong> y también al palacio de <strong>Inca Túpac Yupanqui</strong> que está localizado en el <strong>pueblo de chinchero</strong>. </p><p>El <strong>camino</strong> <strong>inca</strong> <strong>Antisuyo</strong> es el único camino recomendable para hacer durante todo el año, sin restricciones a ningún tipo de dificultades o perjuicio. </p><p><strong>El camino Antisuyo</strong> es uno de los caminos alternos donde nos enseñara, la cultura y costumbres de los incas, porque en el transcurso de nuestra caminata vamos convivir con los pobladores netos nativos y descendientes de <strong>los incas</strong>. </p><p>En el <strong>Camino Antisuyo</strong> esta incluido la segunda noche de pernocte en el  pueblo de Aguas Calientes,  que está localizado cerca de la ciudadela inca de <strong>Machu Picchu</strong>, los precios en el cuadro está de acuerdo a la categoría de hoteles y tipo de acomodación.</p>					 	
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
					<p>CUSCO - LAGUNA QORI COCHA - UMASBAMBA</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Pasaremos por su hotel  a las 07:00 para dirigirnos al Parque Arqueológico de Sacsayhuaman en este punto iniciaremos nuestra caminata.
						Llegaremos al lago Qoricocha (lago de oro) lugar en el que almorzaremos.
						En el camino también podremos apreciar las 5 montañas más altas de la región Cusco: Salkantay, Verónica, Chicon, Pitusiray y el nevado de Ausangate.
						Continuaremos la caminata hasta llegar al pueblo de Umasbamba, en el que se encuentra la capilla Sixtina de Umasbamba (3700 msnm),pernoctaremos en la casa de una familia.</p>
					</ul>
					<div class="row magnific-gallery">
					<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/complejo-arqueologico-de-sacsayhuaman.jpg" title="Complejo arqueologico sacsayhuaman."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/complejo-arqueologico-de-sacsayhuaman.jpg" alt="Complejo arqueologico sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/laguna-qori-cocha.jpg" title="Laguna qori cocha."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/laguna-qori-cocha.jpg" alt="Laguna qori cocha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/capilla-sixtina de Umasbamba.jpg" title="La capilla Sixtina de Umasbamba."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/capilla-sixtina de Umasbamba.jpg" alt="La capilla Sixtina de Umasbamba." class="img-responsive">
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
					<p>CASA FAMILIAR UMASBAMBA – CHINCHERO – AGUAS CALIENTES.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Luego de un desayuno típico continuaremos nuestra caminata por el segundo tramo del camino inca, iniciando en el complejo arqueológico de Chinchero.
						Continuaremos nuestra caminata cuesta abajo por caminos incas de aproximadamente 7 km hasta llegar al poblado inca de Urquillos, apreciaremos las variedades de maíz, entre ellas la del grano más grande del mundo, llamada “paraqay”.
						Tendremos la oportunidad de entrar en contacto con las familias para disfrutar de un típico almuerzo.
						Continuaremos nuestro viaje por 1 hora hacia la estación de Ollantaytambo, lugar en el que tomaremos el tren que nos llevará hacia el pueblo de Aguas Calientes donde pasaremos la noche.</li>
                       </li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/costumbes-en-umasbamba.jpg" title="Costumbes en umasbamba."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/costumbes-en-umasbamba.jpg" alt="Costumbes en umasbamba." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/complejo-arqueologico-de-chinchero.jpg" title="complejo arqueológico de Chinchero"><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/complejo-arqueologico-de-chinchero.jpg" alt="complejo arqueológico de Chinchero." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/recepcion-en-aguas-calientes.jpg" title="recepcion en aguas calientes."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/recepcion-en-aguas-calientes.jpg" alt="recepcion en aguas calientes." class="img-responsive">
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
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Desayuno en el hotel, luego iniciaremos el ascenso hacia Machu Picchu.
						Tendremos una visita guiada a cargo de un profesional por todo el complejo arqueológico de Machu Picchu.
						Culminada nuestra visita a Machu Picchu, retornaremos hacia el pueblo Aguas Calientes, para almorzar y esperar el tren de retorno hacia Ollantaytambo.
						A la llegada nos estará esperando el bus para trasladarnos a la ciudad imperial.</li>
                       </li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/complejo-arqueologico-de-machu-picchu.jpg" title="Complejo Arqueologico de Machu Picchu."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/complejo-arqueologico-de-machu-picchu.jpg" alt="Complejo Arqueologico de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/retorno-a-ollantaytambo.jpg" title="retorno a ollantaytambo."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/retorno-a-ollantaytambo.jpg" alt="retorno a ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/bus-de-regreso-a-cusco.jpg" title="Bus de regreso a cusco."><img src="img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/bus-de-regreso-a-cusco.jpg" alt="Bus de regreso a cusco." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Traslado de su hotel al lugar de inicio.</li>
                        <li><i class="icon-ok-circle-1"></i>2 almuerzos 2 desayunos 2 cenas.</li>
                        <li><i class="icon-ok-circle-1"></i>Guía profesional español.</li>
                        <li><i class="icon-ok-circle-1"></i>Traslado de Urquillos - Ollantaytambo.</li>
                        <li><i class="icon-ok-circle-1"></i>1 noche hospedaje( casa de familia Umasbamba).</li>
                        <li><i class="icon-ok-circle-1"></i>1 noche de hotel en Aguas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>Tren de Ida (Servicio expedition) 19:00 ó 21:00.</li>
                        <li><i class="icon-ok-circle-1"></i>Tren de retorno (Servicio expedition) 18h20 ó 19h00.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrada a Machu Picchu por un día.</li>
                        <li><i class="icon-ok-circle-1"></i>Bus de subida y bajada de Aguas Calientes - Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Traslado Ollantaytambo - Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>Equipos de primeros auxilios.</li>

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
						<li><i class="icon-ok-circle-1"></i>Desayuno el primer día y el almuerzo del último día.</li>
                        <li><i class="icon-ok-circle-1"></i>entrada a aguas termales en aguas calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>Seguro de viaje.</li>
                        <li><i class="icon-ok-circle-1"></i>Otros extras que no estén incluidos.</li>



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
						<li><i class="icon-ok-circle-1"></i>Tren Vistadome Primera Clase agregar  $ 69.</li>
                        <li><i class="icon-ok-circle-1"></i>Hotel de categoría turística adicionar $ 30.</li>
                        <li><i class="icon-ok-circle-1"></i>Hotel de categoría superior adicionar $ 50.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrada a  Huayna Picchu $ 20. (solicitar con anticipación).</li>
                        <li><i class="icon-ok-circle-1"></i>Bastones $ 8.</li>
                        <li><i class="icon-ok-circle-1"></i>Otros.</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Mapa</h3>
                </div>  
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1pf-iVlKvbBE7VIV1wmFHu_FRG9U" target="_blank"><img src="img/ver mapa.png"></a>  
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
						  <td>$ 390</td>
						  <td>$ 370</td> 
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