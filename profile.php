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
        <div class="container pb-5 ">

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5 mt-5">
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
                <div class="col-xl-8 col-lg-8 col-md-7 mt-5">
                    <div class="card profile-shadow profile-padding">
                        <div class="profile-font2">ข้อมูลส่วนตัว</div>
                        <div class="form-group row pt-4">
                            <label class="col-xl-3 col-form-label profile-font3 profile-p-t2">ชื่อ - นามสกุล</label>
                            <div class="col-xl-9">
                              <input type="text" class="form-control profile-form"  placeholder="ชื่อ-นามสกุล">
                            </div>
                        </div>
                        <div class="form-group row pt-2">
                            <label class="col-xl-3 col-form-label profile-font3 profile-p-t2">อีเมล</label>
                            <div class="col-xl-9">
                              <input type="text" class="form-control profile-form"  placeholder="อีเมล">
                            </div>
                        </div>
                        <div class="form-group row pt-2">
                            <label class="col-xl-3 col-lg-3 col-md-3 col-12 text-center text-lg-left text-md-left col-form-label profile-font3 profile-p-t2">รหัสผ่าน</label>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-12 text-center text-lg-left text-md-left">
                              <button type="button" class="btn profile-btn" data-toggle="modal" data-target="#exampleModal6">
                                <i class="fa fa-unlock-alt pr-2" aria-hidden="true"></i>เปลี่ยนรหัสผ่าน
                              </button>
                                     <!-- Modal -->
                                <div class="modal fade  bd-example-modal-lg" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="re-modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="text-center my-5">
                                          <h4>Change Password</h4>
                                        </div>
                                        <form>
                                          <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-8 ">
                                              <input type="Password" class="re-login-from" id="inputPassword3" placeholder="Enter All Password">
                                            </div>
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-8 mt-4">
                                              <input type="Password" class="re-login-from" id="inputPassword3" placeholder="Comfirm Password">
                                            </div>
                                            <div class="col-sm-2"></div>
                                          </div>
                                        </form>
                                          <div class="mt-5 text-center">
                                            <button type="button" class="btn profile-btn ">ยืนยัน</button>
                                          </div>
                                      </div>
                                        <div class="modal-footer" style="padding-top: 35px;">      
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row pt-2">
                            <label class="col-xl-3 col-form-label profile-font3 profile-p-t2">เบอร์โทรศัพท์</label>
                            <div class="col-xl-9">
                              <input type="text" class="form-control profile-form"  placeholder="เบอร์โทรศัพท์">
                            </div>
                        </div>
                        <div class="form-group row pt-2">
                            <label class="col-xl-3 col-form-label profile-font3 profile-p-t2">ที่อยู่</label>
                            <div class="col-xl-9">
                              <textarea class="form-control profile-form2" placeholder="ที่อยู่"></textarea>
                            </div>
                        </div>
                        <div class="form-group row pt-4">
                            <div class="col-xl-12 text-center text-lg-right text-md-right">
                              <button type="button" class="btn profile-btn">
                                ลงทะเบียน
                              </button>
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
