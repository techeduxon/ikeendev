<?php include('include/Head.php');  ?>
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/toastr/toastr.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/color_skins.css">




        <?php include('include/Header.php');  ?>
     

     <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Courses Details</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>                           
                            <li class="breadcrumb-item">Table</li>
                            <li class="breadcrumb-item active">Courses Details</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card client-detail">
                        <div class="body">
                            <div class="profile-image">
                                <img src="<?= base_url()?>assets/admin/images/user.png" alt="">
                            </div>
                            <div class="details">
                                <h4 class="m-t-0 m-b-0"><strong>BLENDED </strong>LEARNING</h4>
                                <h4 class="m-t-0 m-b-0"><strong>Price</strong> <small>₹ 33,999</small></h4>
                                                            
                                <div class="m-t-15">
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-success">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card client-detail">
                        <div class="body">
                            <div class="teb-links">
                                <ul>
                                    <li><a href="<?= base_url().'Adminpanel/Courses_details'?>" class="btn btn-outline-info active" ><i class="la la-file-video-o"></i> Courses info </a></li>
                                    <li><a href="<?= base_url().'Batches'?>" class="btn btn-outline-info active" ><i class="la la-file-video-o"></i> Batches</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Self_learning'?>" class="btn btn-outline-warning" ><i class="la la-bolt"></i> Self Learning</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Live_classes'?>" class="btn btn-outline-secondary" ><i class="la la-bookmark"></i> Live Classes </a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Assessment'?>" class="btn btn-outline-dark" ><i class="la la-graduation-cap"></i> Assessment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">   
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Courses Name</th>
                                            
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Courses Name</th>
                                           
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><a href="<?= base_url().'Adminpanel/Courses_details'?>"class="btn btn-round btn-primary" >Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><a href="<?= base_url().'Adminpanel/Courses_details'?>"class="btn btn-round btn-primary" >Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><a href="<?= base_url().'Adminpanel/Courses_details'?>"class="btn btn-round btn-primary" >Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><a href="<?= base_url().'Adminpanel/Courses_details'?>"class="btn btn-round btn-primary" >Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><a href="<?= base_url().'Adminpanel/Courses_details'?>"class="btn btn-round btn-primary" >Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><a href="<?= base_url().'Adminpanel/Courses_details'?>"class="btn btn-round btn-primary" >Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><a href="<?= base_url().'Adminpanel/Courses_details'?>"class="btn btn-round btn-primary" >Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><a href="<?= base_url().'Adminpanel/Courses_details'?>"class="btn btn-round btn-primary" >Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><a href="<?= base_url().'Adminpanel/Courses_details'?>"class="btn btn-round btn-primary" >Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><a href="<?= base_url().'Adminpanel/Courses_details'?>"class="btn btn-round btn-primary" >Details</a></td>
                                        </tr>
                                        
                                        
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
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/admin/bundles/mainscripts.bundle.js"></script>


</body>

</html>