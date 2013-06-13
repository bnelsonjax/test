    <div id="content">
        <div class="innerLR">
            <!-- Breadcrumb -->
            <div class="widget breadcrum">
                <!-- Widget heading -->
                <div class="widget-head">
                    <h3 class="heading"><a href="/">Home</a> <em class="icon-chevron-right"></em> <a href="/company/view/<?php  echo $data['id']; ?>">View Company</a> <em class="icon-chevron-right"></em>
                    Add Contact</h3>
                </div><!-- // Widget heading END -->
            </div><!-- // Widget END -->
            <!-- END Breadcrumb -->

            <!-- Widget -->
            <div class="widget">
                <div class="widget-body">
                    <!-- Widget heading -->

                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading">Add Contact</h4>
                        </div><!-- // Widget heading END -->
                        <!-- Widget-content -->
                        <div class="widget-body">


                                    <form action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/contacts/add/<?php  echo $data['id']; ?>" method="post" class="form-horizontal">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
										<fieldset>
                                            <div class="control-group">
												<label class="control-label" for="cid">Company</label>
												<div class="controls">
													<input type="text" readonly="readonly"name="cid" class="input-large" id="cid" value="<?php  echo $data['id']; ?>">
												</div>
											</div>
                                            <div class="control-group">
												<label class="control-label" for="firstName">First Name</label>
												<div class="controls">
													<input type="text" name="firstName" class="input-large" id="firstName">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="lastName">Last Name</label>
												<div class="controls">
													<input type="text" name="lastName" class="input-large" id="lastName">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="title">Title</label>
												<div class="controls">
													<input type="text" name="title" class="input-large" id="title">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="email">Email</label>
												<div class="controls">
													<input type="text" name="email" class="input-large" id="email">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="phone">Phone</label>
												<div class="controls">
													<input type="text" name="phone" class="input-large" id="phone">
												</div>
												<label class="control-label" for="phoneExt">Phone Extension</label>
												<div class="controls">
													<input type="text" name="phoneExt" class="input-large" id="phoneExt">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="fax">Fax</label>
												<div class="controls">
													<input type="text" name="fax" class="input-large" id="fax">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="cell">Cell Phone</label>
												<div class="controls">
													<input type="text" name="cell" class="input-large" id="cell">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="homePhone">Home Phone</label>
												<div class="controls">
													<input type="text" name="homePhone" class="input-large" id="homePhone">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="department">Department</label>
												<div class="controls">
													<input type="text" name="department" class="input-large" id="department">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="notes">Contact Notes</label>
												<div class="controls">
													<textarea class="input-large" name="notes" id="notes" rows="4"></textarea>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="primaryContact">Is Primary Contact</label>
												<div class="controls">
													<input type="checkbox" name="primaryContact" />
												</div>
											</div>
											<div class="form-actions">
												<button type="submit" name="add" class="btn btn-primary btn">Add</button>
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