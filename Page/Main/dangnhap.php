<?Php
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $matkhau=md5($_POST['password']);
    $sql="SELECT * FROM dangky WHERE email='".$email."' AND matkhau='".$matkhau."'";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if($count>0){
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky']=$row_data['tenkhachhang'];
        $_SESSION['email']=$row_data['email'];

        header("Location:index.php?manage=Conection");
    }else{
        echo'<p style="color:red">Email or password incorrect. </p>';
       
    }
  
}
?>
<form action=""method="POST" >
    <table border="1" style="text-align:center;style-align:center;border=collapse:collapse; ">
        <tr>
            <td  style=" background-color: lightblue;" colspan ="2"><h3>Login</3>
                           </td>
</tr>
        <tr>
            <td style=" background-color: lightblue;">Username</td>
            <td><input type="text" name="email" placeholder="Email..."></td>

</tr>
<tr>
            <td  style=" background-color: lightblue;">Password</td>
            <td ><input type="password" name="password" placeholder="Password..."></td>
            
</tr>
<tr>
            <td  style=" background-color: lightblue;"colspan="2"><input type="submit" name="Login"value="Login" ></td>
            <p><a href="Admin/Login.php">Are you admin? Click here</a></p>
</tr>
</table>
</form>