<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Adminler</div>
					<div class="panel-body">
						<table width="450" data-toggle="table" data-url="<?=base_url()?>assets/admin/tables/data2.json" >
						    <thead>
						    <tr>
						        <th data-field="id" data-align="right">ID</th>
						        <th data-field="name">Kullanıcı adı</th>
								<th data-field="name">Şifre</th>
								<th data-field="name">Full Ad</th>
								<th data-field="name">E mail</th>
								
						        
						    </tr>
						    </thead>
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