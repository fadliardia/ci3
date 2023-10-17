<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Riwayat_model extends CI_Model {
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function jumlahRiwayat(){
        $query = $this->db->get('tbl_riwayat');
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