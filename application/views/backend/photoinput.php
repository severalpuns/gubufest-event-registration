<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Team Photo</h4>
                    <p class="category">Upload your team photo</p>
                </div>
                <div class="card-content">
                    <?php echo form_open_multipart('/photo/input'); ?>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                              <p>Upload your team photo here</p>
                              <input id="file" type="file" name="userfile">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Upload</button>
                        <div class="clearfix"></div>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
