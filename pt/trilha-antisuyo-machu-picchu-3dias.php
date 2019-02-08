<?php
$nombre_paquete = 'Trilha Antisuyo Machu picchu';
$numero_dias='3 dias y 2 noites';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="A trilha Antisuyo é uma excelente alternativa para quem quer fugir das reservas da trilha inca e ter uma linda experiência visual e temos saídas diárias. A trilha Antisuyo e verdadeiramente a única trilha que começará direitamente desde a cidade de Cusco, onde foi o caminho que usarão os incas para trasladasse ao vale sagrado dos incas e também ao palácio do Inca tupac yupanqui que este localizado no povoado de chinchero";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Trihas Alternativas";
$url_category="trihas-alternativas";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/costumbes-en-umasbamba.jpg";

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

                <?php   $url_s = "trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites.jpg";

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
                        Preço desde<span><sup>$</sup>370</span>Por pessoa
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
					 <p>A <strong>trilha Antisuyo</strong> é uma excelente alternativa para quem quer fugir das reservas da trilha inca e ter uma linda experiência visual e temos saídas diárias. </p>
					 	<p>A <strong>trilha Antisuyo</strong> e verdadeiramente a única trilha que começará direitamente desde a cidade de Cusco, onde foi o caminho que usarão os <strong>incas</strong> para trasladasse ao <strong>vale sagrado dos incas</strong> e também ao palácio do <strong>Inca tupac yupanqui</strong> que este localizado no povoado de <strong>chinchero</strong></p><p>A <strong>trilha Antisuyo</strong> é a única trilha recomendável para fazer durante tudo o ano, sem restrições das chuvas. A <strong>trilha Antisuyo</strong> inclui um pernoite num hotel do povoado de <strong>Machu picchu</strong> no 2doº dia. Por isso o valor do pacote varia de acordo com o hotel e o tipo de acomodação, mas nesse valor já esta incluída os passeios. </p>
                </div>
            </div>           
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>CUSCO - LAGUNA QORI COCHA - CAMPING PIURAY</p>
				</div>
					<ul class="list_icons descripcion">
						<p></p>Pela manhã buscaremos no hotel, em 20 minutos chegaremos ao Parque Arqueológico de Sacsayhuaman Chincana Grande (caverna grande), onde iniciaremos nossa caminhada de 4 horas a ritmo moderado. Passando por Nusta pakana, Balcão do diabo, mirador del cóndor y Pucamocco (4.100 m .a.n.m). Até chegar ao Lago de Qori cocha (lago do ouro) e almoçaremos na borda do lago.</p>
 
                        <p>No trajeto apreciaremos as 5 montanhas mais altas da região de Cusco, APU SALKANTAY, VERONICA , CHICON, PITUSIRAY, Y USANGATE simplesmente maravilhoso.</p>
                    
                        <p>À tarde desceremos aproximadamente por 2 horas apreciando todo a paisagens da região. Visitaremos o Templo Sixtina de Humasbamba e chegaremos a nosso Acampamento Piuray (3.600 m.a.n.m), onde estarão nos esperando com um chá de Muña para nosso pernoite.</p>
					</ul>
					<div class="row magnific-gallery">
					<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/complexo-arqueologico-de-sacsayhuaman.jpg" title="Complexo arqueologico sacsayhuaman."><img src="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/complexo-arqueologico-de-sacsayhuaman.jpg" alt="Complexo arqueologico sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/laguna-qori-cocha.jpg" title="Laguna qori cocha."><img src="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/laguna-qori-cocha.jpg" alt="Laguna qori cocha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/la-capilla-sixtina-de-umasbamba.jpg" title="La capilla Sixtina de Umasbamba."><img src="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/la-capilla-sixtina-de-umasbamba.jpg" alt="La capilla Sixtina de Umasbamba." class="img-responsive">
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
					<p> CAMPING PIURAY - ÁGUAS CALIENTES</p>
				</div>
					<ul class="list_icons descripcion">
						<p></p>Depois do café da manhã típico e ouviremos explicações do Lago Sagrado em sua Margem. Visitaremos o Palácio do Inca Tupaq Yupanqui com instruções peculiares de Sacsayhuaman, onde se fundou o povoado Chinchero e a bandeira de Cusco chamadaTAWANTINSUYO (quatro regiões).</p>
 
                        <p></p>A visita mais importante é o Tunel de conexão de Chincana Chico com o Templo do Sol em Cusco. Aqui desceremos 7 km pelo caminho Inca até chegar ao Povoado de Urquillos (um povoado Quechua, com casas e fazendas que foram feitas sobre construções Incas). Veremos fabulosa variedade de milho que tem um dos maiores grão do mundo chamado PARAQAY.</p>
                        
                        <p></p>Falaremos com as famílias e comemoram com a Chica (cerveja Inca) chamado Aqha, que significa Força. E desfrutaremos de um delicioso almoço campestre e típico da região. Logo tomaremos um ônibus de 30 minutos até a estação de ollantaytambo, onde tomaremos nosso trem até a cidade de Águas Calientes e pernoite no hotel em Águas Calientes.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/costumbes-en-umasbamba.jpg" title="Costumbes en umasbamba."><img src="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/costumbes-en-umasbamba.jpg" alt="Costumbes en umasbamba." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/complexo-arqueologico-de-chinchero.jpg" title="complexo arqueológico de Chinchero."><img src="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/complexo-arqueologico-de-chinchero.jpg" alt="complexo arqueológico de Chinchero." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/Recepcao-em-aguas-calientes.jpg" title="Recepção em aguas calientes."><img src="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/Recepcao-em-aguas-calientes.jpg" alt="Recepção em aguas calientes." class="img-responsive">
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
					<p>AGUAS CALIENTES - MACHU PICCHU - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<p>No dia seguinte bem cedo sairemos rumo a Cidadela Perdida de Machu Picchu, onde desfrutaremos o amanhecer neste fantástico lugar antes da chegada das pessoas que vem de trem.</p>
                        <p>TAproveitaremos nosso tempo para receber todas as informações sobre Machu Picchu, com nosso guia (Aprox. 2 ½ horas) pelo Templo do sol, Templo das 3 janelas, Relógio solar, Templo do Cóndor e pelo Jardim botânico e muito mais, Depois terão um tempo livre para caminhar pelos arredores de "Machu Picchu" ou subir em Wayna Picchu, onde se pode observar toda a cidadela de Machu Picchu, com seus vales e montanhas que rodeiam toda a cidadela perdida.</p>
                        
                        <p>No final da tarde retornaremos ao povoado de Águas Calientes e poderão visitar as Águas Termais enquanto esperaremos o trem para Ollantaytambo. Logo após nos pegaremos o transporte para Cusco.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/complexo-arqueologico-de-machu-picchu.jpg" title="Complexo Arqueologico de Machu Picchu."><img src="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/complexo-arqueologico-de-machu-picchu.jpg" alt="Complexo Arqueologico de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/retorno-a-ollantaytambo.jpg" title="retorno a ollantaytambo."><img src="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/retorno-a-ollantaytambo.jpg" alt="retorno a ollantaytambo." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/bus-de-regreso-a-cusco.jpg" title="Bus de regreso a cusco."><img src="img/trilhas-alternativas/camino-antisuyo-a-machu-picchu-3-dias-2-noites/bus-de-regreso-a-cusco.jpg" alt="Bus de regreso a cusco." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Translado do seu hotel.</li>
                        <li><i class="icon-ok-circle-1"></i>Alimentação  2 café da manhã, 2 almoços e 2 jantares.</li>
                        <li><i class="icon-ok-circle-1"></i>Equipamento de 1º socorros.</li>
                        <li><i class="icon-ok-circle-1"></i>Guia Profissional (inglês,Português e espanhol).</li>
                        <li><i class="icon-ok-circle-1"></i>1 noite em camping ao lado do laguna Piuray.</li>
                        <li><i class="icon-ok-circle-1"></i>1 noite  hotel em Águas Calientes de acordo escolhido</li>
                        <li><i class="icon-ok-circle-1"></i>Passeio ao entorno do lago.</li>
                        <li><i class="icon-ok-circle-1"></i>Trem de Ida (expedição) as 19h00 ou 21h00.</li>
                        <li><i class="icon-ok-circle-1"></i>Trem de Ida e volta (expedição) 18h45 ou 19h00.</li>
                        <li><i class="icon-ok-circle-1"></i>Entrada a Machupicchu por 1 dia.</li>
                        <li><i class="icon-ok-circle-1"></i>Traslado Ollantaytambo cusco.</li>.
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
						<li><i class="icon-cancel-circle-2"></i>Desayuno el primer dia y el almuerzo del último dia.</li>
                        <li><i class="icon-cancel-circle-2"></i>entrada a aguas termales en aguas calientes.</li>
                        <li><i class="icon-cancel-circle-2"></i>Seguro de viaje.</li>
                        <li><i class="icon-cancel-circle-2"></i>Otros extras que no estén incluidos.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1pf-iVlKvbBE7VIV1wmFHu_FRG9U" target="_blank"><img src="img/ver mapa.png"></a>  
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
						  <td>$ 390</td>
						  <td>$ 370</td> 
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