<div class="container div-crear-proyecto form" id="div-crear-proyecto">

	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<div class="ibox-tools">
							<a class="collapse-link"> <i class="fa fa-chevron-up"></i>
							</a> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i
								class="fa fa-wrench"></i>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li><a href="#">Config option 1</a>
								</li>
								<li><a href="#">Config option 2</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="ibox-content">
						<?php echo $this->Form->create('Proyecto',array('action'=>'add_edit_proyecto','method'=>'post', 'id'=>'add_edit_proyecto', 'type' => 'file', 'accept-charset' => 'utf-8', 'class' => 'form-horizontal'));?>
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'Título'; ?></label>
								<div class="col-sm-6">
									<input name="data[Proyecto][thumb_titulo]" class="txtProyecto form-control" id="txtProyecto" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?utf8_decode($obj_proyecto->getAttr('thumb_titulo')):''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'subtítulo'; ?></label>
								<div class="col-sm-6">
									<input name="data[Proyecto][thumb_subtitulo]" class="txtProyecto form-control" id="txtProyecto" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?utf8_decode($obj_proyecto->getAttr('thumb_subtitulo')):''; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Imagen</label>
								<div class="col-sm-6">
									<div class='fileupload fileupload-new' data-provides='fileupload'>
										<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
											<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
												<input type="file" name="data[Proyecto][thumbnail]" style="opacity:0; position:absolute;height: 35px;left: 0px;top: 29px;" id="ProyectoImagen">
												<span class="fileinput-new">Select image</span>
											</span>
										</div>
										<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
										<?php if(isset($obj_proyecto) && $obj_proyecto->getAttr('thumbnail')!=''){?>
											<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/thumb-proy/'.$obj_proyecto->getAttr('thumbnail'); ?>">
										<?php }else{?>
											<img src="">
										<?php }?>
										</div>
									</div>
								</div>
							</div>

							SECCIÓN 1
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'Título Sección 1'; ?></label>
								<div class="col-sm-6">
									<input name="data[Proyecto][sect1_titulo]" class="txtProyecto form-control" id="txtProyecto" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?utf8_decode($obj_proyecto->getAttr('sect1_titulo')):''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'Subtítulo Sección 1'; ?></label>
								<div class="col-sm-6">
									<input name="data[Proyecto][sect1_subtitulo]" class="txtProyecto form-control" id="txtProyecto" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?utf8_decode($obj_proyecto->getAttr('sect1_subtitulo')):''; ?>">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label">Imagen Section 1</label>
								<div class="col-sm-6">
									<div class='fileupload fileupload-new' data-provides='fileupload'>
										<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
											<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
												<input type="file" name="data[Proyecto][sect1_img]" style="opacity:0; position:absolute;height: 35px;left: 0px;top: 29px;" id="ProyectoImagen2">
												<span class="fileinput-new">Select image</span>
											</span>
										</div>
										<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
										<?php if(isset($obj_proyecto) && $obj_proyecto->getAttr('sect1_img')!=''){?>
											<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/sect1-img/'.$obj_proyecto->getAttr('sect1_img'); ?>">
										<?php }else{?>
											<img src="">
										<?php }?>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div id="sect1-texto">
									<!--<textArea name="data[Proyecto][sect1_texto]" class="summernote" />-->
									<?php echo $this->Form->input('sect1_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'sect1-texto')); //TEXT AREA?>
								</div>
							</div>
							
							<div class="hr-line-dashed"></div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-2">
									<button type="button" class="btn btn-primary btn-crear-proyecto-trigger" style="margin-right:17px;"><?php echo __('Guardar'); ?></button>
									<button type="button" class="btn btn-white btn-cancelar-crear-proyecto"><?php echo __('Cancelar');?></button>
								</div>
							</div>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script>
	 $(document).ready(function(){

            $('.summernote').summernote();

       });
</script>