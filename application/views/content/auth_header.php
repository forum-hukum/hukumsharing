<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum :: Home Page</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>f_style/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom -->
        <link href="<?php echo base_url()?>f_style/css/custom.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url()?>f_style/font-awesome-4.0.3/css/font-awesome.min.css">

        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>f_style/css/style.css" media="screen" />

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>f_style/rs-plugin/css/settings.css" media="screen" />
		<script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
            <div class="headernav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="index.html"><img src="<?php echo base_url()?>f_style/images/logo.jpg" alt=""  /></a></div>
                        <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" >Borderlands 2</a> <b class="caret"></b>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Borderlands 1</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Borderlands 2</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Borderlands 3</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                            <div class="wrap">
                                <form action="#" method="post" class="form">
                                    <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                            <div class="stnt pull-left">                            
                                <form action="03_new_topic.html" method="post" class="form">
                                    <button class="btn btn-primary">Start New Topic</button>
                                </form>
                            </div>
                            <div class="env pull-left"><i class="fa fa-envelope"></i></div>

                            <div class="avatar pull-left dropdown">
                                <a data-toggle="dropdown" href="#"><img src="<?php echo base_url()?>f_style/images/avatar.jpg" alt="" /></a> <b class="caret"></b>
                                <div class="status green">&nbsp;</div>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Inbox</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Log Out</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-4" href="04_new_account.html">Create account</a></li>
                                </ul>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
