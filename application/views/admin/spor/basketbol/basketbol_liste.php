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
				<h1 class="page-header">Basketbol Liste</h1>
			</div>
		</div><!--/.row-->		<a class="" href="<?=base_url()?>admin/basketbol/ekle"><img src="<?=base_url()?>uploads/plus1.png"></a><br>

		<?php if ($this->session->flashdata("sonuc")) {?>
		<div class="alert alert-success alert-dismissable">
	    	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	    	<strong>Sonuc :</strong> <?=$this->session->flashdata("sonuc")?>
	    </div>
<?php } ?>
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
					        <th>Tarih</th>
					        <th>Başlık</th>
					        <th>Keyword</th>
					        <th>Açıklama</th>
					        <th>Text</th>
					        <th>Img</th>
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
							        <td><?=$rs->tarih?></td>
							        <td><a data-toggle="modal" data-target="#myModal1<?=$rs->Id?>">Başlık</a></td>
							        	<div class="modal fade" id="myModal1<?=$rs->Id?>" role="dialog">
							              <div class="modal-dialog">

							                <!-- Modal content-->
							                <div class="modal-content">
							                  <div class="modal-header">
							                    <button type="button" class="close" data-dismiss="modal">&times;</button>
							                    <h4 class="modal-title">Başlık</h4>
							                  </div>
							                  <div class="modal-body">
							                    <p><?=$rs->baslik?></p>
							                  </div>
							                  <div class="modal-footer">
							                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
							                  </div>
							                </div>

							              </div>
							            </div>
							        <td><a data-toggle="modal" data-target="#myModal2<?=$rs->Id?>">Keywords</a></td>
							        	<div class="modal fade" id="myModal2<?=$rs->Id?>" role="dialog">
							            <div class="modal-dialog">

							              <!-- Modal content-->
							              <div class="modal-content">
							                <div class="modal-header">
							                  <button type="button" class="close" data-dismiss="modal">&times;</button>
							                  <h4 class="modal-title">Keywords</h4>
							                </div>
							                <div class="modal-body">
							                  <p><?=$rs->keywords?></p>
							                </div>
							                <div class="modal-footer">
							                  <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
							                </div>
							              </div>

							            </div>
							          </div>
							          <td><a data-toggle="modal" data-target="#myModal5<?=$rs->Id?>">Açıklama</a></td>
							        	<div class="modal fade" id="myModal5<?=$rs->Id?>" role="dialog">
							            <div class="modal-dialog">

							              <!-- Modal content-->
							              <div class="modal-content">
							                <div class="modal-header">
							                  <button type="button" class="close" data-dismiss="modal">&times;</button>
							                  <h4 class="modal-title">Keywords</h4>
							                </div>
							                <div class="modal-body">
							                  <p><?=$rs->aciklama?></p>
							                </div>
							                <div class="modal-footer">
							                  <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
							                </div>
							              </div>

							            </div>
							          </div>
							        <td><a data-toggle="modal" data-target="#myModal3<?=$rs->Id?>">Text</a></td>
							        	<div class="modal fade" id="myModal3<?=$rs->Id?>" role="dialog">
							              <div class="modal-dialog">

							                <!-- Modal content-->
							                <div class="modal-content">
							                  <div class="modal-header">
							                    <button type="button" class="close" data-dismiss="modal">&times;</button>
							                    <h4 class="modal-title">Text</h4>
							                  </div>
							                  <div class="modal-body">
							                    <p><?=$rs->text?></p>
							                  </div>
							                  <div class="modal-footer">
							                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
							                  </div>
							                </div>

							              </div>
							            </div>
							        <td><a data-toggle="modal" data-target="#myModal4<?=$rs->Id?>">Img</a></td>
							        	<div class="modal fade" id="myModal4<?=$rs->Id?>" role="dialog">
							              <div class="modal-dialog">

							                <!-- Modal content-->
							                <div class="modal-content">
							                  <div class="modal-header">
							                    <button type="button" class="close" data-dismiss="modal">&times;</button>
							                    <h4 class="modal-title">Resim</h4>
							                  </div>
							                  <div class="modal-body">
							                    <img src="<?=base_url()?>/uploads/<?=$rs->img?>" class="img-responsive" alt="Cinque Terre" width="560" height="auto">
												<form action="<?=base_url()?>admin/basketbol/resim_upload/<?=$rs->Id?>" method="post" enctype="multipart/form-data">
													Resmi seçiniz:
													<input type="file" name="dosyaadi" id="dosyaadi"> <br>
													<input type="submit" value="Resim yükle" name="submit">
												</form>
							                  </div>
							                  <div class="modal-footer">
							                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
							                  </div>
							                </div>

							              </div>
							            </div>
							        <td><a href="<?=base_url()?>admin/basketbol/duzenle/<?=$rs->Id?>">Düzenle</a></td>
							        <td><a href="<?=base_url()?>admin/basketbol/sil/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizden emin misiniz?');">Sil</a></td>
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