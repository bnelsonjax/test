<div class="container">

	<div class="row">

		<div class="span8">

			<div id="horizontal" class="widget widget-form">

				<div class="widget-header">
					<h3>
						<i class="icon-pencil"></i>
						Edit Note
					</h3>
				</div> <!-- /widget-header -->

				<div class="widget-content">

					<form class="form-horizontal" method="post" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Company/editcc/<?php echo $data['id']; ?>">
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="notes">Note:</label>
								<div class="controls">
									<input type="text" name="notes" class="input-large" id="notes" value="<?php echo $data['notes']; ?>">
								</div>
							</div>
							<div class="form-actions">
								<input type="hidden" name="companyId" value="<?php echo $data['id']; ?>">
								<button type="submit" name="edit" class="btn btn-primary btn">Save</button>
								<button class="btn btn">Cancel</button>
							</div>
						</fieldset>
					</form>
				</div> <!-- /widget-content -->
			</div>


		</div> <!-- /span8 -->

	</div> <!-- /row -->

</div> <!-- /.container -->