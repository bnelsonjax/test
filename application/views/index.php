<link href="http://login.logicpsa.com/public/css/pages/reports.css" rel="stylesheet">
<div class="container">
		<div class="row">
            <!-- /START Big Stats Widget-->
          			<div class="span12">
	      		<div id="big-stats-container" class="widget">
	      			<div class="widget-content">
	      				<div id="big_stats" class="cf">
							<div class="stat">
								<h4>Projects Due Today</h4>
								<span class="value">2</span>
							</div> <!-- .stat -->
							<div class="stat">
								<h4>Completed Sales Today</h4>
								<span class="value">23</span>
							</div> <!-- .stat -->
							<div class="stat">
								<h4>Work Orders Requiring Attention</h4>
								<span class="value">1</span>
							</div> <!-- .stat -->
							<div class="stat">
								<h4>Closed Work Orders This Month</h4>
								<span class="value">13</span>
							</div> <!-- .stat -->
						</div>
		      		</div> <!-- /widget-content -->
	      		</div> <!-- /widget -->
      		</div> <!-- /span12 -->
            <!-- /END Big Stats Widget-->
        <div class="span6">
				<div class="widget widget-table">
					<div class="widget-header">
						<h3>
                            <i class="icon-th-list"></i>
							Open Work Orders
						</h3>
					</div> <!-- /.widget-header -->
					<div class="widget-content">
						<table class="table table-bordered table-striped table-highlight" id="invoice-details">
							<thead>
								<tr>
									<th>Work Order ID</th>
									<th>Status</th>
									<th>Description</th>
								</tr>
							</thead>
								<?php
 foreach ($result as $row):

 ?>
								<tr class="even gradeC">
									<td><a href="/workorders/viewWo/<?php  echo $row['id']; ?>">
										<?php  echo $row['id']; ?></a></td>
									<td><?php  echo $row['status']; ?></td>
									<td><?php  echo $row['description']; ?></td>
								</tr>
								<?php endforeach; ?>
							</table>
					</div> <!-- /.widget-content -->
				</div> <!-- /.widget -->
			</div> <!-- /.span6 -->
			<div class="span6">
				<div class="widget widget-table">
					<div class="widget-header">
						<h3>
                            <i class="icon-th-list"></i>
							Pending Billing
						</h3>
					</div> <!-- /.widget-header -->
					<div class="widget-content">
						<table class="table table-bordered table-striped table-highlight">
							<thead>
								<tr>
									<th>ID</th>
									<th>Description</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr class="even gradeC">
									<td></td>
									<td></td>
									<td></td>
								</tr>
								</tbody>
							</table>
					</div> <!-- /.widget-content -->
				</div> <!-- /.widget -->
			</div> <!-- /.span6 -->
		</div> <!-- /.row -->
</div> <!-- /account-container -->
<hr style="width: 0%; height: 400px">