<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>edit rfid</title>
  </head>
  <body>


    <?php echo form_open('rfid/update/'.$data_dosen['RFID']);?>
    <label for='title'> Status </label>
      <!-- <input type="text" name="status" value='<?php echo $data_dosen['status'];?>'> <br> -->
      <?php if ($status = 'ada' == $data_dosen['status']): ?>
        <button type="button" class="btn btn-success">Ada</button><br>
        <input type="text" name ="status" value="tidak ada">

      <?php else: ?>
        <button type="button" class="btn btn-success">Tidak Ada</button><br>
        <input type="text" name ="status" value="ada" >

      <?php endif; ?>

	  <?php echo form_close();?>





  </body>
</html>
