
<h2>Bạn muốn tìm kiếm: <?=$search ?? ''?></h2>
        <div class="products">
            <?php foreach($list as $show) :?>
                <div class="products__items">
                    <a href="index.php?ctl=chitiet&id=<?=$show['id']?>&id_cate=<?=$show['id_cate']?>">
                    <img src="../admin/upload/<?=$show['img']?>" alt="anhsp" width="180px" height="200px">
                    <h4 class="fs-5 text-black"><?=$show['name']?></h4>
                    <span><?=$show['price']?> VNĐ</span><br>
                    <h4 class="fs-6 text-black">Số lượng còn trong kho:<?=$show['quantity']?></h4>
                    <a href="#"><button>Mua ngay</button></a>
                    </a>
                </div>
           <?php endforeach ?>
           <h2 style="color: red;"><?php if(isset($err['err'])){
            echo $err['err'];
        }?></h2>
</div>