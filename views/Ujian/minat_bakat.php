<?php

foreach($gender as $data){
    $kelamin = $data->GENDER;
}

?>

<div class="main-content">

        <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tes Minat Bakat</h4>
                  </div>
                  <div class="card-body">
                  
                  <?php echo form_open("Ujian/minat_bakat_selesai") ?>

                  <div class="row">
                      <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">

                        <!-- Soal Nomor 1 -->
                        <div class="tab-pane fade show active" id="nomor-1" role="tabpanel" aria-labelledby="list-home-list">
                        
                        <?php 
                          
                          if($kelamin == "Pria"){
                            $this->load->view('Ujian/minat_bakat/Pria1');
                          }else{
                            $this->load->view('Ujian/minat_bakat/Wanita1');
                          }
                          
                        ?>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-2" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>  
                        <!-- Soal Nomor 2 -->
                        <div class="tab-pane fade" id="nomor-2" role="tabpanel" aria-labelledby="list-profile-list">
                        <?php 
                          
                          if($kelamin == "Pria"){
                            $this->load->view('Ujian/minat_bakat/Pria2');
                          }else{
                            $this->load->view('Ujian/minat_bakat/Wanita2');
                          }
                          
                        ?>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-3" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <div class="tab-pane fade" id="nomor-3" role="tabpanel" aria-labelledby="list-messages-list">
                        
                        <?php 
                          
                          if($kelamin == "Pria"){
                            $this->load->view('Ujian/minat_bakat/Pria3');
                          }else{
                            $this->load->view('Ujian/minat_bakat/Wanita3');
                          }
                          
                        ?>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-4" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <!-- Soal Nomor 4  -->
                        <div class="tab-pane fade" id="nomor-4" role="tabpanel" aria-labelledby="list-settings-list">
                        
                        <?php 
                          
                          if($kelamin == "Pria"){
                            $this->load->view('Ujian/minat_bakat/Pria4');
                          }else{
                            $this->load->view('Ujian/minat_bakat/Wanita4');
                          }
                          
                        ?>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-5" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <!-- Soal Nomor 5 -->
                        <div class="tab-pane fade" id="nomor-5" role="tabpanel" aria-labelledby="list-settings-list">
                        
                        <?php 
                          
                          if($kelamin == "Pria"){
                            $this->load->view('Ujian/minat_bakat/Pria5');
                          }else{
                            $this->load->view('Ujian/minat_bakat/Wanita5');
                          }
                          
                        ?>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-6" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <!-- Soal Nomor 6 -->
                        <div class="tab-pane fade" id="nomor-6" role="tabpanel" aria-labelledby="list-settings-list">
                        
                        <?php 
                          
                          if($kelamin == "Pria"){
                            $this->load->view('Ujian/minat_bakat/Pria6');
                          }else{
                            $this->load->view('Ujian/minat_bakat/Wanita6');
                          }
                          
                        ?>

                      <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-7" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <!-- Soal Nomor 7 -->
                        <div class="tab-pane fade" id="nomor-7" role="tabpanel" aria-labelledby="list-settings-list">

                        <?php 
                          
                          if($kelamin == "Pria"){
                            $this->load->view('Ujian/minat_bakat/Pria7');
                          }else{
                            $this->load->view('Ujian/minat_bakat/Wanita7');
                          }
                          
                        ?>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-8" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <!-- Soal Nomor 8 -->
                        <div class="tab-pane fade" id="nomor-8" role="tabpanel" aria-labelledby="list-settings-list">
                        
                        <?php 
                          
                          if($kelamin == "Pria"){
                            $this->load->view('Ujian/minat_bakat/Pria8');
                          }else{
                            $this->load->view('Ujian/minat_bakat/Wanita8');
                          }
                          
                        ?>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-9" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 9 -->
                        <div class="tab-pane fade" id="nomor-9" role="tabpanel" aria-labelledby="list-settings-list">
                        
                        <?php 
                          
                          if($kelamin == "Pria"){
                            $this->load->view('Ujian/minat_bakat/Pria9');
                          }else{
                            $this->load->view('Ujian/minat_bakat/Wanita9');
                          }
                          
                        ?>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="submit" name="submit" value="Selesai" class="btn btn-primary">
                          </div>
                        </div>
                        
                        </div>
                        </div>
                      </div>
                    </div>

                    <?php echo form_close(); ?>

                  </div>
                </div>
              </div>
            </div>
</div>