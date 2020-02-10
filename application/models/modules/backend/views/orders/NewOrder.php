<style>
<!--
.margin-bottom-5 {
	margin-bottom: 5px;
}
-->
</style>
<link href="<?php echo asset_url();?>css/datepicker3.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css">

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3>Add New Order</h3>
		</div>
	</div>
	<form id="addorder" name="addorder" action="" method="post" enctype="multipart/form-data">
		<div class="tab-content">
		  	<div id="basic" class="tab-pane fade in active">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<input type="hidden" name="item[userid]" id="userid" value=""/>
							    <input type="hidden" name="item[latitude]" id="latitude" value=""/>
							    <input type="hidden" name="item[longitude]" id="longitude" value=""/>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Customer Mobile<span class='text-danger'>*</span></label>
											<input type="text" class="form-control" name="item[mobile]" id="mobile" autocomplete="off"/>
										</div>
										<div class="messageContainer"></div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Customer Name<span class='text-danger'>*</span></label>
											<input type="text" class="form-control" name="item[name]" id="name" autocomplete="off" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"/>
										</div>
										<div class="messageContainer"></div>
									</div>
								  </div>
								  
								  <div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Customer Email<span class='text-danger'>*</span></label>
											<input type="text" class="form-control" name="item[email]" id="email" autocomplete="off"/>
										</div>
										<div class="messageContainer"></div>
									</div> 
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Customer Area<span class='text-danger'>*</span></label>
											<input type="text" class="form-control" name="item[landmark]" id="landmark" onkeyup="checkLatlng(this.value)" />
										</div>
										<div class="messageContainer"></div>
									</div>
								  </div>
								  
								<div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Category<span class='text-danger'>*</span></label>
											<select name="item[category_id]" id="category_id" class="form-control">
													<option value=""> Select Category </option>
													<?php foreach ($categories as $category) { ?>
													<option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
													<?php } ?>
												</select>
												
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Brand<span class='text-danger'>*</span></label>
											<select name="item[brand_id]" id="brand_id" class="form-control">
													<option value=""> Select Brand </option>													
											</select>
										</div>
										<div class="messageContainer"></div>
									</div>
								
                                </div>
                                
                                        <div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Model<span class='text-danger'>*</span></label>
											<select name="item[model_id]" id="model_id" class="form-control">
													<option value=""> Select Model</option>	
												</select>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-md-6">
												<div class="form-group" id="error-name">
											<label class="control-label">Subcategory<span class='text-danger'>*</span></label>
											<select name="subcategory_id[]" id="subcategory_id" class="form-control" multiple="true">
											 echo '<optgroup label="">';
													<option value=""> Select Subcategory</option>	
													 echo "</optgroup>";												
											</select>
										</div>
										<div class="messageContainer"></div>
									</div>
								
                                </div>
								  
								   
								<div class="row">
									<div class="col-md-6">
												<div class="form-group" id="error-name">
											<label class="control-label">Service<span class='text-danger'></span></label>
											<select name="service_id[]" id="service_id" class="form-control" multiple="true">
											 echo '<optgroup label="">';
													<option value=""> Select Service</option>	
													 echo "</optgroup>";												
											</select>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Pickup Date<span class='text-danger'>*</span></label>
											<input type="text" class="form-control" name="item[pickup_date]" id="pickup_date" autocomplete="off" value="<?php echo date('d-m-Y'); ?>" />

										</div>
										<div class="messageContainer"></div>
									</div>
							
								</div>
									
									<div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Assign Visit Slot<span class='text-danger'>*</span></label>
											<select name="item[slot]" id="slot" class="form-control">
										        	<option value=""> Select Slot</option>
													<?php foreach ($visitingslots as $slot) { ?>
													<option value="<?php echo $slot[time_slot];?>"><?php echo $slot['time_slot'];?></option>
													<?php } ?>
												</select>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Comment<span class='text-danger'>*</span></label>
											<input type="text" class="form-control" name="item[comment]" id="comment" autocomplete="off"/>
										</div>
										<div class="messageContainer"></div>
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
		</div>
		<div id="response"></div>
		
	</form>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap-datepicker.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>

<script>
var nowDate = new Date();
var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
$.fn.datepicker.defaults.format = "dd-mm-yyyy";
$.fn.datepicker.defaults.startDate = today;
$('#pickup_date').datepicker().on('changeDate', function(e) {
	$('#addorder').bootstrapValidator('revalidateField', 'item[pickup_date]');
});

$('#addorder').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('div.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    	'item[mobile]': {
            validators: {
            	notEmpty: {
                    message: 'The Mobile is required and cannot be empty'
                },
                regexp: {
                    regexp: '^[7-9][0-9]{9}$',
                    message: 'Invalid Mobile Number'
                }
            }
        },
        'item[name]': {
            validators: {
                notEmpty: {
                    message: 'Name is required and cannot be empty'
                }
            }
        },
        'item[email]': {
            validators: {
            	notEmpty: {
                    message: 'The Email is required and cannot be empty'
                },
                regexp: {
                    regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                    message: 'The value is not a valid email address'
                }
            }
        },
     
        'item[landmark]': {
            validators: {
                notEmpty: {
                    message: 'Landmark is required and cannot be empty'
                }
            }
        },
       'item[slot]': {
            validators: {
                notEmpty: {
                    message: 'Slot is required and cannot be empty'
                }
            }
        },
        'item[comment]': {
            validators: {
                notEmpty: {
                    message: 'Comment is required and cannot be empty'
                }
            }
        },
        'item[category_id]': {
            validators: {
                notEmpty: {
                    message: 'Category is required and cannot be empty'
                }
            }
        },
        'item[brand_id]': {
            validators: {
                notEmpty: {
                    message: 'Brand is required and cannot be empty'
                }
            }
        },
        'item[model_id]': {
            validators: {
                notEmpty: {
                    message: 'Model is required and cannot be empty'
                }
            }
        },
     
    }
}).on('success.form.bv', function(event,data) {
	// Prevent form submission
	event.preventDefault(); 
 
	var lat = $('#latitude').val();
	var lng = $('#longitude').val();

	if(lat=="" || lng==""){
		$('button').removeAttr('disabled'); 
		$("#response").removeClass('alert-success');
	    $("#response").addClass('alert-danger');
		$("#response").html('Please select landmark from autosuggestion.'); 

		setTimeout(function(){
			$('#response').html('');
		}, 2000);

	} else{
		addBooking(); 
	}

});

function addBooking() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse,
	 		url : base_url+'admin/order/add',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#addorder').ajaxSubmit(options);
}

function showAddRequest(formData, jqForm, options){
	$("#response").hide();
	ajaxindicatorstart("Please hang on.. while we add order ..");
   	var queryString = $.param(formData);
	return true;
}
   	
function showAddResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == '0') {
		$("#response").removeClass('alert-success');
       	$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
  	} else {
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.msg);
        $("#response").show();
        alert(resp.msg);
       // window.location.href = base_url+"admin/order/pendingorders";
  	}
}

function checkLatlng(land){
 		$('#latitude').val('');
		$('#longitude').val('');
 	}

$.getScript("//maps.googleapis.com/maps/api/js?v=3.exp&key=<?php echo $google_map_key;?>&libraries=places&sensor=false&callback=initMap");

function initMap() {
	var options = {
	  	componentRestrictions: {country: 'in'}
	};

	var input =  document.getElementById('landmark');

	var autocomplete = new google.maps.places.Autocomplete(input,options);
	autocomplete.addListener('place_changed', function() {
		var place = autocomplete.getPlace();
	    if (!place.geometry) {
	      window.alert("Autocomplete's returned place contains no geometry");
	      return;
	    }
	    $('#latitude').val(place.geometry.location.lat());
	    $('#longitude').val(place.geometry.location.lng());
	});
}

$("#mobile").typeahead({
    onSelect: function(item) {
        itemvalue = item.value;
        $.get(base_url+"admin/user/detail/"+item.value,{},function(result){
			$("#email").val(result.email);
			$("#address").val(result.address);
			$("#areaid").val(result.area);
			$("#name").val(result.name);
			$("#landmark").val(result.loc);
			$("#latitude").val(result.latitude);
			$("#longitude").val(result.longitude);
			$("#userid").val(result.id);
			$('#addorder').bootstrapValidator('revalidateField', 'item[email]');
			$('#addorder').bootstrapValidator('revalidateField', 'item[mobile]');
        },'json');
    },
    ajax: {
        url: base_url+"admin/user/bymobile",
        timeout: 500,
        displayField: "mobile",
        triggerLength: 3,
        method: "get",
        loadingClass: "loading-circle",
        preDispatch: function (query) {
            return {
            	name: query
            }
        },
        preProcess: function (data) {
            if (data.success === false) {
                return false;
            }
            return data;
        }
    }
    
});	
$("#email").typeahead({
    onSelect: function(item) {
        itemvalue = item.value;
        $.get(base_url+"admin/user/detail/"+item.value,{},function(result){
			$("#mobile").val(result.mobile);
			$("#address").html(result.address);
			$("#areaid").val(result.area);
			$("#name").val(result.name);
			$("#landmark").val(result.loc);
			$("#latitude").val(result.latitude);
			$("#longitude").val(result.longitude);
			$("#userid").val(result.id);
			$('#addorder').bootstrapValidator('revalidateField', 'item[email]');
			$('#addorder').bootstrapValidator('revalidateField', 'item[mobile]');
        },'json');
    },
    ajax: {
        url: base_url+"admin/user/byemail",
        timeout: 500,
        displayField: "email",
        triggerLength: 3,
        method: "get",
        loadingClass: "loading-circle",
        preDispatch: function (query) {
            return {
            	name: query
            }
        },
        preProcess: function (data) {
            if (data.success === false) {
                return false;
            }
            return data;
        }
    }
    
});	

$("#name").typeahead({
    onSelect: function(item) {
        itemvalue = item.value;
        $.get(base_url+"admin/user/detail/"+item.value,{},function(result){
			$("#mobile").val(result.mobile);
			$("#address").html(result.address);
			$("#areaid").val(result.area);
			$("#email").val(result.email);
			$("#landmark").val(result.loc);
			$("#latitude").val(result.latitude);
			$("#longitude").val(result.longitude);
			$("#userid").val(result.id);
			$('#addorder').bootstrapValidator('revalidateField', 'item[email]');
			$('#addorder').bootstrapValidator('revalidateField', 'item[mobile]');
        },'json');
    },
    ajax: {
        url: base_url+"admin/user/byname",
        timeout: 500,
        displayField: "name",
        triggerLength: 3,
        method: "get",
        loadingClass: "loading-circle",
        preDispatch: function (query) {
            return {
            	name: query
            }
        },
        preProcess: function (data) {
            if (data.success === false) {
                return false;
            }
            return data;
        }
    }
    
});	 


$(document).ready(function(){    
    	$("#model_id").change(function() 
    			{
    		var model_id =  $('#model_id').val();       
    			console.log(model_id);	    
    			  $.post(base_url+"admin/subcategorybycatid", {model_id : model_id}, function(data)
    					  {
    				 

				      $('#subcategory_id').select2('val',''); 
				      $('#subcategory_id').html('');  

				      $('#service_id').select2('val',''); 
				      $('#service_id').html(''); 
				      
    			   if(data.length > 0)
    				   {		    
    				     for( var i=0; i < data.length; i++)
    					     {		   			    
    					           $('#subcategory_id').append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");			
    					            }	    
    			              }	   
    	               },'json');     
                   });

    	$("#category_id").change(function() 
    			{
    		var cat_id =  $('#category_id').val();       
     			  $.post(base_url+"admin/brandbycatid/", {cat_id : cat_id}, function(data)
    					  {
    				  $('#brand_id').empty();$('#brand_id').append("<option value=''>"+'Select Brand'+"</option>");	
    				  $('#model_id').empty();$('#model_id').append("<option value=''>"+'Select Model'+"</option>");	 

				      $('#subcategory_id').select2('val',''); 
				      $('#subcategory_id').html('');  

				      $('#service_id').select2('val',''); 
				      $('#service_id').html('');  	    
    			   if(data.length > 0)
    				   {		    
    				     for( var i=0; i < data.length; i++)
    					     {		   			    
    					           $('#brand_id').append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");			
    					            }	    
    			              }	   
    	               },'json');   
                   });

    	$("#brand_id").change(function() 
    			{
    		var brand_id =  $('#brand_id').val();       
    			console.log(brand_id);	
    			 $.post(base_url+"admin/modelbybrandid1/", {brand_id : brand_id}, function(data)
    					  {
    				  $('#model_id').empty();$('#model_id').append("<option value=''>"+'Select Model'+"</option>");	

				      $('#subcategory_id').select2('val',''); 
				      $('#subcategory_id').html('');  

				      $('#service_id').select2('val',''); 
				      $('#service_id').html('');  	    	    
    			   if(data.length > 0)
    				   {		    
    				     for( var i=0; i < data.length; i++)
    					     {		
    					           $('#model_id').append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");
    					          // $('#model_id').append("</optgroup>");
    					   		
    					     }    
    			       }	   
    	               },'json');   
                   });

     	$("#subcategory_id").change(function() 
    			{
    		var subcat_id =  $('#subcategory_id').val();       
    			console.log(brand_id);	
    			  //$.post(base_url+"admin/servicebycatid1/", {subcat_id : subcat_id}, function(data)
    				$.post(base_url+"admin/catsubcatbyid1", {subcat_id : subcat_id}, function(data)
    					  {
    				   $('#service_id').select2('val',''); 
				       $('#service_id').html('');  

    			   if(data.length > 0)
    				   {		    
    				     for( var i=0; i < data.length; i++)
    					     {		
    					           $('#service_id').append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");
    					          // $('#model_id').append("</optgroup>");
    					   		
    					     }    
    			       }	   
    	               },'json');   
                   });
        });
</script>

<script>
$(document).ready(function(){
	  //Chosen
	 $("#subcategory_id").select2({
		 maxItems: 3
	  	})

	  	 $("#service_id").select2({
		 maxItems: 3
	  	})

	});
</script>