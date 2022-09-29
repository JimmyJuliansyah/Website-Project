<?php 
	namespace App\Models;
	use CodeIgniter\Model;

	class UserModel extends Model {

		protected $table = 'users';
		protected $primaryKey = 'id_user';
		protected $allowedFields = ['id_user','nama_user','email_user','password','telp_user','status_user'];
		
	}
?>