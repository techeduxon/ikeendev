<?php include('include/Head.php');  ?>

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/toastr/toastr.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/color_skins.css">
  <?php include('include/Header.php');  ?>
  <style type="text/css">
      .my-error-class {
      color:red;
  }
    .my-valid-class {
      color:green;
  }
  </style>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Courses Details</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
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
                                <h4 class="m-t-0 m-b-0"><strong>Price</strong> <small>₹<?= $course['msp'] ?> </small></h4>

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
                                    <li><a href="<?= base_url().'Self-learning?id='.$_GET['id']?>" class="btn btn-outline-warning " ><i class="la la-bolt"></i> Self Learning</a></li>
                                    <li><a href="<?= base_url().'Live-classes?id='.$_GET['id']?>" class="btn btn-outline-secondary" ><i class="la la-bookmark"></i> Live Classes </a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-outline-dark active" ><i class="la la-graduation-cap"></i> Assessment</a></li>

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
                           <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#addmodal">Add Assessment</a></li>
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>

                                     <th>Proejct Title</th>
                                     <th>Tag Name</th>
                                     <th>Description</th>
                                     <th>File </th>
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

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name"> Project Title </label>
                            <input type="text" class="form-control" name="project_title" id="project_title" placeholder="Enter  Project Title " autocomplete="off" >

                        </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name"> Tag Name  </label>
                            <input type="text" class="form-control" name="tag_name" id="tag_name" placeholder="Enter Tag Name " autocomplete="off" >

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="date">File</label>
                            <input type="file" class="form-control" accept=".pdf" name="assessment_file" id="assessment_file">

                       </div>
                    </div>
                   <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                       <label for="name"> Description</label>
                         <textarea class="form-control" id='description' name="description" placeholder="Enter Description 1"></textarea>
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

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name"> Project Title </label>
                            <input type="text" class="form-control" name="edit_project_title" id="edit_project_title" placeholder="Enter  Project Title " autocomplete="off" >

                        </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name"> Tag Name  </label>
                            <input type="text" class="form-control" name="edit_tag_name" id="edit_tag_name" placeholder="Enter Tag Name " autocomplete="off" >

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="date">File</label>
                            <input type="file" class="form-control" accept=".pdf" name="edit_assessment_file" id="edit_assessment_file">
                            <a href="" target="_blank" id="show_file_a"><span id="show_file"></span></a>
                            <input type="hidden" name="old_file" id="old_file">

                       </div>
                    </div>
                   <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                       <label for="name"> Description</label>
                         <textarea class="form-control" id='edit_description' name="edit_description" placeholder="Enter Description 1"></textarea>
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
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
<script>
    CKEDITOR.replace( 'edit_description' );
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
                url:"<?= base_url() . 'DataTable/getAssessmentList?id='; ?>"+<?= $_GET['id'] ?>,
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
                project_title: "required",
                tag_name: "required",
                assessment_file:"required",
            },
            messages: {
                project_title: "Please enter project title",
                tag_name: "Please tag name",
                assessment_file :"Please select assessment file",
            }
        });

        $("#editform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                edit_project_title: "required",
                edit_tag_name: "required",
            },
            messages: {
                edit_project_title: "Please enter project title",
                edit_tag_name: "Please tag name",
            }
        });
    });
</script>


<script>
  $(document).ready(function(){
     $(document).on('submit','#addform',function(){
          event.preventDefault();
          $(':input[type="submit"]').prop('disabled', false);
          $.ajax({
            url:'<?= base_url().'Add_assessment' ?>',
            type:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data){
              $('.datatable-buttt').DataTable().ajax.reload();
              $('#addmodal').modal('hide');
              $('#addform').trigger('reset');

               CKEDITOR.instances['description'].setData('');
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
                url:'<?= base_url().'Delete_assessment' ?>',
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
                error: function (xhr, error, thrown) {
                   window.location.reload();
                },
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
            url: "<?=base_url('fetch_single_assessment')?>",
            data: {id:id},
            success: function(response) {
                 $('#editform').trigger('reset');

                    var obj = $.parseJSON(response);

                     $("#edit_project_title").val(obj['project_title']);
                     $("#edit_tag_name").val(obj['tag_name']);

                     CKEDITOR.instances['edit_description'].setData(obj['description']);
                     $("#old_file").val(obj['file']);
                     $("#show_file").html(obj['file']);
                     $("#show_file_a").attr('href','<?= base_url().'uploads/assessment_file/' ?>'+obj['file'])
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
          url: "<?=base_url('update_assessment')?>",
          data:new FormData(this),
          contentType:false,
          processData:false,
          success: function(data) {
            if (data == 1) {
               CKEDITOR.instances['edit_description'].setData('');
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

  });

</script>
</body>

</html>
