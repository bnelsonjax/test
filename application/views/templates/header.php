<?
$user = $this->ion_auth->user()->row();
		$fname =  $user->first_name;
   		$lname =  $user->last_name;
        $email =  $user->email;
        $avatar =  $user->avatar;
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>LogicPSA (v1.2)</title>

	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

	<!-- Bootstrap -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/css/responsive.css" rel="stylesheet" />

	<!-- Glyphicons Font Icons -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/css/glyphicons.css" rel="stylesheet" />

	<!-- Uniform Pretty Checkboxes -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />

	<!-- Bootstrap Extended -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" />

<!-- Select2 Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/forms/select2/select2.css" rel="stylesheet" />

	<!-- DateTimePicker Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />

	<!-- JQueryUI -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />

	<!-- MiniColors ColorPicker Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.css" rel="stylesheet" />

	<!-- Notyfy Notifications Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css" rel="stylesheet" />
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/notifications/notyfy/themes/default.css" rel="stylesheet" />

	<!-- Gritter Notifications Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css" rel="stylesheet" />

	<!-- Easy-pie Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.css" rel="stylesheet" />

	<!-- Google Code Prettify Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/other/google-code-prettify/prettify.css" rel="stylesheet" />

	<!-- DataTables Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/tables/DataTables/media/css/DT_bootstrap.css" rel="stylesheet" />

	<!-- Main Theme Stylesheet :: CSS -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/css/style-light.css?1370657326" rel="stylesheet" />

	<!-- Farbtastic ColorPicker Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/color/farbtastic/farbtastic.css" rel="stylesheet" />

    <!-- DC Twitter CSS -->
<link href="http://www.dreamtemplate.com/dreamcodes/twitter_tweet/jquery.tweet.css" rel="stylesheet">

	<!-- LESS.js Library -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="">

		<!-- Main Container Fluid -->
	<div class="container-fluid fluid menu-left">

		<!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
		<div class="navbar main hidden-print">

			<!-- Wrapper -->
			<div class="wrapper">


								<!-- Menu Toggle Button -->
			   	<button type="button" class="btn btn-navbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<!-- // Menu Toggle Button END -->


				<!-- Top Menu Right -->
				<ul class="topnav pull-right">

					<!-- Language menu -->
					<li class="hidden-phone dropdown dd-1 dd-flags" id="lang_nav">
						<a href="#" data-toggle="dropdown"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/en.png" alt="en" /></a>
				    	<ul class="dropdown-menu pull-left">
				      		<li class="active"><a href="?page=blank&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light&amp;lang=en" title="English"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/en.png" alt="English"> English</a></li>
				      		<li><a href="?page=blank&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light&amp;lang=ro" title="Romanian"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/ro.png" alt="Romanian"> Romanian</a></li>
				      		<li><a href="?page=blank&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light&amp;lang=it" title="Italian"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/it.png" alt="Italian"> Italian</a></li>
				      		<li><a href="?page=blank&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light&amp;lang=fr" title="French"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/fr.png" alt="French"> French</a></li>
				      		<li><a href="?page=blank&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light&amp;lang=pl" title="Polish"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/pl.png" alt="Polish"> Polish</a></li>
				    	</ul>
					</li>
					<!-- // Language menu END -->

					<!-- Dropdown -->
					<li class="dropdown dd-1 visible-desktop">
						<a href="" data-toggle="dropdown" class="glyphicons shield"><i></i>Get Help <span class="caret"></span></a>
						<ul class="dropdown-menu pull-right">

							<li class="dropdown submenu">
	                    		<a href="#" class="dropdown-toggle glyphicons bell" data-toggle="dropdown"><i></i>Level 2</a>
								<ul class="dropdown-menu submenu-show submenu-hide pull-left">
			                        <li class="dropdown submenu">
			                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Level 2.1</a>
										<ul class="dropdown-menu submenu-show submenu-hide pull-left">
											<li><a href="#">Level 2.1.1</a></li>
	                                    	<li><a href="#">Level 2.1.2</a></li>
	                                    	<li><a href="#">Level 2.1.3</a></li>
	                                    	<li><a href="#">Level 2.1.4</a></li>
			                            </ul>
			                        </li>
			                        <li class="dropdown submenu">
			                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Level 2.2</a>
			                            <ul class="dropdown-menu submenu-show submenu-hide pull-left">
											<li><a href="#">Level 2.2.1</a></li>
			                                <li><a href="#">Level 2.2.2</a></li>
			                            </ul>
			                        </li>
			                    </ul>
			                </li>

			                <li><a href="" class="glyphicons settings"><i></i>Some option</a></li>
							<li><a href="" class="glyphicons bell"><i></i>Some other option</a></li>
							<li><a href="" class="glyphicons bell"><i></i>Other option</a></li>

						</ul>
					</li>
					<!-- // Dropdown END -->

					<!-- Profile / Logout menu -->
					<li class="account dropdown dd-1">
												<a data-toggle="dropdown" href="" class="glyphicons logout lock"><span class="hidden-phone"><?php echo $fname; ?> <?php echo $lname; ?></span><i></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="/user/my_account" class="glyphicons cogwheel">Settings<i></i></a></li>
							<li><a href="/user/my_account" class="glyphicons camera">My Photos<i></i></a></li>
							<li class="profile">
								<span>
									<span class="heading">Profile <a href="/user/my_account" class="pull-right">edit</a></span>
									<span class="img"></span>
									<span class="details">
										<a href="."><?php echo $fname; ?> <?php echo $lname; ?></a>
										<?php echo $email; ?>
									</span>
									<span class="clearfix"></span>
								</span>
							</li>
							<li>
								<span>
									<a class="btn btn-default btn-mini pull-right" href="/auth/logout">Sign Out</a>
								</span>
							</li>
						</ul>
											</li>
					<!-- // Profile / Logout menu END -->

				</ul>
				<!-- // Top Menu Right END -->


				<div class="clearfix"></div>
			</div>
			<!-- // Wrapper END -->

			<span class="toggle-navbar-hidden"></span>
		</div>
		<!-- Top navbar END -->

				<!-- Sidebar menu & content wrapper -->
		<div id="wrapper">

		<!-- Sidebar Menu -->
		<div id="menu" class="hidden-phone hidden-print">

			<!-- Brand -->
			<a href="/" class="appbrand">LogicPSA <span>Automate Your IT</span></a>

			<!-- Scrollable menu wrapper with Maximum height -->
			<div class="slim-scroll" data-scroll-height="800px">


  			<!-- Sidebar Profile -->
			<span class="profile">
				<p>Welcome <?php echo $fname; ?> <?php echo $lname; ?><a href="my_account"></a></p>
				<a class="img" href="/user/my_account"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/public/files/avatar/<?php echo $avatar; ?>" alt="Avatar" /></a>
				<span>
					<ul>
						<li><a href="/user/my_account" class="glyphicons lock"><i></i>Account</a></li>
						<li><a href="/auth/logout" class="glyphicons eject"><i></i>Logout</a></li>
					</ul>
				</span>
			</span>
			<!-- // Sidebar Profile END -->

			<!-- Regular Size Menu -->

             <? include("nav.php"); ?>
			<!-- // Regular Size Menu END -->

			<ul class="menu-1">
				<li class="hasSubmenu active">
					<a class="glyphicons wifi_alt" href="#menu-recent-stats" data-toggle="collapse"><i></i><span>Recent stats</span></a>
					<ul class="collapse in" id="menu-recent-stats">
						<li><a class="glyphicons envelope" href="#"><i></i><span>5 New Emails</span></a></li>
						<li><a class="glyphicons chat" href="#"><i></i><span>New Message on 19 Jan</span></a></li>
						<li><a class="glyphicons user_add" href="#"><i></i><span>10 Users Subscribed</span></a></li>
						<li><a class="glyphicons cart_in" href="#"><i></i><span>2 Orders worth of &dollar;239</span></a></li>
						<li><a class="glyphicons single circle_plus" href="#"><i></i><span>View all</span></a></li>
					</ul>
				</li>
			</ul>
			<div class="clearfix"></div>
			<div class="separator bottom"></div>

			</div>
			<!-- // Scrollable Menu wrapper with Maximum Height END -->

		</div>
		<!-- // Sidebar Menu END -->
        <br>