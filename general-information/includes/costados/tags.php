<?php 


$numeros = array(
   1=>"choquequirao",
   2=>"sacsayhuaman",
   3=>"ollantaytambo",
   4=>"pisac",
   5=>"moray",
   6=>"qenko",
   7=>"tambomachay",
   8=>"chincheros",
   9=>"koricancha",
   10=>"tipon",
   11=>"piquillacta",
   12=>"rumicolca",
   13=>"raqchi",
   14=>"inca-trail",
   15=>"salkantay",
   16=>"ausangate",
   17=>"huchuy-qosqo",

);

 
?>
   <div class="widget tags">
	<h4>More Information</h4>

<?php
shuffle($numeros); 
foreach ($numeros as $val) { 

    $num = str_replace("-", " ", $val);
 	$num= ucwords($num); 

	echo "<a href=".$val.">$num</a>";

}

?>



<!-- 
	<a href="ollantaytambo">Ollantaytambo</a>
	<a href="pisac">Pisac</a>
	<a href="choquequirao#">Choquequirao</a>
	<a href="chincheros">Chincheros</a>
	<a href="sacsayhuaman">Sacsayhuaman</a>
	<a href="moray">Moray</a>
	<a href="ollantaytambo">Ollantaytambo</a>
	<a href="pisac">Pisac</a>
	<a href="choquequirao#">Choquequirao</a>
	<a href="chincheros">Chincheros</a>
	<a href="sacsayhuaman">Sacsayhuaman</a>
	<a href="moray">Moray</a> -->
</div> 


<!-- 

general-information/the-society-of-jesus
general-information/the-merced
general-information/santo-domingo
general-information/san-francisco-de-asis
general-information/convent-of-Santo-Domingo
general-information/convent-of-Santa-Catalina
general-information/san-blas
general-information/san-antonio-abad
general-information/cusco-main-square
general-information/square-of-regocijo
general-information/square-san-francisco
general-information/square-of-san-pedro
general-information/square-of-las-nazarenas
general-information/square-of-san-blas
general-information/stone-of-the-12-angles
general-information/san-pedro-market
general-information/the-city-of-puno
general-information/lake-titicaca
general-information/uros-floating-islands
general-information/taquile-floating-islands
general-information/amantani-floating-islands
general-information/the-city-of-arequipa
general-information/st-catherines-monastery
general-information/cathedral-of-arequipa
general-information/church-of-compania-de-jesus
general-information/cloisters-of-the-company
general-information/church-of-san-francisco
general-information/el-mirador-de-carmen-alto-and-yanahuara
general-information/town-of-chivay
general-information/la-calera-thermal-baths
general-information/colca-canyon
general-information/colonial-lima
general-information/modern-lima
general-information/magical-circuit-of-waters
general-information/city-of-paracas
general-information/ballestas-islands
general-information/city-of-nazca
general-information/nazca-lines -->
