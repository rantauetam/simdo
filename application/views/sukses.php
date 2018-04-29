<html>
<head>
<title>CARIKODE</title>
</head>
<body>

<h1>BERHASIL DI UPLOAD !!!!</h1>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
<li><img src="http://localhost/simdo/gambar/23c2c9fd-6ba4-4138-815b-c120ee29a5cc.jpg" alt="" /></li>

<p><?php echo anchor('upload_file', 'Upload lagi'); ?></p>

</body>
</html>
