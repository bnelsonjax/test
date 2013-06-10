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