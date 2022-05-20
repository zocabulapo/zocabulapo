<?php
$lietke_sp="SELECT * FROM sanpham,danhmuc WHERE sanpham.Id_danhmuc=danhmuc.Id_danhmuc ORDER BY id_sanpham DESC";
$query_lietke_sp=mysqli_query($mysqli,$lietke_sp);
?>
<p style="color:black; font-weight: bold; ">Management Product</p>
<table style= "width:100%" border ="1" style="border=collape: collape;">
  <tr>
  <th style=" background-color: lightblue;">ID</th>
    <th style=" background-color: lightblue;">Product name</th>
    <th style=" background-color: lightblue;">Image</th>
    <th style=" background-color: lightblue;">Price</th>
    <th style=" background-color: lightblue;">Quanlity</th>
    <th style=" background-color: lightblue;">Category</th>
    <th style=" background-color: lightblue;">Product code</th>
    <th style=" background-color: lightblue;">Summary</th>
    <th style=" background-color: lightblue;">Status</th>
    <th style=" background-color: lightblue;">Management</th>

  </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
      $i++;
  ?>
  <tr>
  <td> <?php echo $i ?></td>
  <td> <?php echo $row['tensanpham'] ?></td>
  <td><img src="moduel/quanlisanpham/upload/<?php echo $row['hinhanh'] ?>" height="300px" width="300px"></td>
  <td> <?php echo $row['giasp'] ?></td>
  <td> <?php echo $row['soluong'] ?></td>
  <td> <?php echo $row['tendanhmuc'] ?></td>
  <td> <?php echo $row['masp'] ?></td>
  <td> <?php echo $row['tomtat'] ?></td>
  <td> <?php if($row['tinhtrang']==1){
    echo'Kich hoat';

  }else{
    echo'An';

  }
   ?></td>

  <td> <a onclick="return confirm('Are you sure?')" href="moduel/quanlisanpham/xuli.php?idsanpham=<?php echo $row['id_sanpham']?>">Delete</a> |  <a href="?action=quanlisanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Update</a>  
</td>
    
  </tr>
  <?php
  }
  ?>
</table>    