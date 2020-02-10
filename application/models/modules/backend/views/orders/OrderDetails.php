<link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet" type="text/css">
<style>
<!--
.btn-plus{
	margin:5px 0px;
}
.panel-body> div[class^="col-sm-"], div[class*=" col-sm-"] {
	padding-bottom:5px;
}
.modal-header {
	background-color:#337ab7;
	color:#fff;
}
.datepicker-dropdown {
	z-index:1050 !important;
}
#customer_name_edit {
	width:200px;
}
#customer_email_edit {
	width:200px;
}
-->
.m1
{
  max-width:800px;
  margin:60px auto;
}

.pqr
{
  width:90%;
  margin-bottom:0;
}

.itemname
{
  max-width:102% !important;
  width:102% !important;
}

.dropdown-menu li > a {
    font-size: 14px !important;
    width: 300px !important;
}
.typeahead{
	width: 300px !important;
}
</style>
<div id="page-wrapper" style="padding:5px 16px;">
	<div class="row">
		<div class="col-lg-7" style="padding:0px 5px;">
        	<div class="panel panel-default">
            	<div class="panel-heading">
                	<b>Order Details</b>
                	<!--<a href="" role="button" class="btn" data-toggle="modal" style="margin-top: 5px;margin-left:342px;" onclick="openInNewTab('<?php echo base_url();?>admin/order/view_details1/<?php echo $order['orderid'];?>');">Profile History</a>-->
              	</div>
               	<div class="panel-body">
               		<div class="row">
	               		<div class="col-sm-5">
	               			<b>ORDER ID</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<?php echo $order['orderid'];?>
	               		</div>
               		</div>
               		<div class="row">
	               		<div class="col-sm-5">
	               			<b>ORDER CODE</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<?php echo $order['ordercode'];?>
	               		</div>
	               	</div>
	               	<div class="row">
	               		<div class="col-sm-5">
	               			<b>Coupon Code</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<?php if(!empty($order['coupon_code'])) { echo $order['coupon_code'];} else { echo "NA";}?>
	               		</div>
	               	</div>
	               	<div class="row">
	               		<div class="col-sm-5">
	               			<b>Customer Name</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<span id="customer_name_lbl"><?php echo $order['name'];?> &nbsp;<a class="btn btn-xs btn-info" href="javascript:editCustomerName();"><i class="fa fa-pencil"></i></a></span>
	               			<span id="customer_name_input" style="display:none;"><input name="customer_name_edit" id="customer_name_edit" value="<?php echo $order['name'];?>" > &nbsp;&nbsp;<a href="javascript:updateCustomerName(<?php echo $order['orderid'];?>);" class="btn btn-sm btn-primary" >Update</a></span>
	               		</div>
	               	</div>
	               	<div class="row">
	               		<div class="col-sm-5">
	               			<b>Customer Email</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<span id="customer_email_lbl"><?php echo $order['email'];?> &nbsp;<a class="btn btn-xs btn-info" href="javascript:editCustomerEmail();"><i class="fa fa-pencil"></i></a></span>
	               			<span id="customer_email_input" style="display:none;"><input name="customer_email_edit" id="customer_email_edit" value="<?php echo $order['email'];?>" > &nbsp;&nbsp;<a href="javascript:updateCustomerEmail(<?php echo $order['orderid'];?>);" class="btn btn-sm btn-primary" >Update</a></span>
	               		</div>
	               	</div>
	               	<div class="row">
	               		<div class="col-sm-5">
	               			<b>Customer Mobile</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<span id="customer_mobile_lbl"><?php echo $order['mobile'];?> &nbsp;<a class="btn btn-xs btn-info" href="javascript:editCustomerMobile();"><i class="fa fa-pencil"></i></a></span>
	               			<span id="customer_mobile_input" style="display:none;"><input name="customer_mobile_edit" id="customer_mobile_edit" value="<?php echo $order['mobile'];?>" > &nbsp;&nbsp;<a href="javascript:updateCustomerMobile(<?php echo $order['orderid'];?>);" class="btn btn-sm btn-primary" >Update</a></span>
	               		</div>
	               	</div>
	               	<div class="row">
	               		<div class="col-sm-5">
	               			<b>PinLocation</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<?php echo $order['locality'];?>, <?php echo $order['latitude'];?>, <?php echo $order['longitude'];?>
	               		</div>
               		</div>
	               	<div class="row">
	               		<div class="col-sm-5">
	               			<b>Address</b>
	               		</div>
	               		
	               		<div class="col-sm-7">
	               			<span id="customer_address_lbl"><?php echo $order['address'];?> &nbsp;<a class="btn btn-xs btn-info" href="javascript:editCustomerAddress();"><i class="fa fa-pencil"></i></a></span>
	               			<span id="customer_address_input" style="display:none;"><textarea name="customer_address_edit" id="customer_address_edit" ><?php echo $order['address'];?></textarea> &nbsp;&nbsp;<a href="javascript:updateCustomerAddress(<?php echo $order['orderid'];?>);" class="btn btn-sm btn-primary" style="vertical-align: top;">Update</a></span>
	               		</div>
	               	</div>
	               	<div class="row">
	               		<div class="col-sm-5">
	               			<b>Landmark</b>
	               		</div>
	               		
	               		<div class="col-sm-7">
	               			<span id="customer_landmark_lbl"><?php echo $order['landmark'];?> &nbsp;<a class="btn btn-xs btn-info" href="javascript:editCustomerLandmark();"><i class="fa fa-pencil"></i></a></span>
	               			<span id="customer_landmark_input" style="display:none;"><textarea name="customer_landmark_edit" id="customer_landmark_edit" ><?php echo $order['landmark'];?></textarea> &nbsp;&nbsp;<a href="javascript:updateCustomerLandmark(<?php echo $order['orderid'];?>);" class="btn btn-sm btn-primary" style="vertical-align: top;">Update</a></span>
	               		</div>
	               	</div>
	               	<div class="row">
	               		<div class="col-sm-5">
	               			<b>Service Date</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<span id="pickup_date_lbl"><?php echo date('j M Y',strtotime($order['pickup_date']));?> &nbsp;<a class="btn btn-xs btn-info" href="javascript:editPickupDate();"><i class="fa fa-pencil"></i></a></span>
	               			<span id="pickup_date_input" style="display:none;"><input name="pickup_date_edit" id="pickup_date_edit" value="<?php echo date('d-m-Y',strtotime($order['pickup_date']));?>" class="datepicker"> &nbsp;&nbsp;<a href="javascript:updatePickupDate(<?php echo $order['orderid'];?>);" class="btn btn-sm btn-primary" >Update</a></span>
	               		</div>
	               	</div>
	               	<div class="row">
	               		<div class="col-sm-5">
	               			<b>Visiting Slot</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<span id="pickup_slot_lbl"><?php echo $order['slot'];?> &nbsp;<a class="btn btn-xs btn-info" href="javascript:editPickupSlot();"><i class="fa fa-pencil"></i></a></span>
	               			<span id="pickup_slot_input" style="display:none;">
	               				<select name="pickup_slot_edit" id="pickup_slot_edit" class="">
									<option value=""> Select Visiting Slot </option>
									<?php foreach ($visitingslots as $row) { ?>
									<option value="<?php echo $row['time_slot'];?>" <?php if($order['slot'] == $row['time_slot']) {?>selected<?php }?>><?php echo $row['time_slot'];?></option>
									<?php } ?>
								</select>
	               			&nbsp;&nbsp;<a href="javascript:updatePickupSlot(<?php echo $order['orderid'];?>);" class="btn btn-sm btn-primary" >Update</a></span>
	               			<?php if($order['status'] <= 1) { ?>
	               			<div class="pull-right"><a href="#reSchedulePickup" role="button" data-toggle="modal" onclick="updateSlotsPick();">Re-Schedule</a></div>
	               			<?php } ?>
	               		</div>
	               	</div>
	           <!--     	<?php //if(!empty($order['delivery_date'])) { ?>
               		<div class="row">
	               		<div class="col-sm-5">
	               			<b>Delivery Date</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<span id="delivery_date_lbl"><?php // echo date('j M Y',strtotime($order['delivery_date']));?> &nbsp;<a class="btn btn-xs btn-info" href="javascript:editDeliveryDate();"><i class="fa fa-pencil"></i></a></span>
	               			<span id="delivery_date_input" style="display:none;"><input name="delivery_date_edit" id="delivery_date_edit" value="<?php echo date('d-m-Y',strtotime($order['delivery_date']));?>" class="datepicker"> &nbsp;&nbsp;<a href="javascript:updateDeliveryDate(<?php echo $order['orderid'];?>);" class="btn btn-sm btn-primary" >Update</a></span>
	               		</div>
	               	</div>
               		<?php // } ?> -->
               		<div class="row">
	               		<div class="col-sm-5">
	               			<b>Category</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<?php echo $order['category'];?>
	               		</div>
               		</div>
               		<div class="row">
	               		<div class="col-sm-5">
	               			<b>Brand</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<?php echo $order['brand'];?>
	               		</div>
               		</div>
               		<div class="row">
	               		<div class="col-sm-5">
	               			<b>Model</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<?php echo $order['model'];?>
	               		</div>
               		</div>
               		<div class="row">
	               		<div class="col-sm-5">
	               			<b>Service</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<?php echo $order['subcategory'];?>
	               		</div>
               		</div>
               		<div class="row">
	               		<div class="col-sm-5">
	               			<b>Category of Subcategory</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<?php //echo $order['catsubcat_id'];?>
	               			<?php if(!empty($order['catsubcat_id'])) { foreach($catofsubcat as $pro) {?>
							<?php 
									$commaseparatedlist = explode(',',$order['catsubcat_id']); ?>
								<?php if (in_array($pro['id'], $commaseparatedlist)) { ?> <?php echo $pro['name'] ?>,<?php } ?>
							<?php  } } ?>
	               		</div>
               		</div>
               		<div class="row">
	               		<div class="col-sm-5">
	               			<b>Comment of User</b>
	               		</div>
	               		<div class="col-sm-7">
	               			<?php echo $order['comment'];?>
	               		</div>
               		</div>
               		<!-- <div class="row">
               			<div class="col-sm-5">
	               			<b>User Wallet Balance</b>
	               		</div>
	               		<div class="col-sm-7">
	               			Rs. <?php echo $wallet[0]['amount'];?>
	               		</div>
               		</div>
               		<div class="row">
               			<div class="col-sm-5">
	               			<b>User Outstanding Amount</b>
	               		</div>
	               		<div class="col-sm-7">
	               			Rs. <?php echo $order['outstanding'];?>
	               		</div>
               		</div>-->
				</div>
			 	<?php if($order['status'] > 1) { ?>
			<div class="panel panel-default">
			<form action="" method="post" name="approvalUpdate" id="approvalUpdate" >
            	<div class="panel-heading">
                	<b>Order Items</b>
                	<?php if($order['status'] < 4) { ?>
                		<div class="pull-right">
                			<a href="#updateItemModel" role="button" data-toggle="modal">Update Items</a>
                		</div>
                	<?php } ?>
              	</div>
               	<div class="panel-body" style="padding:1px;">
               		<div class="row col-sm-12" style="padding:0px 0px;margin-left: 0;">
               		    <div class="col-sm-2" style="background-color:#f5f5f5;padding:5px;padding-left:15px;"><b>Type</b></div>
	               		<div class="col-sm-2" style="background-color:#f5f5f5;padding:5px;"><b>Service Name</b></div>
	               		<div class="col-sm-1" style="background-color:#f5f5f5;padding:5px;"><b>Priority</b></div>
	               		&nbsp;
	               		<div class="col-sm-2" style="background-color:#f5f5f5;padding:5px;"><b>Unit Price</b></div>
	               		<div class="col-sm-1" style="background-color:#f5f5f5;padding:5px;"><b>Qty</b></div>
	               		<div class="col-sm-1" style="background-color:#f5f5f5;padding:5px;"><b>Tax %</b></div>
	               		<div class="col-sm-2" style="background-color:#f5f5f5;padding:5px;"><b>Total Price</b></div>
               		</div>
					<input type="hidden" name="orderidhidden" id="orderidhidden" value="<?php echo $order['orderid'];?>">
               		<?php foreach($items as $item) { ?>
	               		<div class="row col-sm-12" style="padding:5px 0px;margin-left: 0;font-weight:400;background-color:#f9f9f9;">
						<input type="hidden" name="ratedefault" id="ratedefault">
						<input type="hidden" name="itemidhidden[]" id="itemidhidden" value="<?php echo $item['service_id'];?>">
						<input type="hidden" name="cathidden[]" id="cathidden" value="<?php echo $item['service'];?>">
						<div class="col-sm-2"><!-- <input type="checkbox" class="preference" name="is_checked[]" <?php if($item['is_checked'] == 0){ ?> value="0" <?php } else { ?>value="1" checked <?php } ?>/>-->
								<select name="is_checked[]" id="is_checked" class="">
									<option value="0" <?php if($item['is_checked'] == 0){ ?> selected<?php }?>>Waiting</option>
									<option value="1" <?php if($item['is_checked'] == 1){ ?> selected<?php }?>>Approved</option>
									<option value="2" <?php if($item['is_checked'] == 2){ ?> selected<?php }?>>Rejected</option>
								</select>
								<input type="hidden" name="itemtype[]" value="<?php $item['service'];?>">
						<?php if($item['service']==1) { ?><span style="font-weight:500;"><?php echo Service;?></span><input type="hidden" name="itemnm[]" value="<?php echo 1;?>">  <?php } else { ?><span style="font-weight:500;"><?php echo Spare;?></span><input type="hidden" name="itemnm[]" value="<?php echo 2;?>"><?php }?></div>

	               			<div class="col-sm-2"><span style="font-weight:500;">
	               				<?php echo $item['service_name'];?></span><br>
	               				<span style="color:red"><?php if($item['is_checked'] == 0){ ?>(waiting for approval)<?php }else if($item['is_checked'] == 1){ ?>(Approved)<?php }else{ ?>(Rejected)<?php } ?></span><input type="hidden" name="itemnameA[]" value="<?php echo $item['service_name'];?>"> 
	               			</div>

		               		<div class="col-sm-1"><?php if($item['priority']==1) { ?><span style="font-weight:500;"><?php echo "High";?></span><input type="hidden" name="itempriority[]" value="<?php echo $item['priority'];?>">  <?php } else if($item['priority']==2){ ?><span style="font-weight:500;"><?php echo "Medium";?></span><input type="hidden" name="itempriority[]" value="<?php $item['priority']; ?>"><?php } else { ?><span style="font-weight:500;"><?php echo "Low";?></span><input type="hidden" name="itempriority[]" value="<?php echo $item['priority']; ?>"><?php }?></div>
		               		<!--  -->
		               		<div class="col-sm-2"><i class="fa fa-rupee"></i> <?php echo $item['service_price'];?><input type="hidden" name="pric[]" value="<?php echo $item['service_price'];?>"></div>

		               		<div class="col-sm-1"><input type="text" name="qtyA[]" value="<?php echo $item['quantity'];?>" class="form-control"></div>
		               		<div class="col-sm-1"> <?php echo $item['tax'];?><input type="hidden" name="tax1[]" value="<?php echo $item['tax'];?>"></div>
		               		<div class="col-sm-2"><i class="fa fa-rupee"></i> <?php echo $item['total_amount'];?><input type="hidden" name="totalamt[]" value="<?php echo $item['total_amount'];?>"></div>
		               		<div class="clearfix" style="padding-left:15px;"></div>
	               		</div>
               		<?php } ?>
               		<div class="col-sm-12" style="padding:5px 0px;">
               		<?php if($order['status'] < 4) { ?>
               			<button type="button" class="btn btn-success" onclick="ApprovalUpdate()">Save Items</button>
               		<?php } ?>
               		</div>
               		<div class="col-sm-12" style="padding:5px 0px;">
               			<div class="col-sm-6">
               			</div>
               			<div class="col-sm-6" style="background-color: #fafafa;border-radius: 5px;padding-bottom:10px;float:right;">
               				<br>
               				<table cellpadding="0px" cellspacing="0px" style="width:100%;">
								<tr>
									<td width="70%"><b>Order Total</b></td>
									<td width="30%"><i class="fa fa-rupee"></i> <?php echo $order['order_amount'];?></td>
								</tr>
								<tr>
									<td width="70%"><b>Discount</b></td>
									<td width="30%"><i class="fa fa-rupee"></i> <?php echo $order['discount'];?></td>
								</tr>
							<!--  	<tr>
									<td width="70%"><b>Convenience Fee</b></td>
									<td width="30%"><i class="fa fa-rupee"></i> <?php echo $order['delivery_charge'];?></td>
								</tr>-->
								<tr>
									<td width="70%"><b>Net Total</b></td>
									<td width="30%"><i class="fa fa-rupee"></i> <?php echo $order['net_total'];?></td>
								</tr>
						 		<tr>
									<td width="70%"><b>Adjustments</b> &nbsp; <?php if($order['status'] < 4) { ?><a href="#adjustModal" role="button" data-toggle="modal" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a><?php } ?></td>
									<td width="30%">
										<i class="fa fa-rupee"></i> <?php echo $order['adjustment'];?> 
									</td>
								</tr> 
								<tr>
									<td width="70%"><b>Gross Total</b></td>
									<td width="30%"><i class="fa fa-rupee"></i> <?php echo ($order['order_amount']+$order['vat_tax']+$order['service_tax']+$order['delivery_charge'] + $order['adjustment'] - $order['discount']);?></td>
								</tr>
								<?php if($order['amount_received'] > 0) { ?>
								<tr>
									<td width="70%"><b>Amount Received</b></td>
									<td width="30%"><i class="fa fa-rupee"></i> <?php echo $order['amount_received'];?></td>
								</tr>
								<?php } ?>
							</table>
               			</div>
               		</div>
               	</div>
				</form>
          	</div>
          	<?php } ?>
			</div>
		</div>
		<?php //print_r($garage);?>
		<div class="col-lg-5" style="padding:0px 5px 0px 0px;">
        	<div class="panel panel-default">
            	<div class="panel-heading">
                	<b>Order Actions - </b>
                	<span class="text-success"><b>
                	<?php if($order['status'] == 0) { ?>
                	Assign Garage
                	<?php } else if($order['status'] == 1) { ?>
                	Assigned For Garage
                	<?php } else if($order['status'] == 2) { ?>
                	Waiting for approval
                	<?php } else if($order['status'] == 3) { ?>
                	Work in progress
                	<?php } else if($order['status'] == 4) { ?>
                	Work Completed
                	<?php } else if($order['status'] == 7){ ?>
                	Order Delivery Completed
                	<?php } else { ?>
                	Order Cancelled
                	<?php } ?></b>
                	</span>
              	</div>
              	<?php if(!empty($order['assign_vendor_id'] != 0)){?>
              	<div class="panel-heading">
              		Order Assigned to <?php foreach ($garage as $item) { ?>
              			<?php if($item['id'] == $order['assign_vendor_id']){ 
              								echo $item['garage_name'];  } 
               			} ?>
               	<?php if($order['status'] < 2) { ?>
               		<a href="#updategarageModel" role="button" class="btn btn-warning" data-toggle="modal" style="margin-top: 5px;">Update Garage</a>
                  <?php } ?>
              	</div>
              	<?php } ?>
               	<div class="panel-body" style="padding:10px;">
               		<div>
               			<?php if($order['status'] == 0){ ?>
               				<a href="#deliveryModel" role="button" class="btn btn-warning" data-toggle="modal" style="margin-top: 5px;">Assign Garage</a>
               				&nbsp;
		               		<a href="#cancelModel" role="button" class="btn btn-danger" data-toggle="modal" style="margin-top: 5px;">Cancel Order</a>
		               	<?php } else if($order['status'] == 1){ ?>
		               		<a href="#pickedupModel" role="button" class="btn btn-success" data-toggle="modal" style="margin-top: 5px;">Generate Estimate</a>
		               		&nbsp;
		               		<a href="#cancelModel" role="button" class="btn btn-danger" data-toggle="modal" style="margin-top: 5px;">Cancel Order</a>
		               	<?php } else if($order['status'] == 2) { ?>
		               	    <a href="javascript:ConfirmApproval(<?php echo $order['orderid'];?>);" role="button" class="btn btn-success" style="margin-top: 5px;">Confirm Estimate</a>
		               	<?php } else if($order['status'] == 3) { ?>
		               	   <a href="javascript:markworkcompleted(<?php echo $order['orderid'];?>);" role="button" class="btn btn-success" style="margin-top: 5px;">Mark Work Completed</a>
		               	<?php } else if($order['status'] == 4) { ?>
		               		<?php if($order['invoice_status'] == 0) { ?>
			                 <a href="#invoiceModal" role="button" data-toggle="modal" class="btn btn-success" style="margin-top: 5px;display: none;">Generate Invoice</a>
			                 <?php } else { ?>
			                 <a href="#confirmModal" role="button" data-toggle="modal" class="btn btn-success">Confirm Delivery</a>
			                 <?php } ?>
		               	    <!--<a href="" role="button" class="btn btn-success" data-toggle="modal" style="margin-top: 5px;">View Invoice</a>-->
		               	<?php } else if($order['status'] == 5){ ?>
		                  	Order Cancelled
		               	<?php } ?>
		               	
		               	<?php if($order['invoice_status'] == 1) { ?>
		               	<?php if($order['pay_mode'] == 2) { ?>
		               	        Payment credited By Cash On Delivery
		               	<?php } else if(empty($order['transactionid'])) { ?>
		               		&nbsp; <!--  a href="javascript:requestPayment(<?php echo $order['orderid'];?>);" class="btn btn-default" style="margin-top:5px;">Request Payment</a-->
		               	<?php } else { ?>
		               		<div style="padding:5px;">
		               		<?php if($order['payment_status'] == "Credit") { ?>
		               			Payment credited on <?php echo date('j M Y h:i A',strtotime($order['payment_date']));?> By Online Paid
		               		<?php } else { ?>
		               			Payment request made - Pending
		               		<?php } ?>
		               		</div>
		               	<?php } ?>
		               	<?php } ?>
		               	
               		</div>
               		<div>
	<a href="#reminderModel" role="button" class="btn btn-success" data-toggle="modal" style="margin-top: 5px;">Set Reminder</a>
</div>
               		<div class="row" style="padding:10px 0px;margin-top:5px;background-color:#f2f2f2;">
               			<div class="col-sm-12">
	               			 <div class="col-md-8">
	               				<div class="form-group">
	               					<textarea class="form-control" name="admincomment" id="admincomment"></textarea>
	               				</div>
	               			</div>
               				<div class="col-md-3">
               					<button type="submit" class="btn btn-primary" onclick="addComment(<?php echo $order['orderid'];?>)">Add Comment</button>
               				</div>
               			</div>
               			<?php if(!empty($admin_comments)){?>
	               			<div class="col-sm-12"><b><u>Comments</u></b></div>
	               			<?php foreach($admin_comments as $ordercomment){?>
		               			<div class="col-sm-12">
		               				<div class="col-md-4"><?php echo $ordercomment['comment'];?></div>
		               				<div class="col-md-4"><?php echo date('j M Y h:i A',strtotime($ordercomment['created_datetime']));?></div>
		               				<div class="col-md-4"><?php echo $ordercomment['Admin_name'];?></div>
		               			</div>
	               			<?php } ?>
               			<?php } ?>
	               			<!-- <select name="status_id" id="status_id" class="form-control">
	               				<option value="">Select Status</option>
								<option value="0" <?php if($order['status'] == 0){?>selected<?php }?>>New Order</option>
								<?php if($order['status'] < 1) {?>
								<option value="1" <?php if($order['status'] == 1){?>selected<?php }?>>Pickup Assigned</option>
								<?php } ?>
								<?php if($order['status'] < 2) {?>
								<option value="2" <?php if($order['status'] == 2){?>selected<?php }?>>Picked</option>
								<?php } ?>
								<?php if($order['status'] < 3) {?>
								<option value="3" <?php if($order['status'] == 3){?>selected<?php }?>>Delivery Assigned</option>
								<?php } ?>
								<?php if($order['status'] < 4) {?>
								<option value="4" <?php if($order['status'] == 4){?>selected<?php }?>>Delivered</option>
								<?php } ?>
							</select> -->
							<!-- <select name="status_id" id="status_id" class="form-control">
								<?php foreach($status as $row){ ?>
								<option value="<?php echo $row['id'];?>" <?php if($order['status'] == $row['id']){?>selected<?php }?>><?php echo $row['name'];?></option>
								<?php } ?>
							</select>-->
						<!--<div class="col-sm-6">
							<input type="button" class="btn btn-primary" onclick="changeStatus(<?php echo $order['orderid'];?>);" value="Change Status"/>
						</div>-->
               		</div>
               		<?php if($order['invoice_status'] == 1) { ?>
               		<br>
               		<div class="row" style="background-color:#f5f5f5;padding:10px 0px;margin:0px;">
               			<div class="col-sm-8">
               				<b>Invoice Number:</b> <?php echo $order['invoice_id'];?><br>
               				<b>Invoice Date:</b> <?php echo date('j M Y h:i A', strtotime($order['invoice_date']));?>
               			</div>
               			<div class="col-sm-4"><a class="btn btn-sm btn-info" href="<?php echo base_url();?><?php echo $order['invoice_url'];?>" target="_blank">View Invoice</a></div>
               		</div>
               		<?php } ?>
               	<!-- 	<?php if($order['invoice_status'] == 1) { ?>
               		<?php if($order['payment_status'] != "Credit") { ?>
               		<br>
               		<div class="row" style="background-color:#f5f5f5;padding:10px 0px;margin:0px;">
               			<div class="col-sm-4"><a class="btn btn-sm btn-warning" href="javascript:resendPaymentLink(<?php echo $order['orderid'];?>);">Resend Payment Link</a></div>
               		</div>
               		 <?php } ?>
               		<?php } ?>-->
               		<br>
               		
               	   <div class="table-responsive">
	               	<table class="table table-striped">
	               		<thead>
	               			<tr class="info">
		               			<th>Action</th>
		               			<th>Date Time</th>
		               			<th>CSE Name</th>
		               			<th>Source</th>
	               			</tr>
	               		</thead>
	               		<tbody>
	               			<?php foreach ($logs as $log) {?>
	               			<tr>
	               				<td><?php echo $log['comment'];?></td>
	               				<td><?php echo date('j M Y h:i A',strtotime($log['created_date']));?></td>
	               				<td><?php echo $log['csename'];?></td>
	               				<td><?php echo $log['source'] !==''? $log['source']:'';?></td>
	               			</tr>
	               			<?php }  ?>
	               		</tbody>
	               	</table>
	               	</div>
	          
               	</div>
          	</div>
     	</div>
     	<div class="col-lg-12" style="padding:0px;">
     		<!--  <div class="col-lg-7">-->
     		  <?php if(!empty($order['image'])){?> <img src="<?php echo $order['image']; ?>" height="300" width="300"><?php }?>
     		  <?php if(!empty($order['image1'])){?><img src="<?php echo $order['image1']; ?>" height="300" width="300"><?php }?>
	     	<!-- </div>-->
     	</div>
	</div>
</div>
	
<div id="reminderModel" class="modal fade" style="">
    <div id="pickedup-overlay" class="modal-dialog m1 modal-lg" style="opacity:1 ;width:800px ">
      	<div class="modal-content">
      		<form action="" method="post" name="setreminder" id="setreminder" >
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Set Reminder</h4>
          	</div>
          	<div class="modal-body" style="background-color:#f5f5f5;">
          		<div class="row" style=padding:20px;">
          			<div class="col-sm-4">
          			    <div class="form-group">
                       		<label for="password" class="control-label">Set Reminder Date</label>
                       		<input type="text" name="reminder_date" id="reminder_date" class="form-control datepicker" value=""/>
                  		</div>
                  	</div>
                  	<!--  div class="col-sm-3">
          			    <div class="form-group">
                       		<label for="password" class="control-label">Set Time</label>
                       		<input type="time" name="reminder_time" id="reminder_time" class="form-control" value=""/>
                  		</div>
                  	</div>-->
                  	<div class="col-sm-8">
          			    <div class="form-group">
                       		<label for="password" class="control-label">Comment</label>
                       		<textarea class="form-control" name="reminder_comment" id="reminder_comment"></textarea>
                  		</div>
                  	</div>
          			<input type="hidden" name="orderid" id="orderid" value="<?php echo $order['orderid'];?>"/>
            	</div>
            </div>
          	<div class="modal-footer">
             	<div class="col-xs-12">
             		<button type="button" class="btn btn-success" onclick="saveReminders()">Save Items</button>
            	</div>
         	</div>
         	</form>
      	</div>
  	</div>
</div>



	
<div id="pickedupModel" class="modal fade" style="">
    <div id="pickedup-overlay" class="modal-dialog m1 modal-lg" style="opacity:1 ;width:800px ">
        <div class="modal-content">
            <form action="" method="post" name="additems" id="additems" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Genrate Estimate</h4>
                </div>
                <div class="modal-body" style="background-color:#f5f5f5;">
                    <div class="row" style=padding:20px;display:none;">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="password" class="control-label">Select Delivery Date</label>
                                <input type="text" name="delivery_date" id="idelivery_date" class="form-control datepicker" value="<?php
                                    if (!empty($order['tml_delivery_date'])) {
                                        echo date('d-m-Y', strtotime($order['tml_delivery_date']));
                                    }
                                    ?>"/>
                            </div>
                        </div>
                    </div>

                    <h3 style="margin-top:0px;">Add Services <a href="#addNewItems" role="button" data-toggle="modal" class="btn btn-primary pull-right">Add New Items</a></h3>
                    <input type="hidden" name="inputrateid" id="inputrateid" value="<?php echo $order['rate_id']; ?>"/>
                    <input type="hidden" name="orderid" id="orderid" value="<?php echo $order['orderid']; ?>"/>
                    <input type="hidden" name="coupon_code" id="coupon_code" value="<?php echo $order['coupon_code']; ?>"/>
                    <input type="hidden" name="m_pickup_date" id="m_pickup_date" value="<?php echo $order['pickup_date']; ?>"/>
                    <input type="hidden" name="category_id" id="category_id" value="<?php echo $order['category_id']; ?>"/>
                    <input type="hidden" name="brand_id" id="brand_id" value="<?php echo $order['brand_id']; ?>"/>
                    <input type="hidden" name="model_id" id="model_id" value="<?php echo $order['vehicle_model']; ?>"/>
                    <input type="hidden" name="subcategory_id" id="subcategory_id" value="<?php echo $order['subcategory_id']; ?>"/>
                    <div id="orderitems">
                        <div class="row" style="padding:10px 5px;background-color:#ddd;border:1px solid #ccc;">
                            <div class="row form-group pqr">
                                <div class="col-sm-2">
                                    Service Type
                                </div>
                                <div class="col-sm-3">
                                    Service Name
                                </div>
                                <div class="col-sm-1">
                                    Tax %
                                </div>
                                <div class="col-sm-2">
                                    Rate
                                </div>
                                <div class="col-sm-1">
                                    Qty
                                </div>
                                <div class="col-sm-2">
                                    Priority
                                </div>
                                <!-- <div class="col-sm-1">
                                    &nbsp;
                                </div> -->
                            </div>
                        </div>
                        <input type="hidden" name="rcount" id="rcount" value="1"/>
                        <div class="row" style="padding:10px 5px;background-color:#f2f2f2;border-bottom:1px solid #ccc;" id="rowitem-1">
                            <div class="row form-group pqr">
                                <input type="hidden" name="itemid[]" id="itemid-1" value=""/>
                                <div class="col-sm-2">
                                    <select name="itemtype[]" required="" onchange="clear_input(this);" id="itemtype-1" class="form-control itemname">
                                        <option value="">Select Type</option>
                                        <option value="1">Service</option>
                                        <option value="2">Spare</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control itemname itemname1" name="itemname[]" id="itemname-1" required="" value="" placeholder="Service/Spare Name" autocomplete="off"/>
                                </div>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control itemname readonly-ctrl" name="itemtax[]" id="itemtax-1" value="" placeholder="TX" readonly/>
                                </div>
                                <div class="col-sm-2">
                                    <input type="hidden" name="price[]" id="price-1" value=""/>
                                    <input type="hidden" name="catidd[]" id="catidd-1" value=""/> 
                                    <span id="pricelbl-1" style="line-height: 30px;"></span>
                                    <!--<input type="text" class="form-control itemname readonly-ctrl" id="pricelbl-1" value="" placeholder="Rate" readonly/>-->
                                </div>
                                <div class="col-sm-1">
                                	<input type="text" class="form-control" name="qty[]" id="qty-1" value="1"/>
                                </div>
                                <div class="col-sm-2">
                                    <select name="priority[]" id="priority-1" class="form-control itemname">
                                       
                                        <option value="1">High</option>
                                        <option value="2">Medium</option>
                                        <option value="3">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <a href="javascript:addMoreItems();" class="btn btn-primary pull-right">Add More Items</a>
                    <br>
                    <div id="response"></div>
                    <br>
                </div>
                <div class="modal-footer">
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-success" onclick="saveItems()">Save Items</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="updateItemModel" class="modal fade" style="">
    <div id="update-overlay" class="modal-dialog m1 modal-lg" style="opacity:1 ;width:800px ">
        <div class="modal-content">
            <form action="" method="post" name="updateitems" id="updateitems" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Order Items</h4>
                </div>
                <div class="modal-body" style="background-color:#f5f5f5;">
                    <input type="hidden" name="rateid" id="rateid" value="<?php echo $order['rate_id']; ?>"/>
                    <input type="hidden" name="orderid" id="orderid" value="<?php echo $order['orderid']; ?>"/>
                    <input type="hidden" name="coupon_code" id="coupon_code" value="<?php echo $order['coupon_code']; ?>"/>
                    <input type="hidden" name="m_pickup_date" id="m_pickup_date" value="<?php echo $order['pickup_date']; ?>"/>
                    <input type="hidden" name="category_id" id="category_id" value="<?php echo $order['category_id']; ?>"/>
                    <input type="hidden" name="brand_id" id="brand_id" value="<?php echo $order['brand_id']; ?>"/>
                    <input type="hidden" name="model_id" id="model_id" value="<?php echo $order['vehicle_model']; ?>"/>
                    <input type="hidden" name="subcategory_id" id="subcategory_id" value="<?php echo $order['subcategory_id']; ?>"/>
                    <div id="eorderitems">
                        <div class="row" style="padding:10px 5px;background-color:#ddd;border:1px solid #ccc;">
                            <div class="row form-group pqr">
                                <div class="col-sm-2">
                                    Service Type
                                </div>
                                <div class="col-sm-3">
                                    Service Name
                                </div>
                                <div class="col-sm-1">
                                    Tax %
                                </div>
                                <div class="col-sm-2">
                                    Rate
                                </div>
                                <div class="col-sm-1">
                                    Qty
                                </div>
                                <div class="col-sm-2">
                                    Priority
                                </div>
                               <!--  <div class="col-sm-1">
                                    &nbsp;
                                </div> -->
                            </div>
                        </div>
                        <input type="hidden" name="ercount" id="ercount" value="<?php echo count($items); ?>"/>
                        <?php foreach ($items as $key => $item) { 
                              $readonly = $item['is_checked'] == 0 ? 'this' : 'readonly';
                              $pointer_event = $item['is_checked'] == 0 ? '' : 'pointer-events:none';
                            ?>
                            <div class="row" style="padding:10px 5px;background-color:#f2f2f2;border-bottom:1px solid #ccc;" id="erowitem-<?php echo $key; ?>">
                                <div class="row form-group pqr">
                                    <input type="hidden" name="itemid[]" id="eitemid-<?php echo $key; ?>" value="<?php echo $item['service_id']; ?>"/>
                                    <input type="hidden" name="is_checked[]" value="<?=$item['is_checked']?>">
                                    <div class="col-sm-2">
                                    <!-- <input type="checkbox" name="is_checked[]" value="<?php echo $item['is_checked']; ?>" id="eitencheck-<?php echo $key; ?>" <?php if ($item['is_checked'] == 0) { ?> <?php } else { ?>checked <?php } ?>/>-->
                                        <select  name="itemtype[]" <?=$readonly?> style="<?= $pointer_event?>" required="" onchange="clear_input(<?=$readonly?>);" id="eitemtype-<?php echo $key; ?>" class="form-control itemname">
                                            <!-- <option value=""><?php
                                                    if ($item['service'] == 1) {
                                                        echo "Service";
                                                    } else {
                                                        echo "Spare";
                                                    }
                                                    ?></option> -->
                                            <option value="1" <?php
                                                    if ($item['service'] == 1) {
                                                        echo "selected";
                                                    }
                                                    ?>>Service</option>
                                            <option value="2" <?php
                                                    if ($item['service'] == 2) {
                                                        echo "selected";
                                                    }
                                                    ?>>Spare</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" readonly="" class="form-control itemname itemname1" required="" name="itemname[]" id="eitemname-<?php echo $key; ?>" value="<?php echo $item['service_name']; ?>" placeholder="Enter Service Name" autocomplete="off"/>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="text"  readonly="" class="form-control itemname" name="itemtax[]" id="eitemtax-<?php echo $key; ?>" readonly value="<?php echo $item['tax']; ?>" placeholder="Enter Service Name" autocomplete="off"/>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="hidden" name="catidd[]" id="ecatidd-<? echo $key; ?>" value="<?php echo $item['cat_id']; ?>"/>
                                        <input type="hidden" name="price[]" id="eprice-<?php echo $key; ?>" value="<?php echo $item['service_price']; ?>"/>
                                        <span id="epricelbl-<?php echo $key; ?>" style="line-height: 30px;">Rs. <?php echo $item['service_price']; ?></span>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="text"   class="form-control itemname" name="itemqty[]" id="itemqty-<?php echo $key; ?>"  value="<?php echo $item['quantity']; ?>" autocomplete="off"/>
                                    </div>
                                    <div class="col-sm-2">
                                        <select name="priority[]" <?=$readonly?> style="<?= $pointer_event?>"  id="priority-1" class="form-control itemname">
                                            
                                            <option value="1" <?php
                                        if ($item['priority'] == 1) {
                                            echo "selected";
                                        }
                                                    ?>>High</option>
                                            <option value="2" <?php
                        if ($item['priority'] == 2) {
                            echo "selected";
                        }
                        ?>>Medium</option>
                                            <option value="3" <?php
                        if ($item['priority'] == 3) {
                            echo "selected";
                        }
                        ?>>Low</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1">
                                    <?php if($item['is_checked'] == 0) {?> 
                                            <a href="javascript:eremoveItem(<?php echo $key; ?>);" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
                                        <?php } else if($item['is_checked'] == 1) {?>
                                            <span style="color:green">(Approved)</span>
                                            <?php } else if($item['is_checked'] == 2) {?>
                                                <span style="color:red">(Rejected)</span>
                                            <?php }?>    
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <br>
                    <a href="javascript:eaddMoreItems();" class="btn btn-primary pull-right">Add More Items</a>
                    <br>
                    <div id="uresponse"></div>
                    <br>
                </div>
                <div class="modal-footer">
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-success" onclick="updateItems()">Update Items</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="pickupModel" class="modal fade" style="">
    <div id="cancel-overlay" class="modal-dialog" style="opacity:1 ;width:400px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Assign Pickup Order</h4>
          	</div>
          	<div class="modal-body" style="background-color:#f5f5f5;">
              	<div class="row" style=padding:20px">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Pickup Executive</label>
                       		<select name="executive_id" id="executive_id" class="form-control">
								<option value=""> Select Executive </option>
								<?php foreach ($executives as $executive) { ?>
								<option value="<?php echo $executive['id'];?>"><?php echo $executive['name'];?></option>
								<?php } ?>
							</select>
                  		</div>
              		</div>
              	</div>
              	<div class="row" style=padding:20px;display:none;" >
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Pickup Slot</label>
                       		<select name="pickup_slot" id="pickup_slot" class="form-control">
								<option value=""> Select Pickup Slot </option>
								<?php foreach ($pickupslots as $row) { ?>
								<option value="<?php echo $row['slot'];?>" <?php if($order['pickup_slot'] == $row['slot']) {?>selected<?php }?>><?php echo $row['slot'];?></option>
								<?php } ?>
							</select>
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 col-xs-12">
             			<button type="submit" class="btn btn-primary" onclick="assignPickup(<?php echo $order['orderid'];?>)">Assign Pickup</button>
             		</div>
              	</div>
          	</div>
      	</div>
  	</div>
</div>
<div id="repickupModel" class="modal fade" style="">
    <div id="cancel-overlay" class="modal-dialog" style="opacity:1 ;width:400px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Re-Assign Pickup</h4>
          	</div>
          	<div class="modal-body" style="background-color:#f5f5f5;">
              	<div class="row" style=padding:20px">
              		<div class="col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Pickup Executive</label>
                       		<select name="rpexecutive_id" id="rpexecutive_id" class="form-control">
								<option value=""> Select Executive </option>
								<?php foreach ($executives as $executive) { ?>
								<option value="<?php echo $executive['id'];?>" <?php if($executive['id'] == $order['pickup_exe_id']) { ?>selected<?php } ?>><?php echo $executive['name'];?></option>
								<?php } ?>
							</select>
                  		</div>
              		</div>
              	</div>
              	<div class="row" style=padding:20px;display:none;">
              		<div class="col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Pickup Slot</label>
                       		<select name="rpickup_slot" id="rpickup_slot" class="form-control">
								<option value=""> Select Pickup Slot </option>
								<?php foreach ($pickupslots as $row) { ?>
								<option value="<?php echo $row['slot'];?>" <?php if($order['pickup_slot'] == $row['slot']) {?>selected<?php }?>><?php echo $row['slot'];?></option>
								<?php } ?>
							</select>
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-xs-12">
             			<button type="submit" class="btn btn-primary" onclick="reassignPickup(<?php echo $order['orderid'];?>)">Assign Pickup</button>
             		</div>
              	</div>
          	</div>
      	</div>
  	</div>
</div>
<div id="cancelModel" class="modal fade" style="">
    <div id="cancel-overlay" class="modal-dialog" style="opacity:1 ;width:400px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Cancel Order</h4>
          	</div>
          	<div class="modal-body" style="background-color:#f5f5f5;">
              	<div class="row" style=padding:20px">
              		<div class="col-md-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Reason</label>
                       		<select name="reason_id" id="reason_id" class="form-control">
								<option value=""> Select Reason </option>
								<?php foreach ($reasons as $reason) { ?>
									<option value="<?php echo $reason['id'];?>"><?php echo $reason['name'];?></option>
								<?php } ?>
							</select>
                  		</div>
                  		<input type="hidden" name="cancelcomment" id="cancelcomment" value=""/>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12">
             			<button type="submit" class="btn btn-danger" onclick="cancelOrder(<?php echo $order['orderid'];?>)">Cancel Order</button>
             			<span class="pull-right">
             				<!--<button type="button" class="btn btn-warning" onclick="deleteOrder(<?php echo $order['orderid'];?>)">Delete Order</button>-->
             			</span>
             		</div>
              	</div>
          	</div>
      	</div>
  	</div>
</div>


<div id="deliveryModel" class="modal fade" style="padding-top: 86px;">
    <div id="cancel-overlay" class="modal-dialog" style="opacity:1 ;width:400px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Assign Garage</h4>
          	</div>
          	<div class="modal-body" style="background-color:#f5f5f5;">
              	<div class="row" style="padding:10px">
              		<div class="col-md-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Garage</label>
                       		
                       		<select name="vendor_id" id="vendor_id" class="form-control">
								<option value=""> Select Garage</option>
									<?php foreach ($garage as $item) { ?>
								<option value="<?php echo $item['id'];?>"><?php echo $item['garage_name'].'('.$item['mobile'].')';?></option>
								<?php } ?>
								
							</select>
                  		</div>
              		</div>
              	</div>
              	<div class="row" style="padding:10px">
              		<div class="col-md-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Enter Mobile Number(Comma Separted)</label>
                       		<input type="text" class="form-control" name="vendor_mobiles" id="vendor_mobiles" value="" placeholder="Enter Mobile Numbers" autocomplete="off"/>
                       	</div>
                    </div>
              	</div>
          
              	<div class="row">
              		<div class="col-xs-12">
             			<button type="submit" class="btn btn-primary" onclick="assignGarage(<?php echo $order['orderid'];?>)">Assign</button>
             		</div>
              	</div>
          	</div>
      	</div>
  	</div>
</div>

<div id="updategarageModel" class="modal fade" style="padding-top: 86px;">
    <div id="cancel-overlay" class="modal-dialog" style="opacity:1 ;width:400px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Update Assign Garage</h4>
          	</div>
          	<div class="modal-body" style="background-color:#f5f5f5;">
              	<div class="row" style="padding:10px">
              		<div class="col-md-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Garage</label>
                       		
                       		<select name="vendor_id" id="vendor_idupdate" class="form-control">
								<option value=""> Select Garage</option>
								<?php foreach ($garage as $item) { ?>
										<option value="<?php echo $item['id'];?>" <?php if($item['id'] == $order['assign_vendor_id']){ ?> selected<?php } ?>><?php echo $item['garage_name'].'('.$item['mobile'].')';?></option>
								<?php } ?>
								
							</select>
                  		</div>
              		</div>
              	</div>
              	<div class="row" style="padding:10px">
              		<div class="col-md-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Enter Mobile Number(Comma Separted)</label>
                       		<input type="text" class="form-control" name="updatevendor_mobiles" id="updatevendor_mobiles" value="" placeholder="Enter Mobile Numbers" autocomplete="off"/>
                       	</div>
                    </div>
              	</div>
          
              	<div class="row">
              		<div class="col-xs-12">
             			<button type="submit" class="btn btn-primary" onclick="updateassignGarage(<?php echo $order['orderid'];?>)">Assign</button>
             		</div>
              	</div>
          	</div>
      	</div>
  	</div>
</div>

<div id="redeliveryModel" class="modal fade" style="">
    <div id="redel-overlay" class="modal-dialog" style="opacity:1 ;width:400px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Re-Assign Delivery</h4>
          	</div>
          	<div class="modal-body" style="background-color:#f5f5f5;">
              	<div class="row" style="padding:20px">
              		<div class="col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Delivery Executive</label>
                       		<select name="rdexecutive_id" id="rdexecutive_id" class="form-control">
								<option value=""> Select Executive </option>
								<?php foreach ($executives as $executive) { ?>
								<option value="<?php echo $executive['id'];?>" <?php if($executive['id'] == $order['delivery_exe_id']) { ?>selected<?php } ?>><?php echo $executive['name'];?></option>
								<?php } ?>
							</select>
                  		</div>
              		</div>
              	</div>
              	<div class="row" style="display:none;">
              		<div class="col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Delivery Date</label>
                       		<input type="text" name="rdelivery_date" id="rdelivery_date" class="form-control datepicker" value="<?php echo date('d-m-Y',strtotime($order['tml_delivery_date']));?>"/>
                  		</div>
              		</div>
              	</div>
              	<div class="row" style="padding:20px">
              		<div class="col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Delivery Slot</label>
                       		<select name="rdelivery_slot" id="rdelivery_slot" class="form-control">
								<option value=""> Select Delivery Slot </option>
								<?php foreach ($deliveryslots as $row) { ?>
								<option value="<?php echo $row['slot'];?>" <?php if($order['delivery_slot'] == $row['slot']) {?>selected<?php }?>><?php echo $row['slot'];?></option>
								<?php } ?>
							</select>
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-xs-12">
             			<button type="submit" class="btn btn-primary" onclick="reassignDelivery(<?php echo $order['orderid'];?>)">Re-Assign Delivery</button>
             		</div>
              	</div>
          	</div>
      	</div>
  	</div>
</div>
<div id="invoiceModal" class="modal fade <?php echo $order['status'] == 4 ? $order['invoice_status'] == 0 ?'show':'':'';?>" 
	style="<?php echo $order['status'] == 4 ? $order['invoice_status'] == 0 ?'display: block;':'display: none;':'';?>">
    <div id="invoice-overlay" class="modal-dialog" style="opacity:1 ;width:600px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Generate Invoice</h4>
          	</div>
          	<div class="modal-body" style="background-color:#fff;">
                  	<div class="row">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Order Total</label>
                       		<input type="text" name="o_amount" id="o_amount" class="form-control" value="<?php echo $order['order_amount'];?>" readonly/>
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Discount (Rs)</label>
                       		<input type="text" name="discount" id="discount" class="form-control" value="<?php echo $order['discount'];?>" <?php if(!empty($order['discount'])) { ?>readonly<?php } else {  }?> />
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Convenience Fee (Rs)</label>
                       		<input type="text" name="discount1" id="discount1" class="form-control" value="<?php echo $order['delivery_charge'];?>" readonly/>
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Adjustment (Rs)</label>
                       		<input  type="text" name="adjustment" id="adjustment" class="form-control" value="<?php echo $order['adjustment'];?>" readonly />
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Grand Total</label>
                       		<input type="text" name="grand_total" id="grand_total" class="form-control" value="<?php echo $order['grand_total'];?>" readonly/>
                  		</div>
              		</div>
              	</div>
          	</div>
          	<div class="panel-footer">
             	<button type="submit" class="btn btn-primary" onclick="generateInvoice(<?php echo $order['orderid'];?>)">Generate Invoice</button>
          	</div>
      	</div>
  	</div>
</div>
<div id="adjustModal" class="modal fade" style="">
    <div id="invoice-overlay" class="modal-dialog" style="opacity:1 ;width:600px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Update Adjustment</h4>
          	</div>
          	<div class="modal-body" style="background-color:#fff;">
              	<div class="row">
              		<div class="col-md-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label col-md-4">Add Or Deduct</label>
                       		<div class="col-md-8">
	                       		<input type="radio" name="adj_type" id="adjadd" value="0" <?php if($order['adjustment'] >= 0) { ?>checked<?php }?>/> ADD
	                       		<input type="radio" name="adj_type" id="adjremove" value="1" <?php if($order['adjustment'] < 0) { ?>checked<?php }?>/> REMOVE
                       		</div>
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label col-md-4">Adjustment (Rs)</label>
                       		<div class=" col-md-4">
                       			<input type="text" name="iadjustment" id="iadjustment" class="form-control" value="<?php if($order['adjustment'] < 0) { echo $order['adjustment']*-1; } else { echo $order['adjustment']; }?>"/>
                       		</div>
                  		</div>
              		</div>
              	</div>
          	</div>
          	<div class="panel-footer">
             	<button type="submit" class="btn btn-primary" onclick="updateAdjustment(<?php echo $order['orderid'];?>)">Update Adjustment</button>
          	</div>
      	</div>
  	</div>
</div>
<div id="confirmModal" class="modal fade" style="">
    <div id="invoice-overlay" class="modal-dialog" style="opacity:1 ;width:400px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Confirm Delivery</h4>
          	</div>
          	<div class="modal-body" style="background-color:#fff;">
          		<input type="hidden" name="final_total" id="final_total" value="<?php echo $order['grand_total'];?>"/>
              	<div class="row">
              		<div class="col-md-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Total Amount Received</label>
                       		<input type="text" name="to_amount" id="to_amount" class="form-control" value="<?php echo $order['grand_total'];?>"/>
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Payment Mode</label>
                       		<select id="cpay_mode" name="cpay_mode" class="form-control">
                       			<option value="1" <?php if($order['payment_status'] == "Credit") { ?>selected<?php }?>>Online Paid</option>
                       			<option value="2" <?php if($order['payment_status'] != "Credit") { ?>selected<?php }?>>Cash On Delivery</option>
                       		</select>
                  		</div>
              		</div>
              	</div>
	          	<div class="panel-footer">
	             	<button type="submit" class="btn btn-primary" onclick="confirmDelivery(<?php echo $order['orderid'];?>)">Confirm</button>
	          	</div>
	      	</div>
	  	</div>
	</div>
</div>

<div id="reSchedulePickup" class="modal fade" style="">
    <div id="rsp-overlay" class="modal-dialog" style="opacity:1 ;width:400px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Re-Schedule Pickup</h4>
          	</div>
          	<div class="modal-body" style="background-color:#f5f5f5;">
              	<div class="row" style="padding:0px">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Pickup Date</label>
                       		<input type="text" name="rspickup_date" id="rspickup_date" class="form-control datepicker" value="<?php echo date('d-m-Y',strtotime($order['pickup_date']));?>"/>
                  		</div>
              		</div>
              	</div>
              	<div class="row" style="padding:0px;">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Pickup Slot</label>
                       		<select name="rspickup_slot" id="rspickup_slot" class="form-control">
								<option value=""> Select Pickup Slot </option>
								<?php foreach ($visitingslots as $row) { ?>
									<option value="<?php echo $row['time_slot'];?>" <?php if($order['slot'] == $row['time_slot']) {?>selected<?php }?>><?php echo $row['time_slot'];?></option>
									<?php } ?>
							</select>
                  		</div>
              		</div>
              	</div>
              	<div class="row" style="padding:0px;">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Reason For Reschedule</label>
                       		<textarea class="form-control" name="rsnotes" id="rsnotes"></textarea>
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 col-xs-12">
             			<button type="submit" class="btn btn-primary" onclick="reschedulePickup(<?php echo $order['orderid'];?>)">Reschedule Pickup</button>
             		</div>
              	</div>
          	</div>
      	</div>
  	</div>
</div>
<div id="reScheduleDelivery" class="modal fade" style="">
    <div id="rsp-overlay" class="modal-dialog" style="opacity:1 ;width:400px ">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Re-Schedule Delivery</h4>
          	</div>
          	<div class="modal-body" style="background-color:#f5f5f5;">
              	<div class="row" style="padding:0px">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Delivery Date</label>
                       		<input type="text" name="rsdelivery_date" id="rsdelivery_date" class="form-control datepicker" value="<?php echo date('d-m-Y',strtotime($order['tml_delivery_date']));?>"/>
                  		</div>
              		</div>
              	</div>
              	<div class="row" style="padding:0px;">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Select Delivery Slot</label>
                       		<select name="rsdelivery_slot" id="rsdelivery_slot" class="form-control">
								<option value=""> Select Delivery Slot </option>
								<?php foreach ($pickupslots as $row) { ?>
								<option value="<?php echo $row['slot'];?>" <?php if($order['delivery_slot'] == $row['slot']) {?>selected<?php }?>><?php echo $row['slot'];?></option>
								<?php } ?>
							</select>
                  		</div>
              		</div>
              	</div>
              	<div class="row" style="padding:0px;">
              		<div class="col-md-12 col-xs-12">
                  		<div class="form-group">
                       		<label for="password" class="control-label">Reason For Reschedule</label>
                       		<textarea class="form-control" name="rsdnotes" id="rsdnotes"></textarea>
                  		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 col-xs-12">
             			<button type="submit" class="btn btn-primary" onclick="rescheduleDelivery(<?php echo $order['orderid'];?>)">Reschedule Delivery</button>
             		</div>
              	</div>
          	</div>
      	</div>
  	</div>
</div>

<div id="addNewItems" class="modal fade" style="">
    <div id="pickedup-overlay" class="modal-dialog m1 modal-lg" style="opacity:1 ;width:800px ">
      	<div class="modal-content">
      		<form action="" method="post" name="addnewitemspopup" id="addnewitemspopup" >
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#fff"> X </span><span class="sr-only">Close</span></button>
              	<h4 class="modal-title" id="myModalLabel">Add New Services/Spares</h4>
          	</div>
          	<div class="modal-body" style="background-color:#f5f5f5;">
          		              	
          		<input type="hidden" name="category_id" id="category_id" value="<?php echo $order['category_id'];?>"/>
          		<input type="hidden" name="brand_id" id="brand_id" value="<?php echo $order['brand_id'];?>"/>
          		<input type="hidden" name="model_id" id="model_id" value="<?php echo $order['vehicle_model'];?>"/>
          		<input type="hidden" name="subcategory_id" id="subcategory_id" value="<?php echo $order['subcategory_id'];?>"/>
          		<div id="orderitems">
          			
	          		<div class="row">
	          			<div class="col-md-4">
	                  		<div class="form-group">
	                       		<label for="password" class="control-label">Select Item Type</label>
	                       		<select name="newitemtype" id="newitemtype" class="form-control">
									<option value="">Select Type </option>
									<option value="1">Service </option>
									<option value="2">Spare </option>
								</select>
	                  		 </div>
              		    </div>
              		    <div id="servicetype">
	              		    <div class="col-md-6">	
								<div class="form-group" id="error-name">	
										<label class="control-label">Category of Subcategory<span class='text-danger'>*</span></label>
										<select	name="catsubcat_id" id="catsubcat_id" class="form-control">
										<?php //print_r($catofsubcatbysubid);?>
											<option value="">Select Category of Subcategory</option>
											<?php /* foreach ($catofsubcatbysubid as $catofsubcat) { ?>
												<option value="<?php echo $catofsubcat['id'];?>"><?php echo $catofsubcat['name'];?></option>
											<?php } */ ?>
										</select>								
								</div>							
								<div class="messageContainer"></div>	
							</div>	
		              		<div class="col-md-6">
		                  		<div class="form-group">
		                       		<label for="service" class="control-label">Enter Name</label>
		                       		<input type="text" name="servicename" id="servicename" class="form-control" />
		                  		</div>
		                  	   <div class="messageContainer"></div>
		              		</div>
	              		</div>
	              		<div id="sparetype" style="display:none">
	              			<div class="col-md-12">
		                  		<div class="form-group">
		                       		<label for="service" class="control-label">Enter Name</label>
		                       		<input type="text" name="sparename" id="sparename" class="form-control" />
		                  		</div>
		                  	  <div class="messageContainer"></div>
		              		</div>
	              		</div>
	              		
	              	</div>
	              	<div class="row">
	              		<div class="col-md-6">
							<div class="form-group" id="error-name">
							   <label class="control-label">Price<span class='text-danger'>*</span></label>
							   <input type="text" class="form-control" id="price" name="price" />
						     </div>
							<div class="messageContainer"></div>
						</div>
						<div class="col-md-6">
							<div class="form-group" id="error-name">					
								<label class="control-label">Tax<span class='text-danger'>*</span></label>	
								<input type="text" class="form-control" id="tax" name="tax" />			
							</div>								
							<div class="messageContainer"></div>	
						</div>				
	              	</div>
	              	<div class="row">
	              		<div class="col-md-6">
		                    <div class="form-group" id="error-image">
	                           	<label class="control-label ">Upload Image (80 X 80 px) </label>
	                           	<input type="file" value="" name="image" id="image" class="form-control " >
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
              	</div>
              	
              	<div id="response"></div>
              	<br>
          	</div>
          	<div class="modal-footer">
             	<div class="col-xs-12">
             		<button type="submit" class="btn btn-success">Add Items</button>
            	</div>
         	</div>
         	</form>
      	</div>
  	</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script>
$('.datepicker').datepicker({
    format: 'dd-mm-yyyy',
    startDate: '0d'
});

$('#reminder_date').datepicker({
	  autoclose:true,
	 // startDate : date,
	  format: 'yyyy-mm-dd'
}).on('change',function(e){
	 $('#setreminder').bootstrapValidator('revalidateField', $('#reminder_date'));
});

$('#rspickup_date').datepicker({
    format: 'dd-mm-yyyy',
    startDate: '0d'
}).on("changeDate", function(e) {
    $.get(base_url+"admin/general/pickupdate",{ pickup_date: $(this).val() },function(data) {
		$("#rspickup_slot").html(data);
    },'html');
});
$('#rsdelivery_date').datepicker({
    format: 'dd-mm-yyyy',
    startDate: '0d'
}).on("changeDate", function(e) {
    $.get(base_url+"admin/general/pickupdate",{ pickup_date: $(this).val() },function(data) {
		$("#rsdelivery_slot").html(data);
    },'html');
});

function updateSlotsDel() {
	$.get(base_url+"admin/general/pickupdate",{ pickup_date: $("#rsdelivery_date").val() },function(data) {
		$("#rsdelivery_slot").html(data);
    },'html');
}

function updateSlotsPick() {
	$.get(base_url+"admin/general/pickupdate",{ pickup_date: $("#rspickup_date").val() },function(data) {
		$("#rspickup_slot").html(data);
    },'html');
}

function hideNav() {
	var status = $("#side-menu").css("display");
	if(status == 'block') {
		$("#side-menu").hide();
		$("#page-wrapper").css("margin","0 0 0 0");
		$("#show-hide-nav").html('<i class="fa fa-chevron-circle-right fa-2x"></i>');
	} else {
		$("#page-wrapper").css("margin","0 0 0 250px");
		$("#side-menu").show();
		$("#show-hide-nav").html('<i class="fa fa-chevron-circle-left fa-2x"></i>');
	}
}

function assignPickup(orderid) {
	if($("#executive_id").val() != "" && $("#pickup_slot").val() != "") {
		ajaxindicatorstart("Please hang on.. while we assign order ..");
		$.get(base_url+"admin/order/assignpickup/"+orderid,{ executive_id: $("#executive_id").val(), pickup_slot: $("#pickup_slot").val()}, function(data){
			ajaxindicatorstop();
			alert(data.message);
			window.location.reload();
		},'json');
	} else if($("#executive_id").val() == "") {
		alert("Please select pickup executive");
	} else if($("#pickup_slot").val() == "") {
		alert("Please select pickup slot");
	} else {
		alert("Please select all fields");
	}
}

function reassignPickup(orderid) {
	if($("#rpexecutive_id").val() != "" && $("#rpickup_slot").val() != "") {
		ajaxindicatorstart("Please hang on.. while we re-assign order ..");
		$.get(base_url+"admin/order/reassignpickup/"+orderid,{ executive_id: $("#rpexecutive_id").val(), pickup_slot: $("#rpickup_slot").val()}, function(data){
			ajaxindicatorstop();
			alert(data.message);
			window.location.reload();
		},'json');
	} else if($("#rpexecutive_id").val() == "") {
		alert("Please select pickup executive");
	} else if($("#rpickup_slot").val() == "") {
		alert("Please select pickup slot");
	} else {
		alert("Please select all fields");
	}
}

function assignGarage(orderid) {
    var a=$("#vendor_id").val();
  	var x = document.getElementById("vendor_id");
    var txt = "";
    var i;
   
    for (i = 1; i < x.length; i++) {
    	 if(a!=x.options[i].value){
        txt = txt + " " + x.options[i].value + "," ;
    }
    }
 	if($("#vendor_id").val() != "") {
		ajaxindicatorstart("Please hang on.. while we assign order ..");
		$.get(base_url+"admin/order/assigndelivery/"+orderid,{ vendor_id: $("#vendor_id").val(),other_vendor: txt,vendor_mobiles: $("#vendor_mobiles").val()}, function(data){
			ajaxindicatorstop();
			alert(data.message);
			window.location.reload();
		},'json');
	} else if($("#vendor_id").val() == "") {
		alert("Please select garage");
	} 
}

function updateassignGarage(orderid) {
    var a=$("#vendor_idupdate").val();
  	var x = document.getElementById("vendor_idupdate");
    var txt = "";
    var i;
   
    for (i = 1; i < x.length; i++) {
    	 if(a!=x.options[i].value){
        txt = txt + " " + x.options[i].value + "," ;
    }
    }
 	if($("#vendor_idupdate").val() != "") {
		ajaxindicatorstart("Please hang on.. while we assign order ..");
		$.get(base_url+"admin/order/updateassigndelivery/"+orderid,{ vendor_id: $("#vendor_idupdate").val(),other_vendor: txt,vendor_mobiles: $("#updatevendor_mobiles").val()}, function(data){
			ajaxindicatorstop();
			alert(data.message);
			window.location.reload();
		},'json');
	} else if($("#vendor_idupdate").val() == "") {
		alert("Please select garage");
	} 
}

function reassignDelivery(orderid) {
	if($("#rdexecutive_id").val() != "" && $("#rdelivery_slot").val() != "" && $("#rdelivery_date").val()) {
		ajaxindicatorstart("Please hang on.. while we re-assign order ..");
		$.get(base_url+"admin/order/reassigndelivery/"+orderid,{ executive_id: $("#rdexecutive_id").val(), delivery_slot: $("#rdelivery_slot").val(), delivery_date: $("#rdelivery_date").val()}, function(data){
			ajaxindicatorstop();
			alert(data.message);
			window.location.reload();
		},'json');
	} else if($("#rdexecutive_id").val() == "") {
		alert("Please select delivery executive");
	} else if($("#rdelivery_slot").val() == "") {
		alert("Please select delivery slot");
	} else if($("#rdelivery_date").val() == "") {
		alert("Please select delivery date");
	} else {
		alert("Please select all fields");
	}
}

function cancelOrder(orderid) {
	if($("#reason_id").val() != "") {
		var ans = confirm("Are you sure !! you want to cancel this order ?");
		if(ans) { 
			ajaxindicatorstart("Please hang on .. while we cancel this order ..");
			$.get(base_url+"admin/order/cancel/"+orderid,{ comment: $("#cancelcomment").val(), reason_id: $("#reason_id").val() }, function(data){
				ajaxindicatorstop();
				alert(data.message);
				window.location.reload();
			},'json');
		}
	} else {
		alert("Please select reason of cancellation.");
	}
}

function deleteOrder(orderid) {
	if($("#reason_id").val() != "") {
		var ans = confirm("Are you sure !! you want to delete this order ?");
		if(ans) { 
			ajaxindicatorstart("Please hang on .. while we delete this order ..");
			$.get(base_url+"admin/order/delete/"+orderid,{ comment: $("#cancelcomment").val(), reason_id: $("#reason_id").val() }, function(data){
				ajaxindicatorstop();
				alert(data.message);
				window.location.reload();
			},'json');
		}
	} else {
		alert("Please select reason of deletion.");
	}
}

function confirmDelivery(orderid) {
	ajaxindicatorstart("Please hang on.. while we complete order ..");
	$.get(base_url+"admin/order/completed/"+orderid,{ net_total: $("#to_amount").val(), final_total: $("#final_total").val(), pay_mode : $("#cpay_mode").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function requestPayment(orderid) {
	ajaxindicatorstart("Please hang on.. while we made payment request ...");
	$.get(base_url+"admin/order/payment_request/"+orderid,{  }, function(data){
		ajaxindicatorstop();
		alert(data.message);
		window.location.reload();
	},'json');
}

function generateInvoice(orderid) {
	ajaxindicatorstart("Please hang on.. while we generate invoice ..");
	$.post(base_url+"admin/order/invoice/generate/"+orderid,{ discount: $("#discount").val(), adjustment: $("#adjustment").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function saveItems() {
	ajaxindicatorstart("Please hang on.. while we add items ..");
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponseI,
	 		url : base_url+'admin/order/additems',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#additems').ajaxSubmit(options);
}

function showAddRequest(formData, jqForm, options){
	//ajaxindicatorstop();
	$("#response").hide();
   	var queryString = $.param(formData);
	return true;
}
   	
function showAddResponseI(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		ajaxindicatorstop();
		$("#response").removeClass('alert-success');
       	$("#response").addClass('alert-danger');
		$("#response").html(resp.message);
		$("#response").show();
  	} else {
  		ajaxindicatorstop();
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.message);
        $("#response").show();
        alert(resp.message);
        window.location.reload();
  	}
}

function updateItems() {
	var options = {
	 		target : '#uresponse', 
	 		beforeSubmit : ushowAddRequest,
	 		success :  ushowAddResponse,
	 		url : base_url+'admin/order/updateitems',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#updateitems').ajaxSubmit(options);
}

function ushowAddRequest(formData, jqForm, options){
	$("#uresponse").hide();
   	var queryString = $.param(formData);
	return true;
}
   	
function ushowAddResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		$("#uresponse").removeClass('alert-success');
       	$("#uresponse").addClass('alert-danger');
		$("#uresponse").html(resp.message);
		$("#uresponse").show();
  	} else {
  		$("#uresponse").removeClass('alert-danger');
        $("#uresponse").addClass('alert-success');
        $("#uresponse").html(resp.message);
        $("#uresponse").show();
        alert(resp.message);
        window.location.reload();
  	}
}

$("#reason_id").change(function() {
	$("#cancelcomment").val($("#reason_id option:selected").text());
});



$("#itemtype-1").change(function () {
                                
                                var a = $("#itemtype-1").val();
                                var b = $("#category_id").val();
                                var c = $("#brand_id").val();
                                var d = $("#model_id").val();
                                var e = $("#subcategory_id").val();
                               
                                var url = base_url + "admin/item/search/" + a + "/" + b + "/" + c + "/" + d + "/" + e;
                                ajaxindicatorstart("Please hang on.. while we add items ..");
                                $.post(base_url + 'admin/order/add_type_into_session', { a : a}, function(data){
                                  ajaxindicatorstop();  
                                }, 'JSON');
                                $("#itemname-1").typeahead({
                                    onSelect: function (item) {
                                        var itemid12 = $('#inputrateid').val();
                                        //alert(itemid12);
                                        if (itemid12 == '')
                                        {
                                            itemid12 = 0;
                                        }
                                        itemvalue = item.value;

                                        $.get(base_url + "admin/item/detail/" + itemvalue + "/" + a + "/" + b + "/" + c + "/" + d + "/" + e, {}, function (result) {
                                            $("#price-1").val(result.price);
                                            $("#pricelbl-1").html("Rs. " + result.price);
                                            $("#itemtax-1").val(result.tax);
                                            $("#itemid-1").val(item.value);
                                            $('#itemname-1').attr('readonly', 'readonly');
                                        }, 'json');
                                    },
                                    ajax: {
                                        url: url,
                                        timeout: 500,
                                        displayField: "name",
                                        triggerLength: 1,
                                        method: "get",
                                        loadingClass: "loading-circle",
                                        preDispatch: function (query) {
                                            
                                        },
                                        preProcess: function (data) {
                                            if (data.success === false) {
                                                return false;
                                            }
                                            return data;
                                        }
                                    }
                                });
                            });	
<?php foreach ($items as $key => $item) { ?>
                                var itemid = $('#ratecardid').val();
                                $("#eitemtype-<?php echo $key; ?>").change(function () {
                                    //alert("hi");
                                    var a = $("#eitemtype-<?php echo $key; ?>").val();
                                    var b = $("#category_id").val();
                                    var c = $("#brand_id").val();
                                    var d = $("#model_id").val();
                                    var e = $("#subcategory_id").val();
                                    ajaxindicatorstart("Please hang on.. while we add items ..");
                                $.post(base_url + 'admin/order/add_type_into_session', { a : a}, function(data){
                                  ajaxindicatorstop();  
                                }, 'JSON');
                                    $("#eitemname-<?php echo $key; ?>").typeahead({

                                        onSelect: function (item) {
                                            var itemid12 = $('#inputrateid').val();
                                            //alert(itemid12);
                                            if (itemid12 == '')
                                            {
                                                itemid12 = 0;
                                            }
                                            itemvalue = item.value;
                                            $.get(base_url + "admin/item/detail/" + itemvalue + "/" + a + "/" + b + "/" + c + "/" + d + "/" + e, {}, function (result) {
                                                $("#eprice-<?php echo $key; ?>").val(result.price);
                                                $("#epricelbl-<?php echo $key; ?>").html("Rs. " + result.price);
                                                $("#eitemid-<?php echo $key; ?>").val(item.value);
                                                $("#eitemtax-<?php echo $key; ?>").val(result.tax);

                                            }, 'json');
                                        },
                                        ajax: {

                                            url: base_url + "admin/item/search/" + a + "/" + b + "/" + c + "/" + d + "/" + e,
                                            timeout: 500,
                                            displayField: "name",
                                            triggerLength: 1,
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
                                });
                                <?php } ?>
                    function addMoreItems() {
                                var rows = parseInt($("#rcount").val());
                                rows = rows + 1;
                                var html = '<div class="row" style="padding:10px 5px;background-color:#f2f2f2;border-bottom:1px solid #ccc;" id="rowitem-' + rows + '">' +
                                        '<div class="row form-group" style="width:90%;margin-bottom:0;">' +
                                        '<input type="hidden" name="itemid[]" id="itemid-' + rows + '" value=""/>' +
                                        '<div class="col-sm-2">' +
                                        '<select class="form-control itemname" required="" onchange="clear_input(this);" name="itemtype[]" id="itemtype-' + rows + '"><option value="">Select Type</option><option value="1">Service</option><option value="2">Spare</option></select>' +
                                        '</div>' +
                                        '<div class="col-sm-3">' +
                                        '<input type="text" class="form-control itemname itemname1" required="" name="itemname[]" id="itemname-' + rows + '" value="" placeholder="Service/Spare Name" autocomplete="off"/>' +
                                        '</div>' +
                                        '<div class="col-sm-1">' +
                                        '<input type="text" class="form-control itemname" name="itemtax[]" id="itemtax-' + rows + '" value="" placeholder="Tax"/>' +
                                        '</div>' +
                                        '<div class="col-sm-2">' +
                                        '<input type="hidden" name="price[]" id="price-' + rows + '" value=""/>' +
                                        '<span id="pricelbl-' + rows + '" style="line-height:30px;"></span>' +
                                        '</div>' +
                                        ' <div class="col-sm-1">'+
                                			'<input type="text" class="form-control" name="qty[]" id="qty-1" value="1"/>'+
                                		'</div>'+
                                        '<div class="col-sm-2">' +
                                        '<select name="priority[]" required="" id="priority-' + rows + '" class="form-control itemname">' +
                                            '<option value="1">High</option>' +
                                        '<option value="2">Medium</option>' +
                                        '<option value="3">Low</option>' +
                                        '</select>' +
                                        '</div>' +
                                        '<div class="col-sm-1"><a href="javascript:removeItem(' + rows + ');" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a></div>' +
                                        '</div>' +
                                        '</div>';
                                $("#orderitems").append(html);
                                $("#rcount").val(rows);
                                var itemid = $('#ratecardid').val();
                                $("#itemtype-" + rows).change(function () {
                                    //alert("hi");
                                    var a = $("#itemtype-" + rows).val();
                                    //alert(a);
                                    var b = $("#category_id").val();
                                    var c = $("#brand_id").val();
                                    var d = $("#model_id").val();
                                    var e = $("#subcategory_id").val();
                                    ajaxindicatorstart("Please hang on.. while we add items ..");
                                $.post(base_url + 'admin/order/add_type_into_session', { a : a}, function(data){
                                  ajaxindicatorstop();  
                                }, 'JSON');
                                    $("#itemname-" + rows).typeahead({

                                        onSelect: function (item) {
                                            var itemid12 = $('#inputrateid').val();
                                            //alert(itemid12);
                                            if (itemid12 == '')
                                            {
                                                itemid12 = 0;
                                            }
                                            itemvalue = item.value;
                                            $.get(base_url + "admin/item/detail/" + itemvalue + "/" + a + "/" + b + "/" + c + "/" + d + "/" + e, {}, function (result) {
                                                $("#price-" + rows).val(result.price);
                                                $("#pricelbl-" + rows).html("Rs. " + result.price);
                                                $("#itemtax-" + rows).val(result.tax);
                                                $("#itemid-" + rows).val(item.value);
                                                $("#itemname-" + rows).attr('readonly', 'readonly');

                                            }, 'json');
                                        },
                                        ajax: {
                                            url: base_url + "admin/item/search/" + a + "/" + b + "/" + c + "/" + d + "/" + e,
                                            timeout: 500,
                                            displayField: "name",
                                            triggerLength: 1,
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
                                });
                            }
                            function removeItem(count) {
                                $("#rowitem-" + count).remove();
                            }
                            function eaddMoreItems() {

                                var rows = parseInt($("#ercount").val());
                                rows = rows + 1;
                                var html = '<div class="row" style="padding:10px 5px;background-color:#f2f2f2;border-bottom:1px solid #ccc;" id="erowitem-' + rows + '">' +
                                        '<div class="row form-group" style="width:90%;margin-bottom:0;">' +
                                        '<input type="hidden" name="itemid[]" id="eitemid-' + rows + '" value=""/>' +
                                        '<div class="col-sm-2">' +
                                        '<select class="form-control itemname" required="" onchange="clear_input(this);" name="itemtype[]" id="eitemtype-' + rows + '"><option value="">Select Type</option> <option value="1">Service</option><option value="2">Spare</option></select>' +
                                        '</div>' +
                                        '<div class="col-sm-3">' +
                                        '<input type="text" class="form-control itemname itemname1" name="itemname[]" id="eitemname-' + rows + '" value="" placeholder="Service/Spare Name" autocomplete="off"/>' +
                                        '</div>' +
                                        '<div class="col-sm-1">' +
                                        '<input type="text" class="form-control itemname" name="itemtax[]" id="eitemtax-' + rows + '" value="" placeholder="Tax" readonly/>' +
                                        '</div>' +
                                        '<div class="col-sm-2">' +
                                        '<input type="hidden" name="price[]" id="eprice-' + rows + '" value=""/>' +
                                        '<span id="epricelbl-' + rows + '" style="line-height:30px;"></span>' +
                                        '</div>' +
                                        '<div class="col-sm-1"><input type="text"   class="form-control itemname" name="itemqty[]" id="itemqty-'+rows+'"  value="1" autocomplete="off"/></div>'+
                                        '<div class="col-sm-2">' +
                                        '<select name="priority[]" id="priority-' + rows + '" class="form-control itemname">' +
                                        '<option value="">Select Priority</option>' +
                                        '<option value="1">High</option>' +
                                        '<option value="2">Medium</option>' +
                                        '<option value="3">Low</option>' +
                                        '</select>' +
                                        '</div>' +
                                        '<div class="col-sm-1"><a href="javascript:eremoveItem(' + rows + ');" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a></div>' +
                                        '</div>' +
                                        '</div>';
                                $("#eorderitems").append(html);
                                $("#ercount").val(rows);
                                var itemid = $('#rateid').val();
                                $("#eitemtype-" + rows).change(function () {
                                    //alert("hi");
                                    var a = $("#eitemtype-" + rows).val();
                                    //alert(a);
                                    var b = $("#category_id").val();
                                    var c = $("#brand_id").val();
                                    var d = $("#model_id").val();
                                    var e = $("#subcategory_id").val();
                                    ajaxindicatorstart("Please hang on.. while we add items ..");
                                        $.post(base_url + 'admin/order/add_type_into_session', { a : a}, function(data){
                                          ajaxindicatorstop();  
                                        }, 'JSON');
                                    $("#eitemname-" + rows).typeahead({

                                        onSelect: function (item) {
                                            //	var itemid12 = $('#inputrateid1').val();
                                            //alert(itemid);

                                            itemvalue = item.value;

                                            $.get(base_url + "admin/item/detail/" + itemvalue + "/" + a + "/" + b + "/" + c + "/" + d + "/" + e, {}, function (result) {

                                                $("#eprice-" + rows).val(result.price);
                                                $("#epricelbl-" + rows).html("Rs. " + result.price);
                                                $("#eitemtax-" + rows).val(result.tax);
                                                $("#eitemid-" + rows).val(item.value);
                                                $('#eitemname-' + rows).attr('readonly', 'readonly');
                                            }, 'json');
                                        },
                                        ajax: {

                                            url: base_url + "admin/item/search/" + a + "/" + b + "/" + c + "/" + d + "/" + e,
                                            timeout: 500,
                                            displayField: "name",
                                            triggerLength: 1,
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
                                });
                            }

                            

function eremoveItem(count) {
	$("#erowitem-"+count).remove();
}

$("#discount").focusout(function() {
	var o_amount = parseInt($("#o_amount").val());
	var discount = parseInt($("#discount").val());
	/*if(discount > o_o_amount)
	{
		alert("Discount grater than Total");
	}*/
	if(isNaN(discount)) {
		discount = 0;
	}
	var adjustment = parseInt($("#adjustment").val());
	if(isNaN(adjustment)) {
		adjustment = 0;
	}
	var f_amount = o_amount-discount-adjustment;
	$("#grand_total").val(f_amount);
});
$("#adjustment").focusout(function() {
	var o_amount = parseInt($("#o_amount").val());
	var discount = parseInt($("#discount").val());
	var adjustment = parseInt($("#adjustment").val());
	if(isNaN(discount)) {
		discount = 0;
	}
	var adjustment = parseInt($("#adjustment").val());
	if(isNaN(adjustment)) {
		adjustment = 0;
	}
	var f_amount = o_amount - discount - adjustment;
	$("#grand_total").val(f_amount);
});

function editPickupDate() {
	$("#pickup_date_lbl").hide();
	$("#pickup_date_input").show();
}

function updatePickupDate(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/updatepickupdate/"+orderid,{ pickup_date: $("#pickup_date_edit").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function editPickupSlot() {
	$("#pickup_slot_lbl").hide();
	$("#pickup_slot_input").show();
}

function updatePickupSlot(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/updatepickupslot/"+orderid,{ pickup_slot: $("#pickup_slot_edit").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function reschedulePickup(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/reschedulepickup/"+orderid,{ pickup_date: $("#rspickup_date").val(), pickup_slot: $("#rspickup_slot").val(), notes: $("#rsnotes").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		if(data.status == 1)
		window.location.reload();
	},'json');
}

function editDeliveryDate() {
	$("#delivery_date_lbl").hide();
	$("#delivery_date_input").show();
}

function updateDeliveryDate(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/updatedeliverydate/"+orderid,{ delivery_date: $("#delivery_date_edit").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function editDeliverySlot() {
	$("#delivery_slot_lbl").hide();
	$("#delivery_slot_input").show();
}

function updateDeliverySlot(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/updatedeliveryslot/"+orderid,{ delivery_slot: $("#delivery_slot_edit").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function rescheduleDelivery(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/rescheduledelivery/"+orderid,{ delivery_date: $("#rsdelivery_date").val(), delivery_slot: $("#rsdelivery_slot").val(), notes: $("#rsdnotes").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		if(data.status == 1)
		window.location.reload();
	},'json');
}

function editCustomerName() {
	$("#customer_name_lbl").hide();
	$("#customer_name_input").show();
}

function updateCustomerName(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/updatecustomername/"+orderid,{ name: $("#customer_name_edit").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function updateRatecard(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/updateratecard/"+orderid,{ rate_id: $("#rate_id").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}
function editCustomerMobile() {
	$("#customer_mobile_lbl").hide();
	$("#customer_mobile_input").show();
}

function updateCustomerMobile(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/updatecustomermobile/"+orderid,{ mobile: $("#customer_mobile_edit").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}
function editCustomerEmail() {
	$("#customer_email_lbl").hide();
	$("#customer_email_input").show();
}

function updateCustomerEmail(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/updatecustomeremail/"+orderid,{ email: $("#customer_email_edit").val() }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}
function editCustomerAddress() {
	$("#customer_address_lbl").hide();
	$("#customer_address_input").show();
}

function updateCustomerAddress(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/updatecustomeraddress/"+orderid,{ address: $("#customer_address_edit").val() }, function(data){
	ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function editCustomerLandmark() {
	$("#customer_landmark_lbl").hide();
	$("#customer_landmark_input").show();
}

function updateCustomerLandmark(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/updatecustomerlandmark/"+orderid,{ landmark: $("#customer_landmark_edit").val() }, function(data){
	ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function changeStatus(orderid) {
	var status = $("#status_id").val();
	if(status == "") {
		alert("Please select status.");
	} else {
		if(status == 0 || status == 2) {
			ajaxindicatorstart("Please hang on.. while we update ..");
			$.post(base_url+"admin/order/updateorderstatus/"+orderid,{ status: status }, function(data){
				ajaxindicatorstop();
				alert(data.msg);
				window.location.reload();
			},'json');
		} else if(status == 1) {
			$("#pickupModel").modal('show');
		} else if(status == 3) {
			$("#deliveryModel").modal('show');
		} else if(status ==4) {
			$("#confirmModal").modal('show');
		}
	}
}

function updateAdjustment(orderid) {
	if($("#iadjustment").val() > 0) {
		var adj_type = $("input[name='adj_type']:checked"). val();
		$.post(base_url+"admin/order/updateorderadjustment/"+orderid,{ adj_type: adj_type, adjustment: $("#iadjustment").val() }, function(data){
			ajaxindicatorstop();
			alert(data.msg);
			window.location.reload();
		},'json');
	} else {
		alert("Please enter adjustment amount.");
	}
}

function resendPaymentLink(orderid) {
	ajaxindicatorstart("Please hang on.. while we resend payment link ..");
	$.post(base_url+"admin/orders/resendpaymentlink/"+orderid,{ }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function deliveryAttempted(orderid) {
	ajaxindicatorstart("Please hang on.. while we send sms ..");
	$.post(base_url+"admin/order/deliveryattemptedsms/"+orderid,{ }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function deliveryCallAnswered(orderid) {
	ajaxindicatorstart("Please hang on.. while we send sms ..");
	$.post(base_url+"admin/order/deliverycallanssms/"+orderid,{ }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function pickupAttempted(orderid) {
	ajaxindicatorstart("Please hang on.. while we send sms ..");
	$.post(base_url+"admin/order/pickupattemptedsms/"+orderid,{ }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		$("#reSchedulePickup").modal('show');
	},'json');
}

function openInNewTab(url) {
	  var win = window.open(url, '_blank');
	  win.focus();
	}

function ConfirmApproval(orderid) {
	ajaxindicatorstart("Please hang on.. while we Confirm Approval ..");
	$.post(base_url+"admin/order/confirmApproval/"+orderid,{ }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function markworkcompleted(orderid) {
	ajaxindicatorstart("Please hang on.. while we Confirm Approval ..");
	$.post(base_url+"admin/order/markworkCompleted/"+orderid,{ }, function(data){
		ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

function addComment(orderid) {
	ajaxindicatorstart("Please hang on.. while we update ..");
	$.post(base_url+"admin/order/addAdminComment/"+orderid,{ admincomment: $("#admincomment").val() }, function(data){
	ajaxindicatorstop();
		alert(data.msg);
		window.location.reload();
	},'json');
}

$("#newitemtype").change(function() {
	var newitemtype = $('#newitemtype').val();  
		//console.log(newitemtype);   
	if(newitemtype == 1){
		$("#sparetype").hide(); 
		$("#servicetype").show(); 
		var subcategory_id = $('#subcategory_id').val();       
			console.log(subcategory_id);	    
			  $.post(base_url+"admin/catsubcatbyid/", {subcat_id : subcategory_id}, function(data)
			  {
				 	 $('#catsubcat_id').empty();$('#catsubcat_id').append("<option value=''>"+'Select Category of Subcategory'+"</option>");		    
			   if(data.length > 0)
			    {		    
				     for( var i=0; i < data.length; i++)
					     {		   			    
				           $('#catsubcat_id').append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");			
				         }	    
			    }	   
	          },'json');   
	 }else{
		$("#sparetype").show();
		$("#servicetype").hide();
	 }
});

$("#newitemtype").change(function() {
var popupitemtype = $('#newitemtype').val();
if(popupitemtype == 1){
	$('#addnewitemspopup').bootstrapValidator({
		container: function($field, validator) {
			return $field.parent().next('.messageContainer');
	   	},
	    feedbackIcons: {
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    excluded: ':disabled',
	    fields: {
	        servicename: {
	            validators: {
	                notEmpty: {
	                    message: 'Name is required and cannot be empty'
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
	        price: {
	            validators: {
	                notEmpty: {
	                    message: 'Price is required and cannot be empty'
	                }
	            }
	        },       
	        tax: {            
	            validators: {                
	                notEmpty: {                    
	                    message: 'Tax is required and cannot be empty'                
	                 }            
	       		 }        
	        },
	    }
	}).on('success.form.bv', function(event,data) {
		// Prevent form submission
		event.preventDefault();
		addService();
	});
	
	function addService() {
		ajaxindicatorstart("Please hang on.. while we add service ..");
		var options = {
		 		target : '#response', 
		 		beforeSubmit : showAddRequest,
		 		success :  showAddResponse,
		 		url : base_url+'admin/order/service/add',
		 		semantic : true,
		 		dataType : 'json'
		 	};
	   	$('#addnewitemspopup').ajaxSubmit(options);
	}
}else{
	$('#addnewitemspopup').bootstrapValidator({
		container: function($field, validator) {
			return $field.parent().next('.messageContainer');
	   	},
	    feedbackIcons: {
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    excluded: ':disabled',
	    fields: {
	        sparename: {
	            validators: {
	                notEmpty: {
	                    message: 'Name is required and cannot be empty'
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
	        price: {
	            validators: {
	                notEmpty: {
	                    message: 'Price is required and cannot be empty'
	                }
	            }
	        },       
	        tax: {            
	            validators: {                
	                notEmpty: {                    
	                    message: 'Tax is required and cannot be empty'                
	                 }            
	       		 }        
	        },
	    }
	}).on('success.form.bv', function(event,data) {
		// Prevent form submission
		event.preventDefault();
		addSpare();
	});
	
	function addSpare() {
		ajaxindicatorstart("Please hang on.. while we add service ..");
		var options = {
		 		target : '#response', 
		 		beforeSubmit : showAddRequest,
		 		success :  showAddResponse,
		 		url : base_url+'admin/order/spare/add',
		 		semantic : true,
		 		dataType : 'json'
		 	};
	   	$('#addnewitemspopup').ajaxSubmit(options);
	}
}
});

function showAddRequest(formData, jqForm, options){
	ajaxindicatorstop();
	$("#response").hide();
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
		 alert(resp.msg);
  	} else {
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.msg);
        $("#response").show();
        alert(resp.msg);
        //window.location.href = base_url+"admin/mainservice";
        window.location.reload();
  	}
}

function ApprovalUpdate() {
	ajaxindicatorstart("Please hang on.. while we add items ..");
	var options = {
	 		target : '#response', 
	 		beforeSubmit : AshowAddRequest,
	 		success :  AshowAddResponse,
	 		url : base_url+'admin/order/approvalUpdate',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#approvalUpdate').ajaxSubmit(options);
}

function AshowAddRequest(formData, jqForm, options){
	//ajaxindicatorstop();
	$("#response").hide();
   	var queryString = $.param(formData);
	return true;
}
   	
function AshowAddResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		ajaxindicatorstop();
		$("#response").removeClass('alert-success');
       	$("#response").addClass('alert-danger');
		$("#response").html(resp.message);
		$("#response").show();
  	} else {
  		ajaxindicatorstop();
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.message);
        $("#response").show();
        alert(resp.message);
        window.location.reload();
  	}
}
function change() 
{

    var selectBox = document.getElementById("itemtype-1");
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var pricelbl = document.getElementById("pricelbl-1");

	
   // alert(selected);
    if(selected === '1')
        {
    	 pricelbl.readOnly = true;
        }
	    if(selected === '2')
	    {
	    pricelbl.readOnly = false;
    }
	    

}
function changenew(id)  {
  if($('#itemtype-' + id).val() == 1) {
		$('#pricelbl-'+id).attr('readonly', 'readonly');
   } else {
	$('#pricelbl-'+id).removeAttr('readonly')
	}
}


function echange(id) 
{
//     var selectBox = document.getElementById("eitemtype-"+id);
//     var selected = selectBox.options[selectBox.selectedIndex].value;
//     var epricelbl = document.getElementById("epricelbl-"+id);	
//    // alert(selected);
//     if(selected === '1')
//         {
//     	 epricelbl.readOnly = true;
//         }
// 	    if(selected === '2')
// 	    {
// 	    epricelbl.readOnly = false;
//     }
	  	if($('#eitemtype-' + id).val() == 1) {
			$('#epricelbl-'+id).attr('readonly', 'readonly');
	   	} else {
		$('#epricelbl-'+id).removeAttr('readonly')
		}
}

function echangenew(id)  {
  if($('#eitemtype-' + id).val() == 1) {
		$('#epricelbl-'+id).attr('readonly', 'readonly');
   } else {
	$('#epricelbl-'+id).removeAttr('readonly')
	}
}

function saveReminders() {
	ajaxindicatorstart("Please hang on.. while we set Reminder ..");
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponseI,
	 		url : base_url+'admin/order/addreminder',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#setreminder').ajaxSubmit(options);
}

</script>