<?php
include('../../config/config.php');
if (isset($_GET['code'])){
    $code_cart=$_GET['code'];
    $sql_update="UPDATE cart set cart_status='0' WHERE code_cart='".$code_cart."'";
    $query=mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlidonhang&query=lietke');
}
?>