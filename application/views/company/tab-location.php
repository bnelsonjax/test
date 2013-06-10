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