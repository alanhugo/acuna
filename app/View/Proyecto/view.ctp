<section class="b23 wancho" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-banner/'.$obj_proyecto->getAttr('proy_banner');?>)">
   <div class=" b23cntbox">
	  <div class="b23table">
		 <div class="left">
			<div class="b23-title">
			   <h2 class="g-title white"><?php echo $obj_proyecto->getAttr('thumb_titulo');?><br><span><?php echo $obj_proyecto->getAttr('thumb_subtitulo');?></span></h2>
			</div>
		 </div>
		 <div class="right btn-2">
			<div class="b23-btn">
			   <div class="b23-botone"><a href="https://www.youtube.com/watch?v=UIGDRmhspM8&t=34s&spfreload=5" class="btn-white-2">VER VIDEO</a></div>
			   <span>&nbsp;</span>
			   <div class="b23-botone"><a href="http://www.wescon.pe/uploads/brochure/book-2daetapa-2-ilovepdf-compressed.pdf" download="/uploads/brochure/book-2daetapa-2-ilovepdf-compressed.pdf" class="btn-white">DESCARGAR BROCHURE</a></div>
			</div>
		 </div>
	  </div>
   </div>
</section>
<section class="b9 wancho">
   <div class="b9-cnt">
	  <div class="b9-desc">
		 <div class="b9-ctn-text">
			<div class="b9-title">
			   <h2><?php echo $obj_proyecto->getAttr('sect1_titulo');?><br><span><?php echo $obj_proyecto->getAttr('sect1_subtitulo');?></span></h2>
			</div>
			<div class="b9-text">
			   <?php echo $obj_proyecto->getAttr('sect1_texto'); ?>
			</div>
		 </div>
		 <div class="b23-botone"><a href="http://www.wescon.pe/uploads/brochure/book-2daetapa-2-ilovepdf-compressed.pdf" class="btn-white" download="/uploads/brochure/book-2daetapa-2-ilovepdf-compressed.pdf" >DESCARGAR BROCHURE</a></div>
		 <div class="b9-img"><img src="<?php echo ENV_WEBROOT_FULL_URL.'files/proy-sect1-img/'.$obj_proyecto->getAttr('sect1_img');?>" alt=""></div>
		 <div class="b9-char">
			<ul class="b9-char-cnt">
			   <li class="b9-area b9-char-item">
				  <p>Área</p>
				  <p><strong><?php echo $obj_proyecto->getAttr('area');?></strong></p>
			   </li>
			   <li class="b9-type b9-char-item">
				  <p>Tipo</p>
				  <p><strong><?php echo $obj_proyecto->TipoVivienda->getAttr('descripcion');?></strong></p>
			   </li>
			   <li class="b9-fin b9-char-item">
				  <p>Financiado</p>
				  <p><?php echo $obj_proyecto->Banco->getAttr('nombre');?><!--<img src="theme/uploads/bancos/bcp.png" alt="">--></p>
			   </li>
			</ul>
		 </div>
	  </div>
   </div>
</section>
<section class="b10">
   <div class="b10-main">
	  <div class="b10-buttons">
		 <ul>
		 	<?php echo ($obj_proyecto->getAttr('ubicacion_titulo') != '')? "<li><a href='#' data-id='b10-tab1'><span>Ubicación</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('area_com_titulo') != '')? "<li><a href='#' data-id='b10-tab2'><span>Áreas Comunes</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('depart_titulo') != '')? "<li><a href='#' data-id='b10-tab3'><span>Departamentos</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('area_verd_titulo') != '')? "<li><a href='#' data-id='b10-tab4'><span>Áreas verdes</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('tech_pro_titulo') != '')? "<li><a href='#' data-id='b10-tab5'><span>Requisitos Techo Propio</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('proy_titulo') != '')? "<li><a href='#' data-id='b10-tab6'><span>Proyectos</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('casas_titulo') != '')? "<li><a href='#' data-id='b10-tab7'><span>Casas</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('promo_titulo') != '')? "<li><a href='#' data-id='b10-tab8'><span>Promociones</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('facilidad_titulo') != '')? "<li><a href='#' data-id='b10-tab9'><span>Más facilidades</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('ventaja_titulo') != '')? "<li><a href='#' data-id='b10-tab10'><span>Ventajas del Proyecto</span></a></li>" : ""; ?>
		 </ul>
	  </div>
	  <div class="b19-content">
		 <ul>
			<li id="b10-tab1" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
				   <div class="b10-table">
					  <div class="b10-envolve">
						 <div class="b10-title">
							<h3><?php echo $obj_proyecto->getAttr('ubicacion_titulo');?></h3>
						 </div>
						 <div class="b10-text">
							<?php echo $obj_proyecto->getAttr('ubicacion_texto');?>
							<p>&nbsp;</p>
						 </div>
					  </div>
				   </div>
				</li>
				<li id="b10-tab2" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
				   <div class="b10-table">
					  <div class="b10-envolve">
						 <div class="b10-title">
							<h3><?php echo $obj_proyecto->getAttr('area_com_titulo');?></h3>
						 </div>
						 <div class="b10-text">
							<?php echo $obj_proyecto->getAttr('area_com_texto');?>
						</div>
					 </div>
				  </div>
			</li>
			<li id="b10-tab3" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo $obj_proyecto->getAttr('depart_titulo');?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('depart_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab4" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo $obj_proyecto->getAttr('area_verd_titulo');?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('area_verd_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab5" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo $obj_proyecto->getAttr('tech_prop_titulo');?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('tech_prop_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab6" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo $obj_proyecto->getAttr('proy_titulo');?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('proy_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab7" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo $obj_proyecto->getAttr('casas_titulo');?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('casas_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab8" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo $obj_proyecto->getAttr('promo_titulo');?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('promo_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab9" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo $obj_proyecto->getAttr('facilidad_titulo');?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('facilidad_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab10" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo $obj_proyecto->getAttr('ventaja_titulo');?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('ventaja_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
		 </ul>
	  </div>
   </div>
</section>
<section class="b11 wancho">
   <div class="b11-cnt">
	  <div class="b11-main">
		 <div class="b11-gallery-cnt">
			<div class="b11-img-desc">
			   <div class="b11-slider-cnt">
				  <ul class="b11-slider">
					 <li><img src="theme/uploads/piloto-real-amauta/sala-comedor.jpg" alt=""></li>
					 <li><img src="theme/uploads/piloto-real-amauta/galeria-web.jpg" alt=""></li>
					 <li><img src="theme/uploads/piloto-real-amauta/cocina.jpg" alt=""></li>
					 <li><img src="theme/uploads/piloto-real-amauta/dorm.jpg" alt=""></li>
					 <li><img src="theme/uploads/piloto-real-amauta/estar.jpg" alt=""></li>
					 <li><img src="theme/uploads/piloto-real-amauta/home.jpg" alt=""></li>
					 <li><img src="theme/uploads/galeria-amauta/area-verde.jpg" alt=""></li>
					 <li><img src="theme/uploads/galeria-amauta/piscina.jpg" alt=""></li>
					 <li><img src="theme/uploads/galeria-amauta/sala-de-juegos.jpg" alt=""></li>
					 <li><img src="theme/uploads/galeria-amauta/sum-adultos.jpg" alt=""></li>
					 <li><img src="theme/uploads/galeria-amauta/sum-ninos.jpg" alt=""></li>
					 <li><img src="theme/uploads/galeria-amauta/terraza-parrillas.jpg" alt=""></li>
				  </ul>
			   </div>
			   <ul class="b11-nav">
				  <li><img src="theme/uploads/piloto-real-amauta/sala-comedor.jpg" alt=""></li>
				  <li><img src="theme/uploads/piloto-real-amauta/galeria-web.jpg" alt=""></li>
				  <li><img src="theme/uploads/piloto-real-amauta/cocina.jpg" alt=""></li>
				  <li><img src="theme/uploads/piloto-real-amauta/dorm.jpg" alt=""></li>
				  <li><img src="theme/uploads/piloto-real-amauta/estar.jpg" alt=""></li>
				  <li><img src="theme/uploads/piloto-real-amauta/home.jpg" alt=""></li>
				  <li><img src="theme/uploads/galeria-amauta/area-verde.jpg" alt=""></li>
				  <li><img src="theme/uploads/galeria-amauta/piscina.jpg" alt=""></li>
				  <li><img src="theme/uploads/galeria-amauta/sala-de-juegos.jpg" alt=""></li>
				  <li><img src="theme/uploads/galeria-amauta/sum-adultos.jpg" alt=""></li>
				  <li><img src="theme/uploads/galeria-amauta/sum-ninos.jpg" alt=""></li>
				  <li><img src="theme/uploads/galeria-amauta/terraza-parrillas.jpg" alt=""></li>
			   </ul>
			</div>
			<!--div class="b11-img-menu"><ul class="b11-img-element"><li class="b11-img-item"><a href="#"><img src="../../../static/img/b11-mini.jpg" alt=""></a></li></ul></div-->
		 </div>
		 <div class="b11-title">
			<h2 class="g-title-2">Nuestros mejores <br />
			   espacios para ti
			</h2>
		 </div>
		 <div class="b11-char">
			<ul class="b11-char-element">
			   <li class="b11-char-item">
				  <!--<span class="icon-build"></span> --><img src="theme/uploads/iconos/seguridad.png" alt=""><!-- <img src="../../../static/img/b11-icono.png" alt="">-->
				  Seguridad 24Hrs
			   </li>
			   <li class="b11-char-item">
				  <!--<span class="icon-build"></span> --><img src="theme/uploads/iconos/panoramica.png" alt=""><!-- <img src="../../../static/img/b11-icono.png" alt="">-->
				  Vista Panorámica
			   </li>
			   <li class="b11-char-item">
				  <!--<span class="icon-build"></span> --><img src="theme/uploads/iconos/elevador.png" alt=""><!-- <img src="../../../static/img/b11-icono.png" alt="">-->
				  Ascensor
			   </li>
			   <li class="b11-char-item">
				  <!--<span class="icon-build"></span> --><img src="theme/uploads/iconos/gas.png" alt=""><!-- <img src="../../../static/img/b11-icono.png" alt="">-->
				  Conexión a Gas
			   </li>
			</ul>
			<div class="b11-btn"><a href="http://www.dragma3d.com/AMAUTA-WESCON/index.htm" class="btn-white">RECORRIDO 360</a></div>
		 </div>
	  </div>
   </div>
</section>
<section class="b12">
   <div class="b12-cnt">
	  <div class="cf">
		 <div class="b12-left">
			<div class="b12-top-tab"><a class="b12-top-link b12-tab-top-link" data-top="tab1" href="">LOS MEJORES DEPARTAMENTOS DE LIMA CERCADO</a></div>
			<div class="b12-content-tab">
			   <div class="b12-tab-top-item" id="tab1">
				  <div class="b12-cnt-tab">
					 <div class="b12-cnt-img">
						<div class="b12-cnt-padding">
						   <div id="slider-tab1_1" class="b12-img-item">
							  <figure><a class="b50-pitcher" href="uploads/planos-amauta/3-ambientes-1.jpg" data-id="1_1" ><img src="theme/uploads/planos-amauta/3-ambientes-1.jpg" width="620" height="411" alt=""></a></figure>
						   </div>
						   <div id="slider-tab1_2" class="b12-img-item">
							  <figure><a class="b50-pitcher" href="uploads/planos-amauta/2-ambientes--2017-05-22--18-32-01.jpg" data-id="1_2" ><img src="theme/uploads/planos-amauta/2-ambientes--2017-05-22--18-32-01.jpg" width="620" height="411" alt=""></a></figure>
						   </div>
						</div>
					 </div>
					 <div class="b12-carrusel">
						<div class="b12-carrusel-cnt js-b12-lanzador">
						   <div data-id="slider-tab1_1" class="b12-imgx b12-pager-item"><img src="theme/uploads/planos-amauta/3-ambientes-1.jpg" width="123" height="82" alt=""></div>
						   <div data-id="slider-tab1_2" class="b12-imgx b12-pager-item"><img src="theme/uploads/planos-amauta/2-ambientes--2017-05-22--18-32-01.jpg" width="123" height="82" alt=""></div>
						</div>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
		 <div class="b12-right">
			<div class="b12-title">
			   <h2 class="g-title yellow">Amauta te espera<br><span>¡ escríbenos ahora !</span></h2>
			</div>
			<div class="b12-form">
			   <form name="form" method="post" action="/reserva-process/3/" novalidate="novalidate" id="form-reserva">
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
						<select id="form_plano" name="form[plano]" required="required" class="validate[required]">
						   <option value="" selected="selected"></option>
						   <option value="1">Los Mejores departamentos de Lima Cercado</option>
						</select>
						<label for="form_plano">Escoge tu preferido:</label>
					 </div>
				  </div>
				  <div class="b6-btn"><button class="btn-big" type="submit">INFORMATE AQUÍ</button></div>
				  <input type="hidden" id="form__token" name="form[_token]" value="kSOTXbzIxW5U2U14wi1vH8eV6-Om7bAVG3SLdRK8ykk" />
			   </form>
			</div>
		 </div>
	  </div>
   </div>
</section>
<section class="b13 wancho">
   <div class="b13-cnt">
	  <div class="b13-map">
		 <div id="gmap"></div>
		 <div class="b13-btn-cerrar"><a href="" class="btn-big b13-pitcher-close" type="submit">CERRAR MAPA</a></div>
	  </div>
	  <div class="b13-dir wancho">
		 <div class="b13-dir-cnt ">
			<h2>Proyecto<br />
			   Prolongación Arica 2272
			</h2>
			<p>Encuéntranos en nuestra Sala de Ventas</p>
			<p>Lunes a Domingo de 9am a 6 pm</p>
			<div class="b13-btn-abrir"><a href="" class="btn-big b13-pitcher-open" type="submit">VER MAPA</a></div>
		 </div>
	  </div>
   </div>
</section>
<div class="b50-pop-up">
   <div class="b50-overlay"></div>
   <div class="b50-pop-content">
	  <span class="icon-close b50-close"></span>
	  <div class="b50-pop-info" data-id="1_1" style="display:none">
		 <div class="b50-img"><img src="theme/uploads/planos-amauta/3-ambientes-1.jpg" width="620" height="411" alt=""></div>
		 <div class="b50-details">
			<div class="b50-details-table">
			   <div class="b50-details-cell">
				  <div class="b50-list">
					 <h3>Desde 61 hasta 70m2</h3>
					 <ul>
						<li>Dormitorio Principal</li>
						<li>Segundo Dormitorio</li>
						<li>Tercer Ambiente</li>
						<li>Sala Comedor</li>
						<li>Cocina - Lavander&iacute;a</li>
						<li>2 Ba&ntilde;os Completos</li>
						<li>&Aacute;rea de estudio</li>
						<li>Balc&oacute;n</li>
					 </ul>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
	  <div class="b50-pop-info" data-id="1_2" style="display:none">
		 <div class="b50-img"><img src="theme/uploads/planos-amauta/2-ambientes--2017-05-22--18-32-01.jpg" width="620" height="411" alt=""></div>
		 <div class="b50-details">
			<div class="b50-details-table">
			   <div class="b50-details-cell">
				  <div class="b50-list">
					 <h3>Desde 55 hasta 60m2</h3>
					 <ul>
						<li>Dormitorio Principal</li>
						<li>Segundo Ambiente</li>
						<li>Sala Comedor</li>
						<li>Kitchenette</li>
						<li>Zona de Lavander&iacute;a</li>
						<li>2 Ba&ntilde;os Completos</li>
						<li>Balc&oacute;n</li>
					 </ul>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
   </div>
</div>