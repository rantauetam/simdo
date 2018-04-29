<div id="page-wrapper">
<h2><?php echo $type;?></h2>

<div class="container-fluid">
          <div class="row">


            <div class="col-xs-12 col-sm-6 col-md-8">
              <div class="panel panel-default">
                <div class="panel-heading">Input Jadwal PKN</div>
                  <div class="panel-body">


              <table class="table table-striped">

            <tbody>

                <?php echo form_open('jadwal_pkn/post'); ?>
                <?php if ($type=="EDIT"){
               echo form_hidden('ID_PKN', $this->input->get('jadwal_pkn'));
                }
                ?>

                   <tr>
                     <td>Kegiatan</td>
                     <td><input type="teks" name="kegiatan" class="form-control" value="<?php if ($type=="EDIT"){echo $jadwal_pkn[0]->NAMA_KEGIATAN;};?>"></td>
                   </tr>
                   <tr>
                     <td>Pendaftaran</td>

                     <td><input type="teks" name="pendaftaran" class="form-control"  value="<?php if ($type=="EDIT"){echo $jadwal_pkn[0]->PENDAFTARAN;};?>"></td>
                   </tr>
                   <tr>
                     <td>Pelaksanaan</td>
                     <td><input type="teks" name="pelaksanaan"  class="form-control" value="<?php if ($type=="EDIT"){echo $jadwal_pkn[0]->PELAKSANAAN;};?>"></td>
                   </tr>

                   <tr>
                     <td></td>
                     <td><input type="submit" name="simpan"  class="btn btn-lg btn-primary btn-block" value="<?php echo $type;?>"></td>
                   </tr>
                  <?php echo form_close();?>
            </tbody>
        </table>
