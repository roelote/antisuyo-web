<?php
$nombre_paquete = 'Maras Moray e Salineras';
$numero_dias='1 dia';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Visitar belos povos incas y casas colônias, apreciar os tesouros que esta terra sagrada esconde uma agradável e singular excursão. Maras – Moray – Salineras. ";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Trihas Alternativas";
$url_category="trihas-alternativas";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/trilhas-alternativas/maras-moray-y-salineras-1-dia/la-mina-de-sal-de-maras.jpg";


?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?php echo $nombre_completo_paquete ?> | <?=$category_tour ?> | Antisuyo Trek </title>

    <meta name="author" content="Antisuyo Trek Perú">
	<meta name="description" content="<?=$descripcion_tour?>">
 
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

                <?php   $url_s = "trilhas-alternativas/maras-moray-salt-mines-1-day.jpg";

        		 ?>
        <div class="fill-tour" style="background-image:url('img/<?=$url_s?>');"></div>		 
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
                       Preço Desde<a href="#formulario"><span>inbox</span></a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
             <div id="position">
    <div class="container">
        <ol class="breadcrumb">
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" ><a href="/pt/" itemprop="url"> <span itemprop="title"><i class="icon-home-1"></i></span></a></li>
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
                    <li><i class="icon_set_1_icon-21"></i>Carro</li>
                    <li><i class="icon_set_1_icon-25"></i>Trem</li>
                    <li><i class="icon_set_1_icon-24"></i>Paisagens</li>
                    <li><i class="icon_set_1_icon-26"></i>Autocarro</li>
                    <li><i class="icon_set_1_icon-4"></i>Maravilha</li>
                    <li><i class=" icon_set_1_icon-57"></i>Guiado</li>
                </ul>
            </div> 
            <div class="row">
                <div class="col-md-2">
                    <h3><span>DESCRIÇÃO</span></h3>
                </div>
                <div class="col-md-10 descripcion"> 
					 <p>Visitar belos <strong>povos incas</strong> y <strong>casas colônias</strong>, apreciar os tesouros que esta <strong>terra sagrada</strong> esconde uma agradável e singular excursão. <strong>Maras</strong> –<strong> Moray</strong> – Salineras. </p>
                </div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>CUSCO - MARAS - MORAY - SALINERAS</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Localizado ao oeste de Cusco a 3300 metros. Acima do mar. Onde poderão apreciar a cordilheira de Urubamba e os picos nevados de "Verônica" a (5682 m.a.n.m) e "Chikón" (5530 m.a.n.m), A ocupação do lugar começou quando os nobres da realeza inca foram despojados e expulsados de seus palácios que tinham em Qosqo (cusco) e eles tiveram que estabelecer em outras cidades pequenas como Maras. Tem uma igreja colonial feita de adobe (tijolos de barro), típica arquitetura dos povoados da serra, o interior da igreja alberga pinturas da Escola cusquenha.</p> 
                        <p>Situa-se a 7 km ao sudoeste de Maras. Moray e um centro arqueológico e único em seu gênero, são gigantescas depressões naturais ou buracos na superfície do solo, que foram usados para construir terraços agrícolas em contorno ou terraços tem seus canais de irrigação, é, portanto e um protótipo de invernadeiro ou estação biológica experimental bastante avançada para a época que ajudou a homem sul americano para poder domesticar as plantas. Os povoadores da zona herdado estas artes hoje em dia 60% dos produtos vegetais são produzidos em esta zona para o consumo do homem andino Em na atualidade no peru se conhece um milhar e meio de variedades de batatas, cento e cinqüenta de milho, e muitos outros produtos.</p>                        
                        <p>Ou "Mina de Sal”, localizada a noroeste do povoado de Maras,este lugar esta constituídos por cerca de 3.000 poços pequeno, com uma área média de 5 metros quadrados durante a estação seca são preenchidos ou regados a cada três dias com água salgada que vem de um afluente natural situado no topo dos poços quando a água se evapora se, a sal fica e se solidifica gradualmente. Então a sal é bem moída e granulada, em seguida, ensacado em sacos plásticos e enviados para os mercados a região, hoje em dia a sal e iodado para seu consumo que não é prejudicial para a saúde.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/maras-moray-y-salineras-1-dia/la-mina-de-sal-de-maras.jpg" title="La Mina de Sal de maras."><img src="img/trilhas-alternativas/maras-moray-y-salineras-1-dia/la-mina-de-sal-de-maras.jpg" alt="La Mina de Sal de maras." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/maras-moray-y-salineras-1-dia/visita-a-las-salineras.jpg" title="As salinas de Maras."><img src="img/trilhas-alternativas/maras-moray-y-salineras-1-dia/visita-a-las-salineras.jpg" alt="As salinas de Maras." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/maras-moray-y-salineras-1-dia/arqueologico-de-moray.jpg" title="Centro arqueológico de Moray."><img src="img/trilhas-alternativas/maras-moray-y-salineras-1-dia/arqueologico-de-moray.jpg" alt="Centro arqueológico de Moray." class="img-responsive">
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
                    <h3><span>INCLUE</span></h3>
                </div>
                <div class="col-md-10">
					 <ul class="list_icons"> 
						<li><i class="icon-ok-circle-1"></i>Transporte Turístico.</li>
                        <li><i class="icon-ok-circle-1"></i>Serviço de guia oficial em Inglês e Espanhol.</li>
					</ul>
                </div>
            </div> 
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>NÃO INCLUE</span></h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-cancel-circle-2"></i>Alimentação.</li>
                        <li><i class="icon-cancel-circle-2"></i>Boleto Turístico.</li>
                        <li><i class="icon-cancel-circle-2"></i>Serviços extras.</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Sugerencia</h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-vcard-1"></i> Llevar sus documentos (pasaporte o cédula de identidad).</li>
						<li><i class="icon-vcard-1"></i> Los estudiantes deben llevar carné de identificación de estudiante internacional (ISIC CARD).</li>
						<li><i class="icon-sun-filled"></i> Protector solar.</li>
						<li><i class="icon-bug"></i> Repelente para insectos.</li>
						<li><i class="icon-suitcase"></i> La mochila tiene que ser máximo 40 litros.</li>
						<li><i class="icon-drizzle"></i> Poncho de lluvia.</li>
						<li><i class=" icon-cloud-wind"></i> Ropa adecuada para la temporada de frío.</li>
						<li><i class="icon-battery"></i> Una batería adicional para su cámara.</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Opcional</h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-aboveground-rail"></i> Tren Vistadome Primera Clase agregar $ 69.</li>
						<li><i class="icon-ticket"></i> Entrada a Huayna Picchu $ 20. (solicitar con anticipación).</li>
						<li><i class="icon-lock"></i> Servicio Privado.</li>
						<li><i class=" icon-plus-circled-2"></i> Otros.</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Mapa</h3>
                </div>  
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1YbHEQLzF3rAsdUTAaq6CehY3JRY" target="_blank"><img src="img/ver mapa.png"></a>  
                </div>
            </div>
            <hr>
            <form id="formulario" method="post" action="reserva.php">
            <div class="row">
				<div class="col-md-2">
					<h3><span>Preço</span></h3>
				</div>
			<div class="col-md-10"> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input name="envioreserva" type="submit" value="ENVIAR RESERVA / INBOX" class="btn_1" id="submit-contact">         
          	 <?php include("includes/forma-de-pago.php"); ?> 
			</div>
			</div>
            </form>
        </div>
        <br>
        <aside class="col-md-3">   
        <?php
		include("includes/costados/melhores-pacotes.php");
		include("includes/costados/pacotes-machu-picchu.php");
		include("includes/costados/pacote-plus.php");
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