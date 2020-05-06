<?php include('header.php'); ?>

<style type="text/css">
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.singleImg:hover .image {
  opacity: 0.3;
}

.singleImg:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
a{
  text-decoration: none;
  color: white;
  font-weight: 900;
  font-size: 20px;
  background-color: none;
}
</style>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <?php
                  include('database.php');
                  if(!empty($_GET['cover_id'])){
                  $cover_id = $_GET['cover_id'];                      
                  $covdata = mysqli_query($con, "SELECT * FROM covers WHERE cov_id='$cover_id' LIMIT 1");

                  $coverdetail = mysqli_fetch_assoc($covdata);
                    // echo "<pre>";print_r($coverdetail);
                ?>
                <div class="card-header card-header-primary">
                  <div class="row">
                    <div class="col-md-9">
                      <h4 class="card-title ">Hi, All Images of <?php echo $coverdetail['covTitile']; ?></h4>
                    </div>
                    <div class="col-md-3">
                      <img src="../cover/<?php echo $coverdetail['covImgName']; ?>" style="width: 100%;height: 100px;">
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php
                      // include('database.php');
                    // if(!empty($_GET['cover_id'])){
                      $coverID = $_GET['cover_id'];                      
                      $data = mysqli_query($con, "SELECT img_id,img FROM imges WHERE cov_id='$coverID'");
                      
                      while($row = mysqli_fetch_assoc($data)){
                        // echo "<pre>";print_r($row);
                    ?>
                    <div class="col-md-4 singleImg">
                      <img src="../images/<?php echo $row['img']; ?>" style="width: 100%;height: 200px;" class="image">
                      <div class="middle">
                        <div class="text"><a href="hdetail.php?singleImgId=<?php echo $row['img_id']; ?>" class="btn-info">Delete</a></div>
                      </div>
                    </div>
                  <?php } }else echo "<p>No data</p>" ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php include('footer.php'); ?>