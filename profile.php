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
                <div class="col-xl-4 col-lg-4 col-md-5 col-12 text-center mt-5">
                    <i class="fa fa-user-circle-o profile-icon btn" aria-hidden="true"></i>
            <!-- Tab list ---------------------------------------------------->
                    <ul class="nav nav-tab mt-5" id="myTab" role="tablist">
                        <li class="nav-item w-100">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                <form class="form-inline profile-block">
                                    <i class="flaticon-avatar"></i>
                                    <div class="pl-4 profile-font profile-p-t">ข้อมูลส่วนตัว</div>
                                </form>
                            </a>
                        </li>
                        <li class="nav-item w-100">
                            <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true">
                                <form class="form-inline profile-block">
                                   <i class="flaticon-map-pin-marked"></i>
                                   <div class="pl-4 profile-font profile-p-t">ที่อยู่จัดส่งสินค้า</div>
                                </form>
                            </a>
                        </li>
                        <li class="nav-item w-100">
                            <a class="nav-link" id="credit-tab" data-toggle="tab" href="#credit" role="tab" aria-controls="credit" aria-selected="true">
                                <form class="form-inline profile-block">
                                   <i class="flaticon-credit-card"></i>
                                   <div class="pl-4 profile-font profile-p-t">เครดิต</div>
                                </form>
                            </a>
                        </li>
                        <li class="nav-item w-100">
                            <a class="nav-link" id="his-tab" data-toggle="tab" href="#his" role="tab" aria-controls="his" aria-selected="true">
                                <form class="form-inline profile-block">
                                   <i class="flaticon-box"></i>
                                   <div class="pl-4 profile-font profile-p-t">ประวัติการสั่งซื้อ</div>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            <!-- End Tab List --------------------------------------------------->

            <!-- Content ------------------------------------------------------->
                <div class="col-xl-8 col-lg-8 col-md-7 mt-5">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fadeIn animated show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="card profile-shadow profile-padding">
                              <div class="profile-font2">ข้อมูลส่วนตัว</div>
                              <div class="form-group form-profile-m-b row pt-4">
                                  <label class="col-xl-3 col-form-label profile-font3 profile-p-t2">ชื่อ - นามสกุล</label>
                                  <div class="col-xl-9">
                                    <input type="text" class="form-control profile-form"  placeholder="ชื่อ-นามสกุล">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-xl-3 col-form-label profile-font3 profile-p-t2">อีเมล</label>
                                  <div class="col-xl-9">
                                    <input type="text" class="form-control profile-form"  placeholder="อีเมล">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-xl-3 col-lg-3 col-md-3 col-12 text-center text-lg-left text-md-left col-form-label profile-font3 profile-p-t2">รหัสผ่าน</label>
                                  <div class="col-xl-9 col-lg-9 col-md-9 col-12 text-center text-lg-left text-md-left">
                                    <button type="button" class="btn profile-btn" data-toggle="modal" data-target="#exampleModal6">
                                      <i class="fa fa-unlock-alt pr-2" aria-hidden="true"></i>เปลี่ยนรหัสผ่าน
                                    </button>
                                  </div>
                              </div>
                              <div class="form-group form-profile-m-b row">
                                  <label class="col-xl-3 col-form-label profile-font3 profile-p-t2">เบอร์โทรศัพท์</label>
                                  <div class="col-xl-9">
                                    <input type="text" class="form-control profile-form"  placeholder="เบอร์โทรศัพท์">
                                  </div>
                              </div>
                              <div class="form-group form-profile-m-b row">
                                  <label class="col-xl-3 col-form-label profile-font3 profile-p-t2">ที่อยู่</label>
                                  <div class="col-xl-9">
                                    <textarea class="form-control profile-form2" placeholder="ที่อยู่"></textarea>
                                  </div>
                              </div>
                              <div class="form-group form-profile-m-b row pt-4">
                                  <div class="col-xl-12 text-center text-lg-right text-md-right">
                                    <button type="button" class="btn profile-btn">
                                      ลงทะเบียน
                                    </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Modal Change Password ----------------------------------->
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
                      <!-- End Modal Change Password ---------------------------->
                      <div class="tab-pane fadeIn animated" id="address" role="tabpanel" aria-labelledby="address-tab">
                          <div class="card profile-shadow profile-padding">
                              <div class="profile-font2">ที่อยู่จัดส่งสินค้า</div>
                              <div class="form-group row profile-bg-address form-profile-m-b2 mt-4">
                                  <div class="col-xl-4 text-center">
                                      <div class="profile-font7">ชื่อ</div>
                                  </div>
                                  <div class="col-xl-4 text-center">
                                      <div class="profile-font7">ที่อยู่</div>
                                  </div>
                                  <div class="col-xl-4 text-center">
                                      <div class="profile-font7">เบอร์โทรศัพท์</div>
                                  </div>
                              </div>
                              <div class="form-group row form-profile-m-b2 pt-3">
                                  <div class="col-xl-4">
                                      <div class="profile-font8">นาย สมปอง เวิร์คบายไทย</div>
                                  </div>
                                  <div class="col-xl-4 px-0">
                                      <div class="profile-font8">หอ vip ห้อง 1215</div>
                                      <div class="profile-font8">29/174-175 ม.1</div>
                                      <div class="profile-font8">ต.คลองหก อ.คลองหลวง จ.ปทุมธานี</div>
                                  </div>
                                  <div class="col-xl-4">
                                      <span class="profile-font8">081-123-4567</span>
                                      <span class="pl-3"><a href="#" class="profile-font9"><u>แก้ไข</u></a></span>
                                      <span class="pl-1"><a href="#" class="profile-font9"><u>ลบ</u></a></span>
                                  </div>
                              </div>
                              <hr>
                              <div class="form-group row form-profile-m-b2 pt-3">
                                  <div class="col-xl-4">
                                      <div class="profile-font8">นาย สมปอง เวิร์คบายไทย</div>
                                  </div>
                                  <div class="col-xl-4 px-0">
                                      <div class="profile-font8">หอ vip ห้อง 1215</div>
                                      <div class="profile-font8">29/174-175 ม.1</div>
                                      <div class="profile-font8">ต.คลองหก อ.คลองหลวง จ.ปทุมธานี</div>
                                  </div>
                                  <div class="col-xl-4">
                                      <span class="profile-font8">081-123-4567</span>
                                      <span class="pl-3"><a href="#" class="profile-font9"><u>แก้ไข</u></a></span>
                                      <span class="pl-1"><a href="#" class="profile-font9"><u>ลบ</u></a></span>
                                  </div>
                              </div>
                              <hr>
                              <div class="mt-5 text-left">
                                  <button type="button" class="btn profile-btn" data-toggle="modal" data-target="#exampleModal5">
                                      <i class="fa fa-plus pr-2" aria-hidden="true"></i>เพิ่มที่อยู่
                                  </button>
                              </div>
                           </div>
                      </div>
                  <!-- Modal Add Address --------------------------------------------->
                      <div class="modal fade  bd-example-modal-lg" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="re-modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center mb-5">
                                      <h4>เพิ่มที่อยู่</h4>
                                    </div>
                                    <form>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ-นามสกุล</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="re-login-from" id="inputEmail3" placeholder="สมปอง สมปอง">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">เบอร์โทรศัพท์</label>
                                        <div class="col-sm-10">
                                          <input type="tel" class="re-login-from" id="inputPassword3" placeholder="example@gmail.com">
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">ที่อยู่</label>
                                        <div class="col-sm-10">
                                           <textarea type="text" class="re-login-from" id="exampleFormControlTextarea1" rows="5" placeholder="8/8 ม.5 ต.บางใหญ่ อ.เมือง จ.นนทบุรี 11000"></textarea>
                                        </div>
                                      </div>
                                    </form>
                                    <div class="row">
                                      <div class=" col-6 mt-5 text-right">
                                        <button type="button" class="btn gray-btn">ยกเลิก</button>
                                      </div>
                                      <div class="col-6 mt-5 text-left">
                                        <button type="button" class="btn profile-btn ">ลงทะเบียน</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="modal-footer" style="padding-top: 35px;"></div>
                              </div>
                          </div>
                      </div>
                  <!-- End Modal Add Address -------------------------------->
                      <div class="tab-pane fadeIn animated" id="credit" role="tabpanel" aria-labelledby="credit-tab">
                          <div class="card profile-shadow profile-padding">
                              <div class="form-group row">
                                  <label class="col-xl-6 col-lg-6 col-md-7 col-6 col-form-label profile-font2">บัตรเครดิตของฉัน</label>
                                  <div class="col-xl-6 col-lg-6 col-md-5 col-6 text-right">
                                      <button type="button" class="btn profile-btn">
                                        <i class="fa fa-plus-square-o pr-2" aria-hidden="true"></i>เพิ่มบัตรเครดิต/เดบิต
                                      </button>
                                  </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                  <label class="col-xl-2 col-lg-2 col-md-2 col-2 col-form-label">
                                      <div class="profile-overlay-credit">
                                        <img src="assets/images/payment/cd-05.png" class="profile-image-credit">
                                      </div>
                                  </label>
                                  <div class="col-xl-2 col-lg-2 col-md-2 col-2 text-center">
                                      <div class="profile-font4">Visa</div>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-center">
                                      <div class="profile-font4">**** **** **** 6958</div>
                                  </div>
                                  <div class="col-xl-2 col-lg-2 col-md-2 col-2 text-right">
                                    <a href="#">
                                      <div class="profile-font5"><i class="fa fa-trash-o" aria-hidden="true"></i></div>
                                    </a>
                                  </div>
                              </div>
                           </div>
                       </div>
                       <div class="tab-pane fadeIn animated" id="his" role="tabpanel" aria-labelledby="his-tab">
                          77777
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
