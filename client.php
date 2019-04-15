<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>KASUTRI ASSOSIATIVES APPLICATION</title>
		<meta name="keywords" content="" />
		<meta name="description" content="">
		

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css"> -->

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />
		<!-- <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" /> -->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php
				require('header.php') 
			?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php
				require('aside.php') 
			?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
						<header class="page-header">
							<h2> CLIENT DETAILS</h2>				
							
						</header>				
	
						<!-- start: page -->
						<div class="row" style="margin-top:-30px;">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a> 
											<!-- <a href="#" class="fa fa-times"></a> -->
										</div>
	
										<h2 class="panel-title">NEW CLIENT ENTRY</h2>
	
										<!-- <p class="panel-subtitle">
											This is an example of form with multiple block columns.
										</p> -->
									</header>
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">CLIENT ID</label>
													<input type="text" name="firstname" id="client_id" class="form-control" readonly>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">CLIENT NAME</label>
													<input type="text" name="firstname" id="client_name" class="form-control">
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">TYPE</label>
													<select class="form-control mb-md" id="case_type">
														<option>Select</option>
														<option>Legal Advice </option>
														<option>Case Number</option>
													</select>	
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">CASE NUMBER</label>
													<input type="text" name="lastname" id="case_num" class="form-control">
												</div>
											</div>
											
										</div>
										<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label">DATE</label>
														<input type="text" id="case_date"  name="email" class="form-control" data-plugin-datepicker>
													</div>
												</div>
												
												<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label">ADDRESS</label>
														<input type="text" id="client_adrs" name="firstname" class="form-control">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label">STATE</label>
														<input type="text" id="client_state" name="firstname" class="form-control">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label">CITY</label>
														<input type="text" id="client_city" name="email" class="form-control">
													</div>
												</div>
												

											</div>
											<br>
											<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label">POSTAL CODE</label>
														<input type="text" id="client_pincode" name="email" class="form-control">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label">DESK NUMBER</label>
														<input type="text" id="client_desknum" name="email" class="form-control">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label">PHONE NUMBER</label>
														<input type="text" id="client_phnum" name="email" class="form-control">
													</div>
												</div>
											</div>
										
				
									</div>
								</section>
							</div>
						</div>
							
						<!-- end: page -->

							<!-- start: page -->
						<div class="row" style="margin-top:-30px;">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a> 
											<!-- <a href="#" class="fa fa-times"></a> -->
										</div>
	
										<h2 class="panel-title">ADD CONTACT PERSONS</h2>
	
										<!-- <p class="panel-subtitle">
											This is an example of form with multiple block columns.
										</p> -->
									</header>
									<div class="panel-body">
										
										<div class="row">
											<div class="col-md-5">
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">NAME</label>
															<input type="text" id="c_name" name="firstname" class="form-control">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">EMAIL ID</label>
															<input type="text" id="c_mail" name="firstname" class="form-control">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">DESIGNATION</label>
															<input type="text" id="c_desg" name="firstname" class="form-control">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">PHONE NUMBER</label>
															<input type="text" id="c_phnum" name="firstname" class="form-control">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">DESK NUMBER</label>
															<input type="text" id="c_desknum" name="firstname" class="form-control">
														</div>
													</div>
													<div class="col-sm-6" style="">
														<div class="form-group" style="margin-top:25px;">
															<button class="btn btn-success" style="height:35px;width:120px; font-weight: bold;" onclick="addContactPerson()" id="addContactPerson">ADD</button>
															<button class="btn btn-warning" style="height:35px;width:120px; font-weight: bold;display:none;" onclick="updateContactPerson()" id="updateContactPerson">UPDATE</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-7">
												<table class="table table-bordered table-striped mb-none" id="tblPerson">
													<thead>
														<tr>
															<th>NAME</th>
															<th>EMAIL</th>
															<th>DESIGNATION</th>
															<th>MOBILE</th>
															<th>DESK NUMBER</th>
															<th>ACTION</th>
														</tr>
													</thead>
													
												</table>
											</div>
										</div>	
										<br>
										<br>
										<div class="row">
											<div class="col-sm-2 col-md-offset-4">
												<div class="form-group" style="margin-top:-25px;">
													<br>
													<button class="btn btn-primary" style="height:35px;width:120px; font-weight: bold;" onclick="saveClient()" id="saveClient">SAVE</button>
													<button class="btn btn-warning" style="height:35px;width:120px; font-weight: bold;display:none;" onclick="updateClient()" id="updateClient" >UPDATE</button>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="form-group" style="margin-top:-25px; ">
													<br>
													<button class="btn btn-danger" style="height:35px;width:120px;font-weight: bold;" onclick="pageReload()">CANCEL</button>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
							
						<!-- end: page -->
						

							<!-- start: page -->
							<div class="row" style="margin-top:0px;">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a> 
											<!-- <a href="#" class="fa fa-times"></a> -->
										</div>
	
										<h2 class="panel-title">CLIENT DETAILS</h2>
	
										<!-- <p class="panel-subtitle">
											This is an example of form with multiple block columns.
										</p> -->
									</header>
									<div class="panel-body">
										
										<div class="row">
											<div class="col-md-2">
												<div class="form-group">
													<label class="control-label">CLIENT NAME</label>
												</div>
											</div>
											<div class="col-md-3" style="margin-top:-10px;">
												<div class="form-group">
													<input type="text" onkeyup="myFunction()" name="firstname" id="myInput" class="form-control">
												</div>
											</div>
											<!-- <div class="col-md-3" style="margin-top:-10px;">
												<div class="form-group">
												<button class="btn btn-success" style="height:35px;width:120px;font-weight: bold;">SEARCH</button>
									
												</div>
											</div> -->

											<div class="clearfix"></div>

											<br>
											<div class="col-md-12">
												<table class="table table-bordered table-striped mb-none" id="tblClient">
													<thead>
														<tr>
															<th>CLIENT ID</th>
															<th>CLIENT NAME</th>
															<th>TYPE</th>
															<th>CASE NUMBER</th>
															<th>ACTIONS</th>
														</tr>
													</thead>
										
												</table>
											</div>
										</div>	
									</div>
								</section>
							</div>
						</div>
							
						<!-- end: page -->


						

						
						
					</section>
				</div>
			</section>

									 <!-- Modal -->
  <div class="modal fade" id="doctormodel" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" >CLIENT STATUS</h4>
        </div>
        <div class="modal-body text-center">
          <p id="data"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="pageReload()">OK</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="doctordeletemodel" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" >CLIENT STATUS</h4>
        </div>
        <div class="modal-body text-center">
          <p id="">DO YOU WANT TO DELETE ?</p>
        </div>
        <div class="modal-footer">
		<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="deleteCL()">YES</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="pageReload()">NO</button>
        </div>
      </div>
      
    </div>
  </div>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<!-- <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script> -->

		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>
		<script src="Business_Logics/Client/client.js"></script>

		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
		<script>
		function myFunction() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("tblClient");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
			if (td) {
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
			}       
		}
		}
		</script>
	</body>
</html>