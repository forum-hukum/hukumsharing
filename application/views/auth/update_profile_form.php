
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
                                       
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">
                                                <div class="avatar">
                                                    <img src="images/avatar-blank.jpg" alt="">
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-info btn_show_modal" char="image">add</button>
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
                                                    <input type="text" placeholder="Email" class="form-control">
                                                </div>
												
                                                <div>
                                                    <input type="text" placeholder="Username" class="form-control">
                                                </div>
											</div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->
									<div class="accsection privacy">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left btn_show_modal" char="password"><h3>Change Password</h3></div>
                                            <div class="clearfix"></div>
                                        </div>
									</div>
                                    <div class="postinfobot">
                                        <div class="pull-right postreply">
                                            <div class="pull-left smile"><a href="#"></a></div>
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Update</button></div>
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
                        
						
<div class="modal-view" >


</div>
  
<?php  $this->load->view('content/footer'); ?>
<script>
$(document).on('click','.btn_show_modal', function(){
	var url = '<?php echo base_url()."auth/get_modal_update_profile"?>';
	var md = $(this).attr('char');
	$.post(url,{md:md}, function(data) {
			$('.modal-view').html(data);
			$('.modal').modal('show');
		}).success(function() {  $('#loader').fadeOut(); 
	});


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



