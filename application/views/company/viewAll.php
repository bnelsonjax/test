<div id="content">
    <div class="innerLR">

	<!-- Widget -->
	<div class="widget">

		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">View All Companies</h4>
		</div>
		<!-- // Widget heading END -->

		<div class="widget-body">

			<!-- Table -->
			<table class="dynamicTable table table-striped table-bordered table-condensed">

				<!-- Table heading -->
				<thead>
					<tr>
						<th>Company ID</th>
						<th>Company</th>
						<th>Primary Contact</th>
						<th>Primary Location</th>
						<th>Company Type</th>
						<th>Status</th>
					</tr>
				</thead>
				<!-- // Table heading END -->

				<!-- Table body -->
				<tbody>
						<?php foreach ($result as $row): ?>
								<tr class="gradeA">
										<td><?php echo $row['id'];?></td>
										<td><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/company/view/<?php echo $row['id']; ?>">
														<?php echo $row['companyName']; ?></a></td>
										<td><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/contacts/view/<?php echo $row['conId']; ?>">
														<?php echo $row['firstName'] . " " . $row['lastName']; ?></a></td>
										<td><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Company/location/<?php echo $row['lid']; ?>">
														<?php echo $row['locationName']; ?></a></td>
										<td><?php echo $row['ctype'];?></td>
										<td><?php ($row['active']) ? $active = "Active" : $active = "Suspended";
										echo $active; ?></td>
								</tr>
						<?php endforeach; ?>
				</tbody>
				<!-- // Table body END -->

			</table>
			<!-- // Table END -->

		</div>
	</div>
	<!-- // Widget END -->
    </div>
</div>
 <!-- /#content -->
