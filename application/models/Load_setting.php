<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Load_setting extends CI_Model
	{
		
		public function update_username($nama, $username, $password)
		{
			$pass = md5($password);
			$data =  array('nama'=>$nama, 'username'=>$username, 'password'=>$pass);
			return $this->db->update('admin', $data);
		}

		public function edit_setting_img($nama_file)
		{
			$data= array('foto' => $nama_file);
			$this->db->update('admin',$data);
		}

		public function edit_tab1($facebook, $instagram, $twitter)
		{
			$data = array('facebook' => $facebook ,
						  'instagram' => $instagram,
						  'twitter'  => $twitter );
			$this->db->update('info', $data);
		}

		public function edit_tab2($alamat, $title, $hp, $email, $no_rekening,$pesan_invoice,$pesan_vertifikasi, $id_provinsi, $id_kota)
		{
			$data = array('alamat' 		=> $alamat ,
						  'title'		=> $title,
						  'hp' 			=> $hp,
						  'email'		=> $email,
						  'no_rekening'	=> $no_rekening,
						  'pesan_invoice'		=> $pesan_invoice,
						  'pesan_vertifikasi' 	=> $pesan_vertifikasi,
						  'id_provinsi' =>$id_provinsi,
						  'id_kota' 	=>$id_kota
						 );
			$this->db->update('info', $data);
		}

		public function edit_tab3($copy_right)
		{
			$data = array('copy_right' 		=> $copy_right );
			$this->db->update('info', $data);
		}

		public function edit_tab4($description, $keywords, $author, $tag)
		{
			$data = array('description' => $description,
							'keywords'	=> $keywords,
							'author'	=> $author,
							'tag'		=> $tag 
						);
			$this->db->update('seo', $data);
		}

		public function ganti_logo($nama_file)
		{
			$data= array('logo' => $nama_file);
			$this->db->update('info',$data);
		}
		public function ganti_logo_browser($nama_file)
		{
			$data= array('logo_browser' => $nama_file);
			$this->db->update('info',$data);
		}

	}