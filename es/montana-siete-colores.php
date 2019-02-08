<?php
$nombre_paquete = 'Machu Picchu';
$numero_dias=' 1 Día';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Machu Picchu en idioma español significa «Montaña Vieja» es nombre contemporáneo que se da a un antiguo poblado andino construida a mediados del siglo XV en el promontorio rocoso que une las montañas Machu Picchu y Huayna Picchu en la vertiente oriental de la cordillera central sur del Perú";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$url_completo= "https://" . $host . $url;

$category_tour="Tours Machu Picchu";
$url_category="tours-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/tours-machu-picchu/cusco-machu-picchu-1-dia/templo-del-sol.jpg";

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

                <?php   $url_s = "tours-machu-picchu/cusco-machu-picchu-1-dia.jpg";

        		 ?>
        <div class="fill-tour" style="background-image:url('img/slider/montana-siete-colores.jpg');"></div>		 
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
                    <h1>Montaña de los 7 Colores</h1> 
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main" class="hotel">
                        Precio Desde<span><sup>$</sup>45</span>Por persona
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
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?=$url_category?>" itemprop="url"><span itemprop="title">Tour Montaña de 7 Colores</span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">Montaña Colorida Vinicunca</span></li>
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
					 <p>Se llama también "La Montaña del arco iris", montaña de los 7 colores "El Cerro Colorido" Rainbow Mountain Perú y muchas veces también referida como "Montaña Colorida Perú", porque la variedad de nombres originó en la imaginación de los viajeros aventureros y personas que estuvieron cerca de la Montaña Ausangate, donde forma parte de las Montañas Coloridas Perú. Esta maravilla natural es una muestra de las riquezas turísticas que tenemos en la región de Cusco. Además forma parte de la cadena montañosa de los Andes en Perú, que irradiaron emoción indescriptible por tener mesetas, arroyos, valles y cubiertas de nieve, nada complementa la grandeza de este paisaje único de su tipo. Tambien acompañada por animales andinos como: Lamas, Alpacas, aves andinas, ovejas y entre otros. La montaña Colorida Perú, también nos presenta personas locales netamente andinas, cuya felicidad es contagiosa extraña que sea el visitante. Este paisaje muestra la totalidad de una de las más bellas características geográficas de la Montaña Colorida, donde la naturaleza de tener diferentes niveles ecológicos y contar la riqueza de minerales que alberga su suelo. Por esa y muchas otras razones, fue incluida por la National Geographic como una de las 10 atracciones que se deben visitar en Perú.

                     La mejor época recomendable para visitar la Montaña Colorida es a partir del mes de abril a noviembre, ya que en esta época es seco y donde el clima es favorable para apreciar la Montaña Colorida y con el cielo azul que la embellece al medio ambiente de toda la región la montaña que la rodea. En los meses de diciembre hasta el mes de Marco, ya es una época lluviosa, donde ya comienza a llover día entero o puede caerse nevado, entonces necesita sortear el día para poder ver el paisaje de la Montaña Colorida.

                     A Distancia total de Cusco hasta Montaña Colorida, son más de 98 kilómetros y la distancia total de la caminata a pie del estacionamiento de coches hasta Montaña Colorida lleva 1 hora y media, casi 5 kilómetros en total.</p> 
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
					<div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Día 1</span></h3> 
					<p>MONTANHA COLORIDA PERU</p>
				</div>
					<ul class="list_icons">
					<p >Buscaremos por su hotel a partir de las 5h, luego pasaremos al lado sur de Cusco por un tiempo de 1 hora aproximadamente hasta llegar al pueblo de Cusipata, donde tomaremos un buen desayuno por un tiempo de 30 minutos y luego continuamos por 1 hora hasta llegar al pueblo de Wasipata. Área del estacionamiento de los coches que se encuentra en (4.530msnm). De donde partiremos con nuestra caminata por un camino fácilmente accesible por un tiempo estimado de 1 hora y media y luego llegaremos a la famosa Montañas Coloridas Perú, (Vinicún Perú) donde podremos apreciar los paisajes mágicos ubicados a los (5,200 m.s.n.m). Después de disfrutar de la maravilla que nuestra madre naturaleza nos presenta, volveremos por la misma ruta, donde nuestro transporte nos espera y luego nos desplazamos por 1 hora para almorzar, luego volvemos a la ciudad de Cusco, llegando aproximadamente a las 16: 00.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/montana-de-colores/montana-colorida.jpg" title="Montaña de Colores."><img src="img/montana-de-colores/montana-colorida.jpg" title="Montaña de Colores." alt="Montaña de Colores." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/montana-de-colores/vinicunca.jpg" title="Montaña de Colores."><img src="img/montana-de-colores/vinicunca.jpg" title="Montaña de Colores." title="Montaña de Colores." alt="Montaña de Colores." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/montana-de-colores/winicunca.jpg" title="Montaña de Colores." ><img src="img/montana-de-colores/winicunca.jpg" title="Montaña de Colores." title="Montaña de Colores." alt="Montaña de Colores." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Reunión informativa en la agencia antes del viaje.</li>
						<li><i class="icon-ok-circle-1"></i>Transporte de Cusco - Cusipata - Wasipata -Cusco.</li>
						<li><i class="icon-ok-circle-1"></i>Guía profesional en español.</li>
						<li><i class="icon-ok-circle-1"></i>Comida: 01 desayuno, 01 almuerzo, (comida vegetariana opcional).</li>
						<li><i class="icon-ok-circle-1"></i>Botella de oxígeno de emergencia. (Personal).</li>
						<li><i class="icon-ok-circle-1"></i>Kit de primeros auxilios.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Bebidas extra.</li>
						<li><i class="icon-cancel-circle-2"></i>consejos.</li>
						<li><i class="icon-cancel-circle-2"></i>Seguro de viaje.</li> 
					</ul>
                </div>
            </div>
           
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
						  <td>$ 45</td>
						  <td>$ 45</td>
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