<!doctype html>
<html lang="en">
  <head>
    <!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
  <!-- START NAVBAR -->
    
    <!-- END NAVBAR -->
      <div class="wrapper">
      <?php include_once('inc/navbar.php'); ?>
        <!-- CONTENT -->

<!-- ส่วนรูป -->
      
<div class="container">
  <div class="row my-5 mx-0 login-text-shado">
    <div class="col-lg-6">
      <div class="login_frame-crad login-mar-15">
          <img class="login_card-img-top w-100" src="assets/images/banner/banner-login4.jpg">
        <div class="login-position-a ">
          <p class="login-font-32 my-3">สำหรับผู้ที่เป็นสมาชิกแล้ว</p>
          <p><i class="fa fa-check-circle mr-4 login-color-green" aria-hidden="true"></i>สั่งสินค้าผ่านระบบออนไลน์ได้ตลอด 24 ชม.</p>
          <p><i class="fa fa-check-circle mr-4 login-color-green" aria-hidden="true"></i>สิ่งสินค้าผ่านระบบออนไลน์ตั้งแต่ 999 บาท ขึ้นไปรับ<span class="login-color-org">ส่วนลดทันที 10%</span></p>
          <p><i class="fa fa-check-circle mr-4 login-color-green" aria-hidden="true"></i>สั่นสินค้าผ่านระบบออนไลน์ได้ตลอด 24 ชม.</p>
        </div>           
      </div>
    </div>

<!-- ส่วนรูป จบ -->



    <div class="col-lg-6">
      <div class="mt-5 text-center">
        <h2>เข้าสู่ระบบ</h2>
      </div>

        <form class="my-4">
          <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">อีเมล์</label>
            <div class="col-sm-10">
              <input type="text" class="login-from" id="inputPassword" placeholder="example@mail.com">
            </div>
          </div>
           <div class="form-group row mt-4">
                <label for="inputPassword" class="col-sm-2 col-form-label">รหัสผ่าน</label>
              <div class="col-sm-10">
                <input type="password" class="login-from" id="inputPassword" placeholder="********">
              </div>
            </div>
        </form>


          <div class="mt-5 text-center">
            <button type="button" class="btn login-btn ">เข้าสู่ระบบ</button>
          </div>
          <div class="my-3  text-center">
            <button type="button" class="btn login-btn2"><i class="fa fa-facebook-official mr-4" aria-hidden="true"></i>Login with Facebook</button>
          </div>


        <div class="login-display my-4">
          <div class="col-6">
            <p class="text-left">ลืมรหัสผ่าน? <a href="#"><span class="login-color-org">คลิกที่นี้</span></a> </p>
          </div>
          <!-- text to Modal -->
          <div class="col-6">
            <p class="text-right">หากยังไม่ได้เป็นสมาชิคคลิก <a href="#"><span class="login-color-org " data-toggle="modal" data-target="#exampleModal">ลงทะเบียน</span></a></p>
          </div> 
        </div>

          <!-- Modal -->
          <div class="modal fade  bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="re-modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="text-center">
                    <h4>ลงทะเบียน</h4>
                  </div>
                  <form>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ-นามสกุล</label>
                      <div class="col-sm-10">
                        <input type="email" class="re-login-from" id="inputEmail3" placeholder="สมปอง สมปอง">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">อีเมล</label>
                      <div class="col-sm-10">
                        <input type="email" class="re-login-from" id="inputPassword3" placeholder="example@gmail.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">รหัสผ่าน</label>
                      <div class="col-sm-10">
                        <input type="password" class="re-login-from" id="inputPassword3" placeholder="************">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">ยืนยันรหัสผ่าน</label>
                      <div class="col-sm-10">
                        <input type="password" class="re-login-from" id="inputPassword3" placeholder="************">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">ที่อยู่</label>
                      <div class="col-sm-10">
                         <textarea type="text" class="re-login-from" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </div>
                  </form>
                    <div class="mt-5 text-center">
                      <button type="button" class="btn re-login-btn ">ลงทะเบียน</button>
                    </div>
                </div>
              </div>
            </div>
          </div>

    </div>
  </div>
 </div>
                 


</div>     
       <!-- END CONTENT -->

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
