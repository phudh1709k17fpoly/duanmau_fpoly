        <!-- Thông tin sp bán chạy của shop -->
        <h2>Sản phẩm bán chạy</h2>
        <div class="products my-5">
            <?php foreach ($sale as $show) : ?>
                <div class="products__items">

                    <a href="index.php?ctl=chitiet&id=<?= $show['id'] ?>&id_cate=<?= $show['id_cate'] ?>">
                        <img src="../admin/upload/<?= $show['img'] ?>" alt="anhsp" width="180px" height="200px" style="max-width:100%;">
                        <h4 class="fs-5 text-black"><?= $show['name'] ?></h4>
                        <span><?= $show['price'] ?> VNĐ</span><br>
                        <h4 class="fs-6">Số lượng còn trong kho:<?= $show['quantity'] ?></h4>
                        <a href=""><button>Mua ngay</button></a>
                    </a>

                </div>
            <?php endforeach ?>
        </div>


        <!-- Banner khuyến mãi hoặc sp sắp ra mắt  -->
        <div class="banner">
            <img src="image/banner2.webp" alt="Banner khuyến mãi">
        </div>

        <!-- Thông tin sp giá rẻ -->
        <h2>Sản phẩm giá rẻ</h2>
        <div class="products my-5">
            <?php foreach ($price as $show) : ?>
                <div class="products__items">
                    <a href="index.php?ctl=chitiet&id=<?= $show['id'] ?>&id_cate=<?= $show['id_cate'] ?>">
                        <img src="../admin/upload/<?= $show['img'] ?>" alt="anhsp" width="180px" height="200px" style="width:100%;">
                        <h4 class="fs-5 text-black"><?= $show['name'] ?></h4>
                        <span><?= $show['price'] ?> VNĐ</span> <br>
                        <a href="#"><button>Mua ngay</button></a>
                    </a>
                </div>
            <?php endforeach ?>
        </div>

        <!-- Banner khuyến mãi hoặc sp sắp ra mẳt -->
        <div class="banner">
            <img src="image/banner3.webp" alt="Banner khuyến mãi">
        </div>

        <!-- Thông tin sp nổi bật -->
        <h2>Sản phẩm được xem nhiều nhất</h2>
        <div class="products my-5">
            <?php foreach ($view as $show) : ?>
                <div class="products__items ">

                    <a href="index.php?ctl=chitiet&id=<?= $show['id'] ?>&id_cate=<?= $show['id_cate'] ?>">
                        <img src="../admin/upload/<?= $show['img'] ?>" alt="anhsp" width="180px" height="200px" style="max-width:100%;">
                        <h4 class="fs-5 text-black"><?= $show['name'] ?></h4>
                        <span><?= $show['price'] ?> VNĐ</span> <br>
                        <h5 class="fs-6">Lượt xem:<?= $show['view'] ?></h5>
                        <a href="#"><button>Mua ngay</button></a>
                    </a>

                </div>
            <?php endforeach ?>
        </div>
        <h2>Danh mục</h2>

        <div class="categories">
            <?php foreach ($cate as $c) : ?>
                <div class="categories__items py-3 border">
                    <a href="Page_phu/thongtintimkiem.php?tk=<?= $c['id'] ?>">
                        <h4 class="fs-6"><?= $c['name'] ?></h4>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
        <!-- Thông tin cửa hàng địa chỉ liên hệ -->