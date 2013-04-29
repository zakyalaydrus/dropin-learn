<div id="header-container">
    <div id="header-logo">
        <img src="<?php echo base_url(); ?>assets/images/dropin_logo.png" /> 
    </div>
    <!-- Site navigation menu -->
    <div id="header-navmenu">
        <ul>
            
            <?php if ($login['is_logged']) { ?>
                <li><a href="<?= base_url('user/' . $login['alias_name']); ?>"><strong><?= $login['name'] ?></strong></a></li>
                <li>|</li>
            <?php } ?>
                
                
            <li><a href="<?php echo base_url('/') ?>">Home</a></li>
            <li>|</li>

            <?php if ($login['is_logged']) { ?>
                <li><a href="<?php echo base_url('logout') ?>">Log Out</a></li>
                <li>|</li>
            <?php } else { ?>
                <li><a href="<?php echo base_url('login') ?>">Log In</a></li>
                <li>|</li>
                <li><a href="<?php echo base_url('signup') ?>">Sign Up</a></li>
                <li>|</li>
            <?php } ?>
            <li><a href="<?php echo base_url('about') ?>">About</a></li>

        </ul>
    </div>	
</div>