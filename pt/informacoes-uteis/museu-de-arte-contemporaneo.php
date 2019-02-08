<?php 
$url= $_SERVER["REQUEST_URI"];
$sin_categoria = substr($url,22);
$url_limpia = str_replace("-", " ", $sin_categoria);
$url_fin = ucwords($url_limpia); 
?>
<!DOCTYPE html>

<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$url_fin ?> - Antisuyo Trek Perú - Agência de viagens e turismo no Peru">

    <meta name="author" content="Antisuyo Trek Perú">
    <title>Blog Museu de Arte Contemporanea | Antisuyo Trek Perú | Agencia de viajes y turismo en Perú</title> 
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../../img/apple-touch-icon-144x144-precomposed.png">
<link href="../../css/base.css" rel="stylesheet">
    <link href="../../css/blog.css" rel="stylesheet">    
    <link href="../../css/slider-pro.min.css" rel="stylesheet">
    <link href="../../css/date_time_picker.css" rel="stylesheet">
    <link href="../../css/owl.carousel.css" rel="stylesheet">
	<link href="../../css/owl.theme.css" rel="stylesheet"> 
    <script src="../../js/angular.min.js"></script>   
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->        
</head>
<body>
<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]--> 
    <div class="layer"></div> 
      <?php include("includes/menu-blog.php"); ?>
      <section class="slider-tours">

        <img src="/pt/img/chinchero-tour.jpg" class="img-responsive" style="margin:auto;" width="" alt="">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star voted"></i></span>
                    <h1>Museu de Arte Contemporanea</h1>
                    <span>Museu</span>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main" class="hotel">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End section -->

    <div id="position-none">
            <div class="container">
                        <ul> 
                        <li><a href="machu-picchu">Museu</a></li> 
                        </ul>
            </div>
    </div><!-- End Position -->
    
    <div id="position">
    <div class="container">
        <ol class="breadcrumb">
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" ><a href="/pt/" itemprop="url"> <span itemprop="title"><i class="icon-home-1"></i></span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title">Informacoes Uteis</span></a></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title"><?=$url_fin ?></span></li>
        </ol>

    </div>
   </div>
    <div class="container margin_60">
    <div class="row">
        <div class="col-md-9" id="single_tour_desc">
            <div class="row">
                <div class="col-md-2">
                    <h3>Descrição</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <h4>Museu de Arte Contemporáneo</h4>
                    <p>ue ele fundada em 1995 a partir do patrocínio do Presidente da Câmara e a doação de 100 obras de artistas locais pelo coletor <strong>Dr. Luis Rivera Dávalos</strong>. Atualmente, possui mais de 280 obras de renomados artistas locais, nacionais e internacionais. Sua obra mais antiga corresponde óleo <strong>Remigia Mendoza</strong>: "<strong>Rio Vilcanota</strong>" (1897). Ele tem três salas de exposição no Palácio Municipal, um na Capela de <strong>San Bernardo e sala</strong> de exposições de artesanato no pátio principal da Prefeitura.</p> 
                </div> 
            </div>
            <hr> 
			<div class="row">
                <div class="col-md-2">
                    <h3>Endereço</h3>
                </div>
                <div class="col-md-10">  
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul class="list-inline">
                                <li><i class=""></i>Avenida El Sol 103, Galerias turísticos.</li> 
                            </ul>
                        </div>
                    </div> 
                </div> 
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                    <h3>Teléfono</h3>
                </div>
                <div class="col-md-10 descripcion">  
                    <p>22-3601.</p> 
                </div><!-- End col-md-9  -->
            </div>
			<hr>
            <div class="row">
                <div class="col-md-2">
                      <h3>Horario</h3>
                </div>
                <div class="col-md-10 descripcion">
                    <p>9AM –10PM</p> 
                </div><!-- End col-md-9  -->
            </div>
            
          	<hr>
            
            <div class="row">
                <div class="col-md-2">
                    <h3>Galería</h3>
                </div>
                <div class="col-md-10">  
                     <div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo01.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo01.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo02.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo02.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo03.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo03.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo04.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo04.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo05.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo05.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo06.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo06.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo07.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo07.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo08.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo08.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo09.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo09.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo10.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo10.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo11.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo11.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo12.jpg" title="Museu de Arte Contemporanea."><img src="../../img/blog/museo-de-arte-contemporaneo/museo-de-arte-contemporaneo12.jpg" alt="Museu de Arte Contemporanea." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div> 
						</div>    
					</div>
            <h5><strong>Fonte: </strong>Wikipedia</h5>  
                </div><!-- End col-md-9  -->
            </div> 
        </div><!--End  single_tour_desc-->
        <aside class="col-md-3">


				<?php include("includes/costados/tags.php"); ?>
				<hr> 
				<h4>info@antisuyotrekperu.com</h4>
				<hr>
				<?php include("includes/atencion-cliente.php"); ?> 
     </aside>
    </div>
    </div>
    <?php include("includes/pie.php"); ?>
<div id="toTop"></div>
<div id="overlay"></div> 
<script src="../../js/jquery-1.11.2.min.js"></script>
<script src="../../js/common_scripts_min.js"></script>
<script src="../../js/functions.js"></script> 
<script src="../../js/icheck.js"></script>
 <script src="../../js/jquery.validate.js"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Date and time pickers -->
<script src="../../js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
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
</script> 
<script src="../../js/bootstrap-datepicker.js"></script>
<script>
   $("#booking_hotel").validate();
  $('input.date-pick').datepicker();
</script>  
<script src="../../js/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){   
		$(".carousel").owlCarousel({
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
		});
    });
</script>
<!--Review modal validation -->
<script src="../../assets/validate.js"></script>
  </body>
</html>