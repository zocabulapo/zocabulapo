<h3> Product detail </h3>
<?php
$sql_chitiet="SELECT*FROM sanpham,danhmuc WHERE sanpham.Id_danhmuc=danhmuc.Id_danhmuc AND sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet=mysqli_fetch_array($query_chitiet)){


?>
<div class="wraaper_chitiet">
<div class="hinhanh_sanpham">
<img width="80%" src="Admin/moduel/quanlisanpham/upload/<?php echo $row_chitiet['hinhanh']?>">
</div>
<form method="POST" action="Page/Main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" >
<div class="chitiet_sanpham">
    <h3 style="margin:0" >Product name: <?php echo $row_chitiet["tensanpham"] ?> </h3>
    <p> Product code: <?php echo $row_chitiet["masp"]?> </p>
    <p> Price: <?php echo number_format($row_chitiet["giasp"])?> </p>
    <p> Number: <?php echo $row_chitiet["soluong"]?> </p>
    <p> Category: <?php echo $row_chitiet["tendanhmuc"]?> </p>  
    
    <p><input class="themgiohang" name="themgiohang" type="submit" value="Add to cart" </p>
    <p> Detail: <?php echo $row_chitiet["noidung"]?> </p>  
</div>
</form>
<?php

}
?>
