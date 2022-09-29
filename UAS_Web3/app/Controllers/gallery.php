<?php
	namespace App\Controllers;
	use App\Models\GalleryModel;
	
	class gallery extends BaseController{
		
		public function index(){
			
			
			$gallery = new GalleryModel();
			$data['gallery'] = $gallery->findAll();
			
			$data['contain']='container-fluid';
			
			echo view('header_view', $data);
			echo view('gallery_view');
			echo view('footer_view');
		}
	}

?>