<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
  function MesGit(Id){

      $("#myForm"+Id).submit();
      
}
</script>
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Mesajlar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
  
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

.panel-white  .panel-footer {
  background-color: #fff;
  border-color: #ddd;
}

.post .post-heading {
  height: 95px;
  padding: 20px 15px;
  width:100px;
  
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
.alert {
    padding: 20px;
    background-color:#F56A6A;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}

body {
  padding-top: 0;
  font-size: 12px;
  color: #777;
  background: #f9f9f9;
  font-family: 'Open Sans',sans-serif;
  margin-top:20px;
}

.bg-white {
  background-color: #fff;

}
.bg-white1 {
  background-color: #F9F9F9;

}
.friend-list {
  list-style: none;
margin-left: -40px;
}

.friend-list li {
  border-bottom: 1px solid #eee;
}

.friend-list li a img {
  float: left;
  width: 45px;
  height: 45px;
  margin-right: 0px;
}

 .friend-list li a {
  position: relative;
  display: block;
  padding: 10px;
  transition: all .2s ease;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
}

.friend-list li.active a {
  background-color: #F56A6A;
}

.friend-list li a .friend-name, 
.friend-list li a .friend-name:hover {
  color: #777;
}
/* DivTable.com */
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
.friend-list li a .last-message {
  width: 65%;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

.friend-list li a .time {
  position: absolute;
  top: 10px;
  right: 8px;
}

small, .small {
  font-size: 85%;
}

.friend-list li a .chat-alert {
  position: absolute;
  right: 8px;
  top: 27px;
  font-size: 10px;
  padding: 3px 5px;
}

.chat-message {
  padding: 60px 20px 115px;
}

.chat {
    list-style: none;
    margin: 0;
}

.chat-message{
    background: #f9f9f9;  
}

.mesres
 {
  width: 45px;
  height: 45px;
  border-radius: 50em;
  -moz-border-radius: 50em;
  -webkit-border-radius: 50em;
}
.mesajResim{
  width: 300px;
  height: auto;
}
img {
  max-width: 100%;
}

.chat-body {
  padding-bottom: 20px;
}

.chat li.left .chat-body {
  margin-left: 70px;
  background-color: #fff;
}

.chat li .chat-body {
  position: relative;
  font-size: 11px;
  padding: 10px;
  border: 1px solid #f1f5fc;
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

.chat li .chat-body .header {
  padding-bottom: 5px;
  border-bottom: 1px solid #f1f5fc;
}

.chat li .chat-body p {
  margin: 0;
}

.chat li.left .chat-body:before {
  position: absolute;
  top: 10px;
  left: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-left: 1px solid #f1f5fc;
  content: '';
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
}

.chat li.right .chat-body:before {
  position: absolute;
  top: 10px;
  right: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-right: 1px solid #f1f5fc;
  content: '';
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}

.divyanson{
-webkit-transition: background-color 1s ease-in-out; /* Chrome ve Safari */
-moz-transition: background-color 1s ease-in-out; /* Mozilla */
-o-transition: background-color 1s ease-in-out; /* Opera */
transition: background-color 1s ease-in-out; /* Standart CSS3 Kodu */
background-color:#ffffff; /* varsayilan arkaplan renk */
}

.divyanson:hover{
-webkit-transition: background-color 0s ease-in-out; /* Chrome ve Safari */
-moz-transition: background-color 0s ease-in-out; /* Mozilla */
-o-transition: background-color 0s ease-in-out; /* Opera */
transition: background-color 0s ease-in-out; /* Standart CSS3 Kodu */
background-color:#F56A6A; /* üzerine gelince değişecek olan arkaplan renk */
}
.chat li {
  margin: 15px 0;
}

.chat li.right .chat-body {
  margin-right: 70px;
  background-color: #fff;
}

.chat-box {
  position: fixed;
  bottom: 0;
  left: 527px;
  right: 0;
  padding: 15px;
  transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
}

.primary-font {
  color: #3c8dbc;
}

a:hover, a:active, a:focus {
  text-decoration: none;
  outline: 0;
}
.text{
  width:850px;

}
.ScrollStyle
{
    max-height: 440px;
    overflow-y: scroll;
}
.ScrollStyleArk
{
    max-height: 440px;
    overflow-y: scroll;
}
.clearfix{

  margin-left: 15px; 
}
.bilboy{
    width: 40px;
    height: 40px;
  }
  .boyut{
    width: 352px;
  }
  .ddis
  {
    background-color: white; width: 300px; height:60px;
  }
  .dic{
    float: left;background-color: red;max-height:50px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 2px;
  }
  .gray{
    background-color: gray;
  }
.profres{
  border-radius: 40px;
}
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
    <title>Mesajlar</title>

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
                  <a href="<?=base_url()?>profil" class="logo"><button class="button special small">Profil</button></a>
                  <ul class="icons">
                    <div style="float: right;"><li id="shownotif"> </li></div>
                    <!--<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>-->
                  </ul>
                </header>

              <!-- Banner -->
                
              <!-- Section -->
                <div class="container">
    <div class="row profile">
  
    <div class="col-md-9">
         <div class="profile-content">
            
      
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippet">
    <div class="row">
  
    <div class="col-md-4 bg-white ">
            <div class=" row border-bottom padding-sm" style="height: 40px;">
            
            </div>    
            <!-- =============================================================== -->
            <!-- member list -->
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">Mesajlar</a></li>
    <li><a data-toggle="tab" href="#menu2">Kişiler <p id="mesbilekle"></p> </a></li>
    
  </ul>

  <div class="tab-content">
  
    <div id="menu1" class="tab-pane fade in active">
        <div id="menu1" class="tab-pane fade in active boyut">
          
            <div class="ScrollStyleArk">
                      <ul class="friend-list">
                            
                             <li id="showmes" >
                               
                             </li>


                                    
                         
                      </ul>
            </div>
     


        </div>


    </div> 
     <div id="menu2" class="tab-pane fade boyut">
      
       <div class="ScrollStyleArk">
        <input type="text" autocomplete="off" name="searchTags1" id="searchTags1" placeholder="Kişilerde ara" />
                  <ul class="friend-list">
                  <ul id="menuFull1">

                   <?php foreach ($ark as $rs) { ?>
                      
                      <form id="myForm<?=$rs->kimiId?>" action="<?=base_url()?>profil/CekIdKaydet" method="post"><div  onclick="MesGit(<?=$rs->kimiId?>);">
                            <?php if($kisi[0]->cekId==$rs->kimiId) { ?>
                              <li class="gray">          
                                 <div style="background-color: #F5F6F7; width: 330px; height:60px; ">
                             <?php } else { ?>     
                                 <li>          
                                 <div style="background-color: white; width: 330px; height:60px; ">
                             <?php } ?> 


                                     <div style="float: left;background-color:white: red;max-height:60px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 4px; " class="myDiv">
                                     <img src="<?=base_url()?>uploads/<?=$rs->kimiimg?>">
                                     </div>
                                     &emsp;<font color="black" size="2">


                                     <?=$rs->kimiad?>
                                    

                                     <br>&emsp;<font size="1"><?=$rs->tarih?></font></font><input type="hidden" name="cekId" value="<?=$rs->kimiId?>">
                                 </div>           
                              </li><br>
                              
                           </div>     
                        </form> 
                       

                    <?php } ?> 

                   </ul>              
                  </ul>
        </div>

                             














    </div>
     
  </div>
</div>
   




       
    </div>
 
  
        
        <!--=========================================================-->
        <!-- selected chat -->
      &emsp;&nbsp;&nbsp;<div style="width: 90px;height: auto;"><img class="profres" src="<?=base_url()?>uploads/<?=$kimlemesaj[0]->img?>" ></div> <h3><a href="<?=base_url()?>profil/ybnprofil/<?=$kimlemesaj[0]->Id?>"><font style="line-height: 70px;"><p><?=$kimlemesaj[0]->adsoy?></p></a> </h3></font>
<div style="float: right;"><form onsubmit="return validateForm1()" id="myForm1" action="<?=base_url()?>profil/mesajkaydetresim"  method="post" enctype="multipart/form-data">
  <div style="float: right;">
  <div class="divTable" style="width: 200px;" >
  <div class="divTableBody">
  <div class="divTableRow">
  <div class="divTableCell"><label for="dosyaadi"><font color="#F56A6A">Resim</font></label>
                       </div>
  <div class="divTableCell"> <button type="submit" class="button special small">Resmi Gönder</button></div>
  </div>
  </div>
  </div> <input style="visibility:hidden;" type="file" name="dosyaadi"  id="dosyaadi"  ></div>
</form></div>

      <div class="col-md-8 bg-white ">
      <div class="ScrollStyle">
            <div class="chat-message">
                <ul id='showdata' class="chat">
      
        
                </ul>

            </div>
    </div>
            <div class="chat-box bg-white1">


              <div class="input-group">   


                 <form action=""  id="myForm"  method="post" >  
                      <p align="right"><input style="display: none;" class="button special small" id="btnSave" type="submit" value='Gönder'></p>
                      <div class="col-md-9">
                      
                     
               
                      <textarea class="text" name="mesaj" rows="1" id="enter"  placeholder="Mesajınızı buraya yazınız."></textarea>  </div>     
                      
                                
                 </form>     

              </div><!-- /input-group --> 
            </div>            
    </div>        
  
</div>
     
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
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(function(){
          masajlarigoster();
          solmasajlarigoster();

    function masajlarigoster(){
      setInterval(function(){
      $.ajax({
        type: 'ajax',
        url: '<?=base_url()?>profil/masajlarigoster',
        async: false,
        dataType: 'json',
        success: function(data){
          var html= ' ';
          var i ;
          for(i=0; i<data.length; i++)
          {
            
             if ( (data[i].kimId == <?=$cek[0]->cekId?> && data[i].kimeId ==  <?=$this->session->logged_in->Id?>) || (data[i].kimeId == <?=$cek[0]->cekId?> && data[i].kimId ==  <?=$this->session->logged_in->Id?>  ) )
             {

                  if(data[i].kimId == <?=$cek[0]->cekId?> && data[i].kimeId ==  <?=$this->session->logged_in->Id?> )
                  {

                      if(data[i].img)
                            {
                                   html +='<li class="left clearfix">'+
                              '<span class="chat-img pull-left">'+
                                '<img class="mesres" src="<?=base_url()?>uploads/'+data[i].kimimg+'" alt="User Avatar">'+
                              '</span>'+
                              '<div class="chat-body clearfix">'+
                                '<div class="header">'+
                                  '<strong class="primary-font">'+data[i].kimad+'</strong>'+
                                  '<small class="pull-right text-muted"><i class="fa fa-clock-o"></i>'+data[i].tarih+'</small>'+
                                '</div>'+'<br>'+'<div class="">'+
                                  '<a href="<?=base_url()?>uploads/'+data[i].img+'" target="_blank">'+
                                     '<center>'+'<img class="mesajResim" src="<?=base_url()?>uploads/'+data[i].img+'" >'+'<center>'+
                                     '</div>'+'</a>'+
                                '<p>'
                                +
                                '</p>'+
                              '</div>'+
                            '</li>'; 
                            }
                            else{
                                 html +='<li class="left clearfix">'+
                              '<span class="chat-img pull-left">'+
                                '<img class="mesres" src="<?=base_url()?>uploads/'+data[i].kimimg+'" alt="User Avatar">'+
                              '</span>'+
                              '<div class="chat-body clearfix">'+
                                '<div class="header">'+
                                  '<strong class="primary-font">'+data[i].kimad+'</strong>'+
                                  '<small class="pull-right text-muted"><i class="fa fa-clock-o"></i>'+data[i].tarih+'</small>'+
                                '</div>'+
                                '<p>'
                                  +data[i].mesaj+
                                '</p>'+
                              '</div>'+
                            '</li>'; 

                            }

                      
                  }
                  else{

                         if(data[i].durum==1)
                          {
                             if(data[i].img)
                            {
                                   html +='<li class="right clearfix">'+
                              '<span class="chat-img pull-right">'+
                                '<img class="mesres" src="<?=base_url()?>uploads/'+data[i].kimimg+'" alt="User Avatar">'+
                              '</span>'+
                              '<div class="chat-body clearfix">'+
                                '<div class="header">'+
                                  '<strong class="primary-font">'+data[i].kimad+'</strong>'+
                                  '<small class="pull-right text-muted">okundu&emsp;<i class="fa fa-clock-o"></i>'+data[i].tarih+'</small>'+
                                '</div>'+'<br>'+'<div class="">'+
                                  '<a href="<?=base_url()?>uploads/'+data[i].img+'" target="_blank">'+
                                     '<center>'+'<img class="mesajResim" src="<?=base_url()?>uploads/'+data[i].img+'" >'+'<center>'+
                                     '</div>'+'</a>'+
                                '<p>'
                                +
                                '</p>'+
                              '</div>'+
                            '</li>'; 
                            }
                            else{
                                 html +='<li class="right clearfix">'+
                              '<span class="chat-img pull-right">'+
                                '<img class="mesres" src="<?=base_url()?>uploads/'+data[i].kimimg+'" alt="User Avatar">'+
                              '</span>'+
                              '<div class="chat-body clearfix">'+
                                '<div class="header">'+
                                  '<strong class="primary-font">'+data[i].kimad+'</strong>'+
                                  '<small class="pull-right text-muted">okundu&emsp;<i class="fa fa-clock-o"></i>'+data[i].tarih+'</small>'+
                                '</div>'+
                                '<p>'
                                  +data[i].mesaj+
                                '</p>'+
                              '</div>'+
                            '</li>'; 

                            }
                          }
                         else
                          {
                            if(data[i].img)
                            {
                                   html +='<li class="right clearfix">'+
                              '<span class="chat-img pull-right">'+
                                '<img class="mesres" src="<?=base_url()?>uploads/'+data[i].kimimg+'" alt="User Avatar">'+
                              '</span>'+
                              '<div class="chat-body clearfix">'+
                                '<div class="header">'+
                                  '<strong class="primary-font">'+data[i].kimad+'</strong>'+
                                  '<small class="pull-right text-muted"><i class="fa fa-clock-o"></i>'+data[i].tarih+'</small>'+
                                '</div>'+'<br>'+'<div class="">'+
                                  '<a href="<?=base_url()?>uploads/'+data[i].img+'" target="_blank">'+
                                     '<center>'+'<img class="mesajResim" src="<?=base_url()?>uploads/'+data[i].img+'" >'+'<center>'+
                                     '</div>'+'</a>'+
                                '<p>'
                                +
                                '</p>'+
                              '</div>'+
                            '</li>'; 
                            }
                            else{
                                 html +='<li class="right clearfix">'+
                              '<span class="chat-img pull-right">'+
                                '<img class="mesres" src="<?=base_url()?>uploads/'+data[i].kimimg+'" alt="User Avatar">'+
                              '</span>'+
                              '<div class="chat-body clearfix">'+
                                '<div class="header">'+
                                  '<strong class="primary-font">'+data[i].kimad+'</strong>'+
                                  '<small class="pull-right text-muted"><i class="fa fa-clock-o"></i>'+data[i].tarih+'</small>'+
                                '</div>'+
                                '<p>'
                                  +data[i].mesaj+
                                '</p>'+
                              '</div>'+
                            '</li>'; 

                            }
                          }

                     }

                  }
         
          }
          $('#showdata').html(html);

        },
        error: function(){
             alert('Lütfen soldaki menüden mesajlasmak istediğiniz arkadaşınızı seçiniz.');

        }
      });
      }, 1000); 
    }

    function solmasajlarigoster(){
      setInterval(function(){
      $.ajax({
        type: 'ajax',
        url: '<?=base_url()?>profil/solmasajlarigoster',
        async: false,
        dataType: 'json',
        success: function(data){
          var html= ' ';
          var i ;
          for(i=0; i<data.length; i++)
          {
            
                              

                    if(data[i].durum == 0)
                      {

                        html+='<form action="<?=base_url()?>profil/CekIdKaydet" method="post">'+'<div class="divyanson" onclick="MesGit('+data[i].kimId+');">'+'<li class="gray">'+          
                                 '<div style="background-color: #F5F6F7; width: 330px; height:60px; ">'+
                                     '<div style="float: left;background-color-white: red;max-height:60px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 4px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font color="black" size="2">'+data[i].kimad+' den Mesajınız var.'+'<br>&emsp;<font color="black" size="1">'+data[i].mesaj+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'<input type="hidden" name="cekId" value="'+data[i].kimId+'">'+'</div>'+'</form>';
                              $('#mesbilekle').html('?');

                      }
                    else
                      {
                              html+='<form action="<?=base_url()?>profil/CekIdKaydet" method="post">'+'<div class="divyanson" onclick="MesGit('+data[i].kimId+');">'+'<li >'+          
                                 '<div style="background-color: white; width: 330px; height:60px; ">'+
                                     '<div style="float: left;background-color-white: red;max-height:60px;width: 50px;margin-top:5px;margin-bottom: 5px;margin-left: 5px; border-radius: 4px; ">'+
                                     '<img src="<?=base_url()?>uploads/'+data[i].kimimg+'">'+
                                     '</div>'+
                                     '&emsp;'+'<font color="black" size="2">'+data[i].kimad+' den Mesajınız var.'+'<br>&emsp;<font color="black" size="1">'+data[i].mesaj+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'<input type="hidden" name="cekId" value="'+data[i].kimId+'">'+'</div>'+'</form>';
                              $('#mesbilekle').html('');

                      }



          }
          $('#showmes').html(html);

        },
        error: function(){
             alert('Lütfen soldaki menüden mesajlasmak istediğiniz arkadaşınızı seçiniz.');

        }
      });
      }, 1000); 
    }



    $('form .clearfix').on({
        click: function (event) {
            event.preventDefault();
            $(this).closest('form').submit();
        }
    });

 $('form .git').on({
        click: function (event) {
            event.preventDefault();
            $(this).closest('form').submit();
        }
    });


  $("#tik").click(function(){
      

       $("#myForm1").submit();


    });








     $("#enter").keyup(function(event){
            if(event.keyCode == 13){
                $("#btnSave").click();
            }
        });


    $('#btnSave').click(function(){
      var url = " <?=base_url()?>profil/mesajkaydet/<?=$kisi[0]->cekId?> ";
      var data = $('#myForm').serialize();
      //validate form
      var mesaj = $('textarea[name=mesaj]');
      var result = '';
      if(mesaj.val()==undefined){
          alert('hata');
      }else{
        mesaj.parent().parent().removeClass('has-error');
        result +='1';
      }

      if(result=='1'){
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: url,
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
          

                $('textarea').val('');
                showAllEmployee();

            
           },
          error: function(){
            alert('Bişeyler Yaz !');
          }
        });
      }
    });


    });

  </script>
  <script type="text/javascript">
    $(function(){
      bildirimgeldi();
  


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
        <script type="text/javascript">


$(document).ready(function () {

    // keyup ile inputa herhangi bir değer girilince fonksiyonu tetikliyoruz
    $("#searchTags1").keyup(function(){

        // inputa yazılan değeri alıyoruz
        var value = $("#searchTags1").val();

        // eğer input içinde değer yoksa yani boşsa tüm menüyü çıkartıyoruz
        if(value.length==0){
        
            $("#menuFull1 li").show();

        // arama yapılmışsa ilk olarak tüm menüyü gizliyoruz ve girilen değer ile eşleşen kısmı çıkarıyoruz
        }else{

            $("#menuFull1 li").hide();
            $("#menuFull1 li:contains("+value+")").show();

        }
              jQuery.expr[':'].contains = function(a, i, m) {
               return jQuery(a).text().toUpperCase()
                   .indexOf(m[3].toUpperCase()) >= 0;
};

    });

});
    </script> 
</html>