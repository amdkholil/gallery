<?php
class Login extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');        
    }
    
    public function index()
    {
        if(isset($_POST['submit'])){
            
            // proses login 
            $username    = $this->input->post('username');
            $password = $this->input->post('password');
            $hasil    = $this->admin_model->login($username,$password);
            if($hasil==1)
            {
                $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
                redirect('admin');                
            }
            else{
                $this->session->set_flashdata('pesan','<div class="alert alert-danger"><i class="fas fa-exclamation"> </i>Username atau Password yang anda masukan salah!!</div>');
                redirect('login');
            }
        }
        else{
            check_session_login();
            $this->load->view('login');
            // $this->template->load('template/login','view_login');
        }
    }
    
    
    
}