<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->model('admin_models');
				$this->load->model('security_models');
				$this->load->model('load_setting');
				$this->load->model('pengunjung');
				$this->load->model('security_super');
				$this->load->model('home_models');

			}
// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//
			public function index()
			{

			}

			public function mem($username)
			{
				
				if(!$this->db->get_where('member', array('username' => $username))->row())
					{
						 $this->session->set_flashdata('info','halaman yang anda cari tidak ada');
						 redirect('home/error_page/');
					}
				$member 					= $this->db->get_where('member', array('username' => $username))->row();
				$data['email_member']		= $member->email;
				$data['member'] 			= $username;
			
				$id 						= 1;
				$data['info']				= $this->db->get_where('info', array('id' => $id))->row();
				$data['seo']				= $this->db->get_where('seo', array('id' => $id))->row();
				$data['heading']			= $this->db->get_where('heading', array('id' => $id))->row();
				$data['des1']				= $this->db->get_where('deskripsi1', array('id' => $id))->row();
				$data['work_h']				= $this->db->get_where('work_h', array('id' => $id))->row();
				$data['work']				= $this->admin_models->get_work()->result();
				$data['des2']				= $this->db->get_where('deksripsi2', array('id' => $id))->row();
				$data['product_h']			= $this->db->get_where('product_h', array('id' => $id))->row();
				$data['table']				= $this->admin_models->get_product()->result();
				$data['table2']				= $this->home_models->get_faq()->result();
				$data['table3']				= $this->admin_models->get_partners()->result();
				$data['mockup']				= $this->db->get_where('mockup', array('id' => $id))->row();
				$data['gambar']				= $this->home_models->get_gambar()->result();
				$data['event_tb']			= $this->home_models->get_event()->result();
				// des mockup
				$id_m1						= 1;
				$id_m2						= 2;
				$id_m3						= 3;
				$id_m4						= 4;
				$id_m5						= 5;
				$id_m6						= 6;

				$data['mockup_des1']		= $this->db->get_where('mockup_des', array('id' => $id_m1))->row();
				$data['mockup_des2']		= $this->db->get_where('mockup_des', array('id' => $id_m2))->row();
				$data['mockup_des3']		= $this->db->get_where('mockup_des', array('id' => $id_m3))->row();
				$data['mockup_des4']		= $this->db->get_where('mockup_des', array('id' => $id_m4))->row();
				$data['mockup_des5']		= $this->db->get_where('mockup_des', array('id' => $id_m5))->row();
				$data['mockup_des6']		= $this->db->get_where('mockup_des', array('id' => $id_m6))->row();

				// apps detail 2
				$data['contoh']				= $this->home_models->get_contoh()->result();
				// link download
				$data['download']			= $this->db->get_where('download', array('id' => $id_m1))->row();
				$data['download2']			= $this->db->get_where('download', array('id' => $id_m2))->row();


				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				$data['slideshow'] 			= 'home_navigasi/slideshow';
				$data['about'] 				= 'home_navigasi/about';
				$data['product'] 			= 'member/register';
				$data['faq'] 				= 'home_navigasi/faq';
				$data['client'] 			= 'home_navigasi/client';
				$data['apps_detail']		= 'home_navigasi/apps_detail';
				$data['apps_detail2']		= 'home_navigasi/apps_detail2';
				$data['download_link']		= 'home_navigasi/download_link';
				$data['nav']		 		= 'home';
				$data['event']				= 'home_navigasi/event';
				$data['counter']			= $this->pengunjung->get_pengunjung();
				$this->load->view('home', $data);
			}

			public function daftar()
			{
				$nama 			= xss_clean($this->input->post('nama'));
				$email 			= xss_clean($this->input->post('email'));
				$hp 			= xss_clean($this->input->post('hp'));
				$compro1 		= xss_clean($this->input->post('compro1'));
				$compro2 		= xss_clean($this->input->post('compro2'));
				$compro3 		= xss_clean($this->input->post('compro3'));
				$website 		= xss_clean($this->input->post('website'));
				$logo 			= xss_clean($this->input->post('logo'));
				$detail 		= xss_clean($this->input->post('detail'));
				$waktu 			= date('d-M-y, g:i a');
				$member 		= xss_clean($this->input->post('member'));
				$email_member 	= xss_clean($this->input->post('email_member'));

				$orderan	= $compro1.' '.$compro2.' '.$compro3.' '.$website.' '.$logo;
				$this->home_models->kirim_order_member($nama, $email, $hp, $orderan, $detail, $waktu, $member);
				
				//$this->home_models->send_email_member($nama, $email, $hp, $orderan, $detail, $waktu, $email_member);
				$this->session->set_flashdata('info', 'Hallo '.$nama.' Tunggu tim kami untuk menghubungi dan memproses pesanan anda!');
				redirect('home/success');
			}

			public function home($username, $uniq)
			{
				$this->security_models->get_security();
				$data['admin'] 			= $this->db->get_where('member', array('username' => $username))->row();
				if(!$this->db->get_where('member', array('username' => $username, 'uniq' => $uniq))->row())
					{
						 $this->session->set_flashdata('info','halaman yang anda cari tidak ada');
						 redirect('admin/logout');
					}

				$data['grafik']				= $this->admin_models->get_member()->result();
				
				
				$data['sub_member']			= $this->admin_models->jumlah_sub_member($username)->num_rows();
				$data['all_member']			= $this->admin_models->jumlah_all_member()->num_rows();
				
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'member/admin_nav';
				$data['judul'] 				= 'Home';
				$data['sub_judul'] 			= 'Dashboard';
				$data['content'] 			= 'member/dashboard';
				
				$data['nav_top']			= 'dashboard';

				$this->load->view('member/home', $data);

			}

			public function tb_member($username, $uniq)
			{
				$this->security_models->get_security();
				$data['admin'] 			= $this->db->get_where('member', array('username' => $username))->row();
				if(!$this->db->get_where('member', array('username' => $username, 'uniq' => $uniq))->row())
					{
						 $this->session->set_flashdata('info','halaman yang anda cari tidak ada');
						 redirect('admin/logout');
					}
				
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'member/admin_nav';
				$data['judul'] 				= 'Home';
				$data['sub_judul'] 			= 'Dashboard';
				$data['content'] 			= 'member/tb_sub';
				$data['table']				= $this->admin_models->get_member_sub($username)->result();
				
				$data['nav_top']			= 'member';

				$this->load->view('member/home', $data);

			}

			public function baca_sub($id, $username, $uniq)
			{
				$this->security_models->get_security();
				$data['admin'] 			= $this->db->get_where('member', array('username' => $username))->row();
				if(!$this->db->get_where('member', array('username' => $username, 'uniq' => $uniq))->row())
					{
						 $this->session->set_flashdata('info','halaman yang anda cari tidak ada');
						 redirect('admin/logout');
					}
				$data['nav_top']			= 'member';
				
				
				$data['baca']				= $this->db->get_where('orderan', array('id' => $id))->row();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'member/admin_nav';
				$data['judul'] 				= 'Table Pengikut';
				$data['sub_judul'] 			= 'Pesan';
				$data['content'] 			= 'admin/baca_pesan';
				$data['content_head']		= $this->admin_models->get_heading()->result();
				$this->load->view('member/home', $data);
			}

			public function del_sub($id, $username, $uniq)
			{
				$this->security_models->get_security();
				$this->admin_models->del_orderan($id);
				$this->session->set_flashdata('info', 'data berhasil di hapus!');				
				redirect('member/home/'.$username.'/'.$uniq);
			}

			public function excel_orderan($username)
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
				   
				    

				    $peserta = $this->admin_models->get_member_sub($username)->result();
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
		}