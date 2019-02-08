<?php

$nombre_completo_paquete='Cusco Machu Picchu Full Day';
$descripcion_tour="Machu Picchu in Spanish means 'Old Mountain' is a contemporary name given to an ancient Andean settlement built in the middle of the XV century on the rocky promontory that links the mountains Machu Picchu and Huayna Picchu on the eastern slope of the south central mountain range Peru.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$category_tour="Tours Machu Picchu";
$url_category="/tours-machu-picchu/";

$url_foto_seo="https://".$host."/img/tours-machu-picchu/machu-picchu-full-day/archaeological-complex-of-machu-picchu.jpg";

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
<!--       -->
    <link href="../css/date_time_picker.css" rel="stylesheet">
<!--   -->


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
         <div class="fill-tour" style="background-image:url('img/tours-machu-picchu/machu-picchu-full-day.jpg');"></div>
         
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
                       Price from<span><sup>$</sup>270</span>For Person
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
					 <p><strong>Machu Picchu</strong> in Spanish means "<strong>Old Mountain</strong>" is a contemporary name given to an ancient Andean settlement built in the middle of the XV century on the rocky promontory that links the mountains <strong>Machu Picchu</strong> and <strong>Huayna Picchu</strong> on the eastern slope of the south central <strong>mountain range Peru.</strong></p>
					<p><strong>Machu Picchu</strong> is located at 2490 masl, altitude of its main square, where its original name would have been Picchu or Piccho, finally called by the surrounding <strong>mountains Machu Picchu</strong>.</p>
					<p>According to documents from the mid-sixteenth century, <strong>Machu Picchu</strong> would have been one of the rest homes of <strong>Pachacútec</strong>, ninth Inca of <strong>Tahuantinsuyo</strong> between 1438 and 1470. However, some of its best constructions and the obvious ceremonial character of the main access road to The llaqta or <strong>Machu Picchu</strong>, would prove that it was used as a religious sanctuary.</p>
					<p><strong>Machu Picchu</strong> has been on UNESCO's World Heritage List since 1983, as part of an entire cultural and ecological complex known as<strong> the Historic Sanctuary of Machu Picchu</strong>. On July 7, 2007, <strong>Machu Picchu</strong> was declared one of the Seven Wonders of the Modern World at a ceremony held in <strong>Lisbon</strong>, <strong>Portugal</strong>, with the participation of one hundred million voters worldwide, choosing <strong>Machu Picchu</strong> as one from them.<strong>Machu Picchu</strong> is considered at the same time a masterpiece of architecture and engineering. Its peculiar architectural and scenic features have made it one of the most popular tourist destinations on the planet.</p>
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARY</span></h3>
                </div>
                <div class="col-md-10"> 
                 <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 1</span></h3> 
					<p>CUSCO - MACHU PICCHU</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>We will pick you up at your hotel at 04:00 a.m.</li>
                        <li><i class="icon-ok-squared"></i>We will take our bus that will take us from Cusco to Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>We will take the Ollantaytambo - Aguas Calientes train at 06:10 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Reception in Aguas Calientes at 7:50 a.m.</li>
                        <li><i class="icon-ok-squared"></i>Guided tour in Machu Picchu for 2 hours.</li>
                        <li><i class="icon-ok-squared"></i>Free time to take photos and rest inside the park of Machu Picchu.</li>
                        <li><i class="icon-ok-squared"></i>In the afternoon we will return from Machu Picchu - Aguas Calientes</li>
                        <li><i class="icon-ok-squared"></i>To wait for the return train from Aguas Calientes - Ollantaytambo: 18:20 or 19:00.</li>
                        <li><i class="icon-ok-squared"></i>Transfer from Ollantaytambo - Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/machu-picchu-full-day/archaeological-complex-of-machu-picchu.jpg" title="Archaeological Complex of Machu Picchu."><img src="../img/tours-machu-picchu/machu-picchu-full-day/archaeological-complex-of-machu-picchu.jpg" title="Archaeological Complex of Machu Picchu." alt="Archaeological Complex of Machu Picchu" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/machu-picchu-full-day/the-intihuatana.jpg" title="The Intihuatana"><img src="../img/tours-machu-picchu/machu-picchu-full-day/the-intihuatana.jpg" title="The Intihuatana." title="The Intihuatana" alt="El Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../img/tours-machu-picchu/machu-picchu-full-day/the-sun-temple.jpg" title="Sun Temple."><img src="../img/tours-machu-picchu/machu-picchu-full-day/the-sun-temple.jpg" title="Sun Temple" title="Sun Temple." alt="Sun Temple." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Transfer from your hotel to Ollantaytambo.</li>
                        <li><i class="icon-ok-circle-1"></i>Professional guides in Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrance to Machupicchu for 1 day.</li>
                        <li><i class="icon-ok-circle-1"></i>Train service in class EXPEDITION (To come and go).</li>
                        <li><i class="icon-ok-circle-1"></i>Bus Aguas Calientes - Machu Picchu- Aguas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>Transfer in our transport from Ollantaytambo - Cusco.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Travel insurance.</li>
						<li><i class="icon-cancel-circle-2"></i>Others not mentioned above.</li> 
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=13RiYfHolprzz_2Y1GSH8Iim8MH4" target="_blank"><img src="/img/see map.png"></a>  
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
						  <td>$ 290</td>
						  <td>$ 270</td> 
						</tr>    
					  </tbody> 
					</table> 
				</div> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input name="envioreserva" type="submit" value="CONTACT" class="btn_1" id="submit-contact">            
          	 <?php include("includes/forma-de-pago.php"); ?> 
			</div>
			</div>
            </form> 
        </div>
        <br> 
        <aside class="col-md-3">   
        <?php
			include("includes/costados/best-walks.php");
			include("includes/costados/packages-peru.php");
			include("includes/costados/alternative-walks.php");
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
<!--    -->
<script src="../js/functions.js"></script>
<!-- <script src="../js/jquery.sliderPro.min.js"></script> -->
<!-- <script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#Img_carousel' ).sliderPro({
			width: 960,
			height: 500,
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: false,
			smallSize: 500,
			startSlide: 0,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: false
		});
	});
</script> -->
<script src="../js/bootstrap-datepicker.js"></script>
<script>
  $('input.date-pick').datepicker('setDate', 'today');
</script>
<!--    -->
<!--   -->
<script src="../assets/validate.js"></script> 
  </body>
</html>