<?php
include('../../config/config.php');
$loaisanpham= $_POST['tendanhmuc'];
$thutu=$_POST['thutu'];

if (isset($_POST['themdanhmuc'])){
$sql_them="INSERT INTO danhmuc(tendanhmuc,thutu) VALUES('".$loaisanpham."','".$thutu."')";
mysqli_query($mysqli,$sql_them)  ;
header('Location:../../index.php?action=quanlidanhmuc&query=them');
}elseif(isset($_POST['suadanhmuc'])){
    $sql_update="UPDATE danhmuc SET tendanhmuc='".$loaisanpham."',thutu='".$thutu."' WHERE Id_danhmuc='$_GET[iddanhmuc]'";
mysqli_query($mysqli,$sql_update)  ;
header('Location:../../index.php?action=quanlidanhmuc&query=them');
}
else    {
    $id=$_GET['iddanhmuc'];
    $sql_xoa="DELETE FROM danhmuc WHERE Id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlidanhmuc&query=them');
}

?>