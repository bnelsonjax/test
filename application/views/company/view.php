<div id="content">
    <div class="innerLR">


	<div class="well margin-none">
		<table class="table table-invoice">
			<tbody>
				<tr>
					<td style="width: 50%;">
						<p class="lead">Company information</p>
						<h2><?php echo $data['name']; ?></h2>
						<address class="margin-none">
							<strong><?php echo $data['address']; ?></strong><br/>
							<?php echo $data['address2']; ?><br/>
							<abbr title="Website">website:</abbr> <a href="http://<?php echo $data['website']; ?>" target="_blank"><?php echo $data['website']; ?></a><br />
							<abbr title="Work Phone">phone:</abbr> <?php echo $data['phone']; ?><br/>
							<abbr title="Work Fax">fax:</abbr> (012) 678-132-901
						</address>
					</td>
					<td class="right">
						<address class="margin-none">
							<strong>Status:</strong>
							<span class="label label-primary"><?php echo $data['active']; ?></span><br>
                            Primary Contact: <?php echo htmlentities($data['firstName']) . " " . htmlentities($data['lastName']); ?><br>
							Company added on: <?php echo $data['dateAcquired']; ?><br>
							<?php if (!$data['dateUpdated']): ?> Last updated: Never <?php else: ?> Last updated:
                            <?php echo $data['dateUpdated']; ?><br>
                            <?php endif; ?>
							<div class="separator line"></div>
						</address>
					</td>
				</tr>
			</tbody>
		</table>
	</div>







    </div>
</div>