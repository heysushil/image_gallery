<?php include('header.php');?>
<style type="text/css">
  .img-fluid{
    padding: 8px;
  }
</style>

    <div class="site-section border-bottom">
      <div class="container">
        <div class="row text-center justify-content-center mb-5">
          <div class="col-md-7" data-aos="fade-up">
            <h2>My Photography</h2>
          </div>
        </div>

        <div class="row">
          <?php
            include('admin/home/database.php');
            $data = mysqli_query($con, "SELECT * FROM covers");
            while($row = mysqli_fetch_assoc($data)){
              // echo "<pre>";print_r($row);
          ?>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a class="image-gradient" href="photos.php?coverID=<?php echo $row['cov_id']; ?>">
              <figure>
                <img src="admin/cover/<?php echo $row['covImgName']; ?>" alt="" class="img-fluid" style="width: 100%;height: 300px;">
              </figure>
              <div class="text">
                <h3><?php echo $row['covTitile']; ?></h3>
                <span><?php echo $row['covShortDetail']; ?></span>
              </div>
            </a>
          </div>
        <?php } ?>
          <!-- <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a class="image-gradient" href="photos.php">
              <figure>
                <img src="images/img/street-wall2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Sea Creatures</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <a class="image-gradient" href="photos.php">
              <figure>
                <img src="images/img/street-wall3.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Enjoying Deep Sea</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <a class="image-gradient" href="photos.php">
              <figure>
                <img src="images/img/street-wall4.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Beautiful Beach</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
            <a class="image-gradient" href="photos.php">
              <figure>
                <img src="images/img/street-wall5.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Laughter is Science</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
            <a class="image-gradient" href="photos.php">
              <figure>
                <img src="images/img/street-wall6.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Knot Tying</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div> -->
        </div>
      </div>
    </div>

  <?php include('footer.php');?>