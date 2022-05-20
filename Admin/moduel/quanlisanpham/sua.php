<?php
$sua_sp="SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]'LIMIT 1";    
$query_sua_sp=mysqli_query($mysqli,$sua_sp);
?>
<p> Update product  </p>
<table border="1" width="100%" style="border-collapse: collapse;"> 
<?php
While($row=mysqli_fetch_array($query_sua_sp)){
?>
<form method="POST" action ="moduel/quanlisanpham/xuli.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data">

<tr>
    <td>Name product </td>
    <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>  
    </tr>
    <tr>
    <td>Detail </td>
    <td><textarea rows="10" name="noidung" style="resize: none" ><?php echo $row['noidung']?></textarea></td>  
    </tr>
    <tr>
    <td>Summary</td>
    <td><textarea rows="10" name="tomtat" style="resize: none" ><?php echo $row['tomtat'] ?></textarea></td>  
    </tr>
    <tr>
    <td>Price </td>
    <td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>  
    </tr>
    <tr>
    <td>Produt jmg </td>
    <td><input type="file" name="hinhanh">
    <img src="moduel/quanlisanpham/upload/<?php echo $row['hinhanh']?>" width="550px">
  </td>  

    </tr>
    <tr>
    <td>Number </td>
    <td><input type="text"value="<?php echo $row['soluong'] ?>" name="soluong"></td>  
    </tr>
    <tr>
    <td>Code product </td>
    <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>  
    </tr>
    <tr>
    <td>Danh muc san pham</td>  
    <td>
      <select name="danhmuc">
        <?php
        $sql_danhmuc="SELECT*FROM danhmuc ORDER BY Id_danhmuc DESC";
        $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
          if($row_danhmuc['Id_danhmuc']==$row['Id_danhmuc']){
        ?>
        <option selected value=<?php echo $row_danhmuc['Id_danhmuc'] ?>><?php echo $row_danhmuc['tendanhmuc'] ?></option>
<?php
          }else{

       ?>   
         <option value="<?php echo $row_danhmuc['Id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
       <?php   
          }
        }
        ?>
</select>
    </td>
  </tr>
    <tr>
    <td>Tinh trang</td>  
    <td>
      <select name="tinhtrang">
        <?php
        if($row['tinhtrang']==1){       
        ?>
        <option value="1"selected>Kich hoat</option>
<option value="0">An</option>
<?php
        }else{
        ?>
          <option value="1">Kich hoat</option>
<option value="0"selected>An</option>
        <?php
        }
?>
</select>
    </td>
  </tr>
  <tr>
          <td onclick="return confirm('Are you sure you want to update?')" colspan="2"><input type="submit" name="suasanpham" value="Update"></td> 
        </tr>
</form>
<?php
}
?>
</table>