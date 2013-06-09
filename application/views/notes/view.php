<div id="content">
    <div class="innerLR">

    <div class="row">
		    <div class="span8">
	      		<div class="widget">
					<div class="widget-content">
						<h3>View Note ID: <?php  echo $data['nid']; ?></h3>
<br>
						<p>Note Detail: <?php  echo $data['note']; ?></p>
                        <p>Posted By: <?php  echo $data['firstName']; ?> <?php  echo $data['lastName']; ?></p>
                        <p>On: <?php  echo $data['notePostedTime']; ?></p>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->
		    </div> <!-- /span12 -->
			<div class="span4">
				<div class="widget">
					<div class="widget-content">
                    <div id="invoice_total">Note Options</div>
						<ul id="invoice_actions">
							<li class="edit"><a href="javascript:;">Edit Note</a></li>
							<li class="print"><a target="_blank" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Notes/printNote/<?php echo $data['nid']; ?>">Print Note</a></li>
							<li class="delete"><a id="simpleConfirm" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Notes/delete/<?php echo $data['nid']; ?>">Delete Note</a></li>
                            <script> $("#simpleConfirm").confirm(); </script>
                        </ul>
					</div> <!-- /.widget-content -->
				</div> <!-- /.widget -->
			</div> <!-- /.span4 -->
    </div><!-- /.row -->
  </div>
</div>