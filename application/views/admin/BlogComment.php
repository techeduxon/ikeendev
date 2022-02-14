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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Comment</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Comment</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                           <!-- <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#addmodal">Add New</a></li> -->
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                  <thead>
                                     <th>User Name</th>
                                     <th>Blog Title</th>
                                     <th>Type</th>
                                     <th>Date</th>
                                     <th>Show/Hide</th>
                                     <th>Comment</th>
                                  </thead>
                                  <tbody>
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

<div class="modal animated fadeIn  editmodal" id="assign" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Edit </h6>
            </div>
            <div class="modal-body">
                  <form class="needs-validation" id="editform" method="post"  >

                    <div class="row clearfix">

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                         <label for="title">Title </label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" autocomplete="off" >
                        </div>
                    </div>
                     <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                         <label for="comment">Comment</label>
                            <input type="text" class="form-control" name="comment" id="comment" placeholder="Enter Comment" autocomplete="off" >
                        </div>
                    </div>

                </div>
                    <input type="hidden" name="ca_id" id="ca_id">
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
<!-- <script src="<= base_url()?>assets/admin/vendor/sweetalert/sweetalert.min.js"></script>  --><!-- SweetAlert Plugin Js -->
<script src="<?= base_url()?>assets/admin/js/pages/tables/jquery-datatable.js"></script>
<script src="<?= base_url()?>assets/admin/js/pages/ui/dialogs.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/admin/bundles/mainscripts.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

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
                url:"<?= base_url() . 'DataTable/getCommentList' ?>",
                type:"POST",
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
<script type="text/javascript">
$(document).ready(function (){

        $("#addform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                title: "required",
            },
            messages: {
                title: "Please enter technology",
            }
        });

        $("#editform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
              title: "required",
            },
            messages: {
              title: "Please enter technology",
            }
        });
    });
</script>


<script>
  $(document).ready(function(){
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
                url:'<?= base_url().'Adminpanel/Adminpanel/deleteBlogComment' ?>',
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

     $(document).on('click','.change-blog-status',function(){
        var id = $(this).attr('id');
        var status = $(this).attr('status');
        swal({
          title: "Are you sure?",
          text: "Do you want to change status!.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
                type:'get',
                url:'<?= base_url().'Adminpanel/Adminpanel/ChangeBlogStatus' ?>',
                data:{id:id,status:status},
                success:function(data){
                  $('.datatable-buttt').DataTable().ajax.reload();
                  swal('Success','Status updated successfully','success');
                },
                // error: function (xhr, error, thrown) {
                //    window.location.reload();
                // },
            })
          }
        });
      });

      $(document).on('click', '.update', function(){
        var id = $(this).attr("id");
        var title = $(this).attr('title');
        var comment = $(this).attr('comment');
        $('#title').val(title);
        $('#comment').val(comment);
        $('#ca_id').val(id);
        $('.editmodal').modal('show');
        event.preventDefault();
      });

    $(document).on('submit', '#editform', function(){
    $(':input[type="submit"]').prop('disabled', true);
     $.ajax({
          type: "POST",
          url: "<?= base_url().'Adminpanel/Adminpanel/updateTechnologies' ?>",
          data:new FormData(this),
          contentType:false,
          processData:false,
          success: function(data) {
            if (data == 1) {
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

             }else if (data == 2) {
                swal({
                        title: "Failed",
                        text: "Some error occured Please try again .",
                        icon: "error",
                        button: false,
                        timer: 3000
                      });

             }
      }
    });
     event.preventDefault();
   });
  });
</script>
</body>
</html>
