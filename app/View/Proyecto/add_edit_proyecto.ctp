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
									<input name="data[Proyecto][titulo]" class="txtProyecto form-control" id="txtProyecto" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?utf8_decode($obj_proyecto->getAttr('titulo')):''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'subtítulo'; ?></label>
								<div class="col-sm-6">
									<input name="data[Proyecto][subtitulo]" class="txtProyecto form-control" id="txtProyecto" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?utf8_decode($obj_proyecto->getAttr('subtitulo')):''; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Imagen</label>
								<div class="col-sm-6">
									<div class='fileupload fileupload-new' data-provides='fileupload'>
										<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
											<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
												<input type="file" name="data[Proyecto][imagen]" style="opacity:0; position:absolute;height: 35px;left: 0px;top: 29px;" id="ProyectoImagen">
												<span class="fileinput-new">Select image</span>
											</span>
										</div>
										<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
										<?php if(isset($obj_proyecto) && $obj_proyecto->getAttr('imagen')!=''){?>
											<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/proyecto/'.$obj_proyecto->getAttr('imagen'); ?>">
										<?php }else{?>
											<img src="">
										<?php }?>
										</div>
									</div>
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