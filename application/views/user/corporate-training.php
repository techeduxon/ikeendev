<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ikeendev</title>
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/fancybox.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/tooltipster.bundle.css">
    
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/Header.php'); ?>
<section class="sec-slider">
    <div class="sec-top-0">
        <div class="slide-top-sec single-slide-item single-slide-item-2 slide-bg5">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12 col-lg-8">
                    <div class="right-slider-sewc new-right-slider-sewc">
                        <div class="content">
                            <!-- <h2>Corporate Training</h2> -->
                            <!-- <div class="new-ul-li">
                                <ul>
                                    <li><a href="javascript:void(0);">Machin Learning </a></li>
                                    <li><a href="javascript:void(0);">Machin Learning </a></li>
                                    <li><a href="javascript:void(0);">Machin Learning </a></li>
                                    <li><a href="javascript:void(0);">Machin Learning </a></li>
                                    <li><a href="javascript:void(0);">Machin Learning </a></li>
                                    <li><a href="javascript:void(0);">Machin Learning </a></li>
                                    <li><a href="javascript:void(0);">Machin Learning </a></li>
                                </ul>
                            </div> -->
                        </div>
                        
                    </div>
                    </div>
                    <div class="col-12 col-lg-4">
                    <div class="contect-form-in malti-contect-form-in">
                        <h4 class="text-center mb-3">Contact Us For HELP</h4>
                        <form id="contactform" action="<?= base_url().'User/saveCorporateInquiry' ?>" method="POST">
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
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="contact" maxlength="13" minlength="7" placeholder="Phone No." onkeypress="return isNumber(event)" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <select class="form-control" name="train_for" required="required">
                                        <option value="">Training For *</option>
                                        <option value="Myself">Myself </option>
                                        <option value="My Team">My Team</option>
                                                                                
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

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <div class="form-group">
                                        <input type="hidden" name="from_page" value="edu_help">
                                        <button class="theme-btn" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-Corporate">
    <div class="container">
        <div class="name-te text-center">
            <h5>The Ikeendev Advantage</h5>
        </div>
        <div class="row">
            <?php if(!empty($spring)){foreach ($spring as $key => $row) { ?>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="box-sec">
                    <div class="sec-1">
                        <span><img src="<?= base_url().'uploads/curriculum_pdf/'.$row['icon'] ?>" style="height: 44px;width: 30px;"></span>
                    </div>
                    <div class="content">
                        <h5><?= $row['heading'] ?></h5>
                        <p><?= $row['title'] ?></p>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</section>
<section class="sec-3-corporate">
        <div class="container">
            <div class="grid-sec3">
                <h4 class="text-center">Our Training Partners are the ones that created the technology</h4>
                <ul>
                <?php if(!empty($partner)){foreach ($partner as $key => $row) { ?>
                    <li><a href="javascript:void(0);"><img src="<?= base_url().'uploads/curriculum_pdf/'.$row['image'] ?>" alt=""></a></li>
                <?php } } ?>
                </ul>
            </div>
        </div>

</section>
<section class="sec-4-corporate">
    <div class="container">
        <div class="box-in">
            <ul>
                <?php if(!empty($footer)){foreach ($footer as $key => $row) { ?>
                <li>
                    <div class="box-m">
                        <div class="image">
                        <img src="<?= base_url().'uploads/curriculum_pdf/'.$row['image'] ?>">
                        </div>
                        <div class="content">
                            <h5><?= $row['title'] ?></h5>
                            <h6><?= $row['heading'] ?></h6>
                            <p><?= $row['desc'] ?></p>
                        </div>
                    </div>
                </li>
                <?php } } ?>
                <!-- <li>
                    <div class="box-m">
                        <div class="image">
                        <img src="https://techeduxon.com/techeduxon/assets/user-assets/images/aws-logo.png">
                        </div>
                        <div class="content">
                            <h5>Requirement</h5>
                            <h6>Discover & Find the Right Corporate Trainers</h6>
                            <p>Expand your reach beyond just local trainers – find talent from across the world! With reviews and star ratings from past classes and a full professional brief, it’s easy to compare and evaluate to find the right one for your need.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-m">
                        <div class="image">
                        <img src="https://techeduxon.com/techeduxon/assets/user-assets/images/aws-logo.png">
                        </div>
                        <div class="content">
                            <h5>Requirement</h5>
                            <h6>Discover & Find the Right Corporate Trainers</h6>
                            <p>Expand your reach beyond just local trainers – find talent from across the world! With reviews and star ratings from past classes and a full professional brief, it’s easy to compare and evaluate to find the right one for your need.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-m">
                        <div class="image">
                        <img src="https://techeduxon.com/techeduxon/assets/user-assets/images/aws-logo.png">
                        </div>
                        <div class="content">
                            <h5>Requirement</h5>
                            <h6>Discover & Find the Right Corporate Trainers</h6>
                            <p>Expand your reach beyond just local trainers – find talent from across the world! With reviews and star ratings from past classes and a full professional brief, it’s easy to compare and evaluate to find the right one for your need.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-m">
                        <div class="image">
                        <img src="https://techeduxon.com/techeduxon/assets/user-assets/images/aws-logo.png">
                        </div>
                        <div class="content">
                            <h5>Requirement</h5>
                            <h6>Discover & Find the Right Corporate Trainers</h6>
                            <p>Expand your reach beyond just local trainers – find talent from across the world! With reviews and star ratings from past classes and a full professional brief, it’s easy to compare and evaluate to find the right one for your need.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-m">
                        <div class="image">
                        <img src="https://techeduxon.com/techeduxon/assets/user-assets/images/aws-logo.png">
                        </div>
                        <div class="content">
                            <h5>Requirement</h5>
                            <h6>Discover & Find the Right Corporate Trainers</h6>
                            <p>Expand your reach beyond just local trainers – find talent from across the world! With reviews and star ratings from past classes and a full professional brief, it’s easy to compare and evaluate to find the right one for your need.</p>
                        </div>
                    </div>
                </li> -->
               
            </ul>
        </div>
        <div class="content-teg-link">
            <p>Visit our <a href="<?= base_url().'Course-Calender' ?>">Training Calendar</a> for More Details <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" class="login-ico btn">REQUEST A CALLBACK</a></p>
        </div>
    </div>
</section>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Need help Finding the right training?   </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <form id="contact_f"  method="POST">
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
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="input-box">
                        <div class="form-group">
                            <input class="form-control" type="text" name="contact" maxlength="13" minlength="7" placeholder="Phone No." onkeypress="return isNumber(event)" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="input-box">
                        <div class="form-group">
                            <select class="form-control" name="train_for" >
                            <option value="">Training For *</option>
                            <option value="Myself">Myself </option>
                            <option value="My Team">My Team</option>
                                                                    
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

                <div class="col-lg-12">
                    <div class="input-box">
                        <div class="form-group">
                            <input type="hidden" name="from_page" value="edu_help">
                            <button class="theme-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </div>


            </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function (){
      
        $("#contactform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                name: "required",
                email: "required",
                option:"required",
                message:"required",
                contact: {
                    required: true,
                    minlength: 7,
                    maxlength: 13,

                },
               
            },
            messages: {
                name: "<span style=color:red; >Please Enter Your  Name</span>",
                email: "<span style=color:red; >Please Enter Your Email</span>",
                message :"<span style=color:red; >Please Enter message</span>",
                option :"<span style=color:red; >Please Select option</span>",
                contact: {
                    required:  "<span style=color:red; >Please Enter Your Contact Number</span>",
                    minlength: "<span style=color:red; >Please Enter Valid Contact No</span>",
                    maxlength: "<span style=color:red; >Please Enter Valid Contact No</span>",
                },
               
               
            }
        });

        
    });
</script>
<script type="text/javascript">
$(document).ready(function (){
      
        $("#contact_f").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                name: "required",
                email: "required",
                option:"required",
                message:"required",
                contact: {
                    required: true,
                    minlength: 7,
                    maxlength: 13,

                },
               
            },
            messages: {
                name: "<span style=color:red; >Please Enter Your  Name</span>",
                email: "<span style=color:red; >Please Enter Your Email</span>",
                message :"<span style=color:red; >Please Enter message</span>",
                option :"<span style=color:red; >Please Select option</span>",
                contact: {
                    required:  "<span style=color:red; >Please Enter Your Contact Number</span>",
                    minlength: "<span style=color:red; >Please Enter Valid Contact No</span>",
                    maxlength: "<span style=color:red; >Please Enter Valid Contact No</span>",
                },
               
               
            }
        });

        
    });
</script>

<script type="text/javascript">
    $(document).on('submit','#contact_f',function(e){
        e.preventDefault();
        $.ajax({
           url:'<?= base_url().'User/saveCorporateInquiry2' ?>',
           type:'POST',
           data:$(this).serialize(),
           success: function(res){
              if (res ==1) {
                 swal({
                  title: "Success!",
                  text: "Request submited successfully!",
                  icon: "success",
                  buttons: false,
                  timer: 3000


                });

                 $('#contact_f').trigger('reset');
                 $('#myModal').modal('hide');
              }else{
                swal({
                  title: "Failed!",
                  text: "Some Error Occured Plase Try again !",
                  icon: "error",
                  buttons: false,
                  timer: 3000


                });

              }
           } 
        });
    })
</script>

</body>
</html>