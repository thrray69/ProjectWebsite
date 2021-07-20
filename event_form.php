<?php 
  include("server.php");
  $ev_id  =  $_GET['id'];

  $sql = "SELECT * FROM event_db WHERE event_id = $ev_id ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();



  // echo $ev_id;
  // echo $row['event_name'];
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
<nav class="navbar navbar-expand-lg navbar-dark nav-margin">
  <div class="container">
    <a class="navbar-brand" href="index.php">ระบบงานกิจกรรม</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="index.php" class="nav-link" aria-current="page">หน้าแรก</a>
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


<div class="container">
    <!-- <div class="col-6"> -->
        <div class="card ">
            <h2 class="card-header text-center">รายละเอียดกิจกรรม</h2>
            <div class="form-row">
                <div class="form-group">
                    <?php 
                      if(isset($row['event_id'])){
                    ?>
                    <h2><?=$row['event_name']?></h2>
                    <br>
                    <p>สถานที่จัดกิจกรรม : <?=$row['event_location']?></p>
                    <p>วันที่ : <?=$row['event_date']?></p>
                    <p>เวลาเข้าร่วมกิจกรรม : <?=$row['event_time']?></p>
                    <p>เวลารับรองกิจกรรม : <?=$row['event_event_timer']?></p>
                    <p>ครูที่รับรอง : <?=$row['event_teacher']?></p>
                    <br>
                </div>
            <div class="form-group text-center">
              <a class="btn btn-primary" href="std_reg.php?id=<?=$ev_id?>">เข้าร่วมกิจกรรม</a>
            </div>
            <?php } ?>
        </div>
    <!-- </div> -->
</div>







  <footer class="bg-light text-center text-lg-start footer">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      แผนกคอมพิวเตอร์ธุรกิจ  
      <strong><a class="text-dark" href="http://www.sttc.ac.th/">วิทยาลัยเทคนิคสตูล</a></strong>
    </div>
    <!-- Copyright -->
  </footer>


</body>
</html>