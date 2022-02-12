<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ikeendev -Checkout </title>
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
<section class="checkout-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="Contact-detail">
					<h5>Contact Details</h5>
					<div class="contact_details-form">
						<form id="Order-Form" action="<?= base_url().'Place-Order' ?>" method="post">
							<div class="row">
								<div class="col-lg-6">
                                    <div class="input-box">
                                    	<label class="label-text">Select Form Trainee List<span class="primary-color-2 ml-1">*</span></label>
	                                    <div class="form-group aj-form-group1">
	                                        <select class="form-control" id="Trainee" name="Trainee">
	                                            <option value="">Select</option>
	                                        <?php if (!empty($trainer)) { foreach ($trainer as $key => $value) {
	                                        	?>
	                                            <option value="<?= $value['id'] ?>"><?= $value['title']?></option>
	                                        <?php }} ?>    
	                                        </select>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-6">
	                            	<div class="input-box">
                                    	<label class="label-text">Name<span class="primary-color-2 ml-1"></span></label>
	                                    <div class="form-group">
	                                        <input class="form-control" type="text" id="name" name="name" placeholder="Name">
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-6">
	                            	<div class="input-box">
                                    	<label class="label-text">E-mail<span class="primary-color-2 ml-1"></span></label>
	                                    <div class="form-group">
	                                        <input class="form-control" type="email" id="email" name="email" placeholder="E-mail">
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-6">
	                            	<div class="input-box">
                                    	<label class="label-text">Company<span class="primary-color-2 ml-1"></span></label>
	                                    <div class="form-group">
	                                        <input class="form-control" type="text" id="company" name="company" placeholder="Name Company">
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="col-lg-6">
	                            	<div class="input-box">
                                    	<label class="label-text">Mobile Number<span class="primary-color-2 ml-1"></span></label>
		                            	<div class="form-group aj-form-group">

					                        <select class="form-control" id="country" name="country">
					                            <option>IN +91 - India </option>
					                            <option>BH +880 - Bangladesh</option>
					                            <option>AU +61 - Australia</option>
					                            <option>AR +54 - Argentina</option>
					                        </select>
					                    	<input type="text" name="phone_no" id="phone_no" placeholder="Phone Number" class="form-control form-control2" minlength="7" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
					                    </div>
					                </div>
	                            </div>
							</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 line-left">
				<div class="billing-address">
					<h5>Billing Address</h5>
					<div class="billing-address-form">
						
							<div class="row">
								
	                            <div class="col-lg-6">
	                            	<div class="input-box">
                                    	<label class="label-text">Address line 1<span class="primary-color-2 ml-1"></span></label>
	                                    <div class="form-group">
	                                        <input class="form-control" type="text" id="address1" name="address1" placeholder="Address line 1" >
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-6">
	                            	<div class="input-box">
                                    	<label class="label-text">Address line 2<span class="primary-color-2 ml-1"></span></label>
	                                    <div class="form-group">
	                                        <input class="form-control" type="text" id="address2" name="address2" placeholder="Address line 2">
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-6">
	                            	<div class="input-box">
                                    	<label class="label-text">Country<span class="primary-color-2 ml-1"></span></label>
	                                    <div class="form-group">
	                                        <input class="form-control" type="text" name="country" id="country" placeholder="Country">
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="col-lg-6">
	                            	<div class="input-box">
                                    	<label class="label-text">State<span class="primary-color-2 ml-1"></span></label>
	                                    <div class="form-group">
	                                        <input class="form-control" type="text" id="state" name="state" placeholder="State">
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="col-lg-6">
	                            	<div class="input-box">
                                    	<label class="label-text">City<span class="primary-color-2 ml-1"></span></label>
	                                    <div class="form-group">
	                                        <input class="form-control" type="text" id="City" name="City" placeholder="City" value="">
	                                    </div>
	                                </div>
	                            </div>
	                            

	                            
	                            <input type="hidden" name="payment_id" id="payment_id" value="">
	                            <div class="col-lg-6">
	                            	<div class="input-box">
                                    	<label class="label-text">Pin Code<span class="primary-color-2 ml-1"></span></label>
	                                    <div class="form-group">
	                                        <input class="form-control" type="text" id="pin_code" name="pin_code" minlength="6" maxlength="6" placeholder="Pin Code" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-12 text-right">
	                            	<div class="submit-bt">
	                            		<a href="<?= base_url().'Cart'?>">Back</a>
	                            		<button class="theme-btn" type="button" id="final_form_submit">Pay With Razorpay</button>

	                            		<button class="theme-btn" type="button" id="Pay_pal">Pay With PayPal</button>
	                            	</div>
<!-- 
	                            	<div class="submit-bt">
	                            		
	                            	</div> -->
	                            </div>

							</div>
						</form>
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
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#Order-Form').validate({
			rules:{
				Trainee:{
					required:true
				},
				name:{
					required:true
				},
				email:{
					required:true,
					email:true,
				},
				phone_no:{
					required:true,
					number:true,
					minlength:7,
					maxlength:13,
				},
				address1:{
					required:true
				},
				City:{
					required:true
				},
				state:{
					required:true
				},
				country:{
					required:true
				},
				pin_code:{
					required:true
				},
			},
			messages:{
				Trainee:{
					required:'<span style="color:red">Please Select Trainee List</span>',
				},
				name:{
					required:'<span style="color:red">Please Enter Name</span>',
				},
				email:{
					required:'<span style="color:red">Please Enter E-mail Address</span>',
					email:'<span style="color:red">Please Enter Valid E-mail Address</span>',
				},
				phone_no:{
					required:'<span style="color:red">Please Enter Phone Number</span>',
					number:'<span style="color:red">Please Enter Valid Phone Number</span>',
					minlength:'<span style="color:red">Please Enter Valid Phone Number</span>',
					maxlength:'<span style="color:red">Please Enter Valid Phone Number</span>',
				},
				address1:{
					required:'<span style="color:red">Please Enter Address</span>',
				},
				City:{
					required:'<span style="color:red">Please Enter City Name</span>',
				},
				state:{
					required:'<span style="color:red">Please Enter State Name</span>',
				},
				country:{
					required:'<span style="color:red">Please Enter Country Name</span>',
				},
				pin_code:{
					required:'<span style="color:red">Please Enter Pin Code</span>',
					minlength:'<span style="color:red">Please Enter Valid Pin Code</span>',
					maxlength:'<span style="color:red">Please Enter Valid Pin Code</span>',
				},
			}
		})
	})
</script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  var SITEURL = "<?php echo base_url() ?>";
  $(document).on('click', '#final_form_submit', function(e){
  	if($('#Order-Form').valid()){
	    var options = {
	    "key": '<?= RAZ_KEY ?>',
	    "amount": '<?= $price*100 ?>', // 2000 paise = INR 20
        "currency": "<?= $this->session->userdata('country') ?>",
	    "name": "Techeduxon",
	    "description": "Payment",
	    "image": "<?= base_url().'assets/user-assets/images/Techeduxon.png' ?>",
	    "handler": function (response){
	      $('#payment_id').val(response.razorpay_payment_id);
	      $('#Order-Form').submit()
	    },
	 
	    "theme": {
	        "color": "#528FF0"
	    }
	  };
	  var rzp1 = new Razorpay(options);
	  rzp1.open();
	  e.preventDefault();
	}
  });


  $(document).on('click', '#Pay_pal', function(e){
  	if($('#Order-Form').valid()){
  		$.ajax({
  			type:'post',
  			url:'<?= base_url().'User/setCheckOutUserdata' ?>',
  			data:$('#Order-Form').serialize(),
  			success:function(data){
  				window.location.href = '<?= base_url().'User/payPalCheckout' ?>';
  			}
  		})
  	}
  });
 
</script>
</body>
</html>