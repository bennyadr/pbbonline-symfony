<header class="jumbotron subhead" id="overview">
  <h1>LSPOP No.<?php echo $lspop->getId() ?></h1>
</header>
<form name="dummy" class="form-horizontal label-panjang">
<div class="tabbable tabs-top">
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#i1">A. Rincian Data Bangunan</a></li>
    <li><a href="#i2">B. Vasilitas</a></li>
    <li><a href="#i3">C. Data Tambahan (JPB = 3/8)</a></li>
    <li><a href="#i4">D. Data Tambahan (Nonstandar)</a></li>
    <li><a href="#i5">E. Penilaian Individu (X1000 Rp)</a></li>
  </ul>
  <div class="tab-content">
    <script>
      all='<?php echo $lspop->getVal() ?>';
      V=all.split('|');
      L=new Array('Jenis Penggunaan Bangunan','Luas Bangunan','Jumlah Lantai','Tahun Dibangun','Tahun Direnovasi','Daya Listrik Terpasang','Kondisi Umum','Konstruksi','Atap','Dinding','Lantai','Langit-langit','Jumlah AC Split','Jumlah AC Window','AC Sentral','Luas Kolam Renang','Kondisi Kolam Renang','Ringan','Berat','Sedang','dengan Penutup Lantai','Beton dengan Lampu','Beton tanpa Lampu','Aspal dengan Lampu','Aspal tanpa Lampu','Tanah dengan Lampu','Tanah tanpa Lampu','Penumpang','Kapsul','Barang','Jumlah Tangga Berjalan Kecil','Jumlah Tangga Berjalan Besar','Baja Besi','Bata','Hydrant','Sprinkler','Fire Al','Jumlah Saluran','Kedalaman Artesis Sumur','Tinggi Kolam','Lebar Bentang','Daya Dukung Lantai','Keliling Dinding','Luas Mezzanine','Kelas Bangunan Kantor','Kelas Bangunan Kios','Kelas Bangunan Rs','Luas Kamar dengan AC Sentral Rs','Luas Ruang Lain dengan AC Sentral Rs','Kelas Bangunan Rekreasi','Jenis Hotel','Jumlah Bintang','Jumlah Kamar','Luas Kamar dengan AC Sentral Hotel','Luas Ruang Lain dengan AC Sentral Hotel','Tipe Bangunan','Kelas Bangunan Apartemen','Jumlah Apartemen','Luas Apt dengan AC Sentral','Luas Ruang Lain dengan AC Sentral Apt','Kapasitas Tangki Minyak','Letak Tangki','Kelas Bangunan Sekolah','Nilai Sistem','Nilai Individu');
      t1='<div class="item"><div class="show-label">';
      t2=':</div>';
      t3='</div>';
      function wr(a){document.write(a);}
      function w(a){wr(t1+L[a]+t2+V[a]+'&nbsp;'+t3);}
      wr('<div class="tab-pane active" id="i1">');
        for(i=0;i<12;i++){w(i);}
      wr(t3+'<div class="tab-pane" id="i2">');
        wr('<legend>AC</legend>');w(12);w(13);w(14);
        wr('<legend>Kolam Renang</legend>');w(15);w(16);
        wr('<legend>Luas Perkerasan Tanaman (M2)</legend>');w(17);w(18);w(19);w(20);
        wr('<legend>Luas Lapangan Tenis</legend>');wr('<h4>Beton</h4>');w(21);w(22);
        wr('<h4>Aspal</h4>');w(23);w(24);
        wr('<h4>Tanah</h4>');w(25);w(26);
        wr('<legend>Jumlah Lift</legend>');w(27);w(28);w(29);
        wr('<legend>Jumlah Tangga Berjalan</legend>');w(30);w(31);
        wr('<legend>Panjang Pagar</legend>');w(32);w(33);
        wr('<legend>Pemadam Kebakaran</legend>');w(34);w(35);w(36);
        wr('<legend>Pesawat PABX</legend>');w(37);
        wr('<legend>Sumur Artesis</legend>');w(38);
      wr(t3+'<div class="tab-pane" id="i3">');
        wr('<legend>Pabrik/Bengkel/Gudang/Pertanian (JPB = 3/8)</legend>');
        w(39);w(40);w(41);w(42);w(43);
      wr(t3+'<div class="tab-pane" id="i4">');
        wr('<legend>Perkantoran Swasta / Gedung Pemerintah (JPB=2/9)</legend>');w(44);
        wr('<legend>Toko/Apotik/Pasar/Ruko (JPB=4)</legend>');w(45);
        wr('<legend>Rumah Sakit / Klinik (JPB=5)</legend>');w(46);w(47);w(48);
        wr('<legend>Olahraga / Rekreasi (JPB=6)</legend>');w(49);
        wr('<legend>Hotel / Wisma (JPB=7)</legend>');w(50);w(51);w(52);w(53);w(54);
        wr('<legend>Bangunan Parkir (JPB=12)</legend>');w(55);
        wr('<legend>Apartemen (JPB=13)</legend>');w(56);w(57);w(58);w(59);
        wr('<legend>Tangki Minyak (JPB=15)</legend>');w(60);w(61);
        wr('<legend>Gedung Sekolah (JPB=16)</legend>');w(62);
      wr(t3+'<div class="tab-pane" id="i5">');
        w(62);w(63);
      wr(t3);
    </script>
  </div>
</div>
<div class="form-actions">
	<a class="btn" href="<?php echo url_for('lspop/index')?>">Kembali</a> 
	<a class="btn btn-primary" href="<?php echo url_for('lspop_edit', $lspop) ?>">Ubah</a> 
	<?php echo link_to('Hapus', 'lspop/delete?id='.$lspop->getId(), array('method' => 'delete', 'confirm' => 'Apakah Anda yakin ?', 'class' => 'btn btn-danger')) ?>
</div>
</form>
<script>
$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>