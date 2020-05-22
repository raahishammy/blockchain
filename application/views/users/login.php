<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        
        <!-- App title -->
        <title>Login - Block Application</title>

        <!-- App css -->
        <link href="<?= base_url(); ?>assets/zicros/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/login.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/zicros/css/responsive.css" rel="stylesheet" type="text/css" />
          <script src="<?= base_url(); ?>assets/zicros/js/modernizr.min.js"></script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section class="main-wrapper">
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-20 account-pages">
                                <div class="col-sm-12">
                                <div class="col-sm-6 col-sm-offset-3 centered brand">
                                <img src="<?= base_url(); ?>assets/images/logo.png" class="centered">
                                <p><span class="red">Block Chain</span></p>
                                </div>
                            </div>
                                <div id="login-box" class="account-content">
                                    <?php 
                                    $email = '';
                                    if($this->session->userdata('email')!=''){
                                        $email = $this->session->userdata('uemail');
                                    }
                                    ?>
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
                                    
                                    <?php $attributes = array('class' => 'form ajax form-horizontal', 'id' => 'login-form','method' => 'post'); ?>
                                    <?php echo form_open('authenticate/login_post', $attributes); ?>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" name="email" required="" placeholder="Email" value="<?php echo $email ?>" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" required="" placeholder="Enter Password" value="">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox-signup" type="checkbox" checked>
                                                    <label for="checkbox-signup">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12">
                                                <a href="#" class="text-muted" data-target="#forgot-box"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a><br/>
                                                <a href="register" class="text-muted"><i class="fa fa-sign-in m-r-5"></i> Register User</a>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button type="submit" class="btn w-md btn-bordered btn-danger waves-effect waves-light" name="loginSubmit" value="Log In">Log In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                                <div id="forgot-box" class="account-content hidden">
                                    <div class="text-center m-b-20">
                                        <p class="text-muted m-b-0 font-13">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
                                    </div>
                                    <?php $attributes = array('class' => 'form ajax form-horizontal', 'id' => 'reset-password-form'); ?>
                                        <?php echo form_open('account/reset_password', $attributes); ?>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="email" name='u' required=""
                                                       placeholder="Enter email">
                                            </div>
                                        </div>
                                        <input type="hidden" name="request" value="passemail" />
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light"
                                                        type="submit">Send Email
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                    <div class="row m-t-50">
                                        <div class="col-sm-12 text-center">
                                            <a href="#" data-target="#login-box" class="text-primary m-l-5">
                                            <p class="text-muted"><i class="fa fa-arrow-left"></i>&nbsp; Back to login</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

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
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.core.js"></script>
        <script src="<?= base_url(); ?>assets/zicros/js/jquery.app.js"></script>
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
            $('#login-form').validate({
                errorElement: 'div',
                errorClass: 'help-block',
                focusInvalid: false,
                ignore: "",
                rules: {
                  u: {
                    required: true,
                    email:true
                  },
                  p: {
                    required: true,
                    minlength: 5
                  }
                },
                messages: {
                },
                highlight: function (e) {
                  $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                },

                success: function (e) {
                  $(e).closest('.form-group').removeClass('has-error').addClass('has-info');//.addClass('has-success');
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
                  else error.insertAfter(element);
                },
                invalidHandler: function (form) {
                }
            });

            $('#reset-password-form').validate({
                errorElement: 'div',
                errorClass: 'help-block',
                focusInvalid: false,
                ignore: "",
                rules: {
                  u: {
                    required: true,
                    email:true
                  }
                },
                messages: {
                },
                highlight: function (e) {
                  $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                },

                success: function (e) {
                  $(e).closest('.form-group').removeClass('has-error').addClass('has-info');//.addClass('has-success');
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
                  else error.insertAfter(element);
                },
                invalidHandler: function (form) {
                }
            });
        });
        </script>
    </body>
</html>
