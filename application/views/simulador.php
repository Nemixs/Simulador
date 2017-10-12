<body>
  <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <main class="wrapkit-wrapper" id="wrapper">

    <!-- ============================================
    HEADER SECTION
    =============================================== -->
    <!-- navigation -->
    <nav class="header navbar">
      <div class="container-fluid">
        <!-- use .pull-*, couse we need this float on any screen size -->
        <div class="pull-left">
          <a class="navbar-brand" href="index-2.html" role="logo" aria-label="Logo">
            <img class="logo" src="<?php echo base_url() ?>/assets/images/logo/brand-text-dark.png" alt="Brand">
          </a>
          <button data-sidebar="toggleVisible" class="btn btn-icon navbar-btn">
            <i class="fa fa-bars"></i>
            <i class="fa fa-caret-down"></i>
          </button>
        </div>

        <!-- use .pull-*, couse we need this float on any screen size -->
        <div class="pull-right" role="navigation">
          <a aria-label="Search" id="brandSearchNav" class="btn btn-icon navbar-btn" href="#"><i class="fa fa-search"></i></a>

          <div class="dropdown-ext">
            <a aria-label="notifications" class="btn btn-icon navbar-btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-inbox"></i>
              <span class="dotted dotted-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-ext dropdown-menu-right" role="menu">
              <div class="dd-head">
                <div class="dd-head-actions">
                  <a href="#" class="btn btn-xs btn-default">Compose</a>
                </div>
                <p><a href="#">Inbox (2)</a></p>
              </div>
              <div class="dd-body">
                <ul class="media-list">
                  <li class="media unread">
                    <a href="#">
                      <div class="media-left">
                        <img class="media-object img-circle" width="32" src="<?php echo base_url() ?>/assets/images/dummy/unknown-profile.jpg" alt="user">
                      </div>
                      <div class="media-body">
                        <p class="pull-right"><small>6m</small></p>
                        <h4 class="media-heading body-text">Stilearning</h4>
                        <p>Newest Themes & Templates - Et est, sed mattis, donec hac</p>
                      </div>
                    </a>
                    <span class="dd-actions">
                      <a href="#" title="mark as read" data-toggle="tooltip" data-container="body" data-placement="bottom"><i class="fa fa-circle-o"></i></a>
                    </span>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <img class="media-object img-circle" width="32" src="<?php echo base_url() ?>/assets/images/dummy/uifaces7.jpg" alt="user">
                      </div>
                      <div class="media-body">
                        <p class="pull-right"><small>Today, 03:11am</small></p>
                        <h4 class="media-heading body-text">Eugene Barnett</h4>
                        <p>Service Update: added support for Angular - Sed ultricies nibh, in feugiat</p>
                      </div>
                    </a>
                    <span class="dd-actions">
                      <a href="#" title="mark as unread" data-toggle="tooltip" data-container="body" data-placement="bottom"><i class="fa fa-circle"></i></a>
                    </span>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <img class="media-object img-circle" width="32" src="<?php echo base_url() ?>/assets/images/dummy/uifaces4.jpg" alt="user">
                      </div>
                      <div class="media-body">
                        <p class="pull-right"><small>Today, 02:47am</small></p>
                        <h4 class="media-heading body-text">bent10@stilearning.com</h4>
                        <p>Spread the Word & Earn! - Dapibus nec. Integer sed purus</p>
                      </div>
                    </a>
                    <span class="dd-actions">
                      <a href="#" title="mark as unread" data-toggle="tooltip" data-container="body" data-placement="bottom"><i class="fa fa-circle"></i></a>
                    </span>
                  </li>
                  <li class="media unread">
                    <a href="#">
                      <div class="media-left">
                        <img class="media-object img-circle" width="32" src="<?php echo base_url() ?>/assets/images/dummy/uifaces3.jpg" alt="user">
                      </div>
                      <div class="media-body">
                        <p class="pull-right"><small>Yesterday, 11:41pm</small></p>
                        <h4 class="media-heading body-text">David Lloyd</h4>
                        <p>Say thanks for your awesome works! - Viverra fermentum ac. Litora mauris elit</p>
                      </div>
                    </a>
                    <span class="dd-actions">
                      <a href="#" title="mark as read" data-toggle="tooltip" data-container="body" data-placement="bottom"><i class="fa fa-circle"></i></a>
                    </span>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <img class="media-object img-circle" width="32" src="<?php echo base_url() ?>/assets/images/dummy/unknown-profile.jpg" alt="user">
                      </div>
                      <div class="media-body">
                        <p class="pull-right"><small>Yesterday, 10:04pm</small></p>
                        <h4 class="media-heading body-text">Dribbble</h4>
                        <p>Design brief from Apple - Quis in nonummy. Ut augue, proident habitant</p>
                      </div>
                    </a>
                    <span class="dd-actions">
                      <a href="#" title="mark as unread" data-toggle="tooltip" data-container="body" data-placement="bottom"><i class="fa fa-circle-o"></i></a>
                    </span>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <img class="media-object img-circle" width="32" src="<?php echo base_url() ?>/assets/images/dummy/uifaces16.jpg" alt="user">
                      </div>
                      <div class="media-body">
                        <p class="pull-right"><small>Yesterday, 08:55pm</small></p>
                        <h4 class="media-heading body-text">Olivia Gonzales</h4>
                        <p>Updating some of the designs! - Commodo non ac, sem netus adipiscing</p>
                      </div>
                    </a>
                    <span class="dd-actions">
                      <a href="#" title="mark as unread" data-toggle="tooltip" data-container="body" data-placement="bottom"><i class="fa fa-circle"></i></a>
                    </span>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <img class="media-object img-circle" width="32" src="<?php echo base_url() ?>/assets/images/dummy/uifaces20.jpg" alt="user">
                      </div>
                      <div class="media-body">
                        <p class="pull-right"><small>Yesterday, 03:57pm</small></p>
                        <h4 class="media-heading body-text">Marco Auer</h4>
                        <p>Request custom designs! - Adipiscing pellentesque cum, proin luctus</p>
                      </div>
                    </a>
                    <span class="dd-actions">
                      <a href="#" title="mark as unread" data-toggle="tooltip" data-container="body" data-placement="bottom"><i class="fa fa-circle"></i></a>
                    </span>
                  </li>
                </ul>
              </div><!-- /.dd-body -->
            </div><!-- /.dropdown-menu -->
          </div><!-- /.dropdown -->

          <div class="dropdown">
            <a aria-label="More" class="btn btn-icon navbar-btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-ellipsis-v"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-profile.html"><span class="pull-right"><i class="fa fa-user text-muted"></i></span>Profile</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-timeline.html"><span class="pull-right"><i class="fa fa-clock-o text-muted"></i></span>Timeline</a></li>
              <li class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-help.html"><span class="pull-right"><i class="fa fa-question-circle text-muted"></i></span>Help</a></li>
              <li class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-locked.html"><span class="pull-right"><i class="fa fa-lock text-muted"></i></span>Locked</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-signin.html"><span class="pull-right"><i class="fa fa-sign-out text-muted"></i></span> Sign out</a></li>
            </ul>
          </div><!-- /.dropdown -->
        </div><!-- /navigation -->

        <div class="brand-search" id="brandSearchFrm">
          <form action="#" role="search">
            <a href="#" class="search-close">&times;</a>
            <input class="search-field" placeholder="Search for everything you want..." tabindex="-1">
          </form>
        </div><!-- /.brand-search -->
      </div><!-- /.container-fluid -->
    </nav><!-- /navigation -->



    <!-- ============================================
    SIDEBAR SECTION
    =============================================== -->
    <aside class="sidebar" role="complementary">

      <!-- profile -->
      <div class="sidebar-block">
        <div class="media">
          <div class="media-left">
            <a href="page-profile.html">
              <span class="status dotted dotted-primary" data-toggle="tooltip" data-container="body" title="available"></span>
              <img class="media-object img-circle" src="<?php echo base_url() ?>/assets/images/dummy/uifaces14.jpg" alt="photo profile">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">Emma Greene</h4>
            <p class="text-muted">
              <small>Graphic Designer</small>
            </p>
          </div>
        </div>
      </div><!-- /.sidebar-block -->
      <!-- /profile -->

      <!-- /navigation -->
      <div class="nav-wrapper">
        <ul class="nav nav-stacked" role="navigation">
          <li class="nav-item open active" role="presentation">
            <a href="#" data-toggle="nav-child">
              <span class="nav-icon"><i class="fa fa-dashcube"></i></span>
              <span class="nav-text">Dashboard</span>
            </a>
            <ul class="nav nav-child level-1 nav-stacked nav-pills" role="menu">
              <li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="index-2.html"><span class="nav-text">Dashboard 1</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="index-3.html"><span class="nav-text">Dashboard 2</span></a></li>
            </ul>
          </li>

          <li class="divider"></li>
          <li class="nav-header" role="presentation">GET STARTED</li>
          <li class="nav-item" role="presentation">
            <a href="layout.html">
              <span class="nav-icon"><i class="fa fa-object-group"></i></span>
              <span class="nav-text">Layout</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="ecosystem.html">
              <span class="nav-icon"><i class="fa fa-cubes"></i></span>
              <span class="nav-text">Ecosystem</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="panels.html">
              <span class="nav-icon"><i class="fa fa-puzzle-piece"></i></span>
              <span class="nav-text">Panels</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#" data-toggle="nav-child">
              <span class="nav-icon"><i class="fa fa-align-left"></i></span>
              <span class="nav-text">Level Menu</span>
            </a>
            <ul class="nav nav-child level-1 nav-stacked nav-pills" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="nav-text">Lorem ipsum</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="nav-text">Dolor sit</span></a></li>
              <li role="presentation">
                <a role="menuitem" tabindex="-1" data-toggle="nav-child" href="#"><span class="nav-text">Node</span></a>
                <ul class="nav nav-child level-2 nav-stacked nav-pills" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="nav-text">Consectetur</span></a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="nav-text">Assumenda</span></a></li>
                </ul>
              </li> <!-- /node -->
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="nav-text">Amet</span></a></li>
            </ul>
          </li>

          <li class="divider"></li>
          <li class="nav-header" role="presentation">USER INTERFACES</li>
          <li class="nav-item" role="presentation">
            <a href="#" data-toggle="nav-child">
              <span class="nav-icon"><i class="fa fa-briefcase"></i></span>
              <span class="nav-text">Components</span>
            </a>
            <ul class="nav nav-child level-1 nav-stacked nav-pills" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-grid.html"><span class="nav-text">Grids</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-type.html"><span class="nav-text">Type</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-button.html"><span class="nav-text">Buttons</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-icons.html"><span class="nav-text">Icons</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-modal.html"><span class="nav-text">Modal</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-tooltip-popover.html"><span class="nav-text">Tooltips & Popovers</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-alert-callout.html"><span class="nav-text">Alerts & Callout</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-progressbar.html"><span class="nav-text">Progress bar</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-label-badge.html"><span class="nav-text">Label & Badge</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-navbar.html"><span class="nav-text">Navbar</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-nav.html"><span class="nav-text">Nav</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="component-tabs-collapse.html"><span class="nav-text">Tabs & Collapse</span></a></li>
            </ul>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#" data-toggle="nav-child">
              <span class="nav-icon"><i class="fa fa-check-square"></i></span>
              <span class="nav-text">Forms</span>
            </a>
            <ul class="nav nav-child level-1 nav-stacked nav-pills" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="frm-basic.html"><span class="nav-text">Basic Elements</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="frm-advance.html"><span class="nav-text">Advance Elements</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="frm-uploader.html"><span class="nav-text">Uploader</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="frm-xeditable.html"><span class="nav-text">x-Editable</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="frm-wizard.html"><span class="nav-text">Wizard</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="frm-editor.html"><span class="nav-text">Editor</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="frm-imagecropping.html"><span class="nav-text">Image Cropping</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="frm-validator.html"><span class="nav-text">Validator</span></a></li>
            </ul>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#" data-toggle="nav-child">
              <span class="nav-icon"><i class="fa fa-line-chart"></i></span>
              <span class="nav-text">Charts</span>
            </a>
            <ul class="nav nav-child level-1 nav-stacked nav-pills" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="chart-js.html"><span class="nav-text">ChartJs</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="chart-morris.html"><span class="nav-text">Morris</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="chart-inline.html"><span class="nav-text">Inline Charts</span></a></li>
            </ul>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#" data-toggle="nav-child">
              <span class="nav-icon"><i class="fa fa-database"></i></span>
              <span class="nav-text">Tables</span>
            </a>
            <ul class="nav nav-child level-1 nav-stacked nav-pills" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="table-basic.html"><span class="nav-text">Basic Table</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="table-datatables.html"><span class="nav-text">DataTables</span></a></li>
            </ul>
          </li>

          <li class="divider"></li>
          <li class="nav-header" role="presentation">DEVELOPMENT</li>
          <li class="nav-item" role="presentation">
            <a href="ui-kits.html">
              <span class="nav-icon"><i class="fa fa-cube"></i></span>
              <span class="nav-text">Widgets</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#" data-toggle="nav-child">
              <span class="nav-icon"><i class="fa fa-plug"></i></span>
              <span class="nav-text">Plugins</span>
            </a>
            <ul class="nav nav-child level-1 nav-stacked nav-pills" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="plugin-animate.html"><span class="nav-text">Animated</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="plugin-bootbox.html"><span class="nav-text">Bootbox</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="plugin-calendar.html"><span class="nav-text">Calendar</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="plugin-maps.html"><span class="nav-text">Maps</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="plugin-nestable.html"><span class="nav-text">Nestable List</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="plugin-session-timeout.html"><span class="nav-text">Session Timeout</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="plugin-toastr.html"><span class="nav-text">Toastr</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="plugin-treeview.html"><span class="nav-text">Tree View</span></a></li>
            </ul>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#" data-toggle="nav-child">
              <span class="nav-icon"><i class="fa fa-file-text-o"></i></span>
              <span class="nav-text">Pages</span>
            </a>
            <ul class="nav nav-child level-1 nav-stacked nav-pills" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-signin.html"><span class="nav-text">Signin</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-locked.html"><span class="nav-text">Lock Screen</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-error.html"><span class="nav-text">Error Page</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-profile.html"><span class="nav-text">Profile</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-inbox.html"><span class="nav-text">Inbox</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-timeline.html"><span class="nav-text">Timeline</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-gallery.html"><span class="nav-text">Gallery</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-pricing.html"><span class="nav-text">Pricing</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-invoice.html"><span class="nav-text">Invoice</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-search.html"><span class="nav-text">Search Result</span></a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="page-help.html"><span class="nav-text">Help</span></a></li>
            </ul>
          </li>
          <li class="collapse-item" role="presentation">
            <a href="#" data-sidebar="toggleCollapse">
              <i class="fa fa-angle-double-left"></i>
            </a>
          </li>
        </ul>
      </div>
    </aside><!-- /.SIDEBAR -->



    <!-- ============================================
    MAIN CONTENT SECTION
    =============================================== -->
    <section class="content-wrapper" role="main">
      <div class="content">
        <div class="content-bar">
          <div class="pull-right" role="group">
            <a data-toggle="modal" href="#" data-scripts="<?php echo base_url() ?>/assets/_includes/setups.js" data-target="#templateSetup" title="Template Setups" aria-label="template setups" class="btn btn-nofill btn-sm btn-default" href="#"><span class="icon-settings fa-lg text-muted"></span></a>
          </div>
          <ul class="breadcrumb breadcrumb-angle">
            <li><a href="#" aria-label="home"><i class="fa fa-home"></i></a></li>
            <li class="active">Dashboard</li>
          </ul>
        </div><!-- /.content-bar -->


        <div class="content-body">
          <!-- RESUME BLOCK -->
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="panel">
                <div class="panel-body" style="overflow-x:hidden">
                  <p class="pull-right">
                    <a href="#" class="text-muted no-decor" data-toggle="tooltip" data-container="body" title="View details" aria-label="View details"><i class="icon-arrow-right-circle fa-lg"></i></a>
                  </p>
                  <p><strong class="fa-lg">2,685</strong> <br><small class="text-muted">Posts</small></p>
                  <div>
                    <span id="spark-posts"></span>
                  </div>
                </div><!-- /.panel-body -->
                <div class="progress progress-xs no-margin" data-toggle="tooltip" data-container="body" title="173/200 of max post today">
                  <div class="progress-bar bg-violet" style="width:62%"></div>
                </div>
              </div><!-- /.panel -->
            </div><!-- /.cols -->

            <div class="col-lg-3 col-md-6">
              <div class="panel">
                <div class="panel-body" style="overflow-x:hidden">
                  <p class="pull-right">
                    <a href="#" class="text-muted no-decor" data-toggle="tooltip" data-container="body" title="View details" aria-label="View details"><i class="icon-arrow-right-circle fa-lg"></i></a>
                  </p>
                  <p><strong class="fa-lg">967K</strong> <br><small class="text-muted">Projects</small></p>
                  <div>
                    <span id="spark-projects"></span>
                  </div>
                </div><!-- /.panel-body -->
                <div class="progress progress-xs no-margin" data-toggle="tooltip" data-container="body" title="146/200 of max project today">
                  <div class="progress-bar bg-blue" style="width:42%"></div>
                </div>
              </div><!-- /.panel -->
            </div><!-- /.cols -->

            <div class="col-lg-3 col-md-6">
              <div class="panel">
                <div class="panel-body" style="overflow-x:hidden">
                  <p class="pull-right">
                    <a href="#" class="text-muted no-decor" data-toggle="tooltip" data-container="body" title="View details" aria-label="View details"><i class="icon-arrow-right-circle fa-lg"></i></a>
                  </p>
                  <p><strong class="fa-lg">825 GB</strong> <br><small class="text-muted">Usage storage</small></p>
                  <div>
                    <span id="spark-storage"></span>
                  </div>
                </div><!-- /.panel-body -->
                <div class="progress progress-xs no-margin" data-toggle="tooltip" data-container="body" title="82% of 1000 TB">
                  <div class="progress-bar bg-cyan" style="width:82%"></div>
                </div>
              </div><!-- /.panel -->
            </div><!-- /.cols -->

            <div class="col-lg-3 col-md-6">
              <div class="panel">
                <div class="panel-body" style="overflow-x:hidden">
                  <p class="pull-right">
                    <a href="#" class="text-muted no-decor" data-toggle="tooltip" data-container="body" title="View details" aria-label="View details"><i class="icon-arrow-right-circle fa-lg"></i></a>
                  </p>
                  <p><strong class="fa-lg">754K</strong> <br><small class="text-muted">Users Download</small></p>
                  <div>
                    <span id="spark-download"></span>
                  </div>
                </div><!-- /.panel-body -->
                <div class="progress progress-xs no-margin" data-toggle="tooltip" data-container="body" title="722/1000 of max download today">
                  <div class="progress-bar bg-teal" style="width:72%"></div>
                </div>
              </div><!-- /.panel -->
            </div><!-- /.cols -->
          </div><!-- /.row -->
          <!-- /RESUME BLOCK -->


          <!-- AUDIENCE OVERVIEW -->
          <div class="panel" data-fill-color="true">
            <div class="panel-heading">
              <div class="panel-control pull-right">
                <a href="#" class="btn btn-default">Day</a>
                <a href="#" class="btn btn-default">Week</a>
                <a href="#" class="btn btn-default">Month</a>
              </div>
              <h3 class="panel-title">Audience overview</h3>
            </div>
            <div class="panel-body">
              <div class="row mb-2x">
                <div class="col-md-8 col-md-push-4">
                  <div id="graph-audience" class="morris-chart mb-4x" style="height:220px"></div>
                </div><!-- /.cols -->

                <div class="col-md-4 col-md-pull-8">
                  <div class="help-block">
                    <span class="pull-right">9,214 visitors</span>
                    <span>Chrome</span>
                  </div>
                  <div class="progress progress-sm">
                    <div class="progress-bar progress-bar-primary" style="width:85%"></div>
                  </div>

                  <div class="help-block">
                    <span class="pull-right">6,541 visitors</span>
                    <span>Firefox</span>
                  </div>
                  <div class="progress progress-sm">
                    <div class="progress-bar progress-bar-primary" style="width:52%"></div>
                  </div>

                  <div class="help-block">
                    <span class="pull-right">7,951 visitors</span>
                    <span>Internet Explorer</span>
                  </div>
                  <div class="progress progress-sm">
                    <div class="progress-bar progress-bar-primary" style="width:64%"></div>
                  </div>

                  <div class="help-block">
                    <span class="pull-right">4,628 visitors</span>
                    <span>Safari</span>
                  </div>
                  <div class="progress progress-sm">
                    <div class="progress-bar progress-bar-primary" style="width:42%"></div>
                  </div>
                </div><!-- /.cols -->
              </div><!-- /.row -->

              <div class="row">
                <div class="col-md-2 col-xs-4 mb-4x bordered-right">
                  <div class="media">
                    <div class="media-left media-middle hidden-xxs">
                      <div class="media-object">
                        <i class="icon-screen-desktop text-muted fa-2x"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <p>Desktop</p>
                      <h3 class="media-heading">2,685</h3>
                      <p class="text-overflow"><small>+ 8% <i class="fa fa-arrow-up text-teal ml-1x"></i></small></p>
                    </div>
                  </div><!-- /.media -->
                </div><!-- /.cols -->
                <div class="col-md-2 col-xs-4 mb-4x bordered-right">
                  <div class="media">
                    <div class="media-left media-middle hidden-xxs">
                      <div class="media-object">
                        <i class="icon-screen-tablet text-muted fa-2x"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <p>Tablet</p>
                      <h3 class="media-heading">3,753</h3>
                      <p class="text-overflow"><small>+ 11% <i class="fa fa-arrow-up text-teal ml-1x"></i></small></p>
                    </div>
                  </div><!-- /.media -->
                </div><!-- /.cols -->
                <div class="col-md-2 col-xs-4 mb-4x">
                  <div class="media">
                    <div class="media-left media-middle hidden-xxs">
                      <div class="media-object">
                        <i class="icon-screen-smartphone text-muted fa-2x"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <p>Mobile</p>
                      <h3 class="media-heading">6,284</h3>
                      <p class="text-overflow"><small>- 2% <i class="fa fa-arrow-down text-red ml-1x"></i></small></p>
                    </div>
                  </div><!-- /.media -->
                </div><!-- /.cols -->
                <div class="col-md-6 col-sm-12">
                  <div class="row">
                    <div class="col-xs-6">
                      <div>
                        <span class="pull-right"><small><i class="fa fa-arrow-up text-teal fa-fw"></i> 3%</small></span>
                        <span class="text-overflow"><span class="hidden-xxs">Total</span> Pageviews</span>
                      </div>
                      <p class="fa-2x">34,681</p>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width:68%"></div>
                      </div>
                    </div><!-- /.cols -->
                    <div class="col-xs-6">
                      <div>
                        <span class="pull-right"><small><i class="fa fa-arrow-up text-teal fa-fw"></i> 0.2%</small></span>
                        <span class="text-overflow">Total Signup</span>
                      </div>
                      <p class="fa-2x">7,921</p>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-warning" style="width:82%"></div>
                      </div>
                    </div><!-- /.cols -->
                  </div><!-- /.row -->
                </div><!-- /.cols -->
              </div><!-- /.row -->
            </div><!-- /.panel-body -->
          </div><!-- /.panel -->
          <!-- /AUDIENCE OVERVIEW -->



          <div class="row">
            <!-- LATEST SIGNUP -->
            <div class="col-md-6">
              <div class="panel" data-fill-color="true">
                <div class="panel-body">
                  <p class="title">Latest Signup</p>
                  <div class="text-right text-muted">
                    <small class="text-cyan mr-2x"><span class="i fa fa-male fa-fw"></span> 2,145</small>
                    <small class="text-violet"><span class="i fa fa-female fa-fw"></span> 1,746</small>
                  </div>
                  <div id="graph-latest-signup" class="morris-chart row" style="height:150px"></div>

                  <div class="last-signup">
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Artie Citron">
                      <img alt="avatar" src="images/dummy/uifaces1.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Tyler Cantabrana">
                      <img alt="avatar" src="images/dummy/uifaces22.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Aletha Dehart">
                      <img alt="avatar" src="images/dummy/uifaces21.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Viva Bencivenga">
                      <img alt="avatar" src="images/dummy/uifaces8.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Lue Flem">
                      <img alt="avatar" src="images/dummy/uifaces17.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Synthia Sarconi">
                      <img alt="avatar" src="images/dummy/uifaces19.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Edward Bandura">
                      <img alt="avatar" src="images/dummy/uifaces6.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Mammie Bisping">
                      <img alt="avatar" src="images/dummy/uifaces18.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Margaretta Buress">
                      <img alt="avatar" src="images/dummy/uifaces9.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Queenie Lind">
                      <img alt="avatar" src="images/dummy/uifaces13.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Wanita Buer">
                      <img alt="avatar" src="images/dummy/uifaces5.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Dirk Jenquin">
                      <img alt="avatar" src="images/dummy/uifaces11.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Jenni Cratty">
                      <img alt="avatar" src="images/dummy/uifaces20.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Jenni Cratty">
                      <img alt="avatar" src="images/dummy/uifaces5.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="India Standiford">
                      <img alt="avatar" src="images/dummy/uifaces16.jpg">
                    </a>
                    <a href="#" class="kit-avatar kit-avatar-32 align-middle no-border mb-1x" rel="tooltip" data-container="body" title="Shanice Segobia">
                      <img alt="avatar" src="images/dummy/uifaces21.jpg">
                    </a>
                    <a href="#" class="btn btn-sm btn-default btn-circle mb-1x" rel="tooltip" data-container="body" title="See all"><i class="icon-options text-muted"></i></a>
                  </div><!-- /.last-signup -->
                </div><!-- /.panel-body -->
                <div class="panel-footer">
                  <div class="input-group input-group-in no-border">
                    <span class="input-group-addon"><i class="icon-user-follow text-muted"></i></span>
                    <input class="form-control" placeholder="Invite people">
                  </div>
                </div><!-- /.panel-footer -->
              </div><!-- /.panel -->
            </div><!-- /.cols -->

            <!-- SOCIAL ACTIVITY -->
            <div class="col-md-6">
              <div class="panel" data-fill-color="true">
                <div class="panel-body">
                  <p class="title">Social Activity</p>
                  <div class="media">
                    <div class="media-left">
                      <div class="media-object mr-1x">
                        <div class="easyPieChart" data-percent="72" data-size="52" data-line-width="3" data-line-cap="square" data-scale-color="false" data-track-color="#F5F7FA" data-bar-color="#ED5565">
                          <span class="percentage text-red"><i class="fa fa-google-plus fa-lg"></i></span>
                        </div><!-- /.easyPieChart -->
                      </div>
                    </div>
                    <div class="media-body">
                      <h3 class="media-heading">864,591 <small></small></h3>
                      <p class="text-muted">+267 circle last week</p>
                    </div>
                  </div><!-- /.media -->

                  <div class="media">
                    <div class="media-left">
                      <div class="media-object mr-1x">
                        <div class="easyPieChart" data-percent="82" data-size="52" data-line-width="3" data-line-cap="square" data-scale-color="false" data-track-color="#F5F7FA" data-bar-color="#4FC1E9">
                          <span class="percentage text-cyan"><i class="fa fa-twitter fa-lg"></i></span>
                        </div><!-- /.easyPieChart -->
                      </div>
                    </div>
                    <div class="media-body">
                      <h3 class="media-heading">638,546</h3>
                      <p class="text-muted">+267 followers last week</p>
                    </div>
                  </div><!-- /.media -->

                  <div class="media">
                    <div class="media-left">
                      <div class="media-object mr-1x">
                        <div class="easyPieChart" data-percent="64" data-size="52" data-line-width="3" data-line-cap="square" data-scale-color="false" data-track-color="#F5F7FA" data-bar-color="#5D9CEC">
                          <span class="percentage text-blue"><i class="fa fa-facebook fa-lg"></i></span>
                        </div><!-- /.easyPieChart -->
                      </div>
                    </div>
                    <div class="media-body">
                      <h3 class="media-heading">528,693</h3>
                      <p class="text-muted">+267 friends last week</p>
                    </div>
                  </div><!-- /.media -->

                  <div class="media">
                    <div class="media-left">
                      <div class="media-object mr-1x">
                        <div class="easyPieChart" data-percent="47" data-size="52" data-line-width="3" data-line-cap="square" data-scale-color="false" data-track-color="#F5F7FA" data-bar-color="#48CFAD">
                          <span class="percentage text-teal"><i class="fa fa-instagram fa-lg"></i></span>
                        </div><!-- /.easyPieChart -->
                      </div>
                    </div>
                    <div class="media-body">
                      <h3 class="media-heading">324,863</h3>
                      <p class="text-muted">+267 followers last week</p>
                    </div>
                  </div><!-- /.media -->

                </div><!-- /.panel-body -->
              </div><!-- /.panel -->
            </div><!-- /.cols -->

            <div class="clearfix"></div>

            <!-- INQUIRIES -->
            <div class="col-md-6">
              <div class="panel" data-fill-color="true">
                <div class="panel-body">
                  <p class="pull-right">
                    <a href="#" class="btn btn-danger btn-bordered btn-circle btn-xs">7</a>
                  </p>
                  <p class="title">Inquiries</p>
                  <div class="clearfix"></div>
                  <div data-toggle="slimScroll" style="height:390px" data-color="#CCD1D9" data-allow-page-scroll="true">
                    <a href="#" class="media">
                      <div class="media-left">
                        <i class="fa fa-envelope-o fa-2x text-muted"></i>
                      </div>
                      <div class="media-body">
                        <p class="media-heading"><strong>Stacie Skates</strong> Quaerat quibusdam beatae assumenda atque voluptatum dolores!</p>
                        <p class="text-muted"><small>Just Now</small></p>
                      </div>
                    </a><!-- /.media -->
                    <a href="#" class="media">
                      <div class="media-left">
                        <i class="icon-speech fa-2x text-muted"></i>
                      </div>
                      <div class="media-body">
                        <p class="media-heading"><strong>Charles Ewing</strong> Architecto, neque, suscipit? Quo quibusdam placeat beatae.</p>
                        <p class="text-muted"><small>About 4 minutes ago</small></p>
                      </div>
                    </a><!-- /.media -->
                    <a href="#" class="media">
                      <div class="media-left">
                        <i class="fa fa-envelope-o fa-2x text-muted"></i>
                      </div>
                      <div class="media-body">
                        <p class="media-heading"><strong>Alene Notter</strong> Consequatur dolorum maxime voluptatum laborum maiores omnis.</p>
                        <p class="text-muted"><small>26 minutes ago</small></p>
                      </div>
                    </a><!-- /.media -->
                    <a href="#" class="media">
                      <div class="media-left">
                        <i class="fa fa-envelope-o fa-2x text-muted"></i>
                      </div>
                      <div class="media-body">
                        <p class="media-heading"><strong>Mozell Firestone</strong> Fuga, minima temporibus porro. Ipsam, blanditiis expedita.</p>
                        <p class="text-muted"><small>1 hours ago</small></p>
                      </div>
                    </a><!-- /.media -->
                    <a href="#" class="media">
                      <div class="media-left">
                        <i class="icon-speech fa-2x text-muted"></i>
                      </div>
                      <div class="media-body">
                        <p class="media-heading"><strong>Apolonia Mcnevin</strong> Nobis numquam alias voluptatum. Repudiandae, dolores, qui.</p>
                        <p class="text-muted"><small>2 hours ago</small></p>
                      </div>
                    </a><!-- /.media -->
                    <a href="#" class="media">
                      <div class="media-left">
                        <i class="fa fa-envelope-o fa-2x text-muted"></i>
                      </div>
                      <div class="media-body">
                        <p class="media-heading"><strong>Cassondra Hittman</strong> Consequuntur cupiditate ex quas, quia doloremque, quisquam.</p>
                        <p class="text-muted"><small>2 hours ago</small></p>
                      </div>
                    </a><!-- /.media -->
                    <a href="#" class="media">
                      <div class="media-left">
                        <i class="icon-speech fa-2x text-muted"></i>
                      </div>
                      <div class="media-body">
                        <p class="media-heading"><strong>Princess Faerber</strong> Nam, ipsam explicabo, similique obcaecati facere atque.</p>
                        <p class="text-muted"><small>4 hours ago</small></p>
                      </div>
                    </a><!-- /.media -->
                  </div>
                </div><!-- /.panel-body -->
              </div><!-- /.panel -->
            </div><!-- /.cols -->

            <!-- SITE RESUME -->
            <div class="col-md-6">
              <div class="panel" panel-fill-color="true">
                <div class="panel-body">
                  <ul class="list-inline pull-right">
                    <li class="active"><a href="#top-pages" class="dotted dotted-lg" aria-controls="top-pages" role="tab" data-toggle="tab"></a></li>
                    <li><a href="#top-refs" class="dotted dotted-lg" aria-controls="top-refs" role="tab" data-toggle="tab"></a></li>
                  </ul>
                  <div class="tab-content">
                    <div id="top-pages" class="tab-pane active fade in">
                      <p class="title">Top Pages</p>
                      <hr class="mt-2x">
                      <ul class="media-list">
                        <li class="media">
                          <div class="media-left">1</div>
                          <div class="media-body">
                            <p class="pull-right">95,880</p>
                            <p class="media-heading">Landing Page</p>
                            <a href="#" class="help-block"><small>http://wrapkit.com</small></a>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-left">2</div>
                          <div class="media-body">
                            <p class="pull-right">69,189</p>
                            <p class="media-heading">Collections</p>
                            <a href="#" class="help-block"><small>http://wrapkit.com/collections</small></a>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-left">3</div>
                          <div class="media-body">
                            <p class="pull-right">48,238</p>
                            <p class="media-heading">Free Stuff</p>
                            <a href="#" class="help-block"><small>http://wrapkit.com/free-stuff</small></a>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-left">4</div>
                          <div class="media-body">
                            <p class="pull-right">29,616</p>
                            <p class="media-heading">About Us</p>
                            <a href="#" class="help-block"><small>http://wrapkit.com/about-us</small></a>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-left">5</div>
                          <div class="media-body">
                            <p class="pull-right">18,444</p>
                            <p class="media-heading">Our Works</p>
                            <a href="#" class="help-block"><small>http://wrapkit.com/our-works</small></a>
                          </div>
                        </li>
                      </ul>
                      <a href="#" class="btn btn-link btn-icon btn-block">View All <span class="fa fa-angle-double-down ml-1x"></span></a>
                    </div><!-- /.tab-pane -->

                    <div id="top-refs" class="tab-pane">
                      <p class="title">Top References</p>
                      <hr class="mt-2x">
                      <ul class="media-list">
                        <li class="media">
                          <div class="media-left">1</div>
                          <div class="media-body">
                            <p class="pull-right">367,923</p>
                            <p class="media-heading">Google</p>
                            <a href="#" class="help-block"><small>http://google.com</small></a>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-left">2</div>
                          <div class="media-body">
                            <p class="pull-right">163,394</p>
                            <p class="media-heading">Bing</p>
                            <a href="#" class="help-block"><small>http://bing.com</small></a>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-left">3</div>
                          <div class="media-body">
                            <p class="pull-right">82,399</p>
                            <p class="media-heading">Yahoo</p>
                            <a href="#" class="help-block"><small>http://yahoo.com</small></a>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-left">4</div>
                          <div class="media-body">
                            <p class="pull-right">44,960</p>
                            <p class="media-heading">Yandex</p>
                            <a href="#" class="help-block"><small>http://yandex.com</small></a>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-left">5</div>
                          <div class="media-body">
                            <p class="pull-right">19,862</p>
                            <p class="media-heading">Others</p>
                            <a href="#" class="help-block"><small>+24 another refs</small></a>
                          </div>
                        </li>
                      </ul>
                      <a href="#" class="btn btn-link btn-icon btn-block">View All <span class="fa fa-angle-double-down ml-1x"></span></a>
                    </div><!-- /.tab-pane -->
                  </div><!-- /.tab-content -->
                </div><!-- /.panel-body -->
              </div><!-- /.panel -->
            </div><!-- /.cols -->
          </div><!-- /.row -->
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