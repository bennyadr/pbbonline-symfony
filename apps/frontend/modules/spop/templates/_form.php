<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php echo form_tag_for($form, '@spop', array('class'=>'form-horizontal')) ?>
  <fieldset class="float">
    <legend>A. Data Objek Pajak</legend>
<div class="control-group"><?php echo $form['nomor_formulir']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['nomor_formulir'] ?><?php echo $form['nomor_formulir']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['jenis_transaksi']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['jenis_transaksi'] ?><?php echo $form['jenis_transaksi']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['NOP']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['NOP'] ?><?php echo $form['NOP']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['NOP_bersama']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['NOP_bersama'] ?><?php echo $form['NOP_bersama']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['NOP_asal']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['NOP_asal'] ?><?php echo $form['NOP_asal']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['NO_SPPT_lama']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['NO_SPPT_lama'] ?><?php echo $form['NO_SPPT_lama']->renderHelp() ?></div></div>
		</fieldset><fieldset class="float"><legend>B. Data Letak Objek Pajak</legend>
<div class="control-group"><?php echo $form['nama_jalan']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['nama_jalan'] ?><?php echo $form['nama_jalan']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['blok_kav_nomor']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['blok_kav_nomor'] ?><?php echo $form['blok_kav_nomor']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['kelurahan_objek_pajak']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['kelurahan_objek_pajak'] ?><?php echo $form['kelurahan_objek_pajak']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['RT_objek_pajak']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['RT_objek_pajak'] ?><?php echo $form['RT_objek_pajak']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['RW_objek_pajak']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['RW_objek_pajak'] ?><?php echo $form['RW_objek_pajak']->renderHelp() ?></div></div>
    </fieldset>
		<div class="clear"></div>
		<fieldset class="float"><legend>C. Data Subjek Pajak</legend>
<div class="control-group"><?php echo $form['status']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['status'] ?><?php echo $form['status']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['pekerjaan']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['pekerjaan'] ?><?php echo $form['pekerjaan']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['nama_subjek_pajak']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['nama_subjek_pajak'] ?><?php echo $form['nama_subjek_pajak']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['nama_jalan_subjek_pajak']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['nama_jalan_subjek_pajak'] ?><?php echo $form['nama_jalan_subjek_pajak']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['kelurahan_subjek_pajak']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['kelurahan_subjek_pajak'] ?><?php echo $form['kelurahan_subjek_pajak']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['RW_subjek_pajak']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['RW_subjek_pajak'] ?><?php echo $form['RW_subjek_pajak']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['RT_subjek_pajak']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['RT_subjek_pajak'] ?><?php echo $form['RT_subjek_pajak']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['kabupaten']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['kabupaten'] ?><?php echo $form['kabupaten']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['kodepos']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['kodepos'] ?><?php echo $form['kodepos']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['no_telp']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['no_telp'] ?><?php echo $form['no_telp']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['no_fax']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['no_fax'] ?><?php echo $form['no_fax']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['no_hp']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['no_hp'] ?><?php echo $form['no_hp']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['email']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['email'] ?><?php echo $form['email']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['nomor_KTP']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['nomor_KTP'] ?><?php echo $form['nomor_KTP']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['berlaku_sampai_dengan']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['berlaku_sampai_dengan'] ?><?php echo $form['berlaku_sampai_dengan']->renderHelp() ?></div></div>
    </fieldset><fieldset class="float"><legend>D. Data Tanah</legend>
<div class="control-group"><?php echo $form['luas_tanah']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['luas_tanah'] ?><?php echo $form['luas_tanah']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['zona_nilai_tanah']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['zona_nilai_tanah'] ?><?php echo $form['zona_nilai_tanah']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['nilai_tanah_per_m2']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['nilai_tanah_per_m2'] ?><?php echo $form['nilai_tanah_per_m2']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['jenis_tanah']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['jenis_tanah'] ?><?php echo $form['jenis_tanah']->renderHelp() ?></div></div>
<!--div class="control-group"><?php // echo $form['fasilitas_umum']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php // echo $form['fasilitas_umum'] ?><?php // echo $form['fasilitas_umum']->renderHelp() ?></div></div-->
    </fieldset><fieldset class="float"><legend>E. Data Bangunan</legend>
<div class="control-group"><?php echo $form['jumlah_bangunan']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['jumlah_bangunan'] ?><?php echo $form['jumlah_bangunan']->renderHelp() ?></div></div>
<div class="control-group"><?php echo $form['gambar']->renderLabel(null, array('class'=>'control-label')) ?><div class="controls"><?php echo $form['gambar'] ?><?php echo $form['gambar']->renderHelp() ?></div></div>
		</fieldset>
	<div class="clear"></div>
  <div class="form-actions">
		<?php echo $form->renderHiddenFields(false) ?>
		<a class="btn" href="javascript:window.back()">Batal</a>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>