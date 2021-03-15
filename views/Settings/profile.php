<!-- special for this only! -->


<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi, <?php echo $this->session->nama; ?>!</h2>
            <p class="section-lead">
              Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="<?php echo base_url('/assets/img/avatar/avatar.gif'); ?>" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Posts</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Following</div>
                        <div class="profile-widget-item-value">2,1K</div>
                      </div>
                    </div>
                  </div>


                  <?php
                          if (! empty($profile)){
                              foreach($profile as $data){
                            ?>


                  <div class="profile-widget-description">
                    <div class="profile-widget-name"><?php echo $data->NAMA; ?><div class="text-muted d-inline font-weight-normal"><div class="slash">
                    </div> <?php echo $data->JABATAN; ?></div></div>
                    <?php echo $data->NAMA; ?> yang tanggal lahirnya <b><?php echo date('d M Y', strtotime($data->TTL)); ?></b>, dan sekarang tinggal di <b><?php echo $data->ALAMAT; ?></b> adalah seorang staff yang bekerja di departemen <?php echo $data->JABATAN; ?>. Panggil <b>+<?php echo $data->PHONE; ?></b> kalau ada yang dibutuhkan sama dia, ya!
                  </div>
                  <!-- <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow Ujang On</div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div> -->
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                <div style="color: red;"><?php echo validation_errors(); ?></div>
                  <?php echo form_open("settings/ubah/".$data->ID); ?>
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value="<?php echo set_value('input_nama',$data->NAMA); ?>" name="input_nama" required="">
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" value="<?php echo set_value('input_username',$data->USERNAME); ?>" name="input_username" readonly>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="<?php echo set_value('input_email',$data->EMAIL); ?>" name="input_email" required="">
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Phone</label>
                            <input type="number" class="form-control" value="<?php echo set_value('input_phone',$data->PHONE); ?>" name="input_phone">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                                <label>Tanggal Lahir & Domisili</label>
                                <input type="text" class="form-control" value="<?php echo date('d M Y',strtotime($data->TTL))." , " . $data->ALAMAT; ?>">
                          </div>
                        </div>
                        <!-- <div class="row">
                          <div class="form-group col-12">
                            <label>Tempat Tanggal Lahir</label>
                            <textarea class="form-control summernote-simple">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                          </div>
                        </div> -->

                        <?php
                                    }
                              }
                          ?>

                        <!-- <div class="row">
                          <div class="form-group mb-0 col-12">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                              <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                              <div class="text-muted form-text">
                                You will get new information about products, offers and promotions
                              </div>
                            </div>
                          </div>
                        </div> -->
                    </div>
                    <div class="card-footer text-right">
                      <input type="submit" name="submit" value="Update Data" class="btn btn-primary">
                    </div>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>