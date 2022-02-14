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

<div class="edu-on-sec1">
    <div class="container">

        <div class="row">
             <?php  if(!empty($edu_on_sec)){  ?>
            <div class="col-lg-6">
                <div class="had-edu-on-sec1">
                   
                    <h3><?= $edu_on_sec['title1']  ?></h3>
                    <span class="section-divider"></span>
                    <p><?= $edu_on_sec['content']  ?></p>
                </div>
                
           
            </div>
            <div class="col-lg-6">
                <div class="content-edu content-edu-05">
                    <div class="vedio-frime">
                      <?= $edu_on_sec['video']  ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="content-edu">
                        <h2 class="title-aj mt-5"><?= $edu_on_sec['title2']  ?></h2>
                    </div>
            </div>
             <?php } ?>
        </div>

        
        <div class="content-edu mt-5">
            <div class="row">
                <?php if(!empty($edu_on)){ ?>
                    <?php foreach ($edu_on as $key => $value) { ?>
                    
                    
               <div class="col-lg-6">
                    <div class="content-sec">
                        
                            <div class="box-cot ">
                            <div class="left-image">
                                    <img src="<?= base_url().'uploads/edu_images/'.$value['image'] ?>" style="">
                                </div>
                                <div class="right-content ">
                                    <h3><?= $value['title'] ?></h3>
                                    <p><?= $value['content'] ?> </p>
                                    <!-- <a href="javascript:void(0);" >Read More</a> -->
                                </div>
                                
                            </div>
                    </div>
               </div>
              <?php } } ?>
            </div>  
        </div>
    </div>

</div>

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