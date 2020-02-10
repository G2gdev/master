<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
		.emailer{
			max-height: 450px;
		}
		ul.footer-links {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #3b598a;
		}
		
		ul.footer-links li {
		    float: left;
		}
		
		ul.footer-links li a {
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}
		
		/* Change the link color to #111 (black) on hover */
		ul.footer-links li a:hover {
		    background-color: #111;
		}
		th {
			padding:7px;
    		text-align: left;
		}
		td {
			padding-top:7px;
			padding-left:7px;
		}
		.item_set {
			background-color:#ddd;
			padding:7px;
		}
		#main-content {
			font-size:14px;
		}
    
		</style>
	</head>
<body>
<div style="margin-left:15px;">
	<div style="background-color:#f2f2f2;">
		<img src="<?php echo asset_url();?>images/img/logomain.png" class="img-responsive" alt="" width="200" height="60" />
	</div>
		<?php $name = explode(" ",$data['name']);				
			  $fname = $name[0];					
			  //$lname = $name[1]; ?>	
	<div style="padding-top:15px;">
	<br>
	<div style="font-size:16px;">Hi <?php echo $fname;?>,</div>
	<br>
	<div id="main-content">Apologies for cancelling the appointment because of <?php echo $data['reason']; ?></div>
	<br>
	<!-- <div>Please get in touch with us. </div> -->
	<br>
	<br>
</div>
<br>
<div style="padding:15px 0px;">
	<div style="padding-left:5px;">
	Thanks!  <br>
    Garage2Ghar Team
	</div>
</div>
</body>
</html>
