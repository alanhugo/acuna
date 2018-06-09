<table
		class="table table-striped table-bordered table-hover dataTables-example" id="dtable_banners">
		<thead>
			<tr>
				<th></th>
				<th><?php echo 'Título'; ?></th>
				<th><?php echo 'Banner'; ?></th>
				<th>Acci&oacute;n</th>
			</tr>
		</thead>
		<tbody>
			<?php $cont=1?>
			<?php foreach ($list_conocenos as $conoceno){ ?>
			<tr class="banner_row_container"
				banner_id="<?php echo $banner->getAttr('id'); ?>">
				<td><?php echo $cont++?></td>
				<td><?php echo utf8_encode($conoceno->getAttr('banner_titulo')); ?></td>
				<td><img src = <?php echo ENV_WEBROOT_FULL_URL.'files/conocenos/'.$conoceno->getAttr('banner'); ?> width='80'></td>
				<td><a><i class="fa fa-edit text-navy edit-banner-trigger"></i> </a>
					<a href="#myModalDeleteConocenos" role="button" data-toggle="modal"
					data-target="#myModalDeleteConocenos"><i
						class="fa fa-trash-o text-navy open-model-delete-banner"></i> </a>
				</td>
			</tr>
			<?php }?>
		</tbody>