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
                              <form class="form-group" id="addform" action="<?= base_url('Update-course') ?>"   method="post" enctype="multipart/form-data">
                              <div class="row clearfix">
                                  
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name"> Title</label>                                
                                          <input type="text" class="form-control" name="title" id=""title value="<?= $course['title'] ?>" >
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name"> MRP</label>                                
                                          <input type="text" class="form-control" name="mrp" id="mrp"   value="<?= $course['mrp'] ?>" onkeypress="return isNumber(event)">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name"> MSP</label>                                
                                          <input type="text" class="form-control" name="msp" id="msp"  value="<?= $course['msp'] ?>" onkeypress="return isNumber(event)">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Starting Date</label>                                
                                          <input type="date" class="form-control"  name="starting_date" id="starting_date"  value="<?= $course['starting_date'] ?>" >
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Course Title</label>                                
                                          <input type="text" class="form-control" name="course_title" id="course_title"  value="<?= $course['course_title'] ?>" >
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Course Subtitle 1</label>                                
                                          <input type="text" class="form-control" name="course_subtitle1" id="course_subtitle1"  value="<?= $course['course_subtitle1'] ?>" >
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Course Subtitle 2</label>                                
                                          <input type="text" class="form-control"  name="course_subtitle2" id="course_subtitle2" value="<?= $course['course_subtitle2'] ?>" >
                                      </div>
                                  </div>
                                  
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">
                                       <label for="date">Curriculum PDF</label>  <br>
                                       <input type="file" class="form-control" name="curriculum_pdf" id="curriculum_pdf">
                                       <input type="hidden" class="form-control" name="old_curriculum_pdf" id="old_curriculum_pdf" value="<?= $course['certificate'] ?>">
                                          <a href="<?= base_url().'uploads/curriculum_pdf/'.$course['curriculum_pdf'] ?> " target="_blank"><?= $course['curriculum_pdf'] ?></a>
                                     </div>
                                  </div>
                                   <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                         <label for="name">Course Highlight</label>                                
                                         <textarea class="form-control" name="course_highlight" id="course_highlight" value="<?= $course['course_highlight'] ?>"><?= $course['course_highlight'] ?></textarea>
                                      </div>
                                  </div>
                                  
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section 1</label>                                
                                          <input type="text" class="form-control" name="section1" id="section1"  value="<?= $course['section1'] ?>" >
                                         
                                      </div>
                                  </div>
                                   
                                   
                                  <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                         <label for="name">Section Description 1</label>                                
                                         <textarea class="form-control" id='section_description1' name="section_description1" value="<?= $course['section1desc'] ?>"><?= $course['section1desc'] ?></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section 2</label>                                
                                          <input type="text" class="form-control" name="section2" id="section2"  value="<?= $course['section2'] ?>" >
                                      </div>
                                  </div>
                                 
                                  <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section Description 2</label>                                
                                          <textarea class="form-control"  name="section_description2" id="section2desc" value="<?= $course['section2desc'] ?>"><?= $course['section2desc'] ?></textarea>
                                      </div>
                                  </div>
                                   <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section 3</label>                                
                                          <input type="text" class="form-control" name="section3" id="section3"  value="<?= $course['section3'] ?>" >
                                      </div>
                                  </div>
                                   <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section 3 Subtitle</label>                                
                                          <input type="text" class="form-control" name="section3subtitle" id="section3subtitle" value="<?= $course['section3subtitle'] ?>" >
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">
                                          <label for="date">Certificate Design</label>  
                                          <input type="file" class="form-control" name="certificate" id="certificate">
                                          <input type="hidden" class="form-control" name="old_certificate" id="old_certificate" value="<?= $course['certificate'] ?>">
                                          <img src="<?= base_url().'uploads/certificate/'.$course['certificate'] ?>" style="height:60px;width:60px;">
                                     </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section Description 3</label>                                
                                          <textarea class="form-control"  name="section_description3" id="section3desc" value="<?= $course['section3desc'] ?>" ><?= $course['section3desc'] ?></textarea>
                                      </div>
                                  </div>
                                 
                              </div>
                              <input type="hidden" name="ca_id" value="<?= $course['id'] ?>">
                              <button type="submit" class="btn btn-primary">Update</button>
                              <a href="<?= base_url().'View-course-detail?id='.$_GET['id'] ?>" type="button" class="btn btn-secondary" >CLOSE</a>
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
                section_description1:"required",
                section_description2:"required",
                section_description3:"required",
                course_highlight:"required",
            },
            messages: {
                title: "Please Enter Title",
                mrp: "Please Enter MRP",
                msp:"Please Enter MSP",
                starting_date:"Please Select Start Date",
                course_title:"Please Enter Course Title",
                course_subtitle1: "Please Enter Course Sub Title 1",
                course_subtitle2:"Please Enter Course Sub Title 1",
                section1:"Please Enter Section 1",
                section2:"Please Enter Section 2",
                section3:"Please Enter Section 3",
                section3subtitle: "Please Enter Section 3 Subtitle",
                section_description1:"Please Enter Section Descrpition 1",
                section_description2:"Please Enter Section Descrpition 2",
                section_description3:"Please Enter Section Descrpition 3",
                course_highlight:"Please Enter Course Highlight",
               
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
</script>
</body>

</html>