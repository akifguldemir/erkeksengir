<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Gezi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?=base_url()?>assets/haberdetay/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	  
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
  <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
    <script>
  function validateForm() {
    var payMetin = document.forms["myForm"]["baslik"].value;
    
 

    if (payMetin == "") {
        alert("Başlık Boş Olamaz !");
        return false;
    }
 
}
</script>
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
									
										
												<?php			  
											if($this->session->userdata('logged_in'))
												{
											  ?>
												  
													<h4><button class="button special small"  data-toggle="modal" data-target="#myModal">Yeni Konu Ekle</button></h4>
									
											<?php				  
												}
												else
												{
											  ?>
													<button class="button special fit" onclick="document.getElementById('id01').style.display='block'" >BAŞLIK EKLEMEK İÇİN LÜTFEN GİRİŞ YAPINIZ.</button>
													<div class="w3-container">
													  <div id="id01" class="w3-modal">
														<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

														  <div class="w3-center"><br>
															<span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
															<img src="<?=base_url()?>uploads/standartpic.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
														  </div>

					
														  <form class="w3-container" action="<?=base_url()?>login/login_ol" method="post">
															<div class="w3-section">
															  <label><b>E-mail</b></label>
															  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="E-mail" name="email" required>
															  <label><b>Şifre</b></label>
															  <input class="w3-input w3-border" type="password" placeholder="Şifre" name="password" required><br>
															  <button class="button special fit" type="submit">Giriş Yap</button>
															  
															</div>
														  </form>

														  <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
															
															<span class="w3-right w3-padding w3-hide-small">Şifremi <a href="#">unuttum?</a></span>
														  </div>

														</div>
													  </div>
													</div>
											  <?php
												}
												?>
				
									<!-- Modal -->
										<div id="myModal" class="modal fade" role="dialog">
										  <div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
											  
											  <div class="modal-body">
												<form onsubmit="return validateForm()" id="myForm" action="<?=base_url()?>forum/gezibaslikac" method="post" enctype="multipart/form-data">
												<h3>Konu Başlığı</h3>
													<input type="text" name="baslik" id="demo-name"  placeholder="Başlık" /><br>
																								
											  </div>
											  <div class="modal-footer">
											  <input type="submit" class='button special small' value="Ekle" name="submit" >
												<button type="button" class="button special small" data-dismiss="modal">Kapat</button>
												</form>
											  </div>
											</div>

										  </div>
										</div>
									
									
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
								

							<?php if ($this->session->flashdata("sonuc"))
							{?>
							<div class="alert alert-success alert-dismissable">
							    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
							    <strong></strong> <?=$this->session->flashdata("sonuc")?>
						 	</div>
						 	<?php } ?>


							<!-- Section -->
								<div class="row mt">
									<div class="col-lg-12">
									  <div class="col-md-12">
								 <div class="col-lg-12">
									  <div class="content-panel">
									 <hr></hr>
										  <div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>Konu/Başlatan</th>
														<th>Yanıt</th>
														<th>Oluşturulma Tarihi</th>
													</tr>
												</thead>
												<tbody>
												
												<?php
													foreach($gezibaslik as $rs)
													{
												?>

												 <?php

												          $this->db->select('*');
												          $this->db->from('fgeziyorum');
												          $this->db->where('konuId',$rs->Id );
												          $countForum=$this->db->count_all_results();          


										         ?>
												
													<tr>
														<td><a href="<?=base_url()?>forum/gezidetay/<?=$rs->Id?>"><?=$rs->baslik?></a><br><font size="1">Başlatan&nbsp;:&nbsp;
														
														
													<?php 
															if($this->session->userdata('logged_in'))
															{ ?>
														
														
																<?php
																
																	if(!(($this->session->logged_in->Id)==($rs->acanuyeId)))
																	{
																?>
																
																		<a href="<?=base_url()?>profil/ybnprofil/<?=$rs->acanuyeId?>"><b><?=$rs->acanuyeadsoy?></b></a>
																	
																	<?php
																	}else
																	{
																	?>
																	
																		<a href="<?=base_url()?>profil"><b><?=$rs->acanuyeadsoy?></b></a>
																	
																	
																	<?php
																	}
																	?>
															<?php
															}else{
																?>
																
																	<b><?=$rs->acanuyeadsoy?></b>
																
																
															<?php } ?>
													
														
																&nbsp;</font></td>
																<td><center><?php echo $countForum?><br>yanıt</center></td>
																<td><center><?=$rs->tarih?> de açıldı.

																<?php 
																if($this->session->logged_in) {
																	if($this->session->logged_in->Id==$rs->acanuyeId) { ?>
																	<a  href="<?=base_url()?>forum/gezibasliksil/<?=$rs->Id?>" onclick="return confirm('Silmek İstediğinizden Eminmisiniz?');">
																	<i  class="glyphicon glyphicon-trash"></i></a>
																<?php } } ?>

															


														<br><font size="1"></font></center></td>
													</tr>



												<?php
													}
												?>
											
											
											
												</tbody>
												<tfoot>
													
												</tfoot>
											</table>
										</div>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
	                  </div><!-- /col-md-12 -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->

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
								<li><a data-toggle="modal" data-target="#modalİletişim" href="#">İletişim</a></li>	
											
											
											
											
											<div class="container">
											
											  <!-- Modal -->
											  <div class="modal fade" id="modalİletişim" role="dialog">
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
									<iframe src="http://www.internethaber.com/son-dakika/service_4" width="270" height="337" frameborder="0" scrolling="no"></iframe>

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
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
	</body>
</html>