    <div id="content">
        <div class="innerLR">
            <!-- Breadcrumb -->
            <div class="widget breadcrum">
                <!-- Widget heading -->
                <div class="widget-head">
                    <h3 class="heading"><a href="/">Home</a> <em class="icon-chevron-right"></em> <a href="/company/view/<?php  echo $data['id']; ?>">View Company</a> <em class="icon-chevron-right"></em>
                    Add Location</h3>
                </div><!-- // Widget heading END -->
            </div><!-- // Widget END -->
            <!-- END Breadcrumb -->

            <!-- Widget -->
            <div class="widget">
                <div class="widget-body">
                    <!-- Widget heading -->

                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading">Add Location</h4>
                        </div><!-- // Widget heading END -->
                        <!-- Widget-content -->
                        <div class="widget-body">



					<form class="form-horizontal" method="post" action="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/locations/add/<?php  echo $data['id']; ?>">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
                    <fieldset>
							<div class="control-group">
								<label class="control-label" for="name">Name of Location</label>
								<div class="controls">
									<input type="text" name="name" class="input-large" id="name" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="address">Address</label>
                                <div class="controls">
									<input type="text" name="address" class="input-large" id="address" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="address2">Address 2</label>
                                <div class="controls">
									<input type="text" name="address2" class="input-large" id="address2" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="city">City</label>
                                <div class="controls">
									<input type="text" name="city" class="input-large" id="city" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="state">State</label>
                                <div class="controls">
									<input type="text" name="state" class="input-large" id="state" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="zip">Zip</label>
                                <div class="controls">
									<input type="text" name="zip" class="input-large" id="zip" value="">
								</div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="notes">Notes</label>
                                <div class="controls">
                                   <textarea id="notes" class="input-large" name="notes"></textarea>
                                </div>
							</div>
                            <div class="form-actions">
								<input type="hidden" name="cid" value="<?php  echo $data['cid']; ?>">
								<button type="submit" name="add" class="btn btn-primary btn">Save</button>
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