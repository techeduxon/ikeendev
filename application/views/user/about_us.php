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
    
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/Header.php'); ?>
<?php include ('include/top_slider.php'); ?>
<!-- <section class="about-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content-box pt-0">
                    <div class="section-heading">
                        <h5 class="section__meta">about us</h5>
                        <?php  if(!empty($about)){ ?>
                        <h2 class="section__title line-height-50"><?= $about[0]['title'] ?></h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-4">
                            <?= $about[0]['description'] ?>
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img-wrap about-img-wrap-after mt-3">
                    <img src="<= base_url().'assets/user-assets/images/Our-Mission.png'?>">
                    <img src="<?= base_url().'uploads/about_images/' ?><?= $about[0]['image'] ?>">
                </div>
            </div>
             <?php } ?>
        </div>
    </div>
</section> -->
<!-- <section class="testimonial-area section-bg padding-top-40px padding-bottom-40px">
    <div class="container">
        <div class="row"> -->
            
            <!-- <div class="col-lg-7">
                <div class="testimonial-subtitle pb-3">
                    <h3 class="widget-title font-weight-medium">30+ million people are already learning on Techeduxon</h3>
                </div>
                <div class="testimonial-carousel-2">
                    <?php if(!empty($test)){ foreach($test as $val){ ?>
                    <div class="testimonial-item testimonial-item-layout-2">
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc font-size-15">
                                <?= $val['description'] ?>
                            </p>
                        </div>

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
                    </div>
                    <?php } } ?>
                </div>
            </div> -->
            <!-- <div class="col-lg-5">
                <div class="section-heading">
                     <?php  if(!empty($about)){ ?>
                    <h2 class="section__title"><?= $about[1]['title'] ?></h2>
                    <span class="section-divider"></span>
                    <p class="section__desc">
                        <?= $about[1]['description'] ?>
                    </p>
                </div>
                <?php } ?>
            </div> -->
        <!-- </div>
    </div>
</section> -->

<section class="journey—from-our padding-top-40px padding-bottom-40px">
    <div class="container">
        <div class="our-journey—from">
            <div class="our-journey-name">
                <?php if(!empty($about_journey_head)){  ?>

                <h3><?= $about_journey_head['title1'] ?> </h3>
                <span class="section-divider"></span>
                <p><?= $about_journey_head['title2'] ?></p>
            <?php } ?>
            </div>
            <div class="our-journey—content">
                <ul>
                    <?php if(!empty($about_journey)){  ?>
                    <?php foreach ($about_journey as $key => $value) {  ?>
                        
                    <?php if($value['id'] % 2==0){ ?>
                    <li class="right">
                        <div class="box-our">
                            <h3><?= date('M-Y',strtotime($value['title_date'])) ?></h3>
                            <p class="text"><?= $value['title'] ?></p>
                            <p><?= $value['description'] ?></p>
                        </div>
                    </li>
                <?php } ?>
                <?php if($value['id'] % 2 !==0){   ?>
                    <li class="">
                        <div class="box-our">
                            <h3><?= date('M-Y',strtotime($value['title_date'])) ?></h3>
                            <p class="text"><?= $value['title'] ?></p>
                            <p><?= $value['description'] ?></p>
                        </div>
                    </li>
                    <?php } ?>
                <?php } } ?> 

                </ul>
            </div>
        </div>
    </div>    
</section>

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
</body>

</html>