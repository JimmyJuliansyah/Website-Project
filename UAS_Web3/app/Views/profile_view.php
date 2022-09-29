<div class="<?=$contain;?>" style="margin-bottom:70px;">
	<div class="row">
		<div class="col-12" style="border:solid; margin-top:24px;">
			<h2 class="text-center" style="margin-top:20px;">Profile</h2>
			<hr>
			<form class="justify-content-center" action="edit" method="post">
				<div class="container-fluid">
					<h5>Username : <?=$_SESSION['nama_user']?></h5>
					<h5>Email : <?=$_SESSION['email_user']?></h5>
					<h5>No Telp : <?=$_SESSION['telp_user']?></h5>
					<h5>Status : <?=$_SESSION['status_user']?></h5>
					<div>
						<input type="submit" class="btn btn-primary" value="Edit"/>
						<input type="button" class="btn btn-danger" value="Logout" onclick="location.href='<?=base_URL('logout')?>';" />
					</div>
				</div>
			</form>

		</div>
	</div>
</div>