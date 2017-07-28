<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class ModelTabla extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}


		public function getElmentostabla($request)
		{

			$requestData= $request;


			// sacamos el total de registros de la consulta a plasmar en nuestra tabla de boostrap  


			$sqlDatosUsuarios = "select id_usuario,
										nombre,
										apellidos,
										email,
										fecha_registro ,
										'<button  type=''button'' class=''btn btn-primary btnModificar''> <span class=''glyphicon glyphicon-pencil''></span> </button>' as modificar,
										'<button  type=''button'' class=''btn btn-danger btnEliminar''> <span class=''glyphicon glyphicon-circle-arrow-down''></span> </button>' as eliminar 
								from usuarios ";
		    $query = $this->db->query($sqlDatosUsuarios);

		    $totalData = $query->num_rows();
			$totalFiltered = $totalData;



			//verificamos si es que existen datos que se filtraran en nuestra consulta 

			if( !empty($requestData['search']['value']) ) 
			{   

				$sqlDatosUsuarios = "select id_usuario,
											nombre,
											apellidos,
											email,
											fecha_registro,
										    '<button  type=''button'' class=''btn btn-primary btnModificar''> <span class=''glyphicon glyphicon-pencil''></span> </button>' as modificar,
										'<button  type=''button'' class=''btn btn-danger btnEliminar''> <span class=''glyphicon glyphicon-circle-arrow-down''></span> </button>' as eliminar 
									 from usuarios where ( 
														 nombre like '%".$this->db->escape_str($requestData['search']['value'])."%' or  
														 apellidos like '%".$this->db->escape_str($requestData['search']['value'])."%' or  
														 email like '%".$this->db->escape_str($requestData['search']['value'])."%' or
														 fecha_registro like '%".$this->db->escape_str($requestData['search']['value'])."%' ) ";

									
				$query = $this->db->query($sqlDatosUsuarios);
				$totalFiltered = $query->num_rows(); 
				

			}
			

			$limit = " LIMIT ".$this->db->escape_str($requestData['start'])." ,".$this->db->escape_str($requestData['length'])." ";
            $sqlDatosUsuarios .= $limit;
                
            $query = $this->db->query($sqlDatosUsuarios);

			$data = array();

					foreach ($query->result_array() as $row)
					{ 
						$nestedData=array();

					    $nestedData[] = $row["id_usuario"];
						$nestedData[] = $row["nombre"];
						$nestedData[] = $row["apellidos"];
						$nestedData[] = $row["email"];
						$nestedData[] = $row["fecha_registro"];
						$nestedData[] = $row["modificar"];
						$nestedData[] = $row["eliminar"];

						$data[] = $nestedData;
					}


		$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data  // total data array
			);


		return $json_data;


		}








	}

	


?>