<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Ujian extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UjianModel');
    }

    public function intelegensi(){
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('_tema/sidebar');
        $this->load->view('Ujian/intelegensi');
        $this->load->view('_tema/jsfooter');
    }

    public function ujian_intelegensi_selesai(){
        $user_id = $this->session->username;
        $this->UjianModel->cek_intelegensi($user_id);
        redirect('dashboard/welcome');
    }
    
    public function minat_bakat(){
        $user_id = $this->session->username;
        $data['gender'] = $this->UjianModel->klasterisasi_soal($user_id);
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('_tema/sidebar');
        $this->load->view('Ujian/minat_bakat',$data);
        $this->load->View('_tema/jsfooter');
    }

    public function minat_bakat_selesai(){
        $user_id = $this->session->username;
        $this->UjianModel->cek_minat_bakat($user_id);
        redirect('dashboard/welcome');
    }

    public function personality(){
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('_tema/sidebar');
        $this->load->view('Ujian/personality');
        $this->load->view('_tema/jsfooter');
    }

    public function personality_selesai(){
        $user_id = $this->session->username;
        $this->UjianModel->cek_personality($user_id);
        redirect('dashboard/welcome');
    }

    public function kemampuan(){
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('_tema/sidebar');
        $this->load->view('Ujian/kemampuan');
        $this->load->view('_tema/jsfooter');
    }

    public function kemampuan_selesai(){
        $user_id = $this->session->username;
        $this->UjianModel->cek_kemampuan($user_id);
        redirect('dashboard/welcome');
    }

    public function kraeplin(){
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/kraeplin');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai(){
        $this->load->model('KraeplinModel');
        $user_id = $this->session->username;
        $this->KraeplinModel->cek_kraeplin($user_id);
        redirect('Kraeplin/kraeplin_2');
    }
   
}