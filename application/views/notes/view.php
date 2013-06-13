<div id="content">
    <div class="innerLR">

	<!-- BreadCrumb Widget -->
    <div class="widget">
		<!-- BreadCrumb -->
		<div class="widget-head">
			<h3 class="heading"><a href="/">Home</a> <i class="icon-chevron-right"></i> <a href="/company/view/<?php echo $data['cid']; ?>">View Company</a> <i class="icon-chevron-right"></i> View Note</h3>
		</div>
		<!-- // BreadCrumb END -->
	</div>
	<!-- // BreadCrumb Widget END -->



		    <div class="span8">
	      		<div class="widget">
                		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">View Note ID: <?php  echo $data['nid']; ?></h4>
		</div>
		<!-- // Widget heading END -->
					<div class="widget-body">
						<p><strong>Note Detail:</strong> <?php  echo $data['note']; ?></p>
                        <p><strong>Posted By:</strong> <?php  echo $data['firstName']; ?> <?php  echo $data['lastName']; ?></p>
                        <p><strong>On:</strong> <?php  echo $data['notePostedTime']; ?></p>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->
		    </div> <!-- /span8 -->
			<div class="span4">
				<div class="widget">
                		<!-- Widget heading -->
		<div class="widget-head">
          <h4 class="heading">Note Options</h4>
		</div>
		<!-- // Widget heading END -->
					<div class="widget-body">
                    <p><a href="/notes/edit/<?php  echo $data['nid']; ?>">Edit Note</a></p>
                    <p><a href="/notes/printNote/<?php  echo $data['nid']; ?>">Print Note</a></p>
                    <p><a href="#modal-simple" data-toggle="modal">Delete Note</a></p>
                    </div> <!-- /.widget-content -->
				</div> <!-- /.widget -->
			</div> <!-- /.span4 -->
  </div>
</div>


<!-- Modal -->
<div class="modal hide fade" id="modal-simple">

	<!-- Modal heading -->
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Confirm</h3>
	</div>
	<!-- // Modal heading END -->

	<!-- Modal body -->
	<div class="modal-body">
		<p>Are you sure you want to submit the changes?</p>
	</div>
	<!-- // Modal body END -->

	<!-- Modal footer -->
	<div class="modal-footer">
		<a href="/notes/delete/<?php  echo $data['nid']; ?>" class="btn btn-primary" data-toggle="modal">Save</a>
		<a href="#" data-dismiss="modal" class="btn btn-danger">Cancel</a>
	</div>
	<!-- // Modal footer END -->

</div>
<!-- // Modal END -->