
			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<!-- #section:basics/sidebar.layout.shortcuts -->
						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>

						<!-- /section:basics/sidebar.layout.shortcuts -->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="<?php echo isset($dashboard) ? 'active' : ''?> hover">
						<a href="/home">
							<i class="menu-icon fa fa-tachometer"></i>
							Dashboard
						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php echo isset($acc) ? 'active' : ''?> hover">
						<a href="#">
							<i class="menu-icon fa fa-book" aria-hidden="true"></i>
							Account
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="<?php echo isset($company) ? 'active' : ''?> hover">
								<a href="/company" class="dropdown-toggle">
									<i class="menu-icon fa fa-building"></i>
									Company
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
					        <li class="<?php echo isset($company_view) ? 'active' : ''?> hover">
					          <a href="/company">
					            <i class="menu-icon fa fa-caret-right"></i>
					            View
					          </a>

					          <b class="arrow"></b>
					        </li>
									<li class="<?php echo isset($company_create) ? 'active' : ''?> hover">
					          <a href="/company/create">
					            <i class="menu-icon fa fa-caret-right"></i>
					            Create
					          </a>

					          <b class="arrow"></b>
					        </li>
								</ul>
							</li>

							<li class="<?php echo isset($psg) ? 'active' : ''?> hover">
								<a href="/psg" class="dropdown-toggle">
									<i class="menu-icon fa fa-users"></i>
									<!-- Passenger -->
									Customer Account
								</a>
								<b class="arrow fa fa-angle-down"></b>

								<b class="arrow"></b>

								<ul class="submenu">
					        <li class="<?php echo isset($psg_view) ? 'active' : ''?> hover">
					          <a href="/psg">
					            <i class="menu-icon fa fa-caret-right"></i>
					            View
					          </a>

					          <b class="arrow"></b>
					        </li>
									<li class="<?php echo isset($psg_create) ? 'active' : ''?> hover">
					          <a href="/psg/create">
					            <i class="menu-icon fa fa-caret-right"></i>
					            Create
					          </a>

					          <b class="arrow"></b>
					        </li>
								</ul>
							</li>

							<li class="<?php echo isset($psg_guest) ? 'active' : ''?> hover">
								<a href="/psg-guest" class="dropdown-toggle">
									<i class="menu-icon fa fa-address-book-o"></i>
									<!-- Passenger -->
									Company's Guest List
								</a>
								<b class="arrow fa fa-angle-down"></b>

								<b class="arrow"></b>

								<ul class="submenu">
					        <li class="<?php echo isset($psg_guest_view) ? 'active' : ''?> hover">
					          <a href="/psg-guest">
					            <i class="menu-icon fa fa-caret-right"></i>
					            View
					          </a>

					          <b class="arrow"></b>
					        </li>
									<li class="<?php echo isset($psg_guest_create) ? 'active' : ''?> hover">
					          <a href="/psg-guest/create">
					            <i class="menu-icon fa fa-caret-right"></i>
					            Create
					          </a>

					          <b class="arrow"></b>
					        </li>
								</ul>
							</li>
						</ul>
					</li>



					<li class="<?php echo isset($drv) ? 'active' : ''?> hover">
						<a href="/drv" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<!-- Driver -->
							Driver
							<b class="arrow fa fa-angle-down"></b>
						</a>


						<b class="arrow"></b>

						<ul class="submenu">
							<li class="<?php echo isset($drv_list) ? 'active' : ''?> hover">
			          <a href="#" class="dropdown-toggle">
			            <i class="menu-icon fa fa-list"></i>
									Driver List
			            <b class="arrow fa fa-angle-down"></b>
			          </a>

			          <b class="arrow"></b>

			          <ul class="submenu">
			            <li class="<?php echo isset($drv_view) ? 'active' : ''?> hover">
			              <a href="/drv">
			                <i class="menu-icon fa fa-caret-right"></i>
			                View
			              </a>

			              <b class="arrow"></b>
			            </li>

			            <li class="<?php echo isset($drv_create) ? 'active' : ''?> hover">
			              <a href="/drv/create">
			                <i class="menu-icon fa fa-caret-right"></i>
			                Create
			              </a>

			              <b class="arrow"></b>
			            </li>
			          </ul>
			        </li>

							<li class="<?php echo isset($drv_vendor) ? 'active' : ''?> hover">
			          <a href="#" class="dropdown-toggle">
			            <i class="menu-icon fa fa-handshake-o"></i>
									Driver Affiliates
			            <b class="arrow fa fa-angle-down"></b>
			          </a>

			          <b class="arrow"></b>

			          <ul class="submenu">
			            <li class="<?php echo isset($drv_vendor_view) ? 'active' : ''?> hover">
			              <a href="/drv/vendor">
			                <i class="menu-icon fa fa-caret-right"></i>
			                View
			              </a>

			              <b class="arrow"></b>
			            </li>

			            <li class="<?php echo isset($drv_vendor_create) ? 'active' : ''?> hover">
			              <a href="/drv/vendor/create">
			                <i class="menu-icon fa fa-caret-right"></i>
			                Create
			              </a>

			              <b class="arrow"></b>
			            </li>
			          </ul>
			        </li>

						</ul>
						<ul class="submenu">
							  <li class="active hover">
							    <a href="#" class="dropdown-toggle">
							      <i class="menu-icon fa fa-money"></i>
							      Promo Codes
							      <b class="arrow fa fa-angle-down"></b>
							    </a>

							    <b class="arrow"></b>

							    <ul class="submenu">
							      <li class="active hover">
							        <a href="/promo">
							          <i class="menu-icon fa fa-caret-right"></i>
							          View
							        </a>

							        <b class="arrow"></b>
							      </li>

							      <li class="hover">
							        <a href="/promo/create">
							          <i class="menu-icon fa fa-caret-right"></i>
							          Create
							        </a>

							        <b class="arrow"></b>
							      </li>
							    </ul>
							  </li>

							</ul>
					</li>

					<li class="<?php echo isset($aff) ? 'active' : ''?> hover">
						<a href="/aff" class="dropdown-toggle">
							<i class="menu-icon fa fa-handshake-o"></i>
							<!-- Affiliates -->
							Affiliates
						</a>
						<b class="arrow fa fa-angle-down"></b>

						<b class="arrow"></b>

						<ul class="submenu">
			        <li class="<?php echo isset($aff_view) ? 'active' : ''?> hover">
			          <a href="/aff">
			            <i class="menu-icon fa fa-caret-right"></i>
			            View
			          </a>

			          <b class="arrow"></b>
			        </li>
							<li class="<?php echo isset($aff_create) ? 'active' : ''?> hover">
			          <a href="/aff/create">
			            <i class="menu-icon fa fa-caret-right"></i>
			            Create
			          </a>

			          <b class="arrow"></b>
			        </li>
						</ul>
					</li>

					<li class="<?php echo isset($res) ? 'active' : ''?> hover">
						<a href="/res" class="dropdown-toggle">
							<i class="menu-icon fa fa-suitcase"></i>
							<!-- Passenger -->
							Reservation
						</a>
						<b class="arrow fa fa-angle-down"></b>

						<b class="arrow"></b>

						<ul class="submenu">
			        <li class="<?php echo isset($res_view) ? 'active' : ''?> hover">
			          <a href="/res">
			            <i class="menu-icon fa fa-caret-right"></i>
			            View
			          </a>

			          <b class="arrow"></b>
			        </li>
							<li class="<?php echo isset($res_create) ? 'active' : ''?> hover">
			          <a href="/res/create">
			            <i class="menu-icon fa fa-caret-right"></i>
			            Create
			          </a>

			          <b class="arrow"></b>
			        </li>
						</ul>
					</li>

					<li class="<?php echo isset($veh) ? 'active' : ''?> hover">
			      <a href="#">
			        <i class="menu-icon fa fa-car"></i>
							Vehicle
			        <b class="arrow fa fa-angle-down"></b>
			      </a>

			      <b class="arrow"></b>

			      <ul class="submenu">
							<!-- <li class="<?php echo isset($veh_brand) ? 'active' : ''?> hover">
			          <a href="#" class="dropdown-toggle">
			            <i class="menu-icon fa fa-th-large"></i>
									Brand
			            <b class="arrow fa fa-angle-down"></b>
			          </a>

			          <b class="arrow"></b>

			          <ul class="submenu">
			            <li class="<?php echo isset($veh_brand_view) ? 'active' : ''?> hover">
			              <a href="/veh/brn">
			                <i class="menu-icon fa fa-caret-right"></i>
			                View
			              </a>

			              <b class="arrow"></b>
			            </li>

			            <li class="<?php echo isset($veh_brand_create) ? 'active' : ''?> hover">
			              <a href="/veh/brn/create">
			                <i class="menu-icon fa fa-caret-right"></i>
			                Create
			              </a>

			              <b class="arrow"></b>
			            </li>
			          </ul>
			        </li> -->

			        <li class="<?php echo isset($veh_cat) ? 'active' : ''?> hover">
			          <a href="#" class="dropdown-toggle">
			            <i class="menu-icon fa fa-th-large"></i>
			            Category
									<b class="arrow fa fa-angle-down"></b>
			          </a>

			          <b class="arrow"></b>

								<ul class="submenu">
			            <li class="<?php echo isset($veh_cat_view) ? 'active' : ''?> hover">
			              <a href="/veh/cat">
			                <i class="menu-icon fa fa-caret-right"></i>
			                View
			              </a>

			              <b class="arrow"></b>
			            </li>

			            <li class="<?php echo isset($veh_cat_create) ? 'active' : ''?> hover">
			              <a href="/veh/cat/create">
			                <i class="menu-icon fa fa-caret-right"></i>
			                Create
			              </a>

			              <b class="arrow"></b>
			            </li>
			          </ul>
			        </li>

			        <li class="<?php echo isset($veh_type) ? 'active' : ''?> hover">
			          <a href="#" class="dropdown-toggle">
			            <i class="menu-icon fa fa-th-large"></i>
									Type
			            <b class="arrow fa fa-angle-down"></b>
			          </a>

			          <b class="arrow"></b>

			          <ul class="submenu">
			            <li class="<?php echo isset($veh_type_view) ? 'active' : ''?> hover">
			              <a href="/veh/type">
			                <i class="menu-icon fa fa-caret-right"></i>
			                View
			              </a>

			              <b class="arrow"></b>
			            </li>

			            <li class="<?php echo isset($veh_type_create) ? 'active' : ''?> hover">
			              <a href="/veh/type/create">
			                <i class="menu-icon fa fa-caret-right"></i>
			                Create
			              </a>

			              <b class="arrow"></b>
			            </li>
			          </ul>
			        </li>

							<li class="<?php echo isset($veh_fleet) ? 'active' : ''?> hover">
			          <a href="#" class="dropdown-toggle">
			            <i class="menu-icon fa fa-th-large"></i>
									Fleet
			            <b class="arrow fa fa-angle-down"></b>
			          </a>

			          <b class="arrow"></b>

			          <ul class="submenu">
			            <li class="<?php echo isset($veh_fleet_view) ? 'active' : ''?> hover">
			              <a href="/veh/fleet">
			                <i class="menu-icon fa fa-caret-right"></i>
			                View
			              </a>

			              <b class="arrow"></b>
			            </li>

			            <li class="<?php echo isset($veh_fleet_create) ? 'active' : ''?> hover">
			              <a href="/veh/fleet/create">
			                <i class="menu-icon fa fa-caret-right"></i>
			                Create
			              </a>

			              <b class="arrow"></b>
			            </li>
			          </ul>
			        </li>

			      </ul>
			    </li>

					<li class="<?php echo isset($price) ? 'active' : ''?> hover">
					  <a href="#">
					    <i class="menu-icon fa fa-money"></i>
					    Pricing
					    <b class="arrow fa fa-angle-down"></b>
					  </a>

					  <b class="arrow"></b>

					  <ul class="submenu">
					    <li class="<?php echo isset($price_metric) ? 'active' : ''?> hover">
					      <a href="#" class="dropdown-toggle">
					        <i class="menu-icon fa fa-list-alt"></i>
					        Metrix
					        <b class="arrow fa fa-angle-down"></b>
					      </a>

					      <b class="arrow"></b>

					      <ul class="submenu">
					        <li class="<?php echo isset($price_metric_view) ? 'active' : ''?> hover">
					          <a href="/price/metric">
					            <i class="menu-icon fa fa-caret-right"></i>
					            View
					          </a>

					          <b class="arrow"></b>
					        </li>

					        <li class="<?php echo isset($price_metric_create) ? 'active' : ''?> hover">
					          <a href="/price/metric/create">
					            <i class="menu-icon fa fa-caret-right"></i>
					            Create
					          </a>

					          <b class="arrow"></b>
					        </li>
					      </ul>
					    </li>

					    <li class="<?php echo isset($price_transfer) ? 'active' : ''?> hover">
					      <a href="#" class="dropdown-toggle">
					        <i class="menu-icon fa fa-car"></i>
					        Transfer
					        <b class="arrow fa fa-angle-down"></b>
					      </a>

					      <b class="arrow"></b>

					      <ul class="submenu">
					        <li class="<?php echo isset($price_transfer_view) ? 'active' : ''?> hover">
					          <a href="/price/transfer">
					            <i class="menu-icon fa fa-caret-right"></i>
					            View
					          </a>

					          <b class="arrow"></b>
					        </li>

					        <li class="<?php echo isset($price_transfer_create) ? 'active' : ''?> hover">
					          <a href="/price/transfer/create">
					            <i class="menu-icon fa fa-caret-right"></i>
					            Create
					          </a>

					          <b class="arrow"></b>
					        </li>
					      </ul>
					    </li>

					    <li class="<?php echo isset($price_hourly) ? 'active' : ''?> hover">
					      <a href="#" class="dropdown-toggle">
					        <i class="menu-icon fa fa-car"></i>
					        Hourly
					        <b class="arrow fa fa-angle-down"></b>
					      </a>

					      <b class="arrow"></b>

					      <ul class="submenu">
					        <li class="<?php echo isset($price_hourly_view) ? 'active' : ''?> hover">
					          <a href="/price/hourly">
					            <i class="menu-icon fa fa-caret-right"></i>
					            View
					          </a>

					          <b class="arrow"></b>
					        </li>

					        <li class="<?php echo isset($price_hourly_create) ? 'active' : ''?> hover">
					          <a href="/price/hourly/create">
					            <i class="menu-icon fa fa-caret-right"></i>
					            Create
					          </a>

					          <b class="arrow"></b>
					        </li>
					      </ul>
					    </li>

					  </ul>
					</li>

				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
			</div>
