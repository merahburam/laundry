<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."css/bootstrap.min.css"?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."css/bootstrap.css"?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."css/screen.css"?>" media="all" />
	<link rel="shortcut icon" href="<?php echo base_url()."img/logo-laundry-CSM.png"?>" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font-awesome-4.1.0/css/font-awesome.min.css">
	<script src="<?php echo base_url()."js/jquery-1.11.1.min.js"?>"></script>
    <script src="<?php echo base_url()."js/bootstrap.min.js"?>"></script>
 </head>

 <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home"><img alt="CSM" src="<?php echo base_url()."img/csm-logo.png"?>" height="45" width="80"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?=base_url()?>admin/home"><i class="fa fa-home fa-fw"></i> Home <span class="sr-only">(current)</span></a></li>
        <li ><a href="<?=base_url()?>admin/home"><i class="fa fa-male fa-fw"></i> Pelanggan <span class="sr-only">(current)</span></a></li>
        <li ><a href="<?=base_url()?>admin/home"><i class="fa fa-book fa-fw"></i> Laporan <span class="sr-only">(current)</span></a></li>
     
        </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">

  			  <a class="navbar-brand" ><i class="fa fa-user fa-fw"></i> Admin,  
			  	<?php echo $this->session->userdata('username'); ?>
  			  </a>
  			  
      		  <li class="active"><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i>Log Out <span class="sr-only">(current)</span></a></li>      
      		  	
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>