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
<section class="open_positions">
    <div class="container">
        <div class="text-center">
            <h3 class="text-center">Open Positions</h3>
            <span class="section-divider"></span>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="left-list">
                        
                    <ul>
                        <?php if(!empty($cat)){ $i=1; foreach($cat as $value){  ?>
                        <li class="tablinks <?php if($i==1){ ?> active <?php } ?>" onclick="open_positions(event, 'position<?= $i ?>')"><?= $value['category'] ?></li>
                        <?php $i++; } } ?>
                        <!-- 
                        <li class="tablinks" onclick="open_positions(event, 'position2')">Content</li>
                        <li class="tablinks" onclick="open_positions(event, 'position3')">Customer Success</li>
                        <li class="tablinks" onclick="open_positions(event, 'position4')">Data</li>
                        <li class="tablinks" onclick="open_positions(event, 'position5')">Design </li>
                        <li class="tablinks" onclick="open_positions(event, 'position6')">Engineering & IT</li>
                        <li class="tablinks" onclick="open_positions(event, 'position7')">Government</li>
                        <li class="tablinks" onclick="open_positions(event, 'position8')">Marketing</li>
                        <li class="tablinks" onclick="open_positions(event, 'position9')">Mentors</li>
                        <li class="tablinks" onclick="open_positions(event, 'position10')">People and Places</li>
                        <li class="tablinks" onclick="open_positions(event, 'position11')">Product </li>
                        <li class="tablinks" onclick="open_positions(event, 'position12')">Sales</li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="right-cintent">
                    <?php if(!empty($cat)){ $i=1; foreach($cat as $value){ ?>
                    <div id="position<?= $i ?>" class="tabcontent" <?php if($i==1){ ?> style="display: block;" <?php } ?>>
                        <div class="content-head">
                            <h3><?= $value['category'] ?> </h3>
                            <!-- <h6>4  Open Position</h6> -->
                        </div>
                        <div class="content-join-box" style="box-shadow: 0 0 15px 0 #ddd;
    padding: 30px;
    border-radius: 5px;
    grid-template-columns: 1fr 0px;
    display: grid;">
                            <?= $value['detail'] ?>
                        </div>
                        <!-- <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div> -->
                    </div>
                    <?php $i++; } } ?>
                    <!-- <div id="position2" class="tabcontent">
                        <div class="content-head">
                            <h3>Content </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div>
                    <div id="position3" class="tabcontent">
                        <div class="content-head">
                            <h3>Customer Success </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div>
                    <div id="position4" class="tabcontent">
                        <div class="content-head">
                            <h3>Data </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div>
                    <div id="position5" class="tabcontent">
                        <div class="content-head">
                            <h3>Design </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div>
                    <div id="position6" class="tabcontent">
                        <div class="content-head">
                            <h3>Engineering & IT </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div>
                    <div id="position7" class="tabcontent">
                        <div class="content-head">
                            <h3>Government </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div>
                    <div id="position8" class="tabcontent">
                        <div class="content-head">
                            <h3>Marketing </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div>
                    <div id="position9" class="tabcontent">
                        <div class="content-head">
                            <h3>Mentors </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div>
                    <div id="position10" class="tabcontent">
                        <div class="content-head">
                            <h3>People and Places </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div>
                    <div id="position11" class="tabcontent">
                        <div class="content-head">
                            <h3>Product </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div>
                    <div id="position12" class="tabcontent">
                        <div class="content-head">
                            <h3>Sales </h3>
                            <h6>4  Open Position</h6>
                        </div>
                        <div class="content-join-box">
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="content-box">
                                <h3>Business Ops & Strategy </h3>
                                <a href="javascript:void(0);">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content-footer">
                            <h3>Still Looking? </h3>
                            <p>We're constantly looking for self-driven individuals who are passionate about shaping the future of education. If you don't find an open position that's right for you, but are still interested in joining Techeduxon, contact us at <a href="javascript:void(0);">jobs@Techeduxon.com</a>.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Working_sec">

    <div class="container">
         <div class="text-center mb-4">
            <h3 class="text-center"><?= $sec2->title ?></h3>
            <span class="section-divider"></span>
            <p class="width-harf"><?= $sec2->subtitle ?></p>
        </div>
        <div class="row">
            <?php if(!empty($card)){ foreach($card as $val){ ?>
            <div class="col-lg-4">
                <div class="Working-box">
                    <div class="image">
                        <img src="<?= base_url().'uploads/home_images/'.$val['image'] ?>" style="height: 50px;width: 50px">
                    </div>
                    <div class="content">
                        <h5><?= $val['title'] ?></h5>
                        <p><?= $val['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php } } ?>
        </div>
    </div>
    
</section>
<section class="diversity-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="image">
                    <img src="<?= base_url().'uploads/home_images/'.$sec2->image ?>">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="content">
                    <h3><?= $sec2->title2 ?></h3>
                    <p><?= $sec2->description ?></p>
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
</script>
</body>

</html>