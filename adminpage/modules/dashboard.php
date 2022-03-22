<?php 
    $soluongsp = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM sp"));
    $sodonhang = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM donhang"));
    $doanhthu =0;
    $querydoanhthu=mysqli_query($mysqli,"SELECT * FROM donhang,chitietdonhang WHERE donhang.status_donhang=0 AND donhang.ma_donhang=chitietdonhang.ma_donhang");
    $donhangmoi = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM donhang WHERE status_donhang=1"));
    while($thanhtien = mysqli_fetch_array($querydoanhthu)){
        $doanhthu += $thanhtien['Soluong_Sp']*$thanhtien['Gia_Sp'];
    }


?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">GNDSHOP</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">SỐ SẢN PHẨM</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3><?php echo $soluongsp; ?></h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">SỐ ĐƠN HÀNG</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3><?php echo $sodonhang; ?></h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">DOANH THU</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3><?php echo number_format($doanhthu,0,".",","). " VNĐ" ?></h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">ĐƠN HÀNG MỚI</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3><?php echo $donhangmoi ?></h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="card mb-4">
                        
                        </div>
                    </div>