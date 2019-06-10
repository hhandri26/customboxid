<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->library('excel');
				$this->load->library('pdf');
                $this->load->model('admin_models');
                $this->load->model('master_models');
				$this->load->model('security_models');
				$this->load->model('load_setting');
				$this->load->model('pengunjung');
                $this->load->model('security_super');
                $this->security_models->get_security();

            }

            public function product()
			{
				$data['nav_top']			= 'master';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['product_h']		    = $this->db->get_where('product_h', array('id' => $id))->row();
				$data['table']				= $this->master_models->get_product()->result();
				$data['script_top']         = 'admin/script_top';
				$data['script_bottom']      = 'admin/script_btm';
				$data['admin_nav']		    = 'admin/admin_nav';
				$data['judul'] 				= 'Master Product';
				$data['sub_judul'] 		    = 'Product';
				$data['content'] 			= 'admin/product';
				$this->load->view('admin/home', $data);
			}

			public function edit_product_h()
			{
				$data['nav_top']			= 'front';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['product_h']			= $this->db->get_where('product_h', array('id' => $id))->row();
				$data['table']				= $this->master_models->get_product()->result();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'Product';
				$data['content'] 			= 'admin/action/edit_product_h';
				$this->load->view('admin/home', $data);
			}

			public function edit_product_h_p()
			{
				$deskripsi  = $this->input->post('deskripsi');
				$title		= $this->input->post('title');
				$id 		= $this->input->post('id');
				$this->master_models->update_product_h($deskripsi, $title, $id);
				$this->session->set_flashdata('info', 'data berhasil di Update!');				
				redirect('master/product');
			}

			public function add_product()
			{
				$config =  array(
					'upload_path'     => "./assets/img/product/",
					'allowed_types'   => "gif|jpg|png|jpeg",
					'encrypt_name'    => False, 
													 );
					$this->upload->initialize($config);
					$this->load->library('upload',$config);

				if ( ! $this->upload->do_upload('gambar')) 
						{
							 $this->session->set_flashdata('info','data gagal di tambah');
												redirect('master/product');
						} else {

							$upload_data  	=$this->upload->data();
							$nama_file    	=$upload_data['file_name'];
							$ukuran_file  	=$upload_data['file_size'];
							$deskripsi  		=$this->input->post('deskripsi');
							$title					=$this->input->post('title');
							
				
							$this->master_models->add_product($nama_file, $title, $deskripsi); 
							$this->session->set_flashdata('info','data berhasil di tambah');
							redirect('master/product');
						}    
			}

			public function edit_product($id)
			{
				$data['nav_top']			= 'front';
				$id2 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id2))->row();
				$data['product']			= $this->db->get_where('product', array('id' => $id))->row();
				$data['table']				= $this->master_models->get_product()->result();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'FRONT DESIGN';
				$data['sub_judul'] 			= 'Product';
				$data['content'] 			= 'admin/action/edit_product';
				$this->load->view('admin/home', $data);
			}

			public function edit_gambar_product()
			{
				$gambar2 = $this->input->post('gambar2');
				$config =  array(
                  'upload_path'     => "./assets/img/product/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('master/product');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
										$nama_file    	=$upload_data['file_name'];
										$ukuran_file  	=$upload_data['file_size'];
										$gambar 				=$this->input->post('gambar');
										$id 						=$this->input->post('id');
										unlink('assets/img/product/'.$gambar2);
										$this->master_models->edit_img_product($nama_file, $id); 
										$this->session->set_flashdata('info','gambar berhasil di update');
										redirect('master/product');
    		         		}
			}

			public function edit_product_p()
			{
				$deskripsi  = $this->input->post('deskripsi');
				$title		= $this->input->post('title');
				$price 		= $this->input->post('price');
				$id 		= $this->input->post('id');
				
				$this->master_models->edit_product_p($deskripsi, $title, $price, $id);
				$this->session->set_flashdata('info', 'data berhasil di Update!');				
				redirect('master/product');
			}

			public function del_product($id)
			{
				$this->master_models->del_product($id);
				$this->session->set_flashdata('info','data berhasil di hapus');
				redirect('master/product');

			}

            public function ukuran()
            {   
				$data['nav_top']			= 'master';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['table']				= $this->master_models->get_ukuran()->result();
				$data['script_top']         = 'admin/script_top';
				$data['script_bottom']      = 'admin/script_btm';
				$data['admin_nav']		    = 'admin/admin_nav';
				$data['judul'] 				= 'Master Ukuran';
				$data['sub_judul'] 		    = 'Ukuran';
				$data['content'] 			= 'admin/master/master_ukuran';
				$this->load->view('admin/home', $data);
            }

            public function add_ukuran()
            {
                $ukuran = $this->input->post('ukuran');
                $this->master_models->tambah_ukuran($ukuran);
                $this->session->set_flashdata('info', 'data berhasil di tambahkan');
                redirect('master/ukuran');
            }

            public function edit_ukuran()
            {
                $ukuran = $this->input->post('ukuran');
                $id     = $this->input->post('id');
                $this->master_models->ubah_ukuran($ukuran,$id);
                $this->session->set_flashdata('info', 'data berhasil di ubah');
                redirect('master/ukuran');
            }

            public function delete_ukuran()
            {
                $id     = $this->input->post('id');
                $this->master_models->hapus_ukuran($id);
                $this->session->set_flashdata('info', 'data berhasil di hapus');
                redirect('master/ukuran');
            }

            public function qty()
            {
                $data['nav_top']			= 'master';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['table']				= $this->master_models->get_qty()->result();
				$data['script_top']         = 'admin/script_top';
				$data['script_bottom']      = 'admin/script_btm';
				$data['admin_nav']		    = 'admin/admin_nav';
				$data['judul'] 				= 'Master Quantity';
				$data['sub_judul'] 		    = 'Ukuran';
				$data['content'] 			= 'admin/master/master_qty';
				$this->load->view('admin/home', $data);
            }

            public function add_qty()
            {
                $qty = $this->input->post('qty');
                $this->master_models->tambah_qty($qty);
                $this->session->set_flashdata('info', 'data berhasil di tambahkan');
                redirect('master/qty');
            }

            public function edit_qty()
            {
                $qty = $this->input->post('qty');
                $id     = $this->input->post('id');
                $this->master_models->ubah_qty($qty,$id);
                $this->session->set_flashdata('info', 'data berhasil di ubah');
                redirect('master/qty');
            }

            public function delete_qty()
            {
                $id     = $this->input->post('id');
                $this->master_models->hapus_qty($id);
                $this->session->set_flashdata('info', 'data berhasil di hapus');
                redirect('master/qty');
            }

            public function harga()
            {
                $data['nav_top']			= 'master';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
                $data['table']				= $this->master_models->get_harga()->result();
                $data['product']			= $this->master_models->get_product()->result();
                $data['ukuran']				= $this->master_models->get_ukuran()->result();
                $data['qty']				= $this->master_models->get_qty()->result();
                
				$data['script_top']         = 'admin/script_top';
				$data['script_bottom']      = 'admin/script_btm';
				$data['admin_nav']		    = 'admin/admin_nav';
				$data['judul'] 				= 'Master Quantity';
				$data['sub_judul'] 		    = 'Ukuran';
				$data['content'] 			= 'admin/master/master_harga';
				$this->load->view('admin/home', $data);
            }

            public function add_harga()
            {
                $id_product = $this->input->post('id_product');
                $id_ukuran  = $this->input->post('id_ukuran');
                $id_qty     = $this->input->post('id_qty');
                $harga      = str_replace(array('Rp.',' ','.'),'',$this->input->post('harga'));
                $berat      = $this->input->post('berat');
                //cek kesamaan harga dengan product, qty, dan ukuran
                if($this->master_models->cek_exst_harga($id_product,$id_ukuran, $id_qty)->result()){
                    $this->session->set_flashdata('danger', 'harga sudah di masukkan');
                    redirect('master/harga');
                }else{
                    $this->master_models->insert_harga($id_product, $id_ukuran, $id_qty, $harga, $berat);
                    $this->session->set_flashdata('info', 'harga berhasil di tambahkan');
                    redirect('master/harga');
                }
            }

            public function edit_master_harga($id_2)
            {
                $data['nav_top']			= 'master';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
                $data['edit']				= $this->master_models->get_value_harga($id_2)->row();
                $data['product']			= $this->master_models->get_product()->result();
                $data['ukuran']				= $this->master_models->get_ukuran()->result();
                $data['qty']				= $this->master_models->get_qty()->result();
                
				$data['script_top']         = 'admin/script_top';
				$data['script_bottom']      = 'admin/script_btm';
				$data['admin_nav']		    = 'admin/admin_nav';
				$data['judul'] 				= 'Master Quantity';
				$data['sub_judul'] 		    = 'Ukuran';
				$data['content'] 			= 'admin/master/edit_master_harga';
				$this->load->view('admin/home', $data);
            }

            public function update_harga()
            {
                $id_product = $this->input->post('id_product');
                $id_ukuran  = $this->input->post('id_ukuran');
                $id_qty     = $this->input->post('id_qty');
                $harga      = str_replace(array('Rp.',' ','.'),'',$this->input->post('harga'));
                $berat      = $this->input->post('berat');
                $id         = $this->input->post('id');               
                $this->master_models->ubah_harga($id_product, $id_ukuran, $id_qty, $harga, $berat,$id);
                $this->session->set_flashdata('info', 'harga berhasil di update');
                redirect('master/harga');
                
			}

			public function delete_master_harga($id)
			{
				$this->master_models->hapus_master_harga($id);
				$this->session->set_flashdata('info', 'berhasil di hapus');
				redirect('master/harga');

			}
			
			public function box_custom()
			{
				$data['nav_top']			= 'master';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
                $data['table']				= $this->master_models->get_custom()->result();
                $data['qty']				= $this->master_models->get_qty()->result();                
				$data['script_top']         = 'admin/script_top';
				$data['script_bottom']      = 'admin/script_btm';
				$data['admin_nav']		    = 'admin/admin_nav';
				$data['judul'] 				= 'Master Quantity';
				$data['sub_judul'] 		    = 'Ukuran';
				$data['content'] 			= 'admin/master/master_custom';
				$this->load->view('admin/home', $data);

			}

			public function add_custom_box()
			{
				$data = array(
								'luas'		=> $this->input->post('luas'),
								'id_qty'	=> $this->input->post('id_qty'),
								'harga' 	=> str_replace(array('Rp.',' ','.'),'',$this->input->post('harga')),
								'berat'		=> $this->input->post('berat')
							);      
                $this->master_models->tambah_custom_demensi($data);
                $this->session->set_flashdata('info', 'berhasil di tambahkan');
                redirect('master/box_custom');

			}

			public function edit_master_custom($id)
			{
				$data['nav_top']			= 'master';
				$data['admin']				= $this->db->get_where('admin', array('id' => '1'))->row();
                $data['edit']				= $this->master_models->get_custom_edit($id)->row();
                $data['qty']				= $this->master_models->get_qty()->result();
				$data['script_top']         = 'admin/script_top';
				$data['script_bottom']      = 'admin/script_btm';
				$data['admin_nav']		    = 'admin/admin_nav';
				$data['judul'] 				= 'Master Quantity';
				$data['sub_judul'] 		    = 'Ukuran';
				$data['content'] 			= 'admin/master/edit_master_custom';
				$this->load->view('admin/home', $data);

			}

			public function update_custom_box()
			{
				$id 	= $this->input->post('id');
				$data 	= array(
					'luas'		=> $this->input->post('luas'),
					'id_qty'	=> $this->input->post('id_qty'),
					'harga' 	=> str_replace(array('Rp.',' ','.'),'',$this->input->post('harga')),
					'berat'		=> $this->input->post('berat')
				);      
				$this->master_models->update_custom_demensi($data,$id);
				$this->session->set_flashdata('info', 'berhasil di update');
				redirect('master/box_custom');

			}

			public function delete_custom_box($id)
			{
				$this->master_models->hapus_custom_demensi($id);
				$this->session->set_flashdata('info', 'berhasil di hapus');
				redirect('master/box_custom');
			}

        }