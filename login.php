
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
        <a href="login.php" class="nav-link active" >เจ้าหน้าที่</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
 <!-- End Header -->



 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>

            <form action="login_db.php" method="post" class="form-signin">
              <?php include('errors.php') ?>
              <div class="form-label-group">
                <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUsername">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label fontcolor" for="customCheck1">Remember Password</label>
              </div>
              <center><button class="btn btn-primary btn-lg  text-uppercase" type="submit" name="login_user" >Login</button></center>
            </form>

          </div>
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