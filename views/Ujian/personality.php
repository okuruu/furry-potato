<div class="main-content">

        <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Personalysis Response</h4>
                  </div>
                  <div class="card-body">
                  
                  <?php echo form_open("Ujian/personality_selesai") ?>

                  <div class="row">
                      <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">

                        <!-- Soal Nomor 1 -->
                        <div class="tab-pane fade show active" id="nomor-1" role="tabpanel" aria-labelledby="list-home-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M1" value="1">
                                        </div>
                                    </td>
                                    <td>Mudah bergaul, ramah, mudah setuju</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L1" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M1" value="2">
                                        </div>
                                    </td>
                                    <td>Mempercayai, Percaya pada orang lain</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L1" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M1" value="3">
                                        </div>
                                    </td>
                                    <td>Petualang, suka mengambil resiko</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L1" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M1" value="4">
                                        </div>
                                    </td>
                                    <td>Penuh toleransi, menghormati orang lain</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L1" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-2" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>  
                        <!-- Soal Nomor 2 -->
                        <div class="tab-pane fade" id="nomor-2" role="tabpanel" aria-labelledby="list-profile-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M2" value="1">
                                        </div>
                                    </td>
                                    <td>Yang penting adalah hasil</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L2" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M2" value="2">
                                        </div>
                                    </td>
                                    <td>Kerjakan dengan benar, ketepatan sangat penting</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L2" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M2" value="3">
                                        </div>
                                    </td>
                                    <td>Buat agar menyenangkan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L2" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M2" value="4">
                                        </div>
                                    </td>
                                    <td>Kerjakan bersama-sama</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L2" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-3" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 3 -->
                        <div class="tab-pane fade" id="nomor-3" role="tabpanel" aria-labelledby="list-messages-list">
                        
                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M3" value="1">
                                        </div>
                                    </td>
                                    <td>Pendidikan, kebudayaan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L3" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M3" value="2">
                                        </div>
                                    </td>
                                    <td>Prestasi, penghargaan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L3" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M3" value="3">
                                        </div>
                                    </td>
                                    <td>Keselamatan, keamanan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L3" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M3" value="4">
                                        </div>
                                    </td>
                                    <td>Sosial, pertemuan, kelompok</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L3" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-4" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <!-- Soal Nomor 4  -->
                        <div class="tab-pane fade" id="nomor-4" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M4" value="1">
                                        </div>
                                    </td>
                                    <td>Lembut, tertutup</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L4" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M4" value="2">
                                        </div>
                                    </td>
                                    <td>Visionary / pandangan ke masa depan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L4" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M4" value="3">
                                        </div>
                                    </td>
                                    <td>Pusat perhatian suka bersosialisasi</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L4" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M4" value="4">
                                        </div>
                                    </td>
                                    <td>Pendamai, membawa ketenangan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L4" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-5" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <!-- Soal Nomor 5 -->
                        <div class="tab-pane fade" id="nomor-5" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M5" value="1">
                                        </div>
                                    </td>
                                    <td>Menahan diri, bisa hidup tanpa memiliki</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L5" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M5" value="2">
                                        </div>
                                    </td>
                                    <td>Membeli karena dorongan hasrat / impulse</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L5" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M5" value="3">
                                        </div>
                                    </td>
                                    <td>Akan menunggu, tanpa tekanan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L5" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M5" value="4">
                                        </div>
                                    </td>
                                    <td>Akan membeli apa yang diinginkan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L5" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-6" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <!-- Soal Nomor 6 -->
                        <div class="tab-pane fade" id="nomor-6" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M6" value="1">
                                        </div>
                                    </td>
                                    <td>Mengambil kendali, bersikap langsung / direct</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L6" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M6" value="2">
                                        </div>
                                    </td>
                                    <td>Suka bergaul, antusias</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L6" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M6" value="3">
                                        </div>
                                    </td>
                                    <td>Mudah ditebak, konsisten</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L6" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M6" value="4">
                                        </div>
                                    </td>
                                    <td>Waspada, berhati - hati</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L6" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                      <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-7" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <!-- Soal Nomor 7 -->
                        <div class="tab-pane fade" id="nomor-7" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M7" value="1">
                                        </div>
                                    </td>
                                    <td>Menyemangati orang lain</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L7" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M7" value="2">
                                        </div>
                                    </td>
                                    <td>Berusaha mencapai kesempurnaan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L7" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M7" value="3">
                                        </div>
                                    </td>
                                    <td>Menjadi bagian dari tim / kelompok</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L7" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M7" value="4">
                                        </div>
                                    </td>
                                    <td>Ingin menetapkan goal / tujuan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L7" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-8" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>
                        <!-- Soal Nomor 8 -->
                        <div class="tab-pane fade" id="nomor-8" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M8" value="1">
                                        </div>
                                    </td>
                                    <td>Bersahabat, mudah bergaul</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L8" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M8" value="2">
                                        </div>
                                    </td>
                                    <td>Unik, bosan pada rutinitas</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L8" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M8" value="3">
                                        </div>
                                    </td>
                                    <td>Aktif melakukan perubahan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L8" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M8" value="4">
                                        </div>
                                    </td>
                                    <td>Ingin segala sesuatu akurat dan pasti</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L8" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-9" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 9 -->
                        <div class="tab-pane fade" id="nomor-9" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M9" value="1">
                                        </div>
                                    </td>
                                    <td>Sulit dikalahkan, ditundukan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L9" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M9" value="2">
                                        </div>
                                    </td>
                                    <td>Melaksanakan sesuatu perintah</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L9" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M9" value="3">
                                        </div>
                                    </td>
                                    <td>Bersemangat, riang</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L9" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M9" value="4">
                                        </div>
                                    </td>
                                    <td>Ingin keteraturan, rapi</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L9" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-10" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 10 -->
                        <div class="tab-pane fade" id="nomor-10" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M2" value="1">
                                        </div>
                                    </td>
                                    <td>Menjadi Frustasi</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L10" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M10" value="2">
                                        </div>
                                    </td>
                                    <td>Memendam perasaan dalam hati</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L10" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M10" value="3">
                                        </div>
                                    </td>
                                    <td>Menyampaikan sudut pandang pribadi</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L10" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M10" value="4">
                                        </div>
                                    </td>
                                    <td>Berani menghadapi oposisi</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L10" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-11" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 11 -->
                        <div class="tab-pane fade" id="nomor-11" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M11" value="1">
                                        </div>
                                    </td>
                                    <td>Mengalah, tidak suka pertentangan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L11" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M11" value="2">
                                        </div>
                                    </td>
                                    <td>Penuh dengan hal-hal kecil detail</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L11" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M11" value="3">
                                        </div>
                                    </td>
                                    <td>Berubah pada menit-menit terakhir</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L11" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M11" value="4">
                                        </div>
                                    </td>
                                    <td>Mendesak / memaksa agak kasar</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L11" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-12" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 12 -->
                        <div class="tab-pane fade" id="nomor-12" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M12" value="1">
                                        </div>
                                    </td>
                                    <td>Saya akan pimpin mereka</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L12" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M12" value="2">
                                        </div>
                                    </td>
                                    <td>Saya akan ikut / mengikuti</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L12" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M12" value="3">
                                        </div>
                                    </td>
                                    <td>Saya akan pengaruhi / bujuk mereka</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L12" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M12" value="4">
                                        </div>
                                    </td>
                                    <td>Saya akan mendapatkan fakta - faktanya</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L12" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-13" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 13 -->
                        <div class="tab-pane fade" id="nomor-13" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M13" value="1">
                                        </div>
                                    </td>
                                    <td>Hidup / lincah banyak bicara</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L13" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M13" value="2">
                                        </div>
                                    </td>
                                    <td>Cepat, penuh keyakinan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L13" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M13" value="3">
                                        </div>
                                    </td>
                                    <td>Berusaha menjaga keseimbangan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L13" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M13" value="4">
                                        </div>
                                    </td>
                                    <td>Berusaha patuh pada peraturan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L13" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-14" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 14 -->
                        <div class="tab-pane fade" id="nomor-14" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M14" value="1">
                                        </div>
                                    </td>
                                    <td>Ingin kemajuan / peningkatan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L14" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M14" value="2">
                                        </div>
                                    </td>
                                    <td>Puas dengan keadaan. Tenang / mudah puas</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L14" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M14" value="3">
                                        </div>
                                    </td>
                                    <td>Menunjukkan perasaan dengan terbuka</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L14" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M14" value="4">
                                        </div>
                                    </td>
                                    <td>Rendah hati, sederhana</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L14" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-15" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 15 -->
                        <div class="tab-pane fade" id="nomor-15" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M15" value="1">
                                        </div>
                                    </td>
                                    <td>Memikirkan orang lain dahulu</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L15" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M15" value="2">
                                        </div>
                                    </td>
                                    <td>Suka bersaing / kompetitif. Suka tantangan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L15" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M15" value="3">
                                        </div>
                                    </td>
                                    <td>Optimis, berpikir positif</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L15" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M15" value="4">
                                        </div>
                                    </td>
                                    <td>Sistematis, berpikir logis</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L15" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-16" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 16 -->
                        <div class="tab-pane fade" id="nomor-16" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M16" value="1">
                                        </div>
                                    </td>
                                    <td>Mengelola waktu dengan efisien</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L16" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M16" value="2">
                                        </div>
                                    </td>
                                    <td>Sering terburu - buru merasa ditekan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L16" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M16" value="3">
                                        </div>
                                    </td>
                                    <td>Hal - hal sosial adalah penting</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L16" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M16" value="4">
                                        </div>
                                    </td>
                                    <td>Suka menyelesaikan hal yang sudah dimulai</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L16" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-17" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 17 -->
                        <div class="tab-pane fade" id="nomor-17" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M17" value="1">
                                        </div>
                                    </td>
                                    <td>Tenang , Pendiam, Tertutup</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L17" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M17" value="2">
                                        </div>
                                    </td>
                                    <td>Gembira, Bebas, Riang</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L17" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M17" value="3">
                                        </div>
                                    </td>
                                    <td>Menyenangkan, Baik Hati</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L17" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M17" value="4">
                                        </div>
                                    </td>
                                    <td>Menyolok, Berani</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L17" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-18" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 18 -->
                        <div class="tab-pane fade" id="nomor-18" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M18" value="1">
                                        </div>
                                    </td>
                                    <td>Menyenangkan orang lain, ramah, penurut</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L18" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M18" value="2">
                                        </div>
                                    </td>
                                    <td>Tertawa lepas, hidup</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L18" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M18" value="3">
                                        </div>
                                    </td>
                                    <td>Pemberani, tegas</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L18" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M18" value="4">
                                        </div>
                                    </td>
                                    <td>Pendiam, tertutup, tenang</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L18" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-19" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 19 -->
                        <div class="tab-pane fade" id="nomor-19" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M19" value="1">
                                        </div>
                                    </td>
                                    <td>Menolak perubahan yang mendadak</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L19" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M19" value="2">
                                        </div>
                                    </td>
                                    <td>Cenderung terlalu banyak berjanji</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L19" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M19" value="3">
                                        </div>
                                    </td>
                                    <td>Mundur apabila berada dibawah tekanan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L19" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M19" value="4">
                                        </div>
                                    </td>
                                    <td>Tidak takut untuk berkelahi</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L19" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-20" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 20 -->
                        <div class="tab-pane fade" id="nomor-20" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M20" value="1">
                                        </div>
                                    </td>
                                    <td>Menyediakan waktu untuk orang lain</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L20" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M20" value="2">
                                        </div>
                                    </td>
                                    <td>Merencanakan masa depan, bersiap - siap</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L20" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M20" value="3">
                                        </div>
                                    </td>
                                    <td>Menuju petualangan baru</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L20" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M20" value="4">
                                        </div>
                                    </td>
                                    <td>Menerima penghargaan atas pencapaian target</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L20" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-21" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 21 -->
                        <div class="tab-pane fade" id="nomor-21" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M21" value="1">
                                        </div>
                                    </td>
                                    <td>Ingin wewenang / kekuasaan lebih</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L21" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M21" value="2">
                                        </div>
                                    </td>
                                    <td>Ingin kesempatan baru</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L21" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M21" value="3">
                                        </div>
                                    </td>
                                    <td>Menghindari perselisihan / konflik apapun</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L21" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M21" value="4">
                                        </div>
                                    </td>
                                    <td>Ingin arahan yang jelas</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L21" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-22" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 22 -->
                        <div class="tab-pane fade" id="nomor-22" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M22" value="1">
                                        </div>
                                    </td>
                                    <td>Penyemangat / Pendukung yang baik</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L22" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M22" value="2">
                                        </div>
                                    </td>
                                    <td>Pendengar yang baik</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L22" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M22" value="3">
                                        </div>
                                    </td>
                                    <td>Penganalisa yang baik</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L22" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M22" value="4">
                                        </div>
                                    </td>
                                    <td>Pendelegasian yang baik / pandai membagi tugas</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L22" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-23" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 23 -->
                        <div class="tab-pane fade" id="nomor-23" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M23" value="1">
                                        </div>
                                    </td>
                                    <td>Peraturan perlu diuji</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L23" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M23" value="2">
                                        </div>
                                    </td>
                                    <td>Peraturan membuat menjadi adil</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L23" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M23" value="3">
                                        </div>
                                    </td>
                                    <td>Peraturan membuat menjadi membosankan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L23" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M23" value="4">
                                        </div>
                                    </td>
                                    <td>Peraturan membuat menjadi aman</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L23" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-xs-12">
                          <div class="text-right">
                            <input type="button" id="list-settings-list" data-toggle="list" href="#nomor-24" value="Next" class="btn btn-primary">
                          </div>
                        </div>

                        </div>

                        <!-- Soal Nomor 24 -->
                        <div class="tab-pane fade" id="nomor-24" role="tabpanel" aria-labelledby="list-settings-list">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">M</th>
                                <th scope="col"></th>
                                <th scope="col">L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="M24" value="1">
                                        </div>
                                    </td>
                                    <td>Gagal dipercaya dan diandalkan</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L24" value="1">
                                        </div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M24" value="2">
                                        </div>
                                    </td>
                                    <td>Kreatif, unik</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L24" value="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M24" value="3">
                                        </div>
                                    </td>
                                    <td>Berorientasi pada hasil / profit untung</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L24" value="3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="M24" value="4">
                                        </div>
                                    </td>
                                    <td>Memegang teguh standar yang tinggi, akurat</td>
                                    <td>
                                        <div class="form-check">
                                                <input class="form-check-input" type="radio" name="L24" value="4">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

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