<?php
$nombre_paquete = 'Cusco Clássico com Pernoite';
$numero_dias='4 dias e 3 noites';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Pacote Cusco Clássico com Pernoite Machu Picchu 4 dias e 3 noites, é uma maneira maravilhosa para explorar o santuário histórico de Machu Picchu, como a cidade de Aguas Calientes fica perto de Machu Picchu, que facilitam levá-los muito cedo para Machu Picchu para ver o nascer do sol e tirar fotos com poucas pessoas.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Passeios Machu Picchu";
$url_category="passeios-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/vale-sagrado-dos-incas.jpg";

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

    <meta name="author" content="Antisuyo trek Perú">
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

                <?php   $url_s = "passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites.jpg";

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
                        Preço desde<span><sup>$</sup>455</span>Por pessoa
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
					 <p>Pacote Cusco Clássico com Pernoite <strong>Machu Picchu</strong> 4 dias e 3 noites, é uma maneira maravilhosa para explorar o santuário histórico de <strong>Machu Picchu</strong>, como a cidade de Aguas Calientes fica perto de <strong>Machu Picchu</strong>, que facilitam levá-los muito cedo para <strong>Machu Picchu</strong> para ver o nascer do sol e tirar fotos com poucas pessoas.</P>
				    <p>Acredita-se que <strong>Machu Picchu</strong> teve uma população móvel como a maioria dos llactas Incas, variando entre 300 e 1.000 pessoas pertencentes a uma elite (possivelmente membros da Panaca de Pachacutec.</p>
              		<p><strong>Machu Picchu</strong> está na Lista do Património Mundial da Unesco desde 1983, como parte de um todo cultural e ecológico, conhecido sob o nome de Santuário Histórico de <strong>Machu Picchu</strong>.</p>
              		<p><strong>Machu Picchu</strong> está en la Lista del Patrimonio de la Humanidad de la Unesco desde 1983, como parte de todo un conjunto cultural y ecológico, conocido bajo la denominación de Santuario Histórico de <strong>Machu Picchu</strong>.</p><p>Em 07 de julho de 2007 <strong>Machu Picchu</strong> foi declarado uma das Sete Maravilhas do Mundo Moderno, numa cerimónia em Lisboa, Portugal, que teve a participação de uma centena de milhões de eleitores em todo o mundo, a escolha de <strong>Machu Picchu</strong> como uma deles.</p>               		
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>RECEPÇÃO EM CUSCO / CITY TOUR ARQUEOLÓGICO</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Recepção no aeroporto de Cusco e Translado ao Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Aclimatação na altura.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel as 13h30</li>
                        <li><i class="icon-ok-squared"></i>Saída ao City Tour Arqueológico as 13h45 até as 18h30</li>
                        <li><i class="icon-ok-squared"></i>Visita ao Templo do Sol Qoricancha e as ruinas de Sacsayhuaman, Kenko, Pucapucara e Tambomachay.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Cusco</li>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/complexo-arqueologico-de-sacsayhuaman.jpg"title="Complexo Arqueológico de Sacsayhuaman."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/complexo-arqueologico-de-sacsayhuaman.jpg" alt="Complexo Arqueológico de Sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/complexo-arqueologico-de-qenqo.jpg" title="Complexo Arqueológico de Qenqo."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/complexo-arqueologico-de-qenqo.jpg" alt="Complexo Arqueológico de Qenqo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/complexo-arqueologico-de-tambomachay.jpg" title="Complexo Arqueológico de  Tambomachay."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/complexo-arqueologico-de-tambomachay.jpg" alt="Complexo Arqueológico de  Tambomachay." class="img-responsive">
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
					<p>CUSCO - VALE SAGRADO DOS INCAS / CONEXÃO AGUAS CALIENTES</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu Hotel as 08h15.</li>
                        <li><i class="icon-ok-squared"></i>Saída ao Vale Sagrado as 08h40.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Aos Mercados de Corão e Mercado de Pisaq, ao complexo arqueológico de Pisaq e ao parque arqueológico de Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>Pela tarde pegaremos o Trem de Ollantaytambo – Aguas Calientes as 19h00 ou 21h00.</li>
                        <li><i class="icon-ok-squared"></i>Recepção na estação de Aguas Calientes e translado ao hotel, de acordo a chegada do trem.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/vale-sagrado-dos-incas.jpg" title="Vale Sagrado dos Incas."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/vale-sagrado-dos-incas.jpg" alt="Vale Sagrado dos Incas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/complexo-arqueologico-de-pisac.jpg" title="Complexo Arqueológico de Pisac."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/complexo-arqueologico-de-pisac.jpg" alt="Complexo Arqueológico de Pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/complexo-arqueologico-de-ollantaytambo.jpg" title="Complexo Arqueológico de Ollantaytambo."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/complexo-arqueologico-de-ollantaytambo.jpg" alt="Complexo Arqueológico de Ollantaytambo." class="img-responsive">
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
					<p>MACHU PICCHU FULL DAY</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pela manhã a saída será às 05h20, para pegar o primeiro ônibus até Machu Picchu.</li>
                        <li><i class="icon-ok-squared"></i>Porque Machu Picchu abre a porta as 06h00 e poderiam ingressar para aproveitar ver o nascer do Sol.</li>
                        <li><i class="icon-ok-squared"></i>Depois visitarão à Machu Picchu com nosso guia profissional por volta de 2 horas.</li>
                        <li><i class="icon-ok-squared"></i>Após terá tempo livre para tirar fotos e passar mais tempo em Machupicchu.</li>
                        <li><i class="icon-ok-squared"></i>Pela tarde pegaremos o ônibus descida de Machu Picchu até Àguas Calientes, para aguardar nosso trem da volta.</li>
                        <li><i class="icon-ok-squared"></i>Depois pegaremos o trem de Àguas Calientes atè Ollantaytambo as 14h55 ou 18h20</li>
                        <li><i class="icon-ok-squared"></i>Na hora de chegada ao povoado de Ollantaytambo, estará aguardando nosso transporte para levar até Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/sitio-arqueologica-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/sitio-arqueologica-de-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/o-intihuatana.jpg" title="O Intihuatana."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/o-intihuatana.jpg" alt="O Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/templo-do-sol.jpg" title="Templo do Sol."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/templo-do-sol.jpg" alt="Templo do Sol." class="img-responsive">
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
					<p>CUSCO - TRASLADO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
						<li><i class="icon-ok-squared"></i>Translado ao Aeroporto 2h antes da saída de seu voo.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/partida-do-hotel.jpg" title="Partida do hotel."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/partida-do-hotel.jpg" alt="Partida do hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/transferencia-de-hotel para-aeroporto.jpg" title="Transferência de hotel para aeroporto."><img src="img/passeio-machu-picchu/cusco-classico-con-pernocte-4-dias-3-noites/transferencia-de-hotel para-aeroporto.jpg" alt="Transferência de hotel para aeroporto." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Translado de Aeroporto - Hotel - Aeroporto.</li>
                        <li><i class="icon-ok-circle-1"></i>Transporte turístico para cada Passeio.</li>
                        <li><i class="icon-ok-circle-1"></i>Guia profissional para cada Passeio.</li>
                        <li><i class="icon-ok-circle-1"></i>Passeios em Cusco: City Tour Arqueológico, Vale sagrado dos Incas e Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>2 Noites Hotel em Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>1 Noite Hotel em Àguas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>Ingresso para Machu Picchu por 1 dia.</li>
                        <li><i class="icon-ok-circle-1"></i>Serviço do Trem Ida e Volta de Ollantaytambo – Aguas Calientes - Ollantaytambo (CLASSE TURISTICO).</li>
                        <li><i class="icon-ok-circle-1"></i>Ônibus Subida e Descida Àguas Calientes - Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Translado Ollantaytambo - Cusco.</li>
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
      				<li><i class="icon-cancel-circle-2"></i>Café da manhã no primeiro dia.</li>
                    <li><i class="icon-cancel-circle-2"></i>Ticket de bus Águas Calientes - Machu Picchu (opcional).</li>
                    <li><i class="icon-cancel-circle-2"></i>Entrada nos Banhos Termais (10 soles).</li>
                    <li><i class="icon-cancel-circle-2"></i>Gorjetas.</li>
                    <li><i class="icon-cancel-circle-2"></i>Serviços Extras.</li>				
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1k_QlzY5a_4ppehq4fwvr2dpAHzc" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<th colspan="4">
				<h4><span><i class="icon_set_1_icon-30"></i>Pacote + <i class="icon_set_1_icon-6"></i>Hotel + <i class=" icon_set_1_icon-5"></i>Trem (Classe turista)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong> CATEGORÍA</strong></td>
				<td><strong>HOTÉIS EM<br>CUSCO</strong></td>
				<td><strong>HOTÉIS EM<br>AGUAS CALIENTES</strong></td>
				<td><strong>INDIVIDUAL </strong></td>
				<td><strong>DUPLO </strong></td> 
				<td><strong>TRIPLO </strong></td>
				</tr>  
				<tr> 
				<td><h5> CLASSE<br> ECONÔMICO</h5></td>
				<td><i class="icon-play-5"></i>H. Prisma<br> <i class="icon-play-5"></i>H. Aranjuez<br><i class="icon-play-5"></i>H. Hatun Wasi</td>
				<td><i class="icon-play-5"></i>H. Continental<br> <i class="icon-play-5"></i>H. Eco Machupicchu<br><i class="icon-play-5"></i>H. 7 Machupicchu</td>
				<td>$ 550</td>
				<td>$ 490</td>
				<td>$ 475</td>
				</tr>   
				<tr> 
				<td><h5> CLASSE<br> TURÍSTCO</h5></td>
				<td><i class="icon-play-5"></i>H. Samay<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. S.A Internacional<br><i class="icon-play-5"></i>H. Midori</td>
				<td><i class="icon-play-5"></i>H. Inti Punku INN<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. Inka Town <br><i class="icon-play-5"></i>H. Hatun Samay</td>
				<td>$ 625</td>
				<td>$ 535</td>
				<td>$ 520</td>
				</tr>   
				<tr> 
				<td><h5> CLASSE<br> SUPERIOR</h5></td>
				<td><i class="icon-play-5"></i>H. 7 Ventanas Sup:<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. S.A Dorado<br><i class="icon-play-5"></i>H. Jose Antonio</td>
				<td><i class="icon-play-5"></i>H. Terra Viva Sup:<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>H. Casa Andina<br><i class="icon-play-5"></i>H. Inti Punku MAPI</td>
				<td>$ 750</td>
				<td>$ 600</td>
				<td>$ 580</td>
				</tr> 
				<tr> 
				<td rowspan="2"><h5> CLASSE<br> LUXO</h5></td>  
				<td><i class="icon-play-5"></i>H. Costa del Sol<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td><i class="icon-play-5"></i>H. Mapi<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 945</td>
				<td>$ 720</td>
				<td><span class="label label-danger">cerrado</span></td>
				</tr>
				<tr>  
				<td><i class="icon-play-5"></i>H. Aranwa<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td><i class="icon-play-5"></i>H. Sumaq<br><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 1350</td>
				<td>$ 950</td>
				<td><span class="label label-danger">cerrado</span></td>
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


<script src="../assets/validate.js"></script> 
  </body>
</html>