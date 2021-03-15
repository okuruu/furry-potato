<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KeuanganModel extends CI_Model{

    public function view(){
        return $this->db->get('keuangan')->result();
    }

    public function view_by($nis){
        $this->db->where('nis',$nis);
        return $this->db->get('keuangan')->row();
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
        }else{
            return FALSE;
        }
    }

    public function save(){
        $data = array(
            "NIS" => $this->input->post('input_nis'),
            "NAMA" => $this->input->post('input_nama'),
            "NILAI" => $this->input->post('input_nilai')
        );

        $this->db->insert('keuangan',$data);
    }

    public function edit($nis){
        $data = array (
            "NAMA" => $this->input->post('input_nama'),
            "NILAI" => $this->input->post('input_nilai')        
        );
        $this->db->where('nis',$nis);
        $this->db->update('keuangan',$data);
    }

    public function delete($nis){
        $this->db->where('nis',$nis);
        $this->db->delete('keuangan');
    }

}