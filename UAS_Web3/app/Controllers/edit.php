<?php
	namespace App\Controllers;
	
	use App\Models\UserModel;

class edit extends BaseController{
	
	public function __construct(){
		$this->form_validation = \Config\Services::validation();
	}
	
	public function index(){
		$session = session();
		
		session()->setFlashData('error_update', '');
		session()->setFlashData('success_update', '');
		
		if($this->request->getMethod()==='post'){
			
				session()->setFlashdata('input_update', $this->request->getPost());
				
				if($this->request->getVar('btnEdit') === 'Submit'){
					$updateAccount = [
						'nama' => strip_tags($this->request->getPost('nama')),
						'email' => strip_tags($this->request->getPost('email')),
						'password' => strip_tags($this->request->getPost('password')),
						'telp' => strip_tags($this->request->getPost('telp'))
					];
					
					if($this->form_validation->run($updateAccount, 'update') == FALSE){
						session()->setFlashdata('error_update', $this->form_validation->getErrors());
					} else {
						$nama_user = $this->request->getPost('nama');
						$email_user = $this->request->getPost('email');
						$password = $this->request->getPost('password');
						$telp_user = $this->request->getPost('telp');				
						
							
						$user = new UserModel();
						
						$update = $user	->where('id_user',$_SESSION['id_user'])
										->set('nama_user',$nama_user)
										->set('email_user',$email_user)
										->set('password',$password)
										->set('telp_user',$telp_user)
										->update();	
						
						if($update){
							$data = $user	->where('id_user',$_SESSION['id_user'])
											->first();	
							
							if($data){
							$result = [
									'id_user' 		=> $data['id_user'],
									'nama_user'		=> $data['nama_user'],
									'email_user'	=> $data['email_user'],
									'telp_user'		=> $data['telp_user'],
									'status_user'	=> $data['status_user']
								];
										
									$session->set($result);
									return redirect()->to('profile');
							}
						}
						
						session()->setFlashdata('success_update', 'update successfully.');
						
					}
				}
				
		}
		
		$data['contain']='container';
		
		echo view('header_view', $data);
		echo view('edit_view');
		echo view('footer_view');
	}
}

?>