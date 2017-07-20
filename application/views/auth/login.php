<?php $this->load->view('content/auth_header'); ?>

<style type="text/css">
  
  .major-provider{
    cursor: pointer;
    border-radius: 3px;
    height: 38px;
    line-height: 36px;
    float: left;
    margin: 8px 12px;
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
#infoMessage{
color:red;

}

</style>
<section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12" >
                            <!-- POST -->
                            <div class="post">
                                <div class="col-lg-12 col-md-12">
                                  <div class="col-lg-4 col-md-4"></div>
                                  <div class="col-lg-4 col-md-4 post" style="height: 700px;">
                                       <div class="container col-md-12 col-lg-12">
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
                                                  <div id="infoMessage"><?php echo $message;?></div>
                                              </div>

                                              <br>

                                              <form action="http://localhost/hukumsharing/login" class="form newtopic col-md-12 col-lg-12" method="post" accept-charset="utf-8">
                                                 <input type="text" placeholder="Username / Email" name="identity" id="identity" class="form-control">
                                                 <input type="password" placeholder="Password" class="form-control" id="password" name="password">
                                                  <p>
                                                    <?php echo lang('login_remember_label', 'remember');?>
                                                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                                                  </p>
                                                  <p><input type="submit" name="submit" value="Log in" class="btn btn-primary"></p>
                                              </form> 
                                    
                              <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>


                                  </div>
                                  <div class="col-lg-4 col-md-4"></div>

                                </div>
                             
                        </div>
                    </div>
                </div>


            </section>
                        
<?php  $this->load->view('content/footer'); ?>

