<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{

    public function welcome(){
        $this->load->model('DashboardModel');
        $user_id = $this->session->username;
        $data['status'] = $this->DashboardModel->akses($user_id);
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav_dashboard',$data);
        $this->load->view('welcome');
        $this->load->view('_tema/jsfooter');
    }


    public function export(){
        // Load plugin PHP Excel :'(
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        // Panggil class PHP Excel
        $excel = new PHPExcel();

        //Setting awal PHP Excel
        $excel->getProperties()->setCreator('HR Dea Bakery')
                                ->setLastModifiedBy('HR Dea Bakery')
                                ->setTitle('Hasil Tes')
                                ->setSubject('Tes Recruitment')
                                ->setDescription('Laporan Hasil Tes Recruitment')
                                ->setKeywords("Data Recruitment");

        // Variabel untuk menampung semua style yang maoo diexport wkwk
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
              'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
              'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            // Buat ngatur bordernyaaa
            'borders' => array(
              'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
              'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
              'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
              'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
          );
        
              // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
            'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            // Ini buat border
            'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );

        $excel->setActiveSheetIndex(0)->setCellValue('A1','Data Karyawan Baru'); // isi range A1 njirr
        $excel->getActiveSheet()->mergeCells('A1:E1'); // Ini buat merge cell
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $excel->setActiveSheetIndex(0)->setCellValue('A3','NIK');
        $excel->setActiveSheetIndex(0)->setCellValue('B3','Nama');
        $excel->setActiveSheetIndex(0)->setCellValue('C3','Email');
        $excel->setActiveSheetIndex(0)->setCellValue('D3','HP');
        $excel->setActiveSheetIndex(0)->setCellValue('E3','Alamat');
      
        // panggil fungsi view yang ada di model
        $user_id = $this->session->username;
        $this->load->model('SettingModel');
        $recruit = $this->SettingModel->view_profile($user_id);
        
        // Set baris pertama untuk isi tabel adalah baris pertama
        $numrow = 4;

        foreach($recruit as $data){
            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->NIK);
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->NAMA);
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->EMAIL);
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->PHONE);
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->ALAMAT);

            // Apply Style yang kita buat tadiii kwwk

            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);

            $numrow++; // nambah stiap kali looping :)
            $nama = $data->NAMA;
        }

        // set lebar kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(25); 
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(25); 

        // set tinggi semua kolom jd auto. Intinya ngikutin isinya lah
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

        // Set jadi landscapeeeee gaisss
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

        // set Judul file excelnyaa
        $excel->getActiveSheet(0)->setTitle('Ini Sheet 1');
        $excel->setActiveSheetIndex(0);

        // Proses file exccel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Recruit_'.$nama.'.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');

    }

    public function thanks(){
        $this->load->view('thanks');
    }
}