<style>
.check{
  width:auto !important;
  margin: -8px 20px 0 !important;
}
.check1{
  width:auto !important;
  margin: -8px 20px 0 !important;
}
.chk{
	display: -webkit-box !important;
}
.accessinput{
    border: none !important;
 }
</style>
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/selectize.bootstrap3.css">
	
	<form id="addcategory" name="addcategory" action="" method="post" enctype="multipart/form-data">
			<div id="basic" class="tab-pane fade in active">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Role<span class='text-danger'>*</span></label>
											<input type="text" class="form-control" id="name" name="name" />
										</div>
										<div class="messageContainer"></div>
									</div>
									
										<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Status <span class='text-danger'>*</span></label>
											<select id="status" class="form-control" name="status">
												<option value="1">Enable</option>
												<option value="0">Disable</option>
											</select>
										</div>
										<div class="messageContainer"></div>
									</div>
									 
                                </div>
                                
                           <div class="row">
	                <div class="col-lg-12">
	                <label class="control-label">Assign form to role<span class='text-danger'>*</span></label><br/><br/>
	                    <div class="panel panel-default">
	                        <div class="panel-body">
	                          
	                          	<table class="table table-striped table-bordered table-hover">
					                        <thead class="bg-info">
					                            <tr class="">
					                                <th class="">Name</th>
					                                <th class="">Edit</th>
					                                <!--<th class="">View</th>-->
					                                <th class="">No Access</th>
					                            </tr>
					                        </thead>
					
					                        <tbody>
					                            <tr class="">
					                                <td class=""><input type="hidden" name="accessname[]" class="accessinput" Value="1">Order Mgmt.
					                               				 <input type="hidden" name="menuname1" Value="Order Mgmt"></td>
					                                <td class=""><input id="checkbox1" value="1" name="access_type1" type="radio"></td>
					                                <!--<td class=""><input id="checkbox1" value="2" name="access_type1" type="radio"></td>-->
					                                <td class=""><input id="checkbox1" value="3" name="access_type1" type="radio"></td>
					                            </tr>
					                            <tr class="">
					                                <td class=""><input type="hidden" name="accessname[]" class="accessinput" Value="2">Setting
					                               				<input type="hidden" name="menuname2" Value="Setting"></td>
					                                <td class=""><input id="checkbox1" value="1" name="access_type2" type="radio"></td>
					                                <!--<td class=""><input id="checkbox1" value="2" name="access_type2"  type="radio"></td>-->
					                                <td class=""><input id="checkbox1" value="3" name="access_type2" type="radio"></td>
					                            </tr>
					                            <tr class="">
					                                <td class=""><input type="hidden" name="accessname[]" class="accessinput" Value="3">Vendor
					                                		    <input type="hidden" name="menuname3" Value="Vendor"></td>
					                                <td class=""><input id="checkbox1" value="1" name="access_type3" type="radio"></td>
					                               <!-- <td class=""><input id="checkbox1" value="2" name="access_type3" type="radio"></td>-->
					                                <td class=""><input id="checkbox1" value="3" name="access_type3" type="radio"></td>
					                            </tr>
					                            <tr class="">
					                                <td class=""><input type="hidden" name="accessname[]" class="accessinput" Value="4">Marketing
					                                			 <input type="hidden" name="menuname4" Value="Marketing"></td>
					                                <td class=""><input id="checkbox1" value="1" name="access_type4" type="radio"></td>
					                              <!--  <td class=""><input id="checkbox1" value="2" name="access_type4" type="radio"></td>-->
					                                <td class=""><input id="checkbox1" value="3" name="access_type4" type="radio"></td>
					                            </tr>
					                            <tr class="">
					                                <td class=""><input type="hidden" name="accessname[]" class="accessinput" Value="5">Tickets
					                                			 <input type="hidden" name="menuname5" Value="Tickets"></td>
					                                <td class=""><input id="checkbox1" value="1" name="access_type5" type="radio"></td>
					                                <!--<td class=""><input id="checkbox1" value="2" name="access_type5" type="radio"></td>-->
					                                <td class=""><input id="checkbox1" value="3" name="access_type5" type="radio"></td>
					                            </tr>
					                            <tr class="">
					                                <td class=""><input type="hidden" name="accessname[]" class="accessinput" Value="6">Reports
					                                			 <input type="hidden" name="menuname6" Value="Reports"></td>
					                                <td class=""><input id="checkbox1" value="1" name="access_type6" type="radio"></td>
					                              <!--  <td class=""><input id="checkbox1" value="2" name="access_type6" type="radio"></td>-->
					                                <td class=""><input id="checkbox1" value="3" name="access_type6" type="radio"></td>
					                            </tr>
					                            <tr class="">
					                                <td class=""><input type="hidden" name="accessname[]" class="accessinput" Value="7">Customers
					                                			 <input type="hidden" name="menuname7" Value="Customers"></td>
					                                <td class=""><input id="checkbox1" value="1" name="access_type7" type="radio"></td>
					                               <!-- <td class=""><input id="checkbox1" value="2" name="access_type7" type="radio"></td>-->
					                                <td class=""><input id="checkbox1" value="3" name="access_type7" type="radio"></td>
					                            </tr>
					                            <tr class="">
					                                <td class=""><input type="hidden" name="accessname[]" class="accessinput" Value="8">Employee
					                                			 <input type="hidden" name="menuname8" Value="Employee"></td>
					                                <td class=""><input id="checkbox1" value="1" name="access_type8" type="radio"></td>
					                               <!-- <td class=""><input id="checkbox1" value="2" name="access_type8" type="radio"></td>-->
					                                <td class=""><input id="checkbox1" value="3" name="access_type8" type="radio"></td>
					                            </tr>
					                        </tbody>
					             </table>
	                          	<!--  <div id="treecheck">							
                                   <ul class="home-second-menu clearfix">
                                   <?php  foreach ($forms as $form) { ?>
					                 <li class="chk">
									<input type="checkbox" class="form-control check" value="<?php echo $form['id'];?>" id="form" name="form[]" /><?php echo $form['name'];?>
									
									<ul>
								
									<li class="chk"><input type="checkbox" class="form-control check" value="yes" id="write" name="write<?php echo trim($form['id']);?>" />Write</li>
									<li class="chk"><input type="checkbox" class="form-control check" value="yes" id="edit" name="edit<?php echo trim($form['id']);?>" />Edit</li>
									<li class="chk"><input type="checkbox" class="form-control check" value="yes" id="view" name="view<?php echo trim($form['id']);?>" />View</li>
									
									</ul>
									
									
									</li>	
								   <?php } ?>			
									</ul>
								</div>-->
	                                
	                          	</div>
	                      	</div>
	                  	</div>
	               	</div>
								 <div class="text-center">
									<div id="response"></div>
									<button type="submit" class="btn btn-success">Submit</button>
									<br>
								 </div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</form>
		
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo asset_url();?>js/selectize.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>

<script>
$('#addcategory').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
        name: {
            validators: {
                notEmpty: {
                    message: 'Role is required and cannot be empty'
                }
            }
        },
        status: {
            validators: {
                notEmpty: {
                    message: 'Status is required and cannot be empty'
                }
            }
        },
       
    }
}).on('success.form.bv', function(event,data) {
	// Prevent form submission
	event.preventDefault();
	addCategory();
});

function addCategory() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse,
	 		url : base_url+'admin/role/add',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#addcategory').ajaxSubmit(options);
}

function showAddRequest(formData, jqForm, options){
	$("#response").hide();
   	var queryString = $.param(formData);
	return true;
}
   	
function showAddResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		$("#response").removeClass('alert-success');
       	$("#response").addClass('alert-danger');
		$("#response").html(resp.msg.name);
		$("#response").show();
  	} else {
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.msg);
        $("#response").show();
        alert(resp.msg);
        window.location.href = base_url+"admin/mainemp";
  	}
}
</script>