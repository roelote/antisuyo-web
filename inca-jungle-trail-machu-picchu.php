<?php
$nombre_paquete = 'Jungle Inca Trail';
$numero_dias='4 Days and 3 Nights';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="The Inca Jungle Machu Picchu is a selection of adventures between cycling and walking toward the Inca city of Machu Picchu 4D / 3N, this tour is made bike the first day and then be an Inca trail through the jungle, it is a extraordinary and wonderful journey, where you can enjoy different activities and native, such as drying of coffee plants, banana plantations and sacred coca leaf.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$category_tour="Alternative Treks Cusco";
$url_category="/alternative-treks-cusco/";

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

      	<div class="fill-tour" style="background-image:url('img/alternative-treks/camino-inca-jungle-machu-picchu-4-days-3-nights.jpg');"></div>

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
                       Price from<span><sup>$</sup>300</span>For Person
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
					<p>The <strong>Inca Jungle Machu Picchu </strong>is a selection of adventures between cycling and walking toward <strong>the Inca city</strong> of <strong>Machu Picchu</strong> 4D / 3N, this tour is made bike the first day and then be an Inca trail through <strong>the jungle</strong>, it is a extraordinary and wonderful journey, where you can enjoy different activities and native, such as drying of <strong>coffee plants</strong>, <strong>banana</strong> plantations and <strong>sacred coca </strong>leaf.</p>
					<p><strong>The Inca jungle</strong> <strong>Machu Picchu</strong> is a great alternative for people who want a quiet and pleasant place, also to avoid problems of altitude, a little different to have more contact with the local people living on the other side of town in <strong>the region of Cusco</strong>. This option is full of adrenaline, the views and the views are unforgettable!</p>
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
						<li>We will pick you up at your hotel around 07:00 am, during the trip we will observe the highest mountains in the region, such as the snowy Veronica, Pitusiray located at 5800 msnm, we appreciate the picturesque villages of Poroy, Chinchero and Ollantaytambo, The open Malaga, mystical point to thank the Pachamama, where the whole group will perform the ceremony, before the start of the bike.From this point we will be able to observe the whole of the Convention Valley, we will go to San Luis which is the place where our guide will give us the bicycles, there we will start one of the most beautiful excursions in the world compared with only Coroico in Bolivia .We will make Down Hill, taking advantage of the landscapes of the Convention valley, we appreciate the different species of flora and fauna, in addition, during the way we can visit the archaeological complex of Wamanmarka and the neighboring villages of the area.In the afternoon we will arrive at the village of Santa María, which is located at 1430 msnm, there we will enjoy a dinner and spend our first night.Meals: Lunch and Dinner.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/the-abra-de-malaga.jpg" title="The abra de malaga."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/the-abra-de-malaga.jpg" alt="The abra de malaga." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/bicycle-riding.jpg" title="bicycle riding."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/bicycle-riding.jpg" alt="bicycle riding" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/valley-of-the-convention.jpg" title="Valley of the Convention."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/valley-of-the-convention.jpg" alt="Valley of the Convention." class="img-responsive">
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
						<li>Breakfast based on papaya, banana, orange and other natural fruits of the area.We will begin our excursion, crossing places of dense vegetation, we will be able to observe the process of cultivation and drying of the coffee, of the coca leaf; We will also find the famous Kapac Ñan, a network of Inca trails preserved to this day intact, where our ancestor used to move to the valley of the convention and the sacred city of Vilcabamba. In the afternoon We will arrive at the famous and wonderful medicinal thermal baths of Cocalmayo, considered one of the best thermal baths of all Peru, located in the town of Santa Teresa. Here we will stay in the lodging and then we will have the dinner; During dinner our guide will coordinate and inform us about the next day's tour.Meals: Breakfast, Lunch and Dinner.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/valley-of-the-sacred.jpg" title="valley of the sacred."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/valley-of-the-sacred.jpg" alt="valley of the sacred." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/banos-termo-medicinales-de-cocalmayo.jpg" title="Therapeutic medicinal baths of Cocalmayo."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/banos-termo-medicinales-de-cocalmayo.jpg" alt="Therapeutic medicinal baths of Cocalmayo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/pueblo-de-aguas-calientes.jpg" title="Village of Aguas Calientes."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/pueblo-de-aguas-calientes.jpg" alt="Village of Aguas Calientes." class="img-responsive">
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
						<li>After breakfast, we will continue our walk from the town of Santa Teresa to the town of hydroelectric, during the course of the trip we will be able to appreciate the sacred river of vilcanota and also diverse agricultural products. On the way we will also find the electricity production plant and we will reach the town of hydroelectric. Then we will have a 2 to 3 hour walk to the town of Aguas Calientes. Route that is fascinating by diversity of flora and fauna, also if we are lucky we can see the gallito of rocks and the wild bird peacock. On arrival at the village of Aguas Calientes we will go directly to the hotel to spend the night, where it is located near the sanctuary of Machu Picchu.Meals: Breakfast, Lunch and Dinner.</li>
					</ul>					
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/tren-a-la-hidroelectrica.jpg" title="Train to the Hydroelectric."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/tren-a-la-hidroelectrica.jpg" alt="Train to the Hydroelectric." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/pueblo-de-aguas-calientes.jpg" title="Village of Aguas Calientes."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/pueblo-de-aguas-calientes.jpg" alt="Village of Aguas Calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/machu-picchu.jpg" title="Archeological site of machu picchu."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/machu-picchu.jpg" alt="Archeological site of machu picchu." class="img-responsive">
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
						<li>After breakfast, at 04h30 we will begin the ascent to Machu Picchu, we will do approximately 1 hour 30, with the aim of arriving early to Machu Picchu to appreciate the sunrise and also take advantage of taking the first photos before the other tourists arrive .Then we will have a guided tour with our professional guide, to the entire archaeological complex of Machu Picchu, if we reach the time we can also climb to the Puerta del Sol and people who made the reservation to climb the mountain of Huayna Picchu will also continue the Climb after guiding.Once we finish our visit to the wonder of the world, we will return to the town of Aguas Calientes, to have lunch and wait for the train to return according to the schedule. The train journey lasts 1 hour 45 minutes until the town of ollantaytambo, on arrival in ollantaytambo we will be waiting for our private bus that will take us to the city of Cusco. The trip will last approximately one and a half hours.</li>
                        <li>Maximum altitude: 2,040 masl.</li>
                       <li> Minimum altitude: 1,800 masl.</li>
                       <li> Walking time: 5 to 6 hours.</li>
					<li>Overnight Camping: Tents.</li>
					 <li>Meals: Breakfast, Lunch and Dinner.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/machu-picchu.jpg" title="Archaeological Site of Machu Picchu."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/machu-picchu.jpg" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/alternative-treks/inca-jungle-trail-machu-picchu/pueblo-de-aguas-calientes.jpg" title="salida de Aguas Calientes."><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/pueblo-de-aguas-calientes.jpg" alt="salida de Aguas Calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href=".img/alternative-treks/inca-jungle-trail-machu-picchu/return-to-cusco-by-bus.jpg" title="bus back to cusco"><img src="img/alternative-treks/inca-jungle-trail-machu-picchu/return-to-cusco-by-bus.jpg" alt="bus back to cusco" class="img-responsive">
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

					    <li><i class="icon-ok-circle-1"></i>Tourist transport Cusco - Puerto de Málaga</li>
					    <li><i class="icon-ok-circle-1"></i>Bikes with disc brake and suspension</li>
					    <li><i class="icon-ok-circle-1"></i>Food 3 lunches, 3 breakfasts and 3 dinners</li>
					    <li><i class="icon-ok-circle-1"></i>3 nights accommodation</li>
					    <li><i class="icon-ok-circle-1"></i>Entrance fee to Machu Picchu</li>
					    <li><i class="icon-ok-circle-1"></i>Official Guide (English)</li>
					    <li><i class="icon-ok-circle-1"></i>Train back (Aguas Calientes - Ollantaytambo)</li>
					    <li><i class="icon-ok-circle-1"></i>First Aid Case</li>
					    <li><i class="icon-ok-circle-1"></i>Transfer Ollantaytambo - Cusco</li>

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
					    <li><i class="icon-cancel-circle-2"></i>Bus ticket from Aguas Calientes - Machu Picchu (optional)</li>
					    <li><i class="icon-cancel-circle-2"></i>Entrance to the thermal baths (10 soles)</li>
					    <li><i class="icon-cancel-circle-2"></i>Tips</li>
					    <li><i class="icon-cancel-circle-2"></i>Additional Services</li>
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
						  <td>$ 320</td>
						  <td>$ 300</td> 
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