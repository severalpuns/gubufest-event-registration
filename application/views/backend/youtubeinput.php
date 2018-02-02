<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Insert Youtube Link</h4>
                    <p class="category">Insert your youtube link</p>
                </div>
                <div class="card-content">
                    <?php echo form_open_multipart('/youtube/input'); ?>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Youtube Link</label>
                                    <input name="LINK_YOUTUBE" type="text" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Insert</button>
                        <div class="clearfix"></div>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
