<?php include('include/Head.php') ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">

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
                        <h1><span style="color: #f68c1f">Techeduxon</span> <span style="color: white"></span></h1>
                        <!-- <img src="http://www.wrraptheme.com/templates/lucid/hr/html/assets/images/logo-white.svg" alt="Lucid"> -->
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead">Login to your account</p>
                        <?php if (!empty($this->session->flashdata('message'))) { ?>
                            <div class="alert alert-danger successMessage" >
                              <strong>Error!</strong> <?php echo $this->session->flashdata('message');?>
                            </div>
                        <?php }  ?>
                          <?php if (!empty($this->session->flashdata('message2'))) { ?>
                            <div class="alert alert-success successMessage">
                              <strong>Success!</strong> <?php echo $this->session->flashdata('message2');?>
                            </div>
                        <?php }  ?>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" method="POST" id="form-data" action="<?= base_url('check_login'); ?>">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"  placeholder="Email Address" <?php if(isset($_COOKIE['adUserName'])){ ?> value="<?= $_COOKIE['adUserName'] ?>" <?php } ?> required="">

                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" <?php if(isset($_COOKIE['adPass'])){ ?> value="<?= $_COOKIE['adPass'] ?>" <?php } ?> required="">
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox" name="remeber" value="yes">
                                        <span>Remember me</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="<?= base_url('forgot-password'); ?>">Forgot password?</a></span>
                                    <!-- <span>Don't have an account? <a href="page-register.html">Register</a></span> -->
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

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jul 2020 04:45:31 GMT -->
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript">

 $(function() {

  $("#form-data").validate({
    rules: {
      email: {
          required: true,
					email:true
      },
      password: {
        required: true,
        minlength: 6,
      },
    },
    messages: {
      email: {
        required: "<span><font color='red'>Please Enter Email Address</font></span>",
				email:"<span><font color='red'>Please Enter Valid Email Address</font></span>"
      },
      password: {
        required: "<span><font color='red'>Please Enter Password </font></span>",
        minlength: "<span><font color='red'>Please Enter Valid Password </font></span>",

      },
    }
  });
});
$(document).ready(function(){
    setTimeout(function() {
         $('.successMessage').css('display','none');
    }, 2000);
});

</script>
