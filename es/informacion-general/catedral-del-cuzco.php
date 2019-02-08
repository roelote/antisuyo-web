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
    <title>Blog Catedral del Cuzco | Antisuyo Trek Perú | Agencia de viajes y turismo en Perú</title> 
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
                    <h1>Catedral del Cuzco</h1>
                    <span>Catedral</span>
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
                        <li><a href="machu-picchu">Catedral</a></li> 
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
                    <h4>Catedral del Cuzco</h4>
                    <p>La <strong>Catedral del Cuzco</strong> o <strong>Catedral Basílica</strong> de la Virgen de la Asunción es el principal templo de la <strong>ciudad del Cuzco</strong>, en el Perú y alberga la sede de la <strong>Diócesis del Cuzco</strong>. La Basílica <strong>Catedral del Cuzco</strong>, junto a los <strong>templos del Triunfo</strong> y de la Sagrada Familia conforman el Conjunto de la Catedral, se encuentra ubicada en el sector noreste de la actual <strong>Plaza de Armas</strong> del <strong>Cuzco</strong>. En el lugar que fue el <strong>Suntur Wasi</strong>, Palacio del Inca Wiracocha. El complejo ocupa un área de 3956 mt2. Es el monumento religioso más importante del <strong>Centro Histórico del Cuzco</strong></p> 
                </div> 
            </div>
            <hr> 
			<div class="row">
                <div class="col-md-2">
                    <h3>Ubicación</h3>
                </div>
                <div class="col-md-10 descripcion">  
                 <p>La Catedral del Cusco se encuentra en el lado norte de la Plaza de armas del Cusco tiene un diseño rectangular compuesto de de 14 pilares tallados en piedra andesita. En la nave central se encuentra el altar principal grabado en plata y consagrado a la Virgen de la Asunción</p>
                </div> 
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                    <h3>Precio delas entradas</h3>
                </div>
                <div class="col-md-10 descripcion">  
                    <p>Adultos extranjeros: S /. 25 (US $ 8,00).</p> 
                    <p>Niños Extranjeros: S /. 13.50 (US $ 4,00).</p>
                    <p>Estudiantes extranjeros con Carnet ISIC: S /. 13.50 (US $ 4,00)</p>
                </div><!-- End col-md-9  -->
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                      <h3>Historia</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <p>La primera catedral del Cuzco es la Iglesia del Triunfo, construida en 1539 sobre la base del palacio de Viracocha Inca. En la actualidad, esta iglesia es una capilla auxiliar de la Catedral. La catedral de Cuzco, como la de Lima, es un templo de tres naves con dos más de capillas y testero plano.</p> 
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
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco01.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco01.jpg" alt="Catedral del Cuzco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco02.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco02.jpg" alt="Zona agrícola en Machu Picchu" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco03.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco03.jpg" alt="Catedral del Cuzco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco04.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco04.jpg" alt="Catedral del Cuzco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco05.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco05.jpg" alt="Catedral del Cuzco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco06.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco06.jpg" alt="Catedral del Cuzco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco07.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco07.jpg" alt="Catedral del Cuzco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco08.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco08.jpg" alt="Catedral del Cuzco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco09.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco09.jpg" alt="Catedral del Cuzco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco10.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco10.jpg" alt="Catedral del Cuzco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco11.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco11.jpg" alt="Catedral del Cuzco" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/catedral-del-cuzco/catedral-del-cuzco12.jpg" title="Catedral del Cuzco"><img src="../../img/blog/catedral-del-cuzco/catedral-del-cuzco12.jpg" alt="Catedral del Cuzco" class="img-responsive">
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