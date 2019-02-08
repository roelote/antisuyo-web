<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icon_set_1_icon-77"></i></span></button>
				<h4><strong>Datos personales del responsable.</strong></h4> 
			</div>
			<div class="modal-body">
				<div id="message-review">
				<form method="post" action="confirmacion.php">  
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
							<input type="email" class="form-control" name="email" required>
						</div>
					</div> 
				</div> 
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>País</label>
							<input type="text" class="form-control" required name="pais">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Ciudad</label>
							<input type="text" class="form-control" required name="ciudad">
						</div>
					</div>
				</div> 
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Fecha de llegada</label> 
							<input class="form-control" requiredname="fechadellegada" id="datepicker" >
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Fecha de inicio de caminata</label>
							<input id="datepicker2" class="form-control" name="fechadeiniciodecaminata">
						</div>
					</div>
				</div>  
				<div class="row"> 
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Teléfono</label>
							<input type="text" class="form-control" name="telefono">
						</div>
					</div>
					<div class="col-md-6">
					<label>Número de personas</label> 
						<input type="number" min="1" max="100" class="form-control" name="numerodepasajeros" >  
					</div>
				</div>
				<div class="row">      
					<div class="col-md-6"><label>Comentario / Mensaje</label>  
							<textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="{{ nombrecompleto }}¡ Escribenos un Mensaje..."></textarea>
					</div>   
					<div class="col-md-6 col-md-6"> 
						<label>{{ nombrecompleto }}¡ ¿Cómo nos encontro?</label>
						<select class="form-control" name="kindness_review" id="kindness_review" >
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
				<hr>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<input type="text" class="oculto" name="urlcompleto" value="<?php echo $url_completo ?>">
						<input type="text" class="oculto" name="nombrepaquete" value="<?php echo $nombre_completo_paquete ?>">
						<input class="btn_1 medium" type="submit" value="ENVIAR RESERVA">
					</div> 
				</div> 
            </form> 
			</div>
		</div>
	</div>
</div>