<!-- Sampingnya-->
<div id="page-wrapper">
<h2><?php echo $type;?></h2>


<div class="container-fluid">
          <div class="row">

                  <!-- <?php echo form_open_multipart('data_dosen/post'); ?>
                  <?php if ($type=="EDIT"){
                 echo form_hidden('NIDN', $this->input->get('dosen'));
                  }
                  ?> -->

                <!-- <a href="#" class="thumbnail">
                  <img src="" alt="..."> -->

            <div class="col-xs-12 col-sm-6 col-md-8">
              <div class="panel panel-default">
                <div class="panel-heading">Input Data Dosen</div>
                  <div class="panel-body">



                        <?php echo form_open_multipart('data_dosen/do_upload');?>
                        <?php if ($type=="EDIT"){

                             echo form_hidden('NIDN', $this->input->get('dosen'));
                           }?>

                      	<table class="table table-striped">


                      							<tr>
                      									<td>NIDN</td>
                      									<td><input type="text" name="nidn" class="form-control" value="<?php if ($type=="EDIT"){echo $dosen[0]->NIDN;};?>"></td>
                      									</tr>
                      							 <tr>
                      									 <td>Nama </td>
                      									 <td><input type="text" name="nama" class="form-control" value="<?php if ($type=="EDIT"){echo $dosen[0]->NAMA_DOSEN;};?>"></td>
                      								 </tr>
                      								 <tr>
                      									 <td>NO HP</td>
                      									 <td><input type="number" name="no_hp" class="form-control" value="<?php if ($type=="EDIT"){echo $dosen[0]->NO_HP_DOSEN;};?>"></td>
                      								 </tr>
                      								 <tr>
                      									 <td>Foto</td>
                      									 <td>
                      										 	<input type="file" name="userfile" class="btn" size="20" <?php if ($type=="EDIT"){echo $dosen[0]->FOTO;};?> />
                                         </td>
                      								 </tr>
                                       <tr>
                                        <td>Status</td>
                                        <td>
                                           
                                           <input type="radio" name="status" value="ada"> ada
                                           <input type="radio" name="status" value="tidak ada"> Tidak ada
                                        </td>

                                      </tr>
                      								 <tr>
                      									 <td>RFID</td>
                      									 <td><input type="teks" name="rfid" class="form-control" value="<?php if ($type=="EDIT"){echo $dosen[0]->RFID;};?>"></td>
                      								 </tr>
                      								 <tr>
                      									 <td>  <input type="submit" name="simpan" class="btn btn-lg btn-primary btn-block" value="<?php echo $type;?>" /></td>
                      								 </tr>
                      								<?php echo form_close();?>
                      					</tbody>
                      			</table>



                  </div>
              </div>
            </div>
          </div>


    </div>

    <!-- <div class="col-xs-12 col-sm-6 col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">TIMELINE</div>
        <div class="panel-body">
          Panel content
        </div>
      </div>
    </div> -->
  </div>



</div>
