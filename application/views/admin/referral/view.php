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
									<h4 class="page-title">Refer Freind</h4>
									<ol class="breadcrumb p-0 m-0">
										<li>
											<i class="fa fa-dashboard dashboard-icon"></i>
										  <a href="<?php echo site_url();?>dashboard">Dashboard</a>
										</li>
										<li class="active">
											Referral Link
										</li>
									</ol>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
            <div class="row">

             <div class="panel panel-primary">
      <div class="panel-heading"><h1 style="color:white;">Refer Freind and Earn Credit</h1></br>
      <h5 style="color:white;">Share my referral link with freinds</h5></div>
      <div class="panel-body">
      	<div class="col-md-12">
				<div class="form-group">
						<div class="col-xs-9">
							<?php $reflink = site_url().'referral/'. md5($user['id']);?>
							<input type="text" class="form-control"  value="<?php echo $reflink?>" id="myInput" required readonly>
						</div>
						<div class="col-xs-3">
							<button onclick="myFunction()" class="btn w-md btn-bordered btn-warning waves-effect waves-light">Copy Link</button>
						</div>
					</div>
					</div>

      </div>
    </div>

				
				</br>
			<div class="col-md-12">
					<div class="form-group">
						<div class="col-xs-12">
							<!---<div class="fb-share-button" 
							    data-href="<?php //echo $reflink;?>" 
							    data-layout="button_count">
							 </div>-->
							  <a href="http://www.facebook.com/sharer.php?u=<?php echo $reflink;?>" target="_blank">
						        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
						    </a>
							 <a href="https://twitter.com/share?url=<?php echo $reflink;?>" target="_blank">
        					<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
   								</a>
   								<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $reflink;?>" target="_blank">
							        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
							    </a>
							    <a href="mailto:?Subject=Referral Link&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20<?php echo $reflink;?>">
							        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
							    </a>
						</div>
				</div>
			</div>
				
			</div>
			<?php $this->load->view('admin/layouts/footer') ?>
			 <script src="<?= base_url(); ?>assets/zicros/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/bootstrap.min.js"></script>
			<script>
			function myFunction() {
				  var copyText = document.getElementById("myInput");
				  copyText.select();
				  copyText.setSelectionRange(0, 99999)
				  document.execCommand("copy");
				  //alert("Copied Link: " + copyText.value);
			}
			</script>
			 <div id="fb-root"></div>
		  <script>
		  	(function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
		    fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));
		</script>
			 </div>
		 </div>
   </body>
</html>
