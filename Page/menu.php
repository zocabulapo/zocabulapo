<?php

        $sql_danhmuc="SELECT*FROM danhmuc ORDER BY Id_danhmuc DESC";
        $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
        ?>
<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
  unset($_SESSION['dangky']);
  header('Location:index.php?manage=Conection');

}
?>
<div class="menu">
           <ul class ="listmenu">
               <li><a href="index.php?manage=home"> Home</a> </li>
                <?php
                  while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                ?>
                <li><a href="index.php?manage=product&id=<?php echo $row_danhmuc['Id_danhmuc'] ?>"> <?php echo $row_danhmuc['tendanhmuc'] ?> </a> </li>
                <?php
                  }
                ?>
                <li><a href="index.php?manage=Conection"> Cart 
                    </a> 
                
                </li>
                <?php
                if(isset($_SESSION['dangky'])){         
                ?>
                <li><a href="index.php?dangxuat=1"> Log out </a> 
                </li>
                <?php
                }else{
                ?>
                <li><a href="index.php?manage=dangky"> Account
                    </a></li>
               
                <?php
                }
                ?>
                

            
            </ul> 

            <p>
            <form action="index.php?manage=timkiem" method="POST">  
            <input type="text" placeholder="Search product..." name="tukhoa"><input type="submit" name="timkiem" value="Search"></p>
              </form>
            </div>   