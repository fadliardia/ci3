<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Legalisir_model extends CI_Model {

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->update($table, $data);
    }
    public function find_by_id($table, $id)
    {
        return $this->db->get_where($table, array('id_siswa' => $id))->row();
    }


    public function jumlahLegalisir(){
        $query = $this->db->get('tbl_legalisir');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

}