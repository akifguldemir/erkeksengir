<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.containee404 { background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8yOS8xMiKqq3kAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzVxteM2AAABHklEQVRIib2Vyw6EIAxFW5idr///Qx9sfG3pLEyJ3tAwi5EmBqRo7vHawiEEERHS6x7MTMxMVv6+z3tPMUYSkfTM/R0fEaG2bbMv+Gc4nZzn+dN4HAcREa3r+hi3bcuu68jLskhVIlW073tWaYlQ9+F9IpqmSfq+fwskhdO/AwmUTJXrOuaRQNeRkOd5lq7rXmS5InmERKoER/QMvUAPlZDHcZRhGN4CSeGY+aHMqgcks5RrHv/eeh455x5KrMq2yHQdibDO6ncG/KZWL7M8xDyS1/MIO0NJqdULLS81X6/X6aR0nqBSJcPeZnlZrzN477NKURn2Nus8sjzmEII0TfMiyxUuxphVWjpJkbx0btUnshRihVv70Bv8ItXq6Asoi/ZiCbU6YgAAAABJRU5ErkJggg==);}
.error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}
.error-actions .btn { margin-right:10px; }
.a:hover{color: black;}
</style>
 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="<?=base_url()?>assets/haberdetay/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/haberdetay/js/skel.min.js"></script>
<script src="<?=base_url()?>assets/haberdetay/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?=base_url()?>assets/haberdetay/js/main.js"></script>
<link rel="stylesheet" href="<?=base_url()?>assets/haberdetay/css/main.css" />
<script>
	function validateForm() {
    var adSoyad = document.forms["myForm"]["adsoy"].value;
    var email = document.forms["myForm"]["email"].value;
    var mesaj = document.forms["myForm"]["mesaj"].value;
   

    if (adSoyad == "") {
        alert("Ad ve Soyad boş bırakılamaz.");
        return false;
    }
	if (email == "") {
        alert("E-mail boş bırakılamaz.");
        return false;
    }
	if (mesaj == "") {
        alert("Mesaj boş bırakılamaz.");
        return false;
    }
  

}
	</script>


<body>

<div id="container404">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h2>
                <img src="http://i.hizliresim.com/8MOr0A.png"><br><br>
                    404 Sayfa Bulunamadı</h2>
                <div class="error-details">
                    Üzgünüz aradığınız sayfa bulunamadı. Aşağıdaki buton'a basarak herşeye yeniden başlayabilirsiniz.
                </div>
                <div class="error-actions">
                    <a href="<?=base_url()?>home" style="background-color: #F56A6A;border-color: #F56A6A;" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Ana Sayfa </a><a data-toggle="modal" data-target="#myModal" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> İletişim'e Geç </a>

                        <div class="modal fade" id="myModal" role="dialog">
						    <div class="modal-dialog">
						    <form name="myForm"  onsubmit="return validateForm()" action="<?=base_url()?>profil/bizeyazin" method="post">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Hatayı lütfen bildirin.</h4>
						        </div>
						        <div class="modal-body">
						          <div class="form-group">
								      <label for="usr">Ad ve Soyad :</label>
								      <input type="text" name="adsoy" class="form-control" id="usr">
								    </div>
								    <div class="form-group">
								      <label for="pwd">E-mail :</label>
								      <input type="email" name="email" class="form-control" id="pwd">
								    </div>
								    <div class="form-group">
									  <label for="comment">Mesaj :</label>
									  <textarea name="mesaj" rows="3" id="comment"></textarea>
									</div>
									</form>
						        </div>
						        <div class="modal-footer">
						          <button type="submit" class="btn special small" >Gönder</button>
						          <button type="button" class="btn special small" data-dismiss="modal">Kapat</button>
						        </div>
						      </div>
						      </form>
						    </div>
						  </div>


                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>