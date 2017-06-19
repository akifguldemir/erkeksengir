<!DOCTYPE HTML>
<!--
  Editorial by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
     <title><?=$veri[0]->baslik?></title>
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
     <script>
  function validateForm() {
    var payMetin = document.forms["myForm"]["yorum"].value;
    
 

    if (payMetin == "") {
        alert("Yorum Boş Olamaz !");
        return false;
    }
 
}
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
                
                
                 <header class="main"><br>
                    <h2><?=$veri[0]->baslik?><font size="2" color="#F56A6A"><div style="float: right;"><p><?=$veri[0]->tarih?></p></div></font></h2>
                  </header>


                  <span class="image main"> <img  src="<?=base_url()?>uploads/<?=$veri[0]->img?>" alt=""" /></span>

                  <p><?=$veri[0]->text?></p>
                </p>
                  <section>
                    <?php
            
                        foreach((array)$fitnessyorum as $rs)
                        {
                          
                    ?>
                      <?php       
                      if($this->session->userdata('logged_in'))
                        {
                       ?>
                
              
                <div class="col-sm-12">
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

                      <?php if($rs->uye_ID==$this->session->logged_in->Id) { ?>
                      <a href="<?=base_url()?>home/fitnessyorumsil/<?=$rs->Id?>/<?=$veri[0]->Id?>" onclick="return confirm('Silmek İstediğinizden Emin misiniz?');"><p><i class="glyphicon glyphicon-trash"></i></p></a>
                      <?php } ?>

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
                      <form onsubmit="return validateForm()" id="myForm" action="<?=base_url()?>home/fitnessyorumkaydet/<?=$veri[0]->Id?>" method="POST" >
                          
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
                    } else {
                  ?>
                    <font size="4" color="#F56A6A">Yorum yapmak için lütfen üye girişi yapınız !</font>
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