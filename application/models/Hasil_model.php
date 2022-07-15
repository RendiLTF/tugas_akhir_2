<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hasil_model extends CI_Model
{
    public function getHasil($yi)
    {
        $this->db->select('*')
            ->from('tb_hasil')
            ->where("$yi BETWEEN min_nilai_yi AND max_nilai_yi", NULL, FALSE);
        $query = $this->db->get();
        return $query->row_array();
    }
}
