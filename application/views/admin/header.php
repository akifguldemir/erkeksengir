<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Akif Güldemir</title>

<link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/admin/css/datepicker3.css" rel="stylesheet">
<link href="<?=base_url()?>assets/admin/css/styles.css" rel="stylesheet">
<link href="<?=base_url()?>assets/admin/css/bootstrap-table.css" rel="stylesheet">
  <link rel="Shortcut Icon" href="<?=base_url()?>uploads/tie.ico" type="image/x-icon">

<!--Icons-->
<script src="<?=base_url()?>assets/admin/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="<?=base_url()?>assets/admin/js/html5shiv.js"></script>
<script src="<?=base_url()?>assets/admin/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Erkeksen Gir </span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						
						 <?php
							foreach($adminbilgi as $rs)
							{
							?>
						
							<img src="<?=base_url()?>uploads/<?=$rs->img?>" width="30" height="30" >&emsp;<?=$rs->adsoy?><span class="caret"></span></a>
						 <?php
							}
						  ?>
						
						
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="<?=base_url()?>admin/login/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Çıkış</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>