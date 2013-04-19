<form action="<?php echo base_url('signups/email') ?>" method="post" id="login_form">
    
<div id="login-container">

	<div id="login-box">
		<div style="float:left; padding: 20px 30px 20px 50px; text-align:center;">
			<div><p>Sign up using</p></div>
			<div style="padding: 10px 0px 10px 0px;"><img src="<?php echo base_url(); ?>assets/images/facebook.png" /></div>
			<div style="padding: 10px 0px 10px 0px;"><img src="<?php echo base_url(); ?>assets/images/google.png" /></div>
		</div>
		<div style="float:left; margin-top: auto; margin-bottom: auto;">
			<div style="padding: 20px 0px 20px 0px;"><img src="<?php echo base_url(); ?>assets/images/or.png" /></div>
		</div>
		<div style="float:left; padding: 20px 10px 20px 10px;">
			<div style="padding: 0px 30px 0px 30px;"><p>Sign up using your email address</p></div>
			<div style="padding: 10px 50px 50px 0px;">
				<div style="float: left; padding: 50px 10px 50px 30px;"><img src="<?php echo base_url(); ?>assets/images/grey_logo.png" /></div>
				<div style="float: left; padding: 10px 0px 10px 70px;">
					<div style="float: left; height: 70px; margin-top: auto; margin-bottom: auto; ">
						<p>Email &nbsp;&nbsp;</p>				
					</div>
					<div style="float: left; height: 70px;">
						<p><input type="text" /></p>
					</div>				
				</div>				
				<div style="text-align: right; padding: 0px 0px 0px 0px;">
					<input class="fsSubmitButton" type="submit" value="Get Started" /><br />
					<p>Already have account? <a style="font-family: Gisha; text-decoration:none; color: rgb(59,89,152);" href="<?php echo site_url('login') ?>">Log in.</a></p>
				</div>				
			</div>
		</div>
	</div>
	
</div>

</form> 