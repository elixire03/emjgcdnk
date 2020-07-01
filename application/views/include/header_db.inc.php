<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>

<?php if($this->uri->segment(1)=='users'):?><title>EMJGC | Users</title>
<?php elseif($this->uri->segment(1)=='dashboard'):?><title>EMJGC | Dashboard</title>
<?php elseif($this->uri->segment(1)=='newly_hired'):?><title>EMJGC | Newly Hired</title>
<?php elseif($this->uri->segment(1)=='existing_employee'):?><title>EMJGC | Existing Employee</title>
<?php elseif($this->uri->segment(1)=='requirements'):?><title>EMJGC | Requirements</title>
<?php elseif($this->uri->segment(1)=='sites'):?><title>EMJGC | Sites</title>
<?php elseif($this->uri->segment(1)=='position'):?><title>EMJGC | Position</title>
<?php endif;?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/plugins/simple-line-icons/simple-line-icons.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/plugins/uniform/css/uniform.default.css')?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo base_url('/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet')?>" type="text/css"/>
<link href="<?php echo base_url('/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/plugins/bootstrap-modal/css/bootstrap-modal.css')?>" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url('/assets/css/style-conquer.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/style2.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/style-responsive.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/plugins.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/pages/tasks.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/themes/default.css')?>" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url('/assets/css/pages/pricing-tables.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/custom.css')?>" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->

<!-- END THEME STYLES -->

<link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico')?>" type="image/vnd.microsoft.icon" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
