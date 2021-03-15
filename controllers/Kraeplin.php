<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Kraeplin extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('KraeplinModel');    
    }

    public function kraeplin_2(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/2');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_2(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_2($user_id);
        redirect('Kraeplin/kraeplin_3');
    }
    
    public function kraeplin_3(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/3');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_3(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_3($user_id);
        redirect('Kraeplin/kraeplin_4');
    }

    public function kraeplin_4(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/4');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_4(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_4($user_id);
        redirect('Kraeplin/kraeplin_5');
    }

    public function kraeplin_5(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/5');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_5(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_5($user_id);
        redirect('Kraeplin/kraeplin_6');
    }

    public function kraeplin_6(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/6');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_6(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_6($user_id);
        redirect('Kraeplin/kraeplin_7');
    }

    public function kraeplin_7(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/7');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_7(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_7($user_id);
        redirect('Kraeplin/kraeplin_8');
    }

    public function kraeplin_8(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/8');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_8(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_8($user_id);
        redirect('Kraeplin/kraeplin_9');
    }

    public function kraeplin_9(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/9');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_9(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_9($user_id);
        redirect('Kraeplin/kraeplin_10');
    }

    public function kraeplin_10(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/10');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_10(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_10($user_id);
        redirect('Kraeplin/kraeplin_11');
    }

    public function kraeplin_11(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/11');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_11(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_11($user_id);
        redirect('Kraeplin/kraeplin_12');
    }

    public function kraeplin_12(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/12');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_12(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_12($user_id);
        redirect('Kraeplin/kraeplin_13');
    }

    public function kraeplin_13(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/13');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_13(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_13($user_id);
        redirect('Kraeplin/kraeplin_14');
    }

    public function kraeplin_14(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/14');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_14(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_14($user_id);
        redirect('Kraeplin/kraeplin_15');
    }

    public function kraeplin_15(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/15');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_15(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_15($user_id);
        redirect('Kraeplin/kraeplin_16');
    }

    public function kraeplin_16(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/16');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_16(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_16($user_id);
        redirect('Kraeplin/kraeplin_17');
    }

    public function kraeplin_17(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/17');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_17(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_17($user_id);
        redirect('Kraeplin/kraeplin_18');
    }

    public function kraeplin_18(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/18');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_18(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_18($user_id);
        redirect('Kraeplin/kraeplin_19');
    }

    public function kraeplin_19(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/19');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_19(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_19($user_id);
        redirect('Kraeplin/kraeplin_20');
    }

    public function kraeplin_20(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/20');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_20(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_20($user_id);
        redirect('Kraeplin/kraeplin_21');
    }

    public function kraeplin_21(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/21');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_21(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_21($user_id);
        redirect('Kraeplin/kraeplin_22');
    }

    public function kraeplin_22(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/22');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_22(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_22($user_id);
        redirect('Kraeplin/kraeplin_23');
    }

    public function kraeplin_23(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/23');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_23(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_23($user_id);
        redirect('Kraeplin/kraeplin_24');
    }

    public function kraeplin_24(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/24');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_24(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_24($user_id);
        redirect('Kraeplin/kraeplin_25');
    }

    public function kraeplin_25(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/25');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_25(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_25($user_id);
        redirect('Kraeplin/kraeplin_26');
    }

    public function kraeplin_26(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/26');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_26(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_26($user_id);
        redirect('Kraeplin/kraeplin_27');
    }

    public function kraeplin_27(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/27');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_27(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_27($user_id);
        redirect('Kraeplin/kraeplin_28');
    }

    public function kraeplin_29(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/29');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_29(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_29($user_id);
        redirect('Kraeplin/kraeplin_30');
    }

    public function kraeplin_30(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/30');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_30(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_30($user_id);
        redirect('Kraeplin/kraeplin_31');
    }

    public function kraeplin_31(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/31');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_31(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_31($user_id);
        redirect('Kraeplin/kraeplin_32');
    }

    public function kraeplin_33(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/33');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_33(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_33($user_id);
        redirect('Kraeplin/kraeplin_34');
    }

    public function kraeplin_34(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/34');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_34(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_34($user_id);
        redirect('Kraeplin/kraeplin_35');
    }

    public function kraeplin_35(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/35');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_35(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_35($user_id);
        redirect('Kraeplin/kraeplin_36');
    }

    public function kraeplin_36(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/36');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_36(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_36($user_id);
        redirect('Kraeplin/kraeplin_37');
    }

    public function kraeplin_38(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/38');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_38(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_38($user_id);
        redirect('Kraeplin/kraeplin_39');
    }

    public function kraeplin_39(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/39');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_39(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_39($user_id);
        redirect('Kraeplin/kraeplin_40');
    }

    public function kraeplin_40(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/40');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_40(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_40($user_id);
        redirect('Kraeplin/kraeplin_41');
    }

    public function kraeplin_41(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/41');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_41(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_41($user_id);
        redirect('Kraeplin/kraeplin_42');
    }

    public function kraeplin_42(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/42');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_42(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_42($user_id);
        redirect('Kraeplin/kraeplin_43');
    }

    public function kraeplin_43(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/43');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_43(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_43($user_id);
        redirect('Kraeplin/kraeplin_44');
    }

    public function kraeplin_44(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/44');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_44(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_44($user_id);
        redirect('Kraeplin/kraeplin_45');
    }

    public function kraeplin_45(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/45');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_45(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_45($user_id);
        redirect('Kraeplin/kraeplin_46');
    }

    public function kraeplin_46(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/46');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_46(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_46($user_id);
        redirect('Kraeplin/kraeplin_47');
    }

    public function kraeplin_47(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/47');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_47(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_47($user_id);
        redirect('Kraeplin/kraeplin_48');
    }

    public function kraeplin_48(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/48');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_48(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_48($user_id);
        redirect('Kraeplin/kraeplin_49');
    }

    public function kraeplin_49(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/49');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_49(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_49($user_id);
        redirect('Kraeplin/kraeplin_50');
    }

    public function kraeplin_50(){
        $user_id = $this->session->username;
        $this->load->view('_tema/header');
        $this->load->view('_tema/nav');
        $this->load->view('Ujian/kraeplin/50');
        $this->load->view('_tema/jsfooter');
    }

    public function kraeplin_selesai_50(){
        $user_id = $this->session->username;
        $this->KraeplinModel->update_50($user_id);
        redirect('index.php/Dashboard');
    }
}