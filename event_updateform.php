<?php
session_start();
$update_ID  = $_GET['event_id'];
include('server.php');

$sql = "SELECT * FROM event_db WHERE event_id = $update_ID ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();


  $objQuery = mysqli_query($conn,$sql);
    if(isset($_SESSION['username'])){

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบงานกิจกรรม</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark nav-margin">
  <div class="container">
    <a class="navbar-brand" href="admin_page.php">เจ้าหน้าที่</a>
  </div>
</nav>



<div class="container">
        <div class="card ">
          <h2 class="card-header text-center">แก้ไขกิจกรรม</h2>
            <div class="form-row">

            
              <form action="updatedata.php?event_id=<?=$update_ID ?>" method="post">
                <div class="form-group">
                  <label for="inputstnumber">ชื่อกิจกรรม</label>
                  <input type="text" name="event_name" class="form-control"  placeholder="ชื่อกิจกรรม" value="<?=$row['event_name'] ?>" >
                </div>
      
                <div class="form-group">
                  <label for="inputName">สถานที่จัดกิจกรรม</label>
                  <input type="text" name="event_location" class="form-control"  placeholder="สถานที่จัดกิจกรรม" value="<?=$row['event_location'] ?>" >
                </div>
      
                <div class="form-group">
                  <label for="inputLastname">วันที่</label>
                  <input type="date" name="event_date" class="form-control"  placeholder="วันที่" value="<?=$row['event_date'] ?>" >
                </div>

                <div class="form-group">
                  <label for="inputLastname">เวลาเข้าร่วมกิจกรรม</label>
                  <input type="time" name="event_time" class="form-control"  placeholder="เวลาเข้าร่วมกิจกรรม"  value="<?=$row['event_time'] ?>">
                </div>

                <div class="form-group">
                  <label for="inputLastname">เวลารับรองกิจกรรม</label>
                  <input type="text" name="event_event_timer" class="form-control"  placeholder="รับรองกิจกรรม" value="<?=$row['event_event_timer'] ?>">
                </div>

                <div class="form-group">
                  <label for="inputLastname">ครูที่รับรองกิจกรรม</label>
                  <input type="text" name="event_teacher" class="form-control"  placeholder="ครูที่รับรองกิจกรรม" value="<?=$row['event_teacher'] ?>">
                </div>
                


                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="แก้ไขกิจกรรม" name="submit" >
                </div>
            </form>







</body>
</html>
<?php }else{
            echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
            header("refresh:0; url=login.php");
}?>