<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title><?=$this->session->logged_in->adsoy?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
.btnn {
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #fffaff;
  font-size: 12px;
  background: #404142;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3b3b39;
  background-image: -webkit-linear-gradient(top, #3b3b39, #5c5c59);
  background-image: -moz-linear-gradient(top, #3b3b39, #5c5c59);
  background-image: -ms-linear-gradient(top, #3b3b39, #5c5c59);
  background-image: -o-linear-gradient(top, #3b3b39, #5c5c59);
  background-image: linear-gradient(to bottom, #3b3b39, #5c5c59);
  text-decoration: none;
}
.res {
	float:left;
	width:640px;
	max-width:500px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px; 
	border-radius: 5px; 
}
.resimarka
{
	background:white;
	width:1115px;
	height:500px;
	
}

.css-input { 
 border-color:#cccccc; 
 padding:5px; font-size:16px;
 text-align:left; border-width:2px; 
 border-radius:11px; 
 border-style:groove; 
 width: 600px;
 font-weight:normal;
 font-style:none; 
 font-family:sans-serif;
 box-shadow: 0px 0px 1px 0px rgba(42,42,42,.75);  } 
		 .css-input:focus { outline:none; } 
.btn {
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #fffaff;
  font-size: 12px;
  background: #404142;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  
}

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Fotoğraflar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?=base_url()?>assets/haberdetay/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="<?=base_url()?>home" class="logo"><button class="button special small">Anasayfa</button></a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								

							<!-- Section -->
								<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				
					
					
						<div class="profile-userpic">
							<img src="<?=base_url()?>uploads/<?=$this->session->logged_in->img;?>" class="img-responsive" alt="">
							
							
						</div>
					
					
				
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<p><font color="black"><?=$this->session->logged_in->adsoy;?></font></p>
					</div>
					<div class="profile-usertitle-job">
						<p><font color="black"><?=$this->session->logged_in->meslek;?></font></p>
						<a href="<?=base_url()?>profil/galeriresimekle">Resim ekle</a>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" >Follow</button>
					<button type="button" >Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li >
							<a href="<?=base_url()?>profil">
							<i class="glyphicon glyphicon-home"></i>
										<font color="black">Genel Bakış</font> </a>
						</li>
						<li >
							
							<a href="<?=base_url()?>profil/profilhesapayar">
							<i class="glyphicon glyphicon-user"></i>
							<font color="black">Bilgileri Düzenle</font> </a>
						</li>
						<li class="active">
							<a href="<?=base_url()?>profil/galeri">
							<i class="glyphicon glyphicon-ok"></i>
							<font color="black">Fotoğraflar</font> </a>
						</li>
						<li>
							<a href="<?=base_url()?>login/logout">
							<i class="glyphicon glyphicon-flag"></i>
							<font color="black">Çıkış</font> </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
         <div class="profile-content">
		
		
								
				
				
					<form action="<?=base_url()?>profil/galeriresim_upload" method="post" enctype="multipart/form-data">
						Resmi seçiniz:<br>
						<input type="file" name="dosyaadi"  id="dosyaadi"  > <br>
						
						<input type="submit" class='btn' value="Resmi Yükle" name="submit" >
					</form>




			   
            </div>
		</div>
	</div>
</div>
<center>
<strong><a href="http://j.mp/metronictheme" target="_blank"></a></strong>
</center>
<br>
<br>
<script type="text/javascript">

</script>





		<!-- Scripts -->
			<script src="<?=base_url()?>assets/haberdetay/js/jquery.min.js"></script>
			<script src="<?=base_url()?>assets/haberdetay/js/skel.min.js"></script>
			<script src="<?=base_url()?>assets/haberdetay/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?=base_url()?>assets/haberdetay/js/main.js"></script>
<script language="javascript" src="http://is.sitekodlari.com/yukaricik1.js"></script>
	
</html>