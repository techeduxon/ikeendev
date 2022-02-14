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
<section class="Refer-And-Earn-se-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-8">
                <div class="box-content">
                    <h4>Enter your email to start referring</h4>
                <?php if (!empty($this->session->flashdata('success'))) { ?>
                    <div class="alert alert-success" role="alert">
                      <?= $this->session->flashdata('success'); ?>
                    </div>
                <?php } ?>
               
                        <form action="<?= base_url('User/refer_earn_eq'); ?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="comment" placeholder="Enter comment">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                            <div class="text-center">
                                 <input type="hidden" name="from_page" value="edu_help">
                                <button class="theme-btn" type="submit">GET STARTED</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Refer-And-Earn-se-2">
    <div class="container">
    <h4>How it works</h4>

        <div class="row justify-content-center">
            <?php if(!empty($refer_earn)){foreach ($refer_earn as $key => $row) {?>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="box-content-1">
                    <div class="image">
                        <img src="<?= base_url().'uploads/curriculum_pdf/'.$row['icon'] ?>">
                    </div>
                    <div class="content">
                        <h5><?= $row['heading'] ?></h5>
                        <p><?= $row['title'] ?></p>
                    </div>
                </div>
            </div>
            <?php } } ?>
            <!-- </div>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="box-content-1">
                    <div class="image">
                        <img src="https://techeduxon.com/techeduxon/assets/user-assets/images/aws-logo.png">
                    </div>
                    <div class="content">
                        <h5>Refer your friends</h5>
                        <p>It's easy - enter their email addresses or share your links via social media</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="box-content-1">
                    <div class="image">
                        <img src="https://techeduxon.com/techeduxon/assets/user-assets/images/aws-logo.png">
                    </div>
                    <div class="content">
                        <h5>Refer your friends</h5>
                        <p>It's easy - enter their email addresses or share your links via social media</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<section class="Refer-And-Earn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="help-box">
                    <h3 class="name text-center">FAQ's</h3>
                    <div class="accordion accordion-shared accordion-shared-2" id="accordionExample">
                    <?php if(!empty($faq)){ $i=0; foreach ($faq as $key => $row){ ?>
                    <div class="card">
                        <div class="card-header" id="heading<?= $i ?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $i ?>" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-minus"></i>
                                    <i class="fa fa-plus"></i>
                                    <?= $row['que'] ?>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse<?= $i ?>" class="collapse " aria-labelledby="heading<?= $i ?>" data-parent="#accordionExample">
                            <div class="card-body">
                                <p><?= $row['ans'] ?></p>
                            </div><!-- end card-body -->
                        </div><!-- end collapse -->
                    </div><!-- end card -->
                <?php $i++;} } ?>
                </div><!-- end accordion -->
                </div>
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</body>

</html>