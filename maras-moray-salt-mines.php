<?php
$nombre_paquete = 'Maras Moray and Salineras';
$numero_dias='1 Day';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour=" Visit beautiful Inca people y colonies homes, enjoy the treasures that this sacred land hides a pleasant and unique tour. Maras - Moray - Salineras. One of the walks more Classic Cusco and one of the most fantastic where you can enjoy one of the most beautiful parts of the Sacred Valley of the Incas with its agricultural terraces in the form of circles and salt extraction in the mountains.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$category_tour="Alternative Treks Cusco";
$url_category="/alternative-treks-cusco/";

$url_foto_seo="https://www.antisuyotrekperu.com/img/alternative-treks/maras-moray-salt-mines-1-day/la-mine-of-salt-of-maras.jpg";
$url_completo= "https://" . $host . $url;
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">
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

<div class="fill-tour" style="background-image:url('img/alternative-treks/maras-moray-salt-mines-1-day.jpg');"></div>
                
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
					 <p> Visit beautiful <strong>Inca</strong> people y colonies homes, enjoy the treasures that this sacred land hides a pleasant and unique tour. <strong>Maras - Moray - Salineras</strong>.</p>
                     <p> One of the walks more Classic Cusco and one of the most fantastic where you can enjoy one of the most beautiful parts of <strong>the Sacred Valley of the Incas</strong> with its agricultural terraces in the form of circles and salt extraction in <strong>the mountains</strong>.</p>
                 </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARY</span></h3>
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 1</span></h3> 
					<p>CUSCO - MARAS - MORAY - SALINERAS</p>
				</div>
					<ul class="list_icons descripcion">
						<li>We will pick you up at your hotel 30 minutes before starting our tour, the first point of visit will be Maras (3300 masl), from here you can enjoy the Urubamba mountain range and the snowy peaks of "Veronica" (5682 masl) and "Chicon" (5530 masl). It has a colonial church of adobe (mud bricks), the typical architecture of the villages of the sierra, the Church houses paintings of the Cusqueña School.The next point to visit will be the archaeological center of Moray, which is located 7 km southwest of Maras. Moray is a unique archaeological center with convex circular terraces on the soil surface, which were used for acclimatization of the different agricultural products, the terraces have their irrigation canals and therefore is a prototype of a greenhouse or experimental biological station very advanced for The time, which helped the man of South America to tame the plants. The inhabitants of the area inherited this art, today 60% of the vegetal products are produced in this zone. At present in Peru is known a thousand and a half varieties of potatoes, one hundred and fifty corn, and many other products.The next stop is in Salineras. The "Mina de Sal", which is located northwest of the village of Maras, the place is formed by about 3,000 small wells with an average area of 5 square meters, in the dry season is filled or watered Every three days with salt water from a natural affluent located at the top of the wells, when the water evaporates, the salt stays and gradually solidifies.</li>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/maras-moray-salt-mines-1-day/la-mine-of-salt-of-maras.jpg" title="La Mina de Sal de maras."><img src="../img/alternative-treks/maras-moray-salt-mines-1-day/la-mine-of-salt-of-maras.jpg" alt="La Mina de Sal de maras." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/maras-moray-salt-mines-1-day/visit-to-the-saltworks.jpg" title="Visita a las salineras"><img src="../img/alternative-treks/maras-moray-salt-mines-1-day/visit-to-the-saltworks.jpg" alt="Visita a las salineras." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/maras-moray-salt-mines-1-day/center-archaeological-of-moray.jpg" title="Centro arqueológico de Moray."><img src="../img/alternative-treks/maras-moray-salt-mines-1-day/center-archaeological-of-moray.jpg" alt="Centro arqueológico de Moray." class="img-responsive">
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
                       <li><i class="icon-ok-circle-1"></i>Tourist transport.</li>
                      <li><i class="icon-ok-circle-1"></i>Official guide service.</li>

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
						<li><i class="icon-cancel-circle-2"></i>Feeding.</li>
						<li><i class="icon-cancel-circle-2"></i>Tourist ticket.</li>
						<li><i class="icon-cancel-circle-2"></i>Extra Services.</li> 
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
        <?php
			include("includes/costados/best-walks.php");
			include("includes/costados/packages-machu-picchu.php");
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