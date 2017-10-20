<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tests extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
		$this->load->library('unit_test');
	}

	public function index(){
	//	Testeo función Ocultar Meses
		$test = $this->ocultarMes($_POST['PrimerMes'] = "p5");
		$array[0] = "s4";
		$array[1] = "s6";
		$array[2] = "s5";
		$expexted_result = json_encode($array);
		$test_name = "Ocultar meses contiguos";
		
		echo $this->unit->run($test, $expexted_result, $test_name);

	//  Testeo función Validar Rut
		$test = $this->validarRut($_POST['Rut'] = "19164187-6");
		$expexted_result = true;
		$test_name = "Validación Dígito Verificador";

        echo $this->unit->run($test, $expexted_result, $test_name);
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

		return json_encode($array);
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
}