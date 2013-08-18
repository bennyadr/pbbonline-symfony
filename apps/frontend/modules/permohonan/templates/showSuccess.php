<?php use_helper('Text') ?>
<header class="jumbotron subhead" id="overview">
  <h1>Permohonan No.<?php echo $permohonan->getNomor() ?></h1>
</header>
<table class="show table table-striped">
  <tbody>
    <tr>
      <th>Nomor:</th>
      <td><?php echo $permohonan->getNomor() ?></td>
    </tr>
    <tr>
      <th>Jenis surat:</th>
      <td><?php echo $permohonan->getJenisSurat() ?></td>
    </tr>
    <tr>
      <th>Jenis pelayanan:</th>
      <td>Permohonan <?php echo $permohonan->JenisPermohonan ?></td>
    </tr>
    <tr>
      <th>Nop:</th>
      <td><?php echo $permohonan->getNopId() ?></td>
    </tr>
    <tr>
      <th>Tahun pajak:</th>
      <td><?php echo $permohonan->getTahunPajak() ?></td>
    </tr>
    <tr>
      <th>No surat:</th>
      <td><?php echo $permohonan->getNoSurat() ?></td>
    </tr>
    <tr>
      <th>Isi surat:</th>
      <td><?php echo simple_format_text($permohonan->getIsiSurat()) ?></td>
    </tr>
    <tr>
      <th>Lampiran:</th>
      <td>
      	<ol>
  		<?php if($permohonan->getLampiranSuratKuasa()):?>
		  <li>Surat Kuasa</li>
  		<?php endif; ?>
  		<?php if($permohonan->getLampiranFotokopiKtp()):?>
		  <li>Fotokopi KTP</li>
  		<?php endif; ?>
  		<?php if($permohonan->getLampiranFotokopiSertifikat()):?>
		  <li>Fotokopi Sertifikat Tanah</li>
  		<?php endif; ?>
  		<?php if($permohonan->getLampiranFotokopiImb()):?>
		  <li>Fotokopi IMB</li>
  		<?php endif; ?>
	  </ol>
      </td>
    </tr>
  </tbody>
</table>

<hr class="soften no-margin">

<div class="action">
  <div class="pull-right">
    <a class="btn" href="<?php echo url_for('permohonan_edit', $permohonan)?>">
	  Ubah Detail Dokumen
	</a> 
	<a class="btn btn-primary" href="#">
	  Cetak Tanda terima Dokumen
	</a> 
  </div>
  <a class="btn btn-danger" href="#">
	Hapus
  </a> 
</div>

