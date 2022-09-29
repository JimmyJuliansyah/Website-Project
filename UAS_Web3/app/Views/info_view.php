<div class="<?=$contain;?>" style="margin-bottom:70px;">
	<div class="row" style="padding:10px;">
		<div class="verti col-2">
			<ul>
			  <li><a href="beranda">Beranda</a></li>
			  <li><a href="gallery">Gallery</a></li>
			  <li><a href="tentang">Tentang Kami</a></li>
			</ul>
		</div>
		<?php 
			echo '<div class="col-10" style="border:solid; ">';
				echo '<h2 class="text-center mt-3">'.$info['judul_buku'].'</h2>';
				echo '<hr>';
					echo '<div class="row  mb-4" style="padding : 20px;">';
						echo '<div class="col-sm-8" >';
							echo '<p>'.$info['text'].'</p>';
						echo '</div>';
						echo '<div class="col-sm-4" style="padding:20px;" >';
							echo '<a href="http://localhost/UAS_Web3/public/image/buku/'.$info['gambar'].'"><img src="http://localhost/UAS_Web3/public/image/buku/'.$info['gambar'].'" style=" width:100%; height:auto;"></a>';
						echo '</div>';
					echo '</div>';
			echo '</div>';
		?>
	</div>
</div>

