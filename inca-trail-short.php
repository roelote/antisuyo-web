<?php
$nombre_paquete = 'Inca Trail Short Machu Picchu ';
$numero_dias='2 Days and 1 Night';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="The traditional Cusco Package Cusco Machu Picchu 4 days and 3 nights is an option to know the differents tourist attractions in the city of Cusco and also the Inca citadel of Machu Picchu.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$category_tour="Inca Trail Machu Picchu";
$url_category="/inca-trail-machu-picchu/";
$url_foto_seo="https://www.antisuyotrekperu.com/img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/machu-picchu.jpg";
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

<div class="fill-tour" style="background-image:url('img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night.jpg');"></div>

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
                       Price from<span><sup>$</sup>380</span>For Person
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
					 <p>Short Inca Trail 2 days is a short version of the famous Inca Trail Classic 4 days, plus it is a great option for those who do not have much time and also for those whose physical condition and age do not help in a long journey on foot and they do not want to miss a unique experience.</p> 
                    
                 </div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARY</span></h3>
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 1</span></h3> 
					<p>CUSCO - WIÑAYWAYNA - AGUAS CALIENTES</p>
				</div>
					<ul class="list_icons descripcion">
						<p>In the morning we will pick you up at your hotel at 4:00 am and we will go to Ollantaytambo station to take the 06:10 train that will take us to Km 104 where we will begin our trek through a subtropical landscape forest, we will visit the archaeological center Of Chachabamba (2150 m.a.s.l); After approximately 3 hours of walking we will arrive at the impressive archaeological complex of Wiñaywayna formed by an agricultural center with numerous terraces, a religious sector and an urban sector, then we will go to the famous archaeological site of Intipunku, "Puerta del Sol", which Will take approximately 2 hours of walking along a stone path and a panoramic view of the mountains, where we can enjoy the first view of the majestic Machu Picchu and Inti Punku, then we will descend for half an hour to Machu Picchu ", this day we will not visit the Inca citadel of Machu Picchu, we will only pass through the door and continue towards the town of Aguas Calientes to spend the night.</p>
						<p>The walking time is an average of 6 or 7 hours, which will allow us to enjoy the thermal baths of Aguas Calientes.</p>
						</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/archaeological-complex-of-winaywayna.jpg" title="Archaeological complex of Wiñaywayna."><img src="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/archaeological-complex-of-winaywayna.jpg" alt="Archaeological complex of Wiñaywayna." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/archeological-site-of-intipunku.jpg" title="Archeological site of Intipunku."><img src="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/archeological-site-of-intipunku.jpg" alt="Archeological site of Intipunku." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/banos-termales-de-aguas-calientes.jpg" title="Hot Springs of Aguas Calientes."><img src="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/banos-termales-de-aguas-calientes.jpg" alt="Hot Springs of Aguas Calientes." class="img-responsive">
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
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<li>In the morning at 04:30 we will go to the Inca citadel of Machu Picchu in order to observe the sunrise. Getting to this magical place will be privileged and we can take the maximum time to take photos, meditate and get in touch with nature, before other tourists arrive at the Inca sanctuary of Machu Picchu, of course, it is for people who want to go and enjoy a bit more of Machu Picchu. After taking advantage of the tranquility of the Inca citadel of Machu Picchu, we will begin our guided tour (approx 2 ½ hours) through the Temple of the Sun, the Temple of the Three Windows, the Sun Clock, the Temple of the Condor and the garden Botanical and many more places. Then they will have free time to walk outside of "Machu Picchu" and the people who booked with the forecast to climb the mountains of Huaynapicchu and Machu Picchu mountain, continue with the visit where you can see the valleys and surrounding mountains The entire Inca citadel of Machu Picchu and also visit the Temple of the Moon and the famous Inca Bridge.In the afternoon we will return to the town of Aguas Calientes where we will take the train back to Ollantaytambo station and from there we will have a bus that will take us to the city of Cusco, arriving approximately at 9:00 p.m. to 10.15 p.m.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/machu-picchu.jpg" title="Archaeological Site of Machu Picchu"><img src="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/machu-picchu.jpg" title="Archaeological Site of Machu Picchu." alt="Sitio Arqueologica de Machu Picchu" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/temple of the moon.jpg" title="Temple of the Moon."><img src="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/temple of the moon.jpg" title="Temple of the Moon." alt="Templo de la Luna." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/sun temple.jpg" title="Sun Temple"><img src="../img/inca-trail-machu-picchu/camino-inca-corto-2-days-1-night/sun temple.jpg" title="Sun Temple." alt="../img/paquetes/camino inca/camino inca corto 2d 1n/d2/camino inca corto templo del sol.jpg" title="Sun Temple." class="img-responsive">
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


                <li><i class="icon-ok-circle-1"></i>In the morning look in the hotel according to the departure time of the train.</li>
                <li><i class="icon-ok-circle-1"></i>Transfer to Poroy Station or Ollantaytambo.</li>
                <li><i class="icon-ok-circle-1"></i>Train ticket Ollantaytambo Expedition class trip to Km104.</li>
                <li><i class="icon-ok-circle-1"></i>Entrance to Inca Trail and Machu Picchu.</li>
                <li><i class="icon-ok-circle-1"></i>Professional guide</li>
                <li><i class="icon-ok-circle-1"></i>1 night hotel in Aguas Calientes with breakfast.</li>
                <li><i class="icon-ok-circle-1"></i>1 lunch (lunch box) 1 dinner and 1 breakfast.</li>
                <li><i class="icon-ok-circle-1"></i>Train ticket Expedition back to Ollantaytambo 14h55 or 18h45.</li>
                <li><i class="icon-ok-circle-1"></i>Transfer by van from Ollantaytambo to Cusco</li>

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

            <li><i class="icon-cancel-circle-2"></i>Breakfast on day 1 and lunch on Day 2</li>
            <li><i class="icon-cancel-circle-2"></i>Visit the thermal baths of Aguas Calientes</li>
            <li><i class="icon-cancel-circle-2"></i>Does not include bus up and down Machu Picchu - Aguas Calientes.</li>
            <li><i class="icon-cancel-circle-2"></i>Tips</li>

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
            <li><i class="icon-plus-circled-2"></i>A backpack with a change of clothes for trekking.</li>
            <li><i class="icon-plus-circled-2"></i>Recommended: Blouses, Bermuda and some warm clothes for walking</li>
            <li><i class="icon-plus-circled-2"></i>Rain poncho.</li>
            <li><i class="icon-plus-circled-2"></i>Trekking shoes.</li>
            <li><i class="icon-plus-circled-2"></i>Camera, films and batteries</li>
            <li><i class="icon-plus-circled-2"></i>Hat or caps to protect</li>
            <li><i class="icon-plus-circled-2"></i>Sunscreen</li>
            <li><i class="icon-plus-circled-2"></i>Repellent</li>
            <li><i class="icon-plus-circled-2"></i>Toilet paper</li>
            <li><i class="icon-plus-circled-2"></i>Snacks: biscuits, energy bars, chocolate, etc.</li>
            <li><i class="icon-plus-circled-2"></i>Water bottle and sterilizing tablets</li>
            <li><i class="icon-plus-circled-2"></i>Original passport</li>
            <li><i class="icon-plus-circled-2"></i>Small towel</li>

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
						            
                    <li><i class="icon-lock"></i>The train Vistadome Service  (First Class (US $ 89.00)</li>
                    <li><i class="icon-lock"></i>Additional night in Aguas Calientes (U $ 40.00 Basic)</li>
                    <li><i class="icon-lock"></i>Additional entrance to Machu Picchu (US $ 60.00)</li>
                    <li><i class="icon-lock"></i>Bus ticket Machu Picchu - Aguas Calientes (US $ 15.00)</li>
                    <li><i class="icon-lock"></i>Tickets to climb to Waynapicchu mountain (U $ 70.00)</li>
                    <li><i class="icon-lock"></i>Staff, the tip should be covered with rubber, rent U $ 10.00</li>

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
							<td rowspan="3"><label class="centrar">$ <strong>400</strong></label></td>
							<td rowspan="3"><label class="centrar">$ <strong>380</strong></label></td> 
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