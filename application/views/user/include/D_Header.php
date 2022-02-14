
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
   color: black;
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
    <!-- end inject -->
</head>
<body style="background-color: #f7f7f7;">

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
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-9">
                        <div class="menu-wrapper">
                            <!-- end contact-form-action -->
                            
                            <div class="logo-right-button d-flex align-items-center">
                                <div class="header-action-button d-flex align-items-center">
                                    <div class="contact-form-action mr-auto">
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
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <ul class="list-items">
                                                                <li class="mb-0">
                                                                    <a href="<?= base_url().'My-Courses'?>" class="d-block">
                                                                        <i class="la la-file-video-o"></i> My courses
                                                                    </a>
                                                                </li>

                                                                <li class="mb-0">
                                                                    <a href="<?= base_url().'My-Account'?>" class="d-block">
                                                                        <i class="la la-user"></i> My Profile
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="<?= base_url().'Cart'?>" class="d-block">
                                                                        <i class="la la-shopping-cart"></i> My cart
                                                                    </a>
                                                                </li>
                                                                
                                                                <li class="mb-0">
                                                                    <a href="<?= base_url().'Edit-Profile'?>" class="d-block">
                                                                        <i class="la la-edit"></i> Edit Profile
                                                                    </a>
                                                                </li>
                                                               
                                                                <li class="mb-0">
                                                                    <a href="<?= base_url().'User/Logout'?>" class="d-block">
                                                                        <i class="la la-power-off"></i> Logout
                                                                    </a>
                                                                </li>
                                                               
                                                            </ul>
                                                        </div><!-- end mess__body -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end logo-right-button -->
                            
                        </div><!-- end menu-wrapper -->
                            <!-- <nav class="main-menu" style="display: none;">
                                <ul>
                                    <li class="sidenav__item page-active"><a href="<?= base_url().'My-Account'?>"><i class="la la-user"></i><span>My Profile</span></a></li>
                                    <li class="sidenav__item"><a href="<?= base_url().'My-Courses'?>"><i class="la la-file-video-o"></i><span>My Courses</span></a></li>
                                    <li class="sidenav__item"><a href="<?= base_url().'Self-Learning'?>"><i class="la la-bolt"></i><span>self learning</span></a></li>
                                    <li class="sidenav__item"><a href="<?= base_url().'Live-Classes'?>"><i class="la la-bookmark"></i><span>live classes</span></a></li>
                                    <li class="sidenav__item"><a href="<?= base_url().'Assessments'?>"><i class="la la-graduation-cap"></i><span>assessment</span></a></li>
                                    <li class="sidenav__item"><a href="<?= base_url().'Certificate'?>"><i class="la la-plus-circle"></i><span>certificate</span></a></li>
                                    <li class="sidenav__item"><a href="<?= base_url()?>"><i class="la la-power-off"></i> <span>Logout</span></a></li>
                                </ul>
                            </nav> -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header><!-- end header-menu-area -->