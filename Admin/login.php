<?Php
session_start();
include('config/config.php');
if(isset($_POST['Login'])){
    $taikhoan=$_POST['username'];
    $matkhau=md5($_POST['password']);
    $sql="SELECT * FROM admmin WHERE isername='".$taikhoan."' AND password='".$matkhau."'";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if($count>0){
        $_SESSION['dangnhap']=$taikhoan;
        header("Location:index.php");
    }else{
        echo'<script>alert("tai khoan sai");</script';
        header("Location:index.php");
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad Login</title>
    <style type="text/css">
        body{
            background: #f2f2f2;
        }
        .wrapper_login{
            width:15%;
            margin: 0 auto;
        }
        table.table-login{
            width:100%;
        }
        table.table-login tr td{
            padding: 5px;
        }
    </style>

</head>
<body>
    <h3 style ="width:6.5%;
            margin: 0 auto; font-family: Calibri;"> Login to access</h3>
<div class="wrapper_login">
    <form action="" autocomplete="off" method="POST" >
    <table border="1" class="table-login" style="text-align:center; border=collapse:collapse; ">
        <tr>
            <td style=" background-color: lightblue;"  colspan ="2"><h3 style="font-family: Calibri;" >Login admin </3>
                           </td>
</tr>
        <tr>
            <td style=" background-color: lightblue;">Username</td>
            <td><input type="text" name="username"></td>

</tr>
<tr>
            <td style=" background-color: lightblue;">Password</td>
            <td><input type="password" name="password"></td>
            
</tr>
<tr>
            <td colspan="2"><input type="submit" name="Login"value="Login" ></td>
            
</tr>
</table>
</form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>
