<div id="page-wrapper">
<h2><?php echo $type;?></h2>


<div class="container-fluid">
          <div class="row">


            <div class="col-xs-12 col-sm-6 col-md-8">
              <div class="panel panel-default">
                <div class="panel-heading">Data Admin</div>
                  <div class="panel-body">
              <table class="table table-striped">


            <tbody>

                <?php echo form_open('data_admin/post'); ?>
                <?php if ($type=="EDIT"){
               echo form_hidden('ID_ADMIN', $this->input->get('admin'));
                }
                ?>

                   <tr>
                     <td>nama</td>
                     <td><input type="teks" name="nama" class="form-control"  value="<?php if ($type=="EDIT"){echo $admin[0]->NAMA;};?>"></td>
                   </tr>
                   <tr>
                     <td>Username</td>

                     <td><input type="teks" name="user"  class="form-control"  value="<?php if ($type=="EDIT"){echo $admin[0]->USERNAME;};?>"></td>
                   </tr>
                   <tr>
                     <td>Password</td>
                     <td><input type="teks" name="pass"  class="form-control"  value="<?php if ($type=="EDIT"){echo $admin[0]->PASSWORD;};?>"></td>
                   </tr>

                   <tr>
                     <td>
                     </td>
                     <td><button  type="submit" name="simpan" class="btn btn-sm btn-primary btn-block  " value="<?php echo $type;?>">Submit </button> </td>
                   </tr>

                  <?php echo form_close();?>
            </tbody>
        </table>
