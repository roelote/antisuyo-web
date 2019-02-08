<?php
$nombre_paquete = 'Lima Cusco Puno';
$numero_dias='11 dias e 10 noites';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Pacotes Peru: Lima, Cusco e Puno 11 dias / 10 noites é um pacote idial para você conecher os principais pontos turisticos do país, começando pela capital, Lima, visitando aos principais sitios turiticos, como: A city tour pela cidade colonial e moderna, ao complexo arqueológico de Huaca Pucllana e impressionante complexo arqueológico de Pachacamac.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Passeios Peru";
$url_category="passeios-peru";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/city-tour-ciudad-colonial-y-moderna.jpg";

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

                <?php   $url_s = "pacotes-peru/lima-cusco-y-puno-11-dias-10-noites.jpg";

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
                        Preço desde<span><sup>$</sup>1045</span>Por pessoa
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
					 <p>Pacotes Peru: <strong>Lima</strong>, <strong>Cusco</strong> e <strong>Puno</strong> 11 dias / 10 noites é um pacote idial para você conecher os principais pontos turisticos do país, começando pela capital, Lima, visitando aos principais sitios turiticos, como: A <strong>city tour</strong> pela cidade colonial e moderna, ao complexo arqueológico de Huaca Pucllana e impressionante complexo arqueológico de Pachacamac.</p>					 
					 <p>A <strong>cidade de Cuzco</strong>, conhecido "o umbigo do mundo e o <strong>império dos Incas</strong>" visitar aos principais sítios arqueológicos, como: <strong>City tours arqueológico</strong>, ao <strong>Vale Sagrado dos incas</strong> e a opção de pernoitar a noite no povoado de Aguas Calientes ao lado de uma <strong>das maravilhas do mundo moderno</strong>: <strong>Machu Picchu.</strong></p>              		
              		<p>Seguindo a rota entramos na rota de <strong>Cusco</strong> a Puno, chamado de "<strong>Rota do Sol</strong>", com uma série de pontos importantes e finalmente visitaremos ao <strong>Lago Titicaca</strong> - <strong>Puno</strong>, lago navegável mais alto do mundo, onde conheceremos aos principais ilhas flutuantes de <strong>Uros</strong> e <strong>Taquile</strong>.</p>               		
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
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/transferencia-de-aeroporto-para-hotel.jpg" title="Transferência de aeroporto para hotel."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/transferencia-de-aeroporto-para-hotel.jpg" title="Transferência de hotel para aeroporto." alt="Traslado del Aeropuerto." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/dia-livre-para-conhecer-a-cidade.jpg" title="Dia livre para conhecer a cidade."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/dia-livre-para-conhecer-a-cidade.jpg" alt="Dia livre para conhecer a cidade." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/pernoite-em-lima.jpg" title="Pernoite em Lima."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/pernoite-em-lima.jpg" alt="Pernoite em Lima." class="img-responsive">
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
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/city-tour-ciudad-colonial-y-moderna.jpg" title="City Tour Ciudad Colonial Y Moderna."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/city-tour-ciudad-colonial-y-moderna.jpg" alt="City Tour Ciudad Colonial e Moderna." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/ruinas-da-huaca-pucllana.jpg" title="Ruínas da Huaca Pucllana."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/ruinas-da-huaca-pucllana.jpg" alt="Ruínas da Huaca Pucllana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/circuit-magico-de-aguas.jpg" title="Circuit Magico de Aguas."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/circuit-magico-de-aguas.jpg" title="Circuit Magico de Aguas" alt="Circuit Magico de Aguas." class="img-responsive">
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
					<p>LIMA – PACHACAMAC AO COMPLEXO ARQUELOGICO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no hotel.</li>
                        <li><i class="icon-ok-squared"></i>Passaremos por seu hotel as 09h00 da manhã.</li>
                        <li><i class="icon-ok-squared"></i>O passeio a PACHACAMAC iniciará as 09h20 até 13h00.</li>
                        <li><i class="icon-ok-squared"></i>Visita: aos Oráculos de Pachacamac, Aclla wasi,(Casa de Mulheres escolhidas ) templo de Deus Sol, Praça principal do complexo, Barranco e Pântanos de Villa.</li>
                        <li><i class="icon-ok-squared"></i>Tarde livre para testar a gastronomia Peruana.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Lima.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/tour-para-pachacamac.jpg" title="Tour para pachacamac."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/tour-para-pachacamac.jpg" alt="Tour para pachacamac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/tarde-para-desfrutar-da-gastronomia.jpg" title="Tarde para desfrutar da gastronomia."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/tarde-para-desfrutar-da-gastronomia.jpg" title="Tarde para desfrutar da gastronomia." alt="Tarde para desfrutar da gastronomia." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/los-oraculos-aclla-wasi-templo-del-sol.jpg" title="Templo do Sol."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/los-oraculos-aclla-wasi-templo-del-sol.jpg" title="templo de Dios Sol." title="Templo do Sol" alt="Templo do Sol." class="img-responsive">
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
					<p>LIMA – CUSCO / VÔO LOCAL.</p>
				</div>
					<ul class="list_icons">
                    <li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                    <li><i class="icon-ok-squared"></i>Translado do seu Hotel - Aeroporto em Lima.</li>
                    <li><i class="icon-ok-squared"></i>Recepção no Aeroporto de Cusco e Translado ao hotel.</li>
                    <li><i class="icon-ok-squared"></i>A manhã Livre para aclimatação na altura.</li>
                    <li><i class="icon-ok-squared"></i>Pernoite em Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/transferir-para-cusco.jpg" title="transferir para cusco."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/transferir-para-cusco.jpg" alt="transferir para cusco." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/centro-historico-da-cidade.jpg" title="Centro Histórico da Cidade."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/centro-historico-da-cidade.jpg" alt="Centro Histórico da Cidade." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/pernoite-em-cusco.jpg" title="Pernoite em Cusco."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/pernoite-em-cusco.jpg" title="Pernocte en Cusco." alt="Pernocte en Cusco." class="img-responsive">
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
					<p>CUSCO - CITY TOUR ARQUEOLÓGICO.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>A manhã livre, para aproveitar conhecer aos museus de Cusco.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel as 13h30.</li>
                        <li><i class="icon-ok-squared"></i>Saída ao City Tour Arqueológico as 14h00 até 18h30.</li>
                        <li><i class="icon-ok-squared"></i>Visitas ao Templo do Sol Qoricancha, os complexos arqueológico de Sacsayhuaman, Kenko, Puca Pucara e Tambomachay.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/templo-do-sol-koricancha.jpg" title="Templo do Sol Coricancha."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/templo-do-sol-koricancha.jpg" title="Templo do Sol Coricancha." alt="TTemplo do Sol Coricancha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-sacsayhuaman.jpg" title="Complexo arqueologico de sacsayhuaman."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-sacsayhuaman.jpg" alt="Complexo arqueologico de sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-qenqo.jpg" title="Complexo arqueologico de qenqo."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-qenqo.jpg" alt="Complexo arqueologico de qenqo." class="img-responsive">
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
					<p>CUSCO - VALE SAGRADO DOS INCAS / CONEXÃO AGUAS CALIENTES</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu Hotel as 08h15.</li>
                        <li><i class="icon-ok-squared"></i>Saída ao Vale Sagrado as 08h40.</li>
                        <li><i class="icon-ok-squared"></i>Visita: Aos Mercados de Corão e Mercado de Pisaq, ao complexo arqueológico de Pisaq e ao parque arqueológico de Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>Pela tarde pegaremos o Trem de Ollantaytambo – Aguas Calientes as 16h36 ou 19h00.</li>
                        <li><i class="icon-ok-squared"></i>Recepção na estação de Aguas Calientes e translado ao hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Aguas Calientes.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-pisac.jpg" title="complexo arqueologico de  Pisac."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-pisac.jpg" alt="complexo arqueologico de Pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-ollantaytambo.jpg" title="complexo arqueologico de Ollantaytambo."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-ollantaytambo.jpg" alt="complexo arqueologico de Ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-chincheros.jpg" title="complexo arqueologico de chincheros."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-chincheros.jpg" alt="complexo arqueologico de chincheros." class="img-responsive">
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
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/sitio-arqueologica-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/sitio-arqueologica-de-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/o-intihuatana.jpg" title="=O Intihuatana."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/o-intihuatana.jpg" title="O Intihuatana." alt="O Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/templo-do-sol.jpg" title="Templo do Sol."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/templo-do-sol.jpg" alt="Templo do Sol." class="img-responsive">
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
					<p>CUSCO – PUNO / ROTA DO SOL.</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Passaremos por seu hotel as 06h30.</li>
                        <li><i class="icon-ok-squared"></i>Saída de Ônibus Executivo as 07h00.</li>
                        <li><i class="icon-ok-squared"></i>Visitas: Capela sextina de Andahuaylillas, Raqchi (Templo de Wiracocha), Sicuani (Almoco Buffet), La Raya (nevados) e o museu de Pukará.</li>
                        <li><i class="icon-ok-squared"></i>Recepção em Puno e translado ao hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Puno.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/capela-sistina-andahuaylillas.jpg" title="Capela Sistina andahuaylillas."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/capela-sistina-andahuaylillas.jpg" title="Capela Sistina andahuaylillas." alt="Capela Sistina andahuaylillas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-raqchi.jpg" title="Complexo Arqueologico de Raqchi."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/complexo-arqueologico-de-raqchi.jpg" alt="complexo arqueologico de raqchi." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/pernoite-em-puno.jpg" title="Pernoite em Puno."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/pernoite-em-puno.jpg" alt="Pernocte en Puno." class="img-responsive">
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
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/ilhas-flutuantes-de-uros.jpg" title="Ilhas flutuantes de Uros."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/ilhas-flutuantes-de-uros.jpg" title="Ilhas flutuantes de Uros." alt="Pernocte en Puno" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/ilhas-flutuantes-de-taquile.jpg" title="Ilhas flutuantes de taquile."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/ilhas-flutuantes-de-taquile.jpg" title="Ilhas flutuantes de taquile." alt="Ilhas flutuantes de taquile." class="img-responsive">
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
					<p>PUNO - CUSCO</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel às 07h30.</li>
                        <li><i class="icon-ok-squared"></i>Translado a rodoviária, onde nosso ônibus sairá as 08h00.</li>
                        <li><i class="icon-ok-squared"></i>No percurso da viagem, poderemos aproveitar ver o paisagem maravilhoso e os povoados alto andinos da região de Puno e Cusco.</li>
                        <li><i class="icon-ok-squared"></i>A chegada em Cusco será por volta das 15h00.</li>
                        <li><i class="icon-ok-squared"></i>Recepção na rodoviária e translado ao hotel.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/transferir-para-cusco.jpg" title="Recepción en el terminal terrestre."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/transferir-para-cusco.jpg" alt="Recepción en el terminal terrestre." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/llegada-a-cusco.jpg" title="Chegada a cusco."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/llegada-a-cusco.jpg" alt="Chegada a cusco." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/pernoite-em-cusco.jpg" title="Pernoite em Cusco."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/pernoite-em-cusco.jpg" alt="Pernocte en Cusco." class="img-responsive">
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
					<p>CUSCO – LIMA/ VOO LOCAL/TRANSLADO AO AEROPORTO</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
						<li><i class="icon-ok-squared"></i>Translado ao Aeroporto 2h antes da saída de seu voo.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/partida-do-hotel.jpg" title="Partida do hotel."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/partida-do-hotel.jpg" alt="Partida do hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/transferencia-de-hotel-para-aeroporto.jpg" title="Transferência de hotel para aeroporto."><img src="img/pacotes-peru/lima-cusco-y-puno-11-dias-10-noites/transferencia-de-hotel-para-aeroporto.jpg" alt="Transferência de hotel para aeroporto." class="img-responsive">
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
    				      <li><i class="icon-ok-circle-1"></i>Translado Aeroporto - Hotel - Aeroporto (Lima).</li>
                          <li><i class="icon-ok-circle-1"></i>Translado Aeroporto - Hotel - Aeroporto (Cusco).</li>
                          <li><i class="icon-ok-circle-1"></i>Translado Rodoviária – Hotel – Rodoviária em Puno.</li>
                          <li><i class="icon-ok-circle-1"></i>Transporte turístico para cada Passeio.</li>
                          <li><i class="icon-ok-circle-1"></i>Guias profissionais para cada passeio.</li>
                          <li><i class="icon-ok-circle-1"></i>Passeios em Lima: City Tour Moderno e Colonial e Pachacamac.</li>
                          <li><i class="icon-ok-circle-1"></i>Passeio em Cusco: City Tour Arqueológico, Vale Sagrado e Machu Picchu.</li>
                          <li><i class="icon-ok-circle-1"></i>3 Noites Hotel em Lima.</li>
                          <li><i class="icon-ok-circle-1"></i>4 Noites Hotel em Cusco.</li>
                          <li><i class="icon-ok-circle-1"></i>1 Noites Hotel em Machupicchu.</li>
                          <li><i class="icon-ok-circle-1"></i>2 Noites Hotel em Puno.</li>
                          <li><i class="icon-ok-circle-1"></i>Passeios em Puno: Ilhas Flutuantes de Uros e Taquile.</li>
                          <li><i class="icon-ok-circle-1"></i>Passeio Rota do Sol com guia profissional de Cusco – Puno.</li>
                          <li><i class="icon-ok-circle-1"></i>Ônibus executivo Puno - Cusco.</li>
                          <li><i class="icon-ok-circle-1"></i>Ingresso para Machu Picchu por 1 dia.</li>
                          <li><i class="icon-ok-circle-1"></i>Serviço do Trem Ida e Volta Ollantaytambo – Aguas Calientes - Ollantaytambo (CLASSE TURISTICO).</li>
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
					<li><i class="icon-cancel-circle-2"></i>Almoço e Jantar.</li>
                    <li><i class="icon-cancel-circle-2"></i>Bilhete turístico completo 45 dólares (Serve para ingressar aos sítios arqueológicos do Vale Sagrado e o City Tour Arqueológico).</li>
                    <li><i class="icon-cancel-circle-2"></i>Bilhete turístico Rota do Sol 15 dólares.</li>
                    <li><i class="icon-cancel-circle-2"></i>Voo: Brasil - Lima - Brasil.</li>
                    <li><i class="icon-cancel-circle-2"></i>Voo: Lima - Cusco – Lima.</li>
                    <li><i class="icon-cancel-circle-2"></i>Seguro de Viagem.</li>
                    <li><i class="icon-cancel-circle-2"></i>Outros que não estão indicados acima.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1f52W5156FHtErA2C2fmxzHyK7ug" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<th colspan="7">
				<h4><span>Paquete + Hotel+Bus+Tren(Clase turístico)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><strong>CATEGORÍA</strong></td>
				<td><strong>HOTELES<br> EN LIMA</strong></td>
				<td><strong>HOTELES<br> EN PUNO</strong></td>
				<td><strong>HOTELES<br> EN CUSCO</strong></td>
				<td><strong>HOTELES<br> EN AGUAS CALIENTES</strong></td> 
				<td><strong>DOBLE</strong></td> 
				<td><strong>TRIPLE&#160</strong></td> 
				</tr>  
				<tr> 
				<td><h5>CLASE<br>ECONÓMICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Monte Real<br><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Helena</td>
				<td><i class="icon-play-5"></i>Hotel Prisma</td>
				<td><i class="icon-play-5"></i>Hotel Continental</td>
				<td>$ 1115</td>
				<td>$ 1065</td>  
				</tr>   
				<tr> 
				<td><h5>CLASE<br>TURÍSTICO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Carmel<br> <i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>H.<br>Sol Plaza Inn</td>
				<td><i class="icon-play-5"></i>H. S.A Internacional</td>
				<td><i class="icon-play-5"></i>Hotel Inka Town</td>
				<td>$ 1260</td>
				<td>$ 1150</td> 
				</tr>   
				<tr> 
				<td><h5>CLASE<br>SUPERIOR</h5></td>
				<td><i class="icon-play-5"></i>San Agustin Exclusive<br><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"><i class="icon-star voted"></td>
				<td><i class="icon-play-5"></i>Hotel Royal INN</td>
				<td><i class="icon-play-5"></i>San Agusntin Dorado</td>
				<td><i class="icon-play-5"></i>Hotel Intitpunku Mapi</td>
				<td>$ 1435</td>
				<td>$ 1305</td> 
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
			include("includes/costados/pacotes-peru.php");
			include("includes/costados/pacote-plus.php");
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