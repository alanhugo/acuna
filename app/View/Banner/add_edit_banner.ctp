<div class="container div-crear-banner form" id="div-crear-banner">

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
						<?php echo $this->Form->create('Banner',array('method'=>'post', 'id'=>'add_edit_banner', 'accept-charset' => 'utf-8', 'class' => 'form-horizontal'));?>
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo utf8_encode('Área'); ?></label>
								<div class="col-sm-6">
									<input name="data[Banner][titulo]" class="txtBanner form-control" id="txtBanner" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_banner))?utf8_decode($obj_banner->getAttr('titulo')):''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo utf8_encode('Área'); ?></label>
								<div class="col-sm-6">
									<input name="data[Banner][subtitulo]" class="txtBanner form-control" id="txtBanner" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_banner))?utf8_decode($obj_banner->getAttr('subtitulo')):''; ?>">
								</div>
							</div>
						<?php if($obj_logged_user->getAttr('tipo_usuario_id') == 3) {?>
							<div class="form-group">
								<label class="col-sm-2 control-label">Permiso (Tr&aacute;mite)</label>
								<div class="col-sm-2">
									<select class="form-control m-b" name="data[Banner][permiso]">
										
										<?php if(isset($obj_banner)){ ?>
											<option value="">Selecionar</option>
											<option value="1" <?php echo($obj_banner->getAttr('permiso')==1)?'selected':''; ?>>Si</option>
											<option value="0" <?php echo($obj_banner->getAttr('permiso')==0)?'selected':''; ?>>No</option>
										<?php }else{?>
											<option value="" selected>Selecionar</option>
											<option value="1">Si</option>
											<option value="0">No</option>
										<?php }?>
									</select>
								</div>
							</div>
						<?php } ?>

						<?php //if($obj_logged_user->getAttr('tipo_usuario_id') == 3) {?>
							<div class="form-group">
								<label class="col-sm-2 control-label">Permiso (Activar email)</label>
								<div class="col-sm-2">
									<select class="form-control m-b" name="data[Banner][permiso_email]">
										
										<?php if(isset($obj_banner)){ ?>
											<option value="">Selecionar</option>
											<option value="1" <?php echo($obj_banner->getAttr('permiso_email')==1)?'selected':''; ?>>Si</option>
											<option value="0" <?php echo($obj_banner->getAttr('permiso_email')==0)?'selected':''; ?>>No</option>
										<?php }else{?>
											<option value="" selected>Selecionar</option>
											<option value="1">Si</option>
											<option value="0">No</option>
										<?php }?>
									</select>
								</div>
							</div>
						<?php //} ?>
						
							<div class="hr-line-dashed"></div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-2">
									<button type="button" class="btn btn-primary btn-crear-banner-trigger" style="margin-right:17px;"><?php echo __('Guardar'); ?></button>
									<button type="button" class="btn btn-white btn-cancelar-crear-banner"><?php echo __('Cancelar');?></button>
								</div>
							</div>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>