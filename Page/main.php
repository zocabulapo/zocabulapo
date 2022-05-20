</div> <div ID="main">
            
            <div class="maincontent">
               <?php
               if(isset($_GET['manage'])){
                   $tam=$_GET['manage'];
               }
               else{
                   $tam='';
               }
               if($tam=='product'){
                   include("Main/danhmuc.php");
                }
                elseif($tam=='Conection')
                {
                    include("Main/giohang.php");
                }
                elseif($tam=='Category')
                {
                    include("Main/Cardgame.php");
                }
                elseif($tam=='sanpham')
                {
                    include("Main/sanpham.php");
                }
                elseif($tam=='home')
                {
                    include("Main/index.php");
                }
                elseif($tam=='dangky')
                {
                    include("Main/dangky.php");
                }
                elseif($tam=='thanhtoan')
                {
                    include("Main/thanhtoan.php");
                }
                elseif($tam=='dangnhap')
                {
                    include("Main/dangnhap.php");
                }
                elseif($tam=='camon')
                {
                    include("Main/camon.php");
                }
                elseif($tam=='timkiem')
                {
                    include("Main/timkiem.php");
                }else{
                    include("Main/index.php");
                }
                
                
                
               ?>
            </div>

        </div>