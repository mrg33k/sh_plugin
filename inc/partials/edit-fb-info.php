<div class="container edit-form-container">
	<div class="row">
		<h3>Welcome, <? echo $u_first_name ?></h3>
		<h2>Please tell us a little more about yourself</h2>
		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
		<div class="edit-form">
			<form action="invite.php" method="POST">
				<fieldset>
					
					<!-- First Name -->
					<div class="col-md-3">
					<label>First Name</label>
					<input type="text" name="fname" value="<? echo $fb_first_name ?>"/>
					</div>
					
					<div class="col-md-3">					
					<!-- Last Name -->
					<label>Last Name</label>
					<input type="text" name="lname" value="<? echo $fb_last_name ?>"/>
					</div>
					
					<!-- Maiden Name -->
					<div class="col-md-3">
					<label>Maiden Name</label>
					<input type="text" name="maiden" placeholder="Maiden Name"/>
					</div>
					
					<!--Email-->					
					<div class="col-md-3">
						<label>Email</label>
						<input type="text" name="email" value="<? echo $fb_email ?>" />
					</div>
					<!-- City -->
					<div class="col-md-3">					
					<label>City</label>
					<input type="text" name="city" value="<? if(is_numeric($fb_location)){echo '';}else{ echo $fb_city; } ?>"/>
					</div>
					
					<!-- State -->
					<div class="col-md-3">
						<label>State</label>
						<select class="states-option">
							<option></option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
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
					
					<!-- Zip Code -->
					<div class="col-md-3">
					<label>Zip Code</label>
					<input type="text" name="zipcode" value=""/>
					</div>
					
					<!-- Phone -->
					<div class="col-md-3">
					<label>Phone</label>
					<input type="text" name="phone" placeholder="Phone Number"/>
					</div>
					
					<!-- Mobile Phone -->
					<div class="col-md-3">
					<label>Mobile</label>
					<input type="text" name="mobile" placeholder="Mobile Number"/>
					</div>
					
					<div class="clearfix"></div>
					<div class="options">
						<div class="col-md-4">
						<legend>Interest<br/><p>What are the issues that are most important to you in this election?</p></legend>
						
						<input id="interest_input" type="search" name="interest"/>
						
						</div>
						<div class="col-md-4">
						<legend>Group<br/><p>Please identify any ethnic, social, religious or work groups to
						which you belong:</p>
						</legend>
						<input id="groups_input" type="search" name="interest"/>
						
						</div>
						<div class="col-md-4">
						<legend>Capabilities<br/><p>What are the issues that are most important to you in this election?</p></legend>
						<input id="capabilities_input" type="search" name="interest"/>
						
						</div>
					</div>
					
					
				</fieldset>
			</form>
		</div>
	</div>
</div>
