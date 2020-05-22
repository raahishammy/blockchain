<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        
        <!-- App title -->
        <title>Edit Customer Account</title>

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
									<h4 class="page-title">Edit Account</h4>
									<ol class="breadcrumb p-0 m-0">
										<li>
											<i class="fa fa-home home-icon"></i>
										  <a href="/home">Home</a>
										</li>
										<li><a href="#">Account</a></li>
										<li><a href="#">User</a></li>
										<li class="active">
											Edit
										</li>
									</ol>
									<div class="clearfix"></div>
								</div>
               	<?php $attributes = array('class' => 'form-horizontal', 'id' => 'edit-form'); ?>
								<?php echo form_open(current_url(), $attributes); ?>
               <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="name"> Name </label>

                  <div class="col-sm-9">
                    <input type="text" id="name" name="name" value="<?php //echo $user['name'];?>" placeholder="Enter Name" class="form-control" />
                  </div>
                </div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="email"> Email </label>

									<div class="col-sm-9">
									  <input type="text" id="email" name="email" value="<?php //echo $user['email'];?>" placeholder="Enter Email" class="form-control"/>
									</div>

								</div>
							
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="contact"> Contact </label>

									<div class="col-sm-9">
										<input type="tel" id="contact" name="contact" value="<?php //echo $user['contact'];?>" placeholder="e.g. +65 2123 4567" class="form-control" />
									</div>
								</div>

								<!--------- 20-12-2017 added by subh end ------------>

								</form>
								<div class="clearfix form-actions">
									<div class="col-md-offset-3 col-md-9">
										<button class="btn btn-info" type="submit" form="edit-form">
											<i class="ace-icon fa fa-check bigger-110"></i>
											Update Information
										</button>

										&nbsp; &nbsp; &nbsp;
										<a href="<?= site_url(); ?>home" class="btn">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											Cancel
										</a>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
                        				</div>
                        			</div>
                                </div>
                            </div>
                        </div>
					</div> <!-- container -->
				 </div> <!-- content -->
	<?php $this->load->view('admin/layouts/footer') ?>
 </div>
			<!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
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
	
    </body>
</html>
