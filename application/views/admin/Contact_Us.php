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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Below Header</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Below Header</li>
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
                          <form id="header-form" action="<?= base_url().'Adminpanel/Content/updateContact' ?>" method="post" enctype= multipart/form-data>
                            <h3 style="color: red">Section 1</h3>
                            <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Icon</label>
                                <input type="file" name="title1" class="form-control" accept="image/*">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['title1'] ?>" style="height: 100px;width: 100px">
                              </div>
                             <!--  <div class="col-sm-4 form-group">
                                <label>Title</label>
                                <input type="text" name="title2" class="form-control" required="required" value="<?= $data[0]['title2'] ?>">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Desc</label>
                                <input type="text" name="title3" class="form-control" required="required" value="<?= $data[0]['title3'] ?>">
                              </div> -->
                            </div>

                            <h3 style="color: red">Section 2</h3>
                            <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Icon</label>
                                <input type="file" name="title4" class="form-control" accept="image/*" >
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['title4'] ?>" style="height: 100px;width: 100px">
                              </div>
                             <!--  <div class="col-sm-4 form-group">
                                <label>Title</label>
                                <input type="text" name="title5" class="form-control" required="required" value="<?= $data[0]['title5'] ?>">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Desc</label>
                                <input type="text" name="title6" class="form-control" required="required" value="<?= $data[0]['title6'] ?>">
                              </div> -->
                            </div>

                            <h3 style="color: red">Section 3</h3>
                            <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Icon</label>
                                <input type="file" name="title7" class="form-control" accept="image/*" >
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['title7'] ?>" style="height: 100px;width: 100px">
                              </div>
                              <!-- <div class="col-sm-4 form-group">
                                <label>Title</label>
                                <input type="text" name="title8" class="form-control" required="required" value="<?= $data[0]['title8'] ?>">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Desc</label>
                                <input type="text" name="title9" class="form-control" requir ed="required" value="<?= $data[0]['title9'] ?>">-->
                              </div>

                            <h3 style="color: red">Section 4</h3>
                            <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Icon</label>
                                <input type="file" name="title10" class="form-control" accept="image/*" >
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['title10'] ?>" style="height: 100px;width: 100px">
                              </div>
                             <!--  <div class="col-sm-4 form-group">
                                <label>Title</label>
                                <input type="text" name="title11" class="form-control" required="required" value="<?= $data[0]['title11'] ?>">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Desc</label>
                                <input type="text" name="title12" class="form-control" required="required" value="<?= $data[0]['title12'] ?>">
                              </div> -->
                            </div>
                              <h3 style="color: red">Contact with us</h3>
                            <div class="row">
                              <div class="col-sm-12 form-group">
                                <label>Desc</label>
                                <textarea name="desc" class="form-control" required="required"><?= $data[0]['desc'] ?></textarea>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-12 form-group">
                                <label>Maps Iframe</label>
                                <textarea name="iframe" class="form-control" required="required"><?= $data[0]['iframe'] ?></textarea>
                              </div>
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
