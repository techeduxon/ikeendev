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
   <?php $ses_data = $this->session->userdata('logsess');
      ?>
   <div id="main-content">
      <div class="container-fluid">
         <div class="block-header">
            <div class="row">
               <div class="col-lg-6 col-md-8 col-sm-12">
                  <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Courses</h2>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                     <li class="breadcrumb-item active">Courses</li>
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
                     <div class="modal-body">
                        <form class="form-group" id="addform" action="<?= base_url('Add-course') ?>"  method="post" enctype="multipart/form-data">
                           <div class="row clearfix">
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category" required="required">
                                       <option value="">Select Category</option>
                                       <?php if(!empty($cat)){foreach($cat as $val){ ?>
                                       <option value="<?= $val['id'] ?>"><?= $val['category'] ?></option>
                                       <?php } } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name"> Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title " autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Top Course Title</label>
                                    <input type="text" class="form-control" name="top_title" id="top_title" placeholder="Enter Top Course Title" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Full Course MRP</label>
                                    <input type="text" class="form-control" name="mrp" id="mrp" placeholder="Enter Full Course MRP" onkeypress="return isNumber(event)"       autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Full Course MSP</label>
                                    <input type="text" class="form-control" name="msp" id="msp" placeholder="Enter Full Course MSP" onkeypress="return isNumber(event)"       autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Live Classes MRP</label>
                                    <input type="text" class="form-control" name="live_mrp" id="live_mrp" placeholder="Enter Live Classes MRP" onkeypress="return isNumber(event)" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Live Classes MSP</label>
                                    <input type="text" class="form-control" name="live_msp" id="live_msp" placeholder="Enter Live Classes MSP" onkeypress="return isNumber(event)" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Self Learning MRP</label>
                                    <input type="text" class="form-control" name="self_mrp" id="self_mrp" placeholder="Enter  Self Learning MRP" onkeypress="return isNumber(event)" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name"> Self Learning MSP</label>
                                    <input type="text" class="form-control" name="self_msp" id="self_msp" placeholder="Enter  Self Learning MSP" onkeypress="return isNumber(event)"       autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12" style="display: none;">
                                 <div class="form-group">
                                    <label for="name"> Assessment MRP</label>
                                    <input type="text" class="form-control" name="assessment_mrp" id="assessment_mrp" placeholder="Enter Assessment MRP" onkeypress="return isNumber(event)" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12" style="display: none;">
                                 <div class="form-group">
                                    <label for="name">Assessment MSP</label>
                                    <input type="text" class="form-control" name="assessment_msp" id="assessment_msp" placeholder="Enter Assessment" onkeypress="return isNumber(event)"       autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Starting Date</label>
                                    <input type="date" class="form-control" name="starting_date" id="starting_date"  autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Course Title</label>
                                    <input type="text" class="form-control" name="course_title" id="course_title" placeholder="Enter Course Title" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Course Subtitle 1</label>
                                    <input type="text" class="form-control" name="course_subtitle1" id="course_subtitle1" placeholder="Enter Course Subtitle 1" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Course Subtitle 2</label>
                                    <input type="text" class="form-control" name="course_subtitle2" id="course_subtitle2" placeholder="Enter Course Title 2" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="date">Curriculum PDF</label>
                                    <input type="file" class="form-control" name="curriculum_pdf" id="curriculum_pdf">
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="date">Course Image</label>
                                    <input type="file" class="form-control" name="myImg" id="myImg" accept="image/*">
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="validity">Course Validity</label>
                                    <input type="text" class="form-control" name="validity" id="validity" placeholder="Enter Course Validity" required="required">
                                 </div>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="resources">Resources Image</label>
                                    <input type="file" class="form-control" name="resources" id="resources" accept="image/*" required="required">
                                 </div>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="bakckground">Background Image</label>
                                    <input type="file" class="form-control" name="backgroundImage" id="backgroundImage" accept="image/*" required="required">
                                 </div>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Course Highlight</label>
                                    <textarea class="form-control" id='course_highlight' name="course_highlight"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Section 1</label>
                                    <input type="text" class="form-control" name="section1" id="section1" placeholder="Enter Section 1" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Section Description 1</label>
                                    <textarea class="form-control" id='section_description1' name="section_description1" placeholder="Enter Section Description 1"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Section 2</label>
                                    <input type="text" class="form-control" name="section2" id="section2" placeholder="Enter Section 2" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Section Description 2</label>
                                    <textarea class="form-control" id='section_description2' name="section_description2" placeholder="Enter Section Description 2"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Section 3</label>
                                    <input type="text" class="form-control" name="section3" id="section3" placeholder="Enter Section 2" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Section 3 Subtitle</label>
                                    <input type="text" class="form-control" name="section3subtitle" id="section3subtitle" placeholder="Enter Section 3 Subtitle" autocomplete="off" >
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                    <label for="date">Certificate Design</label>
                                    <input type="file" class="form-control" name="certificate" id="certificate" required="required">
                                 </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Section Description 3</label>
                                    <textarea class="form-control" id='section_description3' name="section_description3" placeholder="Enter Section Description 3"></textarea>
                                 </div>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                 <div class="form-group">
                                    <label for="video">Video</label>
                                    <textarea class="form-control" id='video' name="video" placeholder="Enter Video"></textarea>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Add</button>
                           <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button> -->
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
   <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
   <?php include('include/Footer.php');  ?>
   <script type="text/javascript">
      $(document).ready(function (){

              $("#addform").validate({
                  errorClass: "my-error-class",
                  validClass: "my-valid-class",
                  rules: {
                    category:'required',
                      title: "required",
                      mrp: "required",
                      msp:"required",
                      starting_date:"required",
                      course_title:"required",
                      course_subtitle1: "required",
                      course_subtitle2: "required",
                      section1:"required",
                      section2:"required",
                      section3:"required",
                      section3subtitle: "required",
                      curriculum_pdf: "required",
                      certificate:"required",
                      section_description1:"required",
                      section_description2:"required",
                      section_description3:"required",
                      course_highlight:"required",
                  },
                  messages: {
                      category:"Please select category",
                      title: "Please enter title",
                      mrp: "Please enter msp",
                      msp:"Please enter msp",
                      starting_date:"Please select start date",
                      course_title:"Please enter course title",
                      course_subtitle1: "Please enter course sub title 1",
                      course_subtitle2:"Please enter course sub Title 1",
                      section1:"Please enter section 1",
                      section2:"Please enter section 2",
                      section3:"Please enter section 3",
                      section3subtitle: "Please enter section 3 subtitle",
                      curriculum_pdf: "Please select curriculum ",
                      certificate:"Please select certificate",
                      section_description1:"Please enter section descrpition 1",
                      section_description2:"Please enter section descrpition 2",
                      section_description3:"Please enter section descrpition 3",
                      course_highlight:"Please enter course highlight",

                  }
              });
      });
   </script>
   <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
   <script>
      CKEDITOR.replace( 'course_highlight' );
   </script>
   <script>
      function isNumber(evt) {
         evt = (evt) ? evt : window.event;
         var charCode = (evt.which) ? evt.which : evt.keyCode;
         if (charCode > 31 && (charCode < 48 || charCode > 57)) {
             return false;
         }
         return true;
      }

      $('#mrp,#msp,#live_mrp,#live_msp,#self_mrp,#self_msp').on('paste', function (event) {
       if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
         event.preventDefault();
       }
      });
   </script>
</body>
</html>
