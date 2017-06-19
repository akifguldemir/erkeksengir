<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		 <title><?=$fdunya[0]->baslik?></title>
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
    <script>
  function validateForm1() {
    var dosyaadi = document.forms["myForm1"]["dosyaadi"].value;
    
 

    if (dosyaadi == "") {
        alert("Lütfen Resmi Seçiniz !");
        return false;
    }
 
}
</script>
 <script>
  function validateForm() {
    var payMetin = document.forms["myForm"]["yorum"].value;
    
 

    if (payMetin == "") {
        alert("Yorum Boş Olamaz !");
        return false;
    }
 
}
</script>
		<style type="text/css">
		.sifre:hover
		{

			color:#F56A6A;
			text-decoration:underline;
			cursor:pointer;
		}
		.bilboy{
			width: 40px;
			height: 40px;
		}
		.mesboy{
			width: 50px;
			height: 37px;
		}
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
.yorumdiv{
	width: 300px;
}
.bilboy{
	width: 40px;
	height: 40px;
}
.mesboy{
	width: 50px;
	height: 37px;
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
.yorumdiv{
	width: 300px;
	
}
.bilboy{
	width: 40px;
	height: 40px;
}
.mesboy{
	width: 50px;
	height: 37px;
}
#ana_div {

    height: 30px;

    width: 960px;

    margin-right: auto;

    margin-left: auto;

    background-color: #FFF;

}
.div {

    float: left;

    height: 10px;

    width: 100px;

    margin: 10px;

    color: #FFF;

}
.sag
 {
    position: absolute;

    right: 0px;

    width: 90px;

    
 }
 .sag2
 {
    position: absolute;

    right: 0px;

    width: 50px;

    
 }
 .ScrollStyleArk
{
    max-height: 440px;
    overflow-y: scroll;
}
.kk{
  width:350px;
   height:auto;
   
}
		</style>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
      <script type="text/javascript">


$(document).ready(function () {

    // keyup ile inputa herhangi bir değer girilince fonksiyonu tetikliyoruz
    $("#searchTags").keyup(function(){

        // inputa yazılan değeri alıyoruz
        var value = $("#searchTags").val();

        // eğer input içinde değer yoksa yani boşsa tüm menüyü çıkartıyoruz
        if(value.length==0){
        
            $("#menuFull li").show();

        // arama yapılmışsa ilk olarak tüm menüyü gizliyoruz ve girilen değer ile eşleşen kısmı çıkarıyoruz
        }else{

            $("#menuFull li").hide();
            $("#menuFull li:contains("+value+")").show();

        }
              jQuery.expr[':'].contains = function(a, i, m) {
    return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
};

    });

});
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
								
														<br>
							<?php if ($this->session->flashdata("sonuc")) {?>
                  
				                    <div class="alert alert-info alert-dismissable fade in">
				                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                        <strong></strong> <?=$this->session->flashdata("sonuc")?>
				                    </div>
			  				    <?php } ?>
			  				    <?php if($this->session->logged_in) { ?>
							<div style="float: right;" >
									<button type="button" class="button special small" data-toggle="modal" data-target="#davetModal">Davet Et</button>
							</div>
								
								

										<div id="davetModal" class="modal fade" role="dialog">
										  <div class="modal-dialog">

										    <!-- Modal content-->
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button>
										        <h4 class="modal-title">Arkadaşlarınız arasından seçim yapınız.</h4>
										      </div>
										      <div class="modal-body">
										      		<div class="ScrollStyleArk">								      
												
												  	<input type="text" autocomplete="off" name="searchTags" id="searchTags" placeholder="Aranacak Kişi" />
 												
													<ul id="menuFull">

													
													<?php foreach ($davet as $rs) { ?>

															

											  			<a href="<?=base_url()?>forum/dunyadavet/<?=$fdunya[0]->Id?>/<?=$rs->kimiId?>" onclick="return confirm('Davet göndermek istediğinizden emin misiniz?');"><li><?=$rs->kimiad?>&emsp;</li></a>
														
															

													<?php } ?>

													</ul>
													</div>
																					       
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="button special  small" data-dismiss="modal">Kapat</button>
										      </div>
										    </div>

										  </div>
										</div>
										<?php } ?>
							
							<?php
						
								foreach((array)$fdunyayorum as $rs)
								{
								
							?>
							
							
						<div class="yorumdiv" >	
						
						<div class="container">
						
									<div class="col-sm-8">
										<div class="panel panel-white post panel-shadow">
											<div class="post-heading">
												<div class="pull-left image">
													<img src="<?=base_url()?>uploads/<?=$rs->yapanimg?>" class="img-circle avatar" alt="user profile image">
												</div>
												<div class="pull-left meta">
													<div class="title h5">
														<b>
														
														
													<?php
														if($this->session->logged_in)
														{
													?>
														
														<?php
															if(!(($this->session->logged_in->Id)==($rs->uye_ID)))
															{
														?>
														
																<a href="<?=base_url()?>profil/ybnprofil/<?=$rs->uye_ID?>" target="blank"><b><?=$rs->uye_adsoy?></b></a>
															
															<?php
															}else
															{
															?>
															
																<a href="<?=base_url()?>profil"  target="blank"><b><?=$rs->uye_adsoy?></b></a>
															
															
															<?php
															}
															?>
														
													<?php
														} 
														else {
														?>

														<b><?=$rs->uye_adsoy?></b>


													<?php } ?>	
														</b>
														yazdı.
													</div>
													<h6 class="text-muted time"><?=$rs->tarih?></h6>
												</div>
											</div> 
											<div class="post-description"> 
												<p><?=$rs->yorum?></p>
												<?php if($rs->img)	{    ?>
														
													<div class="post-description kk">  
                          <img  src="<?=base_url()?>uploads/<?=$rs->img;?>" width="400" height="auto" >
                          </div>

												<?php				  
													}
													
												  ?>
												
						</div><font color="#F56A6A"><p align="right"><a href="<?=base_url()?>forum/dunyapaylasimsil/<?=$rs->Id?>/<?=$dunyadonId?>" onclick="return confirm('Silmek İstediğinizden Eminmisiniz?');">

											<?php 
												if($this->session->logged_in)
														{
															if($this->session->logged_in->Id==$rs->uye_ID) { ?>
											<form action="<?=base_url()?>forum/dunyapaylasimsil/<?=$rs->Id?>" method="post">
												<p align="right"><i  class="glyphicon glyphicon-trash"></i></p>
											</form>			
											<?php } }?>

											</a></p></font>
											
										</div>
									</div>
								</div>
						</div>
						<?php } ?>
						
													
												
									
								
								
						
						
						
			<?php if($this->session->logged_in) { ?>			
						
			<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Yorum Yap
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">Metin Yorum</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                             <?php
								foreach($fdunya as $rs)
								{								
								?>  <form onsubmit="return validateForm()" id="myForm"  action="<?=base_url()?>forum/dunyayorumkaydet/<?=$rs->Id?>" method="POST"> <?php } ?>
										
											
												<div class="row uniform">
													<div class="12u$">
														<textarea name="yorum" id="demo-message" placeholder="Yorumunuzu buraya yazınız.." rows="6"></textarea>
													</div>
													<!-- Break -->
													<div class="12u$">
													
														<ul class="actions">
														
															<li><input type="submit" value="Yorum Yap" class="special" /></li>
															
														</ul>
													</div>
												</div>
										  </form>	
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Resimli Yorum</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                          <?php
								foreach($fdunya as $rs)
								{								
								?> <form onsubmit="return validateForm1()" id="myForm1"  action="<?=base_url()?>forum/dunyayorumresimkaydet/<?=$rs->Id?>" method="post" enctype="multipart/form-data"><?php } ?>
											<font color="#CC3333" >RESMİ SEÇİNİZ:<br></font>
											
											<input type="file" name="dosyaadi"  id="dosyaadi"  > <br>
											<textarea name="yorum" id="demo-message" placeholder="Yorumunuzu buraya yazınız.." rows="6"></textarea>
											
											<input type="submit" class='button special small' value="Resmi Yükle" name="submit" >
										  </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php }  else {?>
          
			&emsp;&emsp;<font size="4" color="#F56A6A">Yorum yapmak için lütfen üye girişi yapınız !</font>
          <?php } ?>  
						
								
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
<script language="javascript" src="http://is.sitekodlari.com/yukaricik1.js"></script>
	</body>
</html>