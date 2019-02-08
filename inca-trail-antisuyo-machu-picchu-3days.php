<?php
$nombre_paquete = 'Inca Trail Antisuyo Machu Picchu';
$numero_dias='3 Days and 2 Nights';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="The Inca trail Antisuyo is a great alternative for those who seek to escape the reserves of the Inca Trail and has a beautiful visual experience of the high Andean landscape for which we have daily departures. The Inca Trail Antisuyo is the only road that will start from the city of Cusco, where it was the traditional Inca trail used by the Incas to travel to the Sacred Valley of the Incas and also to the Inca palace Tupac Yupanqui which is located in the village of chinchero ";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$category_tour="Alternative Treks Cusco";
$url_category="/alternative-treks-cusco/";

$url_foto_seo="https://www.antisuyotrekperu.com/img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/sacsayhuaman-archaeological-complex.jpg";
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
            <div class="fill-tour" style="background-image:url('img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights.jpg');"></div>
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
                       Price from<span><sup>$</sup>370</span>For Person
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
					<p>The <strong>Inca trail</strong> Antisuyo is a great alternative for those who seek to escape the reserves of <strong>the Inca Trail</strong> and has a beautiful visual experience of the high <strong>Andean landscape</strong> for which we have daily departures.</p>
					<p>The <strong>Inca Trail Antisuyo</strong> is the only road that will start from the <strong>city of Cusco</strong>, where it was the traditional <strong>Inca trail</strong> used by the Incas to travel to the Sacred Valley of <strong>the Incas</strong> and also to the Inca palace <strong>Tupac Yupanqui</strong> which is located in the village of <strong>chinchero</strong> .</p>
					<p><strong>The Inca trail Antisuyo</strong> is the only recommended way to do all year round, without restrictions to any type of difficulties or prejudice.</p>
					<p>The <strong>Antisuyo</strong> road is one of the alternative ways of showing us the culture and customs of <strong>the Incas</strong>, because in the course of our trek we will live with the native inhabitants and descendants of the Incas.</p>
					<p>On <strong>the Antisuyo Road</strong> is included the second night of overnight in the town of <strong>Aguas Calientes</strong>, which is located near the Inca citadel of <strong>Machu Picchu</strong>, prices in the table is according to the category of hotels and type of accommodation.</p>
				</div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARY</span></h3>
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 1</span></h3> 
					<p>CUSCO - LAGUNA QORI COCHA - UMASBAMB</p>
				</div>
					<ul class="list_icons descripcion">
						<li>In the morning we will pick you up at your hotel at 7:00 am and then in 20 minutes we will arrive at the Sacsayhuaman Archaeological Park by the place called Chincana Grande (Big Cave), where we will begin our journey for four hours on a flat and quiet road. We will pass for Ñusta Pakana, Devil's Balcony, “Mirador del Cóndor” and Pukamoqo (4100 masl) along the way we will appreciate animals like: llamas, alpacas and guanacos that the inhabitants of the area raise, soon we will arrive at Qoricocha lake (lake Of gold) where we will have lunch at the lakeshore.On the way we can also appreciate the 5 highest mountains of the Cusco region, such as: The mountain Salkantay, Veronica, Chicon, Pitusiray and simply wonderful snowy Ausangate.In the afternoon we will descend downhill for two hours enjoying all the wonderful landscapes of this Andean region. In the end we will arrive to the town of Umasbamba, where we will also have the opportunity to visit the Sistine Temple of Umasbamba (3700 masl) to spend the night in the family home, then we will have time to visit the craft center of Umasbamba, Where local people will give us a demonstration of how they make their fabrics with natural colors and manually.</li>
					</ul>
					<div class="row magnific-gallery">
					<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/sacsayhuaman-archaeological-complex.jpg"title="Sacsayhuaman archaeological complex."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/sacsayhuaman-archaeological-complex.jpg" alt="Sacsayhuaman archaeological complex." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/lagoon-qori-cocha.jpg" title="Laguna qori cocha."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/lagoon-qori-cocha.jpg" alt="Laguna qori cocha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/capilla-sixtina de Umasbamba.jpg"title="The Sistine Chapel of Umasbamba."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/capilla-sixtina de Umasbamba.jpg" alt="The Sistine Chapel of Umasbamba." class="img-responsive">
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
					<p>UMASBAMBA FAMILY HOUSE - CHINCHERO - AGUAS CALIENTES</p>
				</div>
					<ul class="list_icons descripcion">
						<li>After the typical breakfast we will continue our walk along the second stretch of the Inca trail, starting with the archaeological complex of Chinchero and the most outstanding will be to observe the “Chincana Chica”, which possibly connected with the Temple of the Sun (Koricancha) located in the city of Cusco.We will continue our trek downhill by Inca roads of approximately 7 km until arriving at the Inca town of Urquillos (quechua village conformed by rustic houses built on constructions Incas). We will also see the corns varieties, among them the largest grain in the world, called "paraqay".We will also have the opportunity to get in touch with families and enjoy the traditional drink of the Andes, the chicha and then enjoy a delicious lunch.After lunch we will continue our journey for 1 hour to Ollantaytambo station, where we will take the train that will take us to the town of Aguas Calientes, where we will spend the night.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/costumbes-en-umasbamba.jpg" title="Customs in Umasbamba."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/costumbes-en-umasbamba.jpg" alt="Customs in Umasbamba." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/complejo-arqueologico-de-chinchero.jpg"title="Archaeological complex of Chinchero."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/complejo-arqueologico-de-chinchero.jpg" alt="Archaeological complex of Chinchero." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/recepcion-en-aguas-calientes.jpg"title="reception in hot springs."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/recepcion-en-aguas-calientes.jpg" alt="reception in hot springs." class="img-responsive">
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
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 3</span></h3> 
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<li>After breakfast at the hotel around 05:20 am, we will take the uphill bus to Machu Picchu, with the aim of arriving early to Machu Picchu to appreciate the sunrise and also take advantage of taking the first photos before Arrive other tourists.Then we will have a guided tour with our professional guide, to the entire archaeological complex of Machu Picchu, if we reach the time we can also climb to the “Puerta del Sol” and people who made the reservation to climb the mountain of Huayna Picchu will also continue the Climb after guiding.Once we finish our visit to the wonder of the world, we will return to the town of Aguas Calientes, to have lunch and wait for the train to return according to the schedule. The train journey lasts 1 hour 45 minutes until the town of ollantaytambo, on arrival in ollantaytambo we will be waiting for our private bus that will take us to the city of Cusco. The trip will last approximately one and a half hours.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/archaeological-complex-of-machu-picchu.jpg" title="Archaeological Complex of Machu Picchu."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/archaeological-complex-of-machu-picchu.jpg" alt="Archaeological Complex of Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/retorno-a-ollantaytambo.jpg" title="retorno a ollantaytambo."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/retorno-a-ollantaytambo.jpg" alt="retorno a ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/bus-de-regreso-a-cusco.jpg" title="Bus back to Cusco."><img src="../img/alternative-treks/inca-trail-antisuyo-machu-picchu-3-days-2-nights/bus-de-regreso-a-cusco.jpg" alt="Bus back to Cusco." class="img-responsive">
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
                      <li><i class="icon-ok-circle-1"></i>Transfer from your hotel to the starting place.</li>
                      <li><i class="icon-ok-circle-1"></i>2 lunches 2 breakfasts 2 dinners.</li>
                      <li><i class="icon-ok-circle-1"></i>Spanish professional guide.</li>
                      <li><i class="icon-ok-circle-1"></i>Transfer of Urquillos - Ollantaytambo.</li>
                      <li><i class="icon-ok-circle-1"></i>1 night in a family house (Umasbamba).</li>
                      <li><i class="icon-ok-circle-1"></i>1 night hotel in Aguas Calientes.</li>
                      <li><i class="icon-ok-circle-1"></i>Train (expedition service) 19:00 or 21:00</li>
                      <li><i class="icon-ok-circle-1"></i>Return train (expedition service) 6:20 p.m. or 7:00 p.m.</li>
                      <li><i class="icon-ok-circle-1"></i>Entrance to Machu Picchu for one day.</li>
                      <li><i class="icon-ok-circle-1"></i>Bus Aguas Calientes - Machu Picchu-Aguas calientes.</li>
                      <li><i class="icon-ok-circle-1"></i>Transfer Ollantaytambo - Cusco.</li>
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
                    <li><i class="icon-cancel-circle-2"></i>Breakfast on the first day and lunch on the last day.</li>
                    <li><i class="icon-cancel-circle-2"></i>Entrance to thermal baths in Aguas Calientes.</li>
                    <li><i class="icon-cancel-circle-2"></i>Travel insurance.</li>
                    <li><i class="icon-cancel-circle-2"></i>Other extras that are not included.</li>
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
						  <td>$ 390</td>
						  <td>$ 370</td> 
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
			include("includes/costados/alternative-walks.php");
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