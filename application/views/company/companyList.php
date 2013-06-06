<div class="container">
		<div id="content">
				<div id="page-title" class="clearfix">
						<ul class="breadcrumb">
								<li>
										<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Home">Home</a> <span class="divider">/</span>
								</li>
								<li class="active">Company List</li>
						</ul>

				</div> <!-- /.page-title -->
				<div class="row">

						<div class="span12">

								<div class="widget widget-table">

										<div class="widget-header">						
												<h3>
														<i class="icon-th-list"></i>
														Company List						
												</h3>
										</div> <!-- /widget-header -->

										<div class="widget-content">
												<table class="table data-table table-striped table-bordered table-highlight" id="example">
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
														<tbody>
																<?php foreach ($result as $row): ?>
																		<tr class="odd gradeX">
																				<td><?php echo $row['id'];?></td>
																				<td><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Company/view/<?php echo $row['id']; ?>">
																								<?php echo $row['companyName']; ?></a></td>
																				<td><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Contacts/view/<?php echo $row['contacts.id']; ?>">
																								<?php echo $row['firstName'] . " " . $row['lastName']; ?></a></td>
																				<td><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Company/location/<?php echo $row['lid']; ?>">
																								<?php echo $row['locationName']; ?></a></td>
																				<td><?php echo $row['type'];?></td>
																				<td><?php ($row['active']) ? $active = "Active" : $active = "Suspended";																			
																				echo $active; ?></td>									
																		</tr>
																<?php endforeach; ?>
														</tbody>
												</table>


										</div> <!-- /widget-content -->

								</div> <!-- /widget -->	

						</div> <!-- /span12 -->



				</div> <!-- /row -->


		</div> <!-- /.container -->

</div> <!-- /#content -->
