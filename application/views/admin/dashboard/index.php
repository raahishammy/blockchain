<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
         <title>Dashboard</title>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/zicros/plugins/morris/morris.css">
        <link href="<?= base_url(); ?>assets/zicros/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/zicros/plugins/switchery/switchery.min.css">
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />
		<link href="<?= base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
        <script src="<?= base_url(); ?>assets/zicros/js/modernizr.min.js"></script>
 </head>
     <body class="fixed-left">
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
  <div id="wrapper">
            <?php
                $header_data = array();
                $header_data['nav'] = $this->load->view('admin/layouts/nav', ['dashboard' => 'active'], true);
                $this->load->view('admin/layouts/header', $header_data);
            ?>
             <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
									<h4 class="page-title">Dashboard</h4>
									<ol class="breadcrumb p-0 m-0">
									<li class="active">
											Dashboard
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
                    <div class="row">
                  <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                   
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary " title="Statistics">User Details</p>
                                       <p>Name: </b><?php echo $user['name'];?> <small></small></p>
                                        <p>Email: </b><?php echo $user['email'];?> <small></small></p>
                                         <p>Phone: </b><?php echo $user['contact'];?> <small></small></p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                     </div> <!-- container -->
                  </div> <!-- content -->
            <?php $this->load->view('admin/layouts/footer') ?>
             <script src="<?= base_url(); ?>assets/zicros/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/bootstrap.min.js"></script>
          </div>
         </div>
     </body>
</html>
