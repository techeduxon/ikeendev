<?php include('include/Head.php');  ?>
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/toastr/toastr.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/color_skins.css">
<style type="text/css">
    .my-error-class {
    color:red;
}
  .my-valid-class {
    color:green;
}

</style>



        <?php include('include/Header.php');  ?>
     

     <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Courses Details</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>                              
                            <li class="breadcrumb-item">Table</li>
                            <li class="breadcrumb-item active">Courses Details</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card client-detail">
                        <div class="body">
                            <!-- <div class="profile-image">
                                <img src="<?= base_url()?>assets/admin/images/user.png" alt="">
                            </div> -->
                            <div class="details">
                                <h4 class="m-t-0 m-b-0"><strong><?= $course['title'] ?></strong></h4>
                                <h4 class="m-t-0 m-b-0"><strong>Price</strong> <small>₹<?= $course['msp'] ?> </small></h4>
                                                            
                                <!-- <div class="m-t-15">
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-success">Message</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card client-detail">
                        <div class="body">
                            <div class="teb-links">
                                <ul>
                                    <li><a href="javascript:void(0);" class="btn btn-outline-info active" ><i class="la la-file-video-o"></i> Courses info </a></li>
                                    <li><a href="<?= base_url().'Batches?id='.$course['id'] ?>" class="btn btn-outline-info " ><i class="la la-file-video-o"></i> Batches</a></li>
                                    <li><a href="<?= base_url().'Self-learning?id='.$course['id'] ?>" class="btn btn-outline-warning" ><i class="la la-bolt"></i> Self Learning</a></li>
                                    <li><a href="<?= base_url().'Live-classes?id='.$course['id']?>" class="btn btn-outline-secondary" ><i class="la la-bookmark"></i> Live Classes </a></li>
                                    <li><a href="<?= base_url().'Assessment?id='.$course['id']?>" class="btn btn-outline-dark" ><i class="la la-graduation-cap"></i> Assessment</a></li>

                                    <!-- <li><a href="<?= base_url().'Adminpanel/Adminpanel/courseTabBar?id='.$_GET['id'] ?>" class="btn btn-outline-dark" ><i class="la la-graduation-cap"></i> Tab Bar</a></li> -->

                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/tabBarDetail?id='.$_GET['id'] ?>" class="btn btn-outline-dark" ><i class="la la-graduation-cap"></i> Course Outline</a></li>

                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/Review?id='.$_GET['id'] ?>" class="btn btn-outline-dark" ><i class="la la-graduation-cap"></i> Review</a></li>
                                    <li><a href="<?= base_url().'Adminpanel/Adminpanel/courseTabBar?id='.$_GET['id'] ?>" class="btn btn-outline-dark" ><i class="la la-graduation-cap"></i> Tab Bar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">   
                        <div class="body">
                         
                          <div class="showonly" style="display: block;" >
                              <form id="readform" name="readform" >
                            <div class="row clearfix ">
                            	<div class="col-md-4 col-sm-12">
	                                 <div class="form-group">
	                                    <label for="category">Category</label>
	                                    <select class="form-control" name="category" id="category" required="required">
	                                       <option value="">Select Category</option>
	                                       <?php if(!empty($cat)){foreach($cat as $val){ ?>
	                                       <option value="<?= $val['id'] ?>" <?php if ($val['id'] == $course['category']): ?> selected  <?php endif ?>><?= $val['category'] ?></option>
	                                       <?php } } ?>
	                                    </select>
	                                 </div>
	                              </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name"> Title</label>                                
                                          <input type="text" class="form-control" id="title" value="<?= $course['title'] ?>" >
                                         
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Full Course MRP</label>                                
                                          <input type="text" class="form-control asbn" id="mrp" attr="asbnm" value="<?= $course['mrp'] ?>" >
                                         
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Full Course MSP</label>                                
                                          <input type="text" class="form-control asbn" id="msp" attr="asbnm" value="<?= $course['msp'] ?>" >
                                         
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Live Classes MRP</label>                                
                                          <input type="text" class="form-control" name="live_mrp" id="live_mrp" placeholder="Enter Live Classes MRP" onkeypress="return isNumber(event)"       autocomplete="off" value="<?= $course['live_mrp'] ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Live Classes MSP</label>                                
                                          <input type="text" class="form-control" name="live_msp" id="live_msp" placeholder="Enter Live Classes MSP" onkeypress="return isNumber(event)"       autocomplete="off" value="<?= $course['live_msp'] ?>">
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Self Learning MRP</label>                                
                                          <input type="text" class="form-control" name="self_mrp" id="self_mrp" placeholder="Enter  Self Learning MRP" onkeypress="return isNumber(event)" autocomplete="off" value="<?= $course['self_mrp'] ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name"> Self Learning MSP</label>                                
                                          <input type="text" class="form-control" name="self_msp" id="self_msp" placeholder="Enter  Self Learning MSP" onkeypress="return isNumber(event)"       autocomplete="off" value="<?= $course['self_msp'] ?>">
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12" style="display: none;">
                                      <div class="form-group">    
                                       <label for="name"> Assessment MRP</label>                                
                                          <input type="text" class="form-control" name="assessment_mrp" id="assessment_mrp" placeholder="Enter Assessment MRP" onkeypress="return isNumber(event)" autocomplete="off" value="<?= $course['assessment_mrp'] ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12" style="display: none;">
                                      <div class="form-group">    
                                       <label for="name">Assessment MSP</label>                                
                                          <input type="text" class="form-control" name="assessment_msp" id="assessment_msp" placeholder="Enter Assessment" onkeypress="return isNumber(event)"       autocomplete="off" value="<?= $course['assessment_msp'] ?>">
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Starting Date</label>                                
                                          <input type="date" class="form-control asbn" id="starting_date" attr="asbnm" value="<?= $course['starting_date'] ?>" >
                                         
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Course Title</label>                                
                                          <input type="text" class="form-control" id="course_title" value="<?= $course['course_title'] ?>" >
                                         
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Course Subtitle 1</label>                                
                                          <input type="text" class="form-control" id="course_subtitle1" value="<?= $course['course_subtitle1'] ?>" >
                                         
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Course Subtitle 2</label>                                
                                          <input type="text" class="form-control" id="course_subtitle2" value="<?= $course['course_subtitle2'] ?>" >
                                         
                                      </div>
                                  </div>
                                 
                                  <div class="col-md-2 col-sm-12">
                                      <div class="form-group">
                                       <label for="date">Curriculum PDF</label>  <br>
                                          <a href="<?= base_url().'uploads/curriculum_pdf/'.$course['curriculum_pdf'] ?> " id="curriculumhref" target="_blank"><?= $course['curriculum_pdf'] ?></a>
                                                                       
                                     </div>
                                  </div>

                                  <div class="col-md-2 col-sm-12">
                                      <div class="form-group">
                                       <label for="date">Course Image</label> 
                                        <img width="50px" height="20px" src="<?= base_url().'uploads/certificate/'.$course['image'] ?>"  >
                                     </div>
                                  </div>

                                   <div class="col-md-4 col-sm-12">
                                      <div class="form-group">
                                       <label for="validity">Course Validity</label>  
                                          <input type="text" class="form-control"  placeholder="Enter Course Validity" required="required" readonly="readonly" value="<?= $course['validity'] ?>">
                                     </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">
                                       <label>Resources Image</label>  <br>
                                       <img width="50px" height="20px" src="<?= base_url().'uploads/certificate/'.$course['resources'] ?>"  >
                                         
                                                                       
                                     </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">
                                       <label>Background Image</label><br>
                                       <img width="50px" height="20px" src="<?= base_url().'uploads/certificate/'.$course['backgroundImage'] ?>"  >
                                         
                                                                       
                                     </div>
                                  </div>


                                   <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Course Highlight</label>                                
                                         <textarea class="form-control" name="course_highlight1" id="course_highlight1" ><?= $course['course_highlight'] ?></textarea>
                                         
                                      </div>
                                  </div>
                                  
                                   <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Section 1</label>                                
                                          <input type="text" class="form-control" id="section1" value="<?= $course['section1'] ?>" >
                                         
                                      </div>
                                  </div>
                                   
                                  
                                  <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Section Description 1</label>                                
                                         <textarea class="form-control" id='section_description1' id="section1desc" ><?= $course['section1desc'] ?></textarea>
                                         
                                      </div>
                                  </div>
                                   <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Section 2</label>                                
                                          <input type="text" class="form-control" id="section2" value="<?= $course['section2'] ?>" >
                                         
                                      </div>
                                  </div>
                                  
                                  <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Section Description 2</label>                                
                                          <textarea class="form-control" id="section2desc" ><?= $course['section2desc'] ?></textarea>
                                         
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Section 3</label>                                
                                          <input type="text" class="form-control" id="section3" value="<?= $course['section3'] ?>" >
                                         
                                      </div>
                                  </div>
                                   <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Section 3 Subtitle</label>                                
                                          <input type="text" class="form-control" id="section3subtitle" value="<?= $course['section3subtitle'] ?>" >
                                         
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">
                                       <label for="date">Certificate Design</label>  
                                          <a href="<?= base_url().'uploads/certificate/'.$course['certificate'] ?> " id="certificatehref" target="_blank">
                                          <img src="<?= base_url().'uploads/certificate/'.$course['certificate'] ?>" id="certificateimg" style="height:60px;width:60px;"></a>
                                         
                                          
                                     </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Section Description 3</label>                                
                                          <textarea class="form-control" id="section3desc"  ><?= $course['section3desc'] ?></textarea>
                                         
                                      </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12">
                                      <div class="form-group"> 
                                
                                    <li style="list-style: none; float: left;" class="pull-right"><a href="javascript:void(0);" class="btn btn-info pull-right editbutton">Edit Course</a></li>
                                  </div>
                                </div>
                                  
                              </div>
                                </form>
                           
                        </div>
                        <div class="editonly" style="display:none;">
                           <form class="form-group" id="editform"    method="post" action="<?= base_url().'update_course' ?>" enctype="multipart/form-data">
                              <div class="row clearfix">
                                  <div class="col-md-4 col-sm-12">
	                                 <div class="form-group">
	                                    <label for="category">Category</label>
	                                    <select class="form-control" name="category" id="category" required="required">
	                                       <option value="">Select Category</option>
	                                       <?php if(!empty($cat)){foreach($cat as $val){ ?>
	                                       <option value="<?= $val['id'] ?>" <?php if ($val['id'] == $course['category']): ?> selected  <?php endif ?>><?= $val['category'] ?></option>
	                                       <?php } } ?>
	                                    </select>
	                                 </div>
	                              </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name"> Title</label>                                
                                          <input type="text" class="form-control" name="title"  value="<?= $course['title'] ?>" >
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Full Course MRP</label>                                
                                          <input type="text" class="form-control" name="mrp"     value="<?= $course['mrp'] ?>" onkeypress="return isNumber(event)">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Full Course MSP</label>                                
                                          <input type="text" class="form-control" name="msp"   value="<?= $course['msp'] ?>" onkeypress="return isNumber(event)">
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Live Classes MRP</label>                                
                                          <input type="text" class="form-control" name="live_mrp" id="live_mrp" placeholder="Enter Live Classes MRP" onkeypress="return isNumber(event)"       autocomplete="off" value="<?= $course['live_mrp'] ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Live Classes MSP</label>                                
                                          <input type="text" class="form-control" name="live_msp" id="live_msp" placeholder="Enter Live Classes MSP" onkeypress="return isNumber(event)"       autocomplete="off" value="<?= $course['live_msp'] ?>">
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name">Self Learning MRP</label>                                
                                          <input type="text" class="form-control" name="self_mrp" id="self_mrp" placeholder="Enter  Self Learning MRP" onkeypress="return isNumber(event)" autocomplete="off" value="<?= $course['self_mrp'] ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                       <label for="name"> Self Learning MSP</label>                                
                                          <input type="text" class="form-control" name="self_msp" id="self_msp" placeholder="Enter  Self Learning MSP" onkeypress="return isNumber(event)"       autocomplete="off" value="<?= $course['self_msp'] ?>">
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12" style="display: none;">
                                      <div class="form-group">    
                                       <label for="name"> Assessment MRP</label>                                
                                          <input type="text" class="form-control" name="assessment_mrp" id="assessment_mrp" placeholder="Enter Assessment MRP" onkeypress="return isNumber(event)" autocomplete="off" value="<?= $course['assessment_mrp'] ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12" style="display: none;">
                                      <div class="form-group">    
                                       <label for="name">Assessment MSP</label>                                
                                          <input type="text" class="form-control" name="assessment_msp" id="assessment_msp" placeholder="Enter Assessment" onkeypress="return isNumber(event)"       autocomplete="off" value="<?= $course['assessment_msp'] ?>">
                                      </div>
                                  </div>
                                  
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Starting Date</label>                                
                                          <input type="date" class="form-control"  name="starting_date"   value="<?= $course['starting_date'] ?>" >
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Course Title</label>                                
                                          <input type="text" class="form-control" name="course_title"  value="<?= $course['course_title'] ?>" >
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Course Subtitle 1</label>                                
                                          <input type="text" class="form-control" name="course_subtitle1"   value="<?= $course['course_subtitle1'] ?>" >
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Course Subtitle 2</label>                                
                                          <input type="text" class="form-control"  name="course_subtitle2"  value="<?= $course['course_subtitle2'] ?>" >
                                      </div>
                                  </div>
                                  
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">
                                       <label for="date">Curriculum PDF</label>  <br>
                                       <input type="file" class="form-control" accept=".pdf" name="curriculum_pdf" >
                                       <input type="hidden" class="form-control" name="old_curriculum_pdf" id="old_curriculum_pdf" value="<?= $course['certificate'] ?>">
                                          <a href="<?= base_url().'uploads/curriculum_pdf/'.$course['curriculum_pdf'] ?> " target="_blank"><?= $course['curriculum_pdf'] ?></a>
                                     </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">
                                       <label for="date">Course Image</label>  
                                          <input type="file" class="form-control" name="myImg" id="myImg" accept="image/*">
                                          <img width="50px" height="20px" src="<?= base_url().'uploads/certificate/'.$course['image'] ?>"  >
                                          
                                     </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">
                                       <label for="validity">Course Validity</label>  
                                          <input type="text" class="form-control"  placeholder="Enter Course Validity" required="required" id="validity" name="validity" value="<?= $course['validity'] ?>">
                                     </div>
                                  </div>

                                  <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                      <label for="resources">Resources Image</label>  
                                      <input type="file" class="form-control" name="resources" id="resources" accept="image/*">
                                      <img width="50px" height="20px" src="<?= base_url().'uploads/certificate/'.$course['resources'] ?>"  >
                                   </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                      <label for="bakckground">Background Image</label>  
                                      <input type="file" class="form-control" name="backgroundImage" id="backgroundImage" accept="image/*">
                                       <img width="50px" height="20px" src="<?= base_url().'uploads/certificate/'.$course['backgroundImage'] ?>"  >
                                   </div>
                                </div>

                                   <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                         <label for="name">Course Highlight</label>                                
                                         <textarea class="form-control" name="course_highlight"  value="<?= $course['course_highlight'] ?>"><?= $course['course_highlight'] ?></textarea>
                                      </div>
                                  </div>
                                  
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section 1</label>                                
                                          <input type="text" class="form-control" name="section1"   value="<?= $course['section1'] ?>" >
                                         
                                      </div>
                                  </div>
                                   
                                   
                                  <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                         <label for="name">Section Description 1</label>                                
                                         <textarea class="form-control"  name="section_description1" value="<?= $course['section1desc'] ?>"><?= $course['section1desc'] ?></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section 2</label>                                
                                          <input type="text" class="form-control" name="section2"   value="<?= $course['section2'] ?>" >
                                      </div>
                                  </div>
                                 
                                  <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section Description 2</label>                                
                                          <textarea class="form-control"  name="section_description2" value="<?= $course['section2desc'] ?>"><?= $course['section2desc'] ?></textarea>
                                      </div>
                                  </div>
                                   <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section 3</label>                                
                                          <input type="text" class="form-control" name="section3"  value="<?= $course['section3'] ?>" >
                                      </div>
                                  </div>
                                   <div class="col-md-4 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section 3 Subtitle</label>                                
                                          <input type="text" class="form-control" name="section3subtitle"  value="<?= $course['section3subtitle'] ?>" >
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12">
                                      <div class="form-group">
                                          <label for="date">Certificate Design</label>  
                                          <input type="file" class="form-control" name="certificate">
                                          <input type="hidden" class="form-control" name="old_certificate" value="<?= $course['certificate'] ?>">
                                          <img src="<?= base_url().'uploads/certificate/'.$course['certificate'] ?>" style="height:60px;width:60px;">
                                     </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12">
                                      <div class="form-group">    
                                          <label for="name">Section Description 3</label>                                
                                          <textarea class="form-control"  name="section_description3" value="<?= $course['section3desc'] ?>" ><?= $course['section3desc'] ?></textarea>
                                      </div>
                                  </div>

                              <div class="col-md-12 col-sm-12">
                                 <div class="form-group">    
                                    <label for="video">Video</label>                                
                                    <textarea class="form-control" id='video' name="video" placeholder="Enter Video"><?= $course['video'] ?></textarea>
                                 </div>
                              </div>
                                 
                              </div>
                              <input type="hidden" name="ca_id" value="<?= $course['id'] ?>">
                              <button type="submit" class="btn btn-primary">Update</button>
                              <a href="javascript:void(0);" type="button" class="btn btn-secondary closeedit" >CLOSE</a>
                          </form>
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
<script src="<?= base_url()?>assets/admin/js/pages/tables/jquery-datatable.js"></script>
<script src="<?= base_url()?>assets/admin/js/pages/ui/dialogs.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/admin/bundles/mainscripts.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'course_highlight1' );
</script>
<script>
    CKEDITOR.replace( 'course_highlight' );
</script>
<script type="text/javascript">
$(document).ready(function (){
      
        $("#editform").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                title: "required",
                mrp: "required",
                msp:"required",
                starting_date:"required",
                course_title:"required",
                course_subtitle1: "required",
                course_subtitle2: "required",
                section1:"required",
                section2:"required",
                section3:"required",
                section3subtitle: "required",
                section_description1:"required",
                section_description2:"required",
                section_description3:"required",
                course_highlight:"required",
            },
            messages: {
                title: "Please Enter Title",
                mrp: "Please Enter MRP",
                msp:"Please Enter MSP",
                starting_date:"Please Select Start Date",
                course_title:"Please Enter Course Title",
                course_subtitle1: "Please Enter Course Sub Title 1",
                course_subtitle2:"Please Enter Course Sub Title 1",
                section1:"Please Enter Section 1",
                section2:"Please Enter Section 2",
                section3:"Please Enter Section 3",
                section3subtitle: "Please Enter Section 3 Subtitle",
                section_description1:"Please Enter Section Descrpition 1",
                section_description2:"Please Enter Section Descrpition 2",
                section_description3:"Please Enter Section Descrpition 3",
                course_highlight:"Please Enter Course Highlight",
               
            }
        });
});
</script>
<script>
   $(document).ready(function(){ 

  $("#readform :input").attr("disabled", true);
});
</script>
<script>
  $(document).ready(function(){ 
       $(document).on('click','.editbutton',function(){ 
          $('.showonly').css('display','none');
          $('.editonly').css('display','block');
       });
       $(document).on('click','.closeedit',function(){ 
          $('.showonly').css('display','block');
          $('.editonly').css('display','none');
       });


  });
</script> 
<script>
  $(document).on('submit', '#editform', function(){
    $(':input[type="submit"]').prop('disabled', true);
     
     $.ajax({
          type: "POST",
          url: "<?=base_url('update_course')?>",
          data:new FormData(this),
          contentType:false,
          processData:false,
          success: function(data) {
           
            if (data == 1) {
            window.location.reload();
              $('.showonly').css('display','block');
              $('.editonly').css('display','none');
               $(':input[type="submit"]').prop('disabled', false);            
                       var id = '<?= $_GET['id'] ?>';

                         $.ajax({
                          type: "POST",
                          url: "<?=base_url('fetch_single_course')?>",
                          data: {id:id},
                          success: function(response) {
                           
                               var obj = $.parseJSON(response);
                                   $("#title").val(obj['title']);
                                   $("#mrp").val(obj['mrp']);
                                   $("#msp").val(obj['msp']);
                                   $("#starting_date").val(obj['starting_date']);
                                   $("#course_title").val(obj['course_title']);
                                   $("#course_subtitle1").val(obj['course_subtitle1']);
                                   $("#course_subtitle2").val(obj['course_subtitle2']);
                                   $("#section1").val(obj['section1']);
                                   $("#section2").val(obj['section2']);
                                   $("#section3").val(obj['section3']);
                                   $("#section3subtitle").val(obj['section3subtitle']);
                                   $("#section_description1").val(obj['section_description1']);
                                   $("#section_description2").val(obj['section_description2']);
                                   $("#section_description3").val(obj['section_description3']);
                                    CKEDITOR.instances['course_highlight'].setData(obj['course_highlight']);
                                    $('#certificateimg').attr('src','<?= base_url().'uploads/certificate/'?>'+obj['certificate']);
                                    $('#certificatehref').attr('href','<?= base_url().'uploads/certificate/'?>'+obj['certificate']);
                                    $('#curriculumhref').attr('href','<?= base_url().'uploads/curriculum_pdf/'?>'+obj['curriculum_pdf']);
                                    $("#readform :input").attr("disabled", true);
                                   

                             }
                           });
                    swal({
                      title: "Success",
                      text: "Data Updated Successfully",
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

$(document).on('click','.hide-nshow-read1',function(){

var ids = $(this).attr('idd');
if($(this).text() === 'Read More'){

$('.'+ ids).addClass('active');
$(this).html('Read Less');
}else{
$('.'+ids).removeClass('active');
$(this).html('Read More');
}


});
</script>
</body>

</html>