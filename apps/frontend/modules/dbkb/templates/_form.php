<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>


<form name="dummy" class="form-vertical">
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
					<?php function e($i){
						$L=array('Mandor','Kepala Tukang','Tukang','Pekerja','Pasir Urug','Pasir Pasang','Pasir Beton','Batu Kali','Batu Koral (untuk beton)','Split 0,5-0,6 (untuk beton)','Batu bata','Conblock 10x20x40','Semen PC Abu-abu','Semen Putih','Kayu Kamper','Kayu Meranti','Papan Terentang (untuk bekisting)','Dolken f8-10cm','Besi Beton','Kawat Beton','Baja Profil WF','Baja Profil C','Baja Plat','Paku','Baut','Genteng Biasa/Plentong','Genteng Kodok','Genteng Keramik Glazur','Genteng Beton','Decrabon (2 lbr)','Sirap ulin (100 bh)','Asbes Gelombang','Seng Gelombang Bjls 33','Alumunium Gelombang','Spandex (Steel Sheet)','Ubin PC Abu-abu','Teraso 30x30','Keramik 30x30 (lokal)','Marmer 30x30 (lokal)','Vinyl 30x30','Pavingblock (untuk perkerasan jalan)','Parquet (parket)','Lain-lain','Plywood 4`x8`x4mm','Plywood 4`x8`x6mm','Teakwood 4`x8`x3mm','Asbes/Eternit','Akustik 30x60','Gypsum','Bambu Anyam','Lis Kayu I/3','Kusen Alumunium','Nako + kaca','Kaca Polos 5mm','Kaca Rayban 5mm','Kaca Laminated Rayban (untuk dinding)','Lain-lain','Kloset Jongkok','Kloset duduk/Monoblock','Bathtub','Wastafel','Bak Mandi','Shower','Bidet','Urinoir','Meja Dapur','Metal Zink 1 lubang','Metal Zink 2 lubang','Pipa Galvanis o 0,5" (p=6m)','Pipa Galvanis o 0,75" (p=6m)','Pipa PVC o 0,75" (p=4m) ','Pipa PVC o 4" (p=4m)','Septictank + Rembesan','Cat Kayu','Cat Tembok','Plamuur','Minyak Cat','Amplas','Kunci','Engsel','Upah Pancang Beton','Direksikeet','Lem Aica Aibon','Saluran air kotor','Pipa air bersih','Kran air','Titik lampu','Stop Kontak','Sekring box/panel','Pembersihan','AC Sentral','AC Window','AC Split','Lift','Tangga berjalan','Aspal','Beton','Pavingblock','Kolam renang','Lapangan tenis','Daya Listrik PLN','Daya Listrik genset','Hydran','Sprinkler','Fire alarm/smoke detector','PABX 12 samb/250 ext.','25 KVA','100 KVA','300 KVA');
						$N=array('N0','N1','N2','N3','N4','N5','N6','N7','N8','N9','N10','N11','N12','N13','N14','N15','N16','N17','N18','N19','N20','N21','N22','N23','N24','N25','N26','N27','N28','N29','N30','N31','N32','N33','N34','N35','N36','N37','N38','N39','N40','N41','N42','N43','N44','N45','N46','N47','N48','N49','N50','N51','N52','N53','N54','N55','N56','N57','N58','N59','N60','N61','N62','N63','N64','N65','N66','N67','N68','N69','N70','N71','N72','N73','N74','N75','N76','N77','N78','N79','N80','N81','N82','N83','N84','N85','N86','N87','N88','N89','N90','N91','N92','N93','N94','N95','N96','N97','N98','N99','N100','N101','N102','N103','N104','N105','N106','N107','N108');
						echo "<div class='control-group'><label for='".$N[$i]."'>".$L[$i]."</label><input id='".$N[$i]."' name='".$N[$i]."'/></div>";
					} ?>
					<div class="tab-pane active" id="i1">
						<?php e(0);e(1);e(2);e(3); ?>
					</div><div class="tab-pane" id="i2">
						<?php e(4);e(5);e(6);e(7);e(8);e(9);e(10);e(11); ?>
					</div><div class="tab-pane" id="i3">
						<?php e(12);e(13); ?>
					</div><div class="tab-pane" id="i4">
						<?php e(14);e(15);e(16);e(17); ?>
					</div><div class="tab-pane" id="i5">
						<?php e(18);e(19);e(20);e(21);e(22);e(23);e(24); ?>
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
		</div><div class="tab-pane" id="x2">
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
					<?php function ee($i){
						$LL=array("Kepala Tukang Cat","Kepala Tukang Kayu","Kepala Tukang Batu","Mandor ","Pekerja","Tukang Besi","Tukang Kaca","Tukang Wallpaper","Tukang cat","Tukang kayu","Tukang batu","Tukang gali","Bata tras bekisting (hollow brick)","Batu bata merah uk. 21 x 10,5 x 4,5","Batu kali","Pasir beton","Pasir pasang","Split","Paving block abu-abu tipe 4,6 ukr. 6 x 10,5 x 2","Tiang pancang uk. 40 x 40 cm panjang 17 s/d 18 m'","Admixture (Super cement extra)","Floorhardener","PC abu-abu","Slump 10","Baja WF 300.150.65.9","Baja C 150.25.2,5","Besi beton polos","Besi beton ulir","Plat baja hitam 4'' x 10mm","Kawat beton","Paku segala ukuran (rata-rata)","Seng gelombang 180x90x,05 ","Alumunium Atap SWG 29(0,35mm) 1 m, profile: A,B,C,D","Kayu/ papan kruing (4/6,5/7,3/4,6/12,2/3,2/20)","Kayu kamper (2/3,6/7,4/6,3/4,6/12,2/20,8/12)","Plywood Sungkai 4ftx8ft, 18mm, 2 muka","List kayu kamper","Profil kayu kamper 5x5 cm","Triplex 4ftx8ftx9mm","Triplex 4ftx8ftx12mm/15mm","Akustik type series 5000 2' x 4' x 1/2'","Asbes semen","Celcon Jaya 59x19x10 cm","Granito grup B950 Patricia 40x40 Polished MCP","Granito grup A810 Aminah 40x40 Polished MCP","Granit impor Balmoral Green","Gypsum import Jayaboard Metal Furring 9mm","Gypsum import Jakaboard Metal Furring 13mm ","Kaca Tempered Glass Magitemp 10'' Non Std 3408x2134mm Stopsol","Kaca Tempered Glass Magitemp 15'' Non Std 3048x2134mm Clear","Kaca Tempered Glass Magitemp 19'' Non Std 3048x2134mm Clear","Kaca Panazap Bronze/Blue /Green/ Grey 12 mm ","Kaca Asahimas Float Glass Polos/Clear 12 mm","Karpet impor opening Night ( Cut Pile L = 3.66 m)","Karpet lokal Long live ( L = 4.0 m)","Lantai kayu (facy floor) Mozaik Jati (HH) 8x335x335 mm","Keramik Masterina Plaint Std 40x40 m2s","Marmer alam lokal tebal 15-18mm Creama 400x600mm","Marmer import Creama Marfil","Ubin terasso","Ubin PC abu-abu Rata/bata 20x20x2 cm","Wallpaper Aphrodite","Vinil 30x30 tebal 1,6","Asbes semen gelombang 210 x 108 x 0,5 cm","Genteng fossano, Maridional natural","Genteng fossano, Maridional glasuur std","Genteng press beton","Genteng Nok","Seng Gelombang 180x90x0,5","Sirap 57x7 cm tebal 2-3 mm","Cat tembok setara ICI/DULUX","Meni besi","Plamur tembok","Perekat","Waterprooving","Waterstop","Perancah kolom (Vertical frame) ","Perancah shearwall (Bekisting Perry)","Perancah balok","<b>Scaffolding</b>","<i>Main frame 1219x1930 mf 1219</i>","<i>Leader frame 1219x1200mm mf1212</i>","<i>Beam frame 1219x500mm bf 1205</i>","<i>Horizontal frame 1050x1829mm hf 1018</i>","<i>Base jack 400mm, bj 40</i>","<i>Head jack 400mm, bj 60</i>","<i>Base plate 42 BP 42</i>","Perpipaan fire hydrant","Perpipaan sprinkler","Pipa riser & rytem ","<i>Master control panel</i>","<i>Kabel feeder (unit lengkap)</i>","<i>Kabel ladder</i>","<i>Detektor unit lengkap</i>","<i>Instalasi bel lengkap</i>","<i>Main distribution intercom kebakaran</i>","<i>Master control intercom kebakaran</i>","<i>Interkom kebakaran</i>","Main distribution frame telepon","KEY – TEL lengkap","Kabel feeder lengkap","Kabel ITC lengkap","Screen (stainless steel)","Perpipaan","Bak kontrol","Mobilisasi/demobilisasi","Perizinan PDAM dan Geologi","Boiler (kap. 860 kg/jam)","Pompa air panas","Tangki air (kap. 2000 lt)","Plate head exchanger","Water softener (kap 12 lt/m)","Storage pump (kap 15 m3)","Alat ukur","Panel MVMDP 5 cuicible","Transformator lengkap","Panel PUTR 1","Panel Capasitor bank P","Panel","Instalasi penerangan","Armatur set","Pompa air bersih","Pompa booster","Tangki atap air bersih","Pompa sumpit/sump pump","Submersible sewage pump ","PT P dng. Komponen lengkap","Gate valve","Titik penangkal petir (EF)","Kabel CO-Axial","Titik grounding elektrode","Sewage treatment plant","Ajr difuser","Comminutor (dgn. Reduction)","Bar screen kasar (dng. Demtering ramp & transfer gate)","Bar screen halus (dng. Demtering ramp & transfer gate)","Gate flow control float","Surface skimmer (dng. Vertikal adjuster)","Sludge recirculiton","Chiolifier (dng. Reduction gear trains)","Metring pump (chemical pump)","Efluent pump (dng. Manifold N?R)","Plate settler","Panel control STP","Ventilating van","Filter feed pump","Sand filter","Carbon filter","Selector switch","Main distribution frame","Kabel feeder tata suara lengkap","Kabel tray","Junction box tata suara","Ceiling speaker","Kabel Nym dlm. PVC untuk detektor","Junction box","Rate of Rise (ROR) head detector","Gas detector","<i>Kabel coaxial induk</i>","<i>Kabel feeder, set lengkap</i>","<i>Flexible coaxial cable, set lengkap</i>");
						$NN=array("M1","M2","M3","M4","M5","M6","M7","M8","M9","M10","M11","M12","M13","M14","M15","M16","M17","M18","M19","M20","M21","M22","M23","M24","M25","M26","M27","M28","M29","M30","M31","M32","M33","M34","M35","M36","M37","M38","M39","M40","M41","M42","M43","M44","M45","M46","M47","M48","M49","M50","M51","M52","M53","M54","M55","M56","M57","M58","M59","M60","M61","M62","M63","M64","M65","M66","M67","M68","M69","M70","M71","M72","M73","M74","M75","M76","M77","M78","M79","M80","M81","M82","M83","M84","M85","M86","M87","M88","M89","M90","M91","M92","M93","M94","M95","M96","M97","M98","M99","M100","M101","M102","M103","M104","M105","M106","M107","M108","M109","M110","M111","M112","M113","M114","M115","M116","M117","M118","M119","M120","M121","M122","M123","M124","M125","M126","M127","M128","M129","M130","M131","M132","M133","M134","M135","M136","M137","M138","M139","M140","M141","M142","M143","M144","M145","M146","M147","M148","M149","M150","M151","M152","M153","M154","M155","M156","M157","M158","M159","M160","M161");
						$Satuan=array("Hr","Hr","Hr","Hr","Hr","Hr","Hr","Hr","Hr","Hr","Hr","Hr","Bh","Bh","M3","M3","M3","M3","M2","M'","Lt","M2","Zak","Cm","Kg","M","Kg","Kg","Kg","Kg","Kg","Lbr","M'","M3","M3","M3","M'","M'","Lbr","Lbr","M2","M2","M2","M2","M2","M2","M2","M2","M2","M2","M2","M2","M2","M'","M'","M2","M2","M2","M2","M2","M2","M2","lbr","Lbr","Bh","Bh","Bh","Bh","Lbr","M2","Kg","Kg","Lt","unit","M2","M'","Unit","Unit","Unit","Unit","Bh","Bh","Bh","Bh","Bh","Bh","Bh","M'","M'","M'","Unit","M'","M'","Unit","Titik","Unit","Unit","Titik","Unit","Unit","M'","Titik","Set","Lot","Bh","Lot","Lot","Unit","Unit","Unit","Unit","Unit","Unit","Bh","Unit","Unit","Unit","unit","Unit","Titik","Unit","Unit","Unit","Unit","Unit","Unit","Unit","Bh","set","M'","Titik","unit","Unit","Unit","Unit","Unit","bh","Unit","Unit","Unit","bh","Unit","Bh","Unit","Unit","Unit","Unit","Unit","Unit","Unit","M'","M'","Unit","Bh","M'","Unit","Unit","Unit","M'","M'","M'");
						echo "<div class='control-group'><label for='".$NN[$i]."'>".$LL[$i]."</label><input id='".$NN[$i]."' name='".$NN[$i]."'/></div>";
					} ?>
					<div class="tab-pane active" id="a1">
						<?php for($i=0;$i<12;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a2">
						<?php for($i=12;$i<19;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a3">
						<?php ee(19); ?>
					</div><div class="tab-pane" id="a4">
						<?php for($i=20;$i<24;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a5">
						<?php for($i=24;$i<33;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a6">
						<?php for($i=33;$i<40;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a7">
						<?php for($i=40;$i<63;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a8">
						<?php for($i=63;$i<70;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a9">
						<?php ee(70);ee(71);ee(72); ?>
					</div><div class="tab-pane" id="a10">
						<?php ee(73);ee(74);ee(75); ?>
					</div><div class="tab-pane" id="a11">
						<?php for($i=76;$i<98;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a12">
						<?php ee(98);ee(99);ee(100);ee(101); ?>
					</div><div class="tab-pane" id="a13">
						<?php for($i=102;$i<107;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a14">
						<?php for($i=107;$i<114;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a15">
						<?php for($i=114;$i<121;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a16">
						<?php for($i=121;$i<128;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a17">
						<?php ee(128);ee(129);ee(130); ?>
					</div><div class="tab-pane" id="a18">
						<?php for($i=131;$i<148;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a19">
						<?php for($i=148;$i<154;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a20">
						<?php for($i=154;$i<158;$i++){ee($i);} ?>
					</div><div class="tab-pane" id="a21">
						<?php ee(158);ee(159);ee(160); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
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
 


<?php echo form_tag_for($form, '@dbkb', array('class'=>'form-horizontal','name'=>'theform')) ?>
	<?php if (!$form->getObject()->isNew()): ?>
	<input type="hidden" name="sf_method" value="put" />
	<?php endif; ?>
	<div style="display:none;width:0px;width:0px"><?php echo $form['val'] ?></div>   
	<div class="form-actions">
		<a class="btn" href="<?php if($id=$form->getObject()->getId()){
		echo url_for('dbkb/show?id='.$id); }else{
		echo url_for('dbkb/index'); }
		?>">Batal</a>
    <?php echo $form->renderHiddenFields(false) ?>
		<a type="submit" class="btn btn-primary" onclick="send()">Simpan</a>
	</div>
</form>

<script>
  function send(){
    var val=new Array();
		ns = 0;
    for(i=0;i<document.forms['dummy'].elements.length;i++){
      val[i]=document.forms['dummy'].elements[i].value;
			if(i>108 && ns==0 && document.forms['dummy'].elements[i].value!=""){
					ns = 1;
			}
    }
		if(ns==1){
			document.forms['theform'].elements['dbkb[val]'].value=val.join("|")+"|ns";
		}else{
			document.forms['theform'].elements['dbkb[val]'].value=val.join("|");
		}
    document.forms['theform'].submit();
  }
  if(all=document.forms['theform'].elements['dbkb[val]'].value){
    arr=all.split('|');
    for(i=0;i<document.forms['dummy'].elements.length;i++){
      document.forms['dummy'].elements[i].value=arr[i];
    }
  }
</script>