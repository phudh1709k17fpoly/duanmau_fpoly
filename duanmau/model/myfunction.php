<?php
require_once 'pdo.php';

function show_one_cate($input)
{
    $sql = "SELECT * FROM categories WHERE id=$input";
    $ketqua = pdo_query_one($sql);
    return $ketqua;
}

function show_all_cate()
{
    $sql = "SELECT * FROM categories";
    $ketqua = pdo_query($sql);
    return $ketqua;
}
function show_all_producst()
{
    $sql = "SELECT * FROM products";
    $ketqua = pdo_query($sql);
    return $ketqua;
}
function show_banchay()
{
    $sql = "SELECT * FROM products ORDER BY quantity ASC LIMIT 10";
    $ketqua = pdo_query($sql);
    return $ketqua;
}
function show_giare()
{
    $sql = "SELECT * FROM products ORDER BY price ASC LIMIT 10";
    $ketqua = pdo_query($sql);
    return $ketqua;
}
function show_luotxem()
{
    $sql = "SELECT * FROM products ORDER BY view DESC LIMIT 10";
    $ketqua = pdo_query($sql);
    return $ketqua;
}
function sp_lienquan($input)
{
    $sql = "SELECT * FROM products WHERE id_cate = $input";
    $ketqua = pdo_query($sql);
    return $ketqua;
}

function show_danhmuc($input)
{
    $sql = "SELECT * FROM products WHERE `id_cate`=$input";
    $ketqua = pdo_query($sql);
    return $ketqua;
}

function show_one_products($input)
{
    $sql = "SELECT products.*,categories.name as 'name_cate' FROM products INNER JOIN categories ON products.id_cate = categories.id WHERE products.id = $input";
    $ketqua = pdo_query_one($sql);
    return $ketqua;
}

function search($input)
{
    $sql = "SELECT * FROM products WHERE name like '%$input%'";
    $ketqua = pdo_query($sql);
    return $ketqua;
}
function id_user($input)
{
    $sql = "SELECT role,id FROM `manage_login` WHERE password = '$input'";
    $ketqua = pdo_query_one($sql);
    return $ketqua;
}

function infor_user($input)
{
    $sql = "SELECT id,role,username,email,password FROM `manage_login` WHERE id=$input";
    $ketqua = pdo_query_one($sql);
    return $ketqua;
}
function slect_comment($id_user)
{
    $sql = "SELECT manage_login.name as name FROM `manage_login` INNER JOIN feedback ON manage_login.id = feedback.id_user WHERE  manage_login.id = $id_user";
    $ketqua = pdo_query_one($sql);
    return $ketqua;
}
function select_all_commnet($id_pr)
{
    $sql = "SELECT * FROM `feedback` WHERE id_pr = $id_pr ORDER BY id DESC LIMIT 10";
    $ketqua = pdo_query($sql);
    return $ketqua;
}
function pro_update_soluotxem($id){
    $sql = "UPDATE products SET view=view+1 WHERE id=?";
    pdo_execute($sql,$id);
}

