<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DashboardModel extends CI_Model {

    // unused
        public function akses($user_id){
            $this->db->where('username',$user_id);
            return $this->db->get('user')->result();
        }

        public function getAllData($ktp){
            $this->db->where('ktp',$ktp);
            return $this->db->get('user_excel')->result();
        }

        public function getAllData_2($ktp){
            $this->db->where('ktp',$ktp);
            return $this->db->get('user_excel_2')->result();
        }

    }

?>