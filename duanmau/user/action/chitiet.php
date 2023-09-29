<h2>Tên sản phẩm</h2>

<div class="pro__item">
  <div class="pro__item--1">
    <img src="../admin/upload/<?= $list['img'] ?>" alt="image_pro">
  </div>
  <div class="pro__item--2">
    <b>Tên:</b><span><?= $list['name'] ?></span><br>
    <b>Hãng:</b> <span><?= $list['name_cate'] ?></span><br>
    <b>Mô tả:</b> <span><?= $list['detail'] ?></span><br>
    <b>Giá:</b> <span><?= $list['price'] ?></span><br>
    <b>Số lượt xem:</b> <span><?=$list['view']?></span>
  </div>
</div>

<h2>Sản phẩm có liên quan</h2>
<div class="products">
  <?php foreach ($show as $show) : ?>
    <div class="products__items">
      <a href="index.php?ctl=chitiet&id=<?= $show['id'] ?>&id_cate=<?= $show['id_cate'] ?>">
      <div class="img_news"><img src="../admin/upload/<?= $show['img'] ?>" alt="anhsp" style="width: 100%;"></div>
      <h4 class="fs-5"><?= $show['name'] ?></h4>
      <span><?= $show['price'] ?> VNĐ</span> <br>
      <a href="#"><button>Mua ngay</button></a>
      </a>
    </div>
  <?php endforeach ?>
</div>
<form style="width: 80%; margin-left: 10%; padding-top: 5%; display: flex;gap: 30px;" action="index.php?ctl=chitiet&id=<?=$id?>&id_user=<?=$id_user['id']?>&id_cate=<?= $show['id_cate'] ?>" method="post">
  <textarea style="font-size: 18px; width: 100%; border:none; border-bottom: 1px solid black;" name="comment" id="" cols="30" rows="3" placeholder="commnet...."></textarea>
  <div><button type="submit" style="padding: 10px;">Gửi</button></div>
  </form>
  <h3 style="width: 80%; margin-left: 10%; padding-top: 5%; color: red;"><?php if(isset($err['login'])){
    echo $err['login'];
  } ?></h3>
<div style="width: 80%; margin-left: 10%;">
<?php foreach($list_comment as $show_commnent) : ?>  
  <?php
     $name_slect=slect_comment($show_commnent['id_user']);
    ?>
<div style="border-bottom: 1px solid red;">
    <div style="padding-top: 50px;"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
        </svg> </span><?=$name_slect['name']?></div>

    <h4><?=$show_commnent['content']?></h4>

  </div>
<?php endforeach ?>

</div>