<!-- <?php
include_once'connectdb.php';
session_start();

include_once'header.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
             <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Blank</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <div class="box-body">'
            
                <div class="col-md-6"></div>
                
                <div class="col-md-6"></div>

                 
            </div><!-- form  -->
                 
                 
            <div class="box-body"></div><!-- table -->
                 
                 
            <div class="box-body"></div><!-- tax -->
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    
    <!-- /.content -->
  </div>
</section>
  <!-- /.content-wrapper -->

 <?php

include_once'footer.php';

?> -->


< ?php 
    $fruits = array ("mango", "apple", "pear", "peach");
    $fruits = array_flip($fruits);
    echo ($fruits[0]);
?>