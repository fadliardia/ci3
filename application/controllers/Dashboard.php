<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Legalisir_model');
        $this->load->model('Riwayat_model');
        $this->load->model('Alumni_model');
    }

    public function index()
    {
        $data['total_legalisir'] = $this->Legalisir_model->jumlahLegalisir();
        $data['total_riwayat'] = $this->Riwayat_model->jumlahRiwayat();
        $data['total_alumni'] = $this->Alumni_model->jumlahAlumni();
        
        // if(empty($this->session->userdata('login'))){
        //     redirect('login');
        // }
        
        $data['title'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}