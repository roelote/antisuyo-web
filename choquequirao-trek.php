<?php
$nombre_paquete = 'Choquequirao Trek';
$numero_dias='4 Days and 3 Nights';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Choquequirao is an archaeological center whose name means: 'cradle of gold' located between the chain of mountains of the Andes, like: snowy Salkantay and snowy of Pumasillo, and under the jurisdiction of the district of Santa Teresa, Province of the Convention, Department of Cuzco, in the south of Peru.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$category_tour="Alternative Treks Cusco";
$url_category="/alternative-treks-cusco/";
$url_foto_seo="https://www.antisuyotrekperu.com/img/alternative-treks/camino-choquequirao-4-days%203-nights/cachora.jpg";
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

      	<div class="fill-tour" style="background-image:url('img/alternative-treks/camino-choquequirao-4-days-3-nights.jpg');"></div>

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
                       Price from<span><sup>$</sup>430</span>For Person
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
					 <p><strong>Choquequirao</strong> is an archaeological center whose name means: "cradle of gold" located between the chain of mountains of the Andes, like: snowy <strong>Salkantay</strong> and snowy of <strong>Pumasillo</strong>, and under the jurisdiction of the district of <strong>Santa Teresa</strong>, Province of the Convention, Department of <strong>Cuzco</strong>, in the south of Peru.</p>                    
                    <p>The archaeological complex of <strong>Choquequirao</strong> consists of buildings and terraces distributed on different levels, from the lowest level Sunch'u Pata to the highest truncated top, which was leveled and surrounded with stones to form a platform with an area of approximately 150 square meters. According to the chronicles <strong>Choquequirao</strong> was the last <strong>Inca</strong> refuge from 1536.</p>                    
                    <p><strong>Choquequirao</strong> (sometimes also like <strong>Choquequirao</strong> or Choquekiraw) is known as the "sacred sister" of <strong>Machu Picchu</strong> because of its structural and architectural similarity. Recently, being partially excavated, it has awakened the interest of the <strong>Peruvian</strong> government to recover even more the complex and to turn it into a more accessible alternative for the tourists interested in knowing more about <strong>the Inca culture</strong>.</p>
                    <p><strong>Choquequirao</strong> is located 24 kilometers from the town of Cachora, with a downhill and zigzag road, with wonderful landscapes, where you can take advantage of the flight of the condors in the <strong>Apurimac</strong> <strong>Canyon</strong>.</p>
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
						<li>We will depart at 04:00 am from the city of Cusco, to go to Cachora, where we will arrive at 07:30 a.m., there we will have our breakfast and then we will prepare for our trek. After a two-hour hike, we will reach Capuliyoc (2915 masl) from where we will descend to Coca Masana (2330 masl), where the climate will be drier and warmer, so the flora and fauna will begin to change and we will have the opportunity To take advantage of seeing the flight of condors and the canyon of Apurimac. Finally we will arrive at Playa Rosalina (1550 masl) that is next to the Apurímac River where we will settle and camp for the night.Meals: Lunch and Dinner.</li>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/cachora.jpg" title="Localidad de cachora."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/cachora.jpg" title="Localidad de cachora." alt="Location of puppy." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/coca-masana.jpg" title="Coca Masana."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/coca-masana.jpg" alt="Coca Masana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/playa-rosalina.jpg" title="Rosalina beach."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/playa-rosalina.jpg" alt="Rosalina beach." class="img-responsive">
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
					<p>PLAYA ROSALINA - CHOQUEQUIRAO</p>
				</div>
					<ul class="list_icons descripcion">
						<li>After breakfast we will start our trekking (considered the most impressive of the trip), we will go uphill along a zigzag path that will last approximately 5 hours, to reach the place called marampata where we will have lunch, in the path of our trek we will take advantage See varieties of orchids and birds. We will continue our hike for two hours until we reach the archaeological site of Choquequirao. In the afternoon we will enjoy seeing the sunset and the flight of the condors to the surroundings of the archaeological complex of Choquequirao. At the end our camp will be installed near the archaeological complex of Choquequirao.Meals: Breakfast, Lunch and Dinner.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/marampata.jpg" title="Marampata."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/marampata.jpg" alt="Marampata." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/we-will-appreciate-varieties-of-orchids.jpg" title="We will appreciate varieties of orchids."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/we-will-appreciate-varieties-of-orchids.jpg" alt="We will appreciate varieties of orchids." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/Archaeological complex of choquequirao.jpg" title="Archaeological complex of shockquirao."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/Archaeological complex of choquequirao.jpg" alt="Archaeological complex of choquequirao." class="img-responsive">
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
					<p>ARCHAEOLOGICAL COMPLEX OF CHOQUEQUIRAO - RAYAMPATA</p>
				</div>
					<ul class="list_icons descripcion">
						<li>During this day we will explore the archaeological complex of Choquequirao, touring all the most important places, such as: the main temples, platforms, military zone and the astronomical center among others.The guide will explain the history and importance of the archaeological site of Choquequirao.In the afternoon we begin our walk, return to the beach Rosalina that will last approximately three hours of walking downhill, once arriving at the area we will settle there to spend the night.Meals: Breakfast, Lunch and Dinner.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/arrival-to-choquequirao.jpg" title="Arrival to Choquequirao."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/arrival-to-choquequirao.jpg" alt="Arrival to Choquequirao." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/archaeological-complex-of-choquequirao.jpg" title="Archaeological complex of Choquequirao."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/archaeological-complex-of-choquequirao.jpg" alt="Archaeological complex of Choquequirao." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/exploration in-choquequirao.jpg" title="Exploration in Choquequirao."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/exploration in-choquequirao.jpg" alt="Exploration in Choquequirao." class="img-responsive">
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
					<p>PLAYA ROSALINA - CACHORA - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<li>After our early breakfast, we will start our hike uphill for a time of 5 hours, until we reach the area of Capuliyoc, suitable place to observe the flight of the condors of different sizes.We will have two more hours of walking until arriving at Cachora village, where we will wait for the bus to return to the city of Cusco.Meals: Breakfast.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/capuliyoc-area.jpg" title="Capuliyoc Area."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/capuliyoc-area.jpg" alt="Capuliyoc Area." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/return-to-cachora.jpg" title="Return to Cachora."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/return-to-cachora.jpg" alt="Return to Cachora." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/alternative-treks/camino-choquequirao-4-days 3-nights/bus-back-to-cusco.jpg" title="Bus back to Cusco."><img src="../img/alternative-treks/camino-choquequirao-4-days 3-nights/bus-back-to-cusco.jpg" alt="Bus back to Cusco." class="img-responsive">
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

					    <li><i class="icon-ok-circle-1"></i>Pick up from your hotel and transfer by bus to Cachora (Beginning of the ride)</li>
					    <li><i class="icon-ok-circle-1"></i>Professional Bilingual Guide</li>
					    <li><i class="icon-ok-circle-1"></i>Food 3 breakfast / 3 lunches / 3 dinners</li>
					    <li><i class="icon-ok-circle-1"></i>The kitchen equipment</li>
					    <li><i class="icon-ok-circle-1"></i>Horseman and Horse (which carry the tents, food and cooking equipment)</li>
					    <li><i class="icon-ok-circle-1"></i>Transport return Cachora - Cusco</li>
					    <li><i class="icon-ok-circle-1"></i>Tents and double thermal insulation for up to 3 people</li>
					    <li><i class="icon-ok-circle-1"></i>Tables, chairs, dining tent, kitchen</li>
					    <li><i class="icon-ok-circle-1"></i>Oxygen Bottle</li>
					    <li><i class="icon-ok-circle-1"></i>First aid kit</li>


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
    					<li><i class="icon-cancel-circle-2"></i>Extra horse to carry your personal objects 1-4 days. $ 25 per day.</li>
    					<li><i class="icon-cancel-circle-2"></i>Sleeping bag 25 USD.</li>
    					<li><i class="icon-cancel-circle-2"></i>Tip</li>
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
						  <td>$ 450</td>
						  <td>$ 430</td> 
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
  
<script src="../assets/validate.js"></script> 
  </body>
</html>