<h2>Danh sách sản phẩm</h2>
<div class="products my-5">
   
        <?php foreach ($list as $show) : ?>
            <div class="products__items">
                 <a href="index.php?ctl=chitiet&id=<?= $show['id'] ?>&id_cate=<?= $show['id_cate'] ?>">
                <img src="../admin/upload/<?= $show['img'] ?>" alt="anhsp" width="170px" height="190px">
                <h4 class="fs-6 text-black"><?= $show['name'] ?></h4>
                <span><?= $show['price'] ?> VNĐ</span><br>
                <h4 class="fs-6">Số lượng còn trong kho:<?= $show['quantity']?></h4>
                <a href="#"><button>Mua ngay</button></a>
                </a>
            </div>
        <?php endforeach ?>
</div>
<div class="banner">
    <img src="image/banner2.webp" alt="Banner khuyến mãi">
</div>