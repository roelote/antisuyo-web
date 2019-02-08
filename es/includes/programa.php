<?php 
$codigo = $_POST['codprecio']; 
$precio = substr($codigo, 3, 3);  
$categoria = substr($codigo, 3, 1);
if($codigo="cmp390"){
	$nombre_paquete="Cusco Machu Picchu 1 día";
	$descripcion="Adulto";
	$t_categoria = 'Sin'; 
}
if($codigo="cmp270"){
	$nombre_paquete="Cusco Machu Picchu 1 día";
	$descripcion="Estudiante"; 
}
if($codigo="cmp260"){
	$nombre_paquete="Cusco Machu Picchu 1 día";
	$descripcion="A partir de 4 paxs";
	$t_categoria = 'Sin'; 
}
	  
//categoria
if($categoria=='e')
	$t_categoria=='Económica';
else if($categoria=='t')
	$t_categoria=='Turística';
else if($categoria=='s')
	$t_categoria='Superior';
else if($categoria=='l')
	$t_categoria='Lujo'; 

?>