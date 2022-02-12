<?php include('include/Head.php') ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/toastr/toastr.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/main.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/color_skins.css">
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">
            <img src="http://www.wrraptheme.com/templates/lucid/hr/html/assets/images/logo-icon.svg" width="48" height="48" alt="Lucid">
        </div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

        <?php include('include/Header.php');  ?>
       
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Profile</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                        </div>
                        <div class="body">
                            <div class="col-12">
                              <form method="post" action="<?= base_url().'Adminpanel/Adminpanel/updateProfile' ?>" enctype="multipart/form-data">
                              <div class="row">
                                <div class="col-sm-4 form-group">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" name="name" required="required" placeholder="Enter Name" value="<?= $data['name'] ?>">
                                </div>

                                <div class="col-sm-4 form-group">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" name="email" required="required" placeholder="Enter Email" readonly="readonly" value="<?= $data['email'] ?>">
                                </div>

                                <div class="col-sm-4 form-group">
                                  <label for="contact">Contact No</label>
                                  <input type="text" class="form-control" name="contact" required="required" placeholder="Enter Contact" value="<?= $data['contact'] ?>">
                                </div>

                                <div class="col-sm-3 form-group">
                                  <label for="myImg">Profile</label>
                                  <input type="file" class="form-control" name="myImg" accept="image/*">
                                </div>

                                <div class="col-sm-3 form-group">
                                  <label for="contact">Password</label>
                                  <input type="password" class="form-control" name="new_password" placeholder="Enter Password" autocomplete="off">
                                </div>

                                <div class="col-sm-2 form-group" style="top: 37px;">
                                  <label for="contact"><input type="checkbox"  name="removeImage"> Remove Image</label>
                                </div>

                                <div class="col-sm-3 form-group">
                                <img src="<?= base_url().'uploads/curriculum_pdf/'.$ses_data['image'] ?>" class="rounded-circle user-photo" style="width: 70px;height: 70px;" alt="User Profile Picture">
                                </div>

                                <button class="btn btn-primary" style="margin: auto;">Save</button>
                              </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="modal animated fadeIn" id="addmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Banner</h6>
            </div>
            <div class="modal-body">
                <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                    
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                         <label for="name">Select Page</label>                                
                            <select class="form-control" name="page" id="page">
                              <option value="">Select Page</option>
                              <option value="User-About-Us">Who we are</option>
                              <option value="Leadership">Leadership</option>
                              <option value="Career">Career</option>
                              <option value="Gallery">Gallery</option>
                              <option value="Contact-Us">Contact Us</option>
                              <option value="Become-A-Trainer">Become A Trainer</option>
                              <option value="Edu-On">Edu On </option>
                              <option value="Edu-Webinar">Edu Webbinar</option>
                              <option value="Edu-Help">Edu Help </option>
                              <option value="Reschedule-Policy">Reschdule Policy</option>
                              <option value="Couser-List">Couser List</option>
                              <option value="Course-Calender">Course Calender</option>
                              <option value="Categories">Forum</option>
                            </select>
                           
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                         <label for="title">Title</label>                                
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" autocomplete="off" >   
                        </div>
                    </div>
                      <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                         <label for="name">Image</label>                                
                            <input type="file" class="form-control" name="myImg" id="myImg"  autocomplete="off" >
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </form>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>

<div class="modal animated fadeIn  editmodal" id="assign" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Edit Banner</h6>
            </div>
            <div class="modal-body">
                  <form class="needs-validation" id="editform" method="post"  >
                 <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                    <div class="row clearfix">
                        
                        <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                         <label for="name">Select Page</label>                                
                            <select class="form-control" name="page" id="page1">
                              <option value="">Select Page</option>
                              <option value="User-About-Us">Who we are</option>
                              <option value="Leadership">Leadership</option>
                              <option value="Career">Career</option>
                              <option value="Gallery">Gallery</option>
                              <option value="Contact-Us">Contact Us</option>
                              <option value="Become-A-Trainer">Become A Trainer</option>
                              <option value="Edu-On">Edu On </option>
                              <option value="Edu-Webinar">Edu Webbinar</option>
                              <option value="Edu-Help">Edu Help </option>
                              <option value="Reschedule-Policy">Reschdule Policy</option>
                              <option value="Couser-List">Couser List</option>
                              <option value="Course-Calender">Course Calender</option>
                              <option value="Categories">Forum</option>
                            </select>
                           
                        </div>
                    </div>
                      <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                         <label for="title">Title</label>                                
                            <input type="text" class="form-control" name="title" id="title1" placeholder="Enter Title" autocomplete="off" >   
                        </div>
                    </div>
                      <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                         <label for="name">Image</label>                                
                            <input type="file" class="form-control" name="myImg" id="myImg"  autocomplete="off" >
                            <input type="hidden" name="idd" id="idd">
                            <input type="hidden" name="image" id="image">
                        </div>
                    </div>
                        
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </form>
            </div>
            
        </div>
    </div>
</div>



<!-- Javascript -->
<script src="<?= base_url()?>assets/admin/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url()?>assets/admin/bundles/vendorscripts.bundle.js"></script>

<script src="<?= base_url()?>assets/admin/vendor/toastr/toastr.js"></script>
<script src="<?= base_url()?>assets/admin/bundles/chartist.bundle.js"></script>
<script src="<?= base_url()?>assets/admin/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->

<script src="<?= base_url()?>assets/admin/bundles/mainscripts.bundle.js"></script>
<script src="<?= base_url()?>assets/admin/js/index.js"></script>
<script src="<?= base_url()?>assets/admin/js/pages/ui/dialogs.js"></script>script>
<?php include('include/Footer.php');  ?>
<script>
    setTimeout(() => {
        $('input[name="new_password"]').val('');
    }, 1000);
</script>
</body>

</html>