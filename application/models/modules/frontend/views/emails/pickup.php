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
		<img src="<?php echo asset_url()?>images/icons/email-logo.png" class="img-responsive" alt="" width="200" height="60" />
	</div>
	<div style="padding-top:15px;">
	<br>
	<div style="font-size:16px;">Hi There !</div>
	<br>
	<div id="main-content">Our Field Executive <?php echo $data['pickup_executive'];?> (<?php echo $data['pickup_executive_mobile'];?>) is out for your pick up / delivery.</div>
	<br>
	<div>Please get in touch with us. </div>
	<br>
	<br>
</div>
<br>
<div style="border-bottom:1px solid #d9edf7;background-color:#d9edf7;height:5px;">&nbsp;</div>
<div style="padding:15px 0px;">
	<div style="padding-left:5px;">
	Regards, <br><br>
	Vaa Laundry
	</div>
</div>
</body>
</html>
