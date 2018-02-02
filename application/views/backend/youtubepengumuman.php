<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Announcement</h4>
                    <p class="category">Your youtube video</p>
                </div>
                <div class="card-content">
                    <?php foreach($youtube as $u) { ?>
                    <form>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group label-floating">
                                <center>
                                  <h4 class="title">
                                    <?php
                                      if($u->PENGUMUMAN_YOUTUBE == "") {
                                        echo "Terimakasih Telah Upload Link Youtube! Tunggu Pengumuman Lebih Lanjut!";
                                      } else if($u->PENGUMUMAN_YOUTUBE == "TIDAK LOLOS") {
                                        echo "Mohon Maaf, Tim Kamu Tidak Lolos! Jangan Putus Asa, Tetap Mencoba Yang Terbaik!";
                                      } else if($u->PENGUMUMAN_YOUTUBE == "LOLOS") {
                                        echo "SELAMAT! Tim Kamu Lolos! Silahkan Menghadiri Showcase!";
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
            </div>
        </div>
    </div>
</div>
