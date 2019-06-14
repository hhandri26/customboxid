<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Gallery_models extends CI_Model
{
    public function get_all_gallery(){
        $this->db->select('*');
        $this->db->from('gallery');
        return $this->db->get();
    }

    public function add_gallery($nama_file, $deskripsi){
        $data = array("gambar"=> $nama_file,"title"=>$deskripsi);
        $this->db->insert('gallery',$data);
    }

    public function del_gallery($id){
        $this->db->where('id',$id);
        return $this->db->delete('gallery');
    }

    public function get_gallery($limit, $start){
      
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->limit($limit, $start);
        $this->db->order_by('id', 'RANDOM');
        return $this->db->get();
    }

}