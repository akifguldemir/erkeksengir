	<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url()?>admin/haber/haberler"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">E-mail Ayarları</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">E-mail Ayarları</h1>
			</div>
		</div><!--/.row-->
		
			<form action="<?=base_url()?>admin/home/emailayarlarguncelle" method="POST" >
										<div class="form-group">
                                            <label class="control-label col-lg-4">Site Adı</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="adi" placeholder="" class="form-control"  value="<?=$veri['0']->adi?>"/>
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">Anahtar Kelime</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="keywords" placeholder="" class="form-control" value="<?=$veri['0']->keywords?>"/>
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">Açıklama</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="aciklama" placeholder="" class="form-control" value="<?=$veri['0']->aciklama?>"/>
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">Şirket Adı</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="name" placeholder="" class="form-control"value="<?=$veri['0']->name?>" />
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">Smtp Server</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="smtpserver" placeholder="" class="form-control"value="<?=$veri['0']->smtpserver?>" />
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">Smtpport</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="smtpport" placeholder="" class="form-control" value="<?=$veri['0']->smtpport?>"/>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Smtp Email</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="smtpemail" placeholder="" class="form-control" value="<?=$veri['0']->smtpemail?>"/>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Smtp Şifre</label>

                                            <div class="col-lg-4">
                                                <input type="password"  name="password" placeholder="" class="form-control" value="<?=$veri['0']->password?>"/>
                                            </div>
                                        </div>										
										<div class="form-group">
                                            <label class="control-label col-lg-4">Şehir</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="adres" placeholder="" class="form-control"value="<?=$veri['0']->adres?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Şehir</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="sehir" placeholder="" class="form-control"value="<?=$veri['0']->sehir?>" />
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">Telefon</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="tel" placeholder="" class="form-control" value="<?=$veri['0']->tel?>"/>
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">Email</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="email" placeholder="" class="form-control"value="<?=$veri['0']->email?>" />
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">İletişim Açıklama</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="iletisim" placeholder="" class="form-control"value="<?=$veri['0']->iletisim?>" />
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">Facebook</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="facebook" placeholder="facebook" class="form-control" value="<?=$veri['0']->facebook?>"/>
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">Twitter</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="twitter" placeholder="twitter" class="form-control" value="<?=$veri['0']->twitter?>" />
                                            </div>
                                        </div><div class="form-group">
                                            <label class="control-label col-lg-4">İnstagram</label>

                                            <div class="col-lg-4">
                                                <input type="text"  name="instagram" placeholder="instagram" class="form-control" value="<?=$veri['0']->instagram?>"/>
                                            </div>
                                            </div>
                                       
				
											<br><input type="submit" class="btn btn-primary" value="Kaydet" /><br>
			</form>
			
								
			
		
	</div>	<!--/.main-->