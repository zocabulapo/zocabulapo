<p>Order Listing</p>
<?php
$lietke_dh="SELECT * FROM cart,dangky Where cart.id_khachhang=dangky.id_dangky ORDER BY cart.id_cart DESC";
$query_lietke_dh=mysqli_query($mysqli,$lietke_dh);
?>
<table style= "width:100%" border ="2" style="border=collape: collape;">
  <tr>
  <th style=" background-color: lightblue;">ID</th>
    <th style=" background-color: lightblue;">Code cart</th>
    <th style=" background-color: lightblue;">Customer name</th>
    <th style=" background-color: lightblue;">Address</th>
    <th style=" background-color: lightblue;">Email</th>
    <th style=" background-color: lightblue;">Numberphone</th>
    <th style=" background-color: lightblue;">Status</th>
    <th style=" background-color: lightblue;">Management</th>
  </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
      $i++;
  ?>
  <tr>
  <td> <?php echo $i ?></td>
  <td> <?php echo $row['code_cart'] ?></td>
  <td> <?php echo  $row['tenkhachhang'] ?></td>
  <td> <?php echo  $row['diachi'] ?></td>
  <td> <?php echo  $row['email'] ?></td>
  <td> <?php echo  $row['dienthoai'] ?></td>
  <td> <?php 
  if($row['cart_status']==1){
      echo '<a href="moduel/quanlidonhang/xuli.php?code='.$row['code_cart'].'">New</a>';
  }else{
      echo 'Seen';
  }
  ?></td>
  <td> <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Watch</a> 
</td>
    
  </tr>
  <?php
  }
  ?>
</table>    