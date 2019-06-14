<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->model('home_models');
				$this->load->model('admin_models');
				$this->load->model('master_models');
				$this->load->model('pengunjung');
				$this->load->model('send_email_models');
				

				
			}
			public function index()
			{


				$id 						= 1;
				$data['info']				= $this->db->get_where('info', array('id' => $id))->row();
				$data['seo']				= $this->db->get_where('seo', array('id' => $id))->row();
				$data['heading']			= $this->db->get_where('heading', array('id' => $id))->row();
				$data['des1']				= $this->db->get_where('deskripsi1', array('id' => $id))->row();
				$data['work_h']				= $this->db->get_where('work_h', array('id' => $id))->row();
				$data['work']				= $this->admin_models->get_work()->result();
				$data['product_h']			= $this->db->get_where('product_h', array('id' => $id))->row();
				$data['table']				= $this->master_models->get_product()->result();
				$data['table2']				= $this->home_models->get_faq()->result();
				$data['table3']				= $this->admin_models->get_partners()->result();
				$data['gambar']				= $this->home_models->get_gambar()->result();
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				$data['slideshow'] 			= 'home_navigasi/slideshow';
				$data['about'] 				= 'home_navigasi/about';
				$data['product'] 			= 'home_navigasi/product';
				$data['faq'] 				= 'home_navigasi/faq';
				$data['client'] 			= 'home_navigasi/client';
				$data['nav']		 		= 'home';
				$data['event']				= 'home_navigasi/event';
				$data['counter']			= $this->pengunjung->get_pengunjung();
				$this->load->view('home', $data);
			}

			public function error_page()
			{
				$id 						= 1;
				$data['info']				= $this->db->get_where('info', array('id' => $id))->row();
				$data['seo']				= $this->db->get_where('seo', array('id' => $id))->row();
				$data['heading']			= $this->db->get_where('heading', array('id' => $id))->row();
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				$data['nav']		 		= 'home';
				$data['event']				= 'home_navigasi/event';
				$data['counter']			= $this->pengunjung->get_pengunjung();
				$this->load->view('error_page', $data);
			}

			public function kirim_pesan()
			{
				$nama 		= xss_clean($this->input->post('nama'));
				$hp 		= xss_clean($this->input->post('hp'));
				$pesan 		= xss_clean($this->input->post('pesan'));
				$info       = $this->db->get_where('info', array('id' => '1'))->row();
				$data = array(
								"dari"	=> "home",
								"email" => $this->input->post('email'),
								"pesan" => $pesan.' '.$hp.' '.$nama
						);
				$this->send_email_models->send($data, $info, $file="");
				$this->session->set_flashdata('info', 'berhasil mengirim pesan');				
				redirect('home');

			}

		
		}