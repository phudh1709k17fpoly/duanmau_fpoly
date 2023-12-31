<?php
require_once '../model/connect.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $username =  $_POST['username'];
  $password =  $_POST['password'];

  $sql = "SELECT * FROM manage_login WHERE
  username='$username'";

  $stmt = $run->prepare($sql);

  $stmt->execute();
   
  $ketqua = $stmt->fetch(PDO::FETCH_ASSOC);


 if(!empty($ketqua['username'])){
  if(password_verify($password,$ketqua['password'])){
    $_SESSION['user'] = $ketqua['password'];
    if($ketqua['role'] == 0){
      header("location:../user/");
    }else{
      header("location:../admin/index.php?ctl=home");
    }
  }else{
    $erro['password'] = "Mật khẩu không đúng";
  };
 }else{
  $erro['username'] = "Tài khoản Không đúng";
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="../user/image/l.jpg";
                    style="width: 98px; border-radius: 100px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Login X-store</h4>
                </div>
                <form action="index.php" method="post">
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Username</label>
                    <input name="username" type="text" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" />
                    <small id="emailHelp" style="color: red; font-size: 16px;">
                  <?php
                  if(isset($erro['username']))
                  echo $erro['username'];
                  ?></small>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input name="password" type="password" id="form2Example22" class="form-control" />
                    <small id="emailHelp" style="color: red; font-size: 16px;">
                  <?php
                  if(isset($erro['password']))
                  echo $erro['password'];
                  ?></small>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                      in</button>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button id="btn-a" type="button" class="btn btn-outline-danger"><a href="rigister.php"class="text-decoration-none">Create new</a></button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
</body>
</html>