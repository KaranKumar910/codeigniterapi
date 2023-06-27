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
    .pic {
      height: 200px;
      width: 300px;
    }
  </style>

  <!-- *********************************Middle content start here *********************************** -->
  <div class="row">
    <div class="container">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $list = $this->db->get('login');
            $i = 1;
            foreach ($list->result() as $value) {
              echo '<tr>
                      <td>'.$i++.'.</td>
                      <td>'.$value->name.'</td>
                      <td>'.$value->email.'</td>
                      <td><img src="'.base_url('uploads/' . $value->image).'" alt="User Image" height="200" width="200"></td>
                      <td><a href="'.site_url('welcome/EditProfile/'.$value->id).'" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a></td>
                      <td><a href="'.site_url('welcome/delete_profile/'.$value->id).'" class="btn btn-info"><i class="fa fa-trash"></i>Delete</a></td>
                    </tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- *********************************Middle content end here *********************************** -->

<?php
  include 'footer.php';
?>
