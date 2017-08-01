                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12 col-md-8">
                            <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                            <div class="pull-left">
                                <ul class="paginationforum">
                                    <li class="hidden-xs"><a href="#">1</a></li>
                                    <li class="hidden-xs"><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#" class="active">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li class="hidden-xs"><a href="#">9</a></li>
                                    <li class="hidden-xs"><a href="#">10</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                                    <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                                    <li><a href="#">1586</a></li>
                                </ul>
                            </div>
                            <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <!-- POST -->


                            <?php 

                                foreach ($getTopic as $key => $val) {

                                    

                                   
                                    echo '<div class="post">
                                                <div class="wrap-ut pull-left">
                                                    <div class="userinfo pull-left">
                                                        <div class="avatar">
                                                            <img src="<?php echo base_url()?>f_style/images/avatar.jpg" alt="" />
                                                            <div class="status green">&nbsp;</div>
                                                        </div>

                                                        <div class="icons">
                                                            <img src="<?php echo base_url()?>f_style/images/icon1.jpg" alt="" /><img src="<?php echo base_url()?>f_style/images/icon4.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="posttext pull-left">
                                                        <h2><a href="topic/'.$val->link_question.'">'.$val->Title.'</a></h2>
                                                        <p>'.$val->Content.'</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="postinfo pull-left">
                                                    <div class="comments">
                                                        <div class="commentbg">
                                                            '.$this->topic_model->count_ans($val->ID).'
                                                            <div class="mark"></div>
                                                        </div>

                                                    </div>
                                                    <div class="views"><i class="fa fa-eye"></i> '.$val->TotalView.'</div>
                                                    <div class="time"><i class="fa fa-clock-o"></i> '.dateDiff($val->CreatedDate).'</div>                                    
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>';

                                }


                            ?>

                            <!-- POST -->


                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Topik Terpopuler</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                        <li><a href="#"><span class="number-trending">&nbsp;1&nbsp;</span>&nbsp;Trading for Money <span class="badge pull-right">20</span></a></li>
                                        <li><a href="#"><span class="number-trending">&nbsp;2&nbsp;</span>&nbsp;Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
                                        <li><a href="#"><span class="number-trending">&nbsp;3&nbsp;</span>&nbsp;Misc Guns Locations <span class="badge pull-right">50</span></a></li>
                                        <li><a href="#"><span class="number-trending">&nbsp;4&nbsp;</span>&nbsp;Looking for Players <span class="badge pull-right">36</span></a></li>
                                        <li><a href="#"><span class="number-trending">&nbsp;5&nbsp;</span>&nbsp;Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Artikel</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                        <li><a href="#"><b> Tersangka Jangan Takut Gunakan Advokat </b></a> <br/>
											<p class="articel-creator">Oleh : Agust, SH., </p>
											<p class="articel-creator">Sabtu, 02 Agustus 2017</p></li>
                                        <li><a href="#"><b> Tanggung jawab Pemilik PT atas Kerugian... </b></a> <br/> 
											<p class="articel-creator">Oleh : Agust, SH., </p>
											<p class="articel-creator">Sabtu, 02 Agustus 2017</p> </li>
										<li><a href="#"><b> Memperkerjaan 10 Karyawan, Wajib membuat... </b>
											<p class="articel-creator">Oleh : Agust, SH., </p>
											<p class="articel-creator">Sabtu, 02 Agustus 2017</p>
										</li>
										<li><a href="#"><b> Menyambut Kematian dengan Percaya Diri </b></a> <br/> 
											<p class="articel-creator">Oleh : Agust, SH., </p>
											<p class="articel-creator">Sabtu, 02 Agustus 2017</p></li>
										<li><a href="#"><b> Putusan Serta Merta, dari Hukum dan Keadilan </b></a> <br/> 
											<p class="articel-creator">Oleh : Agust, SH., </p>
											<p class="articel-creator">Sabtu, 02 Agustus 2017</p></li>
                                    </ul>
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



                <div class="container">
                    <h3>Konsultan Terpopuler</h3>
						<div class="divline"></div>
						<div class="blocktxt">
						  <ul class="cats">
								<li>
									<table>
										<tr>
											<td>
												<img class="consultant-profile" src="<?php echo base_url()?>f_style/images/avatar3.jpg" alt="" />
											</td>
											<td>
												<a href="#"><b> Sahala Tobing </b></a> <br/>
												<p class="articel-creator">Level : Pakar </p>
												<p class="articel-creator">Jumlah Point : 12000</p></li>
											</td>
										 </tr>
									</table> 
								<li>
									<table>
										<tr>
											<td>
												<img class="consultant-profile" src="<?php echo base_url()?>f_style/images/avatar3.jpg" alt="" />
											</td>
											<td>
												<a href="#"><b> Ricat Simbolon </b></a> <br/> 
												<p class="articel-creator">Level : Pakar </p>
												<p class="articel-creator">Point : 10000</p> </li>
											</td>
										 </tr>
									</table> 
								<li>
									<table>
										<tr>
											<td>
												<img class="consultant-profile" src="<?php echo base_url()?>f_style/images/avatar3.jpg" alt="" />
											</td>
											<td>
												<a href="#"><b> Ono </b>
												<p class="articel-creator">Level : Ahli </p>
												<p class="articel-creator">Point : 5000</p>
											</td>
										 </tr>
									</table> 
								</li>
								<li>
									<table>
										<tr>
											<td>
												<img class="consultant-profile" src="<?php echo base_url()?>f_style/images/avatar3.jpg" alt="" />
											</td>
											<td>
												<a href="#"><b> Elvan </b></a> <br/> 
												<p class="articel-creator">Level : Ahli </p>
												<p class="articel-creator">Jumlah Point : 200</p></li>
											</td>
										 </tr>
									</table> 
								<li>
									<table>
										<tr>
											<td>
												<img class="consultant-profile" src="<?php echo base_url()?>f_style/images/avatar3.jpg" alt="" />
											</td>
											<td>
												<a href="#"><b> Agust </b></a> <br/> 
												<p class="articel-creator">Level : Praktisi </p>
												<p class="articel-creator">Jumlah Point : 100</p></li>
											</td>
										 </tr>
									</table> 
							</ul>
						</div>
                </div>


           

           