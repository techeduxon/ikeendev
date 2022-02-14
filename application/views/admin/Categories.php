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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Categories</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">

                                <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#addmodal">Add Category</a></li>

                        </div>
                        <div class="body">
                           <input type="text" style=" position: absolute;left: -999em;" name="cpText" id="cpText">
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                       <th>Category</th>
                                       <th>Module</th>
                                       <th>Added</th>
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
                <h6 class="title" id="defaultModalLabel">Add Category</h6>
            </div>
            <div class="modal-body">
                <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                     <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                         <label for="module">Select Module</label>
                            <select class="form-control" name="module" id="module" required="required">
                              <option value="">Select Module</option>
                              <option value="Eduprograms">Eduprograms</option>
                              <option value="Courses">Courses</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                         <label for="Category">Category</label>
                            <input type="text" class="form-control" name="category" id="category" placeholder="Enter Category" autocomplete="off" >
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
                <h6 class="title" id="defaultModalLabel">Edit Category</h6>
            </div>
            <div class="modal-body">
                  <form class="needs-validation" id="editform" method="post">
                    <div class="row clearfix">
                      <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                         <label for="module">Select Module</label>
                            <select class="form-control" name="module" id="module1" required="required">
                              <option value="">Select Module</option>
                              <option value="Eduprograms">Eduprograms</option>
                              <option value="Courses">Courses</option>
                            </select>
                        </div>
                    </div>

                      <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                         <label for="category1">Category</label>
                            <input type="text" class="form-control" name="category" id="category1" placeholder="Enter Category" autocomplete="off" >
                            <input type="hidden" name="idd" id="idd">
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
            rules: {
                category:{
                  required:true,
                },
                module:{
                  required:true,
                },
            },
            messages: {
                category:{
                  required:'<span style="color:red">Please enter category</span>',
                },
                module:{
                  required:'<span style="color:red">Please select module</span>',
                },
            }
        });

        $("#editform").validate({
            rules: {
                category:{
                  required:true,
                },
                module:{
                  required:true,
                },
            },
            messages: {
                category:{
                  required:'<span style="color:red">Please enter category</span>',
                },
                module:{
                  required:'<span style="color:red">Please select module</span>',
                },
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
                url:"<?= base_url() . 'DataTable/getCategory'; ?>",
                type:"POST",

                // "error": function (xhr, error, thrown) {
                //    window.location.reload();
                // },
           },
           "columnDefs":[
                {
                     "targets":[2,3],
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
            url:'<?= base_url().'Adminpanel/Content/addCategory' ?>',
            type:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data){
              $('.datatable-buttt').DataTable().ajax.reload();
              $('#addmodal').modal('hide');
              $('#addform').trigger('reset');
              swal({ title: "Success!", text: "Category added successfully..", type: "success", timer: 3000 });
            }
          });


     });
     $(document).on('click','.delete',function(){
        var id = $(this).attr('id');

        swal({
          title: "Are you sure?",
          text: "Do you want to delete this category!.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
                type:'get',
                url:'<?= base_url().'Adminpanel/Content/deleteCategory' ?>',
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
    var category = $(this).attr('category');
    var module1 = $(this).attr('module');
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
            $('#category1').val(category)
            $('#module1').val(module1)
            $('#idd').val(id)
            $('.editmodal').modal('show');
          }
       });
        event.preventDefault();
      });

    $(document).on('submit', '#editform', function(){
    $(':input[type="submit"]').prop('disabled', true);
     $.ajax({
          type: "POST",
          url: "<?= base_url().'Adminpanel/Content/udpateCategory' ?>",
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
