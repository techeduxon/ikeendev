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

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 mobil-hide">
                <div class="image-back">
                    <img src="<?= base_url()?>uploads/home_images/login-31121page 00_00_00-00_00_30.gif" alt="">
                </div>   
                <div class="images-left-login">
                    <div class="content">
                        <h3>Upskill. Anytime. Anywhere.</h3>
                        <p>Techeduxon Blended Learning brings classroom learning experience online.</p>
                    </div>  
                    <img src="<?= base_url().'assets/user-assets/images/'?>graphics-setup-account.svg">
                </div>
            </div>  
            <div class="col-12 col-sm-8 col-md-8 col-lg-5">
                <div class="form-sec fo-form-sec">
                    <div class="logo-cont">
                        <a href="<?= base_url()?>"><img src="<?= base_url().'assets/user-assets/images/'?>Techeduxon.png"></a>
                        <h2>New Password</h2>
                        <!-- <p>Don’t worry, resetting your password is easy. Enter your email address to receive a password reset link.</p> -->
                    </div>
                    <form action="" method="" > 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">New Password<span class="primary-color-2 ml-1">*</span></label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="text" placeholder="New Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Re Enter Password<span class="primary-color-2 ml-1">*</span></label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="text" placeholder="Re Enter Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="btn-box">
                                    <button class="theme-btn" type="submit">Submit</button>
                                </div>
                            </div>
                            <hr>
                            <div class="col-lg-12">
                                <p class="mt-2">Don't have an account? <a href="sign-up.html" class="primary-color-2">Sign Up Now</a></p>
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
</body>

</html>