<?php
//
require_once '../model/myfunction.php';
require_once '../model/mahoa.php';
require_once '../model/pdo.php';
$cate = show_all_cate();
include "header.php";
if (isset($_GET['ctl'])) {
    $controller = $_GET['ctl'];
    switch ($controller) {
        case 'keysearch':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $search = $_POST['search'];
                $list = search($search);
                if (empty($list)) {
                    $err['err'] = "Không có sản phẩm bạn muốn tìm kiếm";
                }
            }
            include 'action/searchkey.php';
            break;
        case 'iphone':
            $id = $_GET['id'];
            $nows = show_one_cate($id);
            $list = show_danhmuc($id);
            include 'action/search.php';
            break;
        case 'xiaomi':
            $id = $_GET['id'];
            $nows = show_one_cate($id);
            $list = show_danhmuc($id);
            include 'action/search.php';
            break;
        case 'samsung':
            $id = $_GET['id'];
            $nows = show_one_cate($id);
            $list = show_danhmuc($id);
            include 'action/search.php';
            break;
        case 'oppo':
            $id = $_GET['id'];
            $nows = show_one_cate($id);
            $list = show_danhmuc($id);
            include 'action/search.php';
            break;
        case 'chitiet':
            $id = $_GET['id'];
            $id_cate = $_GET['id_cate'];
            pro_update_soluotxem($id);
            $show = sp_lienquan($id_cate);
            $list = show_one_products($id);
            
            if(isset($_SESSION['user'])){
                $input = $_SESSION['user'];
            }else{
                $err['login'] = "Bạn cần đăng nhập trước khi viết bình luận";
                $input = '';
            }
            $id_user = id_user($input);
            $list_comment =select_all_commnet($id);
            
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $comment = $_POST['comment'];
                $producst = $_GET['id'];
                $user = $_GET['id_user'];
                $sql = "INSERT INTO `feedback`(`content`, `id_pr`, `id_user`) VALUES ('$comment',$producst,$user)";
                pdo_execute($sql);   
                header("location:".$_SERVER['HTTP_REFERER']);
            }
            include 'action/chitiet.php';
            break;
        case 'sanpham';
            $list = show_all_producst();
            include 'action/all_sp.php';
            break;
        case 'login';
            header('location:../login/');
            break;
        case 'logout';
            header('location:../login/logout.php');
        case 'profile';
            $id = $_GET['id'];
            $list = infor_user($id);
            include 'action/profile.php';
            break;
        case 'update_password';
               if(!isset($_SESSION['user'])){
                echo "<script>alert('xin chao cac ban')</script>";
                   header("location:../user");
                   
               };
                $id = $_GET['id'];
                $list = infor_user($id);
                $pass_csdl = $list['password'];
             if($_SERVER['REQUEST_METHOD']=="POST"){
                $pass_old = $_POST['pass_old'];
                $pass_new = $_POST['pass_new'];
                $pass_requai = $_POST['pass_requai'];
                if(password_verify($pass_old,$pass_csdl)){
                    if($pass_new == $pass_requai && !($pass_new=='' && $pass_requai=='')){
                        $pass_mahoa = encode($pass_new);
                        $sql = "UPDATE `manage_login` SET `password`='$pass_mahoa',password_mahoa='$pass_requai' WHERE id=$id";
                        pdo_execute($sql);
                          $err['404'] = "Đổi mật khẩu thành công";
                    }else{
                        $err['404'] = "Mật khẩu không giống nhau";
                    }
                }else{
                    $err['404'] = 'Mật khẩu cũ không đúng.Vui lòng nhập lại';
                }
            }
            include 'action/update_pw.php';
        break;
    }
} else {
    //ban chay
    $sale = show_banchay();
    // gia re
    $price = show_giare();
    // luot xem 
    $view = show_luotxem();
    include "content.php";
}
include "footer.php";
