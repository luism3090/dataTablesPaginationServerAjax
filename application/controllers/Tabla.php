<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabla extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();



		
	}

	public function index()
	{

		$this->load->view('Tabla/tabla');

	}


	public function cargarTabla()
	{
		
		$this->load->model('FolderTabla/ModelTabla');

		$datosMenu = $this->ModelTabla->getElmentostabla($_REQUEST);

		//$datos["valor"] = $_REQUEST;
		echo json_encode($datosMenu);

		// $datos["valor"] = $_REQUEST;
		// echo json_encode($datos);

	}





}

?>