	<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url()?>admin/voleybol"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Voleybol</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Voleybol Düzenleme Sayfası</h1>
			</div>
		</div><!--/.row-->
		
			<form action="<?=base_url()?>admin/voleybol/guncelle/<?=$veri[0]->Id?>" method="POST" >
			Başlık : <input type="text" value="<?=$veri[0]->baslik?>" class="form-control" placeholder="Başlık Giriniz" name="baslik" /><br>
			Keywords : <input type="text" value="<?=$veri[0]->keywords?>" class="form-control" placeholder="Keywords giriniz" name="keywords" /><br>
			Açıklama : <input type="text" value="<?=$veri[0]->aciklama?>" class="form-control" placeholder="Açıklama giriniz(En fazla 88 karakter !)" name="keywords" /><br>
			Text :   <textarea name="text" class="form-control" rows="3"><?=$veri[0]->text?></textarea>
			   
			   <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'text' );
				</script>
					
			<input type="submit" class="btn btn-primary" value="KAYDET" />
			</form>
			
								
			
		
	</div>	<!--/.main-->