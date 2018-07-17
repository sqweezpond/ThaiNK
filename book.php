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
          <div class="row">

            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal0">
                  Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade  bd-example-modal-lg" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="re-modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center my-5">
                          <h4>เพิ่มบัตรเคดิต/เดบิต</h4>
                        </div>
                        <form>
                          <div class="form-group row">
                            
                            <div class="col-sm-12">
                              <input type="text" class="re-login-from" id="inputEmail3" placeholder="ชื่อที่ปรากฎบนบัตร">
                            </div>
                            
                          </div>
                          <div class="form-group row">
                           
                            <div class="col-sm-12">
                              <input type="text" class="re-login-from" id="inputEmail3" placeholder="หมายเลขบัตรเคดิต">
                            </div>
                            
                          </div>
                           <div class="form-group">
                            
                            <div class="col-sm-4">
                              <label for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>
                             <div class="col-sm-4">
                              <label for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>
                             <div class="col-sm-4">
                              <label for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>
                           
                          </div>

                      
                        </form>
                          <div class="mt-5 text-center">
                            <button type="button" class="btn profile-btn ">ลงทะเบียน</button>
                          </div>
                      </div>
                        <div class="modal-footer" style="padding-top: 35px;">      
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



            <div class="col-lg-2">
              <div>
                <i class="fa fa-check-square text-center" aria-hidden="true"></i>
              </div>
            </div>



            <div class="col-lg-5">
              <div>
                <p>สินค้า</p>
              </div>
              

              
            </div>
            <div class="col-lg-3">
              <div>
                <p>ราคา</p>
              </div>  
            </div>

            

            <div class="col-lg-2">
              <div>
                <p>จำนวน</p>
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
  