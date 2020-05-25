<!-- Top Bar Start -->
	<div class="topbar">

		<!-- LOGO -->
		<div class="topbar-left">
			<!--<a href="<?= site_url('home'); ?>" class="logo"><span>LIMOUSINE <br/><span>Booking System</span></span><i class="mdi mdi-cube"></i></a> -->
			<span><img src="<?= base_url(); ?>assets/images/logo.png" alt="" height="70"></span>
			<!-- Image logo -->
			<!--<a href="index.html" class="logo">-->
				<!--<span>-->
					<!--<img src="<?= base_url(); ?>assets/zicros/images/logo.png" alt="" height="30">-->
				<!--</span>-->
				<!--<i>-->
					<!--<img src="<?= base_url(); ?>assets/zicros/images/logo_sm.png" alt="" height="28">-->
				<!--</i>-->
			<!--</a>-->
		</div>

		<!-- Button mobile view to collapse sidebar menu -->
		<div class="navbar navbar-default" role="navigation">
			<div class="container">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<button class="button-menu-mobile open-left waves-effect">
							<i class="mdi mdi-menu"></i>
						</button>
					</li>
					<li class="hidden-xs">
						<form role="search" class="app-search">
							<input type="text" placeholder="Search..."
								   class="form-control">
							<a href=""><i class="fa fa-search"></i></a>
						</form>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown user-box">
						<a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
							<i style="font-size: 27px;" class="fa fa-user img-circle user-icon"></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
							<li><a href="<?= base_url(); ?>profile"><i class="ti-user m-r-5"></i> Profile</a></li>
							<li><a href="<?= base_url(); ?>change_password"><i class="ti-lock m-r-5"></i> Change Password</a></li>
							<li><a href="<?= site_url();?>logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
						</ul>
					</li>

				</ul> <!-- end navbar-right -->

			</div><!-- end container -->
		</div><!-- end navbar -->
	</div>
	<!-- Top Bar End -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Navigation  -->
            <?php echo $nav; ?>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
		<?php /* 
        <div class="help-box">
            <h5 class="text-muted m-t-0">For Help ?</h5>
            <p class="m-b-0"><span class="text-custom"><b>Email:</b></span> <br/> contact@zencloud.com.sg </p>
            <p class="m-b-0"><span class="text-custom"><b>Call:</b></span> <br/> (+65) 6653 7904</p>
        </div>
		*/ ?>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
