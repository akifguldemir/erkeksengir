<style>
body {
    font: 14px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #333;
}
    a {
    color: #333;
    text-decoration: none;
    }

    h1, h2, h3 {
    font-weight: 400;
    }

    h1 {
    font-size: 30px;
    }

    h2 {
    font-size: 24px;
    }

    h3 {
    font-size: 20px;
    }

    img {
      height: auto;
      width: 100%;
    }

    section {
    padding: 30px 60px;
    }

    .friend img {
    height: 70px;
    width: 100px;
    display: block;
    }
	.panel-shadow {
    box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
}
.panel-white {
  border: 1px solid #dddddd;
}
.panel-white  .panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #ddd;
}
.panel-white  .panel-footer {
  background-color: #fff;
  border-color: #ddd;
}

.post .post-heading {
  height: 95px;
  padding: 20px 15px;
}
.post .post-heading .avatar {
  width: 60px;
  height: 60px;
  display: block;
  margin-right: 15px;
}
.post .post-heading .meta .title {
  margin-bottom: 0;
}
.post .post-heading .meta .title a {
  color: black;
}
.post .post-heading .meta .title a:hover {
  color: #aaaaaa;
}
.post .post-heading .meta .time {
  margin-top: 8px;
  color: #999;
}
.post .post-image .image {
  width: 100%;
  height: auto;
}
.post .post-description {
  padding: 15px;
}
.post .post-description p {
  font-size: 14px;
}
.post .post-description .stats {
  margin-top: 20px;
}
.post .post-description .stats .stat-item {
  display: inline-block;
  margin-right: 15px;
}
.post .post-description .stats .stat-item .icon {
  margin-right: 8px;
}
.post .post-footer {
  border-top: 1px solid #ddd;
  padding: 15px;
}
.post .post-footer .input-group-addon a {
  color: #454545;
}
.post .post-footer .comments-list {
  padding: 0;
  margin-top: 20px;
  list-style-type: none;
}
.post .post-footer .comments-list .comment {
  display: block;
  width: 100%;
  margin: 20px 0;
}
.post .post-footer .comments-list .comment .avatar {
  width: 35px;
  height: 35px;
}
.post .post-footer .comments-list .comment .comment-heading {
  display: block;
  width: 100%;
}
.post .post-footer .comments-list .comment .comment-heading .user {
  font-size: 14px;
  font-weight: bold;
  display: inline;
  margin-top: 0;
  margin-right: 10px;
}
.post .post-footer .comments-list .comment .comment-heading .time {
  font-size: 12px;
  color: #aaa;
  margin-top: 0;
  display: inline;
}
.post .post-footer .comments-list .comment .comment-body {
  margin-left: 50px;
}
.post .post-footer .comments-list .comment > .comments-list {
  margin-left: 50px;
}
</style>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Müzik</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?=base_url()?>assets/haberdetay/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="<?=base_url()?>home/haberler" class="logo"><strong></strong>Haberler</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h3><?=$veri[0]->baslik?></h3>
									</header>

									<span class="image main"> <img  src="<?=base_url()?>uploads/<?=$veri[0]->img?>" alt=""" /></span>

									<p><?=$veri[0]->text?></p>
									

								</p>
								

									<section>
									
								
										
										
											<?php
						
												foreach((array)$verianasayfayorum as $rs)
												{
													
										?>
											<?php			  
										  if($this->session->userdata('logged_in'))
												{
											 ?>
													
										
										
										
										
										
							<div class="container">
								<div class="col-sm-8">
									<div class="panel panel-white post panel-shadow">
										<div class="post-heading">
											<div class="pull-left image">
												<img src="<?=base_url()?>uploads/<?=$rs->yapanimg?>" class="img-circle avatar" alt="user profile image">
											</div>
											<div class="pull-left meta">
												<div class="title h5">
													<?php
													if(!(($this->session->logged_in->Id)==($rs->uye_ID)))
													{
												?>
												
														<a href="<?=base_url()?>profil/ybnprofil/<?=$rs->uye_ID?>"><b><?=$rs->uye_adsoy?></b></a>
													
													<?php
													}else
													{
													?>
													
														<a href="<?=base_url()?>profil"><b><?=$rs->uye_adsoy?></b></a>
													
													
													<?php
													}
													?>
													yorumladı.
												</div>
												<h6 class="text-muted time"><?=$rs->tarih?></h6>
											</div>
										</div> 
										<div class="post-description"> 
											<p><?=$rs->yorum?></p>
											<div class="stats">
												<a href="#" class="btn btn-default stat-item">
													<i class="fa fa-thumbs-up icon"></i>2
												</a>
												<a href="#" class="btn btn-default stat-item">
													<i class="fa fa-share icon"></i>12
												</a>
											</div>
										</div>
										<div class="post-footer">
											<div class="input-group"> 
												<input class="form-control" placeholder="Add a comment" type="text">
												<span class="input-group-addon">
													<a href="#"><i class="fa fa-edit"></i></a>  
												</span>
											</div>
											<ul class="comments-list">
												<li class="comment">
													<a class="pull-left" href="#">
														<img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
													</a>
													<div class="comment-body">
														<div class="comment-heading">
															<h4 class="user">Gavino Free</h4>
															<h5 class="time">5 minutes ago</h5>
														</div>
														<p>Sure, oooooooooooooooohhhhhhhhhhhhhhhh</p>
													</div>
													
												</li>
												<li class="comment">
													<a class="pull-left" href="#">
														<img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
													</a>
													<div class="comment-body">
														<div class="comment-heading">
															<h4 class="user">Gavino Free</h4>
															<h5 class="time">5 minutes ago</h5>
														</div>
														<p>Sure, oooooooooooooooohhhhhhhhhhhhhhhh</p>
													</div>
													
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
																	
										
										
										
										<?php
												
												}
											?>
										<?php			  
												}
										 ?>
								
								</section>
						
						
						
						
									<?php			  
										if($this->session->userdata('logged_in'))
										{
									?>
										<h2>Yorum yaz</h2>
											<div id="respond">
											<form action="<?=base_url()?>home/muzikyorumkaydet" method="POST" >
													<input type="hidden" value="<?=$id?>" name="haberId" />
													<p>
													<textarea name="yorum" id="comment" cols="100%" rows="10"></textarea>
													<label for="comment" style="display:none;"><small>Comment (required)</small></label>
													</p>
													<p>
													<input name="submit" type="submit" id="submit" value="Yorum Yap" />
													&nbsp;
													</p>
											</form>
											</div>
											
									<?php
										}
									?>
		
							
							
							
							
									</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
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
								<input type="email" name="email" id="demo-name" value="email" placeholder="Name" />
							</div>
							<div >
								<input type="password" name="password" id="demo-email" value="" placeholder="Şifre" /><br>
								<input type="submit" class='button special ' name='next' value='Giriş' />
								<a href="<?=base_url()?>home/register/ekle" class="button special">Kayıt Ol</a>
							</div>
							
							</div>
							</form>
							</section>
							
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
								

							<!-- Section -->
								

							<!-- Footer -->
								

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