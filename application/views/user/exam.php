<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ikeendev - Exam</title>
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/fancybox.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/tooltipster.bundle.css">


    
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/D_Header.php'); ?>
<section class="dashboard-area" >
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li class="sidenav__item"><a href="<?= base_url().'My-Account'?>"><i class="la la-user"></i>My Profile</a></li>
                    <li class="sidenav__item"><a href="<?= base_url().'My-Courses'?>"><i class="la la-file-video-o"></i>My Courses</a></li>
                     <li class="sidenav__item page-active"><a href="<?= base_url().'Self-Learning'?>"><i class="la la-bolt"></i>self learning</a></li> 
                     <!-- <li class="sidenav__item"><a href="<?= base_url().'Live-Classes'?>"><i class="la la-bookmark"></i>live classes</a></li>  -->
                     <li class="sidenav__item"><a href="<?= base_url().'Assessments/'.$this->uri->segment(2)?>"><i class="la la-graduation-cap"></i>assessment</a></li> 
                    <li class="sidenav__item"><a href="<?= base_url().'Certificate'?>"><i class="la la-plus-circle"></i>certificate</a></li>
                    <li class="sidenav__item"><a href="<?= base_url()?>"><i class="la la-power-off"></i> Logout</a></li>
                </ul>
            </div><!-- end side-menu-wrap -->
        </div>
    </div>
    <?php $ses = $this->session->userdata('user_data'); ?>

<div class="dashboard-content-wrap aj-my-acount">
        <div class="container-fluid">
            
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">Exam</h3>
                        </div>
                        <div class="card-box-shared-body exam_sec">
                            <div class="user-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5><?= $data->exam_name ?></h5>
                                        <div class="exam_box">
                                            <div class="content">
                                                <?= $data->exa_description ?>

                                                <div class="exam-before">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <div class="course_name">
                                                                <h6>Course</h6>
                                                                <h4><?= $data->title ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="exam_name">
                                                                <h6>Book Exam Befor</h6>
                                                                <h4><?= date('d-m-Y',strtotime($data->last_date)) ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="request_name">
                                                                <?php if($ordDetail->apply_for_eaxm == 0){ ?>
                                                                <a class="theme-btn" href="<?= base_url().'User/RequestForExam/'.$this->uri->segment(2) ?>"> REQUEST EXAM</a>
                                                                <?php }else{ ?>
                                                                    <button class="theme-btn"> REQUESTED</button>
                                                                <?php } ?>
                                                                <!-- <P>Certificate Not Unlocked</P> -->
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
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




</body>

</html>