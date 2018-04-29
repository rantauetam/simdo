<!-- Sampingnya-->
<div id="page-wrapper">
<h1>Dashbord</h1>

  <h1>
    <?php
    echo anchor('login/logout','Keluar');
    ?>
  </h1>

  <div >
        <?php
          if(isset($USERNAME)){
            echo "hai SELAMAT DATANG ,".$USERNAME." !!";
          }else{
            echo "gagal";
            redirect('login/');
          }
        ?>
  </div>

<!-- tab panes muncul-->


</div>
