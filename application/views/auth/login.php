<?php
$password = array(
              'name'        => 'password',
              'id'          => 'password',
              'type'        => 'password',
              'class'       =>  'input-block-level'
            );

$identity = array(
              'name'        => 'identity',
              'id'          => 'identity',
              'type'        => 'identity',
              'class'       =>  'input-block-level'
            );

?>


<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>LogicPSA Login</title>

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

	<!-- Main Theme Stylesheet :: CSS -->
	<link href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/css/style-light.css?1370841031" rel="stylesheet" />


	<!-- Google Analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36057737-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

    <script>
    var notyfy = notyfy(
{
	text: 'notyfy - Yet another jQuery notification plugin',
	type: 'error' // alert|error|success|information|warning|primary|confirm
});</script>

	<!-- LESS.js Library -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="login">

	<!-- Wrapper -->
<div id="login">

	<div class="container">

		<div class="wrapper">

			<h1 class="glyphicons lock">LogicPSA Admin Login</h1>

			<!-- Box -->
			<div class="widget">

				<div class="widget-head">
					<h3 class="heading">Login area</h3>
					<div class="pull-right">
						Don't have an account?
						<a href="admin/signup" class="btn btn-inverse btn-mini">Sign up</a>
					</div>
				</div>
				<div class="widget-body">

					<!-- Form -->
<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>
					<!-- // Form END -->

				</div>
				<div class="widget-footer">
                    <div id="infoMessage"><?php echo $message;?></div>
 					<p class="glyphicons restart"><i></i>Please enter your username and password ...</p>
				</div>
			</div>
			<!-- // Box END -->

			<div class="innerAll center">
   			<!-- Alert -->
			<div class="error">
                <strong><span style="color:red"><?php echo validation_errors(); ?></span></strong>
			</div>
			<!-- // Alert END -->
                <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
                <p>Having troubles? <a href="faq.html?lang=en&amp;layout_type=fixed&amp;menu_position=menu-left&amp;style=style-light">Get Help</a></p>
            </div>

		</div>

	</div>

</div>
<!-- // Wrapper END -->


	<!-- JQuery -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/jquery.min.js"></script>


	<!-- Modernizr -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/modernizr.js"></script>

	<!-- Bootstrap -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/js/bootstrap.min.js"></script>

	<!-- SlimScroll Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>

	<!-- Common Demo Script -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/demo/common.js?1370841031"></script>

	<!-- Holder Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/other/holder/holder.js"></script>

	<!-- Uniform Forms Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>

<!-- Notifications Page Demo Script -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/demo/notifications.js"></script>


</body>
</html>
