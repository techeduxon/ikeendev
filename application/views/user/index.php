<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="author" content="TechyDevs">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Ikeendev </title>
      <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/magnific-popup.css">
      <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/fancybox.css">
      <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/tooltipster.bundle.css">
      <style type="text/css">
         .contact-form-action .form-control {
         color: #000000 !important;
         }
      </style>
      <?php include ('include/Header.php'); ?>
      <section class="slider-area new-slider-area">
         <div class="single-slide-item single-slide-item-2 single-slide-item-3a " style="background-image: url('<?= base_url().'uploads/home_images/'.$head->image ?>') !important;">
            <div id="perticles-js-2"></div>
            <div class="vedio-container">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 text-center">
                        <div class="section-heading">
                           <h3 class="section__title"><?= strtoupper($head->heading); ?></h3>
                           <p class="section__desc"><?= strtoupper($head->title); ?></p>
                        </div>
                        <div class="hero-search-form">
                           <div class="contact-form-action">
                              <form method="get" >
                                 <div class="row justify-content-center">
                                    <div class="col-12 col-lg-6">
                                       <div class="aj-width_new ">
                                          <div class="input-box">
                                             <div class="form-group mb-0">
                                                <input class="form-control aj-form-control22" type="text" name="search" placeholder="<?= $head->placeholder ?>" id="myInput1" autocomplete="off">
                                                <span class="la la-search search-icon"></span>
                                                <ul id="myUL1">
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="search-boot">
                                             <p class="btn-calss">
                                                <a href="javascript:void(0);" class="btn-t1"><?= $head->button ?></a>
                                                <!-- <a href="javascript:void(0);" class="btn-t2s">Course Calendar</a> -->
                                             </p>
                                          </div>
                                          <!-- end input-box -->
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <!-- end contact-form-action -->
                        </div>
                        <div class="search-boot">
                           <p><?= $head->title2 ?></p>
                        </div>
                     </div>
                     <!-- col-lg-12 -->
                  </div>
                  <!-- row -->
               </div>
               <!-- container -->
            </div>
         </div>
         <!-- end single-slide-item -->
      </section>
      <!-- end slider-area -->
      <section class="clientlogo-area overflow-hidden pb-0">
         <div class="container">
         <div class="client-logo-heading">
            <div class="section-heading mb-3">
               <h4 class="section__title">How The IkeenAcademy Works And Our LMS</h4>
               <span class="section-divider"></span>
            </div>
            <!-- end section-heading -->
         </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="client-logo-heading">
                  <div class="section-heading">
                     <p class="section__desc">
                        <?= $sp->iframe ?>
                     </p>
                  </div>
                  <!-- end section-heading -->
               </div>
            </div>
            <!-- end col-lg-6 -->
            <div class="col-lg-6">
               <div class="client-logo-2">
                  <?= $sp->title ?>
               </div>
               <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </section>
      <!-- end clientlogo-area -->
      <section class="course-area">
         <div class="card-content-wrapper padding-top-40px padding-bottom-40px">
            <div class="container">
               <div class="section-heading mb-4">
                  <h2 class="section__title"><?= $this->User_model->getSelectWhereRow('heading','tbl_course_heading',array('id'=>1,),'','')->heading; ?></h2>
                  <span class="section-divider"></span>
               </div>
               <!-- end section-heading -->
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                           <div class="trending_courses">
                              <?php if(!empty($courses)){  ?>
                              <?php  foreach ($courses as $key => $course) {  ?>
                              <div class="column-td-half">
                                 <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="imgae-part" style="background-image: url('<?= base_url().'uploads/certificate/'.$course['backgroundImage'] ?>');">
                                       <img src="<?= base_url().'uploads/certificate/'.$course['image'] ?>" class="image-po" alt="">
                                       <div class="co-name">
                                          <a href="<?= base_url().'Course/'.$this->encrypt_id->encryptor('encrypt',$course['id']) ?>">
                                             <h5 class="text-center"><?= $course['course_title'] ?></h5>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="card-content">
                                       <h3 class="card__title">
                                          <a href="<?= base_url().'Course/'.$this->encrypt_id->encryptor('encrypt',$course['id']) ?>"><?= $course['course_subtitle1'] ?></a>
                                       </h3>
                                       <div class="card-action">
                                          <ul class="highlights">
                                             <?= $course['course_highlight'] ?>
                                          </ul>
                                       </div>
                                       <!-- end card-action -->
                                       <div class="rating-wrap d-flex mt-2 mb-1">
                                          <div class="sec-1-left d-flex">
                                             <ul class="review-stars d-inline-block ">
                                                <?php if($course['avg_rating'] == 1){ ?>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                                <?php }elseif($course['avg_rating'] == 2){ ?>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                                <?php }elseif($course['avg_rating'] == 3){ ?>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                                <?php }elseif($course['avg_rating'] == 4){ ?>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                                <?php }elseif($course['avg_rating'] == 5){ ?>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <?php } ?>
                                             </ul>
                                             <span class="star-rating-wrap">
                                             <span class="star__rating"><?= $course['avg_rating'] ?></span>
                                             <span class="star__count">(<?= $course['number_of_rating'] ?>)</span>
                                             </span>
                                          </div>
                                          <div class="sec-1-right">
                                             <a href="<?= base_url().'Course/'.$this->encrypt_id->encryptor('encrypt',$course['id']) ?>" class="aj-text-btn">View More</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end card-content -->
                                 </div>
                                 <!-- end card-item -->
                              </div>
                              <?php  } } ?>
                           </div>
                           <!-- end course-block -->
                        </div>
                        <!-- end tab-pane -->
                     </div>
                     <!-- end tab-content -->
                  </div>
                  <!-- end col-lg-12 -->
               </div>
               <!-- end row -->
            </div>
            <!-- end container -->
         </div>
         <!-- end card-content-wrapper -->
      </section>
      <!-- end courses-area -->
      <section class="funfact-area text-center overflow-hidden padding-top-80px padding-bottom-40px ">
         <div class="container">
            <div class="row">
               <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 column-td-half">
                  <div class="counter-item">
                     <!-- <span class="la la-bullhorn count__icon"></span> -->
                     <h4 class="count__title counter"><?= $count->counter1 ?></h4>
                     <p class="count__meta"><?= $count->counter_title_1 ?></p>
                  </div>
                  <!-- end counter-item -->
               </div>
               <!-- end col-lg-3 -->
               <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 column-td-half">
                  <div class="counter-item">
                     <!-- <span class="la la-globe count__icon"></span> -->
                     <h4 class="count__title counter text-color"><?= $count->counter2 ?></h4>
                     <p class="count__meta"><?= $count->counter_title_2 ?></p>
                  </div>
                  <!-- end counter-item -->
               </div>
               <!-- end col-lg-3 -->
               <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 column-td-half">
                  <div class="counter-item">
                     <!-- <span class="la la-users count__icon"></span> -->
                     <h4 class="count__title counter text-color-2"><?= $count->counter3 ?></h4>
                     <p class="count__meta"><?= $count->counter_title_3 ?></p>
                  </div>
                  <!-- end counter-item -->
               </div>
               <!-- end col-lg-3 -->
               <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 column-td-half">
                  <div class="counter-item">
                     <span class="la la-certificate count__icon"></span>
                     <h4 class="count__title counter text-color-3"><?= $count->counter4 ?></h4>
                     <p class="count__meta"><?= $count->counter_title_4 ?></p>
                  </div>
                  <!-- end counter-item -->
               </div>
               <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </section>
      <!-- end funfact-area -->
      <section class="benefit-area benefit-area2 padding-top-80px padding-bottom-80px overflow-hidden">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="img-teakin">
                     <img src="<?= base_url().'uploads/home_images/'.$bcount->image ?>" alt=""     height="325">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="benefit-heading padding-top-120px">
                     <div class="section-heading">
                        <h2 class="section__title"><?= $bcount->title1 ?></h2>
                        <span class="section-divider"></span>
                        <p class="section__desc"><?= $bcount->title2 ?>
                        </p>
                     </div>
                     <!-- end section-heading -->
                     <div class="row">
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 column-td-half">
                           <div class="info-icon-box text-center">
                              <!-- <span class="la la-mouse-pointer icon-element icon-bg-1"></span> -->
                              <img src="<?= base_url().'uploads/home_images/'.$bcount->image1 ?>" alt="" style="height: 100px;width: 100%;">
                              <h4 class="widget-title"><?= $bcount->text1 ?></h4>
                           </div>
                           <!-- end info-icon-box -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 column-td-half">
                           <div class="info-icon-box text-center">
                              <!-- <span class="la la-bolt icon-element icon-bg-2"></span> -->
                              <img src="<?= base_url().'uploads/home_images/'.$bcount->image2 ?>" alt="" style="height: 100px;width: 100%;">
                              <h4 class="widget-title"><?= $bcount->text2 ?></h4>
                           </div>
                           <!-- end info-icon-box -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 column-td-half">
                           <div class="info-icon-box text-center">
                              <!-- <span class="la la-users icon-element icon-bg-3"></span> -->
                              <img src="<?= base_url().'uploads/home_images/'.$bcount->image3 ?>" alt="" style="height: 100px;width: 100%;">
                              <h4 class="widget-title"><?= $bcount->text3 ?></h4>
                           </div>
                           <!-- end info-icon-box -->
                        </div>
                        <!-- end col-lg-4 -->
                     </div>
                     <!-- end row -->
                     <!-- <div class="btn-box">
                        <a href="javascript:void(0)" class="theme-btn"><?= $bcount->btnTxt ?></a>
                        </div> -->
                  </div>
                  <!-- end benefit-heading -->
               </div>
               <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </section>
      <!-- end benefit-area -->
      <!--======================================
         END BENEFIT AREA
         ======================================-->
      <section class="testimonial-area section-bg padding-top-40px padding-bottom-40px">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="section-heading">
                     <?php $sec = $this->Frontend_model->fetch_condrecordwithfield('tbl_test_sec',array('id'=>1),'*') ?>
                     <h2 class="section__title"><?= $sec->title ?></h2>
                     <span class="section-divider"></span>
                     <p class="section__desc">
                        <?= $sec->detail ?>
                     </p>
                  </div>
                  <!-- end section-heading -->
                  <!-- <div class="btn-box">
                     <a href="<?= base_url().'Categories' ?>" class="theme-btn"><?= $sec->btn_title ?></a>
                  </div> -->
               </div>
               <!-- end col-lg-4 -->
               <div class="col-lg-8">
                  <div class="testimonial-subtitle pb-3">
                     <h3 class="widget-title font-size-16 font-weight-medium">30+ million people are already learning on IkeenAcademy</h3>
                  </div>
                  <div class="testimonial-carousel-2">
                     <?php if(!empty($test)){ foreach($test as $val){ ?>
                     <div class="testimonial-item testimonial-item-layout-2">
                        <div class="testimonial__desc">
                           <p class="testimonial__desc-desc font-size-15">
                              <?= $val['description'] ?>
                           </p>
                        </div>
                        <!-- end testimonial__desc -->
                        <div class="testimonial-header">
                           <img src="<?= base_url().'uploads/home_images/'.$val['image'] ?>" alt="small-avatar">
                           <div class="testimonial__name">
                              <h3 class="testimonial__name-title"><?= $val['name'] ?></h3>
                              <span class="testimonial__name-meta"><?= $val['designation'] ?></span>
                              <ul class="review-stars d-inline-block ">
                                 <?php if($val['star'] == 1){ ?>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star-o"></span></li>
                                 <li><span class="la la-star-o"></span></li>
                                 <li><span class="la la-star-o"></span></li>
                                 <li><span class="la la-star-o"></span></li>
                                 <?php }elseif($val['star'] == 2){ ?>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star-o"></span></li>
                                 <li><span class="la la-star-o"></span></li>
                                 <li><span class="la la-star-o"></span></li>
                                 <?php }elseif($val['star'] == 3){ ?>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star-o"></span></li>
                                 <li><span class="la la-star-o"></span></li>
                                 <?php }elseif($val['star'] == 4){ ?>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star-o"></span></li>
                                 <?php }elseif($val['star'] == 5){ ?>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star"></span></li>
                                 <li><span class="la la-star"></span></li>
                                 <?php } ?>
                              </ul>
                           </div>
                        </div>
                        <!-- end testimonial-header -->
                     </div>
                     <?php } } ?>
                  </div>
                  <!-- end testimonial-carousel-2 -->
               </div>
               <!-- end col-lg-8 -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </section>
      <!-- ================================
         START BLOG AREA
         ================================= -->
      <section class="blog-area2 ne-blog-area2 section-padding  padding-top-40px padding-bottom-40px ">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-heading text-center">
                     <h2 class="section__title">Latest News & Articles</h2>
                     <span class="section-divider"></span>
                  </div>
                  <!-- end section-heading -->
               </div>
               <!-- end col-md-12 -->
            </div>
            <!-- end row -->
            <div class="row margin-top-30px">
               <div class="col-lg-12">
                  <div class="blog-post-carousel owl-dot-and-nav" style="background-color: unset;">
                     <?php if(!empty($home_content)){  ?>
                     <?php foreach($home_content as $val){  ?>
                     <?php if($val['type']=='news_and_article'){  ?>
                     <div class="card-item blog-card">
                        <div class="card-image">
                           <a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id'])?>" class="card__img"><img src="<?= base_url().'uploads/home_images/' ?><?= $val['image'] ?>" style="width:100%;height:170px;" alt=""></a>
                           <!-- <div class="card-badge">
                              <span class="badge-label"><?= date('d-M',strtotime($val['created_at'])) ?></span>
                              </div> -->
                        </div>
                        <!-- end card-image -->
                        <div class="card-content">
                           <h3 class="card__title mt-0 mb-0">
                              <a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id'])?>"><?= substr($val['title1'],0,30) ?></a>
                           </h3>
                           <div class="card-action">
                              <ul class="card-duration d-flex align-items-center">
                                 <li>By<a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id'])?>" class="blog-admin-name"><?= substr($val['title2'],0,20) ?></a></li>
                                 <!--   <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li> -->
                              </ul>
                           </div>
                           <!-- end card-action -->
                        </div>
                        <!-- end card-content -->
                     </div>
                     <!-- end card-item -->
                     <?php } } } ?>
                     <!-- end card-item -->
                  </div>
                  <!-- end blog-post-carousel -->
               </div>
               <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </section>
      <?php if($modal1->show == 'show'){ ?>
      <div class="modal" id="index-had" tabindex="-1">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="grab-sec">
                  <div class="row">
                     <div class="col-12 col-md-6">
                        <div class="box-left">
                           <div class="image">
                              <img src="<?= base_url().'uploads/curriculum_pdf/'.$modal1->image ?>" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-6">
                        <div class="right-form">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                           <p><?= $modal1->title ?></p>
                           <form action="<?= base_url().'User/saveInquiryModal1' ?>" method="post" id="modal-form1">
                              <div class="form-group">
                                 <label> Email</label>
                                 <input type="email" class="form-control" name="name"  placeholder="e.g.sara@gmail.com*" required="required">
                              </div>
                              <div class="form-group">
                                 <label> Phone Number</label>
                                 <!-- <div class="form-sec"> -->
                                    <!-- <div class="">
                                       <select  class="form-control" name="county">
                                          <option value="">IN +91</option>
                                          <option value="">IN +91</option>
                                          <option value="">IN +91</option>
                                          <option value="">IN +91</option>
                                       </select>
                                    </div> -->
                                    <input type="number" class="form-control" name="mobile_number" placeholder="Mobile Number*" required="required" >
                                 <!-- </div> -->
                                 <div class="btn-ch">
                                    <button type="submit" class="btn btn-t1" form="modal-form1">Get A Call</button>
                                 </div>
                              </div>
                           </form>
                           <h4><small>Our career advisor will give a call shortly</small></h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
      <script src="<?= base_url().'assets/user-assets/' ?>js/develop.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <script type="text/javascript">

         <?php if(!isset($_COOKIE['modalcolkie'])) {
            if($modal1->show == 'show'){
            setcookie("modalcolkie",'save',time()+31556926 ,'/');
         ?>
         $(window).on('load', function(){
             $('#index-had').modal('show');
         });
         <?php } } ?>
         <?php if($this->session->flashdata('success')){ ?>
            swal('success','<?= $this->session->flashdata('success') ?>','success');
         <?php } ?>
      </script>
      </body>
</html>
