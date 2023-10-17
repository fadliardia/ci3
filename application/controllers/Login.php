<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('login_model');
    }

    public function index(){
        
        $this->load->view('login');
    }

    public function login_aksi(){
        $user = $this->input->post('username', true);
        $pass = $this->input->post('password', true);

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE){
            $where = array(
                'username' => $user,
                'password' => $pass
            ); 
            $cekLogin = $this->login_model->cek_login($where)->num_rows();
            if($cekLogin > 0){
                $sess_data = array(
                    'username' => $user,
                    'login' => 'ok'
                );
                $this->session->set_userdata($sess_data);
                redirect(base_url('dashboard'));
            }else{
                redirect(base_url('login'));
            }
        }else{
            $this->load->view('login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
