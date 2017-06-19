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
				<?php if ($this->session->flashdata("sonuc")) {?>
                  
                    <div class="alert alert-info alert-dismissable fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong></strong> <?=$this->session->flashdata("sonuc")?>
                    </div>
  				      <?php } ?>
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
					        <th>Üye Id</th>
					        <th>Ip Adres</th>
					        <th>Ad ve Soyad</th>
					        <th>E-mail</th>
					        <th>Telefon</th>
					        <th>Kullanıcı adı</th>
					        <th>Meslek</th>
					        <th>Doğum tarihi</th>
					        <th>Hakkında</th>
					        <th>Resim</th>
					        <th>Askıya al</th>
					        <th>Sil</th>
					      </tr>
					    </thead>
					    <tbody>
						  
						  <?php
							foreach($Siteuyeler as $rs)
							{
							?>
						  
								  <tr>
							        <td><?=$rs->Id?></td>
							        <td><?=$rs->ip?></td>
							        <td><?=$rs->adsoy?></td>
							    	<td><?=$rs->email?></td>
							        <td><?=$rs->telefon?></td>
							        <td><?=$rs->kullaniciadi?></td>
							        <td><?=$rs->meslek?></td>
							        <td><?=$rs->dogumtarihi?></td>
							        <td><a data-toggle="modal" data-target="#myModal1<?=$rs->Id?>">Hakkında</a></td>
							        	<div class="modal fade" id="myModal1<?=$rs->Id?>" role="dialog">
							              <div class="modal-dialog">

							                <!-- Modal content-->
							                <div class="modal-content">
							                  <div class="modal-header">
							                    <button type="button" class="close" data-dismiss="modal">&times;</button>
							                    <h4 class="modal-title">Hakkında</h4>
							                  </div>
							                  <div class="modal-body">
							                   		<?=$rs->hakkinda?>											
							                  </div>
							                  <div class="modal-footer">
							                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
							                  </div>
							                </div>

							              </div>
							            </div>
							       
							        <td><a data-toggle="modal" data-target="#myModal2<?=$rs->Id?>">Resim</a></td>
							        	<div class="modal fade" id="myModal2<?=$rs->Id?>" role="dialog">
							              <div class="modal-dialog">

							                <!-- Modal content-->
							                <div class="modal-content">
							                  <div class="modal-header">
							                    <button type="button" class="close" data-dismiss="modal">&times;</button>
							                    <h4 class="modal-title">Resim</h4>
							                  </div>
							                  <div class="modal-body">
							                    <img src="<?=base_url()?>uploads/<?=$rs->img?>" class="img-responsive" alt="Cinque Terre" width="560" height="auto">												
							                  </div>
							                  <div class="modal-footer">
							                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
							                  </div>
							                </div>

							              </div>
							            </div>
							         <td>Askı</td>   
							        <td><a href="<?=base_url()?>admin/home/sosyaluyesil/<?=$rs->Id?>" onclick="return confirm('<?=$rs->adsoy?> i silmek istediğinizden emin misiniz?');">Sil</a></td>
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