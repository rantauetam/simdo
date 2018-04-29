
<div id="page-wrapper">

  <h1>Data Dosen </h1>
  <!-- tab panes muncul-->
  <table class="table">
      <thead>
          <th>NIDN</th>
          <th>Nama </th>
          <th>No HP</th>
          <th>Foto</th>
          <th>Status</th>
          <th>RFID</th>
          <th>action</th>
      </thead>
      <tbody>


      <a type="button" class="btn btn-primary" href="<?php echo site_url('data_dosen/input');?>">Tambah Data</a>
            <?php
            $no = 1;
            foreach($data_dosen as $value){
              ?>
          <tr>

              <td><?= $value->NIDN;?></td>
              <td><?= $value->NAMA_DOSEN;?></td>
              <td><?= $value->NO_HP_DOSEN;?></td>
              <td>
                <a href="<?= site_url("data_dosen/edit1")."?dosen=".$value->NIDN;?>" class="thumbnail" data-toggle="tooltip" data-placement="top" title="Klik Ganti Foto">
                <img src="http://localhost/simdo/gambar/<?= $value->FOTO;?>" width="60" height="60" alt="" />


              </td>

              <td>
                <?php if ($isi = 'ada' ==  $value->status): ?>
                    <button type="button" class="btn btn-success">Ada</button>
                <?php else: ?>
                  <button type="button" class="btn btn-danger">Tidak Ada</button>
                <?php endif; ?>
              </td>

              <td><?= $value->RFID;?></td>
              <td><a type="button" class="btn btn-warning btn-xs" href="<?= site_url("data_dosen/edit")."?dosen=".$value->NIDN;?>">Edit</a> <a type="button" class="btn btn-danger btn-xs" href="<?= site_url("data_dosen/delete")."?dosen=".$value->NIDN;?>">Hapus</a> </td>
          <?php
        }
          ?>
      </tbody>
  </table>
