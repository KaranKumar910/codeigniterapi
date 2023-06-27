<?php
require 'header.php';

$edit = $this->db->where('tid',$id)->get('login');
if($edit->num_rows());
echo '<pre>';
print_r($post);
echo '</pre>';
$key = $edit->row();
?>



<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2 style="color: white" align="center">Profile detatils</h2>
                <form class="" method="POST">
                    
                    <div class="card">
                        <div class="card-heading bg-success">
                            <h3 align="center">User Details </h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="<?=$key->name?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" name="<?=$key->email?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="<?=$key->password?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="file" name="<?=$key->image?>" class="form-control">
                            </div>
                            
                            <div class="card-footer">
                                <button class="btn btn-success form-control">Submit</button>
                            </div>
                    </div>
                </form>
            </div>

    
        </div>
    </div>
</div>


<?php
require 'footer.php';
?>