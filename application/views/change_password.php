<!doctype html>
<html lang="en">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/page-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jul 2020 04:46:54 GMT -->
<head>
<title>Serving India :: Forgot Password</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin//vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin//vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/main.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/color_skins.css">
</head>

<body class="theme-orange">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="top">
                         <h1><span style="color: #f68c1f">Serving</span> <span style="color: white">India</span></h1>
                        <!-- <img src="http://www.wrraptheme.com/templates/lucid/hr/html/assets/images/logo-white.svg" alt="Lucid"> -->
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead">Recover my password</p>
                          <?php if (!empty($this->session->flashdata('message'))) { ?>
                            <div class="alert alert-danger successMessage">
                              <strong>Error!</strong> <?php echo $this->session->flashdata('message');?>
                            </div>
                        <?php }  ?>
                        </div>
                        <div class="body">
                            <p>Please enter your new password.</p>
                            <form class="form-auth-small" id="form-data" method="post" action="<?= base_url('Adminpanel/Adminpanel/set_new_pass'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="password" name="password" placeholder="password" required="">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Update Password</button>
                                <div class="bottom">
                                    <span class="helper-text">Know your password? <a href="<?= base_url('Login'); ?>">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/page-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jul 2020 04:46:54 GMT -->
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript">

 $(function() {

  $("#form-data").validate({
    rules: {
      email: {
          required: true,
      },

    },
    messages: {
      email: {
        required: "<span><font color='red'>Please Enter Email Address</font></span>",
      },

    }
  });
});
$(document).ready(function(){
    setTimeout(function() {
         $('.successMessage').css('display','none');
    }, 2000);
});
$(document).on('submit','#form-data',function(){

     $(':input[type="submit"]').prop('disabled', true);
})
</script>
