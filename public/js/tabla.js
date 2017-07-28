$(document).ready(function() 
{

	
	//

	$("body").on("click",".btnModificarEnc",function()
	{
		if($("#employee-grid_wrapper tbody tr.selected").length > 0)
		{
			alert('Has hecho click en el row con id: '+table.rows($("#employee-grid_wrapper tbody tr.selected").index()).data().pluck(0)[0]);
		}
		else
		{
			alert('Seleccione el registro a Modificar');
		}

		

	});

	$("body").on("click",".btnEliminarEnc",function()
	{
		if($("#employee-grid_wrapper tbody tr.selected").length > 0)
		{
			alert('Has hecho click en el row con id: '+table.rows($("#employee-grid_wrapper tbody tr.selected").index()).data().pluck(0)[0]);
		}
		else
		{
			alert('Seleccione el registro a Eliminar');
		}
		
	});

	$("body").on("click",".btnModificar",function()
	{
		alert('Has hecho click en el row con id: '+table.rows($(this).closest("tr").index()).data().pluck(0)[0]);

	});


	$("body").on("click",".btnEliminar",function()
	{
		alert('Has hecho click en el row con id: '+table.rows($(this).closest("tr").index()).data().pluck(0)[0]);
		
	});


				 table = $('#employee-grid').DataTable( 
				{
					"processing": true,
					"serverSide": true,
					 "select": 'single',
					 
					"ajax":{
						url :"Tabla/cargarTabla", // json datasource
						type: "post",  // method  , by default get
						//contentType: "application/json",
						error: function(d){  // error handling
							$(".employee-grid-error").html("");
							$("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#employee-grid_processing").css("display","none");
							
						}
						//,
						// success:function(d)
						// {
						// 	debugger;
						// }
					},
					"columnDefs": [
						            {
						                "targets": [ 0 ],
						                "visible": false,
						                "searchable": false
						            }
						        ],
					

				} );


				table.on( 'select', function ( e, dt, type, indexes ) 
				{
							if ( type === 'row' ) {

								//debugger;

							//table.rows(indexes).data()[0]
							// table.rows( indexes ).data()

							

							//var id_usuario = table.rows(indexes).data()[0][0]



					        var id_usuario = table.rows( indexes ).data().pluck(0)[0];

					        console.log(id_usuario);

					        // do something with the ID of the selected items
					    }
				} );






} );