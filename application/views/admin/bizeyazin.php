
	<?php
if (!$this->session->login_giris)
{ 
	redirect(base_url()."admin/login");
}

?>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
 
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
				<h1 class="page-header">ÜYE MESAJLARI</h1>
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
						       <th>Ip</th>
						        <th>Üye Id</th>
						        <th>Ad Soyad</th>
						        <th>E-mail</th>
						        <th>Mesaj</th>
						        <th>Tarih</th>
						        <th>Cevapla</th>
						        <th>Sil</th>
						      </tr>
						    </thead>
						    <tbody>
												  
						  <?php
							foreach($bizeyazin as $rs)
							{
							?>
						  
						    <tr>
						   		<td><?=$rs->Id?></td>
						   		<td><?=$rs->ip?></td>
						        <td><?=$rs->uye_ID?></td>
						        <td><?=$rs->uye_adsoy?></td>
						        <td><?=$rs->email?></td>
						        <td><a href="" data-toggle="modal" data-target="#myModal1<?=$rs->Id?>">Mesaj</a></td>
						        <td><?=$rs->tarih?></td>
						        <td><a href="" data-toggle="modal" data-target="#myModal2<?=$rs->Id?>">Cevapla</a></td>
						        <td><a href="<?=base_url()?>admin/home/bizeyazinsil/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizden emin misiniz?');">Sil</a></td>

						      </tr>

						      <div class="modal fade" id="myModal2<?=$rs->Id?>" role="dialog">
							    <div class="modal-dialog">
							    
							      <!-- Modal content-->
							      <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Mesaj</h4>
							        </div>
							        <div class="modal-body">
							        
										 <form action="<?=base_url()?>admin/home/bizeyazincevap" method="post"> 
										  <div class="form-group">
										      <label >E-mail</label>
										      <input type="text" class="form-control" value="<?=$rs->email?>" disabled="readonly" name="email">
										      <input type="hidden" name="email" value="<?=$rs->email?>">
										    </div>  
										    <div class="form-group">
										      <label >Mesaj</label>
										      <input type="text" class="form-control"  placeholder="Mesaj" name="mesaj">
										    </div>
										    
										    <button type="submit" class="btn btn-default">Gönder</button>
										  </form>
									
							        </div>
							        <div class="modal-footer">
							          <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>

							    <div class="modal fade" id="myModal1<?=$rs->Id?>" role="dialog">
							    <div class="modal-dialog">
							    
							      <!-- Modal content-->
							      <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Mesaj</h4>
							        </div>
							        <div class="modal-body">
							        
										 <p><?=$rs->mesaj?></p>
									
							        </div>
							        <div class="modal-footer">
							          <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>
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