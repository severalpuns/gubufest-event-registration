<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Team Members Profile</h4>
                    <p class="category">Complete your member team profile</p>
                </div>
                <div class="card-content">
                    <?php echo form_open_multipart('/member/input'); ?>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Team Member Name</label>
                                    <input name="NAMA_ANGGOTA" type="text" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Collage Name</label>
                                    <input name="PT_ANGGOTA" type="text" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Team Member NIM</label>
                                    <input name="NIM_ANGGOTA" type="number" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Register</button>
                        <div class="clearfix"></div>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
