<h1 class="text-center mb-3 py-5 bg-primary-subtle mt-0 ">THỐNG KÊ</h1>
<style>
    td, th{
        min-width: 300px;
        padding: 20px 15px;
        border: 1px solid lightgray;
        text-align: center;
    }
    table{
        border-collapse: collapse;
        margin: 10px auto;
    }
</style>

<table>

        <tr>
            <th></th>
            <th>Tổng</th>
            <th></th>
        </tr>
        
        <tr>
            <th>Danh mục</th>
            <td>
                <?=$cate['count(id)'] ?? ''?>
            </td>
            <td>
                <a href="index.php?act=categories">Xem</a>
            </td>
        </tr>

        <tr>
            <th>Sản phẩm</th>
            <td>
                <?=$pro['count(id)'] ?? '0'?>
            </td>
            <td>
                <a href="index.php?asp=products">Xem</a>
            </td>
        </tr>

        <tr>
            <th>Bình luận</th>
            <td>
                <?=$cmt['count(id)'] ?? '0'?>
            </td>
            <td>
                <a href="index.php?ctl=comment">Xem</a>
            </td>
        </tr>

        <tr>
            <th>Tài khoản</th>
            <td>
                <?=$user['count(id)'] ?? '0'?>
            </td>
            <td>
                <a href="index.php?ctl=user">Xem</a>
            </td>
        </tr>

    
</table>