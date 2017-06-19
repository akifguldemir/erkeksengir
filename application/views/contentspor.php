<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Spor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?=base_url()?>assets/haberdetay/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
  <script type="text/javascript">
  	$(function(){
  		bildirimgeldi();
  		mesajbildirim();


 function bildirimgeldi(){
      setInterval(function(){
      $.ajax({
        type: 'ajax',
        url: '<?=base_url()?>profil/bildirimgeldi',
        async: false,
        dataType: 'json',
        success: function(data){
          var html= ' ';
          var i ;
          for(i=0; i<data.length; i++)
          {
            if(data[i].kimId != <?=$this->session->logged_in->Id?>)
            {
              html='<a href="<?=base_url()?>profil/bildirimler" class="icon"><img class="bilboy" src="<?=base_url()?>uploads/gelbil.gif"></a>'; 
            }
              
         
          }
          $('#shownotif').html(html);

        },
       
      });
      }, 1000); 
    }

  function mesajbildirim(){
      setInterval(function(){
      $.ajax({
        type: 'ajax',
        url: '<?=base_url()?>profil/mesajbildirim',
        async: false,
        dataType: 'json',
        success: function(data){
          var html= ' ';
          var i ;
          for(i=0; i<data.length; i++)
          {
            
              html='<a href="<?=base_url()?>profil/mesajlar"><img class="mesboy" src="<?=base_url()?>uploads/message1.gif" ></a>'; 
              
         
          }
          $('#showMessage').html(html);

        },
       
      });
      }, 1000); 
    }

  	});
  </script>
  <style type="text/css">
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
								<section>
									<header class="major">
										<h2>Spor</h2>
									</header>
									<div class="posts">
									
										<article>
											<font size="7">Futbol</font>
											<a href="<?=base_url()?>home/futbol"><div style="float: right;"><img src="<?=base_url()?>uploads/football.png"></div></a>
										</article>
										<article>
											<font size="7">Basketbol</font>
											<a href="<?=base_url()?>home/basketbol"><div style="float: right;"><img src="<?=base_url()?>uploads/basketball1.png"></div></a>
										</article>
										<article>
											<font size="7">Voleybol</font>
											<a href="<?=base_url()?>home/voleybol"><div style="float: right;"><img src="<?=base_url()?>uploads/volleyball1.png"></div></a>
										</article>
										<article>
											<font size="7">Fitness</font>
											<a href="<?=base_url()?>home/fitness"><div style="float: right;"><img src="<?=base_url()?>uploads/gym.png"></div></a>
										</article>
										<article>
											<font size="7">Motor</font>
											<a href="<?=base_url()?>home/motor"><div style="float: right;"><img src="<?=base_url()?>uploads/sailboat.png">
											<img src="<?=base_url()?>uploads/f1.png">
											<img src="<?=base_url()?>uploads/motogp.png"></div></a>
										</article>
										<article>
											<font size="7">Diğer</font>
											<a href="<?=base_url()?>home/diger"><div style="float: right;"><img src="<?=base_url()?>uploads/handball.png">
											<img src="<?=base_url()?>uploads/golf.png">
											</div></a>
										</article>
									
									
									</div>
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
												<li><a href="<?=base_url()?>home/oyun">Oyun</a></li>
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
										
											<li><a data-toggle="modal" data-target="#myModal" href="#">İletişim</a></li>	
											
											
											
											
											<div class="container">
											
											  <!-- Modal -->
											  <div class="modal fade" id="myModal" role="dialog">
												<div class="modal-dialog">
												
												  <!-- Modal content-->
												  <div class="modal-content">
													<div class="modal-header">
													  <button type="button" class="close" data-dismiss="modal">&times;</button>
													  <h4 class="modal-title">Bize yazın</h4>
													</div>
													<div class="modal-body">
														
														<form name="myForm"  onsubmit="return validateForm()" action="<?=base_url()?>profil/bizeyazin" method="post">
														
														<?php			  
															if($this->session->userdata('logged_in'))
																{
														 ?>
															<input disabled="readonly" type="text" name="adsoy" id="demo-name"  placeholder="Ad ve Soyad" value="<?=$this->session->logged_in->adsoy?>" /><br>
														
														<?php
																}
																else
																{
														?>
														
															<input type="text" name="adsoy" id="demo-name"  placeholder="Adınız ve Soyadınız" /><br>
														
														
														<?php
																}
														?>
														
														
														<?php			  
															if($this->session->userdata('logged_in'))
																{
														 ?>
														
														
														<input disabled="readonly" type="email" name="email" id="demo-email"  placeholder="E-mail" value="<?=$this->session->logged_in->email?>" /><br>
														
															<?php
																}
																else
																{
															?>
															
															<input type="email" name="email" id="demo-email"  placeholder="E-mail"  /><br>
														
														
														
														
														<?php
																}
														?>
														
														
														
														
														
														<textarea type="text" name="mesaj"   placeholder="Mesajınızı lütfen buraya yazınız.." rows="3" /></textarea><br>
														<input type="submit" class='button special small ' name='next' value='Gönder' />
													</form>	
													
													</div>
													<div class="modal-footer">
													  <button type="button" class='button special small'data-dismiss="modal">Kapat</button>
													</div>
												  </div>
												  
												</div>
											  </div>
											  
											</div>

											
								
									</ul>
								</nav>	
									</ul>
								</nav>

							<!-- Section -->
							<section>
										<img src="<?=base_url()?>uploads/sondakika.png" width="280" height="auto" alt=""  /></a>
									<div class="mini-posts">
									<iframe src="http://siteneekle.fotomac.com.tr/v2/siteneekle/haberler/6" scrolling="no" frameborder="0" width="272" height="308"></iframe>

									</div>
									
								</section>
							<!-- Section -->
							

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