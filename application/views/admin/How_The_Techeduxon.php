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
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>How The Ikneeacademy</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">How The IkeenAcademy</li>
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
                          <form id="header-form" action="<?= base_url().'Update-How-The-Techeduxon' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-12 form-group">
                                <label>Iframe</label>
                                <textarea name="iframe" class="form-control" required="required"><?= $data[0]['iframe'] ?></textarea>
                              </div>
                              <div class="col-sm-12 form-group">
                                <!-- <label>Title</label> -->
                                <label>Content</label>
                                <textarea name="title" class="form-control" required="required" ><?= $data[0]['title'] ?></textarea>
                                 <script>
                                      CKEDITOR.replace( 'title' );
                              </script>
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                          </form><br><hr>

                         <!--  <h3 style="color: red">Home Page Counter Below Course</h3>
                          <form id="header-form" action="<= base_url().'Adminpanel/Content/updateHomeCounter' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-6 form-group">
                                <label>Counter 1</label>
                                <input type="text" name="counter1" class="form-control" required="required" value="<= $count[0]['counter1'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Counter Title 1</label>
                                <input type="text" name="counter_title_1" class="form-control" required="required"  value="<= $count[0]['counter_title_1'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Counter 2</label>
                                <input type="text" name="counter2" class="form-control" required="required"  value="?= $count[0]['counter2'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Counter Title 2</label>
                                <input type="text" name="counter_title_2" class="form-control" required="required" value="<= $count[0]['counter_title_2'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Counter 3</label>
                                <input type="text" name="counter3" class="form-control" required="required" value="<= $count[0]['counter3'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Counter Title 3</label>
                                <input type="text" name="counter_title_3" class="form-control" required="required" value="<= $count[0]['counter_title_3'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Counter 4</label>
                                <input type="text" name="counter4" class="form-control" required="required" value="<= $count[0]['counter4'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Counter Title 4</label>
                                <input type="text" name="counter_title_4" class="form-control" required="required" value="<= $count[0]['counter_title_4'] ?>">
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                          </form><br><br><br>
 -->
                           <!-- <h3 style="color: red">Content</h3>
                          <form id="header-form" action="<?= base_url().'Adminpanel/Content/addHomeImage' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-12 form-group">
                                <label>Content</label>
                                <textarea name="text" class="form-control" required="required" ></textarea>
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                          </form><br><br><br> -->
                          <!-- <h3 style="color: red">Image List</h3> -->
                          <!-- <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                       <th>Images</th>
                                       <th>Action</th>
                                    </thead>
                                    <tbody>
                                      <?php if(!empty($image)){foreach($image as $val){ ?>
                                        <tr>
                                           <td><img src="<?= base_url().'uploads/home_images/'.$val['image'] ?>" style="height: 70px;width: 100px"></td>
                                           <td><a class="btn btn-danger" href="<?= base_url().'Adminpanel/Content/delete_home_image?id='.$val['id'] ?>"><i class="fas fa-trash"></i></td>
                                        </tr>
                                       <?php } } ?>
                                    </tbody>
                                </table>
                            </div> -->

                             <!-- <h3 style="color: red">Below Image</h3> -->
                          <!-- <form id="header-form" action="<?= base_url().'Adminpanel/Content/techForBussiness' ?>" method="post" enctype= multipart/form-data>
                            <?php $det = $this->db->get('techForBussiness')->row(); ?>
                            <div class="row">
                              <div class="col-sm-6 form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required="required" value="<?= $det->title ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Url</label>
                                <input type="text" name="url" class="form-control" required="required" value="<?= $det->url ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                            </div>
                          </form> -->
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