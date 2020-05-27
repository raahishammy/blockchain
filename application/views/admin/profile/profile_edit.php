<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Edit Customer Account</title>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/zicros/plugins/morris/morris.css">
         <link href="<?= base_url(); ?>assets/zicros/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/components.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/intlTelInput.css">
        <link href="<?= base_url(); ?>assets/zicros/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/zicros/plugins/switchery/switchery.min.css">
		<!-- Others related css -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />
		<link href="<?= base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
          <link rel="stylesheet" href="<?= base_url(); ?>assets/css/countrySelect.min.css">
          <style>
            .iti-flag {background-image: url("<?= $this->config->item("s3_url"); ?>images/flags.png");}
      .country-select .flag {background-image: url("<?= $this->config->item("s3_url"); ?>images/country-select-flags.png");}
      .country-select {width: 100%;}
        </style>
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
									<h4 class="page-title">Edit Account</h4>
									<ol class="breadcrumb p-0 m-0">
										<li>
                                            <i class="fa fa-dashboard dashboard-icon"></i>
                                          <a href="<?php echo site_url();?>dashboard">Dashboard</a>
                                        </li>
										<li class="active">
											Edit Account
										</li>
									</ol>
									<div class="clearfix"></div>
								</div>
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

                            
               	<?php $attributes = array('class' => 'form-horizontal', 'id' => 'edit-form', 'method' => 'post'); ?>
							   <?php echo form_open(base_url().'profile/update', $attributes); ?>
               <div class="form-group">
                  <label class="col-sm-3 control-label no-padding-right" for="name"> Name </label>

                  <div class="col-sm-6">
                    <input type="hidden" name="user_id" value="<?php echo $user['id'];?>">
                    <input type="text" id="name" name="name" value="<?php echo $user['name'];?>" placeholder="Enter Name" class="form-control" / required>
                  </div>
                </div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="email"> Email </label>

									<div class="col-sm-6">
									  <input type="email" id="email" name="email" value="<?php echo $user['email'];?>" placeholder="Enter Email" class="form-control"/ required>
									</div>

								</div>
							
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="contact"> Contact </label>

									<div class="col-sm-6">
										<input type="tel" id="contact" name="contact" value="<?php echo $user['contact'];?>" placeholder="e.g. +65 2123 4567" class="form-control" / required>
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
     <script src="<?= base_url(); ?>assets/zicros/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>components/jquery-validation/dist/jquery.validate.js"></script>
        <script src="<?= base_url(); ?>components/typeahead.js/dist/typeahead.jquery.js"></script>
        <script src="<?= base_url(); ?>assets/js/intlTelInput.min.js"></script>
        <script>
            jQuery(function($) {
            $("#contact").intlTelInput({
             preferredCountries: ["au", "in", "gb", "nz", "sg", "us" ],
             // allowDropdown: false,
            // autoHideDialCode: true,
             // autoPlaceholder: false,
             dropdownContainer: "body",
             // excludeCountries: ["us"],
             geoIpLookup: function(callback) {
               $.getJSON('https://freegeoip.net/json/')
                .done (function(resp)
                {
                  var countryCode = (resp && resp.country_code) ? resp.country_code : "";
                  callback(countryCode);
                });
             },
             initialCountry: "sg",
             nationalMode: false,
             // separateDialCode: true,
             utilsScript: "<?= base_url(); ?>assets/js/utils.js"
          });
        });
        </script>
 </div>
 </div>
  </body>
</html>
