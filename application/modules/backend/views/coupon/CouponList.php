<style>
<!--
.btn-plus{
	margin:5px 0px;
}
-->
</style>

<div id="page-wrapper">
	<div class="row" >
		<div>
			<form action="" method="post">
			
			</form>
		</div>
		<div class="col-lg-12" style="padding:0px">
			<div class="btn-plus">
			<a href="<?php echo base_url();?>admin/coupon/newCoupon" class="btn btn-primary view-contacts bottom-margin">
				<i class="fa fa-plus"></i> Add
			</a>
			</div>
        	<div class="panel panel-default"  >
            	<div class="panel-heading" style="width:500">
                	Coupon List
              	</div>
              <div class="panel-body">
				<div class="dataTable_wrapper">
					<table class="table table-striped table-bordered table-hover" id="tblCity">	<thead class="bg-info">
								<tr>
								<th>Id</th>
									<th>Name</th>
									<th>Coupon Code</th>
									<th>Discount Type</th>
                                    <th style="width:100px">From Date <br/>To Date</th>
									<th>Minimum order Value</th>
									<th>Maximum Discount Value</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php if (isset($coupons)) { ?>
						            <?php foreach ($coupons as $item):?>
								<tr>
								<td><?php echo $item['id'];?></td>
									<td><?php echo $item['name'];?></td>
									<td><?php echo $item['coupon_code'];?></td>
									<td><?php echo $item['discount_type'];?></td>
                                    <td><?php echo date('d-m-Y',strtotime($item['start_date']));?><br/><?php echo date('d-m-Y',strtotime($item['end_date'])); ?></td> 
									<td><?php echo $item['min_order_value'];?></td>
									<td><?php echo $item['max_discount'];?></td>
							        <td><a href = "<?php echo base_url();?>admin/coupon/update/<?php echo $item['id'];?>" class="btn btn-success icon-btn btn-xs"><i class="fa fa-pencil"></i></a>
                                    </td>
									
								</tr>
							    <?php endforeach;?>
						        <?php } else{?>
								
								<tr><td colspan="5">Records not found.</td></tr>
							<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url();?>admin/coupon/newCoupon" class="btn btn-primary view-contacts bottom-margin">
				<i class="fa fa-plus"></i> Add 
			</a>
		</div>
	</div>
</div>
<!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

<!-- Modal -->
<script>
$(document).ready(function(){
    $('#tblCity').DataTable();
});
    function deleteVendor(a)
    {
        //alert("dfsdf");
       $.get(base_url + "admin/coupon/deletevendor/"+a, {vendorid: a}, function (data) {
                   // var html = "<option value=''>Select Area</option>";
                   
                   alert("Delete Complete");
                   window.location.reload();
                });
    }
</script>
    
    