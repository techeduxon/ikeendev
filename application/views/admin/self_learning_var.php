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
<style>
  iframe{
    height: 120px !important;
    width: 250px !important;
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
              <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Self Learning</h2>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">Self Learning</li>
              </ul>
            </div>            

          </div>
        </div>

        <div class="row clearfix">
          <div class="col-lg-12">
            <div class="card">
              <div class="header">
                <button class="btn btn-primary " id="video_btn" >Self Learning Videos</button>
                <button class="btn btn-primary " id="resources_btn">Self Learning Resources</button>
              </div>
              <div class="body videos_body" style="display:block;">
                <button class="btn btn-primary " data-toggle="modal" data-target="#add_videos">Add Videos</button>
                <div class="body">
                  <div class="row">
                    <div class="table-responsive">
                      <table class="table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0 datatable-videos">
                        <thead>

                          <th>Title </th>
                          <th>Duration</th>
                          <th>Video</th>
                          <th>Action</th>
                        </thead>
                        <tbody >

                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>

              </div>
              <div class="body resources_body" style="display:none;">
                <button class="btn btn-primary " data-toggle="modal" data-target="#add_resources" >Add Resources</button>
                <div class="body">
                  <div class="row">
                    <div class="table-responsive">
                      <table class="table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0 datatable-resources" style="width: 100%">
                        <thead>

                          <th>Title </th>
                          <th>File</th>
                          <th>Action</th>
                        </thead>
                        <tbody >

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

    </div>
    <div class="modal animated fadeIn  add_videos_modal" id="add_videos" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="title" id="defaultModalLabel">Add Videos </h6>
          </div>
          <div class="modal-body">
            <form class="form-group" id="addform_video"   method="post" enctype="multipart/form-data">
              <div class="row clearfix">
                <div class="row" >
                  <div class="col-md-4 col-sm-12">
                    <div class="form-group">    
                      <label for="name"> Title</label>                                
                      <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title " autocomplete="off" >
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-group">    
                      <label for="name"> Duration</label>                                
                      <input type="text" class="form-control" name="duration" id="duration" placeholder="Enter Duartion"  autocomplete="off" >
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-group">    
                      <label for="name">Video URL</label>                                
                      <input type="text" class="form-control" name="video_url" id="video_url" placeholder="Enter Video URL"  autocomplete="off" >
                    </div>
                  </div>
                </div>

                <div id="dContecnt"></div>
              </div>
              <input type="hidden" name="section_id" value="<?= $_GET['id'] ?>">
              <button type="submit" class="btn btn-primary">Add</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>


            </form>
          </div>

        </div>
      </div>
    </div>
     <div class="modal animated fadeIn  edit_videos_modal" id="edit_videos" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="title" id="defaultModalLabel">Edit Videos </h6>
          </div>
          <div class="modal-body">
            <form class="form-group" id="editform_video"   method="post" enctype="multipart/form-data">
              <div class="row clearfix">
                <div class="row" >
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">    
                      <label for="name"> Title</label>                                
                      <input type="text" class="form-control" name="edit_title" id="edit_title" placeholder="Enter Title " autocomplete="off" >
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">    
                      <label for="name"> Duration</label>                                
                      <input type="text" class="form-control" name="edit_duration" id="edit_duration" placeholder="Enter Duartion"  autocomplete="off" >
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">    
                      <label for="name">Video URL</label>                                
                      <input type="text" class="form-control" name="edit_video_url" id="edit_video_url" placeholder="Enter Video URL"  autocomplete="off" >
                    </div>
                  </div>
                </div>

                <div id="dContecnt"></div>
              </div>
              <input type="hidden" name="edit_section_id" value="<?= $_GET['id'] ?>">
              <input type="hidden" name="ca_id" id="ca_id">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>


            </form>
          </div>

        </div>
      </div>
    </div>
    <div class="modal animated fadeIn  add_resources_modal" id="add_resources" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="title" id="defaultModalLabel">Add Resources </h6>
          </div>
          <div class="modal-body">
            <form class="form-group" id="addform_resources"   method="post" enctype="multipart/form-data">
              <div class="row clearfix">

                <div class="row">
                  <div class="col-md-4 col-sm-12">
                    <div class="form-group">    
                      <label for="name">Title</label>                                
                      <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" autocomplete="off" >
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">    
                      <label for="name">File</label>                                
                      <input type="file" class="form-control" name="resource_pdf" id="resource_pdf" >
                      
                    </div>
                  </div>

                </div>
                <div id="dContecnt"></div>
              </div>
              <input type="hidden" name="section_id" value="<?= $_GET['id'] ?>">
              <button type="submit" class="btn btn-primary">Add</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>


            </form>
          </div>

        </div>
      </div>
    </div>
    <div class="modal animated fadeIn  edit_resources_modal" id="edit_resources" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="title" id="defaultModalLabel">Edit Resources </h6>
          </div>
          <div class="modal-body">
            <form class="form-group" id="editform_resources"   method="post" enctype="multipart/form-data">
              <div class="row clearfix">

                <div class="row">
                  <div class="col-md-4 col-sm-12">
                    <div class="form-group">    
                      <label for="name">Title</label>                                
                      <input type="text" class="form-control" name="edit_title" id="edit_title_res" placeholder="Enter Title" autocomplete="off" >
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">    
                      <label for="name">File</label>                                
                      <input type="file" class="form-control" name="edit_resource_pdf" id="edit_resource_pdf" >
                      <a href="" id="old_resourse_pdf" target="_blank"><span id="old_resourse_pdf_show"></span></a>
                      <input type="hidden" name="edit_resource_pdf_old" id="edit_resource_pdf_old">
                    </div>
                  </div>

                </div>
                <div id="dContecnt"></div>
              </div>
              <input type="hidden" name="edit_section_id" value="<?= $_GET['id'] ?>">
              <input type="hidden" name="cca_id" id="cca_id">
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

    <script type="text/javascript">
      $(document).ready(function (){

      $("#addform_video").validate({
          errorClass: "my-error-class",
          validClass: "my-valid-class",
          rules: {
            title: "required",
            duration: "required",
            video_url:"required",
          },
          messages: {
            title: "Please Enter Title",
            duration: "Please Enter Duration",
            video_url: "Please Enter Video Url",
          }
        });
        $("#addform_resources").validate({
          errorClass: "my-error-class",
          validClass: "my-valid-class",
          rules: {
            title: "required",
            resource_pdf:"required",
          },
          messages: {
            title: "Please Enter Title",
            resource_pdf: "Please Select File",
         }
        });
         $("#editform_video").validate({
          errorClass: "my-error-class",
          validClass: "my-valid-class",
          rules: {
            edit_title: "required",
            edit_duration: "required",
            edit_video_url:"required",
          },
          messages: {
            edit_title: "Please Enter Title",
            edit_duration: "Please Enter Duration",
            edit_video_url: "Please Enter Video Url",
          }
        });
        $("#editform_resources").validate({
          errorClass: "my-error-class",
          validClass: "my-valid-class",
          rules: {
            edit_title: "required",
          },
          messages: {
            edit_title: "Please Enter Title",
         }
        });
      });
    </script>
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



<!-- <script type="text/javascript">
$('#addMore').click(function(){
var add = $(this).attr('add');
$(this).attr('add',parseInt(add)+1);
var cnt = '<hr><div class="row" id="row'+add+'""><div class="col-md-4 col-sm-12"><div class="form-group"><label for="name">Title</label><input type="text" class="form-control" name="multi_title[]" id="multi_title" placeholder="Enter Title" autocomplete="off" ></div></div><div class="col-md-4 col-sm-12"><div class="form-group"><label for="name">File</label><input type="file" class="form-control" name="multi_file[]" id="multi_file" ></div></div><div class="col-md-4 mb-3"><div class="submit-1" style="margin-top: 28px"><button class="btn btn-icon waves-effect waves-light btn-danger removeRow" onclick="removeRow('+add+')" id="'+add+'"> <i class="fas fa-times"></i> </button></div></div></div>';
$('#dContecnt').append(cnt)
})


function removeRow(id){
$('#row'+id).remove()
// alert()
}
</script> -->
<script type="text/javascript" language="javascript" >  
  $(function(){ 
    var dataTable = $('.datatable-videos').DataTable({  
      dom: 'Bfrtip',
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
      ],
      "processing":true,  
      "serverSide":true,  
      "order":[],  
      "ajax":{  
        url:"<?= base_url() . 'DataTable/getVideosList?id='; ?>"+<?= $_GET['id'] ?>,  
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
<script type="text/javascript" language="javascript" >  
  $(function(){ 
    var dataTable = $('.datatable-resources').DataTable({  
      dom: 'Bfrtip',
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
      ],
      "processing":true,  
      "serverSide":true,  
      "order":[],  
      "ajax":{  
        url:"<?= base_url() . 'DataTable/getResourcesList?id='; ?>"+<?= $_GET['id'] ?>,  
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
    $(document).on('click','#video_btn',function(){ 
    
      $('.videos_body').css('display','block');
      $('.resources_body').css('display','none');
    });
    $(document).on('click','#resources_btn',function(){ 
     
      $('.videos_body').css('display','none');
      $('.resources_body').css('display','block');
    });
  });
</script>
<script>
  $(document).ready(function(){
    $(document).on('submit','#addform_video',function(){ 
      event.preventDefault();
    
      $(':input[type="submit"]').prop('disabled', false); 
      $.ajax({ 
        url:'<?= base_url().'Add_self_learning_video' ?>',
        type:'POST',
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(data){
          $('.datatable-videos').DataTable().ajax.reload();
          $('.add_videos_modal').modal('hide');
          $('#addform_video').trigger('reset');
          if(data == 1){
            swal({
              title: "Success!",
              text: "Data Added Successfully..",
              type: "success",
              timer: 3000
            });
          }else{
            swal({
              title: "warning!",
              text: "something Went Wrong!.",
              type: "warning",
              timer: 3000
            });
          }
        }
      });


    });
    $(document).on('click','.delete1',function(){
      var id = $(this).attr('id');
     

      swal({
        title: "Are you sure?",
        text: "Do You Want to Delete This Data!.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            type:'get',
            url:'<?= base_url().'Delete_self_learning_video' ?>',
            data:{id:id},
            success:function(data){
            
              var obj = JSON.parse(data)
              if(obj.status == 'success'){
                $('.datatable-videos').DataTable().ajax.reload();
                swal('Success','Delete Data Successfully','success');
              }else{
                swal('error','Something Went Wrong Please Try After Some Time','success');
              }
            },
            error: function (xhr, error, thrown) {
              window.location.reload();
            },
          })
        }
      });
    });

    $(document).on('click', '.update1', function(){
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
            url: "<?= base_url('fetch_single_self_learning_video') ?>",
            data: {id:id},
            success: function(response) {
              
              $('#editform_video').trigger('reset');
              var obj = $.parseJSON(response);
              $("#edit_title").val(obj['title']);
              $("#edit_duration").val(obj['duration']);
              $("#edit_video_url").val(obj['video_url']);

              $("#ca_id").val(obj['id']);
              $('.edit_videos_modal').modal('show');
            }
          });

        } 
      });

      event.preventDefault();
    });

    $(document).on('submit', '#editform_video', function(){
      $(':input[type="submit"]').prop('disabled', true);

      $.ajax({
        type: "POST",
        url: "<?=base_url('update_self_learning_video')?>",
        data:$(this).serialize(),
        success: function(data) {
          if (data == 1) {

            $('.edit_videos_modal').modal('hide');
            $(':input[type="submit"]').prop('disabled', false);            
            $('.datatable-videos').DataTable().ajax.reload();
            swal({
              title: "Success",
              text: "Data Updated Successfully",
              icon: "success",
              button: false,
              timer: 3000
            });

          }else if (data == 2) {
            swal({
              title: "Failed",
              text: "Some Error Occured Plase Try again .",
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
<script>
  $(document).ready(function(){
    $(document).on('submit','#addform_resources',function(){ 
      event.preventDefault();
     
      $(':input[type="submit"]').prop('disabled', false); 
      $.ajax({ 
        url:'<?= base_url().'Add_self_learning_resources' ?>',
        type:'POST',
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(data){
         
          $('.datatable-resources').DataTable().ajax.reload();
          $('.add_resources_modal').modal('hide');
          $('#addform_resources').trigger('reset');
          if(data == 1){
            swal({
              title: "Success!",
              text: "Data Added Successfully..",
              type: "success",
              timer: 3000
            });
          }else{
            swal({
              title: "warning!",
              text: "something Went Wrong!.",
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
        text: "Do You Want to Delete This Data!.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            type:'get',
            url:'<?= base_url().'Delete_self_learning_resources' ?>',
            data:{id:id},
            success:function(data){
              var obj = JSON.parse(data)
              if(obj.status == 'success'){
                $('.datatable-resources').DataTable().ajax.reload();
                swal('Success','Delete Data Successfully','success');
              }else{
                swal('error','Something Went Wrong Please Try After Some Time','success');
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
            url: "<?= base_url('fetch_single_self_learning_resources') ?>",
            data: {id:id},
            success: function(response) {

              $('#editform_resources').trigger('reset');
              var obj = $.parseJSON(response);
              $("#edit_title_res").val(obj['title']);
               $("#edit_resource_pdf_old").val(obj['resource_pdf']);
              $("#old_resourse_pdf_show").html(obj['resource_pdf']);
              $("#old_resourse_pdf").attr('href',"<?= base_url().'uploads/self_learn_files/' ?>"+obj['resource_pdf']);
              $("#cca_id").val(obj['id']);
              $('.edit_resources_modal').modal('show');
            }
          });

        } 
      });

      event.preventDefault();
    });

    $(document).on('submit', '#editform_resources', function(){
      $(':input[type="submit"]').prop('disabled', true);

      $.ajax({
        type: "POST",
        url: "<?=base_url('update_self_learning_resources')?>",
        data:new FormData(this),
        contentType:false,
        processData:false,
        success: function(data) {
          if (data == 1) {
            $('.edit_resources_modal').modal('hide');
            $(':input[type="submit"]').prop('disabled', false);            
            $('.datatable-resources').DataTable().ajax.reload();
            swal({
              title: "Success",
              text: "Data Updated Successfully",
              icon: "success",
              button: false,
              timer: 3000
            });

          }else if (data == 2) {
            swal({
              title: "Failed",
              text: "Some Error Occured Plase Try again .",
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