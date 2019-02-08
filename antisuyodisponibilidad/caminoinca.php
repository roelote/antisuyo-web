<?php
	$meses = array('01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May', '06'=>'June', '07'=>'July', '08'=>'August', '09'=>'September', '10'=>'October', '11'=>'November', '12'=>'December');
	$smes=date('m');
	$anho=2019;
	//echo $smes;
	$curr_mes=(int)$smes;
	if($curr_mes==2) {
		$curr_mes=3;
		$smes='03';
	}
?>
<div class="divik">
	Seleccionar Mes:
	<select name="ik" id="ik">
	<?php for ($i=1; $i <=12 ; $i++): ?>
		<?php
		$j=sprintf('%02d',$i);
		if($i!=2):
		?>
		<option value="<?php echo $anho.'@'.$j ?>" <?php if($smes==$j) echo 'selected' ?>><?php echo $meses[$j].' '.$anho ?></option>
		<?php endif ?>
	<?php endfor ?>
	</select>
</div>
<div id="ikx">
<?php
include 'amf/modulo.php';
?>
</div>
