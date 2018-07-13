<!doctype html>
<html lang="en">
  <head>
    <!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
  <!-- START NAVBAR -->
    <?php include_once('inc/navbar.php'); ?>
  <!-- END NAVBAR -->

    <div class="wrapper">
       <!-- CONTENT -->
        <div class="container pb-5">

            <div class="row mt-5">
                <div class="col-xl-4">
                    <div class="text-center">
                       <i class="fa fa-user-circle-o profile-icon" aria-hidden="true"></i>
                    </div>
                    <div class="profile-block mt-5">
                        <a href="#" class="txt-dec-none">
                            <form class="form-inline">
                               <i class="flaticon-avatar"></i>
                               <div class="pl-4 profile-font profile-p-t">ข้อมูลส่วนตัว</div>
                            </form>
                        </a>
                    </div>
                    <div class="profile-block mt-4">
                        <a href="#" class="txt-dec-none">
                            <form class="form-inline">
                               <i class="flaticon-map-pin-marked"></i>
                               <div class="pl-4 profile-font profile-p-t">ที่อยู่จัดส่งสินค้า</div>
                            </form>
                       </a>
                    </div>
                    <div class="profile-block mt-4">
                        <a href="#" class="txt-dec-none">
                            <form class="form-inline">
                               <i class="flaticon-credit-card"></i>
                               <div class="pl-4 profile-font profile-p-t">เครดิต</div>
                            </form>
                        </a>
                    </div>
                    <div class="profile-block mt-4">
                        <a href="#" class="txt-dec-none">
                            <form class="form-inline">
                               <i class="flaticon-box"></i>
                               <div class="pl-4 profile-font profile-p-t">ประวัติการสั่งซื้อ</div>
                            </form>
                        </a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card profile-shadow p-5">
                        <div class="profile-font2">ข้อมูลส่วนตัว</div>
                        <div class="form-group row pt-4">
                            <label for="staticEmail" class="col-xl-3 col-form-label">ชื่อ-นามสกุล</label>
                            <div class="col-xl-9">
                              <input type="text" class="form-control profile-form" id="staticEmail" placeholder="ชื่อ-นามสกุล">
                            </div>
                        </div>
                        <div class="form-group row pt-2">
                            <label for="staticEmail" class="col-xl-3 col-form-label">อีเมล</label>
                            <div class="col-xl-9">
                              <input type="text" class="form-control profile-form" id="staticEmail" placeholder="อีเมล">
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            <!-- END CONTANER ------>
        </div>
        <!-- END CONTENT ---------->
    </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
