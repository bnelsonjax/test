 <!-- Widget -->
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