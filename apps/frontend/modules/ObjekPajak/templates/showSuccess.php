<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $objek_pajak->getId() ?></td>
    </tr>
    <tr>
      <th>Nopersil:</th>
      <td><?php echo $objek_pajak->getNopersil() ?></td>
    </tr>
    <tr>
      <th>Blokkavno:</th>
      <td><?php echo $objek_pajak->getBlokkavno() ?></td>
    </tr>
    <tr>
      <th>Rwrt:</th>
      <td><?php echo $objek_pajak->getRwrt() ?></td>
    </tr>
    <tr>
      <th>Jalan:</th>
      <td><?php echo $objek_pajak->getJalan() ?></td>
    </tr>
    <tr>
      <th>Cabang:</th>
      <td><?php echo $objek_pajak->getCabang() ?></td>
    </tr>
    <tr>
      <th>Luastanah:</th>
      <td><?php echo $objek_pajak->getLuastanah() ?></td>
    </tr>
    <tr>
      <th>Kodeznt:</th>
      <td><?php echo $objek_pajak->getKodezntId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $objek_pajak->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $objek_pajak->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('ObjekPajak/edit?id='.$objek_pajak->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('ObjekPajak/index') ?>">List</a>
