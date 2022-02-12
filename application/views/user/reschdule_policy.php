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


<section class="become-sec-3 reschdule-sec-1">
    <div class="container">
       <div class="become-sec-3-row">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="left-sided reschedule-policy">
                        <ul>
                            <?php if(!empty($reschedule_policy)){  ?>
                                <?php $i=0; foreach ($reschedule_policy as $key => $value) { ?>
                                 <?php if($i == 0) { ?>
                                 <li onclick="openInstructors(event, 'name-0')" class="tablinks teb-left active"><span><?= $value['title'] ?></span></li>
                                 <?php  }else{  ?>
                                 <li onclick="openInstructors(event, 'name-<?= $value['id'] ?>')" class="tablinks teb-left "><span><?= $value['title'] ?></span></li>

                                 <?php } ?>
                            <?php $i++; } } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="right-side ">
                        <?php if(!empty($reschedule_policy)){  ?>
                        <?php $i=0; foreach ($reschedule_policy as $key => $val) { ?>
                            
                        <?php if($i == 0){  ?>
                        <div id="name-0" class="tabcontent active" style="display: block;">
                            <div class="content-in-tsm">
                               <?php $reschedule_policy=$this->User_model->get_single_where('*','tbl_reschedule',array('id'=>$val['id']),'',''); ?>
                                <h4><?= $reschedule_policy['title'] ?></h4>
                                <?= $reschedule_policy['content'] ?> 
                               
                                
                            </div>
                        </div>
                    <?php }else{  ?>
                       <div id="name-<?= $val['id'] ?>" class="tabcontent">
                            <div class="content-in-tsm">
                                <?php $reschedule_policy=$this->User_model->get_single_where('*','tbl_reschedule',array('id'=>$val['id']),'',''); ?>
                               <h4><?= $reschedule_policy['title'] ?></h4>
                                <h3><?= $reschedule_policy['content'] ?></h3>
                               
                                
                            </div>
                        </div>
                       
                    <?php } ?>
                        <?php $i++; } } ?>
                    
                    </div>  
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
<script type="text/javascript">
    function openInstructors(evt, Instructors_name) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(Instructors_name).style.display = "block";
      evt.currentTarget.className += " active";
    }
</script>
</body>

</html>