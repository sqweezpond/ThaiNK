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
      <div class="wrapper fadeIn animated">

        <!-- CONTENT -->


        

                    <!-- bg-top -->
                          <div style=" width: 100%;padding: 8px;background: url('assets/images/banner/title.png'); background-position: right; background-size: cover; " >
                            <div class="container">
                              <div class="row about_row_bg">
                                <div class="col-lg-12 mt-4">
                                  <div>
                                    <p class="about-size">ติดต่อเรา (Contact us)</p>
                                  </div>
                                </div>
                                <hr class="about-hr-y">
                              </div>
                            </div>
                          </div>
                     <!-- end bg-top -->

                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="mt-5">
                            <p class="home-font14">ส่งข้อความถึงเราได้ที่นี้</p>
                            <p style="text-indent: 30px;" class="font-all-ting">ดำเนินธุรกิจผลิตภัณฑ์และสินค้าสำหรับบรรจุน้ำดื่มทุกชนิด นอกจากนี้เรายังมีถุงพลาสติกใส และผลิตฉลากสำหรับบรรจุภัณฑ์ไว้จำหน่ายมากมาย</p>
                          </div>
                          <div>
                            <form class="mt-lg-5">
                                <div class="form-group">
                                  <input type="email" class="contact-form-control my-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ชื่อ-นามสกุล">
                                </div>
                                <div class="form-group">
                                  <input type="email" class="contact-form-control my-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="อีเมล">
                                </div>
                                <div class="form-group">
                                  <input type="email" class="contact-form-control my-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="เบอร์โทรศัพท์">
                                </div>
                                <div class="form-group">
                                  <input type="email" class="contact-form-control my-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="เรื่อง">
                                </div>
                                <div class="form-group">
                                  <textarea class="contact-form-control" id="exampleTextarea" rows="3" placeholder="ข้อความ"></textarea>
                                </div>
                            </form>
                            <div class="mt-3">
                              <button type="button" class="btn profile-btn">ส่งข้อความ</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="mt-5">
                            <button type="button" class="btn contact-btn">แผนที่</button>
                          </div>
                          <span class='zoom' id="zoom">
                            <div class="contact-hr">
                              <img class="w-100" src="assets/images/banner/map3.png">
                            </div>
                          </span>   
                        </div>
                      </div>
                     </div>

                      <div class="container">
                        <div class="row mb-5">
                          <div class="col-lg-6 mt-5">
                            <div>
                              <p class="home-font14">ข้อมูลสำหรับติอต่อเรา</p>
                            </div>
                            <div class="contact-pad font-all-ting">
                              <div>
                                <p><i class="fa fa-map-marker mr-3" aria-hidden="true"></i><span class="color-80">8/8 หมู่4 ซอย เทศบาล 19 ถนนบางกรวย-ไทยน้อย ตำบลโสนลอย อำเภอ บางบัวทอง จังหวัดนนทบุรี 11110</span></p>
                              </div>
                              <div>
                                <p><i class="fa fa-phone mr-3" aria-hidden="true "></i><span class="color-80">Tel : +66 02-9202500-5</span></p>
                              </div>
                              <div>
                                <p class="color-80"><i class="fa fa-fax mr-3" aria-hidden="true "></i><span class="color-80">Fax : +66 02-9202506</span></p>
                              </div>
                               <div>
                                <p><i class="fa fa-envelope mr-3" aria-hidden="true"></i><span class="color-80">Email : sale@thainkplastic.co.th</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3872.8066673124235!2d100.41633531522787!3d13.910501290244918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e28ff0f434ef5f%3A0xa386985c6df16ac4!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5hOC4l-C4oiDguYDguK3guYfguJkuIOC5gOC4hC4g4Lie4Lil4Liy4Liq4LiV4Li04LiBIOC4iOC4s-C4geC4seC4lA!5e0!3m2!1sth!2sth!4v1531466977361" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>      
                        </div>  
                      </div>






        <!-- END CONTENT -->
      </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://rawgit.com/jackmoore/zoom/master/jquery.zoom.min.js"></script>
<script>
  $(document).ready(function() {
    $('#zoom').zoom({
      url: 'assets/images/banner/map3.png'
    });
  });
</script>
