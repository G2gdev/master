<style>
<!--
.margin-bottom-5{
	margin-bottom: 5px;
}
-->
#map-canvas {
	
    width: 100%;
    height: 350px;
   
}
</style>
<?php 
/*if($_SESSION['vendor_id']!='')
{
		//echo '<script>window.location =  "' . base_url () . 'admin/vendor/new" ; </script>';
		echo '<script>  window.onload = function () { xyz();}</script>';
	
}*/
?>
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/selectize.bootstrap3.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/datepicker3.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css">
<!--  <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<link href="<?php echo asset_url();?>css/jquery.multiselect.css" rel="stylesheet" />
<script src="<?php echo asset_url();?>js/jquery.multiselect.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.almightree.js"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>css/almightree.css">
	<style>
	.select2{
		width : 100% !important;
	}

	</style>
			<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="row" style="padding-left: 259px;padding-right: 35px;">
<div class="col-lg-12">
<h3 class="page-header">Add Vendor</h3>
<div class="panel-group" id="accordion"  aria-multiselectable="true">
	<div class="panel panel-default" ><a data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">
    <div class="panel-heading" style="background-color: #ccc;"><b>Basic Details</b></div></a>
    <div id="collapseOne" class="panel-collapse collapse">
	<div class="panel-body">
  			<form id="addrestaurant" name="addrestaurant" action="" method="post">
		  	<div id="basic" class="tab-pane fade in active">
		  		<div class="row">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <div class="panel-body">
	                        <div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-name">
                                            <label class="control-label col-sm-5">Garage Name <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="garage_name" name="garage_name"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                              	<div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-name">
                                            <label class="control-label col-sm-5">Vendor Name <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="name" name="name"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                              	</div>
	                          	<div class="row">
	                                
									<div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-landmark">
                                            <label class="control-label col-sm-5">Email <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="email" name="email"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                              	 <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-landline_1">
                                            <label class="control-label col-sm-5">Mobile Number <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="mobile" name="mobile"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>  
	                          	</div> 
								<div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-landline_2">
                                            <label class="control-label col-sm-5">Alternate Number</label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="landline" name="landline"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                              	<div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-address">
                                            <label class="control-label col-sm-5">Address <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <textarea class="form-control" rows="3" id="address" name="address"></textarea>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          	</div>
	                          	
	                          	<div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Category<span class='text-danger'>*</span></label>
											  <div class="col-sm-10"> 
											<select name="category_id" id="category_id" class="form-control">
													<option value=""> Select Category </option>
													<?php foreach ($categories as $category) { ?>
													<option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
													<?php } ?>
												</select>
												</div>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Brand<span class='text-danger'>*</span></label>
											  <div class="col-sm-12">
												<select name="brand_id[]" id="brand_id" class="form-control" multiple="true">
												<input type="button" id="select_all2" name="select_all2" value="Select All">
												</select>
											</div>
										</div>
										<div class="messageContainer"></div>
									</div>
								
                                </div>
                                <div class="row">
									<div class="col-md-12">
										<div class="form-group" id="error-name">
											<label class="control-label">Model<span class='text-danger'>*</span></label>
											  <div class="col-sm-12">
												<select name="model_id[]" id="model_id" class="form-control" multiple="true">
												   <input type="button" id="select_all" name="select_all" value="Select All">
												</select>
											  </div>
										</div>
										<div class="messageContainer"></div>
									</div>
								<!-- <div class="col-md-6">
												<div class="form-group" id="error-name">
											<label class="control-label">Subcategory<span class='text-danger'>*</span></label>
											  <div class="col-sm-10">
											<select name="subcategory_id" id="subcategory_id" class="form-control">
													<option value=""> Select Subcategory</option>													<?php /*print_r($subcategories[0]);?>
													<?php foreach ($subcategories[0] as $category) { ?>													     <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>													<?php } */ ?>
											</select>
											</div>
										</div>
										<div class="messageContainer"></div>
									</div>-->
								
                                </div>
                                
	                          	<div class="row">
	                           
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-pincode">
                                            <label class="control-label col-sm-5">Pincode</label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="pincode" name="pincode"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                              	  <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-address">
                                            <label class="control-label col-sm-5">Review <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <textarea class="form-control" rows="3" id="review" name="review"></textarea>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          	</div>

	                          	<div class="row"> 
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-pincode">
                                            <label class="control-label col-sm-5">Grade</label>
                                            <div class="col-sm-10">
	                                            <select name="rating" id="rating" class="form-control">
													<option value=""> Select Grade</option>
													<?php foreach ($grades as $grade) { ?>
													<option value="<?php echo $grade['id'];?>"><?php echo $grade['name'];?></option>
													<?php } ?>
												</select>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
									 
	                          	</div>
							 
								
	                      
	                <div class="row"><input type="hidden" id="vendor_id" name="id">
					<div class="col-lg-12 margin-bottom-5 text-center">
					<div id="response1"></div>
				<?php // if (!empty($vendors)) {?>
				 <!-- 	<button type="button" class="btn btn-success" onclick="show();">Next</button> -->
				 	<?php //} else { ?>
					<button type="submit" class="btn btn-success">Save</button>
					 <button class="btn btn-success" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Next</button>
        <?php //} ?>
					</div>
			</div>
	                      	</div>
	                  	</div>
	               	</div>
	        	</div>
		  	</div>
		  	</form>
 
    </div>
    </div>
    </div>
    <!--Second panel for Service-->
    <!--<form id="updaterestaurant" name="updaterestaurant" action="" method="post">-->
    <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo">
    <div class="panel-heading" style="background-color: #ccc;"><b>Service</b></div></a>
    <div id="collapseTwo" class="panel-collapse collapse">
    <div class="panel-body">
        	  		<div class="row">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <div class="panel-body">
	                         <!-- <input type="hidden" id="id" name="id"> -->
	                         <div class="form-group" id="error-address">
                                <label class="control-label col-sm-5">Subcategory & Service<span class='text-danger'>*</span></label>
								<div id="mainchk">	
	                          	<input id="box"> <a href="#" id="clear">clear</a>
	                          	<ul id="treecheck">	
	                          	<li>				
                                   <ul class="home-second-menu clearfix hello">
                                   <?php 
                                   foreach ($subcategories as $subcategory) { ?>
					                <li>
									<input type="checkbox" value="<?php echo $subcategory['id'];?>" id="subcategory_id" name="subcategory_id[]" checked><?php echo $subcategory['name'];?> (<?php echo $subcategory['brand'];?>)	
									<ul class="home-second-menu clearfix">
                                   <?php 
                                   foreach ($services as $service) { 
                                   	if($subcategory['id']==$service['subcategory_id']){
                                   	?>
					                <li>
									<input type="checkbox" value="<?php echo $service['id'];?>" id="service_id" name="service_id[]" checked><?php echo $service['name'];?>
									</li>	
								   <?php }} ?>			
									</ul>
									
									</li>	
								   <?php } ?>			
									</ul>
									</li></ul>	
								</div>
								
								</div>
	                                           	
	                                           	<div class="row">
					<div class="col-lg-12 margin-bottom-5 text-center">
					 <button class="btn btn-success" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Next</button>
      </div>
			</div>
						
	                          	</div>
	                      	</div>
	                  	</div>
	               	</div>	  
    </div>
    </div>
    </div>
<br>
    <!-- /Third panel for Zone -->
	<form id="updaterestaurant" name="updaterestaurant" action="" method="post">
	<div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree">
    <div class="panel-heading" style="background-color: #ccc;"><b>Zone</b></div></a>
    <div id="collapseThree" class="panel-collapse collapse">
    <div class="panel-body">
  		<div class="row">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <div class="panel-body">
							<input type="hidden" id="id" name="id">
	                      <!--   <div class="row">
	                         <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-address">
                                            <label class="control-label col-sm-5">Zone<span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                           <select name="zone_id" id="zone_id" class="form-control">
													<option value=""> Select Zone</option>
													<?php foreach ($zones as $zone) { ?>
													<option value="<?php echo $zone['id'];?>"><?php echo $zone['name'];?></option>
													<?php } ?>
												</select>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                              	
	                          <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-address">
                                            <label class="control-label col-sm-5">Area<span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                           <select name="area_id" id="area_id" class="form-control">
													<option value=""> Select Area</option>
													<?php foreach ($areas as $area) { ?>
													<option value="<?php echo $area['id'];?>"><?php echo $area['name'];?></option>
													<?php } ?>
												</select>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                              	</div>-->
	                              		<div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-landmark">
                                            <label class="control-label col-sm-3">Landmark</label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="landmark" name="landmark"/>
											</div>
											<div class="messageContainer col-sm-4"></div>
                                        </div>
	                              	</div>
	                             	 <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-locality">
                                            <label class="control-label col-sm-5">Accurate Location <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="locality" name="locality"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          	</div>
	                          	<div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-longitude">
                                            <label class="control-label col-sm-5">Latitude <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="latitude" name="latitude"  />
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                              	<div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-longitude">
                                            <label class="control-label col-sm-5">Longitude <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="longitude" name="longitude"  />
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          	</div>
	                          	<div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-radius">
                                            <label class="control-label col-sm-5">Delivery Radius <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="radius" name="radius" value="3000"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          	</div>
								<div class="row">
								<div class="col-lg-12 margin-bottom-5 text-center">
								<button class="btn btn-success" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Next</button>
								</div>
								</div> 
	                      
			                        
	                          	</div>
	                      	</div>
	                  	</div>
	               	</div>
    </div>
    </div>
	</div>
    <!-- forth panel for Billing Settings -->
    <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour">
    <div class="panel-heading" style="background-color: #ccc;"><b>Billing Settings</b></div></a>
    <div id="collapseFour" class="panel-collapse collapse">
    <div class="panel-body">
    	<div class="row">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <div class="panel-body">
	                          	<div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-billing_cycle">
                                            <label class="control-label col-sm-5">Billing Cycle <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <select name="billing_cycle" id="billing_cycle" class="form-control" style="display:inline;width:48%;">
													<option value="">Select Billing Cycle</option>
													<option value="1">Weekly</option>
													<option value="2">Fortnightly</option>
													<option value="3">Monthly</option>
												</select>
												<input type="text" id="cycle_effective_date" name="cycle_effective_date" class="form-control" placeholder="Effective Date" style="display:inline;width:49%;" value="<?php echo date('d-m-Y'); ?>" />
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-with_service_tax">
                                            <label class="control-label col-sm-5">Inclusive Service Tax </label>
                                            <div class="col-sm-10">
	                                            <select name="with_service_tax" id="with_service_tax" class="form-control" >
													<option value="1">Yes</option>
													<option value="0">No</option>
												</select>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          	</div>
	                          	<div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-payment_mode">
                                            <label class="control-label col-sm-5">Invoice Payment Mode </label>
                                            <div class="col-sm-10">
	                                            <select name="payment_mode" id="payment_mode" class="form-control" onchange="change()">
	                                            	<option>Select Invoice Payment Mode</option>>
													<option value="1">Online</option>
													<option value="2">Cheque</option>
													<option value="0">Cash</option>
													<option value="3">Wallet</option>
												</select>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
                                  	<div class="col-lg-6 margin-bottom-5">
                                     	<div class="form-group" id="error-company_name">
                                          	<label class="control-label col-sm-5">Billing Company Name </label>
                                           	<div class="col-sm-10">
                                             	<input type="text" class="form-control" id="company_name" name="company_name" value=""/>
                                          	</div>
                                           	<div class="messageContainer col-sm-10"></div>
                                      	</div>
                                  	</div>
                              	</div>
	                          <div id="bank">
	                          	<div class="row">
                                  	<div class="col-lg-6 margin-bottom-5" id="chk1">
                                     	<div class="form-group" id="error-cheque-favour-of">
                                          	<label class="control-label col-sm-5">Cheque In Favour</label>
                                           	<div class="col-sm-10">
                                              	<input type="text" class="form-control" id="cheque_favour_of" name="cheque_favour_of" value=""/>
                                           	</div>
                                          	<div class="messageContainer col-sm-10"></div>
                                       	</div>
                                  	</div>
                                    <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-account_name">
                                            <label class="control-label col-sm-5">Account Name</label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="account_name" name="account_name"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          	</div>
	                          	<div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-account_number">
                                            <label class="control-label col-sm-5">Account Number </label>
                                            <div class="col-sm-10"> 
	                                            <input type="text" class="form-control" id="account_number" name="account_number"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          		<div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-bank_name">
                                            <label class="control-label col-sm-5">Bank Name </label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="bank_name" name="bank_name" />
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          	</div>
	                          	<div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-branch_name">
                                            <label class="control-label col-sm-5">Branch Name </label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="branch_name" name="branch_name"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-ifsc_code">
                                            <label class="control-label col-sm-5">IFSC Code </label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="ifsc_code" name="ifsc_code"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                             </div>
	                             </div>
                                   <div class="row">
                                   <div class="col-lg-6 margin-bottom-5" id="wall">
	                                	<div class="form-group" id="error-min_amount">
                                            <label class="control-label col-sm-5">Wallet Name</label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="wallet_name" name="wallet_name"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
                                <div class="col-lg-6 margin-bottom-5" id="mob">
	                                	<div class="form-group" id="error-min_amount">
                                            <label class="control-label col-sm-5">Mobile number for Wallet</label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="mob_no" name="mob_no"  />
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          		<div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-min_amount">
                                            <label class="control-label col-sm-5">Minimum Billing Amount </label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="min_amount" name="min_amount"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                           <!--    	 <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-is_official">
                                            <label class="control-label col-sm-5">Is Official ? </label>
                                            <div class="col-sm-10">
	                                            <select name="is_official" id="is_official" class="form-control">
                                                        <option value="1">Official</option>
                                                        <option value="0">UnOfficial</option>
                                                </select>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>-->
	                          	</div>
	                          	<div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-hard_copy">
                                            <label class="control-label col-sm-10">Invoice Hardcopy Required ?</label>
                                            <div class="col-sm-10">
	                                            <select name="hard_copy" id="hard_copy" class="form-control">
													<option value="1">Yes</option>
													<option value="0">No</option>
												</select>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-invoice_notify_mobile">
                                            <label class="control-label col-sm-5">Gateway Charge <span class='text-danger'>*</span></label>
                                            <div class="col-sm-10">
	                                            <input type="text" id="gateway_charge" name="gateway_charge" class="form-control" placeholder="Gateway Charge" style="width:37%;display:inline;"/>
	                                            <input type="text" id="gateway_effective_date" name="gateway_effective_date" placeholder="Effective Date" class="form-control" style="width:60%;display:inline;" value="<?php echo date('d-m-Y'); ?>" />
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                          	</div>
	                          	<div class="row">
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-branch_name">
                                            <label class="control-label col-sm-5">Commission for Service %</label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="comm_ser" name="comm_ser"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                                <div class="col-lg-6 margin-bottom-5">
	                                	<div class="form-group" id="error-ifsc_code">
                                            <label class="control-label col-sm-5">Commission for Spare part %</label>
                                            <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="comm_spare" name="comm_spare"/>
											</div>
											<div class="messageContainer col-sm-10"></div>
                                        </div>
	                              	</div>
	                             </div>
	                      	</div>
	                  	</div>
	               	</div>
	        	</div>
				<div class="row">
					<div class="col-lg-12 margin-bottom-5 text-center">
					<div id="response"></div>
					<button type="submit" class="btn btn-success">Submit</button>
					</div>
			</div>
    </div>
	</div>  
	</div> 
	<div id="geodiv"></div>
	<br> <br>	
	</form>
</div>
</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo asset_url();?>js/selectize.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- <script src="<?php echo asset_url();?>js/select2.multicheckboxes.js"></script> -->

<script>
$(document).ready(function (){
	$("#map-canvas").hide();
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		  var target = $(e.target).attr("href") // activated tab
		  if(target=="#delivery")
		  {
			  showGEO();
		  }
		  else
		  {
			  $("#map-canvas").hide();
		  }
		});
	
});
	
$.getScript("https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&callback=initMap&key=AIzaSyCH-u-UD2bz6cfPEAe8mCVyrnnI7ONx9ro");
$.fn.datepicker.defaults.format = "dd-mm-yyyy";
$('#cycle_effective_date').datepicker().on('changeDate', function(ev){
	$('#updaterestaurant').bootstrapValidator('revalidateField', 'cycle_effective_date');
});
$('#gateway_effective_date').datepicker().on('changeDate', function(ev){
	$('#updaterestaurant').bootstrapValidator('revalidateField', 'gateway_effective_date');
});
/* $('#trial_start_date').datepicker().on('changeDate', function(ev){
	$('#addrestaurant').bootstrapValidator('revalidateField', 'trial_start_date');
});
$('#trial_end_date').datepicker().on('changeDate', function(ev){
	$('#addrestaurant').bootstrapValidator('revalidateField', 'trial_end_date');
});  */
$('.resttime').timepicker();
var cuisine = $("#cuisines").selectize({
    plugins: ['remove_button'],
    delimiter: ',',
    persist: false,
    create: function(input) {
        return {
            value: input,
            text: input
        }
    }
});

/*cuisine.on('change', function() {
	$('#addrestaurant').bootstrapValidator('revalidateField', 'cuisines[]');
});
*/

function initMap() {
	var options = {
	  	componentRestrictions: {country: 'in'}
	};
	var input =  document.getElementById('locality');
	var autocomplete = new google.maps.places.Autocomplete(input,options);
	autocomplete.addListener('place_changed', function() {
		var place = autocomplete.getPlace();
	    if (!place.geometry) {
	      window.alert("Autocomplete's returned place contains no geometry");
	      return;
	    }
	    $('#latitude').val(place.geometry.location.lat());
	    $('#longitude').val(place.geometry.location.lng());
		$('#addrestaurant').bootstrapValidator('revalidateField', 'locality');
		$('#addrestaurant').bootstrapValidator('revalidateField', 'latitude');
		$('#addrestaurant').bootstrapValidator('revalidateField', 'longitude');
		
	});
}

$("#cityid").change(function(){
	$.get(base_url+"admin/general/localities",{cityid: $("#cityid").val()},function(data){
		var html = "<option value=''>Select Area</option>";
		$.each( data, function( key, value ) {
		    html = html + "<option value='"+value.id+"'>"+value.name+"</option>";
		});	
		$("#areaid").html(html);
	},'json');
});

$("#is_trial").change(function(){
	if($(this).val() == 1) {
		$("#trial_dates").show();
		$('#addrestaurant').bootstrapValidator('enableFieldValidators', 'trial_start_date', true);
                $('#addrestaurant').bootstrapValidator('enableFieldValidators', 'trial_end_date', true);
	} else {
		$("#trial_dates").hide();
		$('#addrestaurant').bootstrapValidator('enableFieldValidators', 'trial_start_date', false);
                $('#addrestaurant').bootstrapValidator('enableFieldValidators', 'trial_end_date', false);
	}
});


$('#addrestaurant').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
  
    fields: {
  
		email: {
			validators: {
				notEmpty: {
					message: 'Email is required and cannot be empty'
				},
				regexp: {
					regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
					message: 'The value is not a valid email address'
				}	
			}
		},
		mobile: {
			validators: {
				notEmpty: {
					message: 'Mobile is required and cannot be empty'
				},
				regexp: {
					regexp: '^[7-9][0-9]{9}$',
					message: 'Invalid Mobile Number'
				}
			}
		},
		landline: {
			validators: {
				/*notEmpty: {
					message: 'Mobile is required and cannot be empty'
				},*/
				regexp: {
					regexp: '^[7-9][0-9]{9}$',
					message: 'Invalid Mobile Number'
				}
			}
		},
        name: {
            validators: {
                notEmpty: {
                    message: 'Vendor Name is required and cannot be empty'
                }
            }
        },
        garage_name: {
            validators: {
                notEmpty: {
                    message: 'Garage Name is required and cannot be empty'
                }
            }
        },
        address: {
            validators: {
                notEmpty: {
                    message: 'Address is required and cannot be empty'
                }
            }
        },
     
        pincode: {
            validators: {
                integer: {
                    message: 'Invalid pincode.'
           		},
           		stringLength: {
                    max: 6,
                    min: 6,
                    message: 'Invalid pincode.'
                },
            }
        },
        review: {
            validators: {
                notEmpty: {
                    message: 'Review is required and cannot be empty'
                }
            }
        },
       category_id: {
            validators: {
                notEmpty: {
                    message: 'Category is required and cannot be empty'
                }
            }
        }
		 
		/*
        model_id[]: {
            validators: {
                notEmpty: {
                    message: 'Model is required and cannot be empty'
                }
            }
        }
*/
        
    }
}).on('success.form.bv', function(event,data) {
	// Prevent form submission
	event.preventDefault();
	addRestaurant();
});





function addRestaurant() {
/* 	var vendor_id = document.getElementById("vendor_id").value;
	if(vendor_id)
{
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse,
	 		url : base_url+'admin/vendor/updatebasic',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#addrestaurant').ajaxSubmit(options);
	
} else { */
var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse,
	 		url : base_url+'admin/vendor/add',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#addrestaurant').ajaxSubmit(options);
}	
//}




function showAddRequest(formData, jqForm, options){
	$("#response").hide();
   	var queryString = $.param(formData);
	return true;
}
   	
function showAddResponse(resp, statusText, xhr, $form){
	$('button').removeAttr('disabled');
	if(resp.status == '0') {
		alert(resp.msg);
		 
		$("#response1").removeClass('alert-success');
       	$("#response1").addClass('alert-danger');
		$("#response1").html(resp.msg.name);
		$("#response1").show();
		// window.location.href = base_url+"admin/vendor/list";
  	} else {
		alert(resp.msg);
		
		$("#vendor_id").val(resp.id);
  		$("#response1").removeClass('alert-danger');
        $("#response1").addClass('alert-success');
        $("#response1").html(resp.msg);
        $("#response1").show();
       // window.location.href = base_url+"admin/vendor/list";
       $("#id").val(resp.id);
       list(resp.model_id);
       /* $('#basic').hide();
    	$('#basictab').removeClass('active');
    	$('#servicetab').addClass('active');
    	$('#servicing').show();*/
  	}
}

function xyz()
{
	$('#basic').hide();
	$('#basictab').removeClass('active');
	$('#servicetab').addClass('active');
	$('#servicing').show();
}
function list(id)
{
 //  alert("hiii");
 //  alert(id);
   $.post(base_url+"admin/vendor/new1", {model_id : id}, function(data) {
	   //$('#basic').hide();
		$('#basictab').removeClass('active');
		$('#servicetab').addClass('active');
		$('#servicing').show();
		//  $("#mainchk").empty();
	   	 //  $("#mainchk").html(data);
          });
}

$('#updaterestaurant').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
  
   locality: {
            validators: {
                notEmpty: {
                    message: 'locality is required and cannot be empty'
                }
            }
        },
	    billing_cycle: {
            validators: {
                notEmpty: {
                    message: 'Billing cycle is required and cannot be empty'
                }
            }
        },
        cycle_effective_date: {
            validators: {
                notEmpty: {
                    message: 'Effective cycle date is required'
                },
                date: {
                    format: 'DD-MM-YYYY',
                    message: 'Effective cycle date is not a valid'
                }
            }
        },
        /*    subcategory_id[]: {
            validators: {
                notEmpty: {
                    message: 'Subcategory is required and cannot be empty'
                }
            }
        },
        service_id[]: {
            validators: {
                notEmpty: {
                    message: 'Service is required and cannot be empty'
                }
            }
        },*/
        zone_id: {
            validators: {
                notEmpty: {
                    message: 'Zone is required and cannot be empty'
                }
            }
        },
       area_id: {
            validators: {
                notEmpty: {
                    message: 'Area is required and cannot be empty'
                }
            }
        },
        
    }
}).on('success.form.bv', function(event,data) {
	// Prevent form submission
	event.preventDefault();
	updateRestaurant();
});

function updateRestaurant() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse1,
	 		url : base_url+'admin/vendor/updateVen',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#updaterestaurant').ajaxSubmit(options);
}

function showAddRequest1(formData, jqForm, options){
	$("#response").hide();
   	var queryString = $.param(formData);
	return true;
}
   	
function showAddResponse1(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		alert(resp.message);
		$("#response").removeClass('alert-success');
       	$("#response").addClass('alert-danger');
		$("#response").html(resp.msg.name);
		$("#response").show();
		//window.location.href = base_url+"admin/vendor/list";
  	} else {
		alert(resp.msg);
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.msg);
        $("#response").show();
      window.location.href = base_url+"admin/vendor/list";
      
  	}
}
  
function addMoreSlabs() {
	var slabcount = parseInt($("#slabcount").val());
	slabcount++;
	var slab_html = '<tr id="slabrow'+slabcount+'">'+
					'<td><input type="text" name="lower_limit[]" class="form-control" placeholder="From Amount"/></td>'+
					'<td><input type="text" name="upper_limit[]" class="form-control" placeholder="To Amount"/></td>'+
					'<td><input type="text" name="from_rad[]" class="form-control" placeholder="From Radius"/></td>'+
					'<td><input type="text" name="to_rad[]" class="form-control" placeholder="To Radius"/></td>'+
					'<td><input type="text" name="charge[]" class="form-control" placeholder="Delivery Charge"/></td>'+
					'<td><a href="javascript:deleteSlab('+slabcount+');" class="btn btn-danger btn-sm">X</a></td>'+
					'</tr>';
	$("#del_slabs").append(slab_html);
	$("#slabcount").val(slabcount);
}

function deleteSlab(id){
	var slabcount = parseInt($("#slabcount").val());
	slabcount = slabcount - 1;
	$("#slabrow"+id).remove();
	$("#slabcount").val(slabcount);
}

function addMoreDelTime() {
	var timecount = parseInt($("#timecount").val());
	timecount++;
	var slab_html = '<tr id="timeslabrad'+timecount+'">'+
					'<td colspan=3><input type="text" name="from_time_rad[]" class="form-control" placeholder="From Radius"/></td>'+
					'<td colspan=3><input type="text" name="to_time_rad[]" class="form-control" placeholder="To Radius"/></td>'+
					'<td class="text-center"><a href="javascript:deleteDelTime('+timecount+');" class="btn btn-danger btn-sm">X</a></td>'+
				'</tr>'+
				'<tr id="timeslabtime'+timecount+'">'+
					'<td><input type="text" name="mon[]" class="form-control" placeholder="Monday"/></td>'+
					'<td><input type="text" name="tue[]" class="form-control" placeholder="Tuesday"/></td>'+
					'<td><input type="text" name="wed[]" class="form-control" placeholder="Wednesday"/></td>'+
					'<td><input type="text" name="thu[]" class="form-control" placeholder="Thursday"/></td>'+
					'<td><input type="text" name="fri[]" class="form-control" placeholder="Friday"/></td>'+
					'<td><input type="text" name="sat[]" class="form-control" placeholder="Saturday"/></td>'+
					'<td><input type="text" name="sun[]" class="form-control" placeholder="Sunday"/></td>'+
				'</tr>';
	$("#del_time").append(slab_html);
	$("#timecount").val(timecount);
}

function deleteDelTime(id){
	var timecount = parseInt($("#timecount").val());
	timecount = timecount - 1;
	$("#timeslabrad"+id).remove();
	$("#timeslabtime"+id).remove();
	$("#timecount").val(timecount);
}

function addMoreMov() {
	var movcount = parseInt($("#movcount").val());
	movcount++;
	var slab_html = '<tr id="movrow'+movcount+'">'+
					'<td><input type="text" name="from_mov_rad[]" class="form-control" placeholder="From Radius"/></td>'+
					'<td><input type="text" name="to_mov_rad[]" class="form-control" placeholder="To Radius"/></td>'+
					'<td><input type="text" name="amount[]" class="form-control" placeholder="MOV"/></td>'+
					'<td><a href="javascript:deleteMov('+movcount+');" class="btn btn-danger btn-sm">X</a></td>'+
					'</tr>';
	$("#del_mov").append(slab_html);
	$("#movcount").val(movcount);
}

function deleteMov(id){
	var movcount = parseInt($("#movcount").val());
	movcount = movcount - 1;
	$("#movrow"+id).remove();
	$("#movcount").val(movcount);
}
$("#cboCustomTime").change(function(){
        
      showCustomTime();
        
    });
    
    function showCustomTime(){
         if($("#cboCustomTime").val() == 1){
           $("#divCustomT").show();
           $("#divRegularT").hide();
        }else{
           $("#divCustomT").hide();
           $("#divRegularT").show();   
        }
    }
    function showGEO()
    {
        $("#map-canvas").show();
        successFunction($('#latitude').val(),$('#longitude').val(),$('#radius').val());
    }


    function change() 
    {
        var selectBox = document.getElementById("payment_mode");
        var selected = selectBox.options[selectBox.selectedIndex].value;
        var cheque = document.getElementById("bank");
        var cheque1 = document.getElementById("chk1");
        var mob_no1 = document.getElementById("mob");
        var wall1 = document.getElementById("wall");
       // alert(selected);
        if(selected === '2')
            {
          cheque.style.display = "block";
          cheque1.style.display = "block";
          mob_no1.style.display = "none";
          wall1.style.display = "none";
            }
        if(selected === '0')
        {
       cheque.style.display = "none";
       mob_no1.style.display = "none";
       wall1.style.display = "none";
        }
        if(selected === '3')
        {
       cheque.style.display = "none";
       mob_no1.style.display = "block";
       wall1.style.display = "block";
       //document.getElementById("mob_no").disabled=false;
        }
        if(selected === '1')
        {
        cheque.style.display = "block";
        cheque1.style.display = "none";
        mob_no1.style.display = "none";
        wall1.style.display = "none";
        }
           
    }
   
  /*  function show(elementId) { 
         alert(elementId);
    	 document.getElementById("basic").style.display="none";
    	 document.getElementById(elementId).style.display="block";
    } */

  /*  $(document).ready(function () {
        $('.nav li a').click(function(e) {

            $('.nav li.active').removeClass('active');

            var $parent = $(this).parent();
            $parent.addClass('active');
            e.preventDefault();
        });
    });

    $('#showservice').click(function(e) {
alert("inside");
        $('#basictab').removeClass('active');

        var parent = $('#servicetab');
       // parent.addClass('active');
        $('#servicetab a').addClass('active');
        $('#servicetab a').attr("aria-expanded","true");
        e.preventDefault();
    });*/

  
</script>
<script type="text/javascript">

$(document).ready(function(){
	  //Chosen
	 $("#brand_id").select2({
		 maxItems: 3
	  	})

	  	 $("#model_id").select2({
			 maxItems: 3
		  	})
		  	
	  
	}); 
	
</script>
<script>
$(document).ready(function(){    
    /*	$("#model_id").change(function() 
    			{
    		var model_id =  $('#model_id').val();       
    			console.log(model_id);	    
    			  $.post(base_url+"admin/vendor/new", {model_id : model_id}, function(data)
    					  {
				
    	               });   
                   });*/

    	$("#category_id").change(function() {
    		var cat_id =  $('#category_id').val();       
    			console.log(cat_id);	    
    			  $.post(base_url+"admin/brandbycatid/", {cat_id : cat_id}, function(data)
    					  {
    				  $('#brand_id').empty();
    				//  $('#brand_id').empty();$('#brand_id').append("<option value=''>"+'Select Brand'+"</option>");		    
    			   if(data.length > 0)
    				   {	
    				   $('#brand_id').html("");		    
    				     for( var i=0; i < data.length; i++)
    					     {		   			    
    					           $('#brand_id').append("<option data-targetname="+data[i].name+" value='"+data[i].id+"'>"+data[i].name+"</option>");			
    					            }	    
    			              }	   
    	               },'json');   
                   });

    	$("#brand_id").change(function() {
    		var brand_id =  $('#brand_id').val();       
    			console.log(brand_id);	
    			 $.post(base_url+"admin/modelbybrandid1/", {brand_id : brand_id}, function(data){
    				  $('#model_id').empty();
    				//  $('#model_id').append("<option value=''>"+'Select Model'+"</option>");
    				 // $('#model_id').append("<input type='button' id='select_all' name='select_all' value='Select All'>");		    
		    			   if(data.length > 0){		
$('#model_id').html("");						   
		    				     for( var i=0; i < data.length; i++)
		    					     {		
		    					         //  $('#model_id').append("<optgroup label="+data[i].brand_name+">");      			    
		    					           $('#model_id').append("<option value='"+data[i].id+"'>"+data[i].name+"("+data[i].brand_name+")</option>");
		    					          // $('#model_id').append("</optgroup>");
		    					     }   
								$("#model_id").select2({
							maxItems: 3
							})	 
		    			       }
    	               },'json');   
                   });
});

</script>
<script>
            $(function(){
                $("#treecheck").almightree({search: "#box"});
            });
        </script>
      
<script>
	        $("#category_id1").change(function(){
	        	jQuery.noConflict();
				alert("Mouse down event");
				var cat_id =  $('#category_id').val();
					var html = "";
					//ajaxindicatorstart("Loading...");
					 $.post(base_url+"admin/brandbycatid/", {cat_id : cat_id}, function(data)
	    					  {
						 $('#brand_id').empty();$('#brand_id').append("<option value=''>"+'Select Brand'+"</option>");		    
		    			   if(data.length > 0)
		    				   {		    
		    				     for( var i=0; i < data.length; i++)
		    					     {		   			    
		    					         	 // $('#brand_id').append("<option data-targetname="+data[i].name+" value='"+data[i].id+"'>"+data[i].name+"</option>");			
										html = html + "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
										
	    					            }
       							}	 
		    				  $("#brand_id").multiselect({
		    					   selectAll: true
		    					});
		    				  $("#brand_id").html(html);
		    				   },'json'); 
  	                
				 });
      
</script>

<script>
	$('#select_all').click(function() {
	    $('#model_id option').prop('selected', true);
		 $("#model_id").trigger("change");
	});

	$('#select_all2').click(function() {
	    $('#brand_id option').prop('selected', true);
		$("#brand_id").trigger("change");
	});
	
	
</script> 