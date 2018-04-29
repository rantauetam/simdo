<?php echo form_open_multipart('upload_img/upload'); ?>
     <input type="file" name="userfile">
     <textarea name="ket" placeholder="Keterangan (Optional)"></textarea>
     <input type="submit" name="upload" value="upload">
<?php echo form_close();?>
