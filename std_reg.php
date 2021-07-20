<?php 
  include('server.php');
  $ev_id = $_GET['id'];

  $sql = "SELECT * FROM event_db WHERE event_id = $ev_id ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ระบบงานกิจกรรม</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    
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
  <div class="card ">
  <h2 class="card-header text-center"><?=$row['event_name']?></h2>
      <div class="form-row">
        <form action="check_std.php?id=<?=$ev_id?>" method="POST">
          <div class="form-group">
            <label for="inputstnumber">รหัสประจำตัว</label>
            <input type="number" name="std_num" class="form-control" id="inputstnumber" placeholder="รหัสประจำตัว" maxlength="10" required>
          </div>

          <div class="form-group">
            <label for="inputName">ชื่อ</label>
            <input type="text" name="first_name" class="form-control" id="inputName" placeholder="ชื่อ" required>
          </div>

          <div class="form-group">
            <label for="inputLastname">นามสกุล</label>
            <input type="text" name="last_name" class="form-control" id="inputLastname" placeholder="นามสกุล" required>
          </div>

          <div class="form-group">
            <label for="inputState">ระดับชั้น</label>
                <select name="select_class" id="" class="form-control" required>
                  <option selected>เลือก...</option>
                  <option value="1">ปวช.</option>
                  <option value="2">ปวส.</option>
                </select>
          </div>

          <div class="form-group">
            <label for="inputState">แผนกวิชา</label>
              <select name="select_type" id="inputState" class="form-control" required>
                <option selected>เลือก...</option>
                  <!-- <optgroup label="Swedish Cars"> -->
                    <option value="1">ยานยนต์</option>
                    <option value="2">เครื่องกลเรือ</option>
                    <option value="3">เครื่องมือกล</option>
                    <option value="4">โครงสร้าง</option>
                    <option value="5">ไฟฟ้ากำลัง</option>
                    <option value="6">อิเล็กทรอนิกส์</option>
                    <option value="7">ระบบโทรคมนาคม</option>
                    <option value="8">คอมพิวเตอร์ซอฟแวร์</option>
                    <option value="9">ก่อสร้าง</option>
                  <!-- </optgroup>
                  <optgroup label="Swedish Cars"> -->
                    <option value="10">การบัญชี</option>
                    <option value="11">การตลาด</option>
                    <option value="12">การจัดการสำนักงาน</option>
                    <option value="13">คอมพิวเตอร์ธุรกิจ</option>
                    <option value="14">อาหารและโภชนาการ</option>
                    <option value="15">การโรงแรม</option>
                    <option value="16">การท่องเที่ยว</option>
                    <option value="17">บริการบนเรือสำราญ</option>
                    <option value="18">ตัวแทนออกของ</option>
                  <!-- </optgroup> -->
              </select>
          </div>

          <div class="form-group text-center">
            <input class="btn btn-primary" type="submit" name="submit" value="ลงชื่อเข้าร่วมกิจกรรม"> 
          </div>
        </form>
      </div>
  </div>
</div>







<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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


</body>
</html>