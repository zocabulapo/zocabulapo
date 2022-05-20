<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type ="text/css" href="CSS/Styleadmin.css">
</head>
<body>
    <h3 class="title_admin">Welcom to Admin page</h3>
    <div class="wrapper">
    <?php
    include("config/config.php");
   include("moduel/header.php");
   include("moduel/menu.php");
   include("moduel/main.php");
   include("moduel/footer.php");
   
   ?>
    </div>
</body>
</html>