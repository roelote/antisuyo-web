<?php
$nombre_paquete = 'Inca Trail Antisuyo';
$numero_dias='1 Day';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="The optional Classic Cusco Package Machu Picchu 3 days and 2 nights is an option for people who are in the city of Cusco and also the historic sanctuary of Machu Picchu. Machu Picchu has been on UNESCO's World Heritage List since 1983, as part of an entire cultural and ecological complex known as the Historic Sanctuary of Machu Picchu.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$category_tour="Alternative Treks Cusco";
$url_category="/alternative-treks-cusco/";

$url_foto_seo="https://www.antisuyotrekperu.com/img/alternative-treks/inca-trail-antisuyo-1-day/colonial-temple-of-umasbamba.jpg";
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
            <div class="fill-tour" style="background-image:url('img/alternative-treks/inca-trail-antisuyo-1-day.jpg');"></div>
                
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
                       Price from<span><sup>$</sup>60</span>For Person
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
					 <p>The optional Classic Cusco Package <strong>Machu Picchu</strong> 3 days and 2 nights is an option for people who are in the city of <strong>Cusco</strong> and also <strong>the historic sanctuary of Machu Picchu</strong>.</p> 
                    <p>Machu Picchu has been on UNESCO's World Heritage List since 1983, as part of an entire cultural and ecological complex known as <strong>the Historic Sanctuary of Machu Picchu</strong>. On July 7, 2007,<strong> Machu Picchu</strong> was declared one of the Seven Wonders of the Modern World at a ceremony held in Lisbon, Portugal, with the participation of one hundred million voters worldwide, choosing <strong>Machu Picchu</strong> as one from them.</p>
                    <p><strong>Machu Picchu</strong> is considered at the same time a masterpiece of architecture and engineering. Its peculiar architectural and scenic features have made it one of the most popular tourist destinations on the planet.</p>    
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARY</span></h3>
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 1</span></h3> 
					<p>RECEPTION IN CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<li>we will pick you up at your hotel at 7:00 amAfter 20 min we will arrive at Sacsayhuaman Archaeological Park, by the place of Chincana Grande, it is at this point where we begin our 4 hour hike at moderate pace, passing Ñusta Pakana, Devil's Balcony, Mirador del Cóndor and Pukamocco (4100 Msnm).During the tour we can appreciate the highest mountains of the region as: Apu Salkantay, Veronica, Chicon, Pitusiray, Huanacaure and the majestic Ausangate; We will arrive at Lake Qori Cocha, we will have lunch at the lake shore.In the afternoon we will descend for a time of two hours, visit the Colonial Temple of Umasbamba (3700 masl), we will arrive to the archaeological complex of Pucamarca.We will arrive to Chinchero where we will have time to visit its craft center, we will appreciate the work of the local women, whose main activity is based on the commerce of garments and crafts made with wool stained of natural formFinally we will take the bus that will take us to the city of Cusco, the trip will take about 1 hour.</li>
				   <div class="row magnific-gallery">
				   <div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-1-day/colonial-temple-of-umasbamba.jpg" title="Colonial Temple of Umasbamba."><img src="../img/alternative-treks/inca-trail-antisuyo-1-day/colonial-temple-of-umasbamba.jpg" alt="Colonial Temple of Umasbamba." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-1-day/lagoon-qori-cocha.jpg" title="Laguna qori cocha."><img src="../img/alternative-treks/inca-trail-antisuyo-1-day/lagoon-qori-cocha.jpg" alt="Laguna qori cocha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-1-day/archaeological-complex-of-chinchero.jpg" title="Archaeological Complex of Chinchero."><img src="../img/alternative-treks/inca-trail-antisuyo-1-day/archaeological-complex-of-chinchero.jpg" alt="Archaeological Complex of Chinchero." class="img-responsive">
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
                      <li><i class="icon-ok-circle-1"></i>1 Lunch (snack).</li>
                      <li><i class="icon-ok-circle-1"></i>Professional guide</li>
                      <li><i class="icon-ok-circle-1"></i>Walk through the lake of Qoricocha and Piuray.</li>
                      <li><i class="icon-ok-circle-1"></i>Transport until the beginning of the walk.</li>
                      <li><i class="icon-ok-circle-1"></i>Transfer Chinchero - Cusco.</li>
                      <li><i class="icon-ok-circle-1"></i>First aid equipment.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Breakfast and Dinner.</li>
						<li><i class="icon-cancel-circle-2"></i>Mineral water.</li>
						<li><i class="icon-cancel-circle-2"></i>Travel insurance.</li>
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
            <form method="post" action="../reservation.php">
            <div class="row">
				<div class="col-md-2">
					<h3><span>Price</span></h3>
				</div>
			<div class="col-md-10">
				<div class=" table-responsive">
					<table class="table table-striped">
					<thead>
					<tr>
						<th colspan="4">
							<h4><span>Economy Class</span></h4>
						</th>
					</tr> 
					</thead>
					<tbody>
					<tr> 
						<td><strong> PERSON</strong></td>
						<td><strong>$ 60</strong></td> 
					</tr>     
					  </tbody> 
					</table> 
				</div> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input name="envioreserva" type="submit" value="RESERVE NOW" class="btn_1" id="submit-contact">            
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
			include("includes/costados/package-plus.php");
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