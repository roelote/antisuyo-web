<?php
$nombre_paquete = 'Vale Sagrado dos Incas';
$numero_dias='1 dia';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="El Vale Sagrado dos Incas, dos Andes peruanos, está composto por numerosos rios que descendem por quebradas y pequenos vales; pensei numerosos monumentos arqueológicos y povos indígenas.";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Trihas Alternativas";
$url_category="trihas-alternativas";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/trilhas-alternativas/valle-sagrado-de-los-incas-1-dia/complexo-arqueologico-de-pisac.jpg";


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

                <?php   $url_s = "trilhas-alternativas/valle-sagrado-de-los-incas-1-dia.jpg";

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
                        Preço por <a href="#formulario"><span>inbox</span></a>
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
					 <p><strong>El Vale Sagrado dos Incas</strong>, dos <strong>Andes peruanos</strong>, está composto por numerosos rios que descendem por quebradas y pequenos vales; pensei numerosos <strong>monumentos arqueológicos</strong> y <strong>povos indígenas</strong>.</p>
                </div>
            </div>
          	<hr>            
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>CUSCO VALLE SAGRADO DE LOS INCAS</p>
				</div>
					<ul class="list_icons descripcion">
					   <p>Este vale foi muito apreciado pelos incas devido a suas especiais qualidades geográficas e climáticas. Foi uno dos principais pontos de produção pela riqueza de suas terras e o lugar donde se produze o melhor grão de milho no Perú.</p>                        
                        <p>A primeira visita do dia será no mercado artesanal de QORAO e logo depois ao mercado de PISAQ onde encontraremos produtos artesanais, como: cerâmica, prataria, bijuterias, roupas, tecidos, mantas e todo tipo de trabalhos feitos pela população da região, é a melhor alternativa para fazer compras, porque os preços não estão sobre feito de impostos e ficam más econômicas que na cidade.</p>                        
                        <p>Pela manhã passaremos para buscá-los no hotel 30 min. antes do inicio de nosso passeio</p>                        
                        <p></i>Também temos a singular feira que se realiza nos domingos na Plaza de Armas de Pisaq , sua importância começa seu intercambio comercial pré-hispanico denominado Rantiy ou trueque, que não necessitava de moeda, os protagonistas são as pessoas da região que intercambiam seus produtos por outros.</p>  
                        <p>Depois das compras, continuamos com nosso passeio ao Centro Arqueológico de Pisaq, onde o guia lhes dará explicações de todos os centros importantes como: o Relógio Solar (Intiwatana), Centro Agrícola, sítios urbanos, Centros de Vigilância, Centro Astronômico e o Canal de Água, depois desceram para o povoado de Pisaq para continuar o passeio e passaremos pelos povoados de Lamay, Calca, Yucay que são povoados indígenas que completam o Vale Sagrado, Urubamba será o lugar que irão almoçar</p>
						<p>Depois do almoço continuamos com nossa viagem para o Parque Arqueológico de OLLANTAYTAMBO, foi uma construção militar levantada para proteger a Capital do Império Incaico das possíveis invasões ao Norte. Também se diz que foi construída para habilitar os caminhos que iriam ao Antisuyo. O que não se discute é que foi uma cidade muito fortificada, rodeada de uma parede como uma fortaleza. A principal entre elas é chamada Casa Real do Sol, e também podemos encontrar as fortalezas de Choqana e Inkapintay no lado esquerdo do Rio Urubamba, e também encontramos o Tunupa, que é considerado como ó Deus Wiracocha e descrito como um personagem dotado de poderes sobrenaturais.</p>
						<p>O complexo arqueológico de Ollantaytambo foi um base militar, religioso, administrativa e agrícola. O cenário arquitetônico e impressionante pelo seu tamanho, estilo e originalidade de seus edifícios.</p>
						<p>No caminho de regresso a Cusco visitaremos o pitoresco povoado de Chinchero, onde se encontram os restos da fazenda real de Túpac Inca Yupanqui. Admirar seu bem preservado muro Inca na praça principal e visitar o belo templo colonial em homenagem a viagem da Natividad, construído sobre as bases de uma edificação Inca.</p>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/valle-sagrado-de-los-incas-1-dia/mercado-de-pisac.jpg" title="Mercado Pisac."><img src="img/trilhas-alternativas/valle-sagrado-de-los-incas-1-dia/mercado-de-pisac.jpg" alt="Mercado Pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/valle-sagrado-de-los-incas-1-dia/complexo-arqueologico-de-pisac.jpg" title="complexo arqueologico de pisac."><img src="img/trilhas-alternativas/valle-sagrado-de-los-incas-1-dia/complexo-arqueologico-de-pisac.jpg" alt="complexo arqueologico de pisac." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/trilhas-alternativas/valle-sagrado-de-los-incas-1-dia/recepcion-en-aguas-calientes.jpg" title="Recepcion en aguas calientes."><img src="img/trilhas-alternativas/valle-sagrado-de-los-incas-1-dia/recepcion-en-aguas-calientes.jpg" alt="Recepcion en aguas calientes." class="img-responsive">
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
                    <h3><span>INCLUE</span></h3>
                </div>
                <div class="col-md-10">
					 <ul class="list_icons"> 
						<li><i class="icon-ok-circle-1"></i>Transporte Turístico.</li>
                        <li><i class="icon-ok-circle-1"></i>Serviço de guia oficial em Inglês e Espanhol.</li>
					</ul>
                </div>
            </div> 
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>NÃO INCLUE</span></h3>
                </div>
                <div class="col-md-10"> 
					<ul class="list_icons">
						<li><i class="icon-cancel-circle-2"></i>Alimentação.</li>
                        <li><i class="icon-cancel-circle-2"></i>Boleto Turístico - 130 soles ou 70 soles estudante.</li>
                        <li><i class="icon-cancel-circle-2"></i>Serviços extras.</li>
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1eTDNo7xXGoMv8u7ExdcJN_WinFs" target="_blank"><img src="img/ver mapa.png"></a>
                </div>
            </div>
            <hr>
            <form id="formulario" method="post" action="reserva.php">
            <div class="row">
				<div class="col-md-2">
					<h3><span>Preço</span></h3>
				</div>
			<div class="col-md-10"> 
      		<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>"> 
            <input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">  
            <input name="envioreserva" type="submit" value="ENVIAR RESERVA / INBOX" class="btn_1" id="submit-contact">       
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