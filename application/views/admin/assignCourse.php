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

input[type=checkbox], input[type=radio] {
    width: 15%;
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Assign Course</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Assign Course</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                        </div>
                        <div class="body">
                          <?= $this->session->flashdata('message'); ?>
                          <div class="col-12 row">
                            <div class="col-sm-4 form-group">
                              <select id="course" name="course" class="form-control">
                                <option value="">Select Course</option>
                                <?php if(!empty($course)){ foreach ($course as $key => $val) { ?>
                                  <option value="<?= $val['id'] ?>"><?= $val['title'] ?></option>
                                <?php } } ?>
                              </select>
                            </div>

                            <div class="col-sm-6 form-group">
                              <input type="checkbox" name="purchaseType[]" value="fullCourse" id="fullCourse" checked="checked" style="width: 4% !important;">
                              <label for="fullCourse">Live Classes</label>
                              <input type="checkbox" name="purchaseType[]" value="selfLearning" id="selfLearning" style="width: 4% !important;" >
                              <label for="selfLearning">Self Learning</label>
                            </div>


                            <div class="col-sm-2 form-group" >
                              <button class="btn btn-primary" style="margin: auto;" onclick="assign_course()">Assign Course</button>
                            </div>
                          </div>
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                     <th><input type="checkbox" name="check_all" id="check_all" class="form-control" onchange="check_all()"><label>Check All</label></th>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Contact</th>
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

<script type="text/javascript" language="javascript" >  
 $(function(){ 
        var dataTable = $('.datatable-buttt').DataTable({  
             dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "bSort": false,
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?= base_url() . 'DataTable/getLearnerList1'; ?>",  
                type:"POST",
               
                // "error": function (xhr, error, thrown) {
                //    window.location.reload();
                // },
           },  
           "columnDefs":[  
                {  
                     "targets":[],  
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
        event.preventDefault();
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
                url:'<?= base_url().'Adminpanel/Content/Delete_learner_list' ?>',
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
                // error: function (xhr, error, thrown) {
                //    window.location.reload();
                // },
            })
          }
        });
      });
 
  });

function check_all(){
  if ($('input[name="check_all"]').is(':checked') == true) {
    $('input[type="checkbox"]').prop('checked',true);
  }else{
    $('input[type="checkbox"]').prop('checked',false);
  }

}

function assign_course(){
  var check = [];
  $('input[name="check_id[]"]').each(function(){
    if($(this).is(':checked') == true){
      check.push(this.value);
    }
  });

  var course = $('#course').val();
  if(course == ''){
    swal('warning','Please Select Course','warning');    
    return;
  }

  if($('input[name="purchaseType[]"]').is(':checked') == true){
    var type = [];
    $('input[name="purchaseType[]"]').each(function(){
      if($(this).is(':checked') == true){
        type.push($(this).val());;
      }
    });
    // window.location.href = '<?= base_url().'Checkout1?id=' ?>'+type;
  }else{
    swal('warning','Please Select Purchase Type','error');
    return
  }

  if(check.length == 0){
    swal('warning','Please Select Atleast One Student To assign Course','warning');
    return;
  }else{
    window.location.href = '<?= base_url().'Adminpanel/Adminpanel/saveUserAssign?student=' ?>'+check+'&course='+course+'&type='+type;
  }
}

$(document).on('change','input[name="purchaseType[]"]',function(){
        var price = $(this).attr('price');
        var id = $(this).attr('id');
        if($(this).is(':checked') == true){
            if(id == 'fullCourse'){
                $('input[name="purchaseType[]"]').prop('checked',false);
                $(this).prop('checked',true);
            }else{
                $('#fullCourse').prop('checked',false);
            }
        }
})
</script>


</body>

</html>