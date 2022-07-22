<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori_model extends CI_Model
{
    public function getKategori()
    {
        $this->db->select('*')
            ->from('tb_kategori')
            ->order_by('id_kategori', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
}
