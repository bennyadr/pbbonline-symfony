<header class="jumbotron subhead" id="overview">
	<h1>SPOP No.<?php echo $spop->getId() ?></h1>
</header>
<table class="show table table-striped">
  <tbody>
    <tr>
      <th>Nomor formulir:</th>
      <td><?php echo $spop->getNomorFormulir() ?></td>
    </tr>
    <tr>
      <th>Jenis transaksi:</th>
      <td><?php echo $spop->getJenisTransaksi() ?></td>
    </tr>
    <tr>
      <th>Nop:</th>
      <td><?php echo $spop->getNOP() ?></td>
    </tr>
    <tr>
      <th>Nop bersama:</th>
      <td><?php echo $spop->getNOPBersama() ?></td>
    </tr>
    <tr>
      <th>Nop asal:</th>
      <td><?php echo $spop->getNOPAsal() ?></td>
    </tr>
    <tr>
      <th>No sppt lama:</th>
      <td><?php //echo $spop->getNOSPPTLama() ?></td>
    </tr>
    <tr>
      <th>Nama jalan:</th>
      <td><?php echo $spop->getNamaJalan() ?></td>
    </tr>
    <tr>
      <th>Blok kav nomor:</th>
      <td><?php echo $spop->getBlokKavNomor() ?></td>
    </tr>
    <tr>
      <th>Kelurahan objek pajak:</th>
      <td><?php echo $spop->getKelurahanObjekPajak() ?></td>
    </tr>
    <tr>
      <th>Rt objek pajak:</th>
      <td><?php echo $spop->getRTObjekPajak() ?></td>
    </tr>
    <tr>
      <th>Rw objek pajak:</th>
      <td><?php echo $spop->getRWObjekPajak() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $spop->getStatus() ?></td>
    </tr>
    <tr>
      <th>Pekerjaan:</th>
      <td><?php echo $spop->getPekerjaan() ?></td>
    </tr>
    <tr>
      <th>Nama subjek pajak:</th>
      <td><?php echo $spop->getNamaSubjekPajak() ?></td>
    </tr>
    <tr>
      <th>Nama jalan subjek pajak:</th>
      <td><?php echo $spop->getNamaJalanSubjekPajak() ?></td>
    </tr>
    <tr>
      <th>Kelurahan subjek pajak:</th>
      <td><?php echo $spop->getKelurahanSubjekPajak() ?></td>
    </tr>
    <tr>
      <th>Rw subjek pajak:</th>
      <td><?php echo $spop->getRWSubjekPajak() ?></td>
    </tr>
    <tr>
      <th>Rt subjek pajak:</th>
      <td><?php echo $spop->getRTSubjekPajak() ?></td>
    </tr>
    <tr>
      <th>Kabupaten:</th>
      <td><?php echo $spop->getKabupaten() ?></td>
    </tr>
    <tr>
      <th>Kodepos:</th>
      <td><?php echo $spop->getKodepos() ?></td>
    </tr>
    <tr>
      <th>No telp:</th>
      <td><?php echo $spop->getNoTelp() ?></td>
    </tr>
    <tr>
      <th>No fax:</th>
      <td><?php echo $spop->getNoFax() ?></td>
    </tr>
    <tr>
      <th>No hp:</th>
      <td><?php echo $spop->getNoHp() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $spop->getEmail() ?></td>
    </tr>
    <tr>
      <th>Nomor ktp:</th>
      <td><?php echo $spop->getNomorKTP() ?></td>
    </tr>
    <tr>
      <th>Berlaku sampai dengan:</th>
      <td><?php echo $spop->getBerlakuSampaiDengan() ?></td>
    </tr>
    <tr>
      <th>Luas tanah:</th>
      <td><?php echo $spop->getLuasTanah() ?></td>
    </tr>
    <tr>
      <th>Zona nilai tanah:</th>
      <td><?php echo $spop->getZonaNilaiTanah() ?></td>
    </tr>
    <tr>
      <th>Nilai tanah per m2:</th>
      <td><?php echo $spop->getNilaiTanahPerM2() ?></td>
    </tr>
    <tr>
      <th>Jenis tanah:</th>
      <td><?php echo $spop->getJenisTanah() ?></td>
    </tr>
    <tr>
      <th>Jumlah bangunan:</th>
      <td><?php echo $spop->getJumlahBangunan() ?></td>
    </tr>
    <tr>
      <th>Gambar:</th>
      <td><?php echo $spop->getGambar() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $spop->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $spop->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr class="soften no-margin">

<div class="action">
  <!--div class="pull-right"-->
    <a class="btn" href="<?php echo url_for('spop/index')?>">
	  Kembali
		</a> 
		<a class="btn btn-primary" href="<?php echo url_for('spop_edit', $spop) ?>">
			Ubah
		</a> 
  <!--/div--> 
	<?php echo link_to('Hapus', 'spop/delete?id='.$spop->getId(), array('method' => 'delete', 'class' => 'btn btn-danger', 'confirm' => 'Apakah Anda yakin?')) ?>
</div>