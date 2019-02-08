<?php 
$url= $_SERVER["REQUEST_URI"];
$sin_categoria = substr($url,24);
$url_limpia = str_replace("-", " ", $sin_categoria);
$url_fin = ucwords($url_limpia); 
?>
<!DOCTYPE html>

<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$url_fin ?> - Antisuyo Trek - Agencia de viajes y turismo">
    <meta name="author" content="Antisuyo Trek Perú">
    <title>Blog Chincheros | Antisuyo Trek Perú | Agencia de viajes y turismo en Perú</title> 
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../../img/apple-touch-icon-144x144-precomposed.png">
<link href="../../css/base.css" rel="stylesheet">
    <link href="../../css/blog.css" rel="stylesheet">    
    <link href="../../css/slider-pro.min.css" rel="stylesheet">
    <link href="../../css/date_time_picker.css" rel="stylesheet">
    <link href="../../css/owl.carousel.css" rel="stylesheet">
	<link href="../../css/owl.theme.css" rel="stylesheet"> 
    <script src="../../js/angular.min.js"></script>   
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->        
</head>
<body>
<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]--> 
    <div class="layer"></div> 
      <?php include("includes/menu-blog.php"); ?>
          <section class="slider-tours">

        <img src="/es/img/chinchero-tour.jpg" class="img-responsive" style="margin:auto;" width="" alt="">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star voted"></i></span>
                    <h1>Chincheros</h1>
                    <span>Complejo arquelógico </span>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main" class="hotel">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End section -->

    <div id="position-none">
            <div class="container">
                        <ul> 
                        <li><a href="machu-picchu">Chincheros</a></li> 
                        </ul>
            </div>
    </div><!-- End Position -->
    
    <div id="position">
    <div class="container">
        <ol class="breadcrumb">
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" ><a href="/es/" itemprop="url"> <span itemprop="title"><i class="icon-home-1"></i></span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title">Información General</span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title"><?=$url_fin ?></span></li>
        </ol>

    </div>
   </div>
    <div class="container margin_60">
    <div class="row">
        <div class="col-md-9" id="single_tour_desc">
            <div class="row">
                <div class="col-md-2">
                    <h3>Descripción</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <h4>Complejo arqueologico de chincheros</h4>
                    <p>En <strong><a href="../cusco-clasico-tradicional">Chinchero</a></strong>, “<strong>pueblo del arco iris</strong>”, es uno de los tantos <strong><a href="../cusco-clasico-tradicional">Chinchero</a></strong> en el que las gen¬tes viven cotidianamente en los mismos ámbitos incaicos casi intactos, entre sus mismas paredes ciclópeas semiderruidas, en las mismas casas milenarias, con¬servando todavía viejas costumbres del <strong>incario</strong>.</p><p>En la plaza principal donde se realizan las ferias dominicales permanece intacta <strong><a href="../cusco-clasico-tradicional">Chinchero</a></strong> de piedra labrada, con 10 nichos trapezoidales de dos metros de alto y 1.50 de ancho, teniendo en la parte superior numerosos petroglifos en relieve.</p><p>Palacios, andenes y almenas de la gran fortaleza defensiva establecida allí por el <strong>incario</strong>, rodean al lugar “donde aparece el <strong>arco iris</strong> con sus ráfagas de luz en un ambiente que se vuelve mágico”, según anota la destacada escritora y periodista Alfonsina Barrionuevo.Se dice que <strong><a href="../cusco-clasico-tradicional">Chinchero</a></strong> fue uno de los lugares preferidos por <strong>Túpac Inca Yupanqui</strong>, donde mandara construir su palacio y muchos bellos andenes sobre <strong>la garganta del Vilcanota</strong>.</p> 
                </div> 
            </div>
            <hr> 
			<div class="row">
                <div class="col-md-2">
                    <h3>Coordenadas</h3>
                </div>
                <div class="col-md-10">  
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul class="list-inline">
                                <li><i class="icon_set_1_icon-38"></i>13°31′22″ latitud Sur</li> 
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="list-inline">
                                <li><i class="icon_set_1_icon-38"></i>73°43′42″ longitud Oeste</li> 
                            </ul>
                        </div>
                    </div> 
                </div> 
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                    <h3>Clima</h3>
                </div>
                <div class="col-md-10 descripcion">  
                    <p>El clima es cálido y templado en Chincheros. En invierno, hay mucha menos lluvia en Chincheros que en verano. El clima aquí se clasifica como Cwb por el sistema Köppen-Geiger. La temperatura media anual en Chincheros se encuentra a 11.7 °C. La precipitación es de 757 mm al año.</p> 
                </div><!-- End col-md-9  -->
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                    <h3>Área</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <p>La capital es el poblado de Chinchero, situado a 3 754 msnm. A 28 kilómetros del Cuzco, en la provincia de Urubamba, Departamento del Cuzco, y antes de llegar al Valle Sagrado de los Incas (y el río Urubamba) se encuentra el pueblo de Chinchero. El mercadillo de los domingos, que en su origen estuvo dominado por el trueque de productos entre los pobladores de la zona, en la actualidad es un atractivo turístico por la oferta de sus artesanías y textilería inca fabricados en el estilo precolombino.</p><p> Las importantes ruinas incaicas de la localidad fueron excavadas y restauradas por la Misión Arqueológica Española entre los años 1968 y 1970. Esas investigaciones dieron origen a varios volúmenes publicados por el Ministerio de Asuntos Exteriores de España.</p> 
                </div><!-- End col-md-9  -->
            </div>
            
          	<hr>
            
            <div class="row">
                <div class="col-md-2">
                    <h3>Galería</h3>
                </div>
                <div class="col-md-10">  
                     <div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros01.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros01.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros02.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros02.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros03.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros03.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros04.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros04.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros05.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros05.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros06.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros06.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros07.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros07.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros08.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros08.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros09.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros09.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros10.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros10.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros11.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros11.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/chincheros/Chincheros12.jpg" title="Complejo arqueologico de chincheros"><img src="../../img/blog/chincheros/Chincheros12.jpg" alt="Complejo arqueologico de chincheros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>    
					</div>
            <h5><strong>Fuente: </strong>Wikipedia</h5>  
                </div><!-- End col-md-9  -->
            </div> 
        </div><!--End  single_tour_desc-->
        <aside class="col-md-3">


				<?php include("includes/costados/tags.php"); ?>
				<hr> 
				<h4>info@antisuyotrekperu.com</h4>
				<hr>
				<?php include("includes/atencion-cliente.php"); ?> 
     </aside>
    </div>
    </div>
    <?php include("includes/pie.php"); ?>
<div id="toTop"></div>
<div id="overlay"></div> 
<script src="../../js/jquery-1.11.2.min.js"></script>
<script src="../../js/common_scripts_min.js"></script>
<script src="../../js/functions.js"></script> 
<script src="../../js/icheck.js"></script>
 <script src="../../js/jquery.validate.js"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Date and time pickers -->
<script src="../../js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#Img_carousel' ).sliderPro({
			width: 960,
			height: 500,
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: false,
			smallSize: 500,
			startSlide: 0,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: false
		});
	});
</script> 
<script src="../../js/bootstrap-datepicker.js"></script>
<script>
   $("#booking_hotel").validate();
  $('input.date-pick').datepicker();
</script>  
<script src="../../js/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){   
		$(".carousel").owlCarousel({
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
		});
    });
</script>
<!--Review modal validation -->
<script src="../../assets/validate.js"></script>
  </body>
</html>