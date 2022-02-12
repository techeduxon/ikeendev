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
<?php include ('include/D_Header.php'); ?>
<?php //include ('include/Sidebar.php'); ?>
<section class="dashboard-area" >
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <!-- <li class="sidenav__item"><a href="<?= base_url().'My-Account'?>"><i class="la la-user"></i>My Profile</a></li> -->
                    <!-- <li class="sidenav__item"><a href="<?= base_url().'My-Courses'?>"><i class="la la-file-video-o"></i>My Courses</a></li> -->
                    <?php if(in_array('fullCourse', $type) || in_array('selfLearning', $type)){ ?>
                     <li class="sidenav__item"><a href="<?= base_url().'Self-Learning/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-graduation-cap"></i>self learning</a></li> 
                    <?php } ?>
                    <?php if(in_array('fullCourse', $type) || in_array('liveClass', $type)){ ?>
                     <li class="sidenav__item page-active"><a href="<?= base_url().'Live-Classes/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-book"></i>live classes</a></li> 
                     <?php } ?>
                     <?php if(in_array('fullCourse', $type) || in_array('assesment', $type)){ ?>
                     <li class="sidenav__item"><a href="<?= base_url().'Assessments/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-file-text"></i>assessment</a></li> 
                     <?php } ?>
                    <li class="sidenav__item"><a href="<?= base_url().'Certificate/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-diamond"></i>certificate</a></li>
                    <!-- <li class="sidenav__item"><a href="<?= base_url()?>"><i class="la la-power-off"></i> Logout</a></li> -->
                </ul>
            </div><!-- end side-menu-wrap -->
        </div>
    </div>
    <?php $ses = $this->session->userdata('user_data'); ?>

 <div class="dashboard-content-wrap aj-my-acount">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="widget-title">Live Classes When Click</h3>
                    <div class="content-hading">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <a href="javascript:void(0);" class="float-right colo-aj">Class Registration Policy</a> 
                    </div>
                </div>
            </div>
           
            <!-- <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-body">
                            <div class="">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 padin-dex">
                                        <div class="box-live-class">
                                            <h6>Designing a Responsive Mobile Website with Muse</h6>
                                            <div class="live-clas-box-a">
                                                <div class="left-side">
                                                    <div class="date-se">
                                                        <h5><i class="fa fa-calendar mr-2" aria-hidden="true"></i> Aug 22 Sat -Sep 06 Sun</h5>
                                                    </div>
                                                    <div class="time">
                                                        <h5><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> 09:00 - 23:00 (IST)</h5>
                                                    </div>
                                                </div>
                                                
                                                <div class="sec-slider-ch">
                                                    <div class="slider-in-carousel">
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0 active">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb1" class="chacdk-active" name="date" checked="">
                                                                        <label for="chb1">
                                                                            <h2>
                                                                                <small>SAT</small>
                                                                                <big>22</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb2" class="chacdk-active" name="date">
                                                                        <label for="chb2">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>23</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb3" class="chacdk-active" name="date">
                                                                        <label for="chb3">
                                                                            <h2>
                                                                                <small>MON</small>
                                                                                <big>24</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb4" class="chacdk-active" name="date">
                                                                        <label for="chb4">
                                                                            <h2>
                                                                                <small>TUE</small>
                                                                                <big>25</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb5" class="chacdk-active" name="date">
                                                                        <label for="chb5">
                                                                            <h2>
                                                                                <small>WED</small>
                                                                                <big>26</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb6" class="chacdk-active" name="date">
                                                                        <label for="chb6">
                                                                            <h2>
                                                                                <small>THU</small>
                                                                                <big>27</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb7" class="chacdk-active" name="date">
                                                                        <label for="chb7">
                                                                            <h2>
                                                                                <small>FIR</small>
                                                                                <big>28</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb7" class="chacdk-active" name="date">
                                                                        <label for="chb7">
                                                                            <h2>
                                                                                <small>SAT</small>
                                                                                <big>29</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb7" class="chacdk-active" name="date">
                                                                        <label for="chb7">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>30</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb7" class="chacdk-active" name="date">
                                                                        <label for="chb7">
                                                                            <h2>
                                                                                <small>MON</small>
                                                                                <big>31</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb7" class="chacdk-active" name="date">
                                                                        <label for="chb7">
                                                                            <h2>
                                                                                <small>TUE</small>
                                                                                <big>01</big>
                                                                                <small>SEP</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb7" class="chacdk-active" name="date">
                                                                        <label for="chb7">
                                                                            <h2>
                                                                                <small>WND</small>
                                                                                <big>02</big>
                                                                                <small>SEP</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb7" class="chacdk-active" name="date">
                                                                        <label for="chb7">
                                                                            <h2>
                                                                                <small>THE</small>
                                                                                <big>03</big>
                                                                                <small>SEP</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb7" class="chacdk-active" name="date">
                                                                        <label for="chb7">
                                                                            <h2>
                                                                                <small>FIR</small>
                                                                                <big>04</big>
                                                                                <small>SEP</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb7" class="chacdk-active" name="date">
                                                                        <label for="chb7">
                                                                            <h2>
                                                                                <small>SAT</small>
                                                                                <big>05</big>
                                                                                <small>SEP</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb7" class="chacdk-active" name="date">
                                                                        <label for="chb7">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>SEP</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="btn-reg text-center">
                                                <button class="theme-btn">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 padin-dex">
                                        <div class="box-live-class">
                                            <h6>Designing a Responsive Mobile Website with Muse</h6>
                                            <div class="live-clas-box-a">
                                                <div class="left-side">
                                                    <div class="date-se">
                                                        <h5><i class="fa fa-calendar mr-2" aria-hidden="true"></i> Aug 22 Sat -Sep 06 Sun</h5>
                                                    </div>
                                                    <div class="time">
                                                        <h5><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> 09:00 - 23:00 (IST)</h5>
                                                    </div>
                                                </div>

                                                <div class="sec-slider-ch">
                                                    <div class="slider-in-carousel">
                                                        <div class="itme-date">
                                                            <div class="active-item active-item1 active">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb01" class="chacdk-active1" name="date1" >
                                                                        <label for="chb01">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item1">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb02" class="chacdk-active1" checked="" name="date1">
                                                                        <label for="chb02">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item1 ">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb03" class="chacdk-active1" name="date1">
                                                                        <label for="chb03">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item1">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb04" class="chacdk-active1" name="date1">
                                                                        <label for="chb04">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item1">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb05" class="chacdk-active1" name="date1">
                                                                        <label for="chb05">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item1">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb06" class="chacdk-active1" name="date1">
                                                                        <label for="chb06">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item1">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb07" class="chacdk-active1" name="date1">
                                                                        <label for="chb07">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="btn-reg text-center">
                                                <button class="theme-btn">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 padin-dex">
                                        <div class="box-live-class">
                                            <h6>Designing a Responsive Mobile Website with Muse</h6>
                                            <div class="live-clas-box-a">
                                                <div class="left-side">
                                                    <div class="date-se">
                                                        <h5><i class="fa fa-calendar mr-2" aria-hidden="true"></i> Aug 22 Sat -Sep 06 Sun</h5>
                                                    </div>
                                                    <div class="time">
                                                        <h5><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> 09:00 - 23:00 (IST)</h5>
                                                    </div>
                                                </div>

                                                <div class="sec-slider-ch">
                                                    <div class="slider-in-carousel">
                                                        <div class="itme-date">
                                                            <div class="active-item active-item2 active">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb001" class="chacdk-active2" name="date2" checked="">
                                                                        <label for="chb001">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item2">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb002" class="chacdk-active2" name="date2">
                                                                        <label for="chb002">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item2">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb003" class="chacdk-active2" name="date2">
                                                                        <label for="chb003">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item2">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb004" class="chacdk-active2" name="date2">
                                                                        <label for="chb004">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item2">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb005" class="chacdk-active2" name="date2">
                                                                        <label for="chb005">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item2">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb006" class="chacdk-active2" name="date2">
                                                                        <label for="chb006">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item2">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb007" class="chacdk-active2" name="date2">
                                                                        <label for="chb007">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="btn-reg text-center">
                                                <button class="theme-btn">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 padin-dex">
                                        <div class="box-live-class">
                                            <h6>Designing a Responsive Mobile Website with Muse</h6>
                                            <div class="live-clas-box-a">
                                                <div class="left-side">
                                                    <div class="date-se">
                                                        <h5><i class="fa fa-calendar mr-2" aria-hidden="true"></i> Aug 22 Sat -Sep 06 Sun</h5>
                                                    </div>
                                                    <div class="time">
                                                        <h5><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> 09:00 - 23:00 (IST)</h5>
                                                    </div>
                                                </div>

                                                <div class="sec-slider-ch">
                                                    <div class="slider-in-carousel">
                                                        <div class="itme-date">
                                                            <div class="active-item active-item3 active">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb0001" class="chacdk-active3" name="date3" checked="">
                                                                        <label for="chb0001">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item3">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb0002" class="chacdk-active3" name="date3">
                                                                        <label for="chb0002">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item3">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb0003" class="chacdk-active3" name="date3">
                                                                        <label for="chb0003">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item3">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb0004" class="chacdk-active3" name="date3">
                                                                        <label for="chb0004">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item3">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb0005" class="chacdk-active3" name="date3">
                                                                        <label for="chb0005">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item3">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb0006" class="chacdk-active3" name="date3">
                                                                        <label for="chb0006">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="itme-date">
                                                            <div class="active-item active-item3">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chb0007" class="chacdk-active3" name="date3">
                                                                        <label for="chb0007">
                                                                            <h2>
                                                                                <small>SUN</small>
                                                                                <big>06</big>
                                                                                <small>AUG</small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="btn-reg text-center">
                                                <button class="theme-btn">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-8 --
                </div><!-- end row --
            </div> -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="widget-title">Registered Classes</h3>
                </div>
            </div>
            <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="card-box-shared">
                            <div class="card-box-shared-body">
                                <div class="">
                                <div class="row">
                                    <?php if(!empty($class)){ foreach($class as $val){ ?>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 padin-dex">
                                        <div class="box-live-class">
                                            <h6><?= $val['name'] ?></h6>
                                            <div class="live-clas-box-a">
                                                <div class="left-side">
                                                    <div class="date-se">
                                                        <h5><i class="fa fa-calendar mr-2" aria-hidden="true"></i><?= date('M d D',strtotime($val['state_date'])).' - '.date('M d D',strtotime($val['end_date'])) ?></h5>
                                                    </div>
                                                    <div class="time">
                                                        <h5><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> <?= date('h:i',strtotime($val['state_date'])).' - '.date('h:i',strtotime($val['end_date'])) ?></h5>
                                                    </div>
                                                </div>

                                                <div class="sec-slider-ch">
                                                    <div class="slider-in-carousel">
                                                        <div class="itme-date">
                                                            <div class="active-item active-item0b ">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="radio" id="chba01" class="chacdk-bag00" name="date4" >
                                                                        <label for="chba01">
                                                                            <h2>
                                                                                <small><?= date('D',strtotime($val['state_date'])) ?></small>
                                                                                <big><?= date('d',strtotime($val['state_date'])) ?></big>
                                                                                <small><?= date('M',strtotime($val['state_date'])) ?></small>
                                                                            </h2>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="text-right text-font">
                                                <a href="javascript:void(0);" class="flot-right">Session 10 of 20</a>
                                                <a href="javascript:void(0);">Download recordings</a>
                                            </div> -->
                                            <hr>
                                            <div class="btn-reg1 text-right">
                                                <!-- <button class="theme-btn chang-theme-btn" data-toggle="modal" data-target="#Unregister">Unregister</button> -->
                                                <?php if($val['state_date'] <= date('Y-m-d H:i:s') && $val['end_date'] >= date('Y-m-d H:i:s') ){ ?>
                                                    <a href="<?= base_url().'User/liveClass?u='.$val['join_url'] ?>" target="_blank" class="theme-btn" >Attend</a>
                                                <?php }else if($val['end_date'] > date('Y-m-d H:i:s')){ ?>
                                                    <button class="theme-btn">Attend</button>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } ?>
                                    <!-- data-toggle="modal" data-target="#Attend" -->

                                </div>
                           </div>
                      </div>
                    </div><!-- end col-lg-8 -->
                </div><!-- end row -->
            </div>
            
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
<div id="Unregister" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">CEH (V10) - Certified Ethical Hacker</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p><b>Today's Class :</b> Yet to Start</p>
        <p><b>Start time :</b> 21:00 (IST)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div id="Attend" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">CEH (V10) - Certified Ethical Hacker</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p><b>Today's Class :</b> Yet to Start</p>
        <p><b>Start time :</b> 21:00 (IST)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php include ('include/D_Footer.php'); ?>

    <script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/owl.carousel.min.js"></script>

<!-- <script type="text/javascript">
    $('.chacdk-active').change('.chacdk-active',function(){
         var a= $('input[name="date"]:checked').val();
         var id = $(this).attr('id')
          if(a == 'on'){
            $('.active-item').removeClass('active');
            var f = $('#'+id).parent().parent().parent().addClass('active')
            console.info(f)
          }else{
            
          }
        })
</script> -->

<script type="text/javascript">
    $('.chacdk-active').change('.chacdk-active',function(){
         var a= $('input[name="date"]:checked').val();
         var id = $(this).attr('id')
          if(a == 'on'){
            $('.active-item0').removeClass('active');
            var f = $('#'+id).parent().parent().parent().addClass('active')
            console.info(f)
          }else{
            
          }

      });
          $('.chacdk-active1').change('.chacdk-active1',function(){
          var a= $('input[name="date1"]:checked').val();
         var id = $(this).attr('id')
          if(a == 'on'){
            $('.active-item1').removeClass('active');
            var f = $('#'+id).parent().parent().parent().addClass('active')
            console.info(f)
          }else{
            
          }
      });
         $('.chacdk-active2').change('.chacdk-active2',function(){    
          var a= $('input[name="date2"]:checked').val();
         var id = $(this).attr('id')
          if(a == 'on'){
            $('.active-item2').removeClass('active');
            var f = $('#'+id).parent().parent().parent().addClass('active')
            console.info(f)
          }else{
            
          }

      });
          $('.chacdk-active3').change('.chacdk-active3',function(){

          var a= $('input[name="date3"]:checked').val();
         var id = $(this).attr('id')
          if(a == 'on'){
            $('.active-item3').removeClass('active');
            var f = $('#'+id).parent().parent().parent().addClass('active')
            console.info(f)
          }else{
            
          }
        });

          $('.chacdk-active4').change('.chacdk-active4',function(){

          var a= $('input[name="date4"]:checked').val();
         var id = $(this).attr('id')
          if(a == 'on'){
            $('.active-item4').removeClass('active');
            var f = $('#'+id).parent().parent().parent().addClass('active')
            console.info(f)
          }else{
            
          }
        });
</script>


</body>

</html>