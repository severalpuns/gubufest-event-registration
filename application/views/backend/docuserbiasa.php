<div class="card-content">
    <?php foreach($doc as $u) { ?>
    <form>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group label-floating">
                  <center>
                    <h4 class="title">
                      <?php
                        if($u->PENGUMUMAN_DOC == "AWAL") {
                          echo "Terimakasih Telah Upload Document! Tunggu Pengumuamn Lebih Lanjut Ya!";
                        } else if($u->PENGUMUMAN_DOC == "TIDAK LOLOS") {
                          echo "Mohon Maaf, Tim Kamu Tidak Lolos! Jangan Putus Asa, Tetap Mencoba Yang Terbaik!";
                        } else if($u->PENGUMUMAN_DOC == "LOLOS") {
                          echo "SELAMAT! Tim Kamu Lolos, Silahkan Melakukan Pembayaran ke Rekening BNI 0235009813 Atas Nama DHANI YANUAR ERDIANSYAH Sebesar Rp100.000 Untuk Upload Tahap Selanjutnya! Konfirmasi CP : 0896-5431-1544";
                        } else if($u->PENGUMUMAN_DOC == "BAYAR") {
                          echo "Terimakasih, Tim Kamu Telah Melakukan Pembayaran!";
                        }
                      ?>
                    </h4>
                  </center>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </form>
  <?php } ?>
</div>
