<?php

 if(isset($_POST['dangky'])){
     $tenkhachhang=$_POST['hovaten'];
     $email=$_POST['email'];
     $regex = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
     if (!preg_match($regex, $email)) { 
        echo "Email not uncorrect"; 
        exit;
    } 
     $dienthoai=$_POST['dienthoai'];
     $matkhau=md5($_POST['matkhau']);
     $diachi=$_POST['diachi'];
     $sql_dangky=mysqli_query($mysqli,"INSERT INTO dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
    
     if (!$tenkhachhang || !$email || !$diachi || !$matkhau || !$dienthoai )
     {
         echo "you have to input information.</a>";
         exit;
     }  

     if($sql_dangky){
         echo '<p style ="color:green">You sign up successfull</p>';    
         $_SESSION['dangky']=$tenkhachhang;
         $_SESSION['email']=$email;
         $_SESSION['id_khachhang']=mysqli_insert_id($mysqli);
         header('Location:index.php?manage=Conection');
         
     }
if($tenkhachhang==""){
        echo '<p style ="color:green">You sign up successfull</p>';   
}
  
     

 }
 
 
 ?>    

 
<h3>Sign up</h3>
<style type="text/css">
    table.dangky tr td{
        padding: 5px;
    }
</style>
<form action="" method="POST">
<table class="dangky" border="1" width="50%" style="border-collapse: collapse;">
    <tr>
        <td style=" background-color: lightblue;"> Your name </td>
        <td><input type="text" size = "80" name="hovaten" ></td>
</tr>
<tr>
        <td style=" background-color: lightblue;"> Email </td>
        <td><input type="text" size = "80"  name="email" ></td>
</tr>
<tr>
        <td style=" background-color: lightblue;"> Numberphone</td>
        <td><input type="text" size = "80"  name="dienthoai" ></td>
</tr>
<tr>
        <td style=" background-color: lightblue;"> Address </td>
        <td><input type="text" size = "80"  name="diachi" ></td>
</tr>
<tr>
        <td style=" background-color: lightblue;"> Password </td>
        <td><input type="password" size = "80"  name="matkhau" ></td>
</tr>
<tr>      
        <td style=" background-color: lightblue;" colpan="2"><input type="submit" name="dangky" value="Sign up" ></td>
        <td><a href="index.php?manage=dangnhap">Log in(if you have account)</td>
</tr>
</table>
</form>