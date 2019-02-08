<?php 
if(isset($_POST['envioreserva'])) {	
$nombre_paquete = $_POST['nombrepaquete'];
$url_completo = $_POST['urlcompleto'];
$nombre_completo = $_POST['nombrecompleto'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$fecha_llegada = $_POST['fechadellegada'];
$fecha_inicio = $_POST['fechadeiniciodecaminata'];
$telefono = $_POST['telefono'];
$numero_pasajeros= $_POST['numerodepasajeros'];
$comentario = $_POST['comentario']; 
$aqui = $_POST['aqui'];   
$para = "antisuyotrekperu@gmail.com";
// $para="webmaster.antisuyo@gmail.com";

$asunto = "Reserva de: ".$nombre_completo.' para '.$nombre_paquete;//Puedes cambiar el asunto del mensaje desde aqui
//Este sería el cuerpo del mensaje
$mensaje = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta content="telephone=no" name="format-detection" />
<meta content="width=mobile-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" name="viewport" /> 
<meta content="IE=9; IE=8; IE=7; IE=EDGE;" http-equiv="X-UA-Compatible" />  
<style type="text/css"> 
table {border-collapse:separate;}
a, a:link, a:visited {text-decoration:none; color: #488dc6}
h2,h2 a,h2 a:visited,h3,h3 a,h3 a:visited,h4,h5,h6,.t_cht {color:#333333 !important}
p {margin-bottom: 0}
.ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {line-height: 100%}
/**This is to center your email in Outlook.com************/
.ExternalClass {width: 100%;}

/* General Resets */
#outlook a {padding:0;}
body, #body-table {height:100% !important; width:100% !important; margin:0 auto; padding:0; line-height:100%; !important; font-family:Arial, Helvetica, sans-serif; font-size:13px;}
img, a img {border:0; outline:none; text-decoration:none;}
.image-fix {display:block;}
table, td {border-collapse:collapse;}

/* Client Specific Resets */
.ReadMsgBody {width:100%;} .ExternalClass{width:100%;}
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100% !important;}
.ExternalClass * {line-height: 100% !important;}
table, td {mso-table-lspace:0pt; mso-table-rspace:0pt;}
img {outline: none; border: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
body, table, td, p, a, li, blockquote {-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
body.outlook img {width: auto !important;max-width: none !important;}

/* Start Template Styles */
/* Main */
body{ -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; -webkit-font-smoothing: antialiased;}
body, #body-table {background-color: #e8e8e8 margin:0 auto !important;; margin:0 auto !important; text-align:center !important;}
p {padding:0; margin: 0; line-height: 24px; font-family: Arial, Helvetica, sans-serif;}
a, a:link {color: #1c344d;text-decoration: none !important;}
.footer-link a, .nav-link a {color: #fff6e5;}

/* Yahoo Mail */
.thread-item.expanded .thread-body{background-color: #edf6ea !important;}
.thread-item.expanded .thread-body .body, .msg-body{display:block !important;}
#body-table .undoreset table {display: table !important;table-layout: fixed !important;}

/* Start Media Queries */
@media only screen and (max-width: 640px) {
	a[href^="tel"], a[href^="sms"] {text-decoration: none;pointer-events: none;	cursor: default;}
	.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration: default;	pointer-events: auto;cursor: default;}	
	*[class].full-width {width: 100%!important;}
	*[class].mobile-width {width: 440px !important; padding: 0 4px;}
	*[class].content-width {width: 360px!important;}
	*[class].content-width-menu {width: 360px!important;}
	*[class].center {text-align:center !important; height:auto !important;}
	*[class].center-stack {padding-bottom:20px !important; text-align:center !important; height:auto !important;}
	*[class].stack {padding-bottom:20px !important; height: auto !important;}
	*[class].gallery {padding-bottom: 20px!important;}
	*[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important;}
	*[class].block {display: block!important;}
	*[class].midaling { width:100% !important; border:none !important; }
	*[class].emailImage{height:auto !important;max-width:600px !important;width: 100% !important;}
}
@media only screen and (max-width: 480px) {
	*[class].full-width {width: 100%!important;}
	*[class].mobile-width {width: 320px!important; padding: 0 4px;}
	*[class].content-width {width: 240px!important;}
	*[class].content-width-menu {width: 320px!important;}
	*[class].navlink {font-size:13px !important;}
	*[class].center {text-align:center !important; height:auto !important;}
	*[class].center-stack {padding-bottom:20px !important; text-align:center !important; height:auto !important;}
	*[class].stack {padding-bottom:20px !important; height: auto !important;}
	*[class].gallery {padding-bottom: 20px!important;}
	*[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important; min-width:320px !important;}
	*[class].midaling { width:100% !important; border:none !important; }
	*[class].navlink{ width:600px !important; border:none !important; }
	*[class].footer_link{display:block !important; margin-bottom:5px !important;}
	*[class].hide{display:none !important;}
}
@media only screen and (max-width: 320px) {
	*[class].full-width {width: 100%!important;}
	*[class].mobile-width {width: 100%!important; padding: 0 4px;}
	*[class].content-width {width: 240px!important;}
	*[class].center {text-align:center !important; height:auto !important;}
	*[class].center-stack {padding-bottom:30px !important; text-align:center !important; height:auto !important;}
	*[class].stack {padding-bottom:30px !important; height: auto !important;}
	*[class].gallery {padding-bottom: 20px!important;}
	*[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important; min-width:320px !important;}
	*[class].midaling { width:100% !important; border:none !important;}
}
</style>
<!--[if mso]>
<style>
.font_fix{font-family:Arial, Helvetica, sans-serif !important;}
</style>
<![endif]-->
</head>
<body>

<!-- Start of banner -->
<table id="body-table" style="table-layout: fixed;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center" bgcolor="#e6e5e7">
<tbody>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center" valign="top" bgcolor="#e8e8e8"><!-- Start blog posts ================== -->
<table class="mobile-width" border="0" width="600" cellspacing="0" cellpadding="0" align="center" bgcolor="#f9f9f9">
<tbody>
<tr>
<td align="center"><!-- Start Space -->
<table class="full-width" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="font_fix" style="color: #ffffff; font-weight: bold; font-size: 18px; text-transform: uppercase; padding-top: 10px; padding-bottom: 10px;" align="center" bgcolor="#D76647">'.$nombre_paquete.'</td>
</tr>
</tbody>
</table>
<!-- End Space --> <!-- Start Block Content -->
<table class="content-width" border="0" width="550" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="center" valign="top"><!-- Start post --><!-- End post --> <!-- Start post -->
<table class="content-width" border="0" width="550" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="center"><!-- Start Column 1 --> <!-- End Column 1 --> <!-- Start Column 2 -->
<table class="full-width" border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td align="left">
<div class="table-responsive"><hr />
<table style="width: 100%; margin-bottom: 15px; overflow-y: hidden; -ms-overflow-style: -ms-autohiding-scrollbar; border: 0; max-width: 100%;">
<tbody>
<tr>
<td><strong>Nombre Completo</strong></td>
<td>'.$nombre_completo.'</td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>'.$email.'</td>
</tr>
<tr>
<td><strong>Pa&iacute;s</strong></td>
<td>'.$pais.'</td>
</tr>
<tr>
<td><strong>Ciudad</strong></td>
<td>'.$ciudad.'</td>
</tr>
<tr>
<td><strong>Fecha de llegada</strong></td>
<td>'.$fecha_llegada.'</td>
</tr>
<tr>
<td><strong>Fecha de inicio de caminata</strong></td>
<td>'.$fecha_inicio.'</td>
</tr>
<tr>
<td><strong>Tel&eacute;fono</strong></td>
<td>'.$telefono.'</td>
</tr>
<tr>
<td><strong>N&uacute;mero de personas</strong></td>
<td>'.$numero_pasajeros.'</td>
</tr>
<tr>
<td><strong>Se contacto Por:</strong></td>
<td>'.$aqui.'</td>
</tr>
<tr>
<td><strong>Comentario</strong></td>
<td>'.$comentario.'</td>
</tr>
<tr>
<td><strong>Idioma</strong></td>
<td>Ingl&eacute;s</td>
</tr>
</tbody>
</table>
<hr /></div>
</td>
</tr>
<tr>
<td style="font-size: 30px; line-height: 25px;" height="25">&nbsp;</td>
</tr>
</tbody>
</table>
<!-- End Column 2 --></td>
</tr>
</tbody>
</table>
<!-- End post --></td>
</tr>
</tbody>
</table>
<!-- End Block Content --></td>
</tr>
</tbody>
</table>
<!-- End blog posts ================= --> <!-- Start footer ================= -->
<table class="mobile-width" border="0" width="600" cellspacing="0" cellpadding="0" align="center" bgcolor="#D76647">
<tbody>
<tr>
<td align="center"><!-- Start Block Content -->
<table class="content-width" border="0" width="550" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="center" valign="top"><!-- Start Column 1 -->
<table class="full-width" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td height="50">&nbsp;</td>
</tr>
<tr>
<td class="font_fix" style="font-size: 14px; height: 20px; color: #ffffff; font-weight: normal;" align="center">Contacto</td>
</tr>
<tr>
<td class="font_fix" style="font-size: 28px; mso-line-height-rule: exactly; line-height: 28px; font-weight: bold; color: #ffffff; text-decoration: none !important;" align="center">(+51 84) 226686</td>
</tr>
<tr>
<td class="font_fix" style="font-size: 12px; line-height: 14px; color: #ffffff; font-weight: bold; padding-top: 5px;" align="center"><a style="color: #ffffff; text-decoration: none !important;" href="www.antisutrekperu.com/espanol/contacto.php">info@antisuyotrekperu.com</a> - <a style="color: #ffffff; text-decoration: none !important;" href="www.antisutrekperu.com">www.antisutrekperu.com</a></td>
</tr>
</tbody>
</table>
<br /> <br /> <!-- End Column 1 --></td>
</tr>
</tbody>
</table>
<!-- End Block Content --> <!-- Section img footer --> <!-- Section img footer  --></td>
</tr>
</tbody>
</table>
<!-- End footer ==================--> <!-- Start second footer ============ -->
<table class="mobile-width" border="0" width="600" cellspacing="0" cellpadding="0" align="center" bgcolor="#464646">
<tbody>
<tr>
<td align="center">
<table class="content-width" border="0" width="550" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal; color: #cccccc; padding-top: 10px; padding-bottom: 10px;" align="center" valign="middle"><strong>Copyright &copy; 2019 Antisuyotrekper&uacute;</strong></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</body>
</html>';  
//Cabeceras del correo
$headers = "From: $nombre_paquete  <info@nctravelcusco.com>\r\n"; //Quien envia?
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
 //Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
if(mail($para, $asunto, $mensaje, $headers)){	
    $estado='Thank you '.$nombre_completo;
	$estado2='Your reservation was successfully sent¡¡¡¡';
	$estado3="The reservation of <strong>$nombre_paquete</strong> has been issued correctly, your response will be immediate.";
	$estado4="<i class='icon-ok'></i>";
}else{
	$estado='ERROR! '.$nombre_completo;
	$estado2='Your reservation was not sent to try again';
	$estado3="The reservation of <a href='$url_completo'> <strong>$nombre_paquete</strong></a> was not issued correctly. <a href='$url_completo'> <strong> click here <i class='icon_set_1_icon-56'></i></strong></a> to try again";
	$estado4="<i class='icon-cancel'></i>";
} 
$url_completo= "https://" . $host . $url;
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Antisuyo trek Perú | Travel and tourism agency in Peru">
    <meta name="author" content="Antisuyo Trek Perú">
    <title>Reservation <?php echo $nombre_paquete ?> | Antisuyo trek Perú | Agencias de viajes en Perú</title>
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> 
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    <link href="css/base.css" rel="stylesheet">
    <link href="css/skins/square/grey.css" rel="stylesheet">         
</head>
<body>
    <div class="layer"></div>
    <?php include("includes/menu.php"); ?>    
    <section id="hero_2">
	<div class="intro_title animated fadeInDown">
           <h1>ORDER OF QUOTATION</h1>
		<div class="bs-wizard">  			
			<div class="col-xs-4 bs-wizard-step complete">
			  <div class="text-center bs-wizard-stepnum">Package</div>
			  <div class="progress"><div class="progress-bar"></div></div>
			  <a href="<?php echo $url_completo ?>" class="bs-wizard-dot"></a>
			</div>                               
			<div class="col-xs-4 bs-wizard-step complete">
			  <div class="text-center bs-wizard-stepnum">Personal information</div>
			  <div class="progress"><div class="progress-bar"></div></div>
			  <a href="javascript:history.back()" class="bs-wizard-dot"></a>
			</div>            
		  <div class="col-xs-4 bs-wizard-step complete">
			  <div class="text-center bs-wizard-stepnum">¡Finished!</div>
			  <div class="progress"><div class="progress-bar"></div></div>
			  <a href="#" class="bs-wizard-dot"></a>
			</div>                   
		</div>
    </div>
</section>
 <div class="container margin_60">
	<div class="row">
		<div class="col-md-9 add_bottom_15"> 
			<div class="form_title">
				<h3><strong><?php echo $estado4?></strong> !<?php echo $estado ?>!</h3>
				<p><?php echo $estado2?></p>
			</div>
			<div class="step">
				<p><?php echo $estado3?></p>
		    </div>
			<div class="form_title">
				<h3><strong><i class="icon-tag-1"></i></strong>Reservation Summary</h3>
				<p>Data sent to the reservation center</p>
			</div>
			<div class="step">
				<table class="table table-striped">
					<thead>
					<tr>
						<th colspan="2">Package <?php echo($nombre_paquete); ?></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><strong>Full name</strong></td>
						<td><?php echo $_POST['nombrecompleto']; ?></td>
					</tr>
					<tr>
						<td><strong>E-mail</strong></td>
						<td><?php echo $_POST['email']; ?></td>
					</tr>
					<tr>
						<td><strong>Country</strong></td>
						<td><?php echo $_POST['pais']; ?></td>
					</tr>  
					<tr>
						<td><strong>City</strong></td>
						<td><?php echo $_POST['ciudad']; ?></td>
					</tr>
					<tr>
						<td><strong>Arrival date</strong></td>
						<td><?php echo $_POST['fechadellegada']; ?></td>
					</tr>
					<tr>
						<td><strong>Start date of hike</strong></td>
						<td><?php echo $_POST['fechadeiniciodecaminata']; ?></td>
					</tr>
					<tr>
						<td><strong>Phone</strong></td>
						<td><?php  echo $_POST['telefono']; ?></td>
					</tr>
					<tr>
						<td><strong>Number of people</strong></td>
						<td><?php echo $_POST['numerodepasajeros']; ?></td>
					</tr>
					</tbody>
				</table> 
        		<a class="btn_full_outline" href="http://antisuyotrekperu.com/"><i class=" icon-heart"></i>Go back to start</a>
			</div> 
	    </div>
		<aside class="col-md-3"> 
			<?php include("includes/costados/package-plus.php"); ?>
		</aside>
	</div> 
</div>
<?php include("includes/pie.php"); ?> 
<div id="toTop"></div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script> 
  </body>
</html>
} 
<?php 		
}
else{ 
echo '<meta http-equiv="Refresh" content="0.2;url=https://www.antisuyotrekperu.com//">';	
} 
?>