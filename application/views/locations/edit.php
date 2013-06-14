    <div id="content">
        <div class="innerLR">
            <!-- Breadcrumb -->
            <div class="widget breadcrum">
                <!-- Widget heading -->
                <div class="widget-head">
                    <h3 class="heading"><a href="/">Home</a> <em class="icon-chevron-right"></em> <a href="/company/view/<?php echo $data['cid']; ?>">View Company</a> <em class="icon-chevron-right"></em>
                    Edit Location</h3>
                </div><!-- // Widget heading END -->
            </div><!-- // Widget END -->
            <!-- END Breadcrumb -->

            <!-- Widget -->
            <div class="widget">
                <div class="widget-body">
                    <!-- Widget heading -->

                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading">Edit Location</h4>
                        </div><!-- // Widget heading END -->
                        <!-- Widget-content -->
                        <div class="widget-body">


					   <form class="form-horizontal" method="post" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/locations/edit/<?php echo $data['id']; ?>">
                     <div style="display:none">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
                    </div>
                    <fieldset>
							<div class="control-group">
								<label class="control-label" for="id">Location ID:</label>
								<div class="controls">
									<input type="text" name="id"  readonly="readonly" class="input-large" id="id" value="<?php echo $data['id']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="locationName">LocationName:</label>
								<div class="controls">
									<input type="text" name="locationName"   class="input-large" id="locationName" value="<?php echo $data['locationName']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="address">Address:</label>
								<div class="controls">
									<input type="text" name="address"   class="input-large" id="address" value="<?php echo $data['address']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="address2">Address 2:</label>
								<div class="controls">
									<input type="text" name="address2"   class="input-large" id="address2" value="<?php echo $data['address2']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="city">City:</label>
								<div class="controls">
									<input type="text" name="city"   class="input-large" id="city" value="<?php echo $data['city']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="state">State:</label>
								<div class="controls">
									<input type="text" name="state"   class="input-large" id="state" value="<?php echo $data['state']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="zip">Zip:</label>
								<div class="controls">
									<input type="text" name="zip"   class="input-large" id="zip" value="<?php echo $data['zip']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="country">Country:</label>
								<div class="controls">
									<input type="text" name="country"   class="input-large" id="country" value="<?php echo $data['country']; ?>">
								</div>
							</div>

                            <div class="control-group">
								<label class="control-label" for="notes">Notes:</label>
								<div class="controls">
								   <textarea id="notes" name="notes" class="wysihtml5 span12" rows="5"><?php echo $data['notes']; ?></textarea>
								</div>
							</div>

                            <hr class="separator" />

							<div class="form-actions">
								<input type="hidden" name="cid" value="<?php echo $data['cid']; ?>">
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