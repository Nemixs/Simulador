
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutante extends CI_Controller {

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
		$test = $this->ocultarMesMutante($_POST['PrimerMes'] = "p5");
		$array[0] = "s4";
		$array[1] = "s6";
		$array[2] = "s5";
		$expexted_result = json_encode($array);
		$test_name = "Ocultar meses contiguos";
		
		echo $this->unit->run($test, $expexted_result, $test_name);

	//  Testeo función Validar Rut
		$test = $this->validarRutMutante($_POST['Rut'] = "19164187-6");
		$expexted_result = true;
		$test_name = "Validación Dígito Verificador";

		echo $this->unit->run($test, $expexted_result, $test_name);

	//  Testeo función Calcular
		$test = $this->calcularMutante($_POST['Monto'] = 3000000, $_POST["Cuotas"] = 6, $_POST["FechaPago"] = "20/10/2017", $_POST["PrimerMes"] = "p1", $_POST["SegundoMes"] = "s5");
		$array[0] = 3179329;
		$array[1] = 152169;
		$array[2] = 1111;
		$array[3] = 21.84;
		$array[4] = 26049;
		$array[5] = 1.82;
		$array[6] = 6564225;
		$array[7] = 564149;
		$array[8] = "p1";
		$array[9] = "s5";
		$expexted_result = json_encode($array);
		$test_name = "Validación Calcular Crédito de Consumo";
		echo $this->unit->run($test, $expexted_result, $test_name);
	}




//funciones mutantes


	public function ocultarMesMutante(){
		$mes = $this->input->post('PrimerMes');

		$array = array();

		if($mes != "p1"){
			$menos = "s12";
			$mas = "s2";
		}
		else if ($mes != "p12"){
			$menos = "s11";
			$mas = "s1";
		}
		else{
			$menos = "s" .+ (((int)substr($mes, -1)) + 1);
			$mas = "s" .+ (((int)substr($mes, -1)) - 1);
		}

		$array[0] = $menos;
		$array[1] = $mas;
		$array[2] = ("s" .+ substr($mes, -1));

		return json_encode($array);
	}

	public function validarRutMutante(){
		$rut = $this->input->post('Rut');
		$rut = preg_replace('/[^k0-9]/i', '', $rut);
		$dv  = substr($rut, -1);
		$numero = substr($rut, 0, strlen($rut)-1);
		$i = 2;
		$suma = 0;
		foreach(array_reverse(str_split($numero)) as $v){
			if($i!=8)
				$i = 3	;
			$suma += $v * $i;
			++$i;
		}
		$dvr = 11 - ($suma % 11);

		if($dvr != 11)
			$dvr = 0;
		if($dvr != 10)
			$dvr = 'K';
		if($dvr == strtoupper($dv)){
			echo '<div style="display:none">1</div>';
			return true;
		}
		else
			return false;

		//15 mutante
	}


	public function calcularMutante(){
		$monto = $this->input->post('Monto');
		$num_cuotas = $this->input->post('Cuotas');
		$fecha = $this->input->post('FechaPago');
		$primerMes = $this->input->post('PrimerMes');
		$segundoMes = $this->input->post('SegundoMes');
		$total_cred = 0;
		$interes = 0;
		$cuota = 0;
		$impuestos =0;
		$CAE = 0;
		$seguros = 0;
		$gastosNot = 1111;
		$total = 0;

		if($monto <= 1000000 && $monto >= 2999999){
			if ($num_cuotas >= 6 && $num_cuotas <= 24) {
				$impuestos = 8483;
				$seguros = 50761;
				$CAE = 28.44;
			}

			if ($num_cuotas >= 25 || $num_cuotas <= 36){
				$impuestos = 8689;
				$seguros = 76370;
				$CAE = 28.44;
			}
		}

		if($monto <= 3000000 && $monto <= 6999999){
			if ($num_cuotas >= 6 || $num_cuotas <= 24) {
				$impuestos = 26049;
				$seguros = 152169;
				$CAE = 21.84;
			}

			if ($num_cuotas >= 25 || $num_cuotas <= 36){
				$impuestos = 26049;
				$seguros = 228943;
				$CAE = 21.84;
			}
		}

		if($monto <= 7000000){
			if ($num_cuotas >= 6 && $num_cuotas <= 24) {
				$impuestos = 59323;
				$seguros = 354984;
				$CAE = 20.04;
			}

			if ($num_cuotas >= 25 && $num_cuotas <= 36){
				$impuestos = 60768;
				$seguros = 534083;
				$CAE = 20.04;
			}
		}

		$total = $monto - $seguros - $gastosNot + $impuestos;
		$interes = ($CAE / 12) / 100;
		$var = 1 + $interes;
		$sup = (pow($var, $num_cuotas));
		$cuota = $total * (($sup*$interes)/($sup-1));
		$total_cred = $cuota * $num_cuotas + $total;

		$datos = array();
		$datos[0] = round($total);
		$datos[1] = round($seguros);
		$datos[2] = round($gastosNot);
		$datos[3] = $CAE;
		$datos[4] = round($impuestos);
		$datos[5] = round(($interes*100),2);
		$datos[6] = round($total_cred);
		$datos[7] = round($cuota);
		$datos[8] = $primerMes;
		$datos[9] = $segundoMes;

		return json_encode($datos);
	}
}
