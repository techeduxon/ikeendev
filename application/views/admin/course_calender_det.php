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

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Course Calender Detail</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Course Calender Detail</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">

                                <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#addmodal">+Add Course Calender Detail</a></li>

                        </div>
                        <div class="body">
                           <input type="text" style=" position: absolute;left: -999em;" name="cpText" id="cpText">
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>

                                       <th>Month</th>
                                       <th>Start Date</th>
                                       <th>End Date</th>
                                       <th>Start Time</th>
                                       <th>End Time</th>
                                       <th>MRP</th>
                                       <th>MSP</th>
                                       <th>MODE</th>
                                       <th>Training</th>
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
<div class="modal animated fadeIn  addmodal" id="addmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Details</h6>
            </div>
            <div class="modal-body">
                 <form class="form-group" id="addform"  method="post" enctype="multipart/form-data">
                  <input type="hidden" name="trainig_id" id="trainig_id">
                    <div class="row clearfix">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="month">Month</label>
                           <select class="form-control" name="month" id="month">
                            <option value="jan">Jan</option>
                            <option value="feb">Feb</option>
                            <option value="mar">March</option>
                            <option value="apr">Apr</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="aug">Aug</option>
                            <option value="sept">Sept</option>
                            <option value="OCT">Oct</option>
                            <option value="nov">Nov</option>
                            <option value="dec">dec</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="start_date">Start Date</label>
                          <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Select Start Date" autocomplete="off" >
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="end_date">End Date</label>
                          <input type="date" class="form-control" name="end_date" id="end_date" placeholder="Select End Date" autocomplete="off" >
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="price">MRP</label>
                          <input type="text" class="form-control" name="mrp" id="mrp" placeholder="Enter MRP" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="sell_price">Selling Price</label>
                          <input type="text" class="form-control" name="sell_price" id="sell_price" placeholder="Selling Price" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="start_time">Start Time</label>
                          <input type="time" class="form-control" name="start_time" id="start_time" placeholder="Select Start Time" autocomplete="off" >
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="end_time">End Time</label>
                          <input type="time" class="form-control" name="end_time" id="end_time" placeholder="Select End Time" autocomplete="off" >
                        </div>
                      </div>


                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="mode">Mode</label>
                          <select class="form-control" name="mode" id="mode" required="required">
                            <option selected="selected" value="Online">Online</option>
                            <option value="Self-Paced">Self-Paced</option>
                            <option value="Classroom">Classroom</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="timing">Timing</label>
                          <!-- <input type="text" class="form-control" name="timing" id="timing" placeholder="Enter Timing" autocomplete="off" > -->
                          <select class="form-control" name="timing" id="timing" required="required">
                          <option value="Morning" selected="selected">Morning</option>
                            <option value="Evening">Evening</option>
                            <option value="All Day">All Day</option>
                            <option value="Weekday">Weekday</option>
                            <option value="Mon-Sat">Mon-Sat</option>
                          </select>
                        </div>
                      </div>

                </div>
                 <input type="hidden" name="training_id" value="<?= $_GET['id'] ?>" >
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </form>
            </div>

        </div>
    </div>
</div>
<div class="modal animated fadeIn  editmodal" id="" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Edit Details</h6>
            </div>
            <div class="modal-body">
                 <form class="form-group" id="editForm"  method="post" enctype="multipart/form-data">
                  <input type="hidden" name="trainig_id" id="trainig_id">
                    <div class="row clearfix">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="month">Month</label>
                           <select class="form-control" name="month" id="month">
                            <option value="jan">Jan</option>
                            <option value="feb">Feb</option>
                            <option value="mar">March</option>
                            <option value="apr">Apr</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="aug">Aug</option>
                            <option value="sept">Sept</option>
                            <option value="OCT">Oct</option>
                            <option value="nov">Nov</option>
                            <option value="dec">dec</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="start_date">Start Date</label>
                          <input type="date" class="form-control" name="edit_start_date" id="edit_start_date" placeholder="Select Start Date" autocomplete="off" >
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="end_date">End Date</label>
                          <input type="date" class="form-control" name="edit_end_date" id="edit_end_date" placeholder="Select End Date" autocomplete="off" >
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="price">MRP</label>
                          <input type="text" class="form-control" name="edit_mrp" id="edit_mrp" placeholder="Enter MRP" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="sell_price">Selling Price</label>
                          <input type="text" class="form-control" name="edit_sell_price" id="edit_sell_price" placeholder="Selling Price" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="start_time">Start Time</label>
                          <input type="time" class="form-control" name="edit_start_time" id="edit_start_time" placeholder="Select Start Time" autocomplete="off" >
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="end_time">End Time</label>
                          <input type="time" class="form-control" name="edit_end_time" id="edit_end_time" placeholder="Select End Time" autocomplete="off" >
                        </div>
                      </div>


                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="mode">Mode</label>
                          <!-- <input type="text" class="form-control" name="edit_mode" id="edit_mode" placeholder="Enter Mode" autocomplete="off" > -->
                          <select class="form-control" name="edit_mode" id="edit_mode" required="required">
                            <option selected="selected" value="Online">Online</option>
                            <option value="Self-Paced">Self-Paced</option>
                            <option value="Classroom">Classroom</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="timing">Timing</label>
                          <!-- <input type="text" class="form-control" name="edit_timing" id="edit_timing" placeholder="Enter Timing" autocomplete="off" > -->
                          <select class="form-control" name="edit_timing" id="edit_timing" required="required">
                            <option value="Morning" selected="selected">Morning</option>
                            <option value="Evening">Evening</option>
                            <option value="All Day">All Day</option>
                            <option value="Weekday">Weekday</option>
                            <option value="Mon-Sat">Mon-Sat</option>
                          </select>
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

        $('#addform').validate({
          errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                month: "required",
                start_date: "required",
                end_date: "required",
                mrp: "required",
                sell_price: "required",
                start_time: "required",
                end_time: "required",
                mode: "required",
                timing: "required",
             },
            messages: {
                month: "Please enter month",
                start_date: "Please select start date",
                end_date: "Please select end date",
                mrp: "Please enter mrp",
                sell_price: "Please enter selling price",
                start_time: "Please select start time",
                end_time: "Please select end time",
                mode: "Please enter mode",
                timing: "Please enter timing",
            }
        })
        $('#editForm').validate({
          errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                edit_month: "required",
                edit_start_date: "required",
                edit_end_date: "required",
                edit_mrp: "required",
                edit_sell_price: "required",
                edit_start_time: "required",
                edit_end_time: "required",
                edit_mode: "required",
                edit_timing: "required",
             },
            messages: {
                edit_month: "Please enter month",
                edit_start_date: "Please select start date",
                edit_end_date: "Please select end date",
                edit_mrp: "Please enter mrp",
                edit_sell_price: "Please enter selling price",
                edit_start_time: "Please select start time",
                edit_end_time: "Please select end time",
                edit_mode: "Please enter mode",
                edit_timing: "Please enter timing",
            }
        })
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
                url:"<?= base_url() . 'DataTable/getTrainingdetList?id='; ?>"+"<?= $_GET['id'] ?>",
                type:"POST",
           },
           "columnDefs":[
                {
                     "targets":[0, 9],
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
            url:'<?= base_url().'Adminpanel/Blog/addTrainingdet' ?>',
            type:'POST',
            data:$(this).serialize(),
            success:function(data){

              $('.datatable-buttt').DataTable().ajax.reload();
              $('#addmodal').modal('hide');
              $('#addform').trigger('reset');
              swal({
                title: "Success!",
                text: "Training added successfully..",
                type: "success",
                timer: 3000
              });
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
                url:'<?= base_url().'Adminpanel/Blog/deleteTrainingdet' ?>',
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
            url: "<?= base_url('Adminpanel/Blog/fetch_single_trainingdet') ?>",
            data: {id:id},
            success: function(response) {

                 $('#editform').trigger('reset');
                    var obj = $.parseJSON(response);
                      $("#edit_month").val(obj['month']);
                      $("#edit_start_date").val(obj['start_date']);
                      $("#edit_end_date").val(obj['end_date']);
                      $("#edit_start_time").val(obj['start_time']);
                      $("#edit_end_time").val(obj['end_time']);
                      $("#edit_mrp").val(obj['mrp']);
                      $("#edit_sell_price").val(obj['sell_price']);
                      $("#edit_mode").val(obj['mode']);
                      $("#edit_timing").val(obj['timing']);
                      $("#ca_id").val(obj['id']);
                     $('.editmodal').modal('show');
               }
             });

         }
       });

        event.preventDefault();
      });

    $(document).on('submit', '#editForm', function(){
    $(':input[type="submit"]').prop('disabled', true);
     $.ajax({
          type: "POST",
          url: "<?=base_url('Adminpanel/Blog/editTrainingdet')?>",
          data:$(this).serialize(),
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
