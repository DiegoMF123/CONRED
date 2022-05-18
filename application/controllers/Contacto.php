<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Contacto extends CI_Controller
{

    public function index()
	{
		$this->load->helper('url');
		$this->load->model('Model_contacto');
		$data["datoscontacto"] = $this->Model_contacto->seleccionarContacto();
		$this->load->view('conredContacto', $data);
	}

	public function mostrarContacto()
	{
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Model_archivo');
		$id = 2;
		$data = $this->Model_archivo->mostrare($id);

		foreach ($data as $key) {
			// code...
			if ($key->nombre_archivo == "") {
				echo "<p>NO tiene archivos</p>";
			} else {

				header('content-type: application/pdf');
				readfile('assets/archivos/' . $key->nombre_archivo);
			}
		}
	}
}
