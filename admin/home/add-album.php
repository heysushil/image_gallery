<?php include('header.php'); ?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add New Album</h4>
                </div>
                <div class="card-body">
                  <form action="hdetail.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <input type="file" name="cover">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Album Name</label>
                          <input type="text" name="albumName" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Album Sort Detail</label>
                          <input type="text" name="albumDetail" class="form-control">
                        </div>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" name="uploadcover" value="Upload Cover">
                    <!-- <button type="submit" class="btn btn-primary pull-right">Update Profile</button> -->
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php include('footer.php'); ?>