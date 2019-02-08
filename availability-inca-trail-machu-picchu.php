<?php

$nombre_completo_paquete='Availability Inca Trail Machu Picchu';
$descripcion_tour="Availability of spaces in the Inca Trail 2018. Book your availability Inca Trail 2019, promotions and discounts with Nc Travel Cusco.";
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
                   
                </div>
            </div>
        </div>
    </div>
    </section>
    <div id="position">
    <div class="container">
        <ol class="breadcrumb">
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" ><a href="/" itemprop="url"> <span itemprop="title"><i class="icon-home-1"></i></span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title"><?=$nombre_completo_paquete ?></span></li>
        </ol>

    </div>
   </div>
       
    <div class="container margin_60">

    <div class="row">
            <div class="col-md-9"><iframe src="https://www.antisuyotrekperu.com/trilhaincadisponibilidade2019.php" width="100%" height="540" frameborder="0"></iframe>


    <div class="text-center w-100 my-5">
        <a href="classic-inca-trail-machu-picchu" class=" btn-danger btn-lg px-5">Booking</a>
    </div>

<p>            The Inca Trail to Machu Picchu will be closed the month of February by arrangement of the Ministry of Culture, due to which maintenance, conservation and cleaning work will be done. The entrance to the Inca Classic Trail will be reactivated from March 1st.</p>

<p>In this section, you can check the availability of the Inca Trail Machupicchu, which is provided by the Ministry of Culture. Here some information should take into account:</p>

    <ul>
        <li>The month of February is rainy season, so the Ministry closes the Inca Trail.</li>
        <li>The availability we use in the online system is the same for any other agency, since this information is directly provided by the Ministry of Culture, only for travel agencies authorized to operate on the Inca trail Machu Picchu.</li>
        <li>The number of places is very variable. Normally, travel agency operators book up to 30 to 60 places, do not be surprised that in a minute you can exhaust the spaces available ..</li>
        <li>The availability is managed exclusively by the Ministry of Culture. Only they can manage and authorize access to the Inca Trail Machu Picchu.</li>
        <li>The Trail Incase only 500 enabled spaces per day, within which chargers and guides are included.</li>
        <li>The spaces shown in the system correspond to the Inca Classica Trail 4 days and the Inca Trail Short 2 days. But for the short Inca trail 2 days and 1 night, our company always has availability until 1 week before your departure for the Inca Trail.</li>
    </ul>

<p>In case the Inca classic Machu Picchu trail was not available for 4 days and 3 nights, we have other alternative trails that also end at the archaeological complex of Machu Picchu, to which you can contact our representatives:</p>
</div>   

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