<?php if (!empty($this->session->userdata('logsess'))) {
   $ses_data = $this->session->userdata('logsess');
} ?>  
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <a href="<?= base_url('Adminpanel/index')?>">
                    <h6>IkeenAcademy</h6>
                </a>                
            </div>
            
            <div class="navbar-right">
               
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">                        
                        <li class="dropdown">
                           
                        </li>
                        <li><a href="<?= base_url().'Adminpanel/Adminpanel/Profile' ?>"> Edit Profile</a></li> |
                        <li>Logout</li>
                        <li><a href="<?= base_url('Logout'); ?>" class="icon-menu"><i class="icon-login"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <?php if(!empty($ses_data['image'])){ ?>
                <img src="<?= base_url().'uploads/curriculum_pdf/'.$ses_data['image'] ?>" class="rounded-circle user-photo" alt="User Profile Picture">
                <?php }else{ ?>
                <img src="<?= base_url()?>assets/admin/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <?php } ?>
                <div class="dropdown">
                    <span>Welcome <?php if(!empty($ses_data['name'])){ ?> <?= $ses_data['name'] ?><?php } ?></span>
                   
                    <a href="javascript:void(0);" class="user-name" ><strong></strong></a>                  
                    <!-- data-toggle="dropdown"   -->
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                        <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                
            </div>
            <!-- Nav tabs -->
           
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu">
                        <li class="pl-4">Dashboard</li>
                            <li><a href="<?= base_url().'Adminpanel/index' ?>"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                        <li class="pl-4">Content</li>
                            <li>
                                <a href="javacsript:void(0);" class="has-arrow"><i class="icon-credit-card"></i><span>Home Page Content</span></a>
                                <ul>
                                    <li><a href="<?= base_url().'Header'?>">Header</a></li>
                                    <!-- <li><a href="<?= base_url().'Below-Header'?>">Below Header</a></li> -->
                                    <li><a href="<?= base_url().'How-The-Techeduxon'?>">How The IkeenAcademy</a></li>
                                    <li><a href="<?= base_url().'Home_counter'?>">Home Counter</a></li>
                                    <li><a href="<?= base_url().'Below-Counter-Section'?>">Below Counter Section</a></li>
                                    <li><a href="<?= base_url().'news_and_article '?>">News And Articles</a></li>

                                    <li><a href="<?= base_url().'Adminpanel/Content/HeaderTopContenct '?>">Header Top Content</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javacsript:void(0);" class="has-arrow"><i class="icon-credit-card"></i><span>About Us</span></a>
                                <ul>
                                    <li>
                                        <a  href="javacsript:void(0);" class="has-arrow">Who We Are</a>
                                        <ul>
                                            <!-- <li><a href="<?= base_url().'Abouts '?>">About</a></li> -->
                                            <li><a href="<?= base_url().'About_journey '?>">About Journey</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url().'Leaderships '?>">Leadership</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Blog/Job_category'?>">Career</a></li>
                                    <li>
                                        <a  href="javacsript:void(0);" class="has-arrow">Gallery</a>
                                        <ul>
                                            <li><a href="<?= base_url().'Category '?>">Category</a></li>
                                            <li><a href="<?= base_url().'Gallerys '?>">Gallery</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="<?= base_url().'Adminpanel/Content/Contact_Us '?>">Contact-Us</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Content/Become_A_Trainer '?>">Become-A-Trainer</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/corporate_training'?>"><span>Corporate Training</span></a></li>

                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/refer_and_earn'?>"><span>Refer And Earn</span></a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javacsript:void(0);" class="has-arrow"><i class="icon-credit-card"></i><span>EDUON</span></a>
                                <ul>
                                    <li><a href="<?= base_url().'Edu_on'?>">Edu On</a></li>
                                    <li><a href="<?= base_url().'Edu_webinar'?>">Edu Webinar</a></li>
                                    <li><a href="<?= base_url().'Edu_help'?>">Edu Help</a></li>
                                    <li><a href="<?= base_url().'Reschedule'?>">Reschedule Policy</a></li>
                                    <li><a href="<?= base_url().'Course_list'?>">Course List</a></li>
                                    <li><a href="<?= base_url().'Course_Calender'?>"><span>Course-Calender</span></a></li>
                                </ul>
                            </li>
                             <li><a href="<?= base_url().'Login_content'?>"><i class="icon-credit-card"></i><span>Login Signup Image </span></a></li>
                            <li><a href="<?= base_url().'Footer_content'?>"><i class="icon-credit-card"></i><span>Footer Content</span></a></li>

                            <li><a href="<?= base_url().'Adminpanel/Content/Manage_banners'?>"><i class="icon-credit-card"></i><span>Manage banners</span></a></li>

                            <li><a href="<?= base_url().'Adminpanel/Content/My_course_content'?>"><i class="icon-credit-card"></i><span>My Course</span></a></li>
                        <li class="pl-4">Courses</li>
                             <li>
                                <a href="javacsript:void(0);" class="has-arrow"><i class="icon-credit-card"></i><span>Courses</span></a>
                                <ul>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/Categories'?>">Categories</a></li>
                                    <li><a href="<?= base_url().'Courses'?>">Add Courses</a></li>
                                    <li><a href="<?= base_url().'View-course'?>">View Courses</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/assignCourse'?>">Assign Course</a></li>
                                </ul>
                            </li>
                        <li class="pl-4">Others</li>
                            
                            <li><a href="<?= base_url().'Testimonial'?>"><i class="icon-credit-card"></i><span>Testimonial</span></a></li>


                            <!-- <li><a href="<?= base_url().'Enquiry_contact'?>"><i class="icon-credit-card"></i><span>Enquiry Contact</span></a></li> -->
                            <li>
                                <a href="javacsript:void(0);" class="has-arrow"><i class="icon-credit-card"></i><span>Enquiry</span></a>
                                <ul>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/enquiry?page=contact_us'?>">Contact Us</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/enquiry?page=become-a-trainer'?>">Become A Trainer</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/enquiry?page=edu_webinar'?>">Edu Webinar</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/enquiry?page=edu_help'?>">Edu Help</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/enquiry?page=course_list'?>">Course List</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/enquiry?page=course-detail'?>">Course Detail</a></li>
                                     <li><a href="<?= base_url().'Adminpanel/Adminpanel/enquiry2'?>">Refering and Earn</a></li>

                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/enquiry?page=Corporate-Training'?>">Corporate-Training</a></li>
                                </ul>
                            </li>


                        <li class="pl-4">User/Trainer List</li>
                        <li>
                            <li><a href="<?= base_url().'Trainer_list'?>"><i class="icon-credit-card"></i><span>Trainer List</span></a></li>
                            <li><a href="<?= base_url().'Learner_list'?>"><i class="icon-credit-card"></i><span>Learner List</span></a></li>
                        </li>

                        <li class="pl-4">Form</li>
                        <li>
                            <li><a href="<?= base_url().'Adminpanel/Adminpanel/Technologies'?>"><i class="icon-credit-card"></i><span>Technologies</span></a></li>
                        </li>

                        <li class="pl-4">Orders</li>
                        <li><a href="<?= base_url().'Adminpanel/Adminpanel/Orders'?>"><i class="icon-credit-card"></i><span>Order List</span></a></li>
                        <li><a href="<?= base_url().'Adminpanel/Adminpanel/ExamRequest'?>"><i class="icon-credit-card"></i><span>Exam Requests</span></a></li>

                        <li class="pl-4">Header Option</li>
                        <li><a href="<?= base_url().'Adminpanel/Adminpanel/ShowAndDisplay'?>"><i class="icon-credit-card"></i><span>Show And Display Nav.</span></a></li>

                        <li class="pl-4">Blog</li>
                        <li><a href="<?= base_url().'Adminpanel/Adminpanel/BlogComment'?>"><i class="icon-credit-card"></i><span>Blog Comment</span></a></li>

                        <li class="pl-4">Admin</li>
                        <li><a href="<?= base_url().'Adminpanel/Adminpanel/adminList'?>"><i class="icon-credit-card"></i><span>Admin List</span></a></li>

                        <li class="pl-4">Modal</li>
                        <li><a href="<?= base_url().'Adminpanel/Adminpanel/modals'?>"><i class="icon-credit-card"></i><span>Modals</span></a></li>

                       
                        <li class="pl-4">Certificate Request</li>
                        <li><a href="<?= base_url().'Adminpanel/Adminpanel/certificate_request'?>"><i class="icon-credit-card"></i><span>Certificate Request</span></a></li>
                       </ul>
                    </nav>          
            </div>          
        </div>
    </div>








  