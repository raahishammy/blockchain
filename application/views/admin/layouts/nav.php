<ul>
	<li class="menu-title">Navigation</li>
  
        <li class="has_sub">
            <a href="<?= site_url(); ?>dashboard" class="waves-effect <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : ''?>"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span> </a>
        </li>
          <li class="has_sub">
            <a href="<?= site_url(); ?>referral" class="waves-effect <?= ($this->uri->segment(1) == 'referral') ? 'active' : ''?>"><i class="mdi mdi-link"></i><span> Referral </span> </a>
        </li>
        <li class="has_sub">
            <a href="<?= site_url(); ?>user/graphical" class="waves-effect <?= ($this->uri->segment(2) == 'graphical') ? 'active' : ''?>"><i class="mdi mdi-file-tree"></i><span> My Team </span> </a>
        </li>
 </ul>