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
                     </div>
                     <!-- end col-lg-2 -->
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
                                       </div>
                                       <!-- end input-box -->
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
                                                </div>
                                                <!-- end mess__title -->
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
                                                </div>
                                                <!-- end mess__body -->
                                             </div>
                                             <!-- end mess-dropdown -->
                                          </div>
                                          <!-- end dropdown-menu -->
                                       </div>
                                       <!-- end dropdown -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end logo-right-button -->
                        </div>
                        <!-- end menu-wrapper -->
                        <nav class="main-menu new-body-hed" >
                           <ul>
                              <li class="sidenav__item page-active"><a href="<?= base_url().'My-Account'?>"><i class="la la-user"></i><span> My Profile</span></a></li>
                              <li class="sidenav__item"><a href="<?= base_url().'My-Courses'?>"><i class="la la-file-video-o"></i><span> My Courses</span></a></li>
                              <li class="sidenav__item"><a href="<?= base_url().'Categories'?>" target="_blank" ><i class="fa fa-comments-o"></i><span> Community</span></a></li>
                              <!-- <li class="sidenav__item"><a href="<?= base_url().'Blog-List'?>" target="_blank"><i class="la la-plus-circle"></i><span> Blog</span></a></li> -->
                              <li class="sidenav__item"><a href="javascript:void(0);" data-toggle="modal" data-target="#help_modal"><i class="fa fa-question-circle"></i> <span> Help</span></a></li>
                           </ul>
                           <!-- end ul -->
                        </nav>
                     </div>
                     <!-- end col-lg-10 -->
                  </div>
                  <!-- end row -->
               </div>
            </div>
            <!-- end container-fluid -->
         </div>
         <!-- end header-menu-content -->
      </header>
      <!-- end header-menu-area -->
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
                           <h2 class="section__title font-size-30"><?= $ses['name'] ?></h2>
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
               </div>
               <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row mt-4">
               <div class="col-lg-12">
                  <div class="aj-tebs">
                     <ul>
                        <li><a href="<?= base_url().'My-Account'?>" > Profile</a></li>
                        <li><a href="<?= base_url().'Edit-Profile'?>" >Edit Profile</a></li>
                        <li><a href="<?= base_url().'Change-Password'?>" >Change Password</a></li>
                        <li><a href="<?= base_url().'Certificates'?>" class="active">Certificates</a></li>
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
                        <h3 class="widget-title">Certificates</h3>
                     </div>
                     <div class="card-box-shared-body certcates-sec">
                        <div class="user-form">
                           <h3><span>Certificate</span></h3>
                           <!-- <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-upload" aria-hidden="true" ></i> Certificates Upload</button> -->
                           <div class="row" style="margin-top: 10px">
                              <?php if (!empty($data)) { foreach ($data as $key => $value) { ?>  
                              <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                 <div class="certificate-box-12">
                                    <div class="certificate-bec" style="background-image: url(<?= base_url().'assets/user-assets/images'?>/Certificate-3.png);">
                                       <h6 class="name"><?= $ses['name'] ?></h6>
                                       <h6 class="courses-name"><?= $value->title ?></h6>
                                       <p class="date"><?= date('d-M-Y') ?> </p>
                                    </div>
                                    <div class="courses-name-certificate">
                                       <h6 class="mb-3"><?= $value->title ?></h6>
                                    <?php if($value->complete == 0){ ?>
                                       <a href="<?= base_url().'User/requested_unlock/'.$value->id ?>" class="theme-btn">Apply For Certificate</a>
                                    <?php }else if($value->complete == 1){ ?>
                                        <a href="javascript:void(0);" class="theme-btn">Unlocked</a>
                                    <?php }else{ ?>
                                        <a href="javascript:void(0);" class="theme-btn">Requested For Unlock!.</a>
                                    <?php } ?>
                                    </div>
                                 </div>
                              </div>
                              <?php }  }else{ ?>
                                <h4 style="color: red;font-family: times new roman">
                                    No Certificate Unlock Yet!.
                                </h4>
                              <?php } ?>
                              <!-- htana he -->
                              <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                 <div class="certificate-box-12">
                                    <div class="certificate-bec" style="background-image: url(<?= base_url().'assets/user-assets/images'?>/Certificate-3.png);">
                                       <h6 class="name">yash</h6>
                                       <h6 class="courses-name">dfsdfsd</h6>
                                       <p class="date">20- 02-2021</p>
                                    </div>
                                    <div class="courses-name-certificate">
                                       <h6 class="mb-3">adfdffds</h6>
                                       <a href="javascript:void(0);" class="theme-btn"  data-toggle="modal" data-target="#Certificate">Apply For Certificate</a>
                                    </div>
                                 </div>
                              </div> -->
                              <!-- htana he -->
                           </div>
                        </div>
                     </div>
                     <!-- end card-box-shared-body -->
                  </div>
               </div>
               <!-- end col-lg-8 -->
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-lg-12">
                  <div class="copyright-content mt-0 border-top-0 text-center">
                     <div class="row">
                        <div class="col-lg-12">
                           <p class="copy__desc">&copy; 2020 Techeduxon. All Rights Reserved. by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs.</a></p>
                        </div>
                        <!-- end col-lg-12 -->
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- end copyright-content -->
               </div>
               <!-- end col-lg-12 -->
            </div>
         </div>
         <!-- end container-fluid -->
      </div>
      </section>
      <div id="Certificate" class="modal fade" role="dialog">
         <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <div class="modal-certificate">
                     <div class="titel">
                        <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5>
                        <h3>Lorem ipsum, dolor</h3>
                     </div>
                     <div class="content">
                        <div class="row">
                           <div class="col-12 col-sm-12 col-md-6">
                              <img src="<?= base_url().'/uploads'?>//Certificate.jpg" alt="">
                           </div>
                           <div class="col-12 col-sm-12 col-md-6">
                              <div class="form">
                                 <form action="">
                                    <div class="form-group">
                                       <label for="email">Enter your Desired Name On Certificate</label>
                                       <input type="email" readonly     class="form-control" id="email" value="yash Kushwah">
                                    </div>
                                    <ul class="certificate1">
                                       <li><a href="javascript:void(0);" class="theme-btn linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i> linkedin</a></li>
                                       <li><a href="javascript:void(0);" class="theme-btn">Download</a></li>
                                    </ul>
                                    <div class="content-f">
                                       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                       <ul>
                                          <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                          <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       </ul>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal" id="myModal">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="modal-title">Upload</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="modal-body">
                  <form method="post" enctype="multipart/form-data" action="<?= base_url('User/update_certificate'); ?>" >
                     <div class="form-group">
                        <label for="file">Certificate Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Certificate Name" required="">
                     </div>
                     <div class="form-group">
                        <label for="file">Upload Certificate</label>
                        <input type="file" name="file" class="form-control" required="">
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php include ('include/D_Footer.php'); ?>
      <script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
      <script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>
   </body>
</html>