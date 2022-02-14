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
<style type="text/css">
    
</style>
<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/Header.php'); ?>
<?php include ('include/top_slider.php'); ?>

<section class="gallery-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <!-- <h5 class="section__meta">discover now</h5> -->
                    <h2 class="section__title">Proud Projects that Make <br> Us  Stand Out</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio-filter margin-top-30px margin-bottom-35px">
                    <!-- <li data-filter="*" class="active">All</li> -->
                    <?php if(!empty($cat)){ ?>
                        <?php $i=1; foreach ($cat as $key => $value) { ?>
                               <li data-filter=".aj<?= $value['id'] ?>" class="<?php if($i==1){echo'active';} ?>"><?= $value['category'] ?></li>
                    <?php $i++;} } ?>
                </ul>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-list  row">
                    <?php if(!empty($gallery)){ ?>
                    <?php $i=0; foreach ($gallery as $key => $value) { ?>
                    <div class="single-portfolio-item new-hover  col-lg-3 all aj<?= $value['category_id'] ?>" <?php if($i !=1 ){echo'style="dispay:none"';} ?>>
                        <div class="portfolio-hover ">
                            <a class="portfolio-link" href="<?= base_url().'uploads/gallery_images/' ?><?= $value['image'] ?>" id="<?= $value['id'] ?>" data-fancybox="gallery" data-caption="<?= $value['title'] ?>">
                                <img src="<?= base_url().'uploads/gallery_images/' ?><?= $value['image'] ?>" style="height: 220px;" alt="portfolio-image">
                                <h6><?= $value['title'] ?></h6>
                                <i class="la la-plus icon-element"></i>
                            </a>
                        </div>
                    </div>
                    <?php $i++; } } ?>
                  <!--   <div class="single-portfolio-item col-lg-3 web-design photography" >
                        <div class="portfolio-hover">
                            <a class="portfolio-link" href="<= base_url().'assets/user-assets/' ?>images/img23.jpg" data-fancybox="gallery" data-caption="Image 2">
                                <img src="<= base_url().'assets/user-assets/' ?>images/img23.jpg" alt="portfolio-image">
                                <i class="la la-plus icon-element"></i>
                            </a>
                        </div><
                    </div> -->
                   
                    
                    
                   
                </div><!-- end portfolio-list -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
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