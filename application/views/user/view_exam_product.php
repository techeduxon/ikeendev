<link href="<?=  base_url('assets/admin/css/dataTables.bootstrap4.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
 <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
     dataTable = $('#file_export1').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Adminpanel/fetch_exam_product')?>",
            "type": "POST",
            "data": function ( data ) {
                data.category = $('#category').val();
                data.subcategory = $('#subcategory').val();
            }
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets":[0,4],  //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
    $('#btn-filter').click(function(){ //button filter event click
        dataTable.ajax.reload();  //just reload table
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        dataTable.ajax.reload();  //just reload table
    });

      // var dataTable = $('#file_export1').DataTable({  
      //      "processing":true,  
      //      "serverSide":true,  
      //      "order":[],  
      //      "ajax":{  
      //           url:"<?php echo base_url() . 'Adminpanel/fetch_exam_product'; ?>",  
      //           type:"POST"  
      //      },  
      //      "columnDefs":[  
      //           {  
      //                "targets":[6],  
      //                "orderable":false,  
      //           },  
      //      ],  
      // });  

$(document).on('click', '.delete', function(){ 
        var id = $(this).attr("id");  
                    swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this Product!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                 $.ajax({
            type: "POST",
            url: "<?=base_url('Adminpanel/delete_exam_products')?>",
           data: {id:id},
            success: function(response) {
              if(response == true){
                    swal("success! Your Product  has been deleted!", {
                                  icon: "success",
                                });               
                
              }else
                if(response == false){
                    swal("Failed!  Product Deletion Failed!", {
                                  icon: "error",
                                });               
                
              }
              dataTable.ajax.reload(); 
            }
          });
              
              } 
            });
         
         event.preventDefault();
      });
     
    $(document).on('click', '.update', function(){
    var id = $(this).attr("id"); 
    swal({
  title: "Are you sure?",
  text: "You want to update this Product!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location.href = "<?=base_url().'Adminpanel/edit_exam_products/'?>"+id; //Will take you to Google.

  } 
});
       event.preventDefault();
      });

     $(document).on('click', '.enbdblbtn', function(){
    var id = $(this).attr("id"); 
    var val = $(this).attr("val"); 
    var tbl = $(this).attr("tbl"); 
    swal({
  title: "Are you sure?",
  text: "You want to change Publish status !",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
            type: "POST",
            url: "<?=base_url('Adminpanel/change_publish_status')?>",
           data: {id:id , val : val,tbl : tbl},
            success: function(response) {
              if(response == true){
                    swal("success! Publish status Changed Successfully", {
                                  icon: "success",
                                });               
                
              }else
                if(response == false){
                    swal("Failed!  Publish status Changed Failed!", {
                                  icon: "error",
                                });
              }
              dataTable.ajax.reload(); 
            }
          });
  } 
});
       event.preventDefault();
      });

  $(document).on('click', '.p_detail', function(){
    var id = $(this).attr("id"); 
    $.ajax({
            type: "POST",
                url:"<?php echo base_url() . 'Adminpanel/fetch_examproductbyid'; ?>",  
           data: {id:id},
            success: function(response) {
               var obj = $.parseJSON(response);
              // alert(obj[0]);
              // console.log(obj[1]);
         $( "#groups" ).empty();
         if(obj[1]  != '')
         {
        var tr;
        for (var i = 0; i < obj[1].length; i++) {
            tr = $('<><tr/>');
            tr.append("<td>" + obj[1][i].group_name + "</td>");
            tr.append("<td>" + obj[1][i].group_questions + "</td>");
            $('#groups').append(tr);
        }
       }

                $( ".i_frame" ).empty();
                $( ".description" ).empty();
                $( ".p_image" ).empty();
                $( ".category" ).empty();
                $( ".subcategory" ).empty();
                $( ".product_name" ).empty();
                $( ".product_price" ).empty();
                $( ".validity_days" ).empty();
                $( ".validity_date" ).empty();
                $( ".no_of_attempt" ).empty();
                $( ".at_created" ).empty();
                $( ".at_updated" ).empty();

            var base_url = "<?=base_url().'/upload/examproduct/'?>";
            // var obj = $.parseJSON(response);
            $(".p_image").attr("src",base_url + obj[0]['p_image']);
            $(".description").append('<b>'+obj[0]['description']+'</b>');
             $(".product_price").append('<b>'+obj[0]['price']+'</b>');
            $(".category").append('<b>'+obj[0]['category']+'</b>');
            $(".subcategory").append('<b>'+obj[0]['subcategory']+'</b>');
            $(".product_name").append('<b>'+obj[0]['product_name']+'</b>');
            $(".price").append('<b>'+obj[0]['price']+'</b>');
            $(".validity_days").append('<b>'+obj[0]['validity_days']+' Days </b>');
            $(".validity_date").append('<b>'+obj[0]['validity_date']+'</b>');
            $(".no_of_attempt").append('<b>'+obj[0]['no_of_attempt']+'</b>');
            $(".at_created").append('<b>'+obj[0]['at_created']+'</b>');
            $(".at_updated").append('<b>'+obj[0]['at_updated']+'</b>');
              $('#detail').modal('show');
           //      //   swal("Poof! Your Product  has been deleted!", {
           //      //                   icon: "success",
           //      //                 });               
           //      // dataTable.ajax.reload(); 
            }
          });
       event.preventDefault();
      });
      
      $(document).on('click','.paper-set',function(e){
      e.preventDefault();
      var id = $(this).attr('id');
      swal({
        title: "Are you sure?",
        text: "You want to Create Paper Set !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete)=>{
        if (willDelete) {
          $("#e_id").val(id);
          $("#responsive-modal").modal('show');
        }
      })
     });

    $(document).on('submit','#paper_set_form',function(e){
      e.preventDefault();
      $.ajax({
        type:"POST",
        url:"<?= base_url().'Adminpanel/save_paper_set' ?>",
        data:$("#paper_set_form").serialize(),
        success:function(data){
          if (data == 1) {
            swal("Success!", "Paper Set Crated Successfully!", "success");
            $("#responsive-modal").modal('hide');
          }else{
            swal("Failed!", "Soemthing Went Wrong Plaese Try After Some Time!", "success");
          }
        }
      });
    });

    $(document).on('click','.imprt-excel',function(e){
      e.preventDefault();
      var id = $(this).attr('id');
      $.ajax({
        type:"POST",
        url:"<?= base_url().'Adminpanel/get_exam_detail' ?>",
        data:{id:id},
        success:function(data){
          var obj = JSON.parse(data);
          $("#tbody").html(obj.group_detail);
          $("#exam_papar_set").html(obj.option);
          $("#excel-import-modal").modal('show');
        }
      });
    });

      $(document).on('submit', '#import_form', function(){
        var formData = new FormData(this);
    $.ajax({
      type:'POST',
      url:'<?= base_url().'Adminpanel/import1' ?>',
      data : formData,
      cache: false,
      contentType: false,
      processData: false,
      success:function(data){
        $("#import_form").trigger('reset');
        $("#excel-import-modal").modal('hide');

        if (data == 1) {
          swal("Success!", "Question Uploaded Successfully!", "success");
        }else if (data == 2) {
         swal("Failed!", "Soemthing Went Wrong Plaese Try After Some Time!", "success");
        }
      }
    });
    event.preventDefault();
  });

  });  
 </script>  
 

 <!-- Start stock Modl  -->
    <!-- sample modal content -->
                                <div id="stock" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                     <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Stock</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                 <div class="col-12">
                    <div class="card">
                        <div class="card-body">
<!--                            <h4 class="card-title">Form</h4>-->
<form class="needs-validation"   method="post" id='stock_form'>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Total Stock</label>
                                        <input type="text" class="form-control" id="total_stock" name="total_stock" placeholder="Total Stock" required>
                                    </div>
                                     <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Add Stock</label>
                                        <input type="text" class="form-control" id="add_stock" name="add_stock" placeholder="Enter Number of quantity" required>
                                      
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    
                                </div>
                                <hr>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>

                                <button class="btn btn-primary submitstock" type="submit">Submit</button>
                            </form>
                           
                        </div>
                    </div>
                </div>

                                            </div>
<!--                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.end modal -->
 <!-- end stock modal -->
 
        <!-- sample edit data modal content -->
                                <div id="detail" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                     <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Exam Product Detail</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                           
                                             

             <div class="row">
                   
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <img src="" class='p_image',  height="100%" width="100%" class="img-responsive"> 
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1"></div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                      <h4><b> <center>Exam  Group</center> </b></h4>
                                       <center> <table class="table" cellpaddong=10px cellspacing="10px" id='groups' >

                                        </table></center>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                            <table class="table table-responsive" cellpaddong=-5px id='myTable'>
                                                                 <tbody>
                                                                   <tr>
                                                        <td>Product Name</td>
                                                        <td class="product_name"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="390">category </td>
                                                        <td class="category"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> subcategory   </td>
                                                        <td class="subcategory"> </td>
                                                    </tr>
                                                    
                                                     <tr>
                                                        <td>Product Price</td>
                                                        <td class="product_price"> </td>
                                                    </tr><tr>
                                                        <td>Product validity days</td>
                                                        <td class="validity_days"> </td>
                                                    </tr><tr>
                                                        <td>Product validity Date</td>
                                                        <td class="validity_date"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Attempt</td>
                                                        <td class="no_of_attempt"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>At Created</td>
                                                        <td class="at_created"> </td>
                                                    </tr>  <tr>
                                                        <td>At Updated</td>
                                                        <td class="at_updated"> </td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>

                                               <h4>Description</h4>
<!--                                              <div class="i_frame"></div>
 -->                                             <div class="description"></div>
                                    </div>
                               
                </div>
                    <!-- Column -->


                                            </div>
<!--                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.end edit modal -->


         <!-- sample modal content -->
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Paper Set</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                 <div class="col-12">
                    <div class="card">
                        <div class="card-body">
<!--                            <h4 class="card-title">Form</h4>-->
                          <form id='paper_set_form' name="paper_set_form" enctype="multipart/form-data
                          ">
                                <div class="form-row">
                                    <div class="col-md-4 mb-4">
                                        <label for="validationCustom01">Paper Set Name</label>
                                        <input type="text" class="form-control" id="P_set_name" name="P_set_name" placeholder="Paper Set Name" required>
                                        <input type="hidden" class="form-control" id="e_id" name="e_id" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="release_date">Release Date(yyyy-mm-dd)</label>
                                        <input type="text" class="form-control" id="release_date" name="release_date" placeholder="Release Date(yyyy-mm-dd)" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                
                                </div>
                                <hr>
                              <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                              <button class="btn btn-primary" form="paper_set_form" type="submit">Submit</button>
                        </form>  
                        </div>
                    </div>
                </div>

                                            </div>
<!--                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.end modal -->

                                <div id="excel-import-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                     <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Create Paper Set</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                 <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                          <p>Note :-Whenever You Import Excel Please Use Exam Paper Set Id = <span id="paper_set_id"></span></p>
                          <table class="table">
                            <thead>
                              <th>Group name</th>
                              <th>Group Id</th>
                              <th>No of Questions</th>
                            </thead>
                            <tbody id="tbody">
                              
                            </tbody>
                          </table></br>
                          <form id='import_form' name="import_form" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-4 mb-4">
                                        <label for="validationCustom01">Select Exam Paper Set</label>
                                        <select name="exam_papar_set" id="exam_papar_set" class="form-control"></select>
                                        <input type="hidden" class="form-control" id="e_id" name="e_id" required>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="excel">Select Excel</label>
                                        <input type="file" name="excel" id="excel" required="required" class="form-control" accept=".xls, .xlsx">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                      <label for="language">Select Language</label>
                                      <select class="form-control" name="language" id="language">
                                        <option value="">Select Language</option>
                                        <option value="hindi">Hindi</option>
                                        <option value="english">English</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <a download href="<?= base_url('upload/').'GS-English.xlsx' ?>" >Download Example Excel</a>
                                </div>
                                <hr>
                              <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                              <button class="btn btn-primary" form="import_form" type="submit">Submit</button>
                        </form>  
                        </div>
                    </div>
                </div>

                                            </div>
<!--                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
<div class="page-wrapper">
    <H4>
<?php
if($this->session->flashdata('success'))
{
 ?>
        <hr>
<div class="alert alert-success">
 <strong>Success! </strong>
 <?php
 echo $this->session->flashdata('success');
 ?>   
 </div>
    <?php
}
?>
<?php
if($this->session->flashdata('error'))
{
 ?>
    <hr>
<div class="alert alert-warning">
 <strong>Failed! </strong>
 <?php
 echo $this->session->flashdata('error');
 ?>   
 </div>
    <?php
}
?>
</H4>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Exam Product's List</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">        
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Product's</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            
                <!-- ============================================================== -->
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <div class="row">
                                 <div class="col-md-12">
                                  <h4>Custom Filters: </h4>
                                   <form id="form-filter" class="form-horizontal">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="country" class="container control-label">Category</label>
                                              <select id="category"  name="category" class="form-control">
                                                <option  value="">Category</option>
                                                <?php
                                                foreach ($cate as $key => $value) {
                                                  ?>
                                                <option  value="<?php echo $value['id']?>"><?php echo $value['category']?></option>
                                                  <?php
                                                }
                                                ?>
                                              </select>
                                         
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="country" class="control-label">Sub-category</label>
                                            <select id="subcategory" name="subcategory" class="form-control">
                                                    <option value="">sub category</option>
                                                   </select>
                                         
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="LastName" class="control-label"></label>
                                          <div class="col-sm-12">
                                              <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                                              <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                                          </div>
                                      </div>
                                      </div>
                                    </div>
                                        
                                           
                                      
                                </form> 

                                 </div>                           
                              </div>

<script>
$(document).ready(function(){
 
 $('#category').change(function(){
  var cat_id = $('#category').val();
  //console.log(state_id);
  if(cat_id != '')
  {
   $.ajax({
    url:"<?=site_url().'Adminpanel/fetch_exam_subcategorybycat_id/'?>",
    method:"POST",
    data:{cat_id:cat_id},
    success:function(data)
    {
     $('#subcategory').html(data);
    }
   });
  }
  else
  {
   $('#subcategory').html('<option value=""> subcategory</option>');
  }
 });
 });
</script>   
<div class="col-lg-3 col-md-4" >
    <a href="<?=  base_url('Adminpanel/exam_products')?>">
        <button type="button" id='add_employee'  class=" model_img img-fluid btn waves-effect waves-light btn-block btn-info">Add Exam Product</button>
        </a>
</div>
                                <br>

                                <div class="table-responsive">
                                    <table id="file_export1" class="table table-striped table-bordered display">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                 <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Price</th><!-- Quantity -->
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Published</th>
                                                <!-- <th>Description</th> -->
                                                <!-- <th>Category</th> -->
                                                <th>Action</th>
                                            </tr>
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
            
           <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved ! Designed and Developed by
                <a href="http://vedanshtechnologies.com/">Vedansh Technology</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>



<!--This page plugins -->
<script src="<?=  base_url('assets/admin/js/datatables.min.js')?>"></script>
    <!-- start - This is for export functionality only -->
    <script src="<?=  base_url('assets/admin/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?=  base_url('assets/admin/js/buttons.flash.min.js')?>"></script>
    <script src="<?=  base_url('assets/admin/js/jszip.min.js')?>"></script>
    <script src="<?=  base_url('assets/admin/js/pdfmake.min.js')?>"></script>
    <script src="<?=  base_url('assets/admin/js/vfs_fonts.js')?>"></script>
    <script src="<?=  base_url('assets/admin/js/buttons.html5.min.js')?>"></script>
    <script src="<?=  base_url('assets/admin/js/buttons.print.min.js')?>"></script>
    <script src="<?=  base_url('assets/admin/js/datatable-advanced.init.js')?>"></script>






      <!-- sample stock view modal content -->
                                <div id="stock_view" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                     <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">stock Detail</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                 <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                  <div class="table-responsive">
                                    <table id="table_stock_view" class="table table-striped table-bordered display">
                                        <thead>
                                            <tr>
                                                <th><b>Date</b></th>
                                                <th><b>Last Stock</b></th>
                                                <th><b>Add stock</b></th>
                                                <th><b>Current Total Stock</b></th><!-- Quantity -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>


                                            </div>
<!--                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.end stock view modal -->


   <script type="text/javascript">
       $(document).on('click', '.add_video', function(){
          var id = $( ".add_video" ).attr('id');
          $('#p_id').val(id);
           $('#Add_videos').modal('show');
         
         event.preventDefault();
      });
   </script>


                                <div id="Add_videos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                     <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Videos</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                 <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" id="upload_form"  enctype="multipart/form-data">  
               <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <label for="validationCustom01">Video Title </label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Video Title" required=""> 
                                        <input type="hidden" class="form-control" id="p_id" name="p_id" placeholder="Enter Video Title">
                                    </div>
                                   
                                     <div class="col-md-6 mb-6">
                                        <label for="validationCustom01"> Add PDF</label>
                                        <input type="file" class="form-control"  id="image_file"  name="image_file[]" placeholder="Add Pdf" accept="application/pdf" multiple="multiple" >
                                    </div>
                                </div>
                                <br>
                              <div class="form-row">
                                 <div class="col-md-6 mb-6">
                                        <label for="validationCustom01">Video</label>
                                        <input type="text" class="form-control" id="v_link" name="v_link" placeholder="Enter Video Link" required="required">
                                    </div> 

                                 <div class="col-md-6 mb-6">
                                        <label for="validationCustom01">Video Image</label>
                                        <input type="file" class="form-control" id="v_image" name="v_image[]" placeholder="Enter Video image" required="" accept="image/*" multiple="multiple">
                                    </div> 
                                </div>
                                <br>

                                <div class="form-group">
                                   <div class="col-md-12 mb-12">
                                        <label for="validationCustom01">Video Description </label>
                                        <textarea id="description" style="width: 100%;height:150px" name="description" placeholder="Write Video Description Here !"  required=""></textarea>
                                    </div>
                                    
                                </div>
                <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-info" />  
           </form>  


                           
                        </div>
                    </div>
                </div>

                                            </div>
<!--                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.end modal -->
 <script>  
 $(document).ready(function(){  
      $('#upload_form').on('submit', function(e){  
           e.preventDefault();  
            
                $.ajax({  
                     url:"<?php echo base_url(); ?>Adminpanel/ajax_upload",   
                     //base_url() = http://localhost/tutorial/codeigniter  
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                     // alert(data);
                          if(data == 1)
                          {
                                    $("#upload_form").trigger("reset");
                            $('#title').val('');
                            $('#p_id').val('');
                            $('#image_file').val('');
                            $('#v_image').val('');
                            $('#v_link').val('');
                            $('#description').val('');
                            $('#Add_videos').modal('hide');
                             swal({
                text: "Video Added  Successfully",
                icon: "success",
                buttons: false,
                dangerMode: true,
                 timer: 2000,
              })

                          }
                          else
                            if(data == 0)
                            {
                                swal({
                text: "Failed ",
                icon: "warning",
                buttons: false,
                dangerMode: true,
                 timer: 2000,

              })



                            }
                     }  
                });  
      });  
 });  
 </script> 
 <script type="text/javascript">
   $(document).ready(function(){
    $("#paper_set_form").validate({
      rules:{
        P_set_name:{
          required:true,
        },
        release_date:{
          required:true
        }
      },
      messages:{
        P_set_name:{
          required:'<span style="color:red">Please Enter Paper Set Name</span>',
        },
        release_date:{
          required:'<span style="color:red">Please Release Date Of Paper Set</span>',
        }
      }
    });
   });
 </script>
 <script type="text/javascript">
   $(document).ready(function(){
    $("#import_form").validate({
      rules:{
        exam_papar_set:{
          required:true,
        },
        excel:{
          required:true,
        },
        language:{
          required:true,
        }
      },
      messages:{
        exam_papar_set:{
          required:'<span style="color:red">Select Exam Paper Set</span>',
        },
        excel:{
          required:'<span style="color:red">Select Excel File To Import</span>',
        },
        language:{
          required:'<span style="color:red">Select Language</span>',
        }
      },
    });
   });
 </script>
 <script type="text/javascript">
   $(document).ready(function(){
    $("#exam_papar_set").change(function(){
      var id = $("#exam_papar_set").val();
      // alert(id)
      $("#paper_set_id").html('<b>'+id+'</b>'); 
    });
   });
 </script>