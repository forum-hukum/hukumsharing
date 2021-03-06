<?php $this->load->view('content/auth_header'); ?>

<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' =>	'form-control',
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
                        <div class="col-lg-12 col-md-12" style="padding-top:20px; ">
                            <!-- POST -->
                            <div class="post">
                                <div class="col-lg-12 col-md-12">
                                  <div class="col-lg-4 col-md-4"></div>
                                  <div class="col-lg-4 col-md-4 post" style="height: 700px;">
                                       <div class="container col-md-12 col-lg-12" style="    padding-top: 44px;">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="major-provider google-login col-md-5 col-lg-5 " data-provider="google">
                                                        <div class="icon-container"><span class="icon" style=""></span></div>
                                                        <div class="text" style="color: white"><i class="fa fa-google-plus"></i><span>  Google</span></div>
                                                        <br class="cbt">
                                                    </div>

                                                    <div class="major-provider facebook-login col-md-5 col-lg-5" data-provider="facebook" >
                                                        <div class="icon-container"><span class="icon" style=""></span></div>
                                                        <div class="text"><i class="fa fa-facebook-square"></i> <span> Facebook</span></div>
                                                        <br class="cbt">
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="or-container col-md-12 col-lg-12 ">
                                                  <hr class="or-hr" style="margin-bottom: 0;position: relative;top: 19px;height: 0;border: 0;border-top: 1px solid #e4e6e8;">
                                                  <div id="or" style="text-align: center;padding-bottom: 6px;">OR</div>
                                              </div>

                                              <br>

												<?php echo form_open($this->uri->uri_string()); ?>
                                                 <?php echo form_label($login_label, $login['id']); ?>
												<p> <?php echo form_input($login); ?></p>
												 
												 <div class="error_message"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></div>
												 <?php echo form_label('Password', $password['id']); ?>
                                                 <?php echo form_password($password); ?>
												 
													<div class="error_message"> <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></div>
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
														
													<div class="footer-login-form"  style="text-align:right">
													<input type="submit" class="btn btn-primary" name="submit" value="Log In" style="    background-color: #3276b1; width:40%">
													</div>
											<?php echo form_close(); ?>

                                  </div>
                                  <div class="col-lg-4 col-md-4"></div>

                                </div>
                             
                        </div>
                    </div>
                </div>


            </section>
                        
<?php  $this->load->view('content/footer'); ?>
