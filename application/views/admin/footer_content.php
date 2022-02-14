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
            <img src="https://www.wrraptheme.com/templates/lucid/hr/html/assets/images/logo-icon.svg" width="48" height="48" alt="Lucid">
        </div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

        <?php include('include/Header.php');  ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       <?php if(!empty($this->session->flashdata('update_message'))){  ?>
           <script>
            swal({
                   title: "Success!",
                   text: "Data Updated Successfully.",
                   icon: "success",
                   timer: 3000
                   });
                   
           </script>
       <?php } ?>
        <?php if(!empty($this->session->flashdata('failed_update_message'))){  ?>
           <script>
            swal({
                   title: "Failed!",
                   text: "Somthing Went Wrong.",
                   icon: "failed",
                   timer: 3000
                   });
                   
           </script>
       <?php } ?>
        <?php if(!empty($this->session->flashdata('delete_message'))){  ?>
           <script>
            swal({
                   title: "Success!",
                   text: "Data Deleted Successfully.",
                   icon: "success",
                   timer: 3000
                   });
                   
           </script>
       <?php } ?>
        <?php if(!empty($this->session->flashdata('add_message'))){  ?>
           <script>
            swal({
                   title: "Success!",
                   text: "Data Added Successfully.",
                   icon: "success",
                   timer: 3000
                   });
                   
           </script>
       <?php } ?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Footer Content</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Footer Content</li>
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
                           
                             <h3 style="color: red">Section 1</h3>
                          <form id="header-form" action="<?= base_url().'Adminpanel/Content/editfooter_contentsec1' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-6 form-group">
                                <label>Contact</label>
                                <input type="text" name="conatct" class="form-control" required="required" value="<?= $footer_content['contact'] ?>" >
                              </div>
                               <div class="col-sm-6 form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" required="required"  value="<?= $footer_content['email'] ?>">
                              </div>
                               <div class="col-sm-12 form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required="required" value="<?= $footer_content['address'] ?>" >
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                          </form><br><br><br>
                           <h3 style="color: red">Section  Heading</h3>
                         
                            <div class="row">
                              <div class="col-sm-12 ">
                                <div class="row">
                                  <div class="col-sm-12">
                                 <form id="header-form" action="<?= base_url().'Adminpanel/Content/editfooter_heading1' ?>" method="post" enctype= multipart/form-data>
                                <div class=" form-group">
                                  <label>Section 2 Heading</label>
                                  <input type="text" name="head1" class="form-control" required="required" value="<?= $footer_content_heading[0]['heading'] ?>">
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                          </div>
                          <div class="col-sm-12">
                             <form id="header-form" action="<?= base_url().'Adminpanel/Content/editfooter_heading2' ?>" method="post" enctype= multipart/form-data>
                              <div class=" form-group">
                                <label>Section 3 Heading</label>
                                <input type="text" name="head2" class="form-control" required="required" value="<?= $footer_content_heading[1]['heading'] ?>">
                              </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                              </form>
                            </div>
                            </div>
                           <h3 style="color: red">Section Links</h3>
                          <form id="header-form" action="<?= base_url().'Adminpanel/Content/addfooter_link' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Heading</label>
                                <?php $footer_heading=$this->User_model->get_all_where('*','footer_content_heading',array('id!='=>0),'',''); ?>
                                <select class="form-control" name="head_id" required="required">
                                    <option value="">Select Heading</option>
                                    <option value="<?= $footer_heading[0]['id'] ?>"><?= $footer_heading[0]['heading'] ?></option>
                                    <option value="<?= $footer_heading[1]['id'] ?>"><?= $footer_heading[1]['heading'] ?></option>
                                </select>
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required="required">
                              </div>
                               <div class="col-sm-4 form-group">
                                <label>Links</label>
                                <input type="text" name="link" class="form-control" required="required">
                              </div>
                             
                            </div>
                            <button class="btn btn-primary" type="submit">Add</button>
                          </form><br><br><br>
                          <h3 style="color: red">Links List</h3>
                          <div class="table-responsive">
                                <table class=" datatable-butt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                      <th>Heading</th>
                                       <th>Title</th>
                                       <th>Links</th>
                                       <th>Action</th>
                                    </thead>
                                    <tbody>
                                      <?php if(!empty($footer_links)){foreach($footer_links as $val){ ?>
                                        <tr>
                                          <?php $footer_links_head=$this->User_model->get_single_where('*','footer_content_heading',array('id'=>$val['head_id']),'',''); ?>
                                          <td><?= $footer_links_head['heading']; ?></td>
                                          <td><?= $val['title'] ?></td>
                                          <td><?= $val['link'] ?></td>
                                          
                                          <td>
                                          <a class="btn btn-danger" href="<?= base_url().'Adminpanel/Content/Delete_footer_link?id='.$val['id'] ?>"><i class="fas fa-trash"></i></a>

                                          <a class="btn btn-primary edit-footer-link" href="javascript:void(0)" id="<?= $val['id'] ?>" heading="<?= $val['head_id'] ?>" title1="<?= $val['title'] ?>" link="<?= $val['link'] ?>" data-toggle="tooltip" data-placement=""><i class="fas fa-edit"></i></a>
                                          </td>
                                        </tr>
                                       <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <br><br><br>
                            
                            <h3 style="color: red">Section 3</h3>
                          <form id="header-form" action="<?= base_url().'Adminpanel/Content/addfooter_sec3_app' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Title 1</label>
                                <input type="text" name="title1" class="form-control" required="required"  >
                              </div>
                               <div class="col-sm-4 form-group">
                                <label>Title 2</label>
                                <input type="text" name="title2" class="form-control" required="required" >
                              </div>
                               <div class="col-sm-4 form-group">
                                <label>Icon</label>
                                <input type="text" name="icon" class="form-control" required="required"  >
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>URL</label>
                                <input type="text" name="url" class="form-control" required="required"  >
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Add</button>
                          </form><br><br><br>
                          <h3 style="color: red">Section 3 List</h3>
                          <div class="table-responsive">
                                <table class=" datatable-butt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                       <th>Title 1</th>
                                       <th>Title 2</th>
                                       <th>Icon</th>
                                       <th>URL</th>
                                       <th>Action</th>
                                    </thead>
                                    <tbody>
                                      <?php if(!empty($footer_sec3_app)){foreach($footer_sec3_app as $val){ ?>
                                        <tr>
                                          <td><?= $val['title1'] ?></td>
                                          <td><?= $val['title2']; ?></td>
                                          <td><?= $val['icon'] ?></td>
                                          <td><?= $val['url'] ?></td>
                                          <td><a class="btn btn-danger" href="<?= base_url().'Adminpanel/Content/Delete_footer_sec3_app?id='.$val['id'] ?>"><i class="fas fa-trash"></i></td>
                                        </tr>
                                       <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <br><br><br>
                            <h3 style="color: red">Section 4</h3>
                          <form id="header-form" action="<?= base_url().'Adminpanel/Content/addfooter_sec4_icons' ?>" method="post" enctype= multipart/form-data>
                            <div class="row">
                              <div class="col-sm-6 form-group">
                                <label>Social Media Link</label>
                                <input type="text" name="icon" class="form-control" required="required"  >
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>URL</label>
                                <input type="text" name="url" class="form-control" required="required"  >
                              </div>
                             </div>
                            <button class="btn btn-primary" type="submit">Add</button>
                          </form><br><br><br>
                          <h3 style="color: red">Section 4 List</h3>
                          <div class="table-responsive">
                                <table class=" datatable-butt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                       <th>Icon</th>
                                       <th>URL</th>
                                       <th>Action</th>
                                    </thead>
                                    <tbody>
                                      <?php if(!empty($footer_sec4_icons)){foreach($footer_sec4_icons as $val){ ?>
                                        <tr>
                                          <td><?= $val['icon'] ?></td>
                                           <td><?= $val['url'] ?></td>
                                          <td><a class="btn btn-danger" href="<?= base_url().'Adminpanel/Content/Delete_footer_sec4_icons?id='.$val['id'] ?>"><i class="fas fa-trash"></i></td>
                                        </tr>
                                       <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <br><br><br>
                            <br><br><br>
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
                <h6 class="title" id="defaultModalLabel">Edit footer content</h6>
            </div>
            <div class="modal-body">
                <form class="form-group" id="addform"  method="post" enctype="multipart/form-data" action="<?= base_url().'Adminpanel/Content/updateFooterLinks1' ?>">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                        <label>Heading</label>
                          <?php $footer_heading=$this->User_model->get_all_where('*','footer_content_heading',array('id!='=>0),'',''); ?>
                          <select class="form-control" name="head_id" id="head_id12" required="required">
                              <option value="">Select Heading</option>
                              <option value="<?= $footer_heading[0]['id'] ?>"><?= $footer_heading[0]['heading'] ?></option>
                              <option value="<?= $footer_heading[1]['id'] ?>"><?= $footer_heading[1]['heading'] ?></option>
                          </select>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label> Title </label>
                            <input type="text" class="form-control" name="title" id="title12" placeholder="Enter Title " autocomplete="off" required="required" >
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                         <label>Link</label>
                            <input type="text" class="form-control" name="link" id="link12" required="required">
                            <input type="hidden" class="form-control" name="footerId" id="footerId">
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
     function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    $(document).on('click','.edit-footer-link',function(){
      let heading = $(this).attr('heading');
      let title = $(this).attr('title1');
      let link = $(this).attr('link');
      let id = $(this).attr('id');
      $('#head_id12').val(heading);
      $('#title12').val(title);
      $('#link12').val(link);
      $('#footerId').val(id);
      $('#addmodal').modal('show');
    })
</script>
</body>

</html>