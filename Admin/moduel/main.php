<div class="clear"></div>
<div class="main">
<?php
               if(isset($_GET['action']) && $_GET['query']){
                   $tam=$_GET['action'];
                   $query=$_GET['query'];
               }
            
               else{
                   $tam='';
                   $query='';
               }
               if($tam=='quanlidanhmuc'&& $query=='them'){
                   include("moduel/quanlidanhmuc/them.php");
                   include("moduel/quanlidanhmuc/lietke.php");
                }elseif($tam=='quanlidanhmuc'&& $query=='update')  {
                    include("moduel/quanlidanhmuc/sua.php");
                 }elseif($tam=='quanlisanpham'&& $query=='them')  { 
                    include("moduel/quanlisanpham/them.php");
                    include("moduel/quanlisanpham/lietke.php");
                }
                elseif($tam=='quanlisanpham'&& $query=='sua'){
                    include("moduel/quanlisanpham/sua.php");
                }
            
            elseif($tam=='quanlidonhang'&& $query=='lietke'){
                include("moduel/quanlidonhang/lietke.php");
            }
            elseif($tam=='donhang'&& $query=='xemdonhang'){
                include("moduel/quanlidonhang/xemdonhang.php");
            }
                else {
                    include("moduel/dashboard.php");
                }
                
               ?>
</div>