	<!-- ============================================
	FOOTER SECTION
	=============================================== -->
	<footer class="footer-wrapper" role="contentinfo">
		<div class="footer">
		<div class="pull-right text-muted"><small>Currently v1.2</small></div>
		<div>Wrapkit Template  &copy; 2015</div>
		</div>
	</footer><!-- /.FOOTER -->

	</main><!-- /#MAIN -->

	<script type="text/javascript">
	function load() {
	$("#calendar").daterangepicker({
		locale: {
		format: "DD/MM/YYYY"
		},
		singleDatePicker: true,
		"minDate": "20/10/2017"
	});
	$("#meses").hide();
	$("#paso2").hide();
	console.clear();
	}

	function mesesNoPago(Check){
		if (Check.checked){
		$("#meses").show();
		}
		else{
		$("#meses").hide();
		}
	}

	function getMonto(){
		return $('#monto').val();
	}

	function getCuota(){
		return $('#cuotas').val();
	}

	function getFecha(){
		return "20/10/2017";
	}

	function getMes(index){
		if(index == 1){
			return $('#inputSelect :selected').attr('value');
		} else if(index == 2){
			return $('#inputSelect2 :selected').attr('value');
		}
		else{
			return "mes";
		}
	}

	function montoError(Valor){
		if(Valor.value < 500000){
		$('#montoError').html('<span>El monto debe ser superior a $500.000</span>');
		}
		else
		$('#montoError').html('<span></span>');
	}

	function cuotaError(Valor){
		if(Valor < 6 || Valor > 60){
		$('#cuotaError').html('<span>El número de coutas debe ser superior a 6 e inferior a 60</span>');
		} else{
		$('#cuotaError').html('<span></span>');
		}
	}

	function validarRut(Rut){
		var param = {
		"Rut": Rut.value
		};
		$.ajax({
		type: "POST",
		url: base_url + "validarRut",
		data: param,
		success: function(respuesta){
			if(respuesta == '<div style="display:none">1</div>'){
				document.getElementById("rutSuccess").className = "form-group has-success";
				formulario.boton.disabled = false;
				$("#paso2").show();
			}
			else{
				document.getElementById("rutSuccess").className = "form-group has-warning";
				formulario.boton.disabled = true;
				$("#paso2").hide();
			}
		}
		})
	}

	function calcular(){
		console.log("calcular");
		var param = {
		"Monto": getMonto(),
		"Cuotas": getCuota(),
		"FechaPago": getFecha(),
		"PrimerMes": getMes(1),
		"SegundoMes": getMes(2)
		};
		console.log(param);
		$.ajax({
			type: "POST",
			url: base_url + "calcular",
			data: param,
			dataType: "json",
			success: function(respuesta){
				console.log(respuesta);
				document.getElementById("ResultadoMonto").innerHTML = formatMoney(param["Monto"]);
				document.getElementById("ResultadoCuota").innerHTML = formatMoney(respuesta[7]);
				document.getElementById("ResultadoPlazo").innerHTML = param["Cuotas"];
				document.getElementById("ResultadoTasa").innerHTML = formatPercentage(respuesta[5]);
				document.getElementById("ResultadoMontoSolicitado").innerHTML = formatMoney(param["Monto"]);
				document.getElementById("ResultadoSeguros").innerHTML = formatMoney(respuesta[1]);
				document.getElementById("ResultadoImpuesto").innerHTML = formatMoney(respuesta[4]);
				document.getElementById("ResultadoGN").innerHTML = formatMoney(respuesta[2]);
				document.getElementById("ResultadoMontoCredito").innerHTML = formatMoney(respuesta[0]);
				document.getElementById("ResultadoInteres").innerHTML = intereses(respuesta[5]); // Anual[configurar]
				document.getElementById("ResultadoFechaPago").innerHTML = param["FechaPago"];
				document.getElementById("ResultadoMesesNoPago").innerHTML = showMes(param["PrimerMes"],1) + " - " + showMes(param["SegundoMes"],2); // Ambos meses[configurar]
				document.getElementById("ResultadoCAE").innerHTML = formatPercentage(respuesta[3]);
				document.getElementById("ResultadoTotal").innerHTML = formatMoney(respuesta[6]);

				console.log(respuesta);
			}
		});
	}

	function showMes(Value, Num){
		if (Value == "mes"){
			return "";
		}
		else{
			if(Num == 1){
				return $('#inputSelect :selected').text();
			} else{
				return $('#inputSelect2 :selected').text();
			}
		}
	}

	function formatMoney(Value){
		var val = parseFloat(Value);
		return '$' + val.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
	}

	function formatPercentage(Value){
		var val = parseFloat(Value);
		return val.toFixed(2) + "%";
	}

	function intereses(Value){
		return formatPercentage(Value) + " (" + formatPercentage(Value*12) + " interés anual)";
	}

	function mesNoPago(Select){
		var param = {
		"PrimerMes": Select.value
		};
		$.ajax({
		type: "POST",
		data: param,
		url: base_url + "ocultarMes",
		dataType: "json",
		success: function(respuesta){
			$("#inputSelect2 option[value=" + respuesta[0] + "]").wrap("<span>");
			$("#inputSelect2 option[value=" + respuesta[1] + "]").wrap("<span>");
			$("#inputSelect2 option[value=" + respuesta[2] + "]").wrap("<span>");
		}
		});
	}
	 
	</script>


	<!-- VENDORS : jQuery & Bootstrap -->
	<script src="<?php echo base_url()?>assets/scripts/vendor.js"></script>
	<!-- END VENDORS -->

	<!-- DEPENDENCIES : Required plugins -->
	<script src="<?php echo base_url()?>assets/scripts/dependencies.js"></script>
	<!-- END DEPENDENCIES -->

	<!-- WRAPKIT -->
	<script src="<?php echo base_url()?>assets/scripts/wrapkit.js"></script>
	<!-- END WRAPKIT -->

	<!-- WRAPKIT SETUPS -->
	<script src="<?php echo base_url()?>assets/scripts/wrapkit-setup.js"></script>
	<!-- end WRAPKIT SETUPS -->

	<!-- PLUGIN SETUPS: vendors & dependencies setups -->
	<script src="<?php echo base_url()?>assets/scripts/plugin-setups.js"></script>
	<!-- END PLUGIN SETUPS -->

	<!-- COMPONENTS -->
	<script src="<?php echo base_url()?>assets/scripts/select2.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/jquery.bootstrap.wizard.js"></script>
	
	<script src="<?php echo base_url()?>assets/scripts/typeahead.bundle.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/jquery.mask.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/moment.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/daterangepicker.js"></script>
	<!-- END COMPONENTS -->

	<!-- DUMMY: Use for demo -->
	<script src="<?php echo base_url()?>assets/scripts/demo/frm-wizard-demo.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/demo/frm-advance-demo.js"></script>


	<!-- Google Analytics: change UA-71722129-1 to be your site's ID. -->
	<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='../../../../../www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-71722129-1');ga('send','pageview');
	</script>
</body>

<!-- Mirrored from stilearning.com/items/preview/wrapkit/1.2/frm-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2017 20:46:00 GMT -->
</html>