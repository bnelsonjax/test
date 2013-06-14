    <div id="content">
        <div class="innerLR">
            <!-- Breadcrumb -->
            <div class="widget breadcrum">
                <!-- Widget heading -->
                <div class="widget-head">
                    <h3 class="heading"><a href="/">Home</a> <em class="icon-chevron-right"></em> <a href="/company/view/<?php  echo $data['id']; ?>">View Company</a> <em class="icon-chevron-right"></em>
                    Add Equipment</h3>
                </div><!-- // Widget heading END -->
            </div><!-- // Widget END -->
            <!-- END Breadcrumb -->

            <!-- Widget -->
            <div class="widget">
                <div class="widget-body">
                    <!-- Widget heading -->

                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading">Add Equipment</h4>
                        </div><!-- // Widget heading END -->
                        <!-- Widget-content -->
                        <div class="widget-body">




	<form class="form-horizontal" method="post" action="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/equipment/add/<?php  echo $data['id']; ?>">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
                    <fieldset>
                             <div class="control-group">
            				   <label class="control-label" for="location">Location</label>
            					  <div class="controls">
            						   <select id="select01" name="location">
										<?php foreach ($data['locations'] as $row): ?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
										<?php endforeach; ?>
            						   </select>
            					  </div>
            				</div>
							<div class="control-group">
								<label class="control-label" for="mfrName">MFR Name</label>
                                <div class="controls">
									<input type="text" name="mfrName" class="input-large" id="mfrName" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="model">model 2</label>
                                <div class="controls">
									<input type="text" name="model" class="input-large" id="model" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="serial">serial</label>
                                <div class="controls">
									<input type="text" name="serial" class="input-large" id="serial" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="description">description</label>
                                <div class="controls">
									<input type="text" name="description" class="input-large" id="description" value="">
								</div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="notes">Notes</label>
                                <div class="controls">
                                   <textarea id="notes" name="notes" class="wysihtml5 span12" rows="5"></textarea>
                                </div>
							</div>
                            <div class="form-actions">
								<input type="hidden" name="cid" value="<?php  echo $data['id']; ?>">
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