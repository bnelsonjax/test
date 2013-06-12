	<div class="navbar main hidden-print">
<!-- Top Menu Right -->
				<ul class="topnav pull-right">
 					<!-- TAB Menu Options -->
					<li class="account dropdown dd-1">
												<a data-toggle="dropdown" href="l" class="glyphicons cogwheel"><span class="hidden-phone">Options</span><i></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="l" class="glyphicons notes">New Note<i></i></a></li>
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
                              <a href="/locations/view/<?php  echo $row['id']; ?>"><?php  echo $row['name']; ?></a>
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
			</table><!-- // Table END -->
                        </div><!-- // Widget Body END -->
                        </div><!-- // Widget END -->