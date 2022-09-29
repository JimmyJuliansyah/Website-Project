<div class="<?=$contain;?>" style="margin-bottom:70px;">
	<div class="row">
		<div class="col-12" style="border:solid; margin-top:24px;">
			<h2 class="text-center">User Registration</h2>
			<?php
					$errors = session()->getFlashData('error_update');
					$result = session()->getFlashData('success_update');
					$inputs = session()->getFlashData('input_update');
							
					
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

			
			
			<form class="justify-content-center" action="edit" method="post">
				<h5>Username</h5>
					<input class="form-group col-12" type="text" name="nama" value="<?=$_SESSION['nama_user']; ?>" size="50" />
				<h5>Email</h5>
					<input class="form-group col-12" type="email" name="email" value="<?=$_SESSION['email_user'];?>" size="50" />
				<h5>Password</h5>
					<input class="form-group col-12" type="password" name="password" value="<?php if(isset($inputs['password'])) echo $inputs['password'];?>" size="50" />
				<h5>No Telp</h5>
					<input class="form-group col-12" type="text" name="telp" value="<?=$_SESSION['telp_user'];?>" size="50" />
				<div>
					<input type="submit" class="btn btn-primary" value="Submit" name="btnEdit"/>
					<input type="button" class="btn btn-secondary" value="Cancel" onclick="location.href='profile';" />
				</div>
			</form>
		</div>
	</div>
</div>