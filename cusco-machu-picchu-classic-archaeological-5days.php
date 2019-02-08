<?php
$nombre_paquete = 'Archaeological Classic Cusco Machu Picchu';
$numero_dias='5 Days and 4 Nights';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="The Cusco Classic Archaeological Package Machu Picchu 5 days and 4 nights is a wonderful option to get to know the historical sanctuary of Machu Picchu, since the town of Aguas Calientes is located near the sanctuary of Machu Picchu, where we will get to arrive very early to Machu Picchu, to take advantage of watching the sunrise and also take the first photos with few people.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$category_tour="Tours Machu Picchu";
$url_category="/tours-machu-picchu/";
$url_foto_seo="https://www.antisuyotrekperu.com/img/tours-machu-picchu/machu-picchu-full-day/archaeological-complex-of-machu-picchu.jpg";
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
          <div class="fill-tour" style="background-image:url('img/tours-machu-picchu/cusco-machu-picchu-classic-archaeological-5days.jpg');"></div>
        
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
                       Price from<span><sup>$</sup>410</span>For Person
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
					 <p>The Cusco Classic Archaeological Package <strong>Machu Picchu</strong> 5 days and 4 nights is a wonderful option to get to know the <strong>historical sanctuary of Machu Picchu</strong>, since the town of <strong>Aguas Calientes</strong> is located near the sanctuary of <strong>Machu Picchu</strong>, where we will get to arrive very early to <strong>Machu Picchu</strong>, to take advantage of watching the sunrise and also take the first photos with few people.</p> 
                    <p><strong>Machu Picchu</strong> is considered at the same time a masterpiece of architecture and engineering. Its peculiar architectural and scenic features have made it one of the most popular tourist destinations on the planet.</p>
                    <p>It is believed that <strong>Machu Picchu</strong> had a population like most Llactas <strong>Incas</strong>, that was between the 300 and 1000 inhabitants that were possibly part of the Panaca of <strong>Pachacutec.</strong></p>
                    <p><strong>Machu Picchu</strong> has been on UNESCO's World Heritage List since 1983, as part of an entire cultural and ecological complex known as the <strong>Historic Sanctuary</strong> of <strong>Machu Picchu</strong>. On July 7, 2007, <strong>Machu Picchu</strong> was declared one of the <strong>Seven Wonders of the Modern World</strong>, at a ceremony held in Lisbon, Portugal, with the participation of one hundred million voters worldwide, choosing <strong>Machu Picchu</strong> as one from them.</p>
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
						<li><i class="icon-ok-squared"></i>Reception at the airport and transfer to the hotel.</li>
                        <li><i class="icon-ok-squared"></i>Free time for acclimatization to height.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/hotel-transfer.jpg" title="Transfer to the hotel."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/hotel-transfer.jpg" alt="Transfer to the hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/rest-in-the hotel.jpg" title="Rest in the Hotel."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/rest-in-the hotel.jpg" alt="Rest in the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/free-day-for-acclimatization.jpg" title="Free day for acclimatization."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/free-day-for-acclimatization.jpg" alt="Free day for acclimatization." class="img-responsive">
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
					<p>CUSCO - ARCHAEOLOGICAL CITY TOUR</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Morning free to rest or visit museums.</li>
                        <li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 13:30. </li>
                        <li><i class="icon-ok-squared"></i>Departure to Archaeological City Tour from 2:00 p.m. to 6:30 p.m.</li>
                        <li><i class="icon-ok-squared"></i>Visits: Temple of the Sun of Koricancha, Sacsayhuaman, Kenko, Puca Pucara and Tambomachay.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/temple-of-the-sun-coricancha.jpg" title="temple of the sun coricancha."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/temple-of-the-sun-coricancha.jpg" alt="temple of the sun coricancha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-of-sacsayhuaman.jpg" title="Archaeological Complex of sacsayhuaman."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-of-sacsayhuaman.jpg" alt="Archaeological Complex of sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-of-tambomachay.jpg" title="Archaeological Complex of Tambomachay."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-of-tambomachay.jpg" alt="Archaeological Complex of Tambomachay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div> 
                 <div class="col-md-2">	</div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 3</span></h3> 
					<p>CUSCO - SACRED VALLEY OF THE INCAS</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 08:15 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Departure to the Sacred Valley of the Incas at 08:45 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Visit: Corao Market, Pisac Market, the archaeological remains of Pisac and the archaeological complex of Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>In the afternoon we will take the train Ollantaytambo - Aguas Calientes 19:04.</li>
                        <li><i class="icon-ok-squared"></i>Reception at the Aguas Calientes station at 8:45 p.m.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-of-pisac.jpg" title="Archaeological Site of Pisac."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-of-pisac.jpg" alt="Archaeological Site of Pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-of-ollantaytambo.jpg" title="Archaeological Complex of Ollantaytambo."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-of-ollantaytambo.jpg" alt="Archaeological Complex of Ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-chinchero.jpg" title="Archaeological Complex and city of Chinchero."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-chinchero.jpg" alt="Archaeological Complex and city of Chinchero." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
					</div>
					<hr>
				</div>
			</div>  
                 <div class="col-md-2">
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 4</span></h3> 
					<p>MACHU PICCHU FULL DAY</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Early departure to Machu Picchu to see the sunrise.</li>
                        <li><i class="icon-ok-squared"></i>Visit Machu Picchu 2 hours with our guide.</li>
                        <li><i class="icon-ok-squared"></i>Then they will have free time to take photos and meditate in Machupicchu.</li>
                        <li><i class="icon-ok-squared"></i>In the afternoon return from Machupicchu - Aguas Calientes.</li>
                        <li><i class="icon-ok-squared"></i>Then we will take the train to Aguas Calientes - Ollantaytambo at 18:20.</li>
                        <li><i class="icon-ok-squared"></i>Transfer in our transport from Ollantaytambo - Cusco.</li>
                        <li><i class="icon-ok-squared"></i>The arrival to Cusco, will be approximately from 22:15 to 22:30.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-of-machu-picchu.jpg" title="Archaeological Complex of Machu Picchu."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/archaeological-complex-of-machu-picchu.jpg" alt="Archaeological Complex of Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/the-intihuatana.jpg" title="The Intihuatana."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/the-intihuatana.jpg" alt="The Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/the.sun-temple.jpg" title="Sun Temple."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/the.sun-temple.jpg" alt="Sun Temple." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                  <hr>  
                </div>
                
                
                <div class="row">
                 <div class="col-md-2"> 
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 5</span></h3> 
					<p>CUSCO - TRANSFER</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Transfer from the hotel to the airport 2 hours before your flight.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/hotel-exit.jpg" title="Hotel exit."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/hotel-exit.jpg" alt="Hotel exit." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/airport-transfer.jpg" title="Airport transfer."><img src="../img/tours-machu-picchu/cusco-classic-archaeological-5-days-4-nights/airport-transfer.jpg" alt="Airport transfer." class="img-responsive">
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
                        <li><i class="icon-ok-circle-1"></i>Transfer airport-hotel-airport.</li>
                        <li><i class="icon-ok-circle-1"></i>Tourist transport for each ride.</li>
                        <li><i class="icon-ok-circle-1"></i>Professional guides for each tour.</li>
                        <li><i class="icon-ok-circle-1"></i>Tour in Cusco: Archaeological City Tour, Sacred Valley of the Incas and Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrance to Machupicchu for 1 day.</li>
                        <li><i class="icon-ok-circle-1"></i>3 nights hotel in Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>1 Night hotel in Aguas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>Train service Round trip in service (EXPEDITION).</li>
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
                       <li><i class="icon-cancel-circle-2"></i>Partial tourist ticket $ 27. (serves to enter the archaeological sites of the Sacred Valley).</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1TOG4hqxpn3grb6SmAj512iM9_MI" target="_blank"><img src="../img/see map.png"></a>  
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
				<h4><span><i class="icon_set_1_icon-30"></i>Package  + <i class="icon_set_1_icon-6"></i>Hotel + <i class=" icon_set_1_icon-5"></i>Train (Tourist class)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATEGORY</strong></td>
				<td><strong>HOTELS IN<br>CUSCO</strong></td>
				<td><strong>HOTELS IN<br> AGUAS CALIENTES</strong></td>
				<td><strong>INDIVIDUAL</strong></td>
				<td><strong>DOUBLE</strong></td> 
				<td><strong>TRIPLO&#160</strong></td>
				</tr>  
				<tr> 
				<td><h5>CLASS<br> ECONOMIC</h5></td>
				<td><i class="icon-play-5"></i>H. Prisma<br> <i class="icon-play-5"></i>H. Aranjuez<br><i class="icon-play-5"></i>H. Hatun Wasi</td>
				<td><i class="icon-play-5"></i>H. Continental<br> <i class="icon-play-5"></i>H. Eco Machupicchu<br><i class="icon-play-5"></i>H. 7 Machupicchu</td>
				<td>$ 610</td>
				<td>$ 540</td>
				<td>$ 430</td>
				</tr>   
				<tr> 
				<td><h5> CLASS<br> TOURIST</h5></td>
				<td><i class="icon-play-5"></i>H. Samay Sup<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. S.A Internacional<br><i class="icon-play-5"></i>H. Midori</td>
				<td><i class="icon-play-5"></i>H. Inti Punku INN<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. Inka Town <br><i class="icon-play-5"></i>H. Hatun Samay</td>
				<td>$ 710</td>
				<td>$ 590</td>
				<td>$ 570</td>
				</tr>   
				<tr> 
				<td><h5> CLASS<br> TOP</h5></td>
				<td><i class="icon-play-5"></i>H. 7 Ventanas Sup:<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. S.A Dorado<br><i class="icon-play-5"></i>H. Jose Antonio</td>
				<td><i class="icon-play-5"></i>H. Terra Viva Sup:<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. Casa Andina<br><i class="icon-play-5"></i>H. Inti Punku MAPI</td>
				<td>$ 860</td>
				<td>$ 670</td>
				<td>$ 650</td>
				</tr> 
				<tr> 
				<td rowspan="2"><h5> CLASS<br> LUXURY</h5></td>  
				<td><i class="icon-play-5"></i>H. Costa del Sol<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td><i class="icon-play-5"></i>H. Mapi<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 1125</td>
				<td>$ 830</td>
				<td><span class="label label-danger">Closed</span></td>
				</tr>
				<tr>  
				<td><i class="icon-play-5"></i>H. Aranwa<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td><i class="icon-play-5"></i>H. Sumaq<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 1640</td>
				<td>$ 1120</td>
				<td><span class="label label-danger">Closed</span></td>
				</tr>   
				</tbody> 
				</table> 
				</div> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input type="submit" name="envioreserva" value="BOOK NOW" class="btn_1" id="submit-contact">
            
          	 <?php include("includes/forma-de-pago.php"); ?> 
			</div>
			</div>
            </form> 
        </div>
        <br> 
        <aside class="col-md-3">   
        <?php include("includes/costados/best-walks.php");
			include("includes/costados/packages-machu-picchu.php");
			include("includes/costados/packages-peru.php");
			include("includes/costados/alternative-walks.php");
			include("includes/costados/random-package.php");
			include("includes/atencion-cliente.php");
		?>
		</aside>
    </div>
    </div>
    <?php include("includes/pie.php");
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
  
 
<script src="assets/validate.js"></script> 
  </body>
</html>