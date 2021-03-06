<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <title>Register - Block Application</title>
         <link href="<?= base_url(); ?>assets/zicros/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/components.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/intlTelInput.css">
        <link href="<?= base_url(); ?>assets/zicros/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/login.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/responsive.css" rel="stylesheet" type="text/css" />
         <link rel="stylesheet" href="<?= base_url(); ?>assets/css/countrySelect.min.css">
			<style>
			.iti-flag {background-image: url("<?= $this->config->item("s3_url"); ?>images/flags.png");}
      .country-select .flag {background-image: url("<?= $this->config->item("s3_url"); ?>images/country-select-flags.png");}
      .country-select {width: 100%;}
		</style>
		  <script src="<?= base_url(); ?>assets/zicros/js/modernizr.min.js"></script>
      </head>
        <body class="bg-transparent">
         <section class="main-wrapper">
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrapper-page">
                        <div class="m-t-20 account-pages">
                                <div class="col-sm-12">
                                <div class="col-sm-6 col-sm-offset-3 centered brand">
                                <img src="<?= base_url(); ?>assets/images/logo.png" class="centered">
                                <p><span class="red">Block Chain Register User</span></p>
                                </div>
                            </div>
                                <div id="login-box" class="account-content">
                                   
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
                                    <?php elseif ($this->session->flashdata('errors')): ?>
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>

                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                            </strong>
                                            <?php foreach($this->session->flashdata('errors') as $errormsg){ echo $errormsg; } ?>
                                            <br />
                                        </div>
                                    <?php elseif ($this->session->flashdata('success')): ?>
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
									<?php echo form_open(base_url().'authenticate/affilate_register', $attributes); ?>
									<?php $sponserId =  $this->input->cookie('sponser_id',true);
													if($sponserId !=""){?>
													<input type="hidden" name="sponser_id" value="<?php echo $sponserId;?>">
												<?php }else{?>
														Invalid Affilate Link
												<?php } ?>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input id="name" class="form-control" type="text" name="name" required="" placeholder="Enter Name" value="<?php echo set_value('name'); ?>" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter Email" class="form-control" required/>
                                            </div>
                                        </div>
                                        <input type="hidden" name="role" value="Subscriber">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                               <input type="tel" class="form-control" id="contact" name="contact" value="<?php echo set_value('contact'); ?>" placeholder="e.g. +65 2123 4567" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12">
                                             </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                            	   <button type="submit" class="btn w-md btn-bordered btn-danger waves-effect waves-light" name="signupSubmit" value="Log In">Register</button>
                                          
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                               
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
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
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.min.js"></script>
		<script src="<?= base_url(); ?>assets/zicros/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>components/jquery-validation/dist/jquery.validate.js"></script>
		<script src="<?= base_url(); ?>components/typeahead.js/dist/typeahead.jquery.js"></script>
		<script src="<?= base_url(); ?>assets/js/intlTelInput.min.js"></script>
		<script src="<?= base_url(); ?>components/jquery-inputlimiter/jquery.inputlimiter.js"></script>
		<script src="<?= base_url(); ?>assets/zicros/js/bootstrap-formhelpers.min.js"></script>
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
		});

			

		</script>
    </body>
</html>
