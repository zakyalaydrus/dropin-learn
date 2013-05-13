<div style="margin: auto;">
    
    <div id="searchbar" style="height: 400px; background-image:url('<?php echo base_url(); ?>assets/uploads/cover_<?= $user['user_id'] ?>.png')">
        <input style="background-color:#FFFFFF;" type="text" name="textfield" id="textfield" class="search" placeholder="Share and learn almost anything you want!" />	
    </div>  
    
    <h1>User <?= $user['name'] ?></h1>
    <p>Nickname: <?= $user['display_name'] ?></p>
    <p>Email: <?= $user['email'] ?></p>
    <p>Birthday: <?= $user['birthday'] ?></p>
    <h2>Activity</h2>
    <p>Activity Point: <?= $activity['point'] ?></p>

</div>

<div>
    <?php if ($login['is_logged']) { ?>

        <?php if ($is_valid_access) { ?>

            <div id="body">
                <h1>Welcome home, <?php echo $this->login->get_name(); ?>!</h1>
            </div>

            <div id="user-option">
                <form action="/html/codes/html_form_handler.cfm" method="get">
                    <div class="radio-toolbar">  
                        <input type="radio" id="radio1-user" name="radios-subcategory" value="all" checked>
                        <label for="radio1-user">DISCUSSIONS</label>

                        <input type="radio" id="radio2-user" name="radios-subcategory" value="topdropper">
                        <label for="radio2-user">TOPICS</label>

                        <input type="radio" id="radio2-user" name="radios-subcategory" value="topdropper">
                        <label for="radio2-user">GROUPS</label>

                        <input type="radio" id="radio2-user" name="radios-subcategory" value="topdropper">
                        <label for="radio2-user">COLLECTIONS</label>
                    </div>
                </form>
            </div>

            <div id="category-box-content">
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/1') ?>"><img src="<?php echo base_url(); ?>assets/images/topic1.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/2') ?>"><img src="<?php echo base_url(); ?>assets/images/topic2.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/3') ?>"><img src="<?php echo base_url(); ?>assets/images/topic3.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/4') ?>"><img src="<?php echo base_url(); ?>assets/images/topic4.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/5') ?>"><img src="<?php echo base_url(); ?>assets/images/topic5.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/6') ?>"><img src="<?php echo base_url(); ?>assets/images/topic6.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/7') ?>"><img src="<?php echo base_url(); ?>assets/images/topic7.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/8') ?>"><img src="<?php echo base_url(); ?>assets/images/topic8.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/9') ?>"><img src="<?php echo base_url(); ?>assets/images/topic9.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/10') ?>"><img src="<?php echo base_url(); ?>assets/images/topic10.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/11') ?>"><img src="<?php echo base_url(); ?>assets/images/topic1.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/12') ?>"><img src="<?php echo base_url(); ?>assets/images/topic2.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/13') ?>"><img src="<?php echo base_url(); ?>assets/images/topic3.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/14') ?>"><img src="<?php echo base_url(); ?>assets/images/topic4.png" /></a></div>
                <div id="category-box-content-icon"><a href="<?php echo base_url('topic/a/15') ?>"><img src="<?php echo base_url(); ?>assets/images/topic5.png" /></a></div>
            </div>	

        <?php } else { ?>
            <h1>Woops <?php echo $this->login->get_name(); ?>, you don't have private access to this page!</h1>
        <?php } ?>

    <?php } ?>

</div>
