<section class="categories">
    <h2 style="text-align: center;">Wellcome Categories My Admin</h2>
    <div class="" style="text-align: right;"><button class="btn btn-outline-success"><a href="index.php?act=addcate" class="text-decoration-none" style="color: black;">Thêm danh mục</a></button></div>
<table class="table" style="margin-top: 5%;">
  <thead>
    <tr>
      <th scope="col">ID categories</th>
      <th scope="col">Name</th>
      <th scope="col">type</th>
      <th scope="col">view</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($cate as $iteams) : ?>
      <tr>
      <th scope="row"><?= $iteams['id']?></th>
      <td><?= $iteams['name']?></td>
      <td><?= $iteams['type']?></td>
      <td>
       <button type="button" class="btn btn-outline-danger"><a href="index.php?act=editcate&id=<?=$iteams['id']?>"class="text-decoration-none" style="color: black;">Sửa</a></button>
       <button type="button" class="btn btn-outline-danger"> <a href="index.php?act=diecate&id=<?=$iteams['id']?>" class="text-decoration-none" style="color: black;" onclick="return confirm('bạn muốn xóa giữ liệu này không ?')">Xóa</a></button>
      </td>
    </tr>
      <?php endforeach ?>
  </tbody>
</table>
</section>