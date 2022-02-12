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
    <script src="//code.tidio.co/avvxibed5pa05bcebfzj4unnnx62tqsg.js" async></script>
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
    <?php $ses = $this->session->userdata('user_data'); ?>
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
                  <div class="logo-right-button d-flex align-items-center">
                    <div class="header-action-button d-flex align-items-center">
                      <!-- <div class="contact-form-action mr-auto">
                        <form method="post">
                          <div class="input-box">
                            <div class="form-group">
                              <input class="form-control" type="text" name="search" placeholder="Search for anything" autocomplete="off">
                              <span class="la la-search search-icon"></span>
                            </div>
                          </div>
                          
                        </form>
                      </div> -->
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
                                      <a href="<?= base_url().'My-Account'?>" class="d-block">
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
                    <li class="sidenav__item"><a href="javascript:void(0);" onclick="tidioChatApi.open()"><i class="fa fa-question-circle"></i> <span> Help</span></a></li>
                    <!--  data-toggle="modal" data-target="#help_modal" -->
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
    <div class="dashboard-content-wrap aj-my-acount">
      <div class="container-fluid">
        <!-- <div class="row">
          <div class="col-lg-12">
              <h3 class="widget-title">My Courses</h3>
          </div>
          </div> -->
        <?php if(!empty($course)){ ?>
        <div class="row mt-2">
          <div class="col-lg-12">
            <div class="card-box-shared">
              <div class="card-box-shared-title">
                <h3 class="widget-title">My Courses</h3>
              </div>
              <div class="card-box-shared-body">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="section-tab section-tab-2">
                      <ul class="nav nav-tabs" role="tablist" id="review">
                        <li role="presentation">
                          <a href="#all-course" role="tab" data-toggle="tab" class="active" aria-selected="true">
                          All Courses
                          </a>
                        </li>
                        <li role="presentation">
                          <a href="#active-course" role="tab" data-toggle="tab" aria-selected="false">
                          Active Courses
                          </a>
                        </li>
                        <li role="presentation">
                          <a href="#Completes-Courses" role="tab" data-toggle="tab" aria-selected="false">
                          Completes Courses
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="dashboard-tab-content mt-5">
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show" id="all-course">
                          <div class="row">
                            <?php if(!empty($course)){ foreach($course as $val){ ?>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                              <div class="box-courses">
                                <div class="card-item ">
                                  <div class="card-image">
                                    <a href="javascript:void(0);" class="card__img">
                                    <?php if(!empty($val->image)){ ?>
                                    <img src="<?= base_url().'uploads/certificate/'.$val->image ?>" alt="" style="height: 165px;">
                                    <?php }else{ ?>
                                    <img src="<?= base_url().'assets/user-assets/' ?>images/img8.jpg" alt="" style="height: 165px;">
                                    <?php } ?>
                                    </a>
                                  </div>
                                  <div class="card-content">
                                    <h3 class="card__title">
                                      <a href="javascript:void(0);"><?= $val->title ?></a>
                                    </h3>
                                   
                                    <div class="progress-bar-wrap mb-1">
                                      <div class="progress-item course-complete-bar">
                                        <p class="skillbar-title">Complete</p>
                                        <div class="skillbar-box">
                                          <div class="skillbar" data-percent="<?php if (isset($val->per)) {
                                        echo  $val->per;
                                        }else{  echo  0;} ?>%">
                                            <div class="skillbar-bar skillbar-bar-1"></div>
                                          </div>
                                        </div>
                                        <div class="skill-bar-percent"><?php if (isset($val->per)) {
                                        echo  $val->per;
                                        }else{  echo  0;} ?>%</div>
                                      </div>
                                    </div>
                                    <div class="rating-wrap d-flex">
                                      <div class="rating-shared">
                                        <fieldset>
                                          <input type="radio" id="star5" name="rating1" value="5" data-course="<?= $val->id ?>" <?php if($val->avg_rating == 5){echo "checked";} ?>/><label for="star5" title="Outstanding"></label>
                                          <input type="radio" id="star4" name="rating1" value="4" data-course="<?= $val->id ?>" <?php if($val->avg_rating == 4){echo "checked";} ?>/><label for="star4" title="Very Good"></label>
                                          <input type="radio" id="star3" name="rating1" value="3" data-course="<?= $val->id ?>" <?php if($val->avg_rating == 3){echo "checked";} ?>/><label for="star3" title="Good"></label>
                                          <input type="radio" id="star2" name="rating1" value="2" data-course="<?= $val->id ?>" <?php if($val->avg_rating == 2){echo "checked";} ?>/><label for="star2" title="Poor"></label>
                                          <input type="radio" id="star1" name="rating1" value="1" <?php if($val->avg_rating == 1){echo "checked";} ?>/><label for="star1" title="Very Poor" data-course="<?= $val->id ?>"></label>
                                        </fieldset>
                                      </div>
                                      <p class="primary-color-3 ml-2">Leave a Rating</p>
                                    </div>
                                    <div class="btn-courses">
                                      <p class="courses-btn-r">
                                        <?php $type = explode(',', $val->type); ?> 
                                        <?php if(in_array('fullCourse', $type) || in_array('selfLearning', $type)){ ?>
                                        <a href="<?= base_url().'Self-Learning/'.$this->encrypt_id->encryptor('encrypt',$val->id).'?id='.$val->ordId ?>" class="theme-btn">Self Learning</a>
                                        <?php } ?>
                                        <?php if(in_array('fullCourse', $type) || in_array('liveClass', $type)){ ?>
                                        <a href="<?= base_url().'Live-Classes/'.$this->encrypt_id->encryptor('encrypt',$val->id).'?id='.$val->ordId ?>" class="theme-btn">Live Classes </a>
                                        <?php } ?>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php } }else{ ?>
                            <h6 style="color: red">No Course Found!.</h6>
                            <?php } ?>
                          </div>
                        </div>
                        <!-- end tab-pane-->
                        <div role="tabpanel" class="tab-pane fade" id="active-course">
                          <div class="row">
                            <?php if(!empty($course)){ foreach($course as $val){ ?>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                              <div class="box-courses">
                                <div class="card-item ">
                                  <div class="card-image">
                                    <a href="javascript:void(0);" class="card__img">
                                    <?php if(!empty($val->image)){ ?>
                                    <img src="<?= base_url().'uploads/certificate/'.$val->image ?>" alt="" style="height: 165px;">
                                    <?php }else{ ?>
                                    <img src="<?= base_url().'assets/user-assets/' ?>images/img8.jpg" alt="" style="height: 165px;">
                                    <?php } ?>
                                    </a>
                                  </div>
                                  <div class="card-content">
                                    <h3 class="card__title">
                                      <a href="javascript:void(0);"><?= $val->title ?></a>
                                    </h3>
                                   
                                    <div class="progress-bar-wrap mb-1">
                                      <div class="progress-item course-complete-bar">
                                        <p class="skillbar-title">Complete</p>
                                        <div class="skillbar-box">
                                          <div class="skillbar" data-percent="<?php if (isset($val->per)) {
                                        echo  $val->per;
                                        }else{  echo  0;} ?>%">
                                            <div class="skillbar-bar skillbar-bar-1"></div>
                                          </div>
                                        </div>
                                        <div class="skill-bar-percent"><?php if (isset($val->per)) {
                                        echo  $val->per;
                                        }else{  echo  0;} ?>%</div>
                                      </div>
                                    </div>
                                    <div class="rating-wrap d-flex">
                                      <div class="rating-shared">
                                        <fieldset>
                                          <input type="radio" id="star5" name="rating" value="5" data-course="<?= $val->id ?>" <?php if($val->avg_rating == 5){echo "checked";} ?>/><label for="star5" title="Outstanding"></label>
                                          <input type="radio" id="star4" name="rating" value="4" data-course="<?= $val->id ?>" <?php if($val->avg_rating == 4){echo "checked";} ?>/><label for="star4" title="Very Good"></label>
                                          <input type="radio" id="star3" name="rating" value="3" data-course="<?= $val->id ?>" <?php if($val->avg_rating == 3){echo "checked";} ?>/><label for="star3" title="Good"></label>
                                          <input type="radio" id="star2" name="rating" value="2" data-course="<?= $val->id ?>" <?php if($val->avg_rating == 2){echo "checked";} ?>/><label for="star2" title="Poor"></label>
                                          <input type="radio" id="star1" name="rating" value="1" <?php if($val->avg_rating == 1){echo "checked";} ?>/><label for="star1" title="Very Poor" data-course="<?= $val->id ?>"></label>
                                        </fieldset>
                                      </div>
                                      <p class="primary-color-3 ml-2">Leave a Rating</p>
                                    </div>
                                    <div class="btn-courses">
                                      <p class="courses-btn-r">
                                        <?php $type = explode(',', $val->type); ?> 
                                        <?php if(in_array('fullCourse', $type) || in_array('selfLearning', $type)){ ?>
                                        <a href="<?= base_url().'Self-Learning/'.$this->encrypt_id->encryptor('encrypt',$val->id).'?id='.$val->ordId ?>" class="theme-btn">Self Learning</a>
                                        <?php } ?>
                                        <?php if(in_array('fullCourse', $type) || in_array('liveClass', $type)){ ?>
                                        <a href="<?= base_url().'Live-Classes/'.$this->encrypt_id->encryptor('encrypt',$val->id).'?id='.$val->ordId ?>" class="theme-btn">Live Classes </a>
                                        <?php } ?>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php } }else{ ?>
                            <h6 style="color: red">No Course Found!.</h6>
                            <?php } ?>
                          </div>
                        </div>
                        <!-- end tab-pane-->
                        <div role="tabpanel" class="tab-pane fade" id="Completes-Courses">
                          <div class="row">
                            <h6 style="color: red">No Course Found!.</h6>
                          </div>
                        </div>
                        <!-- end tab-pane-->
                      </div>
                      <!-- end tab-content -->
                    </div>
                    <!-- end dashboard-tab-content -->
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="right-content-in mt-5">
                      <div class="progress-bar-wrap mb-1">
                        <p class="skillbar-title"><?= $pro ?>% of your Profile is Complete</p>
                        <div class="progress-item course-complete-bar">
                          <div class="skillbar-box">
                            <div class="skillbar" data-percent="<?= $pro ?>%">
                              <div class="skillbar-bar skillbar-bar-1"></div>
                            </div>
                            <!-- End Skill Bar -->
                          </div>
                          <div class="skill-bar-percent"><?= $pro ?>%</div>
                        </div>
                      </div>
                      <div class="content-box-invite">
                        <img src="<?= base_url().'uploads/home_images/'.$share->image ?>">
                        <ul>
                          <li><i class="fa fa-eercast" aria-hidden="true"></i><?= $share->title1 ?></li>
                          <li><i class="fa fa-eercast" aria-hidden="true"></i> <?= $share->title2 ?></li>
                          <li><i class="fa fa-eercast" aria-hidden="true"></i> <?= $share->title3 ?></li>
                          <li><a href="<?= $share->url ?>" class="theme-btn"><?= $share->btn_text ?></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end col-lg-8 -->
        </div>
        <!-- end row -->
        <?php }else{ ?>
        <div class="lendig-page">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-lg-8 col-xl-8">
              <div class="left-side-content">
                <p>Hi <?= $ses['name'] ?></p>
                <h5>Catch up with your peers! Pick a course and start learning</h5>
                <form action="">
                  <div class="form-in">
                    <div class="form-group">
                      <input class="form-control" type="text" name="search" placeholder="Search for a course..." id="myInput1" autocomplete="off">
                      <span class="la la-search search-icon"></span>
                      <ul id="myUL1">
                      </ul>
                    </div>
                  </div>
                  <div class="links">
                    <ul class="links-ul">
                      <?php if(!empty($shcourse)){foreach ($shcourse as $key => $row) { ?>
                      <li><a href="<?= base_url().'Course/'.$this->encrypt_id->encryptor('encrypt',$row['id']) ?>"><?= $row['title'] ?></a></li>
                      <?php } } ?>
                      <!-- <li><a href="javascript:void();">PRINCE2®</a></li>
                      <li><a href="javascript:void();">ITIL®</a></li>
                      <li><a href="javascript:void();">Digital</a></li>
                      <li><a href="javascript:void();">marketingData</a></li>
                      <li><a href="javascript:void();">scienceBig</a></li>
                      <li><a href="javascript:void();">DataPython</a></li>
                      <li><a href="javascript:void();">Android</a></li> -->
                      <li><a href="javascript:void();">Browse All..</a></li>
                    </ul>
                  </div>
                </form>
                <h4>BROWSE CATEGORY</h4>
                <div class="brows">
                  <ul class="brows-ul">
                    <li><a href="javascript:void(0);">Business</a></li>
                    <li><a href="javascript:void(0);">Technology</a></li>
                    <li><a href="javascript:void(0);">Vendor</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-4">
              <div class="right-content-14">
                <div class="right-content-in ">
                  <div class="progress-bar-wrap mb-1">
                    <p class="skillbar-title"><?= $pro ?>% of your Profile is Complete</p>
                    <div class="progress-item course-complete-bar">
                      <div class="skillbar-box">
                        <div class="skillbar" data-percent="<?= $pro ?>%">
                          <div class="skillbar-bar skillbar-bar-1"></div>
                        </div>
                        <!-- End Skill Bar -->
                      </div>
                      <div class="skill-bar-percent"><?= $pro ?>%</div>
                    </div>
                  </div>
                  <div class="content-box-invite">
                    <img src="<?= base_url().'uploads/home_images/'.$share->image ?>">
                    <ul>
                      <li><i class="fa fa-eercast" aria-hidden="true"></i><?= $share->title1 ?></li>
                      <li><i class="fa fa-eercast" aria-hidden="true"></i> <?= $share->title2 ?></li>
                      <li><i class="fa fa-eercast" aria-hidden="true"></i> <?= $share->title3 ?></li>
                      <li><a href="<?= $share->url ?>" class="theme-btn"><?= $share->btn_text ?></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
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
    <?php include ('include/D_Footer.php'); ?>
    <script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/progress-bar.js"></script>
    <script type="text/javascript">
      $(document).on('keyup', '#myInput1', function(e){
         e.preventDefault();  
         var keyword = $(this).val();
         $.ajax({  
              url:"<?php echo base_url('user/fetch_search'); ?>",  
              method:"POST",  
              data:{keyword:keyword},  
              success:function(data)  {  
               $('#myUL1').html(data);
              }  
         })  
      });
      
      $(document).on('change','input[type="radio"]',function(){
         $('.preloader').css('display','block');
         var course = $(this).attr('data-course');
         var rating = $(this).val();
         $.ajax({
             type:'post',
             data:{course:course,rating:rating},
             url:'<?= base_url().'User/saveCourseRating' ?>',
             dataType:'json',
             success:function(data){
                 $('.preloader').css('display','none')
                 if (data.status == 'success') {
                     swal('success',data.message,'success');
                 }else{
                     swal('error',data.message,'error');
                 }
             }
         })
      })
      
    </script>
  </body>
</html>