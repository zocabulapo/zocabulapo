<?php
$sql_pro="SELECT*FROM sanpham WHERE sanpham.Id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro=mysqli_query($mysqli,$sql_pro);

$sql_cate="SELECT*FROM danhmuc WHERE danhmuc.Id_danhmuc='$_GET[id]'";
$query_cate=mysqli_query($mysqli,$sql_cate);
$row_title=mysqli_fetch_array($query_cate);

?>
<h3> Top Game hot 2021: <?php echo $row_title['tendanhmuc'] ?></h3>
                <ul class ="productlist ">
                    <?php
        while($row_pro = mysqli_fetch_array($query_pro)){
                    ?>
                    <li>
                        <a href="index.php?manage=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                        <img src="Admin/moduel/quanlisanpham/upload/<?php echo $row_pro['hinhanh']?>">
                        <p class="title_product" > Product name : <?php echo $row_pro['tensanpham']?> </p>
                        <p class="price_product" > Price: <?php echo number_format($row_pro['giasp'])?> </p>
                        </a>
                    </li>
                    <?php
                      }
                    ?>

                </ul>