<link href="http://localhost/simdo/asset/css/bootstrap.min.css" rel="stylesheet">

<?php echo validation_errors();  ?>

<?php echo form_open('admin/create_pkn'); ?>
<div class="form-group">

  <label for="KEGIATAN">Kegiatan</label>
  <input type="text" name="NAMA_KEGIATAN" class="form-control"  placeholder="Kegiatan">

  <label for="PENDAFTARAN">Pendaftaran</label>
  <input type="text"  name='PENDAFTARAN' class="form-control"  placeholder="Pendaftaran">

  <label for="PELAKSANAAN">Pelaksanaan</label>
  <input type="text" name='PELAKSANAAN' class="form-control"  placeholder="Pelaksanaan">

  <label for="TGL_UPDATE">TGL-Update</label>
  <input type="text" name='TGL_UPDATE' class="form-control"  placeholder="Tgl_update">

  <button type="submit" class="btn btn-default"  name="submit">Submit</button>

</div>
<?php echo form_close(); ?>
