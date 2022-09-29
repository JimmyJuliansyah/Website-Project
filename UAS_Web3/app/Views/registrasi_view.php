<div class="<?=$contain;?>" style="margin-bottom:70px;">
	<div class="row">
		<div class="col-12" style="border:solid; margin-top:24px;">
			<h2 class="text-center">User Registration</h2>
<?php
					$errors = session()->getFlashData('error_regis');
					$inputs = session()->getFlashData('input_regis');
					
					
					
					if(!empty($errors)){
?>
						<div class="alert alert-danger" role="alert">
							<ul>
<?php 
								foreach ($errors as $error) : 
?>
									<li><?= esc($error) ?></li>
<?php 
									endforeach; 
?>
							</ul>
						</div>
<?php
					}
					
?>
			<form class="justify-content-center" method="post">
				<h5>Username</h5>
					<input class="form-group col-12" type="text" name="nama" value="<?php if(isset($inputs['nama'])) echo $inputs['nama'];?>" size="50" />
				<h5>Email</h5>
					<input class="form-group col-12" type="email" name="email" value="<?php if(isset($inputs['email'])) echo $inputs['email'];?>" size="50" />
				<h5>Password</h5>
					<input class="form-group col-12" type="password" name="password" value="<?php if(isset($inputs['password'])) echo $inputs['password'];?>" size="50" />
				<h5>Password Confirm</h5>
					<input class="form-group col-12" type="password" name="password2" value="<?php if(isset($inputs['password2'])) echo $inputs['password2'];?>" size="50" />
				<h5>No Telp</h5>
					<input class="form-group col-12" type="text" name="telp" value="<?php if(isset($inputs['telp'])) echo $inputs['telp'];?>" size="50" />
					<input type="hidden" name="status" value="<?php echo $inputs['status'] = "ENABLE";?>" />
				<div>
					<input type="submit" class="btn btn-primary" value="Submit" name="btnSubmit"/>
					<input type="button" class="btn btn-secondary" value="Cancel" onclick="location.href='login';" />
				</div>
			</form>
		</div>
	</div>
</div>