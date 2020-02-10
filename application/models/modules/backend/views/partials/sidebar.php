<!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
			  <?php //print_r($adminsession); 
			        //print_r($_SESSION ['useracces']);
			        //echo $_SESSION ['useracces'][0]['access_type'];
					// echo $_SESSION ['adminsession']['first_name']; ?>
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                      <!--   <div><img src="<?php echo asset_url();?>backend/images/users/varun.jpg" alt="user-img" class="img-circle"></div>  -->
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION ['adminsession']['first_name'] .' '. $_SESSION ['adminsession']['last_name']; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
						<!-- 	<li><a href="<?php echo base_url();?>admin/users"><i class="ti-user"></i> Users </a></li> -->
                            <!--<li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>-->
                        <!--     <li role="separator" class="divider"></li> -->
                            <li><a href="<?php echo base_url();?>admin/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
							   <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
							</span> 
						</div>
                        <!-- /input-group -->
                    </li>
                   <!-- <li>
                        <div class="hide-menu t-earning">
                            <div id="sparkline2dash" class="m-b-10"></div><small class="db">TOTAL EARNINGS - JUNE 2017</small>
                            <h3 class="m-t-0 m-b-0">$2,478.00</h3></div>
                    </li>-->
                    <!--<li class="nav-small-cap m-t-10">--- Main Menu</li>-->
					<li><a href="<?php echo base_url();?>admin/dashboard" class="waves-effect"><i class="fa fa-desktop"></i> <span class="hide-menu"> Dashboard</span></a></li>
					<?php if($_SESSION ['useracces'][0]['access_type'] == 1) { ?>
					<li><a href="#" class="waves-effect active"><i class="fa fa-opera"></i><span class="hide-menu"> Orders <span class="fa arrow"></span><span class="label label-rouded label-custom pull-right"></span></span></a>
						<ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url()?>admin/order/new">Book New Orders</a> </li>
                            <li> <a href="<?php echo base_url()?>admin/order/pendingorders">New Orders</a> </li>
                            <li> <a href="<?php echo base_url()?>admin/order/assignedorders">Assigned Orders</a> </li>
                            <li> <a href="<?php echo base_url()?>admin/order/ongoingorders">Ongoing Orders/Estimate Genrated</a> </li>
                            <li> <a href="<?php echo base_url()?>admin/order/approvalorders">Ongoing Orders/working</a> </li>
                            <li> <a href="<?php echo base_url()?>admin/order/completedorders">Work Completed Orders</a> </li>
                            <li> <a href="<?php echo base_url()?>admin/order/deliverycompletedorders">Delivery Completed Orders</a> </li>
                            <li> <a href="<?php echo base_url()?>admin/order/cancelledorders">Cancelled Orders</a> </li>
                        </ul>
					</li> 
					<?php } ?>
					<?php if($_SESSION ['useracces'][1]['access_type'] == 1) { ?>
					<li> <a href="#" class="waves-effect active"><i class="ti-settings" data-icon="v"></i> <span class="hide-menu"> Settings <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right"></span></span></a>
                        <ul class="nav nav-second-level">
                        	<li> <a href="<?php echo base_url()?>admin/staticsubcategory/list">Service Category</a></li>
							<li> <a href="<?php echo base_url()?>admin/mainservice">Services & Spare </a></li>
                          <!--   <li> <a href="<?php echo base_url()?>admin/mainarea">Area</a></li>  -->
                            <li> <a href="<?php echo base_url()?>admin/maintimeslot">Time Slots</a></li>
                            <li> <a href="<?php echo base_url()?>admin/mainquality">Quality Management</a></li>
                            <li> <a href="<?php echo base_url()?>admin/mainstatus/list">Status Management</a></li>
                            <li> <a href="<?php echo base_url()?>admin/general/reasonlist">Cancellation Reasons</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                    <?php if($_SESSION ['useracces'][2]['access_type'] == 1) { ?>
                    <li><a href="#" class="waves-effect active"><i class="fa fa-opera"></i><span class="hide-menu">Vendor <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right"></span></span></a>
						<ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url()?>admin/vendor/list">Add New Vendor</a> </li>
                              <!-- li> <a href="<?php echo base_url()?>admin/vendor/list_trial">Add New Vendor Trial</a> </li-->
                          <!--   <li> <a href="#">Manage Vendor</a> </li> -->
                        </ul>
					</li>
					<?php } ?>
					<?php if($_SESSION ['useracces'][3]['access_type'] == 1) { ?>
					 <li><a href="#" class="waves-effect active"><i class="fa fa-opera"></i><span class="hide-menu">Marketing <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right"></span></span></a>
						<ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url()?>admin/coupon/list">Create Coupon</a> </li>
                           <!--  <li> <a href="#">Manage Campaign</a> </li> -->
                        </ul>
					</li>
					<?php } ?>
					<?php if($_SESSION ['useracces'][4]['access_type'] == 1) { ?>
					 <li><a href="#" class="waves-effect active"><i class="fa fa-opera"></i><span class="hide-menu">Ticket <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right"></span></span></a>
						<ul class="nav nav-second-level">
						<li> <a href="<?php echo base_url()?>admin/general/ticket">Manage Category/Subcategory</a> </li>
                            <li> <a href="<?php echo base_url()?>admin/general/tickets">Manage Ticket</a> </li>
                        <!--     <li> <a href="#">Manage Ticket</a> </li> -->
                        </ul>
					</li>
					<?php } ?>
					<?php if($_SESSION ['useracces'][5]['access_type'] == 1) { ?>
					 <li><a href="#" class="waves-effect active"><i class="fa fa-registered"></i><span class="hide-menu">Reports<span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right"></span></span></a>
						<ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url()?>admin/report/business">Business Report</a> </li>
                            <li> <a href="<?php echo base_url()?>admin/report/vendor">Vendor Report</a> </li>
                        </ul>
					</li>
					<?php } ?>
				<?php if($_SESSION ['useracces'][6]['access_type'] == 1) { ?>
                 <li><a href="<?php echo base_url()?>admin/customer/list" class="waves-effect active"><i class="fa fa-users"></i><span class="hide-menu"> Customers </span></a></li>
				<?php } ?>
				<?php if($_SESSION ['useracces'][7]['access_type'] == 1) { ?>
				 <li><a href="<?php echo base_url()?>admin/mainemp" class="waves-effect active"><i class="fa fa-opera"></i><span class="hide-menu">Employee </span></a></li>
				 <li><a href="<?php echo base_url()?>admin/reminderlist" class="waves-effect active"><i class="fa fa-opera"></i><span class="hide-menu">Reminder List </span></a></li>
				
				<?php } ?>
					  <!--<li><a href="#" class="waves-effect active"><i class="fa fa-users"></i><span class="hide-menu">Notification</span></a></li>-->
				
				
				<!--	<li><a href="" class="waves-effect active"><i class="fa fa-registered"></i><span class="hide-menu"> Reports </span></a></li>
					<li> <a href="" class="waves-effect active"><i class="ti-settings" data-icon="v"></i> <span class="hide-menu"> Discounts <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right">1</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url()?>admin/coupon/list">Coupon</a> </li>
                            <li> <a href="<?php echo base_url()?>admin/restaurantoffers">Offer</a> </li>
                        </ul>
                    </li>-->
					
                 
                   <!-- <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Apps <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html">Chat-message</a></li>
                            <li><a href="javascript:void(0)" class="waves-effect">Inbox<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="inbox.html">Mail box</a></li>
                                    <li> <a href="inbox-detail.html">Inbox detail</a></li>
                                    <li> <a href="compose.html">Compose mail</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="waves-effect">Contacts<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="contact.html">Contact1</a></li>
                                    <li> <a href="contact2.html">Contact2</a></li>
                                    <li> <a href="contact-detail.html">Contact Detail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->
                   <li><a href="<?php echo base_url();?>admin/logout" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                   <!-- <li class="nav-small-cap">--- Support</li>
                    <li><a href="documentation.html" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
                    <li><a href="gallery.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Gallery</span></a></li>
                    <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li>-->
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->