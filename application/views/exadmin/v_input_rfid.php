<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>input rfid</title>
  </head>
  <body>

    <?php echo form_open_multipart('rfid/edit');?>
      <?php echo "Dekatkan Kartu anda dengan reader"; ?><br>
      <input type="text" name="rfid" autofocus="autofocus"  />
	  <?php echo form_close();?>

  </body>
</html>
