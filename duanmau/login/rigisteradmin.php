<?php
require_once "../model/connect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once "../model/mahoa.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $checkpass = $_POST['checkpass'];
    $role = 1;
    // ma hoa password


    if (empty($username)) {
        $err_ms['username'] = "bạn không được bỏ trống username";
    }
    if (empty($password)) {
        $err_ms['password'] = "bạn không được bỏ trống password";
    }
    if (!empty($checkpass)) {
        if ($password == $checkpass) {
            $password_ed = encode($password);
            $sql = "INSERT INTO `manage_login`(`username`,`password`,`role`,`password_mahoa`)
       VALUES ('$username','$password_ed',$role,'$password')";

            $stmt = $run->prepare($sql);

            $stmt->execute();

            $stmt->fetch(PDO::FETCH_ASSOC);

            $success['sql'] = "tạo tài khoản thành công click have already an account để đăng nhập";
        } else {
            $err_ms['check_as'] = "Password không giống nhau";
        }
    } else {
        $err_ms['check'] = "bạn không được bỏ trống ende password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/view/regster.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                <form action="rigisteradmin.php" method="post">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Your Username</label>
                                        <input type="text" name="username" id="form3Example3cg" class="form-control form-control-lg" />
                                        <small id="emailHelp" style="color: red; font-size: 16px;">
                                            <?php
                                            if (isset($err_ms['username']))
                                                echo  $err_ms['username'];
                                            ?></small>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg"> Password</label>
                                        <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                                        <small id="emailHelp" style="color: red; font-size: 16px;">
                                            <?php
                                            if (isset($err_ms['password']))
                                                echo $err_ms['password'];
                                            ?></small>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                        <input type="password" name="checkpass" id="form3Example4cdg" class="form-control form-control-lg" />
                                        <small id="emailHelp" style="color: red; font-size: 16px;">
                                            <?php
                                            if (isset($err_ms['check']))
                                                echo $err_ms['check'];

                                            if (isset($err_ms['check_as']))
                                                echo $err_ms['check_as'];
                                            ?>
                                        </small>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>
                                    <small id="emailHelp" style="color: green; font-size: 16px;">
                                        <?php
                                        if (isset($success['sql']))
                                            echo $success['sql'];
                                        ?></small>
                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="index.php" class="fw-bold text-body"><u>Login here</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>