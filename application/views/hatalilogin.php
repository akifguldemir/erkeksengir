<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

	<head>
		<title>Erkeksen Gir</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?=base_url()?>assets/haberdetay/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
	function validateForm() {
    var adSoyad = document.forms["myForm"]["adsoy"].value;
    var email = document.forms["myForm"]["email"].value;
    var mesaj = document.forms["myForm"]["mesaj"].value;
  

    if (adSoyad == "") {
        alert("Ad ve Soyad boş bırakılamaz");
        return false;
    }
	if (email == "") {
        alert("E-mail boş bırakılamaz");
        return false;
    }
	if (mesaj == "") {
        alert("Mesaj boş bırakılamaz");
        return false;
    }

}
	</script>
	<style>
			.alert {
			padding: 20px;
			background-color: #f44336;
			color: white;
			opacity: 1;
			transition: opacity 0.6s;
			margin-bottom: 15px;
		}

		.alert.success {background-color: #4CAF50;}
		.alert.info {background-color: #2196F3;}
		.alert.warning {background-color: #ff9800;}

		.closebtn {
			margin-left: 15px;
			color: white;
			font-weight: bold;
			float: right;
			font-size: 22px;
			line-height: 20px;
			cursor: pointer;
			transition: 0.3s;
		}

		.closebtn:hover {
			color: black;
		}
		.bilboy{
			width: 40px;
			height: 40px;
		}
		.mesboy{
			width: 50px;
			height: 37px;
		}
		.sifre:hover
		{

			color:#F56A6A;
			text-decoration:underline;
			cursor:pointer;
		}
		
		</style>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
								<font color="#F56A6A" size="5"><center><img src="<?=base_url()?>uploads/erkeksengir.png"></center></font>
								</header>

								<section>

								<center>
								<div style="background-color:#FFAAAA;width: 800px; ">
								  <div style="width: 300px; padding-top:30px; padding-bottom: 10px;">
									  <form class="w3-container" action="<?=base_url()?>login/login_ol" method="post">
									  <div class="w3-section">
									  <div style="padding-top: 0px;"><img src="<?=base_url()?>uploads/standartpic.png" width="200" height="200"></div><br>
									  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="E-mail" name="email" required><br>
									 
									  <input class="w3-input w3-border" type="password" placeholder="Şifre" name="password" required><br>
									  <?php if ($this->session->flashdata("sonuc"))
											{?>
											
											  <p><?=$this->session->flashdata("sonuc")?></p> 
											  
											
										<?php } ?>
									  <div  class="sifre" data-toggle="modal" data-target="#sifreModal">Şifremi unuttum</div><br>	
									  <button class="button special fit " type="submit">Giriş Yap</button>
									  
									</div>
								  </form>
								 </div>
								 </div>
								 </center>
							<div class="modal fade" id="sifreModal" role="dialog">
							    <div class="modal-dialog">
							      <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h3 class="modal-title">Hesabını Bul</h3>
							        </div>
							        <div class="modal-body">
							        <font size="3">Hesabını aramak için lütfen e-posta adresini gir.</font><br>
								        <form action="<?=base_url()?>profil/sifremiunuttum" method="post">
								          <input type="email" name="email" placeholder="E-mail"><br>							          
								        </div>
								        <div class="modal-footer">
								          <input type="submit" name="Gönder" class="button special small">
								         </form>
							          <button type="button" class="button special small" data-dismiss="modal">Kapat</button>
							        </div>
							      </div>      
							    </div>
							  </div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
			
							
								
							<!-- Section -->
							
							
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="<?=base_url()?>assets/haberdetay/js/jquery.min.js"></script>
			<script src="<?=base_url()?>assets/haberdetay/js/skel.min.js"></script>
			<script src="<?=base_url()?>assets/haberdetay/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?=base_url()?>assets/haberdetay/js/main.js"></script>
<script language="javascript" src="http://is.sitekodlari.com/yukaricik1.js"></script>

	</body>
</html>