<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pimpinan_model extends CI_Model
{


    public function editDataProfile($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function getDataHasilById($id)
    {
        return $this->db->get_where('tb_hasil', ['id' => $id])->row_array();
    }

    public function editDataHasil($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_hasil', $data);
    }

    public function deleteDataHasil($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tb_hasil', ['id' => $id]);
    }

    public function hitungTotalHasil()
    {
        $this->db->select_sum('hasil');
        $result = $this->db->get('tb_hasil')->row();
        return $result->hasil;
    }

    public function tampil_data()
    {
        // // return $this->db->get('tb_karyawan');
        // $this->db->from('tb_karyawan');
        // $this->db->join('tb_ranking', 'tb_ranking.id_ranking' = 'tb_karyawan.id_karyawan');
        // if($id ! = null){
        //     $this->db->where('item_id', $id);
        // }
        // $query = $this->db->get();
        // return $query;
    }

    public function join_tabel()
    {
        $this->db->select('*');
        $this->db->from('tb_karyawan');
        $this->db->innerjoin('tb_ranking', 'tb_ranking.id_karyawan=tb_ranking.id_karyawan');
        $query = $this->db->get();
        return $query;
    }
}
