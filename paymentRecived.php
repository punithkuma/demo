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
							<h2>PAYMENT RECEIVED</h2>				
							
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
	
										<h2 class="panel-title">BILL DETAILS</h2>
                                      
										<!-- <p class="panel-subtitle">
											This is an example of form with multiple block columns.
										</p> -->
									</header>
									<div class="panel-body">

                                        <div class="row">
											
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label"> COURT TYPE</label>
													<select class="form-control mb-md" id="ctype" onchange="getData()">
                                                        <option>Select</option>
                                                        <option>Legal Advice</option>
                                                        <option>High Court</option>
                                                        <option>Other Court</option>
                                                    </select>	
												</div>
                                            </div>
                                            <div class="col-sm-3" id="case">
												<div class="form-group">
													<label class="control-label">BILL NUMBER</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
											
                                            <div class="col-md-3" style="margin-top:25px;">
												<div class="form-group">
												<button class="btn btn-success" style="height:35px;width:120px;font-weight: bold;">SEARCH</button>
									
												</div>
											</div>
                                        </div>
										<div class="row">
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">CLIENT NAME</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">BILL NUMBER</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">DATE</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">TOTAL AMOUNT</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:15px;">    
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">PAYMENT ID</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">PAYMENT DATE</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">PAID AMOUNT</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">BALANCE AMOUNT</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:15px;">  
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">PAYMENT MODE</label>
													<select class="form-control mb-md">
                                                        <option>Select</option>
                                                        <option>Legal Advice </option>
                                                        <option>Case Number</option>
                                                    </select>	
												</div>
                                            </div>
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">TRANSACTION NUMBER</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">TRANSACTION DATE</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
                                            

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2 col-md-offset-4">
                                                <div class="form-group" style="margin-top:25px;">
                                                    <br>
                                                    <button class="btn btn-primary" style="height:35px;width:120px; font-weight: bold;" onclick="getout()">SAVE</button>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group" style="margin-top:25px; ">
                                                    <br>
                                                    <button class="btn btn-danger" style="height:35px;width:120px;font-weight: bold;">CANCEL</button>
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
	
										<h2 class="panel-title">PAYMENT  DETAILS</h2>
                                      
										<!-- <p class="panel-subtitle">
											This is an example of form with multiple block columns.
										</p> -->
									</header>
									<div class="panel-body">

                                        <div class="row">
											
                                           
                                            <div class="col-sm-3" id="case">
												<div class="form-group">
													<label class="control-label">BILL NUMBER</label>
													<input type="text" name="firstname" class="form-control">
												</div>
                                            </div>
										
                                            <div class="col-md-3" style="margin-top:25px;">
												<div class="form-group">
												<button class="btn btn-success" style="height:35px;width:120px;font-weight: bold;">SEARCH</button>
									
												</div>
											</div>
                                        </div>
                                        <br>
										<div class="row">

                                            <div class="col-md-12">

                                                <table class="table table-bordered table-striped mb-none" id="tblClient">
													<thead>
														<tr>
                                                            <th>CASE NUMBER</th>
															<th>PREV DATE </th>
															<th>NEXT DATE</th>
															<th>STAGE </th>
															<th>REMARKS</th>
															<th>APPEARANCE</th>
															<th>ACTION</th>
															
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Somashekar</td>
															<td>Male</td>
															<td>1234567890</td>
															<td>Somashekar</td>
															<td>Somashekar</td>
															<td class="actions-hover actions-fade">
																<a href=""><i class="fa fa-pencil"></i></a>
																<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Somashekar</td>
															<td>Male</td>
															<td>7890</td>
															<td>Somashekar</td>
															<td>Somashekar</td>
															<td class="actions-hover actions-fade">
																<a href=""><i class="fa fa-pencil"></i></a>
																<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Somashekar</td>
															<td>Male</td>
															<td>4567890</td>
															<td>Somashekar</td>
															<td>Somashekar</td>
															<td class="actions-hover actions-fade">
																<a href=""><i class="fa fa-pencil"></i></a>
																<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
															</td>
														</tr>
													</tbody>
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
			td = tr[i].getElementsByTagName("td")[0];
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