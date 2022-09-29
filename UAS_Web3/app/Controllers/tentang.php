<?php
	namespace App\Controllers;
	
	class tentang extends BaseController{
		
		public function index(){
			
			$data['contain']='container-fluid';
			
			echo view('header_view', $data);
			echo view('tentang_view');
			echo view('footer_view');
		}
	}

?>