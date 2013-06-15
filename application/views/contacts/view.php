<?php

if ( $data['active'] === '1' )
{
$active = 'Active';
$class = 'label label-primary';
}
else
{
$active = 'Suspended';
$class = 'label label-danger';
}

?>
<div id="content">
    <div class="innerLR">

    	<!-- BreadCrumb Widget -->
        <div class="widget">
    		<div class="widget-head">
    			<h3 class="heading"><a href="/">Home</a> <i class="icon-chevron-right"></i> <a href="/company/view/<?php  echo $data['cid']; ?>">View Company</a> <i class="icon-chevron-right"></i> View Note</h3>
    		</div>
    	</div>
    	<!-- // BreadCrumb Widget END -->

    <div class="well margin-none">
		<table class="table">
        <!-- Company Info Table -->
            <tbody>
				<tr>
					<td style="width: 50%;">
						<h2><?php echo $data['firstName'] . " " . $data['lastName']; ?></h2>
						<address class="margin-none">
                            <abbr title="Company Name">Company Name:&nbsp;</abbr><?php echo $data['companyName']; ?><br>
                            <abbr title="Title">Title:&nbsp;</abbr>   <?php echo $data['title']; ?><br><br/>
                            <abbr title="Email">Email:&nbsp;</abbr>   <?php echo $data['email']; ?>
                            <br/>
							<abbr title="Work Phone">Phone:</abbr>   <?php  echo $data['phone']; ?><br/>
							<abbr title="Work Fax">Fax:</abbr>   <?php  echo $data['fax']; ?>
						</address>
					</td>
					<td class="right">
						<address class="margin-none">
							<strong>Status:</strong>
							<span class="<?php echo $class; ?>"><?php  echo $active; ?></span><br>
							<?php  if (!$data['dateUpdated']): ?> Last updated: Never <?php  else : ?> Last updated:
                            <?php  echo $data['dateUpdated']; ?><br>
                            <?php  endif; ?>

                              <div style="position:absolute;bottom:0px;left:0%;right:0%" class="btn-group pull-right">
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                  Options
                                  <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a href="/contacts/edit/<?php  echo $data['id']; ?>">Edit Contact</a></li>
                                  <li><a href="#modal-simple" data-toggle="modal">Delete Contact</a></li>
                                </ul>
                            </div>
						</address>
					</td>
				</tr>
			</tbody>
		</table>   <!-- Company Info Table End -->
	</div>
              <br>
          <!-- Tab Bar -->
          <div class="tabsbar">
          	<ul>
          		<li class="glyphicons notes_2 active"><a href="#tabA-1" data-toggle="tab"><i></i> Work Orders</a></li>
          		<li class="glyphicons life_preserver"><a href="#tabA-2" data-toggle="tab"><i></i> Tickets</a></li>
          	</ul>
          </div>
          <div class="tab-content">
               <!-- Tab 1 Start-->
              <div class="tab-pane active" id="tabA-1">
                  <? include("tab-wo.php"); ?>
          	</div>
      <!-- Tab 1 End-->
               <!-- Tab 2 Start-->
              <div class="tab-pane" id="tabA-2">
              Support Tickets by this contact would show up here (future feature)
                <? //include("tab-contacts.php"); ?>
          	</div><!-- Tab 2 End-->
          </div>     <!-- Tab Content End-->

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
		<a href="/notes/delete/<?php  echo $data['id']; ?>" class="btn btn-primary" data-toggle="modal">Save</a>
		<a href="#" data-dismiss="modal" class="btn btn-danger">Cancel</a>
	</div>
	<!-- // Modal footer END -->

</div>
<!-- // Modal END -->
