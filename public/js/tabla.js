$(document).ready(function() {
				var dataTable = $('#employee-grid').DataTable( {
					"processing": true,
					"serverSide": true,
					// "ajax": "scripts/server_processing.php"
					"ajax":{
						url :"Tabla/cargarTabla", // json datasource
						type: "post",  // method  , by default get
						//contentType: "application/json",
						error: function(d){  // error handling
							$(".employee-grid-error").html("");
							$("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#employee-grid_processing").css("display","none");
							
						}
						// ,
						// success:function(d)
						// {
						// 	debugger;
						// }
					}
				} );


				dataTable.ajax.url()












			} );