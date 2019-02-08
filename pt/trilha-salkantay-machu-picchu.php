<?php
$nombre_paquete = 'Trilha salkantay machu picchu';
$numero_dias='4 dias e 3 noites';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="Trilha Salkantay ou Trilha Salcantay é um nevado que é de aproximadamente 6.271 metros acima do nível do mar, que, por sua vez, está rodeado pelos nevados de Umantay e outros. Esta trilha por Salkantay - Salcantay tem uma duração de 4 dias e 3 noites, onde pode desfrutar de paisagens espetaculares e muitas experiências emocionantes. ";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Salkantay Machu-picchu";
$url_category="salkantay-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/laguna-de-humantay.jpg";

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

                <?php   $url_s = "trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites.jpg";

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
                        Preço desde<span><sup>$</sup>330</span>Por pessoa
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
					 <p>Trilha Salkantay ou <strong>Trilha Salcantay</strong> é um nevado que é de aproximadamente 6.271 metros acima do nível do mar, que, por sua vez, está rodeado pelos <strong>nevados de Umantay</strong> e outros. Esta <strong>trilha por Salkantay</strong> - Salcantay tem uma duração de 4 dias e 3 noites, onde pode desfrutar de paisagens espetaculares e muitas experiências emocionantes. </p>				 
					 <p>Muitas trilhas levam a <strong>Machu Picchu</strong>, mas a <strong>trilha do Salkantay</strong> - <strong>Salcantay</strong> é uma rota fascinante e maravilhosas. As Temperaturas variando de -5ºC a 26 ºC; altitudes suportáveis de 1.800m atingindo 4.650m acima do nível do mar. Montes nevados e matas fechadas, terra áridas, pedregosas e muitos vales férteis com rios e cachoeiras.</p>             		
              		<p>Com 74 km a trilha Salkantay - Salcantay na imponente cordilheira dá ao viajante uma noção da riqueza do ecossistema encontrado no Peru.</p>              		
              		<p>A melhor época para fazer a <strong>Trilha Salkantay</strong> - <strong>Salcantay</strong> é de Abril a Novembro quando tem pouca chuva e céu aberto.A <strong>trilha Salkantay</strong> - Salcantay é uma excelente alternativa para quem quer fugir das reservas da trilha inca clássica e ter uma linda experiência visual e temos saídas diárias.</p>             		
              		<p>A trilha do monte Salkantay- Salcantay inclui um pernoite num hotel no povoado de <strong>Machu Picchu</strong> no 3º dia pela noite. Por isso o valor do pacote varia de acordo à categoria dos hotéis e o tipo de acomodação.</p>
                </div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>CUSCO - MOLLEPATA - SORAYPAMPA</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Ao amanhecer passaremos a buscá-lo em seu Hotel a hora marcada, juntaremos o grupo e viajaremos em nosso ônibus privado com destino ao ponto de partida, chamada MOLLEPATA. É um povoado andino que ainda conserva as casas antigas coloniais e as fazendas dos antigos moradores.</p>
						<p>Chegando ao povoado, já podemos observar a nevado de Salkantay ou Salcantay, logo nos apresentaremos a nossos carregadores, que estarão nos esperando com os cavalos e enquanto isso você pode tirar vantagem de um delicioso café da manhã local. Começaremos o trekking passando por vales cheios de vegetação e casa das famílias quechuas. Subiremos pela imponente colina de CH´ALLACANCHA, desde ai se tivermos sorte poderemos apreciar o vôo dos condores.</p>						
						<p>A caminhada é suave sem pressão, porque se trata de desfrutar o máximo, logo chegaremos ao sitio de almoço e acampamento chamado SORAYPAMPA, após da sesta continuaremos nossa caminhada mais uma hora e meia para chegar a laguna sagrada de UMANTAY localizada ao lado dos nevados da montanha de Umantay e Salkantay onde apreciaremos a caída das aguas, o paisagem maravilhoso e a laguna de cor verde que é única da esta região de Cusco. (3.850 m.a.n.m) Distância 11 km, ao 1º acampamento de Soraypampa.</p>
					</ul> 
					<div class=" table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td>Altitúd</td>
							<td>3.965 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.850 msnm.</td>
						</tr>
						<tr>
							<td>Tiempo de caminata</td>
							<td>3 a 4 horas.</td>
						</tr>
						<tr>
							<td>Distancia: Aproximadamente  </td>
							<td>11 km.</td>
						</tr>
						<tr>
							<td>Pernocte Campamento:</td>
							<td>Tiendas de campaña</td>
						</tr>
						<tr>
							<td>Alimentación</td>
							<td>Almuerzo y la Cena.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/mollepata.jpg" title="Mollepata."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/mollepata.jpg" alt="Mollepata." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/soraypampa.jpg" title="Soraypampa."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/soraypampa.jpg" alt="Soraypampa." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/laguna-de-humantay.jpg" title="Laguna de Humantay."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/laguna-de-humantay.jpg" alt="Laguna de Humantay." class="img-responsive">
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
					<p>SORAYPAMPA - CHAULLAY - COLPAPAMPA</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Depois de um bom café da manhã, estaremos dispostos a continuar a nossa caminhada (considerada a mais forte da viagem), as 7h00 vamos cruzar a travessia por Salkantaypampa para ir logo para o lado esquerdo do nevado chamado Umantayblanco que está perto do nevado Salkantay, passando por Soyrococha que é uma lagoa no percurso da trilha salkantay e logo chegaremos  ao ponto mais alto da Passagem Salkantay e Humantay a( 4.650) metros a partir deste ponto poderão aproveitar ver as montanhas e geleiras do Salkantay, podendo muito bem apreciar as impressionantes avalanches que ocorrem no local, após descida  por volta de 1 hora até chegar ao ponto do almoço na comunidade de Huayracmachay.</p>
						<p>Depois do almoço continuaremos a nossa caminhada aproveitando a flora e fauna de esta região até chegar a nosso acampamento de Chaulay ou Colpapampa.</p>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td>Altitúd</td>
							<td>4.600 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.850 msnm.</td>
						</tr>
						<tr>
							<td>Tiempo de caminata</td>
							<td>8 a 9 horas.</td>
						</tr>
						<tr>
							<td>Distancia: Aproximadamente  </td>
							<td>22 km.</td>
						</tr>
						<tr>
							<td>Pernocte Campamento:</td>
							<td>Tiendas de campaña</td>
						</tr>
						<tr>
							<td>Alimentación</td>
							<td>Almuerzo y la Cena.</td>
						</tr>
						</tbody>
						</table>
						</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/camino-salcantay.jpg" title="Camino salkantay."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/camino-salcantay.jpg" alt="Camino salkantay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/huayracmachay.jpg" title="Huayracmachay."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/huayracmachay.jpg" alt="Huayracmachay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/campamento-en-chaullay.jpg" title="campamento en Chaullay."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/campamento-en-chaullay.jpg" alt="campamento en Chaullay." class="img-responsive">
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
					<p>COLPAPAMPA – HIDROELÉCTRICA – AGUAS CALIENTES</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Este dia depois de tomar o café da manha, no precurso de viagem vamos apreciar a diversidade de flora e fauna, tambem o maravilhoso vale de santa teresa. Mas adiante apreciaremos um rio subterrâneo e no mesmo local é a divisa entre a Hidrelétrica e Machupicchu onde produz electricidade para consumo na cidade de Cusco.</p>
						<p>Chegamos ao povoado da Playa, onde vamos almoçar e logo vamos pegar o carro por 1 hora e meia, ate o povoado de hidro eléctrica,  depois nos despediremos das pessoas de apoio, após continuamos a caminhada mais 3 horas ate o povoado de Aguas calientes, aproveitando a vista panoramica da cidadela de Machu Picchu, e tambem de como esta localizado.</p> 
					   <p>Em Àguas Calientes haverá um quarto em um Hostal para pernoitar.</p>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td>Altitúd</td>
							<td>2.850 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.040 msnm.</td>
						</tr>
						<tr>
							<td>Tiempo de caminata</td>
							<td>7 a 8 horas.</td>
						</tr>
						<tr>
							<td>Distancia: Aproximadamente.</td>
							<td>18 km.</td>
						</tr>
						<tr>
							<td>Pernocte Campamento:</td>
							<td>Tiendas de campaña</td>
						</tr>
						<tr>
							<td>Alimentación</td>
							<td>Almuerzo y la Cena.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/tren-a-la-hidroelectrica.jpg" title="Tren a la Hidroeléctrica."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/tren-a-la-hidroelectrica.jpg" alt="Tren a la Hidroeléctrica." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/pueblo-de-aguas-calientes.jpg" title="pueblo de Aguas Calientes."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/pueblo-de-aguas-calientes.jpg" alt="pueblo de Aguas Calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/complejo-arqueologico-de-machu-picchu.jpg" title="Complexo Arqueologico de Machu Picchu."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/complejo-arqueologico-de-machu-picchu.jpg" alt="Complexo Arqueologico de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> <hr>                   
                </div>				
                <div class="col-md-2"> 
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 4</span></h3> 
					<p>DIA 04: ÀGUAS CALIENTES - MACHUPICCHU - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Depois do café da manhã, por volta de 05h00 da manhã. Iremos-nos subir a pé em direção a cidade inca de Machu Picchu. O objetivo é chegar cedo à cidade de Machu Picchu para ver o nascer do sol e tirar os melhores fotos clássicos de MachuPicchu, antes da chegada de turistas que começam a chegar com o primeiro ônibus às 07h00. Depois terão visita guiada pelos principais templos e complexos arqueológicos de Machu Picchu e depois se possui a entrada a Huaynapicchu terá tempo livre para a subida a montanha de Huaynapicchu para ver a paisagem e visitar o Templo da Lua.</p>
						<p>Após descerão ao povoado de Aguas Calientes para almoçar e logo pegar o trem de retorno de acordo ao horário de saída.  Neste dia você estará retornando a Cusco, com trem de Águas Calientes à Ollantaytambo por 2 horas de viagem e depois nosso carro ou van estará esperando para transladar de Ollantaytamboaté Cusco.</p>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped"> 
						<tbody>
						<tr>
							<td>Altitúd</td>
							<td>2.450 msnm.</td>
						</tr>
						<tr>
							<td>Altitud mínima</td>
							<td>2.040 msnm.</td>
						</tr>
						<tr>
							<td>Tiempo de caminata</td>
							<td>1horas y 30 minutos.</td>
						</tr>
						<tr>
							<td>Distancia: Aproximadamente.</td>
							<td>5 km.</td>
						</tr>
						<tr>
							<td>Pernocte Campamento:</td>
							<td>Tiendas de campaña</td>
						</tr>
						<tr>
							<td>Alimentación</td>
							<td>Almuerzo y la Cena.</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/complejo-arqueologico-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/complejo-arqueologico-de-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/desayuno.jpg" title="Desayuno en aguas calientes."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/desayuno.jpg" alt="Desayuno en aguas calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/bus-de-regreso-a-cusco.jpg" title="Retorno al cusco en bus."><img src="img/trilha-salkantay/camino-salkantay-a-machu-picchu-4-dias-3-noites/bus-de-regreso-a-cusco.jpg" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>  
					</div> 
                <hr>  
                </div>                
            </div> 
          	<hr>
            <div class="row">
                <div class="col-md-2">
                    <h3><span>INCLUI</span></h3>
                </div>
                <div class="col-md-10">
					 <ul class="list_icons"> 
						<li><i class="icon-ok-circle-1"></i>Transporte do seu hotel até o povoado de Mollepata.</li>
                        <li><i class="icon-ok-circle-1"></i> Guia profissional no idioma Inglês e Espanhol(A partir de 6 pessoas no idioma português).</li>
                        <li><i class="icon-ok-circle-1"></i>3 cafés da manhã / 3 almoços / 3 jantares.</li>
                        <li><i class="icon-ok-circle-1"></i>Cozinheiro e equipamentos para cozinhar.</li>
                        <li><i class="icon-ok-circle-1"></i>Você terá a opção de colocar 5 quilos para o cavalo até o terceiro dia.</li>
                        <li><i class="icon-ok-circle-1"></i>1 noite hotel em Águas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>Ingresso de entrada para Machu Picchu.</li>
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
                        <li><i class="icon-cancel-circle-2"></i>Almoço e jantar no último dia.</li>
                        <li><i class="icon-cancel-circle-2"></i>Saco de dormir.</li>
                        <li><i class="icon-cancel-circle-2"></i>Ônibus de Subida e descida de Aguas calientes – Machu picchu.</li>
                        <li><i class="icon-cancel-circle-2"></i>Visita aos banhos termais de Águas Calientes. Podendo relaxar enquanto espera pelo trem de volta a Cusco. Está localizado a 10 minutos a pé do povoado. O custo de entrada é S/.10.00. As toalhas podem alugar-se em Águas Calientes.</li>		
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1aGMaZr7VeGQBlaYJkXs0dGPUnoI" target="_blank"><img src="img/ver mapa.png"></a>  
                </div>    
            </div>
            <hr>
            <form method="post" action="reserva.php">
            <div class="row">
				<div class="col-md-2">
					<h3><span>Precio</span></h3>
				</div>
			<div class="col-md-10">
				<div class=" table-responsive">
					<table class="table table-striped">
					<thead>
					<tr>
						<th colspan="4">
							<h4><span>Clase Económica </span></h4>
						</th>
					</tr> 
					</thead>
					<tbody>
					<tr> 
						  <td><strong>PESSOA</strong></td>
						  <td>Adulto</td>
						  <td>Estudante</td> 
						</tr>  
						<tr> 
						  <td rowspan="3">PREÇO</td>
						  <td rowspan="3"><label class="centrar">$ <strong>350</strong></label></td>
						  <td rowspan="3"><label class="centrar">$ <strong>330</strong></label></td> 
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
			include("includes/atencion-cliente.php"); ?>        
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