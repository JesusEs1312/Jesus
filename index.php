<?php

	/*
		Plugin Name: Suscripcion a Newsletter
		Description: Permitir a los usuarios de una página de Wordpress suscribirse a un Newsletter.
		Author: Jesus Estrada Sanchez
		Version: 1.0
	*/

		//Accion HOOK
		add_action('wp_dashboard_setup', 'dcms_agregar_widget');

		//Agregar Widget
		function dcms_agregar_widget(){
			wp_add_dashboard_widget('id_suscribirse', 'Suscripcion a un Newsletter', 'dcms_mostrar_widget');
		}

		//Mostrar Widget
		function dcms_mostrar_widget(){
			echo "SUSCRIBETE";
				?>
				<style type="text/css">
					
					.contpenedor{
						width: 93%;
						max-width: 1000px;
						background: #ccc;
						margin: 0px;
						padding: 20px;
						border-radius: 5px;
					}

					 .contenedor label{
						font-size: 16px;
						font-family: "Open Sans";
						color: #000;
						line-height: 27px;
						margin-bottom: 20px;
					}

					.contenedor input[type="email"]{
						width: 50%;
						font-size: 16px;
						border: 1px solid #ccc;
						border-radius: 3px;
						display: block;
						margin-top: 10px;
						margin-bottom: 20px;
						padding: 10px;
						font-family: "Open Sans";
						background: #ccc;
					}

					.contenedor input[type="email"]:focus{
						border: 2px solid #4fb560;
					}

					.contenedor input[type="submit"]{
						width: 150px;
						font-size: 16px;
						margin: auto;
						border-radius: 3px;
						padding: 10px;
						background: none;
						border: 1px solid #4fb560;
						color: #4fb560;
						cursor: pointer;
						text-align: center;
					}

					 .contenedor input[type="submit"]:hover{
						background: #4fb560;
						color: #fff;
					}

					.contenedor-mensaje label{
						font-size: 16px;
						font-family: "Open Sans";
						color: #fff;
						line-height: 27px;
						margin-bottom: 20px;
					}

					.contenedor-mensaje{
						display: none;
						width: 350px;
						background: #4fb560;
						padding: 15px 10px;
						padding-left: 20px;
					}

				</style>
					<form id="formulario">
						<div id="contenedor" class="contenedor" name="formulario">
							<label>Deja tu correo electrónico para suscribirte a nuestro Newsletter</label>
							<input type="email" placeholder="Correo electrónico" name="correo" required>
							<input type="submit" value="Suscribir" id="boton">
						</div>

						<div class="contenedor-mensaje" id="contenedor-mensaje">
							<label>Has sido registrado al newsletter exitosamente</label>
						</div>
						
					</form>
					<script>
						var formulario = document.getElementById('formulario');
						var correo = formulario.correo;
						var contenedor = document.getElementById('contenedor');
						var contenedor_mensaje = document.getElementById('contenedor-mensaje');
						function Validar(e){
							if(!correo.value == ''){
								contenedor.style.display = 'none';
								contenedor_mensaje.style.display = 'block';
								e.preventDefault();
							} 
							
						}

						formulario.addEventListener('submit', Validar);
					</script>
				<?php
		}
?>
