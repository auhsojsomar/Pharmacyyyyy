<!DOCTYPE html>
<!-- saved from url=(0070)http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/Layout.html -->
<html lang="en">
   <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Medicine | Medicine</title>
    
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
<body class="  pace-done" style=""><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%; ">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <div>
        <!--BEGIN THEME SETTING-->
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/Layout.html#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <a id="logo" href="Dashboard.php" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Pharmacy</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="Dashboard.php" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"> Admin</span>&nbsp;<span class="caret"></span></a>
                       <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-gears"></i>Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="login2.php"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;" data-position="right" class="navbar-default navbar-static-side" style="min-height: 100%;">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <div class="clearfix"></div>
                    <li><a href="Dashboard.php"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Dashboard</span></a></li>
                    <li class="active"><a href="#"><i class="fa fa-medkit fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Medicine</span></a>
                    <li><a href="Employee.php"><i class="fa fa-user fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Employee</span></a>
                    <li><a href="Sales.php"><i class="fa fa-shopping-cart fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Sales</span></a>
                    <li><a href="#"><i class="fa fa-money fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Expenses</span></a>
                    <li><a href="#"><i class="fa fa-clipboard fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Reports</span></a>
                </ul>
            </div>
        </nav>
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Medicine</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="Dashboard.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="http://themifycloud.com/demos/templates/KAdmin/KAdmin-Dark/Layout.html#">Medicine</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Medicine</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_data_Modal" id="add_button" style="margin-bottom: 20px;"><i class="fa fa-plus-circle"></i> Add Medicine</button>
                        
                        <table id="user_data" class="ui celled table table-striped table-hover"  cellspacing="0" width="100%">
						  <thead>
							  <tr>
								<th>Name</th>
								<th>Category</th>
								<th>Store<br>Box</th>
								<th>Purchase<br>Price</th>
								<th>Selling<br>Price</th>
								<th>Quantity</th>
								<th>Generic<br>Name</th>
								<th>Company</th>
								<th>Effects</th>
								<th>Expiry<br>Date</th>
               					<th>Action</th>
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
    <script async="" src="download file/analytics.js.download"></script>
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
  	<script>
		$(document).ready(function(){
			$('#add_button').click(function(){
				$('#user_form')[0].reset();
				$('.modal-title').text("Add Medicine");
				$('#action').val("Insert");
				$('#operation').val("Add");
			});
			var dataTable = $('#user_data').DataTable({
				"ajax":{
				url:"fetch.php",
				type:"POST"
			},
				"columnDefs":[
					{
						"targets":[5,10],
						"orderable":false,
					},
				],
			});
			$(document).on('submit', '#user_form',function(event){
				event.preventDefault();
				var name = $('#name').val();
				var category = $('#category').val();
				var store_box = $('#store_box').val();
				var purchase_price = $('#purchase_price').val();
				var selling_price = $('#selling_price').val();
				var quantity = $('#quantity').val();
				var generic_name = $('#generic_name').val();
				var company = $('#company').val();
				var effects = $('#effects').val();
				var expiry_date = $('#expiry_date').val();
				if(quantity != '')
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
				url:"fetch_single.php",
				method:"POST",
				data:{user_id:user_id},
				dataType:"json",
				success:function(data)
				{
					$('#add_data_Modal').modal('show');
					$('#name').val(data.name);
					$('#category').val(data.category);
					$('#store_box').val(data.store_box);
					$('#purchase_price').val(data.purchase_price);
					$('#selling_price').val(data.selling_price);
					$('#quantity').val(data.quantity);
					$('#generic_name').val(data.generic_name);
					$('#company').val(data.company);
					$('#effects').val(data.effects);
					$('#expiry_date').val(data.expiry_date);
					$('.modal-title').text("Edit Medicine");
					$('#user_id').val(user_id);
					$('#action').val("Edit");
					$('#operation').val("Edit");
				}
			})
			});
			$(document).on('click', '.delete', function(){
				var user_id = $(this).attr("id");
				if(confirm("Are you sure you want to delete this?"))
				{
					$.ajax({
						url:"delete.php",
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
			$(document).on('click', '.load', function(){
			var user_id2 = $(this).attr("id");
			$.ajax({
				url:"quantity.php",
				method:"POST",
				data:{user_id2:user_id2},
				dataType:"json",
				success:function(data)
				{
					$('#addquantitymodal').modal('show');
                    $('#name2').val(data.name);
                    $('#category2').val(data.category);
                    $('#store_box2').val(data.store_box);
                    $('#purchase_price2').val(data.purchase_price);
                    $('#selling_price2').val(data.selling_price);
                    $('#generic_name2').val(data.generic_name);
                    $('#company2').val(data.company);
                    $('#effects2').val(data.effects);
                    $('#newdate').val(data.expiry_date);
					$('#user_id2').val(user_id2);
					$('#operation2').val("Load");
				}
			})
			});
			$(document).on('submit', '#addquantityform',function(event){
				event.preventDefault();
				var quantity2 = $('#addquantitytext').val();
				if(quantity2 != '')
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
							$('#addquantityform')[0].reset();
							$('#addquantitymodal').modal('hide');
							dataTable.ajax.reload();
						}
					});
				}
				else
				{
					alert("Both Fields are Required");
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
    <script src="download file/jquery.flot.categories.js.download"></script>
    <script src="download file/jquery.flot.js.download"></script>
    <script src="download file/jquery.flot.pie.js.download"></script>
    <script src="download file/jquery.flot.tooltip.js.download"></script>
    <script src="download file/jquery.flot.resize.js.download"></script>
    <script src="download file/jquery.flot.fillbetween.js.download"></script>
    <script src="download file/jquery.flot.stack.js.download"></script>
    <script src="download file/jquery.flot.spline.js.download"></script>
    <script src="download file/zabuto_calendar.min.js.download"></script>
    <script src="download file/index.js.download"></script>
    
    
    <!--LOADING SCRIPTS FOR CHARTS-->
    <!--CORE JAVASCRIPT-->
    <script src="download file/main.js.download"></script>
    
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');
	</script>
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
	 				<span>
     				<label>Name</label>
     				<input type="text" id="name" name="name" class="form-control" required>
	 				</span>
     				<br>
     				<label>Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="Category 1">Category 1</option>
                        <option value="Category 2">Category 2</option>
                        <option value="Category 3">Category 3</option>
                    </select>
     				<br>
     				<div class="row">
     				<div class="col-lg-3">
     				<label>Store Box</label>
	   				<input type="text" name="store_box" id="store_box" class="form-control" required></input>
     				<br>
					</div>
    				<div class="col-lg-3">
     				<label>Purchase Price</label>
     				<input type="number" name="purchase_price" id="purchase_price" class="form-control" required></input>
     				<br>
					</div>
    				<div class="col-lg-3">
     				<label>Selling Price</label>
     				<input type="number" name="selling_price" id="selling_price" class="form-control" required></input>
     				<br>
					</div>
    				<div class="col-lg-3">
     				<label>Quantity</label>
					<input type="number" name="quantity" id="quantity" class="form-control" required></input>
     				<br>
					</div>
					</div>
     				<label>Generic Name</label>
     				<input type="text" name="generic_name" id="generic_name" class="form-control" required></input>
     				<br>
     				<label>Company</label>
     				<input type="text" name="company" id="company" class="form-control" required></input>
     				<br>
     				<label>Effects</label>
     				<input type="text" name="effects" id="effects" class="form-control" required></input>
     				<br>
     				<label>Expiry Date</label>
     				<input type="date" name="expiry_date" id="expiry_date" class="form-control" required></input>
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
    <div class="modal fade" id="addquantitymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-edit"></i>  Load Medicine</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="addquantityform" action="medicine/load" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Add Quantity</label>
                        <input type="text" class="form-control" name="addquantitytext" id="addquantitytext" value="" placeholder="">
                    </div>
                    <label>Expiry Date</label>
                    <input type="date" name="datequantity" id="datequantity" class="form-control" required></input>
                    <br>
                    <input type="hidden" name="newdate" id="newdate"></input>
                    <input type="hidden" name="name2" id="name2"></input>
                    <input type="hidden" name="category2" id="category2"></input>
                    <input type="hidden" name="store_box2" id="store_box2"></input>
                    <input type="hidden" name="purchase_price2" id="purchase_price2"></input>
                    <input type="hidden" name="selling_price2" id="selling_price2"></input>
                    <input type="hidden" name="generic_name2" id="generic_name2"></input>
                    <input type="hidden" name="company2" id="company2"></input>
                    <input type="hidden" name="effects2" id="effects2"></input>
                    <input type="hidden" name="user_id2" id="user_id2"></input>
					<input type="hidden" name="operation2" id="operation2"></input>
                    <button type="submit" name="submit" class="btn btn-info"> Submit</button>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>