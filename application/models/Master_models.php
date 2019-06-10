<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Master_models extends CI_Model
	{
        public function get_product()
		{
			$this->db->select('*');
			$this->db->from('product');
			return $this->db->get();
		}

		public function update_product_h($deskripsi, $title, $id)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title
						   );
			$this->db->update('product_h', $data);
		}

		public function add_product($nama_file, $title, $deskripsi)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title,
						  'gambar'		=> $nama_file
						   );
			$this->db->insert('product', $data);
		}

		public function edit_product_p($deskripsi, $title, $price,  $id)
		{
			$data = array('deskripsi'	=> $deskripsi ,
						  'title'		=> $title,
						  'price'		=> $price
						   );
			$this->db->where('id', $id);
			$this->db->update('product', $data);
		}

		public function edit_img_product($nama_file, $id)
		{
			$data = array('gambar'	=> $nama_file);
			$this->db->where('id', $id);
			$this->db->update('product', $data);
		}

		public function del_product($id)
		{
			$this->db->where('id',$id);
			return $this->db->delete('product');
        }
        
        public function get_ukuran()
        {
            $this->db->select('*');
			$this->db->from('master_ukuran');
			return $this->db->get();
        }

        public function tambah_ukuran($ukuran)
        {
            $data = array('ukuran' => $ukuran);
            return $this->db->insert('master_ukuran',$data);
        }

        public function ubah_ukuran($ukuran,$id)
        {
            $data = array('ukuran' => $ukuran);
            $this->db->where('id',$id);
            $this->db->update('master_ukuran',$data);
        }

        public function hapus_ukuran($id)
        {
            $this->db->where('id',$id);
			return $this->db->delete('master_ukuran');
        }

        public function get_qty()
        {
            $this->db->select('*');
            $this->db->from('master_qty');
            return $this->db->get();
        }

        public function tambah_qty($qty)
        {
            $data = array('qty' => $qty);
            return $this->db->insert('master_qty',$data);
        }
        public function ubah_qty($qty, $id)
        {
            $data = array('qty' => $qty);
            $this->db->where('id',$id);
            $this->db->update('master_qty',$data);
        }
        public function hapus_qty($id)
        {
            $this->db->where('id',$id);
			return $this->db->delete('master_qty');
        }

        public function get_harga()
        {
            $this->db->select('a.id, a.id_product, a.id_ukuran, a.id_qty, a.harga, a.berat, b.title as product, c.ukuran, d.qty');
            $this->db->join('product b','a.id_product = b.id','left');
            $this->db->join('master_ukuran c','a.id_ukuran = c.id','left');
            $this->db->join('master_qty d','a.id_qty = d.id','left');
            $this->db->from('master_harga a');
            return $this->db->get();
        }

        public function cek_exst_harga($id_product,$id_ukuran, $id_qty)
        {
            $this->db->select('*');
            $this->db->where('id_product', $id_product);
            $this->db->where('id_ukuran', $id_ukuran);
            $this->db->where('id_qty', $id_qty);
            $this->db->from('master_harga');
            return $this->db->get();
        }

        public function insert_harga($id_product, $id_ukuran, $id_qty, $harga, $berat)
        {
            $data = array(  
                            'id_product'    => $id_product,
                            'id_ukuran'     => $id_ukuran,
                            'id_qty'        => $id_qty,
                            'harga'         => $harga,
                            'berat'         => $berat);
            return $this->db->insert('master_harga',$data);
        }

        public function get_value_harga($id_2)
        {
            $this->db->select('a.id, a.id_product, a.id_ukuran, a.id_qty, a.harga, a.berat, b.title as product, c.ukuran, d.qty');
            $this->db->join('product b','a.id_product = b.id','left');
            $this->db->join('master_ukuran c','a.id_ukuran = c.id','left');
            $this->db->join('master_qty d','a.id_qty = d.id','left');
            $this->db->from('master_harga a');
            $this->db->where('a.id',$id_2);
            return $this->db->get();
        }

        public function ubah_harga($id_product, $id_ukuran, $id_qty, $harga, $berat,$id)
        {
            $data = array(  
                'id_product'    => $id_product,
                'id_ukuran'     => $id_ukuran,
                'id_qty'        => $id_qty,
                'harga'         => $harga,
                'berat'         => $berat);
            $this->db->where('id',$id);
            $this->db->update('master_harga',$data);
        }

        public function get_custom()
        {
            $this->db->select('a.id, a.product, a.luas, a.id_qty, a.harga, a.berat, b.qty as qty');
            $this->db->join('master_qty b','a.id_qty = b.id','left');
            $this->db->from('master_custom a');
            return $this->db->get();

        }

        public function tambah_custom_demensi($data)
        {
            return $this->db->insert('master_custom',$data);
        }

        public function get_custom_edit($id)
        {
            $this->db->select('a.id, a.product, a.luas, a.id_qty, a.harga, a.berat, b.qty as qty');
            $this->db->join('master_qty b','a.id_qty = b.id','left');
            $this->db->where('a.id',$id);
            $this->db->from('master_custom a');
            return $this->db->get();

        }

        public function update_custom_demensi($data,$id)
        {
            $this->db->where('id',$id);
            return $this->db->update('master_custom',$data);
        }

        public function hapus_custom_demensi($id)
        {
            $this->db->where('id',$id);
            return $this->db->delete('master_custom');

        }

        public function hapus_master_harga($id)
        {
            $this->db->where('id',$id);
            return $this->db->delete('master_harga');
        }
    }