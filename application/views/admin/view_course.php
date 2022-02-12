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

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Courses</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">

                                <li style="list-style: none;"><a href="<?= base_url('Courses') ?>" class="btn btn-info pull-right" >Add Course</a></li>
                            <form method="POST" action="<?= base_url().'Adminpanel/Content/update_course_heading' ?>" class="row">
                              <div class="col-sm-4 form-group">
                                <label>Top Course Heading</label>
                                  <input type="text" name="text" required="required" class="form-control" placeholder="Top Course Heading" value="<?= $this->User_model->getSelectWhereRow('heading','tbl_course_heading',array('id'=>1,),'','')->heading; ?>">
                              </div>
                              <div class="col-sm-4 form-group" style="margin-left: -1%;margin-top: 3%;">
                                  <button class="btn btn-primary" type="submit">Update</button>
                              </div>
                            </form>
                        </div>
                        <div class="body">


                           <input type="text" style=" position: absolute;left: -999em;" name="cpText" id="cpText">
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>

                                     <th>Title</th>
                                     <th>Starting Date</th>
                                     <th>MSP</th>
                                     <th>Course Title</th>
                                     <th>Active</th>
                                     <th>Top Course</th>
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
                         <label for="name">Exam Name </label>                                
                            <input type="text" class="form-control" name="exam_name" id="exam_name" placeholder="Exam Name" required="required" autocomplete="off" >
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name">Exam Voucher </label>
                            <input type="text" class="form-control" name="exam_vchr" id="exam_vchr" placeholder="Exam Voucher" required="required" autocomplete="off" >
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="date">Date Last</label>
                            <input type="date" class="form-control" name="last_date" id="last_date" required="required">
                            <input type="hidden" name="course_id" id="course_id">
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
<script>
    CKEDITOR.replace( 'description' );
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
                url:"<?= base_url() . 'DataTable/getCourseList'; ?>",
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
                url:'<?= base_url().'Delete_course' ?>',
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
               window.location.href="<?= base_url().'Edit-course?id='?>"+id;
             }
           });
             event.preventDefault();
      });

    $(document).on('click', '.status', function(){
      var status=$(this).attr('status');
      var id=$(this).attr('id');

      $.ajax({
        url:'<?= base_url().'change_status' ?>',
        type:'POST',
        data:{status:status,id:id},
        success:function(data){
           $('.datatable-buttt').DataTable().ajax.reload();
        }

      });
    });

    $(document).on('click', '.top-course', function(){
      var status=$(this).attr('status');
      var id=$(this).attr('id');

      $.ajax({
        url:'<?= base_url().'change_status' ?>',
        type:'POST',
        data:{status:status,id:id,top:'top'},
        success:function(data){
           $('.datatable-buttt').DataTable().ajax.reload();
        }

      });
    });

   });

  $(document).on('click','.Add_Exam',function(){
    var id = $(this).attr('id');
    var exam_name = $(this).attr('exam_name');
    var exam_vchr = $(this).attr('exam_vchr');
    var last_date = $(this).attr('last_date');
    var exa_description = $(this).attr('exa_description');
    $('#exam_name').val(exam_name);
    $('#exam_vchr').val(exam_vchr);
    $('#last_date').val(last_date);
    $('#course_id').val(id);
    CKEDITOR.instances.description.setData(exa_description);
    $('#addmodal').modal('show')
  });

  $(document).on('submit','#addform',function(){
    event.preventDefault();
    $.ajax({
      type:'post',
      url:'<?= base_url().'Adminpanel/Adminpanel/addUpdateExam' ?>',
      data:$(this).serialize(),
      success:function(data){
        swal('Success','examm added successfully','success');
        $('#addform').trigger('reset');
        $('#addmodal').modal('hide');
      }
    })
  })

</script>


</body>

</html>
