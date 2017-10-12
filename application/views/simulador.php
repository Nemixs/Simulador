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
          <a data-toggle="modal" href="#" data-scripts="<?php base_url()?>_includes/setups.js" data-target="#templateSetup" title="Template Setups" aria-label="template setups" class="btn btn-nofill btn-sm btn-default" href="#"><span class="icon-settings fa-lg text-muted"></span></a>
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
                      <div class="input-group input-group-in">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input data-input="daterangepicker" data-single-date-picker="true" data-show-dropdowns="true" class="form-control">
                      </div><!-- /input-group-in -->
                    </div><!--/form-group-->

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="address">Address <span class="text-danger">*</span></label>
                      <div class="col-md-5">
                        <input class="form-control" id="address" name="address">
                      </div>
                    </div><!-- /form-group -->

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="country">Country <span class="text-danger">*</span></label>
                      <div class="col-md-5">
                        <input type="hidden" name="country" id="country" style="width:100%">
                      </div>
                    </div><!-- /form-group -->

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="briefNotes">Brief Notes</label>
                      <div class="col-md-5">
                        <textarea class="autogrow form-control" name="briefNotes" id="briefNotes" rows="3"></textarea>
                      </div>
                    </div><!-- /form-group -->
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane fade" id="wizard3">
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



          <!-- DATE RANGE PICKER -->
              <div class="panel" data-fill-color="true">
                <div class="panel-heading">
                  <h3 class="panel-title"><i class="icon-calendar fa-fw"></i> Date Range Picker</h3>
                </div><!-- /panel-heading -->

                <div class="panel-body">
                  <form role="form">
                    <div class="form-group">
                      <label class="control-label">Single Date Picker</label>
                      <div class="input-group input-group-in">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input data-input="daterangepicker" data-single-date-picker="true" data-show-dropdowns="true" class="form-control">
                      </div><!-- /input-group-in -->
                    </div><!--/form-group-->

                    <div class="form-group">
                      <label class="control-label">Single Date with Time Picker</label>
                      <div class="input-group input-group-in">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                        <input data-input="daterangepicker" data-time-picker="true" data-single-date-picker="true" class="form-control">
                      </div><!-- /input-group-in -->
                    </div><!--/form-group-->

                    <div class="form-group">
                      <label class="control-label">Basic Date Range Picker</label>
                      <div class="input-group input-group-in">
                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                        <input data-input="daterangepicker" data-opens="left" class="form-control">
                      </div><!-- /input-group-in -->
                    </div><!--/form-group-->

                    <div class="form-group">
                      <label class="control-label">Date & Time Picker</label>
                      <div class="input-group input-group-in">
                        <input data-input="daterangepicker" data-opens="left" data-time-picker="true" class="form-control">
                        <span class="input-group-addon"><i class="icon-clock"></i></span>
                      </div><!-- /input-group-in -->
                    </div><!--/form-group-->

                    <div class="form-group">
                      <label class="control-label">Pre-defined Ranges & Callback</label>
                      <button id="reportrange" data-drops="up" class="btn btn-block btn-default btn-lg">
                        <i class="icon-rocket fa-fw"></i> <span>Please select Date Range</span>
                      </button>
                    </div><!--/form-group-->

                  </form><!--/form-->
                </div><!-- /panel-body -->
              </div><!-- /panel-daterangepicker -->
            </div><!-- /.cols -->
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



