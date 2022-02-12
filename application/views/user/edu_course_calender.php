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

<section class="course-calender-sec">
    <div class="container">
        <div class="header-course">
            <h3>SpringPeople Training Calendar</h3>
            <span class="section-divider"></span>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="side-left">
                    <div class="content">
                        <div class="row" id="show_data">
                            <?php if(!empty($data)){ foreach ($data as $key => $value){ if(!empty($value->detail)){ ?>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="box-content">
                                    <div class="image">
                                        <img src="<?= base_url().'uploads/home_images/'.$value->image ?>">
                                    </div>
                                    <div class="name-content">
                                        <h6><?= $value->title ?></h6>
                                        <p><i class="fa fa-eercast" aria-hidden="true"></i> Authorised</p>
                                    </div>
                                    <div class="sider-content">
                                        <div class="console-slider-cor">

                                            <?php foreach($value->detail as $val){ ?>
                                            <div class="item-cord">
                                                <div class="left">
                                                    <h3><?= $val->month ?></h3>
                                                    <p><?= date('d',strtotime($val->start_date)).' - '.date('d',strtotime($val->end_date)) ?></p>
                                                    <p><?= date('h:i A',strtotime($val->start_time)) ?></p>
                                                    <p><?= date('h:i A',strtotime($val->end_time)) ?></p>
                                                </div>

                                                <div class="right">
                                                    <div class="top">
                                                        <h6>₹ <?= $val->mrp ?></h6>
                                                        <h6>₹ <?= $val->sell_price ?></h6>
                                                    </div>
                                                    <div class="min">
                                                        <h6><i class="fa fa-desktop" aria-hidden="true"></i> <?= $val->mode ?></h6>
                                                        <h6><i class="fa fa-free-code-camp" aria-hidden="true"></i> <?= $val->timing ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        <?php } } } ?>

                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="side-right">
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Search Form <a href="<?= current_url() ?>" class="theme-btn float-right">Reset</a></h3>
                        <div class="contact-form-action">
                            <form method="get">
                                <div class="form-group">
                                    <input class="form-control" type="search" id="search" name="search" placeholder="Search here..." required="required" <?php if ((isset($_GET['search'])) && (!empty($_GET['search']))) { ?> value="<?= $_GET['search'] ?>" <?php } ?>>
                                    <button type="submit" class="search-icon"><span class="la la-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="right-side-ul-ch">
                            <h6 class="">Month</h6>
                            <hr>
                            <ul class="filter-by-category">
                                <li>
                                    <div class="filter1 ">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="jan" class="mon" id="chb1">
                                            <label for="chb1" class="primary-color">Jan</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="feb" class="mon" id="chb2">
                                            <label for="chb2" class="primary-color">Feb</label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="filter1 ">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="mar" class="mon" id="chb3">
                                            <label for="chb3" class="primary-color">Mar</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="apr" class="mon" id="chb4">
                                            <label for="chb4" class="primary-color">Ap</label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="filter1 ">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="may" class="mon" id="chb5">
                                            <label for="chb5" class="primary-color">May</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="june" class="mon" id="chb6">
                                            <label for="chb6" class="primary-color">Jun</label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="filter1 ">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="july" class="mon" id="chb7">
                                            <label for="chb7" class="primary-color">Jul</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="aug" class="mon" id="chb8">
                                            <label for="chb8" class="primary-color">Aug</label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="filter1 ">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="sept" class="mon" id="chb9" name="month[]">
                                            <label for="chb9" class="primary-color">Sep</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="OCT" class="mon" id="chb10">
                                            <label for="chb10" class="primary-color">Oct</label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="filter1 ">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="nov" class="mon" id="chb11">
                                            <label for="chb11" class="primary-color">Nov</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="month" value="dec" class="mon" id="chb112">
                                            <label for="chb112" class="primary-color">Dec</label>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                            <h6 class="mt-3">Mode</h6>
                            <hr>
                            <ul class="filter-by-category">
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="mode_c" name="mode" value="Online" id="mo1">
                                        <label for="mo1" class="primary-color">Online</label>
                                    </div>                                  
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="mode_c" name="mode" value="Classroom" id="mo3">
                                        <label for="mo3" class="primary-color">Classroom</label>
                                    </div>                                  
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="mode_c" name="mode" value="Self-Paced" id="mo4">
                                        <label for="mo4" class="primary-color">Self-Paced</label>
                                    </div>                                  
                                </li>        
                            </ul>
                            <h6 class="mt-3">Timings</h6>
                            <hr>
                            <ul class="filter-by-category">
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" name="timings" class="timings" value="Morning" id="tim1">
                                        <label for="tim1" class="primary-color">Morning</label>
                                    </div>                                  
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" name="timings" class="timings" value="Evening" id="tim2">
                                        <label for="tim2" class="primary-color">Evening</label>
                                    </div>                                  
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" name="timings" class="timings" value="All Day" id="tim3">
                                        <label for="tim3" class="primary-color">All Day</label>
                                    </div>                                  
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" name="timings" class="timings" value="Weekday" id="tim4">
                                        <label for="tim4" class="primary-color">Weekday</label>
                                    </div>                                  
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" name="timings" class="timings" value="Weekend" id="tim5">
                                        <label for="tim5" class="primary-color">Weekend</label>
                                    </div>                                  
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" name="timings" value="Mon-Sat" id="tim6">
                                        <label for="tim6" class="primary-color">Mon-Sat</label>
                                    </div>                                  
                                </li>                                
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-strip">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-3 col-md-3 col-lg-3">
                        <h6 class="text-center"><a href="javascript:void(0);"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> In 9876543210</a></h6>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-3">
                        <h6 class="text-center"><a href="javascript:void(0);"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Us 9876543210</a></h6>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-3">
                        <h6 class="text-center"><a href="javascript:void(0);"><i class="fa fa-share" aria-hidden="true"></i> Request a Call Back</a></h6>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-3">
                        <h6 class="text-center"><a href="javascript:void(0);"><i class="fa fa-envelope" aria-hidden="true"></i> test@gmail.com</a></h6>
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
$(document).on('change','.mon',function(){
    var man = $(this).val();
fetchresult(man);
});
$(document).on('change','.mode_c',function(){
   var mode_c = $(this).val();
fetchresult();

});
$(document).on('change','.timings',function(){
     var timings = $(this).val(); 
fetchresult();
});
// $(document).on('keyup','#search',function(){
//     fetchresult();
// });



function fetchresult(){
var man = []; 
var mode_c = []; 
var timings = [];   
var search = $('#search').val();
  $("input[name='mode']:checked").each(function(){
    mode_c.push($(this).val());
  });
  $("input[name='month']:checked").each(function(){
    man.push($(this).val());
  });
  $("input[name='timings']:checked").each(function(){
    timings.push($(this).val());
  });
  $.ajax({
     url:'<?= base_url('User/fetch_filterdata') ?>',
     type:'POST',
     data:{man:man,mode_c:mode_c,timings:timings,search:search},
     success: function(data){
        $('#show_data').html(data);
        var owl = $(".console-slider-cor");
                        owl.owlCarousel({
                         items: 2,
                         loop: false,
                        autoplay: false,

                        margin: 5,
                        nav: true,
                        dots: false,
                        center: true,
                        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
                        });
                        $('.console-slider-cor').owlCarousel('refresh');
       
     }
  });
}

</script>
</body>

</html>