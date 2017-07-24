<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry Citra Sukapura Megah</title>
    <link rel="shortcut icon" href="<?php echo base_url()."img/logo-laundry-CSM.png"?>" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font-awesome-4.1.0/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  </head>
<body>

<div class="container">

	<img  class="tengah" src="img/logo-laundry-CSM.png"/>

	<center>

		<?php 
			echo validation_errors('<div class="notice error">', '</div>'); 
			if($this->session->flashdata('msg')!=""){
				echo "<div class='alert alert-error'>".$this->session->flashdata('msg')."</div>";  				
			}
		?>
	
		<button class="btn btn-lg btn-primary btn-block1 btn-danger1" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-sign-in fa-fw"></i> Login</button>
		<p  class="tes" style="font-size:11px;">copyright &copy; 2015 - IT solution CSM</p>
	
	</center>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

        <div class="modal-header">
        <img  width="270px" height="195px" src="img/logo-laundry-CSM.png"/>
        </div>
        <div class="modal-body">

        <form id="login-form" action="<?php echo base_url() ?>login/process_login" method="POST">
        <form class="form-signin">
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Ingat saya
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block"  value="Login" type="submit">Masuk</button>
      	</form>

			</div> 

	<!-- /container -->


		 </div>
      </div>
    </div>
  </div>
</div>

  </body>
</html>