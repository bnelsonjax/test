<script src="http://login.logicpsa.com/public/js/plugins/validate/jquery.validate.js"></script>
<script src="http://login.logicpsa.com/public/js/demos/demo.validate.js"></script>
<br>
<div class="container" id="validation">
		<div class="row">
				<div class="span12">
						<div class="widget">
								<div class="widget-header">
										<h3>
												<i class="icon-magic"></i>
												Add New Company!
										</h3>
								</div> <!-- /widget-header -->
								<div class="widget-content">
										<form action="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/Company/add" method="post"  id="contact-form" class="form-horizontal" novalidate="novalidate">
												<div id="wizard" class="swMain">
														<ul class="wizard-steps">
																<li>
																		<a href="#step-1" class="">
																				<div class="wizard-step-number">1</div>
																				<div class="wizard-step-label">Company Details</div>
																				<div class="wizard-step-bar"></div>
																		</a>
																</li>
																<li>
																		<a href="#step-2" class="">
																				<div class="wizard-step-number">2</div>
																				<div class="wizard-step-label">Location Details</div>
																				<div class="wizard-step-bar"></div>
																		</a>
																</li>
																<li>
																		<a href="#step-3" class="">
																				<div class="wizard-step-number">3</div>
																				<div class="wizard-step-label">Contact Details</div>
																				<div class="wizard-step-bar"></div>
																		</a>
																</li>
                                                                <li>
																		<a href="#step-4" class="">
																				<div class="wizard-step-number">4</div>
																				<div class="wizard-step-label">Credit Card Details</div>
																				<div class="wizard-step-bar"></div>
																		</a>
																</li>
																<li>
																		<a href="#step-5" class="">
																				<div class="wizard-step-number">5</div>
																				<div class="wizard-step-label">Finish</div>
																				<div class="wizard-step-bar"></div>
																		</a>
																</li>
														</ul>
														<div id="step-1">
																<h3>Company Details:</h3>
																<br />
																<div class="row-fluid">
																		<div class="span6">
																				<div class="control-group">
																<label class="control-label" for="companyName">Name of Company</label>
																<div class="controls">
																		<input type="text" name="companyName" class="input-large" id="companyName">
																</div>
														</div>
														<div class="control-group">
																<label class="control-label" for="companyType">Type of Company</label>
																<div class="controls">
																		<select id="select01" name="companyType">
																				<?php  foreach ($data['type'] as $row): ?>
																						<option value="<?php  echo $row['id']; ?>"><?php  echo $row['name']; ?></option>
																				<?php  endforeach; ?>
																		</select>
																</div>
														</div>
														<div class="control-group">
																<label class="control-label" for="tech">Primary Tech</label>
																<div class="controls">
																		<select id="select01" name="tech">
																				<option value="">None</option>
																				<?php  foreach ($data['tech'] as $row): ?>
																						<option value="<?php  echo $row['id']; ?>"><?php  echo $row['firstName'] . " " . $row['lastName']; ?></option>
																				<?php  endforeach; ?>
																		</select>
																</div>
														</div>
														<div class="control-group">
																<label class="control-label" for="companyWebsite">Company Website</label>
																<div class="controls">
																		<input type="text" name="companyWebsite" class="input-large" id="companyWebsite">
																</div>
														</div>
														<div class="control-group">
																<label class="control-label" for="companyPhone">Company Phone</label>
																<div class="controls">
																		<input type="text" name="companyPhone" class="input-large" id="companyPhone">
																</div>
														</div>
														<div class="control-group">
																<label class="control-label" for="companyFax">Company Fax</label>
																<div class="controls">
																		<input type="text" name="companyFax" class="input-large" id="companyFax">
																</div>
														</div>
														<div class="control-group">
																<label class="control-label" for="companyNotes">Company Notes</label>
																<div class="controls">
																		<textarea class="input-large" name="companyNotes" id="textarea" rows="4"></textarea>
																</div>
														</div>
																		</div> <!-- /span6 -->
																		<div class="span5 offset1">
																				<div class="well">
																						<p>Please enter the company details.</p>
																				</div>
																		</div> <!-- /span6 -->
																</div> <!-- /row-fluid -->
														</div> <!-- /step 1-->
														<div id="step-2">
																<h3>Location Details:</h3>
																<br />
																<div class="row-fluid">
																		<div class="span6">
																				<div class="control-group">
														<label class="control-label" for="locationName">Location Name</label>
														<div class="controls">
																<input type="text" name="locationName" class="input-large" id="locationName" VALUE="Main Office">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="locationAddress">Address</label>
														<div class="controls">
																<input type="text" name="locationAddress" class="input-large" id="locationAddress">
														</div>
														<div class="controls">
																<input type="text" name="locationAddress2" class="input-large" id="locationAddress2">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="locationCity">City</label>
														<div class="controls">
																<input type="text" name="locationCity" class="input-large" id="locationCity">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="locationState">State</label>
														<div class="controls">
																<input type="text" name="locationState" class="input-large" id="locationState">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="locationZip">Zip</label>
														<div class="controls">
																<input type="text" name="locationZip" class="input-large" id="locationZip">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="locationCountry">Country</label>
														<div class="controls">
																<select id="select01" name="locationCountry">
																				<?php  foreach ($data['countries'] as $row): ?>
																						<option value="<?php  echo $row['id']; ?>"><?php  echo $row['name']; ?></option>
																				<?php  endforeach; ?>
																		</select>
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="locationNotes">Location Notes</label>
														<div class="controls">
																<textarea class="input-large" name="locationNotes" id="locationNotes" rows="4"></textarea>
														</div>
												</div>
																		</div> <!-- /span6 -->
																		<div class="span5 offset1">
																				<div class="well">
																						<p>Enter the company's main location</p>
																				</div>
																		</div> <!-- /span6 -->
																</div> <!-- /row-fluid -->
														</div> <!-- /step 2-->
														<div id="step-3">
																<h3>Contact Details:</h3>
																<br />
																<div class="row-fluid">
																		<div class="span6">
																				<div class="control-group">
														<label class="control-label" for="contactFirstName">First Name</label>
														<div class="controls">
																<input type="text" name="contactFirstName" class="input-large" id="contactFirstName">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="contactLastName">Last Name</label>
														<div class="controls">
																<input type="text" name="contactLastName" class="input-large" id="contactLastName">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="contactTitle">Title</label>
														<div class="controls">
																<input type="text" name="contactTitle" class="input-large" id="contactTitle">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="contactEmail">Email</label>
														<div class="controls">
																<input type="text" name="contactEmail" class="input-large" id="contactEmail">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="contactPhone">Phone</label>
														<div class="controls">
																<input type="text" name="contactPhone" class="input-large" id="contactPhone">
														</div>
														<label class="control-label" for="contactPhoneExt">Phone Extension</label>
														<div class="controls">
																<input type="text" name="contactPhoneExt" class="input-large" id="contactPhoneExt">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="contactFax">Fax</label>
														<div class="controls">
																<input type="text" name="contactFax" class="input-large" id="contactFax">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="contactNotes">Contact Notes</label>
														<div class="controls">
																<textarea class="input-large" name="contactNotes" id="textarea" rows="4"></textarea>
																<input type="hidden" name="add" value="1" />
														</div>
												</div>
																		</div> <!-- /span6 -->
																		<div class="span5 offset1">
																				<div class="well">
																						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
																						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
																				</div>
																		</div> <!-- /span6 -->
																</div> <!-- /row-fluid -->
														</div> <!-- /step 3-->
                                                        <div id="step-4">
																<h3>Credit Card Info:</h3>
																<br />
																<div class="row-fluid">
																		<div class="span6">
												<div class="control-group">
														<label class="control-label" for="cc_name">Cardholder Name:</label>
														<div class="controls">
																<input type="text" name="cc_name" class="input-large" id="cc_name">
														</div>
												</div>
                                                <div class="control-group">
														<label class="control-label" for="cc_type">Card Type:</label>
														<div class="controls">
																<select name="cc_type" class="input-small" id="cc_type">
                                                                  <option value="visa">Visa</option>
                                                                  <option value="mastercard">Mastercard</option>
                                                                  <option value="amex">AmEx</option>
                                                                  <option value="discover">Discover</option>
                                                                </select>
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="cc_num">Card Number:</label>
														<div class="controls">
																<input type="text" name="cc_num" class="input-large" id="cc_num">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="cc_expmm">Card Expiration:</label>
														<div class="controls">
                                                                <select name="cc_expmm" class="input-small" id="cc_expmm">
                                                                  <option value="01">01</option>
                                                                  <option value="02">02</option>
                                                                  <option value="03">03</option>
                                                                  <option value="04">04</option>
                                                                  <option value="05">05</option>
                                                                  <option value="06">06</option>
                                                                  <option value="07">07</option>
                                                                  <option value="08">08</option>
                                                                  <option value="09">09</option>
                                                                  <option value="10">10</option>
                                                                  <option value="11">11</option>
                                                                  <option value="12">12</option>
                                                                </select>
                                                                <select name="cc_expyy" class="input-small" id="cc_expyy">
                                                                  <option value="13">2013</option>
                                                                  <option value="14">2014</option>
                                                                  <option value="15">2015</option>
                                                                  <option value="16">2016</option>
                                                                  <option value="17">2017</option>
                                                                  <option value="18">2018</option>
                                                                  <option value="19">2019</option>
                                                                  <option value="20">2020</option>
                                                                </select>
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="cc_ccv">Card CCV Number:</label>
														<div class="controls">
																<input type="text" name="cc_ccv" class="input-small" id="cc_ccv">
														</div>
												</div>
												<div class="control-group">
														<label class="control-label" for="cc_address">Card Address:</label>
														<div class="controls">
																<input type="text" name="cc_address" class="input-large" id="cc_address">
														</div>
												</div>
                                                <div class="control-group">
														<label class="control-label" for="cc_city">Card City:</label>
														<div class="controls">
																<input type="text" name="cc_city" class="input-large" id="cc_city">
														</div>
												</div>
                                                <div class="control-group">
														<label class="control-label" for="cc_state">Card State:</label>
														<div class="controls">
                                                                <select name="cc_state" class="input-medium" id="cc_state">
                                                                <option value="" selected="selected">Select a State</option>
                                                                <option value="AL">Alabama</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="AZ">Arizona</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="CA">California</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="DC">District Of Columbia</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IN">Indiana</option>
                                                                <option value="IA">Iowa</option>
                                                                <option value="KS">Kansas</option>
                                                                <option value="KY">Kentucky</option>
                                                                <option value="LA">Louisiana</option>
                                                                <option value="ME">Maine</option>
                                                                <option value="MD">Maryland</option>
                                                                <option value="MA">Massachusetts</option>
                                                                <option value="MI">Michigan</option>
                                                                <option value="MN">Minnesota</option>
                                                                <option value="MS">Mississippi</option>
                                                                <option value="MO">Missouri</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="NH">New Hampshire</option>
                                                                <option value="NJ">New Jersey</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="NY">New York</option>
                                                                <option value="NC">North Carolina</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="OH">Ohio</option>
                                                                <option value="OK">Oklahoma</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="PA">Pennsylvania</option>
                                                                <option value="RI">Rhode Island</option>
                                                                <option value="SC">South Carolina</option>
                                                                <option value="SD">South Dakota</option>
                                                                <option value="TN">Tennessee</option>
                                                                <option value="TX">Texas</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="VT">Vermont</option>
                                                                <option value="VA">Virginia</option>
                                                                <option value="WA">Washington</option>
                                                                <option value="WV">West Virginia</option>
                                                                <option value="WI">Wisconsin</option>
                                                                <option value="WY">Wyoming</option>
                                                                </select>
                                                        </div>
												</div>
                                                <div class="control-group">
														<label class="control-label" for="cc_zip">Card Zip:</label>
														<div class="controls">
																<input type="text" name="cc_zip" class="input-small" id="cc_zip">
														</div>
												</div>
																		</div> <!-- /span6 -->
																		<div class="span5 offset1">
																				<div class="well">
																						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
																						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
																				</div>
																		</div> <!-- /span6 -->
																</div> <!-- /row-fluid -->
														</div> <!-- /step 4-->
                                                        <div id="step-5">
																<h3>Complete:</h3>
																<br />
																<div class="row-fluid">
																		<div class="span6">
																				<p>Click add below to add the new company or previous to edit any information.</p>
																				<p><button type="submit" name="add" class="btn btn-primary btn">Add Company</button></p>
																				<br />
																		</div> <!-- /span6 -->
																</div> <!-- /row-fluid -->
														</div> <!-- /step 5-->
												</div> <!-- /wizard -->
										</form>
								</div> <!-- /widget-content -->
						</div> <!-- /widget -->
				</div> <!-- /.span12 -->
		</div> <!-- /row -->
</div> <!-- /.container -->