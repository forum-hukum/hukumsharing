<div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">

                            <!-- POST -->
                            <div class="post beforepagination">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="<?php echo base_url()?>f_style/images/avatar.jpg" alt="" />
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="<?php echo base_url()?>f_style/images/icon1.jpg" alt="" /><img src="<?php echo base_url()?>f_style/images/icon4.jpg" alt="" /><img src="<?php echo base_url()?>f_style/images/icon5.jpg" alt="" /><img src="<?php echo base_url()?>f_style/images/icon6.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><?php echo $topicResult->Title ?></h2>
                                        <p><?php echo $topicResult->Content ?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                              
                                <div class="postinfobot">

                                    <div class="likeblock pull-left">
                                        <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>25</a>
                                       
                                    </div>

                                    <div class="prev pull-left">                                        
                                        <a href="#"><i class="fa fa-reply"></i></a>
                                    </div>

                                    <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : <?php echo dateDiff($topicResult->CreatedDate) ?></div>

                                    <div class="next pull-right">                                        
                                        <a href="#"><i class="fa fa-share"></i></a>

                                        <a href="#"><i class="fa fa-flag"></i></a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div><!-- POST -->

                            
                            <?php 

                                foreach ($getAnswers as $key => $value) {
                    
                                    echo '<div class="post">
                                                <div class="topwrap">
                                                    <div class="userinfo pull-left">
                                                        <div class="avatar">
                                                            <img src="'.base_url().'f_style/images/avatar2.jpg" alt="" />
                                                            <div class="status red">&nbsp;</div>
                                                        </div>

                                                        <div class="icons">
                                                            <img src="'.base_url().'f_style/images/icon3.jpg" alt="" /><img src="'.base_url().'f_style/images/icon4.jpg" alt="" /><img src="'.base_url().'f_style/images/icon5.jpg" alt="" /><img src="'.base_url().'f_style/images/icon6.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="posttext pull-left">
                                                        <p>'.$value->Content.'</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>                              
                                                <div class="postinfobot">

                                                    <div class="likeblock pull-left">
                                                        <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>10</a>
                                                        
                                                    </div>

                                                    <div class="prev pull-left">                                        
                                                        <a href="#"><i class="fa fa-reply"></i></a>
                                                    </div>

                                                    <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : '.dateDiff($value->CreatedDate).'</div>

                                                    <div class="next pull-right">                                        
                                                        <a href="#"><i class="fa fa-share"></i></a>

                                                        <a href="#"><i class="fa fa-flag"></i></a>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>';                                



                                }

                            ?>
                         



                            <!-- POST -->
                            <div class="post">
                                <form action="<?php echo base_url()?>main/insert_answer" class="form" method="post">
                                    <input type="hidden" value="<?php echo $topicResult->ID ?>" name="questionID" id="questionID">
                                    <input type="hidden" value="<?php echo $que_url ?>" name="urlredir" id="urlredir">
                                    <div class="topwrap">
                                        <div class="userinfo pull-left">
                                            <div class="avatar">
                                                <img src="<?php echo base_url()?>f_style/images/avatar4.jpg" alt="" />
                                                <div class="status red">&nbsp;</div>
                                            </div>

                                            <div class="icons">
                                                <img src="<?php echo base_url()?>f_style/images/icon3.jpg" alt="" /><img src="<?php echo base_url()?>f_style/images/icon4.jpg" alt="" /><img src="<?php echo base_url()?>f_style/images/icon5.jpg" alt="" /><img src="<?php echo base_url()?>f_style/images/icon6.jpg" alt="" />
                                            </div>
                                        </div>
                                       
                                            <div class="posttext pull-left">
                                                <div class="textwraper">
                                                    <div class="postreply">Post a Reply</div>
                                                    <textarea name="reply" id="reply" placeholder="Type your message here"></textarea>
                                                </div>
                                            </div>
                                       

                                        <div class="clearfix"></div>
                                    </div>                              
                                    <div class="postinfobot">

                                        <div class="notechbox pull-left">
                                            <input type="checkbox" name="note" id="note" class="form-control" />
                                        </div>

                                        <div class="pull-left">
                                            <label for="note"> Email me when some one post a reply</label>
                                        </div>

                                        <div class="pull-right postreply">
                                            <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Post Reply</button></div>
                                           
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>

                                    </div>
                                </form>
                                <?php
                                                if (isset($error)) {

                                                        echo '<div class="alert alert-danger"><strong>Error: </strong>'.$error.'</div>';
                                                }

                                             ?>
                            </div><!-- POST -->


                        </div>
                        <div class="col-lg-4 col-md-4">

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Categories</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                        <li><a href="#">Trading for Money <span class="badge pull-right">20</span></a></li>
                                        <li><a href="#">Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
                                        <li><a href="#">Misc Guns Locations <span class="badge pull-right">50</span></a></li>
                                        <li><a href="#">Looking for Players <span class="badge pull-right">36</span></a></li>
                                        <li><a href="#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
                                        <li><a href="#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a></li>
                                        <li><a href="#">2K Official Forums <span class="badge pull-right">5</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Poll of the Week</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <p>Which game you are playing this week?</p>
                                    <form action="#" method="post" class="form">
                                        <table class="poll">
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                            Call of Duty Ghosts
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt1" type="radio" name="opt" value="1">  
                                                    <label for="opt1"></label>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                                            Titanfall
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt2" type="radio" name="opt" value="2" checked>  
                                                    <label for="opt2"></label>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                            Battlefield 4
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt3" type="radio" name="opt" value="3">  
                                                    <label for="opt3"></label>  
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                    <p class="smal">Voting ends on 19th of October</p>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>My Active Threads</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Who Wins in the Battle for Power on the Internet?</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">FedEx Simplifies Shipping for Small Businesses</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>