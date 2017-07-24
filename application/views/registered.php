<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <title>Laundry Citra Sukapura Megah</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."css/bootstrap.min.css"?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."css/bootstrap.css"?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."css/landing-page.css"?>" media="all" />
	<link href="img/csm-logo.png" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font-awesome-4.1.0/css/font-awesome.min.css">
	<script src="<?php echo base_url()."js/jquery.js"?>"></script>
    <script src="<?php echo base_url()."js/bootstrap.min.js"?>"></script>
	<style type="text/css">
	/* style untuk link popup */
	a.popup-link {
		padding:17px 0;
		text-align: center;
		margin:10% auto;
		position: relative;
		width: 300px;
		color: #fff;
		text-decoration: none;
		background-color: #FFBA00;
		border-radius: 3px;
		box-shadow: 0 5px 0px 0px #eea900;
		display: block;
	}
	a.popup-link:hover {
		background-color: #ff9900;
		box-shadow: 0 3px 0px 0px #eea900;
		-webkit-transition:all 1s;
		transition:all 1s;
	}
	/* end link popup*/
	/* animasi popup */

	@-webkit-keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	@-moz-keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	@keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	/* end animasi popup */
	/*style untuk popup */	
	#popup {
		background-color: rgba(0,0,0,0.8);
		position: fixed;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		-webkit-animation:autopopup 2s;
		-moz-animation:autopopup 2s;
		animation:autopopup 2s;
	}
	#popup:target {
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
		opacity: 0;
		visibility: hidden;
	}

	@media (min-width: 768px){
		.popup-container {
			width:600px;
		}
	}
	@media (max-width: 767px){
		.popup-container {
			width:100%;
		}
	}
	.popup-container {
		position: relative;
		margin:7% auto;
		padding:30px 50px;
		background-color: #fafafa;
		color:#333;
		border-radius: 3px;
	}

	a.popup-close {
		position: absolute;
		top:3px;
		right:3px;
		background-color: #333;
		padding:7px 10px;
		font-size: 20px;
		text-decoration: none;
		line-height: 1;
		color:#fff;
	}
	/* end style popup */

	/* style untuk isi popup */
	.popup-form {
		margin:10px auto;
	}
		.popup-form h2 {
			margin-bottom: 5px;
			font-size: 37px;
			text-transform: uppercase;
		}
	/* end style isi popup */

	</style>

 </head>

<body>


    <!-- Header -->
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">

                    		<div class="popup-wrapper" id="popup">
								<div class="popup-container">
									<form>
										<img width="110px" height="70px" src="img/logo-laundry-CSM.png"/>
										<h2>Terima kasih</h2>
										<p>Anda sudah terdaftar sebagai member Laundry Citra Sukapura Megah</p>
									</form>
									<a class="popup-close" href="#popup">X</a>
								</div>
							</div>
						
						<img width="400px" height="270px" src="img/logo-laundry-CSM.png"/>
  
						<h3>Hai Selamat Datang Mahasiswa Baru Telkom University</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        <center>
                            <li>
                                <a href="<?=base_url()?>registrasi/form/add" class="btn btn-default btn-lg"><i class="fa fa-pencil fa-fw"></i> <span class="network-name">Registrasi</span></a>
                            </li>
                        </center>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

 
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
    <center>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <ul class="list-inline">
                    <p class="copyright text-muted small">copyright &copy; 2015 - IT Solution CSM</p>
                
                </div>
            </div>
        </div>
        </center>
    </footer>

</body>

</html>
