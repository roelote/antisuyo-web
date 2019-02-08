<?php
$nombre_paquete = 'Cusco Puno Arequipa Lima';
$numero_dias='12 dias e 11 noites';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Pacotes Peru: Cusco - Puno - Arequipa - Lima 12 dias 11 noites é um pacote idial para você conecher aos principais pontos turisticos do país, começando pela capital, Lima, visitando aos principais sitios turiticos, como: a City Tour pela cidade colonial e moderna, o complexo arqueológico de Huaca Pucllana, circuito magico das aguas e gastronomia peruana.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Passeios Peru";
$url_category="passeios-peru";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complexo-arqueologico-de-ollantaytambo.jpg";

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

                <?php   $url_s = "pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites.jpg";

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
                       Preço desde<span><sup>$</sup>1175</span>Por pessoa
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
                    <li><i class="icon_set_1_icon-25"></i>Treinar</li>
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
					 <p>Pacotes Peru: <strong>Cusco</strong> - <strong>Puno</strong> - <strong>Arequipa</strong> - <strong>Lima</strong> 12 dias 11 noites é um pacote idial para você conecher aos principais pontos turisticos do país, começando pela capital, <strong>Lima</strong>, visitando aos principais <strong>sitios turiticos</strong>, como: a <strong>City Tour</strong> pela cidade colonial e moderna, o complexo arqueológico de <strong>Huaca Pucllana</strong>, circuito magico das aguas e <strong>gastronomia peruana</strong>.</p>					 
					 <p>Após continuamos a cidade de <strong>Cuzco</strong>, conhecido "o umbigo do mundo e o <strong>império dos Incas</strong>" visitar aos principais sítios arqueológicos, como: <strong>City tours</strong> arqueológico, ao <strong>Vale Sagrado dos incas</strong> e opção de pernoitar a noite no povoado de <strong>Aguas Calientes</strong> ao lado de uma das maravilhas do mundo moderno: <strong>Machu Picchu</strong>.</p>              		
              		<p>Seguindo a rota entramos na rota de <strong>Cusco</strong> a <strong>Puno</strong>, chamado de "<strong>Rota do Sol</strong>", com uma série de pontos importantes e finalmente visitaremos ao <strong>Lago Titicaca</strong> - <strong>Puno</strong>, <strong>lago navegável</strong> mais alto do mundo, onde conheceremos aos principais ilhas flutuantes de <strong>Uros</strong> e <strong>Taquile</strong>.</p>
              		<p>Continuando com o pacote, vamos ver a famosa Cidade Branca de <strong>Arequipa</strong>, com a sua bela <strong>Plaza de Armas</strong> e grandes museus. Em seguida vamos continuar ao <strong>Colca Canyon</strong> um dos cânions mais profundos do mundo e apreciar o voo dos Condores no <strong>Colca Canyon</strong>.</p>               		
                </div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>RECEPÇÂO EM CUSCO.</p>
				</div>
					<ul class="list_icons">
                   <li><i class="icon-ok-squared"></i>Recepção no aeroporto de Cusco e translado ao Hotel.</li>
                   <li><i class="icon-ok-squared"></i>Na hora de chegada ao hotel tem que descansar pelo menos 2 horas para a aclimatação na altura.</li>
                   <li><i class="icon-ok-squared"></i>Pernoite em Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/transfer-to-the-hotel.jpg" title="Traslado del Aeropuerto."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/transfer-to-the-hotel.jpg" alt="Traslado del Aeropuerto." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/dia-libre-para-la-aclimatacion.jpg" title="Dia libre para la aclimatación."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/dia-libre-para-la-aclimatacion.jpg" alt="Dia libre para la aclimatación." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/pernoite-em-cusco.jpg" title="Pernocte en Cusco."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/pernoite-em-cusco.jpg" alt="Pernocte en Cusco." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 2</span></h3> 
					<p>CUSCO - CITY TOUR ARQUEOLÓGICO</p>
				</div>
					<ul class="list_icons">
                     <li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                     <li><i class="icon-ok-squared"></i>A manhã livre, para aproveitar conhecer aos museus de Cusco.</li>
                     <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel as 13h30.</li>
                     <li><i class="icon-ok-squared"></i>Saída ao City Tour Arqueológico as 14h00 até 18h30.</li>
                     <li><i class="icon-ok-squared"></i>Visitas ao Templo do Sol Qoricancha, aos complexos arqueológicos de Sacsayhuaman, Kenko, Puca Pucara e Tambomachay.</li>
                     <li><i class="icon-ok-squared"></i>Pernoite em Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/templo-do-sol-coricancha.jpg" title="templo do sol coricancha."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/templo-do-sol-coricancha.jpg" alt="templo do sol coricancha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complexo-arquelogico-de-sacsayhuaman.jpg" title="Complexo arquelogico de sacsayhuaman."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complexo-arquelogico-de-sacsayhuaman.jpg" alt="Complexo arquelogico de sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complejo-arqueologico-de-qenqo.jpg" title="Complejo arqueologico de qenqo."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complejo-arqueologico-de-qenqo.jpg" title="Complejo arqueologico de qenqo." alt="complejo arqueologico de qenqo." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 3</span></h3> 
					<p>CUSCO - VALE SAGRADO DOS INCAS / CONEXÃO AGUAS CALIENTES</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu Hotel as 08h15.</li>
                        <li><i class="icon-ok-squared"></i>Saída ao Vale Sagrado as 08h40.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Aos Mercados de Corão e Mercado de Pisaq, ao complexo arqueológico de Pisaq e parque arqueológico de Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>Pela tarde pegaremos o Trem de Ollantaytambo – Aguas Calientes as 16h36 ou 19h00.</li>
                        <li><i class="icon-ok-squared"></i>Recepção na estação de Aguas Calientes e translado ao hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complexo-arqueologico-de-pisac.jpg" title="Complejo arqueologico de pisac."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complexo-arqueologico-de-pisac.jpg" alt="Complejo arqueologico de pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complexo-arqueologico-de-ollantaytambo.jpg" title="complejo arqueologico de ollantaytambo."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complexo-arqueologico-de-ollantaytambo.jpg" alt="complejo arqueologico de ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/valle-de-los-sagrado.jpg" title="Valle sagrado de los incas."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/valle-de-los-sagrado.jpg" alt="Valle sagrado de los incas." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 4</span></h3> 
					<p>CUSCO - MACHU PICCHU FULL DAY</p>
				</div>
					<ul class="list_icons">
                 <li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                 <li><i class="icon-ok-squared"></i>Pela manhã a saída será às 05h20, para pegar o primeiro ônibus até Machu Picchu.</li>
                 <li><i class="icon-ok-squared"></i>Porque Machu Picchu abre a porta as 06h00 e poderiam ingressar para aproveitar ver o nascer do Sol.</li>
                 <li><i class="icon-ok-squared"></i>Depois visitarão à Machu Picchu com nosso guia profissional por volta de 2 horas.</li>
                 <li><i class="icon-ok-squared"></i>Após terá tempo livre para tirar fotos e passar mais tempo em Machupicchu.</li>
                 <li><i class="icon-ok-squared"></i>Pela tarde descida de Machu Picchu até Àguas Calientes e aguardaremos nosso trem da volta.</li>
                 <li><i class="icon-ok-squared"></i>Depois pegaremos o trem de Àguas Calientes atè Ollantaytambo as 16h22 ou 18h20.</li>
                 <li><i class="icon-ok-squared"></i>Na hora de chegada ao povoado de Ollantaytambo, estará aguardando nosso transporte para levar até Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/sitio-arqueologica-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/sitio-arqueologica-de-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/o-intiwatana.jpg" title="O Intihuatana."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/o-intiwatana.jpg" alt="O Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/templo-do-sol.jpg" title="Templo do Sol."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/templo-do-sol.jpg" alt="Templo do Sol." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 5</span></h3> 
					<p>CUSCO – PUNO / ROTA DO SOL.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                       <li><i class="icon-ok-squared"></i>Passaremos por seu hotel as 06h30.</li>
                       <li><i class="icon-ok-squared"></i>Saída de Ônibus Executivo as 07h00.</li>
                       <li><i class="icon-ok-squared"></i>Visitas: Capela sextina de Andahuaylillas, Raqchi (Templo de Wiracocha), Sicuani (Almoco Buffet), La Raya (nevados) e o museu de Pucará.</li>
                       <li><i class="icon-ok-squared"></i>Recepção em Puno e translado ao hotel.</li>
                       <li><i class="icon-ok-squared"></i>Pernoite em Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/capilla-sixtina-andahuaylillas.jpg" title="Capilla sixtina andahuaylillas."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/capilla-sixtina-andahuaylillas.jpg" alt="Capilla sixtina andahuaylillas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complejo-arqueoogico-de-raqchi.jpg" title="Complejo arqueoogico de raqchi."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/complejo-arqueoogico-de-raqchi.jpg" alt="Complejo arqueoogico de raqchi." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/recepcion-en-puno.jpg" title="recepción en puno."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/recepcion-en-puno.jpg" alt="recepción en puno." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 6</span></h3> 
					<p>PUNO - LAGO TITICACA</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel às 07h00.</li>
                        <li><i class="icon-ok-squared"></i>Nossa embarcação sairá as 07h30.</li>
                        <li><i class="icon-ok-squared"></i>Visitaremos as principais Ilhas Flutuantes de Uros e a Ilha de Taquile, onde entraremos em contato com os moradores do lago Titicaca, que apresentarão os tradições e costumes do lago sagrado de Titicaca.</li>
                        <li><i class="icon-ok-squared"></i>Após retornaremos a Puno, por volta das 17h00.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/desayuno.jpg" title="Desayuno en su Hotel."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/desayuno.jpg" alt="Desayuno en su Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/ilhas-flutuantes-de-uros.jpg" title="Islas Flotantes de Uros."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/ilhas-flutuantes-de-uros.jpg" alt="Islas Flotantes de Uros." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/ilhas-flutuantes-de-taquile.jpg" title="Islas Flotantes de taquile."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/ilhas-flutuantes-de-taquile.jpg" alt="Islas Flotantes detaquile." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 7</span></h3> 
					<p>PUNO - AREQUIPA</p>
				</div>
					<ul class="list_icons">
                  <li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                  <li><i class="icon-ok-squared"></i>Pela manhã livre para conhecer a cidade.</li>
                  <li><i class="icon-ok-squared"></i>Na tarde as 14h00 buscaremos no seu Hotel.</li>
                  <li><i class="icon-ok-squared"></i>Saída de ônibus as 15h00 e chega em Arequipa as 21h00.</li>
                  <li><i class="icon-ok-squared"></i>Recepção na rodoviária e translado ao Hotel.</li>
                  <li><i class="icon-ok-squared"></i>Pernoite em Arequipa.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/desayuno.jpg" title="Desayuno en su Hotel."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/desayuno.jpg" alt="Desayuno en su Hotel" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/explorar-la-ciudad-de-puno.jpg" title="Mañana libre para explorar la ciudad de Puno."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/explorar-la-ciudad-de-puno.jpg" alt="Mañana libre para explorar la ciudad de Puno." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/traslado-a-su-respectivo-hotel.jpg" title="traslado a su respectivo hotel."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/traslado-a-su-respectivo-hotel.jpg" alt="traslado a su respectivo hotel." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 8</span></h3> 
					<p>AREQUIPA - CITY TOUR PANORAMICO.</p>
				</div>
					<ul class="list_icons">
                   <li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                   <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel as 08h40.</li>
                   <li><i class="icon-ok-squared"></i>Siada ao City Tour Panorâmico que começa as 09h00 até as 14h00.</li>
                   <li><i class="icon-ok-squared"></i>Visita: A Catedral de Arequipa, Mirador de Carmen Alto, Mirador de Yanahuara, Incalpaca, Sachaca, Balneário de Tingo, Mansion de Fundador, Molinho de Sabandia e Andenes de Paucarpata.</li>
                   <li><i class="icon-ok-squared"></i>Pernoite em Arequipa.</li>
                    </ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/desayuno.jpg" title="Desayuno en su hotel."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/desayuno.jpg" alt="Desayuno en su hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/catedral-de-arequipa.jpg" title="Catedral de Arequipa."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/catedral-de-arequipa.jpg" alt="Catedral de Arequipa." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/el-mirador-de-carmen-alto.jpg" title="El Mirador de Carmen Alto."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/el-mirador-de-carmen-alto.jpg" alt="El Mirador de Carmen Alto." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 9</span></h3> 
					<p>AREQUIPA - CHIVAY</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel as 08h00.</li>
                        <li><i class="icon-ok-squared"></i>Saída ao Canyon de Colca as 08h30.</li>
                        <li><i class="icon-ok-squared"></i>No percurso da viagem, passaremos pelos povoados históricos e alto andinos da região de Arequipa, onde nosso guia dará toda as informação da cultura inca e também das culturas pre incas que habitaram nesses.</li> sítios.
                        <li><i class="icon-ok-squared"></i>A Chegada a Chivay será por volta das 12h30 e translado ao hotel.</li>
                        <li><i class="icon-ok-squared"></i>Na tarde pode aproveitar ir aos banhos termais La Calera.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Chivay.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/viaje-a-chivay.jpg" title="Viaje a Chivay."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/viaje-a-chivay.jpg" alt="viaje a Chivay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/canon-del-colca.jpg" title="Cañón del Colca."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/canon-del-colca.jpg" alt="Cañón del Colca." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/banos-termales-de-la-calera.jpg" title="baños termales de La Calera."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/banos-termales-de-la-calera.jpg" alt="baños termales de La Calera." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 10</span></h3> 
					<p>CANYON DE COLCA - AREQUIPA</p>
				</div>
					<ul class="list_icons">
    						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                            <li><i class="icon-ok-squared"></i>Pela manhã passara nosso guia a buscar por seu hotel.</li>
                            <li><i class="icon-ok-squared"></i>A saída a Canyon de Colca será por volta das 07h30.</li>
                            <li><i class="icon-ok-squared"></i>Visita. No percurso da viagem, visitaremos aos povoados de Chivay, Canyon mais profundo e observar o vôo dos Condores.</li>
                            <li><i class="icon-ok-squared"></i>Retorno a Chivay as 12h00 e depois vamos retornar de Chivay – Arequipa as 13h00.</li>
                            <li><i class="icon-ok-squared"></i>Chegada em Arequipa será as 17h00.</li>
                            <li><i class="icon-ok-squared"></i>Pernoite em Arequipa.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/desayuno.jpg" title="Desayuno en el Hotel."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/desayuno.jpg" title="Sitio Arqueologica de Machu Picchu" alt="Desayuno en el Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/vuelo-de-condores.jpg" title="observan el vuelo de los cóndores."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/vuelo-de-condores.jpg" alt="observan el vuelo de los cóndores." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/pernoite-em-arequipa.jpg" title="Pernocte en Arequipa."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/pernoite-em-arequipa.jpg" alt="Pernocte en Arequipa." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 11</span></h3> 
					<p>AREQUIPA – LIMA – CITY TOUR</p>
				</div>
					<ul class="list_icons">
					<li><i class="icon-ok-squared"></i>Café da manhã no hotel.</li>
                    <li><i class="icon-ok-squared"></i>Translado Hotel – Apto em Arequipa.</li>
                    <li><i class="icon-ok-squared"></i>Recepção no Aeroporto de Lima e Translado ao Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Pela tarde City Tour na cidade começa as 14h00 até 18h00.</li>
                    <li><i class="icon-ok-squared"></i>Visita: Ao complexo arqueológico de Huacapucllana, praça principal, praça San Martin, palácio do governo, Templo de San Francisco, San Isidro, Miraflores, parque do Amor e Larcomar.</li>
                    <li><i class="icon-ok-squared"></i>Pela noite visitará o Circuito Mágico das aguas desde as 18h15 até 20h00 (opcional).</li>
                    <li><i class="icon-ok-squared"></i>Pernoite em Lima.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/lima-colonial.jpg" title="Lima Colonial."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/lima-colonial.jpg" alt="Lima Colonial." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/huaca-pucllana.jpg" title="ruinas de Huaca Pucllana."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/huaca-pucllana.jpg" alt="ruinas de Huaca Pucllana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/circuito-magico-de-aguas.jpg" title="Circuito Mágico de aguas."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/circuito-magico-de-aguas.jpg" alt="Circuito Mágico de aguas." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 12</span></h3> 
					<p>LIMA – TRASLADO.</p>
				</div>
					<ul class="list_icons">
					<li><i class="icon-ok-squared"></i>Café da manhã no hotel.</li>
                    <li><i class="icon-ok-squared"></i>Translado ao Aeroporto 3h antes da saída de seu voo.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/desayuno.jpg" title="Café da manhã no seu hotel."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/desayuno.jpg" alt="Café da manhã no seu hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/partida-do-hotel.jpg" title="partida do hotel."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/partida-do-hotel.jpg" alt="partida do hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/transferir-para-o-aeroporto.jpg" title="Transferir para o aeroporto."><img src="img/pacotes-peru/cusco-puno-arequipa-y-lima 12-dias-11-noites/transferir-para-o-aeroporto.jpg" alt="Transferir para o aeroporto." class="img-responsive">
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
                    <h3><span>INCLUI</span></h3>
                </div>
                <div class="col-md-10">
					 <ul class="list_icons"> 
						<li><i class="icon-ok-circle-1"></i>Translado Aeroporto - Hotel - Aeroporto em (Cusco e Lima).</li>
                        <li><i class="icon-ok-circle-1"></i>Translado Rodoviária – Hotel – Rodoviária em (Puno e Arequipa).</li>
                        <li><i class="icon-ok-circle-1"></i>Transporte Turístico para cada Passeio.</li>
                        <li><i class="icon-ok-circle-1"></i>Guia profissional para cada passeio.</li>
                        <li><i class="icon-ok-circle-1"></i>Passeios em Cusco: City Tour Arqueológico, Vale Sagrado e Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Passeios em Puno: Ilhas Flutuantes de Uros e Taquile.</li>
                        <li><i class="icon-ok-circle-1"></i>Passeio Rota do Sol Cusco – Puno.</li>
                        <li><i class="icon-ok-circle-1"></i>Passeios em Arequipa: City Tour e Canyon de Colca 2 dias 1 noite.</li>
                        <li><i class="icon-ok-circle-1"></i>Passeio em Lima City Tour Pela cidade Moderna e Colonial.</li>
                        <li><i class="icon-ok-circle-1"></i>3 Noites Hotel em Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>1 Noite Hotel em Águas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>2 Noites Hotel em Puno.</li>
                        <li><i class="icon-ok-circle-1"></i>1 noite Hotel em Lima.</li>
                        <li><i class="icon-ok-circle-1"></i>4 noites Hotel em Arequipa.</li>
                        <li><i class="icon-ok-circle-1"></i>Ingresso a Machu Picchu para 1 dia.</li>
                        <li><i class="icon-ok-circle-1"></i>Serviço de Trem Ida e Volta Ollantaytambo – Aguas Calientes - Ollantaytambo (CLASSE TURISTICO).</li>
                        <li><i class="icon-ok-circle-1"></i>Ônibus Subida e Descida Àguas Calientes - Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Translado Ollantaytambo – Cusco.</li>
					</ul>
                </div>
            </div> 
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>NÃO INCLUI</span></h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-cancel-circle-2"></i>Café da manhã no 1º dia e almoço do último dia.</li>
                        <li><i class="icon-cancel-circle-2"></i>Ônibus de subida e descida de Machu Picchu.</li>
                        <li><i class="icon-cancel-circle-2"></i>Outros que não estão acima.</li>
                        <li><i class="icon-cancel-circle-2"></i>Gorjetas.</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Sugestões</h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-vcard-1"></i>Levar os documentos pessoais (Passaporte ou RG).</li>
						<li><i class="icon-vcard-1"></i>Os estudantes devem levar a carteirinha internacional.</li>
						<li><i class="icon-sun-filled"></i>Protetor solar em época de Sol.</li>
						<li><i class="icon-bug"></i>Repelente para mosquitos em Machu Picchu.</li>
						<li><i class="icon-suitcase"></i>A mochila tem pelo menos 40 litros.</li>
						<li><i class="icon-drizzle"></i>Capa de chuva, em época chuvosa.</li>
						<li><i class="icon-cloud-wind"></i>Roupa adequada para época de frio.</li>
						<li><i class="icon-battery"></i>Uma bateria extra para sua câmera.</li>
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
						<li><i class="icon-aboveground-rail"></i>Para o Trem Vistadome Primeira Classe, adicionar  89 dólares.</li>
						<li><i class="icon-ticket"></i>Entrada a Huaynapicchu 30 dólares (solicitar com antecedência, por que as vagas são limitadas).</li>
						<li><i class="icon-lock"></i>Serviço do guia no idioma português.</li>
						<li><i class=" icon-plus-circled-2"></i>Outros.</li>
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
					   <h3>Mapa</h3>
                </div>  
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1CZCzgcy_8Gpod10HTy42Y878hYY" target="_blank"><img src="img/ver mapa.png"></a>  
                </div>    
            </div>
            <hr>
            <form method="post" action="reserva.php">
            <div class="row">
				<div class="col-md-2">
					<h3><span>Preço</span></h3>
				</div>
			<div class="col-md-10">
				<div class=" table-responsive">
				<table class="table table-striped">
				<thead>
				<tr>
				<th colspan="8">
				<h4><span>Paquete + Hotel+Bus+Tren(Clase turístico)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATEGO-<br>RÍA</strong></td>
				<td><strong>HOTELES<br> EN LIMA</strong></td>
				<td><strong>HOTELES<br> EN ARE-<br>QUIPA</strong></td>
				<td><strong>HOTELES<br> EN PUNO</strong></td>
				<td><strong>HOTELES<br> EN CUSCO</strong></td>
				<td><strong>HOTELES<br> EN AGUAS CALIEN-<br>TES</strong></td> 
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE&#160</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONÓ-<br>MICO</h5></td>
				<td><i class="icon-play-5"></i>The Place Hotel<br><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Ensueño</td>
				<td><i class="icon-play-5"></i>Hotel Helena</td>
				<td><i class="icon-play-5"></i>Hotel Prisma</td>
				<td><i class="icon-play-5"></i>Hotel Continental</td>
				<td>$ 1260</td>
				<td>$ 1195</td>  
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍS-<br>TICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Carmel<br> <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>H. Posada Monasterio</td>
				<td><i class="icon-play-5"></i>H.<br>Sol Plaza Inn</td>
				<td><i class="icon-play-5"></i>H. S.A Internacional</td>
				<td><i class="icon-play-5"></i>Hotel Inka Town</td>
				<td>$ 1425</td>
				<td>$ 1305</td> 
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPE-<br>RIOR</h5></td>
				<td><i class="icon-play-5"></i>San Agustin Exclusive<br><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Terra Viva</td>
				<td><i class="icon-play-5"></i>Hotel Royal INN</td>
				<td><i class="icon-play-5"></i>San Agusntin Dorado</td>
				<td><i class="icon-play-5"></i>Hotel Intitpunku Mapi</td>
				<td>$ 1590</td>
				<td>$ 1410</td> 
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
			include("includes/costados/melhores-pacotes.php");
			include("includes/costados/pacotes-machu-picchu.php");
			include("includes/costados/pacotes-peru.php");
			include("includes/costados/pacotes-alternativos.php");
			include("includes/costados/pacotes-mistos.php");
			include("includes/costados/melhores-pacotes.php");
			include("includes/costados/pacotes-machu-picchu.php");
			include("includes/costados/pacotes-alternativos.php");
			include("includes/costados/pacotes-peru.php");
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