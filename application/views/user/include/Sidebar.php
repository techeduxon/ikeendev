<section class="dashboard-area" >
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li class="sidenav__item page-active"><a href="<?= base_url().'My-Account'?>"><i class="la la-user"></i>My Profile</a></li>
                    <li class="sidenav__item"><a href="<?= base_url().'My-Courses'?>"><i class="la la-file-video-o"></i>My Courses</a></li>
                    <!-- <li class="sidenav__item"><a href="<?= base_url().'Self-Learning'?>"><i class="la la-bolt"></i>self learning</a></li> -->
                    <!-- <li class="sidenav__item"><a href="<?= base_url().'Live-Classes'?>"><i class="la la-bookmark"></i>live classes</a></li> -->
                    <!-- <li class="sidenav__item"><a href="<?= base_url().'Assessments'?>"><i class="la la-graduation-cap"></i>assessment</a></li> -->
                    <li class="sidenav__item"><a href="<?= base_url().'Certificate'?>"><i class="la la-plus-circle"></i>certificate</a></li>
                    <li class="sidenav__item"><a href="<?= base_url()?>"><i class="la la-power-off"></i> Logout</a></li>
                </ul>
            </div><!-- end side-menu-wrap -->
        </div>
    </div>
    <?php $ses = $this->session->userdata('user_data'); ?>