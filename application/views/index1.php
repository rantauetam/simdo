<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sitif</title>

    <!-- Bootstrap -->
    <link href="http://localhost/simdo/asset/css/bootstrap.css" rel="stylesheet">

    <!-- Simdo Core CSS -->
    <link href="http://localhost/simdo/asset/css/simdo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


    <section class="content-2 col-4" id="features1-8" style="background-color: rgb(236, 240, 241);">
  <!--  <section class="mbr-box mbr-section mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header2-5" style="background-color: rgb(233, 234, 237);">
      <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left"> -->

      <nav class="navbar " style="background-color: rgb(243, 156, 18);">
        <div class="container-fluid">
          <div class="navbar-header">
            <!-- <a class="navbar-brand" href="#">
              <img alt="Brand" src="#">
            </a> -->
            <a class="navbar-brand simdofont" href="#"> Teknik Informatika Universitas Muhammadiyah Malang</a>
          </div>
        </div>
      </nav>



      <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-9">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">



                        <div class="panel ">

                          <div class="panel-heading simdopanel simdofont">Jadwal Tugas Akhir</div>
                            <div class="panel-body simdopanelbody">

                              <div class="caption">


                                <table class="table table-bordered" >
                                    <thead class="simdofont" style="background-color: rgb(26, 188, 156);">
                                        <th>No</th>
                                        <th>Kegiatan </th>
                                        <th>Pendaftaran</th>
                                        <th>Pelaksanaan</th>
                                    </thead>
                                    <tbody>
                                      <!-- <a type="button" class="btn btn-primary" href="<?php echo site_url('jadwal_ta/input');?>">Tambah Data</a> -->
                                            <?php
                                            $no = 1;
                                            foreach($jadwal_ta as $value){
                                              ?>
                                          <tr>
                                            <td>1</td>
                                              <!-- <td><?= $value->ID_TA;?></td> -->
                                              <td><?= $value->NAMA_KEGIATAN;?></td>
                                              <td><?= $value->PENDAFTARAN;?></td>
                                              <td><?= $value->PELAKSANAAN;?></td>
                                              <!-- <td><?= $value->TGL_UPDATE;?></td> -->
                                              <!-- <td><a type="button" class="btn btn-warning btn-xs" href="<?= site_url("jadwal_ta/edit")."?jadwal_ta=".$value->ID_TA;?>">Edit</a> <a type="button" class="btn btn-danger btn-xs" href="<?= site_url("jadwal_ta/delete")."?jadwal_ta=".$value->ID_TA;?>">Hapus</a> </td> -->
                                          </tr>
                                          <?php
                                        }
                                          ?>
                                    </tbody>
                                </table>


                                </div>

                            </div>
                          </div>


                    </div>

                    <div class="col-xs-12  col-sm-12 col-md-6">


                        <div class="panel ">

                          <div class="panel-heading simdopanel simdofont">Info Peraktek Kerja Nyata</div>
                            <div class="panel-body simdopanelbody">
                              <div class="caption">
                                <table class="table table-bordered" >
                                    <thead class="simdofont" style="background-color: rgb(26, 188, 156)">
                                        <th>No</th>
                                        <th>Kegiatan </th>
                                        <th>Pendaftaran</th>
                                        <th>Pelaksanaan</th>
                                    </thead>
                                    <tbody>

                                      <!-- <a type="button" class="btn btn-primary" href="<?php echo site_url('jadwal_pkn/input');?>">Tambah Data</a> -->
                                            <?php
                                            $no = 1;
                                            foreach($jadwal_pkn as $value){
                                              ?>
                                          <tr>

                                              <td><?= $value->ID_PKN;?></td>
                                              <td><?= $value->NAMA_KEGIATAN;?></td>
                                              <td><?= $value->PENDAFTARAN;?></td>
                                              <td><?= $value->PELAKSANAAN;?></td>
                                              <!-- <td><?= $value->TGL_UPDATE;?></td> -->
                                              <!-- <td><a type="button" class="btn btn-warning btn-xs" href="<?= site_url("jadwal_pkn/edit")."?jadwal_pkn=".$value->ID_PKN;?>">Edit</a> <a type="button" class="btn btn-danger btn-xs" href="<?= site_url("jadwal_pkn/delete")."?jadwal_pkn=".$value->ID_PKN;?>">Hapus</a> </td> -->
                                          </tr>
                                          <?php
                                        }
                                          ?>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                          </div>

                    </div>
                  </div>


                    <div class="row">
                      <div class="col-xs-12  col-sm-12 col-md-6 ">
                       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="http://localhost/simdo/asset/image/12.jpg" width="100%" height="100%" alt="...">
                              <div class="carousel-caption">

                              </div>
                            </div>

                            <div class="item">
                              <img src="http://localhost/simdo/asset/image/banner-pembayaran201520162.jpg"  width="100%" height="100%" alt="...">
                              <div class="carousel-caption">

                              </div>
                            </div>

                            <div class="item">
                              <img src="http://localhost/simdo/asset/image/banner-pembayaran201520162.jpg"  width="100%" height="100%" alt="...">
                              <div class="carousel-caption">

                              </div>
                            </div>

                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
           </div>

          <div class="col-xs-12 col-sm-6 col-md-3">

            <div class="panel ">
                 <?php echo form_open_multipart('halaman_utama/edit');?>
              <div class="panel-heading simdopanel simdofont">Dosen

                   <input type="text" name="rfid" autofocus="autofocus" />
             	  <?php echo form_close();?>
               </div>
                <div class="panel-body simdopanelbody">

                  <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="up" width="100%" height="520" align="center" behavior=”alternate”>

                    <?php
                    $no = 1;
                    foreach($data_dosen as $value){
                      ?>

                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="http://localhost/simdo/gambar/<?= $value->FOTO;?>" width="60" height="60" alt="...">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><td><?= $value->NAMA_DOSEN;?></td></h4>
                            <td>NIDN  : <?= $value->NIDN;?></td><br>
                            <td>NO HP : <?= $value->NO_HP_DOSEN;?></td><br>
                            <td>Status  : <?= $value->status;?></td>
                            <br>
                        </div>
                      </li>
                    </ul>

                    <?php
                  }
                    ?>



                  </marquee>

                </div>
              </div>

         </div>

      </div>


        <div class="row">
          <div class="col-xs-12">

          <div class="well well-sm simdopanel simdofont">
            <marquee>
              TEKS YANG BERGERAK
              <!-- <a type="button" class="btn btn-primary" href="<?php echo site_url('info_berjalan/input');?>">Tambah Data</a> -->
                    <?php
                    $no = 1;
                    foreach($info_berjalan as $value){
                      ?>



                      <td><?= $value->ISI;?></td>


                      <!-- <td><a type="button" class="btn btn-warning btn-xs" href="<?= site_url("info_berjalan/edit")."?info_berjalan=".$value->ID_INFO;?>">Edit</a> <a type="button" class="btn btn-danger btn-xs" href="<?= site_url("info_berjalan/delete")."?info_berjalan=".$value->ID_INFO;?>">Hapus</a> </td> -->

                  <?php
                }
                  ?>

            </marquee>
          </div>
          </div>
        </div>



      </div>


    </section>








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/simdo/asset/js/bootstrap.min.js"></script>
  </body>

</html>
