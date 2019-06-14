<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('product_models');
            $this->load->model('pengunjung');
            $this->load->model('master_models');
            $this->load->model('send_email_models');

        }

        public function detail($id_detail)
        {
            $data['info']				= $this->db->get_where('info', array('id' => '1'))->row();
            $data['seo']				= $this->db->get_where('seo', array('id' => '1'))->row();
            $data['detail']             = $this->db->get_where('product',array('id'=>$id_detail))->row();
            $data['nav']		 		= 'product';
            $data['id_product']         = $id_detail;
            $data['counter']			= $this->pengunjung->get_pengunjung();
            $data['script_top']    		= 'home_navigasi/script_top';
            $data['script_bottom']  	= 'home_navigasi/script_bottom';
            $data['header'] 			= 'home_navigasi/header';
            $data['footer'] 			= 'home_navigasi/footer';
            $data['ukuran']				= $this->master_models->get_ukuran()->result();
            $data['qty']				= $this->master_models->get_qty()->result();
            $this->load->view('home_navigasi/detail_product', $data);

        }

        public function get_price()
        {
            $id_qty      = $this->input->post('id_qty');
            $id_product  = $this->input->post('id_product');
            $id_ukuran   = $this->input->post('id_ukuran');
            $cari        = $this->product_models->cari_harga($id_qty,$id_product,$id_ukuran)->row();
            if($cari){
                $msg['pesan'] = 'sukses';
                $msg['harga'] = "Rp " . number_format($cari->harga,2,',','.');
            }else{
                $msg['pesan'] = 'gagal';
            }
            echo json_encode($msg);
        }

        public function order()
        {
            $id_qty                     = $this->input->post('id_qty');
            $id_product                 = $this->input->post('id_product');
            $id_ukuran                  = $this->input->post('id_ukuran');
            $id_detail                  = $this->input->post('id_product');
            $data['ukuran']             = $this->db->get_where('master_ukuran', array('id' => $id_ukuran))->row();
            $data['qty']                = $this->db->get_where('master_qty', array('id' => $id_qty))->row();
            $data['harga']              = $this->product_models->cari_harga($id_qty,$id_product,$id_ukuran)->row();
            $data['info']				= $this->db->get_where('info', array('id' => '1'))->row();
            $data['seo']				= $this->db->get_where('seo', array('id' => '1'))->row();
            $data['detail']             = $this->db->get_where('product',array('id'=>$id_detail))->row();
            $data['nav']		 		= 'product';
            $data['id_product']         = $id_detail;
            $data['counter']			= $this->pengunjung->get_pengunjung();
            $data['script_top']    		= 'home_navigasi/script_top';
            $data['script_bottom']  	= 'home_navigasi/script_bottom';
            $data['header'] 			= 'home_navigasi/header';
            $data['footer'] 			= 'home_navigasi/footer';
            $this->load->view('home_navigasi/check_out', $data);

        }

        function _api_ongkir_post($origin,$des,$qty,$cour)
        {
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=".$origin."&destination=".$des."&weight=".$qty."&courier=".$cour,	  
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                /* masukan api key disini*/
                "key:1978500ddbac5d0319ef61266e877d8b"
                ),
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                return $err;
                } else {
                return $response;
                }
        }





        function _api_ongkir($data)
        {
            $curl = curl_init();
            curl_setopt_array($curl, array(
            //CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=12",
            //CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
            CURLOPT_URL => "http://api.rajaongkir.com/starter/".$data,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",		  
            CURLOPT_HTTPHEADER => array(
                /* masukan api key disini*/
                "key: 1978500ddbac5d0319ef61266e877d8b"
            ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            return  $err;
            } else {
            return $response;
            }
        }


        public function provinsi()
        {
            $provinsi = $this->_api_ongkir('province');
            $data = json_decode($provinsi, true);
            echo json_encode($data['rajaongkir']['results']);
        }
        public function kota($provinsi="")
        {
            if(!empty($provinsi))
            {
                if(is_numeric($provinsi))
                {
                    $kota = $this->_api_ongkir('city?province='.$provinsi);	
                    $data = json_decode($kota, true);
                    echo json_encode($data['rajaongkir']['results']);		  					 
                }
                else
                {
                    show_404();
                }
            }
            else
            {
                show_404();
            }
        }
        public function tarif($origin,$des,$qty,$cour)
        {
            $berat = $qty*1000;
            $tarif = $this->_api_ongkir_post($origin,$des,$berat,$cour);		
            $data = json_decode($tarif, true);
            echo json_encode($data['rajaongkir']['results']);		
        }

        public function order_request()
        {
            $data = array(
                            'no_pemesanan'  =>uniqid(),
                            'nama'          =>$this->input->post('nama'),
                            'email'         =>$this->input->post('email'),
                            'hp'            =>$this->input->post('hp'),
                            'provinsi'      =>$this->input->post('country'),
                            'kota'          =>$this->input->post('state'),
                            'detail'        =>$this->input->post('detail'),
                            'product'       =>$this->input->post('product'),
                            'ukuran'        =>$this->input->post('ukuran'),
                            'qty'           =>$this->input->post('qty'),
                            'ongkir'        =>$this->input->post('ongkir'),
                            'kurir'         =>$this->input->post('kurir'),
                            'harga'         =>$this->input->post('harga_barang'),
                            'total_harga'   =>$this->input->post('total_harga2'),
                            'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
                            'status'        =>'1',
                            'waktu'         =>date('d-M-y, g:i a')
            );
            $info           = $this->db->get_where('info', array('id' => '1'))->row();
            //$this->product_models->new_order($data);
            //$this->pdf_invoice($data,$info);
            // return $this->load->view('success', $data, $info);
            return $this->success_page($data,$info);
            
        }

        public function pdf_invoice($data,$info)
        {
            $pdf 			= $this->pdf->load();
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',16);
            $pdf->Cell(190,7,$info->title,0,1,'C');
            $pdf->Cell(190,7,'Custom Box Indonesia',0,1,'C');
            $pdf->SetFont('Arial','B',16);
            $pdf->Cell(190,7,'Invoice',0,1,'C');
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(10,10,'',0,1);


            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Kode Invoice',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.$data['no_pemesanan'],0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Nama',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.$data['nama'],0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'No Telp',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.$data['hp'],0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'email',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.$data['email'],0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Nama Box',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.$data['product'],0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Ukuran',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.$data['ukuran'],0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Quantity',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.$data['qty'],0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Detail',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.$data['detail'],0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Kurir',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.$data['kurir'],0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Harga Box',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.'Rp ' . number_format($data['harga'],2,',','.'),0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Harga Ongkis Kirim',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.'Rp ' . number_format($data['ongkir'],2,',','.'),0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Total Harga',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.'Rp ' . number_format($data['total_harga'],2,',','.'),0,1, 'L');

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,10,'Alamat Lengkap',0,0, 'L');
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,':'.' '.$data['alamat_lengkap'],0,1, 'L');

            $pdf->Cell(10,40,'',0,1);
            $pdf->Cell(190,7,$info->title,0,1,'L');
            $pdf->Cell(190,7,$info->email,0,1,'L');
            
            $pdf->Cell(190,7,$info->pesan_invoice,0,1,'L');
            $pdf->Cell(190,7,$info->no_rekening,0,1,'L');

            $pdf->Image(base_url('assets/img/logo/'.$info->logo),10, 10,45, 25);
            //$pdf->Output();
            $file = $pdf->Output('','S');
            $this->send_email_models->send($data,$info,$file);
        }

        public function success_page($data2,$info){
            $data['data2']              = $data2;
            $data['info']               = $info;
            $data['info']				= $this->db->get_where('info', array('id' => '1'))->row();
            $data['seo']				= $this->db->get_where('seo', array('id' => '1'))->row();
            $data['nav']		 		= 'product';
            $data['counter']			= $this->pengunjung->get_pengunjung();
            $data['script_top']    		= 'home_navigasi/script_top';
            $data['script_bottom']  	= 'home_navigasi/script_bottom';
            $data['header'] 			= 'home_navigasi/header';
            $data['footer'] 			= 'home_navigasi/footer';
            $this->load->view('success', $data);

        }

        public function bukti_transfer()
        {
            $data['info']				= $this->db->get_where('info', array('id' => '1'))->row();
            $data['seo']				= $this->db->get_where('seo', array('id' => '1'))->row();
            $data['detail']             = $this->db->get_where('product',array('id'=>$id_detail))->row();
            $data['nav']		 		= 'bukti_transfer';
            $data['counter']			= $this->pengunjung->get_pengunjung();
            $data['script_top']    		= 'home_navigasi/script_top';
            $data['script_bottom']  	= 'home_navigasi/script_bottom';
            $data['header'] 			= 'home_navigasi/header';
            $data['footer'] 			= 'home_navigasi/footer';
            $this->load->view('home_navigasi/bukti_transfer', $data);
        }

        public function get_data_inv()
        {
            $kode_invoice   = $this->input->post('kode_transfer');
            $cari           = $this->product_models->cari_inv($kode_invoice)->row();
            if($cari){
                $msg['pesan'] = 'sukses';
                $msg['nama']  = $cari->nama;
                $msg['harga'] = "Rp " . number_format($cari->total_harga,2,',','.');
            }else{
                $msg['pesan'] = 'gagal';
            }
            echo json_encode($msg);

        }

        public function upload_bukti_transfer()
        {
            $kode_invoice   = $this->input->post('kode_invoice2');
            $config =  array(
                                'upload_path'     => "./assets/img/bukti_transfer/",
                                'allowed_types'   => "jpg|png|jpeg",
                                'encrypt_name'    => False, 
                            );
            $this->upload->initialize($config);
            $this->load->library('upload',$config);
            if ( ! $this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('gagal','Foto Harus Di Upload, atau Type File Tidak Di Izinkan');
                $this->bukti_transfer();
            }else{
                    $upload_data  	          =$this->upload->data();
                    $nama_file    	          =$upload_data['file_name'];
                    $ukuran_file  	          =$upload_data['file_size'];
                    // resize image
                    $config['image_library']  = 'gd2';
                    $config['source_image']   = $upload_data['full_path'];
                    $config['create_thumb']   = FALSE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']          = 800;
                    $config['height']         = 800;
                    $config['quality']        = '80%';
                    ini_set ('gd.jpeg_ignore_warning', 1);
                    $this->image_lib->initialize($config);
                    if (!$this->image_lib->resize()){
                        $this->session->set_flashdata('gagal','Foto Harus Di Upload, atau Type File Tidak Di Izinkan');
                        $this->bukti_transfer();
                    }
            $this->product_models->upload_bukti_transfer($kode_invoice,$nama_file);
            $this->session->set_flashdata('sukses','gambar berhasil di upload');
            redirect('upload-bukti-transfer');
            }


        }
    }