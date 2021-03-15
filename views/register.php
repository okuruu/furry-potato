<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script>
$(document).keypress(
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});
</script>


<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('/assets/img/logo.png'); ?>" alt="logo" width="100">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Daftar Akun</h4></div>

              <div class="card-body">
              <?php echo form_open("Register/register_sementara") ?>
                <div class="form-divider">
                    A. Data Pribadi
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Lengkap</label>
                      <input id="first_name" type="text" class="form-control" name="nama_lengkap" autofocus placeholder="Contoh: Sharon Jaeger" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nama Panggilan</label>
                      <input id="last_name" type="text" class="form-control" name="panggilan" placeholder="Contoh: Sharon" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">No KTP</label>
                      <input id="first_name" type="number" class="form-control" name="ktp" autofocus placeholder="Contoh: 3573xxx" required >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">No Paspor / Berlaku Sampai</label>
                      <input id="last_name" type="text" class="form-control" name="paspor" placeholder="Contoh: C6009 / Seumur Hidup">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">No SIM / Berlaku Sampai</label>
                    <input id="email" type="text" class="form-control" name="sim" placeholder="Masukkan No SIM Anda">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Golongan Darah</label>
                      <input id="first_name" type="text" class="form-control" name="goldar" autofocus placeholder="Contoh: O+">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Agama</label>
                      <input id="last_name" type="text" class="form-control" name="agama" placeholder="Masukkan Agama Anda" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tempat Lahir</label>
                      <input id="first_name" type="text" class="form-control" name="tempat_lahir" autofocus placeholder="Contoh: Malang" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tanggal Lahir</label>
                      <input id="last_name" type="date" class="form-control" name="tanggal_lahir" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Alamat Sekarang</label>
                    <input id="text" type="text" class="form-control" name="alamat_sekarang" placeholder="Contoh: JL. Teluk Bayur 40E" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Alamat Sesuai KTP</label>
                    <input id="text" type="text" class="form-control" name="alamat_ktp" placeholder="Contoh: JL. Teluk Bayur 40E" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Contoh: Blizzaga@gmail.com" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Sumber Lowongan</label>
                      <input id="first_name" type="text" class="form-control" name="sumber_lowongan" autofocus placeholder="Contoh: Jobstreet" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Telepon</label>
                      <input id="last_name" type="number" class="form-control" name="telepon" placeholder="Contoh: 08984170324" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Posisi yang dilamar</label>
                      <select name="posisi" class="form-control selectric" required>
                        <option value="Flying Produksi">Flying Produksi</option>
                        <option value="Flying Cake">Flying Cake</option>
                        <option value="Flying Penjualan">Flying Penjualan</option>
                        <option value="Operator Produksi">Operator Produksi</option>
                        <option value="Operator Cake">Operator Cake</option>
                        <option value="Staff Penjualan">Staff Penjualan</option>
                        <option value="Factory Manager">Factory Manager</option>
                        <option value="Store Manager">Store Manager</option>
                        <option value="Outlet Leader">Outlet Leader</option>
                        <option value="Training Koordinator">Training Koordinator</option>
                        <option value="Desain Grafis">Desain Grafis</option>
                        <option value="Social Media Specialist">Social Media Specialist</option>
                        <option value="Asst Manager Finance & Accounting">Asst Manager Finance & Accounting</option>
                        <option value="Customer Relationship Management">Customer Relationship Management</option>
                        <option value="Content Writer">Content Writer</option>
                        <option value="Driver">Driver</option>
                        <option value="Logistic Manager">Logistic Manager</option>
                        <option value="Sales B to B">Sales B to B</option>
                        <option value="Staff Admin">Staff Admin</option>
                        <option value="Stock Keeper">Stock Keeper</option>
                        <option value="Cake Decoratory">Cake Decorator</option>
                        <option value="Security">Security</option>
                        <option value="Legal Officer">Legal Officer</option>
                        <option value="Web Developer">Web Developer</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Jenis Kelamin</label>
                      <select name="kelamin" class="form-control selectric" required>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                  <div class="form-group col-6">
                      <label>Status</label>
                      <select name="status" class="form-control selectric">
                        <option>Single</option>
                        <option>Menikah</option>
                        <option>Duda</option>
                        <option>Janda</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Nomor Handphone</label>
                      <input type="number" name="HP" class="form-control" placeholder="Contoh: 08984170332" required> 
                    </div>
                  </div>

                  <div class="form-divider">
                    B. Data Keluarga
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Ayah</label>
                      <input id="first_name" type="text" class="form-control" name="nama_ayah" autofocus placeholder="Masukkan nama ayah" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nama Ibu</label>
                      <input id="last_name" type="text" class="form-control" name="nama_ibu" placeholder="Masukkan nama ibu" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tempat/Tanggal Lahir Ayah</label>
                      <input id="first_name" type="text" class="form-control" name="TTL_ayah" autofocus placeholder="Contoh: Payakumbuh, 12 April 1973" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tempat/Tanggal Lahir Ibu</label>
                      <input id="last_name" type="text" class="form-control" name="TTL_ibu" placeholder="Contoh: Payakumbuh, 24 Agustus 1973" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Pekerjaan Ayah</label>
                      <input id="first_name" type="text" class="form-control" name="pekerjaan_ayah" autofocus placeholder="Contoh: Petani" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Pekerjaan Ibu</label>
                      <input id="last_name" type="text" class="form-control" name="pekerjaan_ibu" placeholder="Contoh: Rumah Tangga" required>
                    </div>
                  </div>

                  <div class="form-divider">
                    B. Data Saudara
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Saudara Pertama</label>
                      <input id="first_name" type="text" class="form-control" name="saudara1" autofocus disabled value="Saudara Ke 1">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nama</label>
                      <input id="last_name" type="text" class="form-control" name="nama_saudara1" placeholder="Contoh: Fransiska Hendrawan">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tempat / Tanggal Lahir</label>
                      <input id="first_name" type="text" class="form-control" name="ttl_saudara1" autofocus placeholder="Contoh: Payakumbuh, 12 April 1973">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Pekerjaan</label>
                      <input id="last_name" type="text" class="form-control" name="pekerjaan_saudara1" placeholder="Contoh: Karyawan Swasta">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Saudara Kedua</label>
                      <input id="first_name" type="text" class="form-control" name="saudara2" autofocus value="Saudara Ke 2" disabled>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nama</label>
                      <input id="last_name" type="text" class="form-control" name="nama_saudara2">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tempat / Tanggal Lahir</label>
                      <input id="first_name" type="text" class="form-control" name="ttl_saudara2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Pekerjaan</label>
                      <input id="last_name" type="text" class="form-control" name="pekerjaan_saudara2" >
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Saudara Ketiga</label>
                      <input id="first_name" type="text" class="form-control" name="saudara3" autofocus value="Saudara Ke 3" disabled>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nama</label>
                      <input id="last_name" type="text" class="form-control" name="nama_saudara3" >
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tempat / Tanggal Lahir</label>
                      <input id="first_name" type="text" class="form-control" name="ttl_saudara3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Pekerjaan</label>
                      <input id="last_name" type="text" class="form-control" name="pekerjaan_saudara3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Saudara Keempat</label>
                      <input id="first_name" type="text" class="form-control" name="saudara4" autofocus disabled value="Saudara Ke 4">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nama</label>
                      <input id="last_name" type="text" class="form-control" name="nama_saudara4" >
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tempat / Tanggal Lahir</label>
                      <input id="first_name" type="text" class="form-control" name="ttl_saudara4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Pekerjaan</label>
                      <input id="last_name" type="text" class="form-control" name="pekerjaan_saudara4" >
                    </div>
                  </div>

                  <div class="form-divider">
                    B. Data Keluarga (Jika anda sudah menikah)
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Pasangan</label>
                      <input id="first_name" type="text" class="form-control" name="nama_pasangan" autofocus placeholder="Nama Pasangan Anda">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tempat/Tanggal Lahir Pasangan</label>
                      <input id="last_name" type="text" class="form-control" name="ttl_pasangan" placeholder="Contoh: Surabaya, 25 Desember 1979">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Pekerjaan Pasangan</label>
                      <input id="first_name" type="text" class="form-control" name="pekerjaan_pasangan" autofocus >
                    </div>
                  </div>                  

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Anak Pertama</label>
                      <input id="first_name" type="text" class="form-control" name="nama_anak1" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tempat / Tanggal Lahir Anak Pertama</label>
                      <input id="last_name" type="text" class="form-control" name="ttl_anak1">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Pekerjaan Anak Pertama</label>
                      <input id="first_name" type="text" class="form-control" name="pekerjaan_anak1" autofocus >
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Anak Kedua</label>
                      <input id="first_name" type="text" class="form-control" name="nama_anak2" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tempat / Tanggal Lahir Anak Kedua</label>
                      <input id="last_name" type="text" class="form-control" name="ttl_anak2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Pekerjaan Anak Kedua</label>
                      <input id="first_name" type="text" class="form-control" name="pekerjaan_anak2" autofocus >
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Anak Ketiga</label>
                      <input id="first_name" type="text" class="form-control" name="nama_anak3" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tempat / Tanggal Lahir Anak Ketiga</label>
                      <input id="last_name" type="text" class="form-control" name="ttl_anak3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Pekerjaan Anak Ketiga</label>
                      <input id="first_name" type="text" class="form-control" name="pekerjaan_anak3" autofocus >
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Anak Keempat</label>
                      <input id="first_name" type="text" class="form-control" name="nama_anak4" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tempat / Tanggal Lahir Anak Keempat</label>
                      <input id="last_name" type="text" class="form-control" name="ttl_anak4">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Pekerjaan Anak Keempat</label>
                      <input id="first_name" type="text" class="form-control" name="pekerjaan_anak4" autofocus >
                    </div>
                  </div>


                  <div class="form-divider">
                    C. Pendidikan
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">SD</label>
                      <input id="first_name" type="text" class="form-control" name="sdn" autofocus placeholder="Contoh: SDN Payakumbuh 12" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jurusan</label>
                      <input id="last_name" type="text" class="form-control" name="jurusan_sd" placeholder="Contoh: -">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun Kelulusan</label>
                      <input id="first_name" type="text" class="form-control" name="lulus_sd" autofocus placeholder="Contoh: 2004" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nilai</label>
                      <input id="last_name" type="text" class="form-control" name="nilai_sd" placeholder="Contoh: 30.00" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">SMP</label>
                      <input id="first_name" type="text" class="form-control" name="smp" autofocus required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jurusan</label>
                      <input id="last_name" type="text" class="form-control" name="jurusan_smp" >
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun Kelulusan</label>
                      <input id="first_name" type="text" class="form-control" name="lulus_smp" autofocus required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nilai</label>
                      <input id="last_name" type="text" class="form-control" name="nilai_smp" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">SMA</label>
                      <input id="first_name" type="text" class="form-control" name="sma" autofocus required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jurusan</label>
                      <input id="last_name" type="text" class="form-control" name="jurusan_sma" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun Kelulusan</label>
                      <input id="first_name" type="text" class="form-control" name="lulus_sma" autofocus required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nilai</label>
                      <input id="last_name" type="text" class="form-control" name="nilai_sma" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">D3</label>
                      <input id="first_name" type="text" class="form-control" name="d3" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jurusan</label>
                      <input id="last_name" type="text" class="form-control" name="jurusan_d3" >
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun Kelulusan</label>
                      <input id="first_name" type="text" class="form-control" name="lulus_d3" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">IPK</label>
                      <input id="last_name" type="text" class="form-control" name="nilai_d3">
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">S1</label>
                      <input id="first_name" type="text" class="form-control" name="s1" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jurusan</label>
                      <input id="last_name" type="text" class="form-control" name="jurusan_s1" >
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun Kelulusan</label>
                      <input id="first_name" type="text" class="form-control" name="lulus_s1" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">IPK</label>
                      <input id="last_name" type="text" class="form-control" name="ipk">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">S2</label>
                      <input id="first_name" type="text" class="form-control" name="s2" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jurusan</label>
                      <input id="last_name" type="text" class="form-control" name="jurusan_s2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun Kelulusan</label>
                      <input id="first_name" type="text" class="form-control" name="lulus_s2" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">IPK</label>
                      <input id="last_name" type="text" class="form-control" name="ipk_s2">
                    </div>
                  </div>

                  <div class="form-divider">
                    D. Kursus - Kursus
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Topik Pertama</label>
                      <input id="first_name" type="text" class="form-control" name="kursus" autofocus placeholder="Contoh: Islamic Culture Meet">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Lama Kursus</label>
                      <input id="last_name" type="text" class="form-control" name="lama_kursus" placeholder="Contoh: 4 Hari">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun</label>
                      <input id="first_name" type="text" class="form-control" name="tahun_kursus" autofocus placeholder="Contoh: 2020">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Penyelenggara</label>
                      <input id="last_name" type="text" class="form-control" name="penyelenggara_kursus" placeholder="Contoh: Telkom Sumatra Barat">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Lokasi</label>
                      <input id="first_name" type="text" class="form-control" name="lokasi_kursus" autofocus placeholder="Contoh: Payakumbuh">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Dibiayai Oleh</label>
                      <input id="last_name" type="text" class="form-control" name="biaya_kursus" placeholder="Contoh: Pemerintah">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Topik Kedua</label>
                      <input id="first_name" type="text" class="form-control" name="kursus2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Lama Kursus</label>
                      <input id="last_name" type="text" class="form-control" name="lama_kursus2" >
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun</label>
                      <input id="first_name" type="text" class="form-control" name="tahun_kursus2" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Penyelenggara</label>
                      <input id="last_name" type="text" class="form-control" name="penyelenggara_kursus2" >
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Lokasi</label>
                      <input id="first_name" type="text" class="form-control" name="lokasi_kursus2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Dibiayai Oleh</label>
                      <input id="last_name" type="text" class="form-control" name="biaya_kursus2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Topik Ketiga</label>
                      <input id="first_name" type="text" class="form-control" name="kursus3" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Lama Kursus</label>
                      <input id="last_name" type="text" class="form-control" name="lama_kursus3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun</label>
                      <input id="first_name" type="text" class="form-control" name="tahun_kursus3" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Penyelenggara</label>
                      <input id="last_name" type="text" class="form-control" name="penyelenggara_kursus3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Lokasi</label>
                      <input id="first_name" type="text" class="form-control" name="lokasi_kursus3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Dibiayai Oleh</label>
                      <input id="last_name" type="text" class="form-control" name="biaya_kursus3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Topik Keempat</label>
                      <input id="first_name" type="text" class="form-control" name="kursus4" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Lama Kursus</label>
                      <input id="last_name" type="text" class="form-control" name="lama_kursus4">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun</label>
                      <input id="first_name" type="text" class="form-control" name="tahun_kursus4" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Penyelenggara</label>
                      <input id="last_name" type="text" class="form-control" name="penyelenggara_kursus4">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Lokasi</label>
                      <input id="first_name" type="text" class="form-control" name="lokasi_kursus4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Dibiayai Oleh</label>
                      <input id="last_name" type="text" class="form-control" name="biaya_kursus4">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Topik Kelima</label>
                      <input id="first_name" type="text" class="form-control" name="kursus5" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Lama Kursus</label>
                      <input id="last_name" type="text" class="form-control" name="lama_kursus5">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun</label>
                      <input id="first_name" type="text" class="form-control" name="tahun_kursus5" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Penyelenggara</label>
                      <input id="last_name" type="text" class="form-control" name="penyelenggara_kursus5">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Lokasi</label>
                      <input id="first_name" type="text" class="form-control" name="lokasi_kursus5" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Dibiayai Oleh</label>
                      <input id="last_name" type="text" class="form-control" name="biaya_kursus5">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Topik Keenam</label>
                      <input id="first_name" type="text" class="form-control" name="kursus6" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Lama Kursus</label>
                      <input id="last_name" type="text" class="form-control" name="lama_kursus6">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Tahun</label>
                      <input id="first_name" type="text" class="form-control" name="tahun_kursus6" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Penyelenggara</label>
                      <input id="last_name" type="text" class="form-control" name="penyelenggara_kursus6">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Lokasi</label>
                      <input id="first_name" type="text" class="form-control" name="lokasi_kursus6" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Dibiayai Oleh</label>
                      <input id="last_name" type="text" class="form-control" name="biaya_kursus6">
                    </div>
                  </div>


                  <div class="form-divider">
                    E. Kemampuan Bahasa Asing
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Bahasa Pertama</label>
                      <input id="first_name" type="text" class="form-control" name="bahasa" autofocus placeholder="Contoh: Melayu">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Membaca</label>
                      <input id="last_name" type="text" class="form-control" name="membaca" placeholder="Contoh: Cukup">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Bicara</label>
                      <input id="first_name" type="text" class="form-control" name="bicara" autofocus placeholder="Contoh: Baik">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Menulis</label>
                      <input id="last_name" type="text" class="form-control" name="menulis" placeholder="Contoh: Baik Sekali">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Bahasa Kedua</label>
                      <input id="first_name" type="text" class="form-control" name="bahasa2" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Membaca</label>
                      <input id="last_name" type="text" class="form-control" name="membaca2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Bicara</label>
                      <input id="first_name" type="text" class="form-control" name="bicara2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Menulis</label>
                      <input id="last_name" type="text" class="form-control" name="menulis2">
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Bahasa Ketiga</label>
                      <input id="first_name" type="text" class="form-control" name="bahasa3" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Membaca</label>
                      <input id="last_name" type="text" class="form-control" name="membaca3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Bicara</label>
                      <input id="first_name" type="text" class="form-control" name="bicara3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Menulis</label>
                      <input id="last_name" type="text" class="form-control" name="menulis3">
                    </div>
                  </div>

                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Bahasa Keempat</label>
                      <input id="first_name" type="text" class="form-control" name="bahasa4" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Membaca</label>
                      <input id="last_name" type="text" class="form-control" name="membaca4">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Bicara</label>
                      <input id="first_name" type="text" class="form-control" name="bicara4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Menulis</label>
                      <input id="last_name" type="text" class="form-control" name="menulis4">
                    </div>
                  </div>

                  <div class="form-divider">
                    F. Riwayat Pekerjaan
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Perusahaan Pertama</label>
                      <input id="first_name" type="text" class="form-control" name="nama_perusahaan" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jabatan</label>
                      <input id="last_name" type="text" class="form-control" name="jabatan">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Gaji Bersih Per Bulan</label>
                      <input id="first_name" type="text" class="form-control" name="gaji_bersih" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nomor Telepon Kantor</label>
                      <input id="last_name" type="text" class="form-control" name="telepon_kantor">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Mulai Bekerja</label>
                      <input id="first_name" type="text" class="form-control" name="mulai_bekerja" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Berhenti Bekerja</label>
                      <input id="last_name" type="text" class="form-control" name="berhenti_bekerja">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Deskripsi Tugas</label>
                    <input id="email" type="text" class="form-control" name="deskripsi_tugas">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jenis Usaha</label>
                      <input id="first_name" type="text" class="form-control" name="jenis_usaha" autofocus >
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Atasan Langsung</label>
                      <input id="first_name" type="text" class="form-control" name="nama_atasan_langsung" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jumlah Staff / Supervisor</label>
                      <input id="last_name" type="text" class="form-control" name="jumlah_staff">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Alasan Berhenti Bekerja</label>
                    <input id="email" type="text" class="form-control" name="alasan_berhenti">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Perusahaan Kedua</label>
                      <input id="first_name" type="text" class="form-control" name="nama_perusahaan2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jabatan</label>
                      <input id="last_name" type="text" class="form-control" name="jabatan2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Gaji Bersih Per Bulan</label>
                      <input id="first_name" type="text" class="form-control" name="gaji_bersih2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nomor Telepon Kantor</label>
                      <input id="last_name" type="text" class="form-control" name="telepon_kantor2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Mulai Bekerja</label>
                      <input id="first_name" type="text" class="form-control" name="mulai_bekerja2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Berhenti Bekerja</label>
                      <input id="last_name" type="text" class="form-control" name="berhenti_bekerja2">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Deskripsi Tugas</label>
                    <input id="email" type="text" class="form-control" name="deskripsi_tugas2">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jenis Usaha</label>
                      <input id="first_name" type="text" class="form-control" name="jenis_usaha2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jumlah Karyawan</label>
                      <input id="last_name" type="text" class="form-control" name="jumlah_karyawan2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Atasan Langsung</label>
                      <input id="first_name" type="text" class="form-control" name="nama_atasan_langsung2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jumlah Staff / Supervisor</label>
                      <input id="last_name" type="text" class="form-control" name="jumlah_staff2">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Alasan Berhenti Bekerja</label>
                    <input id="email" type="text" class="form-control" name="alasan_berhenti2">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Perusahaan Ketiga</label>
                      <input id="first_name" type="text" class="form-control" name="nama_perusahaan3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jabatan</label>
                      <input id="last_name" type="text" class="form-control" name="jabatan3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Gaji Bersih Per Bulan</label>
                      <input id="first_name" type="text" class="form-control" name="gaji_bersih3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nomor Telepon Kantor</label>
                      <input id="last_name" type="text" class="form-control" name="telepon_kantor3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Mulai Bekerja</label>
                      <input id="first_name" type="text" class="form-control" name="mulai_bekerja3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Berhenti Bekerja</label>
                      <input id="last_name" type="text" class="form-control" name="berhenti_bekerja3">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Deskripsi Tugas</label>
                    <input id="email" type="text" class="form-control" name="deskripsi_tugas3">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jenis Usaha</label>
                      <input id="first_name" type="text" class="form-control" name="jenis_usaha3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jumlah Karyawan</label>
                      <input id="last_name" type="text" class="form-control" name="jumlah_karyawan3">
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Atasan Langsung</label>
                      <input id="first_name" type="text" class="form-control" name="nama_atasan_langsung3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jumlah Staff / Supervisor</label>
                      <input id="last_name" type="text" class="form-control" name="jumlah_staff3">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Alasan Berhenti Bekerja</label>
                    <input id="email" type="text" class="form-control" name="alasan_berhenti3">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Perusahaan Keempat</label>
                      <input id="first_name" type="text" class="form-control" name="nama_perusahaan4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jabatan</label>
                      <input id="last_name" type="text" class="form-control" name="jabatan4">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Gaji Bersih Per Bulan</label>
                      <input id="first_name" type="text" class="form-control" name="gaji_bersih4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nomor Telepon Kantor</label>
                      <input id="last_name" type="text" class="form-control" name="telepon_kantor4">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Mulai Bekerja</label>
                      <input id="first_name" type="text" class="form-control" name="mulai_bekerja4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Berhenti Bekerja</label>
                      <input id="last_name" type="text" class="form-control" name="berhenti_bekerja4">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Deskripsi Tugas</label>
                    <input id="email" type="text" class="form-control" name="deskripsi_tugas4">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jenis Usaha</label>
                      <input id="first_name" type="text" class="form-control" name="jenis_usaha4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jumlah Karyawan</label>
                      <input id="last_name" type="text" class="form-control" name="jumlah_karyawan4">
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Atasan Langsung</label>
                      <input id="first_name" type="text" class="form-control" name="nama_atasan_langsung4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jumlah Staff / Supervisor</label>
                      <input id="last_name" type="text" class="form-control" name="jumlah_staff4">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Alasan Berhenti Bekerja</label>
                    <input id="email" type="text" class="form-control" name="alasan_berhenti4">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Perusahaan Kelima</label>
                      <input id="first_name" type="text" class="form-control" name="nama_perusahaan5" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jabatan</label>
                      <input id="last_name" type="text" class="form-control" name="jabatan5">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Gaji Bersih Per Bulan</label>
                      <input id="first_name" type="text" class="form-control" name="gaji_bersih5" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nomor Telepon Kantor</label>
                      <input id="last_name" type="text" class="form-control" name="telepon_kantor5">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Mulai Bekerja</label>
                      <input id="first_name" type="text" class="form-control" name="mulai_bekerja5" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Berhenti Bekerja</label>
                      <input id="last_name" type="text" class="form-control" name="berhenti_bekerja5">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Deskripsi Tugas</label>
                    <input id="email" type="text" class="form-control" name="deskripsi_tugas5">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jenis Usaha</label>
                      <input id="first_name" type="text" class="form-control" name="jenis_usaha5" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jumlah Karyawan</label>
                      <input id="last_name" type="text" class="form-control" name="jumlah_karyawan5">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Atasan Langsung</label>
                      <input id="first_name" type="text" class="form-control" name="nama_atasan_langsung5" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Jumlah Staff / Supervisor</label>
                      <input id="last_name" type="text" class="form-control" name="jumlah_staff5">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Alasan Berhenti Bekerja</label>
                    <input id="email" type="text" class="form-control" name="alasan_berhenti5">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  
                  <div class="form-divider">
                    G. Aktivitas Sosial
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Organisasi Pertama</label>
                      <input id="first_name" type="text" class="form-control" name="nama_organisasi" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Aktivitas</label>
                      <input id="last_name" type="text" class="form-control" name="aktivitas">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jabatan</label>
                      <input id="first_name" type="text" class="form-control" name="jabatan_organisasi" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tahun</label>
                      <input id="last_name" type="number" class="form-control" name="tahun_organisasi">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Organisasi Kedua</label>
                      <input id="first_name" type="text" class="form-control" name="nama_organisasi2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Aktivitas</label>
                      <input id="last_name" type="text" class="form-control" name="aktivitas2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jabatan</label>
                      <input id="first_name" type="text" class="form-control" name="jabatan_organisasi2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tahun</label>
                      <input id="last_name" type="number" class="form-control" name="tahun_organisasi2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Organisasi Ketiga</label>
                      <input id="first_name" type="text" class="form-control" name="nama_organisasi3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Aktivitas</label>
                      <input id="last_name" type="text" class="form-control" name="aktivitas3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jabatan</label>
                      <input id="first_name" type="text" class="form-control" name="jabatan_organisasi3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tahun</label>
                      <input id="last_name" type="number" class="form-control" name="tahun_organisasi3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Organisasi Keempat</label>
                      <input id="first_name" type="text" class="form-control" name="nama_organisasi4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Aktivitas</label>
                      <input id="last_name" type="text" class="form-control" name="aktivitas4">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jabatan</label>
                      <input id="first_name" type="text" class="form-control" name="jabatan_organisasi4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tahun</label>
                      <input id="last_name" type="number" class="form-control" name="tahun_organisasi4">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Organisasi</label>
                      <input id="first_name" type="text" class="form-control" name="nama_organisasi5" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Aktivitas</label>
                      <input id="last_name" type="text" class="form-control" name="aktivitas5">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jabatan</label>
                      <input id="first_name" type="text" class="form-control" name="jabatan_organisasi5" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Tahun</label>
                      <input id="last_name" type="number" class="form-control" name="tahun_organisasi5">
                    </div>
                  </div>

                  <div class="form-divider">
                    H. Referensi
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Referensi Pertama</label>
                      <input id="first_name" type="text" class="form-control" name="nama_referensi" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Hubungan</label>
                      <input id="last_name" type="text" class="form-control" name="hubungan_referensi">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jabatan Perusahaan</label>
                      <input id="first_name" type="text" class="form-control" name="jabatan_referensi" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nomor Handphone</label>
                      <input id="last_name" type="number" class="form-control" name="handphone_referensi">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Referensi Kedua </label>
                      <input id="first_name" type="text" class="form-control" name="nama_referensi2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Hubungan</label>
                      <input id="last_name" type="text" class="form-control" name="hubungan_referensi2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jabatan Perusahaan</label>
                      <input id="first_name" type="text" class="form-control" name="jabatan_referensi2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nomor Handphone</label>
                      <input id="last_name" type="number" class="form-control" name="handphone_referensi2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Referensi Ketiga</label>
                      <input id="first_name" type="text" class="form-control" name="nama_referensi3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Hubungan</label>
                      <input id="last_name" type="text" class="form-control" name="hubungan_referensi3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jabatan Perusahaan</label>
                      <input id="first_name" type="text" class="form-control" name="jabatan_referensi3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nomor Handphone</label>
                      <input id="last_name" type="number" class="form-control" name="handphone_referensi3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Referensi Keempat</label>
                      <input id="first_name" type="text" class="form-control" name="nama_referensi4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Hubungan</label>
                      <input id="last_name" type="text" class="form-control" name="hubungan_referensi4">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Jabatan Perusahaan</label>
                      <input id="first_name" type="text" class="form-control" name="jabatan_referensi4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nomor Handphone</label>
                      <input id="last_name" type="number" class="form-control" name="handphone_referensi4">
                    </div>
                  </div>

                  <div class="form-divider">
                    H. Orang yang dapat dihubungi dalam keadaan darurat
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama</label>
                      <input id="first_name" type="text" class="form-control" name="nama_darurat" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Hubungan</label>
                      <input id="last_name" type="text" class="form-control" name="hubungan_darurat">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Nomor Handphone</label>
                    <input id="number" type="text" class="form-control" name="hp_darurat">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama</label>
                      <input id="first_name" type="text" class="form-control" name="nama_darurat2" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Hubungan</label>
                      <input id="last_name" type="text" class="form-control" name="hubungan_darurat2">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Nomor Handphone</label>
                    <input id="number" type="text" class="form-control" name="hp_darurat2">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama</label>
                      <input id="first_name" type="text" class="form-control" name="nama_darurat3" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Hubungan</label>
                      <input id="last_name" type="text" class="form-control" name="hubungan_darurat3">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Nomor Handphone</label>
                    <input id="number" type="text" class="form-control" name="hp_darurat3">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama</label>
                      <input id="first_name" type="text" class="form-control" name="nama_darurat4" autofocus >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Hubungan</label>
                      <input id="last_name" type="text" class="form-control" name="hubungan_darurat4">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Nomor Handphone</label>
                    <input id="number" type="text" class="form-control" name="hp_darurat4">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-divider">
                    I. Gaji
                  </div>

                  <div class="form-group">
                    <label for="email">Gaji yang diharapkan</label>
                    <input id="number" type="number" class="form-control" name="harapan_gaji" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Waktu kebersediaan untuk bergabung di perusahaan</label>
                    <input id="number" type="text" class="form-control" name="kebersediaan" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Unggah Data Lamaran
                    </button>
                  </div>
                  <?php echo form_close(); ?>
              </div>
            </div>