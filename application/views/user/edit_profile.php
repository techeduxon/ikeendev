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
    <!-- end cssload-loader -->
    <!--======================================
      START HEADER AREA
      ======================================-->
    <!-- end cssload-loader -->
    <!--======================================
      START HEADER AREA
      ======================================-->
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/line-awesome.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/a-style.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/responsive.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/jquery.filer.css">
    <!-- end inject -->
  </head>
  <body class="new-cursec-body" style="background-color: #f7f7f7;">
    <!-- start cssload-loader -->
    <div class="preloader">
      <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
          <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
      </div>
    </div>
    <header class="header-menu-area dashboard-header">
      <div class="header-menu-content dashboard-menu-content">
        <div class="container-fluid">
          <div class="main-menu-content">
            <div class="row align-items-center">
              <div class="col-lg-3">
                <div class="set-menu d-flex">
                  <div class="left-hide-n-show">
                    <a href="javascript:void(0);" class="chang-css"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                  </div>
                  <div class="logo-box">
                    <a href="<?= base_url()?>" class="logo"><img style="height: 30px;     position: absolute;" src="<?= base_url().'assets/user-assets/' ?>images/Techeduxon.png" alt="logo"></a>
                    <div class="menu-toggler">
                      <i class="la la-bars"></i>
                      <i class="la la-times"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end col-lg-2 -->
              <div class="col-lg-9">
                <div class="menu-wrapper">
                  <!-- end contact-form-action -->
                  <div class="logo-right-button d-flex align-items-center">
                    <div class="header-action-button d-flex align-items-center">
                      <div class="contact-form-action mr-auto">
                        <form method="post">
                          <div class="input-box">
                            <div class="form-group">
                              <input class="form-control" type="text" name="search" placeholder="Search for anything">
                              <span class="la la-search search-icon"></span>
                            </div>
                          </div>
                          <!-- end input-box -->
                        </form>
                      </div>
                      <div class="user-action-wrap">
                        <div class="notification-item user-action-item">
                          <div class="dropdown">
                            <button class="notification-btn dot-status online-status dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if(empty($this->session->userdata('user_data')['image'])){ ?>
                            <img src="<?= base_url().'assets/user-assets/' ?>images/team7.jpg" alt="John Doe">
                            <?php }else{ ?>
                            <img src="<?= base_url().'uploads/profile/'.$this->session->userdata('user_data')['image'] ?>" alt="John Doe">
                            <?php } ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                              <div class="mess-dropdown">
                                <div class="mess__title d-flex align-items-center">
                                  <div class="image">
                                    <a href="#">
                                    <?php if(empty($this->session->userdata('user_data')['image'])){ ?>
                                    <img src="<?= base_url().'assets/user-assets/' ?>images/team7.jpg" alt="John Doe">
                                    <?php }else{ ?>
                                    <img src="<?= base_url().'uploads/profile/'.$this->session->userdata('user_data')['image'] ?>" alt="John Doe">
                                    <?php } ?>
                                    </a>
                                  </div>
                                  <div class="content">
                                    <h4 class="widget-title font-size-16">
                                      <a href="#" class="text-white">
                                      <?= $this->session->userdata('user_data')['name'] ?>
                                      </a>
                                    </h4>
                                    <span class="email"><?= $this->session->userdata('user_data')['email'] ?></span>
                                  </div>
                                </div>
                                <!-- end mess__title -->
                                <div class="mess__body">
                                  <ul class="list-items">
                                    <li class="mb-0">
                                      <a href="<?= base_url().'My-Courses'?>" class="d-block">
                                      <i class="la la-file-video-o"></i> My courses
                                      </a>
                                    </li>
                                    <li class="mb-0">
                                      <a href="<?= base_url().'Cart'?>" class="d-block">
                                      <i class="la la-shopping-cart"></i> My cart
                                      </a>
                                    </li>
                                    <li class="mb-0">
                                      <a href="<?= base_url().'User/Logout'?>" class="d-block">
                                      <i class="la la-power-off"></i> Logout
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                                <!-- end mess__body -->
                              </div>
                              <!-- end mess-dropdown -->
                            </div>
                            <!-- end dropdown-menu -->
                          </div>
                          <!-- end dropdown -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end logo-right-button -->
                </div>
                <!-- end menu-wrapper -->
                <nav class="main-menu new-body-hed" >
                  <ul>
                    <li class="sidenav__item page-active"><a href="<?= base_url().'My-Account'?>"><i class="la la-user"></i><span> My Profile</span></a></li>
                    <li class="sidenav__item"><a href="<?= base_url().'My-Courses'?>"><i class="la la-file-video-o"></i><span> My Courses</span></a></li>
                    <li class="sidenav__item"><a href="<?= base_url().'Categories'?>" target="_blank" ><i class="fa fa-comments-o"></i><span> Community</span></a></li>
                    <!-- <li class="sidenav__item"><a href="<?= base_url().'Blog-List'?>" target="_blank"><i class="la la-plus-circle"></i><span> Blog</span></a></li> -->
                    <li class="sidenav__item"><a href="javascript:void(0);" data-toggle="modal" data-target="#help_modal"><i class="fa fa-question-circle"></i> <span> Help</span></a></li>
                  </ul>
                  <!-- end ul -->
                </nav>
              </div>
              <!-- end col-lg-10 -->
            </div>
            <!-- end row -->
          </div>
        </div>
        <!-- end container-fluid -->
      </div>
      <!-- end header-menu-content -->
    </header>
    <!-- end header-menu-area -->
    <?php $ses = $this->session->userdata('user_data'); ?>
    <div class="dashboard-content-wrap aj-my-acount">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-content dashboard-bread-content d-flex align-items-center justify-content-between">
            <div class="user-bread-content d-flex align-items-center">
              <div class="bread-img-wrap">
                <?php if(empty($this->session->userdata('user_data')['image'])){ ?>
                <img src="<?= base_url().'assets/user-assets/' ?>images/team7.jpg" alt="John Doe">
                <?php }else{ ?>
                <img src="<?= base_url().'uploads/profile/'.$this->session->userdata('user_data')['image'] ?>" alt="John Doe">
                <?php } ?>
              </div>
              <div class="section-heading">
                <h2 class="section__title font-size-30"><?= $user->name ?></h2>
              </div>
            </div>
          </div>
        </div>
        <!-- end col-lg-12 -->
      </div>
      <!-- end row -->
      <div class="row mt-4">
        <div class="col-lg-12">
          <div class="aj-tebs">
            <ul>
              <li><a href="<?= base_url().'My-Account'?>" > Profile</a></li>
              <li><a href="<?= base_url().'Edit-Profile'?>" class="active">Edit Profile</a></li>
              <li><a href="<?= base_url().'Change-Password'?>">Change Password</a></li>
              <li><a href="<?= base_url().'Certificates'?>">Certificates</a></li>
              <!-- <li><a href="<?= base_url().'Exam'?>">Exam</a></li> -->
            </ul>
          </div>
          <div class="section-block">
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12">
          <div class="card-box-shared">
            <div class="card-box-shared-title">
              <h3 class="widget-title">Edit Profile</h3>
              <?= $this->session->flashdata('messages'); ?>
            </div>
            <form method="post" enctype="multipart/form-data" action="<?= base_url('User/update_profile'); ?>">
              <div class="row">
                <div class="col-lg-4">
                  <div class="col-lg-12">
                    <div class="profile-chang-box">
                      <div class="form-group">
                        <div class="image-profile">
                          <?php if(empty($this->session->userdata('user_data')['image'])){ ?>
                          <img src="<?= base_url(),'assets/user-assets/images'?>/avtar.png">
                          <?php }else{ ?>
                          <img src="<?= base_url().'uploads/profile/'.$this->session->userdata('user_data')['image'] ?>" alt="John Doe">
                          <?php } ?>
                          <span class="profile-input"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                          <input type="file" name="myImg" class="profile-image-sec" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="pwd">Full Name</label>
                      <input type="text" class="form-control" placeholder="Full Name" id="name" name="name" value="<?= $user->name ?>" required="required">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="pwd">Email Name</label>
                      <input type="text" name="email" class="form-control" placeholder="Email Name" id="pwd" value="<?= $user->email ?>" required="required" >
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="pwd">Phone</label>
                      <input type="text" name="contact" class="form-control" placeholder="Phone" minlength="7" maxlength="13" name="contact" value="<?= $user->contact ?>">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="pwd">Location</label>
                      <!-- <input type="text" class="form-control"  placeholder="First Name" id="pwd"> -->
                      <input class="form-control" type="text" name="location" placeholder="location" value="<?= $user->location ?>">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="pwd">Time Zone</label>
                      <input class="form-control" type="text" name="timeZone" placeholder="Time Zone" value="<?= $user->timeZone ?>">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="pwd">DOB</label>
                      <input class="form-control" type="date" name="dob" placeholder="Date Of Birth" value="<?= $user->dob ?>">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="form-check pl-0 ">
                          <label class="pl-0">Gender</label>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-check mb-2 mr-sm-2">
                          <label class="form-check-label">
                          <input class="form-check-input" name="gender" <?php if($user->gender == 'male'){echo "checked";} ?> value="male" type="radio"> Male
                          </label>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-check mb-2 mr-sm-2">
                          <label class="form-check-label">
                          <input class="form-check-input" name="gender" <?php if($user->gender == 'female'){echo "checked";} ?> value="female" type="radio"> Female
                          </label>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-check mb-2 mr-sm-2">
                          <label class="form-check-label">
                          <input class="form-check-input" name="gender" <?php if($user->gender == 'other'){echo "checked";} ?> value="other" type="radio"> other
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mt-3" >
                    <h4>Work Presence</h4>
                    <hr>
                  </div>
                  <div class="socail-form-in-edit">
                    <ul>
                      <li><a href="javascriot:void(0);" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i><input style="width: 344px;" type="text" name="linkdin" value="<?= $user->linkdin ?>" placeholder="Your Linkdin URL"></a></li>
                      <li><a href="javascriot:void(0);" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><input style="width: 344px;" type="text" name="facebook" value="<?= $user->facebook ?>"  placeholder="Your Facebook URL"></a></li>
                      <li><a href="javascriot:void(0);" class="globe"><i class="fa fa-globe" aria-hidden="true"></i><input style="width: 344px;" type="text" name="website" value="<?= $user->website ?>"  placeholder="Your Website URL"></a></li>
                      <li><a href="javascriot:void(0);" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><input style="width: 344px;" type="text" name="twetter" value="<?= $user->twetter ?>"  placeholder="Your Twitter URL"></a></li>
                      <li><a href="javascriot:void(0);" class="chrome"><i class="fa fa-chrome" aria-hidden="true"></i><input style="width: 344px;" type="text" name="chrome" value="<?= $user->chrome ?>"  placeholder="Your Other Website URL"></a></li>
                    </ul>
                  </div>
                  <div class="mt-3" >
                    <h4>Work Experience</h4>
                  </div>
                  <div>
                    <button type="button" class=" add-more-btn  " id="addMore" add="1">+Add Work Experience</button> 
                    <p id="addMorep"  style="color: green"></p>
                    <hr>
                  </div>
                  <div class="row" id="dContecnt">
                    <?php 
                      $department = array('');
                      $company = array('');
                      $experience =  array('');
                      if(!empty($user->department)){
                          $department = explode(',', $user->department); 
                      }else{}
                      if(!empty($user->company)){
                          $company = explode(',', $user->company);
                      }

                      if(!empty($user->experience)){
                          $experience = explode(',', $user->experience);
                      }
                      ?>
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom004">Designation</label>
                      <input type="text" class="form-control" id="department" name="department[]" placeholder="Designation" value="<?= $department[0] ?>" >
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom004">Company</label>
                      <input type="text" class="form-control" id="Company" name="company[]" placeholder="Company" value="<?= $company[0] ?>" >
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom004">Year of Experience</label>
                      <input type="text" class="form-control" id="experience" name="experience[]" placeholder="Experience" value="<?= $experience[0] ?>" >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="col-lg-12">
                    <div class="mt-3" >
                      <h4>Education</h4>
                    </div>
                    <div>
                      <button type="button" class=" add-more-btn  " id="addMorea" add="1">+Add Education</button> 

                      <p id="addMoreap"  style="color: green"></p>
                      <hr>
                    </div>
                    <div class="row" id="dContecnta">
                      <?php 
                        $qualification = array('');
                        $college_School = array('');
                        $specialization = array('');
                        $form = array('');
                        $to = array('');
                        if(!empty($user->qualification)){
                            $qualification = explode(',', $user->qualification); 
                        }
                        if(!empty($user->college_School)){
                            $college_School = explode(',', $user->college_School);
                        }
                        
                        if(!empty($user->specialization)){
                            $specialization = explode(',', $user->specialization);
                        }
                        if(!empty($user->from)){
                            $form = explode(',', $user->from);
                        }
                        if(!empty($user->to)){
                            $to = explode(',', $user->to);
                        }
                        ?>
                      <div class="col-md-12 mb-3">
                        <label for="">Qualification</label>
                        <select class="form-control" name="qualification[]" >
                          <option value="1" <?php if($qualification[0] == '1'){echo "selected";} ?> >Under Graduate</option>
                          <option value="2" <?php if($qualification[0] == '2'){echo "selected";} ?> >Graduate</option>
                          <option value="3" <?php if($qualification[0] == '3'){echo "selected";} ?> >Post Graduate</option>
                          <!-- <option value="4" <?php if($qualification[0] == '4'){echo "selected";} ?> >4</option> -->
                        </select>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="">College/School</label>
                        <input type="text" class="form-control" id="College_School" name="college_School[]" placeholder="College/School" value="<?= $college_School[0] ?>">
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="">Specialization </label>
                        <input type="text" class="form-control" id="specialization " name="specialization[]" placeholder="Specialization " value="<?= $specialization[0] ?>"  >
                      </div>
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-6">
                            <label for="">From </label>
                            <input type="date" class="form-control" id="from " name="from[]" value="<?= $form[0] ?>" autocomplete="off">
                          </div>
                          <div class="col-lg-6">
                            <label for="">To </label>
                            <input type="date" class="form-control" id="to_date " name="to[]" value="<?= $to[0] ?>" autocomplete="off">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mt-3" >
                      <h4>Interests</h4>
                    </div>
                    <div>
                      <button type="button" class=" add-more-btn  " id="addMoree" add="1">+Add An Interests</button> 

                      <p id="addMoreep"  style="color: green"></p>
                      <hr>
                    </div>
                    <div class="row" id="dContecnte">
                      <?php 
                        $add = array('');
                        if(!empty($user->add)){
                            $add = explode(',', $user->add); 
                        }
                        ?>
                      <div class="col-md-12 mb-3">
                        <label for="">add</label>
                        <input type="text" class="form-control" id="add" name="add[]" placeholder="add" value="<?= $add[0] ?>" >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 mt-2 text-right">
                  <div class="col-lg-12">
                    <button class="theme-btn" type="submit">submit now</button>
                  </div>
                </div>
            </form>
            </div>
          </div>
          <!-- end col-lg-8 -->
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright-content mt-0 border-top-0 text-center">
              <div class="row">
                <div class="col-lg-12">
                  <p class="copy__desc">&copy; 2020 Techeduxon. All Rights Reserved. by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs.</a></p>
                </div>
                <!-- end col-lg-12 -->
              </div>
              <!-- end row -->
            </div>
            <!-- end copyright-content -->
          </div>
          <!-- end col-lg-12 -->
        </div>
      </div>
      <!-- end container-fluid -->
    </div>
    </section>
    <?php include ('include/D_Footer.php'); ?>
    <script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
    <script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>
    <script type="text/javascript">
      $('#addMore').click(function(){
          var add = $(this).attr('add');
          $('#addMorep').html('New filed added !');
          $(this).attr('add',parseInt(add)+1);
          var cnt = '<hr><div class="" style="width:100%;" id="row'+add+'"><div class="col-md-12 mb-3"><label for="validationCustom004">Designation</label><input type="text" class="form-control" id="department" name="department[]" placeholder="Designation"  required></div><div class="col-md-12 mb-3"><label for="validationCustom004">Company</label><input type="text" class="form-control" id="Company" name="company[]" placeholder="Company"  required></div><div class="col-md-12 mb-3"><label for="validationCustom004">Year of Experience</label><input type="text" class="form-control" id="experience" name="experience[]" placeholder="Experience"  ></div><button type="button" class="btn btn-icon mt-3 btn-danger removeRow" onclick="removeRow('+add+')" id="'+add+'"> <i class="fa fa-times" aria-hidden="true"></i></button></div></div></div></div>';
          $('#dContecnt').append(cnt)
      })
      
      $(function(){
          <?php $i=0; foreach($department as $val){ if($i!=0){?>
              var add = <?= $i ?>;
              $(this).attr('add',parseInt(add)+1);
          var cnt = '<hr><div class="" style="width:100%;" id="row'+add+'"><div class="col-md-12 mb-3"><label for="validationCustom004">Designation</label><input type="text" class="form-control" id="department" value="<?= $val ?>" name="department[]" placeholder="Designation"  required></div><div class="col-md-12 mb-3"><label for="validationCustom004">Company</label><input type="text" class="form-control" id="Company" name="company[]" placeholder="Company" value="<?= $company[$i] ?>" required><button type="button" class="btn btn-icon mt-3 btn-danger removeRow" onclick="removeRow('+add+')" id="'+add+'"> <i class="fa fa-times" aria-hidden="true"></i></button></div></div></div></div>';
          $('#dContecnt').append(cnt)
          <?php } $i++;} ?>
      });
      
                                  
      function removeRow(id){
          $('#row'+id).remove()
      }
    </script>
    <script type="text/javascript">
      $('#addMorea').click(function(){
          var add = $(this).attr('add');

          $('#addMoreap').html('New filed added !');
          $(this).attr('add',parseInt(add)+1);
          var cnt = '<hr><div class="" style="width:100%;" id="rowa'+add+'"><div class="col-md-12 mb-3"><label for="">Qualification</label><select class="form-control" name="qualification[]" id="sel1"><option value="1">Under Graduate</option><option value="2">Graduate</option><option value="3">Post Graduate</option></select></div><div class="col-md-12 mb-3"><label for="">College/School</label><input type="text" class="form-control" id="College_School" name="college_School[]" placeholder="College/School"  required></div><div class="col-md-12 mb-3"><label for="">Specialization </label><input type="text" class="form-control" id="specialization " name="specialization[]" placeholder="Specialization "  required></div><div class="col-lg-12"><div class="row"><div class="col-lg-6"><label for="">From </label><input type="date" class="form-control" id="from " autocomplete="off" name="from[]" placeholder="Specialization "  required></div><div class="col-lg-6"><label for="">To </label><input type="date" class="form-control" id="to_date " name="to[]" autocomplete="off" placeholder="Specialization "  required></div></div><button type="button" class="btn btn-icon mt-3 btn-danger removeRow" onclick="removeRowe('+add+')" id="'+add+'"> <i class="fa fa-times" aria-hidden="true"></i></button></div></div></div></div>';
          $('#dContecnta').append(cnt)
      })
      
       $(function(){
          <?php $i=0; foreach($qualification as $val){ if($i!=0){?>
              var add = <?= $i ?>;
              $(this).attr('add',parseInt(add)+1);
           var cnt = '<hr><div class="" style="width:100%;" id="rowa'+add+'"><div class="col-md-12 mb-3"><label for="">Qualification</label><select class="form-control" name="qualification[]" id="sel1"><option>1</option><option>2</option><option>3</option><option>4</option></select></div><div class="col-md-12 mb-3"><label for="">College/School</label><input type="text" class="form-control" value="<?= $college_School[$i] ?>" id="College_School" name="college_School[]" placeholder="College/School"  required></div><div class="col-md-12 mb-3"><label for="">Specialization </label><input type="text" class="form-control" value="<?= $specialization[$i] ?>" id="specialization " name="specialization[]" placeholder="Specialization "  required></div><div class="col-lg-12"><div class="row"><div class="col-lg-6"><label for="">From </label><input type="date" value="<?= $form[$i] ?>" class="form-control" id="from " name="from[]" placeholder="Specialization "  required></div><div class="col-lg-6"><label for="">To </label><input type="date" class="form-control" id="to_date " value="<?= $to[$i] ?>" name="to[]" placeholder="Specialization "  required></div></div><button type="button" class="btn btn-icon mt-3 btn-danger removeRow" onclick="removeRowe('+add+')" id="'+add+'"> <i class="fa fa-times" aria-hidden="true"></i></button></div></div></div></div>';
          $('#dContecnta').append(cnt)
          <?php } $i++;} ?>
      });
      
                                  
      function removeRowe(id){
          $('#rowa'+id).remove()
      }
    </script>
    <script type="text/javascript">
      $('#addMoree').click(function(){
          var add = $(this).attr('add');

          $('#addMoreep').html('New filed added !');
          $(this).attr('add',parseInt(add)+1);
          var cnt = '<hr><div class="" style="width:100%;" id="rowe'+add+'"><div class="col-md-12 mb-3"><label for="validationCustom004">add</label><input type="text" class="form-control" id="add" name="add[]" placeholder="add"  required></div><div class="col-md-12 mb-3"><button type="button" class="btn btn-icon mt-3 btn-danger removeRow" onclick="removeRowea('+add+')" id="'+add+'"> <i class="fa fa-times" aria-hidden="true"></i></button></div></div></div></div>';
          $('#dContecnte').append(cnt)
          
      });
      
      $(function(){
          <?php $i=0; foreach($add as $val){ if($i!=0){?>
              var add = <?= $i ?>;
              $(this).attr('add',parseInt(add)+1);
           var cnt = '<hr><div class="" style="width:100%;" id="rowe'+add+'"><div class="col-md-12 mb-3"><label for="validationCustom004">add</label><input type="text" class="form-control" value="<?= $val ?>" id="add" name="add[]" placeholder="add"  required></div><div class="col-md-12 mb-3"><button type="button" class="btn btn-icon mt-3 btn-danger removeRow" onclick="removeRowea('+add+')" id="'+add+'"> <i class="fa fa-times" aria-hidden="true"></i></button></div></div></div></div>';
          $('#dContecnte').append(cnt)
          <?php } $i++;} ?>
      });
      
                                  
      function removeRowea(id){
          $('#rowe'+id).remove()
      }
    </script>
  </body>
</html>