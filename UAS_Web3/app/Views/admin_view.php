<div class="<?=$contain;?>" style="margin-bottom:70px;">
	<div class="row" style="padding:10px;">
		<div class="verti col-2">
			<ul>
			  <li><a href="<?=base_url('admin')?>">User Account</a></li>
			  <li><a href="<?=base_url('admin/buku')?>">Buku</a></li>
			  <li><a href="<?=base_url('admin/gallery')?>">Gallery</a></li>
			</ul>
		</div>
		<?php 
			if(isset($user)){
		?>
		<div class="col-10" style="border:solid; ">
			<h2 class="text-center mt-3">User Account</h2>
			<table id="myTable" class="table">
				<thead>
					<td>ID</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Password</td>
					<td>Telp</td>
					<td>Status</td>
					<td>Action</td>
				</thead>
				<?php
					foreach($user as $row){
						echo '<tr>';
							echo '<td>'.$row['id_user'].'</td>';
							echo '<td>'.$row['nama_user'].'</td>';
							echo '<td>'.$row['email_user'].'</td>';
							echo '<td>'.$row['password'].'</td>';
							echo '<td>'.$row['telp_user'].'</td>';
							echo '<td>'.$row['status_user'].'</td>';
							echo '<form action="admin" method="post">';
							echo '<input type="hidden" value="'.$row['id_user'].'" name="id" />';
							echo '<td><input type="submit" value="Edit" class="btn btn-success" name="editUser" /> <input 
							type="submit" value="Delete" class="btn btn btn-danger" name="deleteUser" /></td>';
							echo '</form>';
						echo '</tr>';
					}
				?>
			</table> 
		</div>
		<?php 
			}elseif(isset($buku)){
				
			
		?>
		<div class="col-10" style="border:solid; ">
			<h2 class="text-center mt-3">Buku</h2>
			<form action="buku" method="post">
				<input type="submit" name="addBuku" value="Tambah" class="btn btn-primary mb-3" />
			</form>
			<table id="myTable" class="table">
				<thead>
					<td>Kode</td>
					<td>Judul</td>
					<td>Text</td>
					<td>Text Singkat</td>
					<td>Penulis</td>
					<td>Penerbit</td>
					<td>Gambar</td>
					<td>Action</td>
				</thead>
				<?php
					foreach($buku as $row){
						echo '<tr>';
							echo '<td>'.$row['kd_buku'].'</td>';
							echo '<td>'.$row['judul_buku'].'</td>';
							echo '<td>'.$row['text'].'</td>';
							echo '<td>'.$row['text_singkat'].'</td>';
							echo '<td>'.$row['penulis'].'</td>';
							echo '<td>'.$row['penerbit'].'</td>';
							echo '<td>'.$row['gambar'].'</td>';
							echo '<form action="buku" method="post">';
							echo '<input type="hidden" value="'.$row['kd_buku'].'" name="kd" />';
							echo '<td><input type="submit" value="Edit" class="btn btn-success" name="editBuku" /> <input 
							type="submit" value="Delete" class="btn btn btn-danger" name="deleteBuku" /></td>';
							echo '</form>';
						echo '</tr>';
					}
				?>
			</table> 
		</div>
		<?php 
			}elseif($gallery){
		?>
			<div class="col-10" style="border:solid; ">
			<h2 class="text-center mt-3">Gallery</h2>
			<form action="gallery" method="post">
				<input type="submit" name="addGallery" value="Tambah" class="btn btn-primary mb-3" />
			</form>
			<table id="myTable" class="table">
				<thead>
					<td>No</td>
					<td>Gambar</td>
					<td>Action</td>
				</thead>
				<?php
					foreach($gallery as $row){
						echo '<tr>';
							echo '<td>'.$row['kd_gambar'].'</td>';
							echo '<td>'.$row['nama_gambar'].'</td>';
							echo '<form action="gallery" method="post">';
							echo '<input type="hidden" value="'.$row['kd_gambar'].'" name="kdG" />';
							echo '<td><input type="submit" value="Edit" class="btn btn-success" name="editGallery" /> <input 
							type="submit" value="Delete" class="btn btn btn-danger" name="deleteGallery" /></td>';
							echo '</form>';
						echo '</tr>';
					}
				?>
			</table> 
		</div>
		<?php 
			}
		?>
	</div>
</div>