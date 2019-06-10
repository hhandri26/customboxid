<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Custombox_models extends CI_Model
{
    public function cari_harga_custom($id_qty,$luas)
    {
        $this->db->select('*');
        $this->db->where('id_qty',$id_qty);
        $this->db->where('luas >=',$luas);
        $this->db->from('master_custom');
        return $this->db->get();
    }
}