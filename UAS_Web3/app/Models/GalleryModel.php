<?php 
	namespace App\Models;
	use CodeIgniter\Model;

	class GalleryModel extends Model {

		protected $table = 'gallery';
		protected $primaryKey = 'kd_gambar';
		protected $allowedFields = ['kd_gambar','nama_gambar'];
		
	}
?>