<section class="categories">
    <h2 style="text-align: center;">Wellcome Manage Acc My Admin</h2>
<table class="table" style="margin-top: 20px;">
  <thead>
    <tr>
      <th scope="col">ID User</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Vai Trò</th>
      <th scope="col">#</th>
      

    </tr>
  </thead>
  <tbody>
    <?php foreach($user as $iteams) : ?>
        <?php if($iteams['role'] == 0){
             $role['vaitro'] = "Người dùng";
        }else if($iteams['role'] == 1){
            $role['vaitro'] = "admin";
        }?>
      <tr>
      <th scope="row"><?= $iteams['id']?></th>
      <td><?= $iteams['name']?></td>
      <td><?= $iteams['username']?></td>
      <td><?= $iteams['email']?></td>
      <td><?= $role['vaitro']?></td>
      <td>
       <button type="button" class="btn btn-outline-danger"> <a href="index.php?act=diecate&id=<?=$iteams['id']?>" class="text-decoration-none" style="color: black;" onclick="return confirm('bạn muốn xóa giữ liệu này không ?')">Xóa</a></button>
      </td>
    </tr>
      <?php endforeach ?>
  </tbody>
</table>
</section>