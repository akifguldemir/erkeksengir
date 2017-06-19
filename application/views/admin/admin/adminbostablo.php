	<?php
if (!$this->session->login_giris)
{ 
	redirect(base_url()."admin/login");
}

?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Üyeler</h1>
			</div>
		</div><!--/.row-->
		
			<style type="text/css">
					.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
					.tg .tg-fefd{color:#000000;vertical-align:top}
					.tg .tg-yw4l{vertical-align:top}
			</style>
					<div class="container">                                                                                     
					  <div class="table-responsive">          
					  <table class="table">
					    <thead>
					      <tr>
					        <th>Id</th>
					        <th>Ad ve Soyad</th>
					        <th>E-mail</th>
					        <th>Telefon</th>
					        <th>Şifre</th>
					        <th>Düzenle</th>
					        <th>Sil</th>
					      </tr>
					    </thead>
					    <tbody>
						  
						  <?php
							foreach($veri as $rs)
							{
							?>
						  
								  <tr>
							        <td><?=$rs->Id?></td>
							        <td><?=$rs->adsoy?></td>
							    	<td><?=$rs->email?></td>
							        <td><?=$rs->telefon?></td>
							        <td><?=$rs->sifre?></td>
							        <td><a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?>">Düzenle</a></td>
							        <td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizden emin misiniz?');" >Sil</a></td>
							      </tr>
						  <?php
							}
						  ?>
						  
						  
						  
						 </tbody>
					  </table>
					  </div>
					</div>
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->