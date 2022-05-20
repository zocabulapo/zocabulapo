<p> Add product  </p>
<table border="1" width="100%" style="border-collapse: collapse;"> 
<form method="POST" action ="moduel/quanlisanpham/xuli.php" enctype="multipart/form-data">
  <tr>
    <td style="background-color: lightblue; color:black; font-weight: bold; ">Name product </td>
    <td><input type="text" name="tensanpham"></td>  
    </tr>
    <tr>
    <td  style="background-color: lightblue; color:black; font-weight: bold; ">Detail </td>
    <td><textarea rows="10" name="noidung" style="resize: none" ></textarea> ></td>  
    </tr>
    <tr>
    <td  style="background-color: lightblue; color:black; font-weight: bold; ">Summary </td>
    <td><textarea rows="10"  name="tomtat" style="resize: none" ></textarea> ></td>  
    </tr>
    <tr>
    <td  style="background-color: lightblue; color:black; font-weight: bold; ">Price </td>
    <td><input type="text" name="giasp"></td>  
    </tr>
    <tr>
    <td  style="background-color: lightblue; color:black; font-weight: bold; ">Produt jmg </td>
    <td><input type="file" name="hinhanh"></td>  
    </tr>
    <tr>
    <td  style="background-color: lightblue; color:black; font-weight: bold; ">Number </td>
    <td><input type="text" name="soluong"></td>  
    </tr>
    <tr>
    <td  style="background-color: lightblue; color:black; font-weight: bold; ">Code product </td>
    <td><input type="text" name="masp"></td>  
    </tr>
    <tr>
    <td  style="background-color: lightblue; color:black; font-weight: bold; ">Product Category</td>  
    <td>
      <select name="danhmuc">
        <?php
        $sql_danhmuc="SELECT*FROM danhmuc ORDER BY Id_danhmuc DESC";
        $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
        ?>
        <option value=<?php echo $row_danhmuc['Id_danhmuc'] ?>><?php echo $row_danhmuc['tendanhmuc'] ?></option>
<?php
        }
        ?>
</select>
    </td>
  </tr>
    <tr>
    <td  style="background-color: lightblue; color:black; font-weight: bold; ">Status</td>  
    <td>
      <select name="tinhtrang">
        <option value="1">
        Access
</option>
<option value="0">
        Hide
</option>
</select>
    </td>
  </tr>
  <tr >
  <td colspan="2"><input type="submit" name="themsanpham" value="Add"></td>  
  </tr>
  
</form>
</table>