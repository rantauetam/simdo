<html>
<head>
	<title>CARIKODE</title>
</head>
<body>

	<?php echo $error;?>

	<?php echo form_open_multipart('upload_file/do_upload');?>

	<table class="table table-striped">
								 <tr>
									 <td>Foto</td>
									 <td>
										 	<input type="file" name="userfile" size="20" />
									 </td>
								 </tr>

								 <tr>
									 <td>  <input type="submit" value="upload" /></td>
								 </tr>
								<?php echo form_close();?>
					</tbody>
			</table>
	<br /><br />
</form>

</body>
</html>
