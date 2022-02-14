<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ikeendev - Course</title>
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/fancybox.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/tooltipster.bundle.css">
    <style type="text/css">
        
    .read-more-content1 {
        height: 200px;
        width: 100%;
        overflow: hidden;
        text-align: justify;
        white-space: break-spaces;
    }
    .read-more-content1.active {
        display: block!important;
        height: auto!important;
    }

    </style>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/Header.php'); ?>
 <section class="sec-slider">
     <div class="sec-top-0">
            <div class="slide-top-sec single-slide-item single-slide-item-2 slide-bg5" style="background-image: url('<?= base_url().'uploads/home_images/'.$head->image ?>');">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="contect-form-in top-form-fild">
                                <h4 class="text-center mb-3"><?= $courses['title'] ?></h4>
                                 <?php  
                                $cr = $this->session->userdata('currency');
                                $sm = $this->session->userdata('symbol'); 
                                if (!empty($sm)) {
                                  $amt = $sm.' '.$courses['msp']*$cr;
                                 }else{
                                  $amt = '$'.' '.$courses['msp']; 
                                 } 
                                  ?>
                                <div class=" price-name"><b><?= $amt; ?></b> <small class="float-right"><a href="javascript:void(0);" data-toggle="modal" data-target="#currency_modal">Change Currency</a></small></div>
                                <hr>
                            	<div class="content-top">
                            		<ul>
                            			<?= $courses['course_highlight'] ?>
                            		</ul>
                            		<h5>Classes starting from:-</h5>
                            		<p><i class="fa fa-calendar" aria-hidden="true"></i> <?= date('jS -M-yy',strtotime($courses['starting_date'])) ?></p>
                                    <!-- <h5><a href="javascript:void(0);">SHOW ALL CLASSES</a></h5> -->
                                    <?php if(!empty($this->session->userdata('user_data'))){ ?>
                            		<p class="btn-calss"><a href="<?= base_url().'Cart/'.$this->uri->segment(2) ?>" class="btn-t1">ENROLL NOW</a></p>
                                    <?php }else{ ?>
                                    <p class="btn-calss"><a href="javascript:void(0);" class="btn-t1" data-toggle="modal" data-target="#Enrollnow">ENROLL NOW</a></p>
                                    <?php } ?>
                            	</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="right-slider-sewc">
                                <img src="<?= base_url().'uploads/certificate/'.$courses['image'] ?>" style="height: 116px;width: 250px;">
                                <div class="content">
                                    <a href="javascfript:void(0);" class="theme-btn float-right mt-4" data-toggle="modal" data-target="#Enquirynow"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                                    <h6 class="name-of-right float-right mt-2">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6>Have Queries? Talk to us</h6>
                                                <p><a href="javascript:void(0);">+91 99999-99999</a></p>
                                            </div>
                                        </div>
                                    </h6>
                                    <!-- <a href="<?= base_url().'uploads/curriculum_pdf/'.$courses['curriculum_pdf'] ?>" class="theme-btn float-right" download><i class="fa fa-download" aria-hidden="true"></i> Download</a> -->
                                    <h2><?= $courses['course_title'] ?></h2>
                                    <h6><?= $courses['course_subtitle1'] ?></h6>
                                </div>
                                <div class="content-2">
                                    <h6><?= $courses['course_subtitle2'] ?></h6>
                                    <div class="slider-stic-carousel">
                                        <?php if(!empty($batches)){ ?>
                                        <?php foreach ($batches as $key => $batche) { ?>
                                            
                                        
                                        <div class="item-cord">
                                            <div class="left">
                                                <h3><?= date('jS-M',strtotime($batche['start_date'])) ?></h3>
                                                <h3>-<?= date('jS-M',strtotime($batche['end_date'])) ?></h3>
                                            </div>

                                            <div class="right">
                                                <h4><i class="fa fa-desktop" aria-hidden="true"></i> <?= $batche['name'] ?></h4>
                                                <h4><i class="fa fa-free-code-camp" aria-hidden="true"></i> <?= $batche['type'] ?></h4>
                                            </div>
                                        </div>
                                    <?php } } ?>
                                        
                                        <!-- <div class="item-cord">
                                            <div class="left">
                                                <h3>Aug</h3>
                                                <p>31-31</p>
                                                <p>09:00 AM</p>
                                                <p>05:00 PM</p>
                                            </div>

                                            <div class="right">
                                                <h4><i class="fa fa-desktop" aria-hidden="true"></i> Online Weekday</h4>
                                                <h4><i class="fa fa-free-code-camp" aria-hidden="true"></i> Full Day</h4>
                                            </div>
                                        </div> -->          
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
 </section>

<section class="course-sec-1">

    <div class="container">

        
        <div class="sec-top-2">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="f4-sec">
                        <div class="content-left-sec">
                            <span class="left-befo" style="background-color: #f4710a;"></span>
                            <h4><?= $courses['section1'] ?></h4>
                             <div class="read-more-content1 a1" ids="1"><p><?= $courses['section1desc'] ?></p></div>
                             <?php if (strlen($courses['section1desc']) > 850) { ?>
                             <a href="javascript:void(0);" idd="a1" class="hide-nshow-read1">Read More</a>
                             <?php } ?>
                             
                            <!-- <a href="javascript:void(0);">Read more</a> -->
                        </div>
                        <div class="content-left-sec">
                            <span class="left-befo" style="background-color: #0571bb;"></span>

                            <h4><?= $courses['section2'] ?></h4>
                            <div class="read-more-content1 a1" ids="1"><p><?= $courses['section2desc'] ?></p>
                            </div>
                            <?php if (strlen($courses['section1desc']) > 850) { ?>
                             
                            <a href="javascript:void(0);" idd="a1" class="hide-nshow-read1">Read More</a>
                            <?php } ?>
                             
                            <!-- <a href="javascript:void(0);">Read more</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="contect-form-in">
                        <h4 class="text-center mb-3">Contect Us For HELP</h4>

                        <form id="contactform" method="POST" >
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" id="name" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="E-mail">
                                        <input class="form-control" type="hidden" name="from_page" value="course-detail">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="countary" id="countary" placeholder="Country">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="contact" placeholder="Phone No." onkeypress="return isNumber(event)">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <select class="form-control" name="option">
                                            <option>Technology</option>
                                            <option>Technology</option>
                                            <option>Technology</option>
                                            <option>Technology</option>
                                            <option>Technology</option>
                                            <option>Technology</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" name="message" placeholder="Write message"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <button class="theme-btn" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
           <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="left-sec">
                        <?php if(!empty($tabbar)){ ?>
                        <div class="section-tab margin-top-28px margin-bottom-55px">
                            <ul class="nav nav-tabs chang-li-allteb" role="tablist" id="review">
                                <?php $i=1; foreach($tabbar as $val){ ?>
                                <li role="presentation" class="teb-bar-a teb-bar-a<?= $i ?>">
                                    <!-- <a href="#tab<?= $i ?>" role="tab" data-toggle="tab" class="theme-btn <?php if($i==1){ ?> active<?php } ?>" aria-selected="true"> -->
                                    <a href="javascript:void(0);"  class="theme-btn <?php if($i==1){ ?> active<?php } ?>">
                                       
                                        <img src="<?= base_url().'uploads/curriculum_pdf/'.$val['image'] ?>">
                                        <div class="d-sec">
                                            <span><?= $val['title1'] ?></span>
                                            <small><?= $val['title2'] ?></small>
                                        </div>
                                    </a>
                                </li>
                                <?php $i++;} } ?>

                                <!-- <li role="presentation" class="teb-bar-a">
                                    <a href="#tab2" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                        <img src="<?= base_url().'assets/user-assets/images'?>/Graph.png">
                                        <div class="d-sec">
                                            <span>design  </span>
                                            <small>Find the right instructor for you</small>
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation" class="teb-bar-a">
                                    <a href="#tab3" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                        <img src="<?= base_url().'assets/user-assets/images'?>/Graph.png">
                                        <div class="d-sec">
                                            <span>development </span>
                                            <small>Find the right instructor for you</small>
                                        </div>

                                    </a>
                                </li>
                                <li role="presentation" class="teb-bar-a">
                                    <a href="#tab4" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                        <img src="<?= base_url().'assets/user-assets/images'?>/Graph.png">
                                        <div class="d-sec">
                                            <span>web  </span>
                                            <small>Find the right instructor for you</small>
                                        </div>

                                    </a>
                                </li> -->
                                <!-- <li role="presentation" class="teb-bar-a"> 
                                    <a href="#tab5" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                        <img src="<?= base_url().'assets/user-assets/images'?>/Graph.png">
                                        <div class="d-sec">
                                            <span>marketing  </span>
                                            <small>Find the right instructor for you</small>
                                        </div>
                                    </a>
                                </li> -->
                            </ul>
                        </div><!-- end section-tab -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                           <div class="f3-sec">
                              <div class="section-heading">
                                 <h4 class="section__title">Course Outline</h4>
                                 <span class="section-divider"></span>
                              </div>
                              <div class="row">
                                 <div class="col-12 col-lg-7">
                                    <div class="sec-drop">
                                       <div class="faq-body">
                                          <div class="accordion accordion-shared accordion-shared-2" id="accordionExample">
                                            <?php if(!empty($outLine)){ $i=0; foreach($outLine as $val){ ?>
                                             <div class="card">
                                                <div class="card-header" id="heading<?= $i ?>">
                                                   <h2 class="mb-0">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $i ?>" aria-expanded="false" aria-controls="collapse<?= $i ?>">
                                                      <i class="fa fa-angle-up"></i>
                                                      <i class="fa fa-angle-down"></i>
                                                     <?= $val['title'] ?>
                                                      </button>
                                                   </h2>
                                                </div>
                                                <!-- end card-header -->
                                                <div id="collapse<?= $i ?>" class="collapse" aria-labelledby="heading<?= $i ?>" data-parent="#accordionExample">
                                                   <div class="card-body">
                                                      <p><?= $val['detail'] ?></p>
                                                   </div>
                                                   <!-- end card-body -->
                                                </div>
                                                <!-- end collapse -->
                                             </div>
                                             <?php $i++;}} ?>
                                          </div>
                                          <!-- end accordion -->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-5">
                                    <div class="vedio-ifrem">
                                       <?= $courses['video'] ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="f2-sec">
                              <div class="sec-training">
                                 <div class="section-heading">
                                    <h4 class="section__title"><?= $courses['section3'] ?></h4>
                                    <span class="section-divider"></span>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-7">
                                    <div class="sec-training-1">
                                       <div class="left">
                                          <div class="se-iamge">
                                             <img src="<?= base_url().'uploads/certificate/'.$courses['resources'] ?>">
                                          </div>
                                          <div class="content">
                                             <h4><?= $courses['section3subtitle'] ?></h4>
                                          </div>
                                       </div>
                                       <div class="list-content">
                                          <p><?= $courses['section3desc'] ?></p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-5">
                                    <div class="certificate">
                                       <img src="<?= base_url().'uploads/certificate/' ?><?= $courses['certificate'] ?>">
                                    </div>
                                    <p class="text-center pt-2"><small><a href="javascript:void(0);" data-toggle="modal" data-target="#Zoom_certificate">Click to Zoom</a></small></p>
                                 </div>
                              </div>
                           </div>
                           <div class="f1-sec">
                              <div class="section-heading">
                                 <h4 class="section__title">Reviews</h4>
                                 <span class="section-divider"></span>
                              </div>
                              <div class="slider-review-carousel">
                              <?php if(!empty($review)){foreach($review as $val){ ?>
                                 <div class="slider-review-item">
                                    <div class="left-side">
                                       <img src="<?= base_url().'uploads/curriculum_pdf/'.$val['image'] ?>">
                                    </div>
                                    <div class="right-side">
                                       <p><?= $val['detail'] ?></p>
                                       <h3><?= $val['title'] ?></h3>
                                       <h6><?= $val['title2'] ?></h6>
                                    </div>
                                 </div>
                              <?php } } ?>
                              </div>
                           </div>
                        </div>
                    </div>
                    
                        
                    </div>
                </div>  
            </div>
        </div>
</section>
<div class="modal fade" id="Enrollnow" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">ENROLL NOW</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          	<div class="enroll-form a29-enroll-form">
          		<form action="<?= base_url().'Add-New-User/'.$this->uri->segment(2) ?>" method="post" id="enroll-form">
		            <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group a29-form-group">
		                        <input class="form-control" name="e_email" type="email" placeholder="E-mail" required="required">
		                    </div>
		                </div>
		            </div>
		            <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group aj-form-group">
		                        <select class="form-control">
		                            <option>IN</option>
		                            <option>UK</option>
		                            <option>US</option>
		                            <option>PK</option>
		                        </select>
		                    	<input type="text" class="form-control form-control1" placeholder="+91" name="ph_no">
		                    	<input type="text" name="E_phone_no" minlength="7" maxlength="13" placeholder="Phone Number" class="form-control form-control2" required="required" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
		                    </div>
		                    
		                </div>
		            </div>
		            <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group">
		                    	<!-- <a href="<?= base_url().'Cart'?>"  class="theme-btn" >Start Learning</a> -->
		                        <button class="theme-btn" type="submit">Start Learning</button>
		                    </div>
		                </div>
		            </div>
		        </form>
          	</div>
        </div>
      </div>     
    </div>
  </div>
  
</div>

<div class="modal fade" id="Enquirynow" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Enquiry Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          	<div class="enroll-form a29-enroll-form">
          		<form action="<?= base_url().'User/SaveCourseInquiry' ?>" method="post" id="download_form">
                    <input type="hidden" name="course" value="<?= $courses['id'] ?>">
                    <input type="hidden" name="filePath" value="<?= 'uploads/curriculum_pdf/'.$courses['curriculum_pdf'] ?>">
		            <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group a29-form-group">
		                        <input class="form-control" name="name" type="text" placeholder="Name" required="required">
		                    </div>
		                </div>
                    </div>
                    <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group a29-form-group">
		                        <input class="form-control" name="email" type="email" placeholder="E-mail" required="required">
		                    </div>
		                </div>
                    </div>
                    <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group a29-form-group">
		                        <input class="form-control" name="contact" type="tel" placeholder="Contact Number" required="required">
		                    </div>
		                </div>
		            </div>
		            
		            <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group">
		                        <button class="theme-btn ddde" type="button">Download</button>
		                    </div>
		                </div>
		            </div>
		        </form>
          	</div>
        </div>
      </div>     
    </div>
  </div>
  
</div>


<div class="modal" id="Zoom_certificate">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="<?= base_url().'uploads/certificate/' ?><?= $courses['certificate'] ?>">                                              
      </div>
    </div>
</div>

<div class="modal fade" id="currency_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="    padding-top: 15%;">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Currency</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <div class="row">
            <div class="col-12 form-group">
                <select id="CURR_FR" class="postfix form-control">
                        <option value="INR" selected >India</option>
                        <option value="USD" <?php if ($this->session->userdata('country') == 'USD'): ?> selected <?php endif ?> >US(CDT)</option>
                        <option value="USD"  <?php if ($this->session->userdata('country') == 'USD'): ?> selected <?php endif ?>>US(EDT)</option>
                        <option value="USD"  <?php if ($this->session->userdata('country') == 'USD'): ?> selected <?php endif ?>>US(MDT)</option>
                        <option value="USD"  <?php if ($this->session->userdata('country') == 'USD'): ?> selected <?php endif ?>>US(PDT)</option>
                        <option value="GBP"  <?php if ($this->session->userdata('country') == 'GBP'): ?> selected <?php endif ?>>United Kingdom</option>
                        <option value="SGD"  <?php if ($this->session->userdata('country') == 'SGD'): ?> selected <?php endif ?>>Singapore</option>
                        <option value="CAD"  <?php if ($this->session->userdata('country') == 'CAD'): ?> selected <?php endif ?>>Canada</option>                        
                        <option value="AED"  <?php if ($this->session->userdata('country') == 'AED'): ?> selected <?php endif ?>>United Arab Emirates</option>
                        <option value="AUD"  <?php if ($this->session->userdata('country') == 'AUD'): ?> selected <?php endif ?>>Australia</option>
                </select>
            </div>
            <!-- <div class="col-6 form-group">
                <select id="symbol" class="postfix form-control">
                    <?php if(!empty($currency)){foreach ($currency as $key => $row) { ?>
                    <option value="<?= $row['code'].' '.$row['symbol'] ?>"><?= $row['code'].' '.$row['symbol'] ?></option>
                    <?php } } ?>
                </select>
            </div> -->
        </div>
        
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php if (!empty($this->session->flashdata('msgg'))) { ?>
    <script type="text/javascript">
        swal("info", "This product already purchased!!", "info");

    </script>
<?php } ?>
<?php include ('include/Footer.php'); ?>




<!-- template js files -->
<script src="<?= base_url().'assets/user-assets/' ?>js/bootstrap-select.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/magnific-popup.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/isotope.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/waypoint.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/jquery.counterup.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/particles.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/particlesRun2.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/fancybox.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/wow.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/date-time-picker.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/emojionearea.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/smooth-scrolling.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/tooltipster.bundle.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>

<script type="text/javascript">
    $(function(){
        $('#enroll-form').validate({
            rules:{
                e_email:{
                    required:true,
                    email:true,
                },
                E_phone_no:{
                    required:true,
                    minlength:7,
                    maxlength:10,
                    number:true,
                }
            },
            messages:{
                e_email:{
                    required:'<span style="color: red;position: absolute;left: 15px;font-size: 12px;margin-top: -12px;">Please Enter Email Address</span>',
                    email:'<span style="color: red;position: absolute;left: 15px;font-size: 12px;margin-top: -12px;">Please Enter Valid Email Address</span>',
                },
                E_phone_no:{
                    required:'<span style="color:red;position: absolute;left: 15px;font-size: 12px;margin-top: 36px;">Please Enter Phone Number</span>',
                    minlength:'<span style="color:red;position: absolute;left: 15px;font-size: 12px;margin-top: 36px;">Please Enter Valid Phone Number</span>',
                    maxlength:'<span style="color:red">Please Enter Valid Phone Number</span>',
                    number:'<span style="color:red;position: absolute;left: 15px;font-size: 12px;margin-top: 36px;">Please Enter Valid Phone Number</span>',
                }
            }
        });


        $("#contactform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                name: "required",
                email: "required",
                option:"required",
                message:"required",
                countary:"required",
                contact: {
                    required: true,
                    minlength: 7,
                    maxlength: 13,
                },
               
            },
            messages: {
                name: "<span style=color:red; >Please Enter Your  Name</span>",
                email: "<span style=color:red; >Please Enter Your Email</span>",
                message :"<span style=color:red; >Please Enter message</span>",
                option :"<span style=color:red; >Please Select option</span>",
                countary:"<span style=color:red; >Please Enter Country option</span>",
                contact: {
                    required:  "<span style=color:red; >Please Enter Your Contact Number</span>",
                    minlength: "<span style=color:red; >Please Enter Valid Contact No</span>",
                    maxlength: "<span style=color:red; >Please Enter Valid Contact No</span>",
                },
               
               
            }
        });


        $("#download-form").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                name: "required",
                email: "required",
                contact: {
                    required: true,
                    minlength: 7,
                    maxlength: 13,
                },
               
            },
            messages: {
                name: "<span style=color:red; >Please Enter Your  Name</span>",
                email: "<span style=color:red; >Please Enter Your Email</span>",
                message :"<span style=color:red; >Please Enter message</span>",
                contact: {
                    required:  "<span style=color:red; >Please Enter Your Contact Number</span>",
                    minlength: "<span style=color:red; >Please Enter Valid Contact No</span>",
                    maxlength: "<span style=color:red; >Please Enter Valid Contact No</span>",
                },
               
               
            }
        });
    })
</script>

<script>
    $(function () {
      $('#name').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });

      $('#countary').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
     function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>

<script>
  $(document).ready(function(){
     $(document).on('submit','#contactform',function(){ 
          event.preventDefault();
          $(':input[type="submit"]').prop('disabled', false); 
          $.ajax({ 
            url:'<?= base_url().'User_contact/Add_contact' ?>',
            type:'POST',
            data:$(this).serialize(),
            success:function(data){
              
              $('#contactform').trigger('reset');
              if(data == 1){
                 swal({
                     title: "success!",
                     text: "Enquiry Send Successfully..",
                     icon: "success",
                     timer: 3000
                     });
              }else{
                swal({
                     title: "warning!",
                     text: "something Went Wrong!.",
                     icon: "warning",
                     timer: 3000
                     });
             }
            }
          });
    });
    });
  $(document).on('click','.ddde',function(){

     $('#download_form').submit();
      $('#Enquirynow').modal('hide');
    
  });

  $(document).on('click','.hide-nshow-read1',function(){

var ids = $(this).attr('idd');
if($(this).text() === 'Read More'){

  $('.'+ ids).addClass('active');
  $(this).html('Read Less');
}else{
  $('.'+ids).removeClass('active');
  $(this).html('Read More');
}


});
</script>
</body>
<script type="text/javascript">
    
</script>
</html>