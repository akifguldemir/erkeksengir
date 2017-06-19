	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url()?>admin/diger"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Spor</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Spor Resim Ekleme  Sayfası</h1>
			</div>
		</div><!--/.row-->
		
				
		
			<form action="<?=base_url()?>admin/diger/resim_upload/<?=$Id?>" method="post" enctype="multipart/form-data">
				Resmi seçiniz:
				<input type="file" name="dosyaadi" id="dosyaadi"> <br>
				<input type="submit" value="Resim yükle" name="submit">
			</form>
			
								
			
		
	</div>	<!--/.main-->