<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		 <title>Kayıt Ol</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?=base_url()?>assets/haberdetay/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	  
	  
	  <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">

		<style type="text/css">
		.sifre:hover
		{

			color:#F56A6A;
			text-decoration:underline;
			cursor:pointer;
		}
		


  


		</style>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		  	<script>
	function validateForm() {
    var adSoyad = document.forms["myForm"]["adsoy"].value;
    var email = document.forms["myForm"]["email"].value;
    var kullaniciadi = document.forms["myForm"]["kullaniciadi"].value;
    var dogumtarihi = document.forms["myForm"]["dogumtarihi"].value;
    var sifre = document.forms["myForm"]["sifre"].value;
    var tsifre = document.forms["myForm"]["tsifre"].value;

    if (adSoyad == "") {
        alert("Ad ve Soyad boş bırakılamaz.");
        return false;
    }
	if (email == "") {
        alert("E-mail boş bırakılamaz.");
        return false;
    }
	if (kullaniciadi == "") {
        alert("Kullanıcı adı boş bırakılamaz.");
        return false;
    }
    if (dogumtarihi == "") {
        alert("Doğum tarihi boş bırakılamaz.");
        return false;
    }
	
    if (sifre.length < 6) {
        alert("Şifreniz en az 6 karakter olmalıdır.");
        return false;
    }
	if (sifre != tsifre) {
        alert("Şifreler eşleşmedi.");
        return false;
    }

}
	</script>

	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
								<font color="#F56A6A" ><h1>Hesap Aç</h1></font>
								<ul class="icons">
										<div style="float: right;"><li id="shownotif"> </li></div>
										<div style="float: right;"><li id="showMessage"></li></div>
										<!--<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>-->
									</ul>
								</header>

							<!-- Banner -->
								

							<!-- Section -->
								

							<!-- Section -->
							
									<?php if ($this->session->flashdata("sonuc"))
									{?>
									<div class="alert alert-info alert-dismissable fade in">
		                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                                <strong></strong> <?=$this->session->flashdata("sonuc")?>
		                            </div>
									<?php } ?>

									  
		                             <?php if ($this->session->flashdata("sonuchata"))
		                                    {?>
		                                    <div class="alert alert-danger alert-dismissable fade in">
		                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                                <strong></strong> <?=$this->session->flashdata("sonuchata")?>
		                            </div>
		                             <?php } ?>

									<section>
									
								
							
										<form name="myForm" onsubmit="return validateForm()" action="<?=base_url()?>home/kaydet"  method="post">
										<div class="row">
										<div class="col-md-8">
											<input type="text" name="adsoy" id="demo-name"  placeholder="Ad ve Soyad*" /><br>
											<input type="email" name="email" id="demo-email"  placeholder="E-mail*" /><br>
											<input type="text" name="kullaniciadi" id="demo-name"  placeholder="Kullanıcı Adı*" /><br>
											<input type="password" name="sifre" id="demo-name"  placeholder="Şifre*" /><br>
											<input type="password" name="tsifre" id="demo-name"  placeholder="Şifreyi tekrar giriniz ! *" /><br>
											<input type="text" name="dogumtarihi" id="demo-name"  placeholder="Doğum Tarihi     G/A/Y" /><br>
	
											
										</div>
															
										</div><br>
										<input type="submit" class='button special ' name='next' value='Kayıt Ol' />
										</form>
							
									</section>
						
									
		
									

						</div>
					</div>




				
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<img src="<?=base_url()?>uploads/erkeksengir.png" width="270" height="auto">
								</section>

							<!-- Menu -->
							
							
							<?php			  
							  if(!$this->session->userdata('logged_in'))
									{
								 ?>
							
							<section>
							<header class="major">
										<h2>Giriş Yap</h2>
							</header>
							<form action="<?=base_url()?>login/login_ol" method="post">
							<div class="row uniform">
							<div >
								<input type="email" name="email" id="demo-name" value="" placeholder="E-mail" />
							</div>
							<div >
								<input type="password" name="password" id="demo-email" value="" placeholder="Şifre" /><br>
								<div  class="sifre" data-toggle="modal" data-target="#sifreModal">Şifremi unuttum</div><br>		
							
								<input type="submit" class='button special ' name='next' value='Giriş' />
								<a href="<?=base_url()?>home/register/ekle" class="button special">Kayıt Ol</a>
							</div>
							
							</div>
							</form>
							</section>

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
							
							<?php			  
									}
							?>
							
							
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="<?=base_url()?>home">Anasayfa</a></li>																				
										<li>
											<span class="opener">Gündem</span>
											<ul>
												<li><a href="<?=base_url()?>home/haberler">Haberler</a></li>
												<li><a href="<?=base_url()?>home/spor">Spor</a></li>
												<li><a href="<?=base_url()?>home/teknoloji">Teknoloji</a></li>
												<li><a href="<?=base_url()?>home/saglik">Sağlık</a></li>
												<li><a href="<?=base_url()?>home/muzik">Müzik</a></li>
												<li><a href="<?=base_url()?>home/otomobil">Otomobil</a></li>
												<li><a href="<?=base_url()?>home/moda">Moda</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Forum</span>
											<ul>
												<li><a href="<?=base_url()?>forum/gezi">Gezi</a></li>
												<li><a href="<?=base_url()?>forum/spor">Spor</a></li>
												<li><a href="<?=base_url()?>forum/teknoloji">Teknoloji</a></li>
												<li><a href="<?=base_url()?>forum/otomobil">Otomobil</a></li>
												<li><a href="<?=base_url()?>forum/gundem">Gündem</a></li>
												<li><a href="<?=base_url()?>forum/siyaset">Siyaset</a></li>
												<li><a href="<?=base_url()?>forum/dunya">Dünya</a></li>
												<li><a href="<?=base_url()?>forum/ekonomi">Ekonomi</a></li>
												<li><a href="<?=base_url()?>forum/yatirim">Yatırım Siteleri</a></li>
												<li><a href="<?=base_url()?>forum/oyun">Oyun</a></li>
												<li><a href="<?=base_url()?>forum/bahis">Bahis</a></li>
												<li><a href="<?=base_url()?>forum/tv">TV</a></li>
												<li><a href="<?=base_url()?>forum/sinema">Sinema</a></li>
												<li><a href="<?=base_url()?>forum/kitap">Kitap</a></li>
												
											</ul>
										</li>
										
											<?php			  
										  if($this->session->userdata('logged_in'))
												{
											 ?>
													
											
												<li><a href="<?=base_url()?>profil"><?=$this->session->logged_in->adsoy;?></a></li>
										
											
											<?php
												}
											?>
												
									</ul>
								</nav>

							<!-- Section -->
							<section>
										<img src="<?=base_url()?>uploads/sondakika.png" width="280" height="auto" alt=""  /></a>
									<div class="mini-posts">
									<iframe src="http://www.internethaber.com/son-dakika/service_4" width="270" height="337" frameborder="0" scrolling="no"></iframe>

									</div>
									
								</section>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>İletişim</h2>
									</header>
									<p>Akif Güldemir <br>Erkek Sosyal Ağ</p>
									<ul class="contact">
										
										<li class="fa-envelope-o"><a href="mailto:info@website.com">akifguldemir@gmail.com</a></li>
										<li class="fa-phone">(543) 880-8820</li>
										
										<li class="fa-home">Karabük üniversitesi<br />
										Karabük</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy;Tüm hakları ile Akif Güldemir'e aittir. </p>
								</footer>

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