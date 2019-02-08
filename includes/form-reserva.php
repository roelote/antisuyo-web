<div class="box_style_1 expose">
			<h3 class="inner">- Reserva -</h3>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label><i class="icon-calendar-7"></i>Fecha inicio</label>
						<input class="date-pick form-control" data-date-format="M d, D" type="text">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label><i class="icon-calendar-7"></i>Fecha Final</label>
						<input class="date-pick form-control" data-date-format="M d, D" type="text">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label>Adultos</label>
						<div class="numbers-row">
							<input type="text" value="1" id="adults" class="qty2 form-control" name="quantity" onchange="document.getElementById('campo2').innerHTML=this.value">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label>Estudiantes</label>
						<div class="numbers-row">
							<input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
						</div>
					</div>
				</div>
			</div>
			<br>
			<table class="table table_summary">
			<tbody>
			<tr>
				<td>
					Adultos
				</td>
				<td class="text-right">
					<span id="campo2">0</span>
				</td>
			</tr>
			<tr>
				<td>
					Estudiantes
				</td>
				<td class="text-right">
					<span> 2 </span>
				</td>
			</tr> 
			<tr class="total">
				<td>
					Total costo
				</td>
				<td class="text-right">
					$154
				</td>
			</tr>
			</tbody>
			</table>
			<a class="btn_full" href="reserva.php">RESERVAR AHORA</a> 
		</div>