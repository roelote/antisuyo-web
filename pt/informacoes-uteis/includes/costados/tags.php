<div class="widget tags">
					<h4>Tags</h4>
					<a href="#">Ollantaytambo</a>
					<a href="#">Pisac</a>
					<a href="#">Choquequirao</a>
					<a href="#">Chincheros</a>
					<a href="#">Sacsayhuaman</a>
					<a href="#">Moray</a>
					<a href="#">Ollantaytambo</a>
					<a href="#">Pisac</a>
					<a href="#">Choquequirao</a>
					<a href="#">Chincheros</a>
					<a href="#">Sacsayhuaman</a>
					<a href="#">Moray</a>
				</div><?php 
$url= $_SERVER["REQUEST_URI"];
$sin_categoria = substr($url,22);
$url_limpia = str_replace("-", " ", $sin_categoria);
$url_fin = ucwords($url_limpia); 
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
</body>
</html>