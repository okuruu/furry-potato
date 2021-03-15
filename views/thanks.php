<h1>Sukses login cuy. Hai! <?php echo $this->session->userdata('nama'); ?></h1>

<a href="<?php echo base_url('index.php/Page/welcome'); ?>"> Welcome </a>
<a href="<?php echo base_url('index.php/auth/logout'); ?>"> Logout </a>