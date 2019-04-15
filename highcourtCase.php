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
							<h2> HIGHT COURT DETAILS</h2>				
							
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
	
										<h2 class="panel-title">CLIENT DETAILS</h2>
	
										<!-- <p class="panel-subtitle">
											This is an example of form with multiple block columns.
										</p> -->
									</header>
									<div class="panel-body">
										
										<div class="row">
											<div class="col-md-2">
												<div class="form-group">
													<label class="control-label"> </label>
												</div>
											</div>
											<div class="col-md-3" style="margin-top:-5px;">
												<div class="form-group">
													<input type="text" onkeyup="myFunction()" name="firstname" id="myInput" class="form-control">
												</div>
											</div>
											<div class="col-md-3" style="margin-top:-5px;">
												<div class="form-group">
												<button class="btn btn-success" style="height:35px;width:120px;font-weight: bold;">SEARCH</button>
									
												</div>
											</div>

											<div class="clearfix"></div>

											<br>
											<div class="col-md-12">
												<table class="table table-bordered table-striped mb-none" id="tblClient">
													<thead>
														<tr>
                                                            <th> </th>
															<th>BANCH </th>
															<th>PREV DATE</th>
															<th>NEXT DATE</th>
															<th>ACTIONS</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Somashekar</td>
															<td>Male</td>
															<td>1234567890</td>
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
	
						<!-- start: page -->
						<div class="row" >
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a> 
											<!-- <a href="#" class="fa fa-times"></a> -->
										</div>
	
										<h2 class="panel-title">COURT DETAILS</h2>
                                        <!-- <p class="panel-subtitle pull-right" >
                                            <div class="col-md-2 col-md-offset-4" style="margin-top:-20px;" >
												<div class="form-group">
													<label class="control-label"> </label>
												</div>
											</div>
											<div class="col-md-3" style="margin-top:-25px;">
												<div class="form-group">
													<input type="text"  name="firstname" id="" class="form-control">
												</div>
                                            </div>
                                            <div class="col-md-3" style="margin-top:-25px;">
												<div class="form-group">
												<button class="btn btn-success" style="height:35px;width:120px;font-weight: bold;">SEARCH</button>
									
												</div>
											</div>
                                        </p> -->
										<!-- <p class="panel-subtitle">
											This is an example of form with multiple block columns.
										</p> -->
									</header>
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label class="control-label"> </label>
													<input type="text" name="firstname" id="_num" class="form-control">
												</div>
                                            </div>
											


                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">BENCH</label>
													<select class="form-control mb-md" id="bench">
															<option>Select</option>
															<option>Principal Bench at Bangalore</option>
															<option>Circuit Bench at Dharwad</option>
															<option>Circuit Bench at Gulbarga</option>
														</select>	
												</div>
                                            </div>
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">COURT HALL</label>
													<select class="form-control mb-md" id="court_hall">
														<option>Select</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
														<option>8</option>
														<option>9</option>
														<option>10</option>
														<option>11</option>
														<option>12</option>
														<option>13</option>
														<option>14</option>
														<option>15</option>
														<option>16</option>
														<option>17</option>
														<option>18</option>
														<option>19</option>
														<option>20</option>
														<option>21</option>
														<option>22</option>
														<option>23</option>
														<option>24</option>
														<option>25</option>
														<option>26</option>
														<option>27</option>
														<option>28</option>
														<option>29</option>
														<option>30</option>
														<option>31</option>
														<option>32</option>
														<option>33</option>
														<option>34</option>
														<option>35</option>
														<option>36</option>
														<option>37</option>
														<option>38</option>
														<option>39</option>
														<option>40</option>
														<option>41</option>
														<option>42</option>
														<option>43</option>
														<option>44</option>
														<option>45</option>
														<option>46</option>
														<option>47</option>
														<option>48</option>
														<option>49</option>
														<option>50</option>


													</select>	
												</div>
                                            </div>
                                            <div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">TYPE OF </label>
													<select class="form-control mb-md" id="_type">
                                                        <option>Select</option>
                                                        <option>AC (Arbitration Case)</option>
                                                        <option>CA (Company Application Matte) </option>
														<option>CCC (Civil Contempt Petition  </option>
                                                        <option>CEA (Central Excise Appeal) </option>
														<option>CMP (Civil Misc Petition)  </option>
                                                        <option>COA (U/S 10(F) Of The Companie)</option> </option>
														<option> COMPA (Company Appeal)</option> </option>
                                                        <option>COP (Company Petition) </option>
														<option> CP (Civil Petition) </option>
                                                        <option>CP.KLRA (Cp On Karnataka Land Refo) </option>
														<option>CRA (Cross Appeals)  </option>
                                                        <option> CRC (Civil Referred Case)</option>
														<option>CRL.A (Criminal Appeal)  </option>
                                                        <option> CRL.CCC (Criminal Contempt Petitio)</option>
														<option> CRL.P (Criminal Petition) </option>
                                                        <option>CRL.RC (Criminal Referred Case) </option>
														<option> CRL.RP (Criminal Revision Petitio) </option>
                                                        <option>CROB (Cross Objection) </option>
														<option>CRP (Civil Revision Petition)  </option>
                                                        <option>CSTA (Customs Appeal) </option>
														<option> EP (Election Petition) </option>
                                                        <option> EX.FA (Execution First Appeal)</option>
														<option>EX.SA (Execution Second Appeal)  </option>
                                                        <option>GTA (Gift Tax Appeal) </option>
														<option> HRRP (House Rent Rev. Petition) </option>
                                                        <option>ITA (Income Tax Appeal) </option>
														<option> ITA.CROB (I.T Appeal Cross Objectio) </option>
                                                        <option>ITRC (Income-Tax Referred Case) </option>
														<option> LRRP (Land Reforms Revision Pet) </option>
                                                        <option> LTRP (Luxury Tax Revision Petn.)</option>
														<option>MFA (Miscl. First Appeal)  </option>
                                                        <option> MFA.CROB (Mfa Cross Obj)</option>
														<option>MISC.CRL (Miscellaneous Case For Cr)  </option>
                                                        <option> MISC.CVL (Miscellaneous Case For Ci)</option>
														<option> MISC.P (Misc Petition) </option>
                                                        <option> MISC.W (Miscellaneous Case For Wr)</option>
														<option> MSA (Miscl Second Appeal) </option>
                                                        <option> MSA.CROB (Msa Cross Obj)</option>
														<option> OLR (Official Liquidator Repor) </option>
                                                        <option> OS (Original Suit)</option>
														<option> OSA (Original Side Appeal) </option>
                                                        <option> OSA.CROB (Osa Cross Objection)</option>
														<option>PROB.CP (Probate Civil Petition)  </option>
                                                        <option>RFA (Regular First Appeal) </option>
														<option> RFA.CROB (Rfa Cross Obj) </option>
                                                        <option>RP (Review Petition) </option>
														<option> RPFC (Rev.Pet Family Court) </option>
                                                        <option>RSA (Regular Second Appeal) </option>
														<option>RSA.CROB (Rsa Cross Obj)  </option>
                                                        <option>SCLAP (Supreme Court Leave Appli) </option>
														<option> STA (Sales Tax Appeal) </option>
                                                        <option>STRP (Sale Tax Revision Petitio) </option>
														<option> TAET (Tax Appeal On Entry Tax) </option>
                                                        <option>TOS (Testamentory Original Sui) </option>
														<option> TRC (Tax Referred Cases) </option>
                                                        <option>WA (Writ Appeal) </option>
														<option> WA.CROB (Wa Cross Objection) </option>
                                                        <option>WP (Writ Petition) </option>
														<option> WPCP (Civil Pet In Writ Side ) </option>
                                                        <option>WPHC (Habeas Corpus) </option>
														<option>WTA (Wealth Tax Appeal) </option>
                                                    </select>	
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">PREVIOUS DATE</label>
													<input type="text" id="prev_date" name="firstname" class="form-control" data-plugin-datepicker>
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label class="control-label">NEXT DATE</label>
													<input type="text" id="next_date" name="lastname" class="form-control" data-plugin-datepicker>
												</div>
                                            </div>
                                            
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">BETWEEN</label>
                                                    <select class="form-control mb-md" id="between_type">
                                                        <option>Select</option>
                                                        <option> Appellant </option>
                                                        <option>Applicant </option>
														<option> Petitioner </option>
                                                        <option> Respondent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">NAME</label>
                                                    <input type="text" name="firstname" id="between_name" class="form-control">
                                                </div>
                                            </div>
											
										</div>
										<div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">AND</label>
                                                    <select class="form-control mb-md" id="and_type">
                                                        <option>Select</option>
														<option> Appellant </option>
                                                        <option>Applicant </option>
														<option> Petitioner </option>
                                                        <option> Respondent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">NAME</label>
                                                    <input type="text" name="firstname" id="and_name" class="form-control">
                                                </div>
                                            </div>  
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">STAGE</label>
                                                    <select class="form-control mb-md" id="stage">
                                                        <option>Select</option>
                                                        <option>Admission  </option>
                                                        <option>B-Group </option>
														<option> Final Hearing  </option>
                                                        <option>Hearing on IA </option>
														<option> Orders </option>
                                                        <option>Others </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">APPEARANCE</label>
                                                    <select class="form-control mb-md" id="appearance">
                                                        <option>Select</option>
                                                        <option>Kasturi Associates  </option>
                                                        <option>Senior Counsel  </option>
                                                    </select>
                                                </div>
                                            </div>
                                            

                                        </div>
										<div class="row">
											
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">REMARKS</label>
                                                    <textarea type="text" rows="3" id="remarks" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-sm-2 col-md-offset-4">
                                                <div class="form-group" style="margin-top:25px;">
                                                    <br>
                                                    <button class="btn btn-primary" style="height:35px;width:120px; font-weight: bold;" onclick="saveHightCourt()">SAVE</button>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group" style="margin-top:25px; ">
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
          <h4 class="modal-title text-center" >HIGHT COURT STATUS</h4>
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
          <h4 class="modal-title text-center" >HIGHT COURT STATUS</h4>
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

		<script src="Business_Logics/HighCourt/highcourt.js"></script>

		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
		<script>
		function myFunction() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpper();
		table = document.getElementById("tblClient");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpper().indexOf(filter) > -1) {
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