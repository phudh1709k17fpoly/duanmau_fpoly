<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="image/l.jpg" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/style3.css">
    <link rel="stylesheet" href="../css/style4.css">
    <link rel="stylesheet" href="../css/style5.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Xshop</title>
    <style>
        a {
            text-decoration: none;
        }

        li {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <div class="mx-4">
        <!-- Header -->
        <div class="header pt-2">
            <div class="logo">
                <a href="index.php">
                    <img src="./image/l.jpg" alt="">
                </a>
            </div>

            <div class="menu">
                <ul>
                    <li><a id="first" href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?ctl=sanpham">Sản phẩm</a></li>
                    <li><a href="Page_phu/donhang.php">Đơn hàng</a></li>

                    <?php session_start();
                    if (isset($_SESSION['user'])) {
                        $user = id_user($_SESSION['user']);
                    }
                    if (isset($_SESSION['user']) && $user['role'] == 0) : ?>
                        <li><a href="index.php?ctl=profile&id=<?= $user['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></a></li>
                    <?php else : ?>
                        <li><a href="index.php?ctl=login">Đăng nhập</a></li>

                    <?php endif ?>
                    <li>
                        <?php
                            $searchs = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                                <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\">
                                </svg>";
                        ?>
                        <form class="d-flex" action="index.php?ctl=keysearch" method="post">
                            <input class="form-control w-100" type="text" name="search">
                            <button class="form-control bg-danger text-white " style="border:none;border-radius:5px; width:45px"><?=$searchs ?? "Tìm" ?></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Banner khuyến mãi -->

        <div class="banner">
            <img src="image/bannerkhuyenmai.webp" alt="Banner khuyến mãi">
        </div>
        <h2>Danh mục</h2>

        <div class="categories">
            <?php foreach ($cate as $c) : ?>
                <div class="categories__items py-2 border">
                    <a href="index.php?ctl=<?= $c['type'] ?>&id=<?= $c['id'] ?>">
                        <h4 class="fs-6"><?= $c['name'] ?></h4>
                    </a>
                </div>
            <?php endforeach ?>
        </div>