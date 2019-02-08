<?php
$nombre_paquete = 'Lima Paracas Nazca Arequipa Puno Cusco e Machu Picchu';
$numero_dias='14 dias e 13 noches';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Pacotes Peru: Lima, Paracas, Nazca, Arequipa, Puno e Cusco - 14 Dias 13 Noites. Este pacote é um itinerário completo é feito para conhecer todas as principais atrações turísticas do Peru. Começando pela capital, Lima, visitando aos principais sitios turisticos, como: a city tour pela cidade colonial e moderna, ao complexo arqueológico de Huaca Pucllana, Circuito Magico das aguas e a gastronomia peruana.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Passeios Peru";
$url_category="passeios-peru";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/reserva-de-paracas.jpg";

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

                <?php   $url_s = "pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites.jpg";

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
                        Preço Desde<span><sup>$</sup>1540</span>Por pessoa
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
					 <p>Pacotes Peru: <strong>Lima, Paracas, Nazca, Arequipa, Puno e Cusco</strong> - 14 Dias 13 Noites. Este pacote é um itinerário completo é feito para conhecer todas as principais atrações turísticas do Peru. Começando pela capital, Lima, visitando aos principais <strong>sitios turisticos</strong>, como: a <strong>city tour</strong> pela cidade colonial e moderna, ao complexo arqueológico de <strong>Huaca Pucllana</strong>, <strong>Circuito Magico das aguas</strong> e a<strong> gastronomia peruana</strong>. Imediatamente nós continuamos a outro ponto turístico que faz parte do circuito da c<strong>osta peruana</strong>, Ilhas Balhestas, conhecido como as pequenas ilhas Galápagos no <strong>Peru</strong>, o lugar de várias espécies de flora e fauna.</p>					 
					 <p>Dentro do pacote também temos incluído ao misterioso enigmático para sobre voar as <strong>Linhas</strong> de <strong>Nazca</strong>, localizado na <strong>cidade de Nazca</strong>.</p>
              		<p>Continuando com o pacote, vamos ver a famosa Cidade Branca de <strong>Arequipa</strong>, com a sua <strong>bela Plaza</strong> de Armas e grandes museus. Em seguida vamos continuar ao <strong>Colca Canyon</strong> um dos cânions mais profundos do mundo e onde vamos ver o voo dos Condores.</p>      		
              		<p>Seguindo a rota entramos na rota de <strong>Cusco</strong> a <strong>Puno</strong>, chamado de "<strong>Rota do Sol</strong>", com uma série de pontos importantes e finalmente visitaremos ao Lago <strong>Titicaca - Puno</strong>, lago navegável mais alto do mundo, onde conheceremos aos principais ilhas flutuante de <strong>Uros</strong> e <strong>Taquile</strong>.</p>
              		<p>Após continuamos a <strong>cidade de Cuzco</strong>, conhecido "o umbigo do mundo e o <strong>império dos Incas</strong>" visitar aos principais sítios arqueológicos, como: <strong>City tours</strong> arqueológico, ao Vale Sagrado dos incas e opção de pernoitar a noite no povoado de <strong>Aguas Calientes</strong> ao lado de uma das maravilhas do <strong>mundo moderno Machu Picchu</strong>.</p> 
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>RECEPÇÃO EM LIMA</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Recepção no aeroporto de Lima e translado ao Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Tarde livre para aproveitar descansar.</li>
                    <li><i class="icon-ok-squared"></i>Pernoite em Lima.</li>
                    
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/transfer-aeroporto-hotel.jpg" title="Transfer Aeroporto - Hotel."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/transfer-aeroporto-hotel.jpg" alt="Transfer Aeroporto - Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/dia-livre-para-aclimatacao.jpg" title="Dia livre para aclimatação."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/dia-livre-para-aclimatacao.jpg" alt="Dia livre para aclimatação." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/pernoite-em-cusco.jpg" title="Pernoite em Cusco."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/pernoite-em-cusco.jpg" alt="Pernoite em Cusco." class="img-responsive">
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
					<p>LIMA - CITY TOUR A CIDADE COLONIAL E MODERNA.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Café da manhã no hotel.</li>
                    <li><i class="icon-ok-squared"></i>A manhã Livre.</li>
                    <li><i class="icon-ok-squared"></i>Pela tarde City Tour na cidade começa as 14h00 até 18h00.</li>
                    <li><i class="icon-ok-squared"></i>Visita: Ao complexo arqueológico de Huacapucllana, praça principal, praça San Martin, palácio do governo, Templo de San Francisco, San Isidro, Miraflores, parque do Amor e Larcomar.</li>
                    <li><i class="icon-ok-squared"></i>Pela noite visitará o Circuito Mágico das aguas desde as 18h15 até 20h00 (opcional).</li>
                    <li><i class="icon-ok-squared"></i>Pernoite em Lima.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/lima-colonial.jpg" title="Lima Colonial."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/lima-colonial.jpg" alt="Lima Colonial." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/huaca-pucllana.jpg" title=" ruinas de Huaca Pucllana."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/huaca-pucllana.jpg" alt="ruinas de Huaca Pucllana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/circuito-magico-aguas.jpg" title="Circuit Magico de Aguas."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/circuito-magico-aguas.jpg" alt="Circuit Magico de Aguas." class="img-responsive">
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
					<p>LIMA - PARACAS</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Translado do seu hotel ao terminal de ônibus as 03h00 (Cruz del sur).</li>
                        <li><i class="icon-ok-squared"></i>Pegamos o ônibus de Lima – Paracas as 04h00.</li>
                        <li><i class="icon-ok-squared"></i>Chegamos a Paracas e translado ao hotel as 07h00.</li>
                        <li><i class="icon-ok-squared"></i>O passeio a Ilhas Balhestas começa as 08h00 até 10h30.</li>
                        <li><i class="icon-ok-squared"></i>Depois o passeio a Reserva de Paracas começa às 12h00.</li>
                        <li><i class="icon-ok-squared"></i>O retorno a Paracas será por volta das 16h00.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Paracas.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/ilhas-ballestas.jpg" title="Ilhas Ballestas."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/ilhas-ballestas.jpg" alt="Ilhas Ballestas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/reserva-de-paracas.jpg" title="reserva de Paracas."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/reserva-de-paracas.jpg" alt="reserva de Paracas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/pernoite-em-paracas.jpg" title="Pernoite em Paracas."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/pernoite-em-paracas.jpg" alt="Pernocte en Paracas." class="img-responsive">
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
					<p>PARACAS - NAZCA - AREQUIPA.</p>
				</div>
					<ul class="list_icons">
                   <li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                   <li><i class="icon-ok-squared"></i>Pela manhã passaremos por seu hotel e translado ao rodoviária as 07h00.</li>
                   <li><i class="icon-ok-squared"></i>Depois pegaremos nosso ônibus de Paracas - Nazca as 07h30 (Cruz del sur).</li>
                   <li><i class="icon-ok-squared"></i>Chegada a Nazca será as 10h30 e recepção na rodoviária e translado ao aeródromo.</li>
                   <li><i class="icon-ok-squared"></i>O sobre vôo começará as 12h00 até 12h35.</li>
                   <li><i class="icon-ok-squared"></i>Tarde livre para aproveitar conhecer a cidade de Nazca.</li>
                   <li><i class="icon-ok-squared"></i>Pela noite nosso ônibus sairá as 22h00 Nazca – Arequipa (Cruz del sur).</li>
                   <li><i class="icon-ok-squared"></i>Pernoite no Ônibus executivo.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/lineas-de-nazca.jpg" title="Nazca Lines."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/lineas-de-nazca.jpg" alt="Nazca Lines." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/ciudade-de-nazca.jpg" title="Cidade de Nazca."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/ciudade-de-nazca.jpg" alt="Cidade de Nazca." class="img-responsive">
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
					<p>AREQUIPA - CITY TOURS PANORAMICO.</p>
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
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/el-mirador-de carmen-alto.jpg" title=" Mirador de Yanahuara."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/el-mirador-de carmen-alto.jpg" alt=" Mirador de Yanahuara." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/terracos-de-paucarpata.jpg" title="Terraços de Paucarpata."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/terracos-de-paucarpata.jpg" alt="Terraços de Paucarpata." class="img-responsive">
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
					<p>AREQUIPA - CHIVAY</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel as 08h00.</li>
                        <li><i class="icon-ok-squared"></i>Saída ao Canyon de Colca as 08h30.</li>
                        <li><i class="icon-ok-squared"></i>No percurso da viagem, passaremos pelos povoados históricos e alto andinos da região de Arequipa, onde nosso guia dará toda a informação sobre a cultura inca e também das culturas pre incas que habitaram nesses sítios.</li> 
                        <li><i class="icon-ok-squared"></i>A Chegada a Chivay será por volta das 12h30 e translado ao hotel.</li>
                        <li><i class="icon-ok-squared"></i>Na tarde pode aproveitar ir aos banhos termais La Calera.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Chivay.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/viagem-a-chivay.jpg" title="Viagem a Chivay."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/viagem-a-chivay.jpg" alt="Viagem a Chivay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/canyon-do colca.jpg" title="Canyon do Colca.."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/canyon-do colca.jpg" alt="Canyon do Colca." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/termas-de-la-calera.jpg" title="Termas de La Calera."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/termas-de-la-calera.jpg" alt="Termas de La Calera." class="img-responsive">
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
					<p>CANYON DE COLCA - AREQUIPA</p>
				</div>
					<ul class="list_icons">
                  <li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                  <li><i class="icon-ok-squared"></i>Pela manhã passará nosso guia a buscar por seu hotel.</li>
                  <li><i class="icon-ok-squared"></i>A saída a Canyon de Colca será por volta das 07h30.</li>
                  <li><i class="icon-ok-squared"></i>Visita. No percurso da viagem, visitaremos aos povoados de Chivay, ao Canyon mais profundo do mundo e observar o vôo dos Condores ao entorno das montanhas.</li>
                  <li><i class="icon-ok-squared"></i>O retorno a Chivay será as 12h00 e depois vamos pegar nosso ônibus de Chivay – Puno (onibus 4M).</li>
                  <li><i class="icon-ok-squared"></i>Chegaremos em Puno as 19h00.</li>
                  <li><i class="icon-ok-squared"></i>Recepção em Puno e translado ao hotel.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/observe-o-voo-dos-condores.jpg" title="observe o vôo dos condores."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/observe-o-voo-dos-condores.jpg" alt="observe o vôo dos condores." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/retorno-a-arequipa.jpg" title="Templo do Sol."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/retorno-a-arequipa.jpg" alt="Templo do Sol." class="img-responsive">
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
					<p>PUNO - LAGO TITICACA.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel às 07h00.</li>
                    <li><i class="icon-ok-squared"></i>Nossa embarcação sairá as 07h30.</li>
                    <li><i class="icon-ok-squared"></i>Visitaremos as principais Ilhas Flutuantes de Uros e Ilha Taquile, onde entraremos em contato com os moradores do lago Titicaca, que apresentarão os tradições e costumes do lago sagrado de Titicaca.</li>
                    <li><i class="icon-ok-squared"></i>Após retornaremos a Puno, por volta das 17h00.</li>
                    <li><i class="icon-ok-squared"></i>Pernoite em Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/ilhas-flutuantes-de-uros.jpg" title="Ilhas flutuantes de Uros."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/ilhas-flutuantes-de-uros.jpg" alt="Ilhas flutuantes de Uros." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/ilhas-flutuantes-de-taquile.jpg" title="Ilhas flutuantes de Taquile."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/ilhas-flutuantes-de-taquile.jpg" alt="Ilhas flutuantes de Taquile." class="img-responsive">
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
					<p>PUNO - CUSCO / ROTA DO SOL.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Passaremos por seu hotel e Translado a rodoviária as 06h30.</li>
                        <li><i class="icon-ok-squared"></i>Nosso ônibus executivo sairá as 07h00 de Puno – Cusco ( turismo Mer).</li>
                        <li><i class="icon-ok-squared"></i>Visita: Ao museu de Pukara, La Raya(nevados mais altos), Sicuani (Almoco Buffet),  Raqchi (templo de wiracocha) e a Capela sextina de Andahuaylillas.</li>
                        <li><i class="icon-ok-squared"></i>Chega em Cusco as 17h00.</li>
                        <li><i class="icon-ok-squared"></i>Recepção em Cusco e translado ao hotel.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/capela-sistina-andahuaylillas.jpg" title="Capela Sistina andahuaylillas."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/capela-sistina-andahuaylillas.jpg" alt="Capela Sistina andahuaylillas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologica-de-raychi.jpg" title="Complexo arqueologica de raychi."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologica-de-raychi.jpg" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/pernoite-em-cusco.jpg" title="Pernoite em Cusco."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/pernoite-em-cusco.jpg" alt="Pernoite em Cusco." class="img-responsive">
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
					<p>CUSCO - CITY TOUR ARQUEOLÓGICO</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>A manhã livre, pode aproveitar conhecer a cidade ou fazer compras.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel as 13h30.</li>
                        <li><i class="icon-ok-squared"></i>Saída ao City Tour Arqueológico as 14h00 até as 18h30.</li>
                        <li><i class="icon-ok-squared"></i>Visita ao Templo do Sol Qoricancha e as ruinas de Sacsayhuaman, Kenko, Pucapucara e Tambomachay.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/templo-do-sol-koricancha.jpg" title="templo do sol coricancha."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/templo-do-sol-koricancha.jpg" alt="templo do sol coricancha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologico-de-sacsayhuaman.jpg" title="Complexo arqueologico de sacsayhuaman"><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologico-de-sacsayhuaman.jpg" alt="Complexo arqueologico de sacsayhuaman" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologico-de-qenqo.jpg" title="Complexo arqueologico de qenqo."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologico-de-qenqo.jpg" alt="Complexo arqueologico de qenqo." class="img-responsive">
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
					<p>CUSCO - VALE SAGRADO DOS INCAS / CONEXÃO AGUAS CALIENTES</p>
				</div>
					<ul class="list_icons">
					<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Buscaremos em seu Hotel as 08h15.</li>
                    <li><i class="icon-ok-squared"></i>Saída ao Vale Sagrado as 08h40.</li>
                    <li><i class="icon-ok-squared"></i>Visita: Aos Mercados de Corão e Mercado de Pisaq, ao complexo arqueológico de Pisaq e parque arqueológico de Ollantaytambo.</li>
                    <li><i class="icon-ok-squared"></i>Pela tarde pagaremos o Trem de Ollantaytambo – Aguas Calientes as 19h00 ou 21h00.</li>
                    <li><i class="icon-ok-squared"></i>Recepção na estação de Aguas Calientes e translado ao hotel.</li>
                    <li><i class="icon-ok-squared"></i>Pernoite em Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologico-de-pisac.jpg" title="Complexo arqueologico de pisac."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologico-de-pisac.jpg" alt="Complexo arqueologico de pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologico-de-ollantaytambo.jpg" title="Complexo arqueologico de ollantaytambo."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologico-de-ollantaytambo.jpg" alt="Complexo arqueologico de ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologico-de-chinchero.jpg" title="complexo arqueologico de chincheros."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/complexo-arqueologico-de-chinchero.jpg" alt="complexo arqueologico de chincheros." class="img-responsive">
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
					<p>CUSCO - MACHU PICCHU FULL DAY</p>
				</div>
					<ul class="list_icons">
					<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Pela manhã a saída será às 05h20, para pegar o primeiro ônibus até Machu Picchu.</li>
                    <li><i class="icon-ok-squared"></i>Porque Machu Picchu abre a porta as 06h00 e poderiam ingressar para aproveitar ver o nascer do Sol.</li>
                    <li><i class="icon-ok-squared"></i>Depois visitarão à Machu Picchu com nosso guia profissional por volta de 2 horas.</li>
                    <li><i class="icon-ok-squared"></i>Após terá tempo livre para tirar fotos e passar mais tempo em Machu Picchu.</li>
                    <li><i class="icon-ok-squared"></i>Pela tarde descida de Machu Picchu até Àguas Calientes e aguardaremos nosso trem da volta.</li>
                    <li><i class="icon-ok-squared"></i>Depois pegaremos o trem de Àguas Calientes atè Ollantaytambo as 14h55 ou 18h20</li>
                    <li><i class="icon-ok-squared"></i>Na hora de chegada ao povoado de Ollantaytambo, estará aguardando nosso transporte para levar até Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/sitio-arqueologico-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/sitio-arqueologico-de-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/o-intiwatana.jpg" title="O Intihuatana."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/o-intiwatana.jpg" alt="O Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/templo-do-sol.jpg" title="Templo do Sol."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/templo-do-sol.jpg" alt="Templo do Sol." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 13</span></h3> 
					<p> CUSCO – DIA LIVRE</p>
				</div>
					<ul class="list_icons">
					<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Dia livre pode aproveitar descansar ou fazer compras.</li>
                    <li><i class="icon-ok-squared"></i>Pernoite em Cusco.</li>
                   
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/dia-libre-para-hacer-compras.jpg" title="Dia livre para aclimatação."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/dia-libre-para-hacer-compras.jpg" alt="Dia livre para aclimatação." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/pernoite-em-cusco.jpg" title="Pernoite em Cusco."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/pernoite-em-cusco.jpg" alt="Pernoite em Cusco." class="img-responsive">
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
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 14</span></h3> 
					<p>CUSCO – TRANSLADO AO AEROPORTO</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Translado ao Aeroporto 2h antes da saída de seu voo.</li>

					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/partida-do-hotel.jpg" title="Partida do hotel."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/partida-do-hotel.jpg" alt="Partida do hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/Transferencia-de-hotel-para-aeroporto.jpg" title="Transferência de hotel para aeroporto."><img src="img/pacotes-peru/lima-paracas-nazca-arequipa-puno-cusco-machu-picchu-14-dias-13-noites/Transferencia-de-hotel-para-aeroporto.jpg" alt="Transferência de hotel para aeroporto." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>PTranslado Aeroporto - Hotel em Lima.</li>
                        <li><i class="icon-ok-circle-1"></i>PTranslado Hotel - Aeroporto em Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>PO passeio City tours Lima.</li>
                        <li><i class="icon-ok-circle-1"></i>POs traslados em cada cidade.</li>
                        <li><i class="icon-ok-circle-1"></i>PÔnibus executivo de Lima – Paracas.</li>
                        <li><i class="icon-ok-circle-1"></i>PPasseio a Ilhas Balhestas e Reserva de Paracas.</li>
                        <li><i class="icon-ok-circle-1"></i>PÔnibus Executivo de Paracas - Nazca.</li>
                        <li><i class="icon-ok-circle-1"></i>PGuia profissional para cada passeio.</li>
                        <li><i class="icon-ok-circle-1"></i>PSobre voo as Linhas de Nazca.</li>
                        <li><i class="icon-ok-circle-1"></i>PÔnibus executivo de Nazca – Arequipa.</li>
                        <li><i class="icon-ok-circle-1"></i>PPasseio de City Tours em Arequipa.</li>
                        <li><i class="icon-ok-circle-1"></i>PPasseio a Canyon de Colca em Arequipa.</li>
                        <li><i class="icon-ok-circle-1"></i>PÔnibus Executivo de Chivay – Puno.</li>
                        <li><i class="icon-ok-circle-1"></i>PPasseio ao lago titicaca/ Ilhas Flutuantes de Uros e Taquile,	•	Passeio Rota do Sol de Puno - Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>PPasseios em Cusco: City Tour Arqueológico, Vale Sagrado e Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>P2 noites Hotel em Lima.</li>
                        <li><i class="icon-ok-circle-1"></i>P1 noites Hotel em Paracas.</li>
                        <li><i class="icon-ok-circle-1"></i>P1 noite Hotel em Arequipa.</li>
                        <li><i class="icon-ok-circle-1"></i>P1 noite Hotel em Chivay.</li>
                        <li><i class="icon-ok-circle-1"></i>P2 Noites Hotel em Puno.</li>
                        <li><i class="icon-ok-circle-1"></i>P4 Noites Hotel em Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>P1 Noite Hotel em Águas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>PIngresso a Machu Picchu para 1 dia.</li>
                        <li><i class="icon-ok-circle-1"></i>PServiço do Trem Ida e Volta Ollantaytambo – Aguas Calientes - Ollantaytambo (CLASSE TURISTICO).</li>
                        <li><i class="icon-ok-circle-1"></i>PÔnibus Subida e Descida Àguas Calientes - Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>PTranslado Ollantaytambo – Cusco.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Almoço e Jantar.</li>
                        <li><i class="icon-cancel-circle-2"></i>Bilhete Turístico Cusco 45 Dólares.</li>
                        <li><i class="icon-cancel-circle-2"></i>Bilhete Turístico Arequipa 27 Dólares.</li>
                        <li><i class="icon-cancel-circle-2"></i>Taxa do Aeródromo de Nazca 8 Dólares.</li>
                        <li><i class="icon-cancel-circle-2"></i>Boleto Turístico Rota do Sol 15 Dólares	•	Voo: Brasil - Lima - Brasil.</li>
                        <li><i class="icon-cancel-circle-2"></i>Voo: Cusco – Lima.</li>
                        <li><i class="icon-cancel-circle-2"></i>Seguro de Viagem.</li>
                        <li><i class="icon-cancel-circle-2"></i>Outros que não estão acima.</li>						
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1na-zAHT6A9nhHSkIZf4-VDsu724" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<th colspan="9">
				<h4><span>Paquete + Hotel+Bus+Tren(Clase turístico)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATEGO-<br>RÍA</strong></td>
				<td><strong>HOTELES<br> EN LIMA</strong></td>
				<td><strong>HOTELES<br> EN PARACAS</strong></td>
				<td><strong>HOTELES<br> EN ARE-<br>QUIPA</strong></td>
				<td><strong>HOTELES<br> EN PUNO</strong></td>
				<td><strong>HOTELES<br> EN CUSCO</strong></td>
				<td><strong>HOTELES<br> EN AGUAS CALIEN-<br>TES</strong></td> 
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE&#160</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONÓ-<br>MICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Monte Real<br><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Santa Maria</td>
				<td><i class="icon-play-5"></i>Hotel Ensueño</td>
				<td><i class="icon-play-5"></i>Hotel Helena</td>
				<td><i class="icon-play-5"></i>Hotel Prisma</td>
				<td><i class="icon-play-5"></i>Hotel Continental</td>
				<td>$ 1590</td>
				<td>$ 1560</td>  
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍS-<br>TICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Carmel<br> <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>El Mirador Hotel</td>
				<td><i class="icon-play-5"></i>H. Posada Monasterio</td>
				<td><i class="icon-play-5"></i>H.<br>Sol Plaza Inn</td>
				<td><i class="icon-play-5"></i>H. S.A Internacional</td>
				<td><i class="icon-play-5"></i>Hotel Hatun Samay</td>
				<td>$ 1770</td>
				<td>$ 1730</td> 
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPE-<br>RIOR</h5></td>
				<td><i class="icon-play-5"></i>San Agustin Exclusive<br><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>San Agustin Paracas</td>
				<td><i class="icon-play-5"></i>Hotel Terra Viva</td>
				<td><i class="icon-play-5"></i>Hotel Royal INN</td>
				<td><i class="icon-play-5"></i>San Agusntin Dorado</td>
				<td><i class="icon-play-5"></i>Hotel Intitpunku Mapi</td>
				<td>$ 1980</td>
				<td>$ 1930</td> 
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
			include("includes/costados/melhores-pacotes.php");
			include("includes/costados/pacotes-machu-picchu.php");
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