<?php include('header.php'); ?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Images in Album from here</h4>
                </div>
                <div class="card-body">
                  <form action="hdetail.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <input type="hidden" value="<?php echo $_GET['cover_id']; ?>" name="cover_id">
                        <input type="file" name="img[]" multiple>
                        <p style="color: red;">Choose 1 or more images</p>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" name="innerimg" value="Upload Cover">
                    <!-- <button type="submit" class="btn btn-primary pull-right">Update Profile</button> -->
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of Albums</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Cover Title
                        </th>
                        <th>
                          Cover Sort Detail
                        </th>
                        <th>Image Name</th>
                        <th>
                          Add Inner Image
                        </th>
                      </thead>
                      <tbody>
                        <?php
                          include('database.php');
                          $data = mysqli_query($con, "SELECT * FROM covers");
                          while($row = mysqli_fetch_assoc($data)){ 
                            // echo "<pre>";print_r($row);
                        ?>
                        <tr>
                          <td>
                            <?php echo $row['cov_id']; ?>
                          </td>
                          <td>
                            <?php echo $row['covTitile']; ?>
                          </td>
                          <td>
                            <?php echo $row['covShortDetail']; ?>
                          </td>
                          <td class="text-primary">
                            <?php echo substr($row['covImgName'],12); ?>
                          </td>
                          <td>
                            <a href="add-images.php?cover_id=<?php echo $row['cov_id']; ?>">Add Images</a>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php include('footer.php'); ?>