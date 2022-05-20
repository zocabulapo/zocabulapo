<?php
$lietke="SELECT * FROM danhmuc ORDER BY thutu DESC";
$query_lietke=mysqli_query($mysqli,$lietke);
?>
<h3>Category management</h3>
<table style= "width:100%" border ="2" style="border=collape: collape;">
  <tr>
  <th style=" background-color: lightblue;">ID</th>
    <th style=" background-color: lightblue;">Category name</th>
    <th style=" background-color: lightblue;">Code Category</th>
    <th style=" background-color: lightblue;">Management</th>
  </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke)){
      $i++;
  ?>
  <tr>
  <td> <?php echo $i ?></td>
  <td> <?php echo $row['tendanhmuc'] ?></td>
  <td> <?php echo $row['thutu'] ?></td>
  <td> <a onclick="return confirm('Are you sure?')" href="moduel/quanlidanhmuc/xuli.php?iddanhmuc=<?php echo $row['Id_danhmuc']?>">Delete</a> |  <a href="?action=quanlidanhmuc&query=update&iddanhmuc=<?php echo $row['Id_danhmuc']?>">Update</a>  
</td>
    
  </tr>
  <?php
  }
  ?>
</table>    