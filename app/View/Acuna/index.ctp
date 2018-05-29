	<section class="b1">
   <div class="wancho">
	  <ul class="b1-slider">
	  	 <?php if(isset($obj_banners)) { 
	  	 		foreach ($obj_banners as $banner) { ?>
			 <li class="b1-item" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/banner/'.$banner->getAttr('imagen');?>)">
				<div class="b1-cnt">
				   <div class="b1-table">
					  <div class="b1-text">
						 <h2><?php echo $banner->getAttr('titulo');?><br><span><?php echo $banner->getAttr('subtitulo');?></span></h2>
						 <a class="btn-yellow" href="proyectos-en-venta/proyectos-en-venta.html" >INFORMATE AQUI</a>
					  </div>
				   </div>
				</div>
			 </li>
		 <?php }
		} ?>
	  </ul>
	  <div class="b1-link"><a href="#proyectos"><span class="icon-bottom"></span></a></div>
   </div>
</section>
<div class="wancho" align="right"><a href=<?php echo ENV_WEBROOT_FULL_URL.'banners/index'?>>Editar</a></div>
<section id="proyectos" class="b2">
   <div class="wancho">
	  <div class="b2-title">
		 <h2>Proyectos hechos para ti</h2>
	  </div>
	  <div class="b2-slider-wrap">
		 <ul class="b2-slider">
		 	<?php if(isset($obj_proyectos)) { 
	  	 		foreach ($obj_proyectos as $proyecto) { ?>
					<li class="b2-slider-item">
					   <div class="b2-tb-item">
						  <div class="b2-tc-item">
							 <a href=<?php echo ENV_WEBROOT_FULL_URL.'proyectos/view/'.$proyecto->getAttr('id'); ?> class="b2-item">
							 	
								<div class="b2-cnt">
										<div class="b2-img">
											<div class="b2-img-inside" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$proyecto->getAttr('thumbnail');?>)">
											</div>
										</div>
										   <!--<div class="b2-state"><span>Próxima Entrega</span></div>-->
										<div class="b2-text">
											<p class="b2-dor"><?php echo $proyecto->getAttr('thumb_titulo');?></p>
											<p class="b2-dir"><?php echo $proyecto->getAttr('thumb_subtitulo');?></p>
										</div>
								</div>
							</a>
						  </div>
					   </div>
					</li>
			<?php
				}
			}
			?>	
		</ul>
	  </div>
	  <div class="b2-btn"><a class="btn-big" href="proyectos-en-venta/proyectos-en-venta.html">VER MAS PROYECTOS</a></div>
   </div>
</section>
<div class="wancho" align="right"><a href=<?php echo ENV_WEBROOT_FULL_URL.'proyectos/index'?>>Editar</a></div>
<section class="b3">
   <div class="wancho">
	  <div class="b3-video">
		 <div class="b3-video-cnt">
			<div class="b3-video-embed"><iframe id="b3-iframe" width="907" height="425" src="https://www.youtube.com/embed/itkR6__FPRQ?rel=0&showinfo=0&modestbranding=1&fs=0&autohide=1" frameborder="0" allowfullscreen></iframe></div>
			<div class="b3-img"><img src="theme/uploads/cococenos/conocenos-foto11.png" alt=""><a class="b3-play" href=""><span class="icon-play"></span></a></div>
			<div class="b3-title">
			   <h2 class="g-title-2">Construyendo bienestar para ti <br><span> y para toda tu familia</span></h2>
			</div>
		 </div>
	  </div>
	  <div class="b3-cnt">
		 <div class="b3-title">
			<h2 class="g-title-2">Construyendo bienestar para ti <br><span> y para toda tu familia</span></h2>
		 </div>
		 <div class="b3-desc">
			<div class="b3-text">
			   <p>Nuestro principal compromiso es brindar a nuestros clientes bienestar a través de un producto inmobiliario de calidad, dirigido a satisfacer sus necesidades de vivienda, mejorando así su calidad de vida</p>
			</div>
			<div class="b3-btn"><a class="btn-white" href="conocenos/conocenos.html" >CONÓCENOS</a></div>
		 </div>
	  </div>
   </div>
</section>
<section class="b4">
   <div class="wancho">
	  <div class="b4-cnt">
		 <div class="b4-img"></div>
		 <div class="b4-slider-wrap">
			<ul class="b4-slider">
			   <li class="b4-item">
				  <div class="b4-item-img"><img src="theme/uploads/b4-01.jpg" alt=""></div>
				  <div class="b4-desc">
					 <div class="b4-title">
						<h2 class="g-title yellow">Más de 100 familias felices<br><span>Nuestros Testimonios</span></h2>
					 </div>
					 <div class="b4-text">
						<p>&ldquo;Entramos a la caseta, nos dieron informes, nos dieron los planos. Nos gust&oacute; mucho y al final decidimos comprar el departamento aqu&iacute;. Por la ubicaci&oacute;n, por la zona que es muy bonita, llena de parques. Tenemos Cl&iacute;nicas, supermercados, colegios cerca; Estamos cerca de todo.Los acabados, definitivamente, me gustan mucho, la seguridad de la zona es primordial para nosotros que tenemos hijos&rdquo;</p>
					 </div>
					 <div class="b4-author">
						<p>Propietario</p>
						<p class="b4-c">Edifcio Los Ruiseñores</p>
					 </div>
				  </div>
			   </li>
			   <li class="b4-item">
				  <div class="b4-item-img"><img src="theme/uploads/b4-01.jpg" alt=""></div>
				  <div class="b4-desc">
					 <div class="b4-title">
						<h2 class="g-title yellow">Más de 100 familias felices<br><span>Nuestros Testimonios</span></h2>
					 </div>
					 <div class="b4-text">
						<p>&ldquo;Me gust&oacute; mucha la distribuci&oacute;n, la cocina perfecta, tiene una luz hermosa. En el segundo piso tambi&eacute;n tiene bastante iluminaci&oacute;n que tiene la casa. La entrega fue bastante r&aacute;pida y el asesoramiento que tuve en cuanto a las infraestructuras de la casa y todo muy buenas.&rdquo;</p>
					 </div>
					 <div class="b4-author">
						<p>Propietario</p>
						<p class="b4-c">Condominio Santa Fe</p>
					 </div>
				  </div>
			   </li>
			</ul>
		 </div>
	  </div>
   </div>
</section>

<section class="b6 contacto">
   <div class="wancho">
	  <div class="b6-ctn">
		 <div class="left">
			<div class="b6-img"><img src="theme/uploads/b6-left.png" alt=""></div>
		 </div>
		 <div class="right">
			<div class="b6-form">
			   <div class="b6-title">
				  <h2 class="g-title">¿Estás interesado<br><span>en nuestros Proyectos?</span></h2>
			   </div>
			   <div class="b6-form-cnt">
				  <form name="form" method="post" action="/contacto-process/" novalidate="novalidate" id="form-home">
					 <div class="b6-col-2">
						<div class="b6-col-left">
						   <div class="b6-input"><input type="text" id="form_nombre" name="form[nombre]" required="required" class="validate[required]" /><label for="form_nombre">Nombre y Apellidos:</label></div>
						</div>
						<div class="b6-col-right">
						   <div class="b6-input"><input type="text" id="form_documento" name="form[documento]" required="required" maxlength="255" class="validate[required]" /><label for="form_documento">Nº Documento:</label></div>
						</div>
					 </div>
					 <div class="b6-col-2">
						<div class="b6-col-left">
						   <div class="b6-input"><input type="text" id="form_telefono" name="form[telefono]" required="required" maxlength="255" class="validate[required]" /><label for="form_telefono">Teléfono:</label></div>
						</div>
						<div class="b6-col-right">
						   <div class="b6-input"><input type="text" id="form_email" name="form[email]" required="required" maxlength="255" class="validate[required,custom[email]]" /><label for="form_email">Correo:</label></div>
						</div>
					 </div>
					 <div class="b6-col-1">
						<div class="b6-input b6-select">
						   <select id="form_proyecto" name="form[proyecto]" required="required" class="validate[required]">
							  <option value="" selected="selected"></option>
							  <option value="3">Amauta 2272</option>
							  <option value="17">Conecta</option>
							  <option value="4">Urbanización Chincha Verde</option>
							  <option value="1">Club Los Sauces Chiclayo</option>
							  <option value="5">El Olivar de Carabayllo</option>
						   </select>
						   <label for="form_proyecto">Elige un proyecto:</label>
						</div>
					 </div>
					 <div class="b6-btn"><button class="btn-big" type="submit">INFORMATE AQUÍ</button></div>
					 <input type="hidden" id="form__token" name="form[_token]" value="kSOTXbzIxW5U2U14wi1vH8eV6-Om7bAVG3SLdRK8ykk" />
				  </form>
			   </div>
			</div>
		 </div>
	  </div>
   </div>
</section>