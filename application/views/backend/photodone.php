<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Photo</h4>
                    <p class="category">Your photo</p>
                </div>
                <div class="card-content">
                    <?php foreach($foto as $u) { ?>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                  <center>
                                    <img src="<?php echo base_url('img/team') . '/' . $u->KELOMPOK_FOTO ?>">
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
