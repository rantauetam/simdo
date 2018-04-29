<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin</title>

    <!-- Bootstrap -->
    <link href="http://localhost/simdo/asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
            <button type="button" name="button" class="navbar-toggle" data-toggle="collapse" data-target="#target-list">
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
            </button>
          <a href="#" class="navbar-brand">Sitif</a>
      </div>

          <div class="collapse navbar-collapse" id="target-list">
              <ul class="nav navbar-nav">
                <li class="active"> <a href="#">Home</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Login</a></li>
              </ul>

                <form role="search" class="navbar-form navbar-right" >
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Cari...">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
          </div>
    </nav>

    <div class="container-fluid" >

      <div class="row" >
        <div class="col-sm-2 col-md-2 sidebar" >



            <ul class="nav nav-pills nav-stacked" role="tablist" class="bg-info">

            <li  ><a  href="http://localhost/simdo/index.php/admin/dashbord">DASHBORD <span class="sr-only">(current)</span></a></li>

            <li ><a href="http://localhost/simdo/index.php/admin/jadwal_ta">TUGAS AKHIR</a></li>
            <li><a href="http://localhost/simdo/index.php/admin/jadwal_pkn">PKN</a></li>
            <li><a href="http://localhost/simdo/index.php/admin/pengumuman">PENGUMUMAN</a></li>

            <li ><a href="http://localhost/simdo/index.php/admin/data_dosen">DATA DOSEN</a></li>
            <li><a href="http://localhost/simdo/index.php/admin/data_admin">DATA ADMIN</a></li>
            <li><a href="http://localhost/simdo/index.php/admin/pengaturan">PENGATURAN</a></li>

          </ul>

        </div>
