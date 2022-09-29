<?php
	namespace App\Controllers;
	
	use App\Models\UserModel;

class login extends BaseController{
	
	public function __construct(){
		$this->form_validation = \Config\Services::validation();
	}
	
	public function index(){
		if($this->request->getMethod()==='post'){
				$session = session();
				$email_user = $this->request->getPost('email');
				$password = $this->request->getPost('password');
				
				
					
				$user = new UserModel();
				
				$check = $user	->where('email_user',$email_user)
								->first();	

				if($check){
					$pass = $check['password'];
					if($password == $pass){
						$result = [
							'id_user' 		=> $check['id_user'],
							'nama_user'		=> $check['nama_user'],
							'email_user'	=> $check['email_user'],
							'telp_user'		=> $check['telp_user'],
							'status_user'	=> $check['status_user']
						];
								
						if($check['status_user'] == 'ENABLE'){
							$session->set($result);
							return redirect()->to('beranda');
						}elseif($check['status_user'] == 'ADMIN'){
							$session->set($result);
							return redirect()->to('admin');
						}else{
							echo '<script>alert("Your Account are DISABLE by Admin")</script>';
						}
					}else{
						echo '<script>alert("Your Email or Password is Wrong!")</script>';
					}


				}else{
					echo '<script>alert("Email Not Found!")</script>';
				}
										
				
				
			
		}
		
		$data['contain']='container';
		
		echo view('header_view', $data);
		echo view('login_view');
		echo view('footer_view');
	}
}

?>