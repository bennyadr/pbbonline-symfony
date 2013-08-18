<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="tabbable tabs-top">
<form name="dummy" class="form-horizontal label-panjang">
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#i1">A. Rincian Data Bangunan</a></li>
    <li><a href="#i2">B. Vasilitas</a></li>
    <li><a href="#i3">C. Data Tambahan (JPB = 3/8)</a></li>
    <li><a href="#i4">D. Data Tambahan (Nonstandar)</a></li>
    <li><a href="#i5">E. Penilaian Individu (X1000 Rp)</a></li>
  </ul> 
  <div class="tab-content">
    <div class="tab-pane active" id="i1">
			<div class="control-group"><label for="jenis_penggunaan_bangunan">Jenis Penggunaan Bangunan</label><input id="jenis_penggunaan_bangunan" name="jenis_penggunaan_bangunan"/></div>
			<div class="control-group"><label for="luas_bangunan">Luas Bangunan</label><input id="luas_bangunan" name="luas_bangunan"/></div>
			<div class="control-group"><label for="jumlah_lantai">Jumlah Lantai</label><input id="jumlah_lantai" name="jumlah_lantai"/></div>
			<div class="control-group"><label for="tahun_dibangun">Tahun Dibangun</label><input id="tahun_dibangun" name="tahun_dibangun"/></div>
			<div class="control-group"><label for="tahun_direnovasi">Tahun Direnovasi</label><input id="tahun_direnovasi" name="tahun_direnovasi"/></div>
			<div class="control-group"><label for="daya_listrik_terpasang">Daya Listrik Terpasang</label><input id="daya_listrik_terpasang" name="daya_listrik_terpasang"/></div>
			<div class="control-group"><label for="kondisi_pada_umumnya">Kondisi Umum</label><input id="kondisi_pada_umumnya" name="kondisi_pada_umumnya"/></div>
			<div class="control-group"><label for="konstruksi">Konstruksi</label><input id="konstruksi" name="konstruksi"/></div>
			<div class="control-group"><label for="atap">Atap</label><input id="atap" name="atap"/></div>
			<div class="control-group"><label for="dinding">Dinding</label><input id="dinding" name="dinding"/></div>
			<div class="control-group"><label for="lantai">Lantai</label><input id="lantai" name="lantai"/></div>
			<div class="control-group"><label for="langit_langit">Langit-langit</label><input id="langit_langit" name="langit_langit"/></div>
		</div>
    <div class="tab-pane" id="i2">
      <legend>AC</legend>
			<div class="control-group"><label for="jumlah_ac_split">Jumlah AC Split</label><input id="jumlah_ac_split" name="jumlah_ac_split"/></div>
			<div class="control-group"><label for="jumlah_ac_window">Jumlah AC Window</label><input id="jumlah_ac_window" name="jumlah_ac_window"/></div>
			<div class="control-group"><label for="ac_sentral">AC Sentral</label><input id="ac_sentral" name="ac_sentral"/></div>
			<legend>Kolam Renang</legend>
      <div class="control-group"><label for="luas_kolam_renang">Luas Kolam Renang (M2)</label><input id="luas_kolam_renang" name="luas_kolam_renang"/></div>
			<div class="control-group"><label for="kondisi_kolam_renang">Kondisi Kolam Renang</label><input id="kondisi_kolam_renang" name="kondisi_kolam_renang"/></div>
			<legend>Luas Perkerasan Tanaman (M2)</legend>
      <div class="control-group"><label for="ringan">Ringan</label><input id="ringan" name="ringan"/></div>
			<div class="control-group"><label for="berat">Berat</label><input id="berat" name="berat"/></div>
			<div class="control-group"><label for="sedang">Sedang</label><input id="sedang" name="sedang"/></div>
			<div class="control-group"><label for="dengan_penutup_lantai">dengan Penutup Lantai</label><input id="dengan_penutup_lantai" name="dengan_penutup_lantai"/></div>
			<legend>Luas Lapangan Tenis</legend>
      <h4>Beton</h4>
			<div class="control-group"><label for="beton_dengan_lampu">dengan Lampu</label><input id="beton_dengan_lampu" name="beton_dengan_lampu"/></div>
			<div class="control-group"><label for="beton_tanpa_lampu">tanpa Lampu</label><input id="beton_tanpa_lampu" name="beton_tanpa_lampu"/></div>
      <h4>Aspal</h4>
			<div class="control-group"><label for="aspal_dengan_lampu">dengan Lampu</label><input id="aspal_dengan_lampu" name="aspal_dengan_lampu"/></div>
			<div class="control-group"><label for="aspal_tanpa_lampu">tanpa Lampu</label><input id="aspal_tanpa_lampu" name="aspal_tanpa_lampu"/></div>
			<h4>Tanah</h4>
      <div class="control-group"><label for="tanah_dengan_lampu">dengan Lampu</label><input id="tanah_dengan_lampu" name="tanah_dengan_lampu"/></div>
			<div class="control-group"><label for="tanah_tanpa_lampu">tanpa Lampu</label><input id="tanah_tanpa_lampu" name="tanah_tanpa_lampu"/></div>
			<legend>Jumlah Lift</legend>
      <div class="control-group"><label for="penumpang">Penumpang</label><input id="penumpang" name="penumpang"/></div>
			<div class="control-group"><label for="kapsul">Kapsul</label><input id="kapsul" name="kapsul"/></div>
			<div class="control-group"><label for="barang">Barang</label><input id="barang" name="barang"/></div>
			<legend>Jumlah Tangga Berjalan</legend>
      <div class="control-group"><label for="jumlah_tangga_berjalan_kecil">Lebar &lt; 0,8M</label><input id="jumlah_tangga_berjalan_kecil" name="jumlah_tangga_berjalan_kecil"/></div>
			<div class="control-group"><label for="jumlah_tangga_berjalan_besar">Lebar &gt; 0,8M</label><input id="jumlah_tangga_berjalan_besar" name="jumlah_tangga_berjalan_besar"/></div>
			<legend>Panjang Pagar</legend>
      <div class="control-group"><label for="baja_besi">Baja Besi</label><input id="baja_besi" name="baja_besi"/></div>
			<div class="control-group"><label for="bata">Bata</label><input id="bata" name="bata"/></div>
			<legend>Pemadam Kebakaran</legend>
      <div class="control-group"><label for="hydrant">Hydrant</label><input id="hydrant" name="hydrant"/></div>
			<div class="control-group"><label for="sprinkler">Sprinkler</label><input id="sprinkler" name="sprinkler"/></div>
			<div class="control-group"><label for="fire_al">Fire Al</label><input id="fire_al" name="fire_al"/></div>
			<legend>Pesawat PABX</legend>
      <div class="control-group"><label for="jumlah_saluran">Jumlah Saluran</label><input id="jumlah_saluran" name="jumlah_saluran"/></div>
			<legend>Sumur Artesis</legend>
      <div class="control-group"><label for="kedalaman_artesis_sumur">Kedalaman Artesis Sumur</label><input id="kedalaman_artesis_sumur" name="kedalaman_artesis_sumur"/></div>
		</div>
    <div class="tab-pane" id="i3">
      <h4>Pabrik/Bengkel/Gudang/Pertanian (JPB = 3/8)</h4>
			<div class="control-group"><label for="tinggi_kolam">Tinggi Kolam</label><input id="tinggi_kolam" name="tinggi_kolam"/></div>
			<div class="control-group"><label for="lebar_bentang">Lebar Bentang</label><input id="lebar_bentang" name="lebar_bentang"/></div>
			<div class="control-group"><label for="daya_dukung_lantai">Daya Dukung Lantai</label><input id="daya_dukung_lantai" name="daya_dukung_lantai"/></div>
			<div class="control-group"><label for="keliling_dinding">Keliling Dinding</label><input id="keliling_dinding" name="keliling_dinding"/></div>
			<div class="control-group"><label for="luas_mezzanine">Luas Mezzanine</label><input id="luas_mezzanine" name="luas_mezzanine"/></div>
		</div>
    <div class="tab-pane" id="i4">
      <legend>Perkantoran Swasta / Gedung Pemerintah (JPB=2/9)</legend>
			<div class="control-group"><label for="kelas_bangunan_kantor">Kelas Bangunan Kantor</label><input id="kelas_bangunan_kantor" name="kelas_bangunan_kantor"/></div>
      <legend>Toko/Apotik/Pasar/Ruko (JPB=4)</legend>
			<div class="control-group"><label for="kelas_bangunan_kios">Kelas Bangunan Kios</label><input id="kelas_bangunan_kios" name="kelas_bangunan_kios"/></div>
      <legend>Rumah Sakit / Klinik (JPB=5)</legend>
			<div class="control-group"><label for="kelas_bangunan_RS">Kelas Bangunan Rs</label><input id="kelas_bangunan_RS" name="kelas_bangunan_RS"/></div>
			<div class="control-group"><label for="luas_kamar_dengan_ac_sentral_RS">Luas Kamar dengan AC Sentral Rs</label><input id="luas_kamar_dengan_ac_sentral_RS" name="luas_kamar_dengan_ac_sentral_RS"/></div>
			<div class="control-group"><label for="luas_ruang_lain_dengan_ac_sentral_RS">Luas Ruang Lain dengan AC Sentral Rs</label><input id="luas_ruang_lain_dengan_ac_sentral_RS" name="luas_ruang_lain_dengan_ac_sentral_RS"/></div>
      <legend>Olahraga / Rekreasi (JPB=6)</legend>
			<div class="control-group"><label for="kelas_bangunan_rekreasi">Kelas Bangunan Rekreasi</label><input id="kelas_bangunan_rekreasi" name="kelas_bangunan_rekreasi"/></div>
      <legend>Hotel / Wisma (JPB=7)</legend>
			<div class="control-group"><label for="jenis_hotel">Jenis Hotel</label><input id="jenis_hotel" name="jenis_hotel"/></div>
			<div class="control-group"><label for="jumlah_bintang">Jumlah Bintang</label><input id="jumlah_bintang" name="jumlah_bintang"/></div>
			<div class="control-group"><label for="jumlah_kamar">Jumlah Kamar</label><input id="jumlah_kamar" name="jumlah_kamar"/></div>
			<div class="control-group"><label for="luas_kamar_dengan_ac_sentral_hotel">Luas Kamar dengan AC Sentral Hotel</label><input id="luas_kamar_dengan_ac_sentral_hotel" name="luas_kamar_dengan_ac_sentral_hotel"/></div>
			<div class="control-group"><label for="luas_ruang_lain_dengan_ac_sentral_hotel">Luas Ruang Lain dengan AC Sentral Hotel</label><input id="luas_ruang_lain_dengan_ac_sentral_hotel" name="luas_ruang_lain_dengan_ac_sentral_hotel"/></div>
      <legend>Bangunan Parkir (JPB=12)</legend>
			<div class="control-group"><label for="tipe_bangunan">Tipe Bangunan</label><input id="tipe_bangunan" name="tipe_bangunan"/></div>
      <legend>Apartemen (JPB=13)</legend>
			<div class="control-group"><label for="kelas_bangunan_apartemen">Kelas Bangunan Apartemen</label><input id="kelas_bangunan_apartemen" name="kelas_bangunan_apartemen"/></div>
			<div class="control-group"><label for="jumlah_apartemen">Jumlah Apartemen</label><input id="jumlah_apartemen" name="jumlah_apartemen"/></div>
			<div class="control-group"><label for="luas_apt_dengan_ac_sentral">Luas Apt dengan AC Sentral</label><input id="luas_apt_dengan_ac_sentral" name="luas_apt_dengan_ac_sentral"/></div>
			<div class="control-group"><label for="luas_ruang_lain_dengan_ac_sentral_apt">Luas Ruang Lain dengan AC Sentral Apt</label><input id="luas_ruang_lain_dengan_ac_sentral_apt" name="luas_ruang_lain_dengan_ac_sentral_apt"/></div>
      <legend>Tangki Minyak (JPB=15)</legend>
			<div class="control-group"><label for="kapasitas_tangki_minyak">Kapasitas Tangki Minyak</label><input id="kapasitas_tangki_minyak" name="kapasitas_tangki_minyak"/></div>
			<div class="control-group"><label for="letak_tangki">Letak Tangki</label><input id="letak_tangki" name="letak_tangki"/></div>
      <legend>Gedung Sekolah (JPB=16)</legend>
			<div class="control-group"><label for="kelas_bangunan_sekolah">Kelas Bangunan Sekolah</label><input id="kelas_bangunan_sekolah" name="kelas_bangunan_sekolah"/></div>
		</div>
    <div class="tab-pane" id="i5">
			<div class="control-group"><label for="nilai_sistem">Nilai Sistem</label><input id="nilai_sistem" name="nilai_sistem"/></div>
			<div class="control-group"><label for="nilai_individu">Nilai Individu</label><input id="nilai_individu" name="nilai_individu"/></div>
		</div>
	</div>
</form>
</div>
<script>
$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>

<?php echo form_tag_for($form, '@lspop', array('class'=>'form-horizontal','name'=>'theform')) ?>
  <?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <div style="display:none;width:0px;width:0px"><?php echo $form['val'] ?></div>
	<div class="form-actions">
		<a class="btn" href="<?php if($id=$form->getObject()->getId();){
		echo url_for('lspop/show?id='.$id); }else{
		echo url_for('lspop/index'); }
		?>">Batal</a>
    <?php echo $form->renderHiddenFields(false) ?>
		<a type="submit" onclick="send()" class="btn btn-primary">Simpan</a>
	</div>
</form>

<script>
  function send(){
    var val=new Array();
    for(i=0;i<document.forms['dummy'].elements.length;i++){
      val[i]=document.forms['dummy'].elements[i].value;
    }
    document.forms['theform'].elements['lspop[val]'].value=val.join("|");
    document.forms['theform'].submit();
  }
  if(all=document.forms['theform'].elements['lspop[val]'].value){
    arr=all.split('|');
    for(i=0;i<document.forms['dummy'].elements.length;i++){
      document.forms['dummy'].elements[i].value=arr[i];
    }
  }
</script>