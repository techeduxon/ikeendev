<?php include('include/Head.php') ?>>
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
        <?php $ses_data = $this->session->userdata('logsess');
       ?>   
  

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Below Counter</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Below Counter</li>
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
                          <?= $this->session->flashdata('message') ?>
                          <form id="header-form" action="<?= base_url().'Adminpanel/Content/updateBlowCounter' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-12 form-group">
                                <label>Title 1</label>
                                <input type="text" name="title1" class="form-control" required="required" value="<?= $data[0]['title1'] ?>">
                              </div>
                              <div class="col-sm-12 form-group">
                                <label>Title 2</label>
                                <input type="text" name="title2" class="form-control" required="required" value="<?= $data[0]['title2'] ?>">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Text 1</label>
                                <input type="text" name="text1" class="form-control" required="required" value="<?= $data[0]['text1'] ?>">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Text 1 Image</label>
                                <input type="file" name="image1" class="form-control"  accept="image/*">
                              </div>
                             <div class="col-sm-4 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['image1'] ?>" style="height: 100px;width: 100px">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Text 2</label>
                                <input type="text" name="text2" class="form-control" required="required" value="<?= $data[0]['text2'] ?>">
                              </div>

                              <div class="col-sm-4 form-group">
                                <label>Text 2 Image</label>
                                <input type="file" name="image2" class="form-control"  accept="image/*">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['image2'] ?>" style="height: 100px;width: 100px">
                              </div>

                              <div class="col-sm-4 form-group">
                                <label>Text 3</label>
                                <input type="text" name="text3" class="form-control" required="required" value="<?= $data[0]['text3'] ?>">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Text 3 Image</label>
                                <input type="file" name="image3" class="form-control"  accept="image/*">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['image3'] ?>" style="height: 100px;width: 100px">
                              </div>
                             
                              <div class="col-sm-4 form-group">
                                <label>Button Text</label>
                                <input type="text" name="btnTxt" class="form-control" required="required" value="<?= $data[0]['btnTxt'] ?>">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Image</label>
                                <input type="file" name="myImg" class="form-control"  accept="image/*">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['image'] ?>" style="height: 100px;width: 100px">
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                          </form>
                        </div>
                    </div>
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


</body>

</html>