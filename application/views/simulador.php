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
                  <span class="desc">Datos del Crédito</span>
                </a>
              </li>
              <li>
                <a href="#wizard3" data-toggle="tab">
                  <span class="number">3</span>
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
              <form action="#" role="form" class="form-horizontal">
                <div class="tab-content">
                  <div class="tab-pane fade in" id="wizard1">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="Rut">Rut <span class="text-danger">*</span></label>
                      <div class="col-md-5">
                        <div class="input-group input-group-in">
                          <input class="form-control" id="rut" name="rut">
                          <span class="input-group-addon"><i class="icon-user text-muted"></i></span>
                        </div>
                      </div>
                    </div><!-- /form-group -->
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane fade" id="wizard2">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="Monto">Ingresa Monto <span class="text-danger">*</span></label>
                      <div class="col-md-5">
                        <input class="form-control" id="monto" name="monto" type="number">
                      </div>
                    </div><!-- /form-group -->

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="Cuotas">Ingresa número de Cuotas <span class="text-danger">*</span></label>
                      <div class="col-md-5">
                        <input class="form-control" id="cuotas" name="cuotas" type="number">
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
                          <select class="form-control" id="inputSelect">
                            <option>Seleccione un Mes</option>
                            <option>Enero</option>
                            <option>Febrero</option>
                            <option>Marzo</option>
                            <option>Abril</option>
                            <option>Mayo</option>
                            <option>Junio</option>
                            <option>Julio</option>
                            <option>Agosto</option>
                            <option>Septiembre</option>
                            <option>Octubre</option>
                            <option>Noviembre</option>
                            <option>Diciembre</option>
                          </select>
                        </div>
                      </div><!-- /form-group -->

                      <div class="form-group">
                        <label class="col-md-3 control-label" for="address">Segundo Mes <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                          <select class="form-control" id="inputSelect">
                            <option>Seleccione un Mes</option>
                            <option>Enero</option>
                            <option>Febrero</option>
                            <option>Marzo</option>
                            <option>Abril</option>
                            <option>Mayo</option>
                            <option>Junio</option>
                            <option>Julio</option>
                            <option>Agosto</option>
                            <option>Septiembre</option>
                            <option>Octubre</option>
                            <option>Noviembre</option>
                            <option>Diciembre</option>
                          </select>
                        </div>
                    </div>
                    
                    </div><!-- /form-group -->

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane fade" id="wizard3">
                    <div>
                      <div>
                        <span class="glyphicon glyphicon-check fa-3x" aria-hidden="true"></span>  
                      </div>
                    </div>
                    <h3 class="lead">Provide your payment details</h3>
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="cardName">Name on card <span class="text-danger">*</span></label>
                      <div class="col-md-5">
                        <input class="form-control" id="cardName" name="cardName">
                      </div>
                    </div><!-- /form-group -->

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="cardNumber">Card Number <span class="text-danger">*</span></label>
                      <div class="col-md-5">
                        <div class="row">
                          <div class="col-md-8">
                            <input class="form-control" id="cardNumber" name="cardNumber">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control" id="cvc" name="cvc" placeholder="CVV2">
                          </div>
                        </div>
                      </div>
                    </div><!-- /form-group -->

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="cardExpired">Card Expired <span class="text-danger">*</span></label>
                      <div class="col-md-5">
                        <input class="form-control" id="cardExpired" name="cardExpired" type="date">
                      </div>
                    </div><!-- /form-group -->

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="cardExpired">Auto-pay</label>
                      <div class="col-md-5">
                        <div class="nice-checkbox">
                          <input type="checkbox" name="autoPay" id="autoPay1" value="1">
                          <label for="autoPay1">Yes, with this Credit Card</label>
                        </div>
                        <div class="nice-checkbox">
                          <input type="checkbox" name="autoPay" id="autoPay0" value="0">
                          <label for="autoPay0">Send me an email about Payment</label>
                        </div>
                      </div>
                    </div><!-- /form-group -->
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane fade" id="wizard4">
                    <h3 class="lead">Make sure you entered the correct data!</h3>
                    <h4 class="page-header lead">Account</h4>
                    <h4 class="page-header lead">Profile</h4>
                    <h4 class="page-header lead">Billing</h4>
                  </div><!-- /.tab-pane -->

                  <div class="wizard-actions">
                    <div class="form-group">
                      <div class="col-md-5 col-md-offset-3">
                        <button type="button" class="btn btn-default wizard-prev"><i class="fa fa-arrow-circle-o-left"></i> Back</button>
                        <button type="button" class="btn btn-primary wizard-next">Continue <i class="fa fa-arrow-circle-o-right"></i></button>
                        <button type="submit" class="btn btn-primary finish">Submit</button>
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



