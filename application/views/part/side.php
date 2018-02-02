<div class="sidebar" data-color="purple" data-image="<?php echo base_url(''); ?>asset/backend/img/sidebar-1.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="#" class="simple-text">
            Gubu Fest
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
              <?php if($this->session->userdata('STATUS_USER') != 'ADMIN') { $this->load->view('part/userbiasa'); }?>
            <li class="active">
                <a href="<?php echo base_url('')?>doc">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Upload Doc</p>
                </a>
            </li>
            <li class="active">
                <a href="<?php echo base_url('')?>youtube">
                    <i class="material-icons">movie</i>
                    <p>Upload Video</p>
                </a>
            </li>
            <li class="active">
                <a href="<?php echo base_url('')?>login/logout">
                    <i class="material-icons">blocked</i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>
