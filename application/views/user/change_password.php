<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ikeendev - My Account </title>
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/fancybox.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/tooltipster.bundle.css">    
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

<!-- Favicon -->
<link rel="icon" sizes="16x16" href="images/favicon.png">

<!-- inject:css -->
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/line-awesome.css">
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/animate.min.css">
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/bootstrap-select.min.css">
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/a-style.css">
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/responsive.css">
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/jquery.filer.css">

<!-- end inject -->
</head>
<body class="new-cursec-body" style="background-color: #f7f7f7;">

<!-- start cssload-loader -->
<div class="preloader">
<div class="loader">
    <svg class="spinner" viewBox="0 0 50 50">
        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
    </svg>
</div>
</div>
<header class="header-menu-area dashboard-header">
<div class="header-menu-content dashboard-menu-content">
    <div class="container-fluid">
        <div class="main-menu-content">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="set-menu d-flex">
                        <div class="left-hide-n-show">
                            <a href="javascript:void(0);" class="chang-css"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                            
                        <div class="logo-box">
                            <a href="<?= base_url()?>" class="logo"><img style="height: 30px;     position: absolute;" src="<?= base_url().'assets/user-assets/' ?>images/Techeduxon.png" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                        </div>

                    </div>
                </div><!-- end col-lg-2 -->
                <div class="col-lg-9">
                    <div class="menu-wrapper">
                        <!-- end contact-form-action -->
                        
                        <div class="logo-right-button d-flex align-items-center">
                            <div class="header-action-button d-flex align-items-center">
                                <div class="contact-form-action mr-auto">
                                    <form method="post">
                                        <div class="input-box">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="search" placeholder="Search for anything">
                                                <span class="la la-search search-icon"></span>
                                            </div>
                                        </div><!-- end input-box -->
                                    </form>
                                </div>


                                <div class="user-action-wrap">
                                    <div class="notification-item user-action-item">
                                        <div class="dropdown">
                                            <button class="notification-btn dot-status online-status dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php if(empty($this->session->userdata('user_data')['image'])){ ?>
                                                        <img src="<?= base_url().'assets/user-assets/' ?>images/team7.jpg" alt="John Doe">
                                                    <?php }else{ ?>
                                                        <img src="<?= base_url().'uploads/profile/'.$this->session->userdata('user_data')['image'] ?>" alt="John Doe">
                                                    <?php } ?>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                                                <div class="mess-dropdown">
                                                    <div class="mess__title d-flex align-items-center">
                                                        <div class="image">
                                                            <a href="#">
                                                                <?php if(empty($this->session->userdata('user_data')['image'])){ ?>
                                                        <img src="<?= base_url().'assets/user-assets/' ?>images/team7.jpg" alt="John Doe">
                                                    <?php }else{ ?>
                                                        <img src="<?= base_url().'uploads/profile/'.$this->session->userdata('user_data')['image'] ?>" alt="John Doe">
                                                    <?php } ?>
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="widget-title font-size-16">
                                                                <a href="#" class="text-white">
                                                                    <?= $this->session->userdata('user_data')['name'] ?>
                                                                </a>
                                                            </h4>
                                                            <span class="email"><?= $this->session->userdata('user_data')['email'] ?></span>
                                                        </div>
                                                    </div><!-- end mess__title -->
                                                    <div class="mess__body">
                                                        <ul class="list-items">
                                                            <li class="mb-0">
                                                                <a href="<?= base_url().'My-Courses'?>" class="d-block">
                                                                    <i class="la la-file-video-o"></i> My courses
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="<?= base_url().'Cart'?>" class="d-block">
                                                                    <i class="la la-shopping-cart"></i> My cart
                                                                </a>
                                                            </li>
                                                           
                                                            <li class="mb-0">
                                                                <a href="<?= base_url().'User/Logout'?>" class="d-block">
                                                                    <i class="la la-power-off"></i> Logout
                                                                </a>
                                                            </li>
                                                          
                                                        </ul>
                                                    </div><!-- end mess__body -->
                                                </div><!-- end mess-dropdown -->
                                            </div><!-- end dropdown-menu -->
                                        </div><!-- end dropdown -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- end logo-right-button -->
                        
                    </div><!-- end menu-wrapper -->
                    <nav class="main-menu new-body-hed" >
                            <ul>
                                <li class="sidenav__item page-active"><a href="<?= base_url().'My-Account'?>"><i class="la la-user"></i><span> My Profile</span></a></li>
                                <li class="sidenav__item"><a href="<?= base_url().'My-Courses'?>"><i class="la la-file-video-o"></i><span> My Courses</span></a></li>
                                <li class="sidenav__item"><a href="<?= base_url().'Categories'?>" target="_blank" ><i class="fa fa-comments-o"></i><span> Community</span></a></li>
                                <!-- <li class="sidenav__item"><a href="<?= base_url().'Blog-List'?>" target="_blank"><i class="la la-plus-circle"></i><span> Blog</span></a></li> -->
                                <li class="sidenav__item"><a href="javascript:void(0);" data-toggle="modal" data-target="#help_modal"><i class="fa fa-question-circle"></i> <span> Help</span></a></li>
                                
                            </ul><!-- end ul -->
                        </nav>
                </div><!-- end col-lg-10 -->
            </div><!-- end row -->
        </div>
    </div><!-- end container-fluid -->
</div><!-- end header-menu-content -->
</header><!-- end header-menu-area -->
<?php $ses = $this->session->userdata('user_data'); ?>


<div class="dashboard-content-wrap aj-my-acount">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content dashboard-bread-content d-flex align-items-center justify-content-between">
                        <div class="user-bread-content d-flex align-items-center">
                            <div class="bread-img-wrap">
                                <?php if(empty($this->session->userdata('user_data')['image'])){ ?>
                                                            <img src="<?= base_url().'assets/user-assets/' ?>images/team7.jpg" alt="John Doe">
                                                        <?php }else{ ?>
                                                            <img src="<?= base_url().'uploads/profile/'.$this->session->userdata('user_data')['image'] ?>" alt="John Doe">
                                                        <?php } ?>
                            </div>
                            <div class="section-heading">
                                <h2 class="section__title font-size-30"><?= $this->session->userdata('user_data')['name'] ?></h2>
                                <div class="rating-wrap d-flex mt-2">
                                    <!-- <ul class="review-stars">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star-o"></span></li>
                                    </ul>
                                    <span class="star-rating-wrap">
                                        <span class="star__rating">4.2</span>
                                        <span class="star__count">(70)</span>
                                    </span> -->
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="aj-tebs">
                        <ul>
                            <li><a href="<?= base_url().'My-Account'?>" > Profile</a></li>
                            <li><a href="<?= base_url().'Edit-Profile'?>" >Edit Profile</a></li>
                            <li><a href="<?= base_url().'Change-Password'?>" class="active">Change Password</a></li>
                            <li><a href="<?= base_url().'Certificates'?>">Certificates</a></li>
                            <!-- <li><a href="<?= base_url().'Exam'?>">Exam</a></li> -->
                        </ul>
                    </div>
                    <div class="section-block">
                        
                    </div>
                </div>
            </div>
           
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">Change Password</h3>
                            <?= $this->session->flashdata('success'); ?>
                            
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="aj-b-contact-form-action">
                                    <form method="post" action="<?= base_url('User/change_user_psw'); ?>" id="user_password">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4">
                                                <div class="input-box">
                                                    <label class="label-text">Old Password<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="password" name="old_psw" id="old_psw" placeholder="Old Password">
                                                        <span toggle="#old_psw" class="fa fa-fw fa-eye field-icon toggle-password" style="position: absolute;top: 31%;left: 91%;"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-4 col-sm-4">
                                                <div class="input-box">
                                                    <label class="label-text">New Password<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="password" id="password" name="password" placeholder="New Password">
                                                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password" style="position: absolute;top: 31%;left: 91%;"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                             <div class="col-lg-4 col-sm-4">
                                                <div class="input-box">
                                                    <label class="label-text">Confirm Password<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="password" name="c_password" id="c_password" placeholder="Confirm Password">
                                                        <span toggle="#c_password" class="fa fa-fw fa-eye field-icon toggle-password" style="position: absolute;top: 31%;left: 91%;"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                           
                                        </div><!-- end row -->
                                        <div class="row mt-2 text-right">
                                            <div class="col-lg-12">
                                                <button class="theme-btn" type="submit">submit now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end card-box-shared-body -->
                    </div>
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-content mt-0 border-top-0 text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="copy__desc">&copy; 2020 Techeduxon. All Rights Reserved. by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs.</a></p>
                            </div><!-- end col-lg-12 -->
                        </div><!-- end row -->
                    </div><!-- end copyright-content -->
                </div><!-- end col-lg-12 -->
            </div>
        </div><!-- end container-fluid -->
    </div>
</section>
<?php include ('include/D_Footer.php'); ?>

<script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script>
    $(document).ready(function(){
    $('#user_password').validate({
                rules:{ 
                    
                    old_psw:{
                        required : true, 
                    },
                    
                   
                    password :{
                      required : true,
                      minlength : 6,
                    },
                    c_password : {
                        required : true,
                        minlength : 6,
                        equalTo : "#password"
                    },
                    
                },
                messages:{
                 
                old_psw:{
                    required: '<span style="color:red">Enter Your Old Password</span>',
                },
                
                password:{
                    required: '<span style="color:red">Enter Your Password</span>',
                    minlength : '<span style="color:"red">Enter Your Password min 6</span>',    
                },
                c_password:{
                  required: '<span style="color:red">Enter Confirm Password</span>',
                  minlength : '<span style="color:red">Enter Password To Confirm</span>',
                  equalTo :'<span style="color:red">Confirm Password Did Not Match With Password</span>',  
                },
                
                
                },
    });
});
</script>
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