
<div id="page-wrapper">

  <h1>Jadwal Peraktek Kerja Nyata </h1>
  <!-- tab panes muncul-->
  <table class="table">
      <thead>
          <th>ID</th>
          <th>Kegiatan</th>
          <th>Pendaftaran</th>
          <th>Pelaksanaan</th>
        


      </thead>
      <tbody>


      <a type="button" class="btn btn-primary" href="<?php echo site_url('jadwal_pkn/input');?>">Tambah Data</a>
            <?php
            $no = 1;
            foreach($jadwal_pkn as $value){
              ?>
          <tr>

              <td><?= $value->ID_PKN;?></td>
              <td><?= $value->NAMA_KEGIATAN;?></td>
              <td><?= $value->PENDAFTARAN;?></td>
              <td><?= $value->PELAKSANAAN;?></td>

              <td><a type="button" class="btn btn-warning btn-xs" href="<?= site_url("jadwal_pkn/edit")."?jadwal_pkn=".$value->ID_PKN;?>">Edit</a> <a type="button" class="btn btn-danger btn-xs" href="<?= site_url("jadwal_pkn/delete")."?jadwal_pkn=".$value->ID_PKN;?>">Hapus</a> </td>
          </tr>
          <?php
        }
          ?>
      </tbody>
  </table>
