<?php include 'header.php'; ?>

			<section class="breadcrumbs">
				<a class="generico" title="Volver">Atrás</a>
				<nav>
					<ul>
						<li><a href="info.php" title="showroom">Más Información</a></li>
						<li>Suscripción</li>
					</ul>
				</nav>
				
			</section>
		
			<section class="formularios">
				<h2>Datos de Contacto</h2>
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
							<dd><input type="text" placeholder="12345678-9"></dd>
						</dl>

						<dl>
							<dt><label>Email</label></dt>
							<dd><input type="text" placeholder="usuario@correo.com"></dd>
						</dl>
						
						<legend>Privacidad de Datos</legend>
						
						<dl>
							<dt><input type="checkbox"></dt>
							<dd><p>Acepto recibir información acerca de Chevrolet</p></dd>
						</dl>
						
						<input type="submit" value="Enviar">
						
					</fieldset>
				</form>
				
			
			
			</section>

<?php include 'footer.php'; ?>	