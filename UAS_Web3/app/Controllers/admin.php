<?php
	namespace App\Controllers;
	
	use App\Models\UserModel;
	use App\Models\BukuModel;
	use App\Models\GalleryModel;
	
	class admin extends BaseController{
		public function index(){
			$session = session();
			$user = new UserModel();
			
			if($this->request->getMethod()==='post'){
				if($this->request->getVar('editUser') === 'Edit'){
					$data['contain']='container';
					$id = $this->request->getPost('id');
					
					$select = $user ->where('id_user',$id)
									->first();
									
					$session2 = [
						'id_user2' => $select['id_user'],
						'nama_user2' => $select['nama_user'],
						'email_user2' => $select['email_user'],
						'password2' => $select['password'],
						'telp_user2' => $select['telp_user'],
						'status_user2' => $select['status_user']
					];
									
					$session -> set($session2);
										
					echo view('header_view', $data);
					echo view('edit_admin_view');
					echo view('footer_view');
					
				}elseif($this->request->getVar('editUser2') === 'Submit'){
					$nama_user = $this->request->getPost('nama');
					$email_user = $this->request->getPost('email');
					$password = $this->request->getPost('password');
					$telp_user = $this->request->getPost('telp');
					$status_user = $this->request->getPost('status');
					
					$update2 = $user	->where('id_user',$_SESSION['id_user2'])
							->set('nama_user',$nama_user)
							->set('email_user',$email_user)
							->set('password',$password)
							->set('telp_user',$telp_user)
							->set('status_user',$status_user)
							->update();
					unset($_SESSION['id_user2']);
					return redirect()->to(base_url('admin'));

				}elseif($this->request->getVar('deleteUser') === 'Delete'){
					$id = $this->request->getPost('id');
					$user->where('id_user',$id)->delete();
			
					return redirect()->to(base_url('admin'));
					
				}elseif($this->request->getVar('backUser') === 'Cancel'){
					unset($_SESSION['id_user2']);
					return redirect()->to(base_url('admin'));
				
				}
			}else{
			
			$data['contain']='container-fluid';
			
			$data['user'] = $user->findAll();
			
			echo view('header_view', $data);
			echo view('admin_view');
			echo view('footer_view');
			}
		}
		
		public function buku(){
			
			$session = session();
			$buku = new BukuModel();
			
			if($this->request->getMethod()==='post'){
				if($this->request->getVar('addBuku') === 'Tambah'){
					$data['add']='buku';
					$data['contain']='container';
					
					echo view('header_view', $data);
					echo view('add_admin_view');
					echo view('footer_view');
					
				}elseif($this->request->getVar('addBuku2') === 'Submit'){
					$validated = $this->validate([
						'file' => 
							'uploaded[file]',
							'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
							'max_size[file,4096]',
					]);
					
					if($validated == FALSE){
						
					}else {
						$avatar = $this->request->getFile('file');
						$name = $avatar->getName();
						$avatar->move('./image/buku/');	
					}
					
					$insert = [
						'judul_buku' 	=> $this->request->getPost('judul'),
						'text'			=> $this->request->getPost('text'),
						'text_singkat'	=> $this->request->getPost('textsingkat'),
						'penulis'		=> $this->request->getPost('penulis'),
						'penerbit'		=> $this->request->getPost('penerbit'),
						'gambar'		=> $avatar->getName()
					];
					
					$buku->insert($insert);
					return redirect()->to(base_url('admin/buku'));
				
				}elseif($this->request->getVar('editBuku') === 'Edit'){				
					$data['contain']='container';
					$kd = $this->request->getPost('kd');
					$select = $buku ->where('kd_buku',$kd)
									->first();			
					
					$session3 = [
						'kd_buku' => $select['kd_buku'],
						'judul_buku' => $select['judul_buku'],
						'text' => $select['text'],
						'text_singkat' => $select['text_singkat'],
						'penulis' => $select['penulis'],
						'penerbit' => $select['penerbit'],
						'gambar'=>$select['gambar']
					];
					
					$session -> set($session3);	
					
					echo view('header_view', $data);
					echo view('edit_admin_view');
					echo view('footer_view');
					
				}elseif($this->request->getVar('editBuku2') === 'Submit'){	
					
					$validated = $this->validate([
						'file' => 
							'uploaded[file]',
							'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
							'max_size[file,4096]',
					]);					
					
					if($validated == FALSE){
						$name = $_SESSION['gambar'];
					}else {
						$avatar = $this->request->getFile('file');
						$name = $avatar->getName();
						$avatar->move('./image/buku/');	
					}
					
					$judul_buku = $this->request->getPost('judul');
					$text = $this->request->getPost('text');
					$text_singkat = $this->request->getPost('textsingkat');
					$penulis = $this->request->getPost('penulis');
					$penerbit = $this->request->getPost('penerbit');
					
					$update2 = $buku	->where('kd_buku',$_SESSION['kd_buku'])
							->set('judul_buku',$judul_buku)
							->set('text',$text)
							->set('text_singkat',$text_singkat)
							->set('penulis',$penulis)
							->set('penerbit',$penerbit)
							->set('gambar',$name)
							->update();
					if($update2){		
						unset($_SESSION['kd_buku']);
					}
					return redirect()->to(base_url('admin/buku'));
				
				}elseif($this->request->getVar('deleteBuku') === 'Delete'){
					$kd = $this->request->getPost('kd');
					$buku->where('kd_buku',$kd)->delete();
					
					return redirect()->to(base_url('admin/buku'));
				
				}elseif($this->request->getVar('backBuku') === 'Cancel'){
					unset($_SESSION['kd_buku']);
					return redirect()->to(base_url('admin/buku'));
				
				}
			}else{
				
				$data['contain']='container-fluid';				
				$data['buku'] = $buku->findAll();
				
				echo view('header_view', $data);
				echo view('admin_view');
				echo view('footer_view');
			}
		}
		
		public function gallery(){
			$session = session();
			$gallery = new GalleryModel();
			
			if($this->request->getMethod()==='post'){
				if($this->request->getVar('addGallery') === 'Tambah'){
					$data['add']='gallery';
					$data['contain']='container';
					
					echo view('header_view', $data);
					echo view('add_admin_view');
					echo view('footer_view');
					
				}elseif($this->request->getVar('addGallery2') === 'Submit'){
					$validated = $this->validate([
						'file' => 
							'uploaded[file]',
							'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
							'max_size[file,4096]',
					]);
					
					if($validated == FALSE){
						return redirect()->to(base_url('admin/gallery'));
					}else {
						$avatar = $this->request->getFile('file');
						$gambar = $avatar->getName();
						$avatar->move('./image/gallery/');	
							
						$insert = [
							'nama_gambar'=> $gambar
						];
						
						$gallery->insert($insert);
						return redirect()->to(base_url('admin/gallery'));
					}
				
				}elseif($this->request->getVar('editGallery') === 'Edit'){				
					$data['contain']='container';
					$kd = $this->request->getPost('kdG');
					$select = $gallery ->where('kd_gambar',$kd)
									->first();			
					
					$session4 = [
						'kd_gambar' => $select['kd_gambar'],
						'nama_gambar'=>$select['nama_gambar']
					];
					
					$session -> set($session4);	
					
					echo view('header_view', $data);
					echo view('edit_admin_view');
					echo view('footer_view');
					
				}else if($this->request->getVar('editGallery2') === 'Submit'){	
					$validated = $this->validate([
						'file' => 
							'uploaded[file]',
							'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
							'max_size[file,4096]',
					]);					
					
					if($validated == FALSE){
						$name = $_SESSION['nama_gambar'];
					}else {
						$avatar = $this->request->getFile('file');
						$name = $avatar->getName();
						$avatar->move('./image/gallery/');	
					}
					
					$updategallery = $gallery	->where('kd_gambar',$_SESSION['kd_gambar'])
												->set('nama_gambar',$name)
												->update();
								
					if($updategallery){	
						unset($_SESSION['kd_gambar']);
					}
					
					return redirect()->to(base_url('admin/gallery'));
				}else if($this->request->getVar('deleteGallery') === 'Delete'){
					$kd = $this->request->getPost('kdG');
					$gallery->where('kd_gambar',$kd)->delete();
					
					return redirect()->to(base_url('admin/gallery'));
				
				}elseif($this->request->getVar('backGallery') === 'Cancel'){
					unset($_SESSION['kd_gambar']);
					return redirect()->to(base_url('admin/gallery'));
				
				}
			}else{
				$data['contain']='container-fluid';
				
				$data['gallery'] = $gallery->findAll();
				
				echo view('header_view', $data);
				echo view('admin_view');
				echo view('footer_view');
			}
		}
	}
?>