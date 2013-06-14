    <div id="content">
        <div class="innerLR">
            <!-- Breadcrumb -->
            <div class="widget breadcrum">
                <!-- Widget heading -->
                <div class="widget-head">
                    <h3 class="heading"><a href="/">Home</a> <em class="icon-chevron-right"></em> <a href="/company/view/<?php  echo $data['cid']; ?>">View Company</a> <em class="icon-chevron-right"></em>
                    View Equipment</h3>
                </div><!-- // Widget heading END -->
            </div><!-- // Widget END -->
            <!-- END Breadcrumb -->

            <!-- Widget -->
            <div class="widget">
                <div class="widget-body">
                    <!-- Widget heading -->

                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading">Equipment</h4>
                        </div><!-- // Widget heading END -->
                        <!-- Widget-content -->
                        <div class="widget-body">



                                                     <div class="control-group">
            				   <label class="control-label" for="location">Location</label>
            					  <div class="controls">
            						   <select id="select01" name="location">
										<?php foreach ($data['locations'] as $row): ?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
										<?php endforeach; ?>
            						   </select>
            					  </div>
            				</div>


<span class="pull-right"><a href="/equipment/edit/<?php  echo $data['id']; ?>">Edit</a></span><br>
<span class="pull-right"><a href="#modal-simple" data-toggle="modal">Delete</a></span>

						<table class="table table-bordered table-striped table-highlight">
					        <tbody>
					          <tr>
					            <td>Office Location:</td>
					            <td>	 <?php foreach ($data['locations'] as $row): ?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
										<?php endforeach; ?>
                                </td>
					          </tr>
					          <tr>
					            <td>Manufacture Name:</td>
					            <td><?php  echo $data['mfrName']; ?></td>
					          </tr>
					          <tr>
					            <td>Model:</td>
					            <td><?php  echo $data['model']; ?></td>

					          </tr>
					          <tr>
					            <td>Serial:</td>
					            <td><?php  echo $data['serial']; ?></td>
					          </tr>
					          <tr>
					            <td>Description:</td>
					            <td><?php  echo $data['description']; ?></td>
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
		<a href="/equipment/delete/<?php  echo $data['id']; ?>" class="btn btn-primary" data-toggle="modal">Save</a>
		<a href="#" data-dismiss="modal" class="btn btn-danger">Cancel</a>
	</div>
	<!-- // Modal footer END -->

</div>
<!-- // Modal END -->