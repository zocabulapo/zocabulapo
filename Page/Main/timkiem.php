
<?php
if(isset($_POST['timkiem'])){
    $tukhoa=$_POST['tukhoa'];
}else{
    $tukhoa='';
}
$sql_pro="SELECT*FROM sanpham,danhmuc WHERE sanpham.Id_danhmuc=danhmuc.Id_danhmuc AND tensanpham LIKE '%".$tukhoa."%'";
$query_pro=mysqli_query($mysqli,$sql_pro);
?>
<h3> Result search:<?php echo  $_POST['tukhoa'] ?> </h3>
                <ul class ="productlist ">
                    <?php
                    while($row=mysqli_fetch_array($query_pro)){
                    ?>
                    <li>
                        <a href="index.php?manage=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                        <img src="Admin/moduel/quanlisanpham/upload/<?php echo $row['hinhanh']?>">
                        <p class="title_product" > Product name : <?php echo $row['tensanpham']?> </p>
                        <p class="price_product" > Price: <?php echo number_format($row['giasp'],0,',','.').'$'?> </p>
                        <p class="title_danhmuc" >Category: <?php echo $row['tendanhmuc']?></p>
                        </a>
                    </li>
             <?php
                    }
             ?>

                </ul>