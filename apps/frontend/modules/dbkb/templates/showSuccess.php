<header class="jumbotron subhead" id="overview">
  <h1>DBKB No.<?php echo $dbkb->getId() ?></h1>
</header>

<form name="dummy" class="form-horizontal label-panjang">
<div class="tabbable tabs-top">
	<ul class="nav nav-tabs" id="myTab1">
		<li class="active"><a href="#x1">DBKB Standar</a></li>
		<li><a href="#x2">DBKB Nonstandar</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="x1">
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#i1">Upah Pekerja</a></li>
					<li><a href="#i2">Bahan Batu/Pasir</a></li>
					<li><a href="#i3">Semen</a></li>
					<li><a href="#i4">Kayu</a></li>
					<li><a href="#i5">Bahan Besi/Baja</a></li>
					<li><a href="#i6">Atap</a></li>
					<li><a href="#i7">Lantai</a></li>
					<li><a href="#i8">Langit-langit</a></li>
					<li><a href="#i9">Pintu/Jendela/Partisi</a></li>
					<li><a href="#i10">Saniter/Plumbing</a></li>
					<li><a href="#i11">Lain-lain</a></li>
					<li><a href="#i12">Fasilitas</a></li>
				</ul>
				<div class="tab-content">
					<script>
						all='<?php echo $dbkb->getVal() ?>';
						t='</div><div class="tab-pane" id="';
						V=all.split('|');
						L=new Array('Mandor','Kepala Tukang','Tukang','Pekerja','Pasir Urug','Pasir Pasang','Pasir Beton','Batu Kali','Batu Koral (untuk beton)','Split 0,5-0,6 (untuk beton)','Batu bata','Conblock 10x20x40','Semen PC Abu-abu','Semen Putih','Kayu Kamper','Kayu Meranti','Papan Terentang (untuk bekisting)','Dolken f8-10cm','Besi Beton','Kawat Beton','Baja Profil WF','Baja Profil C','Baja Plat','Paku','Baut','Genteng Biasa/Plentong','Genteng Kodok','Genteng Keramik Glazur','Genteng Beton','Decrabon (2 lbr)','Sirap ulin (100 bh)','Asbes Gelombang','Seng Gelombang Bjls 33','Alumunium Gelombang','Spandex (Steel Sheet)','Ubin PC Abu-abu','Teraso 30x30','Keramik 30x30 (lokal)','Marmer 30x30 (lokal)','Vinyl 30x30','Pavingblock (untuk perkerasan jalan)','Parquet (parket)','Lain-lain','Plywood 4`x8`x4mm','Plywood 4`x8`x6mm','Teakwood 4`x8`x3mm','Asbes/Eternit','Akustik 30x60','Gypsum','Bambu Anyam','Lis Kayu I/3','Kusen Alumunium','Nako + kaca','Kaca Polos 5mm','Kaca Rayban 5mm','Kaca Laminated Rayban (untuk dinding)','Lain-lain','Kloset Jongkok','Kloset duduk/Monoblock','Bathtub','Wastafel','Bak Mandi','Shower','Bidet','Urinoir','Meja Dapur','Metal Zink 1 lubang','Metal Zink 2 lubang','Pipa Galvanis o 0,5" (p=6m)','Pipa Galvanis o 0,75" (p=6m)','Pipa PVC o 0,75" (p=4m) ','Pipa PVC o 4" (p=4m)','Septictank + Rembesan','Cat Kayu','Cat Tembok','Plamuur','Minyak Cat','Amplas','Kunci','Engsel','Upah Pancang Beton','Direksikeet','Lem Aica Aibon','Saluran air kotor','Pipa air bersih','Kran air','Titik lampu','Stop Kontak','Sekring box/panel','Pembersihan','AC Sentral','AC Window','AC Split','Lift','Tangga berjalan','Aspal','Beton','Pavingblock','Kolam renang','Lapangan tenis','Daya Listrik PLN','Daya Listrik genset','Hydran','Sprinkler','Fire alarm/smoke detector','PABX 12 samb/250 ext.','25 KVA','100 KVA','300 KVA');
						function w(i){document.write(i);}
						function e(i){w('<div class="item"><div class="show-label">'+L[i]+':</div>'+V[i]+'&nbsp;</div>');}
						w('<div class="tab-pane active" id="i1">');e(0);e(1);e(2);e(3);
						w(t+'i2">');e(4);e(5);e(6);e(7);e(8);e(9);e(10);e(11);
						w(t+'i3">');e(12);e(13);
						w(t+'i4">');e(14);e(15);e(16);e(17);
						w(t+'i5">');e(18);e(19);e(20);e(21);e(22);e(23);e(24);
						w(t+'i6">');e(25);e(26);e(27);e(28);e(29);e(30);e(31);e(32);e(33);e(34);
						w(t+'i7">');e(35);e(36);e(37);e(38);e(39);e(40);e(41);e(42);
						w(t+'i8">');e(43);e(44);e(45);e(46);e(47);e(48);e(49);e(50);
						w(t+'i9">');e(51);e(52);e(53);e(54);e(55);e(56);
						w(t+'i10">');e(57);e(58);e(59);e(60);e(61);e(62);e(63);e(64);e(65);e(66);e(67);e(68);e(69);e(70);e(71);e(72);
						w(t+'i11">');e(73);e(74);e(75);e(76);e(77);e(78);e(79);e(80);e(81);e(82);e(83);e(84);e(85);e(86);e(87);e(88);e(89);
						w(t+'i12">');e(90);e(91);e(92);e(93);e(94);
						w('<legend>Perkerasan Jalan</legend>');e(95);e(96);e(97);
						w('<hr/>');e(98);e(99);e(100);e(101);
						w('<legend>Pemadam Api</legend>');e(102);e(103);e(104);
						w('<hr/>');e(105);
						w('<legend>Generator</legend>');e(106);e(107);e(108);
						w('</div>');
					</script>
				</div>
			</div>
		</div>
		<div class="tab-pane active" id="x2">
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#a1">Upah Pekerja</a></li>
					<li><a href="#a2">Batu dan Sejenisnya</a></li>
					<li><a href="#a3">Tiang Pancang</a></li>
					<li><a href="#a4">Semen/Ready Mix/Admixture</a></li>
					<li><a href="#a5">Besi/Baja/Alumunium</a></li>
					<li><a href="#a6">Kayu dan Sejenisnya</a></li>
					<li><a href="#a7">Dinding/Lantai/Plafond</a></li>
					<li><a href="#a8">Atap</a></li>
					<li><a href="#a9">Cat dan Sejenisnya</a></li>
					<li><a href="#a10">Waterproove</a></li>
					<li><a href="#a11">Perancah</a></li>
					<li><a href="#a12">PABX</a></li>
					<li><a href="#a13">Sumur Artesis</a></li>
					<li><a href="#a14">Air Panas</a></li>
					<li><a href="#a15">Listrik</a></li>
					<li><a href="#a16">Plumbing</a></li>
					<li><a href="#a17">Penangkal Petir</a></li>
					<li><a href="#a18">Pengolahan Limbah</a></li>
					<li><a href="#a19">Tata Suara</a></li>
					<li><a href="#a20">Video Interkom</a></li>
					<li><a href="#a21">TV</a></li>
				</ul> 
				<div class="tab-content">
					<script>
					L=new Array("Kepala Tukang Cat","Kepala Tukang Kayu","Kepala Tukang Batu","Mandor ","Pekerja","Tukang Besi","Tukang Kaca","Tukang Wallpaper","Tukang cat","Tukang kayu","Tukang batu","Tukang gali","Bata tras bekisting (hollow brick)","Batu bata merah uk. 21 x 10,5 x 4,5","Batu kali","Pasir beton","Pasir pasang","Split","Paving block abu-abu tipe 4,6 ukr. 6 x 10,5 x 2","Tiang pancang uk. 40 x 40 cm panjang 17 s/d 18 m'","Admixture (Super cement extra)","Floorhardener","PC abu-abu","Slump 10","Baja WF 300.150.65.9","Baja C 150.25.2,5","Besi beton polos","Besi beton ulir","Plat baja hitam 4'' x 10mm","Kawat beton","Paku segala ukuran (rata-rata)","Seng gelombang 180x90x,05 ","Alumunium Atap SWG 29(0,35mm) 1 m, profile: A,B,C,D","Kayu/ papan kruing (4/6,5/7,3/4,6/12,2/3,2/20)","Kayu kamper (2/3,6/7,4/6,3/4,6/12,2/20,8/12)","Plywood Sungkai 4ftx8ft, 18mm, 2 muka","List kayu kamper","Profil kayu kamper 5x5 cm","Triplex 4ftx8ftx9mm","Triplex 4ftx8ftx12mm/15mm","Akustik type series 5000 2' x 4' x 1/2'","Asbes semen","Celcon Jaya 59x19x10 cm","Granito grup B950 Patricia 40x40 Polished MCP","Granito grup A810 Aminah 40x40 Polished MCP","Granit impor Balmoral Green","Gypsum import Jayaboard Metal Furring 9mm","Gypsum import Jakaboard Metal Furring 13mm ","Kaca Tempered Glass Magitemp 10'' Non Std 3408x2134mm Stopsol","Kaca Tempered Glass Magitemp 15'' Non Std 3048x2134mm Clear","Kaca Tempered Glass Magitemp 19'' Non Std 3048x2134mm Clear","Kaca Panazap Bronze/Blue /Green/ Grey 12 mm ","Kaca Asahimas Float Glass Polos/Clear 12 mm","Karpet impor opening Night ( Cut Pile L = 3.66 m)","Karpet lokal Long live ( L = 4.0 m)","Lantai kayu (facy floor) Mozaik Jati (HH) 8x335x335 mm","Keramik Masterina Plaint Std 40x40 m2s","Marmer alam lokal tebal 15-18mm Creama 400x600mm","Marmer import Creama Marfil","Ubin terasso","Ubin PC abu-abu Rata/bata 20x20x2 cm","Wallpaper Aphrodite","Vinil 30x30 tebal 1,6","Asbes semen gelombang 210 x 108 x 0,5 cm","Genteng fossano, Maridional natural","Genteng fossano, Maridional glasuur std","Genteng press beton","Genteng Nok","Seng Gelombang 180x90x0,5","Sirap 57x7 cm tebal 2-3 mm","Cat tembok setara ICI/DULUX","Meni besi","Plamur tembok","Perekat","Waterprooving","Waterstop","Perancah kolom (Vertical frame) ","Perancah shearwall (Bekisting Perry)","Perancah balok","<b>Scaffolding</b>","<i>Main frame 1219x1930 mf 1219</i>","<i>Leader frame 1219x1200mm mf1212</i>","<i>Beam frame 1219x500mm bf 1205</i>","<i>Horizontal frame 1050x1829mm hf 1018</i>","<i>Base jack 400mm, bj 40</i>","<i>Head jack 400mm, bj 60</i>","<i>Base plate 42 BP 42</i>","Perpipaan fire hydrant","Perpipaan sprinkler","Pipa riser & rytem ","<i>Master control panel</i>","<i>Kabel feeder (unit lengkap)</i>","<i>Kabel ladder</i>","<i>Detektor unit lengkap</i>","<i>Instalasi bel lengkap</i>","<i>Main distribution intercom kebakaran</i>","<i>Master control intercom kebakaran</i>","<i>Interkom kebakaran</i>","Main distribution frame telepon","KEY – TEL lengkap","Kabel feeder lengkap","Kabel ITC lengkap","Screen (stainless steel)","Perpipaan","Bak kontrol","Mobilisasi/demobilisasi","Perizinan PDAM dan Geologi","Boiler (kap. 860 kg/jam)","Pompa air panas","Tangki air (kap. 2000 lt)","Plate head exchanger","Water softener (kap 12 lt/m)","Storage pump (kap 15 m3)","Alat ukur","Panel MVMDP 5 cuicible","Transformator lengkap","Panel PUTR 1","Panel Capasitor bank P","Panel","Instalasi penerangan","Armatur set","Pompa air bersih","Pompa booster","Tangki atap air bersih","Pompa sumpit/sump pump","Submersible sewage pump ","PT P dng. Komponen lengkap","Gate valve","Titik penangkal petir (EF)","Kabel CO-Axial","Titik grounding elektrode","Sewage treatment plant","Ajr difuser","Comminutor (dgn. Reduction)","Bar screen kasar (dng. Demtering ramp & transfer gate)","Bar screen halus (dng. Demtering ramp & transfer gate)","Gate flow control float","Surface skimmer (dng. Vertikal adjuster)","Sludge recirculiton","Chiolifier (dng. Reduction gear trains)","Metring pump (chemical pump)","Efluent pump (dng. Manifold N?R)","Plate settler","Panel control STP","Ventilating van","Filter feed pump","Sand filter","Carbon filter","Selector switch","Main distribution frame","Kabel feeder tata suara lengkap","Kabel tray","Junction box tata suara","Ceiling speaker","Kabel Nym dlm. PVC untuk detektor","Junction box","Rate of Rise (ROR) head detector","Gas detector","<i>Kabel coaxial induk</i>","<i>Kabel feeder, set lengkap</i>","<i>Flexible coaxial cable, set lengkap</i>");
					S=new Array("Hr","Hr","Hr","Hr","Hr","Hr","Hr","Hr","Hr","Hr","Hr","Hr","Bh","Bh","M3","M3","M3","M3","M2","M'","Lt","M2","Zak","Cm","Kg","M","Kg","Kg","Kg","Kg","Kg","Lbr","M'","M3","M3","M3","M'","M'","Lbr","Lbr","M2","M2","M2","M2","M2","M2","M2","M2","M2","M2","M2","M2","M2","M'","M'","M2","M2","M2","M2","M2","M2","M2","lbr","Lbr","Bh","Bh","Bh","Bh","Lbr","M2","Kg","Kg","Lt","unit","M2","M'","Unit","Unit","Unit","Unit","Bh","Bh","Bh","Bh","Bh","Bh","Bh","M'","M'","M'","Unit","M'","M'","Unit","Titik","Unit","Unit","Titik","Unit","Unit","M'","Titik","Set","Lot","Bh","Lot","Lot","Unit","Unit","Unit","Unit","Unit","Unit","Bh","Unit","Unit","Unit","unit","Unit","Titik","Unit","Unit","Unit","Unit","Unit","Unit","Unit","Bh","set","M'","Titik","unit","Unit","Unit","Unit","Unit","bh","Unit","Unit","Unit","bh","Unit","Bh","Unit","Unit","Unit","Unit","Unit","Unit","Unit","M'","M'","Unit","Bh","M'","Unit","Unit","Unit","M'","M'","M'");
					function p(i){w('<div class="item"><div class="show-label">'+L[i]+':</div>'+V[i+109]+'&nbsp;</div>');}
					w('<div class="tab-pane active" id="a1">');for(i=0;i<12;i++){p(i);}
					w(t+'a2">');for(i=12;i<19;i++){p(i);}
					w(t+'a3">');p(19);
					w(t+'a4">');for(i=20;i<24;i++){p(i);}
					w(t+'a5">');for(i=24;i<33;i++){p(i);}
					w(t+'a6">');for(i=33;i<40;i++){p(i);}
					w(t+'a7">');for(i=40;i<63;i++){p(i);}
					w(t+'a8">');for(i=63;i<70;i++){p(i);}
					w(t+'a9">');p(70);p(71);p(72);
					w(t+'a10">');p(73);p(74);p(75);
					w(t+'a11">');for(i=76;i<98;i++){p(i);}
					w(t+'a12">');p(98);p(99);p(100);p(101);
					w(t+'a13">');for(i=102;i<107;i++){p(i);}
					w(t+'a14">');for(i=107;i<114;i++){p(i);}
					w(t+'a15">');for(i=114;i<121;i++){p(i);}
					w(t+'a16">');for(i=121;i<128;i++){p(i);}
					w(t+'a17">');p(128);p(129);p(130);
					w(t+'a18">');for(i=131;i<148;i++){p(i);}
					w(t+'a19">');for(i=148;i<154;i++){p(i);}
					w(t+'a20">');for(i=154;i<158;i++){p(i);}
					w(t+'a21">');p(158);p(159);p(160);
					w('</div>');
					</script>
				</div>
			</div>
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
$('#myTab1 a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>