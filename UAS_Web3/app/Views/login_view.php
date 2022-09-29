<div class="<?=$contain;?>" style="margin-bottom:70px;">
	<div class="row">
		<div class="col-12" style="border:solid; margin-top:24px;">
			<div></div>
			<h2 class="text-center">Login</h2>
			<form class="justify-content-center" method="post">
				<h5>Email Address</h5>
					<input class="form-group col-12" type="email" name="email" value="<?php if(isset($inputs['email'])) echo $inputs['email'];?>" size="50" required />
				<h5>Password</h5>
					<input class="form-group col-12" type="password" name="password" value="<?php if(isset($inputs['password'])) echo $inputs['password'];?>" size="50" required />
				<div>
					<p><a href="registrasi">Register</a>, If you don't have an account.</p>
					<input type="submit" class="btn btn-primary" value="Submit" name="btnSubmit"/>
				</div>
			</form>
			
		</div>
	</div>
</div>