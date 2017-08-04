
<?php $this->load->view('content/auth_header'); ?>
<?php

$first_name = array(
	'name'	=> 'first_name',
	'id'	=> 'first_name',
	'value'	=> set_value('first_name'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' =>	'form-control',
	'placeholder' => "FIRST NAME"
);

$last_name = array(
	'name'	=> 'last_name',
	'id'	=> 'last_name',
	'value'	=> set_value('last_name'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' =>	'form-control',
	'placeholder' => "LAST NAME"
);

$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' =>	'form-control',
	'placeholder' => "EMAIL"
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' =>	'form-control',
	'placeholder' => "PASSWORD"
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' =>	'form-control',
	'placeholder' => "CONFIRM PASSWORD"
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
	'class' =>	'form-control',
	'placeholder' => "MASUKKAN CODE"
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
						<div class="col-lg-2 col-md-2"></div>
                        <div class="col-lg-8 col-md-8">



                            <!-- POST -->
                            <div class="post">
                                <form action="#" class="form newtopic" method="post">
                                    <div class="postinfotop">
                                        <h2>Profile Account</h2>
                                    </div>

                                    <!-- acc section -->
                                    <div class="accsection">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left"><h3>Required Fields</h3></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">
                                                <div class="avatar">
                                                    <img src="images/avatar-blank.jpg" alt="">
                                                    <div class="status green">&nbsp;</div>
                                                </div>
                                                <div class="imgsize">60 x 60</div>
                                                <div>
                                                    <button class="btn">Add</button>
                                                </div>
                                            </div>
                                            <div class="posttext pull-left">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" placeholder="First Name" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" placeholder="Last Name" class="form-control">
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="text" placeholder="User Name" class="form-control">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="password" placeholder="Password" class="form-control" id="pass" name="pass">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="password" placeholder="Retype Password" class="form-control" id="pass2" name="pass2">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->



                                    <!-- acc section -->
                                    <div class="accsection privacy">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left"><h3>Privacy</h3></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">

                                                <div class="row newtopcheckbox">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div><p>Who can see my Profile?</p></div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="everyone"> Everyone
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="friends"> Only Friends
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div>
                                                            <p>Share posts on Social Networks</p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="fb"> <i class="fa fa-facebook-square"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="tw"> <i class="fa fa-twitter"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="gp"> <i class="fa fa-google-plus-square"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->



                                    <!-- acc section -->
                                    <div class="accsection survey">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">
                                                <div class="htext">
                                                    <h3>Small Survey ( Optional )</h3>
                                                </div>
                                                <div class="hnotice">
                                                    Answer this survey and Earn this Badge : <img src="images/icon5.jpg" alt="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="old" id="old" class="form-control">
                                                            <option value="" disabled="" selected="">How Old are you?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="who" id="who" class="form-control">
                                                            <option value="" disabled="" selected="">Who are you?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="help" id="help" class="form-control">
                                                            <option value="" disabled="" selected="">Will you help others here?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="hear" id="hear" class="form-control">
                                                            <option value="" disabled="" selected="">Where do you hear about us?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row newtopcheckbox">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div><p>Some other question 1</p></div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="everyone2"> option 1 
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="friends2"> option 2 
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div>
                                                            <p>Some other question 2</p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="fb2"> option 1 
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="tw2"> option 2 
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->





                                    <!-- acc section -->
                                    <div class="accsection networks">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">
                                                <div class="htext">
                                                    <h3>Social Networks ( Optional )</h3>
                                                </div>
                                                <div class="hnotice">
                                                    Link Social Networks and Earn this Badge : <img src="images/icon6.jpg" alt="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <button class="btn btn-fb">Link Facebook Account</button>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <button class="btn btn-tw">Link Twitter Account</button>                                                       
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <button class="btn btn-gp">Link Google + Account</button>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <button class="btn btn-pin">Link Pinterest Account</button>                                                       
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->





                                    <div class="postinfobot">

                                        <div class="notechbox pull-left">
                                            <input type="checkbox" name="note" id="note" class="form-control">
                                        </div>

                                        <div class="pull-left lblfch">
                                            <label for="note"> I agree with the Terms and Conditions of this site</label>
                                        </div>

                                        <div class="pull-right postreply">
                                            <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Sign Up</button></div>
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div><!-- POST -->






                        </div>
                        <div class="col-lg-2 col-md-2"></div>
                    </div>
                </div>


            </section>
                        
<?php  $this->load->view('content/footer'); ?>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
	$('.pop-over').click();
});
</script>
<style>
.forgot-anchor a{
font-size: 11px;
    color: darkcyan;
    text-decoration: none;
}

.postinfobot {
    border-top: solid 1px #ffffff;
}
</style>



