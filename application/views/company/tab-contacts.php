	<div class="widget" style="margin-top: -1px;">

		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"></h4>
		</div>
		<!-- // Widget heading END -->

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
										<td><a href="/Contacts/view/<?php  echo $row['id']; ?>"><?php  echo $row['firstName'] . " " . $row['lastName']; ?></a></td>
										<td><?php  echo $row['title']; ?></td>
										<td><a href="mailto:<?php  echo $row['email']; ?>"><?php  echo $row['email']; ?></a></td>
										<td><?php  echo $row['phone']; ?></td>
								</tr>
						<?php  endforeach; ?>
				</tbody>
			</table><!-- // Table END -->
            </div>  <!-- // Widget Body END -->
            </div>  <!-- // Widget END -->