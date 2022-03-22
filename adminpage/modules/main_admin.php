<main>
      <?php    
         if(isset($_GET['action']) && $_GET['query']){
            $dieuhuong = $_GET['action'];
            $chucnang  = $_GET['query'];
         }else{
            $dieuhuong = '';
            $chucnang  = '';
         }

         if($dieuhuong=='quanlydanhmuc' && $chucnang=='them'){
            include("modules/quanlydanhmuc/themdanhmuc.php");
         }else if ($dieuhuong=='quanlydanhmuc' && $chucnang=='xem'){
            include("modules/quanlydanhmuc/xemdanhmuc.php");
         }else if($dieuhuong=='quanlydanhmuc' && $chucnang=='sua'){
            include("modules/quanlydanhmuc/suadanhmuc.php");
         }else if($dieuhuong=='quanlyloaisp' && $chucnang=='xem'){
            include("modules/quanlyloaisp/xemloaisp.php");
         }else if($dieuhuong=='quanlyloaisp' && $chucnang=='them'){
            include("modules/quanlyloaisp/themloaisp.php");
         }else if($dieuhuong=='quanlyloaisp' && $chucnang=='sua'){
            include("modules/quanlyloaisp/updateloaisp.php");
         }else if($dieuhuong=='quanlysp' && $chucnang=='xem'){
            include("modules/quanlysp/xemsp.php");
         }else if($dieuhuong=='quanlysp' && $chucnang=='them'){
            include("modules/quanlysp/themsp.php");
         }else if($dieuhuong=='quanlysp' && $chucnang=='sua'){
            include("modules/quanlysp/suasp.php");
         }else if($dieuhuong=='quanlydh' && $chucnang=='xemdh'){
            include("modules/quanlydonhang/xemdonhang.php");
         }else if($dieuhuong=='quanlydh' && $chucnang=='xemchitietdh'){
            include("modules/quanlydonhang/chitietdonhang.php");
         }else if($dieuhuong=='dashboard' && $chucnang=='xem'){
            include("modules/dashboard.php");
         }else{
            include("dashboard.php");
         }
      ?>
</main>