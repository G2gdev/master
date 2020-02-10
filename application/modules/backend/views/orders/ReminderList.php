<style>
<!--
.btn-plus{
	margin:5px 0px;
}
.modal-header {
	background-color:#337ab7;
	color:#fff;
}
.datepicker-dropdown {
	z-index:1050 !important;
}
-->
</style>
<div id="page-wrapper" style="padding:0 16px;">
	<div class="row">
        	<div class="panel panel-default" style="width: 100%;">
            	<div class="panel-heading">
                	<span style="cursor:pointer;" onclick="hideNav();" id="show-hide-nav"><i class="fa fa-chevron-circle-left fa-2x"></i></span> Reminder List
              	</div>              	
               	<div class="panel-body">
                	<div class="dataTable_wrapper" style="overflow:auto;">
                        	<table class="table table-striped table-bordered table-hover" id="example1">
							<thead class="bg-info">
								<tr>
								<!-- 	<th><input type="checkbox" name="selectall" id="selectall" /></th> -->
									
									<th>OrderID</th>
									<th>Reminder Date</th>	
									<th>Order Code</th>																	
									<th>Reminder Comment</th>									
									<th>Actions</th>
								</tr>
							</thead>
							<tbody class="inoice_table">
							<?php if (isset($reminder)) { ?>
							<?php foreach ($reminder as $item):?>
								<tr>
									<td>
										<a href = "<?php echo base_url();?>admin/order/view_details/<?php echo $item['orderid']?>">
											<?php echo $item['orderid'];?>
										</a>
									</td>
									<td>
										<?php echo $item['reminder_date'];?>
									</td>
									<td>
										<?php echo $item['ordercode'];?>
									</td>
									
									<td>
										<?php echo $item['reminder_comment'];?>
									</td>
									
									<td>
										<a href = "<?php echo base_url();?>admin/order/view_details/<?php echo $item['orderid']?>" class="btn btn-success icon-btn btn-xs">View</a>
									</td>
								</tr>
								<?php endforeach;?>
							<?php }?>
							</tbody>
						</table>
					</div>
				</div>
		</div>
	</div>
</div>

<script src="<?php echo asset_url();?>js/bootstrap-datepicker.min.js"></script>
<script>

$(document).ready(function() {

    $('#example1').DataTable( {
    	dom: 'Bfrtip',
    	buttons: [
    	 	'excelHtml5'
  		]
    } );
} );


</script>