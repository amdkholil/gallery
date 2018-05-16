<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('checklogin'))
{

    function check_session()
    {
        $CI= & get_instance();
        $session=$CI->session->userdata('status_login');
        if($session!='oke')
        {
            $CI->session->set_flashdata('pesan','<div class="alert alert-danger"><i class="fa fa-cross-square"> </i>Anda harus <b>Login</b> terlebih dahulu!!</div>');
            redirect(base_url().'login');
        }
    }


    function check_session_login()
    {
        $CI= & get_instance();
        $session=$CI->session->userdata('status_login');
        if($session=='oke')
        {
            redirect(base_url().'admin');
        }
    }
}

?>
