<?php 
  session_start();
  include("server.php");
  $ev_id  =  $_GET['event_id'];


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
    

<nav class="navbar navbar-expand-lg navbar-dark nav-margin">
  <div class="container">
    <a class="navbar-brand" href="admin_page.php">เจ้าหน้าที่</a>
  </div>
</nav>

<div class="container">
    <div class="card">
    <div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap text-center">

        <thead>
            <tr>
                <th>รหัสประจำตัว</th>
                <th>ชื่อ/นามสกุล</th>
                <th>ระดับชั้น</th>
                <th>แผนกวิชา</th>
                <td></td>
            </tr>
            </thead>
        <?php  
        $sql = "SELECT * FROM history_db WHERE event_id = $ev_id";
        $objQuery = mysqli_query($conn,$sql);

        while($show_std = mysqli_fetch_array($objQuery)){
            
            $sql_user = "SELECT * FROM history_db WHERE event_id = $ev_id";
            $result_user = $conn->query($sql_user);
            $row_user = $result_user->fetch_assoc();


            $sql_class = "SELECT * FROM class_std WHERE class_id = '".$show_std['class'].";'";
            $result_class = $conn->query($sql_class);
            $row_class = $result_class->fetch_assoc();


            $sql_type = "SELECT * FROM type_std WHERE type_id = '".$show_std['type'].";'";
            $result_type = $conn->query($sql_type);
            $row_type = $result_type->fetch_assoc();
        
        ?>
            <tbody>
            <tr>
              <td><?=$show_std['std_num'] ?></td>
              <td><?=$show_std['first_name'] ." ". $show_std['last_name']?></td>
              <td><?=$row_class['class_name'] ?></td>
              <td><?=$row_type['type_name'] ?></td>
              <td><form action="remove_history.php?id=<?= $show_std["id"];  ?>" method="post">
              <input type="submit" value="ลบ" class="btn btn-danger" name="submit"></td>
              </form>
              </tr>
            </tbody>
<?php }?>
        
          </table>
        </div>
        </div>
        </div>





</body>
</html>
<?php }else{
            echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
            header("refresh:0; url=login.php");
}?>