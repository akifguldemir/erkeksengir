<!DOCTYPE html>
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
    <title><?=$this->session->logged_in->adsoy?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <style type="text/css">
  
   
<style>
.color{
  color:white;
}
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
.msg {
    background: #fefefe;
    color: #666666;
    font-weight: bold;
    font-size: small;
    padding: 12px;
    padding-left: 16px;
    border-top: solid 3px #CCCCCC;
    border-radius: 5px;
    margin-bottom: 10px;
    -webkit-box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
       -moz-box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
            box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
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

.title {
    color: grey;
}
.msg-clear {
    border-color: #fefefe;
    -webkit-box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
       -moz-box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
            box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
}
.msg-info {
    border-color: #b8dbf2;
}
.msg-success {
    border-color: #cef2b8;
}
.msg-warning {
    border-color: rgba(255,165,0,.5);
}
.msg-danger {
    border-color: #ec8282;
}
.msg-primary {
    border-color: #9ca6f1;
}
.msg-magick {
    border-color: #e0b8f2;
}
.msg-info-text {
    color: #39b3d7;
}
.msg-success-text {
    color: #80d651;
}
.msg-warning-text {
    color: #db9e34;
}
.msg-danger-text {
    color: #c9302c;
}
.msg-primary-text {
    color: rgba(47,106,215,.9);
}
.msg-magick-text {
    color: #bb39d7;
}
.modal-body {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
}
.sss{
  float: right;
}
.fa:hover{
  background-color: white;
}
.resres{
  width: 150px;
  height: 150px;
}
.kk{
  width:350px;
   height:auto;
   
}
</style>
     
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
  
    
</head>
<body>
<!--
  Editorial by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php 
                  
  foreach((array)$profilbilgi as $rs)
    {
?>

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
      <div class="profile-sidebar ">
        <!-- SIDEBAR USERPIC -->
        
            
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
                    <h2><?=$rs->adsoy?></h2>
                    <p ><?=$rs->meslek?></p>
                    <p><?=$rs->email?></p>
                    <p><?=$rs->dogumtarihi?></p>

                  </div>
                </div>
              </div>
              
            </div>
        
          
        
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            <p><font color="black"><?=$rs->adsoy?></font></p>
            <p><font color="black"><?=$rs->meslek?></font></p>

            <!-- Button trigger modal -->


<!--<a href="<?=base_url()?>profil/bildirimler"><button class="button special small" data-toggle="modal" data-target="#myModal">
  Bildirimler
  <span class="badge badge-default">New</span>
</button></a>&emsp;-->
<ul id="shownotif">
  
</ul>

<!-- /.modal -->


    <?php }?>
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
         
         </div>
        <!-- END MENU -->
      </div>
    </div>

    <div class="col-md-9">
         <div class="profile-content">
    


      
          
            
            <div class="container">
            
                  <div class="col-sm-8">
                  
                    <div class="panel panel-white post panel-shadow">
                    <div class="container">
                                   
                     <div class="sag">
                      <div class="dropdown">
                        <button class="glyphicon glyphicon-cog"></button>
                        <div class="dropdown-content">
                        <font size="2px"><a href="<?=base_url()?>profil/paylasimsil/<?=$profilpaylasim[0]->Id?>" onclick="return confirm('Silmek İstediğinizden Emin misiniz?');"><i class="glyphicon glyphicon-trash">&nbsp;Sil</i></a></font>
                        <font size="1px"><a href="<?=base_url()?>profil/paylasimsil/<?=$profilpaylasim[0]->Id?>" onclick="return confirm('Silmek İstediğinizden Emin misiniz?');"><i class="glyphicon glyphicon-pencil">&nbsp;Düzenle</i></a></font>
                        
                        
                        </div>
                      </div>
                      </div>
                    </div>
                      <div class="post-heading">
                      
                        <div class="pull-left image">
                        
                          <img src="<?=base_url()?>uploads/<?=$profilpaylasim[0]->uye_img;?>" class="img-circle avatar" alt="user profile image">
                        </div>
                        <div class="pull-left meta">
                          <div class="title h5">
                                                
                            <a href="<?=base_url()?>profil"><b><?=$profilpaylasim[0]->uye_adsoy?></b></a>
                        
                          yazdı.
                          </div>
                          <h6 class="text-muted time"><?=$profilpaylasim[0]->tarih?></h6>
                        </div>
                      </div> 
                      <div class="post-description"> 
                      <form action="<?=base_url()?>profil/paylasimguncelle1/<?=$profilpaylasim[0]->Id;?>/<?=$profilbilgi[0]->Id?>" method="post">
                      <textarea name="paylasim" rows="3"><?=$profilpaylasim[0]->paylasim?></textarea>
                        <p></p>
                        <?php       
                            if($profilpaylasim[0]->paylasimimg)
                              {
                          ?>
                            <div class="post-description "> 
                             <div class="thumbnail">
                              <a href="<?=base_url()?>uploads/<?=$profilpaylasim[0]->paylasimimg;?>" target="_blank">
                                <img  src="<?=base_url()?>uploads/<?=$profilpaylasim[0]->paylasimimg;?>" alt="Lights" style="width:300px;">
                               
                              </a>
                            </div>

                            </div>
                        <?php         
                          }?>
                          
                            <?php       
                            if($profilpaylasim[0]->video)
                              {
                            ?>
                            
                                <video width="640" height="480" controls>
                                  <source  src="<?=base_url()?>uploads/<?=$profilpaylasim[0]->video;?>" type="video/mp4">
                                  <source src="movie.ogg" type="video/ogg">
                                </video>
                    
                        <?php }?>     
                            <?php       
                            if($profilpaylasim[0]->link)
                              {
                            ?>
                                 <div class="thumbnail">
                                   <center><iframe  width="640" height="360" src="https://www.youtube.com/embed/<?=$rs->link?>" frameborder="0" allowfullscreen></iframe></center>
                                  </div>
                    
                        <?php }?>
                        
                      </div>
                     <div class="stats">
                       <br>
                       
                      
                        
                      </div>
                       
                    </div>   <p align="right"><input class="button special small" type="submit" name="guncelle" value="Güncelle"></p></form>
                  </div>
            </div>
            <hr color="Red"  >

         

  

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
      <script language="javascript" src="http://is.sitekodlari.com/yukaricik1.js"></script>
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
<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
</html>