<?php 
	namespace App\Models;
	use CodeIgniter\Model;

	class BukuModel extends Model {

		protected $table = 'buku';
		protected $primaryKey = 'kd_buku';
		protected $allowedFields = ['kd_buku','judul_buku','text','text_singkat','penulis','penerbit','gambar'];
		
	}
?>