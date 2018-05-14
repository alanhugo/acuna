<table
		class="table table-striped table-bordered table-hover dataTables-example" id="dtable_banners">
		<thead>
			<tr>
				<th></th>
				<th><?php echo utf8_encode(__('Título')); ?></th>
				<th><?php echo utf8_encode(__('SubTítulo')); ?></th>
				<th><?php echo utf8_encode(__('Imagen')); ?></th>
				<th>Acci&oacute;n</th>
			</tr>
		</thead>
		<tbody>
			<?php $cont=1?>
			<?php foreach ($list_banners as $banner){ ?>
			<tr class="banner_row_container"
				banner_id="<?php echo $banner->getAttr('id'); ?>">
				<td><?php echo $cont++?></td>
				<td><?php echo utf8_encode($banner->getAttr('titulo')); ?></td>
				<td><?php echo utf8_encode($banner->getAttr('subtitulo')); ?></td>
				<td><img src = <?php //echo ENV_WEBROOT_FULL_URL.'file/banner/' utf8_encode($banner->getAttr('imagen')); ?>></td>
				<td><a><i class="fa fa-edit text-navy edit-banner-trigger"></i> </a>
					<a href="#myModalDeleteBanner" role="button" data-toggle="modal"
					data-target="#myModalDeletebanner"><i
						class="fa fa-trash-o text-navy open-model-delete-banner"></i> </a>
				</td>
			</tr>
			<?php }?>
		</tbody>