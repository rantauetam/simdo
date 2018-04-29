
<div id="page-wrapper">

  <h1>Pengumuan </h1>
  <!-- tab panes muncul-->
  <table class="table">
      <thead>
          <th>No</th>
          <th>Judul </th>
          <th>Isi</th>


      </thead>
      <tbody>


      <a type="button" class="btn btn-primary" href="<?php echo site_url('pengumuman/input');?>">Tambah Data</a>
            <?php
            $no = 0;
            foreach($data_pengumuman as $value){
              $no++;
              ?>
          <tr>

              <td><?= $no;?></td>
              <td><?= $value->JUDUL;?></td>
              <td><?= $value->ISI;?></td>



              <td><a type="button" class="btn btn-warning btn-xs" href="<?= site_url("pengumuman/edit")."?pengumuman=".$value->ID_PENGUMUMAN;?>">Edit</a> <a type="button" class="btn btn-danger btn-xs" href="<?= site_url("pengumuman/delete")."?pengumuman=".$value->ID_PENGUMUMAN;?>">Hapus</a> </td>
          </tr>
          <?php
        }
          ?>
      </tbody>
  </table>


  <h1>Slideshow </h1>
  <!-- tab panes muncul-->
  <table class="table">
      <thead>
          <th>No</th>
          <th>Gambar </th>

      </thead>
      <tbody>
      <!-- <a type="button" class="btn btn-primary" href="<?php echo site_url('slide/do_upload');?>">Tambah Gambar</a> -->
            <?php
            $no = 0;
            foreach($slide as $value){
              $no++;
              ?>
          <tr>
              <td><?= $no;?></td>
              <td><img src="http://localhost/simdo/gambar/slide/<?= $value->gambar;?>" width="110" height="89" alt="" />
                <a type="button" class="btn btn-warning btn-xs" href="<?= site_url("slide/edit")."?slide=".$value->id;?>">Edit</a>
              </td>

          </tr>
          <?php
        }
          ?>
      </tbody>
  </table>
