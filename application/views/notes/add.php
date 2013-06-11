<div class="container">

		<div class="row">

				<div class="span8">

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


				</div> <!-- /span8 -->

		</div> <!-- /row -->

</div> <!-- /.container -->