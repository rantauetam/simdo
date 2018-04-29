
<div id="page-wrapper">

  <h1>Slide Pengumuman </h1>
  <!-- tab panes muncul-->
  <table class="table">
      <thead>
          <th>Gambar Slide</th>
      </thead>
      <tbody>


      <a type="button" class="btn btn-primary" href="<?php echo site_url('slide/input');?>">Tambah Data</a>
            <?php
            $no = 1;
            foreach($data_dosen as $value){
              ?>
          <tr>
              <td><img src="http://localhost/simdo/gambar/<?= $value->FOTO;?>" width="60" height="60" alt="" /></td>
              <td>
                <?php if ($isi = 'ada' ==  $value->status): ?>
                    <button type="button" class="btn btn-success">Ada</button>
                <?php else: ?>
                  <button type="button" class="btn btn-danger">Tidak Ada</button>
                <?php endif; ?>
              </td>
              <td><a type="button" class="btn btn-warning btn-xs" href="<?= site_url("data_dosen/edit")."?dosen=".$value->NIDN;?>">Edit</a> <a type="button" class="btn btn-danger btn-xs" href="<?= site_url("data_dosen/delete")."?dosen=".$value->NIDN;?>">Hapus</a> </td>
          <?php
        }
          ?>
      </tbody>
  </table>
