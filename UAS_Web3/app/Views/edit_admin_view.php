<div class="<?=$contain;?>" style="margin-bottom:70px;">
	<div class="row">
		<div class="col-12" style="border:solid; margin-top:24px;">
<?php 
			if(isset($_SESSION['id_user2'])){
?>
			<h2 class="text-center">Edit User</h2>			
			<form class="justify-content-center" action="admin" method="post">
				<h5>Username</h5>
					<input class="form-group col-12" type="text" name="nama" value="<?=$_SESSION['nama_user2']; ?>" size="50" required />
				<h5>Email</h5>
					<input class="form-group col-12" type="email" name="email" value="<?=$_SESSION['email_user2'];?>" size="50" required />
				<h5>Password</h5>
					<input class="form-group col-12" type="password" name="password" value="<?=$_SESSION['password2'];?>" size="50" required />
				<h5>No Telp</h5>
					<input class="form-group col-12" type="text" name="telp" value="<?=$_SESSION['telp_user2'];?>" size="50" />
				
<?php 
					if($_SESSION['status_user2']=='ADMIN'){
						echo '<input type="hidden" value="ADMIN" name="status" />';
					}else{
?>
					<h5>Status</h5>
					<select name="status" style="margin-bottom:24px;">
						<option value="ENABLE">Enable</option>
						<option value="DISABLE">Disable</option>
					</select>
<?php
					}
?>
				<div>
					<input type="submit" class="btn btn-primary" value="Submit" name="editUser2"/>
					<input type="submit" class="btn btn-secondary" value="Cancel" name="backUser"/>
				</div>
			</form>
<?php 
			}elseif(isset($_SESSION['kd_buku'])){
?>	
				<h2 class="text-center">Edit Buku</h2>			
				<form class="justify-content-center" action="buku" method="post" enctype="multipart/form-data">
					<h5>Judul Buku</h5>
						<input class="form-group col-12" type="text" name="judul" value="<?=$_SESSION['judul_buku']; ?>" size="50" required />
					<h5>Text</h5>
						<input class="form-group col-12" type="text" name="text" value="<?=$_SESSION['text'];?>" size="50" required />
					<h5>Text Singkat</h5>
						<input class="form-group col-12" type="text" name="textsingkat" value="<?=$_SESSION['text_singkat'];?>" size="50" required />
					<h5>penulis</h5>
						<input class="form-group col-12" type="text" name="penulis" value="<?=$_SESSION['penulis'];?>" size="50" required />
					<h5>penerbit</h5>
						<input class="form-group col-12" type="text" name="penerbit" value="<?=$_SESSION['penerbit'];?>" size="50" required />
					<h5>Masukan Gambar</h5>	
						<input type="file" name="file" class="form-control" id="file" />
						
					<div>
						<input type="submit" class="btn btn-primary" value="Submit" name="editBuku2"/>
						<input type="submit" class="btn btn-secondary" value="Cancel" name="backBuku"/>
					</div>
				</form>
<?php	
			}elseif(isset($_SESSION['kd_gambar'])){
?>
				<h2 class="text-center">Edit Gambar</h2>			
				<form class="justify-content-center" action="gallery" method="post" enctype="multipart/form-data">
					<h5>Masukan Gambar</h5>	
						<input type="file" name="file" class="form-control" id="file" />
						
					<div>
						<input type="submit" class="btn btn-primary" value="Submit" name="editGallery2"/>
						<input type="submit" class="btn btn-secondary" value="Cancel" name="backGallery"/>
					</div>
				</form>
<?php
			}
?>
		</div>
	</div>
</div>