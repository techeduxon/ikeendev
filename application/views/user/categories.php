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
<section class="course-area">
    
    <div class="card-content-wrapper  padding-top-60px padding-bottom-110px">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-right mb-4">
                <?php if(!empty($session)){  ?>  
                  <button class="btn btn-primary" data-toggle="modal" data-target="#new_modale">Ask Questions?</button>
                <?php }else{ ?>
                  <a  href="<?= base_url('User/Login'); ?>" class="btn btn-primary" >Ask Questions?</a>
                <?php } ?>
                </div>
                <?= $this->session->flashdata('message') ?>
              </div>
                            <!-- <div class="col-lg-3">
                                <form action="" method="">
                                <div class="input-box">
                                    <label class="label-text"></label>
                                    <div class="form-group">
                                        <div class="sort-ordering user-form-short">
                                            <select class="sort-ordering-select">
                                                <option selected>Select Categories</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                        <!-- <div class="col-lg-9">
                            <div class="section-tab margin-top-28px margin-bottom-55px">
                                <ul class="nav nav-tabs " role="tablist" id="review">
                                    <li role="presentation">
                                        <a href="#tab1" role="tab" data-toggle="tab" class="theme-btn active" aria-selected="true">
                                            Latest
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab2" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                            Top
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div> -->
                        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content categories-tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                            <div class="top-name-sec">
                                <div class="table-responsive">
                                   <table class="table table-striped ">
                                      <thead>
                                        <tr>
                                          <th scope="col" colspan="2">Topic</th>
                                          <th scope="col">Replies</th>
                                          <th scope="col">Views</th>
                                          <th scope="col">Activity</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php if(!empty($que)){ $j=0; foreach($que as $val){ $j++;?>
                                        <tr>
                                          <th scope="row"><a href="<?= base_url().'Categories-Details/'.$this->encrypt_id->encryptor('encrypt',$val->id) ?>"><h6><?= $val->que ?></h6><small><i class="fa fa-dot-circle-o" aria-hidden="true"></i><?= $val->title ?></small></a></th>
                                          <td class="text-center">
                                            <div class="user-detial">
                                            <?php if(!empty($val->rpl)){
                                              $i=0;
                                             foreach($val->rpl as $v){ $i++; ?>
                                            <a href="javascript:void(0);" class="user-detial" idd='<?= $j.'classes'.$i ?>'><img alt="" width="25" height="25" src="https://discuss.cloudxlab.com/letter_avatar_proxy/v4/letter/<?= substr($v->name, 0,1) ?>/fbc32d/25.png" class="avatar latest single" title="niladri_panda - Original Poster, Most Recent Poster" aria-label="niladri_panda - Original Poster, Most Recent Poster"></a>
                                            <?php } } ?>
                                          </div>
                                          <?php if(!empty($val->rpl)){
                                            $i=0;
                                             foreach($val->rpl as $v){ $i++; ?>
                                           <div class="box-deteal-user0910" id='<?= $j.'classes'.$i ?>'>
                                              <div class="image"> 
                                                
                                                <a href="javascript:void(0);"><img src="https://discuss.cloudxlab.com/letter_avatar_proxy/v4/letter/<?= substr($v->name, 0,1) ?>/e56c9b/120.png"></a>
                                                <div class="name-content">
                                                  <a href="javascript:void(0);"><h3><?= $v->name ?></h3></a>
                                                  <p><?= $v->email ?></p>
                                                </div>
                                              </div>
                                              <div class="content">
                                                <p><?= $v->email ?> My name is Nirav Raj.I am glad that teacher responded me to fill up my profile.I think this is great day when</p>
                                                <h6><i class="fa fa-globe" aria-hidden="true"></i>  <a href="javascript:void(0);">optimise12345.blogspot.com</a>  <span class="ml-3 "> <i class="fa fa-map-marker" aria-hidden="true"></i>  Asansol</span></h6>
                                                <p>Posted Sep 10 Joined Jul 24 Read 1h (1h recently)</p>
                                                <div class="row contant-url">
                                                  <a href="javascript:void(0);"><i class="fa fa-user" aria-hidden="true"></i> Basic</a>
                                                  <a href="javascript:void(0);"><i class="fa fa-eye" aria-hidden="true"></i> Enthusiast</a>
                                                  <a href="javascript:void(0);"><i class="fa fa-snowflake-o" aria-hidden="true"></i> First Emoji</a>
                                                  <a href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i> 19 More</a>
                                                </div>
                                              </div>
                                            </div>
                                            <?php } } ?>
                                          </td>
                                          <td><?= $val->ans ?></td>
                                          <td><?= $val->view ?></td>
                                          <td><?php 
                                            $datetime1 = new DateTime($val->created_at);
                                              $datetime2 = new DateTime();
                                              $interval = $datetime1->diff($datetime2);
                                              echo $interval->format('%a d')."<br>";
                                           ?></td>
                                        </tr>
                                      <?php } } ?>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end tab-pane -->
                       
                    </div><!-- end tab-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            
        </div><!-- end container -->
    </div><!-- end card-content-wrapper -->
</section>
<?php if(!empty($session)){ ?>
<div class="modal fade" id="new_modale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ask Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" id="que-form" action="<?= base_url().'User/askQuestion1' ?>">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                      <label>Your Questions?</label>
                        <textarea class="form-control" name="que" required="required"></textarea>               
                    </div>
                </div>
                <div class="col-lg-12 text-right">
                  <button type="submit" form="que-form" class="btn btn-primary">Submit</button>
                </div>
            </div>            
          </form>
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

<script type="text/javascript">
 $(document).ready(function(){  
 $(".user-detial").click(function (e) {
  var idd = $(this).attr('idd');
    e.stopPropagation();
    $("#"+idd).toggleClass('activea');
});

$(document).click(function (e) {
    if(!$(e.target).closest('.box-deteal-user0910').length){
      $(".box-deteal-user0910").removeClass('activea');
    }
});



});

</script>
</body>

</html>