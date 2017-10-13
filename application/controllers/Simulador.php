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

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('comunes/head');
		$this->load->view('simulador');
		$this->load->view('comunes/footer');
	}

	public function ocultarMes(){
		$mes = $this->input->post('PrimerMes');

		$array = array();

		if($mes == "p1"){
			$menos = "s12";
			$mas = "s2";
		}
		else if ($mes == "p12"){
			$menos = "s11";
			$mas = "s1";
		}
		else{
			$menos = "s" .+ (((int)substr($mes, -1)) - 1);
			$mas = "s" .+ (((int)substr($mes, -1)) + 1);
		}

		$array[0] = $menos;
		$array[1] = $mas;
		$array[2] = ("s" .+ substr($mes, -1));

		echo json_encode($array);
	}

	public function validarRut(){
		$rut = $this->input->post('Rut');
		$rut = preg_replace('/[^k0-9]/i', '', $rut);
	    $dv  = substr($rut, -1);
		$numero = substr($rut, 0, strlen($rut)-1);
		$i = 2;
		$suma = 0;
		foreach(array_reverse(str_split($numero)) as $v){
			if($i==8)
				$i = 2;
			$suma += $v * $i;
			++$i;
		}
		$dvr = 11 - ($suma % 11);

		if($dvr == 11)
			$dvr = 0;
		if($dvr == 10)
			$dvr = 'K';
		if($dvr == strtoupper($dv)){
			echo '<div style="display:none">1</div>';
			return true;
		}
		else
			return false;
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
