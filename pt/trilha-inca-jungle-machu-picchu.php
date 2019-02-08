<?php
$nombre_paquete = 'Trilha Inca Jungle Machu Picchu';
$numero_dias='4 dias e 3 noites';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="O Caminho Inca Jungle, é uma escolha de aventuras no ciclismo e na caminhada até Machu Picchu 4D/3N essa descida emocionante de Bike e caminhada pela selva Inca, será um passeio extraordinário e maravilhoso, onde se pode desfrutar de atividades diferentes e plantações nativas, tais como a secagem do café, bananais, e a sagrada folha de coca.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Trihas Alternativas";
$url_category="trihas-alternativas";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/banhos-medicinais-terapeuticos-de-cocalmayo.jpg";

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

                <?php   $url_s = "trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites.jpg";

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
                        Preço desde<span><sup>$</sup>300</span>Por pessoa
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
					 <p>O <strong>Caminho Inca Jungle</strong>, é uma escolha de <strong>aventuras no ciclismo</strong> e na caminhada até <strong>Machu Picchu</strong> 4D/3N essa descida emocionante de <strong>Bike</strong> e caminhada pela <strong>selva Inca</strong>, será um passeio extraordinário e maravilhoso, onde se pode desfrutar de atividades diferentes e plantações nativas, tais como a secagem do café, bananais, e a sagrada folha de coca. </p>					 
					 <p>Esta <strong>Trilha Inca Jungle</strong> é uma grande alternativa para pessoas que querem uma forma tranqüila e agradável, também para não ter problemas na altitude, um pouco diferente de ter mais contato com os povos locais que vivem do outro lado da cidade da região de <strong>Cusco</strong>.</p>             		
              		<p>Esta opção é cheia de adrenalina, excelentes vistas e passeios inesquecíveis!</p>               		
                </div>
            </div>            
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>CUSCO - SANTA MARIA (BIKE)</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Primeiramente nosso transfer passará para buscá-los no hotel meia hora antes da saída, nossa viagem dura por volta de 4h30m e no decorrer da viagem observaremos impressionantes paisagens, como as montanhas mais altas da região, como o Nevado Veronica e Pitusiray, que se encontra quase a 5800 m.a.n.m, também vamos ver os pitorescos povoados de Poroy, chinchero e Ollantaytambo onde tomaremos a pista pela margem direita para elevarmos até a altura de 4350 metros sobre o nivel do mar, encontraremos a Abra del Malaga, ponto místico onde se realiza cerimônias de agradecimento a Pachamama (Terra Mãe) com muita freqüência. Neste ponto já poderemos observar todo o Vale da Convencion, onde também será o ponto onde podemos coordenar com o guia para começar nossa aventura Full Adrenalina, mas no caso que esteja neblina baixa, desceremos com o carro até um local que se chama San Luis onde nosso guia nos entregará as bicicletas, onde começaremos uma das excursões mais lindas do mundo comparada somente com a de Coroico na Bolivia, iremos descendo em Down Hill, observando a Imensidão do Vale da Convencion e conforme desceremos irão encontrar diferentes espécies da flora e fauna, visitaremos na metade do caminho as Ruínas dos Inkas do Wamanmarka.Iremos almoçar e seguiremos viagem por mais 4 horas de bike e chegaremos a 1430 metros de altura em Santa Maria. (nossa primeira noite em um lodge de serviços básicos). Onde teremos o jantar em uma região de floresta e teremos um pequeno resumo e comentário sobre o trekking do dia seguinte com todo o grupo.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/abra-malaga.jpg" title="El abra de malaga."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/abra-malaga.jpg" alt="El abra de malaga." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/bicicleteada.jpg" title="andar de bicicleta."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/bicicleteada.jpg" alt="andar de bicicleta." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/vale-da-convencion.jpg" title="Vale da Convención."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/vale-da-convencion.jpg" alt="Vale da Convención." class="img-responsive">
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
					<p>SANTA MARIA - SANTA TERESA (TREKKING)</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Depois de um bom café da manhã, com muitas vitaminas a base de banana, laranjas, mamão e outras frutas da região, estaremos dispostos a começar a nossa fantástica caminhada cheia de aventuras, caminharemos por lugares cheios de vegetação onde podemos apreciar o cultivo e a secagem do café , assim como a planta sagrada dos Incas a folha de COCA, caminharemos por segmentos de caminhos incas originais, onde encontraremos com a história kapac ñan (redes de caninhos inca), hoje degradada pelo tempo, depois da energética caminhada com seu ar mais puro do mundo, teremos a oportunidade de ingressar aos Banhos Termos-Medicinais de Cocalmayo em Santa Teresa para relaxar depois de um dia de caminhada, chegaremos a Santa Teresa onde jantaremos e dormiremos, na hora do jantar teremos uma coordenação do guia para o dia seguinte.</i>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/vale-sagrado-dos-incas.jpg" title="Vale Sagrado dos Incas."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/vale-sagrado-dos-incas.jpg" alt="Vale Sagrado dos Incas." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/banhos-medicinais-terapeuticos-de-cocalmayo.jpg" title="Banhos medicinais terapêuticos de Cocalmayo."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/banhos-medicinais-terapeuticos-de-cocalmayo.jpg" alt="Banhos medicinais terapêuticos de Cocalmayo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/pueblo-de-aguas-calientes.jpg" title="Pueblo de Aguas Calientes."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/pueblo-de-aguas-calientes.jpg" alt="Pueblo de Aguas Calientes." class="img-responsive">
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
					<p>SANTA TERESA - ÁGUAS CALIENTES (CAMINHADA)</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Este dia é memorável por sua variedade de flora e fauna que veremos no decorrer do dia, como borboletas, loros, iguanas, aves e insetos.
						Este dia sairemos às 9h45 em busca das pontes levadiças assim como cruzar o Rio Vilcanota (Rio Sagrado dos Incas) através de uma tirolesa onde poremos a prova nossa aventura e adrenalina, este ponto é um dos mais emocionantes e divertidos. e também visitaremos o Inti Watana (relógio solar) e almoçaremos na Hidroelétrica com comidas típicas da zona.
						Finalmente chegaremos a Águas Calientes, a última noite da viagem, teremos um jantar e uma reunião com nossos guias para indicar sobre o dia mais grandioso de suas vida, a Visita a Cidade Sagrada de Machu Picchu.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/tren-a-la-hidroelectrica.jpg" title="Tren a la Hidroeléctrica."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/tren-a-la-hidroelectrica.jpg" alt="Tren a la Hidroeléctrica." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/pueblo-de-aguas-calientes.jpg" title="Pueblo de Aguas Calientes."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/pueblo-de-aguas-calientes.jpg" alt="Pueblo de Aguas Calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/sitio-arqueologico-machu-picchu.jpg" title="Sitio arqueologico de machu picchu."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/sitio-arqueologico-machu-picchu.jpg" alt="Sitio arqueologico de machu picchu." class="img-responsive">
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
					<p>MACHU PICCHU FULL DAY</p>
				</div>
					<ul class="list_icons descripcion">
						<li>Depois do café da manhã, começaremos a caminhada rumo ao sítio arqueológico de Machu Picchu uma das Maravilhas do Mundo Moderno, para apreciar o amanhecer de Machu Picchu, nesta caminhada nos subiremos desde 1980 m.a.n.m até a chegada em 2450 m.a.n.m. A visita guiada por um Guia Oficial em Inglês ou Espanhol terá duas horas de duração, e em seguida, terão tempo livre para tirar fotos, e caminhar por sua conta, meditar, e entre outros, neste mesmo dia você estará retornando ao Cusco, tomaremos o trem de Águas Calientes a Ollantaytambo, onde nosso van ou bus estará aguardando para levá-los até Cusco chegando a as 21h45.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/sitio-arqueologico-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/sitio-arqueologico-machu-picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/pueblo-de-aguas-calientes.jpg" title="Partida do Aguas Calientes."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/pueblo-de-aguas-calientes.jpg" alt="Partida do Aguas Calientes." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/bus-de-regreso-a-cusco.jpg" title="bus de regreso a cusco."><img src="img/trilhas-alternativas/camino-inca-jungle-machu-picchu-4-dias-3-noites/bus-de-regreso-a-cusco.jpg" alt="bus de regreso a cusco." class="img-responsive">
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
                    <h3><span>INCLUI </span></h3>
                </div>
                <div class="col-md-10">
					 <ul class="list_icons"> 
                   	<li><i class="icon-ok-circle-1"></i>Transporte turístico Cusco-Puerto Malaga.</li>
                    <li><i class="icon-ok-circle-1"></i>Bicicletas com suspensão dianteira.</li>
                    <li><i class="icon-ok-circle-1"></i>Alimentação 3 almoços, 3 cafés da manhã e 3 jantares.</li>
                    <li><i class="icon-ok-circle-1"></i>3 noites de hospedagem.</li>
                    <li><i class="icon-ok-circle-1"></i>Tickets de entrada em Machu Picchu.</li>
                    <li><i class="icon-ok-circle-1"></i>Guia Oficial (Espanhol e Inglês).</li>
                    <li><i class="icon-ok-circle-1"></i>Trem de retorno (Aguas Calientes.</li>
                    <li><i class="icon-ok-circle-1"></i>Ollantaytambo).</li>
                    <li><i class="icon-ok-circle-1"></i>Maleta de primeiros socorros.</li>
                    <li><i class="icon-ok-circle-1"></i>Translado de Ollantaytambo - Cusco.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1lwks4RmJZ4M0-E8nBd_GjA-gg4o" target="_blank"><img src="img/ver mapa.png"></a>  
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
						  <td><strong> ADULTO</strong></td>
						  <td><strong> ESTUDENTE</strong></td> 
						</tr>  
						<tr> 
						  <td><strong> PREÇO</strong></td>
						  <td>$ 320</td>
						  <td>$ 300</td> 
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
			include("includes/costados/pacotes-alternativos.php");
			include("includes/costados/pacotes-mistos.php");
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