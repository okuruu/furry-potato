<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SettingModel extends CI_Model{

    public function view_profile($user_id){
        $this->db->where('USERNAME',$user_id);
        return $this->db->get('user')->result();
    }

    public function profile_upload(){
        $config['upload_path'] = './assets/img/avatar/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload',$config);
        if($this->upload->do_upload('input_gambar')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '' );
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;      
        }
    }

    public function save($upload){
        $data = array(
            'AVATAR' => $upload['file']['file_name']
        );

        $this->db->insert('user',$data);
    }

    public function validation($mode){
        $this->load->library('form_validation');

        if($mode == "save"){
            $this->form_validation->set_rules('input_username', 'Username', 'required|max_length[11]');
        }

        $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[25]');
        $this->form_validation->set_rules('input_email' ,'Email', 'required|max_length[50]');
        $this->form_validation->set_rules('input_phone' ,'Phone', 'required|numeric|max_length[50]');

        if($this->form_validation->run()){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function edit($id){
        $data = array (
            "NAMA" => $this->input->post('input_nama'),
            "EMAIL" => $this->input->post('input_email'),
            "PHONE" => $this->input->post('input_phone')        
        );
        $this->db->where('ID',$id);
        $this->db->update('user',$data);
    }
}