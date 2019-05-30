<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//

	class Admin_models extends CI_Model
	{
		public function getlogin($username, $password)
		{
			$password 	= md5($password);
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$querry 	= $this->db->get('admin');
			if($querry->num_rows()>0)
				{
					foreach ($querry->result() as $row) 
					{
						$sess = array('username' => $row->username,
									  'password' => $row->password);
						$this->session->set_userdata($sess);
						$level = $row->level;
						$this->session->set_flashdata('info', 'login sukses');
						redirect('admin/home/'.$level);
					}
				}else 
					{
						$this->session->set_flashdata('info', 'username dan password salah');
						redirect('admin');
					} 

		}

		public function get_heading()
		{
			$this->db->select('*');
			$this->db->from('heading');
			return $this->db->get();
		}

		public function update_heading($deskripsi, $title, $id)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title
						   );
			$this->db->where('id', $id);
			$this->db->update('heading', $data);
		}

		public function edit_background($nama_file, $id)
		{
			$data= array('background' => $nama_file);
			$this->db->where('id', $id);
			$this->db->update('heading',$data);
		}

		public function update_des1($deskripsi, $title, $id)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title
						   );
			$this->db->update('deskripsi1', $data);
		}

		public function edit_gambar_des1($nama_file)
		{
			$data= array('gambar' => $nama_file);
			$this->db->update('deskripsi1',$data);
		}

		public function get_work()
		{
			$this->db->select('*');
			$this->db->from('work');
			return $this->db->get();
		}

		public function update_work($deskripsi, $title, $id, $gambar)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title,
						  'gambar' 		=> $gambar
						   );
			$this->db->where('id', $id);
			$this->db->update('work', $data);

		}
		public function edit_gambar_work($nama_file, $id)
		{
			$data = array('gambar'	=> $nama_file );
			$this->db->where('id', $id);
			$this->db->update('work', $data);
		}

		public function update_work_h($deskripsi, $title, $id)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title
						   );
			$this->db->update('work_h', $data);
		}

		public function update_des2($deskripsi, $title, $id)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title
						   );
			$this->db->update('deksripsi2', $data);
		}

		public function edit_gambar_des2($nama_file)
		{
			$data= array('gambar' => $nama_file);
			$this->db->update('deksripsi2',$data);
		}

		public function get_product()
		{
			$this->db->select('*');
			$this->db->from('product');
			return $this->db->get();
		}

		public function update_product_h($deskripsi, $title, $id)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title
						   );
			$this->db->update('product_h', $data);
		}

		public function add_product($nama_file, $title, $deskripsi)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title,
						  'gambar'		=> $nama_file
						   );
			$this->db->insert('product', $data);
		}

		public function edit_product_p($deskripsi, $title, $price,  $id)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title,
						  'price'		=> $price
						   );
			$this->db->where('id', $id);
			$this->db->update('product', $data);
		}

		public function edit_img_product($nama_file, $id)
		{
			$data = array('gambar'	=> $nama_file);
			$this->db->where('id', $id);
			$this->db->update('product', $data);
		}

		public function del_product($id)
		{
			$this->db->where('id',$id);
			return $this->db->delete('product');
		}

		public function get_faq()
		{
			$this->db->select('*');
			$this->db->from('faq');
			return $this->db->get();
		}

		public function add_faq($question, $answer)
		{
			$data = array('question'	=> $question ,
						  'answer'		=> $answer
						   );
			$this->db->insert('faq', $data);
		}

		public function update_faq($question, $answer, $id)
		{
			$data = array('question'	=> $question ,
						  'answer'		=> $answer
						   );
			$this->db->where('id', $id);
			$this->db->update('faq', $data);
		}

		public function del_faq($id)
		{
			$this->db->where('id',$id);
			return $this->db->delete('faq');
		}

		public function get_partners()
		{
			$this->db->select('*');
			$this->db->from('partners');
			return $this->db->get();
		}

		public function add_partners($nama_file, $deskripsi)
		{
			$data = array('gambar'		=> $nama_file ,
						  'deskripsi'	=> $deskripsi
						   );
			$this->db->insert('partners', $data);
		}

		public function del_partners($id)
		{
			$this->db->where('id',$id);
			return $this->db->delete('partners');
		}

		public function get_article()
		{
			$this->db->select('*');
			$this->db->from('article');
			return $this->db->get();
		}

		public function get_catagori()
		{
			$this->db->select('*');
			$this->db->from('catagori');
			return $this->db->get();
		}

		public function add_article($nama_file, $catagori, $judul, $isi, $keywords, $description, $author, $tanggal)
		{
			$jumlah_kometar = 0;
			$table = array('foto' 			=> $nama_file ,
							'catagori'		=> $catagori,
							'judul'			=> $judul,
							'isi'			=> $isi,
							'keywords'		=> $keywords,
							'description'	=> $description,
							'author'		=> $author,
							'tanggal'		=> $tanggal,
							'jumlah_komentar'=> $jumlah_kometar );
			$this->db->insert('article', $table);

		}

		public function update_article($catagori, $judul, $isi, $id, $keywords, $description)
		{
			$table = array(	'catagori'		=> $catagori,
							'judul'			=> $judul,
							'isi'			=> $isi,
							'keywords'		=> $keywords,
							'description'	=> $description );
			$this->db->where('id', $id);
			$this->db->update('article', $table);

		}

		public function update_img_article($nama_file, $id)
		{
			$table = array(	'foto'		=> $nama_file);
			$this->db->where('id', $id);
			$this->db->update('article', $table);
		}

		public function del_article($id)
		{
			$this->db->where('id',$id);
			return $this->db->delete('article');
		}

		public function add_catagori($catagori)
		{
			$table = array(	'catagori'		=> $catagori);
			$this->db->insert('catagori', $table);
		}

		public function del_catagori($id)
		{
			$this->db->where('id',$id);
			return $this->db->delete('catagori');
		}


		public function jumlah_article()
		{
			$query = $this->db->query('SELECT * FROM article');
			$total = $query->num_rows();
			return $total;
		}

	
		public function get_pesan()
		{
			$this->db->select('*');
			$this->db->from('pesan');
			return $this->db->get();

		}

		public function get_orderan()
		{
			$this->db->select('*');
			$this->db->from('orderan');
			return $this->db->get();
		}

		public function del_pesan($id)
		{
			$this->db->where('id',$id);
			return $this->db->delete('pesan');
		}

		public function del_orderan($id)
		{
			if($this->db->get_where('orderan', array('id' => $id)))
				{
					$orderan 		= $this->db->get_where('orderan', array('id' => $id))->row();
					$member			= $orderan->member;
					$member_tb		= $this->db->get_where('member', array('username' => $member))->row();
					$jumlah 		= $member_tb->jumlah;

					$kurang 	= $jumlah-1;
					$kurang2 	= array('jumlah' => $kurang);
					$this->db->where('username', $member);
					$this->db->update('member', $kurang2);
				}
			
			$this->db->where('id',$id);
			return $this->db->delete('orderan');
		}

		public function jumlah_pesan()
		{
			$query = $this->db->query('SELECT * FROM orderan');
			$total = $query->num_rows();
			return $total;
		}

		public function get_mockup_des()
		{
			$this->db->select('*');
			$this->db->from('mockup_des');
			return $this->db->get();
		}

		public function get_mockup_ex()
		{
			$this->db->select('*');
			$this->db->from('app_screenshoot');
			return $this->db->get();
		}

		public function get_link()
		{
			$this->db->select('*');
			$this->db->from('download');
			return $this->db->get();
		}

		public function update_mockup($judul, $deskripsi, $id)
		{
			$table = array(	'judul'		=> $judul,
							'deskripsi'	=> $deskripsi
							 );
			$this->db->where('id', $id);
			$this->db->update('mockup', $table);
		}

		public function edit_gambar_mockup($nama_file)
		{
			$table = array(	'gambar'	=> $nama_file );
			$this->db->update('mockup', $table);
		}

		public function update_mockup_des($icon, $judul, $deskripsi, $id)
		{
			$table = array(	'icon'		=> $icon,
							'judul'		=> $judul,
							'deskripsi'	=> $deskripsi
							 );
			$this->db->where('id', $id);
			$this->db->update('mockup_des', $table);
		}

		public function edit_exmp_pro($nama_file, $id)
		{
			$table = array(	'gambar'	=> $nama_file );
			$this->db->where('id', $id);
			$this->db->update('app_screenshoot', $table);
		}

		public function edit_link_pro($nama, $link, $id)
		{
			$table = array(	'nama'		=> $nama,
							'link'		=> $link
							 );
			$this->db->where('id', $id);
			$this->db->update('download', $table);
		}

		public function insert_slideshow($nama_file, $title, $deskripsi)
		{
			$data= array(
			'background'	=> $nama_file,
			'title'			=> $title,
			'deskripsi'		=> $deskripsi
			);
			return $this->db->insert('heading',$data);
		}

		public function del_slideshow($id)
		{
			$this->db->where('id',$id);
			return $this->db->delete('heading');
		}

		public function get_member()
		{
			$this->db->select('*');
			$this->db->from('member');
			return $this->db->get();
		}

		public function add_member($nama_file, $nama, $hp, $email, $alamat, $usernn, $password, $level, $tgl, $uniq)
		{
			if($this->db->get_where('member', array('username' => $usernn))->row())
				{
					$this->session->set_flashdata('info','username sudah digunakan');
					redirect('admin/tb_member');
				}
					else{
							if($this->db->get_where('member', array('email' => $email))->row())
								{
									  $this->session->set_flashdata('info','Email sudah digunakan');
									 redirect('admin/tb_member');		
								}
								
						
							else
								{
									$data = array(	'foto' 		=>$nama_file ,
													'nama'		=>$nama ,
													'hp'		=>$hp ,
													'email'		=>$email ,
													'alamat'	=>$alamat ,
													'username'	=>$usernn ,
													'password'	=>$password ,
													'level'		=>$level ,
													'tgl'		=>$tgl ,
													'uniq'		=>$uniq );
									return $this->db->insert('member',$data);
								}
						}
		}

		public function update_member($nama, $hp, $email, $alamat, $usernn, $password, $id)
		{
				$data = array(	
								'nama'		=>$nama ,
								'hp'		=>$hp ,
								'email'		=>$email ,
								'alamat'	=>$alamat ,
								'username'	=>$usernn ,
								'password'	=>$password 
								 );
				$this->db->where('id', $id);
				$this->db->update('member', $data);



		}

		public function edit_member_foto($nama_file, $id)
		{
			$data = array('foto'		=>$nama_file);
			$this->db->where('id', $id);
			$this->db->update('member', $data);

		}

		public function del_member($id)
		{
			$this->db->where('id',$id);
			return $this->db->delete('member');
		}

		public function getlogin_member($username, $password)
		{
			$password 	= md5($password);
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$querry 	= $this->db->get('member');
			if($querry->num_rows()>0)
				{
					foreach ($querry->result() as $row) 
					{
						$sess = array('username' => $row->username,
									  'password' => $row->password);
						$this->session->set_userdata($sess);
						$uniq	= $row->uniq;
						$this->session->set_flashdata('info', 'login sukses');
						redirect('member/home/'.$username.'/'.$uniq);
					}
				}else 
					{
						$this->session->set_flashdata('info', 'username dan password salah');
						redirect('admin');
					} 

		}

	


	}