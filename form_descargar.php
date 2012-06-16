<?php include 'header.php'; ?>

			<section class="breadcrumbs">
				<a class="generico" title="Volver">Atrás</a>
				<nav>
					<ul>
						<li><a href="showroom.php" title="showroom">Showroom</a></li>
						<li><a href="" title="categoría">Familia</a></li>
						<li><a href="" title="categoría">Automóvil</a></li>
						<li>Descargar Catálogo</li>
					</ul>
				</nav>
				
			</section>
		
			<section class="formularios">
				<h2>Descarga tu catálogo</h2>
				<span>* campos obligatorios</span>
				
				<form>
					<fieldset>
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
							<dd><input type="tel" placeholder="12345678-9"></dd>
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
							<dd><input type="tel" placeholder="2345678"></dd>
						</dl>
						<dl>
							<dt><label>Email</label></dt>
							<dd><input type="email" placeholder="usuario@correo.com"></dd>
						</dl>
						<dl>
							<dt><input type="checkbox"></dt>
							<dd><p>Acepto recibir información acerca de Chevrolet</p></dd>
						</dl>
						
						<input type="submit" value="Enviar"  class="button">
						
					</fieldset>
				</form>
				
			
			
			</section>

<?php include 'footer.php'; ?>	