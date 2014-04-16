
  <div class="container-fluid sized contain_fs">
	<div class="row">
		<div class="join col-md-7">
			<h2>Join Ken Bennett</h2><br/>
			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind 
			texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			
			<p>A small river named Duden ﬂows by their place and supplies it with the necessary regelialia.
			It is a paradisematic country, in which roasted parts of sentences into your mouth. </p>			
		</div>
	</div>
</div>
<div class="container sign-up">	
	<div class="row">
	<div class="col-md-10 join">	

		<div class="col-md-6">
			
			<form id="form1" action="edit-info.php" method="POST">
			<legend>Sign-Up Below or Sign Into Facebook</legend>
				<fieldset>					
					<div class="col-md-6">
					<label >First Name</label>
					<input type="text" name="person[0][First_Name]" placeholder="First Name">
					</div>
					
					<div class="col-md-6">
					<label >Last Name</label>
					<input type="text" name="person[0][Last_Name]" placeholder="Last Name">
					</div>
					
					
					
					<div class="col-md-6">
					<label>Email</label>				
					<input type="email" name="person[0][email]" placeholder="Email">
					</div>	
					<div class="col-md-6">
					<label>City or Zip Code</label>		
					<input type="text" name="person[0][location]" placeholder="City or Zip">
					</div>
				</fieldset>	
					<input type="submit" class="btn btn-success pledge_btn" value="Pledge My Support!" >					
			</form>
			
		</div>	
		<div class="fb_sign col-md-6">
			<div class="ctn_buttons">
					<a class="btn btn-primary juicy_btn" href="<?php echo $login_url; ?>">Login To Facebook</a>
			</div>		
		</div>
		</div>
	</div>
</div>
       	