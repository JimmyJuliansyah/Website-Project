<div class="<?=$contain;?>" style="margin-bottom:70px;">
	<div class="row" style="padding:10px;">
		<div class="verti col-2" style="">
			<ul>
			  <li><a href="beranda">Beranda</a></li>
			  <li><a href="gallery">Gallery</a></li>
			  <li><a href="tentang">Tentang Kami</a></li>
			</ul>
		</div>
		<div class="col-10" style="border:solid; ">
			<h2 class="text-center mt-3">Gallery</h2>
			<hr>
			<div class="row">
			<?php 
				foreach($gallery as $row){
					echo '<div class="col-sm-4 mb-4 ">';
						echo '<div class="row no-gutters">';
							echo '<a href="http://localhost/UAS_Web3/public/image/gallery/'.$row['nama_gambar'].'"><img src="http://localhost/UAS_Web3/public/image/gallery/'.$row['nama_gambar'].'" style=" width:100%; height:auto;"></a>';
						echo '</div>';
					echo '</div>';
				}
			?>
			</div>
		</div>
	</div>
</div>