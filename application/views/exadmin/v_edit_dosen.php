<!-- Sampingnya-->
<div id="page-wrapper">
<h2><?php echo $type;?></h2>


<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-12">

      <div class="panel panel-default">
        <div class="panel-body">

          <div class="row">


            <div class="col-xs-12 col-sm-6 col-md-3">

              <tbody>



                <!-- <a href="#" class="thumbnail">
                  <img src="" alt="..."> -->




            </div>

            <div class="col-xs-12 col-sm-6 col-md-9">
              <div class="panel panel-default">
                <div class="panel-heading">Profil</div>
                  <div class="panel-body">


                     <table class="table table-striped">

                       <?php echo form_open_multipart('data_dosen/post'); ?>
                       <?php if ($type=="EDIT"){
                       echo form_hidden('NIDN', $this->input->get('dosen'));
                       }
                       ?>
                                <tr>
                                    <td>NIDN</td>
                                    <td><input type="text" name="nidn" value="<?php if ($type=="EDIT"){echo $dosen[0]->NIDN;};?>"></td>
                                    </tr>
                                 <tr>
                                     <td>Nama Dosen</td>
                                     <td><input type="text" name="nama" value="<?php if ($type=="EDIT"){echo $dosen[0]->NAMA_DOSEN;};?>"></td>
                                   </tr>
                                   <tr>
                                     <td>NO HP</td>
                                     <td><input type="number" name="no_hp" value="<?php if ($type=="EDIT"){echo $dosen[0]->NO_HP_DOSEN;};?>"></td>
                                   </tr>
                                   <!-- <tr>
                                     <td>Foto</td>
                                     <td>

                                        <img src="http://localhost/simdo/gambar/<?=  $dosen[0]->FOTO;?>" width="60" height="60" alt="" />
                                      <input type="file" name="userfile" class="btn" size="20" value="<?php if ($type=="EDIT"){echo $dosen[0]->FOTO;};?>" />

                                     </td>
                                   </tr> -->
                                   <tr>
                                    <td>Status</td>

                                    <td>
                                      <?php if ($isi = 'ada' ==  $dosen[0]->status): ?>
                                        <button type="button" class="btn btn-success">Ada</button><br>
                                          <input type="radio" name="status" value="ada"> ada
                                          <input type="radio" name="status" value="tidak ada"> Tidak ada
                                      <?php else: ?>
                                        <button type="button" class="btn btn-danger">Tidak Ada</button><br>
                                        <input type="radio" name="status" value="tidak ada"> Tidak ada 
                                        <input type="radio" name="status" value="ada"> ada


                                      <?php endif; ?>
                                      <!-- <input type="radio" name="status" value="ada"> Ada <br>
                                      <input type="radio" name="status" value="tidak ada"> Tidak ada -->
                                    </td>

                                  </tr>
                                   <tr>
                                     <td>RFID</td>
                                     <td><input type="teks" name="rfid" value="<?php if ($type=="EDIT"){echo $dosen[0]->RFID;};?>"></td>
                                   </tr>
                                   <tr>
                                     <td></td>
                                     <td><input type="submit" class="btn btn-primary" name="simpan" value="<?php echo $type;?>"></td>
                                   </tr>
                                  <?php echo form_close();?>
                            </tbody>
                        </table>



                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>



</div>
