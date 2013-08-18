<script>
	$(document).ready(function() {
		var active = $('.navbar').attr('id');
		$('.' + active).addClass('active');
	});
</script>
<!-- Navbar
    ================================================== -->
    <div id="<?php echo $sf_params->get('module') ?>" class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo url_for('@homepage') ?>">PBB Online.</a>
          <?php if($sf_user->isAuthenticated()): ?>
          <div class="nav-collapse collapse">
            <ul class="nav">
    		  <li class="dropdown znt spop lspop dbkb">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    			  <b>Pendataan</b>
    			  <b class="caret"></b>
    			</a>
    			<ul class="dropdown-menu">
    				<li><a href="<?php echo url_for('@spop') ?>"><b>SPOP</b></a></li>
    				<li><a href="<?php echo url_for('@lspop') ?>"><b>LSPOP</b></a></li>
    				<li class="divider"></li>
    				<li><a>GPS</a></li>
    				<li><a href="<?php echo url_for('@dbkb') ?>"><b>DBKB</b></a></li>
						<li class="divider"></li>
    				<li><a href="<?php echo url_for('@znt') ?>"><b>ZNT</b></a></li>
    			</ul>
    		  </li>
              <li class="dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    			  <b>Penilaian</b>
    			  <b class="caret"></b>
    			</a>
    			<ul class="dropdown-menu">
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Penilaian Individual</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Penilaian Massal</b></a></li>
    				<li class="divider"></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Laporan Penilaian</b></a></li>
    			</ul>
    		  </li>
              <li>
                <a href="<?php echo url_for('objek_pajak') ?>">
                	<b>Penetapan</b>
                </a>
              </li>
              <li class="dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    			  <b>Pemerimaan</b>
    			  <b class="caret"></b>
    			</a>
    			<ul class="dropdown-menu">
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Pencatatan Pembayaran</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Laporan Pembayaran</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Rincian Pembayaran</b></a></li>
    				<li class="divider"></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Daftar Tunggakan</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Rincian Tunggakan</b></a></li>
    			</ul>
    		  </li>
              <li class="dropdown permohonan">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    			  <b>Pelayanan</b>
    			  <b class="caret"></b>
    			</a>
    			<ul class="dropdown-menu">
    				<li><a href="<?php echo url_for('@permohonan_new') ?>"><b>Formulir Permohonan</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>SK Permohonan</b></a></li>
    				<li class="divider"></li>
    				<li><a href="<?php echo url_for('@permohonan') ?>"><b>Daftar Permohonan</b></a></li>
    			</ul>
    		  </li>
              <li class="dropdown njop kecamatan kelurahan jalan">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    			  <b>Referensi</b>
    			  <b class="caret"></b>
    			</a>
    			<ul class="dropdown-menu">
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Tarif PBB</b></a></li>
    				<li><a href="<?php echo url_for('@njop') ?>"><b>NJOP</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>NJOPTKP</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>RT/RW</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Pemekaran Wilayah</b></a></li>
    				<li class="divider"></li>
    				<li><a href="<?php echo url_for('@kecamatan') ?>"><b>Kecamatan</b></a></li>
    				<li><a href="<?php echo url_for('@kelurahan') ?>"><b>Kelurahan</b></a></li>
    				<li class="divider"></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Tempat Pembayaran Individual</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Tempat Pembayaran Masal</b></a></li>
    				<li class="divider"></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Kepegawaian</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Harga Material</b></a></li>
    				<li><a href="<?php echo url_for('@jalan') ?>"><b>Daftar Jalan</b></a></li>
    			</ul>
    		  </li>
              <li class="dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    			  <b>Menu Cetak</b>
    			  <b class="caret"></b>
    			</a>
    			<ul class="dropdown-menu">
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>SPPT Individual</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>SPPT Massal</b></a></li>
    				<li class="divider"></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Daftar Wajib Pajak</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>STTS</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>SPOP</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>LSPOP</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Penilaian</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Surat Keputusan</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Penerimaan</b></a></li>
    				<li><a href="<?php echo url_for('objek_pajak') ?>"><b>Tunggakan</b></a></li>
    			</ul>
    		  </li>
    		  <li><a href="<?php echo url_for('sf_guard_signout') ?>"><b>Logout</b></a></li>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
