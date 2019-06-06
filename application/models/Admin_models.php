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

	

		public function get_orderan()
		{
			$this->db->select('*');
			$this->db->from('orderan');
			$this->db->order_by('id','DESC');
			return $this->db->get();
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

		public function jumlah_orderan()
		{
			$query = $this->db->query('SELECT * FROM orderan');
			$total = $query->num_rows();
			return $total;
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

		public function update_status_order($data)
		{
			$tb = array('status'=>$data['status']);
			$this->db->where('id',$data['id']);
			$this->db->update('orderan',$tb);
		}
	


	}