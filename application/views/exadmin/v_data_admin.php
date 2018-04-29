
<div id="page-wrapper">

  <h1>Data admin </h1>

  <!-- tab panes muncul-->
  <table class="table">
      <thead>

          <th>Nama </th>
          <th>Username</th>
          <th>Password</th>


      </thead>
      <tbody>


      <a type="button" class="btn btn-primary" href="<?php echo site_url('data_admin/input');?>">Tambah Data</a>
            <?php
            $no = 1;
            foreach($data_admin as $value){
              ?>
          <tr>

            <!--  <td><?= $value->ID_ADMIN;?></td> -->
              <td><?= $value->NAMA;?></td>
              <td><?= $value->USERNAME;?></td>
              <td><?= $value->PASSWORD;?></td>
              

              <td><a type="button" class="btn btn-warning btn-xs" href="<?= site_url("data_admin/edit")."?admin=".$value->ID_ADMIN;?>">Edit</a> <a type="button" class="btn btn-danger btn-xs" href="<?= site_url("data_admin/delete")."?admin=".$value->ID_ADMIN;?>">Hapus</a> </td>
          </tr>
          <?php
        }
          ?>
      </tbody>
  </table>
