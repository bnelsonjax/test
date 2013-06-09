<div id="content">
    <div class="innerLR">
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
                          <?php foreach ($result as $row): ?>
                          <tr class="even gradeA">
                            <td>
                              <a href=
                              "<?php echo $_SERVER['HTTP_HOST']; ?>/Notes/view/<?php echo $row['nid'];?>"><?php echo $row['note']; ?></a>
                            </td>
                            <td><?php echo $row['notePostedTime']; ?></td>
                            <td>
                            <?php echo htmlentities($row['firstName']) . " " . htmlentities($row['lastName']); ?></td>
                            <td>
                              <a href="<?php echo $_SERVER['HTTP_HOST']; ?>/Notes/edit_note/<?php echo $row['nid']; ?>">Edit</a> / <a href="#">Remove</a>
                            </td>
                          </tr><?php endforeach; ?>
				</tbody>
				<!-- // Table body END -->

			</table>
			<!-- // Table END --></p>

</div>
</div>