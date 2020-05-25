<ul>
	<li class="menu-title">Navigation</li>
  
        <li class="has_sub">
            <a href="<?= site_url(); ?>home" class="waves-effect <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : ''?>"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span> </a>
        </li>
      <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect <?= ($this->uri->segment(1) == 'referral-link') ? 'active' : ''?>"><i class="mdi mdi-account-card-details"></i><span> Referral </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="<?= site_url(); ?>view/referral"><i class="mdi mdi-format-list-bulleted"></i>View</a></li>
                   
                </ul>
            </li>
 </ul>