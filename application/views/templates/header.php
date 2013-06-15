<?
$user = $this->ion_auth->user()->row();
		$fname =  $user->first_name;
   		$lname =  $user->last_name;
        $email =  $user->email;
        $uid =     $user->id;
        $avatar = $user->avatar;


$controller = $this->router->fetch_class();
$function = $this->router->fetch_method();
$page = $controller .'/' . $function;

?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- ><![endif]-->
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
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" />
	<!-- Glyphicons Font Icons -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/css/glyphicons.css" rel="stylesheet" />
	<!-- Main Theme Stylesheet :: CSS -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/css/style-light.css?1370657326" rel="stylesheet" />
	<!-- JQueryUI -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />

    <?php if ($page == 'company/add' || $page == 'finances' || $page == 'charts'): ?>
	<!-- Uniform Pretty Checkboxes -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />
    <?php endif; ?>

    <?php if ($page == 'home/index' || $page == 'company/add' || $page == 'charts'): ?>
    <!-- Select2 Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/forms/select2/select2.css" rel="stylesheet" />
    <?php endif; ?>

    <?php if ($page == 'workorder/new'): ?>
	<!-- DateTimePicker Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />
    <?php endif; ?>

    <?php if ($page == 'home/index'): ?>
	<!-- Notyfy Notifications Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css" rel="stylesheet" />
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/notifications/notyfy/themes/default.css" rel="stylesheet" />
    <?php endif; ?>

    <?php if ($page == 'home/index'): ?>
	<!-- Gritter Notifications Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css" rel="stylesheet" />
    <?php endif; ?>

    <?php if ($page == 'home/index'): ?>
	<!-- DataTables Plugin -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/tables/DataTables/media/css/DT_bootstrap.css" rel="stylesheet" />
    <?php endif; ?>

</head>

<?php echo $page; ?>
<? include("nav.php"); ?>
