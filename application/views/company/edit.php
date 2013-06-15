    <div id="content">
        <div class="innerLR">
            <!-- Breadcrumb -->
            <div class="widget breadcrum">
                <!-- Widget heading -->
                <div class="widget-head">
                    <h3 class="heading"><a href="/">Home</a> <em class="icon-chevron-right"></em> <a href="/company/view/<?php echo $data['id']; ?>">View Company</a> <em class="icon-chevron-right"></em>
                    Edit Company</h3>
                </div><!-- // Widget heading END -->
            </div><!-- // Widget END -->
            <!-- END Breadcrumb -->

            <!-- Widget -->
            <div class="widget">
                <div class="widget-body">
                    <!-- Widget heading -->

                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading">Edit Company</h4>
                        </div><!-- // Widget heading END -->
                        <!-- Widget-content -->
                        <div class="widget-body">


					   <form class="form-horizontal" method="post" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/company/edit/<?php echo $data['id']; ?>">
                     <div style="display:none">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
                    </div>
                    <fieldset>
							<div class="control-group">
								<label class="control-label" for="id">Company ID:</label>
								<div class="controls">
									<input type="text" name="id"  readonly="readonly" class="input-large" id="id" value="<?php echo $data['id']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="state">Status:</label>
								<div class="controls">
                                        <?php echo form_dropdown('active', $status, $data['active']);?>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="type">Type:</label>
								<div class="controls">
                                        <?php echo form_dropdown('type', $type, $data['type']);?>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="name">Company Name:</label>
								<div class="controls">
									<input type="text" name="name"   class="input-large" id="name" value="<?php echo $data['name']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="website">Website:</label>
								<div class="controls">
									<input type="text" name="website"   class="input-large" id="website" value="<?php echo $data['website']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="phone">Phone:</label>
								<div class="controls">
									<input type="text" name="phone"   class="input-large" id="phone" value="<?php echo $data['phone']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="fax">Fax:</label>
								<div class="controls">
									<input type="text" name="fax"   class="input-large" id="fax" value="<?php echo $data['fax']; ?>">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="primary_contact">Primary Contact:</label>
								<div class="controls">
									<?php echo form_dropdown('primary_contact', $contacts, $data['primary_contact']);?>
								</div>
							</div>

                            <hr class="separator" />

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