<!DOCTYPE html>
<html lang="en">
 <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">
<head>
	<meta charset="utf-8">
	<title>Akif Güldemir</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?=base_url()?>assets/adminyeni/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?=base_url()?>assets/adminyeni/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo"> <span>Hoşgeldin</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
		<form action="<?=base_url()?>admin/login/login_ol" method="POST" >
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Email</label>
			<br/>
			<input type="email" name="email" id="username">
			<br/>
			<label for="password">Şifre</label>
			<br/><?=$this->session->flashdata("login_hata")?>
			<input type="password" name="password" id="password">
			<br/>
			<button type="submit">Giriş yap</button>
			<br/>
		</form>	
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>