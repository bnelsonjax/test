	<div class="navbar main hidden-print">
<!-- Top Menu Right -->
				<ul class="topnav pull-right">
 					<!-- TAB Menu Options -->
					<li class="account dropdown dd-1">
												<a data-toggle="dropdown" href="l" class="glyphicons cogwheel"><span class="hidden-phone">Options</span><i></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="/workorder/new" class="glyphicons notes">New Work Order<i></i></a></li>
						</ul>
					</li>
					<!-- // Tab Menu Options -->
				</ul>
			<span class="toggle-navbar-hidden"></span>
    </div><!-- // Top Menu Right END -->
<!-- Top navbar END -->
 <!-- Widget -->
	<div class="widget" style="margin-top: -1px;">

		<div class="widget-body">




        <!-- Table -->
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
			</table><!-- // Table END -->
            </div>  <!-- // Widget Body END -->
            </div>  <!-- // Widget  END -->