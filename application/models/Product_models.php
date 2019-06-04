<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Product_models extends CI_Model
{
    public function cari_harga($id_qty,$id_product,$id_ukuran)
    {
        $this->db->select('*');
        $this->db->where('id_product', $id_product);
        $this->db->where('id_ukuran', $id_ukuran);
        $this->db->where('id_qty', $id_qty);
        $this->db->from('master_harga');
        return $this->db->get();
    }

    public function new_order($data)
    {
        return $this->db->insert('orderan',$data);
    }

}
