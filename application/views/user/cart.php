<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ikeendev - Cart</title>
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/fancybox.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/tooltipster.bundle.css">
    
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/Header.php'); ?>
<?php include ('include/top_slider.php'); ?>
<section class="cart-form">
    <div class="container">
        <div class="top-strep">
           <div class="left">
             <span></span>
            Cart Summar
           </div>
           <div class="right">
            <a href="javascript:void(0);" onclick="tidioChatApi.open()"><i class="fa fa-comments-o" aria-hidden="true"></i> Chat With Us</a>
           </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="<?= base_url().'Checkout1' ?>" method="post" id="checkout-form" name="checkout-form">
                <?php $total = array(); if(!empty($cart)){ foreach($cart as $val){ ?>
                <div class="cart-sec-top">
                    <div class="flex-d-div">
                        <div class="image">
                            <img src="<?= base_url().'uploads/certificate/'.$val->image ?>">
                        </div>
                        <div class="content">
                            <div class="left">
                                <h5><a href="javascript:void(0);"><?= $val->title ?></a></h5>
                                <h6><p>Training type:</p><span id="access-type"> Live Classes, Self Learning</span></h6>
                                <h6><p>Access Validity:</p> <ul><li><?= $val->validity ?></li><!-- <li>Self Learning: <b>Lifetime</b></li> --></ul></h6>
                                <!-- <h6><p>No. of learners:</p> 1 </h6> -->
                                <h6>
                                <?php  
                                $cr = $this->session->userdata('currency');
                                if (!empty($cr)) {
                                $msp = $val->msp*$cr;
                                }else{
                                $msp = $val->msp;
                                    
                                }
                                $self_msp = (int)$val->self_msp*$cr;
                                 $sm = $this->session->userdata('symbol'); 
                                if (!empty($sm)) {
                                  $amt = $sm;
                                 }else{
                                  $amt = '$'; 
                                 } 
                                ?>
                                    <input type="checkbox" name="purchaseType[]" value="fullCourse" id="fullCourse" purchase="live-class" checked="checked" price="<?=  $msp ?>" >&nbsp;
                                    <label for="fullCourse">Live Class</label>&nbsp;&nbsp;
                                    <input type="checkbox" name="purchaseType[]" value="selfLearning" id="selfLearning" purchase="self-class" price="<?=  $self_msp ?>" checked="checked">&nbsp;
                                    <label for="selfLearning">Self Learning</label>&nbsp;&nbsp;
                                </h6>
                            </div>
                            <div class="right" style="padding-right: 22px;">
                                <h5><p>Price:</p> <?= $amt.' '.$msp ?></h5>
                                <?php $total[] = $msp ?>
                                <h6><a href="javascript:void(0);" class="hi-Details" id="hi-Details">Details <i class="fa fa-chevron-down" aria-hidden="true"></i></a></h6>
                            </div>      
                            <div class="right" style="width: 9%;"><a href="<?= base_url().'User/RemoveCart/'.$val->id ?>">Remove</a></div>                      
                        </div>
                    </div>
                    <div class="hid-content" id="hid-content" style="display: none;">
                        <h5>You Get:</h5>
                        <?= $val->course_highlight ?>
                    </div>
                </div>

            <?php } } ?>
            <?php $gst =number_format((array_sum($total)/100)*18,2);  ?>
            <input type="hidden" name="final-price" id="final-price" value="<?= array_sum($total)+str_replace(',','', $gst) ?>">
        </form>
                <!-- <div class="cart-sec-top">
                    <div class="flex-d-div">
                        <div class="image">
                            <img src="<?= base_url().'assets/user-assets/images/'?>python.png">
                        </div>
                        <div class="content">
                            <div class="left">
                                <h5><a href="javascript:void(0);">Data Science with Python</a></h5>
                                <h6><p>Training type:</p>  Online Classroom Flexi-Pass ( Blended Learning )</h6>
                                <h6><p>Access Validity:</p> <ul><li>Live Online Classes: <b>90 Days</b></li><li>Self Learning: <b>Lifetime</b></li></ul></h6>
                                <h6><p>No. of learners:</p> 1 </h6>
                            </div>
                            <div class="right">
                                <h5><p>Price:</p>$ 22,999.00 </h5>
                                <h6><a href="javascript:void(0);" class="hi-Details" id="hi-Details1">Details <i class="fa fa-chevron-down" aria-hidden="true"></i></a></h6>
                            </div>                            
                        </div>
                    </div>
                    <div class="hid-content" id="hid-content1" style="display: none;">
                        <h5>You Get:</h5>
                        <ul>
                            <li>68 hours of blended learning</li>
                            <li>4 industry-based projects</li>
                            <li>Interactive learning with Jupyter notebooks labs</li>
                            <li>Lifetime access to self-paced learning</li>
                            <li>Dedicated mentoring session from faculty of industry experts</li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-9 hide-col">

            </div>
            <div class="col-lg-3 mt-4">
                <div class="cart-sec-box">
                    <!-- <form action="" method="">
                        <div class="input-box">
                            <div class="form-group">
                                <input class="form-control" type="text" name="coupon_code" placeholder="Coupon code">
                                <button class="theme-btn" type="submit">Apply</button>
                            </div>
                        </div>
                    </form> -->
                    <div class="totel-cart">
                        <h6><p>Total Price: </p> <?= $amt ?> <span id="price-price"><?= array_sum($total) ?></span></h6>
                        <h6><p>IGST (18.00%) : </p> <?= $amt ?> <span id="gst-gst"> <?= $gst; ?> <span></h6>
                        <hr>
                        <h5><p>Grand Total :</p><?= $amt ?> <span id="Grand-total"> <?= array_sum($total)+str_replace(',','', $gst) ?> </span></h5>
                        <hr>
                        <h6>
                            <?php if(!empty($cart)){ ?>
                            <button type="submit" form="checkout-form" class="theme-btn">PROCEED</button>
                            <?php }else{ ?>
                            <a href="javascript:void(0)" disabled class="theme-btn">PROCEED</a>
                            <?php } ?>
                            <!-- <button class="theme-btn">PROCEED</button> -->
                        </h6>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>

</div>
<?php include ('include/Footer.php'); ?>




<!-- template js files -->
<script src="<?= base_url().'assets/user-assets/' ?>js/bootstrap-select.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/magnific-popup.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/isotope.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/waypoint.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/jquery.counterup.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/particles.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/particlesRun2.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/fancybox.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/wow.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/date-time-picker.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/emojionearea.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/smooth-scrolling.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/tooltipster.bundle.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
<script type="text/javascript">
    $(document).on('click','#hi-Details',function(){
        $('#hid-content').slideToggle('show')
      })
    $(document).on('click','#hi-Details1',function(){
        $('#hid-content1').slideToggle('show')
      })

    $(document).on('change','input[name="purchaseType[]"]',function(){
        var price = $(this).attr('price');
        var id = $(this).attr('id');
        // var purchase = $(this).attr('purchase');
        // alert(purchase);
        if($(this).is(':checked') == true){
            if(id == 'fullCourse'){
                $('input[name="purchaseType[]"]').prop('checked',true);
                $(this).prop('checked',true);
            }else{
                $('#fullCourse').prop('checked',false);
            }
        }
        var price = 0;
        if($('#fullCourse').is(':checked') == true){
            price = $('#fullCourse').attr('price');
            $("#access-type").text('Live Classes, Self Learning');
        }else{
            $('input[name="purchaseType[]"]').each(function(){
                if($(this).is(':checked') == true){
                    price += parseFloat($(this).attr('price'));
                }
            });
            $("#access-type").text('Self Learning');
        }
        price = parseFloat(price);
        var gst = ((price/100)*18);
        var price1 = Math.round(price+gst);
        $('#price-price').text(price);
        $('#gst-gst').text(gst);
        $('#Grand-total').text(price1);
        $('#final-price').val(price1);

        if(price == 0){
            $('button').attr('disabled',true);
        }else{
            $('button').attr('disabled',false);
        }
    })

    $(document).on('click','#checkout-checkout',function(){
        if($('input[name="purchaseType[]"]').is(':checked') == true){
            var type = [];
            $('input[name="purchaseType[]"]').each(function(){
                if($(this).is(':checked') == true){
                    type.push($(this).val());;
                }
            });
            window.location.href = '<?= base_url().'Checkout1?id=' ?>'+type;
        }else{
            swal('warning','Please Select Purchase Type','error');
        }
    })
</script>
</html>