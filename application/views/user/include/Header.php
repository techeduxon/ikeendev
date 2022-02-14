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
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/style.css">
<link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/responsive.css">
<!-- end inject -->
<script src="//code.tidio.co/avvxibed5pa05bcebfzj4unnnx62tqsg.js" async></script>
<style type="text/css">
   #myInput {
   background-image: url('/css/searchicon.png'); /* Add a search icon to input */
   background-position: 10px 12px; /* Position the search icon */
   background-repeat: no-repeat; /* Do not repeat the icon image */
   width: 100%; /* Full-width */
   font-size: 16px; /* Increase font-size */
   padding: 10px 20px 12px 30px; /* Add some padding */
   border: 1px solid #ddd; /* Add a grey border */
   margin-bottom: 12px; /* Add some space below the input */
   }
   #myUL {
   /* Remove default list styling */
   list-style-type: none;
   padding: 0;
   margin: 0;
   position: absolute;
   }
   #myUL li a {
   border: 1px solid #ddd; /* Add a border to all links */
   margin-top: -1px; /* Prevent double borders */
   background-color: white; /* Grey background color */
   padding: 7px; /* Add some padding */
   text-decoration: none; /* Remove default text underline */
   font-size: 18px; /* Increase the font-size */
   color: black; /* Add a black text color */
   min-width: 221px;
   display: block; /* Make it into a block element to fill the whole list */
   }
   #myUL li a:hover:not(.header) {
   background-color: #eee; /* Add a hover effect to all links, except for headers */
   }
</style>
</head>
<body>
   <!-- start cssload-loader -->
   <div class="preloader">
      <div class="loader">
         <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
         </svg>
      </div>
   </div>
   <header class="header-menu-area" id="aj_header">
      <?php $txt = $this->User_model->getSelectWhereRow('text','tbl_head_top_head',array('id'=>1,),'','')->text; if(!empty($txt)){ ?>
      <div class="strrp-in">
         <div class="container-fluid">
            <h6>
               <?= $txt ?>
               <?php  $modal2 = json_decode($this->User_model->getSelectWhereRow('data','modals',array('id'=>2),'DESC','')->data);
               if (date('Y-m-d H:i:s',strtotime($modal2->datetime)) >= date('Y-m-d H:i:s')) {
                
                ?>
               <ul>
                  <li>D <span class="days"></span>  </li>
                  <li>H <span class="hours"></span> </li>
                  <li>M <span class="minutes"></span> </li>
                  <li>S <span class="seconds"></span> </li>
               </ul>
               <b class="greb-a"><a href="javascript:void(0);" data-toggle="modal" data-target="#Grab"> Grab Now</a></b>
               <span id="dv-hide-show"><i class="fa fa-times" aria-hidden="true"></i></span>
            <?php } ?>
               
            </h6>
         </div>
      </div>
      <?php } ?>
      <div class="header-menu-content">
         <div class="container">
            <div class="main-menu-content">
               <div class=" new-grige-nev align-items-center">
                  <div class="">
                     <div class="logo-box">
                        <a href="<?= base_url()?>" class="logo"><img style="height: 30px;" src="<?= base_url().'assets/user-assets/' ?>images/Techeduxon.png" alt="logo"></a>
                        <a href="javascript:void(0);" class="mobil-show">
                        <span class="la la-search aj-search-icon"></span>
                        </a>
                        <div class="in-search">
                           <input type="text" class="search-mobile" placeholder="Search for anything" name="">
                        </div>
                        <div class="menu-toggler">
                           <i class="la la-bars"></i>
                           <i class="la la-times"></i>
                           <?php
                              $nav = $this->User_model->getSelectResult('*','tbl_navigation',array('id !='=>0)); 
                              ?>
                           <div class="menu-open">
                              <nav class="main-menu">
                                 <ul>
                                    <?php if($nav[0]->show == '1'){ ?>
                                    <li>
                                       <a href="#">About Us</a>
                                       <ul class="dropdown-menu-item">
                                          <?php if($nav[2]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'User-About-Us'?>">Who we are</a></li>
                                          <?php } ?>
                                          <?php if($nav[3]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Leadership'?>">Leadership</a></li>
                                          <?php } ?>
                                          <?php if($nav[4]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Career'?>">Career</a></li>
                                          <?php } ?>
                                          <?php if($nav[5]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Gallery'?>">Gallery</a></li>
                                          <?php } ?>
                                          <?php if($nav[6]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Contact-Us'?>">Contact Us</a></li>
                                          <?php } ?>
                                          <?php if($nav[7]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Become-A-Trainer'?>">Become A Trainer</a></li>
                                          <?php } ?>

                                          <?php if($nav[16]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Refer-And-Earn'?>">Refer & Friend</a></li>
                                        <?php } ?>

                                         <?php if($nav[17]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Corporate-Training'?>">Corporate Training</a></li>
                                          <?php } ?>


                                       </ul>
                                    </li>
                                    <?php } ?>
                                    <li>
                                       <a href="#">Eduprograms</a>
                                       <ul class="dropdown-menu-item">
                                          <li>
                                             <?php $cat1 = $this->db->where('module','Eduprograms')->get('tbl_course_cat')->result(); if(!empty($cat1)){foreach($cat1 as $val){ ?>
                                          <li>
                                             <a href="javascript:void(0);"><?= $val->category ?></a>
                                             <ul class="dropdown-menu-item">
                                                <?php $cr = $this->db->select('id,title')->where(array('category'=>$val->id,'status'=>1))->get('tbl_course')->result(); if(!empty($cr)){foreach($cr as $val1){ ?>
                                                <li><a href="<?= base_url().'Course/'.$this->encrypt_id->encryptor('encrypt',$val1->id) ?>"><?= $val1->title ?></a></li>
                                                <?php } }else{ ?>
                                                <li><a href="#">No Course Found!.</a></li>
                                                <?php } ?>
                                             </ul>
                                          </li>
                                          <?php } } ?>
                                          </li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="#">Courses</a>
                                       <ul class="dropdown-menu-item">
                                          <?php $cat1 = $this->db->where('module','Courses')->get('tbl_course_cat')->result(); if(!empty($cat1)){foreach($cat1 as $val){ ?>
                                          <li>
                                             <a href="javascript:void(0);"><?= $val->category ?></a>
                                             <ul class="dropdown-menu-item">
                                                <?php $cr = $this->db->select('id,title')->where(array('category'=>$val->id,'status'=>1))->get('tbl_course')->result(); if(!empty($cr)){foreach($cr as $val1){ ?>
                                                <li><a href="<?= base_url().'Course/'.$this->encrypt_id->encryptor('encrypt',$val1->id) ?>"><?= $val1->title ?></a></li>
                                                <?php } }else{ ?>
                                                <li><a href="#">No Course Found!.</a></li>
                                                <?php } ?>
                                             </ul>
                                          </li>
                                          <?php } } ?>
                                       </ul>
                                    </li>
                                    <?php if($nav[1]->show == '1'){ ?>
                                    <li>
                                       <a href="#">Eduon</a>
                                       <ul class="dropdown-menu-item">
                                          <?php if($nav[8]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Edu-On'?>">Edu On </a></li>
                                          <?php } ?>
                                          <?php if($nav[9]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Edu-Webinar'?>">Edu Webinar</a></li>
                                          <?php } ?>
                                          <?php if($nav[10]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Edu-Help'?>">Edu Help </a></li>
                                          <?php } ?>
                                          <?php if($nav[11]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Reschedule-Policy'?>">Reschedule Policy</a></li>
                                          <?php } ?>
                                          <?php if($nav[12]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Couser-List'?>">Couser List</a></li>
                                          <?php } ?>
                                          <?php if($nav[13]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Course-Calender'?>">Course Calender</a></li>
                                          <?php } ?>
                                          <?php if($nav[14]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Categories'?>">Community</a></li>
                                          <?php } ?>   
                                          <?php if($nav[15]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Blog-view'?>" class="">Blog</a></li>
                                          <?php } ?>
                                       </ul>
                                    </li>
                                    <?php } ?>
                                    <li><a href="javascript:void(0);"><i class="fa fa-question-circle" aria-hidden="true"></i></a></li>
                                    <li class="btn-calss"><a href="<?= base_url().'Login'?>" class="login-ico btn-t1">Signup/Login</a></li>
                                 </ul>
                                 <!-- end ul -->
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end col-lg-2 -->
                  <div class=" text-right mobil-hide">
                     <div class="menu-wrapper">
                        <div class="contact-form-action">
                           <form method="post">
                              <div class="input-box">
                                 <div class="form-group">
                                    <input class="form-control" type="text" name="search" id="myInput" placeholder="Search for anything" autocomplete="off">
                                    <ul id="myUL">
                                    </ul>
                                    <span class="la la-search search-icon"></span>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="menu-category">
                           <ul>
                              <?php if($nav[0]->show == '1'){ ?>
                              <li>
                                 <a href="#">About Us</a>
                                 <ul class="cat-dropdown-menu aj-dropdown-menu">
                                    <?php if($nav[2]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'User-About-Us'?>">Who we are</a></li>
                                    <?php } ?>
                                    <?php if($nav[3]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Leadership'?>">Leadership</a></li>
                                    <?php } ?>
                                    <?php if($nav[4]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Career'?>">Career</a></li>
                                    <?php } ?>
                                    <?php if($nav[5]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Gallery'?>">Gallery</a></li>
                                    <?php } ?>
                                    <?php if($nav[6]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Contact-Us'?>">Contact Us</a></li>
                                    <?php } ?>
                                    <?php if($nav[7]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Become-A-Trainer'?>">Become A Trainer</a></li>
                                    <?php } ?>
                                    <?php if($nav[16]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Refer-And-Earn'?>">Refer & Friend</a></li>
                                        <?php } ?>

                                         <?php if($nav[17]->show == '1'){ ?>
                                          <li><a href="<?= base_url().'Corporate-Training'?>">Corporate Training</a></li>
                                          <?php } ?>
                                 </ul>
                              </li>
                              <?php } ?>
                              <li>
                                 <a href="#">Eduprograms</a>
                                 <ul class="cat-dropdown-menu">
                                    <li>
                                       <?php $cat1 = $this->db->where('module','Eduprograms')->get('tbl_course_cat')->result(); if(!empty($cat1)){foreach($cat1 as $val){ ?>
                                    <li>
                                       <a href="javascript:void(0);"><?= $val->category ?> <i class="la la-angle-right"></i></a>
                                       <ul class="sub-menu">
                                          <?php $cr = $this->db->select('id,title')->where(array('category'=>$val->id,'status'=>1))->get('tbl_course')->result(); if(!empty($cr)){foreach($cr as $val1){ ?>
                                          <li><a href="<?= base_url().'Course/'.$this->encrypt_id->encryptor('encrypt',$val1->id) ?>"><?= $val1->title ?></a></li>
                                          <?php } }else{ ?>
                                          <li><a href="#">No Course Found!.</a></li>
                                          <?php } ?>
                                       </ul>
                                    </li>
                                    <?php } } ?>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="#"><i class="la la-th-large mr-1"></i>Courses</a>
                                 <ul class="cat-dropdown-menu">
                                    <?php $cat1 = $this->db->where('module','Courses')->get('tbl_course_cat')->result(); if(!empty($cat1)){foreach($cat1 as $val){ ?>
                                    <li>
                                       <a href="javascript:void(0);"><?= $val->category ?> <i class="la la-angle-right"></i></a>
                                       <ul class="sub-menu">
                                          <?php $cr = $this->db->select('id,title')->where(array('category'=>$val->id,'status'=>1))->get('tbl_course')->result(); if(!empty($cr)){foreach($cr as $val1){ ?>
                                          <li><a href="<?= base_url().'Course/'.$this->encrypt_id->encryptor('encrypt',$val1->id) ?>"><?= $val1->title ?></a></li>
                                          <?php } }else{ ?>
                                          <li><a href="#">No Course Found!.</a></li>
                                          <?php } ?>
                                       </ul>
                                    </li>
                                    <?php } } ?>
                                 </ul>
                              </li>
                              <?php if($nav[1]->show == '1'){ ?>
                              <li>
                                 <a href="#">Eduon</a>
                                 <ul class="cat-dropdown-menu aj-dropdown-menu">
                                    <?php if($nav[8]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Edu-On'?>">Edu On </a></li>
                                    <?php } ?>
                                    <?php if($nav[9]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Edu-Webinar'?>">Edu Webinar</a></li>
                                    <?php } ?>
                                    <?php if($nav[10]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Edu-Help'?>">Edu Help </a></li>
                                    <?php } ?>
                                    <?php if($nav[11]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Reschedule-Policy'?>">Reschedule Policy</a></li>
                                    <?php } ?>
                                    <?php if($nav[12]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Couser-List'?>">Couser List</a></li>
                                    <?php } ?>
                                    <?php if($nav[13]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Course-Calender'?>">Course Calender</a></li>
                                    <?php } ?>
                                    <?php if($nav[14]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Categories'?>">Community</a></li>
                                    <?php } ?>
                                    <?php if($nav[15]->show == '1'){ ?>
                                    <li><a href="<?= base_url().'Blog-view'?>" class="">Blog</a></li>
                                    <?php } ?>
                                 </ul>
                              </li>
                              <!-- <li>
                                 </li> -->
                              <?php } ?>
                              <?php $session=$this->session->userdata('user_data') ?>
                              <?php if(!empty($session['name'])){  ?>
                              <?php  }else{  ?>
                              <li class="btn-calss"><a href="<?= base_url().'User/Login'?>" class="login-ico btn-t1">Signup/Login </a></li>
                              <?php } ?>
                              <!-- <li><a href="javascript:void(0);" class="phone"><i class="fa fa-mobile"></i> +91 98765-43210</a></li> -->
                              <!-- <li><a href="javascript:void(0);">Help <i class="fa fa-question-circle" aria-hidden="true"></i></a></li> -->
                           </ul>
                        </div>
                        <?php $ses = $this->session->userdata('user_data');
                           if(!empty($ses)){ ?>
                        <div class="profile-right">
                           <div class="user-action-wrap">
                              <div class="notification-item user-action-item">
                                 <div class="dropdown">
                                    <button class="notification-btn dot-status online-status dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php if(empty($ses['image'])){ ?>
                                    <img src="<?= base_url().'assets/user-assets/' ?>images/team7.jpg" alt="John Doe">
                                    <?php }else{ ?>
                                    <img src="<?= base_url().'uploads/profile/'.$ses['image'] ?>" alt="John Doe">
                                    <?php } ?>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                                       <div class="mess-dropdown">
                                          <div class="mess__title d-flex align-items-center">
                                             <div class="image">
                                                <a href="#">
                                                <?php if(empty($ses['image'])){ ?>
                                                <img src="<?= base_url().'assets/user-assets/' ?>images/team7.jpg" alt="John Doe">
                                                <?php }else{ ?>
                                                <img src="<?= base_url().'uploads/profile/'.$ses['image'] ?>" alt="John Doe">
                                                <?php } ?>
                                                </a>
                                             </div>
                                             <div class="content">
                                                <h4 class="widget-title font-size-16">
                                                   <a href="#" class="text-white">
                                                   <?= $ses['name'] ?>
                                                   </a>
                                                </h4>
                                                <span class="email"><?= $ses['email'] ?></span>
                                             </div>
                                          </div>
                                          <!-- end mess__title -->
                                          <div class="mess__body">
                                             <ul class="list-items">
                                                <li class="mb-0">
                                                   <a href="<?= base_url().'My-Account'?>" class="d-block">
                                                   <i class="la la-file-video-o"></i> My courses
                                                   </a>
                                                </li>
                                                <li class="mb-0">
                                                   <a href="<?= base_url().'Cart'?>" class="d-block">
                                                   <i class="la la-shopping-cart"></i> My cart
                                                   </a>
                                                </li>
                                                <!-- <li class="mb-0">
                                                   <a href="javascript:void(0);" class="d-block">
                                                       <i class="la la-bookmark"></i> My wishlist
                                                   </a>
                                                   </li> -->
                                                <!--  <li class="mb-0">
                                                   <a href="javascript:void(0);" class="d-block">
                                                       <i class="la la-gear"></i> Settings
                                                   </a>
                                                   </li> -->
                                                <!-- <li class="mb-0">
                                                   <a href="javascript:void(0);" class="d-block">
                                                       <i class="la la-edit"></i> Edit Profile
                                                   </a>
                                                   </li> -->
                                                <!-- <li class="mb-0">
                                                   <a href="#" class="d-block">
                                                       <i class="la la-question"></i> Help
                                                   </a>
                                                   </li> -->
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
                        <?php } ?>
                     </div>
                     <!-- end menu-wrapper -->
                     <nav class="" style="display: none;">
                        <ul>
                           <?php if($nav[0]->show == '1'){ ?>
                           <li>
                              <a href="index.html">About Us</a>
                              <ul class="dropdown-menu-item">
                                 <li><a href="<?= base_url().'Who-we-are'?>">Who we are</a></li>
                                 <li><a href="<?= base_url().'Leadership'?>">Leadership</a></li>
                                 <li><a href="<?= base_url().'Career'?>">Career</a></li>
                                 <li><a href="<?= base_url().'Gallery'?>">Gallery</a></li>
                                 <li><a href="<?= base_url().'Contact-Us'?>">Become A Trainer</a></li>
                                 <li><a href="<?= base_url().'Become-A-Trainer'?>">Contact Us</a></li>
                                 <li><a href="<?= base_url().'Refer-And-Earn'?>">Refer & Friend</a></li>
                                 <li><a href="<?= base_url().'Corporate-Training'?>">Corporate Training</a></li>
                              </ul>
                           </li>
                           <?php } ?>
                           <li>
                              <a href="#">Eduprograms</a>
                              <ul class="dropdown-menu-item">
                                 <li><a href="<?= base_url();?>">course grid</a></li>
                                 <li><a href="<?= base_url();?>">course details</a></li>
                                 <li><a href="<?= base_url();?>">lesson details</a></li>
                                 <li><a href="<?= base_url();?>">My courses</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#">COURSES</a>
                              <ul class="dropdown-menu-item">
                                 <li><a href="<?= base_url();?>">student detail</a></li>
                                 <li><a href="<?= base_url();?>">take quiz</a></li>
                                 <li><a href="<?= base_url();?>">quiz results</a></li>
                                 <li><a href="<?= base_url();?>">quiz details</a></li>
                                 <li><a href="<?= base_url();?>">quiz details 2</a></li>
                                 <li><a href="<?= base_url();?>">Skill Assessment</a></li>
                                 <li><a href="<?= base_url();?>">Skill result</a></li>
                                 <li><a href="<?= base_url();?>">student detail</a></li>
                                 <li><a href="<?= base_url();?>">take quiz</a></li>
                                 <li><a href="<?= base_url();?>">quiz results</a></li>
                                 <li><a href="<?= base_url();?>">quiz details</a></li>
                                 <li><a href="<?= base_url();?>">quiz details 2</a></li>
                                 <li><a href="<?= base_url();?>">Skill Assessment</a></li>
                                 <li><a href="<?= base_url();?>">Skill result</a></li>
                              </ul>
                           </li>
                           <?php if($nav[1]->show == '1'){ ?>
                           <li>
                              <a href="#">EDUON</a>
                              <ul class="dropdown-menu-item">
                                 <?php if($nav[8]->show == '1'){ ?>
                                 <li><a href="<?= base_url().'Edu-On'?>">Edu On </a></li>
                                 <?php } ?>
                                 <?php if($nav[9]->show == '1'){ ?>
                                 <li><a href="<?= base_url().'Edu-Webinar'?>">Edu Webbinar</a></li>
                                 <?php } ?>
                                 <?php if($nav[10]->show == '1'){ ?>
                                 <li><a href="<?= base_url().'Edu-Help'?>">Edu Help </a></li>
                                 <?php } ?>
                                 <?php if($nav[11]->show == '1'){ ?>
                                 <li><a href="<?= base_url().'Reschedule-Policy'?>">Reschdule Policy</a></li>
                                 <?php } ?>
                                 <?php if($nav[12]->show == '1'){ ?>
                                 <li><a href="<?= base_url().'Couser-List'?>">Couser List</a></li>
                                 <?php } ?>
                                 <?php if($nav[13]->show == '1'){ ?>
                                 <li><a href="<?= base_url().'Course-Calender'?>">Course Calender</a></li>
                                 <?php } ?>
                                 <?php if($nav[14]->show == '1'){ ?>
                                 <li><a href="<?= base_url().'Categories'?>">Community</a></li>
                                 <?php } ?>
                                 <li><a href="<?= base_url().'Blog-view'?>" class="">Blog</a></li>
                              </ul>
                           </li>
                           <?php } ?>
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