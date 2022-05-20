<p>Watch Orders</p>
<?php
$code=$_GET['code'];
$lietke_dh="SELECT * FROM cart_detail,sanpham Where cart_detail.id_sanpham=sanpham.id_sanpham AND cart_detail.code_cart='".$code."' ORDER BY cart_detail.id_cart_detail DESC";
$query_lietke_dh=mysqli_query($mysqli,$lietke_dh);
?>
<table style= "width:100%" border ="2" style="border=collape: collape;">
  <tr>
  <th style=" background-color: lightblue;">ID</th>
    <th style=" background-color: lightblue;">Code cart</th>
    <th style=" background-color: lightblue;">Product name</th>
    <th style=" background-color: lightblue;">Quality</th>
    <th style=" background-color: lightblue;">Price</th>
    <th style=" background-color: lightblue;">Total Price</th>
  </tr>
  <?php
  $i=0;
  $tongtien=0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
      $i++;
      $thanhtien=$row['giasp']*$row['soluongmua'];
      $tongtien+=$thanhtien;
  ?>
  <tr>
  <td> <?php echo $i ?></td>
  <td> <?php echo $row['code_cart'] ?></td>
  <td> <?php echo  $row['tensanpham'] ?></td>
  <td> <?php echo  $row['soluongmua'] ?></td>
  <td> <?php echo  $row['giasp'].'$' ?></td>
  <td> <?php echo  $thanhtien.'$' ?></td>

</td>
    
  </tr>
  <?php
  }
  ?>
  <tr>  <td colspan="6" >
      <p>Total Price:  <?php echo  $tongtien.'$' ?></p>
    </tr>
</table>    