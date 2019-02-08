<?php
$nombre_paquete = 'Salkantay Trek Machu Picchu';
$numero_days='5 Days and 4 Nights';
$nombre_completo_paquete=$nombre_paquete." ".$numero_days;
$descripcion_tour="Salkantay or Salcantay, is the second highest mountain in the region of Cusco, belongs also to the chain of mountains of the Andes, located approximately to 6271 masl., is surrounded by the snowfall of Humantay and others. The Salkantay - Salcantay trail runs for 4 days and 3 nights, where you can enjoy spectacular scenery and many exciting experiences.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$category_tour="Salkantay Machu Picchu";
$url_category="/salkantay-machu-picchu/";

$url_foto_seo="https://www.antisuyotrekperu.com/img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/campamento-para-pasar-la-noche.jpg";
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

      	<div class="fill-tour" style="background-image:url('img/salkantay-treks/salkantay-trek-machu-picchu-5days.jpg');"></div>
      	
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
                       Price from<span><sup>$</sup>330</span>For Person
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
					 <p>Salkantay or Salcantay, is the second highest mountain in the region of <strong>Cusco</strong>, belongs also to the chain of mountains of the Andes, located approximately to 6271 masl., is surrounded by the snowfall of Humantay and others. <strong>The Salkantay</strong> - <strong>Salcantay trail</strong> runs for 4 days and 3 nights, where you can enjoy spectacular scenery and many exciting experiences.</p> 
                   
                    <p>We can reach <strong>Machu Picchu</strong> by several roads, but the Trail to <strong>Salkantay</strong> is a fascinating and beautiful route, with varied climates that will make us feel the nature in extreme.</p>
                    <p>The temperature in the <strong>salkantay</strong> road, is between 26 ° C to -5 ° C; With an average altitude of 4,650 masl to 1,800 masl, where we will find mountains, hills, snowfall and forests (dense, arid and fertile) rocky valleys, rivers and waterfalls.</p>
                    <p><strong>The Salkantay</strong> trail 5 days, has a total of 74 kilometers, we in 4 days will make a total of 50 kilometers of hiking, the rest will complete in land transport, the walk is formed by trails, planes, uphill and down, except for the second Day that is the most tired but not impossible day, will allow us to enjoy the imposing mountain range of the Andes and a natural wealth full of ecosystems that is in our country</p>
                    <p>The best time to make <strong>the Salkantay</strong> - <strong>Salcantay</strong> Trail is from the month of April to the month of September, since there is no rainfall on the <strong>salkantay</strong> road, it is a dry season.</p>
                    <p><strong>The Salkantay</strong> - <strong>Salcantay trail</strong> 4 days is a great alternative for those people who have little time or also for those people who did not manage to make the reservations to the<strong>classic Inca Trail</strong>, where we have daily departures in the indicated months.</p>
                  <p><strong>The Salkantay</strong>-Salcantay road includes an overnight stay in a hotel in the town of Aguas Calientes for the third night said hotel is included in the package.</p>
                   </div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARY</span></h3>
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 1</span></h3> 
					<p>CUSCO - MOLLEPATA - SORAYPAMPA</p>
				</div>
					<ul class="list_icons descripcion">
						<li>The first day We will pick you up at your hotel at 05:00 with our private bus, to go to the town of Mollepata, passing several villages such as: Poroy, Izcuchaca and Limatambo, then arrive at the village of Mollepata at approximately 9am where we will have A quick breakfast stop and then continue with our trip to the start point challa cancha, where we will begin our trek for 3 to 4 hours until we reach the first camp soraypampa (3835 masl), on arrival at the camp we will have lunch for one Hour and in the afternoon we will go up for an hour and a half, to see the wonderful lagoon of Humantay (3965 masl) to get in touch with the Apus Mountain Humantay and there we will make the thanks with the sacred coca leaves to our mother Land or Pachamama.</li>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td> Altitude</td>
							<td>3.965 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.850 msnm.</td>
						</tr>
						<tr>
							<td>Minimum Altitude</td>
							<td>3 a 4 horas.</td>
						</tr>
						<tr>
							<td>Distance: Approximately</td>
							<td>11 km.</td>
						</tr>
						<tr>
							<td>Overnight Camping:</td>
							<td>Tents</td>
						</tr>
						<tr>
							<td>Feeding</td>
							<td>Lunch and Dinner.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/mollepata.jpg" title="Mollepata."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/mollepata.jpg" alt="Mollepata." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/soraypampa.jpg" title="Soraypampa's Camp"><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/soraypampa.jpg" alt="Soraypampa's Camp" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/humantay-lagoon.jpg" title="Humantay LagoonLaguna de Humantay."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/humantay-lagoon.jpg" alt="Humantay Lagoon." class="img-responsive">
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
					<p>SORAYPAMPA - CHAULLAY -COLPAPAMPA</p>
				</div>
					<ul class="list_icons descripcion">
						<li>After breakfast at the camp, we will start our trek (considered the strongest of the trip) at 07:00 am, we leave for Salkantay - Pampa; Where we will walk to the left side of the snowy Humantay (5950 masl) by a flat road and then we will have a zigzag road and uphill. Approximately for 10:00 to 11:00 am we will reach the highest point of the Salkantay road (4600 masl), is located in the middle of the two highest mountains in the area, also called apacheta, from this point we appreciate the glaciers Of the mountain Salkantay and the avalanches of ice.Then we will descend for 1 hour and a half to Huayracmachay, where we will have lunch for 1 hour approximately, then we will continue our trek for 3 hours and a half, in the middle of a cloud forest, where we will observe the diversity of flora and fauna.We will arrive in the afternoon to our camp called Chaullay.</li>
                  	</ul>
                        <div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td> Altitude</td>
							<td>4.600 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.850 msnm.</td>
						</tr>
						<tr>
							<td>Minimum Altitude</td>
							<td>8 a 9 horas.</td>
						</tr>
						<tr>
							<td>Distance: Approximately</td>
							<td>22 km.</td>
						</tr>
						<tr>
							<td>Overnight Camping:</td>
							<td>Tents</td>
						</tr>
						<tr>
							<td>Feeding</td>
							<td>Lunch and Dinner.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/salkantay-mountain.jpg" title="Snowy of Salkantay."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/salkantay-mountain.jpg" alt="Snowy of Salkantay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/huayracmachay.jpg" title="Huayracmachay"><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/huayracmachay.jpg" alt="Huayracmachay" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/campamento-en-chaullay.jpg" title="Camp in Chaullay."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/campamento-en-chaullay.jpg" alt="Camp in Chaullay." class="img-responsive">
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
					<p>COLPAPAMPA – PLAYA – SANTA TERESA.</p>
				</div>
					<ul class="list_icons descripcion">
						<li>After breakfast, we will continue the trip appreciating the diversity of flora and fauna, on the edge of the valley of Santa Teresa. Along the way we will pass through plantations of coffee, banana, granadillas, fruit trees and the sacred coca leaf, we can also appreciate the different species of birds, such as: woodpeckers, sparrows, thrush and the traditional national bird, gallito de las Rocks At the end we will arrive at the beach town where we will have lunch. Next we will take a transport that will take us from Santa Teresa beach, approximately for 1 hour, during the course we will have the opportunity to take advantage of seeing the wonderful landscape of the valley and the surrounding mountains. Then we will arrive at our camp in Santa Teresa, to leave the backpacks inside the tents.Immediately we will take the transport of santa teresa to the thermal medicinal baths of cocalmayo, where we will rest for a time of 2 to 3 hours. After taking the bath we will return to the camp to spend the night.</li>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td> Altitude</td>
							<td>2.850 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.040 msnm.</td>
						</tr>
						<tr>
							<td>Minimum Altitude</td>
							<td>7 a 8 horas.</td>
						</tr>
						<tr>
							<td>Distance: Approximately</td>
							<td>18 km.</td>
						</tr>
						<tr>
							<td>Overnight Camping:</td>
							<td>Tents</td>
						</tr>
						<tr>
							<td>Feeding</td>
							<td>Lunch and Dinner.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/the-valley-of-santa-teresa.jpg" title="The valley of Santa Teresa."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/the-valley-of-santa-teresa.jpg" alt="The valley of Santa Teresa." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/banos-termo-medicinales-de-cocalmayo.jpg" title="Baños termo medicinales de Cocalmayo."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/banos-termo-medicinales-de-cocalmayo.jpg" alt="Baños termo medicinales de Cocalmayo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/campamento-para-pasar-la-noche.jpg" title="Campamento para pasar la noche."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/campamento-para-pasar-la-noche.jpg" alt="Campamento para pasar la noche." class="img-responsive">
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
					<p>SANTA TERESA - HIDROELÉCTRICA - AGUAS CALIENTES</p>
				</div>
					<ul class="list_icons descripcion">
						<li>After breakfast, we will continue our walk from the village of Santa Teresa to the town of hydroelectric, during the course of the trip we can appreciate the sacred river of vilcanota and also various agricultural products. On the way we will also find the electricity production plant and we will reach the town of hydroelectric. Then we will have a 2 to 3 hour walk to the town of Aguas Calientes. Route that is fascinating by diversity of flora and fauna, also if we are lucky we can see the “gallito of rocks” and the wild bird peacock. On arrival at the village of Aguas Calientes we will go directly to the hotel to spend the night, where it is located near the sanctuary of Machu Picchu.</li>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td> Altitude</td>
							<td>2.450 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.040 msnm.</td>
						</tr>
						<tr>
							<td>Minimum Altitude</td>
							<td>1hora y 30 min.</td>
						</tr>
						<tr>
							<td>Distance: Approximately</td>
							<td>15 km.</td>
						</tr>
						<tr>
							<td>Overnight Camping:</td>
							<td>Tents</td>
						</tr>
						<tr>
							<td>Feeding</td>
							<td>Lunch and Dinner.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/tren-a-la-hidroelectrica.jpg" title="Train to the Hydroelectric"><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/tren-a-la-hidroelectrica.jpg" alt="Train to the Hydroelectric." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/town-of-aguas-calientes.jpg" title="town of Aguas Calientes"><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/town-of-aguas-calientes.jpg" alt="town of Aguas Calientes" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/archaeological-site-of-machu-picchu.jpg" title="Archaeological Complex of Machu Picchu."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/archaeological-site-of-machu-picchu.jpg" alt="Archaeological Complex of Machu Picchu." class="img-responsive">
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
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<li>After breakfast, at 04h30 we will begin the ascent to Machu Picchu, we will do approximately 1 hour 30, with the aim of arriving early to Machu Picchu to appreciate the sunrise and also take advantage of taking the first photos before the other tourists arrive .Then we will have a guided tour with our professional guide, to the entire archaeological complex of Machu Picchu, if we reach the time we can also climb to Puerta del Sol and people who made the reservation to climb the mountain of Huayna Picchu will also continue the climb After guiding.Once we finish our visit to the wonder of the world, we will return to the town of Aguas Calientes, to have lunch and wait for the train to return according to the schedule. The train journey lasts 1 hour 45 minutes until the town of ollantaytambo, on arrival in ollantaytambo we will be waiting for our private bus that will take us to the city of Cusco. The trip will last approximately one and a half hours.</li>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td> Altitude</td>
							<td>2.450 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.040 msnm.</td>
						</tr>
						<tr>
							<td>Minimum Altitude</td>
							<td>1hora y 30 min.</td>
						</tr>
						<tr>
							<td>Distance: Approximately</td>
							<td>15 km.</td>
						</tr>
						<tr>
							<td>Overnight Camping:</td>
							<td>Tents</td>
						</tr>
						<tr>
							<td>Feeding</td>
							<td>Lunch and Dinner.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/archaeological-site-of-machu-picchu.jpg" title="Archaeological Site of Machu Picchu."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/archaeological-site-of-machu-picchu.jpg" alt="Archaeological Site of Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/breakfast-in-hot-waters.jpg" title="Breakfast in hot waters."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/breakfast-in-hot-waters.jpg" alt="Breakfast in hot waters." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/return-to-cusco-by-bus.jpg" title="Return to Cusco by bus."><img src="../img/salkantay-treks/camino-salkantay-a-machu-picchu-5-days-4-nights/return-to-cusco-by-bus.jpg" alt="Return to Cusco by bus." class="img-responsive">
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

					 	<li><i class="icon-ok-circle-1"></i>Private transportation from your hotel to the village of Mollepata.</li>
						<li><i class="icon-ok-circle-1"></i>Entrance to Machu Picchu.</li>
						<li><i class="icon-ok-circle-1"></i>Professional guide in English.</li>
						<li><i class="icon-ok-circle-1"></i>Chef: Specialized in traditional and vegetarian food.</li>
						<li><i class="icon-ok-circle-1"></i>Horses: for camping and food equipment.</li>
						<li><i class="icon-ok-circle-1"></i>Tents for the guide, cook and porters.</li>
						<li><i class="icon-ok-circle-1"></i>Tents for paxs, matras, tables, chairs, dining room, kitchen shop.</li>
						<li><i class="icon-ok-circle-1"></i>Food 4 breakfasts / 4 lunches / 4 dinners.</li>
						<li><i class="icon-ok-circle-1"></i>Transfer of Beach - Santa Teresa.</li>
						<li><i class="icon-ok-circle-1"></i>Hotel 1 night in Aguas Calientes.</li>
						<li><i class="icon-ok-circle-1"></i>Aguas Calientes Return Train Ticket - Ollantaytambo.</li>
						<li><i class="icon-ok-circle-1"></i>Transportation from Ollantaytambo to Cusco.</li>
						<li><i class="icon-ok-circle-1"></i>Oxygen ball.</li>
						<li><i class="icon-ok-circle-1"></i>First aid kit.</li>
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

    					<li><i class="icon-cancel-circle-2"></i>Breakfast on the first day.</li>
    					<li><i class="icon-cancel-circle-2"></i>Lunch and dinner the last day:</li>
    					<li><i class="icon-cancel-circle-2"></i>Sleeping Bag</li>
    					<li><i class="icon-cancel-circle-2"></i>Bus up and down Aguas Calientes - Machu Picchu.</li>
    					<li><i class="icon-cancel-circle-2"></i>The climb to Huayna Picchu mountain</li>
    					<li><i class="icon-cancel-circle-2"></i>Train Hidro electrica - Aguas Calientes.</li>
    					<li><i class="icon-cancel-circle-2"></i>Visit to the hot springs of Aguas Calientes. Where you can relax while waiting for the train back to Cusco. It is a 10 minute walk from the village. Admission is S / .10.00. The towels can be rented in Aguas Calientes.</li>

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
						  <td><strong>PERSON</strong></td>
						  <td>ADULT</td>
						  <td>STUDENT</td> 
						</tr>  
						<tr> 
						  <td rowspan="3">PRICE</td>
						  <td rowspan="3"><label class="centrar">$ <strong>350</strong></label></td>
						  <td rowspan="3"><label class="centrar">$ <strong>330</strong></label></td> 
						</tr>    
					  </tbody> 
					</table>
				</div> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input type="submit" name="envioreserva" value="ENVIAR RESERVA" class="btn_1" id="submit-contact">            
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