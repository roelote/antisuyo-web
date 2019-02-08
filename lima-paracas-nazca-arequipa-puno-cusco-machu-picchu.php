<?php
$nombre_paquete = 'Lima Paracas Nazca Arequipa Puno Cusco and Machu  Picchu';
$numero_dias='14 Days and 13 Nights';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Package: Lima, Paracas, Nazca, Arequipa, Puno and Cusco - 14 Days 13 Nights.This package is a complete itinerary, It is made to know all the main tourist attractions of Peru. Beginning in the city of Lima, where you can visit: colonial and modern Lima, with its many historical and modern points and take advantage of the visits to enjoy gastronomy, which is considered one of the best in the world.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$category_tour="Tours Peru";
$url_category="/tours-peru/";

$url_foto_seo="https://www.antisuyotrekperu.com/img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/booking-of-paracas.jpg";
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
    <link rel="shortcut icon" href="..//img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="..//img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="..//img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="..//img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="..//img/apple-touch-icon-144x144-precomposed.png">
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
        <div class="fill-tour" style="background-image:url('img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights.jpg');"></div>
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
                       Price from<span><sup>$</sup>1540</span>For Person
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
					<p>Package: <strong>Lima, Paracas, Nazca, Arequipa, Puno and Cusco</strong> - 14 Days 13 Nights.This package is a complete itinerary, It is made to know all the main tourist attractions of Peru. Beginning in the city of <strong>Lima</strong>, where you can visit: colonial and modern <strong>Lima</strong>, with its many historical and modern points and take advantage of the visits to enjoy gastronomy, which is considered one of the best in the world.</p>
					<p>We will continue to another tourist point that is part of the circuit of the <strong>Peruvian</strong> coast, the <strong>Ballestas Islands</strong>, known as: the small Galapagos island in <strong>Peru</strong>, where there are various species of flora and fauna. Also in the walk we will find "the navel of the world and the empire of the Incas" and touring its archaeological sites, <strong>Sacred Valley of the Incas</strong> that houses the most interesting archaeological centers and then spend the night in the village of <strong>Aguas Calientes</strong> a small town Near one of the wonders of the world: <strong>Machu Picchu</strong>.</p>
					<p>Following the route, we enter to the route from <strong>Cusco</strong> to <strong>Puno</strong>, called the "sun route", with a large number of its important archaeological sites and arriving at <strong>Lake Titicaca</strong> - <strong>Puno</strong>, the highest navigable lake in the world in which we will sail one day Whole in its waters and to know the main islands.</p>
					<p>Continuing with the package, we will visit the famous White City, <strong>Arequipa</strong>, with its beautiful square and great museums, then we    will visit the <strong>Colca Canyon</strong> one of the deepest canyons in the world.</p>
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
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Reception at the airport and transfer to hotel.</li>
                        <li><i class="icon-ok-squared"></i>Free afternoon to rest or take advantage of knowing the city of Lima.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Lima.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/reception-at-the-airport.jpg" title="Reception at the airport."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/reception-at-the-airport.jpg" alt="Reception at the airport." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/free-day-for-acclimatization.jpg" title="Free day for acclimatization."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/free-day-for-acclimatization.jpg" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/overnight-in-cusco.jpg" title="Overnight in Cusco"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/overnight-in-cusco.jpg" alt="Overnight in Cusco." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>                
                 <div class="col-md-2">   
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 2</span></h3> 
					<p>LIMA CITY TOUR COLONIAL AND MODERN CITY</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the hotel.</li>
                        <li><i class="icon-ok-squared"></i>Free morning to know some museums that is not in our program.</li>
                        <li><i class="icon-ok-squared"></i>In the afternoon Visit the city at 2:00pm to 6:00p.m.</li>
                        <li><i class="icon-ok-squared"></i>Visit: The main squares, ruins of Huaca Pucllana, Colonial and Modern Lima.</li>
                        <li><i class="icon-ok-squared"></i>After the tour of the city you can continue to visit the Magic Water Circuit from 18h15 to 20h00 (optional).</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Lima.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/lima-colonial.jpg" title="Lima Colonial."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/lima-colonial.jpg" alt="Lima Colonial." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/ruins-of-huaca-pucllana.jpg" title="Ruins of huaca pucllana."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/ruins-of-huaca-pucllana.jpg" alt="Ruins of huaca pucllana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/magic-water-circuit.jpg" title="Magic Water Circuit."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/magic-water-circuit.jpg" alt="Magic Water Circuit." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 3</span></h3> 
					<p>LIMA - PARACAS</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 03:30 am and transfer to the land terminal.</li>
                    <li><i class="icon-ok-squared"></i>We will take the Bus from Lima to Paracas at 4:30 a.m.</li>
                    <li><i class="icon-ok-squared"></i>Reception in Paracas and transfer to the hotel at 7:30 am</li>
                    <li><i class="icon-ok-squared"></i>Then we continue to the tours to the Ballestas Islands that starts from 08:00 a.m. to 10:30 a.m</li>
                    <li><i class="icon-ok-squared"></i>In the afternoon we will take the ride to the Paracas reserve from 12:00 to 4:00 p.m.</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in Paracas.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/ballestas-islands.jpg" title="Ballestas Islands."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/ballestas-islands.jpg" alt="Ballestas Islands." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/booking-of-paracas.jpg" title="Booking of paracas."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/booking-of-paracas.jpg" alt="Booking of paracas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/overnight-in-paracas.jpg" title="Overnight in Paracas."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/overnight-in-paracas.jpg" alt="Overnight in Paracas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>
                </div>
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 4</span></h3> 
					<p>PARACAS - NAZCA - AREQUIPA</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 07:00 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Our bus will leave Paracas - Nazca at 07:30 a.m</li>
                        <li><i class="icon-ok-squared"></i>Then we will have a 3 hour trip to the city of Nazca.</li>
                        <li><i class="icon-ok-squared"></i>Reception in Nazca at 10:30 and transfer to the aerodrome.</li>
                        <li><i class="icon-ok-squared"></i>The flight over the Nazca lines will start at 11.00 until 11.35.</li>
                        <li><i class="icon-ok-squared"></i>Free afternoon to take advantage of visiting the city of Nazca.</li>
                        <li><i class="icon-ok-squared"></i>In the evening we boarded our bus from Nazca to Arequipa at 22:00.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/nazca-lines.jpg" title="Nazca Lines."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/nazca-lines.jpg" alt="Nazca Lines." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/city-of-nazca.jpg" title="City of Nazca."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/city-of-nazca.jpg" alt="City of Nazca." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>                
                 <div class="col-md-2">					   
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 5</span></h3> 
					<p>AREQUIPA - PANORAMIC CITY TOURS</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Arrival in Arequipa at approximately 06:00 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Reception at the land terminal and transfer to the hotel.</li>
                        <li><i class="icon-ok-squared"></i>The morning free to rest in the hotel.</li>
                        <li><i class="icon-ok-squared"></i>In the afternoon the tour to City Tours Panoramico will start from 14:00 to 18:00.</li>
                        <li><i class="icon-ok-squared"></i>Visit: Plaza de Armas, Mirador de Carmen alto, Mirador de Yanahuara, Incalpaca, Founder's Mansion, El Tingo Spa, sachaca district, Terrazas de Paucarpata.</li> 
                        <li><i class="icon-ok-squared"></i>Spend the night in Arequipa.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the hotel"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/yanahuara-city-sigth.jpg" title="Yanahuara city sigth."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/yanahuara-city-sigth.jpg" alt="Yanahuara city sigth." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/terraces-of-paucarpata.jpg" title="Terraces of Paucarpata."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/terraces-of-paucarpata.jpg" alt="Terraces of Paucarpata." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div> 
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 6</span></h3> 
					<p>AREQUIPA - CHIVAY</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 08:15.</li>
                        <li><i class="icon-ok-squared"></i>Departure to Colca Canyon at 08:30.</li>
                        <li><i class="icon-ok-squared"></i>During the trip to Chivay you will be able to appreciate the different high Andean villages and the wonderful landscapes.</li>
                        <li><i class="icon-ok-squared"></i>After the arrival to Chivay our transport will leave you in their respective hotels.</li>
                        <li><i class="icon-ok-squared"></i>In the afternoon you can take advantage of the thermal baths of La Calera.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Chivay.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/chivay-travel.jpg" title="Chivay Travel."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/chivay-travel.jpg" alt="Chivay Travel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/colca-canyon.jpg" title="Colca Canyon."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/colca-canyon.jpg" alt="Colca Canyon." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/thermal-baths-of-la-calera.jpg" title="Thermal Baths of La Calera."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/thermal-baths-of-la-calera.jpg" alt="Thermal Baths of La Calera." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 7</span></h3> 
					<p>COLCA CANYON - AREQUIPA</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Departure to the Colca Canyon at 06:30.</li>
                        <li><i class="icon-ok-squared"></i>Visit: To all the towns that located in the course of the trip, the deepest canyon in America, where you can observe the flight of the condors of different sizes.</li> 
                        <li><i class="icon-ok-squared"></i>Afterwards they return to Chivay at 12:00 and then in the afternoon they will take the Chivay - Puno bus at 13:00.</li>
                        <li><i class="icon-ok-squared"></i>Arrival in Puno will be scheduled at 7:00 p.m.</li>
                        <li><i class="icon-ok-squared"></i>Reception in Puno and transfer to the hotel.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/flight-of-the-condors.jpg" title="Flight of the condors."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/flight-of-the-condors.jpg" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/reception-puno.jpg" title="Recepcion Puno."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/reception-puno.jpg" alt="Recepcion Puno." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 8</span></h3> 
					<p>PUNO - TITICACA LAKE.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                    <li><i class="icon-ok-squared"></i>In the morning we will pick you up at your hotel from 07:00 a.m. to 07:30 a.m</li>
                    <li><i class="icon-ok-squared"></i>Our ship will depart at 07:45 a.m.</li>
                    <li><i class="icon-ok-squared"></i>Visit: To the Floating Islands of Uros and Taquile Island.</li>
                    <li><i class="icon-ok-squared"></i>In the afternoon we will return to Puno at 5:00 p.m.</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/floating-island-of-uros.jpg" title="Floating island of uros"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/floating-island-of-uros.jpg" alt="Floating island of uros." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/floating-island-of-taquile.jpg" title="Floating island of Taquile."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/floating-island-of-taquile.jpg" alt="Floating island of Taquile" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>                 
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 9</span></h3> 
					<p>PUNO - CUSCO / RUTA DEL SOL.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                    <li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 06:30.</li>
                    <li><i class="icon-ok-squared"></i>Our bus depart from Puno  to Cusco at 07:00 a.m.</li>
                    <li><i class="icon-ok-squared"></i>Visit: To the museum of Pukara, La Raya, Sicuani (lunch) Raqchi (Temple of Wiracocha) and the Sistine Chapel of Andahuaylillas.</li>
                    <li><i class="icon-ok-squared"></i>Arrival to the city of Cusco will be at 17:00.</li>
                    <li><i class="icon-ok-squared"></i>Reception in Cusco and transfer to the hotel.</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/the-sistine-chapel-of-andahuaylillas.jpg" title="The Sistine Chapel of Andahuaylillas."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/the-sistine-chapel-of-andahuaylillas.jpg" alt="The Sistine Chapel of Andahuaylillas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological-site-of-raqchi.jpg" title="Archaeological site of Raqchi."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological-site-of-raqchi.jpg" alt="Archaeological site of Raqchi." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/reception-puno.jpg" title="Reception Puno."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/reception-puno.jpg" alt="Reception Puno." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 10</span></h3> 
					<p>CUSCO - ARCHAEOLOGICAL CITY TOUR</p>
				</div>
					<ul class="list_icons">
                   <li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                   <li><i class="icon-ok-squared"></i>Free morning to know the city.</li>
                   <li><i class="icon-ok-squared"></i>In the afternoon departure: to Archaeological City Tour 13:30 to 18:30.</li>
                   <li><i class="icon-ok-squared"></i>Visit: the Temple of the Sun Koricancha, the archaeological sites of Sacsayhuaman, Kenko, Puca Pucara and Tambomachay.</li>
                   <li><i class="icon-ok-squared"></i>Spend the night in Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/temple-of-the-sun-coricancha.jpg" title="Temple of the sun Coricancha"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/temple-of-the-sun-coricancha.jpg" alt="Temple of the sun Coricancha" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/sacsayhuaman-archaeological-complex.jpg" title="Sacsayhuaman archaeological complex"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/sacsayhuaman-archaeological-complex.jpg" alt="Sacsayhuaman archaeological complex" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological-complex-of-qenqo.jpg" title="Archaeological complex of qenqo"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological-complex-of-qenqo.jpg" alt="Archaeological complex of qenqo" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 11</span></h3> 
					<p>CUSCO - SACRED VALLEY OF THE INCAS</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the hotel.</li>
                    <li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 08:15.</li>
                    <li><i class="icon-ok-squared"></i>Departure to the Sacred Valley of the Incas at 08h40.</li>
                    <li><i class="icon-ok-squared"></i>We will visit: Corao Market, Pisaq Market, the archaeological center of Pisaq and archaeological park of Ollantaytambo.</li>
                    <li><i class="icon-ok-squared"></i>In the afternoon we will take the train Ollantaytambo - Aguas Calientes at 07:04.</li>
                    <li><i class="icon-ok-squared"></i>Reception at the train station in Aguas Calientes at 8:45pm.</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological-complex-of-pisac.jpg" title="Archaeological Complex of Pisac."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological-complex-of-pisac.jpg" alt="Archaeological Complex of Pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological-complex-of-ollantaytambo.jpg" title="Archaeological complex of ollantaytambo."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological-complex-of-ollantaytambo.jpg" alt="Archaeological complex of ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological-complex-of-chincheros.jpg" title="Archaeological complex of chincheros."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological-complex-of-chincheros.jpg" alt="Archaeological complex of chincheros." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>                  
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 12</span></h3> 
					<p>CUSCO - MACHU PICCHU FULL DAY</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                    <li><i class="icon-ok-squared"></i>We will go very early to Machu Picchu to see the sunrise.</li>
                    <li><i class="icon-ok-squared"></i>Visit Machu Picchu for 2 hours with our guide.</li>
                    <li><i class="icon-ok-squared"></i>Then they will have free time to take photos and take advantage of more time in Machupicchu.</li>
                    <li><i class="icon-ok-squared"></i>In the afternoon return to Aguas Calientes.</li>
                    <li><i class="icon-ok-squared"></i>Then we will take the return train from Aguas Calientes - Ollantaytambo at 18:20 or 19:00.</li>
                    <li><i class="icon-ok-squared"></i>Transfer in our transport from Ollantaytambo - Cusco.</li>
                    <li><i class="icon-ok-squared"></i>Arrival to the city of Cusco will be approximately from 22:20 to 22:40.</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological site-of-machu-picchu.jpg" title="Archaeological site of Machu Picchu"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/archaeological site-of-machu-picchu.jpg" alt="Archaeological site of Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/the-intiwatana.jpg" title="The Intihuatana"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/the-intiwatana.jpg" alt="The Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/sun temple.jpg" title="Sun Temple"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/sun temple.jpg" alt="Sun Temple" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>                  
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 13</span></h3> 
					<p>CUSCO - FREE DAY</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Free day to shop, taste the typical food.</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/free-day-to-shop.jpg" title="Free day to shop"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/free-day-to-shop.jpg" alt="Free day to shop" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/Overnight in Cusco.jpg" title="Overnight in Cusco."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/Overnight in Cusco.jpg" alt="Overnight in Cusco." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 14</span></h3> 
					<p>CUSCO - TRANSFER</p>
				</div>
					<ul class="list_icons">
                   <li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                   <li><i class="icon-ok-squared"></i>Transfer from the hotel to the Airport 2 hours before departure of your flight.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" title="Desayuno en el Hotel"><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/breakfast-at-the-hotel.jpg" alt="Desayuno en el Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/hotel-exit.jpg" title="Hotel exit."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/hotel-exit.jpg" alt="Hotel exit." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/airport-transfer.jpg" title="Airport transfer."><img src="../img/tours-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-days-13-nights/airport-transfer.jpg" alt="Airport transfer." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div>   
                </div></div>
                  <hr>                
            <div class="row">
                <div class="col-md-2">
                    <h3><span>INCLUDES</span></h3>
                </div>
                <div class="col-md-10">
					 <ul class="list_icons">
                      <li><i class="icon-ok-circle-1"></i>Transfer Airport - Hotel - Airport (Lima).</li>
                      <li><i class="icon-ok-circle-1"></i>Transfer Airport-Hotel-Airport (Cusco).</li>
                      <li><i class="icon-ok-circle-1"></i>Tourist transport for each ride.</li>
                      <li><i class="icon-ok-circle-1"></i>Professional guide in each city in English language.</li>
                      <li><i class="icon-ok-circle-1"></i>Bus from Lima - Paracas.</li>
                      <li><i class="icon-ok-circle-1"></i>Walks to the islands crossbows and the reserve of Paracas.</li>
                      <li><i class="icon-ok-circle-1"></i>Bus Paracas - Nazca.</li>
                      <li><i class="icon-ok-circle-1"></i>Flight over the Nazca Lines.</li>
                      <li><i class="icon-ok-circle-1"></i>Bus Nazca - Arequipa.</li>
                      <li><i class="icon-ok-circle-1"></i>Panoramic city tours in the city of Arequipa.</li>
                      <li><i class="icon-ok-circle-1"></i>Walk to Colca Canyon in Arequipa 2 days.</li>
                      <li><i class="icon-ok-circle-1"></i>Tour Bus Chivay - Puno.</li>
                      <li><i class="icon-ok-circle-1"></i>Tours in Cusco: Archaeological City Tour, Sacred Valley of the Incas and Machu Picchu.</li>
                      <li><i class="icon-ok-circle-1"></i>Tours in Lima: City tour of the modern and colonial city.</li>
                      <li><i class="icon-ok-circle-1"></i>Walk in Puno. Lake Titicaca full day.</li>
                      <li><i class="icon-ok-circle-1"></i>Sun route Cusco, visiting several tourist sites.</li>
                      <li><i class="icon-ok-circle-1"></i>2 Nights Hotel in Lima.</li>
                      <li><i class="icon-ok-circle-1"></i>1 Night hotel in Paracas.</li>
                      <li><i class="icon-ok-circle-1"></i>1 Night hotel in Arequipa.</li>
                      <li><i class="icon-ok-circle-1"></i>1 Night Hotel in Chivay.</li>
                      <li><i class="icon-ok-circle-1"></i>4 nights hotel in Cusco.</li>
                      <li><i class="icon-ok-circle-1"></i>2 Nights of Hotel in Puno.</li>
                      <li><i class="icon-ok-circle-1"></i>1 Night hotel in Aguas Calientes.</li>
                      <li><i class="icon-ok-circle-1"></i>Entrance to Machupicchu for 1 day.</li>
                      <li><i class="icon-ok-circle-1"></i>Train service in class EXPEDITION (To come and go).</li>
                      <li><i class="icon-ok-circle-1"></i>Bus Aguas Calientes - Machu Picchu- Aguas Calientes.</li>
                      <li><i class="icon-ok-circle-1"></i>Transfer Ollantaytambo - Cusco.</li>
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
                       <li><i class="icon-cancel-circle-2"></i>Lunch and dinner.</li>
                       <li><i class="icon-cancel-circle-2"></i>Cusco Tourist Ticket USD 45.</li>
                       <li><i class="icon-cancel-circle-2"></i>Arequipa Tourist Ticket 27 Dollars.</li>
                       <li><i class="icon-cancel-circle-2"></i>Nazca Aerodrome Fee 8 Dollars.</li>
                       <li><i class="icon-cancel-circle-2"></i>Sun Route Tourist Ticket 15 US.</li>
                       <li><i class="icon-cancel-circle-2"></i>National and international flights.</li>
                       <li><i class="icon-cancel-circle-2"></i>Travel insurance.</li>
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
				<th colspan="9">
				<h4><span><i class="icon_set_1_icon-30"></i>Package + <i class="icon_set_1_icon-6"></i>Hotel + <i class="icon_set_1_icon-26"></i>Bus + <i class="icon_set_1_icon-5"></i>Train(Tourist class)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATE<br>GORY</strong></td>
				<td><strong>HOTELS<br> IN LIMA</strong></td>
				<td><strong>HOTELS<br> IN PARACAS</strong></td>
				<td><strong>HOTELS<br> IN ARE-<br>QUIPA</strong></td>
				<td><strong>HOTELS<br> IN PUNO</strong></td>
				<td><strong>HOTELS<br> IN CUSCO</strong></td>
				<td><strong>HOTELS<br> IN AGUAS CALIEN-<br>TES</strong></td> 
				<td><strong>DUOBLE</strong></td> 
				<td><strong>TRIPLE&#160</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASS<br>ECONO<br>MIC</h5></td>
				<td><i class="icon-play-5"></i>Hotel Monte Real<br><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Santa Maria</td>
				<td><i class="icon-play-5"></i>Hotel Ensueño</td>
				<td><i class="icon-play-5"></i>Hotel Helena</td>
				<td><i class="icon-play-5"></i>Hotel Prisma</td>
				<td><i class="icon-play-5"></i>Hotel Continental</td>
				<td>$ 1590</td>
				<td>$ 1560</td>  
				</tr>   
				<tr> 
				<td><h5>CLASS<br>TOU<br>RIST</h5></td>
				<td><i class="icon-play-5"></i>Hotel Carmel<br> <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>El Mirador Hotel</td>
				<td><i class="icon-play-5"></i>H. Posada Monasterio</td>
				<td><i class="icon-play-5"></i>H.<br>Sol Plaza Inn</td>
				<td><i class="icon-play-5"></i>H. S.A Internacional</td>
				<td><i class="icon-play-5"></i>Hotel Hatun Samay</td>
				<td>$ 1770</td>
				<td>$ 1730</td> 
				</tr>   
				<tr> 
				<td><h5>CLASS TOP</h5></td>
				<td><i class="icon-play-5"></i>San Agustin Exclusive<br><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>San Agustin Paracas</td>
				<td><i class="icon-play-5"></i>Hotel Terra Viva</td>
				<td><i class="icon-play-5"></i>Hotel Royal INN</td>
				<td><i class="icon-play-5"></i>San Agusntin Dorado</td>
				<td><i class="icon-play-5"></i>Hotel Intitpunku Mapi</td>
				<td>$ 1980</td>
				<td>$ 1930</td> 
				</tr>    
				</tbody> 
				</table> 
				</div> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input type="submit" name="envioreserva" value="SEND RESERVATION" class="btn_1" id="submit-contact">            
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
			include("includes/costados/packages-peru.php");
			include("includes/costados/alternative-walks.php");
			include("includes/costados/random-package.php");
			include("includes/costados/packages-machu-picchu.php");
			include("includes/costados/best-walks.php");
			include("includes/costados/packages-peru.php");
			include("includes/costados/alternative-walks.php");
			include("includes/costados/best-walks.php");
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