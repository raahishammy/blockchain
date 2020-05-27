<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
		<title>Refer Friends & Earn Credit</title>
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
									<h4 class="page-title">Referral Link</h4>
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
											Refer Friends & Earn Credit
										</li>
									</ol>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
                      
					<div class="row">
						<div class="col-md-12">
						
						
															<div class="alert alert-info">
																<button type="button" class="close" data-dismiss="alert">
																</button>
																Refer Freind and Earn Credit
																<br />
															</div>
														
						
						   </div>
							
						<div class="col-md-12">
							Share my referral link with freinds</br>
						<?php echo site_url();?>referral/<?php echo md5($user['id']);?>
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
