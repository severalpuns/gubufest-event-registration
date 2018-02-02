<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Team Document</h4>
                    <p class="category">Your team document</p>
                </div>
                <?php if($this->session->userdata('STATUS_USER') != 'ADMIN') { $this->load->view('backend/docuserbiasa'); }?>

            </div>
        </div>
    </div>
</div>
