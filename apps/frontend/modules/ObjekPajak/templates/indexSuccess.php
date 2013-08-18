<header class="jumbotron subhead" id="overview">
  <h1>Pendataan</h1>
  <div class="subnav">
    <ul class="nav nav-pills">
      <li><a href="#typography">Master Data</a></li>
      <li><a href="#typography">Pendataan Objek Pajak</a></li>
    </ul>
  </div>
</header>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Nomor Persil</th>
      <th>Blok/Kavling/Nomor</th>
      <th>RW/RT</th>
      <th>Jalan</th>
      <th>Cabang</th>
      <th>Luas Tanah</th>
      <th>Kode ZNT</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($objek_pajaks as $objek_pajak): ?>
    <tr>
      <td><?php echo $objek_pajak->getNopersil() ?></td>
      <td><?php echo $objek_pajak->getBlokkavno() ?></td>
      <td><?php echo $objek_pajak->getRwrt() ?></td>
      <td><?php echo $objek_pajak->getJalan() ?></td>
      <td><?php echo $objek_pajak->getCabang() ?></td>
      <td><?php echo $objek_pajak->getLuastanah() ?></td>
      <td><?php echo $objek_pajak->getKodezntId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<header class="jumbotron">
    <p class="download-info">
      <?php echo link_to('Create Objek Pajak', '@objek_pajak_new', array('class'=>'btn btn-primary btn-large')) ?>
    </p>
</header>
