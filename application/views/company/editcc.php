    <div id="content">
        <div class="innerLR">
            <!-- Breadcrumb -->
            <div class="widget breadcrum">
                <!-- Widget heading -->
                <div class="widget-head">
                    <h3 class="heading"><a href="/">Home</a> <em class="icon-chevron-right"></em> <a href="/company/view/<?php echo $data['id']; ?>">View Company</a> <em class="icon-chevron-right"></em>
                    View Note</h3>
                </div><!-- // Widget heading END -->
            </div><!-- // Widget END -->
            <!-- END Breadcrumb -->

            <!-- Widget -->
            <div class="widget">
                <div class="widget-body">
                    <!-- Widget heading -->

                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading">Note Options</h4>
                        </div><!-- // Widget heading END -->
                        <!-- Widget-content -->
                        <div class="widget-body">



                        <form class="form-horizontal" method="post" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/company/editcc/<?php echo $data['id']; ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
                        <fieldset>
							<div class="control-group">
								<label class="control-label" for="cc_name">Name on Card</label>
								<div class="controls">
									<input type="text" name="cc_name" class="input-large" id="cc_name" value="<?php echo $data['cc_name']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="cc_num">Card Number</label>
                                <div class="controls">
									<input type="text" name="cc_num" class="input-large" id="cc_num" value="<?php echo $data['cc_num']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="cc_exp">Card Expiration</label>
                                <div class="controls">
                                                          <select name="cc_expmm" class="input-small" id="cc_expmm">
                                                          <option value="<?php echo $data['cc_expmm']; ?>" selected><?php echo $data['cc_expmm']; ?></option>
                                                          <option value="01">01</option>
                                                          <option value="02">02</option>
                                                          <option value="03">03</option>
                                                          <option value="04">04</option>
                                                          <option value="05">05</option>
                                                          <option value="06">06</option>
                                                          <option value="07">07</option>
                                                          <option value="08">08</option>
                                                          <option value="09">09</option>
                                                          <option value="10">10</option>
                                                          <option value="11">11</option>
                                                          <option value="12">12</option>
                                                        </select>
                                                        <select name="cc_expyy" class="input-small" id="cc_expyy">
                                                        <option value="<?php echo $data['cc_expyy']; ?>" selected><?php echo $data['cc_expyy']; ?></option>
                                                          <option value="2013">2013</option>
                                                          <option value="2014">2014</option>
                                                          <option value="2015">2015</option>
                                                          <option value="2016">2016</option>
                                                          <option value="2017">2017</option>
                                                          <option value="2018">2018</option>
                                                          <option value="2019">2019</option>
                                                          <option value="2020">2020</option>
                                                        </select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="cc_ccv">Card CCV</label>
                                <div class="controls">
									<input type="text" name="cc_ccv" class="input-large" id="cc_ccv" value="<?php echo $data['cc_ccv']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="cc_address">Card Billing Address</label>
                                <div class="controls">
									<input type="text" name="cc_address" class="input-large" id="cc_address" value="<?php echo $data['cc_address']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="cc_city">Card Billing City</label>
                                <div class="controls">
									<input type="text" name="cc_city" class="input-large" id="cc_city" value="<?php echo $data['cc_city']; ?>">
								</div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="cc_state">Card Billing State</label>
                                <div class="controls">
									<input type="text" name="cc_state" class="input-large" id="cc_state" value="<?php echo $data['cc_state']; ?>">
								</div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="cc_zip">Card Billing Zip</label>
                                <div class="controls">
									<input type="text" name="cc_zip" class="input-large" id="cc_zip" value="<?php echo $data['cc_zip']; ?>">
								</div>
							</div>
							<div class="form-actions">
								<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
								<button type="submit" name="edit" class="btn btn-primary btn">Save</button>
								<button class="btn btn">Cancel</button>
							</div>
						</fieldset>
					</form>





                        </div><!-- /.widget-content -->
                    </div>
                </div><!-- // Widget Body -->
            </div><!-- // Widget END -->

        </div>
    </div>