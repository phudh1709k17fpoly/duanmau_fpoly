<?php ?> 
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="conatiner">
        <header class="header">
            <div class="logo pt-2">
                <img src="../user/image/l.jpg" style="border-radius: 50%;" alt="">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=categories">Danh mục</a></li>
                    <li><a href="index.php?asp=products">Sản Phẩm</a></li>
                    <li><a href="index.php?ctl=user">Khách hàng</a></li>
                    <li><a href="index.php?ctl=comment">Bình luận</a></li>
                    <li><a href="index.php?ctl=thongke">Thống kê</a></li>
                </ul>
            </div>
            <?php session_start();
            if(!isset($_SESSION['user'])){
                header("location:../login/");
            }
            ?>
            <div class="contact">
                <div class="bnt1">
                    <button><a href="../login/rigisteradmin.php">Đăng ký</a></button>
                </div>
                <div class="bnt2">
                    <button><a href="../login/logout.php">Đăng Xuất</a></button>
                </div>
            </div>
        </header>
        <section id="main">
            
        