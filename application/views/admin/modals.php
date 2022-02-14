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
               <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Footer Content</h2>
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                  <li class="breadcrumb-item active">Footer Content</li>
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
                  <h3 style="color: red">Home Page Modal</h3>
                  <form id="header_form" action="<?= base_url().'Adminpanel/Adminpanel/modal1' ?>" method="post" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-sm-8 form-group">
                           <label>Title</label>
                           <input type="text" name="title" class="form-control" value="<?= $modal1->title ?>" required="required">
                        </div>
                        <div class="col-sm-4 form-group">
                           <label>Image</label>
                           <input type="file" name="myFile" class="form-control" accept="image/*" required="required">
                           <img width="50px" height="50px" src="<?= base_url('uploads/curriculum_pdf/').$modal1->image ?>">
                        </div>
                        <div class="col-sm-12">
                           <label for="show">Show</label>
                           <input type="radio" name="show" required="required" value="show" id="show" <?php if($modal1->show == 'show'){echo "checked";} ?> >
                           <label for="hide">Hide</label>
                           <input type="radio" name="show" value="hide" id="hide" <?php if($modal1->show == 'hide'){echo "checked";} ?>>
                        </div>
                     </div>
                     <button class="btn btn-primary" type="submit">Update</button>
                  </form>
                  <br><br><br>
                  <h3 style="color: red">Offer Modal 1 </h3>
                  <form id="offer_form" action="<?= base_url().'Adminpanel/Adminpanel/modal2' ?>" method="post" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-sm-8 form-group">
                           <label>Title</label>
                           <input type="text" name="title" class="form-control" value="<?= $modal2->title ?>" required="required" >
                        </div>
                        <div class="col-sm-4 form-group">
                           <label>Date</label>
                           <input type="date" name="datetime" class="form-control" required="required" value="<?= $modal2->datetime ?>">
                        </div>
                     </div>
                     <button class="btn btn-primary" type="submit">Update</button>
                  </form>
                  <br><br><br>
                  <h3 style="color: red">Offer Modal 2 </h3>
                  <form id="header2_form" action="<?= base_url().'Adminpanel/Adminpanel/modal3' ?>" method="post" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-sm-8 form-group">
                           <label>Title</label>
                           <input type="text" name="title" class="form-control" value="<?= $modal3->title ?>" required="required" >
                        </div>
                        <div class="col-sm-4 form-group">
                           <label>Code</label>
                           <input type="text" name="code" class="form-control" required="required" value="<?= $modal3->code ?>">
                        </div>
                     </div>
                     <button class="btn btn-primary" type="submit">Update</button>
                  </form>
                  <br><br><br>
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
   <script>
      function isNumber(evt) {
         evt = (evt) ? evt : window.event;
         var charCode = (evt.which) ? evt.which : evt.keyCode;
         if (charCode > 31 && (charCode < 48 || charCode > 57)) {
             return false;
         }
         return true;
      }
   </script>
   <script>
  $(document).ready(function(){
    $('#header_form').validate({
      rules:{ 
        
        myFile:{
          required : true, 
        },
       
        title:{
          required : true, 
        },
      },
      messages:{
       
        myFile:{
          required: '<span style="color:red">Select Image</span>',
        },
      
        title:{
          required: '<span style="color:red">Enter Title</span>',
        },
        
        
      },
    });
    
  });
  $(document).ready(function(){
    $('#offer_form').validate({
      rules:{ 
        
        title:{
          required : true, 
        },

        datetime:{
          required : true, 
        },
        
      },
      messages:{
       
        title:{
          required: '<span style="color:red">Select Icon</span>',
        },
        datetime:{
          required: '<span style="color:red">Select Date</span>',
        },               
        
        
      },
    });
    
  });

  $(document).ready(function(){
    $('#header2_form').validate({
      rules:{ 
        
        code:{
          required : true, 
        },
        title:{
          required : true, 
        },
      },
      messages:{
       
        code:{
          required: '<span style="color:red">Enter Code</span>',
        },
        title:{
          required: '<span style="color:red">Enter Title</span>',
        },
        
        
      },
    });
    
  });
</script>
</body>
</html>