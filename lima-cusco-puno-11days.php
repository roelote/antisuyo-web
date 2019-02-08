<?php
$nombre_paquete = 'Lima Cusco and Puno';
$numero_dias='11 Days and 10 Nights';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;

$descripcion_tour="Peru Packages: Lima, Cusco and Puno 11 Days / 10 Nights. With this package and complete itinerary you will visit the main tourist sites of the country, starting with the capital, Lima, with its many places to visit: Lima - colonial and modern city tour and the impressive archaeological complex of Pachacamac.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Tours Peru";
$url_category="/tours-peru/";
$url_foto_seo="https://www.antisuyotrekperu.com/img/tours-peru/lima-cusco-y-puno-11-days-10-nights/city-of-colonial-lima-and-modern.jpg";

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
				<div class="fill-tour" style="background-image:url('img/tours-peru/lima-cusco-y-puno-11-days-10-nights.jpg');"></div>
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
                       Price from<span><sup>$</sup>1045</span>For Person
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
					<p>Peru Packages: <strong>Lima</strong>, <strong>Cusco</strong> and <strong>Puno</strong> 11 Days / 10 Nights. With this package and complete itinerary you will visit the main tourist sites of the country, starting with the capital, Lima, with its many places to visit: Lima - colonial and modern city tour and the impressive <strong>archaeological complex of Pachacamac</strong>.</p>                    
					<p>Continuing for the city of <strong>Cusco</strong> - "the navel of the world and the <strong>empire of the Incas</strong>" visiting its archaeological sites, <strong>Sacred Valley of the Incas</strong> - which houses the most interesting<strong> archaeological sites</strong> and then we lodge in the Citadel of <strong>Aguas Calientes</strong> a small town Near one of the wonders of the world: Machu Picchu.</p>                    
					<p>Following the route we enter the route from <strong>Cusco</strong> to <strong>Puno</strong>, called the "Route of the Sun", with a large number of its important archaeological sites and arriving to <strong>Lake Titicaca</strong> - <strong>Puno</strong>, the highest navigable lake in the world in which we will sail one day Whole in its waters and to know the main islands.</p>
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
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/transfer-to-hotel.jpg" title="transfer to hotel."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/transfer-to-hotel.jpg" title="transfer to hotel" alt="transfer to hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/free-day-to-know-the-city.jpg" title="Free day to know the city."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/free-day-to-know-the-city.jpg" alt="Free day to know the city." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/overnight-in-lima.jpg" title="Overnight in Lima"><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/overnight-in-lima.jpg" alt="Overnight in Lima" class="img-responsive">
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
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/city-of-colonial-lima-and-modern.jpg" title="city of colonial Lima and modern."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/city-of-colonial-lima-and-modern.jpg" alt="city of colonial Lima and modern." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/ruins-of-the-huaca-pucllana.jpg" title="Ruins of the Huaca Pucllana."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/ruins-of-the-huaca-pucllana.jpg" alt="Ruins of the Huaca Pucllana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/the-magic-water-circuit.jpg" title="the Magic Water Circuit."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/the-magic-water-circuit.jpg" title="the Magic Water Circuit." alt="the Magic Water Circuit." class="img-responsive">
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
					<p>LIMA - PACHACAMAC</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the hotel.</li>
                    <li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 09:00 am.</li>
                    <li><i class="icon-ok-squared"></i>The tour to Pachacamac begins at 09:20 a.m. to 1:00 p.m.</li>
                    <li><i class="icon-ok-squared"></i>Visit: To the Oracles, aclla wasi, Temple of the Sun God and the palaces of the rulers.</li>
                    <li><i class="icon-ok-squared"></i>Free afternoon, to take advantage of Peruvian gastronomy.</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in Lima.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/tour-a-Pachacamac.jpg" title="Tour a pachacamac."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/tour-a-Pachacamac.jpg" alt="Tour a pachacamac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/afternoon-to-enjoy-the-gastronomy.jpg" title="Tarde para Disfrutar de la Gastronomia."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/afternoon-to-enjoy-the-gastronomy.jpg" title="Afternoon to enjoy the gastronomy." alt="Afternoon to enjoy the gastronomy." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/temple-of-sun-god.jpg" title="temple of sun god."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/temple-of-sun-god.jpg" title="temple of sun god.." title="templo de Dios Sol" alt="temple of sun god." class="img-responsive">
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
					<p>SACRED VALLEY OF THE INCAS</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>We will pick you up at your hotel from 08:00 to 08:20.</li>
                        <li><i class="icon-ok-squared"></i>Departure to the Sacred Valley of the Incas 8:45 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Visit: We will pass by the market of Corao, Pisaq market, archaeological sites of Pisaq, Ollantaytambo and the archaeological site of Chinchero.</li>
                        <li><i class="icon-ok-squared"></i>Return to Cusco at 19:00.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/archaeological-complex-of-pisac.jpg" title="archaeological-complex-of-ollantaytambo"><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/archaeological-complex-of-pisac.jpg" alt="archaeological complex of pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/archaeological-complex-of-ollantaytambo.jpg" title="archaeological complex of ollantaytambo."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/archaeological-complex-of-ollantaytambo.jpg" alt="archaeological complex of ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/archaeological-complex-of-chinchero.jpg" title="Overnight in Cusco."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/archaeological-complex-of-chinchero.jpg" title="archaeological complex of chincheros" alt="archaeological complex of ollantaytambo" class="img-responsive">
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
					<p>CUSCO - MACHU PICCHU FULL DAY</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 04:00 a.m.</li>
                        <li><i class="icon-ok-squared"></i>We will take our bus that will take us from Cusco to Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>we will take the Ollantaytambo - Aguas Calientes train at 06:10 a.m.</li>
                        <li><i class="icon-ok-squared"></i>On arrival reception in Aguas Calientes at 07:50 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Guided visit to Machu Picchu for 2 hours of tour around the most important sites of Machupicchu.</li>
                        <li><i class="icon-ok-squared"></i>Free time to take photos and rest inside the park of Machu Picchu.</li>
                        <li><i class="icon-ok-squared"></i>In the afternoon we will return from Machu Picchu - Aguas Calientes.</li>
                        <li><i class="icon-ok-squared"></i>To wait for the return train from Aguas Calientes - Ollantaytambo: 18:20 or 19:00.</li>
                        <li><i class="icon-ok-squared"></i>Transfer from Ollantaytambo - Cusco.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/archeological-site-of-machu-picchu.jpg" title="Temple of the Sun Coricancha."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/archeological-site-of-machu-picchu.jpg" title="Archeological Site of Machu-Picchu." alt="Archeological Site of Machu-Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/the-intihuatana.jpg" title="The Intihuatana"><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/the-intihuatana.jpg" alt="The Intihuatana" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/sun-temple.jpg" title="Sun Temple."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/sun-temple.jpg" alt="Sun Temple." class="img-responsive">
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
					<p>CUSCO - PUNO / RUTA DEL SOL.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                        <li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 06:30 a.m.</li>
                        <li><i class="icon-ok-squared"></i>The Executive Bus departure will be at 07:00.</li>
                        <li><i class="icon-ok-squared"></i>Visits: To the Sistine Chapel of Andahuaylillas, Raqchi, Sicuani (lunch) La Raya and Pucará.</li>
                        <li><i class="icon-ok-squared"></i>Reception in Puno and transfer to hotel.</li>
                        <li><i class="icon-ok-squared"></i>Spend the night in Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/capilla-sixtina-andahuaylillas.jpg" title="capilla sixtina andahuaylillas."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/capilla-sixtina-andahuaylillas.jpg" alt="capilla sixtina andahuaylillas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/sitio-arqueologico-de-raqchi.jpg" title="sitio arqueologico de raqchi"><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/sitio-arqueologico-de-raqchi.jpg" alt="sitio arqueologico de raqchi." class="img-responsive">
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
					<p>PUNO - TITICACA LAKE</p>
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
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/reception-Puno.jpg" title="reception-Puno."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/reception-Puno.jpg" alt="reception-Puno." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/islands-floating-uros.jpg" title="islands-floating-uros"><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/islands-floating-uros.jpg" title="islands-floating-uros" alt="El Intihuatana" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/floating-islands-of-taquile.jpg" title="floating islands of taquile."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/floating-islands-of-taquile.jpg" alt="floating islands of taquile." class="img-responsive">
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
					<p>PUNO - CUSCO</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                    <li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 7:30 a.m.</li>
                    <li><i class="icon-ok-squared"></i>Transfer from the hotel to the land terminal at 07:40.</li>
                    <li><i class="icon-ok-squared"></i>Our tour bus will depart from Puno to Cusco at 08:30.</li>
                    <li><i class="icon-ok-squared"></i>The arrival to the city of Cusco will be at 15:00.</li>
                    <li><i class="icon-ok-squared"></i>Reception at the land terminal of Cusco and transfer to hotel.</li>
                    <li><i class="icon-ok-squared"></i>Spend the night in Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/exit-from-puno.jpg" title="exit-from-puno."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/exit-from-puno.jpg" title="Sistine Chapel of Andahuaylillas." alt="exit-from-puno." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/arrival-to-cusco.jpg" title="Arrival to Cusco."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/arrival-to-cusco.jpg" alt="Arrival to Cusco." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/transfer-overnight-in-cusco.jpg" title="transfer
								overnight in cusco"><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/transfer-overnight-in-cusco.jpg" alt="transfer overnight in cusco" class="img-responsive">
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
					<p>CUSCO - TRANSFER</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Breakfast at the Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Transfer from hotel to the Airport 2 hours before departure of your flight.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/breakfast-at-the-hotel.jpg" title="Breakfast at the Hotel."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/breakfast-at-the-hotel.jpg" alt="Breakfast at the Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>						
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/hotel-exit.jpg" title="Hotel Exit."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/hotel-exit.jpg" title="Hotel Exit." alt="Floating islands uros." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/airport-transfer.jpg" title="Airport-transfer."><img src="../img/tours-peru/lima-cusco-y-puno-11-days-10-nights/airport-transfer.jpg" title="Airport-transfer." alt="Floating islands Taquile." class="img-responsive">
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
                       <li><i class="icon-ok-circle-1"></i>Tourist transport for each tour.</li>
                       <li><i class="icon-ok-circle-1"></i>Professional guides for each tour in english language.</li>
                       <li><i class="icon-ok-circle-1"></i>Tours in Cusco: Archaeological City Tour, Sacred Valley of the Incas and Machu Picchu.</li>
                       <li><i class="icon-ok-circle-1"></i>Tours in Lima: Colonial and modern city tour.</li>
                       <li><i class="icon-ok-circle-1"></i>Ride in Puno: Lake Titicaca.</li>
                       <li><i class="icon-ok-circle-1"></i>Route of Sol Cusco - Puno.</li>
                       <li><i class="icon-ok-circle-1"></i>2 Nights Hotel in Lima.</li>
                       <li><i class="icon-ok-circle-1"></i>4 nights hotel in Cusco.</li>
                       <li><i class="icon-ok-circle-1"></i>2 Nights of Hotel in Puno.</li>
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
                      <li><i class="icon-cancel-circle-2"></i>Route of the Sun Tourist Ticket 15 US.</li>
                      <li><i class="icon-cancel-circle-2"></i>National and international flights.</li>
                      <li><i class="icon-cancel-circle-2"></i>Travel insurance.</li>
                      <li><i class="icon-cancel-circle-2"></i>Others that is not mentioned above.</li>
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
				<th colspan="7">
				<h4><span><i class="icon_set_1_icon-30"></i>Package + <i class="icon_set_1_icon-6"></i>Hotel + <i class="icon_set_1_icon-26"></i>Bus + <i class="icon_set_1_icon-5"></i>Train(Tourist class)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATEGORY</strong></td>
				<td><strong>HOTELS<br> IN LIMA</strong></td>
				<td><strong>HOTELS<br> IN PUNO</strong></td>
				<td><strong>HOTELS<br> IN CUSCO</strong></td>
				<td><strong>HOTELS<br> IN AGUAS CALIENTES</strong></td> 
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE&#160</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASS<br>ECONOMIC</h5></td>
				<td><i class="icon-play-5"></i>Hotel Monte Real<br><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Helena</td>
				<td><i class="icon-play-5"></i>Hotel Prisma</td>
				<td><i class="icon-play-5"></i>Hotel Continental</td>
				<td>$ 1115</td>
				<td>$ 1065</td>  
				</tr>   
				<tr> 
				<td><h5>CLASS<br>TOURIST</h5></td>
				<td><i class="icon-play-5"></i>Hotel Carmel<br> <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>H.<br>Sol Plaza Inn</td>
				<td><i class="icon-play-5"></i>H. S.A Internacional</td>
				<td><i class="icon-play-5"></i>Hotel Inka Town</td>
				<td>$ 1260</td>
				<td>$ 1150</td> 
				</tr>   
				<tr> 
				<td><h5>CLASS<br>TOP</h5></td>
				<td><i class="icon-play-5"></i>San Agustin Exclusive<br><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Royal INN</td>
				<td><i class="icon-play-5"></i>San Agusntin Dorado</td>
				<td><i class="icon-play-5"></i>Hotel Intitpunku Mapi</td>
				<td>$ 1435</td>
				<td>$ 1305</td> 
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