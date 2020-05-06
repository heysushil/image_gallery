<?php include('header.php'); ?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of All Albums</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>Cover</th>
                        <th>
                          Cover Title
                        </th>
                        <th>
                          Cover Sort Detail
                        </th>
                        <th>Image Name</th>
                        <th>See All Images</th>
                        <th>
                          Add Inner Image
                        </th>
                        <th>Delete Album</th>
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
                          <td><img src="../cover/<?php echo $row['covImgName']; ?>" style="width: 50px;height: auto;"></td>
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
                            <a href="images-list.php?cover_id=<?php echo $row['cov_id']; ?>"><img src="../assets/img/see.gif" style="width: 100px;height: auto;"></a>
                          </td>
                          <td>
                            <a href="add-images.php?cover_id=<?php echo $row['cov_id']; ?>"><img src="../assets/img/add.gif" style="width: 100px;height: auto;"></a>
                          </td>
                          <td><a href="hdetail.php?cov_delete=<?php echo rand(1000,9999).$row['cov_id']; ?>"><img src="../assets/img/delete.gif" style="width: 100px;height: auto;"></a></td>
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