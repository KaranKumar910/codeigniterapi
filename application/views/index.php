<?php
	include 'header.php';
?>
<div class="container">
<div class="content-wrapper">
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Welcome <small>To The Dashboard Page</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=site_url('index')?>">Home</a></li>
              
              </ol>
            </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<style type="text/css">
  .pic{
    height: 200px;
    width: 300px;
  }
</style>


<!-- *********************************Middle contant start here *********************************** -->
<div class="row">
   <!-- /.col -->
   <div class="container">
   <?php
      $list = $this->db->get('login');
      foreach($list->result() as $row){
        echo '<div >
                  <h2>Welcome  '.$row->name.' ,To the Main Dashboard</h2>
                  <img src="' . base_url('uploads/' . $row->image) . '" alt="User Image" width="200" height="200">

              </div>';
      }
   ?>
   </div>
</div>

  

<!-- *********************************Middle contant start here *********************************** -->

<?php
  include 'footer.php';
?>