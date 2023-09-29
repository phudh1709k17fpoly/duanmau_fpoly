<style>
    td, th{
        min-width: 200px;
        max-width: 250px;
        padding:15px;
        border: 1px solid lightgray;
        text-align: center;
        font-size: 15px;
    }
    table{
        border-collapse: collapse;
        margin: 10px auto;
    }
    h1{
    margin: 20px 0;
    font-size: 32px;
    font-weight: 700;
}
.btn{
    border: 1px solid lightgray;
}
</style>
<?php  
    // var_dump($comments);
?>
<h2 class="my-4" style="text-align: center;">Wellcome Comments My Admin</h2>
<table>
        <tr>
            <th>ID</th>
            <th>Tài khoản</th>
            <th>Sản phẩm</th>
            <th>Nội dung</th>
            <th></th>
            
        </tr>
    
        <?php foreach ($comments as $cmt) : ?>
            <tr>
                <td><?= $cmt['id'] ?></td>
                <td><?= $cmt['username'] ?></td>
                <td><?= $cmt['name'] ?></td>
                <td style="font-size: 13px;"><?= $cmt['content'] ?></td>
                
                <td>
                    <a class="btn bg-primary-subtle" href="index.php?ctl=delete_cmt&id_cmt=<?= $cmt['id'] ?>" onclick="return confirm('Bạn có muốn xóa khách hàng?')">Xóa</a>
                    <a class="btn bg-primary-subtle" href="index.php?ctl=edit_cmt&id_cmt=<?= $cmt['id'] ?>">Sửa</a>
                </td>
                
            </tr>
        <?php endforeach ?>
    
</table>

<hr>