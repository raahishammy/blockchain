<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        
        <!-- App title -->
        <title>Change Password</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/zicros/plugins/morris/morris.css">

        <!-- App css -->
		
        <link href="<?= base_url(); ?>assets/zicros/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/zicros/plugins/switchery/switchery.min.css">
		<!-- Others related css -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />
		<link href="<?= base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?= base_url(); ?>assets/zicros/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- Header Top  -->
            <?php
                $header_data = array();
                $header_data['nav'] = $this->load->view('admin/layouts/nav', ['dashboard' => 'active'], true);
                $this->load->view('admin/layouts/header', $header_data);
            ?>
            <!-- Header End  -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
									<h4 class="page-title">Change Password</h4>
									<ol class="breadcrumb p-0 m-0">
										<li>
											<i class="fa fa-home home-icon"></i>
										  <a href="<?php echo site_url();?>">Home</a>
										</li>
										<li>
											<i class="fa fa-dashboard dashboard-icon"></i>
										  <a href="<?php echo site_url();?>dashboard">Dashboard</a>
										</li>
										<li class="active">
											Change Password
										</li>
									</ol>
									<div class="clearfix"></div>
								</div>
							</div>
							<?php if ($this->session->flashdata('fail')): ?>
		  								<div class="alert alert-danger">
		  									<button type="button" class="close" data-dismiss="alert">
		  										<i class="fa fa-times"></i>
		  									</button>
		  									<?php echo $this->session->flashdata('fail') ?>
		  									<br />
		  								</div>
										<?php endif; ?>
		  							<?php if ($this->session->flashdata('success')): ?>
		  								<div class="alert alert-success">
		  									<button type="button" class="close" data-dismiss="alert">
		  										<i class="fa fa-times"></i>
		  									</button>
		  									<?php echo $this->session->flashdata('success') ?>
		  									<br/>
		  								</div>
		  							<?php endif; ?>
						</div>
                        <!-- end row -->
<div class="row">
						<div class="col-md-12">
						<?php if (!empty(validation_errors())): ?>
															<div class="alert alert-danger">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<?php echo validation_errors('<li>', '</li>') ?>
																<br />
															</div>
															<?php endif; ?>
															
															<?php if ($this->session->flashdata('warning')): ?>
															<div class="alert alert-warning">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<?php echo $this->session->flashdata('warning') ?>
																<br />
															</div>
															<?php endif; ?>
															
															<?php if ($this->session->flashdata('fail')): ?>
															<div class="alert alert-danger">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<?php echo $this->session->flashdata('fail') ?>
																<br />
															</div>
															<?php endif; ?>
														<?php if ($this->session->flashdata('success')): ?>
															<div class="alert alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<?php echo $this->session->flashdata('success') ?>
																<br />
															</div>
														<?php endif; ?>
						</div>
                            <div class="col-md-6 col-md-offset-3">
                                <div class="card-box">
                        			<div class="">
                        				<div class="">
                        					<!-- PAGE CONTENT BEGINS -->
															<?php $attributes = array('class' => 'form-horizontal', 'id' => 'create-form'); ?>
															<?php echo form_open(current_url(), $attributes); ?>
															
															<div class="form-group">
																<label class="control-label no-padding-right" for="password"> Old Password </label>

																
																  <input type="password" id="password" name="password" value="" placeholder="Old Password" class="form-control" />
																
															</div>
															
															<?php //echo !empty(trim(set_value('new_password'))) ? set_value('new_password') : '' ?>
															
															<div class="form-group">
																<label class="control-label no-padding-right" for="email"> New Password </label>

																
																  <input type="password" id="new_password" name="new_password" value="" placeholder="New Password" class="form-control" />
																
															</div>

															<div class="form-group">
																<label class="control-label no-padding-right" for="password"> Confirm Password </label>

																
																  <input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Confirm Password" class="form-control" />
																
															</div>
															
																<div class="clearfix form-actions">
																	<div class="">
																		<button class="btn btn-info" type="submit" form="create-form">
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Submit
																		</button>

																		&nbsp; &nbsp; &nbsp;
																		<a href="<?= site_url(); ?>home" class="btn">
																			<i class="ace-icon fa fa-undo bigger-110"></i>
																			Cancel
																		</a>
																	</div>
																</div>
																</form>					<!-- PAGE CONTENT ENDS -->
                        				</div>
                        			</div>
                                </div>
                            </div>
                        </div>
						


                       


                        <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer -->
								<?php $this->load->view('admin/layouts/footer') ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


       

        <!-- jQuery  -->
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/detect.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/fastclick.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.blockUI.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/waves.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.scrollTo.min.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="<?= base_url(); ?>assets/zicros/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="<?= base_url(); ?>assets/zicros/plugins/morris/morris.min.js"></script>
		<script src="<?= base_url(); ?>assets/zicros/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->

        <!-- App js -->
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.core.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.app.js"></script>
		 <script>
            var drivers_online = '<?=$drivers_online?>';
            var resizefunc = [];
			!function($) {
				"use strict";

				var Dashboard1 = function() {
					this.$realData = []
				};

				//creates Bar chart
				Dashboard1.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
					Morris.Bar({
						element: element,
						data: data,
						xkey: xkey,
						ykeys: ykeys,
						labels: labels,
						hideHover: 'auto',
						resize: true, //defaulted to true
						gridLineColor: '#eeeeee',
						barSizeRatio: 0.2,
						barColors: lineColors,
						preUnits: '$'
					});
				},

				//creates line chart
				Dashboard1.prototype.createLineChart = function(element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
					Morris.Line({
					  element: element,
					  data: data,
					  xkey: xkey,
					  ykeys: ykeys,
					  labels: labels,
					  fillOpacity: opacity,
					  pointFillColors: Pfillcolor,
					  pointStrokeColors: Pstockcolor,
					  behaveLikeLine: true,
					  gridLineColor: '#eef0f2',
					  hideHover: 'auto',
					  resize: true, //defaulted to true
					  pointSize: 0,
					  lineColors: lineColors,
						postUnits: '@'
					});
				},

				//creates Donut chart
				Dashboard1.prototype.createDonutChart = function(element, data, colors) {
					Morris.Donut({
						element: element,
						data: data,
						resize: true, //defaulted to true
						colors: colors
					});
				},

				
				Dashboard1.prototype.init = function() {

					//creating bar chart
					var $barData  = [
						{ y: '<?php echo $revenue_sixmonths[0]['month']; ?>', a: '<?php echo $revenue_sixmonths[0]['total']; ?>' },
						{ y: '<?php echo $revenue_sixmonths[1]['month']; ?>', a: '<?php echo $revenue_sixmonths[1]['total']; ?>' },
						{ y: '<?php echo $revenue_sixmonths[2]['month']; ?>', a: '<?php echo $revenue_sixmonths[2]['total']; ?>' },
						{ y: '<?php echo $revenue_sixmonths[3]['month']; ?>', a: '<?php echo $revenue_sixmonths[3]['total']; ?>' },
						{ y: '<?php echo $revenue_sixmonths[4]['month']; ?>', a: '<?php echo $revenue_sixmonths[4]['total']; ?>' },
						{ y: '<?php echo $revenue_sixmonths[5]['month']; ?>', a: '<?php echo $revenue_sixmonths[5]['total']; ?>' }
						
					];
					this.createBarChart('morris-bar-revenue', $barData, 'y', ['a'], ['Statistics'], ['#3bafda']);

					//create line chart
					 var $data  = [
						{ y: '<?php echo $cancel_by_pass[0]['month']; ?>', a: '<?php echo $cancel_by_pass[0]['no_trips']; ?>', b: '<?php echo $cancel_by_drv[0]['no_trips']; ?>' },
						{ y: '<?php echo $cancel_by_pass[1]['month']; ?>', a: '<?php echo $cancel_by_pass[1]['no_trips']; ?>', b: '<?php echo $cancel_by_drv[1]['no_trips']; ?>' },
						{ y: '<?php echo $cancel_by_pass[2]['month']; ?>', a: '<?php echo $cancel_by_pass[2]['no_trips']; ?>', b: '<?php echo $cancel_by_drv[2]['no_trips']; ?>' },
						{ y: '<?php echo $cancel_by_pass[3]['month']; ?>', a: '<?php echo $cancel_by_pass[3]['no_trips']; ?>', b: '<?php echo $cancel_by_drv[3]['no_trips']; ?>' },
						{ y: '<?php echo $cancel_by_pass[4]['month']; ?>', a: '<?php echo $cancel_by_pass[4]['no_trips']; ?>', b: '<?php echo $cancel_by_drv[4]['no_trips']; ?>' },
						{ y: '<?php echo $cancel_by_pass[5]['month']; ?>', a: '<?php echo $cancel_by_pass[5]['no_trips']; ?>', b: '<?php echo $cancel_by_drv[5]['no_trips']; ?>' }
					  ];
					this.createBarChart('morris-line-example', $data, 'y', ['a','b'], ['Passanger','Driver'],['#10c469','#188ae2']); 

					//creating donut chart
                    
                    console.log(drivers_online);
					var $donutData = [
							{label: "Online", value: <?php echo $order_source['online']; ?>},
							{label: "Mobile App", value: <?php echo $order_source['phone']; ?>},
							{label: "Driver App", value: drivers_online}
						];
					this.createDonutChart('sales-source-donut', $donutData, ['#4bd396', '#f5707a','#3c763d']);
				},
				//init
				$.Dashboard1 = new Dashboard1, $.Dashboard1.Constructor = Dashboard1
			}(window.jQuery),

			//initializing 
			function($) {
				"use strict";
				$.Dashboard1.init();
			}(window.jQuery);
        </script>
    </body>
</html>
