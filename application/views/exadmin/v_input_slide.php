
<div id="page-wrapper">
<h2><?php echo $type;?></h2>

<div class="container-fluid">
          <div class="row">


            <div class="col-xs-12 col-sm-6 col-md-8">
              <div class="panel panel-default">
                <div class="panel-heading">Edit Gambar Slideshow</div>
                  <div class="panel-body">
              <table class="table table-striped">
            <tbody>
							<?php echo form_open_multipart('slide/do_upload');?>

								<?php
											echo form_hidden('id', $this->input->get('slide'));

										 ?>

							<table class="table table-striped">
														 <tr>
															 <td>Gambar Slideshow  </td>
															 <td>
																	<input type="file" name="userfile" size="20" />
															 </td>
															  <td>  <input type="submit" class="btn btn-lg btn-primary btn-block" value="upload"  /></td>
														 </tr>
														<?php echo form_close();?>
											</tbody>
									</table>

            </tbody>
        </table>
