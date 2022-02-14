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

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Banner</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Banner</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">

                                <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#addmodal">Add Banner</a></li>

                        </div>
                        <div class="body">
                           <input type="text" style=" position: absolute;left: -999em;" name="cpText" id="cpText">
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                       <th>Page</th>
                                       <th>Title</th>
                                       <th>Image</th>
                                       <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>

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

<div class="modal animated fadeIn" id="addmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Banner</h6>
            </div>
            <div class="modal-body">
                <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                <div class="row clearfix">

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name">Select Page</label>
                            <select class="form-control" name="page" id="page">
                              <option value="">Select Page</option>
                              <option value="User-About-Us">Who we are</option>
                              <option value="Leadership">Leadership</option>
                              <option value="Career">Career</option>
                              <option value="Gallery">Gallery</option>
                              <option value="Contact-Us">Contact Us</option>
                              <option value="Become-A-Trainer">Become A Trainer</option>
                              <option value="Edu-On">Edu On </option>
                              <option value="Edu-Webinar">Edu Webbinar</option>
                              <option value="Edu-Help">Edu Help </option>
                              <option value="Reschedule-Policy">Reschdule Policy</option>
                              <option value="Couser-List">Couser List</option>
                              <option value="Course-Calender">Course Calender</option>
                              <option value="Categories">Forum</option>
                              <option value="Blog-view">Blog</option>
                            </select>

                        </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" autocomplete="off" >
                        </div>
                    </div>
                      <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name">Image</label>
                            <input type="file" class="form-control" name="myImg" id="myImg"  autocomplete="off" accept="image/*">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<div class="modal animated fadeIn  editmodal" id="assign" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Edit Banner</h6>
            </div>
            <div class="modal-body">
                  <form class="needs-validation" id="editform" method="post"  >
                 <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                    <div class="row clearfix">

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                         <label for="name">Select Page</label>
                            <select class="form-control" name="page" id="page1">
                              <option value="">Select Page</option>
                              <option value="User-About-Us">Who we are</option>
                              <option value="Leadership">Leadership</option>
                              <option value="Career">Career</option>
                              <option value="Gallery">Gallery</option>
                              <option value="Contact-Us">Contact Us</option>
                              <option value="Become-A-Trainer">Become A Trainer</option>
                              <option value="Edu-On">Edu On </option>
                              <option value="Edu-Webinar">Edu Webbinar</option>
                              <option value="Edu-Help">Edu Help </option>
                              <option value="Reschedule-Policy">Reschdule Policy</option>
                              <option value="Couser-List">Couser List</option>
                              <option value="Course-Calender">Course Calender</option>
                              <option value="Categories">Forum</option>
                              <option value="Blog-view">Blog</option>
                            </select>

                        </div>
                    </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                         <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title1" placeholder="Enter Title" autocomplete="off" >
                        </div>
                    </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                         <label for="name">Image</label>
                            <input type="file" class="form-control" name="myImg" id="myImg"  autocomplete="off" >
                            <input type="hidden" name="idd" id="idd">
                            <input type="hidden" name="image" id="image">
                        </div>
                    </div>
                      <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <img src="" width="100px" height="100px" id="oldimage">
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </form>
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

<script type="text/javascript">
$(document).ready(function (){

        $("#addform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                page: "required",
                myImg:"required",
            },
            messages: {
                page: "Please Select Page",
                myImg:"Please Select Image",
            }
        });

        $("#editform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                page: "required",
             },
            messages: {
                page: "Please select page",

            }
        });
    });
</script>

<script type="text/javascript" language="javascript" >
 $(function(){
        var dataTable = $('.datatable-buttt').DataTable({
             dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
           "processing":true,
           "serverSide":true,
           "order":[],
           "ajax":{
                url:"<?= base_url() . 'DataTable/getbannerList'; ?>",
                type:"POST",

                // "error": function (xhr, error, thrown) {
                //    window.location.reload();
                // },
           },
           "columnDefs":[
                {
                     "targets":[0, 2],
                     "orderable":false,
                },
           ],
      });
$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

});
</script>
<script>
  $(document).ready(function(){
     $(document).on('submit','#addform',function(){
          event.preventDefault();
          $(':input[type="submit"]').prop('disabled', false);
          $.ajax({
            url:'<?= base_url().'Adminpanel/Content/add_banners' ?>',
            type:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data){
              $('.datatable-buttt').DataTable().ajax.reload();
              $('#addmodal').modal('hide');
              $('#addform').trigger('reset');
              swal({ title: "Success!", text: "Data added successfully..", type: "success", timer: 3000 });
            }
          });


     });
     $(document).on('click','.delete',function(){
        var id = $(this).attr('id');

        swal({
          title: "Are you sure?",
          text: "Do you want to delete this data!.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
                type:'get',
                url:'<?= base_url().'Adminpanel/Content/delete_banner' ?>',
                data:{id:id},
                success:function(data){
                  $('.datatable-buttt').DataTable().ajax.reload();
                  swal('Success','Delete data successfully','success');
                },
                error: function (xhr, error, thrown) {
                   window.location.reload();
                },
            })
          }
        });
      });

$(document).on('click', '.update', function(){
    var id = $(this).attr("id");
    var title = $(this).attr('title1');
    var page = $(this).attr('page');
    var image = $(this).attr('img');
       swal({
          title: "Are you sure?",
          text: "You want to update this !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $('#editform').trigger('reset');
            $('#page1').val(page)
            $('#title1').val(title)
            $('#idd').val(id)
            $('#image').val(image)
            $('#oldimage').attr('src','<?= base_url('uploads/home_images/') ?>'+image)
            $('.editmodal').modal('show');
          }
       });

        event.preventDefault();
      });

    $(document).on('submit', '#editform', function(){
    $(':input[type="submit"]').prop('disabled', true);
     $.ajax({
          type: "POST",
          url: "<?= base_url().'Adminpanel/Content/udpate_banner' ?>",
          data:new FormData(this),
          contentType:false,
          processData:false,
          success: function(data) {
              $('.editmodal').modal('hide');
              $(':input[type="submit"]').prop('disabled', false);
              $('.datatable-buttt').DataTable().ajax.reload();
              swal({
                title: "Success",
                text: "Data updated successfully",
                icon: "success",
                button: false,
                timer: 3000
              });
      }
    });
     event.preventDefault();
   });

  });

</script>


</body>

</html>
