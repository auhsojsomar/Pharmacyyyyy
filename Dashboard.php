<!DOCTYPE html>
<!-- saved from url=(0073)http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/dashboard.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Dashboard | Dashboard</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/images/icons/favicon-114x114.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Loading bootstrap css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    
    
<style id="holderjs-style" type="text/css"></style></head>
<body class="  pace-done" style=""><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <div>
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="#" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Pharmacy</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle">Admin</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-gears"></i>Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="login2.php"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
        </nav>
            
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;" data-position="right" class="navbar-default navbar-static-side" style="min-height: 100%;">
            <div id="mySidenav" class="sidebar-collapse menu-scroll" >
                <ul id="side-menu" class="nav">
                    <div class="clearfix"></div>
                    <li class="active"><a href="#"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Dashboard</span></a></li>
                    <li><a href="Medicine.php"><i class="fa fa-medkit fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Medicine</span></a>
                    <li><a href="Medicine_Category.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Medicine Category</span></a>
                    <li><a href="Employee.php"><i class="fa fa-user fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Employee</span></a>
                    <li><a href="Sales.php"><i class="fa fa-shopping-cart fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Sales</span></a>
                    <li><a href="Expense.php"><i class="fa fa-money fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Expenses</span></a>
                    <li><a href="Employee_Category.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Expense Category</span></a>
                    <li><a href="Reports.php"><i class="fa fa-clipboard fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Reports</span></a>
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="Dashboard.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/dashboard.html#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div id="sum_box" class="row mbl">
                            <div class="col-sm-6 col-md-3">
                                <div class="panel profit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-shopping-cart"></i>
                                        </p>
                                        <h4 class="value">
                                            <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">₱</span><span></span></h4>
                                        <p class="description">
                                            Total Sales</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success">
                                                <span class="sr-only">80% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel income db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-money"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>₱</span><span></span></h4>
                                        <p class="description">
                                            Total Expense</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-info">
                                                <span class="sr-only">60% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel task db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-medkit"></i>
                                        </p>
                                        <h4 class="value">
                                            <span></span></h4>
                                        <p class="description">
                                            Medicine</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-danger">
                                                <span class="sr-only">50% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel visit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-group"></i>
                                        </p>
                                        <h4 class="value">
                                            <span></span></h4>
                                        <p class="description">
                                            Employee</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar progress-bar-warning">
                                                <span class="sr-only">70% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h4 class="mbs">
                                                    Sales</h4>
                                                <p class="help-block">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; padding: 0px; position: relative;">
                                                <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 389px; height: 300px;" width="389" height="300"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 284px; left: 16px;">Jan</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 284px; left: 74px;">Feb</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 284px; left: 132px;">Mar</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 284px; left: 192px;">Apr</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 284px; left: 249px;">May</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 284px; left: 311px;">Jun</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 284px; left: 372px;">Jul</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 272px; left: 13px;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 233px; left: 7px;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 195px; left: 7px;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 156px; left: 7px;">75</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 118px; left: 1px;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 79px; left: 1px;">125</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 41px; left: 1px;">150</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 3px; left: 1px;">175</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 389px; height: 300px;" width="389" height="300"></canvas><div class="legend"><div style="position: absolute; width: 73px; height: 40px; top: 15px; right: 16px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:15px;right:16px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #ffce54;overflow:hidden"></div></div></td><td class="legendLabel">Sales</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #01b6ad;overflow:hidden"></div></div></td><td class="legendLabel">Expenses</td></tr></tbody></table></div></div>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="mbm">
                                                    Reports</h4>
                                                <span class="task-item">Number of Sales<small class="pull-right text-muted">40%</small><div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;" class="progress-bar progress-bar-orange">
                                                        <span class="sr-only">40% Complete (success)</span></div>
                                                </div>
                                                </span><span>Total Sales<small class="pull-right text-muted">60%</small><div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-blue">
                                                        <span class="sr-only">60% Complete (success)</span></div>
                                                </div>
                                                </span><span>Number of Expenses<small class="pull-right text-muted">55%</small><div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;" class="progress-bar progress-bar-green">
                                                        <span class="sr-only">55% Complete (success)</span></div>
                                                </div>
                                                </span><span>Total Expense<small class="pull-right text-muted">66%</small><div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;" class="progress-bar progress-bar-yellow">
                                                        <span class="sr-only">66% Complete (success)</span></div>
                                                </div>
                                                </span><span>Number of Medicines<small class="pull-right text-muted">90%</small><div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" class="progress-bar progress-bar-pink">
                                                        <span class="sr-only">90% Complete (success)</span></div>
                                                </div>
                                                </span><span>In Stock Inventory Quantity<small class="pull-right text-muted">50%</small><div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-violet">
                                                        <span class="sr-only">50% Complete (success)</span></div>
                                                </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        2017 © Pharmacy Management System</div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
   	<script src="download file/jquery-1.10.2.min.js.download"></script>
    <script src="download file/jquery-migrate-1.2.1.min.js.download"></script>
    <script src="download file/jquery-ui.js.download"></script>
    <script src="download file/bootstrap.min.js.download"></script>
    <script src="download file/bootstrap-hover-dropdown.js.download"></script>
    <script src="download file/html5shiv.js.download"></script>
    <script src="download file/respond.min.js.download"></script>
    <script src="download file/jquery.metisMenu.js.download"></script>
    <script src="download file/jquery.slimscroll.js.download"></script>
    <script src="download file/jquery.cookie.js.download"></script>
    <script src="download file/icheck.min.js.download"></script>
    <script src="download file/custom.min.js.download"></script>
    <script src="download file/jquery.news-ticker.js.download"></script>
    <script src="download file/jquery.menu.js.download"></script>
    <script src="download file/pace.min.js.download"></script>
    <script src="download file/holder.js.download"></script>
    <script src="download file/responsive-tabs.js.download"></script>
    <script src="download file/jquery.flot.js.download"></script>
    <script src="download file/jquery.flot.categories.js.download"></script>
    <script src="download file/jquery.flot.pie.js.download"></script>
    <script src="download file/jquery.flot.tooltip.js.download"></script>
    <script src="download file/jquery.flot.resize.js.download"></script>
    <script src="download file/jquery.flot.fillbetween.js.download"></script>
    <script src="download file/jquery.flot.stack.js.download"></script>
    <script src="download file/jquery.flot.spline.js.download"></script>
    <script src="download file/zabuto_calendar.min.js.download"></script>
    <script src="download file/index.js.download"></script>
    <!--CORE JAVASCRIPT-->
    <script src="download file/main.js.download"></script>
     
<div id="flotTip" style="display: none; position: absolute; background: rgb(255, 255, 255); z-index: 1040; padding: 0.4em 0.6em; border-radius: 0.5em; font-size: 0.8em; border: 1px solid rgb(17, 17, 17); white-space: nowrap;"></div></body></html>


