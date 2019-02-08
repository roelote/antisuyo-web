<?php
$nombre_paquete = 'Cusco Clássico Moderno';
$numero_dias='3 dias e 2 noites';
$nombre_completo_paquete=$nombre_paquete." ".$numero_dias;
$descripcion_tour="description";
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_completo= "https://" . $host . $url;

$category_tour="Passeios Machu Picchu";
$url_category="passeios-machu-picchu";
$url_foto_seo="https://www.antisuyotrekperu.com/pt/img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/complexo-arqueologico-de-machu-picchu.jpg";

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

    <meta name="author" content="Antisuyo trek Perú">
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

                <?php   $url_s = "passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites.jpg";

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
                         Preço desde<span><sup>$</sup>375</span>Por pessoa
                    </div>
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
					 <p>Pacote Clássico Moderno Cusco <strong>Machu Picchu</strong> 3 dias e 2 noites, é uma opção para aqueles que estão passando pela cidade de Cuzco e desejam conhecer a cultura inca e também o santuário histórico de <strong>Machu Picchu</strong>.</p>					 
					 <p><strong>Machu Picchu</strong> é considerado tanto uma obra-prima da arquitetura e engenharia. Suas únicas características arquitetônicas e paisagísticas, tornaram-se um dos destinos turísticos mais populares do planeta.</p>               
               		<p><strong>Machu Picchu</strong> está na Lista do Património Mundial da Unesco desde 1983, como parte de um complexo cultural e ecológico, conhecido com nome de Santuário Histórico de <strong>Machu Picchu</strong>. </p> 
               		<p>Em 07 de julho de 2007 <strong>Machu Picchu</strong> foi declarado uma das Sete Maravilhas do Mundo Moderno, numa cerimónia feita em Lisboa, Portugal, que teve a participação de uma centena de milhões de eleitores em todo o mundo, a escolha de <strong>Machu Picchu</strong> foi como uma delas.</p>
               		<P><strong>Machu Picchu</strong> está localizada a 2.490 m, altitude da praça principal, onde seu nome original era Picchu ou Piccho, finalmente chamado pelas montanhas próximas da cidade de <strong>Machu Picchu</strong>.</P>
                </div>
            </div>
          	<hr>
            <div class="row">
                <div class="col-md-2">
					   <h3><span>ITINERARIO</span></h3>
                </div>
                <div class="col-md-10"> 
                <div class="form_title"><h3><strong><i class="icon_set_1_icon-68"></i></strong><span>Dia 1</span></h3> 
					<p>RECEPÇÃO EM CUSCO / CITY TOUR ARQUEOLOGICO </p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Recepção no aeroporto de Cusco e translado ao hotel.</li>
                        <li><i class="icon-ok-squared"></i>Aclimatação na altura.</li>
                        <li><i class="icon-ok-squared"></i>Buscaremos em seu hotel as 13h30</li>
                        <li><i class="icon-ok-squared"></i>Saída ao City Tour Arqueológico as 14h00 até 18h30</li>
                        <li><i class="icon-ok-squared"></i>Visita ao Templo do Sol Qoricancha e as ruinas de Sacsayhuaman, Kenko, Pucapucara e Tambomachay.</li>
                        <li><i class="icon-ok-squared"></i>Pernoite em Cusco.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/templo-do-sol-coricancha.jpg" title="templo do sol coricancha."><img src="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/templo-do-sol-coricancha.jpg" alt="templo do sol coricancha." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/complexo-arqueologico-de-sacsayhuaman.jpg" title="Complexo Arqueológico de sacsayhuaman."><img src="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/complexo-arqueologico-de-sacsayhuaman.jpg" alt="Complexo Arqueológico de sacsayhuaman." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/complexo-arqueologico-de-tambomachay.jpg" title="Complexo Arqueológico de Tambomachay."><img src="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/complexo-arqueologico-de-tambomachay.jpg" alt="Complexo Arqueológico de Tambomachay." class="img-responsive">
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
					<p>CUSCO - MACHU PICCHU</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Buscaremos em seu hotel as 04h00.</li>
                        <li><i class="icon-ok-squared"></i>Translado em nosso ônibus Cusco – Ollantaytambo.</li>
                        <li><i class="icon-ok-squared"></i>Depois pegaremos o Trem Ollantaytambo – Aguas Calientes as 06h10.</li>
                        <li><i class="icon-ok-squared"></i>Recepção na estação de Aguas Calientes as 07h40 e logo pegarão o ônibus até Machu Picchu.</li>
                        <li><i class="icon-ok-squared"></i>Visita a Machu Picchu por 2 horas com nosso guia profissional.</li>
                        <li><i class="icon-ok-squared"></i>Após terá tempo livre para tirar fotos e passar mais tempo em Machu Picchu.</li>
                        <li><i class="icon-ok-squared"></i>Na volta à tarde de Machu Picchu - Aguas Calientes, pegaremos novamente o ônibus de descida.</li>
                        <li><i class="icon-ok-squared"></i>Depois pegaremos o trem de Aguas Calientes – Ollantaytambo as 18h20.</li>
                        <li><i class="icon-ok-squared"></i>A chegada ao povoado de Ollantaytambo será às 20h15.</li>
                        <li><i class="icon-ok-squared"></i>Translado com nosso ônibus turístico de Ollantaytambo – Cusco por 1 hora e media.</li>
                        <li><i class="icon-ok-squared"></i>Chegada em Cusco, será proximamente as 22h00.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/complexo-arqueologico-de-machu-picchu.jpg" title="Complexo Arqueológico de Machu Picchu."><img src="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/complexo-arqueologico-de-machu-picchu.jpg" alt="Complexo Arqueológico de Machu Picchu." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/o-intiwatana.jpg" title="O Intihuatana."><img src="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/o-intiwatana.jpg" alt="O Intihuatana." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/templo-do-sol.jpg" title="Templo do Sol."><img src="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/templo-do-sol.jpg" alt="Templo do Sol." class="img-responsive">
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
					<p>CUSCO - TRASLADO</p>
				</div>
					<ul class="list_icons">
						<li><i class="icon-ok-squared"></i>Café da manhã no Hotel.</li>
						<li><i class="icon-ok-squared"></i>Translado ao Aeroporto 2h antes da saída de seu voo.</li>
					</ul>
					<div class="row magnific-gallery">
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/cafe-da-manha-no-hotel.jpg" title="Café da manhã no hotel."><img src="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/cafe-da-manha-no-hotel.jpg" alt="Café da manhã no hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/salida-do-hotel.jpg" title="Traslado del Hotel."><img src="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/salida-do-hotel.jpg" title="Salida del Hotel." alt="Traslado del Hotel." class="img-responsive">
									<i class="icon-resize-full-2"></i>
								</a>
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="img_wrapper_gallery">
							<div class="img_container_gallery">
								<a href="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/transferencia-de-hotel-para-aeroporto.jpg" title="Transferencia de hotel para aeroporto."><img src="img/passeio-machu-picchu/cusco-classico-moderno-3-dias-2-noites/transferencia-de-hotel-para-aeroporto.jpg" alt="Transferencia de hotel para aeroporto." class="img-responsive">
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
						<li><i class="icon-ok-circle-1"></i>Translado Aeroporto - Hotel - Aeroporto.</li>
                        <li><i class="icon-ok-circle-1"></i>Guia Profissional para Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Passeio a City tours e Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Ingresso a Machu Picchu por 1 dia.</li>
                        <li><i class="icon-ok-circle-1"></i>2 noites de hotel em Cusco.</li>
                        <li><i class="icon-ok-circle-1"></i>Serviço do Trem Ida e Volta Ollantaytambo – Aguas Calientes - Ollantaytambo (CLASSE TURISTICO).</li>
                        <li><i class="icon-ok-circle-1"></i>Ônibus Subida e Descida Àguas Calientes - Machu Picchu.</li>
                        <li><i class="icon-ok-circle-1"></i>Translado Cusco - Ollantaytambo - Cusco.</li>
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
                        <li><i class="icon-cancel-circle-2"></i>Voo: Brasil - Lima - Brasil.</li>
                        <li><i class="icon-cancel-circle-2"></i>Voo: Lima - Cusco – Lima.</li>
                        <li><i class="icon-cancel-circle-2"></i>Seguro de Viagem.</li>
                        <li><i class="icon-cancel-circle-2"></i>Outros que não estão indicados acima.</li>. 				
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
                <div class="col-md-10"> <a href="https://www.google.com/maps/d/embed?mid=1pRC9LJDaFKdE-LL3vt3lm8VAFEc" target="_blank"><img src="img/ver mapa.png"></a>  
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
				<h4><span><i class="icon_set_1_icon-30"></i>Pacote + <i class="icon_set_1_icon-6"></i>Hotel + <i class=" icon_set_1_icon-5"></i>Trem (Classe turista)</span></h4>
				</th>
				</tr>
				</thead>
				<tbody>
				<tr> 
				<td><h5>CATEGORÍA</h5></td>
				<td><strong>HOTÉIS EM CUSCO</strong></td>
				<td><strong>INDIVIDUAL</strong></td>
				<td><strong>DUPLO</strong></td> 
				<td><strong>TRIPLO</strong></td>
				</tr>  
				<tr> 
				<td><h5>CLASSE<br>ECONÔMICO</h5></td>
					<td><i class="icon-play-5"></i>Hotel Prisma<br> <i class="icon-play-5"></i>Hotel Aranjuez<br><i class="icon-play-5"></i>Hotel Hatun Wasi</td>
				<td>$ 445</td>
				<td>$ 405</td>
				<td>$ 395</td>
				</tr>   
				<tr> 
				<td><h5> CLASSE<br> TURÍSTCO</h5></td>
				<td><i class="icon-play-5"></i>Hotel Samay <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>Hotel S.A Internacional<br><i class="icon-play-5"></i>Hotel Midori</td>
				<td>$ 495</td>
				<td>$ 425</td>
				<td>$ 415</td>
				</tr>   
				<tr> 
				<td><h5> CLASSE<br> SUPERIOR</h5></td>
					<td><i class="icon-play-5"></i>Hotel Siete Ventanas Sup:<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><br><i class="icon-play-5"></i>Hotel S.A Dorado<br><i class="icon-play-5"></i>Hotel Jose Antonio</td>
				<td>$ 545</td>
				<td>$ 465</td>
				<td>$ 455</td>
				</tr> 
				<tr> 
				<td rowspan="2"><h5> CLASSE<br> LUXO</h5></td>  
				<td><i class="icon-play-5"></i>Hotel Costa del Sol <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 685</td>
				<td>$ 525</td>
				<td><span class="label label-danger">cerrado</span></td>
				</tr>
				<tr>  
				<td><i class="icon-play-5"></i>Hotel Aranwa<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i></td>
				<td>$ 905</td>
				<td>$ 685</td>
				<td><span class="label label-danger">cerrado</span></td>
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


<script src="../assets/validate.js"></script> 
  </body>
</html>