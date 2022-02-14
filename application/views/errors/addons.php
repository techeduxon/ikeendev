<?php include('include/Header.php');  ?> 
<style type="text/css">
 
    .dataTables_filter{
      float: right;
    }
</style>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <!-- <h4 class="mb-0 font-size-18">In Process</h4> -->

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('Adminpanel'); ?>">Home</a></li>
                                <li class="breadcrumb-item active">Adddons</li>
                            </ol>
                        </div>

                    </div> 
                </div>
            </div>     
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="text-sm-left">
                             <?php if ($admin[0]['addons_a'] == 1){ ?> 
                                
                                <button type="button"  data-toggle="modal" data-target="#mystatus" class="btn btn-success  waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus mr-1"></i>Create Addons</button>
                            <?php } ?>
                            </div>

                            <!---modal form --->
                            <div id="mystatus" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        
                                        <h2>Add Addons</h2>
                                      <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->

                                  </div>
                                  <div class="modal-body">
                                      <div class="container">
                                        <form id="Status-form" method="POST">

                                          <div class="form-group">
                                            <label for="name">Name:<span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Price:<span style="color:red">*</span></label>
                                            <input type="tel" class="form-control" id="price" placeholder="Enter Price" name="price" onkeypress="return isNumber(event)">
                                        </div>
                                        <div class="form-group">
                                            <label for="number">Description:</label>
                                            <textarea type="text" class="form-control" id="comment" placeholder="Write Description" name="comment"></textarea>
                                        </div>
                                        <center> 
                                        <button type="submit" class="btn btn-primary ">Submit</button></center>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <!-- sample edit data modal content -->
                <div id="editresponsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                   <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Update </h4>
                          <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                      </div>
                      <div class="modal-body">
                       <div class="col-12">
                          <div class="card">
                            <div class="card-body">
                              <!--                            <h4 class="card-title">Form</h4>-->
                              <form   method="post" id="editcategory_form" name="editcategory_form">
                                  <div class="form-group">
                                    <label for="name">Name:<span style="color:red">*</span></label>
                                    <input type="hidden" name="l_id" id="l_id">
                                    <input type="text" class="form-control" id="name1" placeholder="Enter Name" name="name1">
                                </div>
                                <div class="form-group">
                                    <label for="name">Price:<span style="color:red">*</span></label>
                                    <input type="tel" class="form-control" id="price1" placeholder="Enter Price" name="price1" onkeypress="return isNumber(event)">
                                </div>
                                <div class="form-group">
                                    <label for="number">Description:</label>
                                    <textarea type="text" class="form-control" id="comment1" placeholder="Write Description" name="comment1"></textarea>
                                </div>
                                <div class="form-group">
                                </div>
                                <hr>
                                <!-- <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button> -->
                                <center>
                                <button class="btn btn-primary editcategory" type="submit">Submit</button></center>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.end edit modal -->
<br><br><br>
<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
      <table id="file_export1" class="table table-striped table-bordered display">
        <thead>
          <tr>
            <th>S. NO.</th>
            <th>EVENTs </th>
            <th>PRICE</th>
            <th>DESCRIPTION</th>
            <th>CREATED AT</th>
        <?php if ($admin[0]['addons_e'] == 1 || $admin[0]['addons_d'] == 1 ){ ?>    
            <th>ACTION</th>     
        <?php } ?>        
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>

</div>
<div class="row mb-2">
                                           <!--  <div class="col-sm-4">
                                                <div class="search-box mr-2 mb-2 d-inline-block">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Search...">
                                                        <i class="bx bx-search-alt search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus mr-1"></i> New Booking</button>
                                                </div>
                                            </div> --><!-- end col--
                                        </div>
                
                                       --  <div class="table-responsive">
                                            <table class="table table-centered table-nowrap">
                                                <thead class="thead-light">
                                                    <tr>
                            
                                                        <th>#</th>
                                                    
                                                        <th>Event Type</th>
                                                        <th>Price</th>
                                                        <th>Comment</th>
                                                        <th>Action
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                            <td>
                                                           1
                                                        </td>
                                                
                                                    
                                                        <td>Merriege</td>
                                                     
                                                        <td>
                                                          50000/-
                                                        </td>
                                                         <td>
                                                       Meriige event
                                                        </td>

                                                      
                                                      
                                                        <td>
                                                            -- Button trigger modal --
                                                          <a href="in-process.html">  <button type="button" class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target=".exampleModal">
                                                         Edit
                                                            </button></a>
                                                        </td>
                                              
                                                    </tr>

 
 




                                                </tbody>
                                            </table>
                                        </div> -->
                                        <!-- <ul class="pagination pagination-rounded justify-content-end mb-2">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Modal -->
                <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-7.png" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 255</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-4.png" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Hoodie (Blue)</h5>
                                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 145</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Shipping:</h6>
                                                </td>
                                                <td>
                                                    Free
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
       <!--  <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>
    -->
    <?php include('include/Footer.php'); ?>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 08:32:24 GMT -->
</html>
<script type="text/javascript">
   $(function() {

      $("#Status-form").validate({
        rules: {
          name: {
            required: true,
             remote: {
                url: "<?= base_url().'Adminpanel/register_addon_exists' ?>",
                type: "post",
                data: { name: function(){ return $("#name").val(); }
                }
              }
        },
        price: {
            required: true,
        },
    },
    messages: {
      name: {
        required: "<span><font color='red'>Please enter Name</font></span>",
        remote:'<span style="color:red">This addon is already exist.</span>',
    },
    price: {
        required: "<span><font color='red'>Please Enter Price</font></span>",
    },
}
});

      $("#editcategory_form").validate({
        rules: {
          name1: {
            required: true,
             // remote: {
             //    url: "<?= base_url().'Adminpanel/register_addon_exists2' ?>",
             //    type: "post",
             //    data: { name1: function(){ return $("#name1").val(); },
             //    id: function(){ return $("#l_id").val(); }
             //    }
             //  }
        },
        price1: {
            required: true,
        },
    },
    messages: {
      name1: {
        required: "<span><font color='red'>Please enter Name</font></span>",
         // remote:'<span style="color:red">This addon is already exist.</span>',
    },
    price1: {
        required: "<span><font color='red'>Please Write Comments</font></span>",
    },
}
});
  });
</script>
<!-- End -->
<!-- Start Crud Functions-->

<script type="text/javascript" language="javascript" >  
   $(document).ready(function(){  
     var dataTable = $('#file_export1').DataTable({ 
     "dom": 'Bfrtip',
           "buttons": [
            'pageLength', 'copy', 'csv', 'excel', 'pdf', 'print'
            ],  
       "processing":true,  
       "serverSide":true,  
       "order":[],  
       "ajax":{  
          url:"<?php echo base_url() . 'Adminpanel/get_addons'; ?>",  
          type:"POST"  
      },  
      "columnDefs":[  
      {  
       "targets":[0, 3],  
       "orderable":false,  
   },  
   ],  
});

     $(document).on('click', '.delete', function(){ 
        var id = $(this).attr("id");  
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this Addons!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
        .then((willDelete) => {
          if (willDelete) {
             $.ajax({
                type: "POST",
                url: "<?=base_url('Adminpanel/delete_addons')?>",
                data: {id:id},
                success: function(response) {
                   swal({
                          title: "Success",
                          text: "Poof! Your Addons  has been deleted!",
                          icon: "success",
                          button: false,
                          timer: 3000
                      });        
                  dataTable.ajax.reload(); 
              }
          });

         } 
     });

        event.preventDefault();
    });

     $(document).on('submit', '#Status-form', function(e) {
       $(':input[type="submit"]').prop('disabled', true);
       $.ajax({
          type : "POST",
          url  : "<?=base_url('Adminpanel/submit_addons')?>",
          data:$('#Status-form').serialize(),  
          success: function(data) {

            if (data == 1) 
            { 
              dataTable.ajax.reload(); 
              $('#Status-form').trigger('reset');
              $('#mystatus').modal('hide');
              $(':input[type="submit"]').prop('disabled', false);

              $('#responsive-modal').modal('hide');
              swal({
                  title: "Success",
                  text: "Addons Added Successfully",
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


     $(document).on('click', '.update', function(){
        var id = $(this).attr("id"); 
        //
        swal({
          title: "Are you sure?",
          text: "You want to update this Addons!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
        .then((willDelete) => {
          if (willDelete) {
             $.ajax({
                type: "POST",
                url: "<?=base_url('Adminpanel/fetch_single_addons')?>",
                data: {id:id},
                success: function(response) {
                // alert(response);
                $('#editcategory_form').trigger('reset');
                var obj = $.parseJSON(response);
                document.getElementById("name1").value =  obj['addons_name'];
                 document.getElementById("price1").value =  obj['price'];
                document.getElementById("comment1").value =  obj['comment'];
                document.getElementById("l_id").value =  obj['id'];
                $('#editresponsive-modal').modal('show');
            }
        });

         } 
     });

        event.preventDefault();
    });

     $(document).on('submit', '#editcategory_form', function(){
       $(':input[type="submit"]').prop('disabled', true);
       $.ajax({
          type: "POST",
          url: "<?=base_url('Adminpanel/update_addons')?>",
          data: $(this).serialize(),
          success: function(data) {
           if (data == 1) {
             $('#editresponsive-modal').modal('hide');
             $(':input[type="submit"]').prop('disabled', false);            
             dataTable.ajax.reload(); 
             swal({
              title: "Success",
              text: "Addons Update Successfully",
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

function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>

<!-- End -->