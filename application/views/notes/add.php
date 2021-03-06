<!-- Content -->
<div id="content">
	<!-- Heading -->
<div class="heading-buttons">
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->
<div class="innerLR">
	<!-- Widget -->
	<div class="widget" style="margin-top: -1px;">
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading glyphicons notes_2"><i></i> Add Note</h4>
		</div>
		<!-- // Widget heading END -->
		<div class="widget-body">


<div id="horizontal" class="form-horizontal">

								<div class="widget-header">
										<h3></h3>
								</div> <!-- /widget-header -->
								<div class="widget-content">
										<form class="form-horizontal" method="post" action="/notes/add/<?php echo $data['cid']; ?>">
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
										<fieldset>
												<div class="control-group">
														<label class="control-label" for="notes">Note</label>
														<div class="controls">
																<textarea id="note" name="note" class="wysihtml5 span12" rows="5"></textarea>
														</div>
												</div>
												<div class="form-actions">
														<input type="hidden" name="cid" value="<?php echo $data['cid']; ?>" />
														<button type="submit" name="add" class="btn btn-primary btn">Save</button>
														<button class="btn btn">Cancel</button>
												</div>
										</fieldset>
										</form>

								</div> <!-- /widget-content -->

						</div>


		</div>
	</div>
</div>
</div>






<div id="horizontal" class="form-horizontal">

								<div class="widget-header">
										<h3>
												<i class="icon-print"></i>
												Add Note
										</h3>
								</div> <!-- /widget-header -->
								<div class="widget-content">
										<form class="form-horizontal" method="post" action="<?php echo SITE_URL;?>/Notes/add">
										<fieldset>
												<div class="control-group">
														<label class="control-label" for="notes">Note</label>
														<div class="controls">
																<textarea class="input-large" name="note" id="textarea" rows="4"></textarea>
														</div>
												</div>
												<div class="form-actions">
														<input type="hidden" name="companyId" value="<?php echo $data['id']; ?>" />
														<button type="submit" name="add" class="btn btn-primary btn">Save</button>
														<button class="btn btn">Cancel</button>
												</div>
										</fieldset>
										</form>

								</div> <!-- /widget-content -->

						</div>