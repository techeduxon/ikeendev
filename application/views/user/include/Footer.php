<!-- <section class="footer-area section-bg-2 padding-top-40px ">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 column-td-half">
                <div class="footer-widget">
                    <a href="index.html">
                        <img src="<?= base_url().'assets/user-assets/' ?>images/Techeduxon.png" alt="footer logo" class="footer__logo">
                    </a>
                    <ul class="list-items footer-address">
                        <li><a href="javascript:void(0);">+91 97700-97010 , 88714-81827</a></li>
                        <li><a href="http://vedanshtechnologies.com/" class="mail">vedanshtechnologies.com</a></li>
                        <li>TF-301, 4rd Floor, Shubham Corporate, Sapna Sangeeta Rd, Bhavarkua, Indore, Madhya Pradesh 452012</li>
                    </ul>
                    
                    <ul class="btn-box mt-4 btn-box-2 d-flex align-items-center">
                        <li>
                            <a href="#" class="theme-btn">
                                <i class="la la-apple"></i>
                                <span class="app-titles">
                                    <span class="app__subtitle">Download on the</span>
                                    <span class="app__title">App Store</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="theme-btn">
                                <i class="la la-android"></i>
                                <span class="app-titles">
                                    <span class="app__subtitle">Get in on</span>
                                    <span class="app__title">Google Play</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 column-td-half">
                <div class="footer-widget aj-footer-widget">
                    <ul class="aj-list-items">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Course List</a></li>
                        <li><a href="#">Course Calender</a></li>
                        <li><a href="#">Edu Blog</a></li>
                    </ul>
                    <ul class="aj-list-items1">
                        <li><a href="#">Become A Trainer</a></li>
                        <li><a href="#">Contact Us </a></li>
                        <li><a href="#">Terms and Conditaions</a></li>
                        <li><a href="#">Return Process</a></li>
                    </ul>
                    <ul class="social-profile">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        
    </div>
</section> -->















<section class="footer-area section-bg-2 padding-top-40px  ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 column-td-half">
                <div class="footer-widget">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url().'assets/user-assets/' ?>images/Techeduxon.png" alt="footer logo" style=" height: 30px;" class="footer__logo">
                    </a>
                    <?php $contact=$this->User_model->get_single_where('*','footer_contact',array('id'=>1),'','');  ?>
                    <ul class="list-items footer-address">
                        <?php $ct = explode(',', $contact['contact']); foreach($ct as $val){?>
                        <li><a href="tel:<?= $val ?>"><?php if(!empty($val)){ ?><?= $val ?><?php } ?></a></li>
                        <?php }  ?>
                        <li><a href="#" class="mail"><?php if(!empty($contact)){ ?><?= $contact['email'] ?><?php } ?></a></li>
                        <li><?php if(!empty($contact)){ ?><?= $contact['address'] ?><?php } ?></li>
                    </ul>
                    <h3 class="widget-title font-size-17 mt-4">We are on</h3>
                    <ul class="social-profile">
                    <?php $footer_sec4_icons=$this->User_model->get_all_where('*','footer_sec4_icons',array('id!='=>0),'','');  ?>
                     <?php if(!empty($footer_sec4_icons)){ ?>
                          <?php foreach ($footer_sec4_icons as $key => $value){ ?>
                        <li><a href="<?=$value['url'] ?>/home?url=<?= current_url()?>"><i class="<?= $value['icon'] ?>"></i></a></li>
                        
                    <?php } } ?>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <?php $heading=$this->User_model->get_all_where('*','footer_content_heading',array('id!='=>0),'','');  ?>
            <?php if(!empty($heading)){ ?>
                <?php foreach ($heading as $key => $value){ ?>
                    <div class="col-lg-3 column-td-half">
                        <div class="footer-widget">
                            <h3 class="widget-title"><?= $value['heading'] ?></h3>
                            <span class="section-divider"></span>
                             <?php $footer_links=$this->User_model->get_all_where('*','footer_links',array('head_id'=>$value['id']),'','');  ?>
                            <ul class="list-items">
                                <?php if(!empty($footer_links)) {?>
                                    <?php foreach ($footer_links as $key => $val) { ?>
                                       <li><a target="_blank" href="<?= $val['link'] ?>"><?= $val['title'] ?></a></li>
                                    <?php } } ?>
                                    
                                
                            </ul>
                        </div><!-- end footer-widget -->
                    </div>
           <?php } } ?>
            
            <div class="col-lg-3 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Download App</h3>
                    <span class="section-divider"></span>
                    <ul class="btn-box">
                        <?php $sec3_app=$this->User_model->get_all_where('*','footer_sec3_app',array('id!='=>0),'','');  ?>
                         <?php if(!empty($sec3_app)){ ?>
                            <?php foreach ($sec3_app as $key => $value){ ?>
                                <li>
                                <!--  value['url']  -->
                                    <a href="javascript:void(0);" class="theme-btn" data-toggle="modal" data-target=".playModal">
                                        <i class="<?= $value['icon'] ?> icon-element"></i>
                                        <span class="app-titles">
                                            <span class="app__subtitle"><?= $value['title1'] ?></span>
                                            <span class="app__title"><?= $value['title2'] ?></span>
                                        </span>
                                    </a>
                                </li>
                            <?php } } ?>
                        <!-- <li>
                            <a href="#" class="theme-btn">
                                <i class="la la-android icon-element"></i>
                                <span class="app-titles">
                                    <span class="app__subtitle">Get in on</span>
                                    <span class="app__title">Google Play</span>
                                </span>
                            </a>
                        </li> -->
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="copyright-content">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <p class="copy__desc">&copy; 2020 ikeenacademy.com All Rights Reserved. by <a href="http://vedanshtechnologies.com/" target="_blank">vedanshtechnologies</a></p>
                </div><!-- end col-lg-9 -->
                
            </div><!-- end row -->
        </div><!-- end copyright-content -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->
<div class="modal playModal" >
  <div class="modal-dialog" style=" height: 100%; padding-top: 12%; ">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h1 class="text-center">Comig Soon...</h1>

        <div class="model-footer footer-widget">
            <span class="section-divider"></span>
                <ul class="btn-box">
                    <li>
                        <a href="javascript:void(0);" class="theme-btn" data-toggle="modal" data-target=".playModal">
                            <i class="la la-android icon-element"></i>
                            <span class="app-titles">
                                <span class="app__subtitle">Get It On</span>
                                <span class="app__title">Play Store</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="theme-btn" data-toggle="modal" data-target=".playModal">
                            <i class="la la-apple icon-element"></i>
                            <span class="app-titles">
                                <span class="app__subtitle">Download On The</span>
                                <span class="app__title">App Store</span>
                            </span>
                        </a>
                    </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
 $modal2 = json_decode($this->User_model->getSelectWhereRow('data','modals',array('id'=>2),'DESC','')->data);
    $modal3 = json_decode($this->User_model->getSelectWhereRow('data','modals',array('id'=>3),'DESC','')->data);
 ?>
<div class="modal" id="Grab" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body">
            <div class="grab-sec">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="box-left">
                           <div class="content">
                            <h4><?= $modal2->title ?></h4>
                                <h6> Offer ending in</h6>
                                <div>
                                <ul>
                                    <li> <span id="days1">D </span><span class="days"></span></li>
                                    <li> <span id="hours1">H </span><span class="hours"></span></li>
                                    <li> <span id="minutes1">M </span><span class="minutes"></span></li>
                                    <li> <span id="seconds1">S </span><span class="seconds"></span></li>
                                </ul>
                                </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="right-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            <h4  class="conten-right">
                            <i class="fa fa-gift" aria-hidden="true"></i> <span>Avail offer</span></h4>
                            <form method="post" id="modal-form-2">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="name"  placeholder="e.g.sara@gmail.com*" required="required">
                                </div>
                                <div class="form-group">
                                    <!-- <div class="form-sec"> -->
                                       <!--  <select class="form-control" name="county">
                                            <option value="">IN +91</option>
                                            <option value="">IN +91</option>
                                            <option value="">IN +91</option>
                                            <option value="">IN +91</option>                                       
                                        </select> --> 
                                        <input type="number" class="form-control" name="mobile_number"  placeholder="Mobile Number*" required="required"> 
                                    <!-- </div> -->
                                    <div class="btn-ch">
                                        <button type="submit" class="btn btn-t1" >Avail Offer Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
  </div>
</div>


<div class="modal" id="details_shared" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="grab-sec">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="box-left">
                        <div class="content">
                        <h4><?= $modal3->title ?></h4>
                            <h6> Offer ending in</h6>
                            <div>
                            <ul>
                                <li> <span id="days1">D </span><span class="days"></span></li>
                                    <li> <span id="hours1">H </span><span class="hours"></span></li>
                                    <li> <span id="minutes1">M </span><span class="minutes"></span></li>
                                    <li> <span id="seconds1">S </span><span class="seconds"></span></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="right-form">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                       <p><?= $modal3->title ?></p>
                        <form action="">
                           
                            <div class="form-group">
                                <div class="form-sec">
                                    
                                    <input type="tel" class="form-control new-input" name="code" id="code"  placeholder="OFF01" value="<?= $modal3->code ?>">
                                       
                                        <button type="button" onclick="copyfunction()" class="theme-btn desabal-a" >Copy Code</button>
                                    
                                </div>
                                <div class="btn-ch1">
                                    <a href="javascript:void(0);" >Start Exploring couress  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
     
    </div>
  </div>
</div>
<script src="<?= base_url().'assets/user-assets/' ?>js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/popper.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/bootstrap.min.js"></script>
<script type="text/javascript">
  function timeshow(){
    $.ajax({  
        url:"<?php echo base_url('user/remainingtime'); ?>",  
        success:function(data)  
        {  
            var obj = JSON.parse(data);
            $('.days').html(obj['days']);
            $('.hours').html(obj['hours']);
            $('.minutes').html(obj['minutes']);
            $('.seconds').html(obj['seconds']);
        }  
   }) 
  }
 setInterval(function(){ 
     timeshow();
    }, 1000); 
 $(document).on('keyup', '#myInput', function(e){
   e.preventDefault();  
   var keyword = $(this).val();
   $.ajax({  
        url:"<?php echo base_url('user/fetch_search'); ?>",  
        method:"POST",  
        data:{keyword:keyword},  
        success:function(data)  
        {  
         $('#myUL').html(data);
        }  
   })  
}); 

$(document).on('keyup', '#myInput1', function(e){
   e.preventDefault();  
   var keyword = $(this).val();
   $.ajax({  
        url:"<?php echo base_url('user/fetch_search'); ?>",  
        method:"POST",  
        data:{keyword:keyword},  
        success:function(data)  
        {  
         $('#myUL1').html(data);
        }  
   })  
});    

$(document).on('click', 'body', function(e){
    $('#myUL').html('');
    $('#myUL1').html('');
});

$(document).on('click', '.desabal-a', function(){
    this.disabled = true;

});
</script>

<script>

    $(document).on('change','#CURR_FR',function(){
        var currency = $(this).val();
        window.location.href = '<?= base_url().'User/chamgeCurrency?currency=' ?>'+currency;
    })

   
    $(document).on('submit','#modal-form-2',function(){
        event.preventDefault();
        $.ajax({
            type:'post',
            url:'<?= base_url().'User/savemodalInquiry2' ?>',
            data:$(this).serialize(),
            success:function(data){
                $('#Grab').modal('hide');
                $('#details_shared').modal('show');
            }
        })
    });

    function copyfunction() {
      var copyText = document.getElementById("code");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      alert("Copied the text: " + copyText.value);
    }
</script>