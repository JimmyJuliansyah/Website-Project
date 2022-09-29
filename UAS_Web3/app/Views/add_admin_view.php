<div class="<?=$contain;?>" style="margin-bottom:70px;">
	<div class="row">
		<div class="col-12" style="border:solid; margin-top:24px;">
<?php 
			if($add == "buku"){
?>
				<h2 class="text-center">Tambah Buku</h2>			
				<form class="justify-content-center" action="buku" method="post" enctype="multipart/form-data">
					<h5>Judul Buku</h5>
						<input class="form-group col-12" type="text" name="judul" size="50" required />
					<h5>Text</h5>
						<input class="form-group col-12" type="text" name="text" size="50" required />
					<h5>Text Singkat</h5>
						<input class="form-group col-12" type="text" name="textsingkat" size="50" required />
					<h5>Penulis</h5>
						<input class="form-group col-12" type="text" name="penulis" size="50" required />
					<h5>Penerbit</h5>
						<input class="form-group col-12" type="text" name="penerbit" size="50" required />
					<h5>Masukan Gambar</h5>	
						<input type="file" name="file" class="form-control" id="file" required />
						
					<div>
						<input type="submit" class="btn btn-primary" value="Submit" name="addBuku2"/>
						<input type="button" class="btn btn-secondary" value="Cancel" onclick="location.href='<?=base_URL('admin/buku')?>';" />
					</div>
				</form>
<?php	
			}else if($add == "gallery"){
?>
				<h2 class="text-center">Tambah Gallery</h2>			
				<form class="justify-content-center" action="gallery" method="post" enctype="multipart/form-data">
					<h5>Masukan Gambar</h5>	
						<input type="file" name="file" class="form-control" id="file" required />
						
					<div>
						<input type="submit" class="btn btn-primary" value="Submit" name="addGallery2"/>
						<input type="button" class="btn btn-secondary" value="Cancel" onclick="location.href='<?=base_URL('admin/gallery')?>';" />
					</div>
				</form>
<?php	
			}
?>
		</div>
	</div>
</div>