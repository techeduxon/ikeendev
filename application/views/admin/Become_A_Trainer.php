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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>How The Techeduxon</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">How The Techeduxon</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                           
                                <!-- <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#addmodal">Add About</a></li> -->
                            
                        </div>
                        <div class="body">
                          <?= $this->session->flashdata('message') ?>
                          
                          <form id="header-form" action="<?= base_url().'Adminpanel/Content/updateBecomeTrainer' ?>" method="post" enctype= multipart/form-data>
                           <h3 style="color: red">Section 1</h3>
                            <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Icon 1</label>
                                <input type="file" name="icon1" class="form-control" accept="image/*" >
                              </div>
                              <!-- <div class="col-sm-8 form-group">
                                <label>Title 1</label>
                                <input type="text" name="title1" class="form-control" required="required" value=<?= $data[0]['title1'] ?>"">
                              </div> -->

                              <div class="col-sm-4 form-group">
                                <label>Icon 2</label>
                                <input type="file" name="icon2" class="form-control" accept="image/*" >
                              </div>
                              <!-- <div class="col-sm-8 form-group">
                                <label>Title 2</label>
                                <input type="text" name="title2" class="form-control" required="required" value="<?= $data[0]['title2'] ?>">
                              </div> -->

                              <div class="col-sm-4 form-group">
                                <label>Icon 3</label>
                                <input type="file" name="icon3" class="form-control" accept="image/*" >
                              </div>
                             <!--  <div class="col-sm-8 form-group">
                                <label>Title 3</label>
                                <input type="text" name="title3" class="form-control" required="required" value="<?= $data[0]['title3'] ?>">
                              </div> -->
                            </div>
                             <div class="row">
                              <div class="col-sm-4 form-group">
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['icon1'] ?>" style="height: 70px;width: 70px">
                              </div>
                           

                              <div class="col-sm-4 form-group">
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['icon2'] ?>" style="height: 70px;width: 70px">
                              </div>
                              
                              <div class="col-sm-4 form-group">
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['icon3'] ?>" style="height: 70px;width: 70px">
                              </div>
                            
                            </div>

                            <h3 style="color: red">Section 2</h3>
                            <div class="row">
                              <div class="col-sm-8 form-group">
                                <label>Image</label>
                                <input type="file" name="myImage" class="form-control"  accept="image/*">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['se3img'] ?>" style="height: 70px;width: 70px">
                              </div>

                              <div class="col-sm-12 form-group">
                                <label>Desc</label>
                                <textarea name="sec2Desc" id="sec2Desc" class="form-control" required="required"><?= $data[0]['sec2Desc'] ?></textarea>
                              </div>
                            </div>


                            <h3 style="color: red">Section 4 Left Side </h3>
                            <div class="row">
                              <div class="col-sm-12 form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required="required" value="<?= $data[0]['title'] ?>">
                              </div>

                              <div class="col-sm-12 form-group">
                                <label>Desc</label>
                                <textarea name="sec4Desc" id="sec4Desc1" class="form-control" required="required"><?= $data[0]['sec4Desc'] ?></textarea>
                              </div>
                            </div>


                            <h3 style="color: red">Section 4 Right Side </h3>
                            <div class="row">
                              <div class="col-sm-12 form-group">
                                <label>Title</label>
                                <input type="text" name="titler" class="form-control" required="required" value="<?= $data[0]['titler'] ?>">
                              </div>
                              <div class="col-sm-8 form-group">
                                <label>Image</label>
                                <input type="file" name="imageSec4" class="form-control" accept="image/*">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['se4img'] ?>" style="height: 70px;width: 70px">
                              </div>

                              <div class="col-sm-12 form-group">
                                <label>Desc</label>
                                <textarea name="sec4Descr" id="sec4Descr2" class="form-control" required="required"><?= $data[0]['sec4Descr'] ?></textarea>
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                          </form><br><br><br>

                           <h3 style="color: red">Section 3</h3>
                          <form id="header-form" action="<?= base_url().'Adminpanel/Content/addBecomeSec3title' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-12 form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required="required">
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Add</button>
                          </form><br><br><br>
                           
                          <h3 style="color: red">Title List</h3>
                          <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                       <th>Images</th>
                                       <th>Action</th>
                                    </thead>
                                    <tbody>
                                      <?php if(!empty($title_sec3)){foreach($title_sec3 as $val){ ?>
                                        <tr>
                                           <td><a href="<?= base_url().'Adminpanel/Content/detail_title_sec3?id='.$val['id'] ?>"><?= $val['title'] ?></a></td>
                                           <td><a class="btn btn-danger" href="<?= base_url().'Adminpanel/Content/delete_title_sec3?id='.$val['id'] ?>"><i class="fas fa-trash"></i></td>
                                        </tr>
                                       <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
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

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
  $('#sec2Desc').summernote();
  $('#sec4Desc1').summernote();

  $('#sec4Descr2').summernote();
});
  
</script>
<?php include('include/Footer.php');  ?>

</body>

</html>