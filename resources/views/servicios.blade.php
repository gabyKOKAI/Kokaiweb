@extends('_master')
 @section ('content')

 <div id="section2">
 	<div class="container-fluid">
 		<div class="row" id="serviciostext">
 			<div class= "col-xs-12 col-md-12" id="serviciostext">
 				<div class="row">
 					<div class= "col-xs-12 col-md-2">
 						<img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Abeja.jpg')}}" alt="About us"/>
 					</div>
 					<div class= "col-xs-12 col-md-4">
 						<h2 class="servicioh2">Desarrollo Web</h2>
 						<p> Desarrollamos páginas de acuerdo con a las necesidades de los negocios,.</p>
 						<p> La tecnología que utilizamos se adecua a las necesidades del desarrollo.</p> 
						<ul>
							<p>CMS: Wordpress, Joomla y Drupal</p> 
							<p>Frameworks: Laravel (PHP) y Django (PYTHON).</p>
						</ul>
 					</div>
 					<div class= "col-xs-0 col-md-2">
 						<img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Abeja.jpg')}}" alt="About us"/>
 					</div>
 					<div class= "col-xs-12 col-md-4">
 						<h2 class="servicioh2">Diseño Web</h2>
 						<p> Diseñamos páginas web para todo tipo de sitios, dandole un toque único y original a cada página. </p>
						<p> Buscamos siempre tener una buena visibilidad en los diferentes dispositivos (celulares, tablets, computadoras, etc...)</p>
 					</div>
 				</div>
 			</div>

 			<!--div class= "col-xs-12 col-md-12" >
 				<div class="row">
 					<div class= "col-xs-12 col-md-6"></div>
 					<div class= "col-xs-12 col-md-2">
 						<img class="img-responsive" style= "visibility:hidden;" id="imgproyecto" src= "{{URL::asset('/images/Abeja.jpg')}}" alt="About us"/>
 					</div>
 					<div class= "col-xs-12 col-md-4">
 					</div>
 					<div class= "col-xs-12 col-md-0"></div>
 				</div>
 			</div-->
		

 			<div class= "col-xs-12 col-md-12" id="serviciostext">
 				<div class="row">
 					<div class= "col-xs-12 col-md-0"></div>
 					<div class= "col-xs-12 col-md-2">
 						<img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Abeja.jpg')}}" alt="About us"/>
 					</div>
 					<div class= "col-xs-12 col-md-4">
 						<h2 class="servicioh2">Tienda en línea</h2>
 						<p> Creamos tiendas en línea, de acuerdo a las necesidades de venta.</p>
						<p> Gracias a nuestra experiencia con bases de datos, podemos automatizar la sincronización de inventarios</p>
 					</div>
 					<div class= "col-xs-12 col-md-2">
 						<img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Abeja.jpg')}}" alt="About us"/>
 					</div>
 					<div class= "col-xs-12 col-md-4">
 						<h2 class="servicioh2">Automatización de procesos</h2>
 						<p> Reducimos el tiempo de procesos que, normalmente, se hacen manuales.</p> 
						<p> La mejora y automatización de procesos ayuda a los negocios a tener mayor precisión y disminuir errores.</p>
 					</div>
 				</div>
 			</div>
		</div>
 	</div>
 </div>
 @stop