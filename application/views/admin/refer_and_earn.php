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
    swal({title: "Success!",text: "Data updated successfully.",icon: "success",timer: 3000});
  </script>
<?php } ?>
<?php if(!empty($this->session->flashdata('failed_update_message'))){  ?>
 <script>
  swal({title: "Failed!",text: "Somthing went wrong.",icon: "failed",timer: 3000});
</script>
<?php } ?>
<?php if(!empty($this->session->flashdata('delete_message'))){  ?>
 <script>
  swal({title: "Success!",text: "Data deleted successfully.",icon: "success",timer: 3000});
</script>
<?php } ?>
<?php if(!empty($this->session->flashdata('add_message'))){  ?>
 <script>
  swal({title: "Success!",text: "Data added successfully.",icon: "success",timer: 3000});
</script>
<?php } ?>
<div id="main-content">
 <div class="container-fluid">
      <!-- <div class="block-header">
         <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12">
               <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Footer Content</h2>
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                  <li class="breadcrumb-item active">Footer Content</li>
               </ul>
            </div>
         </div>
       </div> -->
       <div class="row clearfix">
         <div class="col-lg-12">
          <div class="card">
            <div class="header">
            </div>
            <div class="body">
              <h3 style="color: red">How it works</h3>
              <form id="header_form" action="<?= base_url().'Adminpanel/Adminpanel/saveHowItWork' ?>" method="post" enctype= multipart/form-data>
               <div class="row">
                <div class="col-sm-4 form-group">
                 <label>Icon</label>
                 <input type="file" name="icon" class="form-control" required="required" accept="image/*">
               </div>

               <div class="col-sm-4 form-group">
                 <label>Heading</label>
                 <input type="text" name="heading" class="form-control" required="required" placeholder="Heading">
               </div>
               <div class="col-sm-4 form-group">
                 <label>Title</label>
                 <input type="text" name="title" class="form-control" required="required" placeholder="Title" >
               </div>
             </div>
             <button class="btn btn-primary" type="submit">Add</button>
           </form>
           <br><br><br>
           <h3 style="color: red"> List</h3>
           <div class="table-responsive">
             <table class=" datatable-butt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
              <thead>
               <th>Icon</th>
               <th>Heading</th>
               <th>Title</th>
               <th>Action</th>
             </thead>
             <tbody>
               <?php if(!empty($refer_earn)){foreach($refer_earn as $val){ ?>
                 <tr>
                  <td> <img src="<?= base_url().'uploads/curriculum_pdf/'.$val['icon'] ?>" style="height: 70px;width: 70px;"> </td>
                  <td><?= $val['heading']; ?></td>
                  <td><?= $val['title'] ?></td>
                  <td><a class="btn btn-danger" href="<?= base_url().'Adminpanel/Adminpanel/Delete_refer?id='.$val['id'] ?>"><i class="fas fa-trash"></i></a>  <button class="btn btn-primary edit" heading="<?= $val['heading'] ?>" oldimg="<?= base_url().'uploads/curriculum_pdf/'.$val['icon'] ?>" title="<?= $val['title'] ?>" id="<?= $val['id'] ?>"><i class="fas fa-edit"></i></button></td>
                </tr>
              <?php } } ?>
            </tbody>
          </table>
        </div>
        <br><br><br>

        <h3 style="color: red">FAQ</h3>
        <form id="faq_form" action="<?= base_url().'Adminpanel/Adminpanel/saveFaq' ?>" method="post" enctype= multipart/form-data>
         <div class="row">
          <div class="col-sm-4 form-group">
           <label>Question</label>
           <input type="text" name="que" class="form-control" required="required" >
         </div>
         <div class="col-sm-8 form-group">
           <label>Answer</label>
           <input type="text" name="ans" class="form-control" required="required" >
         </div>
       </div>
       <button class="btn btn-primary" type="submit">Add</button>
     </form>
     <br><br><br>
     <h3 style="color: red"> List</h3>
     <div class="table-responsive">
       <table class=" datatable-butt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
        <thead>
         <th>Question</th>
         <th>Answer</th>
         <th>Action</th>
       </thead>
       <tbody>
         <?php if(!empty($faq)){foreach($faq as $val){ ?>
           <tr>
            <td><?= $val['que'] ?></td>
            <td><?= $val['ans'] ?></td>
            <td><a class="btn btn-danger" href="<?= base_url().'Adminpanel/Adminpanel/delete_faq?id='.$val['id'] ?>"><i class="fas fa-trash"></i></a> <button class="btn btn-primary edit-edit" que="<?= $val['que'] ?>" ans="<?= $val['ans'] ?>" id="<?= $val['id'] ?>"><i class="fas fa-edit"></i></button></td>
          </tr>
        <?php } } ?>
      </tbody>
    </table>
  </div>
  <br><br><br>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="update_form" action="<?= base_url().'Adminpanel/Adminpanel/update_referearn' ?>" method="post" enctype= multipart/form-data>
          <div class="row">
            <div class="col-sm-4 form-group">
             <label>Icon</label>
             <input type="file" name="icon" class="form-control" accept="image/*">
           </div>
           <div class="col-sm-2 form-group">
             <img src="" id="oldimg" width="60px" height="60px">
           </div>
           <div class="col-sm-4 form-group">
             <label>Heading</label>
             <input type="text" name="heading" id="heading" class="form-control" required placeholder="Heading">
           </div>
           <div class="col-sm-4 form-group">
             <label>Title</label>
             <input type="text" name="title" id="title" class="form-control" required placeholder="Title"  >
             <input type="hidden" name="hidden-id" id="hidden-id">
           </div>
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" form="update_form" class="btn btn-primary">Save changes</button>
    </div>
  </div>
</div>
</div>


<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="update-form-corporate" action="<?= base_url().'Adminpanel/Adminpanel/updateFaq' ?>" method="post" enctype= multipart/form-data>
          <div class="row">
            <div class="col-sm-4 form-group">
              <label>Question</label>
              <input type="text" name="que" id="que" class="form-control" required="required" >
            </div>
            <div class="col-sm-8 form-group">
              <label>Answer</label>
              <input type="text" name="ans" id="ans" class="form-control" required="required" >
            </div>
            <input type="hidden" name="hidden-id" id="hidden-id1">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="update-form-corporate" class="btn btn-primary">Save changes</button>
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
 $(document).on('click','.edit',function(){
  var heading = $(this).attr('heading');
  var title = $(this).attr('title');
  var id = $(this).attr('id');
  var oldimg = $(this).attr('oldimg');
  $('#hidden-id').val(id);
  $('#heading').val(heading);
  $('#title').val(title);
  $('#oldimg').attr('src',oldimg);
  $('#exampleModal').modal('show')
});

 $(document).on('click','.edit-edit',function(){
  var que = $(this).attr('que');
  var ans = $(this).attr('ans');
  var id = $(this).attr('id');
  $('#hidden-id1').val(id);
  $('#ans').val(ans);
  $('#que').val(que);
  $('#exampleModal1').modal('show')
});
</script>
<script>
  $(document).ready(function(){
    $('#header_form').validate({
      rules:{
        icon:{
          required : true,
        },
        heading:{
          required : true,
        },
        title:{
          required : true,
        },
      },
      messages:{
        icon:{
          required: '<span style="color:red">Please select icon</span>',
        },
        heading:{
          required: '<span style="color:red">Please enter heading</span>',
        },
        title:{
          required: '<span style="color:red">Please enter title</span>',
        },
      },
    });

$('#update_form').validate({
  rules:{
    heading:{
      required : true,
    },
    title:{
      required : true,
    },
  },
  messages:{
    heading:{
      required: '<span style="color:red">Please enter heading</span>',
    },
    title:{
      required: '<span style="color:red">Please enter title</span>',
    },
  },
});
  });
  $(document).ready(function(){
    $('#faq_form').validate({
      rules:{
        que:{
          required : true,
        },
        ans:{
          required : true,
        },
      },
      messages:{
        que:{
          required: '<span style="color:red">Please enter question</span>',
        },
        ans:{
          required: '<span style="color:red">Please enter answer</span>',
        },
      },
    });

  });
</script>
</body>
</html>
