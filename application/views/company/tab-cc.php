<div class="widget" style="margin-top: -1px;">
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading"></h4>
                      	<div class="buttons pull-right">
          		<a href="/company/editcc" class="btn btn-inverse btn-icon glyphicons edit"><i></i> Edit</a>
          	</div>
		</div>
		<!-- // Widget heading END -->
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