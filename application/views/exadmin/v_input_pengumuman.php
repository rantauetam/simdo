<div id="page-wrapper">
<h2><?php echo $type;?></h2>

<div class="container-fluid">
          <div class="row">


            <div class="col-xs-12 col-sm-6 col-md-8">
              <div class="panel panel-default">
                <div class="panel-heading">Pengumuman Utama </div>
                  <div class="panel-body">


              <table class="table table-striped">

            <tbody>

                <?php echo form_open('pengumuman/post'); ?>
                <?php if ($type=="EDIT"){
               echo form_hidden('ID_PENGUMUMAN', $this->input->get('pengumuman'));
                }
                ?>
                 <tr>
                     <td>Judul </td>
                     <td><input type="teks" name="judul" class="form-control"value="<?php if ($type=="EDIT"){echo $pengumuman[0]->JUDUL;};?>"></td>
                   </tr>
                   <tr>
                     <td>Isi</td>
                     <td> <input type="teks" name="isi" class="form-control"  value="<?php if ($type=="EDIT"){echo $pengumuman[0]->ISI;};?>"  ></td>
                   </tr>


                   <tr>

                     <td><input type="submit" name="simpan" class="btn btn-lg btn-primary btn-block" value="<?php echo $type;?>"></td>
                   </tr>
                  <?php echo form_close();?>
            </tbody>


        </table>
