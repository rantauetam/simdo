<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Simdo Core CSS -->
    <link href="http://localhost/simdo/asset/admin/css/simdo.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/simdo/asset/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/simdo/asset/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="http://localhost/simdo/asset/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/simdo/asset/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--date picker -->
  

</head>

<body>

  <div >
        <?php
          if(isset($USERNAME)){

        ?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php   echo "$USERNAME"; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!-- <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li> -->
                        <li class="divider"></li>
                        <li>
                            <a href="http://localhost/simdo/login/logout" class="fa fa-fw fa-power-off" >Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="http://localhost/simdo/dashbord"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li >
                    <li>
                        <a href="http://localhost/simdo/jadwal_ta"><i class="glyphicon glyphicon-calendar"></i> Jadwal Tugas Akhir</a>
                    </li>
                    <li>
                        <a href="http://localhost/simdo/jadwal_pkn"><i class="glyphicon glyphicon-calendar"></i> Jadwal PKN</a>
                    </li>
                    <li>
                      <!--  <a href="http://localhost/simdo/index.php/pengumuman"><i class="fa fa-fw fa-edit"></i> Pengumuman</a> -->
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Pengumuman <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="http://localhost/simdo/pengumuman">Pengumuman & Slideshow</a>
                            </li>
                            <li>
                                <a href="http://localhost/simdo/info_berjalan">Teks Berjalan</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="http://localhost/simdo/data_dosen"><i class="fa fa-fw fa-desktop"></i> Data Dosen</a>
                    </li>
                    <li>
                        <a href="http://localhost/simdo/data_admin"><i class="fa fa-fw fa-wrench"></i> Data Admin</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
<?php
      }else{
        echo "gagal";
        redirect('login/');
      }
    ?>
