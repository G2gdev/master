<html>
<head>
<style>
	.items td{
		border-bottom:1px solid #212121;
		border-right:1px solid #212121;
		padding:5px;
	}
</style>
</head>
<body>
	<div class="ii gt m14b7cc3fd14b6cd9adPadO">
		<div>
			<table width="60%" cellpadding=0 border=0>
				<tbody>
					<tr>
						<td>
							<table cellspacing="0 cellpadding=0 border=0 bgcolor=#68c1ec align=center style=background: #68c1ec">
								<tbody>
									<tr>
										<td valign="top" >
											<a href="<?php echo base_url();?>"> 
												<img src='<?php echo asset_url()?>images/img/logomain.png' height='85px' width='152px' style="margin-left:485px;margin-top:18px;">
											</a> 
											<br />
										</td>
									</tr>
								</tbody>
							</table>
							<table width="581 cellspacing=0 cellpadding=0 border=0 align=center style=border-bottom: 1px solid #e1e1e1;margin-bottom:30px;">
								<tbody>
									<tr>
										<td valign="top style=padding: 0px 13px 10px 14px;font-family:Arial">
											<table width="100% cellspacing=0 cellpadding=0">
												<tbody>
												<?php $name = explode(" ",$data['name']);
															  $fname = $name[0];
															//  $lname = $name[1];   ?>
													<tr>
														<td style="color:#000;font-family:Arial;font-size:16px;padding-bottom:18px;">
															Hi <?php echo $fname; ?>,
														</td>
													</tr>
													
													<tr>
														<td style="color:#000;font-size:16px;font-family:Arial;padding-bottom:14px;">
															Your Bike is ready! Thanks again for choosing Garage2Ghar.
														</td>
													</tr>
													
													<tr>
														<td style="color:#000;font-size:16px;font-family:Arial;padding-bottom:19px;">
															Thanks, <br><br>Team Garage2Ghar!
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
							
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
