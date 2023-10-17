<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Riwayat extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // if(empty($this->session->userdata('login'))){
        //     redirect('login');
        // }
        $this->load->model('riwayat_model');
    }

    public function index()
    {
        $data['title'] = 'Riwayat Legalisir';
        $data['riwayat'] = $this->riwayat_model->get_data('tbl_riwayat')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('riwayat', $data);
        $this->load->view('templates/footer');
    }
}