<?php
	namespace App\Controllers;
	use App\Models\BukuModel;
	
	class beranda extends BaseController{
		
		public function index(){
			
			$buku = new BukuModel();
			$data['buku'] = $buku->findAll();
				
			
			$data['contain']='container-fluid';
			
			echo view('header_view', $data);
			echo view('beranda_view');
			echo view('footer_view');
		}
	}

?>