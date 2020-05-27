<div class="topbar">
	<div class="topbar-left">
			<span><img src="<?= base_url(); ?>assets/images/logo.png" alt="" height="70"></span>
			
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
			</div>
		</div>
	</div>
	
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
	<div id="sidebar-menu">
            <?php echo $nav; ?>
        </div>
        <div class="clearfix"></div>
	</div>
</div>

