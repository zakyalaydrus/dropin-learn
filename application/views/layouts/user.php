<?php $this->load->view('layouts/header'); ?>

<style>
    body {
        padding-top: 41px; /* 60px to make the container go all the way to the bottom of the topbar */
        background: #e7ebf2;
    }

    .cover {
        background:url('<?= base_url('assets/uploads/covers/' . $user['user_id'] . '.png')?>');
        height:360px; 
        position:relative;
    }

    .form-search {
        margin-top:10px;
    }

    .profile-picture {
        border:11px solid lightgrey;
        margin-top: 140px;
        height: 156px;
        width: 156px;
    }

    .profile-summary {
        border:2px solid lightblue;
        margin-left: 30px;
        margin-top: 140px;
        background-color: white;
        height: 175px;
    }

    .profile-summary-name {
        margin-top: 15px;
        margin-left: 15px;
        font-size: 2em;
        color: gray;
    }

    .profile-summary-stats {
        margin-top: 15px;
        margin-left: 15px;
        color: gray;
    }

    .profile-summary-info {
        margin-top: 15px;			
        margin-left: 15px;			
        height: 100px;
    }		

    .user-box {
        border:2px solid lightblue;
        background: white;
        margin-top: 40px;
        margin-bottom: 40px;
        height: 600px;
    }

    .user-box-thumbnail
    {
        margin: 20px 20px 20px 20px;
    }
</style>

<!-- Cover -->
<div class="cover">
    <div class="container">
        <!-- Search -->
        <form class="form-search">
            <div class="input-append">
                <input type="text" placeholder="Search almost anything you want to learn!" class="search-query span11">
                <button type="submit" class="btn">Search</button>
            </div>
        </form>
        <!-- Profile picture -->			
        <div class="span1 profile-picture">
            <img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" />
        </div>
        <!-- Profile summary -->			
        <div class="span9 profile-summary">
            <div class="profile-summary-name">
                <strong><?= $user['name'] ?></strong>
            </div>		
            <div class="profile-summary-stats">
                <img class="img-rounded">1328</img>   256  15
            </div>	
            <div class="profile-summary-info">
                Studied at Institut Teknologi Bandung<br>
                Live in Bandung<br>
                From Yogyakarta
            </div>				
        </div>
    </div>
</div>

<div class="container user-box">
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav">
                    <li class="active"><a href="#">Topics</a></li>
                    <li><a href="#">Groups</a></li>
                    <li><a href="#">Discussion</a></li>
                    <li><a href="#">Books</a></li>
                </ul>
            </div>
        </div>		
    </div>
    <div class="user-box-thumbnail">
        <ul class="thumbnails">
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
            <li class="span2"><a href="#" class="thumbnail"><img src="<?= base_url('assets/uploads/profile_pictures/' . $user['user_id'] . '.png')?>" alt=""></a></li>
        </ul>
    </div>
</div>