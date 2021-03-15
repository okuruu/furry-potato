<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HasilRecruitment extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('HasilRecruitmentModel');
        $this->load->model('DashboardModel');
    }
    
    public function index(){
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('_tema/sidebar');
        $this->load->view('HR/hasilrecruit');
        $this->load->view('_tema/jsfooter');
    }

    public function recruiter(){
        $data['pendaftar'] = $this->HasilRecruitmentModel->getData();
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('_tema/sidebar');
        $this->load->view('HR/datadiri',$data);
        $this->load->view('_tema/jsfooter');
    }

    public function hapus($ktp){
        $this->HasilRecruitmentModel->delete($ktp);
        redirect('HasilRecruitment/recruiter');
    }

    public function export_choose($ktp){
        //load plugin PHP Excel :(
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        $this->load->model('DashboardModel');
        // Panggil class PHP Excel
        $excel = new PHPExcel();
        
        $inputFileName  = './assets/files/Data_Pelamar.xlsx';

        //  Read your Excel workbook
            try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $excels = $objReader->load($inputFileName);
                $identitas_1 = $this->DashboardModel->getAllData($ktp);
                $identitas_2 = $this->DashboardModel->getAllData_2($ktp);
                $excels->setActiveSheetIndex(0);

                $sheet_dimension = $excels->getActiveSheet()->calculateWorksheetDimension();
                
                foreach($identitas_1 as $data){

                $tanggal_lahir  =   $data->tanggal_lahir;
                $tanggal_lahir  =   date("d/m/Y",strtotime($tanggal_lahir));
                $kombinasi_ttl  =   $data->tempat_lahir . ", " . $tanggal_lahir;
                $namaa  =  $data->nama_lengkap;

                $excels->getActiveSheet()->setCellValue('J13',$data->posisi);
                $excels->getActiveSheet()->setCellValue('Y13',$data->sumber_lowongan);
                $excels->getActiveSheet()->setCellValue('J15',$namaa);
                $excels->getActiveSheet()->setCellValue('Y15',$data->kelamin);
                $excels->getActiveSheet()->setCellValue('J17',$data->panggilan);
                $excels->getActiveSheet()->setCellValue('Y17',$data->goldar);
                $excels->getActiveSheet()->setCellValue('J19',$kombinasi_ttl);
                $excels->getActiveSheet()->setCellValue('Y19',$data->agama);
                $excels->getActiveSheet()->setCellValueExplicit('J21',$data->ktp, PHPExcel_Cell_DataType::TYPE_STRING);
                $excels->getActiveSheet()->setCellValue('Y21',$data->email);
                $excels->getActiveSheet()->setCellValue('J23',$data->paspor);
                $excels->getActiveSheet()->setCellValue('Y23',$data->telepon);
                $excels->getActiveSheet()->setCellValue('J25',$data->sim);
                $excels->getActiveSheet()->setCellValue('Y25',$data->hp);
                $excels->getActiveSheet()->setCellValue('J27',$data->alamat_sekarang);
                $excels->getActiveSheet()->setCellValue('J30',$data->alamat_ktp);
                $excels->getActiveSheet()->setCellValue('J32',$data->status);

                $excels->getActiveSheet()->setCellValue('I38',$data->nama_ayah);
                $excels->getActiveSheet()->setCellValue('I40',$data->nama_ibu);
                $excels->getActiveSheet()->setCellValue('N38',$data->TTL_ayah);
                $excels->getActiveSheet()->setCellValue('N40',$data->TTL_ibu);
                $excels->getActiveSheet()->setCellValue('V38',$data->pekerjaan_ayah);
                $excels->getActiveSheet()->setCellValue('V40',$data->pekerjaan_ibu);
                
                $excels->getActiveSheet()->setCellValue('I44',$data->nama_saudara1);
                $excels->getActiveSheet()->setCellValue('N44',$data->ttl_saudara1);
                $excels->getActiveSheet()->setCellValue('V44',$data->pekerjaan_saudara1);
                $excels->getActiveSheet()->setCellValue('I45',$data->nama_saudara2);
                $excels->getActiveSheet()->setCellValue('N45',$data->ttl_saudara2);
                $excels->getActiveSheet()->setCellValue('V45',$data->pekerjaan_saudara2);
                $excels->getActiveSheet()->setCellValue('I46',$data->nama_saudara3);
                $excels->getActiveSheet()->setCellValue('N46',$data->ttl_saudara3);
                $excels->getActiveSheet()->setCellValue('V46',$data->pekerjaan_saudara3);
                $excels->getActiveSheet()->setCellValue('I47',$data->nama_saudara4);
                $excels->getActiveSheet()->setCellValue('N47',$data->ttl_saudara4);
                $excels->getActiveSheet()->setCellValue('V47',$data->pekerjaan_saudara4);

                $excels->getActiveSheet()->setCellValue('H74',$data->sdn);
                $excels->getActiveSheet()->setCellValue('S74',$data->jurusan_sd);
                $excels->getActiveSheet()->setCellValue('Y74',$data->lulus_sd);
                $excels->getActiveSheet()->setCellValue('AE74',$data->nilai_sd);
                $excels->getActiveSheet()->setCellValue('H76',$data->smp);
                $excels->getActiveSheet()->setCellValue('S76',$data->jurusan_smp);
                $excels->getActiveSheet()->setCellValue('Y76',$data->lulus_smp);
                $excels->getActiveSheet()->setCellValue('AE76',$data->nilai_smp);

                $excels->getActiveSheet()->setCellValue('H78',$data->sma);
                $excels->getActiveSheet()->setCellValue('S78',$data->jurusan_sma);
                $excels->getActiveSheet()->setCellValue('Y78',$data->lulus_sma);
                $excels->getActiveSheet()->setCellValue('AE78',$data->nilai_sma);
                
                $excels->getActiveSheet()->setCellValue('H80',$data->d3);
                $excels->getActiveSheet()->setCellValue('S80',$data->jurusan_d3);
                $excels->getActiveSheet()->setCellValue('Y80',$data->lulus_d3);
                $excels->getActiveSheet()->setCellValue('AE80',$data->nilai_d3);
                
                $excels->getActiveSheet()->setCellValue('AE78',$data->nilai_sma);
                $excels->getActiveSheet()->setCellValue('AE78',$data->nilai_sma);
                $excels->getActiveSheet()->setCellValue('AE78',$data->nilai_sma);
                $excels->getActiveSheet()->setCellValue('AE78',$data->nilai_sma);


                $excels->getActiveSheet()->setCellValue('H82',$data->s1);
                $excels->getActiveSheet()->setCellValue('S82',$data->jurusan_s1);
                $excels->getActiveSheet()->setCellValue('Y82',$data->lulus_s1);
                $excels->getActiveSheet()->setCellValue('AE82',$data->ipk);
                $excels->getActiveSheet()->setCellValue('H84',$data->s2);
                $excels->getActiveSheet()->setCellValue('S84',$data->jurusan_s2);
                $excels->getActiveSheet()->setCellValue('Y84',$data->lulus_s2);
                $excels->getActiveSheet()->setCellValue('AE84',$data->ipk_s2);
                
                $excels->getActiveSheet()->setCellValue('A90',$data->kursus);
                $excels->getActiveSheet()->setCellValue('K90',$data->lama_kursus);
                $excels->getActiveSheet()->setCellValue('Q90',$data->tahun_kursus);
                $excels->getActiveSheet()->setCellValue('S90',$data->penyelenggara_kursus);
                $excels->getActiveSheet()->setCellValue('X90',$data->lokasi_kursus);
                $excels->getActiveSheet()->setCellValue('AB90',$data->biaya_kursus);

                $excels->getActiveSheet()->setCellValue('A91',$data->kursus2);
                $excels->getActiveSheet()->setCellValue('K91',$data->lama_kursus2);
                $excels->getActiveSheet()->setCellValue('Q91',$data->tahun_kursus2);
                $excels->getActiveSheet()->setCellValue('S91',$data->penyelenggara_kursus2);
                $excels->getActiveSheet()->setCellValue('X91',$data->lokasi_kursus2);
                $excels->getActiveSheet()->setCellValue('AB91',$data->biaya_kursus2);

                $excels->getActiveSheet()->setCellValue('A92',$data->kursus3);
                $excels->getActiveSheet()->setCellValue('K92',$data->lama_kursus3);
                $excels->getActiveSheet()->setCellValue('Q92',$data->tahun_kursus3);
                $excels->getActiveSheet()->setCellValue('S92',$data->penyelenggara_kursus3);
                $excels->getActiveSheet()->setCellValue('X92',$data->lokasi_kursus3);
                $excels->getActiveSheet()->setCellValue('AB92',$data->biaya_kursus3);

                $excels->getActiveSheet()->setCellValue('A93',$data->kursus4);
                $excels->getActiveSheet()->setCellValue('K93',$data->lama_kursus4);
                $excels->getActiveSheet()->setCellValue('Q93',$data->tahun_kursus4);
                $excels->getActiveSheet()->setCellValue('S93',$data->penyelenggara_kursus4);
                $excels->getActiveSheet()->setCellValue('X93',$data->lokasi_kursus4);
                $excels->getActiveSheet()->setCellValue('AB93',$data->biaya_kursus4);

                $excels->getActiveSheet()->setCellValue('A94',$data->kursus5);
                $excels->getActiveSheet()->setCellValue('K94',$data->lama_kursus5);
                $excels->getActiveSheet()->setCellValue('Q94',$data->tahun_kursus5);
                $excels->getActiveSheet()->setCellValue('S94',$data->penyelenggara_kursus5);
                $excels->getActiveSheet()->setCellValue('X94',$data->lokasi_kursus5);
                $excels->getActiveSheet()->setCellValue('AB94',$data->biaya_kursus5); 

                $excels->getActiveSheet()->setCellValue('A95',$data->kursus6);
                $excels->getActiveSheet()->setCellValue('K95',$data->lama_kursus6);
                $excels->getActiveSheet()->setCellValue('Q95',$data->tahun_kursus6);
                $excels->getActiveSheet()->setCellValue('S95',$data->penyelenggara_kursus6);
                $excels->getActiveSheet()->setCellValue('X95',$data->lokasi_kursus6);
                $excels->getActiveSheet()->setCellValue('AB95',$data->biaya_kursus6);            
                
                $excels->getActiveSheet()->setCellValue('A101',$data->bahasa);
                $excels->getActiveSheet()->setCellValue('G101',$data->membaca);
                $excels->getActiveSheet()->setCellValue('M101',$data->bicara);
                $excels->getActiveSheet()->setCellValue('S101',$data->menulis);
                $excels->getActiveSheet()->setCellValue('A102',$data->bahasa2);
                $excels->getActiveSheet()->setCellValue('G102',$data->membaca2);
                $excels->getActiveSheet()->setCellValue('M102',$data->bicara2);
                $excels->getActiveSheet()->setCellValue('S102',$data->menulis2);
                $excels->getActiveSheet()->setCellValue('A103',$data->bahasa3);
                $excels->getActiveSheet()->setCellValue('G103',$data->membaca3);
                $excels->getActiveSheet()->setCellValue('M103',$data->bicara3);
                $excels->getActiveSheet()->setCellValue('S103',$data->menulis3);
                $excels->getActiveSheet()->setCellValue('A104',$data->bahasa4);
                $excels->getActiveSheet()->setCellValue('G104',$data->membaca4);
                $excels->getActiveSheet()->setCellValue('M104',$data->bicara4);
                $excels->getActiveSheet()->setCellValue('S104',$data->menulis4);
                
                $excels->getActiveSheet()->setCellValue('B109',$data->nama_perusahaan);
                $excels->getActiveSheet()->setCellValue('I109',$data->jabatan);
                $excels->getActiveSheet()->setCellValue('Q109',$data->gaji_bersih);
                $excels->getActiveSheet()->setCellValue('U109',$data->telepon_kantor);
                $excels->getActiveSheet()->setCellValue('Y109',$data->mulai_bekerja);
                $excels->getActiveSheet()->setCellValue('AC109',$data->berhenti_bekerja);
                $excels->getActiveSheet()->setCellValue('I111',$data->deskripsi_tugas);
                $excels->getActiveSheet()->setCellValue('I115',$data->nama_atasan_langsung);
                $excels->getActiveSheet()->setCellValue('I117',$data->jumlah_staff);
                $excels->getActiveSheet()->setCellValue('U117',$data->alasan_berhenti);
                
                $excels->getActiveSheet()->setCellValue('B127',$data->nama_perusahaan2);
                $excels->getActiveSheet()->setCellValue('I127',$data->jabatan2);
                $excels->getActiveSheet()->setCellValue('Q127',$data->gaji_bersih2);
                $excels->getActiveSheet()->setCellValue('U127',$data->telepon_kantor2);
                $excels->getActiveSheet()->setCellValue('Y127',$data->mulai_bekerja2);
                $excels->getActiveSheet()->setCellValue('AC127',$data->berhenti_bekerja2);
                $excels->getActiveSheet()->setCellValue('I129',$data->deskripsi_tugas2);
                $excels->getActiveSheet()->setCellValue('I133',$data->nama_atasan_langsung2);
                $excels->getActiveSheet()->setCellValue('I135',$data->jumlah_staff2);
                $excels->getActiveSheet()->setCellValue('U135',$data->alasan_berhenti2);

                $excels->getActiveSheet()->setCellValue('B139',$data->nama_perusahaan3);
                $excels->getActiveSheet()->setCellValue('I139',$data->jabatan3);
                $excels->getActiveSheet()->setCellValue('Q139',$data->gaji_bersih3);
                $excels->getActiveSheet()->setCellValue('U139',$data->telepon_kantor3);
                $excels->getActiveSheet()->setCellValue('Y139',$data->mulai_bekerja3);
                $excels->getActiveSheet()->setCellValue('AC139',$data->berhenti_bekerja3);
                $excels->getActiveSheet()->setCellValue('I141',$data->deskripsi_tugas3);
                $excels->getActiveSheet()->setCellValue('I145',$data->nama_atasan_langsung3);
                $excels->getActiveSheet()->setCellValue('I147',$data->jumlah_staff3);
                $excels->getActiveSheet()->setCellValue('U147',$data->alasan_berhenti3);

                $excels->getActiveSheet()->setCellValue('B151',$data->nama_perusahaan4);
                $excels->getActiveSheet()->setCellValue('I151',$data->jabatan4);
                $excels->getActiveSheet()->setCellValue('Q151',$data->gaji_bersih4);
                $excels->getActiveSheet()->setCellValue('U151',$data->telepon_kantor4);
                $excels->getActiveSheet()->setCellValue('Y151',$data->mulai_bekerja4);
                $excels->getActiveSheet()->setCellValue('AC151',$data->berhenti_bekerja4);
                $excels->getActiveSheet()->setCellValue('I153',$data->deskripsi_tugas4);
                $excels->getActiveSheet()->setCellValue('I157',$data->nama_atasan_langsung4);
                $excels->getActiveSheet()->setCellValue('I159',$data->jumlah_staff4);
                $excels->getActiveSheet()->setCellValue('U159',$data->alasan_berhenti4);

                $excels->getActiveSheet()->setCellValue('B169',$data->nama_perusahaan5);
                $excels->getActiveSheet()->setCellValue('I169',$data->jabatan5);
                $excels->getActiveSheet()->setCellValue('Q169',$data->gaji_bersih5);
                $excels->getActiveSheet()->setCellValue('U169',$data->telepon_kantor5);
                $excels->getActiveSheet()->setCellValue('Y169',$data->mulai_bekerja5);
                $excels->getActiveSheet()->setCellValue('AC169',$data->berhenti_bekerja5);
                $excels->getActiveSheet()->setCellValue('I171',$data->deskripsi_tugas5);
                $excels->getActiveSheet()->setCellValue('I175',$data->nama_atasan_langsung5);
                $excels->getActiveSheet()->setCellValue('I177',$data->jumlah_staff5);
                $excels->getActiveSheet()->setCellValue('U177',$data->alasan_berhenti5);
                
                $excels->getActiveSheet()->setCellValue('B183',$data->nama_organisasi);
                $excels->getActiveSheet()->setCellValue('I183',$data->aktivitas);
                $excels->getActiveSheet()->setCellValue('O183',$data->jabatan_organisasi);
                $excels->getActiveSheet()->setCellValue('T183',$data->tahun_organisasi);
                $excels->getActiveSheet()->setCellValue('B184',$data->nama_organisasi2);
                $excels->getActiveSheet()->setCellValue('I184',$data->aktivitas2);
                $excels->getActiveSheet()->setCellValue('O184',$data->jabatan_organisasi2);
                $excels->getActiveSheet()->setCellValue('T184',$data->tahun_organisasi2);
                $excels->getActiveSheet()->setCellValue('B185',$data->nama_organisasi3);
                $excels->getActiveSheet()->setCellValue('I185',$data->aktivitas3);
                $excels->getActiveSheet()->setCellValue('O185',$data->jabatan_organisasi3);
                $excels->getActiveSheet()->setCellValue('T185',$data->tahun_organisasi3);
                $excels->getActiveSheet()->setCellValue('B186',$data->nama_organisasi4);
                $excels->getActiveSheet()->setCellValue('I186',$data->aktivitas4);
                $excels->getActiveSheet()->setCellValue('O186',$data->jabatan_organisasi4);
                $excels->getActiveSheet()->setCellValue('T186',$data->tahun_organisasi4);
                $excels->getActiveSheet()->setCellValue('B187',$data->nama_organisasi5);
                $excels->getActiveSheet()->setCellValue('I187',$data->aktivitas5);
                $excels->getActiveSheet()->setCellValue('O187',$data->jabatan_organisasi5);
                $excels->getActiveSheet()->setCellValue('T187',$data->tahun_organisasi5);

                $excels->getActiveSheet()->setCellValue('A217',$data->harapan_gaji);
                
                $excels->getActiveSheet()->setCellValue('V225',$data->nama_lengkap);
                $excels->getActiveSheet()->setCellValue('X221',date('d-m-Y'));


            }
                // Proses file exccel

                foreach($identitas_2 as $data){
                    $excels->getActiveSheet()->setCellValue('B195',$data->nama_referensi);
                    $excels->getActiveSheet()->setCellValue('G195',$data->hubungan_referensi);
                    $excels->getActiveSheet()->setCellValue('J195',$data->jabatan_referensi);
                    $excels->getActiveSheet()->setCellValue('S195',$data->handphone_referensi);
                    $excels->getActiveSheet()->setCellValue('B196',$data->nama_referensi2);
                    $excels->getActiveSheet()->setCellValue('G196',$data->hubungan_referensi2);
                    $excels->getActiveSheet()->setCellValue('J196',$data->jabatan_referensi2);
                    $excels->getActiveSheet()->setCellValue('S196',$data->handphone_referensi2);
                    $excels->getActiveSheet()->setCellValue('B197',$data->nama_referensi3);
                    $excels->getActiveSheet()->setCellValue('G197',$data->hubungan_referensi3);
                    $excels->getActiveSheet()->setCellValue('J197',$data->jabatan_referensi3);
                    $excels->getActiveSheet()->setCellValue('S197',$data->handphone_referensi3);
                    $excels->getActiveSheet()->setCellValue('B198',$data->nama_referensi4);
                    $excels->getActiveSheet()->setCellValue('G198',$data->hubungan_referensi4);
                    $excels->getActiveSheet()->setCellValue('J198',$data->jabatan_referensi4);
                    $excels->getActiveSheet()->setCellValue('S198',$data->handphone_referensi4);

                    $excels->getActiveSheet()->setCellValue('B204',$data->nama_darurat);
                    $excels->getActiveSheet()->setCellValue('G204',$data->hubungan_darurat);
                    $excels->getActiveSheet()->setCellValueExplicit('J204',$data->hp_darurat, PHPExcel_Cell_DataType::TYPE_STRING);
                    $excels->getActiveSheet()->setCellValue('B205',$data->nama_darurat2);
                    $excels->getActiveSheet()->setCellValue('G205',$data->hubungan_darurat2);
                    $excels->getActiveSheet()->setCellValueExplicit('J205',$data->hp_darurat2, PHPExcel_Cell_DataType::TYPE_STRING);
                    $excels->getActiveSheet()->setCellValue('B206',$data->nama_darurat3);
                    $excels->getActiveSheet()->setCellValue('G206',$data->hubungan_darurat3);
                    $excels->getActiveSheet()->setCellValueExplicit('J206',$data->hp_darurat3);
                    $excels->getActiveSheet()->setCellValue('B207',$data->nama_darurat4);
                    $excels->getActiveSheet()->setCellValue('G207',$data->hubungan_darurat4);
                    $excels->getActiveSheet()->setCellValueExplicit('J207',$data->hp_darurat4, PHPExcel_Cell_DataType::TYPE_STRING);
                    $excels->getActiveSheet()->setCellValue('G217',$data->kebersediaan);

                    $excels->getActiveSheet()->setCellValue('I54',$data->nama_pasangan);
                    $excels->getActiveSheet()->setCellValue('N54',$data->ttl_pasangan);
                    $excels->getActiveSheet()->setCellValue('V54',$data->pekerjaan_pasangan);

                    $excels->getActiveSheet()->setCellValue('I56',$data->nama_anak1);
                    $excels->getActiveSheet()->setCellValue('N56',$data->ttl_anak1);
                    $excels->getActiveSheet()->setCellValue('V56',$data->pekerjaan_anak1);
                    $excels->getActiveSheet()->setCellValue('I58',$data->nama_anak2);
                    $excels->getActiveSheet()->setCellValue('N58',$data->ttl_anak2);
                    $excels->getActiveSheet()->setCellValue('V58',$data->pekerjaan_anak2);
                    $excels->getActiveSheet()->setCellValue('I60',$data->nama_anak3);
                    $excels->getActiveSheet()->setCellValue('N60',$data->ttl_anak3);
                    $excels->getActiveSheet()->setCellValue('V60',$data->pekerjaan_anak3);
                    $excels->getActiveSheet()->setCellValue('I62',$data->nama_anak4);
                    $excels->getActiveSheet()->setCellValue('N62',$data->ttl_anak4);
                    $excels->getActiveSheet()->setCellValue('V62',$data->pekerjaan_anak4);

                    $excels->getActiveSheet()->setCellValue('I113',$data->jenis_usaha);
                    $excels->getActiveSheet()->setCellValue('I131',$data->jenis_usaha2);
                    $excels->getActiveSheet()->setCellValue('I143',$data->jenis_usaha3);
                    $excels->getActiveSheet()->setCellValue('I155',$data->jenis_usaha4);
                    $excels->getActiveSheet()->setCellValue('I173',$data->jenis_usaha5);

                    $excels->getActiveSheet()->setCellValue('U131',$data->jumlah_karyawan2);
                    $excels->getActiveSheet()->setCellValue('U143',$data->jumlah_karyawan3);
                    $excels->getActiveSheet()->setCellValue('U155',$data->jumlah_karyawan4);
                    $excels->getActiveSheet()->setCellValue('U173',$data->jumlah_karyawan5);
                }

                header('Content-Type: application/vnd.ms-excel'); 
                header('Content-Disposition: attachment;filename="Data_'.$namaa.'.xls"'); 
                header('Cache-Control: max-age=0'); 
                $objWriter = PHPExcel_IOFactory::createWriter($excels, 'Excel5'); 
                $objWriter->save('php://output');

            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }

    }

}