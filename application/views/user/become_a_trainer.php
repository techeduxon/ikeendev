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

<section class="become_an_trainer">

    <div class="container">
        <div class="become_an_trainer-row">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="become-box">
                        <div class="iconasasaas">
                            <!-- <i class="<?= $data->icon1 ?>" aria-hidden="true"></i> -->
                            <img src="<?= base_url().'uploads/home_images/'.$data->icon1 ?>" style="height: 188px;width: 100%;">
                        </div> 
                        <!-- <div class="content">
                            <p><?= $data->title1 ?></p>
                        </div> -->                       
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="become-box">
                        <div class="icondsdssds">
                            <!-- <i class="<?= $data->icon2 ?>" aria-hidden="true"></i> -->
                            <img src="<?= base_url().'uploads/home_images/'.$data->icon2 ?>" style="height: 188px;width: 100%;">
                        </div> 
                        <!-- <div class="content">
                            <p><?= $data->title2 ?></p>
                        </div>                        -->
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="become-box">
                        <div class="icondsdssds">
                            <!-- <i class="<?= $data->icon3 ?>" aria-hidden="true"></i> -->
                            <img src="<?= base_url().'uploads/home_images/'.$data->icon3 ?>" style="height: 188px;width: 100%;">
                        </div> 
                                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="become-sec-2">
    <div class="container">
        <div class="become-sec-2-row">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div class="image">
                        <img src="<?= base_url().'uploads/home_images/'.$data->se3img ?>">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <div class="content">
                        <?= $data->sec2Desc ?>
                        <!-- <a href="javascript:void(0);" class="theme-btn"> Go To Success Stories</a> -->
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<?php if(!empty($title)){ ?>
<section class="become-sec-3 bg-color-th">
    <div class="container">
       <div class="become-sec-3-row">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="left-sided">
                        <ul>
                            <?php $i=0; foreach($title as $val){ if(!empty($val['det'])){ $i++;?>
                            <li onclick="openInstructors(event, 'name-<?= $i ?>')" class="tablinks teb-left <?php if($i==1){ ?> active <?php } ?>"><span><?= $val['title'] ?></span></li>
                            <?php } $i++; } ?>
                            <!-- <li onclick="openInstructors(event, 'name-2')" class="tablinks teb-left"><span>Create Project & Develop Lessons</span></li>
                            <li onclick="openInstructors(event, 'name-3')" class="tablinks teb-left"><span>Video Production, Revise & Beta Test</span></li>
                            <li onclick="openInstructors(event, 'name-4')" class="tablinks teb-left"><span>Finalize Content & Launch Course</span></li>
                            <li onclick="openInstructors(event, 'name-5')" class="tablinks teb-left"><span>Post-Launch</span></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="right-side">
                        <?php $i=0; foreach($title as $val){ if(!empty($val['det'])){ $i++;?>
                        <div id="name-<?= $i ?>" class="tabcontent" <?php if($i==1){ ?> style="display: block;" <?php } ?>>
                            <h3><?= $val['title'] ?></h3>
                            <div class="row">
                                <?php foreach($val['det'] as $val1){ ?>
                                <div class="col-lg-6">
                                     <div class="content-sec">
                                        <div class="left-image">
                                            <img src="<?= base_url().'uploads/home_images/'.$val1['image'] ?>" style="height: 100px;width:140px;">
                                        </div>
                                        <div class="right-content">
                                            <h3><?= $val1['title'] ?></h3>
                                            <p><?= $val1['description'] ?></p>
                                            <!-- <a href="javascript:void(0);" class="float-right">Read More</a> -->
                                        </div>
                                      </div>
                                </div>
                            <?php } ?>
                                
                            </div>
                        
                    </div>  
                     <?php } $i++; } ?>
                </div>
            </div>
       </div>
    </div>
</section>
<?php } ?>

<section class="FAQ-sec-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-left">
                    <h3><?= $data->title ?></h3>

                    <?= $data->sec4Desc ?>
                    <!-- <p class="mt-4"><a href="javascript:void(0);">Show more</a></p> -->
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right-join" style="background-image:url('<?= base_url().'uploads/home_images/'.$data->se4img ?>')">
                    <h4><?= $data->titler ?></h4>
                    <p><?= $data->sec4Descr ?></p>
                    <a href="javascript:void(0);" class="theme-btn" data-toggle="modal" data-target="#exampleModal">Become A Trainer</a>
                </div>
            </div>
        </div>  
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Become A Trainer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form id="contactform" method="POST" >
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" id="name" placeholder="Name" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="E-mail" required="required">
                                        <input class="form-control" type="hidden" name="from_page" value="become-a-trainer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="countary" id="countary" placeholder="Country" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="contact" placeholder="Phone No." onkeypress="return isNumber(event)" required="required" minlength="7" maxlength="13">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <select class="form-control" name="option">
                                            <?php if(!empty($tech)){foreach($tech as $val){ ?>
                                              <option value="<?= $val['title'] ?>"><?= $val['title'] ?></option>
                                            <?php } } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" name="message" placeholder="Write message"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="contactform">Submit</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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


    $(document).on('submit','#contactform',function(){ 
          event.preventDefault();
          $(':input[type="submit"]').prop('disabled', false); 
          $.ajax({ 
            url:'<?= base_url().'User_contact/Add_contact' ?>',
            type:'POST',
            data:$(this).serialize(),
            success:function(data){
                $('#exampleModal').modal('hide');
              $('#contactform').trigger('reset');
              if(data == 1){
                 swal({
                     title: "success!",
                     text: "Enquiry Send Successfully..",
                     icon: "success",
                     timer: 3000
                     });
              }else{
                swal({
                     title: "warning!",
                     text: "something Went Wrong!.",
                     icon: "warning",
                     timer: 3000
                     });
             }
            }
          });
    });
</script>
<script>
    $(function () {
      $('#name').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });

      $('#countary').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
     function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
</body>

</html>