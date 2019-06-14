<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->model('admin_models');
                $this->load->model('security_models');
                $this->load->model('gallery_models');
                $this->load->model('pengunjung');

			}
// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//
			public function index()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'front';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['table']				= $this->gallery_models->get_all_gallery()->result();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'Gallery';
				$data['content'] 			= 'gallery/admin';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('admin/home', $data);
            }

            public function add_new()
			{
				$this->security_models->get_security();
				$config =  array(
                  'upload_path'     => "./assets/img/gallery/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('gallery');
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
	                              redirect('gallery');
                                }
                          		
                                $this->gallery_models->add_gallery($nama_file, $deskripsi); 
                                $this->session->set_flashdata('info','data berhasil di tambah');
                                redirect('gallery');
    		         		}
			}

			public function del_gallery($id, $gambar)
            {
                    $this->security_models->get_security();
                    $this->gallery_models->del_gallery($id);
                    unlink('assets/img/gallery/'.$gambar);
                    $this->session->set_flashdata('info', 'data berhasil di hapus!');				
                    redirect('gallery');
            }

            public function home(){
                $data['info']				= $this->db->get_where('info', array('id' => '1'))->row();
                $data['seo']				= $this->db->get_where('seo', array('id' => '1'))->row();
                $data['detail']             = $this->db->get_where('product',array('id'=>$id_detail))->row();
                $data['nav']		 		= 'gallery';
                $data['counter']			= $this->pengunjung->get_pengunjung();
                $data['script_top']    		= 'home_navigasi/script_top';
                $data['script_bottom']  	= 'home_navigasi/script_bottom';
                $data['header'] 			= 'home_navigasi/header';
                $data['footer'] 			= 'home_navigasi/footer';

                // pagination
				//konfigurasi pagination
		        $config['base_url'] 		= site_url('gallery/home'); //site url
		        $config['total_rows'] 		= $this->db->count_all('gallery'); //total row
		        $config['per_page'] 		= 9;  //show record per halaman
		        $config["uri_segment"] 		= 3;  // uri parameter
		        $choice 					= $config["total_rows"] / $config["per_page"];
		        $config["num_links"] 		= floor($choice);
		        // Membuat Style pagination untuk BootStrap v4
		        $config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';

		        $this->pagination->initialize($config);
		        $data['page'] 				= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		        $data['data'] 				= $this->gallery_models->get_gallery($config["per_page"], $data['page']);
		        $data['pagination'] 		= $this->pagination->create_links();
                
                $this->load->view('home_navigasi/gallery', $data);
            }

        }