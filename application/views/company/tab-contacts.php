	<div class="navbar main hidden-print">
<!-- Top Menu Right -->
				<ul class="topnav pull-right">
 					<!-- TAB Menu Options -->
					<li class="account dropdown dd-1">
												<a data-toggle="dropdown" href="l" class="glyphicons cogwheel"><span class="hidden-phone">Options</span><i></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="/contacts/add/<?php  echo $data['id']; ?>" class="glyphicons parents">New Contact<i></i></a></li>
						</ul>
					</li>
					<!-- // Tab Menu Options -->
				</ul>
			<span class="toggle-navbar-hidden"></span>
    </div><!-- // Top Menu Right END -->
<!-- Top navbar END -->
	<div class="widget" style="margin-top: -1px;">

		<div class="widget-body">



    		<!-- Table -->
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
										<td><a href="/contacts/view/<?php  echo $row['id']; ?>"><?php  echo $row['firstName'] . " " . $row['lastName']; ?></a></td>
										<td><?php  echo $row['title']; ?></td>
										<td><a href="mailto:<?php  echo $row['email']; ?>"><?php  echo $row['email']; ?></a></td>
										<td><?php  echo $row['phone']; ?></td>
								</tr>
						<?php  endforeach; ?>
				</tbody>
			</table><!-- // Table END -->

            </div>  <!-- // Widget Body END -->
            </div>  <!-- // Widget END -->

