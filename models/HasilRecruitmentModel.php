<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class HasilRecruitmentModel extends CI_Model {

        public function getData(){
            $this->db->select('nama_lengkap');
            $this->db->select('ktp');
            $this->db->select('posisi');
            $this->db->select('harapan_gaji');
            $this->db->order_by("posisi", "desc");
            return $this->db->get('user_excel')->result();
        }

        public function delete($ktp){
            $this->db->where('ktp',$ktp);
            $this->db->delete('user_excel');

            $this->db->where('ktp',$ktp);
            $this->db->delete('user_excel_2');
        }

    }

?>