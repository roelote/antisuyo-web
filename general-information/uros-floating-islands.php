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
    <title>Blog Uros Floating Islands | Antisuyo Trek Perú | Travel and tourism agency in Peru</title> 
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
                    <h1>Uros Floating Islands</h1>
                    <span>Islands</span>
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
                        <li><a href="machu-picchu">Uros Floating Islands</a></li> 
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
                     <h4>Uros Floating Islands</h4>
                    <p><strong><a href="../lima-cusco-puno">The floating islands of the Uros</a></strong> are a set of habitable artificial surfaces constructed of reeds, an aquatic plant that grows on the surface of <strong><a href="../lima-cusco-puno-11days">Lake Titicaca</a></strong>.</p>
                    <p><strong>The islands</strong> stand on a portion of the surface of <strong><a href="../lima-cusco-puno-11days">Lake Titicaca</a></strong>, overlapping blocks of roots Cattail on which tend successive layers of woven or woven into mats cattail. Its inhabitants, the aurochs, are an ancient people who currently focuses on <strong>the plateau of Collao</strong>  and Peru on the floating islands in <strong>the bay of Puno</strong>.</p> 
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
                                <li><i class="icon_set_1_icon-38"></i>15°49'14.6 South latitude</li> 
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="list-inline">
                                <li><i class="icon_set_1_icon-38"></i>69°58'27.2" west longitude</li> 
                            </ul>
                        </div>
                    </div> 
                </div> 
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                    <h3>recommendations</h3>
                </div>
                <div class="col-md-10 descripcion">  
                    <p>To reach the islands will have to take a boat leaving the port of Puno. They can be hired armed or reach the port and find out about the outputs tours.</p> 
                </div><!-- End col-md-9  -->
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                      <h3>Timetable</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <p>Tours depart in the morning 7 ~ 9: 00 am.</p>
                    <p>The tour to the Uros islands takes about 3 hours.</p> 
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
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros01.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros01.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros02.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros02.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros03.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros03.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros04.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros04.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros05.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros05.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros06.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros06.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros07.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros07.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros08.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros08.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros09.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros09.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros10.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros10.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros11.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros11.jpg" alt="Uros Floating Islands" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros12.jpg" title="Uros Floating Islands"><img src="../img/blog/islas-flotantes-de-los-uros/islas-flotantes-de-los-uros12.jpg" alt="Uros Floating Islands" class="img-responsive">
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