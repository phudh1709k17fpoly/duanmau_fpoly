<?php
include "../model/pdo.php";
include "header.php";
// categories
if (isset($_GET['act'])) {
  $controller = $_GET['act'];
  switch ($controller) {
      // view cate
    case 'categories':
      $sql = "SELECT * FROM categories";
      $cate = pdo_query($sql);
      include 'categories/view.php';
      break;
      //add cate
    case 'addcate':
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $type = $_POST['type'];
        // validate form
        if (empty($type)) {
          $Error_message['type'] = 'Type cannot be left blank';
        }
        if (empty($name)) {
          $Error_message['name'] = 'Names cannot be left blank';
        }
        if (!isset($Error_message)) {
          $sql = "INSERT INTO `categories`( `name`,`type`) VALUES ('$name','$type')";

          pdo_execute($sql);

          header("location:index.php?act=categories");
        }
      }
      include 'categories/add.php';
      break;
      // edit 
    case 'editcate':
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_cate = $_POST['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        // validate form
        if (empty($type)) {
          $Error_message['type'] = 'type cannot be left blank';
        }
        if (empty($name)) {
          $Error_message['name'] = 'Names cannot be left blank';
        }
        if (!isset($Error_message)) {
          $sql = "UPDATE `categories` SET `id`= $id_cate,`name`='$name',`type`='$type' WHERE `id`= $id_cate";
          pdo_query($sql);
          header("location:index.php?act=categories");
        }
      }
      $id_cate = $_GET['id'];
      $sql = "SELECT * FROM categories WHERE `id`=$id_cate";
      $cate = pdo_query_one($sql);
      include "categories/edit.php";
      break;
    case 'diecate':
      $id_cate = $_GET['id'];
      $sql = "DELETE FROM categories WHERE `id`=$id_cate";
      pdo_execute($sql);
      header("location:index.php?act=categories");
      break;
      default: include 'home.php';
  }
}
// products
if (isset($_GET['asp'])) {
  $controller = $_GET['asp'];
  switch ($controller) {
      // view
    case 'products':
      $sql = "SELECT * FROM products";
      $prd = pdo_query($sql);
      include "products/view.php";
      break;
    case 'addprd':
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $img = $_FILES['img'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $id_cate = $_POST['id_cate'];
        $detail = $_POST['detail'];
        // file name img 
        $filename = $img['name'];
        // validate form
        if (empty($name)) {
          $Error_message['name'] = 'Name cannot be left blank';
        }
        if ($price < 0) {
          $Error_message['price'] = 'Price cannot be left blank';
        }
        if ($quantity < 0) {
          $Error_message['quantity'] = 'Quantity cannot be left blank';
        }
        if (empty($id_cate)) {
          $Error_message['id_cate'] = 'Type cannot be left blank';
        }
        if (empty($detail)) {
          $Error_message['detail'] = 'Type cannot be left blank';
        }
        /// validate img
        $list_name_img = ['jpg', 'jpeg', 'gif', 'png', 'svg', 'webp'];
        if ($img['size'] > 0) {
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          if (!in_array($ext, $list_name_img)){
            $Error_message['check_file'] = "Your file is not an image";
          }
        } else {
          $Error_message['check_img'] = "You have not import any files yet";
        }
        if (!isset($Error_message)) {
          move_uploaded_file($img['tmp_name'], "./upload/" . $filename);
          $sql = "INSERT INTO `products`( `name`,`img`,`detail`,`quantity`,`price`,`id_cate`) VALUES ('$name','$filename','$detail','$quantity','$price','$id_cate')";

          pdo_execute($sql);

          header("location:index.php?asp=products");
        }
      }


      $sql = "SELECT * FROM categories";

      $cate = pdo_query($sql);

      include 'products/add.php';
      break;
    case 'editprd':
      //thay đổi giữ liệu mới
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_FILES['img'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $id_cate = $_POST['id_cate'];
        $detail = $_POST['detail'];
        // file name img 
        $filename = $img['name'];
        // validate form
        if (empty($name)) {
          $Error_message['name'] = 'Name cannot be left blank';
        }
        if ($price < 0) {
          $Error_message['price'] = 'Price cannot be left blank';
        }
        if ($quantity < 0) {
          $Error_message['quantity'] = 'Quantity cannot be left blank';
        }
        if (empty($id_cate)) {
          $Error_message['id_cate'] = 'Type cannot be left blank';
        }
        if (empty($detail)) {
          $Error_message['detail'] = 'Type cannot be left blank';
        }

        /// validate img
        $list_name_img = ['jpg', 'jpeg', 'gif', 'png', 'svg', 'webp'];
        if ($img['size'] > 0) {
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          if (!in_array($ext, $list_name_img)) {
            $Error_message['check_file'] = "Your file is not an image";
          }
        } else {
          $Error_message['check_img'] = "You have not import any files yet";
        }
        if (!isset($Error_message)) {
          move_uploaded_file($img['tmp_name'], "./upload/" . $filename);
          $sql = "UPDATE `products` SET `id`= $id ,`name`='$name',`img`='$filename',`detail`='$detail',`quantity`='$quantity',`price`= $price,`id_cate`='$id_cate' WHERE `id`=$id";
          pdo_execute($sql);

          header("location:index.php?asp=products");
        }
      }

      // backup giữ liệu cũ
      $id_cate = $_GET['id'];
      $sql = "SELECT * FROM products WHERE id=$id_cate";
      $iteams = pdo_query_one($sql);
      // lấy cate
      $sql = "SELECT * FROM categories";

      $cate = pdo_query($sql);
      include 'products/edit.php';
      break;
    case 'dieprd':
      $idprd = $_GET['id'];
      $sql = "DELETE FROM products WHERE `id` = $idprd";
      pdo_execute($sql);
      header("location:index.php?asp=products");
      break;
      default: include 'home.php';
  }
}

if (isset($_GET['ctl'])) {
  $controller = ($_GET['ctl']);
  switch ($controller) {
    case 'user':
      $user = show_user();
      include './user/list.php';
      break;
    case 'comment':
      $sql_cmt = "SELECT feedback.*,products.name,manage_login.username FROM feedback inner join products 
      on feedback.id_pr = products.id inner join manage_login 
      on feedback.id_user=manage_login.id order by feedback.id desc";
      $comments = pdo_query($sql_cmt);
      include './comment/list.php';
      break;
      break;
    case 'delete_cmt':
      $id_cmt = $_GET['id_cmt'];
      $sql_cmt_delete = "DELETE FROM feedback WHERE id=$id_cmt";
      pdo_execute($sql_cmt_delete);
      $sql_cmt = "SELECT feedback.*,products.name,manage_login.username FROM feedback inner join products 
      on feedback.id_pr = products.id inner join manage_login 
      on feedback.id_user=manage_login.id order by feedback.id desc";
      $comments = pdo_query($sql_cmt);
      include './comment/list.php';
      break;
    case 'edit_cmt':
      $id_cmt = $_GET['id_cmt'];
      $sql_edit = "SELECT feedback.*,products.name,manage_login.username FROM feedback inner join products 
        on feedback.id_pr = products.id inner join manage_login 
        on feedback.id_user=manage_login.id WHERE feedback.id=?";
      $cmt = pdo_query_one($sql_edit, $id_cmt);
      include './comment/edit.php';
      break;
    case 'update_cmt':
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_cmt = $_POST['id_cmt'];
        $content = $_POST['content'];

        $sql_update = "UPDATE feedback SET content=? WHERE id=?";
        pdo_execute($sql_update, $content, $id_cmt);
        $sql_cmt = "SELECT feedback.*,products.name,manage_login.username FROM feedback inner join products 
          on feedback.id_pr = products.id inner join manage_login 
          on feedback.id_user=manage_login.id order by feedback.id desc";
        $comments = pdo_query($sql_cmt);
        include './comment/list.php';
      }
      break;
    case 'thongke':
      $pro = pro_count();
      $cate = cate_count();
      $user = user_count();
      $cmt = cmt_count();
      include './thong-ke/index.php';
      break;

      default: include 'home.php';
  }
}
include "footer.php";
