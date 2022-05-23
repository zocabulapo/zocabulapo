<?php
session_start();
include("../../Admin/config/config.php");
require('../../Mail/Sendmail.php');
$id_khachhang=$_SESSION['id_khachhang'];
$code_order=rand(0,9999);
$insert_cart="INSERT INTO cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."','".$code_order."',1)";
$cart_query=mysqli_query($mysqli,$insert_cart);
if($cart_query){
    foreach($_SESSION['cart'] as $key => $value){
        $id_sanpham=$value['id'];
        $soluong=$value['soluong'];
        $insert_order_detail="INSERT INTO cart_detail(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
        mysqli_query($mysqli,$insert_order_detail);
    }
    $tieude="Orders game succesfull!";
    $noidung="<p>Thank you for trust with order code :".$code_order."</p>";
    $noidung="<h4>Your order include :<h4>";
    foreach($_SESSION['cart'] as $key => $val){
        $noidung.="<ul style='border:1px solid blue;margin:10px;'>
        <li>".$val['tensanpham']."</li>
        <li>".$val['masp']."</li>
        <li>".$val['soluong']."</li>
        </ul>";

    }
    $maildathang=$_SESSION['email'];
    $mail= new Mailer();
    $mail->dathangmail($tieude,$noidung,$maildathang);
}
unset($_SESSION['cart']);
header('Location:../../index.php?manage=camon');
?>