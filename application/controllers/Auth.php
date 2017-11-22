<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    
    public function index(){
        $this->load->library('session');// loading session library
    }
    public function login(){
        $this->load->library('session');// loading session library
        $email = $this->input->post('email'); // catch data from table
        $pwd = $this->input->post('password');

        if ($email == NULL || $pwd == NULL){
            $this->load->view('viw_login');
            return;
        }

        $this->load->model('m_user'); //load m_user

        $result['data'] = $this->m_user->auth($email, $pwd); // call
        
        if ($result['data'] == NULL){
            redirect('/User', 'refresh');
        }else{
            $data = array( 
                'email'     => $email, 
                'logged_in' => TRUE
            );         
        }
        $this->session->set_userdata($data);
        redirect(base_url('user'));
    }
    public function logout(){
        $this->load->library('session');// loading session library
        $email = array('email', 'logged_in');
        $this->session->unset_userdata($email);
        redirect(base_url('user'));
    }
}