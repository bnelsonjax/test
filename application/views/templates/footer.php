<?php
$controller = $this->router->fetch_class();
$function = $this->router->fetch_method();
$page = $controller .'/' . $function;

?>
				</div>
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->

		<div id="footer" class="hidden-print">

			<!--  Copyright Line -->
			<div class="copy">&copy; 2012 - 2013 - <a href="http://www.logicpsa.com">LogicPSA</a> - All Rights Reserved. <a href="http://themeforest.net/item/ergo-admin-ui-template/4602755?ref=mosaicpro" target="_blank">Purchase Ergo on ThemeForest</a> - Current version: v1.2 / <a target="_blank" href="http://demo.mosaicpro.biz/ergoadmin/CHANGELOG">changelog</a></div>
			<!--  End Copyright Line -->

		</div>
		<!-- // Footer END -->

	</div>
	<!-- // Main Container Fluid END -->

    <!-- JQuery -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/jquery.min.js"></script>

	<!-- JQueryUI -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!-- LESS.js Library -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/less.min.js"></script>

	<!-- Modernizr -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/modernizr.js"></script>

	<!-- Bootstrap -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/js/bootstrap.min.js"></script>
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js"></script>
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootbox.js"></script>
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js"></script>

   	<!-- Modals Page Demo Script -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/demo/modals.js"></script>

	<!-- Cookie Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/jquery.cookie.js"></script>

    <?php if ($page == 'form/elements'): ?>
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <?php endif; ?>

    <?php if ($page == 'test/index'): ?>
	<!-- SlimScroll Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>
    <?php endif; ?>

    <?php if ($page == 'test/index'): ?>
	<!-- Common Demo Script -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/demo/common.js?1370657326"></script>
    <?php endif; ?>

    <?php if ($page == 'test/index'): ?>
	<!-- Holder Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/other/holder/holder.js"></script>
    <?php endif; ?>

    <?php if ($page == 'test/index'): ?>
	<!-- Uniform Forms Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>
    <?php endif; ?>

    <?php if ($page == 'test/index'): ?>
	<!-- Gritter Notifications Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js"></script>
    <?php endif; ?>

    <?php if ($page == 'test/index'): ?>
	<!-- Notyfy Notifications Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js"></script>
    <?php endif; ?>

    <?php if ($page == 'test/index'): ?>
	<!-- DateTimePicker Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <?php endif; ?>

     <?php if ($page == 'home/index'): ?>
	<!-- Twitter Feed -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/demo/twitter.js"></script>
    <?php endif; ?>

     <?php if ($page == 'home/index'): ?>
	<!-- Sparkline Charts Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js"></script>
    <?php endif; ?>

     <?php if ($page == 'home/index'): ?>
	<!-- Ba-Resize Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/other/jquery.ba-resize.js"></script>
    <?php endif; ?>

     <?php if ($page == 'home/index'): ?>
	<!-- DataTables Tables Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/tables/DataTables/media/js/jquery.dataTables.min.js"></script>
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/tables/DataTables/media/js/DT_bootstrap.js"></script>
    <?php endif; ?>

    <?php if ($page == 'home/index'): ?>
	<!-- Tables Demo Script -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/demo/tables.js"></script>
    <?php endif; ?>

    <?php if ($page == 'none?'): ?>
	<!-- Select2 Plugin -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/plugins/forms/select2/select2.js"></script>
    <?php endif; ?>

     <?php if ($page == 'none?'): ?>
   	<!-- Form Elements Page Demo Script -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/demo/form_elements.js"></script>
    <?php endif; ?>

     <?php if ($page == 'none?'): ?>
   	<!-- Dashboard Demo Script -->
	<script src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/scripts/demo/index.js?1370865963"></script>
    <?php endif; ?>


</body>
</html>