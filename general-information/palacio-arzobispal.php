<?php 
$url= $_SERVER["REQUEST_URI"];
$sin_categoria = substr($url,21);
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
    <meta name="description" content="Antisuyo Trek Perú | Travel and tourism agency in Peru">
    <meta name="author" content="Antisuyo Trek Perú">
    <title>Blog Tambomachay | Antisuyo Trek Perú | Travel and tourism agency in Peru</title> 
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">
<link href="../css/base.css" rel="stylesheet">
    <link href="../css/blog.css" rel="stylesheet">    
    <link href="../css/slider-pro.min.css" rel="stylesheet">
    <link href="../css/date_time_picker.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
	<link href="../css/owl.theme.css" rel="stylesheet"> 
    <script src="../js/angular.min.js"></script>   
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

        <img src="../img/chinchero-tour.jpg" class="img-responsive" style="margin:auto;" width="" alt="">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    
                    <h1>Ausangate</h1>
                    <span>Nevado</span>
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
                        <li><a href="machu-picchu">Ausangate</a></li> 
                        </ul>
            </div>
    </div><!-- End Position -->
    
        <div id="position">
    <div class="container">
        <ol class="breadcrumb">
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" ><a href="/" itemprop="url"> <span itemprop="title"><i class="icon-home-1"></i></span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title">General Information</span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title"><?=$url_fin ?></span></li>
        </ol>

    </div>
   </div>
    <div class="container margin_60">
    <div class="row">
        <div class="col-md-9" id="single_tour_desc">
            <div class="row">
                <div class="col-md-2">
                    <h3>Description</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <h4>Nevado de ausangate</h4>
                    <p></p> 
                </div> 
            </div>
            <hr> 
			<div class="row">
                <div class="col-md-2">
                    <h3>Coordinates</h3>
                </div>
                <div class="col-md-10">  
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul class="list-inline">
                                <li><i class="icon_set_1_icon-38"></i>" latitud Sur</li> 
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="list-inline">
                                <li><i class="icon_set_1_icon-38"></i>" longitud Oeste</li> 
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
                    <p></p> 
                </div><!-- End col-md-9  -->
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                      <h3>Área</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <p></p> 
                </div><!-- End col-md-9  -->
            </div>
            
          	<hr>
            
            <div class="row">
                <div class="col-md-2">
                    <h3>Gallery</h3>
                </div>
                <div class="col-md-10">  
                     <div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay01.jpg" title="Principales sectores de Machu Picchu, de acuerdo a la nomenclatura utilizada por los arqueólogos del INC-Cuzco"><img src="../img/blog/tambomachay/tambomachay01.jpg" alt="Mollepata." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay02.jpg" title="Zona agrícola en Machu Picchu"><img src="../img/blog/tambomachay/tambomachay02.jpg" alt="Zona agrícola en Machu Picchu" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay03.jpg" title="El sector urbano de Machupicchu."><img src="../img/blog/tambomachay/tambomachay03.jpg" alt="El sector urbano de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay04.jpg" title="Vista general Machu Picchu."><img src="../img/blog/tambomachay/tambomachay04.jpg" alt="Vista general Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay05.jpg" title="Roca labrada bajo el templo del Sol que da ingreso al llamado Mausoleo Real. Algunos autores como Lumbreras sugieren que podría haber estado destinado a la momia de Pachacútec."><img src="../img/blog/tambomachay/tambomachay05.jpg" alt="Roca labrada bajo el templo del Sol que da ingreso al llamado Mausoleo Real. Algunos autores como Lumbreras sugieren que podría haber estado destinado a la momia de Pachacútec." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay06.jpg" title="El recinto curvo del Templo del Sol o Torreón."><img src="../img/blog/tambomachay/tambomachay06.jpg" alt="El recinto curvo del Templo del Sol o Torreón." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay07.jpg" title="La estructura conocida como Templo Principal."><img src="../img/blog/tambomachay/tambomachay07.jpg" alt="La estructura conocida como Templo Principal." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay08.jpg" title="La piedra Intihuatana de Machu Picchu."><img src="../img/blog/tambomachay/tambomachay08.jpg" alt="La piedra Intihuatana de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay9.jpg" title="Vista del Conjunto de los Morteros o Acllahuasi tal como se ve desde el Intihuatana."><img src="../img/blog/tambomachay/tambomachay09.jpg" alt="Vista del Conjunto de los Morteros o Acllahuasi tal como se ve desde el Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay10.jpg" title="La llamada Piedra del Cóndor"><img src="../img/blog/tambomachay/tambomachay10.jpg" alt="La llamada Piedra del Cóndor" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay11.jpg" title="Fotografía de Machu Picchu tomada en 1912 por Bingham."><img src="../img/blog/tambomachay/tambomachay11.jpg" alt="Fotografía de Machu Picchu tomada en 1912 por Bingham." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/tambomachay/tambomachay12.jpg" title="PeruRail es una de dos empresas ferroviarias autorizadas para ofrecer transporte dentro del parque nacional y hasta el pueblo de Aguas Calientes."><img src="../img/blog/tambomachay/tambomachay12.jpg" alt="PeruRail es una de dos empresas ferroviarias autorizadas para ofrecer transporte dentro del parque nacional y hasta el pueblo de Aguas Calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>    
					</div>
            <h5><strong>Source:
 </strong>Wikipedia</h5>  
                </div><!-- End col-md-9  -->
            </div> 
        </div><!--End  single_tour_desc-->
        <aside class="col-md-3">
        		<?php include("includes/costados/buscar-categorias.php"); ?> 

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
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/common_scripts_min.js"></script>
<script src="../js/functions.js"></script> 
<script src="../js/icheck.js"></script>
 <script src="../js/jquery.validate.js"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Date and time pickers -->
<script src="../js/jquery.sliderPro.min.js"></script>
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
<script src="../js/bootstrap-datepicker.js"></script>
<script>
   $("#booking_hotel").validate();
  $('input.date-pick').datepicker();
</script>  
<script src="../js/owl.carousel.min.js"></script>
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
<script src="../assets/validate.js"></script>
  </body>
</html>