<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulador extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('comunes/head');
		$this->load->view('simulador');
		$this->load->view('comunes/footer');
	}

	public function calcular(){
		$monto = $this->input->post('Monto');
		$num_cuotas = $this->input->post('Cuotas');
		$fecha = $this->input->post('FechaPago');
		$primerMes = $this->input->post('PrimerMes');
		$segundoMes = $this->input->post('SegundoMeso');
		$CAE = 28.33;
		$seguros = 152167;
		$gastosNot = 1111;
		$total = $monto + $seguros;

//		if($monto > 3000000 && $monto < 6999999){
			$interes = 0.0182;
			$cuota = ($total * $interes) / (1 - (1 + $interes) ** $num_cuotas);
			$total_cred = $cuota * $num_cuotas;
//		}
		
	

		$arrayName = array();
		$arrayName[0] = $total;
		$arrayName[1] = $seguros;
		$arrayName[2] = $gastosNot;
		$arrayName[3] = $CAE;
		$arrayName[4] = ($interes*100);
		$arrayName[5] = $total_cred;
		$arrayName[6] = $cuota;
		$arrayName[7] = $primerMes;
		$arrayName[8] = $segundoMes;

		return $arrayName;

	}

}
