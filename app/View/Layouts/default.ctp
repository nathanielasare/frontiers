<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <!-- Title and other stuffs -->
        <title>FRONTIERS - Destination Inspection System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">


        <!-- Stylesheets -->
        <?php
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('dataTables.bootstrap');
        echo $this->Html->css('font-awesome');
        echo $this->Html->css('jquery-ui-1.9.2.custom.min');
        echo $this->Html->css('fullcalendar');
        echo $this->Html->css('prettyPhoto');
        echo $this->Html->css('rateit');
        echo $this->Html->css('bootstrap-datetimepicker.min');
        echo $this->Html->css('jquery.cleditor');
        echo $this->Html->css('uniform.default');
        echo $this->Html->css('daterangepicker-bs3');
        echo $this->Html->css('bootstrap-switch');
        echo $this->Html->css('dropzone');
        echo $this->Html->css('form');
        echo $this->Html->css('validationEngine.jquery');
        echo $this->Html->css('jquery.easy-pie-chart');

        echo $this->Html->css('style');
        echo $this->Html->css('widgets');
        echo $this->Html->css('jquery.gritter');
        echo $this->Html->css('skins/all');
        ?>

        <?php echo $this->Html->script('jquery'); ?> <!-- jQuery -->
        <?php echo $this->Html->script('bootstrap'); ?>
        <?php echo $this->Html->script('jquery-ui-1.9.2.custom.min'); ?> <!-- jQuery UI -->
        <!-- HTML5 Support for IE -->
        <!--[if lt IE 9]>
        <script src="js/html5shim.js"></script>
        <![endif]-->

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon/favicon.png">
    </head>

    <body>
        <header class="custmain" style="height: 28px;">
            <div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

                <div class="container" id="container_addon" style="padding: 14px">
                    <!-- Menu button for smallar screens -->
                    <div class="navbar-header">
                        <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>
                        <a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>
                        <!-- Site name for smallar screens -->
                        <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')); ?>" class="navbar-brand"><span class="bold">FRONTIERS</span></a>
                    </div>

                    <!-- Navigation starts -->
                    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

                        <!-- Links -->
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown pull-right user-data">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <?php echo $this->Html->image('user1.png'); ?> John <span class="bold">Doe</span> <b class="caret"></b>
                                </a>
                                <!-- Dropdown menu -->
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                                    <li><a href="login.html"><i class="fa fa-key"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
                            <li class="dropdown dropdown-big leftonmobile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cloud-upload"></i></a>
                                <!-- Dropdown -->
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- Progress bar -->
                                        <p>Photo Upload in Progress</p>
                                        <!-- Bootstrap progress bar -->
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>

                                        <hr />

                                        <!-- Progress bar -->
                                        <p>Video Upload in Progress</p>
                                        <!-- Bootstrap progress bar -->
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>

                                        <hr />

                                        <!-- Dropdown menu footer -->
                                        <div class="drop-foot">
                                            <a href="#">View All</a>
                                        </div>

                                    </li>
                                </ul>
                            </li>

                            <!-- Sync to server link -->
                            <li class="dropdown dropdown-big leftonmobile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>
                                <!-- Dropdown -->
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- Using "fa fa-spin" class to rotate icon. -->
                                        <p><span class="label label-info"><i class="fa fa-cloud"></i></span> Syncing Photos to Server</p>
                                        <hr />
                                        <p><span class="label label-warning"><i class="fa fa-cloud"></i></span> Syncing Bookmarks Lists to Cloud</p>

                                        <hr />

                                        <!-- Dropdown menu footer -->
                                        <div class="drop-foot">
                                            <a href="#">View All</a>
                                        </div>

                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-big leftonmobile">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                    <i class="fa fa-comments"></i><span class="label label-info">6</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="dropdown-header padless">
                                        <!-- Heading - h5 -->
                                        <h5><i class="fa fa-comments"></i> Chats</h5>
                                        <!-- Use hr tag to add border -->
                                    </li>
                                    <li>
                                        <hr />
                                        <!-- List item heading h6 -->
                                        <h6><a href="#">Hi :)</a> <span class="label label-warning pull-right">10:42</span></h6>
                                        <div class="clearfix"></div>
                                        <hr />
                                    </li>
                                    <li>
                                        <h6><a href="#">How are you?</a> <span class="label label-warning pull-right">20:42</span></h6>
                                        <div class="clearfix"></div>
                                        <hr />
                                    </li>
                                    <li>
                                        <h6><a href="#">What are you doing?</a> <span class="label label-warning pull-right">14:42</span></h6>
                                        <div class="clearfix"></div>
                                        <hr />
                                    </li>
                                    <li>
                                        <div class="drop-foot">
                                            <a href="#">View All</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <!-- Message button with number of latest messages count-->
                            <li class="dropdown dropdown-big messages-dd leftonmobile">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i> <span class="label label-primary">3</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="dropdown-header padless">
                                        <!-- Heading - h5 -->
                                        <h5><i class="fa fa-envelope-alt"></i> Messages</h5>
                                        <!-- Use hr tag to add border -->

                                    </li>
                                    <li>
                                        <hr /><!-- List item heading h6 -->
                                        <h6><a href="#">Hello how are you?</a></h6>
                                        <!-- List item para -->
                                        <p>Quisque eu consectetur erat eget  semper...</p>
                                        <hr />
                                    </li>
                                    <li>
                                        <h6><a href="#">Today is wonderful?</a></h6>
                                        <p>Quisque eu consectetur erat eget  semper...</p>
                                        <hr />
                                    </li>
                                    <li>
                                        <div class="drop-foot">
                                            <a href="#">View All</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <!-- Members button with number of latest members count -->
                            <li class="dropdown dropdown-big">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                    <i class="fa fa-user"></i> <span class="label label-success">7</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="dropdown-header padless">
                                        <!-- Heading - h5 -->
                                        <h5><i class="fa fa-user"></i> Users</h5>
                                        <!-- Use hr tag to add border -->
                                    </li>
                                    <li>
                                        <hr />
                                        <!-- List item heading h6-->
                                        <h6><a href="#">John Doe</a> <span class="label label-warning pull-right">Free</span></h6>
                                        <div class="clearfix"></div>
                                        <hr />
                                    </li>
                                    <li>
                                        <h6><a href="#">Iron Man</a> <span class="label label-important pull-right">Premium</span></h6>
                                        <div class="clearfix"></div>
                                        <hr />
                                    </li>
                                    <li>
                                        <h6><a href="#">Salamander</a> <span class="label label-warning pull-right">Free</span></h6>
                                        <div class="clearfix"></div>
                                        <hr />
                                    </li>
                                    <li>
                                        <div class="drop-foot">
                                            <a href="#">View All</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                                        Language <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?php echo $this->HTML->url(array('language' => 'eng', 'controller' => 'pages', 'action' => 'test')) ?>">English</a></li>
                                        <li><a href="<?php echo $this->HTML->url(array('language' => 'fra', 'controller' => 'pages', 'action' => 'test')) ?>">French</a></li>
                                        <li><a href="<?php echo $this->HTML->url(array('language' => 'por', 'controller' => 'pages', 'action' => 'test')) ?>">Portuguese</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo $this->HTML->url(array('language' => 'eng', 'controller' => 'pages', 'action' => 'test')) ?>">Default</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>
        <!-- Main content starts -->

        <div class="content">

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
                <!-- Search form
                <form class="navbar-form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn search-button" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>-->
                <div style="padding: 10px 10px 10px 15px;">
                    <strong id="headerdisc" style="font-size: 10px;"><?php echo __('comp_name'); ?></strong>
                </div>
                <!--- Sidebar navigation -->
                <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
                <ul id="nav">
                    <!-- Main menu with font awesome icon -->
                    <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')); ?>" class="open"><i class="fa fa-home"></i> <span>Performance Summary</span></a></li>
                    <!--<li class="has_sub"><a href="#"><i class="fa fa-list-alt"></i> <span>Widgets</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                        <ul>
                            <li><a href="widgets1.html">Widgets #1</a></li>
                            <li><a href="widgets2.html">Widgets #2</a></li>
                            <li><a href="widgets3.html">Widgets #3</a></li>
                        </ul>
                    </li>-->
                    <li><a href="#"><i class="fa fa-bar-chart-o"></i> <span><?php echo __("reception"); ?></span></a></li>
                    <li><a href=""><i class="fa fa-table"></i> <span><?php echo __("declaration"); ?></span></a></li>
                    <li><a href="#"><i class="fa fa-tasks"></i> <span><?php echo __("classification"); ?></span></a></li>
                    <li><a href="#"><i class="fa fa-magic"></i> <span><?php echo __("valuation"); ?></span></a></li>
                    <li><a href="#"><i class="fa fa-edit"></i> <span><?php echo __("quality-assurance"); ?></span></a></li>
                    <li><a href="#"><i class="fa fa-calendar"></i> <span>Printing</span></a></li>
                    <li class="has_sub"><a href="#"><i class="fa fa-file-text"></i> <span>Setup</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                        <ul>
                            <li><a href="<?php echo $this->Html->url(array('controller' => 'Setups', 'action' => 'index')); ?>"><i class="fa fa-bookmark"></i> Sites</a></li>
                            <li><a href="#"><i class="fa fa-bookmark"></i> Users</a></li>
                            <li><a href="#"><i class="fa fa-bookmark"></i> Office Location</a></li>
                            <li><a href="#"><i class="fa fa-bookmark"></i> Document Type</a></li>
                        </ul>
                    </li>
                    <!--<li class="has_sub"><a href="#"><i class="fa fa-sitemap"></i> <span>Extra Pages #1</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                        <ul>
                            <li><a href="post.html">Post</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="support.html">Support</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="has_sub"><a href="#"><i class="fa fa-file-text"></i> <span>Extra Pages #2</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                        <ul>
                            <li><a href="media.html">Media</a></li>
                            <li><a href="statement.html">Statement</a></li>
                            <li><a href="error.html">Error</a></li>
                            <li><a href="error-log.html">Error Log</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="grid.html">Grid</a></li>
                        </ul>
                    </li>
                    <li class="has_sub"><a href="#"><i class="fa fa-heart"></i> <span>3 Level Menu</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                        <ul>
                            <li><a href="#"><i class="fa fa-bookmark"></i> Subitem 1</a></li>
                            <li class="has_sub"><a href="#"><i class="fa fa-glass"></i> Subitem 2 <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-bell"></i> Subitem 1</a></li>
                                    <li><a href="#"><i class="fa fa-camera"></i> Subitem 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has_sub"><a href="#"><i class="fa fa-folder"></i> <span>4 Level Menu</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                        <ul>
                            <li><a href="#"><i class="fa fa-thumb-tack"></i> Subitem 1</a></li>
                            <li class="has_sub"><a href="#"><i class="fa fa-thumbs-up"></i> Subitem 2 <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-trophy"></i> Subitem 1</a></li>
                                    <li class="has_sub"><a href="#"><i class="fa fa-share"></i> Subitem 2 <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-microphone"></i> Subitem 1</a></li>
                                            <li><a href="#"><i class="fa fa-phone"></i> Subitem 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->
                </ul>
            </div>
            <!-- Sidebar ends -->

            <!-- Main bar -->
            <div class="mainbar">

                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>

            </div>

            <!-- Mainbar ends -->
            <div class="clearfix"></div>

        </div>
        <!-- Content ends -->

        <!-- Footer starts -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Copyright info -->
                        <p class="copy">Copyright &copy; 2013 - <?php echo date('Y') ?> | <a href="#"><?php echo __('company_name') ?></a> </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Footer ends -->

        <!-- Scroll to top -->
        <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>

        <!-- JS -->


        <?php echo $this->Html->script('fullcalendar.min'); ?> <!-- Full Google Calendar - Calendar -->
        <?php echo $this->Html->script('jquery.rateit.min'); ?> <!-- RateIt - Star rating -->
        <?php echo $this->Html->script('jquery.prettyPhoto'); ?> <!-- prettyPhoto -->

        <!-- Morris JS -->
        <?php echo $this->Html->script('raphael-min'); ?>
        <?php echo $this->Html->script('morris.min'); ?>

        <!-- jQuery Flot -->
        <?php echo $this->Html->script('excanvas.min'); ?>
        <?php echo $this->Html->script('jquery.flot'); ?>
        <?php echo $this->Html->script('jquery.flot.resize'); ?>
        <?php echo $this->Html->script('jquery.flot.pie'); ?>
        <?php echo $this->Html->script('jquery.flot.stack'); ?>

        <!-- jQuery Notification - Noty -->
        <?php echo $this->Html->script('jquery.noty'); ?> <!-- jQuery Notify -->
        <?php echo $this->Html->script('themes/default'); ?> <!-- jQuery Notify -->
        <?php echo $this->Html->script('layouts/bottom'); ?> <!-- jQuery Notify -->
        <?php echo $this->Html->script('layouts/topRight'); ?> <!-- jQuery Notify -->
        <?php echo $this->Html->script('layouts/top'); ?> <!-- jQuery Notify -->
        <!-- jQuery Notification ends -->

        <!-- Daterangepicker -->
        <?php echo $this->Html->script('moment.min'); ?>
        <?php echo $this->Html->script('daterangepicker'); ?>
        <?php echo $this->Html->script('datatables/js/jquery.dataTables.js'); ?>

        
        <?php echo $this->Html->script('languages/jquery.validationEngine-en'); ?><!-- jQuery Validation Engine Language File -->
        <?php echo $this->Html->script('jquery.validationEngine'); ?><!-- jQuery Validation Engine -->

        <?php echo $this->Html->script('sparklines'); ?> <!-- Sparklines -->
        <?php echo $this->Html->script('jquery.gritter.min'); ?> <!-- jQuery Gritter -->
        <?php echo $this->Html->script('jquery.cleditor.min'); ?> <!-- CLEditor -->
        <?php echo $this->Html->script('bootstrap-datetimepicker.min'); ?> <!-- Date picker -->
        <?php echo $this->Html->script('jquery.uniform.min'); ?> <!-- jQuery Uniform -->
        <?php echo $this->Html->script('jquery.slimscroll.min'); ?> <!-- jQuery SlimScroll -->
        <?php echo $this->Html->script('bootstrap-switch.min'); ?> <!-- Bootstrap Toggle -->
        <?php echo $this->Html->script('jquery.maskedinput.min'); ?> <!-- jQuery Masked Input -->
        <?php echo $this->Html->script('dropzone'); ?> <!-- jQuery Dropzone -->
        <?php echo $this->Html->script('filter'); ?> <!-- Filter for support page -->
        <?php echo $this->Html->script('custom'); ?> <!-- Custom codes -->
        <?php echo $this->Html->script('charts'); ?> <!-- Charts & Graphs -->

        <?php echo $this->Html->script('index'); ?> <!-- Index Javascripts -->



        <!--
        <script src="js/jquery.js"></script> <!-- jQuery --
        <script src="js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI --
        <script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar --
        <script src="js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating --
        <script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto --
        
        <!-- Morris JS --
        <script src="js/raphael-min.js"></script>
        <script src="js/morris.min.js"></script>
        
        <!-- jQuery Flot --
        <script src="js/excanvas.min.js"></script>
        <script src="js/jquery.flot.js"></script>
        <script src="js/jquery.flot.resize.js"></script>
        <script src="js/jquery.flot.pie.js"></script>
        <script src="js/jquery.flot.stack.js"></script>
        
         File_Name_Here.Mp3

        <!-- jQuery Notification - Noty --
        <script src="js/jquery.noty.js"></script> <!-- jQuery Notify --
        <script src="js/themes/default.js"></script> <!-- jQuery Notify --
        <script src="js/layouts/bottom.js"></script> <!-- jQuery Notify --
        <script src="js/layouts/topRight.js"></script> <!-- jQuery Notify --
        <script src="js/layouts/top.js"></script> <!-- jQuery Notify --
        <!-- jQuery Notification ends --
        
        <!-- Daterangepicker --
        <script src="js/moment.min.js"></script>
        <script src="js/daterangepicker.js"></script>
        
        <script src="js/sparklines.js"></script> <!-- Sparklines --
        <script src="js/jquery.gritter.min.js"></script> <!-- jQuery Gritter --
        <script src="js/jquery.cleditor.min.js"></script> <!-- CLEditor --
        <script src="js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker --
        <script src="js/jquery.uniform.min.js"></script> <!-- jQuery Uniform --
        <script src="js/jquery.slimscroll.min.js"></script> <!-- jQuery SlimScroll --
        <script src="js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle --
        <script src="js/jquery.maskedinput.min.js"></script> <!-- jQuery Masked Input --
        <script src="js/dropzone.js"></script> <!-- jQuery Dropzone --
        <script src="js/filter.js"></script> <!-- Filter for support page --
        <script src="js/custom.js"></script> <!-- Custom codes --
        <script src="js/charts.js"></script> <!-- Charts & Graphs --
        
        <script src="js/index.js"></script> <!-- Index Javascripts -->

    </body>
</html>