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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>How Tech Works</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">How Tech Works</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                           
                                <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#addmodal">Add How Tech Works</a></li>
                            
                        </div>
                        <div class="body">
                            
                           
                           <input type="text" style=" position: absolute;left: -999em;" name="cpText" id="cpText">
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                    
                                      <th>Title 1</th>
                                     <th>Title 2</th>
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
                <h6 class="title" id="defaultModalLabel">Add </h6>
            </div>
            <div class="modal-body">
                <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                    
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                         <label for="name"> Title 1</label>                                
                            <input type="text" class="form-control" name="title1" id="title1" placeholder="Enter Title 1" autocomplete="off" >
                           
                        </div>
                    </div>
                     
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                         <label for="name"> Title 2</label>                                
                            <input type="text" class="form-control" name="title2" id="title2" placeholder="Enter Title 2" autocomplete="off" >
                           
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="date">Image</label>  
                            <input type="file" class="form-control" name="single_image" id="single_image">
                                                         
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
                <h6 class="title" id="defaultModalLabel">Edit </h6>
            </div>
            <div class="modal-body">
                  <form class="needs-validation" id="editform" method="post"  >
                 <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                    <div class="row clearfix">
                        
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">    
                             <label for="title"> Title 1</label>                                
                                <input type="text" class="form-control" name="edit_title1" id="edit_title1" placeholder="Enter Title 1" autocomplete="off" >
                               
                            </div>
                        </div>
                         
                         <div class="col-md-4 col-sm-12">
                            <div class="form-group">    
                             <label for="title"> Title 2</label>                                
                                <input type="text" class="form-control" name="edit_title2" id="edit_title2" placeholder="Enter Title 2" autocomplete="off" >
                               
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                             <label for="image">Image</label>  
                                <input type="file" class="form-control" name="edit_single_image" id="edit_single_image">
                                <input type="hidden" name="old_image" id="old_iamge">
                                <img src="" id="show_image" style="height:50px;width:50px;">                          
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
                
                name: "required",
                email: "required",
                status:"required",
                date:"required",
                time:"required",
                contact: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,

                },
               
            },
            messages: {
                name: "Please Enter Your  Name",
                email: "Please Enter Your Email",
                status :"Please Select Status",
                date :"Please Select Date",
                time :"Please Select Time",
                contact: {
                    required:  "Please Enter Your Contact Number",
                    digits:    "Please Enter Valid Contact No",
                    minlength: "Please Enter Valid Contact No",
                    maxlength: "Please Enter Valid Contact No",
                },
               
               
            }
        });

        $("#editform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                
                edit_name: "required",
                edit_email: "required",
                edit_status:"required",
                edit_date:"required",
                edit_time:"required",
                edit_contact: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },

            },
            messages: {
                edit_name: "Please Enter Your  Name",
                edit_email: "Please Enter Your Email",
                edit_status :"Please Select Status",
                edit_date :"Please Select Date",
                edit_time :"Please Select Time",
                edit_contact: {
                    required:  "Please Enter Your Contact Number",
                    digits:    "Please Enter Valid Contact No",
                    minlength: "Please Enter Valid Contact No",
                    maxlength: "Please Enter Valid Contact No",
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
                url:"<?= base_url() . 'DataTable/getHow_tech_workList'; ?>",  
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
            url:'<?= base_url().'Add_how_tech_work' ?>',
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
                url:'<?= base_url().'Delete_how_tech_work' ?>',
                data:{id:id},
                success:function(data){
                    var obj = JSON.parse(data)
                    if(obj.status == 'success'){
                        $('.datatable-buttt').DataTable().ajax.reload();
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
            url: "<?=base_url('fetch_single_how_tech_work')?>",
            data: {id:id},
            success: function(response) {
                 $('#editform').trigger('reset');
                    var obj = $.parseJSON(response);
                     $("#edit_title1").val(obj['title1']);
                     $("#edit_title2").val(obj['title2']);
                     $('#old_iamge').val(obj['image']);
                     $('#show_image').attr('src','<?= base_url().'uploads/home_images/'?>'+obj['image']);
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
          url: "<?=base_url('update_how_tech_work')?>",
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