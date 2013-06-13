<SCRIPT LANGUAGE="JavaScript">
function addDashes(f)
{
f.value = f.value.slice(0,3)+"-"+f.value.slice(3,6)+"-"+f.value.slice(6,10);
}
</SCRIPT>
<!-- Content -->
<div id="content">
	<!-- Heading -->
<div class="separator bottom"></div>
<!-- // Heading END -->
<div class="innerLR">

	<!-- BreadCrumb Widget -->
    <div class="widget">
		<!-- BreadCrumb -->
		<div class="widget-head">
			<h3 class="heading"><a href="/">Home</a> / <a href="/company/view/<?php echo $data['cid']; ?>">View Company</a> / Edit Note</h3>
		</div>
		<!-- // BreadCrumb END -->
	</div>
	<!-- // BreadCrumb Widget END -->

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




                <form class="form-horizontal" method="post" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/contacts/edit/<?php echo $data['id']; ?>">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="FirstName">First Name</label>
								<div class="controls">
									<input type="text" name="firstName" class="input-large" id="firstName" value="<?php echo $data['firstName']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="lastName">Last Name</label>
                                <div class="controls">
									<input type="text" name="lastName" class="input-large" id="lastName" value="<?php echo $data['lastName']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="title">Title</label>
                                <div class="controls">
									<input type="text" name="title" class="input-large" id="title" value="<?php echo $data['title']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="email">Email Address</label>
                                <div class="controls">
									<input type="text" name="email" class="input-large" id="email" value="<?php echo $data['email']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="phone">Phone</label>
                                <div class="controls">
									<input type="text" name="phone" class="input-large" onBlur="addDashes(this)" id="phone" value="<?php echo $data['phone']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="fax">Fax</label>
                                <div class="controls">
									<input type="text" name="fax" class="input-large" onBlur="addDashes(this)" id="fax" value="<?php echo $data['fax']; ?>">
								</div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="cell">Cell Phone</label>
                                <div class="controls">
									<input type="text" name="cell" class="input-large" onBlur="addDashes(this)" id="cell" value="<?php echo $data['cell']; ?>">
								</div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="homePhone">Home Phone</label>
                                <div class="controls">
									<input type="text" name="homePhone" class="input-large" onBlur="addDashes(this)" id="homePhone" value="<?php echo $data['homePhone']; ?>">
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


		</div>
	</div>
</div>
</div>