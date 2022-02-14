<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="author" content="TechyDevs">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Ikeendev - Login</title>
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
               <?php $image=$this->User_model->get_single_where('*','tbl_login_content',array('id'=>1),'',''); ?>
               <div class="col-12 col-lg-7 mobil-hide">
                  <div class="image-back">
                     <img src="<?= base_url().'uploads/home_images/'.$image['login_image'] ?>" alt="">
                  </div>
                  <div class="images-left-login">
                     <div class="content">
                        <h3><?= $image['login_title'] ?></h3>
                        <p><?= $image['login_description'] ?></p>
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
                     <?php $error=$this->session->flashdata('error') ?>
                     <?php if(!empty($error)){   ?>
                     <?= $error ?>
                     <?php } ?>
                     <form action="<?= base_url().'User/check_login' ?>" method="POST" >
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="input-box">
                                 <label class="label-text">Email or Username<span class="primary-color-2 ml-1">*</span></label>
                                 <div class="form-group">
                                    <input class="form-control" type="text" name="email" placeholder="Email, or username">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="input-box">
                                 <label class="label-text">Password<span class="primary-color-2 ml-1">*</span></label>
                                 <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password" id="password">
                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
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
                                 <button class="theme-btn" type="submit">login account</button>
                              </div>
                           </div>
                           <hr>
                           <div class="col-lg-12">
                              <div class="row justify-content-center">
                                <div class=" col-lg-3 aj-ch-half">
                                    <a href="<?= base_url().'Google_login/login' ?>">
                                        <div class="form-group">
                                           <button class="theme-btn w-100" type="button">
                                           <i class="fa fa-google mr-2"></i><span>Google</span>
                                           </button>
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 aj-ch-half">
                                    <div class="form-group">
                                      <a href="<?= base_url().'Facebook_login/index' ?>"> <button class="theme-btn w-100" type="button">
                                       <i class="fa fa-facebook mr-2"></i><span>Facebook</span>
                                       </button></a>
                                    </div>
                                 </div>
                                 <!-- <div class="col-3 col-lg-3 aj-ch-half">
                                    <div class="form-group">
                                        <button class="theme-btn w-100" type="submit">
                                            <i class="fa fa-twitter mr-2"></i><span>Twitter</span>
                                        </button>
                                    </div>
                                    </div> -->
                                 <!-- <div class=" col-lg-3 aj-ch-half">
                                    <div class="form-group">
                                       <button class="theme-btn w-100" type="submit">
                                       <i class="fa fa-linkedin mr-2"></i><span>Linkedin</span>
                                       </button>
                                    </div>
                                 </div> -->
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <p class="mt-2">Don't have an account? <a href="<?= base_url().'User/Signup' ?>" class="primary-color-2">Sign up</a></p>
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
   </body>
</html>