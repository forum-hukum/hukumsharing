<?php $this->load->view('content/auth_header'); ?>

<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' =>	'form-control',
	"placeholder" => "Username / Email"
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or Username';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'class' =>	'form-control',
	"placeholder" => "Password"
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
	'class' =>	'form-control',
);
?>

<section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
					<div class="col-lg-4 col-md-4">
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- POST -->
                            <div class="post">
								<div style="padding-top:30px">
								
								  </div>
								  
								   <div class="posttext pull-center major-provider google-login">
									<div>
										<div class="icon-container"><span class="icon" style=""></span></div>
										<div class="text" style="color: white"><i class="fa fa-google-plus"></i><span>  Google</span></div>
										<br class="cbt">
									</div>
								</div>
								
								<div class="posttext pull-center major-provider facebook-login ">
									<div>
										<div class="icon-container"><span class="icon" style=""></span></div>
										<div class="text"><i class="fa fa-facebook-square"></i> <span> Facebook</span></div>
										<br class="cbt">
									</div>
									<p></p>
								</div>
								<div class="clearfix"></div>
								 <div class="posttext pull-center">
										<div>
											<div id="or" style="text-align: center;padding-bottom: 6px; border-bottom: 1px solid #e4e6e8;">OR</div>
										</div>
								</div>
								  
                                <form action="<?php echo base_url($this->uri->uri_string()); ?>" class="form newtopic" method="post"  style="">
                                    <div class="topwrap">
									
                                        <div class="posttext pull-center">

                                            <div>
												<?php echo form_input($login); ?>
												<div class="error_message"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></div>
                                            </div>
											<div>
                                                 <?php echo form_password($password); ?>
												<div class="error_message"> <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></div>
									 
                                            </div>
											<p>
													<!--<?php echo form_checkbox($remember); ?>
													<?php echo form_label('Remember me', $remember['id']); ?>
													
													<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>-->
                                                  </p>
                                                  <p style="text-align:right" class="forgot-anchor"><?php echo anchor('/auth/forgot_password/', 'Lupa Password?'); ?></p>
												  
												  	<?php if ($show_captcha) {
															if ($use_recaptcha) { ?>
														<tr>
															<td colspan="2">
																<div id="recaptcha_image"></div>
															</td>
															<td>
																<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
																<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
																<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="recaptcha_only_if_image">Enter the words above</div>
																<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
															</td>
															<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
															<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
															<?php echo $recaptcha_html; ?>
														</tr>
														<?php } else { ?>
														<tr>
															<td colspan="3">
																<p>Enter the code exactly as it appears:</p>
																<?php echo $captcha_html; ?>
															</td>
														</tr>
														<tr>
															<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
															<td><?php echo form_input($captcha); ?></td>
															<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
														</tr>
														<?php }
														} ?>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                    
									
                                    <div class="postinfobot">
                                        <div class="pull-right postreply">
										<div class="clearfix"></div>
                                            <div class="pull-left"><input type="submit" class="btn btn-primary" name="submit" value="Log In" style="background-color: #3276b1;"></div>
                                            
                                        </div>


                                        <div class="clearfix"></div>
										<br/>
                                    </div>
                                </form>
                            </div><!-- POST -->
                        </div>
                        <div class="col-lg-4 col-md-4">
                        </div>
                    </div>
                </div>
            </section>
                        
<?php  $this->load->view('content/footer'); ?>
<style>
.forgot-anchor a{
font-size: 11px;
    color: darkcyan;
    text-decoration: none;
}

.postinfobot {
    border-top: solid 1px #ffffff;
}

  
  .major-provider{
    cursor: pointer;
    border-radius: 3px;
    height: 38px;
    line-height: 36px;
    float: left;
        margin: 1px 1px 5px 0px;
    box-sizing: border-box;
    border: 1px solid transparent;
    text-align: center;

}
.postinfobot {
    border-top: solid 1px #ffffff;
	padding: 0 10px 0 0px !important;
}

#add-login-page .major-provider .icon, #login-page .major-provider .icon, #signup-page .major-provider .icon {
    background: url(../../img/openid/universal-login-sprite.svg?v=3ca03e653513);
    display: inline-block;
    width: 16px;
    height: 16px;
}
.google-login{
background: #e0492f;

}

.facebook-login{
background: #395697;

}
.major-provider .text {
    color: #FFF;
}
.error_message p{
color:red !important;

}


.post .posttext {
	padding:10px !important; 
	width:100% !important;
}
</style>