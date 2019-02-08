<?php
$nombre_paquete = 'Trilha inca curta ';
$numero_dias='2 dias 1 noite';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="A trilha Inca de 2 dias é uma versão curta do famosa trilha inca de 4 dias, além do mais é uma ótima opção para aquelas pessoas que não dispõem de muito tempo e também para aqueles cuja condição física e idade não ajudam em um trekking mais longo e não querem perder está experiência única.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;


$category_tour="Trilha Inca Machu Picchu";
$url_category="trilha-inca-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/trilha-inca/camino-inca-corto-2-dias-1-noites/templo-do-sol.jpg";
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
    
	
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
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

                <?php   $url_s = "trilha-inca/camino-inca-corto-2-dias-1-noites.jpg";

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
                        Preço desde<span><sup>$</sup>380</span>Por pessoa
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
					<p>  A <strong>trilha Inca</strong> de 2 dias é uma versão curta do famosa <strong>trilha inca</strong> de 4 dias, além do mais é uma ótima opção para aquelas pessoas que não dispõem de muito tempo e também para aqueles cuja condição física e idade não ajudam em um <strong>trekking</strong> mais longo e não querem perder está experiência única.</p>
				   <p> Para esta viagem usaremos o trem como transporte que é a única opção até o KM 104 e caminharemos até o complexo arqueológico de <strong>Wiñayhuayna</strong>, e logo nos dirigiremos até <strong>Inti Punku</strong> (chamada de porta do sol) a 2,650 m.a.n.m, onde podemos ver um pôr do sol deslumbrante e logo seguiremos até o povoado de Águas Calientes, onde passaremos a noite em um hotel.No dia seguinte bem cedo sairemos rumo a Cidadela Perdida de <strong>Machu Picchu</strong>, onde desfrutaremos o amanhecer neste fantástico lugar antes da chegada das pessoas que vem de trem.  </p>
				   <p>  Aproveitaremos nosso tempo para receber todas as informações sobre <strong>Machu Picchu</strong>, com nosso guia (Aprox. 2 ½ horas) pelo <strong>Templo do sol</strong>, Templo das 3 janelas, Relógio solar, Templo do Cóndor e pelo Jardim botânico e muito mais, Depois terão um tempo livre para caminhar pelos arredores de "<strong>Machu Picchu</strong>" ou subir em <strong>Wayna Picchu</strong>, onde se pode observar toda a cidadela de <strong>Machu Picchu</strong>, com seus vales e montanhas que rodeiam toda a cidadela perdida .</p>
                </div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
					<div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>CUSCO - WIÑAYWAYNA - ÀGUAS CALIENTES</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Passaremos por seu hotel às 4:00a.m e vamos até estação do trem de Ollantaytambo, onde pegaremos o trem que nos transportará até o Km 104, para dar início a nossa caminhada em uma paisagem de selva subtropical, visitaremos o grupo arqueológico de Chachabamba (2150 m.a.n.m) e em aproximadamente 3 horas de caminhada chegaremos a Wiñaywayna complexo impressionante composto de um centro agrícola com numerosos terraços, um setor religioso e um setor urbano, logo subiremos até Intipunku, “Porta do Sol”, durante o trajeto de 1 hora de caminhada por uma estrada de pedras planas e uma vista panorâmica das montanhas, ponto onde poderemos desfrutar a primeira vista do majestoso "Machu Picchu" e Inti Punku.</p>
						<p>logo desceremos até "Machu Picchu" para iremos até Águas Calientes para pernoitar e também onde poderão aproveitando desfrutar das Águas Termais no povoado de Águas Calientes.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-corto-2-dias-1-noites/complexo-arqueologico-de-winaywayna.jpg" title="Complexo arqueológico de Wiñaywayna."><img src="img/trilha-inca/camino-inca-corto-2-dias-1-noites/complexo-arqueologico-de-winaywayna.jpg" alt="Complexo arqueológico de Wiñaywayna." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-corto-2-dias-1-noites/sitio-arqueologico-de-intipunku.jpg" title="Sitio arqueológico de Intipunku."><img src="img/trilha-inca/camino-inca-corto-2-dias-1-noites/sitio-arqueologico-de-intipunku.jpg" alt="Sitio arqueológico de Intipunku." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-corto-2-dias-1-noites/termas-de-la-calera.jpg" title="Termas de La Calera."><img src="img/trilha-inca/camino-inca-corto-2-dias-1-noites/termas-de-la-calera.jpg" title="Termas de La Calera." alt="Termas de La Calera." class="img-responsive">
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
					<p>ÀGUAS CALIENTES - MACHU PICCHU - CUSCO</p>
				</div>
					<ul class="list_icons descripcion">
						<p>Muito cedo sairemos caminhando ou pegaremos o bus até Machupicchu, para poder observar o amanhecer e nascer do sol neste mágico lugar, antes dos outros turistas chegarem ao machupicchu, claro que será para aquelas pessoas que desejam subir e desfrutar um pouco mais de Machupicchu,Desfrutaremos a tranquilidade da cidadela perdida dos Incas em um tour com nosso guia (Aprox. 2 ½ horas) pelo Templo do sol, Templo das 3 janelas, o relógio solar, Templo do Cóndor e pelo Jardim botânico e muito mais, Depois terão um tempo livre para caminhar pelos arredores de "Machupicchu" ou subir em Huaynapicchu, onde se pode observar toda cidadela de Machu Picchu, com vales e montanhas que rodeiam toda a cidade e também visitar o Templo da Lua e a famosa Ponte do Inca.</p>
						<p>A tarde desceremos até o povoado de Águas Calientes onde tomaremos o trem de retorno até Poroy ou Ollantaytambo e de lá terá um bus que estará nos transladando até Cusco.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-corto-2-dias-1-noites/sitio-arqueologico-de-machu-picchu.jpg"><img src="img/trilha-inca/camino-inca-corto-2-dias-1-noites/sitio-arqueologico-de-machu-picchu.jpg" title="Sitio Arqueologica de Machu Picchu." alt="Sitio Arqueologica de Machu Picchu" class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-corto-2-dias-1-noites/templo-de-la-luna.jpg" title="Templo de la Luna."><img src="img/trilha-inca/camino-inca-corto-2-dias-1-noites/templo-de-la-luna.jpg" title="Templo de la Luna." alt="Templo de la Luna." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilha-inca/camino-inca-corto-2-dias-1-noites/templo-do-sol.jpg" title="Templo del Sol"><img src="img/trilha-inca/camino-inca-corto-2-dias-1-noites/templo-do-sol.jpg" title="Templo del Sol." alt="../img/paquetes/camino inca/camino inca corto 2d 1n/d2/camino inca corto templo del sol.jpg" title="Templo del Sol." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Pela manhã buscaremos em seu hotel de acordo ao horário do tren.</li>
                        <li><i class="icon-ok-circle-1"></i>Traslado ao estacion de Ollantaytambo.</li>
                        <li><i class="icon-ok-circle-1"></i>Ticket de trem Expedition de Ollantaytambo até o km104.</li>
                        <li><i class="icon-ok-circle-1"></i>Ticket de entrada a Trilha Inca e também Machupicchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Guia profissional falando espanhol e Português.</li>
                        <li><i class="icon-ok-circle-1"></i>1 Noite hotel em Águas Calientes.</li>
                        <li><i class="icon-ok-circle-1"></i>1 almoço (box lunch)1 Janta e 1 café da manhã.</li>
                        <li><i class="icon-ok-circle-1"></i>Ticket de trem da volta de Aguas Calientes –Ollantaytambo.</li>
                        <li><i class="icon-ok-circle-1"></i>Bilhete de bus de Machu Picchu - Águas Calientes (ida e volta.</li>
                        <li><i class="icon-ok-circle-1"></i>Translado em van de Ollantaytambo até Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>Maletin de primeiro socorro.</li>
                        <li><i class="icon-ok-circle-1"></i>Oxigeno.</li>
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
                    <li><i class="icon-cancel-circle-2"></i>Café da manhã no 1 dia e almoço no 2do Dia.</li>
                    <li><i class="icon-cancel-circle-2"></i>Visita aos banhos termais de Águas Calientes.</li>
                    <li><i class="icon-cancel-circle-2"></i>Ônibus descida de Machu Picchu - Aguas Calientes o segundo dia.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1EXCaFtgT9_B5TzCErgfOPtz7JZ4" target="_blank"><img src="img/ver mapa.png"></a>  
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
					  <td rowspan="3"><label class="centrar">$ <strong>400</strong></label></td>
					  <td rowspan="3"><label class="centrar">$ <strong>380</strong></label></td> 
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