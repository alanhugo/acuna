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

// EVENTOS PARA EDITORES

	///  EDITOR SECCIÓN UNO
	$body.off('keypress','#sect1-texto .note-editable');
	$body.on('keypress','#sect1-texto .note-editable',function(){
		
		$("textarea#sect1-texto").html($('#sect1-texto .note-editable').html());
	});

	$body.off('click','#sect1-texto .note-toolbar');
	$body.on('click','#sect1-texto .note-toolbar',function(){
		
		$("textarea#sect1-texto").html($('#sect1-texto .note-editable').html());
	});

	/// EDITOR CAT. UBICACIÓN
	$body.off('keypress','#div-cat-ubi .note-editable');
	$body.on('keypress','#div-cat-ubi .note-editable',function(){
		
		$("textarea#cat-ubi").html($('#div-cat-ubi .note-editable').html());
	});

	$body.off('click','#div-cat-ubi .note-toolbar');
	$body.on('click','#div-cat-ubi .note-toolbar',function(){
		
		$("textarea#cat-ubi").html($('#div-cat-ubi .note-editable').html());
	});

	/// EDITOR CAT. ÁREA COMÚN
	$body.off('keypress','#div-cat-area-comun .note-editable');
	$body.on('keypress','#div-cat-area-comun .note-editable',function(){
		
		$("textarea#cat-area-comun").html($('#div-cat-area-comun .note-editable').html());
	});

	$body.off('click','#div-cat-area-comun .note-toolbar');
	$body.on('click','#div-cat-area-comun .note-toolbar',function(){
		
		$("textarea#cat-area-comun").html($('#div-cat-area-comun .note-editable').html());
	});

	/// EDITOR CAT. DEPARTAMENTOS
	$body.off('keypress','#div-cat-departamento .note-editable');
	$body.on('keypress','#div-cat-departamento .note-editable',function(){
		
		$("textarea#cat-depart").html($('#div-cat-departamento .note-editable').html());
	});

	$body.off('click','#div-cat-departamento .note-toolbar');
	$body.on('click','#div-cat-departamento .note-toolbar',function(){
		
		$("textarea#cat-depart").html($('#div-cat-departamento .note-editable').html());
	});

	/// EDITOR CAT. ÁREAS VERDES
	$body.off('keypress','#div-cat-area-verd .note-editable');
	$body.on('keypress','#div-cat-area-verd .note-editable',function(){
		
		$("textarea#cat-area-verd").html($('#div-cat-area-verd .note-editable').html());
	});

	$body.off('click','#div-cat-area-verd .note-toolbar');
	$body.on('click','#div-cat-area-verd .note-toolbar',function(){
		
		$("textarea#cat-area-verd").html($('#div-cat-area-verd .note-editable').html());
	});

	/// EDITOR CAT. TECHO PROPIO
	$body.off('keypress','#div-cat-tech-prop .note-editable');
	$body.on('keypress','#div-cat-tech-prop .note-editable',function(){
		
		$("textarea#cat-tech-prop").html($('#div-cat-tech-prop .note-editable').html());
	});

	$body.off('click','#div-cat-tech-prop .note-toolbar');
	$body.on('click','#div-cat-tech-prop .note-toolbar',function(){
		
		$("textarea#cat-tech-prop").html($('#div-cat-tech-prop .note-editable').html());
	});

	/// EDITOR CAT. PROYECTO
	$body.off('keypress','#div-cat-proy .note-editable');
	$body.on('keypress','#div-cat-proy .note-editable',function(){
		
		$("textarea#cat-proy").html($('#div-cat-proy .note-editable').html());
	});

	$body.off('click','#div-cat-proy .note-toolbar');
	$body.on('click','#div-cat-proy .note-toolbar',function(){
		
		$("textarea#cat-proy").html($('#div-cat-proy .note-editable').html());
	});

	/// EDITOR CAT. CASAS
	$body.off('keypress','#div-cat-casas .note-editable');
	$body.on('keypress','#div-cat-casas .note-editable',function(){
		
		$("textarea#cat-casas").html($('#div-cat-casas .note-editable').html());
	});

	$body.off('click','#div-cat-casas .note-toolbar');
	$body.on('click','#div-cat-casas .note-toolbar',function(){
		
		$("textarea#cat-casas").html($('#div-cat-casas .note-editable').html());
	});

	/// EDITOR CAT. PROMOCIONES
	$body.off('keypress','#div-cat-promo .note-editable');
	$body.on('keypress','#div-cat-promo .note-editable',function(){
		
		$("textarea#cat-promo").html($('#div-cat-promo .note-editable').html());
	});

	$body.off('click','#div-cat-promo .note-toolbar');
	$body.on('click','#div-cat-promo .note-toolbar',function(){
		
		$("textarea#cat-promo").html($('#div-cat-promo .note-editable').html());
	});

	/// EDITOR CAT. MAS FACILIDADES
	$body.off('keypress','#div-cat-facilidad .note-editable');
	$body.on('keypress','#div-cat-facilidad .note-editable',function(){
		
		$("textarea#cat-facilidad").html($('#div-cat-facilidad .note-editable').html());
	});

	$body.off('click','#div-cat-facilidad .note-toolbar');
	$body.on('click','#div-cat-facilidad .note-toolbar',function(){
		
		$("textarea#cat-facilidad").html($('#div-cat-facilidad .note-editable').html());
	});

	/// EDITOR CAT. VENTAJAS
	$body.off('keypress','#div-cat-ventaja .note-editable');
	$body.on('keypress','#div-cat-ventaja .note-editable',function(){
		
		$("textarea#cat-ventaja").html($('#div-cat-ventaja .note-editable').html());
	});

	$body.off('click','#div-cat-ventaja .note-toolbar');
	$body.on('click','#div-cat-ventaja .note-toolbar',function(){
		
		$("textarea#cat-ventaja").html($('#div-cat-ventaja .note-editable').html());
	});


// FIN EVENTOS PARA EDITORES

	
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
					//toastr.error(value[0]);
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