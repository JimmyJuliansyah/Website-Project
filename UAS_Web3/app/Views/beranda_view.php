<div class="<?=$contain;?>" style="margin-bottom:70px;">
	<div class="row" style="padding:10px;">
		<div class="verti col-2">
			<ul>
			  <li><a href="beranda">Beranda</a></li>
			  <li><a href="gallery">Gallery</a></li>
			  <li><a href="tentang">Tentang Kami</a></li>
			</ul>
		</div>
		<div class="col-10" style="border:solid; ">
			<h2 class="text-center mt-3">Buku</h2>
			<hr>
			<div class="row">
			<?php 
				foreach($buku as $row){
					echo '<div class="card col-md-5 col-sm-6 mx-4 mb-4">';
						echo '<div class="row no-gutters">';
							echo '<div class="col-sm-5" style="margin-top:24px;">';
								echo '<img src="http://localhost/UAS_Web3/public/image/buku/'.$row['gambar'].'" class="card-img-top" >';
							echo '</div>';
							echo '<div class="col-sm-7">';
								echo '<div class="card-body">';
									echo '<h5 class="card-title">'.$row['judul_buku'].'</h5>';
									echo '<hr>';
									echo '<p class="card-text">'.$row['text_singkat'].'</p>';
									echo '<form action="info" method="post">';
										echo '<input type="hidden" name="info" value="'.$row['kd_buku'].'" />';
										echo '<input type="submit" class="btn btn-primary" value="Selengkapnya" />';
									echo '</form>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
			?>
			</div>
			
			
		</div>
	</div>
</div>