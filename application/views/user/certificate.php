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
                     <li class="sidenav__item "><a href="<?= base_url().'Live-Classes/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-book"></i>live classes</a></li> 
                     <?php } ?>
                     <li class="sidenav__item"><a href="<?= base_url().'Assessments/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-file-text"></i>assessment</a></li> 
                    <li class="sidenav__item page-active"><a href="<?= base_url().'Certificate/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-diamond"></i>certificate</a></li>
                    <!-- <li class="sidenav__item"><a href="<?= base_url()?>"><i class="la la-power-off"></i> Logout</a></li> -->
                </ul>
            </div><!-- end side-menu-wrap -->
        </div>
    </div>
    <?php $ses = $this->session->userdata('user_data'); ?>

<div class="dashboard-content-wrap aj-my-acount">
        <div class="container-fluid">
            
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">Certificate</h3>
                        </div>
                        <div class="card-box-shared-body">

                          <?php if ($cmplt == 'No') { ?>
                          <div class="row justify-content-center">
                            <div class="col-lg-6">
                              <div class="Certificate-box-card">
                                <div class="image">
                                  <img src="<?= base_url().'uploads/certificate/'.$cDetail->certificate ?>">
                                </div>  
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="Certificate-box-card"> 
                                <div class="Certificate-content">
                                    <h2>To Unlock Your Certificate</h2>
                                    <h4>Complete one of these</h4>
                                    <div class="full-dis">
                                      <div>
                                        <h3>Complete 50% Self-Learning Videos</h3>
                                         <p><a href="javascript:void(0);"><?= $percentage ?>% Completed </a></p> 
                                      </div>

                                      <div>
                                        <h3>Completed Assesment</h3>
                                         <p><a href="javascript:void(0);"><?= $cDetail->complete_assesment ?> </a></p> 
                                      </div>
                                      <p class="line-ch"></p>

                                      <p class="cours-thes">Complete All of These</p>
                                      <p class="text-center mt-3">
                                        <a href="javascript:void(0);" class="theme-btn"  data-toggle="modal" data-target="#Certificate1 ">Apply For Certificate</a>
                                      </p>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php } ?>




                        <?php if ($cmplt == 'Yes') { ?>
                          <div class="row justify-content-center">
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                              <div class="Certificate-new-box">
                                <div class="certificate-bec" style="background-image: url(<?= base_url().'assets/user-assets/images'?>/Certificate-3.png);">
                                        <h6 class="name"><?= $ses['name'] ?></h6>
                                        <h6 class="courses-name"><?= $cDetail->title ?></h6>
                                        <p class="date"><?= date('d-M-Y') ?> </p>
                                    </div>
                              </div>  
                            </div>
                            <div class="col-12 col-md-8">
                              <!-- <p class="text-center mt-4"><a href="javascript:void(0);"  class="theme-btn">Print</a></p> -->
                            </div>
                          </div>
                        <?php } ?>
                       </div>
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


<div id="Certificate1" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-certificate">
                    <div class="second-c">
                     
                            <div class="row justify-content-center">
                              <div class="col-lg-12">
                                <div class="Certificate-box-card">
                                  <div class="image">
                                    <img src="<?= base_url().'uploads/certificate/certificate-5052-jpeg' ?>">
                                  </div>  
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="Certificate-box-card"> 
                                  <div class="Certificate-content">
                                      <h2>To Unlock Your Certificate</h2>
                                      <h4>Complete one of these</h4>
                                      <div class="full-dis">
                                        <div>
                                          <h3>Complete 50% Self-Learning Videos</h3>
                                          <p><!-- <a href="javascript:void(0);">Yet to Start </a> --></p> 
                                        </div>

                                        <div>
                                          <h3>Completed <?= $percentage ?>%  Self-Learning Video</h3>
                                          <!-- <p><a href="javascript:void(0);">20% Completed</a></p>  -->
                                        </div>
                                        <p class="line-ch"></p>

                                        <p class="cours-thes">Complete This</p>
                                          <p class="line-ch2"></p>

                                          <!-- <div>
                                            <h3>Completed 1 Project</h3>
                                            <p><a href="javascript:void(0);">Yet to Start </a></p> 
                                          </div> -->
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                         

                    </div>
                </div>
            
        </div>
      
    </div>

  </div>
</div>
<?php include ('include/D_Footer.php'); ?>

<script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/progress-bar.js"></script>




</body>

</html>