<?php

  session_start();
  include ('server.php'); 


$sql = "SELECT * FROM event_db ORDER BY event_id DESC";
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

<nav class="navbar navbar-expand-lg navbar-dark nav-margin ">
  <div class="container">
    <a class="navbar-brand" href="admin_page.php">เจ้าหน้าที่</a>
    <div class="content align-right">
      <a class="btn btn-danger" href="logout.php">Logout</a>
    </div>
  </div>
</nav>






    


<div class="container">
  <div class="juicy">
    <button type="button" class="btn btn-primary" onclick="document.location = 'event_add.php';">+ เพิ่ม</button>
  </div>
    <div  class="col-12">
      <div class="card">
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
              <form action="deletedata.php?event_id=<?=$objResult["event_id"]  ?>" method="post"> 
              <td><a href="show_std.php?event_id=<?php echo $objResult["event_id"];  ?>" class="btn btn-primary">แสดง</a> 
              <a href="event_updateform.php?event_id=<?php echo $objResult["event_id"];  ?>" class="btn btn-primary">แก้ไข</a>

              <input type="submit" class="btn btn-danger" value="ลบ" name="delete">              
              </td>
              </form>
              </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>



</body>
</html>
<?php }else{
            echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
            header("refresh:0; url=login.php");
}?>