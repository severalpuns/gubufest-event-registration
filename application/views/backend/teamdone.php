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
                        <a class="navbar-brand" href="#"> Team Profile </a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Team Profile</h4>
                                    <p class="category">Your team profile data</p>
                                </div>
                                <div class="card-content">
                                    <?php foreach($team as $u) { ?>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Team Name</label>
                                                    <input name="NAMA_TIM" type="text" class="form-control" value="<?php echo $u->NAMA_TIM;?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Collage Name</label>
                                                    <input name="PT_TIM" type="text" class="form-control" value="<?php echo $u->PT_TIM;?>" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Team Leader Name</label>
                                                    <input name="KETUA_TIM" type="text" class="form-control" value="<?php echo $u->KETUA_TIM;?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Team Leader NIM</label>
                                                    <input name="NIM_TIM" type="number" class="form-control" value="<?php echo $u->NIM_TIM;?>" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Team Leader Email</label>
                                                    <input name="EMAIL_TIM" type="email" class="form-control" value="<?php echo $u->EMAIL_TIM;?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Team Leader Phone Number</label>
                                                    <input name="HP_TIM" type="number" class="form-control" value="<?php echo $u->HP_TIM;?>" disabled="">
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
            </div>
        </div>
    </div>
</body>

<?php echo $this->load->view('part/foot')?>

</html>
