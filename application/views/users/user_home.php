<h1>User <?= $user['name'] ?></h1>
<p>Nickname: <?= $user['display_name'] ?></p>
<p>Email: <?= $user['email'] ?></p>
<p>Birthday: <?= $user['birthday'] ?></p>
<h2>Activity</h2>
<p>Activity Point: <?= $activity['point'] ?></p>

<?php if ($login['is_logged']) { ?>

    <?php if ($is_valid_access) { ?>

        <h1>Welcome to the private page, <?php echo $this->login->get_name(); ?>!</h1>
        <div id="body">

            <p>You are now logged in as 
                <strong><?php echo $this->login->get_name(); ?></strong> (ID #<?php echo $this->login->get_id(); ?>).       
            <hr />
            <p>A dump of your session info:</p>
            <pre><?php echo var_dump($this->login->user_data); ?>
            </pre>
            <hr />
            <p>A dump of your permissions:</p>
            <pre><?php echo var_dump($this->login->user_permission); ?>
            </pre>

        </div>

    <?php } else { ?>
        <h1>Woops <?php echo $this->login->get_name(); ?>, you don't have private access to this page!</h1>
    <?php } ?>

<?php } ?>
