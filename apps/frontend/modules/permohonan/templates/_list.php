<table class="table table-striped">
  <thead>
    <tr>
      <th>Nomor</th>
      <th>NOP</th>
      <th>No surat</th>
      <th class="center">Surat Kuasa</th>
      <th class="center">KTP</th>
      <th class="center">Sertifikat</th>
      <th class="center">IMB</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($permohonan as $permohonan): ?>
    <tr>
      <td><?php echo link_to($permohonan->getNomor(),'permohonan_show', $permohonan) ?></td>
      <td><?php echo $permohonan->getNopId() ?></td>
      <td><?php echo $permohonan->getNoSurat() ?></td>
      <td class="center">
      	<?php if($permohonan->getLampiranSuratKuasa()): ?>
      	  <i class="icon-ok"></i>
      	<?php else: ?>
      	  <i class="icon-remove"></i>
      	<?php endif; ?>
      </td>
      <td class="center">
      	<?php if($permohonan->getLampiranFotokopiKtp()): ?>
      	  <i class="icon-ok"></i>
      	<?php else: ?>
      	  <i class="icon-remove"></i>
      	<?php endif; ?>
      </td>
      <td class="center">
      	<?php if($permohonan->getLampiranFotokopiSertifikat()): ?>
      	  <i class="icon-ok"></i>
      	<?php else: ?>
      	  <i class="icon-remove"></i>
      	<?php endif; ?>
      </td>
      <td class="center">
      	<?php if($permohonan->getLampiranFotokopiImb()): ?>
      	  <i class="icon-ok"></i>
      	<?php else: ?>
      	  <i class="icon-remove"></i>
      	<?php endif; ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>