<section class="categories">
    <h2 style="text-align: center;">Wellcome Products My Admin</h2>
    <div class="" style="text-align: right;"><button class="btn btn-outline-success"><a href="index.php?asp=addprd" class="text-decoration-none" style="color: black;">Thêm sản phẩm</a></button></div>
<table class="table" style="margin-top: 5%;">
  <thead>
    <tr>
      <th scope="col">ID categories</th>
      <th scope="col">Name</th>
      <th scope="col">Img</th>
      <th scope="col">detail</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">View</th>
      <th scope="col">Id_cate</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($prd as $iteams) : ?>
      <tr>
      <th scope="row"><?= $iteams['id']?></th>
      <td><?= $iteams['name']?></td>
      <td><img src="./upload/<?= $iteams['img']?>" alt="" width="200px"></td>
      <td><?= $iteams['detail']?></td>
      <td><?= $iteams['price']?></td>
      <td><?= $iteams['quantity']?></td>
      <td><?= $iteams['view']?></td>
      <td><?= $iteams['id_cate']?></td>
      <td>
       <button type="button" class="btn btn-outline-danger"><a href="index.php?asp=editprd&id=<?=$iteams['id']?>"class="text-decoration-none" style="color: black;">Sửa</a></button>
       <button type="button" class="btn btn-outline-danger"> <a href="index.php?asp=dieprd&id=<?=$iteams['id']?>" class="text-decoration-none" style="color: black;" onclick="return confirm('bạn muốn xóa giữ liệu này không ?')">Xóa</a></button>
      </td>
    </tr>
      <?php endforeach ?>
  </tbody>
</table>
</section>