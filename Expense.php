<!DOCTYPE html>
<!-- saved from url=(0073)http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/dashboard.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Expenses | Expenses</title>
    
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
                <a id="logo" href="Dashboard.php" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Pharmacy</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
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
                    <li><a href="Dashboard.php"><i class="fa fa-tachometer fa-fw">
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
                    <li class="active"><a href="#"><i class="fa fa-money fa-fw">
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
                            Expenses</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="Dashboard.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/dashboard.html#">Expenses</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Expenses</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_data_Modal" id="add_button" style="margin-bottom: 20px;"><i class="fa fa-plus-circle"></i> Add Expenses</button>
                        
                        <table id="user_data" class="ui celled table table-striped table-hover"  cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th width="20%">Action</th>
                              </tr>
                          </thead>
                        </table>
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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.semanticui.min.css">
    <style type="text/css">
        body {
            font-family: "Open Sans", sans-serif;
            font-size: 13px;
            line-height: 1.42857;
            color: rgb(153, 153, 153);
            background-color: rgb(240, 242, 245);
            height: 100%;
        }
        a {
            color: #999999;
            text-decoration: none;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#add_button').click(function(){
                $('#user_form')[0].reset();
                $('.modal-title').text("Add Expenses");
                $('#action').val("Insert");
                $('#operation').val("Add Expenses");
            });
            var dataTable = $('#user_data').DataTable({
                "ajax":{
                url:"fetch_expenses.php",
                type:"POST"
            },
                "columnDefs":[
                    {
                        "targets":[0,3],
                        "orderable":false,
                    },
                ],
            });
            $(document).on('submit', '#user_form',function(event){
                event.preventDefault();
                var category = $('#category').val();
                var amount = $('#amount').val();
                if(amount != '')
                {
                    $.ajax({
                        url:"insert.php",
                        method:'POST',
                        data:new FormData(this),
                        contentType:false,
                        processData:false,
                        success:function(data)
                        {
                            alert(data);
                            $('#user_form')[0].reset();
                            $('#add_data_Modal').modal('hide');
                            dataTable.ajax.reload();
                        }
                    });
                }
                else
                {
                    alert("Both Fields are Required");
                }
            });
            $(document).on('click', '.update', function(){
            var user_id = $(this).attr("id");
            $.ajax({
                url:"fetch_single_expenses.php",
                method:"POST",
                data:{user_id:user_id},
                dataType:"json",
                success:function(data)
                {
                    $('#add_data_Modal').modal('show');
                    $('#category').val(data.category);
                    $('#amount').val(data.amount);
                    $('.modal-title').text("Edit Expenses");
                    $('#user_id').val(user_id);
                    $('#action').val("Edit");
                    $('#operation').val("Edit Expenses");
                }
            })
            });
            $(document).on('click', '.delete', function(){
                var user_id = $(this).attr("id");
                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"delete_expenses.php",
                        method:"POST",
                        data:{user_id:user_id},
                        success:function(data)
                        {
                            alert(data);
                            dataTable.ajax.reload();
                        }
                    });
                }
                else
                {
                    return false;   
                }
            });
        });
    </script>
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
<div id="add_data_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: #222222;color: white;">
                    <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                    <h4 class="modal-title"><i id="iconmoto" class="fa fa-plus-circle"></i> Add Medicine</h4>
                </div>
                <div class="modal-body">
                    <form method="post" id="user_form" enctype="multipart/form-data">
                    <label>Category</label>
                    <select class="form-control" name="category" id="category">
                        <?php 
                        $connection = mysqli_connect("localhost","root","","pharmacy");
                        $query = mysqli_query($connection,"Select * From employee_Category where deleted = 0");
                        while($row = mysqli_fetch_assoc($query))
                        {
                            ?>
                            <option value="Category 1"><?php echo $row['category'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <br>
                    <label>Amount</label>
                    <input type="text" name="amount" id="amount" class="form-control" required></input>
                    <br>
                </div>
                <div class="modal-footer" style="background: #222222;color: white;">
                <input type="hidden" name="user_id" id="user_id"></input>
                <input type="hidden" name="operation" id="operation"></input>
                <input type="submit" id="action" name="action" value="Insert" class="btn btn-success"></input>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>


