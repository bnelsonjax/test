    <div id="content">
        <div class="innerLR">
            <!-- Breadcrumb -->
            <div class="widget breadcrum">
                <!-- Widget heading -->
                <div class="widget-head">
                    <h3 class="heading"><a href="/">Home</a> <em class="icon-chevron-right"></em> <a href="/company/view/<?php  echo $data['cid']; ?>">View Company</a> <em class="icon-chevron-right"></em>
                    View Location</h3>
                </div><!-- // Widget heading END -->
            </div><!-- // Widget END -->
            <!-- END Breadcrumb -->

            <!-- Widget -->
            <div class="widget">
                <div class="widget-body">
                    <!-- Widget heading -->

                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading">Note Options</h4>
                        </div><!-- // Widget heading END -->
                        <!-- Widget-content -->
                        <div class="widget-body">

<span class="pull-right"><a href="/locations/edit/<?php  echo $data['id']; ?>">Edit</a></span><br>
<span class="pull-right"><a href="#modal-simple" data-toggle="modal">Delete</a></span>



						<table class="table table-bordered table-striped table-highlight">

					        <tbody>
					          <tr>
					            <td>Location ID:</td>
					            <td><?php  echo $data['id']; ?></td>
					          </tr>
					          <tr>
					            <td>Location Name:</td>
					            <td><?php  echo $data['locationName']; ?></td>
					          </tr>
					          <tr>
					            <td>Address:</td>
					            <td><?php  echo $data['address']; ?></td>

					          </tr>
					          <tr>
					            <td>Address 2:</td>
					            <td><?php  echo $data['address2']; ?></td>
					          </tr>
					          <tr>
					            <td>City:</td>
					            <td><?php  echo $data['city']; ?></td>
					          </tr>
                              	<tr>
					            <td>State:</td>
					            <td><?php  echo $data['state']; ?></td>
					          </tr>
                              	<tr>
					            <td>Zip:</td>
					            <td><?php  echo $data['zip']; ?></td>
					          </tr>
                              	<tr>
					            <td>Notes:</td>
					            <td><?php  echo $data['notes']; ?></td>
					          </tr>
					        </tbody>
					      </table>







                        </div><!-- /.widget-content -->
                    </div>
                </div><!-- // Widget Body -->
            </div><!-- // Widget END -->

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
		<a href="/locations/delete/<?php  echo $data['id']; ?>" class="btn btn-primary" data-toggle="modal">Save</a>
		<a href="#" data-dismiss="modal" class="btn btn-danger">Cancel</a>
	</div>
	<!-- // Modal footer END -->

</div>
<!-- // Modal END -->