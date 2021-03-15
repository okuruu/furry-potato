<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class KraeplinModel extends CI_Model {

    public function cek_kraeplin($user_id){
        
            $A1         = $this->input->post('A11');
            $A2         = $this->input->post('A12');
            $A3         = $this->input->post('A13');
            $A4         = $this->input->post('A14');
            $A5         = $this->input->post('A15');
            $A6         = $this->input->post('A16');
            $A7         = $this->input->post('A17');
            $A8         = $this->input->post('A18');
            $A9         = $this->input->post('A19');
            $A10        = $this->input->post('A110');
            $A11        = $this->input->post('A111');
            $A12        = $this->input->post('A112');
            $A13        = $this->input->post('A113');
            $A14        = $this->input->post('A114');
            $A15        = $this->input->post('A115');
            $A16        = $this->input->post('A116');
            $A17        = $this->input->post('A117');
            $A18        = $this->input->post('A118');
            $A19        = $this->input->post('A119');
            $A20        = $this->input->post('A120');
            $A21        = $this->input->post('A121');
            $A22        = $this->input->post('A122');
            $A23        = $this->input->post('A123');
            $A24        = $this->input->post('A124');
            $A25        = $this->input->post('A125');
            $A26        = $this->input->post('A126');
            $A27        = $this->input->post('A127');
            
            $A1_1 = 0;
            $A2_1 = 0;
            $A3_1 = 0;
            $A4_1 = 0;
            $A5_1 = 0;
            $A6_1 = 0;
            $A7_1 = 0;
            $A8_1 = 0;
            $A9_1 = 0;
            $A10_1 = 0;
            $A11_1 = 0;
            $A12_1 = 0;
            $A13_1 = 0;
            $A14_1 = 0;
            $A15_1 = 0;
            $A16_1 = 0;
            $A17_1 = 0;
            $A18_1 = 0;
            $A19_1 = 0;
            $A20_1 = 0;
            $A21_1 = 0;
            $A22_1 = 0;
            $A23_1 = 0;
            $A24_1 = 0;
            $A25_1 = 0;
            $A26_1 = 0;
            $A27_1 = 0;
            

            if($A1 == 3){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
            if($A2 == 1){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
            if($A3 == 9){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
            if($A4 == 1){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
            if($A5 == 0){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
            if($A6 == 4){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
            if($A7 == 7){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
            if($A8 == 1){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
            if($A9 == 1){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
            if($A10 == 4){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
            if($A11 == 1){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
            if($A12 == 8){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
            if($A13 == 4){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
            if($A14 == 0){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
            if($A15 == 9){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
            if($A16 == 2){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
            if($A17 == 3){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
            if($A18 == 4){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
            if($A19 == 1){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
            if($A20 == 5){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
            if($A21 == 2){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
            if($A22 == 0){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
            if($A23 == 1){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
            if($A24 == 6){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
            if($A25 == 6){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
            if($A26 == 4){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
            if($A27 == 9){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

            $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
            $data = array(
                "USERNAME" => $user_id,
                "A1" => $TotalSalah
            );
            
            $this->db->insert('hr_kraeplin',$data);

    }

    public function update_2($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 1){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 9){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 7){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 7){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 8){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 2){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 3){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 4){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 8){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 6){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 0){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 1){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 4){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 1){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 7){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 8){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 9){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 9){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 8){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 4){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 0){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 8){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 3){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 5){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 5){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 1){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 2){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A2" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_3($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 0){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 0){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 2){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 2){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 1){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 4){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 9){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 0){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 4){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 2){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 2){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 3){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 2){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 6){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 3){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 2){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 0){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 7){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 7){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 5){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 9){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 5){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 5){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 2){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 0){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 6){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 6){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A3" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_4($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 1){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 0){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 6){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 0){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 6){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 5){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 2){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 8){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 8){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 2){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 5){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 5){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 1){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 2){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 6){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 5){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 3){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 8){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 5){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 0){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 4){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 3){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 1){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 7){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 6){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 7){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 5){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A4" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_5($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 4){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 4){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 7){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 5){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 8){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 2){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 6){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 0){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 2){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 4){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 2){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 2){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 1){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 8){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 3){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 0){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 6){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 7){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 1){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 5){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 0){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 1){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 6){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 9){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 3){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 7){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 9){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A5" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_6($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 8){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 8){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 0){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 0){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 5){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 3){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 7){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 7){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 1){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 2){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 4){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 6){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 5){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 6){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 6){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 8){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 5){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 0){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 5){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 7){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 9){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 8){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 3){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 5){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 0){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 4){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A6" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_7($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 2){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 4){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 3){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 2){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 1){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 1){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 0){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 3){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 5){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 1){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 8){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 5){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 6){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 6){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 9){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 9){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 7){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 4){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 3){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 1){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 9){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 6){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 2){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 7){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 9){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A7" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_8($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 2){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 0){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 6){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 4){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 1){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 8){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 6){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 7){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 8){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 6){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 9){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 8){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 8){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 2){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 4){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 6){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 5){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 6){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 3){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 9){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 6){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 6){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 6){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 9){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 6){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 3){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 0){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A8" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_9($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 7){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 5){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 8){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 7){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 4){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 7){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 5){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 0){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 8){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 4){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 2){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 3){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 0){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 8){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 3){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 6){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 0){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 2){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 5){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 7){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 5){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 7){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 7){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 8){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 2){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 4){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A9" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_10($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 8){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 2){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 0){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 5){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 1){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 5){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 4){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 5){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 3){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 5){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 4){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 9){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 9){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 5){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 9){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 2){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 8){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 5){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 7){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 8){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 9){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 1){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 0){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 3){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 8){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 0){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 0){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A10" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_11($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 9){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 0){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 0){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 8){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 1){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 7){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 3){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 2){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 3){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 3){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 6){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 2){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 1){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 8){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 6){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 9){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 7){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 2){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 4){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 9){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 7){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 7){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 2){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 1){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 0){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 6){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 8){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A11" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_12($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 6){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 7){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 4){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 2){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 8){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 8){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 9){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 5){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 9){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 4){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 6){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 8){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 2){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 6){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 5){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 9){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 5){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 3){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 0){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 7){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 3){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 0){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 2){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 0){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 3){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 5){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 3){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A12" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_13($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 4){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 8){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 5){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 7){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 3){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 6){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 7){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 2){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 0){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 8){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 9){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 0){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 8){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 5){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 9){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 9){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 1){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 4){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 4){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 7){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 4){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 8){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 1){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 4){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 9){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 5){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 6){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A13" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_14($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 8){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 7){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 7){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 2){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 9){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 4){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 6){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 2){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 1){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 6){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 2){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 8){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 0){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 2){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 5){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 0){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 5){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 1){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 7){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 0){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 4){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 3){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 7){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 5){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 6){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A14" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_15($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 3){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 7){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 0){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 0){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 9){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 2){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 4){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 8){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 3){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 5){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 3){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 7){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 6){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 6){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 3){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 4){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 4){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 9){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 9){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 8){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 1){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 7){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 2){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 8){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 4){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 6){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 1){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A15" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_16($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 9){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 1){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 6){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 8){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 9){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 0){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 3){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 0){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 2){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 9){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 5){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 2){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 5){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 0){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 2){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 4){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 7){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 8){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 2){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 9){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 2){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 8){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 2){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 1){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 9){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 0){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 4){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A16" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_17($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 0){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 9){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 4){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 0){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 8){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 0){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 3){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 3){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 1){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 9){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 6){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 3){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 9){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 1){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 3){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 4){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 3){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 3){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 3){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 1){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 0){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 8){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 5){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 0){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 4){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 0){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 1){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A17" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_18($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 7){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 2){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 1){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 4){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 8){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 1){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 9){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 4){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 5){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 1){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 9){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 6){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 5){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 5){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 8){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 2){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 2){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 2){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 0){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 6){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 1){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 1){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 2){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 2){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 4){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 7){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 4){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A18" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_19($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 3){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 8){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 8){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 3){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 0){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 6){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 1){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 3){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 0){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 2){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 9){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 8){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 7){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 0){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 2){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 3){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 0){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 0){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 0){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 8){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 6){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 3){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 6){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 9){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 8){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 2){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 3){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A19" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_20($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 9){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 6){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 4){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 8){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 7){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 9){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 0){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 0){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 4){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 0){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 7){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 0){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 5){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 6){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 3){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 5){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 4){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 1){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 9){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 2){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 5){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 6){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 9){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 8){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 2){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 4){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A20" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_21($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 7){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 9){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 1){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 0){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 3){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 0){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 5){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 8){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 4){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 9){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 5){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 2){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 7){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 7){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 4){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 3){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 9){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 9){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 6){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 0){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 5){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 5){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 8){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 2){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 8){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 4){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 6){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A21" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_22($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 3){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 6){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 1){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 7){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 0){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 4){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 3){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 8){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 8){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 0){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 3){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 6){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 9){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 6){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 2){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 9){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 5){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 0){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 8){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 1){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 1){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 2){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 1){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 7){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 3){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 3){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 0){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A22" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_23($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 8){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 3){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 0){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 0){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 0){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 7){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 4){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 4){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 8){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 4){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 3){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 5){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 8){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 7){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 5){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 1){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 5){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 9){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 1){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 4){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 8){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 4){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 1){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 8){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 1){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 7){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A23" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_24($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 3){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 6){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 1){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 3){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 5){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 4){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 6){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 4){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 1){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 5){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 3){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 1){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 2){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 6){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 6){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 1){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 6){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 6){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 5){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 0){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 0){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 5){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 2){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 5){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 9){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 4){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A24" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_25($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 9){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 0){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 0){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 3){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 7){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 5){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 9){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 1){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 3){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 0){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 5){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 9){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 0){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 2){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 8){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 1){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 0){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 5){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 4){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 8){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 6){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 7){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 4){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 8){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 8){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 6){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A25" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_26($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 9){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 9){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 5){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 5){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 4){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 9){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 5){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 4){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 4){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 4){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 4){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 4){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 8){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 2){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 4){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 0){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 1){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 8){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 8){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 8){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 5){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 3){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 3){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 5){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 1){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 9){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A26" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_27($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 3){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 0){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 1){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 2){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 3){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 3){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 1){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 8){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 4){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 0){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 6){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 5){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 8){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 0){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 5){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 4){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 6){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 0){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 8){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 5){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 3){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 1){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 3){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 6){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 1){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 7){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A27" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_28($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 2){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 1){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 0){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 2){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 2){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 3){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 4){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 9){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 1){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 8){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 3){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 7){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 4){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 3){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 6){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 1){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 3){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 0){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 1){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 6){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 4){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 0){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 9){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 6){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 9){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 5){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A28" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_29($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 6){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 5){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 7){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 2){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 0){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 7){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 2){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 2){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 9){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 2){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 6){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 3){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 1){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 4){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 0){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 9){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 1){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 7){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 5){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 5){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 9){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 8){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 8){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 0){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 4){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 9){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A29" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_30($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 1){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 1){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 5){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 0){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 5){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 0){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 6){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 3){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 4){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 8){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 7){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 3){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 5){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 1){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 1){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 1){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 6){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 4){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 9){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 0){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 0){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 4){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 0){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 7){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 2){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 4){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A30" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_31($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 1){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 0){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 3){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 4){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 5){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 3){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 6){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 7){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 8){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 1){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 2){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 8){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 8){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 6){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 7){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 6){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 5){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 1){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 0){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 1){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 6){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 8){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 3){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 8){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 8){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 2){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 2){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A31" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_32($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 2){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 6){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 0){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 9){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 4){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 4){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 7){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 0){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 8){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 2){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 4){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 4){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 4){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 5){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 1){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 1){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 6){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 1){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 1){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 6){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 0){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 0){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 5){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 9){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 3){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 9){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 2){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A32" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_33($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 5){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 6){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 1){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 8){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 8){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 3){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 5){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 8){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 0){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 2){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 2){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 1){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 5){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 8){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 4){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 5){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 4){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 0){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 9){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 5){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 5){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 0){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 5){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 7){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 2){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 0){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A33" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_34($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 5){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 2){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 6){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 8){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 3){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 4){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 2){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 3){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 8){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 0){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 8){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 4){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 6){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 4){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 7){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 3){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 2){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 4){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 5){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 8){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 5){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 6){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 0){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 4){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 1){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 2){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A34" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_35($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 4){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 5){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 3){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 3){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 6){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 0){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 5){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 3){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 6){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 7){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 6){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 8){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 8){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 1){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 5){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 1){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 5){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 8){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 2){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 9){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 0){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 3){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 3){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 6){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 0){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 6){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 8){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A35" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_36($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 6){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 1){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 2){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 6){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 6){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 2){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 6){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 4){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 0){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 3){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 2){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 5){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 3){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 8){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 5){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 4){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 5){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 7){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 2){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 0){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 0){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 5){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 5){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 1){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 5){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 7){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 9){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A36" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_37($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 3){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 5){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 9){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 5){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 2){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 1){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 0){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 1){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 5){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 4){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 7){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 5){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 1){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 7){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 4){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 7){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 2){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 3){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 4){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 3){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 1){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 9){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 2){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 2){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 3){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 6){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A37" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_38($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 5){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 4){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 7){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 9){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 9){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 7){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 8){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 7){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 9){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 1){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 5){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 8){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 3){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 9){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 4){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 0){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 0){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 6){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 6){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 8){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 8){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 6){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 3){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 1){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 5){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 1){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 0){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A38" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_39($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 8){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 1){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 8){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 2){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 2){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 0){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 0){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 9){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 7){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 6){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 4){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 6){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 1){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 1){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 6){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 8){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 1){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 7){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 3){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 8){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 3){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 3){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 0){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 0){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 0){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 2){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 6){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A39" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_40($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 1){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 7){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 0){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 1){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 6){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 1){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 0){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 8){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 2){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 0){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 3){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 5){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 5){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 9){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 2){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 6){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 7){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 6){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 6){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 4){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 0){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 2){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 8){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 7){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 0){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 1){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 7){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A40" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_41($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 7){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 2){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 3){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 9){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 7){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 2){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 1){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 2){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 2){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 6){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 7){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 3){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 0){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 0){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 4){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 0){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 2){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 2){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 8){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 2){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 7){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 3){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 4){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 6){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 6){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 6){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A41" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_42($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 7){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 4){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 2){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 7){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 1){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 1){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 5){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 3){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 3){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 9){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 2){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 0){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 1){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 9){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 8){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 7){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 5){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 6){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 6){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 9){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 8){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 0){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 1){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 0){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 8){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 3){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A42" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_43($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 5){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 0){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 5){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 0){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 7){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 3){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 5){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 2){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 2){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 8){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 3){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 5){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 0){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 5){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 6){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 5){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 4){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 6){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 4){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 8){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 5){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 7){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 0){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 5){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 9){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 6){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 3){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A43" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_44($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 7){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 6){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 7){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 2){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 4){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 2){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 9){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 7){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 9){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 3){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 6){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 6){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 5){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 6){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 4){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 4){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 7){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 4){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 1){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 9){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 4){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 8){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 9){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 9){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 3){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 6){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 1){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A44" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_45($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 1){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 9){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 5){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 1){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 5){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 4){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 2){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 7){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 1){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 7){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 6){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 4){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 8){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 4){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 5){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 7){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 7){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 4){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 6){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 7){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 0){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 4){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 2){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 3){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 5){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 2){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 1){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A45" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_46($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 9){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 2){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 8){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 6){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 5){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 7){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 3){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 4){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 8){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 5){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 7){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 9){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 6){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 8){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 9){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 9){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 7){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 9){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 3){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 3){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 5){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 8){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 6){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 0){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 4){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 2){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 4){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A46" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_47($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 1){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 6){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 6){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 3){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 3){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 0){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 9){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 6){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 0){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 0){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 0){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 5){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 1){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 0){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 0){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 1){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 4){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 8){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 6){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 2){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 5){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 3){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 3){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 1){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 6){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 6){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 2){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A47" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_48($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 6){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 6){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 6){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 9){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 7){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 7){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 0){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 9){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 3){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 4){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 1){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 0){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 3){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 7){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 7){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 5){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 7){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 7){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 6){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 8){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 9){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 2){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 5){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 8){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 2){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 5){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 9){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A48" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_49($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 7){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 8){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 1){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 4){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 2){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 8){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 0){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 7){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 4){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 9){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 2){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 8){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 7){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 4){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 7){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 9){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 4){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 8){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 4){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 6){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 1){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 2){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 9){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 0){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 1){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 2){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 4){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A49" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }

    public function update_50($user_id){

        $A1         = $this->input->post('A11');
        $A2         = $this->input->post('A12');
        $A3         = $this->input->post('A13');
        $A4         = $this->input->post('A14');
        $A5         = $this->input->post('A15');
        $A6         = $this->input->post('A16');
        $A7         = $this->input->post('A17');
        $A8         = $this->input->post('A18');
        $A9         = $this->input->post('A19');
        $A10        = $this->input->post('A110');
        $A11        = $this->input->post('A111');
        $A12        = $this->input->post('A112');
        $A13        = $this->input->post('A113');
        $A14        = $this->input->post('A114');
        $A15        = $this->input->post('A115');
        $A16        = $this->input->post('A116');
        $A17        = $this->input->post('A117');
        $A18        = $this->input->post('A118');
        $A19        = $this->input->post('A119');
        $A20        = $this->input->post('A120');
        $A21        = $this->input->post('A121');
        $A22        = $this->input->post('A122');
        $A23        = $this->input->post('A123');
        $A24        = $this->input->post('A124');
        $A25        = $this->input->post('A125');
        $A26        = $this->input->post('A126');
        $A27        = $this->input->post('A127');
        
        $A1_1 = 0;
        $A2_1 = 0;
        $A3_1 = 0;
        $A4_1 = 0;
        $A5_1 = 0;
        $A6_1 = 0;
        $A7_1 = 0;
        $A8_1 = 0;
        $A9_1 = 0;
        $A10_1 = 0;
        $A11_1 = 0;
        $A12_1 = 0;
        $A13_1 = 0;
        $A14_1 = 0;
        $A15_1 = 0;
        $A16_1 = 0;
        $A17_1 = 0;
        $A18_1 = 0;
        $A19_1 = 0;
        $A20_1 = 0;
        $A21_1 = 0;
        $A22_1 = 0;
        $A23_1 = 0;
        $A24_1 = 0;
        $A25_1 = 0;
        $A26_1 = 0;
        $A27_1 = 0;
        

        if($A1 == 8){ $A1 = 1; }else{ $A1 = 0; $A1_1 = 1; }
        if($A2 == 2){ $A2 = 1; }else{ $A2 = 0; $A2_1 = 1; }
        if($A3 == 4){ $A3 = 1; }else{ $A3 = 0; $A3_1 = 1; }
        if($A4 == 5){ $A4 = 1; }else{ $A4 = 0; $A4_1 = 1; }
        if($A5 == 3){ $A5 = 1; }else{ $A5 = 0; $A5_1 = 1; }
        if($A6 == 1){ $A6 = 1; }else{ $A6 = 0; $A6_1 = 1; }
        if($A7 == 1){ $A7 = 1; }else{ $A7 = 0; $A8_1 = 1; }
        if($A8 == 8){ $A8 = 1; }else{ $A8 = 0; $A9_1 = 1; }
        if($A9 == 9){ $A9 = 1; }else{ $A9 = 0; $A10_1 = 1; }
        if($A10 == 2){ $A10 = 1; }else{ $A10 = 0; $A10_1 = 1; }
        if($A11 == 4){ $A11 = 1; }else{ $A11 = 0; $A11_1 = 1; }
        if($A12 == 3){ $A12 = 1; }else{ $A12 = 0; $A12_1 = 1; }
        if($A13 == 8){ $A13 = 1; }else{ $A13 = 0; $A13_1 = 1; }
        if($A14 == 2){ $A14 = 1; }else{ $A14 = 0; $A14_1 = 1; }
        if($A15 == 1){ $A15 = 1; }else{ $A15 = 0; $A15_1 = 1; }
        if($A16 == 5){ $A16 = 1; }else{ $A16 = 0; $A16_1 = 1; }
        if($A17 == 7){ $A17 = 1; }else{ $A17 = 0; $A17_1 = 1; }
        if($A18 == 2){ $A18 = 1; }else{ $A18 = 0; $A18_1 = 1; }
        if($A19 == 9){ $A19 = 1; }else{ $A19 = 0; $A19_1 = 1; }
        if($A20 == 9){ $A20 = 1; }else{ $A20 = 0; $A20_1 = 1; }
        if($A21 == 2){ $A21 = 1; }else{ $A21 = 0; $A21_1 = 1; }
        if($A22 == 8){ $A22 = 1; }else{ $A22 = 0; $A22_1 = 1; }
        if($A23 == 6){ $A23 = 1; }else{ $A23 = 0; $A23_1 = 1; }
        if($A24 == 4){ $A24 = 1; }else{ $A24 = 0; $A24_1 = 1; }
        if($A25 == 0){ $A25 = 1; }else{ $A25 = 0; $A25_1 = 1; }
        if($A26 == 0){ $A26 = 1; }else{ $A26 = 0; $A26_1 = 1; }
        if($A27 == 6){ $A27 = 1; }else{ $A27 = 0; $A27_1 = 1; }

        $TotalSalah = $A1_1+$A2_1+$A3_1+$A4_1+$A5_1+$A6_1+$A7_1+$A8_1+$A9_1+$A10_1+$A11_1+$A12_1+$A13_1+$A14_1+$A15_1+$A16_1+$A17_1+$A18_1+$A19_1+$A20_1+$A21_1+$A22_1+$A23_1+$A24_1+$A25_1+$A26_1+$A27_1;
        $data = array(
            "USERNAME" => $user_id,
            "A50" => $TotalSalah
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('hr_kraeplin',$data);

    }
}

?>