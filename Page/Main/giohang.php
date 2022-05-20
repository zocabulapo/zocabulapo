
<p>Payment
  <?php
  if(isset($_SESSION['dangky'])){
    echo 'Hello: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
  }
  ?>
</p>
<?php
if(isset($_SESSION['cart'])){

}
?>
<table style="width:100%;text-align:center;border-collapse: collapse; " border="1">
  <tr>
    <th style=" background-color: lightblue;">Id</th>
    <th style=" background-color: lightblue;">Product code</th>
    <th  style=" background-color: lightblue;">Product name</th>
    <th style=" background-color: lightblue;">Image</th>
    <th style=" background-color: lightblue;">Quanlity</th>
    <th style=" background-color: lightblue;">Price</th>  
    <th style=" background-color: lightblue;">Total Price</th> 
    <th style=" background-color: lightblue;">Management</th> 
  </tr>
  <?php 
  if(isset($_SESSION['cart'])){
    $i=0;
    $tongtien=0;
      foreach($_SESSION['cart'] as $cart_item){
        $thanhtien=$cart_item['soluong']*$cart_item['giasp'];
        $tongtien+=$thanhtien;
          $i++;

      
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="Admin/moduel/quanlisanpham/upload/<?php echo $cart_item['hinhanh'];?>"width="200px"></td>
    <td><?php echo $cart_item['soluong']; ?></td>
    <td><?php echo $cart_item['giasp']; ?></td>
    <td><?php echo $thanhtien; ?></td>
    <td> <a onclick="return confirm('Are you sure?')" href="Page/Main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Delete</td>
  </tr>
  <?php
  }
?>
<tr>
    <td colspan="8"><p>Total Price: <?php echo $tongtien ?></p>

    <div style="clear: both;"></div>
    <?php
    if(isset($_SESSION['dangky'])){
      ?>
        <p><a href="Page/main/thanhtoan.php">Order</a></p>
    <?php
    }else{
      ?>
        <p><a href="index.php?manage=dangky">Sign up to Order</a></p>
      <?php
    }
    ?>
  </td>
  </tr>
<?php
  }else{
  ?>
   <tr>
    <td colspan="8"><p style="float:left;">Your current order is empty.</p></td>

  </tr>
  <?php
  }
  ?>
</table>