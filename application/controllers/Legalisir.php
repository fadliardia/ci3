<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Legalisir extends CI_Controller {

    public function __construct()
    {
        // if(empty($this->session->userdata('login'))){
        //     redirect('login');
        // }
        parent::__construct();
        $this->load->helper('download');

        $this->load->model('legalisir_model');
    }

    public function index()
    {
        $data['title'] = 'Permintaan Legalisir';
        $data['legalisir'] = $this->legalisir_model->get_data('tbl_legalisir')->result();
        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('legalisir', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id_siswa)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE){
            $this->index();
        }else {
            $data = array(
                'id_siswa' => $id_siswa,
                'nama_siswa' => $this->input->post('nama_siswa'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'nomor_ijazah' => $this->input->post('nomor_ijazah'),
                'status' => $this->input->post('status'),
                'biaya' => $this->input->post('biaya'),
                
            );

            $this->legalisir_model->update_data($data, 'tbl_legalisir');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Diubah!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> </div>');
           
            return redirect('legalisir');
        }
    }
    private function _rules()
    {
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required', array(
            
        ));
        $this->form_validation->set_rules('alamat_siswa', 'Alamat Siswa', 'required', array(
            
        ));
        $this->form_validation->set_rules('nomor_ijazah', 'Nomor Ijazah', 'required', array(
            
        ));
        $this->form_validation->set_rules('status', 'Status', 'required', array(
                
        ));
    }

    public function file($id_siswa){
        $this->load->model('legalisir_model');

        $result = $this->legalisir_model->find_by_id('tbl_legalisir', $id_siswa);

        
    if ($result) {
        $file_path = 'assets/file_ijazah/' . $result->file_ijazah;
        force_download($file_path, NULL);
    } else {
        echo "Data tidak ditemukan.";
    }
    }

    public function foto($id_siswa){
        $this->load->model('legalisir_model');

        $result = $this->legalisir_model->find_by_id('tbl_legalisir', $id_siswa);

        
    if ($result) {
        $file_name = $result->bukti_pembayaran;

        $file_path = 'assets/file_foto/' . $file_name;

        
        force_download($file_path, NULL);
    } else {
        echo "Data tidak ditemukan.";
    }
    }
}