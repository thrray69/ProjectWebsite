<?php

session_start();
include 'server.php';


$sql = "SELECT * FROM event_db ORDER BY event_id DESC";
$objQuery = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ระบบงานกิจกรรม</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" href="css.css">


</head>
<body>
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">ระบบงานกิจกรรม</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="index.php" class="nav-link active" aria-current="page">หน้าแรก</a>
      </li>
      <li class="nav-item">
        <a href="about.php" class="nav-link" >เกี่ยวกับ</a>
      </li>
      <li class="nav-item">
        <a href="login.php" class="nav-link" >เจ้าหน้าที่</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
 <!-- End Header -->


<!-- Picture -->
<!-- <div class="container text-center"> -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000" style="height=500px">
      <img src="img/1.jpg" class="w-100 " alt="..." >  
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="img/2.jpg" class=" w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="img/3.jpg" class=" w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="img/4.jpg" class=" w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="img/5.jpg" class=" w-100" alt="...">
    </div>
    <!-- </div> -->

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<!-- Table -->
<div class="container">
    <div  class="col-12">
      <div class="card card-margin">
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap text-center">
            <thead >
              <tr>
                <th>วันที่ / เวลา</th>
                <th>กิจกรรม / โครงการ</th>
                <th>จำนวนผู้เข้าร่วม</th>
                <th></th>
              </tr>
            </thead>
            <tbody >
            <?php
              $i = 1;
              while ($objResult = mysqli_fetch_array($objQuery)) {

                $sql_count = mysqli_query($conn, "SELECT * FROM history_db WHERE event_id = '".$objResult['event_id']."'");
                $row_count = mysqli_num_rows($sql_count);


              ?>
            <tr>
              <td><?php echo $objResult['event_date'] ; echo "  " . $objResult['event_time'];  ?></td>
              <td><?php echo $objResult['event_name'] ;?></td>
              <td><?=$row_count?></td>
              <td><a href="event_form.php?id=<?php echo $objResult["event_id"];  ?>" class="btn btn-primary">เข้าร่วม</a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>







<footer class="bg-light text-center text-lg-start footer">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    แผนกคอมพิวเตอร์ธุรกิจ  
    <strong><a class="text-dark" href="http://www.sttc.ac.th/">วิทยาลัยเทคนิคสตูล</a></strong>
  </div>
  <!-- Copyright -->
</footer>




<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>