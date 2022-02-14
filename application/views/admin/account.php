<?php include('include/Head.php') ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link rel="stylesheet" href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/toastr/toastr.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/css/main.css">
<link rel="stylesheet" href="<?= base_url()?>assets/css/color_skins.css">
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Account</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Account</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                           <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <form id="form-filter" class="form-horizontal">
                                    <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                          <div class="form-group">
                                            <label for="excel">From Date</label>
                                            <input type="date" class="form-control from_date" name="from_date" id="from_date">

                                           </div>
                                       </div>
                                        <div class="col-md-4 col-sm-4">
                                          <div class="form-group">
                                            <label for="excel">To Date</label>

                                            <input type="date" class="form-control to_date" name="to_date" id="to_date">
                                           </div>
                                       </div>


                                        <button style="float: right;  height: 32px; margin-top: 28px;" type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                                       <button style="float: right; height: 32px; margin-left: 5px; margin-top: 28px;" type="button" id="btn-reset" class="btn btn-primary">Reset</button>
                                      </div>
                                    </form>
                                </div>
                           </div>
                          <ul style="list-style: none;">
                            <li ><a href="javascript:void(0);"  class="btn btn-info pull-right" data-toggle="modal" data-target="#adddebitmodal">Add Debit</a></li>
                            <li ><a href="javascript:void(0);" style="margin-right: 10px;" class="btn btn-info pull-right" data-toggle="modal" data-target="#addcreditmodal">Add Credit</a></li>
                          </ul>
                        </div>
                        <div class="body">
                            <div class="row">



                           <input type="text" style=" position: absolute;left: -999em;" name="cpText" id="cpText">
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>

                                     <th>Date</th>
                                     <th>Narration</th>
                                     <th>Credit</th>
                                     <th>Debit</th>
                                     <th>Balance</th>

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

<div class="modal animated fadeIn" id="addcreditmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Credit</h6>
            </div>
            <div class="modal-body">
                <form class="form-group" id="addformcredit"  method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                  <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="amount">Amount</label>
                            <input type="text" class="form-control" name="amount"  placeholder="Enter Amount"  >
                        </div>
                    </div>

                     <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                 <label for="contact">Select Payment Type</label>
                                    <select class="form-control payment_type" name="payment_type" >
                                      <option value="cash">Cash</option>
                                      <option value="cheque">Cheque</option>
                                      <option value="online">Online</option>
                                    </select>
                                </div>
                      </div>
                       <div class="col-md-4 col-sm-12 cheque_div"  style="display: none;">
                        <div class="form-group">
                         <label for="amount">Cheque </label>
                            <input type="text" class="form-control" name="cheque"  placeholder="Enter Cheque No"  >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 online_div"  style="display: none;">
                        <div class="form-group">
                         <label for="amount">Reference Id</label>
                            <input type="text" class="form-control" name="reference"  placeholder="Enter Reference Id" >
                        </div>
                    </div>
                     <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                         <label for="name">Narration</label>
                            <textarea type="text" class="form-control"  name="narration"  placeholder="Enter Narration "  ></textarea>

                        </div>
                    </div>


                </div>
                <input type="hidden" name="pay_type" value="credit">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<div class="modal animated fadeIn" id="adddebitmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Debit</h6>
            </div>
            <div class="modal-body">
                <form class="form-group" id="addformdebit"  method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                  <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="amount">Amount</label>
                            <input type="text" class="form-control" name="amount"  placeholder="Enter Amount"  >
                        </div>
                    </div>

                     <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                 <label for="contact">Select Payment Type</label>
                                    <select class="form-control payment_type" name="payment_type" >
                                      <option value="cash">Cash</option>
                                      <option value="cheque">Cheque</option>
                                      <option value="online">Online</option>
                                    </select>
                                </div>
                      </div>
                       <div class="col-md-4 col-sm-12 cheque_div"  style="display: none;">
                        <div class="form-group">
                         <label for="amount">Cheque </label>
                            <input type="text" class="form-control" name="cheque"  placeholder="Enter Cheque No"  >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 online_div"  style="display: none;">
                        <div class="form-group">
                         <label for="amount">Reference Id</label>
                            <input type="text" class="form-control" name="reference"  placeholder="Enter Reference Id" >
                        </div>
                    </div>
                     <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                         <label for="name">Narration</label>
                            <textarea type="text" class="form-control"  name="narration"  placeholder="Enter Narration "  ></textarea>

                        </div>
                    </div>


                </div>
                <input type="hidden" name="pay_type" value="debit">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="<?= base_url()?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url()?>assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?= base_url()?>assets/vendor/toastr/toastr.js"></script>
<script src="<?= base_url()?>assets/bundles/chartist.bundle.js"></script>
<script src="<?= base_url()?>assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->

<script src="<?= base_url()?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?= base_url()?>assets/js/index.js"></script>
<script src="<?= base_url()?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?= base_url()?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->
<script src="<?= base_url()?>assets/js/pages/tables/jquery-datatable.js"></script>
<script src="<?= base_url()?>assets/js/pages/ui/dialogs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<?php include('include/Footer.php');  ?>


<script type="text/javascript">
$(document).ready(function (){

        $("#addformcredit").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                 amount: "required",
                narration: "required",

            },
            messages: {
                amount: "Please enter amount",
                narration:"Please enter project description",
            }
        });

        $("#addformdebit").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {

                amount: "required",
                narration: "required",
              },
            messages: {
               amount: "Please enter amount",
                narration:"Please enter project description",
            }
        });
    });
</script>
<script>
  $(document).ready(function(){
    $(document).on('click','#btn-filter',function(){

         $('.datatable-buttt').DataTable().ajax.reload();
    });
    $(document).on('click','#btn-reset',function(){
         $('#form-filter').trigger('reset');
         $('.datatable-buttt').DataTable().ajax.reload();
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
                url:"<?= base_url() . 'DataTable/getAccountList' ?>",
                type:"POST",
                data:function(data){
                  data.from_date=$("#from_date").val();
                  data.to_date=$("#to_date").val();
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


});
</script>

<script>
  $(document).ready(function(){
    $(document).on('change','.payment_type',function(){

      var payment_type= $(this).val();

      if(payment_type =="cheque"){
        $('.cheque_div').css('display','block');
        $('.online_div').css('display','none');
      }else if(payment_type =="online"){
        $('.online_div').css('display','block');
        $('.cheque_div').css('display','none');
      }else{
        $('.online_div').css('display','none');
        $('.cheque_div').css('display','none');
      }

    });
     $(document).on('submit','#addformdebit',function(){
          event.preventDefault();
          $(':input[type="submit"]').prop('disabled', false);

          $.ajax({
            url:'<?= base_url().'Adminpanel/AddDebitType' ?>',
            type:'POST',
            data:$(this).serialize(),
            success:function(data){

              $('.datatable-buttt').DataTable().ajax.reload();
              $('#adddebitmodal').modal('hide');
              $('#addformdebit').trigger('reset');
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
    $(document).on('submit','#addformcredit',function(){
          event.preventDefault();
          $(':input[type="submit"]').prop('disabled', false);

          $.ajax({
            url:'<?= base_url().'Adminpanel/AddCreditType' ?>',
            type:'POST',
            data:$(this).serialize(),
            success:function(data){

              $('.datatable-buttt').DataTable().ajax.reload();
              $('#addcreditmodal').modal('hide');
              $('#addformcredit').trigger('reset');
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
