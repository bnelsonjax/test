	<div class="navbar main hidden-print">
<!-- Top Menu Right -->
				<ul class="topnav pull-right">
 					<!-- TAB Menu Options -->
					<li class="account dropdown dd-1">
												<a data-toggle="dropdown" href="l" class="glyphicons cogwheel"><span class="hidden-phone">Options</span><i></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="/equipment/new" class="glyphicons notes">New Equipment<i></i></a></li>
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
                            <th>Location</th>
                            <th>Manufacturer</th>
                            <th>Model</th>
                            <th>Serial</th>
                            <th>Notes</th>
                          </tr>
				</thead>
				<!-- // Table heading END -->
				<tbody>
                          <?php  foreach ($equipment as $row): ?>
                          <tr>
                            <td>
                              <a href="/equipment/view/<?php  echo $row['id']; ?>"><?php  echo $row['name']; ?></a>
                            </td>
                            <td><?php  echo $row['mfrName']; ?></td>
                            <td><?php  echo $row['model']; ?></td>
                            <td><?php  echo $row['serial']; ?></td>
                            <td>
                            <?php  echo $row['notes']; ?></td>
                          </tr><?php  endforeach; ?>
				</tbody>
			</table><!-- // Table END -->
    	</div> <!-- // Widget Body END -->
        </div>  <!-- // Widget  END -->