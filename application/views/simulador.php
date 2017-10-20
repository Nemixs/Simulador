<body onload="load()">
  <!--[if lt IE 9]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<main class="wrapkit-wrapper" id="wrapper">

	<!-- ============================================
	MAIN CONTENT SECTION
	=============================================== -->
	<section class="content-wrapper" role="main">
	  <div class="content">
		<div class="pull-right" role="group">
		  <a data-toggle="modal" href="#" data-scripts="<?php base_url()?>assets/_includes/setups.js" data-target="#templateSetup" title="Template Setups" aria-label="template setups" class="btn btn-nofill btn-sm btn-default" href="#"><span class="icon-settings fa-lg text-muted"></span></a>
		</div>
		<ul class="breadcrumb breadcrumb-angle">
		  <li><a href="<?php base_url()?>" aria-label="home"><i class="fa fa-home"></i></a></li>
		  <li class="active">Simulador</li>
		</ul>

		<div class="content-body">
		  <!-- WIZARD
		  ================================================== -->
		  <div id="rootwizard" class="panel">
			<a href="#" class="pull-right btn btn-icon btn-default" data-toggle="panel-expand" rel="tooltip" title="expand" data-placement="bottom" data-container="body"><i class="arrow_expand fa-lg text-muted"></i></a>
			<div class="panel-heading">
			  <h3 class="panel-title"><i class="icon-note fa-fw"></i> Simula tu crédito</h3>
			</div><!-- /panel-heading -->
			<ul>
			  <li>
				<a href="#wizard1" data-toggle="tab">
				  <span class="number">1</span>
				  <span class="desc">Datos del Cliente</span>
				</a>
			  </li>
			  <li>
				<a href="#wizard2" data-toggle="tab">
				  <span class="number">2</span>
				  <span class="desc">Resultado del Crédito</span>
				</a>
			  </li>
			</ul><!-- /wizard-nav -->

			<div class="panel-body">
			  <div class="progress">
				<div class="progress-bar progress-bar-primary"></div>
			  </div><!-- /.progressbar -->
			</div>

			<div class="panel-body">
			  <form name="formulario" action="<?php echo base_url()?>Simulador/calcular" role="form" class="form-horizontal" method="post">
				<div class="tab-content">
				  <div class="tab-pane fade in" id="wizard1">
					<div id="rutSuccess" class="form-group">
					  <label class="col-md-3 control-label" for="Rut">Rut <span class="text-danger">*</span></label>
					  <div class="col-md-5">
						<div class="input-group input-group-in">
						  <input class="form-control" id="rut" name="rut" onchange="validarRut(this)" required="">
						  <span class="input-group-addon"><i class="icon-user text-muted"></i></span>
						</div>
					  </div>
					</div><!-- /form-group -->

					<div id="paso2">
						<div class="form-group">
						  <label class="col-md-3 control-label" for="Monto">Ingresa Monto <span class="text-danger">*</span></label>
						  <div class="col-md-5">
							<input id="monto" class="form-control" id="monto" name="monto" type="number" value="3000000" onblur="montoError(this)" onkeypress="return event.charCode >= 48 && event.charCode <= 57" min="500000">
							<span id="montoError" class="text-danger"></span>
						  </div>
						</div><!-- /form-group -->

						<div class="form-group">
						  <label class="col-md-3 control-label" for="Cuotas">Ingresa número de Cuotas <span class="text-danger">*</span></label>
						  <div class="col-md-5">
							<input id="cuotas" class="form-control" name="cuotas" type="number" value="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" min="6" onblur="cuotaError(this.value)">
							  <span id="cuotaError" class="text-danger"></span>
						  </div>
						</div><!-- /form-group -->

						<div class="form-group">
						   <label class="col-md-3 control-label" for="Cuotas">Fecha Primer Pago <span class="text-danger">*</span></label>
						   <div class="col-md-5">
								<div class="input-group input-group-in">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input name="calendar" id="calendar" data-input="daterangepicker" data-single-date-picker="true" data-show-dropdowns="true" class="form-control">
							</div>
						  </div><!-- /input-group-in -->
						</div><!--/form-group-->

						<div class="form-group">
						  <label class="col-md-3 control-label" for="Cuotas">Agregar Meses de no Pago <span class="text-danger">*</span></label>
						  <div class="col-md-5">
							<input id="checkbox" type="checkbox" class="js-switch" onchange="mesesNoPago(this)">
						  </div>
						</div><!-- /form-group -->

						<div id="meses">
						  <div class="form-group">
							<label class="col-md-3 control-label" for="address">Primer Mes <span class="text-danger">*</span></label>
							<div class="col-md-5">
							  <select class="form-control" id="inputSelect" onchange="mesNoPago(this)">
								<option value="mes">Seleccione un Mes</option>
								<option value="p1">Enero</option> <!-- sacar 'p' -->
								<option value="p2">Febrero</option>
								<option value="p3">Marzo</option>
								<option value="p4">Abril</option>
								<option value="p5">Mayo</option>
								<option value="p6">Junio</option>
								<option value="p7">Julio</option>
								<option value="p8">Agosto</option>
								<option value="p9">Septiembre</option>
								<option value="p10">Octubre</option>
								<option value="p11">Noviembre</option>
								<option value="p12">Diciembre</option>
							  </select>
							</div>
						  </div><!-- /form-group -->

						  <div class="form-group">
							<label class="col-md-3 control-label" for="address">Segundo Mes <span class="text-danger">*</span></label>
							<div class="col-md-5">
							  <select class="form-control" id="inputSelect2">
								<option value="mes">Seleccione un Mes</option>
								<option value="s1">Enero</option>
								<option value="s2">Febrero</option>
								<option value="s3">Marzo</option>
								<option value="s4">Abril</option>
								<option value="s5">Mayo</option>
								<option value="s6">Junio</option>
								<option value="s7">Julio</option>
								<option value="s8">Agosto</option>
								<option value="s9">Septiembre</option>
								<option value="s10">Octubre</option>
								<option value="s11">Noviembre</option>
								<option value="s12">Diciembre</option>
							  </select>
							</div>
						</div>
						
						</div><!-- /form-group -->
					</div>
				</div><!-- /.tab-pane -->

				<div class="tab-pane fade" id="wizard2">
					<div class="form-group">
						<label class="col-md-3 control-label">Crédito de Consumo</label>
						<div class="col-md-5">
							<label id="ResultadoMonto" class="control-label">$3.000.000</label>
						</div>
					</div><!-- /form-group -->

					<div class="form-group">
						<label class="col-md-3 control-label">Cuota Mensual</label>
						<div class="col-md-5">
							<label id="ResultadoCuota" class="control-label">$165.186</label>
						</div>
					</div><!-- /form-group -->

					<div class="form-group">
						<label class="col-md-3 control-label">Plazo del Crédito</label>
						<div class="col-md-5">
							<label id="ResultadoPlazo" class="control-label">24</label>
						</div>
					</div><!-- /form-group -->

					<div class="form-group">
						<label class="col-md-3 control-label">Tasa del Crédito</label>
						<div class="col-md-5">
							<label id="ResultadoTasa" class="control-label">1,82%</label>
						</div>
					</div><!-- /form-group -->

					<hr>

					<div class="form-group">
						<label class="col-md-3 control-label">Monto Solicitado</label>
						<div class="col-md-5">
							<label id="ResultadoMontoSolicitado" class="control-label">$3.000.000</label>
						</div>
					</div><!-- /form-group -->

					<div class="form-group">
						<label class="col-md-3 control-label">Seguros</label>
						<div class="col-md-5">
							<label id="ResultadoSeguros" class="control-label">$152.169</label>
						</div>
					</div><!-- /form-group -->

					<div class="form-group">
						<label class="col-md-3 control-label">Impuestos</label>
						<div class="col-md-5">
							<label id="ResultadoImpuesto" class="control-label">$25.430</label>
						</div>
					</div><!-- /form-group -->

					<div class="form-group">
						<label class="col-md-3 control-label">Gastos Notariales</label>
						<div class="col-md-5">
							<label id="ResultadoGN" class="control-label">$1.111</label>
						</div>
					</div><!-- /form-group -->

					<div class="form-group">
						<label class="col-md-3 control-label">Monto del Crédito</label>
						<div class="col-md-5">
							<label id="ResultadoMontoCredito" class="control-label">$3.178.710</label>
						</div>
					</div><!-- /form-group -->

					<hr>

					<div class="form-group">
						<label class="col-md-3 control-label">Tasa de interés mensual</label>
						<div class="col-md-5">
							<label id="ResultadoInteres" class="control-label">1,82% (21.84% anual)</label>
						</div>
					</div><!-- /form-group -->

					<div class="form-group">
						<label class="col-md-3 control-label">Fecha Primer Pago</label>
						<div class="col-md-5">
							<label id="ResultadoFechaPago" class="control-label">20/11/2017</label>
						</div>
					</div><!-- /form-group -->

					<div class="form-group">
						<label class="col-md-3 control-label">Meses de no Pago</label>
						<div class="col-md-5">
							<label id="ResultadoMesesNoPago" class="control-label">-</label>
						</div>
					</div><!-- /form-group -->

					<div class="form-group">
						<label class="col-md-3 control-label">Carga Anual Equivalente</label>
						<div class="col-md-5">
							<label id="ResultadoCAE" class="control-label">28,34%</label>
						</div>
					</div><!-- /form-group -->

				    <hr>

				    <div class="form-group">
						<label class="col-md-3 control-label">Costo Total del Crédito</label>
						<div class="col-md-5">
							<label id="ResultadoTotal" class="control-label">$</label>
						</div>
					</div><!-- /form-group -->
				</div>

				  <div class="wizard-actions">
					<div class="form-group">
					  <div class="col-md-5 col-md-offset-3">
						<button type="button" class="btn btn-default wizard-prev"><i class="fa fa-arrow-circle-o-left"></i> Back</button>
						<button id="boton" type="button" class="btn btn-primary wizard-next" disabled="" onclick="calcular()">Continuar <i class="fa fa-arrow-circle-o-right"></i></button>
					  </div><!-- /.cols -->
					</div><!-- /form-group -->
				  </div><!-- /.wizard-actions -->

				</div><!-- /.tab-content -->
			  </form><!-- /form -->
			</div><!-- /.panel-body -->
		  </div><!-- /.panel -->

		</div><!-- /.content-body -->



		<!-- Template Setups -->
		<div class="modal fade" id="templateSetup">
		  <div class="modal-dialog">
			<!-- modal-content -->
			<div class="modal-content"></div>
		  </div><!-- /.modal-dialog -->
		</div><!-- /.templateSetup -->

	  </div><!-- /.content -->
	</section><!-- /MAIN -->



