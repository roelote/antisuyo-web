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
    <meta name="description" content="<?=$url_fin ?> | Travel and tourism agency in Peru">
    <meta name="author" content="Antisuyo Trek Perú">
    <title>Blog The Society of Jesus | Antisuyo Trek Perú | Travel and tourism agency in Peru</title> 
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
                    
                    <h1>The Society of Jesus</h1>
                    <span>Cathedral</span>
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
                        <li><a href="machu-picchu">Cathedral</a></li> 
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
                    <h4>The Society of Jesus</h4>
                    <p>The <strong>Church of the Society of Jesus</strong> is a Jesuit church built in the city of Cuzco, Peru. It was built on the site of the Amarucancha, <strong>the palace of Huayna Capac</strong>. It's on <strong>the Plaza de Armas</strong>, in <strong>the center of the city</strong>. It is an example of Baroque architecture andina.Su construction began in 1576, but was badly damaged in an earthquake in 1650. The rebuilt church was completed almost two decades later. The most remarkable work of art of the church is a painting depicting the marriage of <strong>Martín García de Loyola</strong>, nephew of Ignatius Loyola to Beatriz.</p> 
                </div> 
            </div>
            <hr> 
			<div class="row">
                <div class="col-md-2">
                    <h3>Location</h3>
                </div>
                <div class="col-md-10">  
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p>Plaza De Armas, Cusco 08000</p>
                        </div>
                    </div> 
                </div> 
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                    <h3>Delas price tickets</h3>
                </div>
                <div class="col-md-10 descripcion">  
                    <p>partial Adult: S/ 10.00</p>
                    <p>Partial student: S/ 5.00</p>
                </div><!-- End col-md-9  -->
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                      <h3>Historia</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <p>There, after a long spiritual deliberation, they decided to found the Society of Jesus, which was adopted on 27 September 1540 by Paul III, who recognized them as a new religious order and signed bula of confirmation, Regimini militantis Ecclesiae (On the government militant) church.</p> 
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
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus01.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus01.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus02.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus02.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus03.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus03.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus04.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus04.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus05.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus05.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus06.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus06.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus07.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus07.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus08.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus08.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus09.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus09.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus10.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus10.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus11.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus11.jpg" alt="The Society of Jesus." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/la-compania-de-jesus/la-compania-de-jesus12.jpg" title="The Society of Jesus."><img src="../img/blog/la-compania-de-jesus/la-compania-de-jesus12.jpg" alt="The Society of Jesus." class="img-responsive">
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
 
<script src="../js/bootstrap-datepicker.js"></script>
<script>
   $("#booking_hotel").validate();
  $('input.date-pick').datepicker();
</script>  


<!--Review modal validation -->
<script src="../assets/validate.js"></script>
  </body>
</html>