<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('RegisterModel');
    }

    public function index(){
        $this->load->view('_tema/header');
        $this->load->view('register');
        $this->load->view('_tema/jsfooter');
    }

    public function register_sementara(){
        $this->RegisterModel->masuk();
        $this->load->view('registrasi_sukses');
    }

}