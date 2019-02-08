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
    <title>Blog El lago titicaca | Antisuyo Trek Perú | Agencia de viajes y turismo en Perú</title> 
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
                    <h1>El lago titicaca</h1>
                    <span>Ciudad</span>
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
                        <li><a href="machu-picchu">Lago titicaca</a></li> 
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
                     <h4>Lago Titicaca</h4>
                    <p> El <strong><a href="../cusco-puno-alternativo">lago Titicaca</a></strong> es el lago navegable más alto del mundo, ubicado en el <strong>Altiplano andino</strong> en los Andes Centrales, dentro de la meseta del Collao una altitud promedio de 3812 msnm entre los territorios de <strong>Bolivia</strong> y Perú. Posee un área de 8562 km² de los cuales el 56 % (4772 km²) corresponden a Perú y el 44 % (3790 km²) a <strong>Bolivia</strong> y 1125 km de costa; su profundidad máxima se estima en 281 m y se calcula su profundidad media en 107 m. Su nivel es irregular y aumenta durante el verano austral.
                    </p><p>
                    Está formado por dos cuerpos de agua separados por el estrecho de <strong>Tiquina</strong>; el más grande situado al norte es denominado <strong>lago Mayor</strong> o<strong> Chucuito</strong> tiene una superficie de 6450 km², estando en esta parte su mayor profundidad (283 m), cerca de la <strong>isla Soto</strong>. El otro cuerpo más pequeño llamado Menor o <strong>Huiñamarca</strong> situado al sur tiene una superficie de 2112 km², con una profundidad máxima de 45 metros.</p> 
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
                                <li><i class="icon_set_1_icon-38"></i>15°53'47.8" latitud Sur</li> 
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="list-inline">
                                <li><i class="icon_set_1_icon-38"></i>69°19'55.5" longitud Oeste</li> 
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
                    <p>El clima de Puno es frío, moderadamente lluvioso y con amplitud térmica moderada.
                    La media anual de temperatura máxima y mínima (periodo 1960-1996) es 14.4°C y 2.7°C, respectivamente.
                    La precipitación media acumulada anual para el periodo 1964-1980 es 703.1 mm.</p> 
                </div><!-- End col-md-9  -->
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                      <h3>Altitud</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <p>El Lago Titicaca conocido como Lago de las Nubes, se encuentra en Bolivia y Perú y tiene una altitud de 3812 m (12464 pies). Es el lago “navegable” más alto del mundo, donde barcos de gran tamaño surcan sus aguas.</p> 
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
								<a href="../../img/blog/lago-titicaca/lago-titicaca01.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca01.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca02.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca02.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca03.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca03.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca04.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca04.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca05.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca05.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca06.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca06.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca07.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca07.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca08.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca08.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca09.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca09.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca10.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca10.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca11.jpg" title="."><img src="../../img/blog/lago-titicaca/lago-titicaca11.jpg" alt="" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/lago-titicaca/lago-titicaca12.jpg" title=""><img src="../../img/blog/lago-titicaca/lago-titicaca12.jpg" alt="" class="img-responsive">
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