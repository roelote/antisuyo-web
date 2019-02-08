<?php
$nombre_paquete = 'Trilha salkantay machu picchu';
$numero_dias='5 dias e 4 noites';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="description";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="category";
$url_category="urlcategory";
$url_foto_seo="https://www.antisuyotrekperu.com/es/img/caminatas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noches/costumbes-en-umasbamba.jpg";

?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="pt-br">
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

                <?php   $url_s = "chinchero-tour.jpg";

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
					 <p><strong>Trilha Salkantay</strong> é um nevado que está a, aproximadamente, 6.271 metros acima do nível do mar. Ao seu redor, se vê o <strong>nevado de Umantay</strong> e outros. A Trilha por <strong>Salkantay</strong> tem uma duração de 5 dias e 4 noites, onde você desfrutará de paisagens espetaculares e viverá muitas experiências emocionantes.</p>					 
					 <p>A <strong>trilha Salkantay</strong> é recomendado e nomeado entre as 25 melhores trilhas do mundo, pela revista National Geographic Adventure Travel. Excursão que inicia nas margens do <strong>Salkantay</strong> (<strong>Montanha de Salcantay</strong>) passando pela  floresta e ingressando  ao vale de <strong>Santa Teresa</strong>, para finalmente chegar em <strong>Machu Picchu</strong> o ponto final de esta fantástica aventura.</p>             		
              		<p>Há muitas trilhas que levam a <strong>Machu Picchu</strong>, más a <strong>Trilha Salkantay</strong> é uma rota fascinante. Temperaturas variando de -5ºC a 26 ºC; altitudes suportáveis de 1.600m.a.n.m atingindo até 4.650m.a.n.m; montes nevados e matas fechadas; terras áridas, pedregosas; e muitos vales férteis com rios e cachoeiras. Com 64 km, a <strong>Trilha Salkantay</strong> <strong>Machu Picchu</strong> na imponente cordilheira, dá ao viajante uma noção da riqueza de ecossistema encontrado no Peru.</p>
              		<p>A <strong>Trilha Salkantay</strong> é uma das grandes atrações do <strong>Cusco</strong>. A <strong>Cordilheira de Vilcabamba</strong>, onde o maciço nevado de Salkantay e a atração principal, é uma área maravilhosa e isolada.</p>              	
               	   <p>A <strong>Trilha Salkantay</strong> ou Salcantay é uma excelente alternativa para quem quer fugir das reservas da <strong>trilha inca</strong> Clássica, e ter uma linda experiência em contato com a natureza.</p>
                   <p>Aconselhamos aos viajantes que vão fazer a <strong>Trilha Salkantay</strong>, dois dias de aclimatação em <strong>Cusco</strong> - a Cidade Imperial dos Incas que está a 3.400 metros acima do nível do mar.</p>
                    <p>A melhor época para fazer a <strong>Trilha Salkantay</strong> <strong>Machu Picchu</strong> – <strong>Salcantay Machu Picchu</strong> é de Abril a Novembro quando tem pouca chuva e céu aberto. A Trilha Salkantay <strong>Machu Picchu</strong> é necessário enviar seus dados corretos para realizar a reserva, porque não se pode fazer cambio de nomes e data de viagem a <strong>Trilha Salkantay Machu Picchu</strong>.</p>
                    <p>A Trilha Salkantay Machu Picchu – Salcantay <strong>Machu Picchu</strong> inclui uma pernoite num hotel no povoado de <strong>Machu Picchu</strong> no 4º dia pela noite e já está incluído no pacote.</p>
                    <p><strong>Trilha Salkantay</strong> <strong>Machu Picchu</strong>: Trilha Inca Salkantay, <strong>Trilha Salkanta</strong>y a <strong>Machu Picchu</strong>, Caminho Salkantay e <strong>Machu Picchu</strong></p>                                  		
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
						<p>Ao amanhecer passaremos a buscá-lo em seu Hotel a hora marcada, juntaremos o grupo e viajaremos no ônibus privado com destino ao ponto de partida, chamada MOLLEPATA.</p> 
						<p>É um povoado andino que ainda conserva as casas antigas coloniais e as fazendas dos antigos moradores. Chegando ao povoado, ja podemos observar a nevado de Salkantay ou Salcantay, logo nos apresentaremos a nossos carregadores, que estarão nos esperando com os cavalos e enquanto isso você pode tirar vantagem de um delicioso café da manhã local. Começaremos o trekking passando por vales cheios de vegetação e casa das famílias quechuas. Subiremos pela imponente colina de CH´ALLACANCHA, desde ai se tivermos sorte poderemos apreciar o vôo dos condores.</p> 
						<p>A caminhada é suave sem pressão, porque se trata de desfrutar o máximo, logo chegaremos ao sitio de almoço e acampamento chamado SORAYPAMPA, após da sesta continuaremos nossa caminhada mais uma hora e meia para chegar a laguna sagrada de UMANTAY localizada ao lado dos nevados da montanha de Umantay e Salkantay onde apreciaremos a caída das aguas, o paisagem maravilhoso e a laguna de cor verde que é única da esta região de Cusco. (3.850 m.a.n.m) Distância 11 km, ao 1º acampamento de Soraypampa. </p>
					</ul> 
					<div class="table-responsive">
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
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d1/camino salkantay a machu picchu  Mollepata.jpg" title="Mollepata."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d1/camino salkantay a machu picchu  Mollepata.jpg" alt="Mollepata." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d1/camino salkantay a machu picchu  Soraypampa.jpg"title="Campamento de soraypampa."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d1/camino salkantay a machu picchu  Soraypampa.jpg" alt="Campamento de soraypampa." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d1/camino salkantay a machu picchu laguna de Humantay.jpg"title="Laguna de Humantay."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d1/camino salkantay a machu picchu laguna de Humantay.jpg" alt="Laguna de Humantay." class="img-responsive">
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
					<p>DÍA 02: SORAYPAMPA - CHAULLAY - COLPAPAMPA</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Depois de um bom café da manhã, estaremos dispostos a continuar a nossa caminhada (considerada a mais forte da viagem). Às 7h00 vamos fazer a travessia por Salkantay - pampa para ir ao lado esquerdo do nevado chamado Umantay, que está perto do nevado Salkantay - Salcantay.</p> 
						<p>Chegaremos por volta das 11h00, ao ponto mais alto da trilha. Passagem Salkantay Umantay à 4.650 metros à partir deste ponto, veremos as montanhas e geleiras do nevado Salkantay, podendo muito bem apreciar as impressionantes avalanches que ocorrem na montanha de Salkantay - Salcantay.</p>
						<p>Teremos uma parada de meia hora para tirar fotos e também participaremos a uma cerimônia do pago a Pacha Mama, que será feita pelo nosso guia da trilha perto das montanhas de Umantay e Salkantay apreciar a paisagem. Desceremos 1h30 a mais para almoçar no povoado de Huayracmachay. </p>
						<p>Em seguida continuaremos a nossa caminhada pela borda da floresta. Até chegar ao povoado de Chaullay ou Colpapampa às 17h00 (2.950 m.a.n.m) Distância 22 km, ao 2º acampamento. </p>
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
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d2/camino salkantay a machu picchu salkantay.jpg" title="Nevado de Salkantay."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d2/camino salkantay a machu picchu salkantay.jpg" alt="Nevado de Salkantay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d2/camino salkantay a machu picchu Huayracmachay.jpg" title="Huayracmachay."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d2/camino salkantay a machu picchu Huayracmachay.jpg" alt="Huayracmachay." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d2/camino salkantay a machu picchu campamento en Chaullay.jpg" title="Campamento en Chaullay."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d2/camino salkantay a machu picchu campamento en Chaullay.jpg" alt="Campamento en Chaullay." class="img-responsive">
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
					<p>COLPAPAMPA – PLAYA – SANTA TERESA.</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Este dia é memorável por sua variedade de flora e fauna que veremos no decorrer do dia. Apreciaremos a formação de águas termais em um pequeno vale ao entorno de colpapampa.<br>
						 Caminharemos 5 horas dentro da floresta conhecendo as variedades da vegetação.<br>
						Então chegaremos a um povoado chamado La Playa, almoçaremos e em seguida tomaremos um transporte por uma hora para Santa Teresa.</p>
						<p>Onde vamos seguir o rio Salkantay e Santa Teresa, com diferentes variedades de orquídeas e cachoeiras de grande magnitude, por sua vez, apreciaremos a variedade de café, árvores frutíferas, bananas, abacates, granadadilla. Finalmente, chegaremos ao acampamento de Huadquiña – Santa Teresa às 14h00, (2.250 m.a.n.m), apos na tarde tiram tempo livre para ir a nadar a uma das melhores fontes termais na região de Cusco, chamado (Colcalmayo) Distância 15 km, ao 3º acampamento.</p> 
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
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d3/camino salkantay a machu picchu santa teresa.jpg" title="Vale de Santa Teresa."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d3/camino salkantay a machu picchu santa teresa.jpg" alt="Vale de Santa Teresa." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d3/camino salkantay a machu picchu baños termo medicinales de Cocalmayo.jpg" title="Banhos medicinais terapêuticos de Cocalmayo."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d3/camino salkantay a machu picchu baños termo medicinales de Cocalmayo.jpg" alt="Banhos medicinais terapêuticos de Cocalmayo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d3/camino salkantay a machu picchu campamento para pasar la noche.jpg" title="Acampamento para a noite."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d3/camino salkantay a machu picchu campamento para pasar la noche.jpg" alt="Acampamento para a noite." class="img-responsive">
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
					<p>SANTA TERESA - HIDROELÉCTRICA - AGUAS CALIENTES</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Neste dia teremos uma caminhada inicial de 2h00. Passando pelo povoado de Santa Teresa, chegaremos ao ponte de Carrillochayuc aproximadamente às 10h00. Mais adiante apreciaremos um rio subterrâneo e no mesmo local é a divisa entre a Hidrelétrica de Aguas Calientes e setor hidrelétrica (onde se produze a energia elétrica para a cidade de Cusco).</p>
						<p>Almoçaremos no povoado de hidroelectrica. Depois teremos 2 horas de caminhada até o povoado de Águas Calientes, onde apreciaremos a paisagem da área e também têremos a oportunidade de observar as montanhas de Machupicchu e Huaynapicchu. Ao final chegaremos ao povoado de Aguas Calientes. Distância 16 km. Jantaremos e dormiremos no hotel escolhido á (2.250 m.a.n.m).</p>
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
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d4/camino salkantay a machu picchu tren-a-la-hidroelectrica.jpg" title="Tren a la Hidroeléctrica."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d4/camino salkantay a machu picchu tren-a-la-hidroelectrica.jpg" alt="Tren a la Hidroeléctrica." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d4/camino salkantay a machu picchu pueblo de Aguas Calientes.jpg" title="pueblo de Aguas Calientes."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d4/camino salkantay a machu picchu pueblo de Aguas Calientes.jpg" alt="pueblo de Aguas Calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d4/camino salkantay a machu picchu cusco clasico cultural machu picchu.jpg" title="Complexo Arqueologico de Machu Picchu."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d4/camino salkantay a machu picchu cusco clasico cultural machu picchu.jpg" alt="Complexo Arqueologico de Machu Picchu." class="img-responsive">
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
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Depois do café da manhã, por volta de 05h00 da manhã. Iremos-nos subir a pé em direção a cidade inca de Machu Picchu. O objetivo é chegar cedo à cidade de Machu Picchu para ver o nascer do sol e tirar os melhores fotos clássicos de Machu Picchu, antes da chegada de turistas que começam a chegar com o primeiro ônibus às 07h00. Depois terão visita guiada por 2 horas pelos principais templos e complexos arqueológicos de Machu Picchu e depois se possui a entrada a Huaynapicchu - Wayna Pichu terá tempo livre para a subida a montanha de Huaynapicchu – Wayna Pichu para ver a paisagem e visitar o Templo da Lua. Após descerão ao povoado de Aguas Calientes para almoçar e logo pegar o trem de retorno de acordo ao horário de saída.</p>
						<p>Neste dia você estará retornando a Cusco, com trem de Águas Calientes à Ollantaytambo por 2 horas de viagem e depois nosso carro ou van estará esperando para transladar de Ollantaytambo até Cusco.</p>
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
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d5/camino salkantay a machu picchu cusco clasico arqueologico machu picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d5/camino salkantay a machu picchu cusco clasico arqueologico machu picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d5/camino salkantay a machu picchu cusco clasico convencional desayuno.jpg" title="Desayuno en aguas calientes."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d5/camino salkantay a machu picchu cusco clasico convencional desayuno.jpg" alt="Desayuno en aguas calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d5/camino salkantay a machu picchu bus de regreso a cusco.jpg" title="Retorno al cusco en bus."><img src="img/paquetes/camino salkantay/camino salkantay a machu picchu 5d 4n/d5/camino salkantay a machu picchu bus de regreso a cusco.jpg" class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Transporte do seu hotel até o povoado de Mollepata.</li>
                        <li><i class="icon-ok-circle-1"></i>Guia profissional no idioma Inglês e Espanhol(A partir de 6 pessoas no idioma português).</li>
                        <li><i class="icon-ok-circle-1"></i>4 cafés da manhã / 4 almoços / 4 jantares.</li>
                        <li><i class="icon-ok-circle-1"></i>Cozinheiro e equipamentos para cozinhar.</li>
                        <li><i class="icon-ok-circle-1"></i>Arreios e cavalos (que transportarão as barracas, alimentos e equipamentos para cozinhar).</li>
                        <li><i class="icon-ok-circle-1"></i>Você terá 5 quilos para colocar seus coisas aos cavalos.</li>
                        <li><i class="icon-ok-circle-1"></i>1 noite hotel em Águas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>Ingresso de entrada para Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Ticket de trem (serviço Expeditions ) de Águas Calientes a Ollantaytambo.</li>
                        <li><i class="icon-ok-circle-1"></i>Translado Ollantaytambo -Cuzco</li>
                        <li><i class="icon-ok-circle-1"></i>Barracas para 2 pessoas.</li>
                        <li><i class="icon-ok-circle-1"></i>Isolante térmico</li>
                        <li><i class="icon-ok-circle-1"></i>Balão de Oxigênio</li>
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
                        <li><i class="icon-cancel-circle-2"></i>Visita aos banhos termais de Águas Calientes. Podendo relaxar enquanto espera pelo trem de volta a Cusco. Está localizado a 10 minutos a pé do povoado. O custo de entrada é S/ .10.00. As toalhas podem alugar-se em Águas Calientes.</li>
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
						  <td rowspan="3">Preço</td>
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
			include("includes/costados/pacotes-machu-picchu.php");
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