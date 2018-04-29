<div id="page-wrapper">
<h2><?php echo $type;?></h2>

<div class="container-fluid">
          <div class="row">


            <div class="col-xs-12 col-sm-6 col-md-8">
              <div class="panel panel-default">
                <div class="panel-heading">Teks Berjalan</div>
                  <div class="panel-body">


              <table class="table table-striped">



            <tbody>

                <?php echo form_open('info_berjalan/post'); ?>
                <?php if ($type=="EDIT"){
               echo form_hidden('ID_INFO', $this->input->get('info_berjalan'));
                }
                ?>

                   <tr>
                     <td>Isi</td>
                     <td><input type="teks" name="isi" class="form-control" value="<?php if ($type=="EDIT"){echo $info_berjalan[0]->ISI;};?>"></td>
                   </tr>

              
                   <tr>

                     <td><input type="submit" name="simpan" class="btn btn-lg btn-primary btn-block" value="<?php echo $type;?>"></td>
                   </tr>
                  <?php echo form_close();?>
            </tbody>
        </table>
