<?php
	namespace App\Controllers;
	use App\Models\UserModel;
	
class Registrasi extends BaseController{
	
	public function __construct(){
		$this->form_validation = \Config\Services::validation();
	}
	
	public function index(){
		
		session()->setFlashData('error_regis', '');
		session()->setFlashData('success_regis', '');
		
		if($this->request->getMethod()==='post'){
			
			session()->setFlashdata('input_regis', $this->request->getPost());
			
			if($this->request->getVar('btnSubmit') === 'Submit'){
				$dataAccount = [
					'nama' => strip_tags($this->request->getPost('nama')),
					'email' => strip_tags($this->request->getPost('email')),
					'password' => strip_tags($this->request->getPost('password')),
					'password2' => strip_tags($this->request->getPost('password2')),
					'telp' => strip_tags($this->request->getPost('telp')),
					'status' => strip_tags($this->request->getPost('status'))
				];
				
				if($this->form_validation->run($dataAccount, 'register') == FALSE){
					session()->setFlashdata('error_regis', $this->form_validation->getErrors());
				} else {
					session()->setFlashdata('success_regis', 'Registration successfully.');
					
					$insert = new UserModel();
					
					
					$data = [
								'nama_user' => $this->request->getPost('nama'),
								'email_user' => $this->request->getPost('email'),
								'password'  => $this->request->getPost('password'),
								'telp_user'  => $this->request->getPost('telp'),
								'status_user' => $this->request->getPost('status')
							];
							
					$sql = $insert->Insert($data);
					return redirect()->to('login');
						
				}
				
			}
			
		}
		
		$data['contain']='container';
		
		echo view('header_view', $data);
		echo view('registrasi_view');
		echo view('footer_view');
	}
}

?>