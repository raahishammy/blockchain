
	<?php //print_r($user['name']);?>
<div class="container">
    <h2>Welcome 
    	</h2>
    <a href="<?php echo base_url('logout'); ?>" class="logout">Logout</a>
    <div class="regisFrm">
        <p><b>Name: </b><?php echo $user['name'];?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        <p><b>Phone: </b><?php  echo $user['contact']; ?></p>
    </div>

</div>
