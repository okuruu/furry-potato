<div class="main-content">

        <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Hasil Recruitment Tahun <?php echo $tahun = date('Y'); ?></h4>
                  </div>
                  <div class="card-body">                
                  <table class="table text-center">
                      <thead>
                        <tr>
                          <th scope="col">Nama</th>
                          <th scope="col">Posisi</th>
                          <th scope="col">Gaji</th>
                          <th scope="col">Download</th>
                          <th scope="col">Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($pendaftar as $data){  ?>
                        <tr>
                          <td><?php echo $data->nama_lengkap; ?></td>
                          <td><?php echo $data->posisi; ?></i></td>
                          <td>Rp. <?php echo number_format($data->harapan_gaji,0); ?></btn></i></td>
                          <td><a href="<?php echo base_url('index.php/HasilRecruitment/export_choose/'.$ktp = $data->ktp); ?>"><btn class="btn btn-primary"><i class="far fa-file-alt"></btn></i></a></td>
                          <td><a href="<?php echo base_url('index.php/HasilRecruitment/hapus/'.$ktp = $data->ktp); ?>"><btn class="btn btn-danger"><i class="fas fa-times"></btn></i></a></td>
                        </tr>
                    <?php } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
</div>