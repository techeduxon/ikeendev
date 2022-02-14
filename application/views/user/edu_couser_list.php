<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ikeendev </title>
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/fancybox.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/tooltipster.bundle.css">
    
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/Header.php'); ?>
<?php include ('include/top_slider.php'); ?>

<section class="edu-help-sec">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-8">
                <div class="row">
                      <?php if(!empty($edu_course)){  ?>
                            <?php foreach ($edu_course as $key => $value) { ?>
                            <?php $edu_course_det=$this->User_model->get_all_where('*','tbl_edu_help_det',array('edu_id'=>$value['id']),'',''); ?>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="help-box">
                            <div class="header-se text-center">
                                <h3><?= $value['title'] ?></h3>
                            </div>
                             <div class="accordion accordion-shared accordion-shared-2" id="accordionExample">
                                 <?php if(!empty($edu_course_det)){ ?>
                                <?php foreach ($edu_course_det as $key => $val) { ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?= $val['id'] ?>">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $val['id'] ?>" aria-expanded="false" aria-controls="collapse<?= $val['id'] ?>">
                                                <i class="fa fa-minus"></i>
                                                <i class="fa fa-plus"></i>
                                               <?= $val['title'] ?>
                                            </button>
                                        </h2>
                                    </div><!-- end card-header -->
                                    <div id="collapse<?= $val['id'] ?>" class="collapse " aria-labelledby="heading<?= $val['id'] ?>" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="chang-ul-li">
                                                <ul>
                            <?php $edu_course_det_det=$this->User_model->get_all_where('*','tbl_edu_course_list_det',array('edu_det_id'=>$val['id']),'',''); ?>

                                                   <?php if(!empty($edu_course_det_det)){ ?>
                                                      <?php foreach ($edu_course_det_det as $key => $valu) { ?>
                                                          
                                                      
                                                    <li><a href="<?= $valu['url'] ?>"><?= $valu['title'] ?></a></li>
                                                   <?php } } ?>
                                                </ul>
                                            </div>
                                        </div><!-- end card-body -->
                                    </div><!-- end collapse -->
                                </div><!-- end card -->
                               <?php } } ?>
                            </div><!-- end accordion -->
                        </div>
                    </div>
                  <?php } } ?>
                </div>
            </div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="contect-form-in malti-contect-form-in">
                    <h4 class="text-center mb-3">Contect Us For HELP</h4>

                    <form id="contactform" method="POST" >
                        <div class="col-lg-12">
                            <div class="input-box">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-box">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-box">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="countary" id="countary"  placeholder="Country">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-box">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="contact"  placeholder="Phone No." minlength="7" maxlength="13" onkeypress="return isNumber(event)">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-box">
                                <div class="form-group">
                                    <select class="form-control" name="option" required="">
                                       <option value="">Select Course</option>
                                    
                                        <?php if(!empty($tech)){foreach($tech as $val){ ?>
                                              <option value="<?= $val['title'] ?>"><?= $val['title'] ?></option>
                                            <?php } } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-box">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-box">
                                <div class="form-group">
                                    <input type="hidden" name="from_page" value="course_list">
                                    <button class="theme-btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>
          
    
</section>

<?php include ('include/F-bar.php'); ?>
<?php include ('include/Footer.php'); ?>
<!-- template js files -->

<script src="<?= base_url().'assets/user-assets/' ?>js/bootstrap-select.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/magnific-popup.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/isotope.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/waypoint.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/jquery.counterup.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/particles.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/particlesRun2.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/fancybox.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/wow.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/date-time-picker.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/emojionearea.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/smooth-scrolling.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/tooltipster.bundle.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>

<script src="<?= base_url().'assets/user-assets/' ?>js/develop.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script type="text/javascript">
$(document).ready(function (){
      
        $("#contactform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                name: "required",
                email: "required",
                option:"required",
                message:"required",
                contact: {
                    required: true,
                    minlength:7,
                    maxlength:13,
                },
               
            },
            messages: {
                name: "<span style=color:red; >Please Enter Your  Name</span>",
                email: "<span style=color:red; >Please Enter Your Email</span>",
                message :"<span style=color:red; >Please Enter message</span>",
                option :"<span style=color:red; >Please Select option</span>",
                contact: {
                    required:  "<span style=color:red; >Please Enter Your Contact Number</span>",
                    minlength: "<span style=color:red; >Please Enter Valid Contact No</span>",
                    maxlength: "<span style=color:red; >Please Enter Valid Contact No</span>",
                },
               
               
            }
        });

        
    });
</script><script>
    $(function () {
      $('#name').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });

      $('#countary').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
     function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
<script>
  $(document).ready(function(){
     $(document).on('submit','#contactform',function(){ 
          event.preventDefault();
          $(':input[type="submit"]').prop('disabled', false); 
          $.ajax({ 
            url:'<?= base_url().'User_contact/Add_contact' ?>',
            type:'POST',
            data:$(this).serialize(),
            success:function(data){
              
              $('#contactform').trigger('reset');
              if(data == 1){
                 swal({
                     title: "success!",
                     text: "Enquiry Send Successfully..",
                     icon: "success",
                     timer: 3000
                     });
              }else{
                swal({
                     title: "warning!",
                     text: "something Went Wrong!.",
                     icon: "warning",
                     timer: 3000
                     });
             }
            }
          });
    });
    });
</script>
</body>

</html>