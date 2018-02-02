<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Youtube Video</h4>
                    <p class="category">Your youtube video</p>
                </div>
                <div class="card-content">
                    <?php foreach($youtube as $u) { ?>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                  <center>
                                    <iframe
                                    width="900" height="500"
                                    src="
                                    <?php
                                      echo $u->LINK_YOUTUBE;
                                    ?>
                                    ">
                                    </iframe>
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
