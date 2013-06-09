<div class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body ...</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-default">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div>

<div id="content">
    <div class="innerLR">
		    <div class="span8">
	      		<div class="widget">
                		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Data Table</h4>
		</div>
		<!-- // Widget heading END -->
					<div class="widget-body">
						<h3>View Note ID: <?php  echo $data['nid']; ?></h3>
                    <hr>
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
                    <p><a href="/notes/edit/<?php  echo $data['nid']; ?>"><span class="btn btn-default btn-icon glyphicons edit"><i></i>Edit Note</span></a></p>
                    <p><span data-toggle="print" class="btn btn-default btn-icon glyphicons print"><i></i>Print Note</span></p>
                    <p><a href="#modal-simple" data-toggle="modal"><span class="btn btn-default btn-icon glyphicons circle_minus"><i></i>Delete Note</span></a></p>
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