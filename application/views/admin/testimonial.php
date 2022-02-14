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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Testimonial</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Testimonial</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                          <div class="col-12">
                            <form method="POST" action="<?= base_url().'Adminpanel/Content/updateTestomonialSec' ?>" class="row">
                              <div class="col-sm-6 form-group">
                                <?php $sec = $this->Frontend_model->fetch_condrecordwithfield('tbl_test_sec',array('id'=>1),'*') ?>
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required="required" value="<?= $sec->title ?>" placeholder="Title">
                              </div>

                              <div class="col-sm-6 form-group">
                                <label>Button Text</label>
                                <input type="text" name="btn_title" class="form-control" required="required" placeholder="Button Text" value="<?= $sec->btn_title ?>">
                              </div>

                              <div class="col-sm-12 form-group">
                                <label>Detail</label>
                                <textarea name="detail" class="form-control" required="required" placeholder="Detail"><?= $sec->detail ?></textarea>
                              </div>
                              <div class="col-sm-4 form-group">
                                <button class="btn btn-primary" type="submit">Update</button>
                              </div>
                            </form>
                          </div>

                                <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#addmodal">Add Testimonial</a></li>

                        </div>
                        <div class="body">


                           <input type="text" style=" position: absolute;left: -999em;" name="cpText" id="cpText">
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>

                                     <th>Image</th>
                                     <th>Name</th>
                                     <th>Designation</th>
                                     <th>Star</th>
                                     <th>Page</th>
                                     <th>Description</th>
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
                         <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name " autocomplete="off" >

                        </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name">Designation</label>
                            <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation" autocomplete="off" >

                        </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name">Star</label>
                            <input type="text" class="form-control" name="star" id="star" placeholder="Enter Star Between 1 To 5" autocomplete="off" onkeypress="return isNumber(event)" >

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="date">Image</label>
                            <input type="file" class="form-control" name="single_image" id="single_image">

                       </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="date">From Page</label>

                            <select class="form-control" name="from_page"  id="from_page" >
                              <option value="">Select For Page</option>
                              <option value="home_page">Home Page</option>
                              <!-- <option value="Who We Are">Who We Are</option> -->
                            </select>
                       </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                         <label for="date">Description</label>
                            <textarea type="text" class="form-control" name="description" id="description"></textarea>

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
                         <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="edit_name" placeholder="Enter Name " autocomplete="off" >

                        </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name">Designation</label>
                            <input type="text" class="form-control" name="designation" id="edit_designation" placeholder="Enter Designation" autocomplete="off" >

                        </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name">Star</label>
                            <input type="text" class="form-control" name="star" id="edit_star" placeholder="Enter Star Between 1 To 5" autocomplete="off" >

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="date">Image</label>
                            <input type="file" class="form-control" name="single_image" id="edit_single_image">
                            <input type="hidden" name="old_image" id="old_image">
                            <img src="" id="show_image" style="height: 50px;width: 50px;">

                       </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="date">From Page</label>

                            <select class="form-control" name="from_page"  id="edit_from_page" >
                              <option value="">Select For Page</option>
                              <option value="home_page">Home Page</option>
                              <!-- <option value="user_about_us">User About Us</option> -->
                            </select>
                       </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                         <label for="date">Description</label>
                            <textarea type="text" class="form-control" name="description" id="edit_description"></textarea>

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
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript">
$(document).ready(function (){

        $("#addform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                name: "required",
                designation: "required",
                description:"required",
                star:"required",
                single_image:"required",
                from_page:"required",
            },
            messages: {
                name: "Please enter your  name",
                designation: "Please enter your designation",
                description :"Please enter description",
                star :"Please enter star",
                single_image :"Please select image",
                from_page :"Please select for page",
            }
        });

        $("#editform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
             rules: {
                edit_name: "required",
                edit_designation: "required",
                edit_description:"required",
                edit_star:"required",
                edit_from_page:"required",
            },
            messages: {
                edit_name: "Please enter your  name",
                edit_designation: "Please enter your designation",
                edit_description :"Please enter description",
                edit_star :"Please enter star",
                edit_from_page :"Please select for page",
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
                url:"<?= base_url() . 'DataTable/getTestimonialList'; ?>",
                type:"POST",

                // "error": function (xhr, error, thrown) {
                //    window.location.reload();
                // },
           },
           "columnDefs":[
                {
                     "targets":[0, 6],
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
            url:'<?= base_url().'Adminpanel/Content/Add_testimonial' ?>',
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
                url:'<?= base_url().'Adminpanel/Content/Delete_testimonial' ?>',
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
            url: "<?=base_url('Adminpanel/Content/fetch_single_testimonial')?>",
            data: {id:id},
            success: function(response) {
                 $('#editform').trigger('reset');
                    var obj = $.parseJSON(response);
                     $("#edit_name").val(obj['name']);
                     $("#edit_designation").val(obj['designation']);
                     // CKEDITOR.instances['edit_description'].setData(obj['description']);
                     $("#edit_description").val(obj['description']);
                     $("#edit_star").val(obj['star']);
                     $("#edit_from_page").val(obj['from_page']);
                     $('#old_image').val(obj['image']);
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
          url: "<?=base_url('Adminpanel/Content/update_testimonial')?>",
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
