<?php
$nombre_paquete = 'Trilha inca clássica';
$numero_dias='4 dias e 3 noites';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour=" A Trilha Inca é um trecho de uma antiga estrada inca pavimentada com pedras que atravessam as montanhas acima do rio Urubamba e chega até a cidade de Machu picchu no Peru. Entretanto as estradas incas não se restringiram a este trajeto. Elas ligavam Cusco em todas as direções da América do Sul formando uma rede de comunicação de mais de 30.000 km,de Trilha Inca. ";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Trilha Inca Machu Picchu";
$url_category="trilha-inca-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/trilha-inca/camino-inca-clasico 4-dias-3-dias/piscakucho.jpg";

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

                <?php   $url_s = "trilha-inca/camino-inca-clasico-4-dias-3-noites.jpg";

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
                        Preço desde<span><sup>$</sup>480</span>Por pessoa
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
					<p> A <strong>Trilha Inca</strong> é um trecho de uma antiga estrada inca pavimentada com pedras que atravessam as montanhas acima do rio Urubamba e chega até a cidade de <strong>Machu picchu</strong> no Peru.</p>
					<p>Entretanto as estradas <strong>incas</strong> não se restringiram a este trajeto. Elas ligavam <strong>Cusco</strong> em todas as direções da América do Sul formando uma rede de comunicação de mais de 30.000 km,de <strong>Trilha Inca.</strong> </p>
					<p>Esta rede de estradas de <strong>Trilha Inca</strong> se estendia do centro do Equador até a região central do Chile, ao sul, e da costa do oceano Pacífico até as encostas orientais dos Andes. </p>
					<p>	A <strong>Trilha Inca</strong> é o trekking mais famoso da América do Sul e é classificado por muitos como uma das 5 melhores <strong>trilhas do mundo</strong>. Uma experiência única e quem o fez tem a certeza de que o esforço vale a pena! </p>
					<p>A <strong>Trilha Inca</strong> em 45 km consegue combinar a bela paisagem das montanhas, exuberante floresta e da selva sub-tropical. E claro, uma mistura impressionante de construções, ruínas e <strong>túneis Incas</strong>.</p>
					<p>O destino final da <strong>Trilha Inc</strong>a é <strong>Machu Picchu</strong>, a misteriosa "<strong>cidade perdida dos Incas</strong>". </p>               
                </div>
            </div> 
          	<hr> 
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
					<div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>CUSCO - KM 82 - HUAYLLABAMBA</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Buscaremos vocês no Hotel às 5h00 com nosso bus e nos dirigiremos a Piscakucho (2700) Povoado conhecida como o Km 82 por onde passa a via Ferroviária de trem de Cusco a MachuPicchu.</p> 
						<p>Começando nossa trekking desde o posto de controle da ponte e caminharemos ao lado esquerdo do Rio Urubamba que flui ao noroeste do Vale Sagrado.</p>                         
						<p>continuaremos nossa caminhada no trajeto do vale criado pelo Rio Kusichaca, subiremos gradualmente até chegar ao nosso primeiro acampamento de Wayllabamba (3000 m.a.n.m) onde teremos as vistas mais espetaculares do canto do Rio Vilcanota, no lado oposto do Rio Urubamba se pode ver o impressionante Nevado verônica (5832 m.a.n.m) ainda não e possível calcular a diversidade de flora e fauna que se pode encontrar no local</p> 
					</ul>
					<div class="row magnific-gallery">
					<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/piscakucho.jpg" title="Piscakucho."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/piscakucho.jpg" alt="Piscakucho." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div> 
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/campamento-wayllabamba.jpg" title="Wayllabamba."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/campamento-wayllabamba.jpg" alt="Wayllabamba." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/snowy-veronica.jpg" title="Snowy Veronica."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/snowy-veronica.jpg" title="Snowy Veronica." alt="Snowy Veronica." class="img-responsive">
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
					<p>WAYLLABAMBA - WARMIWAÑUSCA - PACAYMAYO</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Depois de um bom café da manhã, estaremos dispostos a continuar a nossa caminhada (considerada a mais forte da viagem), consiste em uma subida estreita e próxima a precipícios de (9 km). Ao longo desta subida a paisagem vai se modificando de Serras Puna (área seca e alta com pouca vegetação).</p>
                        <p>Este será o momento que chegaremos ao primeiro passo da montanha conhecida como Abra de Warmihuañuska (Passo da mulher morta)(4200 m.a.n.m)  podemos observar Llamas e Alpacas domésticas que pastam pelo Ichu (uma das poucas plantas que crescem nesta altitude).</p> 
                        <p>Também cruzaremos por uma área de bosque onde habitam diversas classes de animais como o pardais, passarinhos e o ursos Andino.</p>
                        <p>Sugerimos levar balas, chocolates e folhas de coca, e assim mantenham o nível alto de açúcar e controlar seu nível de Glicerina na altitude.</p>
                        <p>Imediatamente depois do passo descemos ao Vale de Pacaymayu (3600msnm) onde acamparemos depois de 6 horas de caminhada.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/warmiwanusca.jpg" title="Warmiwañusca."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/warmiwanusca.jpg" title="Warmiwañusca." alt="Warmiwañusca." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/descanso-en-winayhuayna.jpg" title="Descanso en Wiñayhuayna."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/descanso-en-winayhuayna.jpg" alt="Descanso en Wiñayhuayna." class="img-responsive">
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
					<p>PACAYMAYO - CHAQUICOCHA - WIÑAYHUAYNA</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Este dia é memorável por seu número de sítios arqueológicos que visitaremos e receberemos maiores informações de nosso guia.</p>
						<p>De Pacaymayu subiremos ao segundo passo o Abra de Runcurakay (3970 m.a.n.m ), no meio da manhã visitaremos o complexo arqueológico do mesmo nome, este sitio está situado a 3800 m.a.n.m, consiste em uma estrutura oval pequena que está constituída como uma atalaia (torre de vigia).</p>
						<p>Depois de passar pelo Passo descemos até Yanacocha (Lagoa Negra) e entraremos no Bosque nublado e finalmente para chegar a Sayacmarca (3624 m.a.n.m).</p>
						<p>Este é um complexo lindo feito de uma construção semi-circular com diversos níveis, de ruas estreitas, de fontes litúrgicas, pátios e canais de irrigação. Continuaremos por uma subida fácil, chegaremos ao terceiro passo o Abra Phuyupamarca (3700 m.a.n.m).</p>
						<p>Ao longo da nossa caminhada podemos apreciar a magnitude da arte antiga dos incas e ver as rochas que chegaram ao barranco em ordem perfeita.</p>
						<p>Seguiremos nossa caminhada para logo passar por um túnel Inca e chegar ao passo já mencionado, este é um dos complexos arqueológicos, mas completos e conservados e se encontra no ponto mais alto da montanha.</p>
						<p>Phuyupamarca significa " A nuvem sobre a Cidade" de onde poderemos observar um sofisticado complexo e composto das fontes de águas com uma fundação sólida e com vistas impressionantes do Rio Urubamba ao longo dele que continuaremos subindo até Wiñayhuayna (2700 m.a.n.m).</p>
						<p>Neste sitio encontraremos uma casa de campo com um restaurante, habitações com banheiro e chuveiro quentes. A cinco minutos do lugar de acampamento no complexo arqueológico de Wiñayhuayna do qual è composto de um centro agrícola com numerosos terraços religiosos e urbanos.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/valle-de-pacaymayo.jpg" title="Pacaymayo"><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/valle-de-pacaymayo.jpg" title="Pacaymayo" alt="Pacaymayo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div> 
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/abra-de-runkuraka.jpg" title="abra de Runkuraka."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/abra-de-runkuraka.jpg" alt="abra de Runkuraka." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/laguna-negra-de-yanacocha.jpg" title="Laguna Negra de Yanacocha."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/laguna-negra-de-yanacocha.jpg" alt="Laguna Negra de Yanacocha." class="img-responsive">
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
					<p>WIÑAYHUAYNA - MACHU PICCHU - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Este dia nos levantaremos às 4h00 da manhã para deixar Wiñayhuayna na hora indicada, subiremos até o Inti Punku (porta do sol ou nascer do Sol).</p>						 
						<p>O passeio nos tomará uma hora aproximadamente, depois vamos caminhar sobre as pedras planas que se encontram na borda da montanha onde podemos observar a saída do sol sobre a cidade de MachuPicchu. De Intipunku desceremos até Machpichu, chegando em 40 min.</p>
						<p>Chegando em MachuPicchu teremos uma visita guiada de aproximadamente 2 horas.</p>
						<p>Depois terão tempo livre para caminhar aos arredores da cidadela ou subir a montanha de HuaynaPicchu de onde poderá ver espetaculares vistas de vales e montanhas que rodeiam a cidadela de Machupicchu ou também visitar o Templo da Lua e a famosa Ponte Inca.</p> 
						<p>Podría también visitar el Templo de la Luna y el famoso Puente de Inca. En la tarde bajaran al pueblo de Aguas Calientes, donde podrá visitar los baños termales para relajarse después de 4 dias de caminata.</p>
						<p>A tarde desceremos ao povoado de Águas Calientes onde vocês poderão visitar os banhos termais para relaxar depois de 4 dias de caminhada. Aqui lhe entregaremos os Tickets de Trem de retorno ao povoado de Ollantaytambo, logo nosso ônibus lhe estará esperando para transportar a Cidade de Cusco, chegando por volta das 19h00 ou 21h30.</p> 
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/sitio-arqueologico-de-machu picchu.jpg" title="Sitio Arqueologica de Machu Picchu."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/sitio-arqueologico-de-machu picchu.jpg" alt="Sitio Arqueologica de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/o-intiwatana.jpg" title="O Intihuatana."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/o-intiwatana.jpg" title="O Intihuatana." alt="O Intihuatana" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/templo-do-sol.jpg" title="Templo del Sol."><img src="img/trilha-inca/camino-inca-clasico 4-dias-3-dias/templo-do-sol.jpg" alt="Templo del Sol." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Transporte do seu hotel até o Km 82.</li>
                        <li><i class="icon-ok-circle-1"></i>Bilhete de ingresso ao Caminho Inca e Machupicchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Guia profissional Inglês, Espanhol.</li>
                        <li><i class="icon-ok-circle-1"></i>Portadores: Os carregadores das Barracas, alimentação e equipamento da agencia.</li>
                        <li><i class="icon-ok-circle-1"></i>Barracas de passageiros para 2 pessoas.</li>
                        <li><i class="icon-ok-circle-1"></i>Isolante térmico para casa um.</li>
                        <li><i class="icon-ok-circle-1"></i>Mesas, cadeiras, refeitório, Barraca cozinha.</li>
                        <li><i class="icon-ok-circle-1"></i>Cozinheiro: Especializado na trilha inca.</li>
                        <li><i class="icon-ok-circle-1"></i>Acomodação para os guias, cozinheiro e portadores</li>
                        <li><i class="icon-ok-circle-1"></i>Alimentação 3 Cafés da manhã / 3 Almoços / 3 Jantares.</li>
                        <li><i class="icon-ok-circle-1"></i>Bilhete do trem da volta Águas Calientes – Ollantaytambo.</li>
                        <li><i class="icon-ok-circle-1"></i>Ônibus de Ollantaytambo - Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>Balão de Oxigênio.</li>
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
                    <li><i class="icon-cancel-circle-2"></i>Almoço e janta no último dia.</li>
                    <li><i class="icon-cancel-circle-2"></i>Entrada aos banhos termais de Águas Calientes.</li>
                    <li><i class="icon-cancel-circle-2"></i>Montanha Huaynapicchu.</li>
                    <li><i class="icon-cancel-circle-2"></i>Saco de dormir.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1vVhu7t8aR2xkHqEYXHVSPRnKDHc" target="_blank"><img src="img/ver mapa.png"></a>  
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
						  <td rowspan="3"><label class="centrar">$ <strong>500</strong></label></td>
						  <td rowspan="3"><label class="centrar">$ <strong>480</strong></label></td> 
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
        <?php include("includes/costados/melhores-pacotes.php");
			include("includes/costados/pacotes-machu-picchu.php");
			include("includes/costados/pacotes-peru.php");
			include("includes/costados/pacotes-alternativos.php");
			include("includes/costados/pacotes-machu-picchu.php");
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