<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ikeendev </title>

    <!-- Google fonts -->
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
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 mobil-hide">
               <?php $image=$this->User_model->get_single_where('*','tbl_login_content',array('id'=>1),'',''); ?>
                <div class="image-back">
                    <img src="<?= base_url().'uploads/home_images/'.$image['signup_image'] ?>" alt="">
                </div>  
                <!-- <div class="images-left-login">
                    <div class="content">
                        <h3>Upskill. Anytime. Anywhere.</h3>
                        <p>Techeduxon Blended Learning brings classroom learning experience online.</p>
                    </div>  
                   
                </div> -->
            </div>  
            <div class="col-12 col-sm-8 col-md-8 col-lg-5">
                <div class="form-sec fo-form-sec">
                    <div class="logo-cont">
                        <a href="<?= base_url()?>"><img src="<?= base_url().'assets/user-assets/images/'?>Techeduxon.png"></a>
                        <h2>OTP</h2>
                        <!-- <p>Don’t worry, resetting your password is easy. Enter your email address to receive a password reset link.</p> -->
                    </div>
                    <form  id="otpverify" method="POST" > 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Enter OTP<span class="primary-color-2 ml-1">*</span> </label>
                                    <b style="float: right;" id="time">60</b>
                                    <b style="float: right;" class="span-re-send"> <a href="javascript:void(0);" style="display: none;" id="resend">Re-Send</a></b>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="otp" placeholder="Enter OTP" minlength="4" maxlength="4"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="btn-box">
                                    <button class="theme-btn" type="submit">VERIFY</button>
                                </div>
                            </div>
                            <hr>
                            <!-- <div class="col-lg-12">
                                <p class="mt-2">Don't have an account? <a href="sign-up.html" class="primary-color-2">Sign Up Now</a></p>
                            </div> -->
                        </div>
                    </form>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script>
    $(document).ready(function(){ 
        var timer;
        
            var sec = 60
            clearInterval(timer);
            timer = setInterval(function() { 
            $('#time').text(sec--);
            if (sec == -1) {
              clearInterval(timer);
              $('#time').empty();
              $('#resend').show();
             } 
            }   , 1000);

        
    });
</script>
<script>
    $(document).ready(function(){
    $('#otpverify').validate({
                    rules:{
                      otp:{
                        required:true,
                        number:true,
                        minlength:4,
                        maxlength:4
                      },
                    },
                    messages:{
                      otp:{
                        required:'<span style="color:red">Please Enter OTP</span>',
                        number:'<span style="color:red">Please Enter Valid OTP</span>',
                        minlength:'<span style="color:red">Please Enter Valid OTP</span>',
                        maxlength:'<span style="color:red">Please Enter Valid OTP</span>',
                      },
                    },
          });
});
</script>
<script>
      $(document).ready(function(){
        $(document).on('submit','#otpverify',function(){
            $('button').attr('disabled',true)
            event.preventDefault();
              $.ajax({
                type:'post',
                url:'<?= base_url().'User/otp_verify' ?>',
                data:$(this).serialize(),
                success:function(data){
                  if(data == 1){
                    <?php if(!empty($this->session->userdata('procuct_id'))){ ?>
                        window.location.href='<?= base_url().'Add-To-Cart' ?>';
                    <?php }else if(!empty($this->session->userdata('otp_type'))){ ?>
                        window.location.href='<?= base_url().'Edit-Profile' ?>';
                    <?php }else{ ?>
                        window.location.href="<?= base_url() ?>";
                    <?php } ?>
                  }else{
                    $('button').attr('disabled',false);
                    swal('warning','Enter Valid OTP','warning');
                  }
                }
            })
        });
        $(document).on('click','#resend',function(){
            event.preventDefault();
              $.ajax({
                    type:'post',
                    url:'<?= base_url().'User/resend_otp' ?>',
                    success:function(data){
                      swal('success','OTP Resend Successfully','success');
                    }
              })
        });
       
    });
</script>
</body>
</html>