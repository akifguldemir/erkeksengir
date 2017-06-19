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
				<h1 class="page-header">Haberler Liste</h1>
			</div>
		</div><!--/.row-->
		
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Haberler</div>
					<div class="panel-body">
						<table width="450" data-toggle="table" data-url="<?=base_url()?>assets/admin/tables/data2.json" >
						    <thead>
						    <tr>
						        <th data-field="id" data-align="right">ID</th>
						        <th data-field="name">Baslik</th>
								<th data-field="name">Keywords</th>
								<th data-field="name">Text</th>
								<th data-field="name">Img</th>
								<th data-field="name">Duzenle</th>
								<th data-field="name">Sil</th>
								
						        
						    </tr>
						    </thead>
							<?php
							foreach($veri as $rs)
							{
							?>
							
							<tr>
								<td><?=$rs->Id?></td>
								<td><?=$rs->baslik?></td>
								<td><?=$rs->keywords?></td>
								<td><?=$rs->text?></td>
								<td>
									<img src="<?=base_url()?>/uploads/<?=$rs->img?>" height="40 width="40">
									<a href="<?=base_url()?>admin/haberler/resimekle/<?=$rs->Id?>">Resim Ekle</a></td>
								<td><a href="<?=base_url()?>admin/haberler/duzenle/<?=$rs->Id?>">Düzenle</a></td>
								<td><a href="<?=base_url()?>admin/haberler/sil/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizden emin misiniz?');" >Sil</a></td>
								
							</tr>	
							<?php
							}
							?>
							
							
						</table>
					</div>
				</div>
			</div>
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->