<?php
	namespace App\Controllers;
	use App\Models\BukuModel;
	
	class info extends BaseController{
		
		public function index(){
			if($this->request->getMethod()==='post'){
				$kd_buku = $this->request->getPost('info');
			}
			$buku = new BukuModel();
			$data['info'] = $buku	->where('kd_buku',$kd_buku)
									->first();
			
			$data['contain']='container-fluid';
			
			echo view('header_view', $data);
			echo view('info_view');
			echo view('footer_view');
		}
	}

?>