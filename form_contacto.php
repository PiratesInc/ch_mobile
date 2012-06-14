<?php include 'header.php'; ?>

			<section class="breadcrumbs">
				<a class="generico" title="Volver">Atrás</a>
				<nav>
					<ul>
						<li><a href="info.php" title="showroom">Más Información</a></li>
						<li>Contacto</li>
					</ul>
				</nav>
				
			</section>
		
			<section class="formularios">
				<h2>Formulario de Contacto</h2>
				<span>* campos obligatorios</span>
				
				<form>
					<fieldset>
					
						<dl>
							<dt><label>Motivo de Contacto</label></dt>
							<dd>
								<select>
									<option>Financiamento GMAC</option>
									<option>Consultas Generales</option>
									<option>Soporte y Asistencia Técnica</option>
								</select>
							</dd>
						</dl>
					
						<legend>Datos Personales</legend>
						
						<dl>
							<dt><label>Nombre</label></dt>
							<dd><input type="text" placeholder="Nombre"></dd>
						</dl>
						
						<dl>
							<dt><label>Apellidos</label></dt>
							<dd><input type="text" placeholder="Apellido"></dd>
						</dl>
						
						<dl>
							<dt><label>RUT</label></dt>
							<dd><input type="text" placeholder="12345678-9"></dd>
						</dl>

						<legend>Datos Contacto</legend>
						
						<dl>
							<dt><label>Región</label></dt>
							<dd>
								<select>
									<option>Region I</option>
									<option>Region V</option>
									<option>Region X</option>
								</select>
							</dd>
						</dl>
						
						<dl>
							<dt><label>Comuna</label></dt>
							<dd>
								<select>
									<option>Comuna I</option>
									<option>Comuna V</option>
									<option>Comunan X</option>
								</select>
							</dd>
						</dl>
						
						<dl>
							<dt><label>Teléfono</label></dt>
							<dd><input type="text" placeholder="2345678"></dd>
						</dl>
						
						<dl>
							<dt><label>Email</label></dt>
							<dd><input type="text" placeholder="usuario@correo.com"></dd>
						</dl>
						
						<legend>Vehículo de Interés</legend>
						
						<dl>
							<dt><label>Modelo</label></dt>
							<dd>
								<select>
									<option>Modelo I</option>
									<option>Modelo V</option>
									<option>Modelo X</option>
								</select>
							</dd>
						</dl>
						
						<dl>
							<dt><label>Versión</label></dt>
							<dd>
								<select>
									<option>Versión I</option>
									<option>Versión V</option>
									<option>Versión X</option>
								</select>
							</dd>
						</dl>
						
						<dl>
							<dt><label>Comentarios</label></dt>
							<dd><textarea placeholder="Comente aquí"></textarea> </dd>
						</dl>
						
						
						
						
						<dl>
							<dt><input type="checkbox"></dt>
							<dd><p>Acepto recibir información acerca de Chevrolet</p></dd>
						</dl>
						
						<input type="submit" value="Enviar">
						
					</fieldset>
				</form>
				
			
			
			</section>

<?php include 'footer.php'; ?>	