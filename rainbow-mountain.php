<?php
$nombre_paquete = 'Machu Picchu';
$numero_dias=' 1 Día';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Machu Picchu en idioma español significa «Montaña Vieja» es nombre contemporáneo que se da a un antiguo poblado andino construida a mediados del siglo XV en el promontorio rocoso que une las montañas Machu Picchu y Huayna Picchu en la vertiente oriental de la cordillera central sur del Perú";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

$url_completo= "https://" . $host . $url;

$category_tour="Tours Machu Picchu";
$url_category="tours-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/tours-machu-picchu/cusco-machu-picchu-1-dia/templo-del-sol.jpg";

?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content="<?=$descripcion_tour?>">
    <meta name="author" content="Antisuyo trek Perú">
    <title><?php echo $nombre_completo_paquete ?> | <?=$category_tour ?> | Antisuyo Trek </title> 
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
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

                <?php   $url_s = "tours-machu-picchu/cusco-machu-picchu-1-dia.jpg";

        		 ?>
        <div class="fill-tour" style="background-image:url('img/slider/rainbow-montain.jpg');"></div>		 
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
                    <h1>rainbow mountain</h1> 
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main" class="hotel">
                        Price from<span><sup>$</sup>45</span> for person
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section> 
     <div id="position">
    <div class="container">
        <ol class="breadcrumb">
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" ><a href="/es/" itemprop="url"> <span itemprop="title"><i class="icon-home-1"></i></span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?=$url_category?>" itemprop="url"><span itemprop="title">rainbow mountain</span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">rainbow mountain</span></li>
        </ol>

    </div>
   </div>
    <div class="container margin_60">
    <div class="row ">
        <div class="col-md-9" id="single_tour_desc">
            <div id="single_tour_feat">
                <ul>
                    <li><i class="icon_set_1_icon-6"></i>Hotel</li>
                    <li><i class="icon_set_1_icon-21"></i>Coche</li>
                    <li><i class="icon_set_1_icon-25"></i>Tren</li>
                    <li><i class="icon_set_1_icon-24"></i>Paisajes</li>
                    <li><i class="icon_set_1_icon-26"></i>Bus</li>
                    <li><i class="icon_set_1_icon-4"></i>Maravilla</li>
                    <li><i class=" icon_set_1_icon-57"></i>Guiado</li>
                </ul>
            </div> 
            <div class="row">
                <div class="col-md-2">
                    <h3><span>DESCRIPCIÓN</span></h3>
                </div>
                <div class="col-md-10 descripcion"> 
					 <p>It is also called "The Mountain of the Rainbow", mountain of the 7 colors "The Colorful Hill" Rainbow Mountain Peru and often also referred to as "Colorful Mountain Peru", because the variety of names originated in the imagination of adventurous travelers and people who were close to the Ausangate Mountain, where it is part of the Peru Colorful Mountains. This natural wonder is a sample of the tourist riches we have in the Cusco region. It is also part of the Andes mountain range in Peru, which radiated indescribable emotion for having plateaus, streams, valleys and snow covered, nothing complements the greatness of this unique landscape of its kind. Also accompanied by Andean animals such as: Lamas, Alpacas, Andean birds, sheep and others. The mountain Colorful Peru, also presents us clearly Andean local people, whose happiness is contagious strange that is the visitor. This landscape shows the whole of one of the most beautiful geographical features of the Colorful Mountain, where the nature of having different ecological levels and tell the richness of minerals that houses its soil. For that and many other reasons, it was included by National Geographic as one of the 10 attractions that should be visited in Peru.

          The best time to visit the Colorful Mountain is from the month of April to November, since in this season it is dry and where the climate is   favorable to appreciate the Colorful Mountain and the blue sky that beautifies it to the environment of all the region the mountain that surrounds it. In the months of December to the month of Marco, it is already a rainy season, where it already starts to rain full day or it can fall snowy, so you need to get around the day to see the landscape of the Colorful Mountain.

           A total distance from Cusco to Mountain Colorful, they are more than 98 kilometers and the total distance of the walk on foot of the car park to   Mountain Colorful takes 1 hour and a half, almost 5 kilometers in total.</p> 
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
					<div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Day 1</span></h3> 
					<p>Rainbow Mountain peru</p>
				</div>
					<ul class="list_icons">
					<p >We will search for your hotel from 5am, then we will pass the south side of Cusco for a time of approximately 1 hour until arriving at the town of Cusipata, where we will have a good breakfast for a time of 30 minutes and then continue for 1 hour until reach the village of Wasipata. Parking area of cars which is located at (4,530msnm). From where we will leave with our walk by a path easily accessible for an estimated time of 1 ½ hours and soon we will reach the famous Peruvian Colored Mountains (Vinicunca Peru) where we will be able to appreciate the magical landscapes located at (5,200 m.s.n.m). After enjoying the wonder that our mother nature presents us, we will return by the same route, where our transportation awaits us and then we travel for 1 hour to have lunch, then we return to the city of Cusco, arriving at approximately 16:00.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/rainbow-mountain/Rainbow-Mountain.jpg" title="Montaña de Colores."><img src="img/rainbow-mountain/Rainbow-Mountain.jpg" title="Montaña de Colores." alt="Montaña de Colores." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/rainbow-mountain/vinicunca.jpg" title="Montaña de Colores."><img src="img/rainbow-mountain/vinicunca.jpg" title="Montaña de Colores." title="Montaña de Colores." alt="Montaña de Colores." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/rainbow-mountain/winicunca.jpg" title="Montaña de Colores." ><img src="img/rainbow-mountain/winicunca.jpg" title="Montaña de Colores." title="Montaña de Colores." alt="Montaña de Colores." class="img-responsive">
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
                    <h3><span>INCLUDED</span></h3>
                </div>
                <div class="col-md-10">
					 <ul class="list_icons"> 
						<li><i class="icon-ok-circle-1"></i>Informative meeting at the agency before the trip.</li>
						<li><i class="icon-ok-circle-1"></i>Transportation from Cusco - Cusipata - Wasipata -Cusco.</li>
						<li><i class="icon-ok-circle-1"></i>Professional guide in Spanish.</li>
						<li><i class="icon-ok-circle-1"></i>Food: 01 breakfast, 01 lunch, (optional vegetarian meal).</li>
						<li><i class="icon-ok-circle-1"></i>Emergency oxygen bottle. (Personal).</li>
						<li><i class="icon-ok-circle-1"></i>First aid kit.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Extra drinks.</li>
						<li><i class="icon-cancel-circle-2"></i>tips.</li>
						<li><i class="icon-cancel-circle-2"></i>Travel insurance.</li> 
					</ul>
                </div>
            </div>
           
            <form method="post" action="reserva.php">
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
							<h4><span><strong>Economy Class</strong> </span></h4>
						</th>
						</tr> 
					</thead>
					<tbody>
					<tr> 
						  <td><strong>PERSON</strong></td>
						  <td><strong>ADULT</strong></td>
						  <td><strong>STUDENT</strong></td>
						</tr>  
						<tr> 
						  <td><strong>PRICE</strong></td>
						  <td>$ 45</td>
						  <td>$ 45</td>
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
		include("includes/costados/mejores-caminatas.php");   
        include("includes/costados/paquetes-machu-picchu.php"); 
        include("includes/costados/paquetes-peru.php");
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


<script src="../assets/validate.js"></script> 
  </body>
</html>