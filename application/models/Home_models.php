<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// ---------------------------------------------Halaman Home------------ -----------------------------------------------------------//

	class Home_models extends CI_Model
	{
		public function get_faq()
		{
			$this->db->select('*');
			$this->db->from('faq');
			return $this->db->get();
		}

		public function pagination($start, $perpage)
		{
			$this->db->select('*');
			$this->db->from('article');
			$this->db->order_by('id','desc');
			$this->db->limit($perpage, $start);
			return $this->db->get();
		}

		public function total_list()
		{
			$this->db->select('*');
			$this->db->from('article');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}

		public function article_populer()
		{
			$this->db->select('*');
			$this->db->from('article');
			$this->db->order_by('jumlah_komentar','desc');
			$this->db->limit(6);
			return $this->db->get();
		}

		public function get_catagori()
		{
			$this->db->select('*');
			$this->db->from('catagori');
			return $this->db->get();
		}

		public function pagination_catagori($start, $perpage, $catagori)
		{
			$this->db->select('*');
			$this->db->from('article');
			$this->db->where('catagori', $catagori);
			$this->db->order_by('id','desc');
			$this->db->limit($perpage, $start);
			return $this->db->get();
		}

		public function add_komentar($nama, $email, $isi, $id_forum, $judul, $foto_user, $waktu)
		{
			$table = array('nama' 		=>$nama ,
							'email'		=>$email,
							'isi'		=>$isi,
							'id_forum'	=>$id_forum,
							'foto_user'	=>$foto_user,
							'waktu'		=>$waktu
							 );
			if($this->db->get_where('article', array('id' => $id_forum)))
				{
					$coba 		= $this->db->get_where('article', array('id' => $id_forum))->row();
					$test		= $coba->jumlah_komentar;

					$tambah 	= $test+1;
					$tambah2 	= array('jumlah_komentar' => $tambah);
					$this->db->where('id', $id_forum);
					$this->db->update('article', $tambah2);
				}
			$this->db->insert('komentar', $table);
		}

		public function get_komentar($id)
		{
			$this->db->select('*');
			$this->db->from('komentar');
			$this->db->where('id_forum',$id);
			return $this->db->get();
		}

		public function kirim_pesan($nama, $email, $hp, $company, $pesan, $waktu)
		{
			$table = array('nama' 		=> $nama,
							'email'		=> $email,
							'hp'		=> $hp,
							'company'	=> $company,
							'pesan'		=> $pesan,
							'waktu'		=> $waktu );
			$this->db->insert('pesan', $table);
		}

		public function get_contoh()
		{
			$this->db->select('*');
			$this->db->from('app_screenshoot');
			return $this->db->get();
		}

		public function get_gambar()
		{
			$this->db->select('*');
			$this->db->from('heading');
			return $this->db->get();
		}

		public function get_event()
		{
			$this->db->select('*');
			$this->db->from('article');
			$this->db->order_by('id','desc');
			$this->db->limit(3);
			return $this->db->get();
		}

		public function kirim_order($nama, $email, $hp, $orderan, $detail, $waktu)
		{
			$table = array('nama' 		=> $nama,
							'email'		=> $email,
							'hp'		=> $hp,
							'orderan'	=> $orderan,
							'detail'	=> $detail,
							'waktu'		=> $waktu );
			$this->db->insert('orderan', $table);
		}

		public function send_email($nama, $email, $hp, $orderan, $detail, $waktu)
		{
				$ci = get_instance();
				$config['protocol'] = "smtp";
				$config['smtp_host'] = "mail.customboxid.com";
				$config['smtp_port'] = "25";
				$config['smtp_user'] = "sales@starcompro.com";
				$config['smtp_pass'] = "";
				$config['charset'] = "utf-8";
				$config['mailtype'] = "html";
				$config['newline'] = "\r\n";
				$ci->email->initialize($config);
				$ci->email->from($email);
				$list = array('sales@starcompro.com');
				$ci->email->to($list);
				$ci->email->subject($orderan.' '.$hp.' '.$nama);
				$ci->email->message($detail);

				if ($this->email->send())
				 {
					$this->session->set_flashdata('info', 'Hallo '.$nama.' Tunggu tim kami untuk menghubungi dan memproses pesanan anda!');
					redirect('home/success');
					} else 
						{
						show_error($this->email->print_debugger());
						}
		}

		public function kirim_order_member($nama, $email, $hp, $orderan, $detail, $waktu, $member)
		{
			if($this->db->get_where('orderan', array('email' => $email))->row())
				{
					  $this->session->set_flashdata('info','no email sudah terdaftar');
					 redirect('home/error_page/');		
				}
				
		
			else
				{
					$table = array('nama' 		=> $nama,
									'email'		=> $email,
									'hp'		=> $hp,
									'orderan'	=> $orderan,
									'detail'	=> $detail,
									'waktu'		=> $waktu,
									'member'	=> $member );
					$this->db->insert('orderan', $table);
				}

			if($this->db->get_where('member', array('username' => $member))->row())
				{
					$grafik 	  = $this->db->get_where('member', array('username' => $member))->row();
					$sebelum 	  = $grafik->jumlah;
					$tambah 	  = $sebelum+1;
					$table	  	  = array('jumlah'=> $tambah);
					$this->db->where('username', $member);
					$this->db->update('member', $table);

				}

		}

		public function send_email_member($nama, $email, $hp, $orderan, $detail, $waktu, $email_member)		
		{
			$ci = get_instance();
				$config['protocol'] = "smtp";
				$config['smtp_host'] = "mail.starcompro.com";
				$config['smtp_port'] = "25";
				$config['smtp_user'] = "sales@starcompro.com";
				$config['smtp_pass'] = "";
				$config['charset'] = "utf-8";
				$config['mailtype'] = "html";
				$config['newline'] = "\r\n";
				$ci->email->initialize($config);
				$ci->email->from($email);
				$list = array('sales@starcompro.com', $email_member);
				$ci->email->to($list);
				$ci->email->subject($orderan.' '.$hp.' '.$nama);
				$ci->email->message($detail);

				if ($this->email->send())
				 {
					$this->session->set_flashdata('info', 'Hallo '.$nama.' Tunggu tim kami untuk menghubungi dan memproses pesanan anda!');
					redirect('home/success');
					} else 
						{
						show_error($this->email->print_debugger());
						}

		}

		
	}