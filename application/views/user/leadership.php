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
      
    </style>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/Header.php'); ?>
<?php include ('include/top_slider.php'); ?>
<section class="leadership-sec">

  <div class="container">
    <?php if(!empty($home_content)){  ?>
      <?php  foreach ($home_content as $key => $val) {  ?>
        <?php if($val['type'] == 'leadership'){   ?>
      
    <div class="Leadership-row">
      <div class="row">
        <div class="col-lg-3">
          <div class="image">
            <img src="<?= base_url().'uploads/home_images/' ?><?= $val['image'] ?>">
          </div>
        </div>

        <div class="col-lg-9">
          <div class="content">
            <div class="head-sec">
              <h4><?= $val['title1'] ?></h4>
              <h6><?= $val['title2'] ?></h6>
            </div>
            <div class="content-sec reviewtekst">
              <p><?= $val['description'] ?></p>
            </div>
          <?php if (strlen($val['description']) > 1300) { ?>  
            <a href="javascript:void(0);" class="hide-nshow-read smss" >Read More</a>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <?php } } } ?>
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

<script>
function open_positions(evt, posName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(posName).style.display = "block";
  evt.currentTarget.className += " active";
}



$(document).on('click', '.hide-nshow-read', function () {

      $(this).addClass('chang-togel');
      $(this).text('Less More');
    $('.content-sec').removeClass('active')
    var par = $(this).parent().find('.content-sec');
    par.addClass('active');
  });

$(document).on('click', '.chang-togel', function () {
    $(this).text('Read More');
    $('.content-sec').removeClass('active')
    $('.chang-togel').removeClass('chang-togel')
});
</script>
</body>

</html>