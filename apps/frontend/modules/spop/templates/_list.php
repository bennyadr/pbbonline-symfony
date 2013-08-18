a<?php $tes=$spop->getListStatus(); echo $tes; ?>ts
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nomor Formulir</th>
      <th>Jenis Transaksi</th>
      <th>NOP</th>
      <th>NOP Bersama</th>
      <th>NOP Asal</th>
      <th>No. SPPT Lama</th>
<!---
      <th>Nama jalan</th>
      <th>Blok kav nomor</th>
      <th>Kelurahan objek pajak</th>
      <th>Rt objek pajak</th>
      <th>Rw objek pajak</th>
      
			<th>Status</th>
      <th>Pekerjaan</th>
      <th>Nama subjek pajak</th>
      <th>Nama jalan subjek pajak</th>
      <th>Kelurahan subjek pajak</th>
      <th>Rw subjek pajak</th>
      <th>Rt subjek pajak</th>
      <th>Kabupaten</th>
      <th>Kodepos</th>
      <th>No telp</th>
      <th>No fax</th>
      <th>No hp</th>
      <th>Email</th>
      <th>Nomor ktp</th>
      <th>Berlaku sampai dengan</th>
      
			<th>Luas tanah</th>
      <th>Zona nilai tanah</th>
      <th>Nilai tanah per m2</th>
      <th>Jenis tanah</th>
      
			<th>Jumlah bangunan</th>
      
			<th>Gambar</th>
      <th>Created at</th>
      <th>Updated at</th>
-->

    </tr>
  </thead>
  <tbody>
    <?php foreach ($spop as $spop): ?>
    <tr>
      <td><a href="<?php echo url_for('spop/show?id='.$spop->getId()) ?>"><?php echo $spop->getId() ?></a></td>
      <td><?php echo $spop->getNomorFormulir() ?></td>
      <td><?php echo $spop->getJenisTransaksi() ?></td>
      <td><?php echo $spop->getNOP() ?></td>
      <td><?php echo $spop->getNOPBersama() ?></td>
      <td><?php echo $spop->getNOPAsal() ?></td>
      <td><?php //echo $spop->getNOSPPTLama() ?></td>
<!--
      <td><?php //echo $spop->getNamaJalan() ?></td>
      <td><?php //echo $spop->getBlokKavNomor() ?></td>
      <td><?php //echo $spop->getKelurahanObjekPajak() ?></td>
      <td><?php //echo $spop->getRTObjekPajak() ?></td>
      <td><?php //echo $spop->getRWObjekPajak() ?></td>
      <td><?php //echo $spop->getStatus() ?></td>
      <td><?php //echo $spop->getPekerjaan() ?></td>
      <td><?php //echo $spop->getNamaSubjekPajak() ?></td>
      <td><?php //echo $spop->getNamaJalanSubjekPajak() ?></td>
      <td><?php //echo $spop->getKelurahanSubjekPajak() ?></td>
      <td><?php //echo $spop->getRWSubjekPajak() ?></td>
      <td><?php //echo $spop->getRTSubjekPajak() ?></td>
      <td><?php //echo $spop->getKabupaten() ?></td>
      <td><?php //echo $spop->getKodepos() ?></td>
      <td><?php //echo $spop->getNoTelp() ?></td>
      <td><?php //echo $spop->getNoFax() ?></td>
      <td><?php //echo $spop->getNoHp() ?></td>
      <td><?php //echo $spop->getEmail() ?></td>
      <td><?php //echo $spop->getNomorKTP() ?></td>
      <td><?php //echo $spop->getBerlakuSampaiDengan() ?></td>
      <td><?php //echo $spop->getLuasTanah() ?></td>
      <td><?php //echo $spop->getZonaNilaiTanah() ?></td>
      <td><?php //echo $spop->getNilaiTanahPerM2() ?></td>
      <td><?php //echo $spop->getJenisTanah() ?></td>
      <td><?php //echo $spop->getJumlahBangunan() ?></td>
      <td><?php //echo $spop->getGambar() ?></td>
      <td><?php //echo $spop->getCreatedAt() ?></td>
      <td><?php //echo $spop->getUpdatedAt() ?></td>
-->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<header class="jumbotron">
    <p class="download-info">
      <a class="btn btn-primary btn-large" href="<?php echo url_for('spop/new') ?>">Tambah Baru</a>
		</p>
</header>