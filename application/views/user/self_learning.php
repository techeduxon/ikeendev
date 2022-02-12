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
    <style type="text/css">
      iframe{
      height: 500px;
      width: 850px;
      }
    </style>
    <!-- end cssload-loader -->
    <!--======================================
      START HEADER AREA
      ======================================-->
    <?php include ('include/D_Header.php'); ?>
    <section class="dashboard-area" >
      <div class="dashboard-sidebar">
        <div class="dashboard-nav-container">
          <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div>
            <!-- end humburger-menu-lines -->
          </div>
          <!-- end humburger-menu -->
          <div class="side-menu-wrap">
            <ul class="side-menu-ul">
              <!-- <li class="sidenav__item"><a href="<?= base_url().'My-Account'?>"><i class="la la-user"></i>My Profile</a></li> -->
              <!-- <li class="sidenav__item"><a href="<?= base_url().'My-Courses'?>"><i class="la la-file-video-o"></i>My Courses</a></li> -->
              <?php if(in_array('fullCourse', $type) || in_array('selfLearning', $type)){ ?>
              <li class="sidenav__item page-active"><a href="<?= base_url().'Self-Learning/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-graduation-cap"></i>self learning</a></li>
              <?php } ?>
              <?php if(in_array('fullCourse', $type) || in_array('liveClass', $type)){ ?>
              <li class="sidenav__item"><a href="<?= base_url().'Live-Classes/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-book"></i>live classes</a></li>
              <?php } ?>
              <li class="sidenav__item"><a href="<?= base_url().'Assessments/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-file-text"></i>assessment</a></li>
              <li class="sidenav__item"><a href="<?= base_url().'Certificate/'.$this->uri->segment(2).'?id='.$_GET['id'] ?>"><i class="la la-diamond"></i>certificate</a></li>
              <!-- <li class="sidenav__item"><a href="<?= base_url()?>"><i class="la la-power-off"></i> Logout</a></li> -->
            </ul>
          </div>
          <!-- end side-menu-wrap -->
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
                    <div class="course-dashboard-column active">
                      <div class="mobile-c-vew">
                        <a href="javascript:void(0);" class="theme-btn mobile-cnag0">Course content</a>
                        <a href="javascript:void(0);" class="theme-btn mobile-cnag1">Course Resources</a>
                      </div>
                      <div class="new-het-top">
                        <div class="dis-flex-in-row">
                          <div class="box-first-in">
                            <button class="sidebar-open active" type="button"> Course content <i class="la la-angle-right ml-2"></i></button>
                          </div>
                          <div class="name-of-cours">
                            <div class="name-cours">
                              <h4 class="name-coures">Let's Have Fun - Seriously!</h4>
                            </div>
                          </div>
                          <div class="all_btn-chang-ul">
                            <button class="help-resources"><i class="fa fa-question-circle" aria-hidden="true"></i>
                            Help</button>
                            <button class="notes-resources"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Notes</button>
                            <button class="community-resources"><i class="fa fa-comments-o" aria-hidden="true"></i> Community</button>
                            <button class="sidebar-resources" type="button"><i class="fa fa-link" aria-hidden="true"></i> Resources</button>
                          </div>
                        </div>
                      </div>
                      <div class="lecture-viewer-container">
                        <div class="lecture-video-item">
                          <?php if(!empty($section[0]['video'])){
                            echo $section[0]['video'][0]['video_url'];
                            } ?>
                            <?php if(!empty($section[0]['videos'] == 'no')){?>
                                <div class="n-conten-no-data ">
                                    <div class="content-on">
                                        <div class="image">
                                            <img src="<?= base_url()?>assets/user-assets/images/download.png" alt="">
                                        </div>
                                        
                                        <p><?= $section[0]['remark'] ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                          <!--  <video controls crossorigin playsinline id="player">
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576"/>
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720"/>
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080"/>
                            
                            <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default/>
                            <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"/>
                            
                            <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
                            </video> -->
                        </div>
                      </div>
                      <!-- end lecture-viewer-container -->
                    </div>
                    <!-- end course-dashboard-column -->
                    <div class="resources-sidebar-columan">
                      <div class="resources-sidebar-wrap">
                        <div class="resources-sidebar-heading d-flex align-items-center justify-content-between">
                          <h3 class="widget-title font-size-20">Course Resources</h3>
                          <button class="resources-close " type="button"><i class="la la-times"></i></button>
                        </div>
                        <div class="Course-resources-detail">
                          <div class="">
                            <ul id="resoursec-list">
                              <?php if(!empty($resoursec)){foreach($resoursec as $res){ ?>
                              <li>
                                <p><?= $res['title'] ?>
                                  <?php if($ses['type']=='student'){ ?>
                                  <a href="<?= base_url().'uploads/self_learn_files/'.$res['resource_pdf'] ?>" download><i class="la la-download"></i></a>
                                  <?php }else{ ?>
                                  <a href="<?= base_url().'User/StreamPdf?path='.'uploads/self_learn_files/'.$res['resource_pdf'] ?>" target="_blank" ><i class="la la-eye"></i></a>
                                  <?php } ?>
                                </p>
                              </li>
                              <?php } } ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="community-sidebar-coliman">
                      <div class="community-dashboard-sidebar-column">
                        <div class="community-dashboard-side-heading d-flex align-items-center justify-content-between">
                          <h6 class="widget-title font-size-16">Community</h6>
                          <button class="community-close " type="button"><i class="la la-times"></i></button>
                        </div>
                        <hr>
                        <div class="scroll-in-div">
                          <div class="content-ibox">
                            <h6>GET ANSWERS TO YOUR QUERIES FROM EXPERTS AND PEERS</h6>
                            <div class="name-tebs"><span>This Section</span><span>Coures</span></div>
                            <!-- <form action="<?= base_url().'User/saveQuetion' ?>" method=""> -->
                            <div class="form-group">
                              <label for="comment">Comment:</label>
                              <textarea class="form-control" rows="4" id="comment"></textarea>
                            </div>
                            <div class="text-right">
                              <button class="btn theme-btn" onclick="saveQuestion()" type="button">Post</button>
                            </div>
                            <!-- </form> -->
                          </div>
                          <hr>
                        </div>
                      </div>
                    </div>
                    <div class="notes-sidebar-coliman">
                      <div class="notes-dashboard-sidebar-column">
                        <div class="notes-dashboard-side-heading d-flex align-items-center justify-content-between mt-3">
                          <h3 class="widget-title font-size-20">
                            <ul>
                              <li class="tablinksa active" onclick="openTebname(event, 'New_note')">New Note</li>
                              <li class="tablinksa " onclick="openTebname(event, 'My_Notes')">My Notes</li>
                            </ul>
                          </h3>
                          <button class="notes-close " type="button"><i class="la la-times"></i></button>
                        </div>
                        <div id="New_note" class="tabcontenta mt-3" style="display: block;">
                          <div class="content-ibox">
                            <form action="#">
                              <div class="form-group">
                                <label for="name">Label: <span style="color: red;">*</span></label>
                                <input class="form-control" id="note_label" name="note_label" type="taxt" >
                              </div>
                              <div class="form-group">
                                <label for="comment">Description: <span>*</span></label>
                                <textarea class="form-control" rows="4" id="comment1" name="comment1"></textarea>
                              </div>
                              <div class="text-right">
                                <button class="btn theme-btn" type="button" onclick="saveNotes()">Post</button>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div id="My_Notes" class="tabcontenta mt-3">
                          <div class="scroll-in-div">
                            <div class="list-le-ne">
                              <ul id="saved_user_notes">
                                <?php if(!empty($notes)){ foreach($notes as $val){ ?>
                                <li>
                                  <h6><?= $val->label ?></h6>
                                  <p><?= $val->comment ?></p>
                                </li>
                                <?php } } ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="help-sidebar-coliman">
                      <div class="help-dashboard-sidebar-column">
                        <div class="help-dashboard-side-heading d-flex align-items-center justify-content-between">
                          <h3 class="widget-title font-size-20">Help</h3>
                          <button class="help-close " type="button"><i class="la la-times"></i></button>
                        </div>
                        <div class="halp-box-detal">
                          <div class="box-hader">
                            <h6>Hi <?= $ses['name'] ?></h6>
                            <input type="text" name="" placeholder="What are you looking for?" oninput="getAskQue(this.value);" >
                            <!-- list="dalalist" -->
                            <!-- <datalist id="dalalist">
                              </datalist> -->
                            <button class="b-s-top-serch"><i class="fa fa-search" aria-hidden="true"></i></button>
                          </div>
                        </div>
                        <div class="list-box-li">
                          <h5>Popular Articles</h5>
                          <ul id="Articles-list">
                            <?php if(!empty($que)){ foreach($que as $val){ ?>
                            <li>
                              <!-- <h6>Topic 1</h6> -->
                              <a href="<?= base_url().'Categories-Details/'.$this->encrypt_id->encryptor('encrypt',$val['id']) ?>" target="_blank" style="color: #233d63">
                                <p><?= $val['que'] ?></p>
                              </a>
                            </li>
                            <?php } } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="course-dashboard-sidebar-column active">
                      <div class="course-dashboard-sidebar-wrap">
                        <div class="course-dashboard-side-heading d-flex align-items-center justify-content-between">
                          <h3 class="widget-title font-size-20">Course content</h3>
                          <button class="sidebar-close " type="button"><i class="la la-times"></i></button>
                        </div>
                        <!-- end course-dashboard-side-heading -->
                        <div class="course-dashboard-side-content">
                          <div class="accordion course-item-list-accordion" id="accordionCourseMenu">
                            <?php if(!empty($section)){ $j=0; foreach($section as $val){ $j++;?>
                            <div class="card">
                              <div class="card-header" id="collapseMenuOne">
                                <h2 class="mb-0">
                                  <button class="btn btn-link getResourse" videos="<?= $val['videos'] ?>" remark="<?= $val['remark'] ?>" id="<?= $val['id'] ?>" type="button" data-toggle="collapse" data-target="#collapseOne<?= $j ?>" aria-expanded="<?php if($j==1){ ?>true<?php }else{ ?>false<?php } ?>" aria-controls="collapseOne<?= $j ?>">
                                  <span class="widget-title font-size-15 font-weight-semi-bold"><?= $val['section'] ?></span>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseOne<?= $j ?>" class="collapse <?php if($j==1){ ?> show <?php } ?>" aria-labelledby="collapseMenuOne" data-parent="#accordionCourseMenu">
                                <div class="card-body">
                                  <div class="course-content-list">
                                    <ul class="course-list">
                                      <?php if(!empty($val['video'])){ $j=1; foreach($val['video'] as $val1){ ?>
                                      <li class="course-item-link <?php if($j==1){ ?>active<?php } ?>" id="<?= $val1['id'] ?>" vid='<?= $val1['video_url'] ?>' name="<?= $val1['title'] ?>">
                                        <div class="course-item-content-wrap">
                                          <div class="course-item-content">
                                            <h4 class="widget-title font-size-15 font-weight-medium">
                                              <?= $val1['title'] ?>
                                              <p class="course-item-meta"><i class="la la-play-circle"></i><?= $val1['duration'] ?></p>
                                            </h4>
                                          </div>
                                        </div>
                                      </li>
                                      <?php $j++;} } ?>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php } } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end course-dashboard-sidebar-column -->
                  </div>
                  <!-- end course-dashboard-container -->
                </div>
                <!-- end course-dashboard-wrap -->
              </section>
              <!-- end course-dashboard -->
            </div>
            <!-- end col-lg-8 -->
          </div>
          <!-- end row -->
          <!-- <div class="row">
            <div class="col-lg-12">
              <div class="copyright-content mt-0 border-top-0 text-center">
                <div class="row">
                  <div class="col-lg-12">
                    <p class="copy__desc">&copy; 2020 Techeduxon. All Rights Reserved. by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs.</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <!-- end container-fluid -->
      </div>
    </section>
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
    <script type="text/javascript">
      // window.onload = function() {
      //         var y = window.matchMedia("(max-width: 991px)")
      //         if (y.matches) { // If media query matches
      //              $(".mobile-cnag1").click(function(){
      //               $(".resources-sidebar-columan").slideToggle('slow');
      //             });
      //              $(".mobile-cnag0").click(function(){
      //               $(".course-dashboard-sidebar-column").slideToggle('slow');
      //             });
      //              $(".resources-close").click(function(){
      //               $(".resources-sidebar-columan").css('display','none');
      //             });
      //              $(".sidebar-close").click(function(){
      //               $(".course-dashboard-sidebar-column").css('display','none');
      //             });
      //         } 
      //     };
      
      
      
      $(document).on('click','.course-item-link',function(){
          $('.lecture-video-item').html($(this).attr('vid'))
          $('.name-coures').text($(this).attr('name'))
          var id = $(this).attr('id');
          
          $.ajax({
              type:'post',
              url:'<?= base_url().'User/updateVideoCount' ?>',
              data:{id:id},
              success:function(data){
                  // alert(data);
              }
          })
      })  
      
      
      $(document).on('click','.getResourse',function(){
      var id = $(this).attr('id');
      var videos = $(this).attr('videos');
      var remark = $(this).attr('remark');
      if(videos == 'no'){
        // var div = '<div class="n-conten-no-data "><div class="content-on"><div class="image"><img src="<?= base_url()?>assets/user-assets/images/download.png" alt=""></div><p>'+remark+'</p></div></div>';
        // $('.lecture-video-item').html(div);
        return 0;
      }
      $.ajax({
          type:'post',
          url:'<?= base_url().'User/getResourse' ?>',
          data:{id:id},
          dataType:'json',
          success:function(data){
              $('#resoursec-list').html(data)
          }
      })
      })
    </script>
    <script>
      function openTebname(evt, utebName) {
        var i, tabcontenta, tablinksa;
        tabcontenta = document.getElementsByClassName("tabcontenta");
        for (i = 0; i < tabcontenta.length; i++) {
          tabcontenta[i].style.display = "none";
        }
        tablinksa = document.getElementsByClassName("tablinksa");
        for (i = 0; i < tablinksa.length; i++) {
          tablinksa[i].className = tablinksa[i].className.replace(" active", "");
        }
        document.getElementById(utebName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      
      function saveQuestion(){
          var que = $('#comment').val();
          var id = $('.course-list').find('.active').attr('id');
          if(que == ''){
              swal('warning','Please Enter Question','warning');
              return;
          }
          $.ajax({
              type:'post',
              url:'<?= base_url().'User/askQuestion' ?>',
              data:{que:que,id:id},
              success:function(data){
                  $('#comment').val('');
                  swal('success','Question Posted Successfully','success');
              }
          })
      }
      
          function saveNotes(){
              var label = $('#note_label').val();
              var comment = $('#comment1').val();
              var id = $('.course-list').find('.active').attr('id');
              if (label == '') {
                  swal('warning','Please Enter Label','warning');
                  return;
              }
              if (comment == '') {
                  swal('warning','Please Enter Comment','warning');
                  return;
              }
      
              $.ajax({
                  type:'post',
                  url:'<?= base_url().'User/saveNotes' ?>',
                  data:{label:label,comment:comment,video_id:id},
                  dataType:'json',
                  success:function(data){
                      swal('success','Notes Added Successfully','success');
                      $('#note_label').val('');
                      $('#comment1').val('');
                      $('#saved_user_notes').html(data)
                  }
              })
          }
      
          function getAskQue(value){
                  $.ajax({
                      type:'get',
                      url:"<?= base_url().'User/searchQueList' ?>",
                      data:{search:value},
                      dataType:'json',
                      success:function(data){
                          $('#Articles-list').html(data)
                      }
                  })
          }
      
          $(document).on('click', '.notes-resources', function () {
              var id = $('.course-list').find('.active').attr('id');
              $.ajax({
                  type:'post',
                  url:'<?= base_url().'User/getUserNotes' ?>',
                  data:{id:id},
                  dataType:'json',
                  success:function(data){
                      $('#saved_user_notes').html(data)
                      $('.notes-sidebar-coliman,  .notes-resources').addClass('active');
                  }
              })
          });
    </script>
    </body>
</html>