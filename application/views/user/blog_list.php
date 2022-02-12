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
<section class=" blog-area2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="section__title">Blog</h2>
                    <span class="section-divider"></span>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <?php if(!empty($blog)){ foreach($blog as $val){ ?>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="card-item blog-card">
                    <div class="card-image">
                        <a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id']) ?>" class="card__img">
                            <img src="<?= base_url().'uploads/home_images/'.$val['image'] ?>" alt="">
                        </a>
                        <!-- <div class="card-badge">
                            <span class="badge-label"><?= date('d M',strtotime($val['created_at'])) ?></span>
                        </div> -->
                    </div>
                    <div class="card-content">
                        <h3 class="card__title mt-0 mb-0">
                            <a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id']) ?>"><?= $val['title1'] ?></a>
                        </h3>
                        <div class="card-action">
                            <ul class="card-duration d-flex align-items-center">
                                <li><?= $val['title2'] ?></li>

                                <li><span class="blog__panel-comment"><?= $val['cnt'] ?> Comments</span></li>
                            </ul>
                        </div>
                    </div>
                </div>            
            </div>
        <?php } } ?>

           <!--  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">
                <div class="pagination">
                    <a href="javascript:void(0);">&laquo;</a>
                    <a href="javascript:void(0);">1</a>
                    <a href="javascript:void(0);" class="active">2</a>
                    <a href="javascript:void(0);">3</a>
                    <a href="javascript:void(0);">4</a>
                    <a href="javascript:void(0);">5</a>
                    <a href="javascript:void(0);">6</a>
                    <a href="javascript:void(0);">&raquo;</a>
                </div>
            </div> -->
            
        </div>
    </div>
</section>
<?php include ('include/Footer.php'); ?>
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


</body>

</html>