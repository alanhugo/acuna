$(document).ready(function(){
	
	Proyecto = this;
	$body = $('body');
	
	proyecto = {
		openAddEditProyecto: function(proyecto_id){
			if(proyecto_id == undefined || !proyecto_id) {
				proyecto_id ='';
			}
			
			$('div#proyecto #add_edit_proyecto_container').unbind();
			$('div#proyecto #add_edit_proyecto_container').load(env_webroot_script + 'proyectos/add_edit_proyecto/'+proyecto_id,function(){

			});
		},
		
		deleteProyecto: function(proyecto_id){
			$.ajax({
				type: 'post',
				url: env_webroot_script + 'proyectos/delete_proyecto',
				data:{
					'proyecto_id': proyecto_id
				},
				dataType: 'json'
			}).done(function(data){
				if(data.success == true){
					$('.proyecto_row_container[proyecto_id='+proyecto_id+']').fadeOut(function(){$(this).remove()});
					$('#conteiner_all_rows').load(env_webroot_script + escape('proyectos/find_proyectos/1/'+null+'/'+null+'/'+''+'/'+''),function(){
						$('#dtable_proyectos').DataTable();
					});
					toastr.success(data.msg);
				}else{
					toastr.error(value[0]);
				}
			});	
		}
	}
	
	/* Mostrar formulario: Crear Proyecto */
	$body.off('click','div#proyecto .btn-nuevo-proyecto');
	$body.on('click', 'div#proyecto .btn-nuevo-proyecto' , function(){
		proyecto_id = $(this).attr('proyecto_id');
		proyecto.openAddEditProyecto(proyecto_id);
	});
	
	/* Ocultar formulario Crear Proyecto*/
	$body.on('click','div#div-crear-proyecto .btn-cancelar-crear-proyecto', function(){
		$('#div-crear-proyecto').fadeOut();
	});

	$body.off('keypress','.note-editable');
	$body.on('keypress','.note-editable',function(){
		
		//$('#sect1-texto').val($('.note-editable').html());
		$("textarea#sect1-texto").html($('.note-editable').html());//prueba asi me cagaste a ver
	});

	$body.off('click','.note-toolbar');
	$body.on('click','.note-toolbar',function(){
		
		//$('#sect1-texto').val($('.note-editable').html());
		$("textarea#sect1-texto").html($('.note-editable').html());//prueba asi me cagaste a ver
	});

	
	$body.off('click','.btn-crear-proyecto-trigger');
	$body.on('click','.btn-crear-proyecto-trigger',function(){
		//$form = $(this).parents('form').eq(0);
		//alert($('textarea#sect1-texto').text()); return false;

		var formData = new FormData($("#add_edit_proyecto")[0]);

		//alert("opcion 1" + $("#add_edit_proyecto").attr('action')); return false;
		//alert("opcion 2" + $("#add_edit_proyecto")[0]); return false;


		$.ajax({
			url: $("#add_edit_proyecto").attr('action'),
			data: formData,
			dataType: 'json',
			type: 'post',
			cache: false,
			contentType: false,
            processData: false,
		}).done(function(data){
			if(data.success==true){
				$('#div-crear-proyecto').hide();
				$('#conteiner_all_rows').load(env_webroot_script + escape('proyectos/find_proyectos/1/'+null+'/'+null+'/'+''+'/'+''),function(){
					$('#dtable_proyectos').DataTable();
				});
				//toastr.success(data.msg);
			}else{
				$.each(data.validation, function( key, value ) {
					toastr.error(value[0]);
					$('[name="data[Proyecto]['+key+']"]').parent().addClass('control-group has-error');
					$('[name="data[Proyecto]['+key+']"]').change(function() {
						$('[name="data[Proyecto]['+key+']"]').parent().removeClass('control-group has-error');
					});
				});
			}
		});
	});

	$body.off('click','div#proyecto .edit-proyecto-trigger');
	$body.on('click','div#proyecto .edit-proyecto-trigger', function(){
		proyecto_id = $(this).parents('.proyecto_row_container').attr('proyecto_id');
		proyecto.openAddEditProyecto(proyecto_id);
	});
	
	$body.off('click','div#proyecto .open-model-delete-proyecto');
	$body.on('click','div#proyecto .open-model-delete-proyecto', function(){
		proyecto_id = $(this).parents('.proyecto_row_container').attr('proyecto_id');
		$('div#myModalDeleteProyecto').attr('proyecto_id', proyecto_id);
	});
	
	$body.off('click','div#myModalDeleteProyecto .eliminar-proyecto-trigger');
	$body.on('click','div#myModalDeleteProyecto .eliminar-proyecto-trigger', function(){
		proyecto_id = $('div#myModalDeleteProyecto').attr('proyecto_id');
		proyecto.deleteProyecto(proyecto_id);
	});
	
});