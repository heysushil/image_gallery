<?php include('header.php');?>
<style type="text/css">
  .img-fluid{
    padding: 8px;
  }
</style>
    <!-- <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('images/img/painting-banner.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            
          </div>
        </div>
      </div>
    </div> -->


  

    <div class="site-section"  data-aos="fade">
    <div class="container">
      
      <div class="row no-gutters" id="lightgallery">
        <?php
          include('admin/home/database.php');
          $coverID = $_GET['coverID'];
          
          $data = mysqli_query($con, "SELECT img FROM imges WHERE cov_id='$coverID'");

          while($row = mysqli_fetch_assoc($data)){
            // echo "<pre>";print_r($row);
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="admin/images/<?php echo $row['img'];?>" data-sub-html="<h4>Your loving memories.</p>">
          <a href="#"><img src="admin/images/<?php echo $row['img'];?>" alt="IMage" class="img-fluid"></a>
        </div>      
      <?php } ?>
      </div>
    </div>
  </div>

  <?php include('footer.php');?>