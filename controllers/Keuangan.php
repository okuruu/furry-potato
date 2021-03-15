<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keuangan extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('KeuanganModel'); // Load SiswaModel ke controller ini
    }
    
    public function index(){
        $data['keuangan'] = $this->KeuanganModel->view();
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('keuangan/index',$data);
        $this->load->view('_tema/jsfooter');
    }

    public function tambah(){
        if($this->input->post('submit')){
            if($this->KeuanganModel->validation("save")){
                $this->KeuanganModel->save();
                redirect('keuangan/index');
            }
        }
        $this->load->view('keuangan/form_tambah');
    }

    public function ubah($nis){
        if($this->input->post('submit')){
            if($this->KeuanganModel->validation("update")){
                
                $this->KeuanganModel->edit($nis);
                redirect('keuangan/index');
            }
        }

        $data['keuangan'] = $this->KeuanganModel->view_by($nis);
        $this->load->view('keuangan/form_ubah',$data);
    }

    public function hapus($nis){
        $this->KeuanganModel->delete($nis);
        redirect('keuangan/index');
    }

}