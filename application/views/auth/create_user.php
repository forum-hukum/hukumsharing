<style type="text/css">
#infoMessage p {

  color: red;
}

</style>
 <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">Create New account</a> 
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="post">
                                <form action="#" class="form newtopic" action="http://localhost:8080/hukumsharing/auth/create_user" method="post" accept-charset="utf-8" method="post">
                                    <div class="postinfotop">
                                        <h2>Create New Account</h2>
                                    </div>

                                      <div class="col-lg-12 col-md-12" style="text-align: center;">
                                         <div id="infoMessage"><?php echo $message;?></div>
                                      </div>

                                    <div class="accsection">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="clearfix"></div>

                                        </div>
                                        <div class="topwrap">

                                            <div class="userinfo pull-left">
                                                
                                            </div>

                                            <div class="posttext pull-left">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control" />
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-12 col-md-12">
                                                    <input type="text" name="email" id="email" placeholder="Email" class="form-control" />
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" />
                                                    </div>
                                                    
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="password" name="password_confirm" id="password_confirm" placeholder="Retype Password" class="form-control" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->
                                    <!-- acc section -->
                                    <div class="accsection survey">
                                        
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="old" id="old"  class="form-control" >
                                                            <option value="" disabled selected>How Old are you?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="who" id="who"  class="form-control" >
                                                            <option value="" disabled selected>Who are you?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="help" id="help"  class="form-control" >
                                                            <option value="" disabled selected>Will you help others here?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="hear" id="hear"  class="form-control" >
                                                            <option value="" disabled selected>Where do you hear about us?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                  <div class="col-lg-4 col-md-4">
                                                  </div>
                                                    
                                                    <div class="col-lg-4 col-md-4">
                                                      <input class="btn btn-fb" type="submit" name="submit" value="CREATE ACCOUNT">
                                                  </div>
                                                  <div class="col-lg-4 col-md-4">
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->
                                </form>
                                    <!-- acc section -->
                                    <div class="accsection networks">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            
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

                            </div><!-- POST -->






                        </div>
                        </div>
                    </div>
                </div>
            </section>