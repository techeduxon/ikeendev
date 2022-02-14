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

* {
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  box-sizing:border-box;
}
table#DataTables_Table_0 {
    width: 100% !important;
}
*:before, *:after {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
.aj-add-chang {
    white-space: initial;
}
.clearfix {
  clear:both;
}

.text-center {text-align:center;}

a {
  color: tomato;
  text-decoration: none;
}

a:hover {
  color: #2196f3;
}

pre {
display: block;
padding: 9.5px;
margin: 0 0 10px;
font-size: 13px;
line-height: 1.42857143;
color: #333;
word-break: break-all;
word-wrap: break-word;
background-color: #F5F5F5;
border: 1px solid #CCC;
border-radius: 4px;
}

.header {
  padding:20px 0;
  position:relative;
  margin-bottom:10px;
  
}

.header:after {
  content:"";
  display:block;
  height:1px;
  background:#eee;
  position:absolute; 
  left:30%; right:30%;
}

.header h2 {
  font-size:3em;
  font-weight:300;
  margin-bottom:0.2em;
}

.header p {
  font-size:14px;
}



#a-footer {
  margin: 20px 0;
}

.new-react-version {
  padding: 20px 20px;
  border: 1px solid #eee;
  border-radius: 20px;
  box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1);
  
  text-align: center;
  font-size: 14px;
  line-height: 1.7;
}

.new-react-version .react-svg-logo {
  text-align: center;
  max-width: 60px;
  margin: 20px auto;
  margin-top: 0;
}





.success-box {
  margin:50px 0;
  padding:10px 10px;
  border:1px solid #eee;
  background:#f9f9f9;
}

.success-box img {
  margin-right:10px;
  display:inline-block;
  vertical-align:top;
}

.success-box > div {
  vertical-align:top;
  display:inline-block;
  color:#888;
}



/* Rating Star Widgets Style */
.rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  
}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:2.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
}
.aj-tebal-td {
    width: 100% !important;
    white-space: initial !important;
}
label .label-text {
    background: cyan;
}
label input.check:checked + .label-text {
    background: lime;
}
.aj-wid-chang {
    display: inline-grid;
    text-align: center;
}
.aj-wid-chang a {
    margin-bottom: 8px;
    width: fit-content;
}
.aj-wid-chang button {
    margin-bottom: 5px;
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Header</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Header</li>
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
                          <form id="header-form" action="<?= base_url().'Update-Header' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-6 form-group">
                                <label>Heading</label>
                                <input type="text" name="heading" class="form-control" required="required" value="<?= $data[0]['heading'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required="required" value="<?= $data[0]['title'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Input Place Holder</label>
                                <input type="text" name="placeholder" class="form-control" required="required" value="<?= $data[0]['placeholder'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Button Text</label>
                                <input type="text" name="button" class="form-control" required="required" value="<?= $data[0]['button'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Title 2</label>
                                <input type="text" name="title2" class="form-control" required="required" value="<?= $data[0]['title2'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Image</label>
                                <input type="file" name="myImg" accept="image/*" class="form-control">
                                <input type="hidden" name="old_image" value="<?= $data[0]['image'] ?>">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Old Image</label><br>
                                <img src="<?= base_url().'uploads/home_images/'.$data[0]['image'] ?>" style="height: 100px; width: 100px;">
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

<script type="text/javascript">
$(document).ready(function (){
      
        $("#addform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                
                name: "required",
                email: "required",
                status:"required",
                date:"required",
                time:"required",
                contact: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,

                },
               
            },
            messages: {
                name: "Please Enter Your  Name",
                email: "Please Enter Your Email",
                status :"Please Select Status",
                date :"Please Select Date",
                time :"Please Select Time",
                contact: {
                    required:  "Please Enter Your Contact Number",
                    digits:    "Please Enter Valid Contact No",
                    minlength: "Please Enter Valid Contact No",
                    maxlength: "Please Enter Valid Contact No",
                },
               
               
            }
        });

        $("#editform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                
                edit_name: "required",
                edit_email: "required",
                edit_status:"required",
                edit_date:"required",
                edit_time:"required",
                edit_contact: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },

            },
            messages: {
                edit_name: "Please Enter Your  Name",
                edit_email: "Please Enter Your Email",
                edit_status :"Please Select Status",
                edit_date :"Please Select Date",
                edit_time :"Please Select Time",
                edit_contact: {
                    required:  "Please Enter Your Contact Number",
                    digits:    "Please Enter Valid Contact No",
                    minlength: "Please Enter Valid Contact No",
                    maxlength: "Please Enter Valid Contact No",
                },
              
                    
            }
        });
    });
</script>


</body>

</html>