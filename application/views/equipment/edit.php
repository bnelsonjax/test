    <div id="content">
        <div class="innerLR">
            <!-- Breadcrumb -->
            <div class="widget breadcrum">
                <!-- Widget heading -->
                <div class="widget-head">
                    <h3 class="heading"><a href="/">Home</a> <em class="icon-chevron-right"></em> <a href="/company/view/<?php echo $data['cid']; ?>">View Company</a> <em class="icon-chevron-right"></em>
                    Edit Equipment</h3>
                </div><!-- // Widget heading END -->
            </div><!-- // Widget END -->
            <!-- END Breadcrumb -->

            <!-- Widget -->
            <div class="widget">
                <div class="widget-body">
                    <!-- Widget heading -->

                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading">Edit</h4>
                        </div><!-- // Widget heading END -->
                        <!-- Widget-content -->
                        <div class="widget-body">



					   <form class="form-horizontal" method="post" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/equipment/edit/<?php echo $data['id']; ?>">
                     <div style="display:none">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
                    </div>
                    <fieldset>
							<div class="control-group">
								<label class="control-label" for="id">Equipment ID:</label>
								<div class="controls">
									<input type="text" name="id"  readonly="readonly" class="input-large" id="id" value="<?php echo $data['id']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="name">Location:</label>
								<div class="controls">
									<input type="text" name="name"  readonly="readonly" class="input-large" id="name" value="<?php echo $data['name']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="mfrName">MFG Name:</label>
								<div class="controls">
									<input type="text" name="mfrName"   class="input-large" id="mfrName" value="<?php echo $data['mfrName']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="model">Model:</label>
								<div class="controls">
									<input type="text" name="model"   class="input-large" id="model" value="<?php echo $data['model']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="serial">Serial:</label>
								<div class="controls">
									<input type="text" name="serial"   class="input-large" id="serial" value="<?php echo $data['serial']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="description">Description:</label>
								<div class="controls">
									<input type="text" name="description"   class="input-large" id="description" value="<?php echo $data['description']; ?>">
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