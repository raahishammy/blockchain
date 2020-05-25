<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        
        <!-- App title -->
        <title>Register - Blockchain Application</title>

        <!-- App css -->
        <link href="<?= base_url(); ?>assets/zicros/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/intlTelInput.css">
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">
		<link rel="stylesheet" href="<?= base_url(); ?>assets/zicros/css/style.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/countrySelect.min.css">


		<style>
			.iti-flag {background-image: url("<?= $this->config->item("s3_url"); ?>images/flags.png");}
      .country-select .flag {background-image: url("<?= $this->config->item("s3_url"); ?>images/country-select-flags.png");}
      .country-select {width: 100%;}
		</style>
         <script src="<?= base_url(); ?>assets/zicros/js/modernizr.min.js"></script>
		</head>
		 <body class="bg-company_register">
	 <section class="main-wrapper">
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="">

                            <div class="register-pages col-container">
							<div class="col-sm-1 col"></div>
                                <div id="login-box" class="account-content col-sm-4 col">
									<?php if (!empty(validation_errors())): ?>
										<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>

											<strong>
												<i class="ace-icon fa fa-times"></i>
											</strong>

											<?php echo validation_errors('<br />', '') ?>
											<br />
										</div>
										<?php endif; ?>
										<?php if ($this->session->flashdata('fail')): ?>
										<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>

											<strong>
												<i class="ace-icon fa fa-times"></i>
											</strong>

											<?php echo $this->session->flashdata('fail') ?>
											<br />
										</div>
										<?php endif; ?>
									<?php if ($this->session->flashdata('success')): ?>
										<div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>

											<strong>
												<i class="ace-icon fa fa-check"></i>
											</strong>

											<?php echo $this->session->flashdata('success') ?>
											<br />
										</div>
									<?php endif; ?>

									<?php $attributes = array('class' => 'form-horizontal', 'id' => 'edit-form'); ?>
										<?php echo form_open('affilate/sponser', $attributes); ?>
										<div class="col-sm-12">
											<div class="box-title text-center">Register User</div>
											<div class="col-sm-12">
												<div class="form-group">
													<?php $sponserId =  $this->input->cookie('sponser_id',true);
													if($sponserId !=""){?>
													<input type="hidden" name="sponser_id" value="<?php echo $sponserId;?>">
												<?php }else{?>
														Invalid Affilate Link
												<?php } ?>
													<input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" placeholder="Enter User Name" class="form-control" />
													<span class="required_star">*</span>
												</div>
											</div>
											 <div class="col-sm-12">
												<div class="form-group">
													<input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter Email" class="form-control" />
													<span class="required_star">*</span>
												</div>
											</div> 
											<div class="col-sm-12">
												<div class="form-group">
													<input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Enter Password" class="form-control" />
													<span class="required_star">*</span>
												</div>
											</div> 
											<div class="col-sm-12">
												<div class="form-group">
												<input type="tel" id="contact" name="contact" value="<?php echo set_value('contact'); ?>" placeholder="e.g. +65 2123 4567" class="form-control" />
												</div>
											</div>
											<input type="hidden" name="role" value="Subscriber">
											
											<div class="col-sm-12">
												<div class="form-group">
												<select class="form-control bfh-countries" data-country="US" id="countryId" name="country" required></select>
												</div>
											</div>
											<div class="clearfix form-actions">
												<div class="col-md-12">
													<input type="submit" name="signupSubmit" class="btn btn-youtube btn-lg btn-rounded" value="Submit"  style="width:100%">
													
												</div>
											</div>

										<div class="clearfix"></div>
											<p class="already_account">Already have an account?<a href="<?= base_url() ?>login"> Sign In</a></p>
											
										</div>
										
										</form>

                                    <div class="clearfix"></div>

                                </div>
								<div class="col-sm-6 col right_register" style="padding:0px;"></div>
								<div class="col-sm-1 col"></div>
								<div class="clearfix"></div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
            	 <script>
            var resizefunc = [];
        </script>
		<style>
		.alert{
			width: 100%;
    display: table;
		}
		.register-pages.col-container {
    display: table;
    width: 100%;
}
.col {
    display: table-cell;
	float:none;
}

		.box-title {
			font-size: 20px;
			color: #fff;
			font-weight: 600;
			margin: 18px 0px;
		}
		.box-title span {
			font-size: 14px;
		}
		.form-horizontal .control-label{
			    text-align: left;
		}
		.intl-tel-input.allow-dropdown {
			width: 100%;
		}
		.help-block {
			color: palevioletred !important;
		}
		.twitter-typeahead{
			    display: block !important;
		}
		.form-control:focus{
			border: 0;
			border-bottom: 1px solid black;
		}
		.col-sm-6.col-sm-offset-3.centered {
			text-align: center;
			color: red;
			font-size: 20px;
			text-transform: uppercase;
		}
		.form-control, input.typeahead {
			resize: none;
			border: 0;
			background-color: transparent;
			border-bottom: 1px solid rgba(152, 152, 152, 0.8);
			border-radius: 0 !important;
			padding: 7px 12px 7px 0;
			height: 38px;
			max-width: 100%;
			-webkit-box-shadow: none;
			box-shadow: none;
			-webkit-transition: all 300ms linear;
			-moz-transition: all 300ms linear;
			-o-transition: all 300ms linear;
			transition: all 300ms linear;
		}
		.register-pages{
			padding:100px 0px;
		}
		.already_account {
			color: #fff;
			padding: 15px 0px;
			text-align: center;
		}
		.already_account a {
			color: #fff;
			text-decoration: underline;
		}
		select.chosen-select.select2.form-control{
			background:#27262c;
		}
		.register-pages .account-content{background:#27262c;    min-height: 505px;}
		.form-group{position:relative;}
		.form-group .required_star{position:absolute;right:0;top:0;color:#f00;}
		.cancel a{    position: absolute;right: 12px;color: #f00;padding: 30px 40px;}
		.cancel span{ position: absolute;right: -10px;color: #000; transform: rotate(-90deg);top: 38px;font-size: 9px;text-transform: uppercase;letter-spacing: 4px;
}
		.form-group.mar-left-0{margin-left:0;}
		.form-control{color:#ccc}
		select
		</style>
	    <!-- jQuery  -->
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.min.js"></script>
		
        <script src="<?= base_url(); ?>assets/zicros/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/detect.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/fastclick.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.blockUI.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/waves.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.scrollTo.min.js"></script>

		<script src="<?= base_url(); ?>components/jquery-validation/dist/jquery.validate.js"></script>
		<script src="<?= base_url(); ?>assets/js/eldarion-ajax.min.js"></script>
        <!-- App js -->
		<script src="<?= base_url(); ?>components/typeahead.js/dist/typeahead.jquery.js"></script>

        <script src="<?= base_url(); ?>assets/zicros/js/jquery.core.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.app.js"></script>
		<script src="<?= base_url(); ?>assets/js/intlTelInput.min.js"></script>
		<script src="<?= base_url(); ?>components/autosize/dist/autosize.js"></script>
		<script src="<?= base_url(); ?>components/jquery-inputlimiter/jquery.inputlimiter.js"></script>
		<script src="<?= base_url(); ?>assets/zicros/js/bootstrap-formhelpers.min.js"></script>
	
	 
    <script>
    </script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
		$(function() {
			$(document).on("eldarion-ajax:begin", function(evt, $el) {
			  // $el.html("Processing...");
			});

			$(document).on("eldarion-ajax:success", function(evt, $el, data, textStatus, jqXHR) {
				// console.log(evt);
				// console.log(data);
				// console.log(jqXHR);

			});

			$(document).on("eldarion-ajax:error", function(evt, $el, data, textStatus, jqXHR) {
				// console.log(evt);
				// console.log(data);
				// console.log(jqXHR);
			});
			$(document).on('click', 'a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.account-content').addClass('hidden');//hide others
				$(target).removeClass('hidden');//show target
			});
		});

		</script>
		<script type="text/javascript">
		$('#edit-form').validate({
			errorElement: 'div',
			errorClass: 'help-block',
			focusInvalid: false,
			ignore: "",
			rules: {
				name: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				country: {
					required: true
				},
				contact: {
					required: true
				},
				role:{
					required: true
				}
			},
			messages: {
			},
			highlight: function (e) {
				$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
			},

			success: function (e) {
				$(e).closest('.form-group').removeClass('has-error').addClass('has-info');//.addClass('has-info');
				$(e).remove();
			},

			errorPlacement: function (error, element) {
				if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
					var controls = element.closest('div[class*="col-"]');
					if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
					else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
				}
				else if(element.is('.select2')) {
					error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
				}
				else if(element.is('.chosen-select')) {
					error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
				}
				else error.insertAfter(element.parent());
			},
			invalidHandler: function (form) {
			}
		});

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

			autosize($('textarea[class*=autosize]'));

			$('textarea.limited').inputlimiter({
				remText: '%n character%s remaining...',
				limitText: 'max allowed : %n.'
			});

			//typeahead.js
			//example taken from plugin's page at: https://twitter.github.io/typeahead.js/examples/
			var substringMatcher = function(strs) {
				return function findMatches(q, cb) {
					var matches, substringRegex;

					// an array that will be populated with substring matches
					matches = [];

					// regex used to determine if a string contains the substring `q`
					substrRegex = new RegExp(q, 'i');

					// iterate through the pool of strings and for any string that
					// contains the substring `q`, add it to the `matches` array
					$.each(strs, function(i, str) {
						if (substrRegex.test(str.name)) {
							// the typeahead jQuery plugin expects suggestions to a
							// JavaScript object, refer to typeahead docs for more info
							matches.push({ value: str.name });
						}
					});

					cb(matches);
				}
			}
			
		});

		</script>
    </body>
</html>
