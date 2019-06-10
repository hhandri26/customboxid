<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custombox extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('custombox_models');
            $this->load->model('pengunjung');
            $this->load->model('master_models');
        }

        public function index()
        {
            $data['info']				= $this->db->get_where('info', array('id' => '1'))->row();
            $data['seo']				= $this->db->get_where('seo', array('id' => '1'))->row();
            $data['nav']		 		= 'custom_box';
            $data['counter']			= $this->pengunjung->get_pengunjung();
            $data['script_top']    		= 'home_navigasi/script_top';
            $data['script_bottom']  	= 'home_navigasi/script_bottom';
            $data['header'] 			= 'home_navigasi/header';
            $data['footer'] 			= 'home_navigasi/footer';
            $data['qty']				= $this->master_models->get_qty()->result();
            $this->load->view('home_navigasi/custom_box', $data);
        }

        public function get_price()
        {
            $luas        = $this->input->post('luas');
            $id_qty      = $this->input->post('id_qty');
            $warna       = $this->input->post('warna');
            $cari        = $this->custombox_models->cari_harga_custom($id_qty,$luas)->row();
            if($cari){
                $msg['pesan']   = 'sukses';
                $msg['harga']   = "Rp " . number_format($cari->harga,2,',','.');
                $msg['r_harga'] = $cari->harga;
                $msg['berat']   = $cari->berat;
            }else{
                $msg['pesan'] = 'gagal';
            }
            echo json_encode($msg);
        }

        public function checkout()
        {
            $data['panjang']            = $this->input->post('panjang');
            $data['lebar']              = $this->input->post('lebar');
            $data['tinggi']             = $this->input->post('tinggi');
            $data['warna']              = $this->input->post('warna');
            $id_qty                     = $this->input->post('qty');
            $data['qty']                = $this->db->get_where('master_qty', array('id' => $id_qty))->row();
            $data['harga']              = $this->input->post('harga');
            $data['berat']              = $this->input->post('berat');
            $data['info']				= $this->db->get_where('info', array('id' => '1'))->row();
            $data['seo']				= $this->db->get_where('seo', array('id' => '1'))->row();
            $data['nav']		 		= 'product';
            $data['id_product']         = $id_detail;
            $data['counter']			= $this->pengunjung->get_pengunjung();
            $data['script_top']    		= 'home_navigasi/script_top';
            $data['script_bottom']  	= 'home_navigasi/script_bottom';
            $data['header'] 			= 'home_navigasi/header';
            $data['footer'] 			= 'home_navigasi/footer';
            $this->load->view('home_navigasi/check_out_custom', $data);

        }
    }