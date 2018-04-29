<html>
    <head>
        <title>DATA DOSEN</title>
    </head>
      <body>
        <table>

            <tbody>
                <h2><?php echo $type;?></h2>
                <?php echo form_open('data_dosen/post'); ?>

                  <tr>
                    <td>Nama Dosen</td>
                    <td><input type="text" name="nama" value=""></td>
                  </tr>
                  <tr>
                    <td>NO HP</td>
                    <td><input type="number" name="no_hp" value=""></td>
                  </tr>
                  <tr>
                    <td>foto</td>
                    <td><input type="teks" name="foto" value=""></td>
                  </tr>
                  <tr>
                    <td>password</td>
                    <td><input type="teks" name="pass" value=""></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="kirim"></td>
                  </tr>
                  <?php echo form_close();?>
            </tbody>
        </table>
    </body>
</html>
