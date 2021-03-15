<div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="<?php echo base_url('/assets/img/logo.png'); ?>" alt="logo" width="80" class="mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Selamat datang di <span class="font-weight-bold">Dea Bakery!</span></h4>
            <p class="text-muted">
            
            <?php     
                  if($this->session->flashdata('message')){ // Jika ada
                    echo $this->session->flashdata('message'); // Tampilkan pesannya
                }else{
                  echo "Silahkan mendaftar terlebih dahulu";
                } ?>

            </p>
            <form method="post" action="<?php echo base_url('index.php/auth/login'); ?>">
              <div class="form-group">
                <label for="email">Username</label>
                <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
              </div>

              <div class="form-group text-right">
                <a href="auth-forgot-password.html" class="float-left mt-3">
                  Lupa password?
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <div class="mt-5 text-center">
                Tidak punya akun? <a href="<?php echo base_url('index.php/Register') ?>">Daftar disini!</a>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; OKURUU. Backend Made with 💙 by Odi
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?php echo base_url('/assets/img/unsplash/about-us.png'); ?>">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Selamat Pagi</h1>
                <h5 class="font-weight-normal text-muted-transparent">Sawojajar, Indonesia</h5>
              </div>
              Photo by <a class="text-light bb" target="_blank" href="https://deabakery.com/about-us">Dea Bakery</a> on <a class="text-light bb" target="_blank" href="https://deabakery.com">Our Site</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>