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
<body>


<div class="span12">

<!-- Content -->
<div id="content">
	<!-- Heading -->
<div class="heading-buttons">
	<h3>View Note</h3>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->
<div class="innerLR">
	<!-- Widget -->
	<div class="widget" style="margin-top: -1px;">
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading glyphicons notes"><i></i></h4>
		</div>
		<!-- // Widget heading END -->
		<div class="widget-body">


     <div class="row">
        <div class="span8">
            <div class="widget">
                <div class="widget-content">
                    <h3>Note ID: <?php  echo $data['nid']; ?></h3>

                    <p>Note Detail: <?php  echo $data['note']; ?></p>

                    <p>Posted By: <?php  echo $data['firstName']; ?> <?php  echo $data['lastName']; ?></p>

                    <p>On: <?php  echo $data['notePostedTime']; ?></p>
                </div><!-- /widget-content -->
            </div><!-- /widget -->
        </div><!-- /span12 -->
    </div><!-- /.row -->


		</div>
	</div>
</div>
</div>


</div>















</body>
</html>