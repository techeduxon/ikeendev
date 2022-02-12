<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ikeendev - Signup</title>

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

    <div class="">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 mobil-hide">
            <?php $image=$this->User_model->get_single_where('*','tbl_login_content',array('id'=>1),'',''); ?>

                <div class="image-back">
                    <img src="<?= base_url().'uploads/home_images/'.$image['signup_image'] ?>" alt="">
                </div>  
                <div class="images-left-login">
                    <div class="content">

                        <h3><?= $image['signup_title'] ?></h3>
                        <p><?= $image['signup_description'] ?></p>
                    </div>  
                </div>
            </div>  
            <div class="col-12 col-sm-8 col-md-8 col-lg-5">
                <div class="form-sec">
                    <div class="logo-cont">
                        <a href="<?= base_url()?>"><img src="<?= base_url().'assets/user-assets/images/'?>Techeduxon.png"></a>
                        <h2>Welcome</h2>
                        <p>Log in to continue learning</p>
                    </div>


                    <form action="<?= base_url().'User/signup_function_user' ?>" id="user_signup" method="POST" > 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Select Type<span class="primary-color-2 ml-1">*</span></label>
                                    <div class="form-group">
                                        <select class="form-control" name="type" id="type" required="required">
                                            <option value="">Select Type</option>
                                            <option value="Learner">Learner</option>
                                            <option value="Trainer">Trainer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Country<span class="primary-color-2 ml-1">*</span></label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="countary" id="countary" placeholder="Country" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Contact<span class="primary-color-2 ml-1">*</span></label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="contact" id="contact" placeholder="Contact" minlength="7" maxlength="13">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Password<span class="primary-color-2 ml-1">*</span></label>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password" placeholder="Password" id="password">
                                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Confirm Password<span class="primary-color-2 ml-1">*</span></label>
                                    <div class="form-group">
                                        <input class="form-control" type="password" id="cpass" name="password_confirm" placeholder="Confirm Password">
                                        <span toggle="#cpass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="custom-checkbox d-flex justify-content-between">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">Remember Me</label>
                                        <a href="<?= base_url().'Forgot_password'?>" class="primary-color-2"> Forgot my password?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 ">
                                <div class="btn-box">
                                    <button class="theme-btn" type="submit">Sign UP</button>
                                </div>
                            </div>
                            <hr>

                            <div class="col-lg-12">
                                <div class="row justify-content-center">
                                        <div class=" col-lg-3 aj-ch-half">
                                            <div class="form-group">
                                                <button class="theme-btn w-100" type="submit">
                                                    <i class="fa fa-google mr-2"></i><span>Google</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class=" col-lg-3 aj-ch-half">
                                            <div class="form-group">
                                                <button class="theme-btn w-100" type="submit">
                                                    <i class="fa fa-facebook mr-2"></i><span>Facebook</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- <div class="col-3 col-lg-3 aj-ch-half">
                                            <div class="form-group">
                                                <button class="theme-btn w-100" type="submit">
                                                    <i class="fa fa-twitter mr-2"></i><span>Twitter</span>
                                                </button>
                                            </div>
                                        </div> -->
                                        <div class=" col-lg-3 aj-ch-half">
                                            <div class="form-group">
                                                <button class="theme-btn w-100" type="submit">
                                                    <i class="fa fa-linkedin mr-2"></i><span>Linkedin</span>
                                                </button>
                                            </div>
                                        </div>
                                </div>
                           </div>
                            <div class="col-lg-12">
                                <p class="mt-2">Have an account? <a href="<?= base_url().'Login' ?>" class="primary-color-2">Log IN</a></p>
                            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>




<script type="text/javascript">
    $(document).ready(function(){
      $(".toggle-password").click(function() {
          
          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
        });
    });
</script>
<script>
    $(document).ready(function(){
    $('#user_signup').validate({
                rules:{ 
                    
                    name:{
                        required : true, 
                    },
                    countary:{
                        required : true, 
                    },
                    email:{
                        required : true,
                        email : true,
                        remote: {
                             url: "<?= base_url().'User/register_email_exists' ?>",
                            type: "post",
                            data: { email: function(){ return $("#email").val(); } }
                        }
                    },
                    contact:{ 
                        required : true,
                        minlength:7,
                        maxlength:13,
                        remote: {
                        url: "<?= base_url().'User/mobile_no_exists' ?>",
                            type: "post",
                            data: { contact: function(){ return $("#contact").val(); } }
                           }
                
                    },
                    password :{
                      required : true,
                      minlength : 6,
                    },
                    password_confirm : {
                        minlength : 5,
                        equalTo : "#password"
                    },
                    
                },
                messages:{
                 
                name:{
                    required: '<span style="color:red">Enter Your First Name</span>',
                },
                type:{
                    required: '<span style="color:red">Select Type</span>',
                }, 
                
                email:{
                    required:'<span style="color:red">Please Enter Email Address</span>',
                    email:'<span style="color:red">Please Enter Valid Email Address</span>',
                    remote:'<span style="color:red">This Email Address Is Already Registered</span>',
                },
                contact:{
                    required:'<span style="color:red">Please Enter Contact Number</span>',
                    number:'<span style="color:red">Please Enter Valid Contact Number</span>',
                    minlength:'<span style="color:red">Please Enter Valid Contact Number</span>',
                    maxlength:'<span style="color:red">Please Enter Valid Contact Number</span>',
                    remote:'<span style="color:red">This Contact Number Is Already Registered</span>',  
                },
                password:{
                    required: '<span style="color:red">Enter Your Password</span>',
                    minlength : '<span style="color:"red">Enter Your Password min 6</span>',    
                },
                password_confirm:{
                  required: '<span style="color:red">Enter Confirm Password</span>',
                  minlength : '<span style="color:red">Enter Password To Confirm</span>',
                equalTo :'<span style="color:red">Confirm Password Did Not Match With Password</span>',  
                },
                countary:{
                    required: '<span style="color:red">Enter Countary Name</span>',
                },
                
                
                },
    });
});
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
</body>
</html>