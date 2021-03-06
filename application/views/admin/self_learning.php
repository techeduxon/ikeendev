<?php include('include/Head.php');  ?>
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/toastr/toastr.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/color_skins.css">

<style type="text/css">
    .my-error-class {
    color:red;
}
  .my-valid-class {
    color:green;
}
</style>


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
                                <h4 class="m-t-0 m-b-0"><strong><?= $course['title'] ?></strong></h4>
                                <h4 class="m-t-0 m-b-0"><strong>Price</strong> <small>???<?= $course['msp'] ?> </small></h4>

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
                                    <li><a href="<?= base_url().'View-course-detail?id='.$_GET['id']?>" class="btn btn-outline-info " ><i class="la la-file-video-o"></i> Courses info </a></li>
                                    <li><a href="<?= base_url().'Batches?id='.$_GET['id'] ?>" class="btn btn-outline-info " ><i class="la la-file-video-o"></i> Batches</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-outline-warning active" ><i class="la la-bolt"></i> Self Learning</a></li>
                                    <li><a href="<?= base_url().'Live-classes?id='.$_GET['id']?>" class="btn btn-outline-secondary" ><i class="la la-bookmark"></i> Live Classes </a></li>
                                    <li><a href="<?= base_url().'Assessment?id='.$_GET['id']?>" class="btn btn-outline-dark" ><i class="la la-graduation-cap"></i> Assessment</a></li>

                                   <li><a href="<?= base_url().'Adminpanel/Adminpanel/tabBarDetail?id='.$_GET['id'] ?>" class="btn btn-outline-dark" ><i class="la la-graduation-cap"></i> Course Outline</a></li>

                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/Review?id='.$_GET['id'] ?>" class="btn btn-outline-dark" ><i class="la la-graduation-cap"></i> Review</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/courseTabBar?id='.$_GET['id'] ?>" class="btn btn-outline-dark" ><i class="la la-graduation-cap"></i> Tab Bar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                           <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#addmodal">Add Section</a></li>
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>

                                     <th>Section </th>
                                     <th>Remark</th>
                                     <th>Action</th>
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

<div class="modal animated fadeIn" id="addmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add </h6>
            </div>
            <div class="modal-body">
                <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                <div class="row clearfix">

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                         <label for="name">Section </label>
                            <input type="text" class="form-control" name="section" id="section" placeholder="Enter Section " autocomplete="off" required="required">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 mt-4">
                        <div class="form-group">
                         <label for="name">Video </label>
                            <input type="checkbox" name="video" checked="checked" value="yes">
                        </div>
                    </div>
                     <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                         <label for="name"> Remark </label>
                            <textarea type="text" class="form-control" name="remark" id="remark" placeholder="Enter Remark " autocomplete="off" ></textarea>

                        </div>
                    </div>

                </div>
                <input type="hidden" name="course_id" id="course_id" value="<?= $_GET['id'] ?>">
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
                <h6 class="title" id="defaultModalLabel">Edit </h6>
            </div>
            <div class="modal-body">
                  <form class="needs-validation" id="editform" method="post"  >

                    <div class="row clearfix">

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                         <label for="name">Section </label>
                            <input type="text" class="form-control" name="edit_section" id="edit_section" placeholder="Enter Section " autocomplete="off" required="required">

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-4">
                        <div class="form-group">
                         <label for="name">Video </label>
                            <input type="checkbox" name="video" id="video" checked="checked" value="yes">
                        </div>
                    </div>
                     <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                         <label for="name"> Remark </label>
                            <textarea type="text" class="form-control" name="edit_remark" id="edit_remark" placeholder="Enter Remark " autocomplete="off" ></textarea>

                        </div>
                    </div>

                    </div>
                    <input type="hidden" name="edit_course_id" id="edit_course_id" value="<?= $_GET['id'] ?>">
                    <input type="hidden" name="ca_id" id="ca_id">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                  </form>
            </div>

        </div>
    </div>
</div>
<div class="modal animated fadeIn  showmodal" id="assign" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Videos </h6>
            </div>
            <div class="modal-body">
                  <form class="needs-validation" id="editform" method="post"  >

                    <div class="row">
                      <div class="col-md-6">
                        <strong>Title : </strong><span id="self_var_title"></span><br>
                        <strong>Duration : </strong><span id="self_var_duration"></span>
                      </div>
                      <div class="col-md-6 pull-right">
                        <strong>Video :<div id="self_var_url"></div></strong>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="table-responsive">
                                <table class="table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                     <th>No.</th>
                                     <th>Title </th>
                                     <th>File</th>
                                     <th>Action</th>
                                    </thead>
                                    <tbody id="self_var_body">

                                    </tbody>
                                </table>
                        </div>

                    </div>

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
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" language="javascript" >
 $(function(){
        var dataTable = $('.datatable-butt').DataTable({
             dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
           "processing":true,
           "serverSide":true,
           "order":[],
           "ajax":{
                url:"<?= base_url() . 'DataTable/getBatchList?id='; ?>"+<?= $_GET['id'] ?>,
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
<script type="text/javascript">
$(document).ready(function (){

        $("#addform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                section: "required",
            },
            messages: {
                section: "Please enter section",
            }
        });

        $("#editform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {

                edit_section: "required",
            },
            messages: {
                edit_section: "Please enter section",
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
                url:"<?= base_url() . 'DataTable/getSectionList?id='; ?>"+<?= $_GET['id'] ?>,
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
            url:'<?= base_url().'Add_self_learning' ?>',
            type:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data){
              $('.datatable-buttt').DataTable().ajax.reload();
              $('#addmodal').modal('hide');
              $('#addform').trigger('reset');
              if(data == 1){
                 swal({
                     title: "Success!",
                     text: "Data added successfully..",
                     type: "success",
                     timer: 3000
                     });
              }else{
                swal({
                     title: "warning!",
                     text: "Something went wrong!.",
                     type: "warning",
                     timer: 3000
                     });
             }
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
                url:'<?= base_url().'Delete_self_learning' ?>',
                data:{id:id},
                success:function(data){
                    var obj = JSON.parse(data)
                    if(obj.status == 'success'){
                        $('.datatable-buttt').DataTable().ajax.reload();
                        swal('Success','Delete data successfully','success');
                    }else{
                        swal('error','Something went wrong please try after some time','success');
                    }
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

       swal({
          title: "Are you sure?",
          text: "You want to update this !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
           $.ajax({
            type: "POST",
            url: "<?= base_url('fetch_single_self_learning') ?>",
            data: {id:id},
            success: function(response) {

                 $('#editform').trigger('reset');
                    var obj = $.parseJSON(response);
                     $("#edit_section").val(obj['section']);
                     $("#edit_remark").val(obj['remark']);
                     $("#ca_id").val(obj['id']);
                     $('.editmodal').modal('show');
               }
             });

         }
       });

        event.preventDefault();
      });

    $(document).on('submit', '#editform', function(){
    $(':input[type="submit"]').prop('disabled', true);

     $.ajax({
          type: "POST",
          url: "<?=base_url('update_self_learning')?>",
          data:$(this).serialize(),
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
                        text: "Some error occured please try again .",
                        icon: "error",
                        button: false,
                        timer: 3000
                      });

             }
      }
    });
     event.preventDefault();
   });
  $(document).on('click','.view_self',function(){
     event.preventDefault();
     var section_id=$(this).attr('id');
     $.ajax({
      url:'<?= base_url().'fetch_single_self_learning_var' ?>',
      type:'POST',
      data:{section_id:section_id},
      success:function(response){

         var obj = $.parseJSON(response);

          $('.showmodal').modal('show');
          $('#self_var_title').html(obj['title']);
          $('#self_var_duration').html(obj['duration'])
          $('#self_var_url').html(obj['video_url'])
          $('#self_var_body').html(obj['output']);

       }

      });



  });
  });

</script>
</body>

</html>
