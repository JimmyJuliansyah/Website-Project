<?php
	namespace App\Controllers;
	
	class profile extends BaseController{
		
		public function index(){
			
			$session = session();
			
			$data['contain']='container';
			
			echo view('header_view', $data);
			echo view('profile_view');
			echo view('footer_view');
		}
	}

?>