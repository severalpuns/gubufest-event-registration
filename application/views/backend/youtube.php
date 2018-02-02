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
                        <a class="navbar-brand" href="#"> Upload Video </a>
                    </div>
                </div>
            </nav>
            <div class="content">

                <?php
                  if($this->session->userdata('STATUS_USER') != 'ADMIN') {
                      if($cek < 1) {
                          $this->load->view('backend/youtubeinput');
                      }
                  } else { }
                ?>

                <?php if($cek < 1) {  } else {$this->load->view('backend/youtubepengumuman');  $this->load->view('backend/youtubedone'); }?>

                <?php if($this->session->userdata('STATUS_USER') == 'ADMIN') { $this->load->view('backend/youtubeadmin'); }?>
            </div>
        </div>
    </div>
</body>

<?php echo $this->load->view('part/foot')?>

</html>
