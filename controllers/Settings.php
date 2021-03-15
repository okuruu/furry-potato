<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('SettingModel'); 
    }

    public function profile() {
        $user_id = $this->session->username;
        $data['profile'] = $this->SettingModel->view_profile($user_id);
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('_tema/sidebar');
        $this->load->view('Settings/profile',$data);
        $this->load->view('_tema/jsfooter');
    }

    public function ubah($id){
        if($this->input->post('submit')){
            if($this->SettingModel->validation("update")){
                
                $this->SettingModel->edit($id);
                redirect('settings/profile');
            }
        }
    }

    public function uploads(){
        $config['upload_path'] = './assets/img/avatar/user/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['remove_space'] = TRUE;

        $this->load->library('upload',$config);
        if($this->upload->do_upload('input_gambar')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
          }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;      
        }
    }

}