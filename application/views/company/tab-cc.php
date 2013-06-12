	<div class="navbar main hidden-print">
<!-- Top Menu Right -->
				<ul class="topnav pull-right">
 					<!-- TAB Menu Options -->
					<li class="account dropdown dd-1">
												<a data-toggle="dropdown" href="l" class="glyphicons cogwheel"><span class="hidden-phone">Options</span><i></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="l" class="glyphicons notes">New Note<i></i></a></li>
						</ul>
					</li>
					<!-- // Tab Menu Options -->
				</ul>
			<span class="toggle-navbar-hidden"></span>
    </div><!-- // Top Menu Right END -->
<!-- Top navbar END -->

<div class="widget" style="margin-top: -1px;">

<div class="widget-body">
          <!-- Table -->
         <table class="dynamicTable table table-striped table-bordered table-condensed">
         <!-- Table body -->
                 <tbody>
                          <tr>
                            <td>Name on Card:</td>
                            <td><?php  echo $data['cc_name']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Number:</td>
                            <td><?php  echo $data['cc_num']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Expiration:</td>
                            <td><?php  echo $data['cc_expmm']; ?>/<?php  echo $data['cc_expyy']; ?></td>
                          </tr>
                          <tr>
                            <td>Card CCV:</td>
                            <td><?php  echo $data['cc_ccv']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Billing Address:</td>
                            <td><?php  echo $data['cc_address']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Billing City:</td>
                            <td><?php  echo $data['cc_city']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Billing State:</td>
                            <td><?php  echo $data['cc_state']; ?></td>
                          </tr>
                          <tr>
                            <td>Card Billing Zip:</td>
                            <td><?php  echo $data['cc_zip']; ?></td>
                          </tr>
                        </tbody>
			</table>   	<!-- // Table body END -->
            </div>   <!-- // Widget body
			<!-- // Table END -->
    	</div>