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
      <li><a  href="<?=base_url()?>home"><font color="white">Anasayfa</font></a></li>
      <li><a  href="<?=base_url()?>profil"><font color="white"><?=$profilhakkimda[0]->adsoy?></font></a></li>
      <li ><a href="<?=base_url()?>profil/arkadaslik"><font color="white"><span class="glyphicon glyphicon-user color">&nbsp;Arkadaşlar</span></font></a>
        
      </li>
      
      <li><a href="<?=base_url()?>profil/galeri"><font color="white"><span class="glyphicon glyphicon-picture color">&nbsp;Galeri</span></font></a></li>
     
    </ul>

    <form class="navbar-form navbar-left">
   
      <input size="66"  autocomplete="off" name="searchTags" id="searchTags" type="text" class="enjoy-css"  class="dropdown-toggle" data-toggle="dropdown" placeholder="Arkadaş ara">
         <ul class="dropdown-menu color1 "><div class="ScrollStyleArk">
         <ul id="menuFull">
         <?php foreach ($kisiler as $row) { ?>
         
          <a href="<?=base_url()?>profil/ybnprofil/<?=$row->Id?>"><li>            
             <div style="background-color: white; width: 500px; height:60px; ">
                 <div style="float: left;background-color: #F56A6A;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">
                 <?php if($row->img) { ?>
                   <img src="<?=base_url()?>uploads/<?=$row->img?>">
                 <?php } else { ?>
                    <img src="<?=base_url()?>uploads/standartpic.png">
                 <?php } ?>  
                 </div>
                 <br>&emsp;<font size="4"><?=$row->adsoy?></font>
             </div>            
          </li></a>
         
         <?php } ?>
    
        </ul> </div>
      </ul>
      
    </form>

    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=base_url()?>profil/mesajlar" target="blank"><span id="showMessage" class="glyphicon glyphicon-envelope color"></span></a></li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span id="shownotif" class="glyphicon glyphicon-bell color"></span></a>
        
        <ul class="dropdown-menu color ">
         <div class="ScrollStyleArk">
         
          <li id="showdata">
            
          </li>

        </div>
         
        </ul>
      </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-chevron-down color"></span></a>

        <ul class="dropdown-menu color ">
          <li><a href="<?=base_url()?>profil/profilhesapayar" target="blank" ><i class="glyphicon glyphicon-cog "></i>
              <font color="black">&emsp;Bilgileri Düzenle</font></a></li>
          <li><a href="<?=base_url()?>login/logout"><i class="glyphicon glyphicon-off"></i>&emsp;Çıkış</a>
          </li>
        </ul>
      </li>
      </ul>
  </div>
</nav>  
<div style="float: right;"><li id="shownotif"> </li></div>
 <div style="float: right;"><li id="showMessage"></li></div>
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title><?=$this->session->logged_in->adsoy?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
 <style type="text/css">
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


}
::-webkit-scrollbar {
    width: 15px;
    height: 15px;
}
::-webkit-scrollbar-corner {
    background-image: url(http://i.stack.imgur.com/FguQn.png?corner.png);
    background-repeat: no-repeat;
}
::-webkit-resizer {
    background-image: url(http://i.stack.imgur.com/aKKDY.png?resizer.png);
    background-repeat: no-repeat;
    background-position: bottom right;
}
::-webkit-scrollbar-button:start {
    display: none;
}
::-webkit-scrollbar-button:end {
    display: block;
}
::-webkit-scrollbar:horizontal {
    -webkit-border-image: url(http://i.stack.imgur.com/NQ2K6.png?horizontal-button.png) 0 2 0 2;
    border-color: transparent;
    border-width: 0 2px;
    background-image: url(http://i.stack.imgur.com/8xDbU.png?horizontal-button-background.png);
    background-repeat: repeat-x;
}
::-webkit-scrollbar:horizontal:corner-present {
    border-right-width: 0;
}
::-webkit-scrollbar-thumb:horizontal {
    -webkit-border-image: url(http://i.stack.imgur.com/YQRD7.png?horizontal-thumb.png) 0 15 0 15;
    border-color: transparent;
    border-width: 0 15px;
    min-width: 20px;
}
::-webkit-scrollbar-track-piece:horizontal:start {
    margin-left: 6px;
}
::-webkit-scrollbar-track-piece:horizontal:end {
    margin-right: -6px;
}
::-webkit-scrollbar-track-piece:horizontal:decrement {
    -webkit-border-image: url(http://i.stack.imgur.com/p9yMk.png?horizontal-track.png) 0 15 0 15;
    border-color: transparent;
    border-width: 0 0 0 15px;
}
::-webkit-scrollbar-track-piece:horizontal:increment {
    -webkit-border-image: url(http://i.stack.imgur.com/p9yMk.png?horizontal-track.png) 0 15 0 15;
    border-color: transparent;
    border-width: 0 15px 0 0;
}
::-webkit-scrollbar-button:horizontal {
    width: 21px;
    -webkit-border-image: url(http://i.stack.imgur.com/NQ2K6.png?horizontal-button.png) 0 2 0 2;
    border-color: transparent;
    border-width: 0 2px;
}
::-webkit-scrollbar-button:horizontal:decrement {
    background-image: url(http://i.stack.imgur.com/dGOKL.png?horizontal-decrement-arrow.png), url(http://i.stack.imgur.com/8xDbU.png?horizontal-button-background.png);
    background-repeat: no-repeat, repeat-x;
    background-position: 7px 4px, 0 0;
}
::-webkit-scrollbar-button:horizontal:decrement:active {
    -webkit-border-image: url(http://i.stack.imgur.com/gT5BM.png?horizontal-button-active.png) 0 2 0 2;
    background-image: url(http://i.stack.imgur.com/dGOKL.png?horizontal-decrement-arrow.png), url(http://i.stack.imgur.com/RDf8L.png?horizontal-button-background-active.png);
}
::-webkit-scrollbar-button:horizontal:increment {
    background-image: url(http://i.stack.imgur.com/5rJr5.png?horizontal-increment-arrow.png), url(http://i.stack.imgur.com/8xDbU.png?horizontal-button-background.png);
    background-repeat: no-repeat, repeat-x;
    width: 16px;
    border-left-width: 0;
    background-position: 3px 4px, 0 0;
}
::-webkit-scrollbar-button:horizontal:increment:active {
    -webkit-border-image: url(http://i.stack.imgur.com/gT5BM.png?horizontal-button-active.png) 0 2 0 2;
    background-image: url(http://i.stack.imgur.com/5rJr5.png?horizontal-increment-arrow.png), url(http://i.stack.imgur.com/RDf8L.png?horizontal-button-background-active.png);
}
::-webkit-scrollbar-button:horizontal:end:increment:corner-present {
    border-right-width: 0;
    width: 15px;
}
::-webkit-scrollbar:vertical {
    -webkit-border-image: url(http://i.stack.imgur.com/NdaTT.png?vertical-button.png) 2 0 2 0;
    border-color: transparent;
    border-width: 2px 0;
    background-image: url(http://i.stack.imgur.com/p7j9a.png?vertical-button-background.png);
    background-repeat: repeat-y;
}
::-webkit-scrollbar:vertical:corner-present {
    border-bottom-width: 0;
}
::-webkit-scrollbar-thumb:vertical {
    -webkit-border-image: url(http://i.stack.imgur.com/rPEsZ.png?vertical-thumb.png) 15 0 15 0;
    border-color: transparent;
    border-width: 15px 0;
    min-height: 20px;
}
::-webkit-scrollbar-track-piece:vertical:start {
    margin-top: 6px;
}
::-webkit-scrollbar-track-piece:vertical:end {
    margin-bottom: -6px;
}
::-webkit-scrollbar-track-piece:vertical:decrement {
    -webkit-border-image: url(http://i.stack.imgur.com/Rb6ru.png?vertical-track.png) 15 0 15 0;
    border-color: transparent;
    border-width: 15px 0 0 0;
}
::-webkit-scrollbar-track-piece:vertical:increment {
    -webkit-border-image: url(http://i.stack.imgur.com/Rb6ru.png?vertical-track.png) 15 0 15 0;
    border-color: transparent;
    border-width: 0 0 15px 0;
}
::-webkit-scrollbar-button:vertical {
    height: 21px;
    -webkit-border-image: url(http://i.stack.imgur.com/NdaTT.png?vertical-button.png) 2 0 2 0;
    border-color: transparent;
    border-width: 2px 0;
}
::-webkit-scrollbar-button:vertical:decrement {
    background-image: url(http://i.stack.imgur.com/KQvwk.png?vertical-decrement-arrow.png), url(http://i.stack.imgur.com/p7j9a.png?vertical-button-background.png);
    background-repeat: no-repeat, repeat-y;
    background-position: 4px 7px, 0 0;
}
::-webkit-scrollbar-button:vertical:decrement:active {
    -webkit-border-image: url(http://i.stack.imgur.com/uW3TL.png?vertical-button-active.png) 2 0 2 0;
    background-image: url(http://i.stack.imgur.com/KQvwk.png?vertical-decrement-arrow.png), url(http://i.stack.imgur.com/puDsH.png?vertical-button-background-active.png);
}
::-webkit-scrollbar-button:vertical:increment {
    background-image: url(http://i.stack.imgur.com/UjkVR.png?vertical-increment-arrow.png), url(http://i.stack.imgur.com/p7j9a.png?vertical-button-background.png);
    background-repeat: no-repeat, repeat-y;
    height: 16px;
    border-top-width: 0;
    background-position: 4px 5px, 0 0;
}
::-webkit-scrollbar-button:vertical:increment:active {
    -webkit-border-image: url(http://i.stack.imgur.com/uW3TL.png?vertical-button-active.png) 2 0 2 0;
    background-image: url(http://i.stack.imgur.com/UjkVR.png?vertical-increment-arrow.png), url(http://i.stack.imgur.com/puDsH.png?vertical-button-background-active.png);
}
::-webkit-scrollbar-button:vertical:end:increment:corner-present {
    border-bottom-width: 0;
    height: 15px;
}
::-webkit-scrollbar:disabled {
    background: red;
    -webkit-border-image: none;
    display: none;
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

.body {
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


    function bildirimgoster(){
      setInterval(function(){
      $.ajax({
        type: 'ajax',
        url: '<?=base_url()?>profil/bildirimgoster',
        async: false,
        dataType: 'json',
        success: function(data){
          var html= ' ';
          var i ;
          for(i=0; i<data.length; i++)
          {
            
               if( data[i].kimId !=  <?=$this->session->logged_in->Id?> )
               { 

                 
                    if(data[i].cesit=="payyorum") 
                    {
                        if( data[i].durum == 1){

                              html+='<a href="<?=base_url()?>profil/b1/'+data[i].paylasimId+'/'+data[i].Id+'" onclick="acil();" target=blank>'+'<li>'+          
                                 '<div style="background-color: white; width: 500px; height:60px; ">'+
                                     '<div style="float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font size="3">'+data[i].kimAd+' paylaşımınıza yorum yaptı.'+'<br>&emsp;<font size="1">'+data[i].tarih+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'</a>';
                         
                       }
                        else
                       {
                            html+='<a href="<?=base_url()?>profil/b1/'+data[i].paylasimId+'/'+data[i].Id+'" onclick="acil();" target=blank>'+'<li>'+            
                                 '<div style="background-color: #EFF1F2; width: 500px; height:60px; ">'+
                                     '<div style="float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font size="3">'+data[i].kimAd+' paylaşımınıza yorum yaptı.'+'<br>&emsp;<font size="1">'+data[i].tarih+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'</a>';
                            
                        }
                  }
                   

                  if(data[i].cesit=="galeriyorum") 
                    {
                        if( data[i].durum == 1){

                              html+='<a href="<?=base_url()?>profil/bgaleri/'+data[i].paylasimId+'/'+data[i].Id+'" onclick="acil();" target=blank>'+'<li>'+          
                                 '<div style="background-color: white; width: 500px; height:60px; ">'+
                                     '<div style="float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font size="3">'+data[i].kimAd+' fotoğrafınıza yorum yaptı.'+'<br>&emsp;<font size="1">'+data[i].tarih+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'</a>';
                         
                       }
                        else
                       {
                            html+='<a href="<?=base_url()?>profil/bgaleri/'+data[i].paylasimId+'/'+data[i].Id+'" onclick="acil();" target=blank>'+'<li>'+            
                                 '<div style="background-color: #EFF1F2; width: 500px; height:60px; ">'+
                                     '<div style="float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font size="3">'+data[i].kimAd+' fotoğrafınıza yorum yaptı.'+'<br>&emsp;<font size="1">'+data[i].tarih+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'</a>';
                            
                        }
                   }

                  if(data[i].cesit=="forum") 
                    {
                        if( data[i].durum == 1){

                              html+='<a href="<?=base_url()?>forum/'+data[i].link+'/'+data[i].paylasimId+'" onclick="acil();" target=blank>'+'<li>'+          
                                 '<div style="background-color: white; width: 500px; height:60px; ">'+
                                     '<div style="float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font size="3">'+data[i].kimAd+' sizi bir konuya davet etti.'+'<br>&emsp;<font size="1">'+data[i].tarih+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'</a>';
                         
                       }
                        else
                       {
                            html+='<a href="<?=base_url()?>forum/'+data[i].link+'/'+data[i].paylasimId+'" onclick="acil();" target=blank>'+'<li>'+            
                                 '<div style="background-color: #EFF1F2; width: 500px; height:60px; ">'+
                                     '<div style="float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font size="3">'+data[i].kimAd+' sizi bir konuya davet etti.'+'<br>&emsp;<font size="1">'+data[i].tarih+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'</a>';
                            
                        }
                   }
                   if(data[i].cesit=="takip") 
                    {
                        if( data[i].durum == 1){

                              html+='<a href="<?=base_url()?>profil/ybnprofil/'+data[i].kimId+'" onclick="acil();" target=blank>'+'<li>'+          
                                 '<div style="background-color: white; width: 500px; height:60px; ">'+
                                     '<div style="float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font size="3">'+data[i].kimAd+' sizi takip etti.'+'<br>&emsp;<font size="1">'+data[i].tarih+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'</a>';
                         
                       }
                        else
                       {
                            html+='<a href="<?=base_url()?>profil/ybnprofil/'+data[i].kimId+'" onclick="acil();" target=blank>'+'<li>'+            
                                 '<div style="background-color: #EFF1F2; width: 500px; height:60px; ">'+
                                     '<div style="float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font size="3">'+data[i].kimAd+' sizi takip etti.'+'<br>&emsp;<font size="1">'+data[i].tarih+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'</a>';
                            
                        }
                   } 
                   if(data[i].cesit=="begen") 
                    {
                        if( data[i].durum == 1){

                              html+='<a href="<?=base_url()?>profil/b1/'+data[i].paylasimId+'/'+data[i].Id+'" onclick="acil();" target=blank>'+'<li>'+          
                                 '<div style="background-color: white; width: 500px; height:60px; ">'+
                                     '<div style="float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font size="3">'+data[i].kimAd+' paylaşımınızı begendi.'+'<br>&emsp;<font size="1">'+data[i].tarih+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'</a>';
                         
                       }
                        else
                       {
                            html+='<a href="<?=base_url()?>profil/b1/'+data[i].paylasimId+'/'+data[i].Id+'" onclick="acil();" target=blank>'+'<li>'+            
                                 '<div style="background-color: #EFF1F2; width: 500px; height:60px; ">'+
                                     '<div style="float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font size="3">'+data[i].kimAd+' paylaşımınızı begendi.'+'<br>&emsp;<font size="1">'+data[i].tarih+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'</a>';
                            
                        }
                  }     


              }  


                
          }

          $('#showdata').html(html);


        },
        error: function(){
            alert('Bildirim Bulunmamaktadır.');

        }
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
<!--
  Editorial by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<?php 
                  
  foreach((array)$profilhakkimda as $rs)
    {
?>

  <head>
    <title>Haberler</title>
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
                
          
        
            <div class="profile-userpic">
            
              <a href="#" data-toggle="tooltip" title="Profil resmini değiştirmek için bilgileri düzenle sayfasına gidiniz!">
              <?php if($this->session->logged_in->img) { ?>
               <img src="<?=base_url()?>uploads/<?=$rs->img?>" class="img-responsive" alt=""></a>
              <?php } else { ?>
                 <img src="<?=base_url()?>uploads/standartpic.png" class="img-responsive" alt="" ></a>
              <?php } ?> 
              
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
        <hr>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div style="width: 32;height: 32;float: left;"> <img src="<?=base_url()?>uploads/info1.png"></div>
        <h3>Hakkında</h3>
        <div class="profile-usermenu">

        <?php if($profilhakkimda[0]->hakkinda) { ?>
          <p><?=$profilhakkimda[0]->hakkinda?></p>

         <?php } else { ?> 
          <p><a  href="<?=base_url()?>profil/profilhesapayar" target=blank><font ></font>Hakkınızda bölümünü düzenlemek için tıklayınız.</a></p>
         <?php } ?>
        </div>
        <!-- END MENU -->
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