	<script>
				function validateForm() {
			    var adSoyad = document.forms["myForm"]["adsoy"].value;
			    var email = document.forms["myForm"]["email"].value;
			    var telefon = document.forms["myForm"]["telefon"].value;
			    var sifre = document.forms["myForm"]["sifre"].value;
			    var tsifre = document.forms["myForm"]["tsifre"].value;

			    if (adSoyad == "") {
			        alert("Ad ve Soyad boş bırakılamaz !");
			        return false;
			    }
				if (email == "") {
			        alert("E-mail boş bırakılamaz !");
			        return false;
			    }
				if (telefon == "") {
			        alert("Telefon adı boş bırakılamaz !");
			        return false;
			    }
			    if (tsifre == "") {
			        alert("Şifre boş bırakılamaz !");
			        return false;
			    }
				

				if (sifre != tsifre) {
			        alert("Şifreler eşleşmedi !");
			        return false;
			    }
			}
		</script>
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url()?>admin/uyeler"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Admin Ekleme Sayfası</h1>
			</div>
		</div><!--/.row-->
		
			<form name="myForm" onsubmit="return validateForm()" action="<?=base_url()?>admin/uyeler/kaydet" method="POST" >
			Ad ve Soyad : <input type="text" class="form-control" placeholder="Ad ve Soyad giriniz" name="adsoy" /><br>
			E-mail : <input type="email" class="form-control" placeholder="E-mail giriniz" name="email" /><br>
			Telefon : <input type="text" class="form-control" placeholder="Telefon giriniz" name="telefon" /><br>
			Şifre : <input type="text" class="form-control" placeholder="Şifre giriniz" name="sifre" /><br>
			Şifre-Tekrar : <input type="text" class="form-control" value="" placeholder="Şifrenizi tekrar giriniz" name="tsifre" /><br>
			   
			   
					
			<input type="submit" class="btn btn-primary" value="KAYDET" />
			</form>
			
			
								
			
		
	</div>	<!--/.main-->