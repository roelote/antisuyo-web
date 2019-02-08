<?php
$nombre_paquete = 'Inca Trail Antisuyo Machu Picchu';
$numero_dias='2 Days and 1 Night';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Antisuyo trek to Machu Picchu is a great alternative for those looking to escape the Inca Trail reservations and have a beautiful visual experience of the high Andean landscape and we have daily departures. Antisuyo trek is the only path that starts from the city of Cusco, where the Inca Trail was used by the Incas to move to the Sacred Valley and the Inca Tupac Yupanqui Palace is located in the village of Chinchero, it is a picturesque place of the city of Cusco.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$category_tour="Alternative Treks Cusco";
$url_category="/alternative-treks-cusco/";

$url_foto_seo="https://www.antisuyotrekperu.com/img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/lagoon-qori-cocha.jpg";
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

        <div class="fill-tour" style="background-image:url('img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night.jpg');"></div>

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
                       Price from<span><sup>$</sup>320</span>For Person
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
					<p><strong>Antisuyo</strong> trek to <strong>Machu Picchu</strong> is a great alternative for those looking to escape the Inca Trail reservations and have a beautiful visual experience of the high Andean landscape and we have daily departures.</p>                   
					<p><strong>Antisuyo trek</strong> is the only path that starts from the city of Cusco, where the Inca Trail was used by the Incas to move to <strong>the Sacred Valley and the Inca</strong> <strong>Tupac Yupanqui</strong> Palace is located in the village of Chinchero, it is a picturesque place of <strong>the city of Cusco</strong>.</p>                   
					<p>The Inca Trail Antisuyo is the only recommended to make throughout the year, unrestricted rain nor road hazard.</p>                   
					<p>The Antisuyo Trek to <strong>Machu Picchu</strong> is a moderate way, which can make people of all ages from 08 to 65 years</p>                   
					<p>The <strong>Antisuyo trek</strong> includes overnight in <strong>Aguas Calientes</strong> which is located near the Inca citadel of <strong>Machu Picchu</strong>, prices in the table are based on the hotel category and type of accommodation.</p>
					<p><strong>Antisuyo trek</strong> includes overnight in <strong>Aguas Calientes</strong> which is located near <strong>the Inca </strong>citadel of <strong>Machu Picchu</strong> and the prices in the table, you agree to the category of hotels and type of accommodation.</p>                          
				</div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARY</span></h3>
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 1</span></h3> 
					<p>CUSCO - VALLE SAGRADO DE LOS INCAS</p>
				</div>
					<ul class="list_icons descripcion">
						<li>We will pick you up at your hotel at 7:00 amAfter 20 min you will arrive at Sacsayhuaman Archaeological Park, on the spot of Chincana Grande, at this point you will start our 4 hour hike at moderate pace, passing through Ñusta Pakana, Devil's Balcony, Mirador del Cóndor and Pukamoqo (4100 Msnm).During the tour we can appreciate the highest mountains of the region as: Apu Salkantay, Veronica, Chicon, Pitusiray, Huanacaure and the majestic Ausangate; We will arrive at Lake Qori Cocha, we will have lunch at the lake shore.In the afternoon we will descend for a time of two hours, visit the Colonial Temple in the town of Umasbamba (3700 masl) we will also have time to visit its craft center, we will appreciate the work of local women, whose main activity is based on the trade of Garments and handicrafts made from naturally stained wool.Finally we will take the bus that will take us to the town of Ollantaytambo, the trip will take about 1 hour, where we will take the train of Ollantaytambo - Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/lagoon-qori-cocha.jpg" title="Laguna qori cocha."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/lagoon-qori-cocha.jpg" alt="Laguna qori cocha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/archaeological-complex-of-ollantaytambo.jpg" title="Archaeological complex of ollantaytambo."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/archaeological-complex-of-ollantaytambo.jpg" alt="Archaeological complex of ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/recepcion-en-aguas-calientes.jpg" title="Reception in aguas calientes."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/recepcion-en-aguas-calientes.jpg" alt="Reception in hot waters." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div> 
                	</div>
                	<hr>
				</div>
				</div>                
            <div class="row">
                <div class="col-md-2"> 
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 2</span></h3> 
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<li>After our breakfast, around 05:00 am, we will go up to Machu Picchu, the goal is to arrive early to see the sunrise, and take advantage to take the best photos, without many people.We will have a guided tour of the main sites of the archaeological center, if we reach the time, we can climb to the Puerta del Sol, those who have their entrance to Huayna Picchu, can take advantage to climb the mountain and visit the Temple of the Moon.In the afternoon we will return to Aguas Calientes to have lunch, then we will take the train back from Aguas Calientes to Ollantaytambo, the trip will take us 2 hours.Arriving to Ollantaytambo we will be waiting for the bus to take us back to the city of Cusco, this trip will take us one and a half.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/archaeological-complex-of-machu-picchu.jpg" title="Archaeological Complex of Machu Picchu."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/archaeological-complex-of-machu-picchu.jpg" alt="Archaeological Complex of Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/return-to-aguas-calientes.jpg" title="Return to hot springs."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/return-to-aguas-calientes.jpg" alt="Return to aguas calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/bus-back-to-cusco.jpg" title="Bus back to Cusco."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-2-days1-night/bus-back-to-cusco.jpg" alt="Bus back to Cusco." class="img-responsive">
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
						  <td><strong>ADULT</strong></td>
						  <td><strong>STUDENT</strong></td> 
						</tr>  
						<tr> 
						  <td><strong> PRICE</strong></td>
						  <td>$ 350</td>
						  <td>$ 320</td> 
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
			include("includes/costados/packages-peru.php");
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
  
 
<script src="assets/validate.js"></script> 
</body>
</html>