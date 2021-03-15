<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {

        public function get($username){
            $this->db->where('username',$username);
            $result = $this->db->get('user')->row();

            return $result;
        }

        public function validation($mode){
            $this->load->library('form_validation');
            
            if($mode == "save"){
                $this->form_validation->set_rules('input_nis', 'NIS', 'required|numeric|max_length[11]');
            }
    
            $this->form_validation->set_rules('input_nama', 'NAMA', 'required|max_length[25]');
            $this->form_validation->set_rules('input_nilai' ,'NILAI', 'numeric|required|max_length[50]');
    
            if($this->form_validation->run()){
                return TRUE;
            } else {
                return FALSE;
            }    
        }

        public function daftar(){
            $data = array(
                "NIS" => $this->input->post('input_nis'),
                "NAMA" => $this->input->post('input_nama'),
                "NILAI" => $this->input->post('input_nilai')
            );
    
            $this->db->insert('keuangan',$data);
        }
    

    }

?>