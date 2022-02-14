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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Admin</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">

                                <li style="list-style: none;"><a href="javascript:void(0);" class="btn btn-info pull-right add_admin">Add Admin</a></li>

                        </div>
                        <div class="body">
                           <input type="text" style=" position: absolute;left: -999em;" name="cpText" id="cpText">
                            <div class="table-responsive">
                                <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Contact</th>
                                       <th>Action</th>
                                    </thead>
                                    <tbody>
                                      <?php if(!empty($data)){ foreach($data as $val){ ?>
                                        <tr>
                                           <td><?= $val['name'] ?></td>
                                           <td><?= $val['email'] ?></td>
                                           <td><?= $val['contact'] ?></td>
                                           <td>
                                            <button type="button" class="btn btn-primary edit" name="<?= $val['name'] ?>" email="<?= $val['email'] ?>" contact="<?= $val['contact'] ?>" id="<?= $val['id'] ?>"><i class="fas fa-edit"></i></button>
                                            <a href="<?= base_url().'Adminpanel/Adminpanel/deleteAdmin?id='.$val['id'] ?>">
                                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </a>
                                           </td>
                                        </tr>
                                      <?php } } ?>

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
                <h6 class="title" id="defaultModalLabel">Add Admin</h6>
            </div>
            <div class="modal-body">
                <form class="form-group" id="admin_from" action="<?= base_url().'Adminpanel/Adminpanel/addAdmin' ?>"  method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required="required" autocomplete="off" >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" autocomplete="off" required="required" placeholder="Enter Email" onchange="checkAdminEmail(this.value)">
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label for="contact">Contact</label>
                            <input type="text" class="form-control" name="contact" required="required" placeholder="Enter Contact Number" autocomplete="off" onchange="checkAdminMobile(this.value)">
                            <input type="hidden" name="action">
                            <input type="hidden" name="id">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
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
<script src="<?= base_url()?>assets/admin/js/index.js"></script>script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php include('include/Footer.php');  ?>

<script type="text/javascript">
  $(document).on('click','.edit',function(){
    var name = $(this).attr('name');
    var email = $(this).attr('email');
    var contact = $(this).attr('contact');
    var id = $(this).attr('id');

    $('input[name="name"]').val(name);
    $('input[name="email"]').val(email);
    $('input[name="contact"]').val(contact);
    $('input[name="id"]').val(id);
    $('input[name="action"]').val('edit');
    $('#addmodal').modal('show')
  });

  $(document).on('click','.add_admin',function(){
    $('form').trigger('reset');
    $('input[name="action"]').val('add');
    $('#addmodal').modal('show')
  });
</script>
 <script>
  $(document).ready(function(){
    $('#admin_from').validate({
      rules:{
        name:{
          required : true,
        },
        email:{
          required : true,
          email:true,
        },
        contact:{
          required : true,
          number:true,
          minlength:10,
          maxlength:10,
        },
      },
      messages:{

        name:{
          required: '<span style="color:red">Please enter name</span>',
        },

        email:{
          required: '<span style="color:red">Please enter email</span>',
          email: '<span style="color:red">Please enter valid email</span>',
        },

        contact:{
          required: '<span style="color:red">Please enter contact number</span>',
          number: '<span style="color:red">Please enter contact number</span>',
          minlength: '<span style="color:red">Please enter contact number</span>',
          maxlength: '<span style="color:red">Please enter contact number</span>',
        },


      },
    });

  });

  function checkAdminEmail(email){
    if (email.length > 1) {
      $.ajax({
        type:'get',
        url:'<?= base_url().'Adminpanel/Adminpanel/checkEmailExist' ?>',
        data:{email:email},
        success:function(data){
          if (data == 1) {
            $('input[name="email"]').val('');
            $('input[name="email"]').focus();
            swal({
              title: "Warning",
              text: "Email address allredy exist",
              icon: "warning",
            })

          }
        }
      })
    }
  }

  function checkAdminMobile(mobile){
    // if (mobile.length == 10) {
      $.ajax({
        type:'get',
        url:'<?= base_url().'Adminpanel/Adminpanel/checkMobileExist' ?>',
        data:{contact:mobile},
        success:function(data){
          if (data == 1) {
            $('input[name="contact"]').val('');
            $('input[name="contact"]').focus();
            swal({
              title: "Warning",
              text: "Contact number allredy exist",
              icon: "warning",
            })
          }
        }
      })
    // }
  }
</script>
</body>

</html>
