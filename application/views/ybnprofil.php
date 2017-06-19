<!DOCTYPE html>
<script type="text/javascript">
          function paybegen(Id,kimeId)
          {
            var data= 'Id='+ Id+'&kimeId='+ kimeId;
              $.ajax({
                      type: "POST",
                      url: "<?=base_url()?>profil/paybegen ",
                      data: data,
                      success: function (response) {
                        $('#'+Id).html('Beğendin');
                        $('#'+Id).css("background-color","#F56A6A")

                       
                        
                      }
                  });
          }
        
      </script>
      <script type="text/javascript">
          function paylas(paylasim,uye_ID,uye_adsoy,Id)
          {
            var data= '&paylasim='+ paylasim+'&uye_ID='+ uye_ID + '&uye_adsoy='+ uye_adsoy+'&Id='+Id;
              $.ajax({
                      type: "POST",
                      url: "<?=base_url()?>profil/paylas ",
                      data: data,
                      success: function (response) {
                        alert('Gönderi profilinde paylaşıldı.');
                       
                        
                      }
                  });
          }
          function paylas1(paylasim,uye_ID,uye_adsoy,link,Id)
              {
                var data= '&paylasim='+ paylasim+'&uye_ID='+ uye_ID + '&uye_adsoy='+ uye_adsoy + '&link='+link+'&Id='+Id;
                  $.ajax({
                          type: "POST",
                          url: "<?=base_url()?>profil/paylas1 ",
                          data: data,
                          success: function (response) {
                            alert('Gönderi profilinde paylaşıldı.');
                           
                            
                          }
                      });
              }
          function paylas2(paylasim,uye_ID,uye_adsoy,paylasimimg,Id)
              {
                var data= '&paylasim='+ paylasim+'&uye_ID='+ uye_ID + '&uye_adsoy='+ uye_adsoy + '&paylasimimg='+paylasimimg+'&Id='+Id;
                  $.ajax({
                          type: "POST",
                          url: "<?=base_url()?>profil/paylas2 ",
                          data: data,
                          success: function (response) {
                            alert('Gönderi profilinde paylaşıldı.');
                           
                            
                          }
                      });
              }
          function paylas3(paylasim,uye_ID,uye_adsoy,video,Id)
              {
                var data= '&paylasim='+ paylasim+'&uye_ID='+ uye_ID + '&uye_adsoy='+ uye_adsoy + '&video='+video+'&Id='+Id;
                  $.ajax({
                          type: "POST",
                          url: "<?=base_url()?>profil/paylas3 ",
                          data: data,
                          success: function (response) {
                            alert('Gönderi profilinde paylaşıldı.');
                           
                            
                          }
                      });
              }
      </script>
<html lang="en">
<link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
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
                 <br>&emsp;<font size="4"><?=$row->adsoy?><font size="1">&emsp;@<?=$row->kullaniciadi?></font></font>
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
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <style type="text/css">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/jquery1/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
   
<style>
.enjoy-css {
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
body{ background: #fafafa;}
.widget-area.blank {
background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
-webkit-box-shadow: none;
-moz-box-shadow: none;
-ms-box-shadow: none;
-o-box-shadow: none;
box-shadow: none;
}
body .no-padding {
padding: 0;
}
.widget-area {
background-color: #fff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
float: left;
margin-top: 30px;
padding: 25px 30px;
position: relative;
width: 100%;
}
.status-upload {
background: none repeat scroll 0 0 #f5f5f5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
float: left;
width: 100%;
}
.status-upload form {
float: left;
width: 100%;
}
.status-upload form textarea {
background: none repeat scroll 0 0 #fff;
border: medium none;
-webkit-border-radius: 4px 4px 0 0;
-moz-border-radius: 4px 4px 0 0;
-ms-border-radius: 4px 4px 0 0;
-o-border-radius: 4px 4px 0 0;
border-radius: 4px 4px 0 0;
color: #777777;
float: left;
font-family: Lato;
font-size: 14px;
height: 142px;
letter-spacing: 0.3px;
padding: 20px;
width: 100%;
resize:vertical;
outline:none;
border: 1px solid #F2F2F2;
}

.status-upload ul {
float: left;
list-style: none outside none;
margin: 0;
padding: 0 0 0 15px;
width: auto;
}
.status-upload ul > li {
float: left;
}
.status-upload ul > li > a {
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #777777;
float: left;
font-size: 14px;
height: 30px;
line-height: 30px;
margin: 10px 0 10px 10px;
text-align: center;
-webkit-transition: all 0.4s ease 0s;
-moz-transition: all 0.4s ease 0s;
-ms-transition: all 0.4s ease 0s;
-o-transition: all 0.4s ease 0s;
transition: all 0.4s ease 0s;
width: 30px;
cursor: pointer;
}
.status-upload ul > li > a:hover {
background: none repeat scroll 0 0 #606060;
color: #fff;
}
.status-upload form button {
border: medium none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #fff;
float: right;
font-family: Lato;
font-size: 14px;
letter-spacing: 0.3px;
margin-right: 9px;
margin-top: 9px;
padding: 6px 15px;
}
.dropdown > a > span.green:before {
border-left-color: #2dcb73;
}/* DivTable.com */
.divTable{
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
.status-upload form button > i {
margin-right: 7px;
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
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 5px;
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
    background-color: #f9f9f9;

    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
   
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
} 
.panel-white {
  border: 1px solid #F56A6A;
}
.sss{
  float: right;
}
.bilboy{
  width: 40px;
  height: 40px;
}
.mesboy{
  width: 50px;
  height: 37px;
}
.kk{
  width:350px;
   height:auto;  
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


}.column {
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
</style>
     
    </style>
   
    
</head>
<body>
<!--
  Editorial by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>


  <head>
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
                <div class="card">
                  <img src="<?=base_url()?>uploads/<?=$rs->img?>" alt="Jane" style="width:100%">
                  <div class="container1">

                  <div class="divTable" style="width: 150px;">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell"><form action="<?=base_url()?>profil/ybnprofil/<?=$profilbilgi[0]->Id?>" method="post">                
                             <input type="image"  src="<?=base_url()?>uploads/user.png" value="Mesaj" ></form> 
                        </div>
<div class="divTableCell">  <?php  foreach($arkadaslik as $ark)  {   ?>
                        <form action="<?=base_url()?>profil/ybncekId/<?=$profilbilgi[0]->Id?>" method="post">             
                             <input type="image"  src="<?=base_url()?>uploads/mail.png" value="Mesaj" ></form> 
                    <?php  }  ?> </div>
<div class="divTableCell"> 
                        <form action="<?=base_url()?>profil/ybnarkadaslik/<?=$profilbilgi[0]->Id?>" method="post">                
                             <input type="image"  src="<?=base_url()?>uploads/humans.png" value="Mesaj" >
                             <div>  

                                  <?php

                                      $this->db->select('*');
                                      $this->db->from('arkadaslik');
                                      $this->db->where('kimId',$profilbilgi[0]->Id);
                                      $count=$this->db->count_all_results();          


                                  ?>




                                  &nbsp;<span class="badge"><?php echo $count ?></span>

                                 </div>
                                 </form> 
                        </div>
<div class="divTableCell"><form action="<?=base_url()?>profil/ybngaleri/<?=$profilbilgi[0]->Id?>" method="post">                
                             <input type="image"  src="<?=base_url()?>uploads/camera.png" value="Mesaj" ></form> 
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
           
          <p><form action="<?=base_url()?>profil/takipet/<?=$rs->Id?>" method="post">
                    <input type="hidden" value="<?=$rs->Id?>" name="kimiId" />
                    <input type="hidden" value="<?=$rs->adsoy?>" name="kimiad" />
                    <input type="hidden" value="<?=$rs->img?>" name="kimiimg" />
                    <button id="btnTakip" class="button special fit"  type="submit" name="submit" >Takip et</button>                 
                    </form></p>
        
          
          <?php  foreach($arkadaslik as $ark)  {   ?>

          
                <form action="<?=base_url()?>profil/takipsil/<?=$ark->Id?>" method="post">            
                  <input type="submit" name="submit" class="button special fit" value="Takipi bırak" onclick="return confirm('Takipi bırakmak istediğinizden emin misiniz?');" >
                </form>
                
                
               

          <?php  }  ?>
                
        
        
        
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
        
              
                        
          </div>
          
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
        
    
                
        
          
          
        </div>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div style="width: 32;height: 32;float: left;"> <img src="<?=base_url()?>uploads/info1.png"></div>
        <h3><font style="line-height: 35px;">Hakkında</font></h3>
        <div class="profile-usermenu">

        <?php if($profilbilgi[0]->hakkinda) { ?>
          <p><?=$profilbilgi[0]->hakkinda?></p>

         <?php } ?> 
         
          <?php } ?>
        </div>
        <!-- END MENU -->
      </div>
    </div>
    <div class="col-md-9">
         <div class="profile-content">
    
    


<?php foreach($arkadaslik as $rs) { ?>

      <?php 
if( $rs->kimId == $this->session->logged_in->Id && $rs->kimiId == $profilbilgi[0]->Id)
    {
      ?>
        <h2 id="duvarh2"><?=$profilbilgi[0]->adsoy?>&emsp; in duvarında paylaş !</h2>


    <div style="float: left;">
      <table style="width: 200px;" cellpadding="3">
      <tbody>
      <tr>
      <td><button type="button" class='button special ' data-toggle="modal" data-target="#myModal">&nbsp;Metin&emsp;</button></td>
      <td><button type="button" class='button special ' data-toggle="modal" data-target="#myyyyModal">Fotoğraf</button></td>
      <td><button type="button" class='button special ' data-toggle="modal" data-target="#videoModal">Video</button></td>
      </tr>
      </tbody>
      </table>
</div>



              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ne düşünüyorsun ?</h4>
                </div>
                
              
                <div class="modal-body">
                  <form onsubmit="return validateForm()" id="myForm" action="<?=base_url()?>profil/ybnpaylasimkaydet/<?=$profilbilgi[0]->Id?>" method="POST" >
                  <font color="black"><textarea  type="text" id="demo-name" rows="3"  name="paylasim" ></textarea></font><br>
                  <input class="button special small"  type="submit" value="Paylaş" align="right" />
                  <input type="hidden" name="kime_ad" value="<?=$profilbilgi[0]->adsoy?>">
                  
                  </form>
                </div>
              
                
                <div class="modal-footer">
                  <button type="button" class='button special small' data-dismiss="modal">Kapat</button>
                </div>
                </div>
                
              </div>
              </div>
      
          
    
              <!-- Modal -->
              <div class="modal fade" id="myyyyModal" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ne düşünüyorsun ?</h4>
                </div>
                <div class="modal-body">
                  <form onsubmit="return validateForm1()" id="myForm1" action="<?=base_url()?>profil/ybnpaylasimresimkaydet/<?=$profilbilgi[0]->Id?>" method="post" enctype="multipart/form-data">
                  
                <input type="hidden" name="kime_ad" value="<?=$profilbilgi[0]->adsoy?>">
                    <input type="file" name="dosyaadi"  id="dosyaadi"  > <br>
                    <font color="black"><input type="text" name="paylasim" id="demo-name"  placeholder="Ne düşünüyorsun ?" /></font><br>
                    
                    <input type="submit" class='button special small' value="Resmi Yükle" name="submit" >
                </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class='button special small' data-dismiss="modal">Kapat</button>
                </div>
                </div>
                
              </div>
              </div>
    
              <!-- Modal -->
              <div class="modal fade" id="videoModal" role="dialog">
              <div class="modal-dialog">

              
                <!-- Modal content-->
                        <div class="modal-content">


                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home"><img src="<?=base_url()?>uploads/video.png"></a></li>
                      <li><a data-toggle="tab" href="#menu1"><img src="<?=base_url()?>uploads/youtube.png"></a></li>
                      
                    </ul>

                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                           <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ne düşünüyorsun ?</h4>
                      </div>
                      <div class="modal-body">
                        <form onsubmit="return validateForm2()" id="myForm2" action="<?=base_url()?>profil/add_video1/<?=$profilbilgi[0]->Id?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="kime_ad" value="<?=$profilbilgi[0]->adsoy?>">
                          <input style="display: none;" type="file" id="video" name="video" ><br>
                          <label for="video"><font size="4" color="black">Dosya Sec</font></label>
                          <font color="black"><input type="text" name="paylasim" id="demo-name"  placeholder="Video hakkında bişeyler yaz.." /></font><br>
                          
                          <input type="submit" class='button special small' value="Video Yükle" name="submit" >&nbsp;(Max.boyut : 25 Mb)

                      </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class='button special small' data-dismiss="modal">Kapat</button>
                      </div>
                      </div>



                      <div id="menu1" class="tab-pane fade">
                       <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ne düşünüyorsun ?</h4>
                      </div>
                      <div class="modal-body">
                          <form onsubmit="return validateForm3()" id="myForm3" action="<?=base_url()?>profil/ybnpaylasimkaydetlink/<?=$profilbilgi[0]->Id?>" method="POST" >
                              
                              <input type="text" name="link" placeholder="Link"><br>
                    
                              
                              <font color="black"><textarea placeholder="Ne düşünüyorsun.."  type="text" id="demo-name" rows="2"  name="paylasim" ></textarea></font><br>
                              <input class="button special small"  type="submit" value="Paylaş" align="right" />
                              
                          </form>
                      </div>
                      </div>
                      




                    </div>
                  
                      
                </div>
                
              </div>
              </div>

    
    <?php } ?>


    <?php } ?>


      
  
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         <br><br><br><br><?php if ($this->session->flashdata("sonuc")) {?>
                  
                    <div class="alert alert-info alert-dismissable fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong></strong> <?=$this->session->flashdata("sonuc")?>
                    </div>
                <?php } ?>
        
          <?php
            
              foreach((array)$profilpaylasim as $rs)
              {
                
          ?>
        
          
            
            <div class="container">
            
                  <div class="col-sm-7">
                  
                    <div class="panel panel-white post panel-shadow">
                    
                      <?php
                          if(($this->session->logged_in->Id)==($rs->uye_ID))
                          {
                        ?>
                    
                    
                      <div class="container">
                          <div class="sag">
                          <div class="dropdown">
                            <button class="glyphicon glyphicon-chevron-down"></button>
                            <div class="dropdown-content">
                            <font size="2px"><a href="<?=base_url()?>profil/paylasimsil1/<?=$rs->Id?>/<?=$profilbilgi[0]->Id?>" onclick="return confirm('Silmek İstediğinizden Emin misiniz?');"><i class="glyphicon glyphicon-trash">&nbsp;Sil</i></a></font>
                           


                           <?php if($rs->uye_ID == $this->session->logged_in->Id) { ?>

                          <font size="1px"><a href="<?=base_url()?>profil/paylasimduzenle1/<?=$rs->Id?>/<?=$profilbilgi[0]->Id?>" ><i class="glyphicon glyphicon-pencil">&nbsp;Düzenle</i></a></font>

                        <?php } ?>

            
                            
                            </div>
                          </div>
                          </div>
                
                      
                      </div>
                      
                      <?php
                      }?>
                      
                      
                      
                      <div class="post-heading">
                      
                        <div class="pull-left image">
                        
                          <img src="<?=base_url()?>uploads/<?=$rs->uye_img;?>" class="img-circle avatar" alt="user profile image">
                        </div>
                        <div class="pull-left meta">
                          <div class="title h5">
                          <?php if($rs->cesit == 'alinti') { ?>

                            <?php
                              if(!(($this->session->logged_in->Id)==($rs->uye_ID)))
                              {
                            ?>
                        
                            <a href="<?=base_url()?>profil/ybnprofil/<?=$rs->uye_ID?>"><b><?=$rs->uye_adsoy?></b></a>&nbsp;<?=$rs->kimdenAd?>
                          
                          <?php
                            }
                          else
                            {
                            ?>
                            
                              <a href="<?=base_url()?>profil"><b><?=$rs->uye_adsoy?></b></a>&nbsp;<?=$rs->kimdenAd?>
                            
                            
                            <?php
                            }
                          ?>  in gönderisini alıntıladı.
                          <?php } ?>
                            
                      <?php if($rs->cesit == 'baskasina') { ?>

                            <?php
                              if(!(($this->session->logged_in->Id)==($rs->uye_ID)))
                              {
                            ?>
                        
                            <a href="<?=base_url()?>profil/ybnprofil/<?=$rs->uye_ID?>"><b><?=$rs->uye_adsoy?></b></a>&nbsp;<?=$rs->kimdenAd?>
                          
                          <?php
                            }
                          else
                            {
                            ?>
                            
                              <a href="<?=base_url()?>profil"><b><?=$rs->uye_adsoy?></b></a>&nbsp;<?=$rs->kimdenAd?>
                            
                            
                            <?php
                            }
                          ?> <?=$profilbilgi[0]->adsoy?>  in duvarına paylaştı.



                        <?php }  ?>
                        <?php if($rs->cesit == 'kendine') { ?>

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
                          ?> paylaştı.

                          <?php } ?>

                       

                                                
                          </div>
                          <h6 class="text-muted time"><?=$rs->tarih?></h6>
                        </div>
                      </div> 
                      <div class="post-description"> 
                        <p><?=$rs->paylasim?></p>
                        <?php       
                            if($rs->paylasimimg)
                              {
                          ?>
                            <div class="thumbnail">
                              <a href="<?=base_url()?>uploads/<?=$rs->paylasimimg;?>" target="_blank">
                                <img src="<?=base_url()?>uploads/<?=$rs->paylasimimg;?>" alt="Lights" style="width:400px;">
                               
                              </a>
                            </div>
                        <?php } ?>      
                          
                           <?php       
                            if($rs->video)
                              {
                            ?>
                            <div class="thumbnail">
                                <center><video width="540" height="450" controls>                                
                                  <source  src="<?=base_url()?>uploads/<?=$rs->video;?>" type="video/mp4">
                                  <source src="movie.ogg" type="video/ogg">
                                </video></center></div>
                    
                           <?php }?> 
                           <?php       
                            if($rs->link)
                              {
                            ?>
                                 <div class="thumbnail">
                                   <center><iframe  width="540" height="450" src="https://www.youtube.com/embed/<?=$rs->link?>" frameborder="0" allowfullscreen></iframe></center>
                                  </div>
                    
                        <?php } ?>

                        
                      </div>
                      <div class="stats">

                          <div class="modal fade" id="myModalb<?=$rs->Id?>" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2>Beğenenler</h2>
                                  </div>
                                  <div class="modal-body">
                                  <?php foreach($begeniler as $bg) { ?>
                                     <?php if($bg->paylasimId == $rs->Id) { ?>
                                        <?php if($bg->kimId == $this->session->logged_in->Id) { ?>
                                          <a href="<?=base_url()?>profil"><p><?=$bg->kimAd?></p></a>
                                      <?php  }else { ?>
                                          <a href="<?=base_url()?>profil/ybnprofil/<?=$bg->kimId?>"><p><?=$bg->kimAd?></p></a>
                                      <?php } ?>
 
                                      <?php } ?>
                                    <?php } ?>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="button special small" data-dismiss="modal">Kapat</button>
                                  </div>
                                </div>
                                
                              </div>
                            </div>

                         
                          <?php
                            $this->db->select('*');
                            $this->db->from('bildirimler');
                            $this->db->where('paylasimId',$rs->Id);
                            $this->db->where('cesit','begen');
                            $countLike=$this->db->count_all_results();          

                          ?> 


                          <div style="float: right;"><a href="" data-toggle="modal" data-target="#myModalb<?=$rs->Id?>"><p><span class="glyphicon glyphicon-thumbs-up"></span> <?php echo $countLike ?>
                          </p></a></div>
                          <button style="background-color: white;" id="<?=$rs->Id?>" class="button special small" onclick="javascript:paybegen('<?=$rs->Id?>','<?=$rs->uye_ID?>');"><font color="#3D4449" size="2"><span class="glyphicon glyphicon-thumbs-up">Begen</span></font>
                          </button>

                          <?php if($rs->video) { ?>
                                      <button onclick="javascript:paylas3('<?=$rs->paylasim?>','<?=$rs->uye_ID?>','<?=$rs->uye_adsoy?>','<?=$rs->video?>','<?=$rs->Id?>');" type="submit" style="background-color: white;"  class="button special small"><font color="#3D4449" size="2"><span class="glyphicon glyphicon-share">Paylaş</span></font>
                                      </button>
                                     

                          <?php } ?>


                          <?php  if($rs->paylasimimg) { ?>
                                      <button onclick="javascript:paylas2('<?=$rs->paylasim?>','<?=$rs->uye_ID?>','<?=$rs->uye_adsoy?>','<?=$rs->paylasimimg?>','<?=$rs->Id?>');" type="submit" style="background-color: white;"  class="button special small"><font color="#3D4449" size="2"><span class="glyphicon glyphicon-share">Paylaş</span></font>
                                      </button>
                                    

                          <?php } ?>



                          <?php  if($rs->link ){ ?>

                                      <button  onclick="javascript:paylas1('<?=$rs->paylasim?>','<?=$rs->uye_ID?>','<?=$rs->uye_adsoy?>','<?=$rs->link?>','<?=$rs->Id?>');" type="submit" style="background-color: white;"  class="button special small"><font color="#3D4449" size="2"><span class="glyphicon glyphicon-share">Paylaş</span></font>
                                      </button>
                                      


                          <?php } ?>


                          <?php if($rs->paylasim && !$rs->link && !$rs->paylasimimg && !$rs->video) { ?>
                                
                                      <button  onclick="javascript:paylas('<?=$rs->paylasim?>','<?=$rs->uye_ID?>','<?=$rs->uye_adsoy?>','<?=$rs->Id?>');" type="submit" style="background-color: white;"  class="button special small"><font color="#3D4449" size="2"><span class="glyphicon glyphicon-share">Paylaş</span></font>
                                      </button>
                                     
                                 
                          <?php } ?>

                              
                         
                      </div>
                       <div class="post-footer">
                      <div class="input-group"> 
                       
                      </div>

                      <div  style="width: 600px;"> 
                        <div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                               <h4 class="panel-title">
                                  <?php

                                      $this->db->select("*");
                                      $this->db->from("paylasimyorum");
                                      $this->db->where('paylasimId',$rs->Id);
                                      $countComment=$this->db->count_all_results();          


                                    ?>
                                <a data-toggle="collapse" href="#collapse<?=$rs->Id?>">Yorum Yap </a>
                                <div style="float: right;"><span class="label label-default"><?php echo $countComment ?></span></div>
                              </h4>
                            </div>
                            <div id="collapse<?=$rs->Id?>" class="panel-collapse collapse">
                              <div class="panel-body"> 

                              <?php if($rs->kime_Id==$rs->uye_ID ) { ?>

                             <form onsubmit="return validateFormy<?=$rs->Id?>()" id="myFormy<?=$rs->Id?>" action="<?=base_url()?>profil/paylasimyorumkaydet/<?=$rs->kime_Id?>" method="post">
                              <input type="hidden" name="paylasimId" value="<?=$rs->Id?>" >
                                <div  style="width: 570px;"> <input class="form-control"  id="enter" name="yorum" placeholder="Yorum yap.." type="text"></div>
                                   <input type="hidden" id="btnSearch" value="Search" onclick="doSomething();" />
                                </span></p>
                              </form>
                              
                          <?php } else { ?> 

                              <form onsubmit="return validateFormy1<?=$rs->Id?>()" id="myFormy1<?=$rs->Id?>" action="<?=base_url()?>profil/paylasimyorumkaydet5/<?=$rs->uye_ID?>" method="post">
                                <input type="hidden" name="paylasimId" value="<?=$rs->Id?>" >
                                <input type="hidden" name="donId" value="<?=$rs->kime_Id?>">
                                <div  style="width: 570px;"> <input class="form-control"  id="enter" name="yorum" placeholder="Yorum yap.." type="text"></div>
                                   <input type="hidden" id="btnSearch" value="Search" onclick="doSomething();" />
                                </span></p>
                              </form>

                          <?php } ?>

                             <script>
                              function validateFormy<?=$rs->Id?>() {
                                var payMetin = document.forms["myFormy<?=$rs->Id?>"]["yorum"].value;
                                
                             

                                if (payMetin == "") {
                                    alert("Yorum Boş Olamaz !");
                                    return false;
                                }
                             
                            }
                            </script>
                            <script>
                              function validateFormy1<?=$rs->Id?>() {
                                var payMetin = document.forms["myFormy1<?=$rs->Id?>"]["yorum"].value;
                                
                             

                                if (payMetin == "") {
                                    alert("Yorum Boş Olamaz !");
                                    return false;
                                }
                             
                            }
                            </script>
                                
                                <ul class="comments-list">

                                  <?php foreach ($paylasimyorum as $row) 
                                  {
                                    ?>
                                    
                                       <?php  if($row->paylasimId == $rs->Id) { ?>

                                      <li class="comment">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="<?=base_url()?>uploads/<?=$row->yapanimg?>" alt="avatar">
                                        </a>
                                        <div class="comment-body">
                                          <div class="comment-heading">
                                            <h4 class="user"><?=$row->yapanad?></h4>
                                            <h5 class="time"><?=$row->tarih?></h5>
                                            <div class="sss">
                                            <?php if($row->yapanId == $this->session->logged_in->Id) { ?>
                                            <a href="<?=base_url()?>profil/paylasimyorumsil/<?=$row->Id?>" onclick="return confirm('Yorumu silmek istediğinizden emin misiniz?');" class="paylasimyorumsil"><p><i class="glyphicon glyphicon-trash"></i></p></a>
                                            <?php } ?>
                                           </div>
                                          </div>
                                          <p><?=$row->yorum?></p>
                                        </div>                      
                                      </li>
                                      <?php } ?> 
                                  <?php  } ?>
                                  </ul>
                              </div>
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
            </div>
          
          <?php
            
            }
          ?>
            
        
        
    

        
         
            </div> <center>Daha fazla paylaşım bulunmuyor.</center>
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
      <script>
  function validateForm() {
    var payMetin = document.forms["myForm"]["paylasim"].value;
    
 

    if (payMetin == "") {
        alert("Paylaşım Boş Olamaz !");
        return false;
    }
 
}
</script>
<script>
  function validateForm1() {
    var dosyaadi = document.forms["myForm1"]["dosyaadi"].value;
    
 

    if (dosyaadi == "") {
        alert("Lütfen Resim Ekleyiniz !");
        return false;
    }
 
}
</script>
<script>
  function validateForm2() {
    var video = document.forms["myForm2"]["video"].value;
    
 

    if (video == "") {
        alert("Lütfen Video Ekleyiniz !");
        return false;
    }
 
}
</script>
<script>
  function validateForm3() {
    var link = document.forms["myForm3"]["link"].value;
    
 

    if (link == "") {
        alert("Lütfen Link Ekleyiniz !");
        return false;
    }
 
}
</script>
  <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
$(document).ready(function(){

    
    $("[data-toggle=tooltip]").tooltip();

});
</script>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <script type="text/javascript">
   <?php foreach($arkadaslik as $rs) { ?>

  $(function(){
    
    if( <?=$rs->kimId?>  == <?=$this->session->logged_in->Id?> && <?=$rs->kimiId?> == <?=$profilbilgi[0]->Id?> )
    {
    
            $('#btnTakip').hide();

    }

    
    $('#btnTakip').click(function(){ 
      alert('<?=$profilbilgi[0]->adsoy?> artık takip edililiyor.');    
    });

<?php } ?>



 $('form .gonder').on({
        click: function (event) {
            event.preventDefault();
            $(this).closest('form').submit();
        }
    });

});


    </script>
   
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
</html>