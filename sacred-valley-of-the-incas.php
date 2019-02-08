<?php
$nombre_paquete = 'Sacred valley of the Incas';
$numero_dias='1 Day';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="The Sacred Valley of the Incas is composed of numerous rivers that descend by ravines and small valleys that possess numerous archaeological monuments and indigenous people.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$category_tour="Alternative Treks Cusco";
$url_category="/alternative-treks-cusco/";

$url_foto_seo="https://www.antisuyotrekperu.com/img/alternative-treks/sacred-valley-of-the-incas-1-day/Pisac market.jpg";
$url_completo= "https://" . $host . $url;
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en" ng-app>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?=$descripcion_tour?>">
    <meta name="author" content="Antisuyo Trek Perú">
    <title><?=$nombre_completo_paquete ?> | <?=$category_tour ?> | Antisuyo Trek Peru</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">
    <link href="../css/base.css" rel="stylesheet">
     
    <link href="../css/date_time_picker.css" rel="stylesheet">
  
    <script src="../js/angular.min.js"></script>
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.min.js"></script>
      <script src="../js/respond.min.js"></script>
    <![endif]-->
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
    <!-- Mobile menu overlay mask -->
     <!-- Header================================================== -->
    <?php include("includes/menu.php"); ?>
      <section class="slider-tours">

      <div class="fill-tour" style="background-image:url('img/alternative-treks/sacred-valley-of-the-incas-1-day.jpg');"></div>

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
                     Price for <a href="#formulario"><span>-</span></a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
  
       <div id="position">
    <div class="container">
        <ol class="breadcrumb">
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" ><a href="/" itemprop="url"> <span itemprop="title"><i class="icon-home-1"></i></span></a></li>
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
                    <li><i class="icon_set_1_icon-21"></i>Car</li>
                    <li><i class="icon_set_1_icon-25"></i>Train</li>
                    <li><i class="icon_set_1_icon-24"></i>Landscape</li>
                    <li><i class="icon_set_1_icon-26"></i>Bus</li>
                    <li><i class="icon_set_1_icon-4"></i>Wonder</li>
                    <li><i class=" icon_set_1_icon-57"></i>Guided</li>
                </ul>
            </div> 
            <div class="row">
                <div class="col-md-2">
                    <h3><span>DESCRIPTION</span></h3>
                </div>
                <div class="col-md-10 descripcion"> 
					 <p>The Sacred Valley of the Incas is composed of numerous rivers that descend by ravines and small valleys that possess numerous archaeological monuments and indigenous people.</p> 
                   
                    <p>This valley was much appreciated by the Incas because of their special geographic and climatic qualities. It was one of the main points of production for the richness of its lands and place where the best corn grain is produced in Peru.</p>                              
                   </div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARY</span></h3>
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 1</span></h3> 
					<p>
						CUSCO - VALLE SAGRADO DE LOS INCAS
					</p>
				</div>
					<ul class="list_icons descripcion">
						<li>We will pick you up at your hotel 30 minutes before starting our journey through the sacred valley of the Incas, a very important place for the Incas for their geographical and climatological qualities.It was one of the main point of production for agriculture, it is the place where the best corn grain is produced in Peru.The first visit of the day will be to the artisan market of Qorao, then the market of Pisaq where we will find crafts, such as ceramics, silverware, jewelry, clothes, fabrics, blankets and all kinds of work done by the people of the region, is the best Alternative to go shopping because prices are not too high, we will witness a form of pre-Hispanic trade, called "barter" exchange that did not need currency, the protagonists are the people of the region who exchange their products for other products.We will continue with our tour, towards Pisaq Archaeological Center, where the guide will explain the most important places like the sun clock (Intiwatana), Agricultural Center, urban sites, control centers, Astronomical Center and the Water Channel.We will board the bus to continue the tour passing through the towns of Lamay, Calca, Yucay that are indigenous peoples that are part of the Sacred Valley, Urubamba is the place where we are going to have lunch.We will continue our journey to the archaeological park of Ollantaytambo, which was a military, religious, administrative and agricultural base. The architectural landscape is impressive by the size, style and originality of its buildings.Back to the city of Cusco, we will visit the village of Chinchero, where are the remains of the royal hacienda of Tupac Inca Yupanqui and a colonial temple in honor of the virgin of Natividad.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/sacred-valley-of-the-incas-1-day/Pisac market.jpg" title="Pisac market."><img src="../img/alternative-treks/sacred-valley-of-the-incas-1-day/Pisac market.jpg" alt="Pisac market" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/sacred-valley-of-the-incas-1-day/archaeological-complex-of-pisac.jpg" title="Archaeological complex of pisac."><img src="../img/alternative-treks/sacred-valley-of-the-incas-1-day/archaeological-complex-of-pisac.jpg" alt="Archaeological complex of pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/sacred-valley-of-the-incas-1-day/Reception in-aguas-calientes.jpg" title="Reception in aguascalientes."><img src="../img/alternative-treks/sacred-valley-of-the-incas-1-day/Reception in-aguas-calientes.jpg" alt="Reception aguas calientes." class="img-responsive">
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
                    <h3><span>INCLUDES</span></h3>
                </div>
                <div class="col-md-10">
					 <ul class="list_icons">
                      <li><i class="icon-ok-circle-1"></i>Transfer from your hotel.</li>
                      <li><i class="icon-ok-circle-1"></i>Tourist transport.</li>
                      <li><i class="icon-ok-circle-1"></i>Professional Guide.</li>
                      <li><i class="icon-ok-circle-1"></i>Buffet lunch.</li>
				</ul>
                </div>
            </div> 
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>NOT INCLUDED</span></h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
                    <li><i class="icon-cancel-circle-2"></i>Tourist ticket (to be purchased on the first ticket and there is no limit to finish).</li>
                    <li><i class="icon-cancel-circle-2"></i>travel insurance.</li>
                    <li><i class="icon-cancel-circle-2"></i>Others.</li>              
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Suggestions</h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-vcard-1"></i>Bring your personal documents (passport or identity card).</li>
                        <li><i class="icon-vcard-1"></i>Students must bring the International Student Card (ISIC CARD).</li>
                        <li><i class="icon-sun-filled"></i>Sunscreen.</li>
                        <li><i class="icon-bug"></i>Insect repellent.</li>
                        <li><i class="icon-drizzle"></i>Plastic blanket (In rainy season). </li>
                        <li><i class="icon-cloud-wind"></i>Clothing suitable for the cold season.</li>
                        <li><i class="icon-battery"></i>An additional battery for your camera.</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Optional</h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-aboveground-rail"></i>First Class Vistadome Train add $ 69.</li>
                        <li><i class="icon-ticket"></i>Entrance to Huayna Picchu $ 20. (request with anticipation).</li>
                        <li><i class="icon-lock"></i>Private service.</li>
                        <li><i class="icon-plus-circled-2"></i>Others.</li>
					</ul>
                </div>
            </div>
            <hr>
           <div class="row">
                <div class="col-md-2">
					   <h3>Map</h3>
                </div>  
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=13RiYfHolprzz_2Y1GSH8Iim8MH4" target="_blank"><img src="../img/see map.png"></a>  
                </div>    
            </div>
            <hr>
            <form id="formulario" method="post" action="../reservation.php">
            <div class="row">
				<div class="col-md-2">
					<h3><span>Price</span></h3>
				</div>
			<div class="col-md-10"> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input name="envioreserva" type="submit" value="RESERVE NOW / INBOX" class="btn_1" id="submit-contact">
            
          	 <?php include("includes/forma-de-pago.php"); ?> 
			</div>
			</div>
            </form> 
        </div>
        <br> 
        <aside class="col-md-3">   
        <?php include("includes/costados/best-walks.php"); ?>    
        <?php include("includes/costados/packages-machu-picchu.php"); ?> 
        <?php include("includes/atencion-cliente.php"); ?>
        </aside>
    </div>
    </div>
    
    <?php include("includes/pie.php"); ?>
    <?php include("includes/bcp.php"); ?>
	<?php include("includes/paypal.php"); ?>
	<?php include("includes/wester-union.php"); ?>
	<?php include("includes/otros.php"); ?>
	<?php include("includes/terminos.php"); ?>
 <!-- modal contacto --> 
<div id="toTop"></div> 
<div id="overlay"></div>   
 
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/common_scripts_min.js"></script>
  
<script src="../js/functions.js"></script> 
 
 
  


 
 <script src="../js/bootstrap-datepicker.js"></script>
 <script>
  $('input.date-pick').datepicker('setDate', 'today');
   </script> 
 
  
<script>
$(document).ready(function(){   
		$(".carousel").owlCarousel({
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
		});
    });

</script>


<script src="../assets/validate.js"></script> 
  </body>
</html>
