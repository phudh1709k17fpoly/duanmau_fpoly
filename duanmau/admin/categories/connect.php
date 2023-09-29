<?php
$localhost = 'localhost';

$username  = 'root';

$password = '';

$databasename = 'duanmau';


try{
$run = new PDO("mysql:host=$localhost;dbname=$databasename;charset=utf8",
$username,$password);
$run->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
}catch(PDOException $e){
    echo "Kết nối thất bại".$e->getMessage();

}
?>