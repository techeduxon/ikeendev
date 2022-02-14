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
        <?php $ses_data = $this->session->userdata('logsess');
       ?>


    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Enquiry Contacts</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Enquiry Contacts</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                              <div class="col-sm-4 form-group">
                                <input type="date" class="form-control" name="fromDate" placeholder="fromDate">
                              </div>
                              <div class="col-sm-4 form-group">
                                <input type="date" class="form-control" name="toDate" placeholder="toDate">
                              </div>
                              <button class="btn btn-primary" style="height: 0%" id="Filter">Filter</button>
                              &nbsp;&nbsp;&nbsp;
                              <button class="btn btn-default" style="height: 0%" id="reset">Reset</button>
                            </div>


                        </div>
                        <div class="body">


                           <input type="text" style=" position: absolute;left: -999em;" name="cpText" id="cpText">
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                    <?php if($_GET['page'] == 'Corporate-Training'){ ?>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Contact</th>
                                     <th>Train For</th>
                                     <th>Message</th>
                                     <th>Date</th>
                                     <th>Action</th>
                                    <?php }else{ ?>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Contact</th>
                                     <?php if($_GET['page'] == 'contact_us'){ ?>
                                      <th>Subject</th>
                                    <?php }else{ ?>
                                      <th>Option</th>
                                    <?php } ?>
                                     <th>Country</th>
                                     <th>Message</th>
                                     <th>Action</th>
                                   <?php } ?>
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




<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.18/pdfmake.min.js"></script>

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.bootstrap.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.js"></script>
<?php include('include/Footer.php');  ?>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript" language="javascript" >
 $(function(){
        var dataTable = $('.datatable-buttt').DataTable({
             dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'print'
            ],
           "processing":true,
           "serverSide":true,
           "order":[],
           "ajax":{
            <?php if($_GET['page'] == 'Corporate-Training'){ ?>
              url:"<?= base_url() . 'DataTable/getCorporateList?page='.$_GET['page']; ?>",
            <?php }else{ ?>
                url:"<?= base_url() . 'DataTable/getEnquirycontactList?page='.$_GET['page']; ?>",
            <?php } ?>
                type:"POST",
                "data":function(data){
                  data.formEdate = $('input[name="fromDate"]').val();
                  data.toEdate = $('input[name="toDate"]').val();
                },

                // "error": function (xhr, error, thrown) {
                //    window.location.reload();
                // },
           },
           "columnDefs":[
                {
                     "targets":[0,6],
                     "orderable":false,
                },
           ],
      });

      $(document).on('click','#Filter',function(){
        $('.datatable-buttt').DataTable().ajax.reload();
      });

      $(document).on('click','#reset',function(){
        $('input[name="fromDate"]').val('');
        $('input[name="toDate"]').val('');
        $('.datatable-buttt').DataTable().ajax.reload();
      })
$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

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
                url:'<?= base_url().'Adminpanel/Content/Delete_enquiry_contact' ?>',
                data:{id:id},
                success:function(data){
                    var obj = JSON.parse(data)
                    if(obj.status == 'success'){
                        $('.datatable-buttt').DataTable().ajax.reload();
                        swal('Success','Delete data successfully','success');
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

 $(document).on('click','.delete-delete-delete',function(){
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
                url:'<?= base_url().'Adminpanel/Content/Delete_enquiry_corporate' ?>',
                data:{id:id},
                success:function(data){
                    var obj = JSON.parse(data)
                    if(obj.status == 'success'){
                        $('.datatable-buttt').DataTable().ajax.reload();
                        swal('Success','Delete data successfully','success');
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
  });

</script>


</body>

</html>
