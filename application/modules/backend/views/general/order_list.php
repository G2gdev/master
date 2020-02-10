 <table class="table table-striped table-bordered table-hover" id="tblRestos">
							<thead class="bg-info">
								<tr>
 									<th >OrderID</th>
									<th >Order Code</th>
									<th >Service/Spare</th>
  									<th  >PickUp Date</th>
									<th >Visiting Slot</th>
									<th >Actions</th>
								</tr>
							</thead>
							<tbody class="inoice_table">
							<?php if (isset($orders)) { ?>
							<?php foreach ($orders as $item):?>
								<tr>
								<!-- 	<td><input type="checkbox" name="orderid[]" class="orderid" value="<?php echo $item['orderid'];?>"/></td> -->
									<td>
										<a href = "<?php echo base_url();?>admin/order/view_details/<?php echo $item['orderid']?>" target="_blank">
											<?php echo $item['orderid'];?>
										</a>
									</td>
									<td>
										<?php echo $item['ordercode'];?>
									</td>
									<td>
										<?php echo $item['services'];?>
									</td>
									 
									<td>
										<?php echo date('j M Y',strtotime($item['pickup_date']));?>
									</td>
									<td>
										<?php echo $item['slot'];?>
									</td>
									<td>
										<!-- <a target="_blank" href = "<?php echo base_url();?>admin/order/view_details/<?php echo $item['orderid']?>" class="btn btn-success icon-btn btn-xs">Details</a> --> 
										<input type="radio" name="tab_orderid" value="<?php echo $item['orderid']?>">
									</td>
								</tr>
								<?php endforeach; ?>
							<?php }?>
							</tbody>
						</table>
						<script type="text/javascript">
							 $('input[type="radio"]').click(function(){
									if ($(this).is(':checked'))
								    { 
								    	var id = $(this).val();
										$.post(base_url+"admin/orderdetail", {orderid : id}, function(data) {
											$('#orderid').attr('selected','');
											$('#category_id').attr('selected','');
											$('#subcategory_id').attr('selected','');
											$('#category_id option[value='+data[0].category_id+']').attr("selected", "selected");
											$('#subcategory_id option[value='+data[0].sub_id+']').attr("selected", "selected");
								      		$('#orderid option[value='+id+']').attr("selected", "selected");
								      		$('#addticket').bootstrapValidator('revalidateField', 'ticket[orderid]');
											$('#addticket').bootstrapValidator('revalidateField', 'ticket[category_id]');
											$('#addticket').bootstrapValidator('revalidateField', 'ticket[subcategory_id]');
		           						},'json');    
								    }
								  }); 
						</script>