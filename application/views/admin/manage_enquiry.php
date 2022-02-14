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

* {
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  box-sizing:border-box;
}
table#DataTables_Table_0 {
    width: 100% !important;
}
*:before, *:after {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
.aj-add-chang {
    white-space: initial;
}
.clearfix {
  clear:both;
}

.text-center {text-align:center;}

a {
  color: tomato;
  text-decoration: none;
}

a:hover {
  color: #2196f3;
}

pre {
display: block;
padding: 9.5px;
margin: 0 0 10px;
font-size: 13px;
line-height: 1.42857143;
color: #333;
word-break: break-all;
word-wrap: break-word;
background-color: #F5F5F5;
border: 1px solid #CCC;
border-radius: 4px;
}

.header {
  padding:20px 0;
  position:relative;
  margin-bottom:10px;
  
}

.header:after {
  content:"";
  display:block;
  height:1px;
  background:#eee;
  position:absolute; 
  left:30%; right:30%;
}

.header h2 {
  font-size:3em;
  font-weight:300;
  margin-bottom:0.2em;
}

.header p {
  font-size:14px;
}



#a-footer {
  margin: 20px 0;
}

.new-react-version {
  padding: 20px 20px;
  border: 1px solid #eee;
  border-radius: 20px;
  box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1);
  
  text-align: center;
  font-size: 14px;
  line-height: 1.7;
}

.new-react-version .react-svg-logo {
  text-align: center;
  max-width: 60px;
  margin: 20px auto;
  margin-top: 0;
}





.success-box {
  margin:50px 0;
  padding:10px 10px;
  border:1px solid #eee;
  background:#f9f9f9;
}

.success-box img {
  margin-right:10px;
  display:inline-block;
  vertical-align:top;
}

.success-box > div {
  vertical-align:top;
  display:inline-block;
  color:#888;
}



/* Rating Star Widgets Style */
.rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  
}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:2.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
}
.aj-tebal-td {
    width: 100% !important;
    white-space: initial !important;
}
label .label-text {
    background: cyan;
}
label input.check:checked + .label-text {
    background: lime;
}
.aj-wid-chang {
    display: inline-grid;
    text-align: center;
}
.aj-wid-chang a {
    margin-bottom: 8px;
    width: fit-content;
}
.aj-wid-chang button {
    margin-bottom: 5px;
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
                           
                                <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#addmodal">Add Categories</a></li>
                            
                        </div>
                        <div class="body">
                            <div class="row">
                                <h3>Filter</h3>
                                <div class="col-md-12 col-sm-12">
                                    <form id="form-filter" class="form-horizontal">
                                    <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                          <div class="form-group">
                                            <label for="excel">From Date</label>
                                            <input type="date" class="form-control" name="from_date" id="from_date">
                                           
                                           </div>
                                       </div>
                                        <div class="col-md-4 col-sm-4">
                                          <div class="form-group">
                                            <label for="excel">To Date</label>
                                            
                                            <input type="date" class="form-control" name="to_date" id="to_date">
                                           </div>
                                       </div>    
                                     
                                        <button style="float: right;  margin-left: 5px;height:33px;margin-top: 28px" type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                                       <button style="float: right; margin-left: 5px;height:33px; margin-top: 28px" type="button" id="btn-reset" class="btn btn-primary">Reset</button>
                                    </div>  
                                    </form>
                                </div>
                            </div>
                           
                           <input type="text" style=" position: absolute;left: -999em;" name="cpText" id="cpText">
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                    
                                      <th>Name </th>
                                     <th>Contact </th>
                                     <th>Email</th>
                                     <th>Comment</th>
                                     <th>Next Follow Up Date</th>
                                     <th>Status</th>
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
                <h6 class="title" id="defaultModalLabel">Add Enquiry</h6>
            </div>
            <div class="modal-body">
                <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">   
                         <label for="contact">Contact</label>                                 
                            <input type="tel" class="form-control" name="contact" id="contact" minlength="10" maxlength="10" placeholder="Enter Contact No"  onkeypress="return isNumber(event)"  >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                         <label for="name"> Name</label>                                
                            <input type="text" class="form-control" list="name1" name="name" id="name" placeholder="Enter Your Name" autocomplete="off" >
                            <datalist  id="name1">
                              
                            </datalist>
                        </div>
                    </div>
                     
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group"> 
                         <label for="email"> Email</label>                                   
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="date">Date</label>  
                            <input type="Date" class="form-control" name="date" placeholder=" Date">
                                                         
                       </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">  
                           <label for="time">Time</label>
                            <input type="Time" class="form-control" name="time" placeholder=" Time">
                                                           
                       </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                           <label for="status">Status</label>
                            <select class="form-control" name="status" >
                                <option value="">Select Status</option>
                                <?php if(!empty($status)){  ?>
                                <?php foreach ($status as $key => $value) { ?>
                                  <option value="<?= $value['id'] ?>"><?= $value['status'] ?></option>
                              <?php  } } ?>
                               
                               
                            </select>              
                        </div>
                    </div>
                     <div class="col-md-12 col-sm-12">
                        <div class="form-group">       
                         <label for="comment">Comment</label>                             
                            <textarea class="form-control"  name="comment" placeholder="Enter Comment"></textarea>
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

<div class="modal animated fadeIn up_categories editmodal" id="assign" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Edit Enquiry</h6>
            </div>
            <div class="modal-body">
                  <form class="needs-validation" id="editform" method="post"  >
                 <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">    
                        <label for="contact">Contact</label>                                 
                            <input type="tel" class="form-control" name="edit_contact" id="edit_contact" minlength="10" maxlength="10" placeholder="Enter Contact No" onkeypress="return isNumber(event)">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">   
                         <label for="name"> Name</label>                                   
                            <input type="text" class="form-control" name="edit_name" id="edit_name"  placeholder="Enter Your Name">
                        </div>
                    </div>
                     
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">  
                        <label for="email"> Email</label>                                   
                            <input type="email" class="form-control" name="edit_email" id="edit_email" placeholder="Enter Email" >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">  
                            <label for="date">Date</label> 

                            <input type="Date" class="form-control" name="edit_date" id="edit_date" placeholder=" Date">
                                                            
                       </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                        <label for="time">Time</label>  
                            <input type="Time" class="form-control" name="edit_time" id="edit_time" placeholder="Time">
                                                            
                       </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group"> 
                         <label for="status">Status</label>     
                            <select class="form-control" name="edit_status" id="edit_status" >
                                <option value="">Select Status</option>
                                <?php if(!empty($status)){  ?>
                                <?php foreach ($status as $key => $value) { ?>
                                  <option value="<?= $value['id'] ?>"><?= $value['status'] ?></option>
                              <?php  } } ?>
                               
                            </select>              
                        </div>
                    </div>
                     <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                        <label for="comment">Comment</label>                                     
                            <textarea class="form-control"  name="edit_comment" id="edit_comment" placeholder="Enter  Comments"></textarea>
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
<script>
  $(document).ready(function(){
     $(document).on('change','#contact',function(){ 
           var contact=$(this).val();
          
        $.ajax({ 
          url:"<?= base_url().'Adminpanel/get_name_at_cont' ?>",
          type:'POST',
          data:{contact:contact},
          success:function(data){
              $('#name1').html(data);
                console.log(data);
          }
        });

        
  
      
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
                url:"<?= base_url() . 'DataTable/getEnquiryList'; ?>",  
                type:"POST",
                data:function(data){
                  data.from_date=$('#from_date').val();
                  data.to_date=$('#to_time').val();
                }
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
$(document).on('click','#btn-filter',function(){
    $('.datatable-buttt').DataTable().ajax.reload();
});
$(document).on('click','#btn-reset',function(){
   $("#form-filter").trigger('reset');
   $('.datatable-buttt').DataTable().ajax.reload();
});        

});
</script>  
<script>
  $(document).ready(function(){
     $(document).on('submit','#addform',function(){ 
          event.preventDefault();
          $(':input[type="submit"]').prop('disabled', false); 
          $.ajax({ 
            url:'<?= base_url().'Adminpanel/AddEnquiry' ?>',
            type:'POST',
            data:$(this).serialize(),
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
                url:'<?= base_url().'Adminpanel/DeleteEnquiry' ?>',
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
            url: "<?=base_url('Adminpanel/fetch_single_enquiry')?>",
            data: {id:id},
            success: function(response) {
                 $('#editform').trigger('reset');
                    var obj = $.parseJSON(response);
                     $("#edit_contact").val(obj['contact']);
                     $("#edit_name").val(obj['name']);
                     $("#edit_email").val(obj['email']);
                     $("#edit_comment").val(obj['comment']);
                     $("#edit_date").val(obj['date']);
                     $("#edit_time").val(obj['time']);
                     $("#edit_status").val(obj['status_id']);
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
          url: "<?=base_url('Adminpanel/update_enquiry')?>",
          data:$(this).serialize(),
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