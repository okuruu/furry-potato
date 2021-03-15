<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index(){
        if($this->session->userdata('authenticated')){
            redirect('dashboard/welcome');
        }
        $this->load->view('_tema/header');
        $this->load->view('login');
        $this->load->view('_tema/jsfooter');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        
        $user = $this->UserModel->get($username);

        if(empty($user)){
            $this->session->set_flashdata('message','Username tidak ditemukan');
            redirect('auth');
        }else{
            if($password == $user->PASSWORD){
                $session = array(
                    'authenticated' => true,
                    'nama' => $user->NAMA,
                    'username' => $user->USERNAME
                );
                $this->session->set_userdata($session);
                redirect('dashboard/welcome');
            } else {
                $this->session->set_flashdata('message','Password salah!');
                redirect('auth');
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }

}