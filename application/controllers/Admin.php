<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->library('excel');
				$this->load->library('pdf');
				$this->load->model('admin_models');
				$this->load->model('security_models');
				$this->load->model('load_setting');
				$this->load->model('pengunjung');
				$this->load->model('security_super');
				$this->load->model('send_email_models');

			}
// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//
			public function index()
			{
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$this->load->view('admin/login', $data);
			}

			public function getlogin()
			{
				$username 	= xss_clean($this->input->post('username'));
				$password 	= xss_clean($this->input->post('password'));

				$adm 		= $this->db->get_where('admin', array('username'=>$username))->row();
				$level	= $adm->level;
				if($this->db->get_where('admin', array('level' => $level))->row())
					{
						$this->admin_models->getlogin($username, $password);
					}
					else
					{
							$this->session->set_flashdata('info', 'username tidak terdaftar');
							redirect('admin');
					}				
			}

			public function logout()
			{
				$this->session->sess_destroy();
				$this->session->set_flashdata('info', 'logout sukses');
				redirect(base_url('admin'));
			}

// ---------------------------------------------CMS Start------------- ----------------------------------------------------------//
			public function home($level)
			{
				$this->security_super->get_security_pusat($level);
				$this->security_models->get_security();
				$id 											= 1;
				$data['admin']						= $this->db->get_where('admin', array('id' => $id))->row();
				$data['jumlah_orderan']			= $this->admin_models->jumlah_orderan();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 						= 'Home';
				$data['sub_judul'] 				= 'Dashboard';
				$data['content'] 					= 'admin/dashboard';
				$data['graph_vs'] 				= 'admin/grafik_visitor';
				$data['nav_top']					= 'dashboard';
				$this->load->view('admin/home', $data);

			}

			public function heading()
			{
				$this->security_models->get_security();
				$data['nav_top']				= 'front';
				$id 										= 1;
				$data['admin']					= $this->db->get_where('admin', array('id' => $id))->row();
				$data['script_top']    	= 'admin/script_top';
				$data['script_bottom']  = 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 					= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'heading';
				$data['content'] 				= 'admin/heading';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);
			}

			public function edit_heading($id)
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'front';
				$id_a 								= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id_a))->row();
				$data['script_top']   = 'admin/script_top';
				$data['script_bottom']= 'admin/script_btm';
				$data['admin_nav']		= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 		= 'Edit heading';
				$data['content'] 			= 'admin/action/heading/edit_heading';
				$data['edit_head_id']	= $this->db->get_where('heading', array('id' => $id))->row();
				$this->load->view('admin/home', $data);
			}

			public function edit_heading_pro()
			{
				$this->security_models->get_security();
				$deskripsi  	= $this->input->post('deskripsi');
				$title				= $this->input->post('title');
				$id 					= $this->input->post('id');
				$this->admin_models->update_heading($deskripsi, $title, $id);
				$this->session->set_flashdata('info', 'data berhasil di Update!');				
				redirect('admin/heading');	
			}

			public function edit_background()
			{
				$this->security_models->get_security();
				$gambar2 = $this->input->post('gambar2');
				$config =  array(
                  'upload_path'     => "./assets/img/web/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('admin/heading');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $gambar 		=$this->input->post('gambar');
                                $id 			=$this->input->post('id');
                          		unlink('assets/img/web/'.$gambar2);
                                $this->admin_models->edit_background($nama_file, $id); 
                                $this->session->set_flashdata('info','gambar berhasil di update');
                                redirect('admin/heading');
    		         		}
			}

// ---------------------------------------------setting------------- ----------------------------------------------------------//
			public function setting()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'setting';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['info']				= $this->db->get_where('info', array('id'=>$id))->row();
				$data['seo']				= $this->db->get_where('seo', array('id'=>$id))->row();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'Setting';
				$data['sub_judul'] 			= 'admin';
				$data['content'] 			= 'admin/setting';
				
				$this->load->view('admin/home', $data);

			}

			public function edit_foto_admin()
			{
				$this->security_models->get_security();
				$gambar2 = $this->input->post('gambar');
				$config =  array(
                  'upload_path'     => "./assets/img/admin/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('admin/setting');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $gambar 		=$this->input->post('gambar');
                          		unlink('assets/img/admin/'.$gambar2);
                                $this->load_setting->edit_setting_img($nama_file); 
                                $this->session->set_flashdata('info','gambar berhasil di update');
                                redirect('admin/setting');
    		         		}
			}

			public function edit_username()
			{
				$this->security_models->get_security();
					
				$nama      		=$this->input->post('nama');
				$username       =$this->input->post('username');
				$password       =$this->input->post('password');
                $this->load_setting->update_username($nama, $username, $password);
            	$this->session->set_flashdata('info', 'berhasil di Update!');
				redirect('admin/setting');		
			}


			public function edit_tab1()
			{
				$this->security_models->get_security();
					
				$facebook 		=$this->input->post('facebook');
				$instagram      =$this->input->post('instagram');
				$twitter        =$this->input->post('twitter');
                $this->load_setting->edit_tab1($facebook, $instagram, $twitter);
            	$this->session->set_flashdata('info', 'berhasil di Update!');
				redirect('admin/setting');	
			}

			public function edit_tab2()
			{
				$this->security_models->get_security();
					
				$alamat 		=$this->input->post('alamat');
				$title		    =$this->input->post('title');
				$hp        		=$this->input->post('hp');
				$email        	=$this->input->post('email');
				$no_rekening 	=$this->input->post('no_rekening');
				$pesan_invoice 	=$this->input->post('pesan_invoice');
				$pesan_vertifikasi =$this->input->post('pesan_vertifikasi');
				$id_provinsi 	=$this->input->post('id_provinsi');
				$id_kota 		=$this->input->post('id_kota');
                $this->load_setting->edit_tab2($alamat, $title, $hp, $email, $no_rekening,$pesan_invoice,$pesan_vertifikasi,$id_provinsi, $id_kota);
            	$this->session->set_flashdata('info', 'berhasil di Update!');
				redirect('admin/setting');	
			}

			public function edit_tab3()
			{
				$this->security_models->get_security();
					
				$copy_right 		=$this->input->post('copy_right');
				
                $this->load_setting->edit_tab3($copy_right);
            	$this->session->set_flashdata('info', 'berhasil di Update!');
				redirect('admin/setting');	
			}

			public function edit_tab4()
			{
				$this->security_models->get_security();
					
				$description 	= $this->input->post('description');
				$keywords 		= $this->input->post('keywords');
				$author 		= $this->input->post('author');
				$tag 			= $this->input->post('tag');

				
                $this->load_setting->edit_tab4($description, $keywords, $author, $tag);
            	$this->session->set_flashdata('info', 'berhasil di Update!');
				redirect('admin/setting');	
			}

			public function ganti_logo()
			{
				$this->security_models->get_security();
				$gambar2 = $this->input->post('gambar');
				$config =  array(
                  'upload_path'     => "./assets/img/logo/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('admin/setting');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $gambar 		=$this->input->post('gambar');
                          		unlink('assets/img/logo/'.$gambar2);
                                $this->load_setting->ganti_logo($nama_file); 
                                $this->session->set_flashdata('info','gambar berhasil di update');
                                redirect('admin/setting');
    		         		}
			}

			public function ganti_logo_browser()
			{
				$this->security_models->get_security();
				$gambar2 = $this->input->post('gambar');
				$config =  array(
                  'upload_path'     => "./assets/img/logo/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('admin/setting');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $gambar 		=$this->input->post('gambar');
                          		unlink('assets/img/logo/'.$gambar2);
                                $this->load_setting->ganti_logo_browser($nama_file); 
                                $this->session->set_flashdata('info','gambar berhasil di update');
                                redirect('admin/setting');
    		         		}
			}



		
		
// ---------------------------------------------deskripsi 1 ------------- ----------------------------------------------------------//\
			public function deskripsi1()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'front';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['des1']				= $this->db->get_where('deskripsi1', array('id' => $id))->row();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'Deskripsi Section 1';
				$data['content'] 			= 'admin/deskripsi1';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);
			}

			public function edit_des1()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'front';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'Deskripsi Section 1';
				$data['content'] 			= 'admin/action/edit_des1';
				$data['edit_head_id']		= $this->db->get_where('deskripsi1', array('id' => $id))->row();
				$this->load->view('admin/home', $data);
			}

			public function edit_des1_pro()
			{
				$this->security_models->get_security();
				$deskripsi  = $this->input->post('deskripsi');
				$title		= $this->input->post('title');
				$id 		= $this->input->post('id');
				$this->admin_models->update_des1($deskripsi, $title, $id);
				$this->session->set_flashdata('info', 'data berhasil di Update!');				
				redirect('admin/deskripsi1');	
			}

			public function edit_gambar_des1()
			{
				$this->security_models->get_security();
				$gambar2 = $this->input->post('gambar2');
				$config =  array(
                  'upload_path'     => "./assets/img/web/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('admin/deskripsi1');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $gambar 		=$this->input->post('gambar');
                          		unlink('assets/img/web/'.$gambar2);
                                $this->admin_models->edit_gambar_des1($nama_file); 
                                $this->session->set_flashdata('info','gambar berhasil di update');
                                redirect('admin/deskripsi1');
    		         		}
			}
// ---------------------------------------------about us------------- ----------------------------------------------------------//
			public function about()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'front';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['table']				= $this->admin_models->get_work()->result();
				$data['work_h']				= $this->db->get_where('work_h', array('id' => $id))->row();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'about us';
				$data['content'] 			= 'admin/work';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);
			}

			public function edit_work($id)
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'front';
				$id2 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id2))->row();
				$data['table']				= $this->admin_models->get_work()->result();
				$data['work']				= $this->db->get_where('work', array('id' => $id))->row();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'Edit about us';
				$data['content'] 			= 'admin/action/edit_work';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);
			}

			public function edit_work_pro()
			{
				$this->security_models->get_security();
				$deskripsi  = $this->input->post('deskripsi');
				$title		= $this->input->post('title');
				$id 		= $this->input->post('id');
				$gambar 		= $this->input->post('gambar');
				$this->admin_models->update_work($deskripsi, $title, $id, $gambar);
				$this->session->set_flashdata('info', 'data berhasil di Update!');				
				redirect('admin/about');
			}

			public function edit_gambar_work()
			{
				$this->security_models->get_security();
				$gambar2 		= $this->input->post('gambar2');
				$id 			= $this->input->post('id');
				$config =  array(
                  'upload_path'     => "./assets/img/web/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('admin/about');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $gambar 		=$this->input->post('gambar');
                                
                          		unlink('assets/img/web/'.$gambar2);
                                $this->admin_models->edit_gambar_work($nama_file, $id); 
                                $this->session->set_flashdata('info','gambar berhasil di update');
                                redirect('admin/about');
    		         		}
			}

			public function edit_work_h()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'front';
				$id2 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id2))->row();
				$data['table']				= $this->admin_models->get_work()->result();
				$data['work_h']				= $this->db->get_where('work_h', array('id' => $id2))->row();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'Edit Heading About US';
				$data['content'] 			= 'admin/action/edit_work_h';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);

			}

			public function edit_work_h_p()
			{
				$this->security_models->get_security();
				$deskripsi  = $this->input->post('deskripsi');
				$title		= $this->input->post('title');
				$id 		= $this->input->post('id');
				$this->admin_models->update_work_h($deskripsi, $title, $id);
				$this->session->set_flashdata('info', 'data berhasil di Update!');				
				redirect('admin/about');
			}
// ---------------------------------------------faq ------------- ----------------------------------------------------------//

			public function faq()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'front';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['table']				= $this->admin_models->get_faq()->result();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'FAQ';
				$data['content'] 			= 'admin/faq';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);
			}

			public function add_faq()
			{
				$this->security_models->get_security();
				$question  	= $this->input->post('question');
				$answer		= $this->input->post('answer');
				$this->admin_models->add_faq($question, $answer);
				$this->session->set_flashdata('info', 'data berhasil di tambah!');				
				redirect('admin/faq');

			}

			public function edit_faq($id)
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'front';
				$id2 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id2))->row();
				$data['faq']				= $this->db->get_where('faq', array('id' => $id))->row();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'FAQ';
				$data['content'] 			= 'admin/action/edit_faq';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);

			}

			public function edit_faq_pro()
			{
				$this->security_models->get_security();
				$question  	= $this->input->post('question');
				$answer		= $this->input->post('answer');
				$id 		= $this->input->post('id');
				$this->admin_models->update_faq($question, $answer, $id);
				$this->session->set_flashdata('info', 'data berhasil di update!');				
				redirect('admin/faq');
			}

			public function del_faq($id)
			{
				$this->security_models->get_security();
				$this->admin_models->del_faq($id);
				$this->session->set_flashdata('info', 'data berhasil di hapus!');				
				redirect('admin/faq');
			}

// ---------------------------------------------partners & product ------------- ----------------------------------------------------------//
			public function partners()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'front';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['table']				= $this->admin_models->get_partners()->result();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'partners';
				$data['content'] 			= 'admin/partners';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);
			}

			public function add_partners()
			{
				$this->security_models->get_security();
				$config =  array(
                  'upload_path'     => "./assets/img/web/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('admin/partners');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $deskripsi 		=$this->input->post('deskripsi');

                                // rezize image
                                $config['image_library']  = 'gd2';
								$config['source_image']   = $upload_data['full_path'];
								$config['create_thumb']   = FALSE;
								$config['maintain_ratio'] = TRUE;
								$config['width']          = 300;
								$config['height']         = 300;
	                            $config['quality']        = '80%';
	                            $this->image_lib->initialize($config);

	                            if (!$this->image_lib->resize())
                                {
                                  $this->session->set_flashdata('info','kesalahan mengupload foto');
	                              redirect('home/pendaftaran');
                                }
                          		
                                $this->admin_models->add_partners($nama_file, $deskripsi); 
                                $this->session->set_flashdata('info','data berhasil di tambah');
                                redirect('admin/partners');
    		         		}
			}

			public function del_partners($id, $gambar)
			{
				$this->security_models->get_security();
				$this->admin_models->del_partners($id);
				unlink('assets/img/web/'.$gambar);
				$this->session->set_flashdata('info', 'data berhasil di hapus!');				
				redirect('admin/partners');
			}

			public function orderan()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'orderan';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['table']				= $this->admin_models->get_orderan()->result();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'orderan';
				$data['content'] 			= 'admin/orderan';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);
			}

			public function detail_orderan($id)
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'orderan';
				$id2 									= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id2))->row();
				$data['baca']					= $this->db->get_where('orderan', array('id' => $id))->row();
				$data['script_top']   = 'admin/script_top';
				$data['script_bottom']= 'admin/script_btm';
				$data['admin_nav']		= 'admin/admin_nav';
				$data['judul'] 				= 'Orderan';
				$data['sub_judul'] 		= 'orderan';
				$data['content'] 			= 'admin/detail_orderan';
				$data['content_head']	= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);
			}

			public function del_pesan($id)
			{
				$this->security_models->get_security();
				$this->admin_models->del_orderan($id);
				$this->session->set_flashdata('info', 'data berhasil di hapus!');				
				redirect('admin/pesan');
			}

			public function add_slideshow()
			{
				$this->security_models->get_security();
				$config =  array(
                  'upload_path'     => "./assets/img/web/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','data gagal di tambah');
	                              redirect('admin/heading');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $title         	=$this->input->post('title');
                                $deskripsi     	=$this->input->post('deskripsi');
                               
                          
                                $this->admin_models->insert_slideshow($nama_file, $title, $deskripsi); 
                                $this->session->set_flashdata('info','data berhasil di tambah');
                                redirect('admin/heading');
    		         		}    
			}

			public function del_slideshow($id, $background)
			{
				
				$this->security_models->get_security();
				$this->admin_models->del_slideshow($id);
				unlink('assets/img/web/'.$gambar);
				$this->session->set_flashdata('info','data berhasil di hapus');
                redirect('admin/heading'); 
			}
		

			public function excel_orderan()
			{
				$this->security_models->get_security();
				$excel = new PHPExcel();
				  
				    $excel->getProperties()->setCreator('starcompro.com')
				                 ->setLastModifiedBy('starcompro.com')
				                 ->setTitle("Data pemesanan")
				                 ->setSubject("Pesanan")
				                 ->setDescription("Laporan Semua Data pesanan Compro")
				                 ->setKeywords("Data Pesanan");
				   
				    $style_col = array(
				      'font' => array('bold' => true), 
				      'alignment' => array(
				        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 
				        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
				      ),
				      'borders' => array(
				        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
				        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
				        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) 
				      )
				    );
				    
				    $style_row = array(
				      'alignment' => array(
				        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
				      ),
				      'borders' => array(
				        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
				        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
				        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) 
				      )
				    );
				    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA Pesanan");
				    $excel->getActiveSheet()->mergeCells('A1:E1'); 
				    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); 
				    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); 
				    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); 


				    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); 
				    $excel->setActiveSheetIndex(0)->setCellValue('B3', "Nama"); 
				    $excel->setActiveSheetIndex(0)->setCellValue('C3', "Email"); 
				    $excel->setActiveSheetIndex(0)->setCellValue('D3', "No Hp"); 
				    $excel->setActiveSheetIndex(0)->setCellValue('E3', "Orderan");
				    $excel->setActiveSheetIndex(0)->setCellValue('F3', "Detail");
				    $excel->setActiveSheetIndex(0)->setCellValue('G3', "Waktu Order");
				    $excel->setActiveSheetIndex(0)->setCellValue('H3', "Member");
				   
				   

				    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
				    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
				    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
				    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
				    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);

				    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
				    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
				    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
				   
				    

				    $peserta = $this->admin_models->get_orderan()->result();
				    $no = 1; 
				    $numrow = 4; 
				    foreach($peserta as $row)
				    { 
				      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
				      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $row->nama);
				      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $row->email);
				      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $row->hp);
				      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $row->orderan);

				      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $row->detail);
				      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $row->waktu);
				      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $row->member);
				     
				      
				    

				      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
				      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
				      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
				      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
				      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);

				      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
				      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
				      $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
				     
				      
				      $no++; 
				      $numrow++; 
				    }
				    

				    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); 
				    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
				    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); 
				    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); 
				    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(40); 

				    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(40); 
				    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); 
				    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(25); 
				   


				    
				    
				    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
				   

				    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
				    

				    $excel->getActiveSheet(0)->setTitle("Laporan Data Pesanan");
				    $excel->setActiveSheetIndex(0);
				    

				    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
				    header('Content-Disposition: attachment; filename="Laporan pesanan Compro.xlsx"');
				    header('Cache-Control: max-age=0');
				    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
				    $write->save('php://output');
			}

			public function status_orderan()
			{
					$data = array(
												'email'		=> $this->input->post('email'),
												'id' 			=> $this->input->post('id'),
												'status'	=> $this->input->post('status'),
												'dari' 		=> 'admin'
											);
					$info           = $this->db->get_where('info', array('id' => '1'))->row();
					$this->admin_models->update_status_order($data);
					//$this->send_email_models->send($data,$info,$file='');
					$this->session->set_flashdata('info','status berhasil di ubah');
					redirect('admin/orderan');
			}

		}