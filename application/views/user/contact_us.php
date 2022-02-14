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
    <style type="text/css">
    .my-error-class {
        color:red;
    }
      .my-valid-class {
        color:green;
    }
    </style>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/Header.php'); ?>
<?php include ('include/top_slider.php'); ?>
<section class="contact-area padding-top-50px padding-bottom-50px">
    <div class="container">
        <div class="row">
            <div class="col-sm-6  col-md-6 col-lg-3 col-xl-3 ">
                <div class="text-center">
                    <img src="<?= base_url().'uploads/home_images/'.$data->title1 ?>" style="height: 164px;width: 100%;">
                </div>
            </div>
            <div class="col-sm-6  col-md-6 col-lg-3 col-xl-3 ">
                <div class="text-center">
                    <img src="<?= base_url().'uploads/home_images/'.$data->title4 ?>" style="height: 164px;width: 100%;">
                </div>
            </div>
            <div class="col-sm-6  col-md-6 col-lg-3 col-xl-3 ">
                <div class="text-center">
                    <img src="<?= base_url().'uploads/home_images/'.$data->title7 ?>" style="height: 164px;width: 100%;">
                </div>
            </div>
            <div class="col-sm-6  col-md-6 col-lg-3 col-xl-3 ">
                <div class="text-center">
                    <img src="<?= base_url().'uploads/home_images/'.$data->title10 ?>" style="height: 164px;width: 100%;">
                </div>
            </div>
        </div><!-- end row -->
        <div class="contact-form-wrap pt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading mb-3">
                        <h2 class="section__title">Contact with us</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">
                            <?= $data->desc ?>
                        </p>
                        <ul class="social-profile">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <?= $data->iframe ?>
                </div><!-- end col-lg-5 -->
                <div class="col-lg-6">
                    <div class="contact-form-action a-contact-form-action">
                        <form method="POST" name="contactform" id="contactform">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="input-box">
                                        <label class="label-text">Your Name<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name" id="name" placeholder="Your name" required="">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="input-box">
                                        <label class="label-text">Your Email<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email" placeholder="Your email" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="input-box">
                                        <label class="label-text">Country<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="countary" id="countary" placeholder="Your Country" required="">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <input type="hidden" name="page" id="page" value="contact_us">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="input-box">
                                        <label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="tel" name="contact"  minlength="7" maxlength="13"  onkeypress="return isNumber(event)" placeholder="Phone number" required="">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="input-box">
                                        <label class="label-text">Subject<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="subject" placeholder="Reason for contact" required="">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <label class="label-text">Message<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <textarea class="message-control form-control" rows="3" name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="col-lg-12">
                                    <button class="theme-btn" type="submit">Send Message</button>
                                </div><!-- end col-md-12 -->
                            </div><!-- end row -->
                        </form>
                    </div><!-- end contact-form-action -->
                </div><!-- end col-md-7 -->
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</section><!-- end contact-area -->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<script>
  $(document).ready(function(){
    $('#contactform').validate({
      rules:{

        name:{
          required : true,
        },
        email:{
          required : true,
        },
        countary:{
          required : true,
        },
        contact:{
          required : true,
        },
        subject:{
          required : true,
        },
        message:{
          required : true,
        },
      },
      messages:{

        name:{
          required: '<span style="color:red">Enter name</span>',
        },
        email:{
          required: '<span style="color:red">Enter email</span>',
        },
        countary:{
          required: '<span style="color:red">Enter countary</span>',
        },
        contact:{
          required: '<span style="color:red">Enter contact</span>',
        },
        subject:{
          required: '<span style="color:red">Enter subject</span>',
        },
        message:{
          required: '<span style="color:red">Enter message</span>',
        },


      },
    });

  });
</script>
<script type="text/javascript">
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
            url:'<?= base_url().'User/Add_contact' ?>',
            type:'POST',
            data:$(this).serialize(),
            success:function(data){
              $('#contactform').trigger('reset');
              if(data == 1){
                 swal({
                     title: "success!",
                     text: "Enquiry Send Successfully..",
                     type: "success",
                     timer: 3000
                     });
              }else{
                swal({
                     title: "warning!",
                     text: "something Went Wrong!.",
                     type: "warning",
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
