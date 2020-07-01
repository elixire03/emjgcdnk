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

<?php elseif($this->uri->segment(1)=='dashboard'):?><title>EMJGC | Dashboard </title>
<?php elseif($this->uri->segment(1)=='phase'):?><title>EMJGC | Phase of Work</title>
<?php elseif($this->uri->segment(1)=='employees'):?><title>EMJGC | Employees</title>
<?php elseif($this->uri->segment(1)=='other_expences'):?><title>EMJGC | Other Expenses</title>
<?php elseif($this->uri->segment(1)=='man_power'):?><title>EMJGC | Man Power Expenses</title>
<?php elseif($this->uri->segment(1)=='retention'):?><title>EMJGC | Retention</title>
<?php elseif($this->uri->segment(1)=='collection'):?><title>EMJGC | Collection</title>
<?php elseif($this->uri->segment(1)=='reports'):?><title>EMJGC | Reports</title>
<?php elseif($this->uri->segment(1)=='uploads'):?><title>EMJGC | Import OE</title>
<?php elseif($this->uri->segment(1)=='uploads2'):?><title>EMJGC | Import MPE</title>
<?php elseif($this->uri->segment(1)=='sites'):?><title>EMJGC | Projects</title>

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
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/plugins/select2/select2.css')?>"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/plugins/bootstrap-toastr/toastr.min.css')?>"/>


<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')?>"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url('/assets/css/style.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/plugins.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/custom.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/style-conquer.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/style2.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/style-responsive.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/plugins.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('/assets/css/pages/tasks.css')?>" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url('/assets/others/jquery.min.js')?>"></script>
<script src="<?php echo base_url('/assets/others/bootstrap.min.js')?>"></script>

<?php if($this->session->userdata('role_id')==1):?>
<link href="<?php echo base_url('/assets/css/themes/blue.css')?>" rel="stylesheet" type="text/css" id="style_color"/>
<?php elseif($this->session->userdata('role_id')==2):?>
<link href="<?php echo base_url('/assets/css/themes/light.css')?>" rel="stylesheet" type="text/css" id="style_color"/>
<?php elseif($this->session->userdata('role_id')==3):?>
<link href="<?php echo base_url('/assets/css/themes/default.css')?>" rel="stylesheet" type="text/css" id="style_color"/>
<?php endif?>

<link href="<?php echo base_url('/assets/css/pages/pricing-tables.css')?>" rel="stylesheet" type="text/css"/>


<!-- END THEME STYLES -->

<link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico')?>" type="image/vnd.microsoft.icon" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
