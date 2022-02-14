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

<section class="edu-help-sec">
    <div class="container">
        <div class="row justify-content-center">
            <?php if(!empty($home_content)){  ?>
                        <?php foreach($home_content as $val){  ?>
                            <?php if($val['type']=='news_and_article'){  ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id'])?>" class="card__img"><img src="<?= base_url().'uploads/home_images/' ?><?= $val['image'] ?>" style="width:100%;height:250px;" alt=""></a>
                            <!-- <div class="card-badge">
                                <span class="badge-label"><?= date('d-M',strtotime($val['created_at'])) ?></span>
                            </div> -->
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0 mb-0">
                                <a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id'])?>"><?= substr($val['title1'],0,30) ?></a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id'])?>" class="blog-admin-name"><?= substr($val['title2'],0,20) ?></a></li>
                                  <!--   <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li> -->
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div>
            </div>
                    <?php } } } ?>
            
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
</script><script>
     function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
<script>
  $(document).ready(function(){
     $(document).on('submit','#contactform',function(){ 
          event.preventDefault();
          $(':input[type="submit"]').prop('disabled', false); 
          $.ajax({ 
            url:'<?= base_url().'User_contact/Add_contact' ?>',
            type:'POST',
            data:$(this).serialize(),
            success:function(data){
              
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
    });
</script>
</body>

</html>