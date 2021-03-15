<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UjianModel extends CI_Model{

    public function cek_intelegensi($user_id){
        
        $satu       =  $this->input->post('nomor1');
        $dua        =  $this->input->post('nomor2');
        $tiga       =  $this->input->post('nomor3');
        $empat      =  $this->input->post('nomor4');
        $lima       =  $this->input->post('nomor5');
        $enam       =  $this->input->post('nomor6');
        $tujuh      =  $this->input->post('nomor7');
        $delapan    =  $this->input->post('nomor8'); 
        $status     =  0;

        if($satu == "A")    {$satu = "Benar";    $status = $status+1;}      else{$satu = "Salah";}
        if($dua == "B")     {$dua = "Benar";     $status = $status+1;}       else{$dua = "Salah";}
        if($tiga == "C")    {$tiga = "Benar";    $status = $status+1;}      else{$tiga = "Salah";}
        if($empat == "D")   {$empat = "Benar";   $status = $status+1;}     else{$empat = "Salah";}
        if($lima == "A")    {$lima = "Benar";    $status = $status+1;}      else{$lima = "Salah";}
        if($enam == "B")    {$enam = "Benar";    $status = $status+1;}      else{$enam = "Salah";}        
        if($tujuh == "C")   {$tujuh = "Benar";   $status = $status+1;}     else{$tujuh = "Salah";}
        if($delapan == "D") {$delapan = "Benar"; $status = $status+1;}   else{$delapan = "Salah";}

        if ($status>7){
            $status = "Lulus";
        } else {
            $status = "Gagal";
        }

        $data = array(
            "USERNAME"  =>  $user_id,
            "JAWABAN1"  =>  $satu,
            "JAWABAN2"  =>  $dua,
            "JAWABAN3"  =>  $tiga,
            "JAWABAN4"  =>  $empat,
            "JAWABAN5"  =>  $lima,
            "JAWABAN6"  =>  $enam,
            "JAWABAN7"  =>  $tujuh,
            "JAWABAN8"  =>  $delapan,
            "STATUS"    =>  $status
        );

        $this->db->insert('intelegensi',$data);

        // Update status di tabel user bahwa yang bersangkutan sudah menyelesaikan ujian

        $data = array (
            "INTELEGENSI"   => 'Sudah'
        );
        $this->db->where('USERNAME',$user_id);
        $this->db->update('user',$data);
    }

    public function klasterisasi_soal($user_id){
        $this->db->where('USERNAME',$user_id);
        return $this->db->get('user')->result();
    }

    public function cek_minat_bakat($user_id){
        $data = array(
            "USERNAME"  =>  $user_id,
            "A1"    =>  $this->input->post('A1'),
            "A2"    =>  $this->input->post('A2'),
            "A3"    =>  $this->input->post('A3'),
            "A4"    =>  $this->input->post('A4'),
            "A5"    =>  $this->input->post('A5'),
            "A6"    =>  $this->input->post('A6'),
            "A7"    =>  $this->input->post('A7'),
            "A8"    =>  $this->input->post('A8'),
            "A9"    =>  $this->input->post('A9'),
            "A10"   =>  $this->input->post('A10'),
            "A11"   =>  $this->input->post('A11'),
            "A12"   =>  $this->input->post('A12'),
            "B1"    =>  $this->input->post('B1'),
            "B2"    =>  $this->input->post('B2'),
            "B3"    =>  $this->input->post('B3'),
            "B4"    =>  $this->input->post('B4'),
            "B5"    =>  $this->input->post('B5'),
            "B6"    =>  $this->input->post('B6'),
            "B7"    =>  $this->input->post('B7'),
            "B8"    =>  $this->input->post('B8'),
            "B9"    =>  $this->input->post('B9'),
            "B10"   =>  $this->input->post('B10'),
            "B11"   =>  $this->input->post('B11'),
            "B12"   =>  $this->input->post('B12'),
            "C1"    =>  $this->input->post('C1'),
            "C2"    =>  $this->input->post('C2'),
            "C3"    =>  $this->input->post('C3'),
            "C4"    =>  $this->input->post('C4'),
            "C5"    =>  $this->input->post('C5'),
            "C6"    =>  $this->input->post('C6'),
            "C7"    =>  $this->input->post('C7'),
            "C8"    =>  $this->input->post('C8'),
            "C9"    =>  $this->input->post('C9'),
            "C10"   =>  $this->input->post('C10'),
            "C11"   =>  $this->input->post('C11'),
            "C12"   =>  $this->input->post('C12'),
            "D1"    =>  $this->input->post('D1'),
            "D2"    =>  $this->input->post('D2'),
            "D3"    =>  $this->input->post('D3'),
            "D4"    =>  $this->input->post('D4'),
            "D5"    =>  $this->input->post('D5'),
            "D6"    =>  $this->input->post('D6'),
            "D7"    =>  $this->input->post('D7'),
            "D8"    =>  $this->input->post('D8'),
            "D9"    =>  $this->input->post('D9'),
            "D10"   =>  $this->input->post('D10'),
            "D11"   =>  $this->input->post('D11'),
            "D12"   =>  $this->input->post('D12'),
            "E1"    =>  $this->input->post('E1'),
            "E2"    =>  $this->input->post('E2'),
            "E3"    =>  $this->input->post('E3'),
            "E4"    =>  $this->input->post('E4'),
            "E5"    =>  $this->input->post('E5'),
            "E6"    =>  $this->input->post('E6'),
            "E7"    =>  $this->input->post('E7'),
            "E8"    =>  $this->input->post('E8'),
            "E9"    =>  $this->input->post('E9'),
            "E10"   =>  $this->input->post('E10'),
            "E11"   =>  $this->input->post('E11'),
            "E12"   =>  $this->input->post('E12'),
            "F1"    =>  $this->input->post('F1'),
            "F2"    =>  $this->input->post('F2'),
            "F3"    =>  $this->input->post('F3'),
            "F4"    =>  $this->input->post('F4'),
            "F5"    =>  $this->input->post('F5'),
            "F6"    =>  $this->input->post('F6'),
            "F7"    =>  $this->input->post('F7'),
            "F8"    =>  $this->input->post('F8'),
            "F9"    =>  $this->input->post('F9'),
            "F10"   =>  $this->input->post('F10'),
            "F11"   =>  $this->input->post('F11'),
            "F12"   =>  $this->input->post('F12'),
            "G1"    =>  $this->input->post('G1'),
            "G2"    =>  $this->input->post('G2'),
            "G3"    =>  $this->input->post('G3'),
            "G4"    =>  $this->input->post('G4'),
            "G5"    =>  $this->input->post('G5'),
            "G6"    =>  $this->input->post('G6'),
            "G7"    =>  $this->input->post('G7'),
            "G8"    =>  $this->input->post('G8'),
            "G9"    =>  $this->input->post('G9'),
            "G10"   =>  $this->input->post('G10'),
            "G11"   =>  $this->input->post('G11'),
            "G12"   =>  $this->input->post('G12'),
            "H1"    =>  $this->input->post('H1'),
            "H2"    =>  $this->input->post('H2'),
            "H3"    =>  $this->input->post('H3'),
            "H4"    =>  $this->input->post('H4'),
            "H5"    =>  $this->input->post('H5'),
            "H6"    =>  $this->input->post('H6'),
            "H7"    =>  $this->input->post('H7'),
            "H8"    =>  $this->input->post('H8'),
            "H9"    =>  $this->input->post('H9'),
            "H10"   =>  $this->input->post('H10'),
            "H11"   =>  $this->input->post('H11'),
            "H12"   =>  $this->input->post('H12'),
            "I1"    =>  $this->input->post('I1'),
            "I2"    =>  $this->input->post('I2'),
            "I3"    =>  $this->input->post('I3'),
            "I4"    =>  $this->input->post('I4'),
            "I5"    =>  $this->input->post('I5'),
            "I6"    =>  $this->input->post('I6'),
            "I7"    =>  $this->input->post('I7'),
            "I8"    =>  $this->input->post('I8'),
            "I9"    =>  $this->input->post('I9'),
            "I10"   =>  $this->input->post('I10'),
            "I11"   =>  $this->input->post('I11'),
            "I12"   =>  $this->input->post('I12')                                              
        );

        $this->db->insert('minat_bakat',$data);

        // Update status di tabel user bahwa yang bersangkutan sudah menyelesaikan ujian

        $data = array (
            "MINAT_BAKAT"   => 'Sudah'
        );
        $this->db->where('USERNAME',$user_id);
        $this->db->update('user',$data);        

    }

    public function cek_personality($user_id){
        $data = array(
            "USERNAME"  =>  $user_id,
            "M1"        =>  $this->input->post('M1'),
            "M2"        =>  $this->input->post('M2'),
            "M3"        =>  $this->input->post('M3'),
            "M4"        =>  $this->input->post('M4'),
            "M5"        =>  $this->input->post('M5'),
            "M6"        =>  $this->input->post('M6'),
            "M7"        =>  $this->input->post('M7'),
            "M8"        =>  $this->input->post('M8'),
            "M9"        =>  $this->input->post('M9'),
            "M10"       =>  $this->input->post('M10'),
            "M11"       =>  $this->input->post('M11'),
            "M12"       =>  $this->input->post('M12'),
            "M13"       =>  $this->input->post('M13'),
            "M14"       =>  $this->input->post('M14'),
            "M15"       =>  $this->input->post('M15'),
            "M16"       =>  $this->input->post('M16'),
            "M17"       =>  $this->input->post('M17'),
            "M18"       =>  $this->input->post('M18'),
            "M19"       =>  $this->input->post('M19'),
            "M20"       =>  $this->input->post('M20'),
            "M21"       =>  $this->input->post('M21'),
            "M22"       =>  $this->input->post('M22'),
            "M23"       =>  $this->input->post('M23'),
            "M24"       =>  $this->input->post('M24'),
            "L1"        =>  $this->input->post('L1'),
            "L2"        =>  $this->input->post('L2'),
            "L3"        =>  $this->input->post('L3'),
            "L4"        =>  $this->input->post('L4'),
            "L5"        =>  $this->input->post('L5'),
            "L6"        =>  $this->input->post('L6'),
            "L7"        =>  $this->input->post('L7'),
            "L8"        =>  $this->input->post('L8'),
            "L9"        =>  $this->input->post('L9'),
            "L10"       =>  $this->input->post('L10'),
            "L11"       =>  $this->input->post('L11'),
            "L12"       =>  $this->input->post('L12'),
            "L13"       =>  $this->input->post('L13'),
            "L14"       =>  $this->input->post('L14'),
            "L15"       =>  $this->input->post('L15'),
            "L16"       =>  $this->input->post('L16'),
            "L17"       =>  $this->input->post('L17'),
            "L18"       =>  $this->input->post('L18'),
            "L19"       =>  $this->input->post('L19'),
            "L20"       =>  $this->input->post('L20'),
            "L21"       =>  $this->input->post('L21'),
            "L22"       =>  $this->input->post('L22'),
            "L23"       =>  $this->input->post('L23'),
            "L24"       =>  $this->input->post('L24')                        
        );

        $this->db->insert('hr_personality',$data);

        // Update status di tabel user bahwa yang bersangkutan sudah menyelesaikan ujian

        $data = array (
            "PERSONALITY"   => 'Sudah'
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('user',$data);        
    }

    public function cek_kemampuan($user_id){
        $A1 = $this->input->post('A1');
        $A2 = $this->input->post('A2');
        $A3 = $this->input->post('A3');
        $A4 = $this->input->post('A4');
        $A5 = $this->input->post('A5');
        $A6 = $this->input->post('A6');
        $A7 = $this->input->post('A7');
        $A8 = $this->input->post('A8');
        $A9 = $this->input->post('A9');
        $A10 = $this->input->post('A10');
        $A11 = $this->input->post('A11');
        $A12 = $this->input->post('A12');
        $A13 = $this->input->post('A13');
        $A14 = $this->input->post('A14');
        $A15 = $this->input->post('A15');
        $A16 = $this->input->post('A16');
        $A17 = $this->input->post('A17');
        $A18 = $this->input->post('A18');
        $A19 = $this->input->post('A19');
        $A20 = $this->input->post('A20');
        $A21 = $this->input->post('A12');
        $A22 = $this->input->post('A22');
        $A23 = $this->input->post('A23');
        $A24 = $this->input->post('A24');

        $VPS    =   $A2+$A3+$A7+$A10+$A14+$A16+$A20+$A22;
        $APS    =   $A1+$A5+$A8+$A11+$A13+$A18+$A21+$A24;
        $KPS    =   $A4+$A6+$A9+$A12+$A15+$A17+$A19+$A23;

        $data = array(
            "USERNAME"  =>  $user_id,
            "VPS"       =>  $VPS,
            "APS"       =>  $APS,
            "KPS"       =>  $KPS,
            "JAWABAN1"  =>  $A1,
            "JAWABAN2"  =>  $A2,
            "JAWABAN3"  =>  $A3,
            "JAWABAN4"  =>  $A4,
            "JAWABAN5"  =>  $A5,
            "JAWABAN6"  =>  $A6,
            "JAWABAN7"  =>  $A7,
            "JAWABAN8"  =>  $A8,
            "JAWABAN19"  =>  $A9,
            "JAWABAN10"  =>  $A10,
            "JAWABAN11"  =>  $A11,
            "JAWABAN12"  =>  $A12,
            "JAWABAN13"  =>  $A13,
            "JAWABAN14"  =>  $A14,
            "JAWABAN15"  =>  $A15,
            "JAWABAN16"  =>  $A16,
            "JAWABAN17"  =>  $A17,
            "JAWABAN18"  =>  $A18,
            "JAWABAN19"  =>  $A19,
            "JAWABAN20"  =>  $A20,
            "JAWABAN21"  =>  $A21,
            "JAWABAN22"  =>  $A22,
            "JAWABAN23"  =>  $A23,
            "JAWABAN24"  =>  $A24,
        );

        $this->db->insert('hr_kemampuan',$data);
        
        // Update status di tabel user bahwa yang bersangkutan sudah menyelesaikan ujian

        $data = array (
            "KEMAMPUAN"   => 'Sudah'
        );
        
        $this->db->where('USERNAME',$user_id);
        $this->db->update('user',$data);        
    }

}
?>