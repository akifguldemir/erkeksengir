<!DOCTYPE html>
<html lang="en">
<link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
<body>
<nav class="navbar navbar-inverse navbar-fixed-top k2">
  <div class="container-fluid ">
    <div class="navbar-header k1">
      <form action="<?=base_url()?>home" method="post">
      <input type="image" src="<?=base_url()?>uploads/e1.png" >

      </form>
    </div>
 
    <ul class="nav navbar-nav">
      
      
     
    </ul>

    <form class="navbar-form navbar-left">
   
      <input size="66"  autocomplete="off" name="searchTags" id="searchTags" type="text" class="enjoy-css" data-toggle="dropdown" placeholder="Arkadaş ara">
         <ul class="dropdown-menu color1 "><div class="ScrollStyleArk">
         <ul id="menuFull">
         <?php foreach ($kisiler as $row) { ?>
         
          <a href="<?=base_url()?>profil/ybnprofil/<?=$row->Id?>"><li>            
             <div style="background-color: white; width: 500px; height:60px; ">
                 <div style="float: left;background-color: #F56A6A;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">                 
                   <img src="<?=base_url()?>uploads/<?=$row->img?>">                                                 
                 </div>
                 <br>&emsp;<font size="4"><?=$row->adsoy?>s</font>
             </div>            
          </li></a>
         
         <?php } ?>
    
        </ul> </div>
      </ul>
      
    </form>

    <ul class="nav navbar-nav navbar-right">
    <li><a  href="<?=base_url()?>profil/arkadaspaylasimlari"><font color="white">Anasayfa</font></a></li>
      <li><a  href="<?=base_url()?>profil"><font color="white"><?=$profilhakkimda[0]->adsoy?></font></a></li>
        <li><a href="<?=base_url()?>profil/mesajlar" target="blank"><span id="showMessage" class="glyphicon glyphicon-envelope color"></span></a></li>
         <li class="dropdown"><a href="<?=base_url()?>profil/bildirimler"><span id="shownotif" class="glyphicon glyphicon-bell color"></span></a>
        
      </li>
        <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-chevron-down color"></span></a>

        <ul class="dropdown-menu color ">
          <li><a href="<?=base_url()?>profil/profilhesapayar" target="blank" ><i class="glyphicon glyphicon-cog "></i>
              <font color="black">&emsp;Bilgileri Düzenle</font></a></li>
          <li><a href="<?=base_url()?>login/logout"><i class="glyphicon glyphicon-off"></i>&emsp;Çıkış Yap</a>

          </li>
        </ul>
      </li>
      </ul>
  </div>
</nav>   
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title><?=$profilbilgi[0]->adsoy?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        /***
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
.column {
    float: left;
    width: 300px;
    margin-bottom: 16px;
    padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
}

/* Add some shadows to create a card effect */
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container1 {
    padding: 0 16px;
    width: 300px;
}

/* Clear floats */
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}
/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}.enjoy-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 400px;
  height: 20px;
  padding: 10px 20px;
  border: 2px solid #b7b7b7;
  -webkit-border-radius: 11px / 8px;
  border-radius: 11px / 8px;
  font: normal 13px/normal "Times New Roman", Times, serif;
  color: rgba(0,142,198,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(252,252,252,1);
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}
.color{color: white;}
.color1
{
  width: 550px;
  max-height: 250px;
}
.ScrollStyleArk
{
    max-height: 240px;
    overflow-y: scroll;
}
.k{
  background-color: #F56A6A;
  border: 1px solid #F56A6A;

}.divTable{
  display: table;
  width: 100%;
}
.divTableRow {
  display: table-row;
}
.divTableHeading {
  background-color: #EEE;
  display: table-header-group;
}
.divTableCell, .divTableHead {
  display: table-cell;
  padding: 3px 10px;
  height: 20px;
}
.divTableHeading {
  background-color: #EEE;
  display: table-header-group;
  font-weight: bold;
}
.divTableFoot {
  background-color: #EEE;
  display: table-footer-group;
  font-weight: bold;
}
.divTableBody {
  display: table-row-group;
}
.k1{
  height:25px;
  width: auto;
   padding-top: 6px;


}
.k2{
  background-color: #F56A6A;
  border: 1px solid #F56A6A;
  height: 53px;


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
  font-size: 14px;
  font-weight: 700;
    border-bottom: 1px double #F56A6A;

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
  color: #F56A6A;
  background-color: #FFBDBD;
  border-left: 2px solid #F56A6A;
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
.fix{
  position: absolute;

      left: 60px;
      top: 350px;
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
    height: 50px;
    width: 50px;
    display: block;
    }
  .dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: white;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    width: 80px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    align:right;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  width:80px;
    display: block;
}

.dropdown:hover .dropbtn {
  
    background-color: white;
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

    width: 300px;

    margin: 50px;

    color: #FFF;
  
}
  .sag
   {
      position: absolute;

      right: 0px;

      width: 150px;
  
      
   }
   

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
  width:550px;
  
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
.resres{
  width: 150px;
  height: 150px;
}
.bilboy{
      width: 40px;
      height: 40px;
    }
    .mesboy{
      width: 50px;
      height: 37px;
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
                 
                </header>

              <!-- Banner -->
                

              <!-- Section -->
                <div class="container">
    <div class="row profile">
    <div class="col-md-3">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        
          <?php
              foreach($profilbilgi as $rs)
              {
            ?>
          <div class="row">
              <div class="column">
                <div class="card"><p  data-toggle="tooltip" title="Profil resmini değiştirmek için bilgileri düzenle sayfasına gidiniz!">
                  <img src="<?=base_url()?>uploads/<?=$rs->img?>" alt="Jane" style="width:100%"></p>
                  <div class="container1">
                   <div class="divTable" style="width: 150px;">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell"><form action="<?=base_url()?>profil/ybnprofil/<?=$profilbilgi[0]->Id?>" method="post">                
                             <input type="image"  src="<?=base_url()?>uploads/user.png" value="Mesaj" ></form> </form>
                        </div>
<div class="divTableCell">  <?php  foreach($arkadaslik as $ark)  {   ?>
                        <form action="<?=base_url()?>profil/ybncekId/<?=$profilbilgi[0]->Id?>" method="post">             
                             <input type="image"  src="<?=base_url()?>uploads/mail.png" value="Mesaj" ></form> 
                    <?php  }  ?> </div>
<div class="divTableCell"> 
                        <form action="<?=base_url()?>profil/ybnarkadaslik/<?=$profilbilgi[0]->Id?>" method="post">                
                             <input type="image"  src="<?=base_url()?>uploads/humans.png" value="Mesaj" ></form> </form>
                        </div>
<div class="divTableCell"><form action="<?=base_url()?>profil/ybngaleri/<?=$profilbilgi[0]->Id?>" method="post">                
                             <input type="image"  src="<?=base_url()?>uploads/camera.png" value="Mesaj" ></form> </form>
                        </div>
</div>
</div>
</div>           
                    <h2><?=$rs->adsoy?><br><font size="2">@<?=$rs->kullaniciadi?></font></h2>
                    <p ><?=$rs->meslek?></p>
                    <p><?=$rs->email?></p>
                    <p><?=$rs->dogumtarihi?></p>

                  </div>
                </div>
              </div>
              
            </div>
                 
                    </form></p>
        
          
       
                
        
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            
          </div>
          <div class="profile-usertitle-job">
            
            
            
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <!--<div class="profile-userbuttons">
          <button type="button" >Takip et</button>
          <button type="button" >Mesaj</button>
        </div>-->
        <!-- END SIDEBAR BUTTONS -->
       <div style="width: 32;height: 32;float: left;"> <img src="<?=base_url()?>uploads/info1.png"></div>
        <h3><font style="line-height: 35px;">Hakkında</font></h3>
        <div class="profile-usermenu">

        <?php if($profilbilgi[0]->hakkinda) { ?>
          <p><?=$profilbilgi[0]->hakkinda?></p>

         <?php } ?> 
         
         </div>
        <!-- END MENU -->
      </div>
    </div>


    <?php
              }
            ?>
		<div class="col-md-9">
         <div class="profile-content">
						
							
				
				
				
							
				
		<div id="ana_div"> <!--#Ana Div Baslangic-->

			<div class="div" id="div">
							
                &emsp;<font color="#F56A6A">Takip edenler<br><br>

		              <?php  
                  
									
										foreach($takipedenler as $rs)
										{
											
									?>
									
													<div class="panel panel-white post panel-shadow">
											
														<div class="post-heading">
															<div class="pull-left image">
																<a href="<?=base_url()?>profil/ybnprofil/<?=$rs->kimId?>"><img src="<?=base_url()?>uploads/<?=$rs->kimimg?>" class="img-circle avatar" alt="user profile image">
															</div>
															<div class="pull-left meta">
																<div class="title h5">
																	<b><?=$rs->kimad?></b><font> <font color="#F56A6A" size="1px" >takip ediyor.</font></a> 
																	
																</div>
																<h6 class="text-muted time"><?=$rs->tarih?></h6>
															</div>
														</div> 
													
											
													</div>
												
									</font>
		
										
									<?php
										}
									?>
			</div>

			<div class="div" id="div2">
				

									&emsp;<font color="#F56A6A">Takip edilenler<br><br>
										
										
										
										<?php
											foreach($takipedilenler as $rs)
											{
										?>
											
												
													<div class="panel panel-white post panel-shadow">
											
														<div class="post-heading">
															<div class="pull-left image">
																<a href="<?=base_url()?>profil/ybnprofil/<?=$rs->kimiId?> "><img src="<?=base_url()?>uploads/<?=$rs->kimiimg?>" class="img-circle avatar" alt="user profile image">
															</div>
															<div class="pull-left meta">
																<div class="title h5">
																	<b><?=$rs->kimiad?></b> <font color="#F56A6A" size="1px" >takip ediyorsun.</font></a>
																	
																</div>
																<h6 class="text-muted time"><?=$rs->tarih?></h6>
															</div>
														</div> 
												
											
												
												
													</div>
																			
										
									
								
									</font>
							<?php
								}
							?>


				
			</div>

			

		</div><!--#Ana Div Bitis-->
	   
		  
		
			   
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

  $(function(){

    mesajbildirim();
    bildirimgeldi();
    bildirimgoster();
    
       $('form .gonder').on({
              click: function (event) {
                  event.preventDefault();
                  $(this).closest('form').submit();
              }
          });

       $("#enter").keyup(function(event){
            if(event.keyCode == 13){
                $("#btnSearch").click();
            }
        });

         $('form .paylasimyorumsil').on({
        click: function (event) {
            event.preventDefault();
            $(this).closest('form').submit();
        }
    });


      $(".btn").click(function(e) {
          if ($(this).html() == "Beğen") {
              $(this).html('Beğendin');
              $(this).css({ 'color': '#F56A6A'});
          }
          else {
              $(this).html('Beğen');
              $(this).css({ 'color': '#3D4449'});
          }
          return false;
      });

//Mesaj Ajax

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
            
             html='?'; 
              
         
          }
          $('#showMessage').html(html);

        },
      
      });
      }, 1000); 
    }

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
              html='?'; 
            }
              
         
          }
          $('#shownotif').html(html);

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
	
</html>