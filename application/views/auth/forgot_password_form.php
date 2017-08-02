<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'style' => 'width:100%',
	'placeholder' => "Email"
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>

<style type="text/css">
  
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
.error_message p {
color:red !important;

}


.post .posttext {
	padding:10px !important; 
	width:100% !important;
}
</style>
<?php $this->load->view('content/auth_header'); ?>
<section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row" style="min-height: 85%;">
						<div class="col-lg-4 col-md-4">
                        </div>
                        <div class="col-lg-4 col-md-4" style="padding-top:24%">
                            <!-- POST -->
                            <div class="post">
								<div style="padding-top:30px">
								</div>
								
                                <form action="<?php echo base_url($this->uri->uri_string()); ?>" class="form newtopic" method="post"  style="">
                                    <div class="topwrap">
									
                                        <div class="posttext pull-center">

                                            <div>
												<?php echo form_input($login); ?>
												<div class="error_message"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                    
									
                                    <div class="postinfobot">
                                        <div class="pull-right postreply">
										<div class="clearfix"></div>
                                            <div class="pull-left"><input type="submit" class="btn btn-primary" name="submit" value="SEND" style="background-color: #3276b1;"></div>
                                            
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
	padding: 0 10px 0 0px !important;
}
</style>