<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>EMJGC | Budget Monitoring System</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins/simple-line-icons/simple-line-icons.min.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins/uniform/css/uniform.default.css') ?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2/select2.css') ?>"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url('assets/css/style-conquer.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/style2.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/style-responsive.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/plugins.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/themes/default.css') ?>" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url('assets/css/pages/login.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/vnd.microsoft.icon" />
</head>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="/">
	<img src="<?php echo base_url('assets/img/') ?>new_logo.jpg" heigth= "150" width ="150" alt=""/>
	</a>
	<br>
	<font color = "white"><h4><strong><i><h2><b>EMJGC</b></h2> Diseño and Konstruct</i></strong></h4></font>
	
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="" method="post">
        <input type="hidden" name="is_post" value="yes" />
		<h3 class="form-title">Login to your account</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
                <?php
                    if($error_msg) {
                        echo $error_msg;
                    } 
					else 
					{
                	?>
                    Enter any username and password.
                	<?php
                    }
                ?>
            </span>
		</div>
		
		
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input type="hidden" name="task" value="login" />
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" value="<?php if($username) {echo $username;} ?>" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" value="<?php if($password) {echo $password;} ?>" />
			</div>
		</div>
		<div class="form-actions">
			
			<button type="submit" class="btn btn-info pull-right">
			Login </button>
		</div>
		
	</form>
	<!-- END LOGIN FORM -->
	
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2018 &copy; EMJGC - Budget Monitoring System
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo base_url('assets/plugins/jquery-1.11.0.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jquery-migrate-1.2.1.min.js') ?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jquery.blockui.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/uniform/jquery.uniform.min.js') ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url('assets/plugins/jquery-validation/js/jquery.validate.min.js') ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/select2/select2.min.js') ?>"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('assets/scripts/app.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/scripts/login.js') ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
	App.init();
	Login.init();
  /**
  var action = location.hash.substr(1);
          if (action == 'createaccount') {
              $('.register-form').show();
              $('.login-form').hide();
              $('.forget-form').hide();
          } else if (action == 'forgetpassword')  {
              $('.register-form').hide();
              $('.login-form').hide();
              $('.forget-form').show();
          }
  **/
<?php
    if($error_msg) {
        ?>
        $('.alert-danger', $('.login-form')).show();
        <?php
    }
    
?>
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>