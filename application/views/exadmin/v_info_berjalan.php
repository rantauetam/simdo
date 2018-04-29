
<div id="page-wrapper">

  <h1>info Berjalan </h1>
  <!-- tab panes muncul-->
  <table class="table">
      <thead>
          <th>ID</th>
          <th>ISI </th>
        

      </thead>
      <tbody>


      <a type="button" class="btn btn-primary" href="<?php echo site_url('info_berjalan/input');?>">Tambah Data</a>
            <?php
            $no = 1;
            foreach($info_berjalan as $value){
              ?>
          <tr>

              <td><?= $value->ID_INFO;?></td>
              <td><?= $value->ISI;?></td>

              <td><a type="button" class="btn btn-warning btn-xs" href="<?= site_url("info_berjalan/edit")."?info_berjalan=".$value->ID_INFO;?>">Edit</a> <a type="button" class="btn btn-danger btn-xs" href="<?= site_url("info_berjalan/delete")."?info_berjalan=".$value->ID_INFO;?>">Hapus</a> </td>
          </tr>
          <?php
        }
          ?>
      </tbody>
  </table>
