<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Alumni_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function jumlahAlumni(){
        $query = $this->db->get('tbl_alumni');
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