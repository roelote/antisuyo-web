<?php
$nombre_paquete = 'Trilha a Choquequirao';
$numero_dias='4 dias e 3 noites';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Coquequirao ou Berço de Ouro em quéchua fica em numa quebrada a 3.085 metros de altitude, esculpida em pedra pelos Incas, onde a organização do Império Tawantinsuyo (Quatro regiões) era estritamente dirigida por um governante Inca Choquequirao esta protegida pelo rio Apurímac. e esta rodeada pelos nevados de Yanama, Ampay, Choquetarpu e Pumasillo .Trata-se de uma clássica cidade inca, com setores sagrado, templos ritualísticos, centros astronômicos, urbanístico e agrícola.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Trihas Alternativas";
$url_category="trihas-alternativas";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/camino-choquequirao-cachora.jpg";


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

                <?php   $url_s = "trilhas-alternativas/camino-choquequirao-4-dias-3-noites.jpg";

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
                        Preço desde<span><sup>$</sup>430</span>Por pessoa
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
					 <p><strong>Coquequirao</strong> ou Berço de Ouro em quéchua fica em numa quebrada a 3.085 metros de altitude, esculpida em pedra pelos <strong>Incas</strong>, onde a organização do <strong>Império Tawantinsuyo</strong> (Quatro regiões) era estritamente dirigida por um governante <strong>Inca</strong></p>					 
					 <p><strong>Choquequirao</strong> esta protegida pelo <strong>rio Apurímac</strong>. e esta rodeada pelos nevados de <strong>Yanama</strong>, <strong>Ampay</strong>, <strong>Choquetarpu</strong> e <strong>Pumasillo</strong> .Trata-se de uma clássica cidade <strong>inca</strong>, com setores sagrado, templos ritualísticos, <strong>centros astronômicos</strong>, <strong>urbanístico e agrícola</strong>.</p>
             		 <p>Apenas 30% de sua área total se encontram escavados, mas uma parceria entre os<strong> governos do Peru</strong> e da França promete acelerar os trabalhos e, eles apostam transformá-la numa nova <strong>Machu Picchu</strong>.</p>              		
              		<p>Choquequirao foi o ultimo bastião da resistência inca ante a invasão espanhola, e faz parte da trilha mais desafiante da <strong>Cordilheira dos Andes</strong>.</p>              		
              		<p>Limitada pelos profundos <strong>cânions do Apurímac</strong> e <strong>Willcamayu</strong>, Conhecer de perto tanto <strong>Vilcabamba</strong> como <strong>Choquequirao</strong> exige tempo e ainda mais <strong>espírito de aventura</strong> do que percorrer a Trilha de Salcantay ou mesmo a <strong>Trilha Inca</strong>.</p>
                </div>
            </div>
			<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>CUSCO - CACHORA - COCAMASANA - PLAYA ROSALINA</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Saímos às 4h:00 da cidade de Cusco nos dirigindo a Cachora. Chegando aproximadamente as 7h30 no povoado de Cachora, onde tomaremos o café da manhã e preparemos nossos equipamentos nos cavalos para logo começar nossa caminhada.</p>
						<p>Depois de 2 horas de caminhada chegaremos a Capuliyoc (2915 m.a.n.m) de onde descemos até a Coca Masana (2330 m.a.n.m) aonde o clima chega ser mais quente, a flora e fauna começa a mudar.Finalmente chegaremos a Playa Rosalina (1550 m.a.n.m) que fica ao lado do Rio Apurimac onde nos instalaremos e acamparemos para passar a noite.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/camino-choquequirao-cachora.jpg" title="Localidad de cachora."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/camino-choquequirao-cachora.jpg" title="Localidad de cachora." alt="Localidad de cachora." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/coca-masana.jpg" title="Coca Masana."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/coca-masana.jpg" alt="Coca Masana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/playa-rosalina.jpg" title="Playa rosalina."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/playa-rosalina.jpg" alt="Playa rosalina." class="img-responsive">
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
					<p>PLAYA ROSALINA - CHOQUEQUIRAO</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Depois de um bom café da manhã, estamos dispostos a continuar a nossa caminhada (considerado o mais impressionante da viagem), Sairemos muito cedo e começaremos o caminho zigzagante durante 5 horas aprox. chegando a Raqaypata que está ao lado do Rio de Chunchullumayo onde teremos nosso almoço.</p>
						  <p>Ao decorrer da caminhada podemos observar variedades de orquídeas, flores silvestres e também muito pássaros. De Raqaypata a Choquequirao (3035 m.a.n.m) caminharemos por 2 horas aproximadamente até chegar ao Sitio Arqueológico de Choquequirao e onde teremos a possibilidade de observar a entrada do sol e o vôo do condor. Nosso acampamento será próximo as ruínas.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/marampata.jpg" title="Marampata."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/marampata.jpg" alt="Marampata." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/variedad-de-plantas.jpg" title="Apreciaremos variedades de orquídeas"><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/variedad-de-plantas.jpg" alt="Apreciaremos variedades de orquídeas" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/complexo-arqueologico-de-choquequirao.jpg" title="complexo arqueologico de choquequirao."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/complexo-arqueologico-de-choquequirao.jpg" alt="complexo arqueologico de choquequirao." class="img-responsive">
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
					<p>CHOQUEQUIRAO - RAYANPATA</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Este dia é memorável onde nos dedicaremos a explorar todas as Ruinas de Choquequirao, os lugares mais importantes, como Templos, Terraços Agrícolas, Zonas Militares, Centro Astronômico e os Templos Sagrados, que o guia lhes explicará a história e a importância dos sítios Arqueológicos, depois da visita guiada, terá tempo livre para visitar os diferentes setores do complexo.
						A tarde começaremos nossa caminhada de retorno a Raqaypata onde nos instalaremos e acamparemos para passar a noite.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/chegada-a-choquequirao.jpg" title="Chegada a Choquequirao."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/chegada-a-choquequirao.jpg" alt="Chegada a Choquequirao." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/choquequirao.jpg" title="complexo arqueologico de choquequirao."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/choquequirao.jpg" alt="complexo arqueologico de choquequirao." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/sitio-arqueologico-de-choquequirao.jpg" title="Exploração em Choquequirao."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/sitio-arqueologico-de-choquequirao.jpg" alt="Exploração em Choquequirao." class="img-responsive">
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
					<p>CHIKISCA - CACHORA - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Depois do Café da manhã continuaremos nossa viagem de retorno pelo mesmo caminho, que será mais tranqüilo porque desceremos até o Rio de Apurimac onde almoçaremos. E a tarde caminhará subindo por 2 horas até chegar a Chiquisca. Lugar do Acampamento.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/zona-de-capuliyoc.jpg" title="zona de Capuliyoc."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/zona-de-capuliyoc.jpg" alt="zona de Capuliyoc." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/retorno-a-cachora.jpg" title="Retorno a cachora."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/retorno-a-cachora.jpg" alt="Retorno a cachora." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/bus-de-regreso-a-cusco.jpg" title="Bus de regreso a cusco."><img src="img/trilhas-alternativas/camino-choquequirao-4-dias-3-noites/bus-de-regreso-a-cusco.jpg" alt="Bus de regreso a cusco." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Transporte do seu hotel pela manhã e translado de bus a Cachora (local de início da caminhada).</li>
                         <li><i class="icon-ok-circle-1"></i>Guia Profissional Bilíngüe.</li>
                         <li><i class="icon-ok-circle-1"></i>Alimentação 4 cafés da manhã / 4 almoços / 3 jantares.</li>
                         <li><i class="icon-ok-circle-1"></i>Cozinheiro e equipamentos para cozinhar.</li>
                         <li><i class="icon-ok-circle-1"></i>Arreio e cavalo (que transportam as barracas, alimentos e equipamentos para cozinhar).</li>
                         <li><i class="icon-ok-circle-1"></i>Translado e retorno de Cachora a Cusco.</li>
                         <li><i class="icon-ok-circle-1"></i>Barracas e Isolante Térmico duplas com capacidade para 3 pessoas.</li>
                         <li><i class="icon-ok-circle-1"></i>Mesas, cadeiras, Barraca refeitório, Barraca cozinha.</li>
                         <li><i class="icon-ok-circle-1"></i>Balão de Oxigênio.</li>
                         <li><i class="icon-ok-circle-1"></i>Kit de primeiros socorros.</li>
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
						<li><i class="icon-cancel-circle-2"></i>Cavalo extra para os itens pessoais de 1 a 4 dias. 25 USD por dia.</li>
                        <li><i class="icon-cancel-circle-2"></i>Saco de dormir 25 USD.</li>
                        <li><i class="icon-cancel-circle-2"></i>Gorjetas.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1MQYd7gkhwjPSJIYNyc06YqcGZ4o" target="_blank"><img src="img/ver mapa.png"></a>  
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
							<h4><span>Classe Econômica</span></h4>
						</th>
						</tr> 
					</thead>
					<tbody>
					<tr> 
						  <td><strong> PESSOA</strong></td>
						  <td><strong>ADULTO</strong></td>
						  <td><strong>ESTUDENTE</strong></td> 
						</tr>  
						<tr> 
						  <td><strong> PREÇO</strong></td>
						  <td>$ 450</td>
						  <td>$ 430</td> 
						</tr>    
					  </tbody> 
					</table> 
				</div> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input name="envioreserva" type="submit" value="ENVIAR RESERVA" class="btn_1" id="submit-contact">
            
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
 <script>
  $('input.date-pick').datepicker('setDate', 'today');
   </script>

 
<script src="../assets/validate.js"></script>
  </body>
</html>