<?php
$sua="SELECT * FROM danhmuc WHERE Id_danhmuc='$_GET[iddanhmuc]'LIMIT 1";    
$query_sua=mysqli_query($mysqli,$sua);
?>
<p> Update product category </p>
<table border="1" width="50%" style="border-collapse: collapse;"> 
<form method="POST" action ="moduel/quanlidanhmuc/xuli.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <?php
    while($dong=mysqli_fetch_array($query_sua))
    {

    
    ?>
  <tr>
    <td>Name list </td>
    <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>  
    </tr>
    <tr>
    <td>Number</td>  
    <td><input type ="text"value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
  </tr>
  <tr >
  <td onclick="return confirm('Are you sure you want to update?')" colspan="2"><input type="submit" name="suadanhmuc" value="Update"></td>  
  </tr>
    <?php
    }
    ?>
</form>
</table>