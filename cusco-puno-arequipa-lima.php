<?php
$nombre_paquete = 'Cusco  Puno arequipa and lima';
$numero_dias='12 Days and 11 Nights';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="PERU PACKAGES: Cusco - Puno - Arequipa - Lima 12 Days 11 Nights. This package and complete itinerary, is made to know all the main tourist attractions of Peru. Beginning with the city of Cusco 'the navel of the world and the empire of the Incas' and touring its archaeological sites, Sacred Valley of the Incas that houses the most interesting archaeological centers and then spend the night in the village of Aguas Calientes a small Village near one of the wonders of the world: Machu Picchu.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$category_tour="Tours Peru";
$url_category="/tours-peru/";

$url_foto_seo="https://www.antisuyotrekperu.com/img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/watch-the-flight-of-the-condors.jpg";
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

                <?php   $url_s = "tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights.jpg";

    $cadena = explode("/", $url_s, 2);
                echo "
                 <picture>
                    <source media='(min-width: 1201px)' srcset='../img/$url_s'>
                    <img src='../img/$cadena[0]/xs/$cadena[1]' class='img-responsive' alt='$nombre_paquete' title='$nombre_paquete'>

                
        		 </picture>";
        		 ?>
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
                       Price from<span><sup>$</sup>1175</span>For Person
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
                <div class="col-md-10"> 
					 <p>PERU PACKAGES: <strong>Cusco</strong> - <strong>Puno</strong> - <strong>Arequipa</strong> - Lima 12 Days 11 Nights. This package and complete itinerary, is made to know all the main tourist <strong>attractions of Peru</strong>. </p> 
                   
                    <p>Beginning with the city of Cusco "the navel of the world and the <strong>empire of the Incas</strong>" and touring its archaeological sites, <strong>Sacred Valley of the Inca</strong>s that houses the most interesting archaeological centers and then spend the night in the village of <strong>Aguas Calientes</strong> a small Village near one of the wonders of the world: <strong>Machu Picchu</strong>.</p>
                    
                    <p>Following the route we enter the route from <strong>Cusco</strong> to<strong> Puno</strong>, called the "<strong>Sun ROAD</strong>", with a large number of its important archaeological sites and arriving at Lake Titicaca - Puno, the highest navigable lake in the world in which we will sail one day Whole in its waters and to know the main islands.</p>
                    
                    <p>Continuing with the package, we will visit the famous White City, <strong>Arequipa</strong>, with its beautiful <strong>Plaza de Armas</strong> and great museums, then we will visit the Colca Canyon one of the deepest canyons in the world.</p>
                    
                    <p>On the last day, we will visit the <strong>capital Lima</strong>, where you can visit: colonial and <strong>modern Lima</strong>, with its many historical and modern points and take advantage of the visits to enjoy <strong>gastronomy</strong>, which is considered one of the best in the world.</p>
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
						RECEPTION IN CUSCO
					</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Reception at the airport of Cusco and transfer to the hotel.</li>
                        <li><i class="icon-ok-squared"></i>Acclimatization to height.</li>
                        <li><i class="icon-ok-squared"></i>Afternoon free to relax or explore the city.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Cusco</li>

					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="pt/img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/transfer-to-the-hotel.jpg" title="transfer to the hotel."><img src="pt/img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/transfer-to-the-hotel.jpg" alt="transfer to the hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/free-day-for-acclimatization.jpg" title="Free day for acclimatization."><img src="img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/free-day-for-acclimatization.jpg" alt="Free day for acclimatization." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/overnight-and-cusco.jpg" title="Overnight and Cusco."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/overnight-and-cusco.jpg" alt="Overnight and Cusco." class="img-responsive">
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
					<p>
						CUSCO - ARCHAEOLOGICAL CITY TOUR
					</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the hotel.</li>
                        <li><i class="icon-ok-squared"></i>In the morning you can take advantage of visiting the main museums.</li>
                        <li><i class="icon-ok-squared"></i>Afternoon: Archaeological City Tour, departure at 13:30-18:30.</li>
                        <li><i class="icon-ok-squared"></i>Visit: the Temple of the Sun Koricancha, and the archaeological sites of Sacsayhuaman, Kenko, Puca Pucara and Tambomachay.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/temple-of-the-sun-coricancha.jpg" title="Temple of the sun coricancha."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/temple-of-the-sun-coricancha.jpg" alt="Temple of the sun coricancha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-of-sacsayhuaman.jpg" title="Archaeological complex of sacsayhuaman."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-of-sacsayhuaman.jpg" alt="Archaeological complex of sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-of-qenqo.jpg" title="Archaeological complex of qenqo."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-of-qenqo.jpg" title="Archaeological complex qenqo." alt="Archaeological complex qenqo." class="img-responsive">
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
					<p>
						CUSCO - SACRED VALLEY OF THE INCAS
					</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the hotel.</li>
                    <li><i class="icon-ok-squared"></i>We will pick you up at your hotel from 08:00 to 08:20.</li>
                    <li><i class="icon-ok-squared"></i>Departure to the Sacred Valley of the Incas at 08:45.</li>
                    <li><i class="icon-ok-squared"></i>Visit: To Corao Market, Pisac Market, archaeological remains of Pisac and archaeological complex Ollantaytambo.</li>
                    <li><i class="icon-ok-squared"></i>In the afternoon we will take the Ollantaytambo train - Aguas Calientes 19:00 or 21:00.</li>
                    <li><i class="icon-ok-squared"></i>Reception at the Aguas Calientes station and transfer to the hotel.</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in the town of Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-pisac.jpg" title="Archaeological complex pisac."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-pisac.jpg" alt="Archaeological complex pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-ollantaytambo.jpg" title="Archaeological complex ollantaytambo."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-ollantaytambo.jpg" alt="Archaeological complex ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/the-incas-sacred-valley.jpg" title="The Incas' Sacred Valley."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/the-incas-sacred-valley.jpg" alt="The Incas' Sacred Valley." class="img-responsive">
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
					<p>
						MACHU PICCHU COMPLETE DAY - CUSCO
					</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>We went out very early to Machu Picchu to see the sunrise.</li>
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
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-of-machu-picchu.jpg" title="Archaeological Complex of Machu Picchu."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-of-machu-picchu.jpg" alt="Archaeological Complex of Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/the-intiwatana.jpg" title="The Intihuatana."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/the-intiwatana.jpg" alt="The Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/sun-temple.jpg" title="Sun Temple."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/sun-temple.jpg" alt="Sun Temple." class="img-responsive">
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
					<p>
						CUSCO - PUNO / SUN ROUTE
					</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>We will stop by your hotel at 06:30 a.m.</li>
                        <li><i class="icon-ok-squared"></i>The Executive Bus departure will be at 07:00.</li>
                        <li><i class="icon-ok-squared"></i>Visits: To the Sistine Chapel of Andahuaylillas, Raqchi, Sicuani (lunch) La Raya and Pucará.</li>
                        <li><i class="icon-ok-squared"></i>Reception in Puno and transfer to hotel.</li>
                        <li><i class="icon-ok-squared"></i>spend the night in Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/sistine-chapel-andahuaylillas.jpg" title="Sistine Chapel andahuaylillas."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/sistine-chapel-andahuaylillas.jpg" alt="Sistine Chapel andahuaylillas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-of-raqchi.jpg" title="Archaeological complex of raqchi."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/archaeological-complex-of-raqchi.jpg" alt="Archaeological complex of raqchi." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/overnight-in-puno.jpg" title="Overnight in Puno"><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/overnight-in-puno.jpg" alt="Overnight in Puno" class="img-responsive">
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
					<p>
						PUNO -TITICACA LAKE
					</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>In the morning we will pick you up at your hotel from 07:00 a.m. to 07:30 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Our ship will depart at 07:45 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Visit: To the Floating Islands of Uros and Taquile Island.</li>
                        <li><i class="icon-ok-squared"></i>In the afternoon we will return to Puno at 5:00 p.m.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/floating-islands-of-uros.jpg" title="Floating islands of uros"><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/floating-islands-of-uros.jpg" alt="Floating islands of uros" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/floating-islands-of-taquile.jpg" title="Floating islands of taquile."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/floating-islands-of-taquile.jpg" alt="Floating islands of taquile." class="img-responsive">
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
					<p>
						PUNO - AREQUIPA
					</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Morning free to explore in the city of Puno.</li>
                        <li><i class="icon-ok-squared"></i>In the afternoon our transport will arrive at your hotel at 2:00 p.m.</li>
                        <li><i class="icon-ok-squared"></i>The Executive Bus departure will be scheduled at 15:00 and the arrival in Arequipa will be at 21:00.</li>
                        <li><i class="icon-ok-squared"></i>Reception at the land terminal and transfer to the hotel.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Arequipa.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/morning-free-to explore-the-city-of-puno.jpg" title="Morning free to explore the city of Puno."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/morning-free-to explore-the-city-of-puno.jpg" alt="Morning free to explore the city of Puno." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/transfer-to-your-hotel.jpg" title="transfer to your hotel."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/transfer-to-your-hotel.jpg" alt="transfer to your hotel." class="img-responsive">
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
					<p>
						AREQUIPA - CITY TOUR
					</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Free morning to tour the city.</li>
                    <li><i class="icon-ok-squared"></i>In the afternoon the City tour starts at 2:00 p.m. to 6:00 p.m.</li>
                    <li><i class="icon-ok-squared"></i>Visit: Santa Catalina Monastery, Arequipa Cathedral, Cloisters, Jesus' Company Church, San Francisco, Carmen Alto Viewpoint and Yanahuara ..</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in Arequipa.</li>

					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel.." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/cathedral-of-arequipa.jpg" title="Cathedral of Arequipa"><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/cathedral-of-arequipa.jpg" alt="Cathedral of Arequipa" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/the-viewpoint-of-tall-carmen.jpg" title="The viewpoint of tall carmen."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/the-viewpoint-of-tall-carmen.jpg" alt="The viewpoint of tall carmen." class="img-responsive">
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
					<p>
						AREQUIPA - CHIVAY
					</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the Hotel</li>
                    <li><i class="icon-ok-squared"></i>We will stop by your hotel at 8:15 a.m.</li>
                    <li><i class="icon-ok-squared"></i>Departure from Arequipa - Chivay - Colca Canyon at 08h30.</li>
                    <li><i class="icon-ok-squared"></i>During the trip to Chivay you will be able to appreciate the different high Andean villages and the wonderful landscapes, together with our</li> professional guide.
                    <li><i class="icon-ok-squared"></i>Upon arrival at Chivay our transport will leave you at their respective hotels.</li>
                    <li><i class="icon-ok-squared"></i>In the afternoon you can take advantage of the thermal baths of La Calera.</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in Chivay.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/chivay-travel.jpg" title="Chivay Travel."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/chivay-travel.jpg" alt="Chivay Travel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/cañon-del-colca.jpg" title="Cañón del Colca"><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/cañon-del-colca.jpg" alt="Cañón del Colca" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/thermal-baths-of-the-calera.jpg" title="Thermal baths of the Calera"><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/thermal-baths-of-the-calera.jpg" alt="Thermal baths of the Calera" class="img-responsive">
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
					<p>
						COLCA CANYON - AREQUIPA
					</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Departure to the Colca Canyon at 06:30.</li>
                    <li><i class="icon-ok-squared"></i>Visit: To the towns that make up the route of the trip, the deepest canyon in America and where they observe the flight of the condors.</li>
                    <li><i class="icon-ok-squared"></i>Return to Chivay at 12:00 and then return to the city of Arequipa.</li>
                    <li><i class="icon-ok-squared"></i>Arriving in Arequipa approximately at 17:00.</li>
                    <li><i class="icon-ok-squared"></i>Overnight in Arequipa.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/watch-the-flight-of-the-condors.jpg" title="Watch the flight of the condors."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/watch-the-flight-of-the-condors.jpg" alt="Watch the flight of the condors." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/overnight-in-arequipa.jpg" title="Overnight in Arequipa."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/overnight-in-arequipa.jpg" alt="Overnight in Arequipa." class="img-responsive">
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
					<p>
						AREQUIPA - LIMA - CITY TOUR
					</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the Hotel</li>
                    <li><i class="icon-ok-squared"></i>Transfer hotel- airportin Arequipa</li>
                    <li><i class="icon-ok-squared"></i>Reception at Lima airport and transfer to hotel</li>
                    <li><i class="icon-ok-squared"></i>In the afternoon City Tour from 2:00 p.m. to 6:00 p.m.</li>
                    <li><i class="icon-ok-squared"></i>Visit: Main squares, ruins of Huaca Pucllana, Colonial and Modern Lima.</li>
                    <li><i class="icon-ok-squared"></i>In the afternoon you can take advantage of a visit to the Magic Water Circuit from 18h15 to 20h00 (optional).</li>
                    <li><i class="icon-ok-squared"></i>Overnight in Lima.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/colonial-lima.jpg" title="Colonial Lima."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/colonial-lima.jpg" alt="Colonial Lima." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/ruins-of-huaca-pucllana.jpg" title="Ruins of huaca pucllana."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/ruins-of-huaca-pucllana.jpg" alt="Ruins of huaca pucllana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/magic-water-circuit.jpg" title="Magic Water Circuit."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/magic-water-circuit.jpg" alt="Magic Water Circuit." class="img-responsive">
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
					<p>
						LIMA - TRANSFER TO THE AIRPORT.
					</p>
				</div>
					<ul class="list_icons">
                   <li><i class="icon-ok-squared"></i>Breakfast at the Hotel</li>
                   <li><i class="icon-ok-squared"></i>Transfer from the hotel to the airport in Lima 3 hours before.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/hotel-exit.jpg" title="Hotel exit."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/hotel-exit.jpg" alt="Hotel exit." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/transfer-from-the-hotel-to-the-airport.jpg" title="Transfer from the hotel to the airport."><img src="../img/tours-peru/cusco-puno-arequipa-y-lima-12-days-11-nights/transfer-from-the-hotel-to-the-airport.jpg" alt="Transfer from the hotel to the airport." class="img-responsive">
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
                       <li><i class="icon-ok-circle-1"></i>Transfer Airport - Hotel - Airport (Lima)</li>
                       <li><i class="icon-ok-circle-1"></i>Transfer Airport-Hotel-Airport (Cusco)</li>
                       <li><i class="icon-ok-circle-1"></i>Transfer Terminal Land - Hotel - land terminal (Puno And Arequipa).</li>
                       <li><i class="icon-ok-circle-1"></i>Tourist Transportation for each tour.</li>
                       <li><i class="icon-ok-circle-1"></i>Professional guides for each tour.</li>
                       <li><i class="icon-ok-circle-1"></i>Tours in Cusco: Archaeological City Tour, Sacred Valley of the Incas and Machu Picchu.</li>
                       <li><i class="icon-ok-circle-1"></i>Tours in Arequipa: City Tour and the Colca Canyon 2 days 1 night.</li>
                       <li><i class="icon-ok-circle-1"></i>Tours in Puno: Floating islands of the Uros and Taquile</li>
                       <li><i class="icon-ok-circle-1"></i>Route of Sol Cusco-Puno</li>
                       <li><i class="icon-ok-circle-1"></i>City tours in the city of Lima.</li>
                       <li><i class="icon-ok-circle-1"></i>1 Night Hotel in Lima</li>
                       <li><i class="icon-ok-circle-1"></i>3 nights hotel in Cusco.</li>
                       <li><i class="icon-ok-circle-1"></i>1 Night of hotel in hot waters</li>
                       <li><i class="icon-ok-circle-1"></i>2 Nights of Hotel in Puno</li>
                       <li><i class="icon-ok-circle-1"></i>4 nights hotel in Arequipa</li>
                       <li><i class="icon-ok-circle-1"></i>Entrance to Machupicchu for 1 day</li>
                       <li><i class="icon-ok-circle-1"></i>Train service in class EXPEDITION (To come and go).</li>
                       <li><i class="icon-ok-circle-1"></i>Bus Aguas Calientes - Machu Picchu- Aguas Calientes.</li>
                       <li><i class="icon-ok-circle-1"></i>Transfer in our transport from Ollantaytambo - Cusco</li>
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
                      <li><i class="icon-cancel-circle-2"></i>Lunch and dinner</li>
                      <li><i class="icon-cancel-circle-2"></i>Cusco Tourist Ticket USD 45</li>
                      <li><i class="icon-cancel-circle-2"></i>Sun Route Tourist Ticket 15 US</li>
                      <li><i class="icon-cancel-circle-2"></i>Touristic Ticket Arequipa USD 27</li>
                      <li><i class="icon-cancel-circle-2"></i>International flights and local flights.</li>
                      <li><i class="icon-cancel-circle-2"></i>Travel insurance</li>
                      <li><i class="icon-cancel-circle-2"></i>Others that are not included.</li>
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
				<th colspan="8">
				<h4><span><i class="icon_set_1_icon-30"></i>Package + <i class="icon_set_1_icon-6"></i>Hotel + <i class="icon_set_1_icon-26"></i>Bus + <i class="icon_set_1_icon-5"></i>Train(Tourist class)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATE-<br>GORY</strong></td>
				<td><strong>HOTELS<br> IN LIMA</strong></td>
				<td><strong>HOTELS<br> IN ARE-<br>QUIPA</strong></td>
				<td><strong>HOTELS<br> IN PUNO</strong></td>
				<td><strong>HOTELS<br> IN CUSCO</strong></td>
				<td><strong>HOTELS<br> IN AGUAS CALIEN-<br>TES</strong></td> 
				<td><strong>DOUBLE</strong></td> 
				<td><strong>TRIPLE&#160</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASS<br>ECONO<br>MIC</h5></td>
				<td><i class="icon-play-5"></i>The Place Hotel<br><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Ensueño</td>
				<td><i class="icon-play-5"></i>Hotel Helena</td>
				<td><i class="icon-play-5"></i>Hotel Prisma</td>
				<td><i class="icon-play-5"></i>Hotel Continental</td>
				<td>$ 1260</td>
				<td>$ 1195</td>  
				</tr>   
				<tr> 
				<td><h5>CLASS<br> TOU<br>RIST</h5></td>
				<td><i class="icon-play-5"></i>Hotel Carmel<br> <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>H. Posada Monasterio</td>
				<td><i class="icon-play-5"></i>H.<br>Sol Plaza Inn</td>
				<td><i class="icon-play-5"></i>H. S.A Internacional</td>
				<td><i class="icon-play-5"></i>Hotel Inka Town</td>
				<td>$ 1425</td>
				<td>$ 1305</td> 
				</tr>   
				<tr> 
				<td><h5>CLASS TOP</h5></td>
				<td><i class="icon-play-5"></i>San Agustin Exclusive<br><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Terra Viva</td>
				<td><i class="icon-play-5"></i>Hotel Royal INN</td>
				<td><i class="icon-play-5"></i>San Agusntin Dorado</td>
				<td><i class="icon-play-5"></i>Hotel Intitpunku Mapi</td>
				<td>$ 1590</td>
				<td>$ 1410</td> 
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
		<?php include("includes/costados/best-walks.php"); ?>    
        <?php include("includes/costados/packages-machu-picchu.php"); ?>
        <?php include("includes/costados/packages-peru.php"); ?> 
        <?php include("includes/costados/alternative-walks.php"); ?>
         <?php include("includes/costados/random-package.php"); ?>
         <?php include("includes/costados/packages-machu-picchu.php"); ?>
         <?php include("includes/costados/best-walks.php"); ?>
         <?php include("includes/costados/packages-peru.php"); ?>
         <?php include("includes/costados/alternative-walks.php"); ?>
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
 
  
 
<script src="assets/validate.js"></script> 
  </body>
</html>
