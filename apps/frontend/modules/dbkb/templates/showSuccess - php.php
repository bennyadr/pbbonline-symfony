<header class="jumbotron subhead" id="overview">
  <h1>DBKB No.<?php echo $dbkb->getId() ?></h1>
</header>

<form name="dummy" class="form-horizontal label-panjang">
<div class="tabbable tabs-left">
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#i1">I. Upah Pekerja</a></li>
    <li><a href="#i2">II. Bahan Batu/Pasir</a></li>
    <li><a href="#i3">III. Semen</a></li>
    <li><a href="#i4">IV. Kayu</a></li>
    <li><a href="#i5">V. Bahan Besi/Baja</a></li>
    <li><a href="#i6">VI. Atap</a></li>
    <li><a href="#i7">VII. Lantai</a></li>
    <li><a href="#i8">VIII. Langit-langit</a></li>
    <li><a href="#i9">IX. Pintu/Jendela/Partisi</a></li>
    <li><a href="#i10">X. Saniter/Plumbing</a></li>
    <li><a href="#i11">XI. Lain-lain</a></li>
    <li><a href="#i12">XII. Fasilitas</a></li>
  </ul>
	<div class="tab-content">
		<?php
		 $tes=$dbkb->getVal();
		 function e($i){
		  global $tes;
			$V=split('[|]',$tes);
			$L=array('Mandor','Kepala Tukang','Tukang','Pekerja','Pasir Urug','Pasir Pasang','Pasir Beton','Batu Kali','Batu Koral (untuk beton)','Split 0,5-0,6 (untuk beton)','Batu bata','Conblock 10x20x40','Semen PC Abu-abu','Semen Putih','Kayu Kamper','Kayu Meranti','Papan Terentang (untuk bekisting)','Dolken f8–10cm','Besi Beton','Kawat Beton','Baja Profil WF','Baja Profil C','Baja Plat','Paku','Baut','Genteng Biasa/Plentong','Genteng Kodok','Genteng Keramik Glazur','Genteng Beton','Decrabon (2 lbr)','Sirap ulin (100 bh)','Asbes Gelombang','Seng Gelombang Bjls 33','Alumunium Gelombang','Spandex (Steel Sheet)','Ubin PC Abu-abu','Teraso 30x30','Keramik 30x30 (lokal)','Marmer 30x30 (lokal)','Vinyl 30x30','Pavingblock (untuk perkerasan jalan)','Parquet (parket)','Lain-lain','Plywood 4`x8`x4mm','Plywood 4`x8`x6mm','Teakwood 4`x8`x3mm','Asbes/Eternit','Akustik 30x60','Gypsum','Bambu Anyam','Lis Kayu I/3','Kusen Alumunium','Nako + kaca','Kaca Polos 5mm','Kaca Rayban 5mm','Kaca Laminated Rayban (untuk dinding)','Lain-lain','Kloset Jongkok','Kloset duduk/Monoblock','Bathtub','Wastafel','Bak Mandi','Shower','Bidet','Urinoir','Meja Dapur','Metal Zink 1 lubang','Metal Zink 2 lubang','Pipa Galvanis o 0,5" (p=6m)','Pipa Galvanis o 0,75" (p=6m)','Pipa PVC o 0,75" (p=4m) ','Pipa PVC o 4" (p=4m)','Septictank + Rembesan','Cat Kayu','Cat Tembok','Plamuur','Minyak Cat','Amplas','Kunci','Engsel','Upah Pancang Beton','Direksikeet','Lem Aica Aibon','Saluran air kotor','Pipa air bersih','Kran air','Titik lampu','Stop Kontak','Sekring box/panel','Pembersihan','AC Sentral','AC Window','AC Split','Lift','Tangga berjalan','Aspal','Beton','Pavingblock','Kolam renang','Lapangan tenis','Daya Listrik PLN','Daya Listrik genset','Hydran','Sprinkler','Fire alarm/smoke detector','PABX 12 samb/250 ext.','25 KVA','100 KVA','300 KVA');
			echo '<div class="item"><div class="show-label">'.$L[$i].':</div>'.$V[$i].'&nbsp;</div>';
		 }
		?>
		<div class="tab-pane active" id="i1">
			<?php e(0);e(1);e(2);e(3); ?>
		</div><div class="tab-pane" id="i2">
			<?php e(4);e(5);e(6);e(7);e(8);e(9);e(10);e(11); ?>
		</div><div class="tab-pane" id="i3">
			<?php e(12);e(13); ?>
		</div><div class="tab-pane" id="i4">
			<?php e(14);e(15);e(16);e(17); ?>
		</div><div class="tab-pane" id="i5">
			<?php e(17);e(18);e(19);e(20);e(21);e(22);e(23);e(24); ?>
		</div><div class="tab-pane" id="i6">
			<?php e(25);e(26);e(27);e(28);e(29);e(30);e(31);e(32);e(33);e(34); ?>
		</div><div class="tab-pane" id="i7">
			<?php e(35);e(36);e(37);e(38);e(39);e(40);e(41);e(42); ?>
		</div><div class="tab-pane" id="i8">
			<?php e(43);e(44);e(45);e(46);e(47);e(48);e(49);e(50); ?>
		</div><div class="tab-pane" id="i9">
			<?php e(51);e(52);e(53);e(54);e(55);e(56); ?>
		</div><div class="tab-pane" id="i10">
			<?php e(57);e(58);e(59);e(60);e(61);e(62);e(63);e(64);e(65);e(66);e(67);e(68);e(69);e(70);e(71);e(72); ?>
		</div><div class="tab-pane" id="i11">
			<?php e(73);e(74);e(75);e(76);e(77);e(78);e(79);e(80);e(81);e(82);e(83);e(84);e(85);e(86);e(87);e(88);e(89); ?>
		</div><div class="tab-pane" id="i12">
			<?php e(90);e(91);e(92);e(93);e(94); ?>
			<?php echo '<legend>Perkerasan Jalan</legend>';e(95);e(96);e(97);echo '<hr/>'; ?>
			<?php e(98);e(99);e(100);e(101); ?>
			<?php echo '<legend>Pemadam Api</legend>';e(102);e(103);e(104);echo '<hr/>'; ?>
			<?php e(105); ?>
			<?php echo '<legend>Generator</legend>';e(106);e(107);e(108); ?>
		</div>
	</div>
</div>
<div class="form-actions">
	<a class="btn" href="<?php echo url_for('dbkb/index')?>">Kembali</a> 
	<a class="btn btn-primary" href="<?php echo url_for('dbkb_edit', $dbkb) ?>">Ubah</a> 
	<?php echo link_to('Hapus', 'dbkb/delete?id='.$dbkb->getId(), array('method' => 'delete', 'confirm' => 'Apakah Anda yakin?','class'=>'btn btn-danger')) ?>
</div>
</form>
<script>
$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>