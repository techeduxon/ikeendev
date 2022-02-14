<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ikeendev - My Account </title>
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/fancybox.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/tooltipster.bundle.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/plyr.css">



    
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/D_Header.php'); ?>
<?php //include ('include/Sidebar.php'); ?>
<section class="dashboard-area" >
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <!-- <li class="sidenav__item"><a href="<?= base_url().'My-Account'?>"><i class="la la-user"></i>My Profile</a></li> -->
                    <!-- <li class="sidenav__item"><a href="<?= base_url().'My-Courses'?>"><i class="la la-file-video-o"></i>My Courses</a></li> -->
                     <?php if(in_array('fullCourse', $type) || in_array('selfLearning', $type)){ ?>
                     <li class="sidenav__item"><a href="<?= base_url().'Self-Learning/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-graduation-cap"></i>self learning</a></li> 
                    <?php } ?>
                    <?php if(in_array('fullCourse', $type) || in_array('liveClass', $type)){ ?>
                     <li class="sidenav__item"><a href="<?= base_url().'Live-Classes/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-book"></i>live classes</a></li> 
                     <?php } ?>
                     <li class="sidenav__item page-active"><a href="<?= base_url().'Assessments/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-file-text"></i>assessment</a></li> 
                    <li class="sidenav__item"><a href="<?= base_url().'Certificate/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-diamond"></i>certificate</a></li>
                    <!-- <li class="sidenav__item"><a href="<?= base_url()?>"><i class="la la-power-off"></i> Logout</a></li> -->
                </ul>
            </div><!-- end side-menu-wrap -->
        </div>
    </div>
    <?php $ses = $this->session->userdata('user_data'); ?>

<div class="dashboard-content-wrap aj-my-acount aj-ne-cahng">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 left-pading">
                        
                        <section class="course-dashboard">
                            <div class="course-dashboard-wrap">
                                <div class="course-dashboard-container d-flex">
                                    <div class="course-dashboard-column">
                                        
                                        <?php if(!empty($assessment)){ $i=0;foreach ($assessment as $key => $value) { ?>
                                        <div class="lecture-viewer-container tabcontenta"  id="asessment_card<?= $value['id'] ?>" <?php if($i==0){ ?> style="display: block;" <?php }else{ ?> style="display: none;"<?php } ?> > 
                                            <div class="Assement-name " > 
                                                <a href="javascript:void(0);" class="theme-btn mobile-cnag">Course content</a>
                                                <h4> <?= $value['project_title'] ?></h4>
                                                <h6><span class="name-pro"><?= $value['tag_name'] ?></span> <span class="name-fo-g">Gradanle</span></h6>
                                            </div>
                                             <div class="Course-resources-detail">
                                                <div class="Course-resources-body Assement-body " >
                                                    <h3>Description</h3>
                                                    <div class="deiscri-content">
                                                        <h6>Project Description</h6> 
                                                        <?php if(!empty($assessment)){ ?>
                                                       <p class="parag"><?= $value['description'] ?>
                                                        
                                                        <?php }  ?>
                                                    </div>
                                                </div>
                                                <div class="Assement-btn-bottam">
                                                    <?php if($ses['type']!='Trainer'){ ?>
                                                    <a download href="<?= base_url().'uploads/assessment_file/'.$value['file'] ?>"  class="theme-btn" ><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                                                <?php }else{ ?>
                                                    <a href="<?= base_url().'User/StreamPdf?path=uploads/assessment_file/'.$value['file'] ?>" target="_blank" class="theme-btn" ><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                                <?php } ?>
                                                    <?php if($ses['type']!='Trainer'){ ?>
                                                    <button class="theme-btn" data-toggle="modal" data-target="#uplode-file" id="btnbtn">Submit</button>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            

                                        </div>
                                     <?php  $i++; } } ?>
                                        </div><!-- end lecture-viewer-container -->
                                        
                                      
                                    </div><!-- end course-dashboard-column -->
                                    <div class="course-dashboard-sidebar-column" style="top:30px;">
                                        <button class="sidebar-open" type="button"> Assement List <i class="la la-angle-right ml-2"></i></button>
                                        <div class="course-dashboard-sidebar-wrap">
                                        <div class="course-dashboard-side-heading d-flex align-items-center justify-content-between">
                                            <h3 class="widget-title font-size-20">Course content</h3>
                                            <button class="sidebar-close" type="button"><i class="la la-times"></i></button>
                                        </div><!-- end course-dashboard-side-heading -->
                                        <div class="course-dashboard-side-content">
                                            <div class="course-item-list-accordion" >
                                                 <!--  -->
                                                <?php if(!empty($assessment)){ $i=0;foreach ($assessment as $key => $value) { ?>
                                                 <div class="card assement-card" id="asessment_card" >
                                                    <div class="card-header assement-card-header " >
                                                        <h2 class="assement-header-h2">
                                                            <button class="assement tablinksa <?php if($i==0){ ?> assement-active     <?php } ?>" onclick="openCity(event, 'asessment_card<?= $value['id'] ?>','<?= $value['id'] ?>')"  idd="<?= $value['id'] ?>">
                                                                <span class="pro-name"><?= $value['project_title'] ?></span>
                                                                <span class="sub-name"><?= $value['tag_name'] ?></span>
                                                                <p class="description" style="display: none;"><?= $value['id'] ?></p>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    
                                                </div>
                                               
                                               <?php  $i++; } } ?>
                                                
                                                
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
            
        </div><!-- end container-fluid -->
    </div>
</section>

<div class="modal fade" id="uplode-file" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload File</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="enroll-form aj-enroll-form">
                <form id="saveAssesentForm" name="saveAssesentForm" enctype="multipart/form-data">
                    <div class="col-lg-12">
                        <div class="input-box">
                            <label class="label-text">Message<span class="primary-color-2 ml-1">*</span></label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="message" id="s_message" placeholder="Write message" required="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="assessment_id" id="assessment_id" value="">
                    <div class="col-lg-12">
                        <div class="input-box">
                            <label class="label-text">Upload File <span class="primary-color-2 ml-1">*</span></label>
                            <div class="form-group">
                                <input class="form-control" name="myFile" type="file" placeholder="Upload File" required="required">
                                <h6 id="oldtext" style="display: none;">Old File</h6>
                                <span id="oldimg" style="float: left;font-size: 41px;"></span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-12">
                        <div class="input-box">
                            <div class="form-group">
                                <button class="theme-btn" type="submit">Upload File</button>
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
<?php include ('include/D_Footer.php'); ?>

    <script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/bootstrap-select.min.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/magnific-popup.min.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/isotope.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/waypoint.min.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/jquery.counterup.min.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/fancybox.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/wow.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/plyr.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/smooth-scrolling.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/date-time-picker.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/emojionearea.min.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/copy-text-script.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/tooltipster.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        var player = new Plyr('#player');
    </script>
    <script>
        function openCity(evt, cityName,id) {
          var i, tabcontenta, tablinksa;
          tabcontenta = document.getElementsByClassName("tabcontenta");
          for (i = 0; i < tabcontenta.length; i++) {
            tabcontenta[i].style.display = "none";
          }
          tablinksa = document.getElementsByClassName("tablinksa");
          for (i = 0; i < tablinksa.length; i++) {
            tablinksa[i].className = tablinksa[i].className.replace(" assement-active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " assement-active";
          $('#assessment_id').val(id)
        }
        </script>
    <script type="text/javascript">

        window.onload = function() {
                var y = window.matchMedia("(max-width: 991px)")
                if (y.matches) { // If media query matches
                 $(".mobile-cnag").click(function(){
                      $(".course-dashboard-sidebar-column").slideToggle('slow');
                    });
                    $(".sidebar-close").click(function(){
                      $(".course-dashboard-sidebar-column").css('display','none');
                    });
                } 
            };
        
    </script>
<script>
    $(document).on('click','#btnbtn',function(){
        $('.tablinksa').each(function(){
            if($(this).hasClass('assement-active')){
                var id = $(this).attr('idd');
                $.ajax({
                 url:'<?= base_url('User/fetch_userAssesment') ?>',
                 type:'POST',
                 data:{id:id},
                 success:function(res){
                    var obj = JSON.parse(res);
                    $('#s_message').html(obj['message']);
                    $('#oldtext').css('display','block');
                    $('#oldimg').html('<a href="<?= base_url('uploads/certificate/') ?>'+obj['image']+'"  target="_blank" "><i class="fa fa-file" aria-hidden="true"></i></a">');

                 }
                });
                $('#assessment_id').val($(this).attr('idd'))
            }
        })
    })

    $(document).on('submit','#saveAssesentForm',function(){
        event.preventDefault()
        var formData = new FormData(this);
        $.ajax({
            type:'post',
            url:'<?= base_url().'User/saveUserAssesment' ?>',
            data:formData,
            success:function(data){
                $('#saveAssesentForm').trigger('reset');
                $('#uplode-file').modal('hide');
                swal('success','Assement Submit Successfully','success');
            },
            cache: false,
            contentType: false,
            processData: false,
        });
    });
    
</script>

</body>

</html>