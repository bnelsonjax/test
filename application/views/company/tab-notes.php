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
                    <th>Note</th>

                    <th>Date Posted</th>

                    <th>Posted By</th>

                    <th>Options</th>
                </tr>
            </thead><!-- // Table heading END -->
            <!-- Table body -->

            <tbody>
                <?php  foreach ($notes as $row): ?>

                <tr class="even gradeA">
                    <td>
                        <a href="/notes/view/<?php  echo $row['nid']; ?>"><?php  echo $row['note']; ?></a>
                    </td>

                    <td><?php  echo $row['notePostedTime']; ?></td>

                    <td><?php  echo $row['firstName'] . " " . $row['lastName']; ?></td>

                    <td>
                       <a href="/notes/edit_note/<?php  echo $row['nid']; ?>">Edit</a> / <a href="/notes/delete_note/<?php  echo $row['nid']; ?>">Remove</a>
                    </td>
                </tr><?php  endforeach; ?>
            </tbody><!-- // Table body END -->
        </table><!-- // Table END -->
        </div>
    </div>