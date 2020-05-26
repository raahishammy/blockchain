<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
		<title>Change Password</title>
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
															<?php echo form_open('update/password', $attributes); ?>
															
															<div class="form-group">
																<label class="control-label no-padding-right" for="password"> Old Password </label>

																
																  <input type="password" id="password" name="password" value="" placeholder="Old Password" class="form-control" required/>

																
															</div>
															<div class="form-group">
																<label class="control-label no-padding-right" for="email"> New Password </label>

																
																  <input type="password" id="new_password" name="new_password" value="" placeholder="New Password" class="form-control" required/>
																
															</div>

															<div class="form-group">
																<label class="control-label no-padding-right" for="password"> Confirm Password </label>

																
																  <input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Confirm Password" class="form-control" required/>
																
															</div>
															
																<div class="clearfix form-actions">
																	<div class="">
																		<button class="btn btn-info" type="submit" form="create-form" name="changePswd" value="changePswd">
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
																</form>					
                        				</div>
                        			</div>
                                </div>
                            </div>
                        </div>
						  </div> <!-- container -->
				 </div> <!-- content -->

                <!-- Footer -->
			<?php $this->load->view('admin/layouts/footer') ?>
			 </div>
		 </div>
   </body>
</html>
