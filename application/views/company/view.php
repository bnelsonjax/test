<div id="content">
    <div class="innerLR">
	<div class="well margin-none">
		<table class="table">
                <!-- Button Menu  -->
                <div class="widget-actions">
						<div class="btn-group">
	  					    <button class="btn btn-small"><i class="icon-cog"></i>Options</button>
    						 <button class="btn btn-small dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
	    					  <ul class="dropdown-menu">
								<li><a href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/Company/edit/<?php  echo $data['id']; ?>">Edit Company</a></li>
								<li><a href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/WorkOrders/addWo/<?php  echo $data['id']; ?>">Add Work Order</a></li>
								<li><a href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/Location/add/<?php  echo $data['id']; ?>">Add Location</a></li>
								<li><a href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/Equipment/add/<?php  echo $data['id']; ?>">Add Equipment</a></li>
								<li><a href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/Contacts/add/<?php  echo $data['id']; ?>">Add Contact</a></li>
						        <li><a href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/Notes/add/<?php  echo $data['id']; ?>">Add Note</a></li>
                                <li><a href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/Files/add/<?php  echo $data['id']; ?>">Add File</a></li>
								<li class="divider"></li>
						        <li><a href="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/Company/add">New Company</a></li>
							 </ul>
						 </div><!-- /btn-group -->
				   </div><br>
                   <!-- Button Menu end -->
        <!-- Company Info Table -->
        <tbody>
				<tr>
					<td style="width: 50%;">
						<p class="lead">Company information</p>
						<h2><?php  echo $data['name']; ?></h2>
						<address class="margin-none">
							<?php  echo $data['address']; ?> <?php  echo $data['address2']; ?><br/>
                            <?php  echo $data['country']; ?><br/>
                            <br/>
							<abbr title="Website">website:</abbr> <a href="http://<?php  echo $data['website']; ?>" target="_blank"><?php  echo $data['website']; ?></a><br />
							<abbr title="Work Phone">phone:</abbr> <?php  echo $data['phone']; ?><br/>
                            <abbr title="Company Type">Company Type:</abbr> <?php  echo $data['typeName']; ?><br/>
							<abbr title="Work Fax">fax:</abbr> <?php  echo $data['fax']; ?>
						</address>
					</td>
					<td class="right">
						<address class="margin-none">
							<strong>Status:</strong>
							<span class="label label-primary"><?php  echo $data['active']; ?></span><br>
                            Primary Contact: <?php  echo htmlentities($data['firstName']) . " " . htmlentities($data['lastName']); ?><br>
							Company added on: <?php  echo $data['dateAcquired']; ?><br>
							<?php  if (!$data['dateUpdated']): ?> Last updated: Never <?php  else : ?> Last updated:
                            <?php  echo $data['dateUpdated']; ?><br>
                            <?php  endif; ?>
							<div class="separator line"></div>
						</address>
					</td>
				</tr>
			</tbody>
           <!-- Company Info Table End -->
		</table>
	</div>
      <br>
    <!-- Tab Bar -->
    <div class="tabsbar">
    	<ul>
    		<li class="glyphicons blog active"><a href="#tabA-1" data-toggle="tab"><i></i> Company Notes</a></li>
    		<li class="glyphicons parents"><a href="#tabA-2" data-toggle="tab"><i></i> Contacts</a></li>
    		<li class="glyphicons notes_2"><a href="#tabA-3" data-toggle="tab"><i></i> <span>Work Orders</span></a></li>
    		<li class="glyphicons building"><a href="#tabA-4" data-toggle="tab"><i></i> <span>Location</span></a></li>
    		<li class="glyphicons notes"><a href="#tabA-5" data-toggle="tab"><i></i> <span>Contracts</span></a></li>
    		<li class="glyphicons cargo"><a href="#tabA-6" data-toggle="tab"><i></i> <span>Equipment</span></a></li>
    		<li class="glyphicons folder_plus"><a href="#tabA-7" data-toggle="tab"><i></i> <span>Files</span></a></li>
    		<li class="glyphicons credit_card"><a href="#tabA-8" data-toggle="tab"><i></i> <span>CC Info</span></a></li>
    	</ul>
    </div>
    <div class="tab-content">
         <!-- Tab 1 Start-->
        <div class="tab-pane active" id="tabA-1">
    		<p><!-- Table -->
			<table class="dynamicTable table table-striped table-bordered table-condensed">
				<!-- Table heading -->
				<thead>
					<tr>
						<th>Note</th>
						<th>Date Posted</th>
						<th>Posted By</th>
						<th>Options</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				<!-- Table body -->
				<tbody>
                          <?php  foreach ($notes as $row): ?>
                          <tr class="even gradeA">
                            <td>
                              <a href=
                              "/notes/view/<?php  echo $row['nid']; ?>"><?php  echo $row['note']; ?></a>
                            </td>
                            <td><?php  echo $row['notePostedTime']; ?></td>
                            <td>
                            <?php  echo htmlentities($row['firstName']) . " " . htmlentities($row['lastName']); ?></td>
                            <td>
                              <a href="/notes/edit_note/<?php  echo $row['nid']; ?>">Edit</a> / <a href="/notes/delete_note/<?php  echo $row['nid']; ?>">Remove</a>
                            </td>
                          </tr><?php  endforeach; ?>
				</tbody>
				<!-- // Table body END -->
			</table>
			<!-- // Table END --></p>
    	</div>
        <!-- Tab 1 End-->
         <!-- Tab 2 Start-->
        <div class="tab-pane" id="tabA-2">
    		<p><!-- Table -->
			<table class="dynamicTable table table-striped table-bordered table-condensed">
				<!-- Table heading -->
				<thead>
					<tr>
						<th>Name</th>
						<th>Title</th>
						<th>Email</th>
						<th>Phone</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				<!-- Table body -->
				<tbody>
						<?php  foreach ($contacts as $row): ?>
								<tr>
										<td><a href="/Contacts/view/<?php  echo $row['id']; ?>">
														<?php  echo $row['firstName'] . " " . $row['lastName']; ?></a></td>
										<td><?php  echo $row['title']; ?></td>
										<td><a href="mailto:<?php  echo $row['email']; ?>">
														<?php  echo $row['email']; ?></a></td>
										<td><?php  echo $row['phone']; ?></td>
								</tr>
						<?php  endforeach; ?>
				</tbody>
				<!-- // Table body END -->
			</table>
			<!-- // Table END --></p>
    	</div>
        <!-- Tab 2 End-->
         <!-- Tab 3 Start-->
        <div class="tab-pane" id="tabA-3">
    		<p><!-- Table -->
			<table class="dynamicTable table table-striped table-bordered table-condensed">
				<!-- Table heading -->
				<thead>
                         <tr>
                            <th>Work Order ID</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Priority</th>
                            <th>Date Created</th>
                          </tr>
				</thead>
				<!-- // Table heading END -->
				<!-- Table body -->
				<tbody>
                          <?php  foreach ($workorder as $row): ?>
                          <tr>
                            <td>
                              <a href="/WorkOrders/viewWo/<?php  echo $row['id']; ?>"><?php  echo $row['id']; ?></a>
                            </td>
                            <td><?php  echo $row['status']; ?></td>
                            <td>
                            <?php  echo $row['description']; ?></td>
                            <td><?php  echo $row['priority']; ?></td>
                            <td><?php  echo $row['entryDate']; ?></td>
                          </tr><?php  endforeach; ?>
				</tbody>
				<!-- // Table body END -->
			</table>
			<!-- // Table END --></p>
    	</div>
        <!-- Tab 3 End-->
   <!-- Tab 4 Start-->
        <div class="tab-pane" id="tabA-4">
    		<p><!-- Table -->
			<table class="dynamicTable table table-striped table-bordered table-condensed">
				<!-- Table heading -->
				<thead>
                          <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Notes</th>
                          </tr>
				</thead>
				<!-- // Table heading END -->
				<!-- Table body -->
				<tbody>
                          <?php  foreach ($locations as $row): ?>
                          <tr>
                            <td>
                              <a href=
                              "/locations/view/<?php  echo $row['id']; ?>">
                              <?php  echo htmlentities($row['name']); ?></a>
                            </td>
                            <td>
                              <div>
                                <?php  echo $row['address']; ?>
                              </div>
                              <div>
                                <?php  echo $row['address2']; ?>
                              </div>
                              <div>
                                <?php  echo $row['city'] . ", " . $row['state'] . " " .$row['zip']; ?>
                              </div>
                            </td>
                            <td>
                            <?php  echo $row['notes']; ?></td>
                          </tr><?php  endforeach; ?>
				</tbody>
				<!-- // Table body END -->
			</table>
			<!-- // Table END --></p>
    	</div>
        <!-- Tab 4 End-->
        <div class="tab-pane" id="tabA-5">
    		<h4>Contracts</h4>
    		<p>Not implented till a future update.</p>
    	</div>
<!-- Tab 6 Start-->
        <div class="tab-pane" id="tabA-6">
    		<p><!-- Table -->
			<table class="dynamicTable table table-striped table-bordered table-condensed">
				<!-- Table heading -->
				<thead>
                          <tr>
                            <th>Location</th>
                            <th>Manufacturer</th>
                            <th>Model</th>
                            <th>Serial</th>
                            <th>Notes</th>
                          </tr>
				</thead>
				<!-- // Table heading END -->
				<!-- Table body -->
				<tbody>
                          <?php  foreach ($equipment as $row): ?>
                          <tr>
                            <td>
                              <a href=
                              "/equipment/view/<?php  echo $row['id']; ?>"><?php  echo $row['name']; ?></a>
                            </td>
                            <td><?php  echo $row['mfrName']; ?></td>
                            <td><?php  echo $row['model']; ?></td>
                            <td><?php  echo $row['serial']; ?></td>
                            <td>
                            <?php  echo $row['notes']; ?></td>
                          </tr><?php  endforeach; ?>
				</tbody>
				<!-- // Table body END -->
			</table>
			<!-- // Table END --></p>
    	</div>
        <!-- Tab 6 End-->
        <!-- Tab 7 Start-->
        <div class="tab-pane" id="tabA-7">
        <p>          Coming soon</p>

    	</div>
        <!-- Tab 7 End-->
<!-- Tab 8 Start-->
        <div class="tab-pane" id="tabA-8">
    		<p><!-- Table -->

             <div class="heading-buttons">
	<h3>Credit Card Info</h3>
	<div class="buttons pull-right">
		<a href="/company/editcc" class="btn btn-inverse btn-icon glyphicons edit"><i></i> Edit</a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>



         <table class="dynamicTable table table-striped table-bordered table-condensed">
				<!-- Table body -->
                 <tbody>
                          <tr>
                            <td>Name on Card:</td>
                            <td><?php  echo $data['cc_name']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Number:</td>
                            <td><?php  echo $data['cc_num']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Expiration:</td>
                            <td><?php  echo $data['cc_expmm']; ?>/<?php  echo $data['cc_expyy']; ?></td>
                          </tr>
                          <tr>
                            <td>Card CCV:</td>
                            <td><?php  echo $data['cc_ccv']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Billing Address:</td>
                            <td><?php  echo $data['cc_address']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Billing City:</td>
                            <td><?php  echo $data['cc_city']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Billing State:</td>
                            <td><?php  echo $data['cc_state']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Billing Zip:</td>
                            <td><?php  echo $data['cc_zip']; ?></td>
                          </tr>
                        </tbody>
				<!-- // Table body END -->
			</table>
			<!-- // Table END --></p>
    	</div>
        <!-- Tab 8 End-->
    </div>
    <!-- Tab Bar End-->
    </div>
</div>