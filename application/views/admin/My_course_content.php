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
<style type="text/css">
  .my-error-class {
    color:red;
  }
  .my-valid-class {
    color:green;
  }
</style>


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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       <?php if(!empty($this->session->flashdata('update_message'))){  ?>
           <script>
            swal({
                   title: "Success!",
                   text: "Data Updated Successfully.",
                   icon: "success",
                   timer: 3000
                   });
                   
           </script>
       <?php } ?>
        <?php if(!empty($this->session->flashdata('failed_update_message'))){  ?>
           <script>
            swal({
                   title: "Failed!",
                   text: "Somthing Went Wrong.",
                   icon: "failed",
                   timer: 3000
                   });
                   
           </script>
       <?php } ?>
        <?php if(!empty($this->session->flashdata('delete_message'))){  ?>
           <script>
            swal({
                   title: "Success!",
                   text: "Data Deleted Successfully.",
                   icon: "success",
                   timer: 3000
                   });
                   
           </script>
       <?php } ?>
        <?php if(!empty($this->session->flashdata('add_message'))){  ?>
           <script>
            swal({
                   title: "Success!",
                   text: "Data Added Successfully.",
                   icon: "success",
                   timer: 3000
                   });
                   
           </script>
       <?php } ?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>My Course Content</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">My Course Content (Student Dashboard)</li>
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
                          <form id="header-form" action="<?= base_url().'Adminpanel/Content/udpate_my_course' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-6 form-group">
                                <label>Image</label>
                                <input type="file" name="myFile" class="form-control" accept="image/*" >
                              </div>
                               <div class="col-sm-6 form-group">
                                <label>Title 1</label>
                                <input type="text" name="title1" class="form-control" required="required" value="<?= $data->title1 ?>">
                              </div>
                               <div class="col-sm-6 form-group">
                                <label>Title 2</label>
                                <input type="text" name="title2" class="form-control" required="required" value="<?= $data->title2 ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Title 3</label>
                                <input type="text" name="title3" class="form-control" required="required" value="<?= $data->title3 ?>">
                              </div>

                              <div class="col-sm-6 form-group">
                                <label>Buttun Text</label>
                                <input type="text" name="btn_text" class="form-control" required="required" value="<?= $data->btn_text ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Url</label>
                                <input type="text" name="url" class="form-control" required="required" value="<?= $data->url ?>">
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                          </form><br><br><br>
                </div>
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
<script src="<?= base_url()?>assets/admin/bundles/datatablescripts.bundle.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 
<script src="<?= base_url()?>assets/admin/js/pages/tables/jquery-datatable.js"></script>
<script src="<?= base_url()?>assets/admin/js/pages/ui/dialogs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<?php include('include/Footer.php');  ?>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</body>

</html>