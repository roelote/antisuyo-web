<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myReviewLabel">Write your review</h4>
			</div>
			<div class="modal-body">
				<div id="message-review">
				</div>
				 
				 
				 <div class="container margin_60">
	<div class="row">
	<form method="post" action="confirmacion.php">
		<div class="col-md-9 add_bottom_15"> 
			<div class="form_title">
				<h3><strong><i class="icon_set_1_icon-70"></i></strong>Datos personales</h3>
				<p>
					Datos personales de la persona responsable.
				</p>
			</div>
			<div class="step"> 
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Nombre completo</label>
							<input autofocus required type="text" class="form-control" name="nombrecompleto" ng-model="nombrecompleto">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>E-mail</label>
							<input type="email" class="form-control" name="email" required ng-model="email">
						</div>
					</div>
				</div> 
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>País</label>
							<input type="text" class="form-control" required name="pais" ng-model="pais">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Ciudad</label>
							<input type="text" class="form-control" required name="ciudad" ng-model="ciudad">
						</div>
					</div>
				</div> 
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Fecha de llegada</label> 
							<input class="form-control" requiredname="fechadellegada" id="datepicker" ng-model="fechallegada"  >
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Fecha de inicio de caminata</label>
							<input id="datepicker2" class="form-control" ng-model="fechainicio" name="fechadeiniciodecaminata">
						</div>
					</div>
				</div>  
				<div class="row"> 
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Teléfono</label>
							<input type="text" class="form-control" name="telefono" ng-model="telefono">
						</div>
					</div>
					<div class="col-md-6">
					<label>Número de personas</label> 
						<input type="number" min="1" max="100" class="form-control" name="numerodepasajeros" ng-model="numeropersonas">  
					</div>
				</div>
				<div class="row">      
					<div class="col-md-6"><label>Comentario / Mensaje</label>  
							<textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="{{ nombrecompleto }}¡ Escribenos un Mensaje..."></textarea>
					</div>   
					<div class="col-md-6 col-md-6"> 
						<label>{{ nombrecompleto }}¡ ¿Cómo nos encontro?</label>
						<select class="form-control" name="kindness_review" id="kindness_review" ng-model="aqui">
							<option value="No selecciono Nada">Por favor revise</option>
							<option value="Mochileros.com">Mochileros.com</option>
							<option value="Facebook">Facebook</option>
							<option value="Orkut">Orkut</option>
							<option value="Google">Google</option>
							<option value="Yahoo">Yahoo</option>
							<option value="Otros">Otros</option>
						</select>  
					</div>
				</div> 
			</div>
		<div class="form_title">
				<h3><strong><i class="icon_set_1_icon-92"></i></strong>Resumen</h3>
				<p> Resumen de conctacto</p>
			</div>
			<div class="step">
				<table class="table table-striped"> 
						<tbody>  
						<tr>
							<td>Paquete</td>
							<td><strong>: <?php  echo $nombre_completo_paquete ?></strong>
							</td>
						</tr>  
						<tr>
							<td>Nombre Completo</td>
							<td><strong>: {{ nombrecompleto }}</strong></td>
						</tr>  
						<tr>
							<td>E-mail</td>
							<td><strong>: {{ email }}</strong></td>
						</tr>  
						<tr>
							<td>País</td>
							<td><strong>: {{ pais }}</strong></td>
						</tr>  
						<tr>
							<td>Ciudad</td>
							<td><strong>: {{ ciudad }}</strong></td>
						</tr>  
						<tr>
							<td>Fecha de llegada</td>
							<td><strong>: {{ fechallegada }}</strong></td>
						</tr>  
						<tr>
							<td>Fecha de inicio de caminata</td>
							<td><strong>: {{ fechainicio }}</strong></td>
						</tr>  
						<tr>
							<td>Teléfono</td>
							<td><strong>: {{ telefono }}</strong></td>
						</tr>  
						<tr>
							<td>Número de personas</td>
							<td><strong>: {{ numeropersonas }}</strong></td>
						</tr>
						<tr>
							<td>Por donde nos encontro</td>
							<td><strong>: {{ aqui }}</strong></td>
						</tr> 
						</tbody>
					</table>
					<input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">
					<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>">
					<input class="btn_1 medium" type="submit" value="ENVIAR RESERVA">
			  </div> 
            </form>
		</div>
	</div> 	 
			</div>
		</div>
	</div>
</div><!-- End modal review -->