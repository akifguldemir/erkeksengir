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
             alert('Lütfen soldaki menüden mesajlasmak istediðiniz arkadaþýnýzý seçiniz.');

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
                                     '&emsp;'+'<font color="black" size="2">'+data[i].kimad+' den Mesajýnýz var.'+'<br>&emsp;<font color="black" size="1">'+data[i].mesaj+'</font></font>'+
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
                                     '&emsp;'+'<font color="black" size="2">'+data[i].kimad+' den Mesajýnýz var.'+'<br>&emsp;<font color="black" size="1">'+data[i].mesaj+'</font></font>'+
                                 '</div>'+            
                              '</li>'+'<input type="hidden" name="cekId" value="'+data[i].kimId+'">'+'</div>'+'</form>';
                              $('#mesbilekle').html('');

                      }



          }
          $('#showmes').html(html);

        },
        error: function(){
             alert('Lütfen soldaki menüden mesajlasmak istediðiniz arkadaþýnýzý seçiniz.');

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
      if(mesaj.val()==''){
        address.parent().parent().addClass('has-error');
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
            alert('Mesaj gönderilirken bir hata oluþtu !');
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

    // keyup ile inputa herhangi bir deðer girilince fonksiyonu tetikliyoruz
    $("#searchTags").keyup(function(){

        // inputa yazýlan deðeri alýyoruz
        var value = $("#searchTags").val();

        // eðer input içinde deðer yoksa yani boþsa tüm menüyü çýkartýyoruz
        if(value.length==0){
        
            $("#menuFull li").show();

        // arama yapýlmýþsa ilk olarak tüm menüyü gizliyoruz ve girilen deðer ile eþleþen kýsmý çýkarýyoruz
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

    // keyup ile inputa herhangi bir deðer girilince fonksiyonu tetikliyoruz
    $("#searchTags1").keyup(function(){

        // inputa yazýlan deðeri alýyoruz
        var value = $("#searchTags1").val();

        // eðer input içinde deðer yoksa yani boþsa tüm menüyü çýkartýyoruz
        if(value.length==0){
        
            $("#menuFull1 li").show();

        // arama yapýlmýþsa ilk olarak tüm menüyü gizliyoruz ve girilen deðer ile eþleþen kýsmý çýkarýyoruz
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