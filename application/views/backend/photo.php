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
                        <a class="navbar-brand" href="#">Photo </a>
                    </div>
                </div>
            </nav>
            <div class="content">

                <?php
                  if($cek < 1) {
                    $this->load->view('backend/photoinput');
                  } else if($cek < 2){
                    $this->load->view('backend/photoktm');
                  }
                ?>

                <?php
                  if($cek < 1) {
                  } else if($cek == 2) {
                    $this->load->view('backend/photodone');
                  }
                ?>

            </div>
        </div>
    </div>
</body>

<?php echo $this->load->view('part/foot')?>

</html>
