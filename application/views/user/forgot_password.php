<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ikeendev</title>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/line-awesome.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/responsive.css">


    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<section class="login-form">

    <div class="container-fluid">
        <div class="row justify-content-center" >
            
            <div class="col-12 col-lg-7 mobil-hide">
            <div class="image-back">
                <img src="<?= base_url()?>uploads/home_images/login-31121page 00_00_00-00_00_30.gif" alt="">
            </div>
                <div class="images-left-login">
                    <div class="content">
                        <h3>Upskill. Anytime. Anywhere.</h3>
                        <p>Techeduxon Blended Learning brings classroom learning experience online.</p>
                    </div>  
                </div>
            </div>  
            <div class="col-12 col-sm-8 col-md-8 col-lg-5">
                <div class="form-sec fo-form-sec">
                    <div class="logo-cont">
                        <a href="<?= base_url()?>"><img src="<?= base_url().'assets/user-assets/images/'?>Techeduxon.png"></a>
                        <h2>Forgot your Password?</h2>
                        <p>Don’t worry, resetting your password is easy. Enter your email address to receive a password reset link.</p>
                    </div>
                     <div id="recoverform">
                    <form id="forgot-Password-form" method="" > 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="forgotemail" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="btn-box">
                                    <button class="theme-btn" type="submit">Send</button>
                                </div>
                            </div>
                            <hr>
                            <div class="col-lg-12">
                                <p class="mt-2">Don't have an account? <a href="<?= base_url().'User/Signup' ?>" class="primary-color-2">Sign Up Now</a></p>
                            </div>
                        </div>
                    </form>
                </div>
                <!----------------------otp confirm modal----------------------->

                <div id="recoverformotp" style="display: none;">
                    <div class="logo">
                      
                        <h5 class="font-medium m-b-20"></h5>
                        <span>Enter your OTP </span>

                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" id="verify-Form1" >
                            <!-- email -->
                            <div class="otp-chang text-right">
                                <p>
                                    <span id="time1" style="margin-left: 92%;">60</span>
                                    <span id="resend1" style="display: none;margin-left: -30%;top: 25px;" class="btn btn-link">Resend</span>
                                </p>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                 
                                    <input class="form-control form-control-lg" type="text" minlength="4" maxlength="4" name="otp1" id="otp1"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Please Enter otp " style="width: 99%;">
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20">
                                <div class="col-12">
                                    <button class="theme-btn" id="r-password" type="submit" name="action">Submit</button>
                                    <!-- <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Submit</button> -->
                                              <span style="display: none;" id="invalid">Enter Valid Otp</span>
                                              <span style="display: none;" id="send">Otp Resend</span>
                                    <!-- <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Re-send</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
               


<!--*************************new password modal********************* -->
                <div id="recoverpassword" style="display: none;">
                    <div class="logo">
                       
                        <h5 class="font-medium m-b-20">Recover Password</h5>
                        <span>Enter your New Password</span>

                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" id="change-Password">
                            <!-- email -->
                            <div class="form-group row">
                                <div class="col-12">
                                    
                                    <input type="password" id="changePass" name="changePass" class="form-control form-control-lg" placeholder="Enter New Password" style="width: 99%;" required="">
                                    <span toggle="#changePass" class="fa fa-fw fa-eye field-icon toggle-password" style="position: absolute;right: 6%;margin-top: -32px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <!-- <input class="form-control form-control-lg" type="text" required="" placeholder="Enter your Confirm Password"> -->
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20">
                                <div class="col-12">
                                    <button class="theme-btn" type="submit">Submit</button>
                                    <!-- <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Submit</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<!--*************************end password modal********************* -->

                    <p class="pricacy">© 2009-2020 - Techeduxon Solutions. All Rights Reserved. | <a href="javascript:void(0);">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
      
               
                

</section>

<script src="<?= base_url().'assets/user-assets/' ?>js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/popper.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/bootstrap.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
 <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
    $('#change-Password').validate({
      rules:{
        changePass:{
          required:true,
          minlength:5,
        },
      },
      messages:{
        changePass:{
          required:'<span style="color:red">Please Enter OTP</span>',
          minlength:'<span style="color:red">Please Password Must Be 5 Digit Long</span>',
        },
      },
    })

    $('#verify-Form1').validate({
      rules:{
        otp1:{
          required:true,
          number:true,
          minlength:4,
          maxlength:4
        },
      },
      messages:{
        otp1:{
          required:'<span style="color:red">Please Enter OTP</span>',
          number:'<span style="color:red">Please Enter Valid OTP</span>',
          minlength:'<span style="color:red">Please Enter Valid OTP</span>',
          maxlength:'<span style="color:red">Please Enter Valid OTP</span>',
        },
      },
    })
    $('#forgot-Password-form').validate({
      rules:{
        forgotMobile:{
          required:true,
        },
      },
      messages:{
        forgotMobile:{
          required:'<span style="color:red">Please Enter Contact Number</span>',
        },
      },
    })
</script>
<script type="text/javascript">   
       

        $(document).on('submit','#forgot-Password-form',function(){
            event.preventDefault();
            $('.preloader').css('display','block')
              $.ajax({
                type:'get',
                url:'<?= base_url().'User/send_otp_forgot' ?>',
                data:$(this).serialize(),
                success:function(data){
                  $('.preloader').css('display','none')
                  if(data == 1){
                    $('#forgot-Password-form').trigger('reset')
                    $('#verify-Form1').trigger('reset')
                     $("#recoverform").slideUp();
                     $("#recoverformotp").fadeIn();
                   
                    myTimer1()
                    //$('#myModal3').modal('show')
                  }else{
                    swal('warning','No Account Found With This Contact Number','warning');
                  }
                }
              })
        })
        $(document).on('submit','#verify-Form1',function(){
            event.preventDefault();
            $('.preloader').css('display','block')
              $.ajax({
                type:'get',
                url:'<?= base_url().'User/verify_otp_frog' ?>',
                data:$(this).serialize(),
                success:function(data){
                  $('.preloader').css('display','none')
                  if(data == 1){
                   $("#recoverformotp").slideUp();
                   $("#recoverpassword").fadeIn();
                    
                  }else{
                    swal('warning','Enter Valid OTP','warning');
                  }
                }
            })
        });
        $(document).on('click','#resend1',function(){
            event.preventDefault();
            $('.preloader').css('display','block')
              $.ajax({
                    type:'get',
                    url:'<?= base_url().'User/resend_otp_forgot' ?>',
                    success:function(data){
                      $('.preloader').css('display','none')
                      swal('success','OTP Resend Successfully','success');
                    }
              })
        });
        $(document).on('submit','#change-Password',function(){
            event.preventDefault();
              $('.preloader').css('display','block')
              $.ajax({
                type:'get',
                url:'<?= base_url().'User/set_new_pass' ?>',
                data:$(this).serialize(),
                success:function(data){
                  $('.preloader').css('display','none')
                  window.location.href='<?= base_url().'Login' ?>';
                }
              })
        });
        var timer;
        function myTimer1() {
            var sec = 60
            clearInterval(timer);
            timer = setInterval(function() { 
            $('#time1').text(sec--);
            if (sec == -1) {
              clearInterval(timer);
              $('#time1').empty();
              $('#resend1').show();
             } 
            }   , 1000);

        }

    
    </script>
    <script >
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".toggle-password").click(function() {   
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if(input.attr("type") == "password") {
          input.attr("type", "text");
        }else{
          input.attr("type", "password");
        }
      });
    });
</script>
</body>
</html>