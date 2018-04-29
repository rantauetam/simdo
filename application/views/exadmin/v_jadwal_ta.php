
<div id="page-wrapper">

  <h1>Jadwal Tugas Akhir </h1>
  <!-- tab panes muncul-->
  <table class="table">
      <thead>
          <th>No</th>
          <th>Kegiatan</th>
          <th>Pendaftaran</th>
          <th>Pelaksanaan</th>

      </thead>
      <tbody>


      <a type="button" class="btn btn-primary" href="<?php echo site_url('jadwal_ta/input');?>">Tambah Data</a>
            <?php
            $no = 0;
            foreach($jadwal_ta as $value){
              ?>
          <tr>
              <?php $no++; ?>
              <td><?= $no;?></td>
              <td><?= $value->NAMA_KEGIATAN;?></td>
              <td><?= $value->PENDAFTARAN;?></td>
              <td><?= $value->PELAKSANAAN;?></td>

              <td><a type="button" class="btn btn-warning btn-xs" href="<?= site_url("jadwal_ta/edit")."?jadwal_ta=".$value->ID_TA;?>">Edit</a> <a type="button" class="btn btn-danger btn-xs" href="<?= site_url("jadwal_ta/delete")."?jadwal_ta=".$value->ID_TA;?>">Hapus</a> </td>
          </tr>
          <?php
        }
          ?>
      </tbody>
  </table>
