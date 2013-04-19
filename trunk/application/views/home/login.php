<form action="<?php echo site_url('logins/validate') ?>" method="post" id="login_form">

    <div id="login-container">   

        <div align="center" style="color: red;">
            <div class="error_messageo"><?php echo $this->session->flashdata('error_message'); ?></div>
            <div class="success_message"><?php echo $this->session->flashdata('success_message'); ?></div>            
        </div>

        <div id="login-box">         

            <div style="float:left; padding: 20px 30px 20px 50px; text-align:center;">
                <div><p>Login to DropIn using</p></div>
                <div style="padding: 10px 0px 10px 0px;"><img src="<?php echo base_url(); ?>assets/images/facebook.png" /></div>
                <div style="padding: 10px 0px 10px 0px;"><img src="<?php echo base_url(); ?>assets/images/google.png" /></div>
            </div>
            <div style="float:left; margin-top: auto; margin-bottom: auto;">
                <div style="padding: 20px 0px 20px 0px;"><img src="<?php echo base_url(); ?>assets/images/or.png" /></div>
            </div>
            <div style="float:left; padding: 20px 10px 20px 10px;">
                <div style="padding: 0px 30px 0px 30px;"><p>Login with DropIn account</p></div>
                <div style="padding: 10px 0px 10px 0px;">
                    <div style="float: left; padding: 50px 0px 50px 30px;"><img src="<?php echo base_url(); ?>assets/images/grey_logo.png" /></div>
                    <div style="float: left; padding: 10px 30px 10px 20px;">
                        <div style="float: left; height: 70px; margin-top: auto; margin-bottom: auto; ">
                            <p>Email or username &nbsp;&nbsp;</p>
                            <p>Password &nbsp;&nbsp;</p>					
                        </div>
                        <div style="float: left; height: 70px;">
                            <input name="login" id="login" placeholder="Login" /><br /><br />
                            <input type="password" name="password" id="password" placeholder="Password" />
                        </div>				
                    </div>				
                    <div style="text-align: left; padding: 0px 0px 0px 107px;">
                        <a style="font-family: Gisha; text-decoration:none; font-size: 0.7em; color: rgb(59,89,152);" href="#">
                            Forgot Password?</a><br /><br />			
                    </div>
                    <div style="text-align: right; padding: 0px 30px 0px 0px;">
                        <input class="fsSubmitButton" type="submit" value="Login" /><br />
                        <p>Don't have account yet? <a style="font-family: Gisha; text-decoration:none; color: rgb(59,89,152);" href="<?php echo site_url('signup') ?>">Create one.</a></p>
                    </div>				
                </div>
            </div>
        </div>

    </div>

</form> 
