<!-- Content -->
<div id="content">
	<!-- Heading -->
<div class="separator bottom"></div>
<!-- // Heading END -->
<div class="innerLR">
	<!-- Widget -->
	<div class="widget" style="margin-top: -1px;">
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"><i></i></h4>
		</div>
		<!-- // Widget heading END -->
		<div class="widget-body">



                <div class="row-fluid">
            <!-- /START Big Stats Widget-->
	      		<div id="big-stats-container" class="widget">
	      			<div class="widget-body">
	      				<div id="big_stats">
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
              <!-- /END Big Stats Widget-->
            </div>

<!-- Start of Right Table Span 6-->
    <div class="row-fluid">
        <div class="span6"> <!-- Span 6 -->
            <div class="widget">
                <!-- Widget heading -->

                <div class="widget-head">
                    <h4 class="heading">Open Work Orders</h4>
                </div><!-- // Widget heading END -->

                <div class="widget-body">
                    <table class="dynamicTable table table-striped table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>Work Order ID</th>
                                <th>Status</th>
                                <th>Description</th>
                            </tr>
                        </thead><?php foreach ($result as $row): ?>
                        <tbody>
                        <tr class="even gradeC">
                            <td><a href="/workorders/viewWo/<?php  echo $row['id']; ?>"><?php  echo $row['id']; ?></a></td>
                            <td><?php  echo $row['status']; ?></td>
                            <td><?php  echo $row['description']; ?></td>
                        </tr>
						</tbody><?php endforeach; ?>
                    </table>
                </div><!-- /.widget-body -->
            </div>
        </div> <!-- End Span 6 -->
<!-- End of Left Table Span 6-->
<!-- Start of Right Table Span 6-->
        <div class="span6">
            <div class="widget">
                <!-- Widget heading -->

                <div class="widget-head">
                    <h4 class="heading">Pending Billing</h4>
                </div><!-- // Widget heading END -->

                <div class="widget-body">
                      <table class="dynamicTable table table-striped table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>Work Order ID</th>
                                <th>Status</th>
                                <th>Description</th>
                            </tr>
                        </thead><?php foreach ($result as $row): ?>
                        <tbody>
                        <tr class="even gradeC">
                            <td><a href="/workorders/viewWo/<?php  echo $row['id']; ?>"><?php  echo $row['id']; ?></a></td>
                            <td><?php  echo $row['status']; ?></td>
                            <td><?php  echo $row['description']; ?></td>
                        </tr>
						</tbody><?php endforeach; ?>
                    </table>
                </div><!-- /.widget-body -->
            </div>
        </div>
    </div> <!-- End Row-Fluid -->
<!-- End of Work Order Widget-->


	<div class="widget" style="margin-top: -1px;">
		<!-- Widget heading -->
		<!-- // Widget heading END -->
		<div class="widget-body">


								<!-- Twitter Section -->
									<h5 class="glyphicons single twitter"><i></i> Latest from Twitter</h5>
									<section class="twitter-feed">
										<div class="row-fluid">
											<div class="span12">
												<div class="tweet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc lorem, rutrum non porta. <span class="label label-inverse">01/11/2012</span></div>
											</div>
											<div class="clearfix"></div>
										</div>
									</section>
									<!-- Twitter Section END -->


		</div>
	</div>













	<!-- Website Traffic Chart -->
	<div class="widget" data-toggle="collapse-widget">
		<div class="widget-head">
			<h4 class="heading glyphicons cardio"><i></i>Annual Work Orders Submitted</h4>
		</div>
		<div class="widget-body">
			<div id="chart_lines_fill_nopoints" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Website Traffic Chart END -->
    </div>
	</div>
</div>
</div>