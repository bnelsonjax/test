<!-- Content -->
<div id="content">
	<!-- Heading -->
<div class="separator bottom"></div>
<!-- // Heading END -->
<div class="innerLR">
	<!-- Widget -->
	<div class="widget" style="margin-top: -1px;">
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading glyphicons edit"><i></i> Edit Note</h4>
		</div>
		<!-- // Widget heading END -->
		<div class="widget-body">


			<div id="horizontal" class="widget widget-form">

				<div class="widget-body">

					<form class="form-horizontal" method="post" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/notes/edit/<?php echo $data['nid']; ?>">
                     <div style="display:none">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
                    </div>
                    <fieldset>
							<div class="control-group">
								<label class="control-label" for="id">Note ID:</label>
								<div class="controls">
									<input type="text" name="id"  readonly="readonly" class="input-large" id="id" value="<?php echo $data['nid']; ?>">
								</div>
							</div>

                            <div class="control-group">
								<label class="control-label" for="note">Note:</label>
								<div class="controls">
								   <textarea id="note" name="note" class="wysihtml5 span12" rows="5"><?php echo $data['note']; ?></textarea>
								</div>
							</div>

                            <hr class="separator" />

							<div class="form-actions">
								<input type="hidden" name="id" value="<?php echo $data['nid']; ?>">
								<button type="submit" name="edit" class="btn btn-primary btn">Save</button>
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