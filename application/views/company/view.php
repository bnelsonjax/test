<?php

if ( $data['active'] === '1' )
{
$active = 'Active';
$class = 'label label-primary';
}
else
{
$active = 'Suspended';
$class = 'label label-danger';
}


?>

<div id="content">
<div class="separator bottom"></div>
 <div class="innerLR">
	<div class="well margin-none">
		<table class="table">
        <!-- Company Info Table -->
        <tbody>
				<tr>
					<td style="width: 50%;">
						<p class="lead">Company information</p>
						<h2><?php  echo $data['name']; ?></h2>
						<address class="margin-none">
							<?php  echo $data['address']; ?> <?php  echo $data['address2']; ?><br/>
                            <?php  echo $data['city']; ?> <?php  echo $data['state']; ?> <?php  echo $data['zip']; ?><br/>
                            <?php  echo $data['country']; ?><br/>
                            <br/>
							<abbr title="Website">Website: &nbsp;</abbr><a href="http://<?php  echo $data['website']; ?>" target="_blank"><?php  echo $data['website']; ?></a><br />
							<abbr title="Work Phone">Phone:&nbsp;</abbr>   <?php  echo $data['phone']; ?><br/>
                            <abbr title="Company Type">Company Type:&nbsp;</abbr>   <?php  echo $data['typeName']; ?><br/>
							<abbr title="Work Fax">Fax:&nbsp;</abbr>   <?php  echo $data['fax']; ?>
						</address>
					</td>
					<td class="right">
						<address class="margin-none">
							<strong>Status:</strong>
							<span class="<?php echo $class; ?>"><?php  echo $active; ?></span><br>
                            Primary Contact: <?php  echo $data['firstName'] . " " . $data['lastName']; ?><br>
							Company added on: <?php  echo $data['dateAcquired']; ?><br>
							<?php  if (!$data['dateUpdated']): ?> Last updated: Never <?php  else : ?> Last updated:
                            <?php  echo $data['dateUpdated']; ?><br>
                            <?php  endif; ?>
							<div class="separator line"></div>
                            <abbr title="Google Map"><a href="#">City Map:</a></abbr><br>
						</address>
					</td>
				</tr>
			</tbody>
           <!-- Company Info Table End -->
		</table>
	</div>
      <br>
    <!-- Tab Bar -->
    <div class="tabsbar">
    	<ul>
    		<li class="glyphicons blog active"><a href="#tabA-1" data-toggle="tab"><i></i> Company Notes</a></li>
    		<li class="glyphicons parents"><a href="#tabA-2" data-toggle="tab"><i></i> Contacts</a></li>
    		<li class="glyphicons notes_2"><a href="#tabA-3" data-toggle="tab"><i></i> <span>Work Orders</span></a></li>
    		<li class="glyphicons building"><a href="#tabA-4" data-toggle="tab"><i></i> <span>Location</span></a></li>
    		<li class="glyphicons notes"><a href="#tabA-5" data-toggle="tab"><i></i> <span>Contracts</span></a></li>
    		<li class="glyphicons cargo"><a href="#tabA-6" data-toggle="tab"><i></i> <span>Equipment</span></a></li>
    		<li class="glyphicons folder_plus"><a href="#tabA-7" data-toggle="tab"><i></i> <span>Files</span></a></li>
    		<li class="glyphicons credit_card"><a href="#tabA-8" data-toggle="tab"><i></i> <span>CC Info</span></a></li>
    	</ul>
    </div>
    <div class="tab-content">
         <!-- Tab 1 Start-->
        <div class="tab-pane active" id="tabA-1">
          <? include("tab-notes.php"); ?>
    	</div>
<!-- Tab 1 End-->
         <!-- Tab 2 Start-->
        <div class="tab-pane" id="tabA-2">
          <? include("tab-contacts.php"); ?>
    	</div><!-- Tab 2 End-->
<!-- Tab 3 Start-->
        <div class="tab-pane" id="tabA-3">
          <? include("tab-wo.php"); ?>
    	</div><!-- Tab 3 End-->
<!-- Tab 4 Start-->
        <div class="tab-pane" id="tabA-4">
            <? include("tab-location.php"); ?>
    	</div><!-- Tab 4 End-->
<!-- Tab 5 Start-->
        <div class="tab-pane widget-body-regular" id="tabA-5">
            <? include("tab-contracts.php"); ?>
    	</div><!-- Tab 5 End-->
<!-- Tab 6 Start-->
        <div class="tab-pane" id="tabA-6">
           <? include("tab-equipment.php"); ?>
        </div><!-- Tab 6 End-->
<!-- Tab 7 Start-->
        <div class="tab-pane" id="tabA-7">
           <? include("tab-files.php"); ?>
    	</div><!-- Tab 7 End-->
<!-- Tab 8 Start-->
        <div class="tab-pane" id="tabA-8">
        <? include("tab-cc.php"); ?>
        </div><!-- Tab 8 End-->
    </div>     <!-- Tab Content End-->
    </div>     <!-- InnerLR End-->
</div>     <!-- Content End-->