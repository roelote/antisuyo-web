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
    <title>Blog Museum Historico Regional | Antisuyo Trek Perú | Travel and tourism agency in Peru</title> 
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
                    <h1>Museum Historico Regional</h1>
                    <span>Museum</span>
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
                        <li><a href="machu-picchu">Museum</a></li> 
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
                    <h4>Museum Historico Regional</h4>
                    <p>Located in the colonial mansion of the famous writer and chronicler <strong>Garcilaso</strong> de la Vega <strong>cusqueño</strong> <strong>Chimpuocllo</strong>, the building dates from the late sixteenth century and early seventeenth century and was inhabited by <strong>Garcilaso</strong> until 1560, when he went to Spain permanently. He stood on <strong>Inca</strong> terraces that formed the <strong>Plaza Cusipata</strong>. Regarding the building typology shows an influence of civil Andalusian building, developing from a central courtyard, a gallery of arches, stone balconies on the centreline east and wood in the rest of the crujías the second level. It was operated with restoration processes after the earthquakes of 1650, 1950 and 1986.</p> 
                </div> 
            </div>
            <hr> 
			<div class="row">
                <div class="col-md-2">
                    <h3>Dirección</h3>
                </div>
                <div class="col-md-10">  
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul class="list-inline">
                                <li><i class=""></i>Street Garcilaso Heladeros s / n. Casa del Inca Garcilaso de la Vega</li> 
                            </ul>
                        </div>
                        
                    </div> 
                </div> 
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                    <h3>Phone and Mail</h3>
                </div>
                <div class="col-md-10 descripcion">  
                    <p>(084) 223245</p> 
                    <p>museos@culturacusco.gob.pe</p> 
                </div><!-- End col-md-9  -->
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                      <h3>Ticket prices</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <p>Nacionales: General: S/. 70 </p> 
                      <p>Foreign: General S/. 130</p>
                     <p>Visitors and local students: free Saturday</p>
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
								<a href="../img/blog/museo-historico-regional/museo-historica-regional01.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional01.jpg" alt="Regional Historical Museum." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional02.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional02.jpg" alt="Regional Historical Museum." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional03.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional03.jpg" alt="Regional Historical Museum." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional04.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional04.jpg" alt="Regional Historical Museum." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional05.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional05.jpg" alt="Regional Historical Museum." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional12.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional12.jpg" alt="Regional Historical Museum." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional07.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional07.jpg" alt="Regional Historical Museum.." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional08.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional08.jpg" alt="Regional Historical Museum." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional09.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional09.jpg" alt="Regional Historical Museum." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional10.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional10.jpg" alt="Regional Historical Museum." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional11.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional11.jpg" alt="Regional Historical Museum." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/museo-historico-regional/museo-historica-regional06.jpg" title="Regional Historical Museum."><img src="../img/blog/museo-historico-regional/museo-historica-regional06.jpg" alt="Regional Historical Museum." class="img-responsive">
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