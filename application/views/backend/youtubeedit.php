<!doctype html>
<html lang="en">

<head>
<?php echo $this->load->view('part/head'); ?>
</head>

<body>
    <div class="wrapper">

<?php $this->load->view('part/side'); ?>

        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Team Youtube Link </a>
                    </div>
                </div>
            </nav>
            <div class="content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="purple">
                                  <h4 class="title">Status Team</h4>
                                  <p class="category">Change status team here</p>
                              </div>
                              <div class="card-content">
                                  <?php echo form_open_multipart('/youtube/update'); ?>
                                  <?php foreach($youtube as $u) { ?>
                                  <form>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Team Name</label>
                                                  <input name="NAMA_TIM" type="text" class="form-control" value="<?php echo $u->NAMA_TIM; ?>" required="" disable="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Team Leader</label>
                                                  <input name="KETUA_TIM" type="text" class="form-control" value="<?php echo $u->KETUA_TIM; ?>" required="" disable="">
                                                  <input name="ID_YOUTUBE" type="hidden" class="form-control" value="<?php echo $u->ID_YOUTUBE; ?>" required="" disable="" hidden="">
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Team Collage</label>
                                                  <input name="PT_TIM" type="text" class="form-control" value="<?php echo $u->PT_TIM; ?>" required="" disable="">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-6">
                                        <select name="PENGUMUMAN_YOUTUBE">
                                          <option value="" disabled selected>Choose your option</option>
                                          <option value="TIDAK LOLOS">TIDAK LOLOS</option>
                                          <option value="LOLOS">LOLOS</option>
                                        </select>
                                        </div>
                                      </div>

                                      <button type="submit" class="btn btn-primary pull-right">Update</button>
                                      <div class="clearfix"></div>
                                  </form>
                                  <?php } ?>
                                  <?php echo form_close(); ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</body>

<?php echo $this->load->view('part/foot')?>

</html>
